<?php
date_default_timezone_set("Asia/shanghai");
//php在文件上传过程中临时存储的名字
$tmp_name = count($_FILES['myfile']['tmp_name']);

for ($i = 0; $i < $tmp_name; $i++) {
    move_uploaded_file($_FILES['myfile']['tmp_name'][$i], "../file/"
        .date('ymdhis') . rand(0, 999) . '.txt');
}
echo "<script>alert('文件上传成功！')</script>";

