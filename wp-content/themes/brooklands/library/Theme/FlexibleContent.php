<?php

namespace Brooklands\Theme;

class FlexibleContent extends \Modularity\Module
{
    public $args = array(
        'id' => 'flexible',
        'nameSingular' => 'Flex content',
        'namePlural' => 'Flexcontent',
        'description' => 'Flexible content with images.',
        'supports' => array(),
        'icon' => 'data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNTAzLjcxNiwyNjEuNzk4aC0xMy4zMjR2LTE5Ljg4MWMwLTQuNTc1LTMuNzA4LTguMjg0LTguMjg0LTguMjg0aC01Ni4zMjljLTQuNTc2LDAtOC4yODQsMy43MDktOC4yODQsOC4yODR2MTkuODgxICAgIGgtNi45NzdWMTU0LjExMWMwLTQuNTc1LTMuNzA4LTguMjg0LTguMjg0LTguMjg0aC0xMC40MDl2LTE5Ljg4MWMwLTQuNTc1LTMuNzA4LTguMjg0LTguMjg0LTguMjg0aC01Ni4zMjkgICAgYy00LjU3NiwwLTguMjg0LDMuNzA5LTguMjg0LDguMjg0djE5Ljg4MWgtMjQuMDIxdi0xOS44ODFjMC00LjU3NS0zLjcwOC04LjI4NC04LjI4NC04LjI4NGgtNTYuMzI4ICAgIGMtNC41NzUsMC04LjI4NCwzLjcwOS04LjI4NCw4LjI4NHYxOS44ODFIMjExLjZjLTQuNTc1LDAtOC4yODQsMy43MDktOC4yODQsOC4yODR2MTA3LjY4N2gtOC42NDl2LTE5Ljg4MSAgICBjMC00LjU3NS0zLjcwOS04LjI4NC04LjI4NC04LjI4NGgtNTYuMzI5Yy00LjU3NSwwLTguMjg0LDMuNzA5LTguMjg0LDguMjg0djE5Ljg4MUg5Ny43NDh2LTE5Ljg4MSAgICBjMC00LjU3NS0zLjcwOS04LjI4NC04LjI4NC04LjI4NEgzMy4xMzVjLTQuNTc1LDAtOC4yODQsMy43MDktOC4yODQsOC4yODR2MTkuODgxSDguMjg0Yy00LjU3NSwwLTguMjg0LDMuNzA5LTguMjg0LDguMjg0ICAgIHYxMTUuOTcxYzAsNC41NzUsMy43MDksOC4yODQsOC4yODQsOC4yODRoNDk1LjQzMmM0LjU3NiwwLDguMjg0LTMuNzA5LDguMjg0LTguMjg0VjI3MC4wODIgICAgQzUxMiwyNjUuNTA3LDUwOC4yOTIsMjYxLjc5OCw1MDMuNzE2LDI2MS43OTh6IE00MzQuMDYzLDI1MC4yMDJoMzkuNzYxdjExLjU5N2gtMzkuNzYxVjI1MC4yMDJ6IE0zMzUuNDk1LDEzNC4yMzFoMzkuNzYxdjExLjU5NyAgICBoLTM5Ljc2MVYxMzQuMjMxeiBNMjM4LjU3NywxMzQuMjMxTDIzOC41NzcsMTM0LjIzMWgzOS43NnYxMS41OTdoLTM5Ljc2VjEzNC4yMzF6IE0yMTkuODgzLDE2Mi4zOTVoMTAuNDA5aDU2LjMyOGg0MC41OWg1Ni4zMjkgICAgaDEwLjQwOXY5OS40MDNIMjE5Ljg4M1YxNjIuMzk1eiBNMTM4LjMzOCwyNTAuMjAyaDM5Ljc2MXYxMS41OTdoLTM5Ljc2MVYyNTAuMjAyeiBNNDEuNDE5LDI1MC4yMDJIODEuMTh2MTEuNTk3SDQxLjQxOVYyNTAuMjAyeiAgICAgTTI5OS44NjgsMzc3Ljc2OWgtMjgzLjN2LTk5LjQwM2gyODMuM1YzNzcuNzY5eiBNNDk1LjQzMywzNzcuNzY4aC0wLjAwMUgzMTYuNDM2di05OS40MDNoMTc4Ljk5N1YzNzcuNzY4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo='
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
    }
}
