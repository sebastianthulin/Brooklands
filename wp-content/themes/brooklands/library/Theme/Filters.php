<?php

namespace Brooklands\Theme;

class Filters
{
    public function __construct()
    {

        //Add filter
        add_action('Municipio/mobile_menu_breakpoint', array($this, 'mobileMenuBreakpoint'));
        add_action('Municipio/desktop_menu_breakpoint', array($this, 'desktopMenuBreakpoint'));
        add_action('Municipio/header_grid_size', array($this, 'headerGridSize'));
        add_filter('excerpt_more', array($this, 'exerptMore'));

        /*
        add_filter('Modularity/Module/Classes', function ($classes, $postType, $args) {
            if ($postType !== 'mod-posts') {
                return $classes;
            }

            if ($key = array_search('box-news-horizontal', $classes)) {
                unset($classes[$key]);
            }

            return $classes;
        }, 10, 3);
        */

        //Remove base-theme filters
        add_action('init', array($this, 'unregisterMunicipioImageFilter'));

        add_filter('Modularity/Module/Classes', function ($classes, $moduleType, $sidebarArgs) {
            if ($key = array_search('box-filled', $classes)) {
                unset($classes[$key]);
                $classes[] = 'box-panel';
            }
            return $classes;
        }, 100, 3);

        add_filter('openhours/shortcode', function ($input, $isException) {
            if (empty($input)) {
                return "";
            }
            if (!$isException) {
                $input = '<span>' . __("Open today: ", 'brooklands') . ' </span>' . $input;
            }
            return '<time class="open-hours-label">' . $input . '</time>';
        }, 10, 2);

        // Sidebar WpWidget module
        add_filter('Modularity/Module/WpWidget/before', array($this, 'wpWidgetBefore'), 11, 3);

        //Body classes (removing material design, this is flat)
        add_filter('body_class', array($this, 'wpAddBodyClass'));

        //Make 16:9 to sqare
        foreach (array(
            'modularity/image/posts/items',
            'modularity/image/posts/news'
        ) as $imageFilter) {
            add_filter($imageFilter, array($this, 'imageAspectRatioSquare'), 50, 2);
        }
    }

    public function exerptMore($more)
    {
        return '…';
    }

    /**
     * Remove material design with class
     * @return array
     */
    public function wpAddBodyClass($classes)
    {
        if (is_array($classes)) {
            $classes[] = "material-no-radius";
            $classes[] = "material-no-shadow";
        }
        return $classes;
    }

    public function wpWidgetBefore($before, $sidebarArgs, $module)
    {
        if (get_field('mod_standard_widget_type', $module->ID) == 'WP_Widget_Search') {
            return '<div>';
        }
        // Box panel in content area and content area bottom
        if (in_array($sidebarArgs['id'], array('content-area', 'content-area-bottom')) && !is_front_page()) {
            $before = '<div class="box box-panel box-panel-secondary">';
        }

        // Sidebar boxes (should be filled)
        if (in_array($sidebarArgs['id'], array('left-sidebar-bottom', 'left-sidebar', 'right-sidebar'))) {
            $before = '<div class="box box-panel">';
        }

        return $before;
    }

    /**
     * Unregister built in image sizes. Use modularity
     * @return void
     */
    public function unregisterMunicipioImageFilter()
    {
        \Municipio\Theme\ImageSizeFilter::removeFilter('Modularity/slider/image', 'filterHeroImageSize', 100);
    }

    /**
     * Show mobile menu in all but large size.
     * @return void
     */
    public function mobileMenuBreakpoint($classes)
    {
        return "";
    }

    /**
     * Show mobile menu in all but large size.
     * @return void
     */
    public function desktopMenuBreakpoint($classes)
    {
        return "hidden";
    }

    /**
     * Width of header, make room for mobile menu in medium
     * @return void
     */
    public function headerGridSize($classes)
    {
        return "grid-xs-12";
    }

    public function imageAspectRatioSquare($size, $args)
    {
        if (round($size[0] / $size[1], 2) == 1.78) {
            $size[1] = $size[0];
        }
        return $size;
    }
}
