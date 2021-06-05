<?php
include_once("conn.php");
header("Content-type:text/html;charset=utf-8");
$name = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
$sql = "select username from user WHERE username='$name'";
$result = mysqli_query($res, $sql);
if (mysqli_num_rows($result) > 0) {
    $sql = "select password from user WHERE password='$pass'";
    $result = mysqli_query($res, $sql);
    if (mysqli_num_rows($result) > 0) {
//        echo "<script>alert('密码不能和近期密码相同');</script>";
        echo "<script> alert('密码不能和近期密码相同');parent.location.href='../index/forget.html'; </script>";
    } else {
        $sql = "UPDATE user SET password='$pass' WHERE username='$name'";
        $result = mysqli_query($res, $sql);
        if ($result) {
//            echo "修改成功，请<a href='../index/denglu.html'>登录</a>";
            echo "<script> alert('修改成功，去登录');parent.location.href='../index/denglu.html'; </script>";
        }
    }
} else {
//    echo "账号不存在，请<a href='../index/denglu.html'>注册</a>";
    echo "<script> alert('账号不存在，去注册');parent.location.href='../index/zhuce.html'; </script>";
}