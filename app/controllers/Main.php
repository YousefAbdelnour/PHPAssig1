<?php

namespace app\controllers;

class Main extends \app\core\Controller
{
    public function index()
    {
        parent::view('Main/index');
    }
    public function about_us()
    {
        parent::view('Main/about_us');
    }

}