<?php
echo strtolower("sdf_SD_sdf") . '<hr>';

//字符串替换，但是不能替换成空
echo strtr("sdf_SD_sdf", "_", "") . '<hr>';

//字符串替换
echo str_replace("_", "", "sdf_SD_sdf") . '<hr>';


echo ucfirst('asdf') . '<hr>';

//确定是不是数字，或数字字符串
echo is_numeric('123123') . '<hr>';

/*strpos — 查找字符串首次出现的位置*/
echo strpos("sdfsdf", 'f');
