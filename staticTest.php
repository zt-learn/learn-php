<?php
namespace zt\test1;


class person
{
    static $dog;

    function __construct()
    {
    }

    public static function test()
    {
        echo "person test static function!!";
    }
}

class dog
{
    public function  eat()
    {
        echo "i eat shit";
    }
}

person::$dog = new dog();