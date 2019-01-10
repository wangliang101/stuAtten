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
$res=mysql_query("SELECT * FROM `stu` WHERE `uname` = '".$uname."'");
while ($rs=mysql_fetch_assoc($res)){
    $id=$rs['id'];
//左侧导航栏   为方便传$id，特写到这
    $str1="<tr><td><a href=\"index.php?fid=\">个人中心</a></td></tr>
              <tr><td><a href=\"stu-xg.php?fid=".$id."\">修改信息</a></td></tr>
              <tr><td><a href=\"stu-cu.php\">查询考勤</a></td></tr>
              <tr><td><a href=\"stu-md.php\">班级名单</a></td></tr>";
}

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
<div  style="margin-top: 100px;width: 500px;margin-left: 580px" >
    <div id="cx" style="width: 500px;">
        <form  action="stu-cxxx.php" method="get">
            <h3>查询</h3>
            <span>
            姓名: <input type="text" name="uname">
            <a href="stu-cxxx.php"><input type="submit" value="查询"></a><br>
            </span>
        </form>
        <form  action="stu-cxxx1.php" method="get">
            <span>
            专业: <input type="text" name="maj">
           <a href="stu-cxxx1.php"><input type="submit" value="查询"></a><br>
            </span>
           <span>
            班级: <input type="text" name="class">
           <a href="stu-cxxx1.php"><input type="submit" value="查询"></a><br>
            </span>
            <div style="height: 15px"></div>
            </form>
    </div>

    
</div>
<div class="myfoot" style="margin-bottom: 0px;text-align: center"><p>©2017.12 河北科技师范学院学生考勤管理系统  王亮制作</p></div>
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
