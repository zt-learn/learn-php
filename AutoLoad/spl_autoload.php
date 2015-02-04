<?php
function myLoader($className)
{
    $class_file = $className . ".php";
    if (file_exists($class_file)) {
        require_once($class_file);
    }
}

spl_autoload_register("myLoader");
$test = new User();
$test->say();