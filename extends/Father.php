<?php

class Father
{
    public $f;

    public function __construct()
    {
        $this->f = 'ni ba ';
    }

    public function test()
    {
        echo 'i am father';
        echo $this->f;
    }
}