<?php

namespace Brooklands\Theme;

class ModularityBrooklands extends \Modularity\Module
{
    public $args = array(
        'id' => 'imagesection',
        'nameSingular' => 'Image Section',
        'namePlural' => 'Image Sections',
        'description' => 'Image Section',
        'supports' => array(),
        'icon' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIj48cGF0aCBkPSJNMzMyLjEgMEg1NS41djUxMmg0MDEuMVYxMjQuNUwzMzIuMSAwek0yMDUuOSAzNTYuNWwtNDIuNyAzNC4xYy0zLjQgMi43LTguMyAyLjUtMTEuNC0uNmwtMTctMTdjLTMuMy0zLjQtMy4yLTguOC4yLTEyLjEgMy4zLTMuMiA4LjUtMy4yIDExLjkgMGwxMS43IDExLjcgMzYuNy0yOS40YzMuNy0zIDktMi40IDEyIDEuMyAyLjggMy43IDIuMiA5LjEtMS40IDEyem0wLTkzLjhsLTQyLjcgMzQuMWMtMy40IDIuNy04LjMgMi41LTExLjQtLjZsLTE3LjEtMTcuMWMtMy4zLTMuNC0zLjItOC44LjItMTIuMSAzLjMtMy4yIDguNS0zLjIgMTEuOSAwbDExLjcgMTEuNyAzNi43LTI5LjRjMy43LTMgOS0yLjQgMTIgMS4zczIuMyA5LjEtMS4zIDEyLjF6bTAtOTMuOWwtNDIuNyAzNC4xYy0zLjQgMi43LTguMyAyLjUtMTEuNC0uNmwtMTcuMS0xNy4xYy0zLjMtMy40LTMuMi04LjguMi0xMi4xIDMuMy0zLjIgOC41LTMuMiAxMS45IDBsMTEuNyAxMS43IDM2LjctMjkuNGMzLjctMyA5LTIuNCAxMiAxLjNzMi4zIDkuMS0xLjMgMTIuMXpNMzYyLjcgMzg0SDIyNi4xYy00LjcgMC04LjUtMy44LTguNS04LjVzMy44LTguNSA4LjUtOC41aDEzNi41YzQuNyAwIDguNSAzLjggOC41IDguNS4xIDQuNy0zLjcgOC41LTguNCA4LjV6bTAtOTMuOUgyMjYuMWMtNC43IDAtOC41LTMuOC04LjUtOC41czMuOC04LjUgOC41LTguNWgxMzYuNWM0LjcgMCA4LjUgMy44IDguNSA4LjVzLTMuNyA4LjUtOC40IDguNXptMC05My44SDIyNi4xYy00LjcgMC04LjUtMy44LTguNS04LjVzMy44LTguNSA4LjUtOC41aDEzNi41YzQuNyAwIDguNSAzLjggOC41IDguNS4xIDQuNi0zLjcgOC41LTguNCA4LjV6TTMyMCAxMzYuNVYxNy4xbDExOS41IDExOS41SDMyMHoiLz48L3N2Zz4='
    );

    public function __construct()
    {
        // This will register the module
        $this->register(
            $this->args['id'],
            $this->args['nameSingular'],
            $this->args['namePlural'],
            $this->args['description'],
            $this->args['supports'],
            $this->args['icon']
        );

        // Add our template folder as search path for templates
        add_filter('Modularity/Module/TemplatePath', function ($paths) {
            $paths[] = '';
            return $paths;
        });
    }
}
