<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/4/23
 * Time: 9:36
 */

$arr = [
    'a' => '111',
    'b' => '22',
    'c' => '333',
    'd' => 'ddd',
];

var_dump($arr);

unset($arr['a']);
var_dump($arr);

$arr = [
    1, 2, 3
];
var_dump($arr);