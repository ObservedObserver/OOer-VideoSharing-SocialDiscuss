-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-10-31 13:06:24
-- 服务器版本： 5.7.10-log
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ooer`
--

-- --------------------------------------------------------

--
-- 表的结构 `ooer_comments`
--

CREATE TABLE `ooer_comments` (
  `cid` int(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `establish_date` datetime NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ooer_comments`
--

INSERT INTO `ooer_comments` (`cid`, `uid`, `establish_date`, `content`) VALUES
(1, 'doublelift', '2016-10-29 05:10:08', 'TSM!TSM!TSM!'),
(2, 'doublelift', '2016-10-30 01:29:33', 'WOW~'),
(3, 'doublelift', '2016-10-30 01:33:49', 'That is so FUNNY!!!'),
(4, 'ROOT', '2016-10-31 12:06:20', 'This guy is supper great.'),
(5, 'Tom', '2016-10-31 12:30:49', 'Yes. Set the type "auto_increment"'),
(6, 'Tom', '2016-10-31 16:22:44', '=_=#what a root!'),
(7, 'peanut', '2016-10-31 20:26:15', ':)'),
(8, 'peanut', '2016-10-31 21:04:04', '0.0');

-- --------------------------------------------------------

--
-- 表的结构 `ooer_discuss`
--

CREATE TABLE `ooer_discuss` (
  `uid` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `article` text NOT NULL,
  `aid` int(255) UNSIGNED NOT NULL,
  `establish_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ooer_discuss`
--

INSERT INTO `ooer_discuss` (`uid`, `title`, `article`, `aid`, `establish_date`, `update_date`, `comments`) VALUES
('doublelift', 'Hello,World!', 'Hello,world!This is the first article in ooer!\r\nskbckscks<br>\r\nsjcksck<br>\r\ncnskjdcnjs<br>\r\nOHHHHH!\r\n<p>\r\nhello!\r\n</p>\r\n<p>\r\nlallala\r\n</p>\r\n<form>\r\ntry to insert something here!!!<input type="text">\r\n</form>', 1, '0000-00-00 00:00:00', '2016-10-29 21:08:20', '1,2,3,'),
('ROOT', 'I am ROOT', 'ROOT! ROOT! ROOT!', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4,6,8,'),
('doublelift', 'A_I test', 'can aid grow itself?', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5,'),
('Tom', 'I am a CAT!', 'To be or not to be,<br>\r\nThat is a question!<br>\r\nTo be or not to be,<br>\r\nThat is a question!<br>\r\nTo be or not to be,<br>\r\nThat is a question!<br>\r\nTo be or not to be,<br>\r\nThat is a question!<br>\r\nTo be or not to be,<br>\r\nThat is a question!<br>\r\nTo be or not to be,<br>\r\nThat is a question!<br>\r\nTo be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>\r\nTo be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>To be or not to be,<br>\r\nThat is a question!<br>\r\n\r\n', 4, '2016-10-31 17:53:44', '2016-10-31 18:51:15', '7,'),
('peanut', 'Rox Vs. SKT', '3:2. SKT win. :(', 5, '2016-10-31 21:03:28', '2016-10-31 21:03:28', '');

-- --------------------------------------------------------

--
-- 表的结构 `ooer_users`
--

CREATE TABLE `ooer_users` (
  `uid` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(10) NOT NULL,
  `age` int(10) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `intro` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ooer_users`
--

INSERT INTO `ooer_users` (`uid`, `username`, `password`, `level`, `age`, `picture`, `intro`, `email`) VALUES
('doublelift', 'Gayen', 'd06fe86ac68452da8758d09a344e7ea3', 5, 19, 'upload/doublelift.png', 'I am the best ADCC!', 'MasterHaoChen@icloud.com'),
('ROOT', 'ROOT', 'd06fe86ac68452da8758d09a344e7ea3', 5, 19, 'upload/ROOT.jpg', '    	    	I am the best root!    	    	', 'MasterHaoChen@icloud.com'),
('Tom', 'Tom', 'e10adc3949ba59abbe56e057f20f883e', 5, 19, 'upload/Tom.jpg', '    	HELLO!!    	', 'TomCat@rit.edu'),
('peanut', 'peanut', 'd06fe86ac68452da8758d09a344e7ea3', 5, 17, 'upload/peanut.jpg', 's7 ,Fighting', 'peanut@tigers.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ooer_comments`
--
ALTER TABLE `ooer_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `ooer_discuss`
--
ALTER TABLE `ooer_discuss`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `aid` (`aid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ooer_comments`
--
ALTER TABLE `ooer_comments`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `ooer_discuss`
--
ALTER TABLE `ooer_discuss`
  MODIFY `aid` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
