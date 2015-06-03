<?php
echo __FILE__ . '<br>';

//echo dirname(__FILE__) . '<br>';
echo __DIR__ . "<br>";

$c_file_name = 'c.php';

echo 'this is c.php, is required by ' . $file_name;
echo "<hr>";

require('../d/d.php');
?>