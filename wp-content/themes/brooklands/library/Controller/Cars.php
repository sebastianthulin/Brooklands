<?php

namespace Brooklands\Controller;

/**
 * To add a custom template and load it's controller do the following:
 *
 * 1. Create a view file inside the /views directory (example: custom-template-view.blade.php)
 * 2. Create a controller file inside library/Controller (example: name it CustomTemplateView.php and name the class CustomTemplateView)
 * 3. Initialize your template and view by calling the below function (preferabily from a /library/Theme/xxxx.php class)
 *    \Municipio\Helper\Template::add(__('Custom template', 'municipio'), \Municipio\Helper\Template::locateTemplate('custom-template-view.blade.php'));
 */

class Cars extends \Municipio\Controller\BaseController
{

    protected $apiUrl = 'http://brooklands.dev/cars.xml';
    protected $optionKey = 'avabile_cars';
    protected $timeToLive = 60*15;

    public function init()
    {
        $cars = $this->getCars();

        if (!$cars) {
            $cars = $this->updateCars();
        }

        if ($cars) {
            $this->data['cars'] = array(
                'state' => true,
                'data' => $cars['car']
            );
        } else {
            $this->data['cars'] = array(
                'state' => false,
                'data' => array(
                    'title' => __("Whoopsie!", 'brooklands'),
                    'content' => __("Sorry, we could not contact the car service for a while. Please try again soon!", 'brooklands')
                )
            );

            //Filters

        }
    }

    private function curl($url)
    {

        //Validate url
        if (!$url) {
            wp_die("Carfetch: Invalid url.");
        }

        //Check for curl
        if (!function_exists('curl_init')) {
            wp_die("Carfetch: Curl not installed.");
        }

        //Run curl
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 5);

        return curl_exec($curl);
    }

    public function updateCars()
    {
        $cars = $this->Xml2Array(
            $this->sanitize(
                $this->curl($this->apiUrl)
            )
        );

        if (!empty($cars)) {
            set_transient($this->optionKey, $cars, $this->timeToLive);
            return $cars;
        }
        return false;
    }

    public function getCars()
    {
        return get_transient($this->optionKey);
    }

    private function sanitize($string)
    {
        return preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $string);
    }

    private function Xml2Array($object)
    {
        $object  = simplexml_load_string($object);

        if (!$object) {
            return libxml_get_errors();
        }

        $object  = json_encode($object);
        $object  = json_decode($object, true);

        return $object;
    }
}
