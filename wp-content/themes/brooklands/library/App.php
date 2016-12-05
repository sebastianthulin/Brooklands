<?php
namespace Brooklands;

class App
{
    public function __construct()
    {
        new \Brooklands\Theme\Enqueue();
        new \Brooklands\Theme\DisableComments();
        new \Brooklands\Theme\Filters();
        new \Brooklands\Theme\Sidebar();
        new \Brooklands\Theme\ModularityBrooklands();
    }
}
