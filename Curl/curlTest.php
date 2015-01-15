<?php
/**
 * curl用来获取一个页面
 * 返回的信息
 */
//初始化
$ch = curl_init();
//设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1/monster/public/index.php/cmd");
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_HEADER, 0);
//执行并获取HTML文档内容
$output = curl_exec($ch);
//释放curl句柄
curl_close($ch);
//打印获得的数据
echo $output[0];