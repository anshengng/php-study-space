<?php
header('Content-type: image/png');
$res = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
$white = imagecolorallocate($res, 255, 255, 255);
imagefill($res, 200, 200, $red);
// imagesetthickness($res,20); //设置线条粗细，位置需要在绘制的形状前
// imagesetstyle() //设置风格
imagerectangle($res, 200, 200, 400, 400, $green); //绘制空心矩形 
// imagefilledrectangle($res,200,200,400,400,$green);//绘制实心矩形 
imageellipse($res, 250, 250, 300, 300, $green); //绘制空心圆形
// imagefilledellipse($res, 250, 250, 300, 300, $green); //绘制实心圆
imageline($res, 0, 0, 200, 200, $green); //绘制直线 起点0 0，终点200 200
for ($i = 0; $i < 20000; $i++) {
    imagesetpixel($res, mt_rand(0, 500), mt_rand(0, 500), $green); //绘制点 | mt_rand(0,500)0-500随机数
}
imagettftext($res, 20, 0, 100, 100, $green, 'arial.ttf', 'liukun'); //绘制字体
imagepng($res);
// imagepng($res, '2.png'); //第二个参数用于图片的输出和保存
// imagedestroy($res); //手动销毁图片资源
