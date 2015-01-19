<?php
//$url = "http://127.0.0.1/monster/public/index.php/test";
$url = "http://127.0.0.1/OnlyPHP/Curl/recieve.php";

$post_data = 'testxx';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// post数据
curl_setopt($ch, CURLOPT_POST, 1);
// post的变量
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
//打印获得的数据
echo $output;