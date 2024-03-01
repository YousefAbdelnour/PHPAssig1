<?php

namespace app\models;

class Counter
{
    public $count;
    public function __construct()
    {
        $filename = 'resources/counter.txt';
        if (file_exists($filename)) {
            $file_handle = fopen($filename, 'r');
            flock($file_handle, LOCK_SH);
            $count = fread($file_handle, filesize($filename));
            flock($file_handle, LOCK_UN);
            fclose($file_handle);
        } else {
            $count = '{"count":0}';
        }
        $this->count = json_decode($count, true)['count'];
    }

    public function increment()
    {
        $this->count++;
    }

    public function write()
    {
        $filename = 'resources/counter.txt';
        $filehandle = fopen($filename, 'w');
        flock($filehandle, LOCK_EX);
        fwrite($filehandle, $this);
        flock($filehandle, LOCK_UN);
        fclose($filehandle);
    }

    public function __toString()
    {
        return json_encode($this);
    }
}

$counter = new Counter();
$counter->increment();
$counter->write();
header('Content-Type: application/json');
echo json_encode(['count' => $counter->count]);