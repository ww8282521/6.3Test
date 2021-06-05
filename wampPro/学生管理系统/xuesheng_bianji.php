<?php
include_once('dbconfig.php');
$link = mysqli_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
mysqli_select_db($link, DBNAME);
mysqli_query($link,"set names utf8");
$result = mysqli_query($link,'select * from xuesheng where id = '.$_GET['id'].' limit 1');
$row = mysqli_fetch_assoc($result);
$banji = mysqli_query($link,'select * from banji');
?>
<style>
    .update{
        margin-left: 43%;
    }
</style>
<div class="update">
    <h1>修改学生信息</h1>
<form action="xuesheng_update.php" method="post">
	<input type="hidden" name="id" value="<?=$row['id'] ?>">
	<p>姓名：<input type="text" name="name" value="<?=$row['name'] ?>"></p>
	<p>班级：<select name="banji">
			<?php
				while($rows = mysqli_fetch_assoc($banji)){
					echo '<option value="'.$rows['id'].'" ';
					if($row['classid'] == $rows['id']){
						echo 'selected';
					}
					echo '>'.$rows['name'].'</option>';
				}
			?>
			 </select>
	</p>
	<p>生日：<input type="text" name="birthday" value="<?=$row['birthday'] ?>"></p>
	<p><input type="submit"></p>
</form>
</div>