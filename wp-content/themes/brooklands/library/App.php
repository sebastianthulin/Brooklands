<?php
namespace Brooklands;

class App
{
    public function __construct()
    {

        new \Brooklands\Admin\Options();
        new \Brooklands\Admin\OpenHours();

        new \Brooklands\Theme\Enqueue();
        new \Brooklands\Theme\DisableComments();
        new \Brooklands\Theme\Filters();
        new \Brooklands\Theme\Sidebar();
        new \Brooklands\Theme\AdjustedImage();
        new \Brooklands\Theme\OverlayImage();
        new \Brooklands\Theme\LatestCars();
    }
}
