<?php
$redis = new Redis();                   //redis对象
$redis->connect("127.0.0.1", "6379"); //连接redis服务器
$redis->set("test", "Hello World");      //set字符串值
echo $redis->get("test");               //获取值
?>