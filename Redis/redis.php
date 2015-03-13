<?php
define('GAMENAME', 'monster');

$redis = new Redis();                   //redis对象
$redis->connect("127.0.0.1", "6379"); //连接redis服务器

/*set 使用*/
$redis->set("test", "set test");
echo $redis->get('test') . '<br>';

$redis->set('test', 'new set');
echo $redis->get('test') . '<br>';

$redis->append('test', 'xxxx');
echo $redis->get('test') . '<br>';


$array = array('1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4'
);
$redis->mset($array);
echo $redis->get('4');
//$redis->del('test');

echo '<hr>';

/*hash set使用*/
$redis->hSet('email', 'leo', 'hash set');
var_dump($redis->hGetAll('email'));
echo '<br>';

$array2 = array('1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4'
);

$redis->hSet('change', 'leo', 'first tiao zhao');
$redis->hSet('change', 'tom', 'ssss');
$redis->hSet('change', 'jerry', 'xxxx');
$redis->hSet('change', 'hehe', $array2);

$redis->hSet('change', 'leo', 'lee_test');
var_dump($redis->hGetAll('change'));
echo '************';
var_dump($redis->hGet('change', 'hehe'));

$redis->hMset('change', $array2);
var_dump($redis->hGet('change', '1'));

if ($redis->hExists('change', 'leo')) {
    echo 'have leo';
}
if (!$redis->hExists("change", 'sdf')) {
    echo 'hehe';
}

echo '<hr>';

$test = array(
    'x' => 'xx',
    'y' => 'yy',
    'z' => 'zz',
);

$redis->set('arr', json_encode($test));

$new = json_decode($redis->get('arr'));
$new->x = 'new';

$redis->set('arr', json_encode($new));
var_dump(json_decode($redis->get('arr'), true));

echo '<hr>******************';

$name = 'leoxx';
$level = 4;
$stage_id = 1;
$user_id = "0002";
$game = GAMENAME;
$floor = 1;
$birthday = 1;
$coin = 1;
/*用户基本信息*/

$redis->hSet("$game.$user_id", 'name', $name);
$redis->hSet("$game.$user_id", 'level', $level);
$redis->hSet("$game.$user_id", 'floor', $floor);
$redis->hSet("$game.$user_id", 'birthday', $birthday);
$redis->hSet("$game.$user_id", 'coin', $coin);

/*用户某一关的信息*/
for ($stage_id = 1; $stage_id < 5; $stage_id++) {
    $redis->hSet("$game.$user_id.$stage_id", 'star', '3');
    $redis->hSet("$game.$user_id.$stage_id", 'score', '3000');
    $redis->hSet("$game.$user_id.$stage_id", 'ishero', '0');
}
/*用户通关的全部信息，需要借助用户某一关的信息*/
//$redis->hSet("$game.$user_id.stageclearlist", 1, "$game.$user_id.$stage_id");
//$redis->hSet("$game.$user_id.stageclearlist", 2, "$game.$user_id.$stage_id");
//$redis->hSet("$game.$user_id.stageclearlist", 3, "$game.$user_id.$stage_id");

var_dump($redis->hGetAll("monster.0002"));
echo 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh<br>';
for ($i = 1; $i < $stage_id + 1; $i++) {
    echo $i;
    var_dump($redis->hGetAll("monster.0002.$i"));
}
echo 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh<br>';

echo '<hr>';

if ($redis->exists("monster.0002")) {
    echo '可以';
}
echo "000000000000000000000000<br>";
var_dump($redis->hGet('monster', 'towerfloorlist'));
?>