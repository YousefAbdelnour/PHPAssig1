<?php

namespace app\controllers;

class Contact extends \app\core\Controller
{
    function index()
    {
        parent::view('Contact/index');
    }
    function read()
    {
        parent::view('Contact/read');
    }
}
