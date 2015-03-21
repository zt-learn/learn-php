<?php
include "a.php";
include "a2.php";
include "a3.php";
use test\a1;

$a = new a1\A();
$a->a();

$a3 = new a3();
$a3->say();