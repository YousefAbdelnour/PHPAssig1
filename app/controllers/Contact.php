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
        $messages = \app\models\Message::read();
        parent::view('Contact/read', $messages);
    }
    function retrieve()
    {
        $retrieve_email = $_POST['email'];
        $retrieve_message = $_POST['message'];
        if (isset($retrieve_email) && isset($retrieve_message)) {
            $message = new \app\models\Message();
            $message->email = $retrieve_email;
            $message->msg = $retrieve_message;
            $message->IP = $_SERVER['REMOTE_ADDR'];
            $message->write();
            header('location:/Contact/read');
        }
    }
}
