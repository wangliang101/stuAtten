<?php
/**
 * Created by PhpStorm.
 * User: 王亮
 * Date: 2017/12/29
 * Time: 23:38
 */
include "../conn.php";  //连接数据库
mysql_selectdb("user");
$res=mysql_query("SELECT * FROM `user`");

//var_dump($rs);echo $rs['upass'];

$str="";
//显示信息
while ($rs=mysql_fetch_assoc($res)){
    $str.="<tr>
            
            <td>".$rs['uname']."</td>   
            <td>".$rs['maj']."</td>
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
<body>
<div class="glmd-body-r">
        <table >
            <tr>
            <td>姓名</td>
             <td>专业</td>
            </tr>
            <?php echo $str ;?>
        </table>
</div>
</body>
</html>
