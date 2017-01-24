<?php
namespace Brooklands\Theme;

class Cars
{
    public function __construct()
    {
        add_action('init', array($this, 'registerTemplate'));
    }

    public function registerTemplate()
    {
        \Municipio\Helper\Template::add(__('Cars', 'brooklands'), \Municipio\Helper\Template::locateTemplate('cars.blade.php'));
    }
}
