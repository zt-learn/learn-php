<?php
header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set('Asia/Shanghai');

echo date('Y-m-d') . '<hr>';

/*时间戳*/
$TimeStamp = 1421734123;
/*睡眠2秒*/
//sleep(2);
/*time()返回的是自从 Unix 纪元（格林威治时间 1970 年 1 月 1 日 00:00:00）到当前时间的秒数*/
echo time() . '<br>';

echo (time() - $TimeStamp) / 1800 . "<br>";
echo (time() - $TimeStamp) % 1800 . '<br>';
echo '<hr>';

echo "date():<br><br>";
echo date('Y-m-d') . '<br>';
echo date('Y-m-d', time()) . '****' . '<br>';
echo date('Y-m-d H:i:s') . '<br>';
echo date('Y') . '年' . date('m') . '月' . date('d') . '日' . '<br>';

echo '<hr>';

echo "getdate():<br><br>";

var_dump(getdate());

echo date('Y-m-d') - '2015-03-20' . '<hr>';
/**/
$date = date('Y-m-d');
$pastDate = "2015-03-20";
$d1 = strtotime($date);
$d2 = strtotime($pastDate);
$Days = round(($d1 - $d2) / 3600 / 24);
echo $Days . '<hr>';

if (!strpos("2014-01-02,2014-01-03", "2014-01-04")) {
    echo 'hehe';
}

