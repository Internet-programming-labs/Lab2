<?php
session_start();
$img = imagecreatetruecolor(300, 300);

$imagePath = $_SESSION['image'];
unset($_SESSION['image']);

$imgExisted = imagecreatefromjpeg($imagePath);
$imageSize = getimagesize($imagePath);

$blue = imagecolorallocate($imgExisted, 100, 100, 255);
$green = imagecolorallocate($imgExisted, 100, 255, 100);

//imagefilledrectangle($imgExisted, 0, 0, 100, 100, $blue);
//imagearc($imgExisted, 150, 150, 300, 300, 0,  360, $green);

$width = $imageSize[0];
$height = $imageSize[1];

for($y = 0; $y < $height; $y++)
    for($x = 0; $x < $width; $x++)
    {
        $pixelColor = imagecolorat($imgExisted, $x, $y);
        $red = imagecolorsforindex($imgExisted, $pixelColor)['red'];
        $green = imagecolorsforindex($imgExisted, $pixelColor)['green'];
        $blue = imagecolorsforindex($imgExisted, $pixelColor)['blue'];
        $changedColor = imagecolorallocate($imgExisted, 255 - $red, 255 - $green, 255 - $blue);
        imagesetpixel($imgExisted, $x, $y, $changedColor);
    }



//$arr = array(array(1, 2 ,1), array(-1, 1, 1), array(0, 0, -1));

//imageconvolution($imgExisted, $arr, 5, 0);

header("Content-Type:image/jpeg");
imagejpeg($imgExisted, NULL, 100);