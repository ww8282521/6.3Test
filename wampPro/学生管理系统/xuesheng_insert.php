<?php
include_once('dbconfig.php');
$link = mysqli_connect(HOST, USER, PASS) or die("提示：数据库连接失败！");
mysqli_select_db($link, DBNAME);
mysqli_query($link, "set names utf8");
$row = mysqli_query($link, 'insert into xuesheng(name,classid,birthday) value("' . $_POST['name'] . '", "' . $_POST['banji'] . '", "' . $_POST['birthday'] . '")');
if ($row) {
    echo '<h1>OK</h1>';
    echo '<a href="index.php">返回列表</a>';
//    echo '<script>alert()</script>';
} else {
    echo 'ERROR';
}