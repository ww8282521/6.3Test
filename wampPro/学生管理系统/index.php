<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>学生后台管理系统</title>
</head>
<style type="text/css">
    .wrapper {
        width: 1000px;
        margin: 20px auto;
    }

    h2 {
        text-align: center;
    }

    .add {
        margin-bottom: 20px;
    }

    .add a {
        text-decoration: none;
        color: #fff;
        background-color: green;
        padding: 6px;
        border-radius: 5px;
    }

    .tuichu button {
        text-decoration: none;
        color: #fff;
        background-color: green;
        padding: 6px;
        border-radius: 5px;
        float: left;
        margin-left: 884px;
        margin-top: -47px;
        border-style: none;
        outline: none;
        height: 34px;
        width: 76px;
    }

    td{
        text-align: center;
    }
</style>
<body>
<div class="wrapper">
    <h2>学生后台管理系统</h2>
    <div class="add">
        <a href="xuesheng_add.php">增加学生</a>
    </div>

    <div class="tuichu">
        <button onclick="tuichu()">退出登录</button>
    </div>

    <table width="960" border="1">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>班级</th>
            <th>生日</th>
            <th>操作</th>
            <!--				<th>班级</th>-->
            <!--				<th>班级</th>-->
        </tr>

        <?php
        // 1.导入配置文件
        require "dbconfig.php";

        // 2. 连接mysql
        $link = @mysqli_connect(HOST, USER, PASS) or die("提示：数据库连接失败！");
        // 选择数据库
        mysqli_select_db($link, DBNAME);
        // 编码设置
        mysqli_query($link, "set names utf8");

        // 3. 从DBNAME中查询到news数据库，返回数据库结果集,并按照addtime降序排列
        $sql = 'select xuesheng.*,banji.name banji from xuesheng,banji where xuesheng.classid = banji.id';
        // 结果集
        $result = mysqli_query($link, $sql);
        // var_dump($result);die;

        while ($record = mysqli_fetch_array($result)) {
            $records[] = $record;
        }
        foreach ($records as $row) :
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['banji']}</td>";
            echo "<td>{$row['birthday']}</td>";
//					echo "<td>{$row['addtime']}</td>";
//					echo "<td>{$row['content']}</td>";
            echo "<td>
							<a href='javascript:del({$row['id']})'>删除</a>
							<a href='xuesheng_bianji.php?id={$row['id']}'>修改</a>
						  </td>";
            echo "</tr>";
        endforeach;
        ?>

    </table>
</div>

<script type="text/javascript">
    function del(id) {
        if (confirm("确定删除这条新闻吗？")) {
            window.location = "xuesheng_del.php?id=" + id;
        }
    }
    function tuichu() {
        if (confirm("确定退出登录吗？")) {
            window.location.href="index/index.html"
        }
    }
</script>
</body>
</html>
