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

/*当类有命名空间的时候，需要置换一下*/
//function myLoader($className)
//{
//    $class_file = "../" . $className . ".php";
//    $class_file = str_replace('\\', '/', $class_file);
//
//    if (file_exists($class_file)) {
//        require_once($class_file);
//    } else {
//        $class_file = "../" . $className . ".php";
//        $class_file = str_replace('\\', '/', $class_file);
//        if (file_exists($class_file))
//            require_once($class_file);
//    }
//}
//
//spl_autoload_register("myLoader");