<?php

namespace zhentaoo\test;

use zhentaoo\TestClass;

require_once(dirname(__FILE__) . '/testClass.php');
header("Content-type: text/html; charset=utf-8");

$tester = new TestClass\Test();
echo '<br>' . $tester->id . '<br>';
?>