<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/4/8
 * Time: 17:30
 */


$array = [
    [
        'age' => '15',
        'name' => 'wang',
    ],
    [
        'age' => '20',
        'name' => 'xeo',
    ],
    [
        'age' => '10',
        'name' => 'zhang',
    ]
];
$volume = null;
$edition = null;
foreach ($array as $key => $row) {
    $volume[$key] = $row['age'];
    $edition[$key] = $row['name'];
}

array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $array);
var_dump($array);