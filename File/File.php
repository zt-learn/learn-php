<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/30
 * Time: 15:51
 */
$file = fopen('../1.jpg', 'r') or die('无法打开文件');
echo $file;
var_dump($file);
