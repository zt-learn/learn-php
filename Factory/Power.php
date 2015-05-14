<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/5/14
 * Time: 13:01
 */
class Power
{
    protected $ability;

    protected $range;

    public function __construct($ability, $range)
    {
        $this->ability = $ability;
        $this->range = $range;
    }
}
