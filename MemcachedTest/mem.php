<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/1/13
 * Time: 12:53
 */

/*初始化*/
$mem = new Memcached();
$mem->addServer('127.0.0.1', 11211);

/*set值*/
$mem->set('a', 'a');
echo $mem->get('a');

/*get值，注意注释中的写法是错的*/
//$mem->get('a') = 'b';
$a = $mem->get('a');
$a = 'b';
$mem->set('a', $a);
echo $mem->get('a');