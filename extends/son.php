<?php
include 'Father.php';

class Son extends Father
{
    public $son;

    public function __construct()
    {
        parent::__construct();
        $this->son = 'son';
    }

    public function test2()
    {
        echo $this->son;
        echo $this->father;
    }

    public static function say()
    {
        echo 'sdf';
//        self::say();
    }
}

$son = new Son();
$son->test2();
Son::say();