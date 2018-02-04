-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2018 年 02 月 04 日 01:47
-- 伺服器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `fishkhusc`
--
CREATE DATABASE IF NOT EXISTS `fishkhusc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fishkhusc`;

-- --------------------------------------------------------

--
-- 表的結構 `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `fisherID` int(11) DEFAULT NULL,
  `fishName` varchar(50) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `workTime` varchar(100) DEFAULT NULL,
  `workDay` int(2) DEFAULT NULL,
  `peopleNumber` int(3) DEFAULT NULL,
  `demand` varchar(1000) DEFAULT NULL,
  `fishCount` varchar(20) DEFAULT NULL,
  `fishSize` varchar(20) DEFAULT NULL,
  `tools` varchar(30) DEFAULT NULL,
  `useToolsNumber` varchar(10) DEFAULT NULL,
  `length` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 轉存資料表中的資料 `detail`
--

INSERT INTO `detail` (`index`, `fisherID`, `fishName`, `location`, `workTime`, `workDay`, `peopleNumber`, `demand`, `fishCount`, `fishSize`, `tools`, `useToolsNumber`, `length`) VALUES
(1, 0, '螃蟹', '野柳沿岸', '1500~1900', 1, 5, '4444', '40斤', '444', '蟹籠', '44', '4');

-- --------------------------------------------------------

--
-- 表的結構 `fish`
--

CREATE TABLE IF NOT EXISTS `fish` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `scientific` varchar(50) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 轉存資料表中的資料 `fish`
--

INSERT INTO `fish` (`index`, `scientific`, `image`) VALUES
(1, 'Coryphaena hippurus', NULL);

-- --------------------------------------------------------

--
-- 表的結構 `fishman`
--

CREATE TABLE IF NOT EXISTS `fishman` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `boat` varchar(20) DEFAULT NULL,
  `boatID` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 轉存資料表中的資料 `fishman`
--

INSERT INTO `fishman` (`index`, `name`, `id`, `country`, `boat`, `boatID`) VALUES
(1, '吳謹誠', 'a1234567890', '臺灣', '東坡32', 'CT3-4432');

-- --------------------------------------------------------

--
-- 表的結構 `fishname`
--

CREATE TABLE IF NOT EXISTS `fishname` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `fishID` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 轉存資料表中的資料 `fishname`
--

INSERT INTO `fishname` (`index`, `fishID`, `name`) VALUES
(1, 1, '九萬仔(澎湖)'),
(2, 1, '鱰魚'),
(3, 1, '扁頭刀(澎湖)'),
(4, 1, '萬魚'),
(5, 1, '飛烏虎'),
(6, 1, '鬼頭刀'),
(7, 1, '萬引'),
(8, 1, '鱰');

-- --------------------------------------------------------

--
-- 表的結構 `researchers`
--

CREATE TABLE IF NOT EXISTS `researchers` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `experience` varchar(1000) DEFAULT NULL,
  `project` varchar(1000) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `recommended` varchar(1000) DEFAULT NULL,
  `introduction` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 轉存資料表中的資料 `researchers`
--

INSERT INTO `researchers` (`index`, `name`, `country`, `experience`, `project`, `contact`, `recommended`, `introduction`) VALUES
(2, '趙睿盈', '臺灣', '國立臺灣海洋大學', '新港鬼頭刀', '平日下午', '123', '321');

-- --------------------------------------------------------

--
-- 表的結構 `tools`
--

CREATE TABLE IF NOT EXISTS `tools` (
  `index` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 轉存資料表中的資料 `tools`
--

INSERT INTO `tools` (`index`, `name`) VALUES
(1, '小型海釣船'),
(2, '櫓魚栽'),
(3, '地曳網'),
(4, '焚寄網'),
(5, '流刺網'),
(6, '底拖網'),
(7, '延繩釣'),
(8, '定置網'),
(9, '巾著網船');

-- --------------------------------------------------------

--
-- 表的結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 轉存資料表中的資料 `user`
--

INSERT INTO `user` (`index`, `account`, `password`, `type`) VALUES
(1, '123@1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(2, '321@3', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', 1),
(3, '123@2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
