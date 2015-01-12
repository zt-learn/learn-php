<?php
namespace zhentaoo\TestClass;

class Test
{
    public $id;
    public $name;

    /*
     * 魔术方法
     */
    public function __construct()
    {
        $this->id = 'myid:1';
        $this->name = 'myname:xx';
        echo '已初始化';
    }

    public function __destruct()
    {
        echo '已销毁';
    }
}

?>