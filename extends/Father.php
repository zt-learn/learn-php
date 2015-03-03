<?php
require_once 'son.php';

class Father
{
    public $father;
    public $obj;

    public function __construct()
    {
        $this->father = 'ni ba ';
        $this->obj=new Son();
    }

    public function test()
    {
        echo 'i am father';
        echo $this->father;
    }
}