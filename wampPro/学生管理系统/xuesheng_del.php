<?php
require "dbconfig.php";
$link = mysqli_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
mysqli_select_db($link, DBNAME);
$row = mysqli_query($link,'delete from xuesheng where id = '.$_GET['id']);
if($row){
	echo '<h1>OK</h1>';
	echo '<a href="index.php">返回列表</a>';
}
else{
	echo 'ERROR';
}


