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
    protected $runtimeCache = false;

    public function init()
    {
        $cars = $this->getCars();

        if (!$cars) {
            $cars = $this->updateCars();
        }

        if ($cars) {

            //Define car data
            $this->data['cars'] = array(
                'state' => true,
                'data' => $cars['car'],
                'option' => array()
            );

            //Get option arrays
            $this->data['cars']['option']['brand']  = $this->getOptions('brand');
            $this->data['cars']['option']['year']   = $this->getOptions('yearmodel');
            $this->data['cars']['option']['price']  = $this->getOptions('price-sek');
        } else {
            $this->data['cars'] = array(
                'state' => false,
                'data' => array(
                    'title' => __("Whoopsie!", 'brooklands'),
                    'content' => __("Sorry, we could not contact the car service for a while. Please try again soon!", 'brooklands')
                )
            );
        }
    }

    public function getOptions($key, $stack = array())
    {
        if (is_null($key)) {
            wp_die("Error: Option identifier missing.");
        }

        if (empty($this->data['cars']['data'])) {
            wp_die("Error: No data avabile.");
        }

        foreach ((array) $this->data['cars']['data'] as $car) {
            if (isset($car[$key]) && !in_array($car[$key], $stack)) {
                if (in_array($key, array('yearmodel', 'price-sek'))) {
                    $stack[] = (int) preg_replace("/[^0-9]/", "", $car[$key]);
                } else {
                    $stack[] = $car[$key];
                }
            }
        }

        //Simple sorting
        if ($key != "price-sek") {
            sort($stack, SORT_LOCALE_STRING);
        } else {
            sort($stack, SORT_NUMERIC);
        }

        //Return
        return (array) array_unique($stack);
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

        //Get data from runtime cache
        if ($this->runtimeCache !== false) {
            return $this->runtimeCache;
        }

        return $this->runtimeCache = get_transient($this->optionKey);
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
