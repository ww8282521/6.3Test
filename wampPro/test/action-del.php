<?php
// 处理删除操作的页面 
require "dbconfig.php";
// 连接mysql
$link = mysqli_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysqli_select_db($link,DBNAME);
// 编码设置
mysqli_query($link,"set names utf8");

$id = $_GET['id'];
//删除指定数据  
mysqli_query($link,"DELETE FROM news WHERE id={$id}") or die('删除数据出错：'.mysql_error()); 
// 删除完跳转到新闻页
header("Location:index.php");  


