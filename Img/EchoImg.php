<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/3/23
 * Time: 13:13
 */
header("Content-type:image/jpeg");
$img=imagecreatefromjpeg("http://127.0.0.1/spirit/app/storage/uploads/1000000027_100.jpg");
imagejpeg($img);
imagedestroy($img);