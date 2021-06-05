<?php
include_once('dbconfig.php');
$link = mysqli_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
mysqli_select_db($link, DBNAME);
mysqli_query($link,"set names utf8");
$row = mysqli_query($link,'update xuesheng set name="'.$_POST['name'].'",classid='.$_POST['banji'].',birthday="'.$_POST['birthday'].'" where id = '.$_POST['id']);
if($row){
	echo '<h1>OK</h1>';
	echo '<a href="index.php">返回列表</a>';
}
else{
	echo 'ERROR';
}