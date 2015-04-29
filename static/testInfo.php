<?php
require_once "staticInfo.php";

class testInfo
{
    public function test($boss)
    {
        var_dump($boss);
    }
}

$test = new testInfo();
$test->test($Boss);
//var_dump($Boss);