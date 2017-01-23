<?php

namespace Brooklands\Admin;

class Options
{

    public $args = array(
        'icon' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/PjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA0NDcuNjQ1IDQ0Ny42NDUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ0Ny42NDUgNDQ3LjY0NTsiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGQ9Ik00NDcuNjM5LDI0NC40MDJjMC04LjgwNS0xLjk4OC0xNy4yMTUtNS41NzgtMjQuOTA5Yy0wLjM3LTEuOTU2LTAuNzkzLTMuOTA5LTEuMzIyLTUuODlsLTM4Ljg4NC05Ni4zNjVsLTAuMjYzLTAuODY3ICAgYy0xMy42MDUtNDAuNTA5LTMyLjk2My03OC4wMDEtODIuMDQ5LTc4LjAwMUgxMzEuODY4Yy01MC4yOTYsMC02OC4wNjksMzguNDIxLTgxLjk3Miw3Ny43NzZsLTQwLjY3Myw5Ni42ICAgQzMuMzQzLDIyMi4xNjcsMCwyMzIuOTQ0LDAsMjQ0LjQwMnYyOS45ODZjMCw0LjYzNiwwLjU0OCw5LjE3MSwxLjU5LDEzLjUzOUMwLjU3NywyOTAuNTY2LDAsMjkzLjQxLDAsMjk2LjQwOHY4OS4xODUgICBjMCwxMy4wNzgsMTAuNjAyLDIzLjY4MiwyMy42OCwyMy42ODJoNDkuMTRjMTMuMDcxLDAsMjMuNjczLTEwLjYwNCwyMy42NzMtMjMuNjgydi00NC41OTloMjU3LjQ2djQ0LjU5OSAgIGMwLDEzLjA3OCwxMC42MDQsMjMuNjgyLDIzLjY4MywyMy42ODJoNDYuMzI2YzEzLjA4MywwLDIzLjY4My0xMC42MDQsMjMuNjgzLTIzLjY4MnYtODkuMTk1YzAtMi45ODctMC41ODMtNS44NDQtMS41ODgtOC40NzQgICBjMS4wMzgtNC4zNzUsMS41ODgtOC45MDUsMS41ODgtMTMuNTR2LTI5Ljk4MUg0NDcuNjM5eiBNNzguNzU0LDEyNS44MjFjMTUuNDgzLTQzLjY4MywyNy45MzQtNTcuMDE4LDUzLjExNC01Ny4wMThoMTg3LjY2NCAgIGMyNC45OTUsMCwzOC45MTMsMTQuODczLDUzLjA1Niw1Ni44M2wyOC4zNzUsNTcuNTAyYy05LjI2NS0zLjQzMS0xOS40NjEtNS4zMzUtMzAuMTczLTUuMzM1SDc2Ljg0OSAgIGMtOS42NDUsMC0xOC44NjIsMS41NTEtMjcuMzY2LDQuMzU4TDc4Ljc1NCwxMjUuODIxeiBNMTAzLjEyOSwyODUuNzc2SDUxLjI4MWMtOS4zMzUsMC0xNi45MDYtNy41NzgtMTYuOTA2LTE2LjkxMiAgIGMwLTkuMzM3LDcuNTcxLTE2LjkxLDE2LjkwNi0xNi45MWg1MS44NDhjOS4zMzksMCwxNi45MSw3LjU3MywxNi45MSwxNi45MUMxMjAuMDM5LDI3OC4xOTgsMTEyLjQ2MywyODUuNzc2LDEwMy4xMjksMjg1Ljc3NnogICAgTTI4Ni4yODQsMjgyLjM4OWgtMTIwLjZjLTUuOTEzLDAtMTAuNzA0LTQuNzk0LTEwLjcwNC0xMC43MDRjMC01LjkyMSw0Ljc5MS0xMC43MTMsMTAuNzA0LTEwLjcxM2gxMjAuNiAgIGM1LjkyLDAsMTAuNzEsNC43OTIsMTAuNzEsMTAuNzEzQzI5Ni45OTQsMjc3LjU5NSwyOTIuMjA0LDI4Mi4zODksMjg2LjI4NCwyODIuMzg5eiBNMzk1LjA1MSwyODUuNzc2aC01MS44NDYgICBjLTkuMzQzLDAtMTYuOTEtNy41NzgtMTYuOTEtMTYuOTEyYzAtOS4zMzcsNy41NzMtMTYuOTEsMTYuOTEtMTYuOTFoNTEuODQ2YzkuMzQzLDAsMTYuOTE2LDcuNTczLDE2LjkxNiwxNi45MSAgIEM0MTEuOTY3LDI3OC4xOTgsNDA0LjM5NCwyODUuNzc2LDM5NS4wNTEsMjg1Ljc3NnoiIGZpbGw9IiNGRkZGRkYiLz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PC9zdmc+'
    );


    public function __construct()
    {
        add_action('init', array($this, 'addGeneralOptions'));
    }

    public function addGeneralOptions()
    {
        acf_add_options_page(array(
            'page_title'    => 'Brooklands',
            'menu_title'    => __('General Settings', ''),
            'menu_slug'     => 'brooklands-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false,
            'icon'          => $this->args['icon'],
        ));
    }

    public static function getGeneralOptions($field = null)
    {
        $settings =  array(
            'name' => get_field('settings_company_name', 'option'),
            'phone_number' => get_field('settings_company_phone_number', 'option'),
            'email_adress' => get_field('settings_company_email_adress', 'option'),
            'facebook' => get_field('settings_company_facebook', 'option'),
            'instagram' => get_field('settings_company_instagram', 'option'),
            'pinterest' => get_field('settings_company_pinterest', 'option')
        );

        if (!is_null($field)) {
            return $settings[$field];
        }

        return $settings;
    }

    public static function getSocialArray($socialMedia = array(), $mappedResponse = true)
    {
        if (self::getGeneralOptions('facebook')) {
            $socialMedia[] = array(__("Facebook", 'brooklands'), self::getGeneralOptions('facebook'));
        }

        if (self::getGeneralOptions('instagram')) {
            $socialMedia[] = array(__("Instagram", 'brooklands'), self::getGeneralOptions('instagram'));
        }

        if (self::getGeneralOptions('pinterest')) {
            $socialMedia[] = array(__("Pinterest", 'brooklands'), self::getGeneralOptions('pinterest'));
        }

        if ($mappedResponse === true) {
            $socialMedia = self::mapResponse($socialMedia);
        }

        return $socialMedia;
    }

    public static function mapResponse($array)
    {
        return array_map(function ($item) {
            return '<a target="_blank" href="'.$item[1].'">' .$item[0]. '</a>';
        }, $array);
    }
}
