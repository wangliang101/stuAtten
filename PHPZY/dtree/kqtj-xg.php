<?php
/**
 * Created by PhpStorm.
 * User: 王亮
 * Date: 2017/12/29
 * Time: 23:38
 */
include "../conn.php";  //连接数据库
mysql_selectdb("stu");
$res=mysql_query("SELECT * FROM `stu` WHERE `id` = '".$_GET['fid']."'");
//echo "1";
//显示信息
while ($rs=mysql_fetch_assoc($res)){
//var_dump($rs);echo $rs['upass'];
//    echo "1";
    $str="<tr>
            <td>学号</td>
            <td>".$rs['sid']."</td>
        </tr>
        <tr>
            <td>姓名</td>
            <td>".$rs['uname']."</td>
        </tr>
        <tr>
            <td>密码</td>
            <td>".$rs['upass']."</td>
        </tr>
        <tr>
            <td>专业</td>
            <td>".$rs['maj']."</td>
        </tr>
         <tr>
            <td>班级</td>
            <td>".$rs['class']."</td>
        </tr>
         <tr>
            <td>出勤次数</td>
            <td><input type='text' style='width:110px;height=20px ' name='cq'></td>
        </tr>
        ";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="a.css">

</head>
<body >


<div class="body-r">
    <div>
        <form>
            <table style="margin: 15px">
                <?php echo $str ;?>
            </table>
            <input style="display: none" name="fid" value="<?php echo $_GET['fid'] ;?>">
            <input type="reset" value="重输" class="input">
            <a href="stu-xg.php" style=" text-decoration: none"><input type="submit" value="提交" class="input"></a>

        </form>
    </div>
</div>

</body>
</html>
<?php
//修改学生信息
if (isset($_GET['cq'])&&$_GET['cq']!=""){
    $cq=$_GET['cq'];
    include "../conn.php";
    mysql_selectdb("stu");
    mysql_query("UPDATE `stu` SET  `cq` = '".$cq."' WHERE `stu`.`id` =".$_GET['fid']);
    header("Location:xxmd.php");
    echo $_GET['fid'];
}

?>
