<?php
//<!--一个框  100*30  字符（字母 数字） 背景  干扰因素  随机  -->
//创建画布
session_start();
$img = imagecreatetruecolor(100, 30);
//设置画布填充的颜色
$bg_color = imagecolorallocate($img, rand(0, 150), rand(0, 100), rand(0, 40));
//填充
imagefill($img, 0, 0, $bg_color);
$content = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$text = "";
for ($i = 0; $i < 6; $i++) {
    $fontsize = 10;
    $str = substr($content, rand(0, strlen($content) - 1), 1);
    $text .= $str;
    $str_color = imagecolorallocate($img, rand(50, 150), rand(50, 150), rand(50, 150));
    $x = $i * 100 / 6 + rand(4, 7);
    $y = rand(5, 10);
    imagestring($img, $fontsize, $x, $y, $str, $str_color);
}
$_SESSION['text'] = $text;
for ($i = 0; $i < 200; $i++) {
    $p_color = imagecolorallocate($img, rand(50, 150), rand(50, 150), rand(50, 150));
    imagesetpixel($img, rand(1, 99), rand(1, 29), $p_color);
}
for ($i = 0; $i < 6; $i++) {
    $d_color = imagecolorallocate($img, rand(50, 150), rand(50, 150), rand(50, 150));
    imageline($img, rand(1, 99), rand(1, 29), rand(1, 99), rand(1, 29), $d_color);
}
//微信小程序 搭配最好的就是PHP  因为PHP不存在跨域问题的  云端（有限）/服务器
header("Content-type:image/png");
imagepng($img);
imagedestroy($img);