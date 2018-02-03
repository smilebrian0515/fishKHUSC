-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1:3306
-- 產生時間： 2018-02-03 06:02:42
-- 伺服器版本: 5.7.19
-- PHP 版本： 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fish`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `identify` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `fish`
--

DROP TABLE IF EXISTS `fish`;
CREATE TABLE IF NOT EXISTS `fish` (
  `species` varchar(50) NOT NULL,
  `fno` int(11) NOT NULL,
  PRIMARY KEY (`fno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `fishman`
--

DROP TABLE IF EXISTS `fishman`;
CREATE TABLE IF NOT EXISTS `fishman` (
  `fname` varchar(50) NOT NULL,
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `shiptype` varchar(50) NOT NULL,
  `requirement` varchar(10000) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `ftotal`
--

DROP TABLE IF EXISTS `ftotal`;
CREATE TABLE IF NOT EXISTS `ftotal` (
  `fid` int(11) NOT NULL,
  `fno` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `manp` int(11) NOT NULL,
  PRIMARY KEY (`fid`,`fno`,`lid`,`manp`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `location` varchar(50) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `researchers`
--

DROP TABLE IF EXISTS `researchers`;
CREATE TABLE IF NOT EXISTS `researchers` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(50) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `recom` varchar(2000) NOT NULL,
  `exp` varchar(500) NOT NULL,
  `rchexp` varchar(500) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
