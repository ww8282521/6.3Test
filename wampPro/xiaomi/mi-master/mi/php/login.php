<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/3/23
 * Time: 10:43
 */
//登录:账号密码全对  登录成功
//    账号对 密码错 登录失败  --> 提示 -->继续输入密码/忘记密码(修改密码)
//    账号错 密码对 登录失败  --> 提示 -->继续输入账号/注册账号
//    账号密码全错 -->提示-->注册账号-->登录
session_start();
include_once ("conn.php");
$name=$_POST['user'];
$pass=$_POST['pass'];
$yzm=$_POST['yzm'];
//$result=mysqli_query($res,$sql);
//$data=mysqli_fetch_all($result);
//var_dump($data);
//$row=mysqli_fetch_assoc($result);
//var_dump($row);
if(mysqli_num_rows(mysqli_query($res,"select username,password from user WHERE username='$name' AND password='$pass'"))>0){
    if(strtolower($yzm)==strtolower($_SESSION['text'])){
        echo "<script>alert('登录成功')</script>";
    }else{
        echo "<script>alert('验证码错误')</script>";
        echo "<script>history.go(-1);</script>";
    }
}else{
    if(mysqli_num_rows(mysqli_query($res,"select username from user WHERE username='$name'"))==0){
        echo "<a href='../index/sign.html'>账号不存在，点我注册</a>";
    }else{
        if(mysqli_num_rows(mysqli_query($res,"select username from user WHERE username='$name'"))>0){
            echo "<a href='../index/forget.html'>忘记密码？点我修改</a>";
        }
    }
}
//查询数据库
mysqli_close($res);
date_default_timezone_set("Asia/chongqing");
$a=date("y年m月d日h时i分s秒");
echo "您登录系统的时间为".$a;