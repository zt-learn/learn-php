<?php

class Event
{
    public static $listens = array();

    public static function listen($event, $callback, $once = false)
    {
        /*is_callable:验证变量的内容能否作为函数调用*/
        if (!is_callable($callback))
            return false;
        self::$listens[$event][] = array('callback' => $callback, 'once' => $once);
        return true;
    }

    public static function one($event, $callback)
    {
        return self::listen($event, $callback, true);
    }

    public static function remove($event, $index = null)
    {
        if (is_null($index))
            unset(self::$listens[$event]);
        else
            unset(self::$listens[$event][$index]);
    }

    public static function trigger()
    {
        /*返回参数的个数*/
        if (!func_num_args())
            return null;

        /* 返回一个包含函数参数列表的数组*/
        $args = func_get_args();

        /*将数组的第一个元素移出*/
        $event = array_shift($args);

        if (!isset(self::$listens[$event]))
            return false;

        foreach ((array)self::$listens[$event] as $index => $listen) {
            $callback = $listen['callback'];
            $listen['once'] && self::remove($event, $index);

            /*把第一个参数作为回调函数（$callback）调用，把参数数组作（$args）为回调函数的的参数传入。*/
            call_user_func_array($callback, $args);
        }
    }
}