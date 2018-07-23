-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2018-07-24 00:04:47
-- 服务器版本： 10.1.23-MariaDB-9+deb9u1
-- PHP Version: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- 表的结构 `articleNames`
--

CREATE TABLE `articleNames` (
  `name` text NOT NULL,
  `theme` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `articleNames`
--

INSERT INTO `articleNames` (`name`, `theme`, `time`, `content`) VALUES
('The last day of Earth', 'SciFy', '2018-07-22 08:18:49', ''),
('The Corner', 'Politic', '2018-07-22 08:19:44', ''),
('Software Enginnering As a hardcore liberal art', 'essay', '2018-07-22 08:38:05', ''),
('Mime', 'Fantasy', '2018-07-22 14:05:42', ''),
('荔枝', 'essay', '2018-07-23 07:01:54', ''),
('哀伤试验', 'fiction', '2018-07-23 13:01:37', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
