<?php

//$regex = '/^http:([\w]+).html$/i';
//$str = 'http://www.youku.com/show_page/id_ABCDEFG.html';
//$matches = array();
//
//if (preg_match($regex, $str, $matches)) {
//    var_dump($matches);
//}
//
//echo "\n";

//$regex = '/^\/ueditor\/php\/upload\/image\/[0-9]*\/[0-9]*(.jpg|.gif|.png)$/i';
//$str = "/ueditor/php/upload/image/20150730/1438267857365156.png";
//$matches = array();
//if (preg_match($regex, $str, $matches)) {
//    var_dump($matches);
//}

$str = '&lt;p&gt;&lt;img src="/ueditor/php/upload/image/20150730/1438266463281325.jpg" title="1438266463281325.jpg" alt="6.jpg"&gt;&lt;/p&gt;';
//echo $str;
preg_match('/\/ueditor.*(png|gif|jpg)/U', $str, $out);
var_dump($out[0]);

//$img = $out[0][0];
//echo $img;