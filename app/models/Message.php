<?php

namespace app\models;

class Message
{
    public $email;
    public $msg;
    public $IP;

    public function __construct($object = null){
        if($object == null){
            return;
        }
        $this->email = $object->email;
        $this->msg = $object->msg;
        $this->IP = $object->IP;
    }

    public static function read()
    {
        $filename = 'resources/messages.txt';
        if (file_exists($filename)) {
            $records = file($filename);
            foreach ($records as $key => $value) {
                $object = json_decode($value);
                $message = new \app\models\Message($object);
                $records[$key] = $message;
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
