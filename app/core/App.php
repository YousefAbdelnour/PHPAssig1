<?php

namespace app\core;

class App
{
    function __construct()
    {
        $url = $_GET['url'];

        $routes = [
            'Count/index' => 'Count,index',
            'Contact/index' => 'Contact,index',
            'Contact/read' => 'Contact,read',
            'Main/index' => 'Main,index',
            'Main/about_us' => 'Main,about_us',
            'Contact/retrieve'=>'Contact,retrieve',
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
