<?php

/**
 * “超人” 的创建不再依赖任何一个 “超能力” 的类，我们如若修改了或者增加了新的超能力，
 * 只需要针对修改 SuperModuleFactory 即可。
 * 扩充超能力的同时不再需要重新编辑超人的类文件，使得我们变得很轻松
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