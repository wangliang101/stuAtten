<?php
/**
 * Created by PhpStorm.
 * User: 王亮
 * Date: 2017/12/31
 * Time: 16:55
 */
//删除学生信息
include "../conn.php";
mysql_selectdb("stu");
mysql_query("DELETE FROM `stu` WHERE `stu`.`id` = ".$_GET['fid']);
header("Location:stu-del.php");
