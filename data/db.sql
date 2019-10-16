
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `lesson5` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `lesson5`;

DROP TABLE IF EXISTS `Images`;
CREATE TABLE `Images` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Path` text COLLATE utf8_unicode_ci NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Size` int(11) NOT NULL,
  `ViewCount` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Images` (`ID`, `Path`, `Name`, `Size`, `ViewCount`) VALUES
(1,	'public',	'20190824_151141.jpg',	2244859,	0),
(2,	'public',	'20190928_153417.jpg',	2637418,	0),
(3,	'public',	'20191001_195608.jpg',	7234992,	0),
(4,	'public',	'20191001_195614.jpg',	7273648,	0),
(5,	'public',	'20191013_143455.jpg',	2630981,	0),
(6,	'public',	'IMG-20190929-WA0006.jpg',	131092,	0);