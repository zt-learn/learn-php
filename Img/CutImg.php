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
    $thumb = ImageCreateTrueColor($newwidth, $newheight);

    $alpha = imagecolorallocatealpha($thumb, 0, 0, 0, 127);
    imagefill($thumb, 0, 0, $alpha);

    imagecopyresized($thumb, $source, 0, 0, 0, $_p, $newwidth, $height, $width, $height);
    imagesavealpha($thumb, true);
    imagepng($thumb, "./t{$i}.png");
}
