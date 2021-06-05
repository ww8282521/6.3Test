b.php文件：
<?php
    $link= mysqli_connect('localhost','root','123456');
    //    mysqli_character_set_name();
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,'thkphp5');
    $sql='select * from zixun';
    $result=mysqli_query($link,$sql);
    $records=array();
    while( $record = mysqli_fetch_array($result )){
        //mysql_fetch_array()函数的作用类似foreach对数组的作用：遍历（结果集）
        //它每次去的结果集的“一行数据”，并“装入”到数组 $record 中
        //该数组的下标就是该select的字段名，值就是对应行的数据值
       $records[]=$record;
    }
//    var_dump($records);
   require 'login.html';
//为啥能那个顺利的展示，那个require  'login.html'; 就是把login.html页面照搬到这个b.php文件中
?>