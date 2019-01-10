-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-01-01 16:21:37
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu`
--

-- --------------------------------------------------------

--
-- 表的结构 `stu`
--

CREATE TABLE `stu` (
  `id` int(20) NOT NULL,
  `sid` varchar(11) COLLATE utf8_bin NOT NULL COMMENT '学号',
  `uname` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '姓名',
  `upass` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '密码',
  `maj` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '专业',
  `class` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '班级',
  `cq` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '出勤次数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `stu`
--

INSERT INTO `stu` (`id`, `sid`, `uname`, `upass`, `maj`, `class`, `cq`) VALUES
(2, '0913150117', '王亮', '123', '网络工程', '1501', '10'),
(9, '0913150114', '软鹏飞', '123', '网络工程', '1501', '7'),
(11, '0913150230', '张延明', '123', '网络工程', '1502', '12'),
(12, '0913150229', '张鹏', '123', '网络工程', '1502', '11'),
(13, '0961160404', '董淑慧', '123', '科技', '1604', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `stu`
--
ALTER TABLE `stu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
