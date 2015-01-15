<?php
$redis = new Redis();                   //redis对象
$redis->connect("127.0.0.1", "6379"); //连接redis服务器


$redis->set("test", "Hello World");      //set字符串值
echo $redis->get('test') . '<br>';
$redis->append('test', 'xxxx');
echo $redis->get('test') . '<br>';
$redis->del('test');

$redis->hSet('email', 'leo', 'geinideliwu');
echo $redis->hGet('email', 'leo') . '<br>';

$redis->hSet('change', 'leo', 'first tiao zhao');
$redis->hSet('change', 'tom', 'ssss');
$redis->hSet('change', 'jerry', 'xxxx');
$redis->hSet('change', 'hehe', $redis->get('test'));

var_dump($redis->hGetAll('change'));

$array = array('1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4'
);

$redis->mset($array);
echo $redis->get('4');

$array2 = array('1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4'
);

$redis->hMset('change', $array2);
var_dump($redis->hGet('change','1'));
?>