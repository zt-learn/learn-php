<?php
date_default_timezone_set('Asia/Shanghai');

echo strtolower("sdf_SD_sdf") . '<hr>';

//字符串替换，但是不能替换成空
echo strtr("sdf_SD_sdf", "_", "") . '<hr>';

//字符串替换
echo str_replace("_", "", "sdf_SD_sdf") . '<hr>';


echo ucfirst('asdf') . '<hr>';

//确定是不是数字，或数字字符串
echo is_numeric('123123') . '<hr>';

/*strpos — 查找字符串首次出现的位置*/
if (!strpos("sdfsdf", 'fss')) {
    echo 'sdfsd.<hr>';
};

/**
 *
 */
$data = [];
$str = "2013-01-01,2013-02-02,2013-03-03,2015-04-11";
$data = split(',', $str);

$d1 = strtotime($data[3]);
$d2 = strtotime(date('Y-m-d'));
$Days = round(($d2 - $d1) / 3600 / 24);
echo 'days:' . $Days;


//echo $data[2] . '<hr>';
/**
 *
 */
