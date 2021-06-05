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
        echo "<script>alert('密码不能和近期密码相同');</script>";
    } else {
        $sql = "UPDATE user SET password='$pass' WHERE username='$name'";
        $result = mysqli_query($res, $sql);
        if ($result) {
            echo "修改成功，请<a href='../login.html'>登录</a>";
        }
    }
} else {
    echo "账号不存在，请<a href='../sign.html'>注册</a>";
}