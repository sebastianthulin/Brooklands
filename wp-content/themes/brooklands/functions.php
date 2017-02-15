<?php

define('BROOKLANDS_PATH', get_stylesheet_directory() . '/');

//Include vendor files
if (file_exists(dirname(ABSPATH) . '/vendor/autoload.php')) {
    require_once dirname(ABSPATH) . '/vendor/autoload.php';
}

require_once BROOKLANDS_PATH . 'library/Vendor/Psr4ClassLoader.php';
$loader = new BROOKLANDS\Vendor\Psr4ClassLoader();
$loader->addPrefix('Brooklands', BROOKLANDS_PATH . 'library');
$loader->addPrefix('Brooklands', BROOKLANDS_PATH . 'source/php/');
$loader->register();

new Brooklands\App();

add_action('after_setup_theme', function () {
    load_theme_textdomain('brooklands', get_template_directory() . '/languages');
});
