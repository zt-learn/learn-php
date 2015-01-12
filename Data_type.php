<?php

class hehe
{
    public $id = 1;
}

/*
 *
 */
echo "<hr>";
$var = '1';
echo is_numeric($var) . '<hr>';
echo is_resource($var) . '<hr>';
$ob = new hehe();
echo is_resource($ob).'sdfsd';
/*
 * 自定义常量，一经定义不可更改值
 */
echo '<hr>';
define("USERNAME", 'Lizhentao');
echo USERNAME . '<hr>';
define("USERNAME", 'zhentaoo');
echo USERNAME . '<hr>';

/*
 * 系统预定义常量
 */
echo PHP_VERSION . '<hr>';
echo M_PI . '<hr>';

/*
 * 魔术常量
 */
echo __LINE__ . '<hr>';
echo dirname(__FILE__) . '<hr>';
echo __FILE__ . '<hr>';

/*
 * 自定义变量,单引号不能解析变量，双引号可以
 */
$a = 'b';
$b = 'c';
$c = 'hehe';
echo $$$a . '<hr>';
echo '$$$a' . '  ' . "$$$a" . '<hr>';
?>