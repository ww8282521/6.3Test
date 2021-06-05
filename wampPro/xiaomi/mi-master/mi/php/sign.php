<?php
include_once "conn.php";
$name = $_POST['user'];
$pass = $_POST['pass'];
if (mysqli_num_rows(mysqli_query($res, "select username,password from user WHERE username='$name'")) > 0) {
    echo "该账号已存在,请<a href='../login.html'>登录</a>";
} else {
    $sql = "INSERT INTO user(username, password) VALUES ('$name','$pass')";
    $result = mysqli_query($res, $sql);
    if ($result) {
        echo "注册成功,请<a href='../login.html'>登录</a>";
    }
}