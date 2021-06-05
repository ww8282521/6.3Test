<?php
/*$server_name = "127.0.0.1";
$db_name = "student";
$user = "root";
$pass = "";
$res = mysqli_connect($server_name, $user, $pass, $db_name);
mysqli_set_charset($res, "utf-8");
if (!$res) {
    echo mysqli_errno("连接失败");
}else{
    echo "连接成功";
}*/
session_start();
//销毁sesssion
session_destroy();
include_once("conn.php");
$name = $_POST['user'];
$pass = $_POST['pass'];
$check = $_POST['check'];

//$result=mysqli_query($res,$sql);
//$data=mysqli_fetch_all($result);
//var_dump($data);
//$row=mysqli_fetch_assoc($result);
//var_dump($row);
if (mysqli_num_rows(mysqli_query($res, "select username,password from user WHERE username='$name' AND password='$pass'")) > 0) {
//    echo "<script>alert('登录成功')</script>";
//    echo "<script> alert('登录成功');parent.location.href='../index/index.html'; </script>";
    if (strtolower($check) == strtolower($_SESSION['text'])) {
        echo "<script> alert('登录成功');parent.location.href='../index.php'; </script>";
    } else {
        echo "<script> alert('验证码输入错误');</script>";
        echo "<script>history.go(-1); </script>";
    }
} else {
//    echo "<script>alert('登录失败,请重新登录');history.go(-1);</script>";
    if (mysqli_num_rows(mysqli_query($res, "select username from user WHERE username='$name'")) == 0) {
//        echo "<a href='../index/zhuce.html'>账号不存在，点我注册 </a>";
        echo "<script> alert('帐号不存在，去注册');parent.location.href='../index/zhuce.html'; </script>";
    } else {
        if (mysqli_num_rows(mysqli_query($res, "select username,password from user WHERE username='$name'")) > 0) {
//            echo "<a href='forget.html'>忘记密码？点我修改 </a>";
            echo "<script> alert('忘记密码，前往重置');parent.location.href='../index/forget.html'; </script>";
        }
    }

}
//查询数据库
mysqli_close($res);
