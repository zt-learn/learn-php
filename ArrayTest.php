<?php
$array = array(
    'a' => array('a' => '1212', 'b' => '2', 'c' => '3'),
    'b' => array('a' => '4', 'b' => '5', 'c' => '6'),
    'c' => array('a' => '7', 'b' => '8', 'c' => '9')
);
echo sizeof($array);

$test = array();
foreach ($array as $key => $value) {
//    echo $key;
//    var_dump($value);
    $test[$key] = $value;
}
var_dump($test);

$array2 = $array;
echo '*********<hr>******';
print_r($array2);
echo '<br>';
$array2['a'] = ['a' => 'ss', 'b' => 'bb', 'c' => 'cc'];
print_r($array2);
echo '<br>';
print_r($array);
echo '<br>';


echo '<hr>';
foreach ($array as $k => $v) {
    echo '<br>' . $k . '<br>';
    foreach ($v as $data)
        echo $data . ' ';
}
echo '<hr>';

/*
 * sort排序，两种方式：SORT_NUMERIC，SORT_STRINGs；
 * asort：根据值排序
 * ksort：根据键排序
 */

print_r($array['a']);
echo '<br>';
asort($array['a'], SORT_NUMERIC);
print_r($array['a']);
echo '<br>';


//foreach ($array as $k => $v) {
//    echo '<br>' . $k . '<br>';
//    foreach ($v as $data)
//        echo $data . ' ';
//}
//echo '<hr>';
//$new = [
//    'a' => ['a' => '1', 'b' => '2', 'c' => '3'],
//    ['a' => '4', 'b' => '5', 'c' => '6'],
//    ['a' => '7', 'b' => '8', 'c' => '9'],
//];
//
//foreach ($new as $k => $v) {
//    echo '<br>' . $k . '<br>';
//    foreach ($v as $data) {
//        echo $data;
//    }
//}