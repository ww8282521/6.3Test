<?php
$server_name = "127.0.0.1";
$db_name = "student";
$user = "root";
$pass = "";
$res = mysqli_connect($server_name, $user, $pass, $db_name);
mysqli_set_charset($res, "utf-8");
if (!$res) {
    echo mysqli_errno("连接失败");
}