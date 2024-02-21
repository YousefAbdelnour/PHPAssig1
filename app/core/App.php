<?php

namespace app\core;

class App
{
    function __construct()
    {
        $url = $_GET['url'];

        $routes = [
            'Count/index' => 'Count,index'
        ];

        foreach ($routes as $routeUrl => $controllerMethod) {
            if ($url == $routeUrl) {
                [$controller, $method] = explode(',', $controllerMethod);
                $controller = '\\app\\controllers\\' . $controller;
                $controller = new $controller();
                $controller->$method();
                break;
            }
        }
    }
}
