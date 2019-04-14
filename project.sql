-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2019 at 06:41 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `MessagePk` int(11) NOT NULL AUTO_INCREMENT,
  `MessageTitle` varchar(255) DEFAULT NULL,
  `MessageContent` varchar(255) DEFAULT NULL,
  `ToUser` varchar(255) DEFAULT NULL,
  `FromUserFk` int(11) NOT NULL DEFAULT '0',
  `MessageTime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MessagePk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`MessagePk`, `MessageTitle`, `MessageContent`, `ToUser`, `FromUserFk`, `MessageTime`) VALUES
(1, 'sub', 'message', 'a@a.aa', 1, '2019-04-14 13:23:23'),
(2, 'bla', 'blabla', 'name@name.name', 1, '2019-04-14 13:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserPk` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(100) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `SecurityQuestionFk` int(5) NOT NULL DEFAULT '0',
  `SecurityQuestionAnswer` varchar(250) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT NULL,
  `LastLoginDate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`UserPk`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserPk`, `UserName`, `PhoneNumber`, `Email`, `SecurityQuestionFk`, `SecurityQuestionAnswer`, `Password`, `CreationDate`, `LastLoginDate`) VALUES
(1, 'name', '0101010', 'name@name.name', 6, 'bla', '$2y$10$RkA3xFoxUjenXuAOpY3Yoea3zsOUreSAma5iUeYoIkq0GMuKUPUUi', '2019-04-14 11:02:27', NULL),
(2, 'nn', '010010', NULL, 2, 'bbl', '$2y$10$faMRihHKZd9ZnzoKTVBc4eiFQ4oeDlrlckNZdeMFjS0KEHkplYrSS', '2019-04-14 11:02:27', NULL),
(3, 'nammeee', '010101', NULL, 2, 'bbb', '$2y$10$3pY73WfMEOkmA8aaq1V33ORabPq7ZHc6IBsuyRnenTaTKWFfO4c3q', '2019-04-14 13:04:00', NULL),
(4, 'testing', '01011', NULL, 2, 'btest', '$2y$10$Ak3jEVW52LvfNr2j.N2ETOPnhk4haX5llmta0UMNbm2v0kB6KaDVa', '2019-04-14 13:06:36', NULL),
(5, 'jj', '010', NULL, 2, 'll', '$2y$10$OUtL9GWX3pnYXL4l7XRmP.vn.o66RFRXYTENMZ8me8ikNju2HqxvK', '2019-04-14 13:10:39', NULL),
(6, 'testttt', '010', NULL, 2, 'a', '$2y$10$eEsu7aiY3H2yspgAoGQ81esuhLd4oW.TtNFbP8cOYKE/h.2RFfCU6', '2019-04-14 13:32:11', NULL),
(7, 'ttt', '010', NULL, 4, 'a', '$2y$10$k0lK8pKqGFEjB4fIfSff0Org3Qh13G/5n0JaI2o6IQB1vvuNUOUfi', '2019-04-14 13:34:29', NULL),
(8, 'aaaa', '010', 'a@a.aa', 6, 'aa', '$2y$10$VUgCdHYpa1eu/D7TfiTuS.gX9kqhhQg.OZWo4tu/8WHRukWbcIaae', '2019-04-14 13:35:25', NULL),
(9, 'aa', '01010', 'a@a.aaa', 6, 'a', '$2y$10$cADcJRk4wsEfcj9jPnKx.ONt7I3XmW/e0hZa3pBgwtoqp1E6pooYW', '2019-04-14 13:44:12', NULL),
(10, 'as', '01010', 'as@as.as', 2, 'sa', '$2y$10$qD3M.vZmoHBr/P5xrWPwbOSmM3LvqxQ1orQ29HsUP5VmCoggxpHfS', '2019-04-14 13:58:45', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
