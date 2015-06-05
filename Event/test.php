<?php
require_once 'Event.php';

// 增加监听walk事件
Event::listen('walk', function () {
    echo "I am walking...\n";
});
// 增加监听walk一次性事件
Event::listen('walk', function () {
    echo "I am listening...\n";
}, true);
// 触发walk事件
Event::trigger('walk');
/*
I am walking...
I am listening...
*/
Event::trigger('walk');
/*
I am walking...
*/

Event::one('say', function ($name = '') {
    echo "I am {$name}\n";
});

Event::trigger('say', 'deeka'); // 输出 I am deeka
Event::trigger('say', 'deeka'); // not run

class Foo
{
    public function bar()
    {
        echo "Foo::bar() is called\n";
    }

    public function test()
    {
        echo "Foo::foo() is called, agrs:" . json_encode(func_get_args()) . "\n";
    }
}

$foo = new Foo;

Event::listen('bar', array($foo, 'bar'));
Event::trigger('bar');

Event::listen('test', array($foo, 'test'));
Event::trigger('test', 1, 2, 3);

class Bar
{
    public static function foo()
    {
        echo "Bar::foo() is called\n";
    }
}

Event::listen('bar1', array('Bar', 'foo'));
Event::trigger('bar1');

Event::listen('bar2', 'Bar::foo');
Event::trigger('bar2');

function bar()
{
    echo "bar() is called\n";
}

Event::listen('bar3', 'bar');
Event::trigger('bar3');