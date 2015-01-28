<?php

class Crypt
{
    var $key = NULL;
    var $iv = NULL;
    var $iv_size = NULL;

    function Crypt()
    {
        $this->init("MONSTERB");
    }

    function init($key = "")
    {
        echo $key.'<br>';

        $this->key = ($key != "") ? $key : "";

        echo $this->key;
    }
}

$c=new Crypt();
