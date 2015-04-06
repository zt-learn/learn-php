<?php

class People
{
    private static $people = 'people';
}

class visitors extends People
{
    private static $visitors = 0;
    private static $sb = 'sdf';
    private static $people = 'son';

    function __construct()
    {
        static::$sb = 'sb';
        static::$visitors++;
    }

    public static function getVisitors()
    {
        return static::$people;
//        return static::$visitors;
    }
}

$visitor = new visitors();
echo $visitor::getVisitors();
/* Instantiate the visitors class. */
//$visits = new visitors();
//echo visitors::getVisitors()."<br />";
/* Instantiate another visitors class. */
//$visits3 = new visitors();
?>