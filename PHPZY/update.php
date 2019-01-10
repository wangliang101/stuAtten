<?php
/**
 * Created by PhpStorm.
 * User: 王亮
 * Date: 2017/12/31
 * Time: 19:59
 */
session_start();
$fid=$_SESSION['fid'];
echo $fid;
if (isset($_GET['uname'])&&$_GET['uname']!=""&&isset($_GET['upass'])&&$_GET['upass']!=""&&isset($_GET['uname'])&&$_GET['uname']!=""&&isset($_GET['maj'])&&$_GET['maj']!=""&&isset($_GET['class'])&&$_GET['class']!=""){
    $uname=$_GET['uname'];
    $upss=$_GET['upass'];
    $maj=$_GET['maj'];
    $class=$_GET['class'];

    include "conn.php";
    mysql_selectdb("stu");


}
