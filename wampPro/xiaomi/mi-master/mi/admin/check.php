<?php
session_start();
//设置画布大小 一般为100,30
$img = imagecreatetruecolor(100, 30);

//设置画布填充颜色
$bg_color = imagecolorallocate($img, 255, 255, 255);

//设置坐标以及背景颜色
imagefill($img, 0, 0, $bg_color);

$context = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
$text = "";
for ($i = 0; $i < 4; $i++) {
    //设置字体大小
    $fontsize = 10;

    //设置字体颜色
    $font_color = imagecolorallocate($img, rand(50,150), rand(50,150), rand(50,150));
//mt_rand()取得是一个整数
//substr 截取字符串
//    mt_rand();
//    strlen()测试字符串长度
    $str = substr($context, mt_rand(0, strlen($context) - 1), 1);
    $text .= $str;
    //设置字符坐标
    $x = ($i * 100 / 4) + mt_rand(5, 10);
    $y = mt_rand(5, 10);
    imagestring($img, $fontsize, $x, $y, $str, $font_color);
}
$_SESSION['text'] = $text;

//设置干扰点
for ($i = 1; $i < 200; $i++) {
    $tc_color = imagecolorallocate($img,  rand(50,150), rand(50,150), rand(50,150));
    imagesetpixel($img, rand(0, 100), rand(0, 30), $tc_color);
}

//设置干扰线段
for ($i = 1; $i < 4; $i++) {
    $tc_color = imagecolorallocate($img,  rand(50,150), rand(50,150), rand(50,150));
    imageline($img, rand(1, 99), rand(1, 30), rand(1, 99), rand(1, 30), $tc_color);
}
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);


/*//必须至于顶部,多服务器端记录验证码信息，便于用户输入后做校验
session_start();

//默认返回的是黑色的照片
$image = imagecreatetruecolor(100, 30);
//将背景设置为白色的
$bgcolor = imagecolorallocate($image, 255, 255, 255);
//将白色铺满地图
imagefill($image, 0, 0, $bgcolor);

//空字符串，每循环一次，追加到字符串后面
$captch_code = '';

//验证码为随机四个数字
for ($i = 0; $i < 4; $i++) {
    $fontsize = 6;
    $fontcolor = imagecolorallocate($image, rand(0, 120), rand(0, 120), rand(0, 120));

    //产生随机数字0-9
    $fontcontent = rand(0, 9);
//    $data='abcdefghijkmnpqrstuvwxy3456789';
    $captch_code .= $fontcontent;
    //数字的位置，0，0是左上角。不能重合显示不完全
    $x = ($i * 100 / 4) + rand(5, 10);
    $y = rand(5, 10);
    imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
}


$_SESSION['authcode'] = $captch_code;
//为验证码增加干扰元素，控制好颜色，
//点
for ($i = 0; $i < 200; $i++) {
    $pointcolor = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
    imagesetpixel($image, rand(1, 99), rand(1, 29), $pointcolor);
}

//为验证码增加干扰元素
//线
for ($i = 0; $i < 3; $i++) {
    $linecolor = imagecolorallocate($image, rand(80, 220), rand(80, 220), rand(80, 220));
    imageline($image, rand(1, 99), rand(1, 29), rand(1, 99), rand(1, 29), $linecolor);
}

header('content-type:image/png');
imagepng($image);

//销毁
imagedestroy($image);*/
