<?php

namespace Brooklands\Theme;

class Sidebar
{
    public function __construct()
    {
        add_action('widgets_init', array($this, 'registerSidebar'));
    }

    public function registerSidebar()
    {
        register_sidebar(array(
            'id'            => 'brooklands-header',
            'name'          => __('Full width (before content)', 'brooklands'),
            'description'   => __('Full width sidebar at the bottom of the page', 'brooklands'),
            'before_widget' => apply_filters('ModularityOnePage/before_widget', '<section class="flex-section modularity-mod-wrap">'),
            'after_widget'  => apply_filters('ModularityOnePage/after_widget', '</section>'),
            'before_title'  => apply_filters('ModularityOnePage/before_title', '<h3>'),
            'after_title'   => apply_filters('ModularityOnePage/after_title', '</h3>')
        ));

        register_sidebar(array(
            'id'            => 'brooklands-footer',
            'name'          => __('Full width (after content)', 'brooklands'),
            'description'   => __('Full width sidebar at the bottom of the page', 'brooklands'),
            'before_widget' => apply_filters('ModularityOnePage/before_widget', '<section class="flex-section modularity-mod-wrap">'),
            'after_widget'  => apply_filters('ModularityOnePage/after_widget', '</section>'),
            'before_title'  => apply_filters('ModularityOnePage/before_title', '<h3>'),
            'after_title'   => apply_filters('ModularityOnePage/after_title', '</h3>')
        ));
    }
}
