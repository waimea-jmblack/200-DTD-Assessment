-- Adminer 4.8.4 MySQL 8.0.39-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `jmblack_BPdatabase` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `jmblack_BPdatabase`;

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vineyard` int NOT NULL,
  `row` int NOT NULL,
  `post` int NOT NULL,
  `priority` int NOT NULL,
  `completed` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `vineyard` (`vineyard`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`vineyard`) REFERENCES `vineyards` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tasks` (`id`, `vineyard`, `row`, `post`, `priority`, `completed`) VALUES
(2,	1,	2,	0,	3,	0),
(4,	1,	42,	0,	4,	0),
(5,	1,	49,	0,	2,	1),
(33,	1,	1,	1,	1,	0),
(34,	2,	1,	1,	1,	0),
(36,	1,	23,	5,	1,	0),
(37,	1,	99,	88,	1,	0),
(38,	2,	56,	12,	2,	0);

DROP TABLE IF EXISTS `vineyards`;
CREATE TABLE `vineyards` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `vineyards` (`id`, `name`) VALUES
(1,	'Home'),
(2,	'Karere');

-- 2024-09-01 22:54:21
