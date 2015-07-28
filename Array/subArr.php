<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/4/8
 * Time: 19:35
 */

$a = [
    "s" => 2,
    "b" => 3,
    "shi" => "sdf",
    "sv" => 'sdf'
];

$b = [
    2,
];

foreach ($a as $k => $v) {
    echo $k . $v . '<br>';
}


$c = array_splice($a, 0, 2);
var_dump($c);