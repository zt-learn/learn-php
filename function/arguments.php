<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/6/5
 * Time: 14:57
 */
function test()
{
    echo '参数个数：';
    var_dump(func_get_args());
    var_dump(func_num_args());
}

test(0,'sdf',[1,2,3]);