<?php
$img = imagecreatefromjpeg($filename);
$logo = imagecreatefromjpeg($filename);
/*imagecraetefromjpeg-由文件或URL创建一个新图像
imagecreatefromjpeg(string $filename)
如果启用了fopen包装器，URL可以作为文件名*/
imagecopy($img, $logo, 15, 15, 0, 0, $width, $height);
/*imagecopy($dst_im,$src_im,$dst_x,$dst_y,$src_x,$src_y,$src_w,$src_h)
$dst_im是背景图像，就是需要添加水印的图片
$src_im是水印图片；$dst_x,#dst_y需要把水印放到背景图片的(x,y)坐标;
$src_x,$src_y是截取水印的图片的开始坐标
$width，$height是截取的图片的就是水印的长度和宽度*/

$url = 'http://www.stchat.cn/data/attachment/forum/201506/12/100759pidbdaydh8dy7iby.jpg';
$content = file_get_contents($url);//把url写入到content这个变量里面
/*file_get_contents--将整个文件读入到一个字符串*/
$filename = 'tmp.jpg';
file_put_contents($filename, $content);
//把所有内容放到filename这个变量里面，第一个存放的是背景图片
/*file_put_contents(string $filename,mixed $data)将一个字符串写入一个文件
filename要被写入数据的文件名
data要写入的数据，类型可以是string,array或者是stream资源*/
$url = '';
file_put_contents('logo.png', file_get_contents($url));
//第二个是水印的图片
$img = imagecreatefromjpeg($filename);
$logo = imagecreatefrompng('logo.png');
$size = getimagesize('logo.png');
/*getimagesize()获得图像大小*/

imagecopy($img, $logo, 15, 15, 0, 0, $size[0], $size[1]);
header("centent-type:image/jpeg");
imagejpeg(img);
?>