<?php

namespace app\core;

class App
{
    function __construct()
    {
        $url = $_GET['url'];

        $routes = [
            'Person/register' => 'Person,register',
            'Person/complete_registration' => 'Person,complete_registration',
            'Person/' => 'Person,list',
            'Person/delete' => 'Person,delete',
            'Person/edit/{id}' => 'Person,edit',
            'Person/update' => 'Person,update'
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
