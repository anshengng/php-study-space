<?php
header('Content-type: image/png');
$res = imagecreatetruecolor(500, 500); //创建画布
$red = imagecolorallocate($res, 255, 0, 0); //创建颜色
$green = imagecolorallocate($res, 0, 255, 0);
imagefill($res, 0, 200, $red); //填充
imagepng($res); //转png