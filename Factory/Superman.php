<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/5/14
 * Time: 13:01
 */
class Superman
{
    protected $power;

    public function __construct(array $modules)
    {
        /*初始化工厂*/
        $factory = new SuperModuleFactory();

        /*通过工厂提供的方法制造需要的模块*/
        foreach ($modules as $modulesName => $modulesOptions) {
            $this->power[] = $factory->makeModule($modulesName, $modulesOptions);
        }
    }
}

$superMan = new Superman([
    'Fight' => [9, 100],
    'Shot' => [99, 50, 2]
]);