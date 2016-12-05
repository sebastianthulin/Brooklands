<?php
namespace Brooklands;

class App
{
    public function __construct()
    {
        new \Brooklands\Theme\Enqueue();
    }
}
