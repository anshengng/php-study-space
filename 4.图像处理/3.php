<?php
/**
 *文本盒子
 */
header('Content-type: image/png');
$res = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
$white = imagecolorallocate($res, 255, 255, 255);
$text = 'liukun';
imagefill($res, 200, 200, $red);
imagettftext($res, 20, 0, 100, 100, $green, 'arial.ttf', 'liukun'); //绘制字体
for ($i = 0; $i < strlen($text); $i++) {
    imagettftext($res, 20, mt_rand(0, 60), 25*$i +20, 300, $green, 'arial.ttf', $text[$i]); //绘制字体
} //创意字体，中文记得使用mb_strlen
imagepng($res);