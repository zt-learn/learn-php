<?php
$filename = 'fish.png';
$p = 8;
// Get new sizes
list($width, $height) = getimagesize($filename);
$newwidth = $width;
$newheight = floor($height / $p);
$last = $height % $p;
// Load
$source = imagecreatefrompng($filename);

for ($i = 0; $i < $p; $i++) {
    $_p = $newheight * $i;
    if (($i + 1) == $p)
        $newheight += $last;

    $newImg = ImageCreateTrueColor($newwidth, $newheight);

    $alpha = imagecolorallocatealpha($newImg, 0, 0, 0, 127);
    imagefill($newImg, 0, 0, $alpha);

    imagecopyresized($newImg, $source, 0, 0, 0, 0, $newwidth, $height, $width, $height);
    imagesavealpha($newImg,true);
    imagepng($newImg, "./t{$i}.png");
}
