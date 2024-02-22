<?php

namespace app\models;

class Message
{
    public $name;
    public $email;
    public $IP;

    public function read()
    {
        $filename = 'resources/messages.txt';
        if (file_exists($filename)) {
            return file($filename);
        } else {
            return [];
        }
    }

    public function write()
    {
        $message = json_encode($this);
        $filename = 'resources/messages.txt';
        $filehandle = fopen($filename, 'a');
        flock($filehandle, LOCK_EX);
        fwrite($filehandle, $message . "\n");
        flock($filehandle, LOCK_UN);
        fclose($filehandle);
    }
}
