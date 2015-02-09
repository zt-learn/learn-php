<?php
include 'Father.php';

class Son extends Father
{
    public function test2()
    {
        echo $this->f;
    }
}

$son = new Son();
$son->test();