<?php
require_once 'singletonPDO.php';

$pdo = SingletonPDO::getInstance();
$class = new ReflectionClass("SingletonPDO");
echo $class;