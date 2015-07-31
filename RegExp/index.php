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
//

$str = '“欢迎查看美女图片<img src="/ueditor/php/upload/image/20150730/1438267857365156.png" width="450" height="210" />哈哈！<img src="images/new/h1.jpg" width="450" height="210" />”';
//echo $str;
preg_match('/ueditor.*(png|gif|jpg)/U', $str, $out);
var_dump($out);

//$img = $out[0][0];
//echo $img;