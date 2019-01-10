<?php
/**
 * Created by PhpStorm.
 * User: 王亮
 * Date: 2017/12/30
 * Time: 2:11
 */
//添加学生信息，插入到stu数据表中
if(isset($_GET['uname'])&&isset($_GET['upass'])&&isset($_GET['sid'])&&isset($_GET['maj'])&&isset($_GET['class'])) {
    $sid = $_GET['sid'];
    $uname = $_GET['uname'];
    $maj = $_GET['maj'];
    $class = $_GET['class'];
    $upass = $_GET['upass'];
    include "../conn.php";
    mysql_selectdb("stu");
    mysql_query("INSERT INTO `stu` (`sid`, `uname`, `upass`, `maj`, `class`)
 VALUES ( '" . $sid . "', '" . $uname . "', '" . $maj . "', '" . $class . "', '" . $upass . "')");
    header("Location:xxmd.php");
}