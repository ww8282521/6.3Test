-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 12 日 02:56
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `student`
--
CREATE DATABASE IF NOT EXISTS `student` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `student`;

-- --------------------------------------------------------

--
-- 表的结构 `banji`
--

CREATE TABLE IF NOT EXISTS `banji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `banji`
--

INSERT INTO `banji` (`id`, `name`) VALUES
(1, '网络1501班'),
(2, '网络1502班'),
(3, '网络1503班'),
(4, '网络1504班'),
(5, '网络1505班'),
(6, '网络1506班'),
(7, '网络1507班');

-- --------------------------------------------------------

--
-- 表的结构 `chengji`
--

CREATE TABLE IF NOT EXISTS `chengji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `xueid` int(11) NOT NULL,
  `keid` int(11) NOT NULL,
  `fenshu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `chengji`
--

INSERT INTO `chengji` (`id`, `xueid`, `keid`, `fenshu`) VALUES
(1, 1, 1, 90),
(2, 1, 2, 65),
(3, 1, 3, 88),
(4, 2, 1, 75),
(5, 2, 2, 29),
(6, 2, 3, 81),
(7, 3, 1, 48),
(8, 3, 2, 35),
(9, 3, 3, 77);

-- --------------------------------------------------------

--
-- 表的结构 `kecheng`
--

CREATE TABLE IF NOT EXISTS `kecheng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `kecheng`
--

INSERT INTO `kecheng` (`id`, `name`) VALUES
(1, '语文'),
(2, '数学'),
(3, '英语'),
(4, '政治'),
(5, '历史'),
(6, '生物'),
(7, '地理');

-- --------------------------------------------------------

--
-- 表的结构 `xuesheng`
--

CREATE TABLE IF NOT EXISTS `xuesheng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  `classid` int(11) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `xuesheng`
--

INSERT INTO `xuesheng` (`id`, `name`, `classid`, `birthday`) VALUES
(1, '小二', 1, '2017-04-12'),
(2, '小三', 1, '2010-10-10'),
(3, '小四', 1, '1995-03-05'),
(4, '小五', 2, '2013-05-06'),
(5, '小六', 2, '2013-10-06'),
(6, '小七', 3, '2010-01-12'),
(7, '小八', 4, '2000-12-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
