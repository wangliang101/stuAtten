<?php
/**
 * Created by PhpStorm.
 * User: 王亮
 * Date: 2017/12/29
 * Time: 23:38
 */

include "../conn.php";  //连接数据库
mysql_selectdb("stu");
$res=mysql_query("SELECT * FROM `stu`");

//var_dump($rs);echo $rs['upass'];

$str="";
//显示信息
while ($rs=mysql_fetch_assoc($res)){
    $id=$rs['id'];
    $str.="<tr>
            <td>".$rs['sid']."</td>
            <td>".$rs['uname']."</td>
            <td>".$rs['maj']."</td>
            <td>".$rs['class']."</td>
            <td>".$rs['cq']."</td>
            <td><a href=\"xgxx-xg.php?fid=".$id."\">修改</a></td>
         </tr>";
} ;

//echo "<br>";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="a.css">

</head>
<body >


<div class="md-t">
    <table >
        <tr>
            <td>学号</td>
            <td>姓名</td>
            <td>专业</td>
            <td>班级</td>
            <td>出勤次数</td>
            <td>操作</td>

        </tr>
        <?php echo $str ;?>
    </table>

</div>

</body>
</html>
