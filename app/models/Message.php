<?php

namespace app\models;

class Message
{
    public $email;
    public $msg;
    public $IP;

    public static function read()
    {
        $filename = 'resources/messages.txt';
        if (file_exists($filename)) {
            $records = file($filename);
            foreach ($records as $key => $value) {
                $object = json_decode($value);
                $message = new \app\models\Message($object);
                $record[$key] = $message;
            }
            return $records;
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
