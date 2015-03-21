<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/3/20
 * Time: 14:03
 */
class peo
{
    public function set()
    {
        echo 'adfa';
    }
}

class User
{
    public $peo;

    public function __construct()
    {
        $this->peo = new peo();
    }

    public function say()
    {
        $this->peo->set();
    }
}

$user = new User();
$user->say();