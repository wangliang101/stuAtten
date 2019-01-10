<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/11
 * Time: 9:49
 */
//连接数据库
$con=mysql_connect("localhost","root","");
//中文编码
mysql_query("set character set 'utf8'");
mysql_query("set names 'utf8'");