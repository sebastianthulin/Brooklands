<?php

namespace Brooklands\Theme;

class Enqueue
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'style'));
        add_action('wp_enqueue_scripts', array($this, 'fonts'));
        add_action('wp_enqueue_scripts', array($this, 'script'));
    }

    /**
     * Enqueue styles
     * @return void
     */
    public function style()
    {
        wp_enqueue_style('hbg-prime', 'http://helsingborg-stad.github.io/styleguide-web-cdn/styleguide.dev/dist/css/hbg-prime.min.css', '', '1.0.0');
        wp_enqueue_style('brooklands-css', get_stylesheet_directory_uri(). '/assets/dist/css/app.min.css', '', filemtime(get_stylesheet_directory() . '/assets/dist/css/app.min.css'));
    }

     /**
     * Enqueue fonts
     * @return void
     */
    public function fonts()
    {
        wp_enqueue_style('google-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', '', '1.0.0');
        wp_enqueue_style('google-cardo', 'https://fonts.googleapis.com/css?family=Cardo:400,400i,700', '', '1.0.0');
    }

    /**

    /**
     * Enqueue scripts
     * @return void
     */
    public function script()
    {
        wp_enqueue_script('hbg-prime', 'http://helsingborg-stad.github.io/styleguide-web-cdn/styleguide.dev/dist/js/hbg-prime.min.js', '', '1.0.0', true);
        wp_enqueue_script('brooklands-js', get_stylesheet_directory_uri(). '/assets/dist/js/app.min.js', '', filemtime(get_stylesheet_directory() . '/assets/dist/js/app.min.js'), true);
    }
}
