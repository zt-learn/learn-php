<?php
$array = array(
    'a' => array('a' => '1212', 'b' => '2', 'c' => '3'),
    'b' => array('a' => '4', 'b' => '5', 'c' => '6'),
    'c' => array('a' => '7', 'b' => '8', 'c' => '9')
);

$testArray1 = array();
foreach ($array as $k => $v) {
    $testArray1[$k] = $v;
}

var_dump($array);
var_dump($testArray1);

echo '<hr>';

$array2 = array(
    array('a' => '1212', 'b' => '2', 'c' => '3'),
    array('a' => '4', 'b' => '5', 'c' => '6'),
    array('a' => '7', 'b' => '8', 'c' => '9')
);


$testArray2 = array();
for ($i = 0; $i < sizeof($array2); $i++) {
    $testArray2[$i] = $array2[$i];
}

var_dump($array2);
var_dump($testArray2);