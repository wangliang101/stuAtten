<?php
/**
 * Created by PhpStorm.
 * User: 王亮
 * Date: 2017/12/29
 * Time: 23:38
 */
session_start();
$uname=$_SESSION['name'];
include "conn.php";
mysql_selectdb("stu");
$res=mysql_query("SELECT * FROM `stu`");

//var_dump($rs);echo $rs['upass'];

    $str="";
    while ($rs=mysql_fetch_assoc($res)){
        $id=$rs['id'];
        $str.="<tr>
            <td>".$rs['sid']."</td>
            <td>".$rs['uname']."</td>
            <td>".$rs['maj']."</td>
            <td>".$rs['class']."</td>
            <td>".$rs['cq']."</td>
         </tr>";
          } ;
//左侧导航栏   为方便传$id，特写到这
//echo "<br>";
$str1="<tr><td><a href=\"index.php?fid=\">个人中心</a></td></tr>
              <tr><td><a href=\"stu-xg.php?fid=".$id."\">修改信息</a></td></tr>
              <tr><td><a href=\"stu-cu.php\">查询考勤</a></td></tr>
              <tr><td><a href=\"stu-md.php\">班级名单</a></td></tr>";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body style="background-image: url('images/denglu.jpg')">
<div class="myhead">
    <div class="header-l"><img src="images/xx.png"></div>
    <div class="header-c"><p><b>学生考勤管理系统</b></p></div>
    <div class="header-r">
        <ul>
            <li><a href="login.html">退出</a></li>
            <li><?php echo "欢迎".$uname."登陆"?>&nbsp|&nbsp </li>

        </ul>
    </div>
</div>
<div class="body-l">
    <div class="body-l-t" id="clock"></div>
    <div class="body-l-b">
        <table>
            <?php echo $str1 ;?>
        </table>
    </div>
</div>
<div class="body-r">
    <div class="md-t" style="width: 500px">
        <table >
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>专业</td>
                <td>班级</td>
                <td>出勤次数</td>

            </tr>
            <?php echo $str ;?>
        </table>
    </div>
    
    <div style="margin-left: 480px; float: left">
        <a href="stu-md.php">首页</a>
        <a href="stu-md.php">上一页</a>
        <a href="stu-md.php">下一页</a>
        <a href="stu-md.php">尾页</a>
    </div>
    
</div>
<div class="myfoot"><p>©2017.12 河北科技师范学院学生考勤管理系统  王亮制作</p></div>
<script>
    var clock=document.getElementById("clock");
    function changeClock(){
        var time=new Date();//每改变一次时间必须重新定义一个对象,每一秒更新一次
        var y=time.getFullYear();//获取年
        var moth=time.getMonth();//获取月
        var d=time.getDate();//获取月
        var h=time.getHours();//获取当前小时
        var m=time.getMinutes();//获取当前分钟
        var s=time.getSeconds();//获取当前秒数
        var str="";
        str=str+y+"年"+(moth+1)+"月"+d+"日"+h+"时"+m+"分"+s+"秒";
        clock.innerHTML=str;

    }
    var t=setInterval(changeClock,1000)
</script>
</body>
</html>
