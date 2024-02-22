<?php

namespace app\controllers;

class Contact extends \app\core\Controller
{
    function index()
    {
        parent::view('Contact/index');
    }
}
