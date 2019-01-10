<?php
/**
 * Created by PhpStorm.
 * User: 王亮
 * Date: 2017/12/29
 * Time: 22:57
 */
//用户登陆判定  管理员登陆
if (isset($_GET['uname'])&&isset($_GET['upass'])&&$_GET['aa'].value ==2){
    $uname=$_GET['uname'];
    $upass=$_GET['upass'];
    session_start();                //启用session
    $_SESSION['name']=$uname;       //保存name
    include "conn.php";             //连接数据库
    mysql_selectdb("user");
    $res= mysql_query("SELECT * FROM `user` WHERE `uname` = '".$uname."' AND `upass` = '".$upass."'");  //查询影响的行数
    $row=mysql_num_rows($res);
    if ($row>0){
        echo "登陆成功";
        header("Location:dtree/example01.html");
    }
    else{
        echo "用户名或密码错误,请<a href='login.html'>重新登陆</a>或联系超级管理员";
    }
}

//用户登陆判定  学生登陆
 if (isset($_GET['uname'])&&isset($_GET['upass'])&&$_GET['aa'].value ==1){
    $uname=$_GET['uname'];
    $upass=$_GET['upass'];
    session_start();                //启用session
    $_SESSION['name']=$uname;      //保存name
    include "conn.php";             //连接数据库
    mysql_selectdb("stu");
    $res1= mysql_query("SELECT * FROM `stu` WHERE `uname` = '".$uname."' AND `upass` = '".$upass."'");    //查询影响的行数
    $row1=mysql_num_rows($res1);
    if ($row1>0){
        echo "登陆成功";
        header("Location:index.php");
    }
    else{
        echo "用户名或密码错误,请<a href='login.html'>重新登陆</a>或<a href='zc.html'>注册</a>";
    }
}