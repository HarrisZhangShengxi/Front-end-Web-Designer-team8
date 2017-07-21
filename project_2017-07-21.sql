# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.18)
# Database: project
# Generation Time: 2017-07-21 21:29:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table MODEL
# ------------------------------------------------------------

CREATE TABLE `MODEL` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor` varchar(30) DEFAULT NULL,
  `release` date DEFAULT NULL COMMENT 'the release date',
  `price` int(11) DEFAULT NULL COMMENT 'the release price',
  `capacity` varchar(10) DEFAULT NULL COMMENT 'momery',
  `size` varchar(30) DEFAULT NULL COMMENT 'screen size',
  `system` varchar(30) DEFAULT NULL COMMENT 'system: android or ios etc',
  `chip` varchar(30) DEFAULT NULL COMMENT 'chip name',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'created date',
  `updated_dt` timestamp NULL DEFAULT NULL COMMENT 'updated date',
  `deleted` int(11) NOT NULL DEFAULT '0' COMMENT 'state 0:exist，1：delete，2：block',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table RATE
# ------------------------------------------------------------

CREATE TABLE `RATE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL COMMENT 'rate date',
  `star` varchar(1) NOT NULL DEFAULT '' COMMENT '1-5 star',
  `comment` varchar(500) DEFAULT NULL,
  `user_id` int(11) NOT NULL COMMENT 'user id',
  `model_id` int(11) NOT NULL COMMENT 'model id',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'created date',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'updated date',
  `deleted` int(11) NOT NULL DEFAULT '0' COMMENT 'state 0:exist，1：delete，2：block',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `model_id` (`model_id`),
  CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `USERS` (`id`),
  CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`model_id`) REFERENCES `MODEL` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table USERS
# ------------------------------------------------------------

CREATE TABLE `USERS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT 'name' COMMENT 'usernames created by users',
  `age` int(3) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0' COMMENT 'state 0:exist，1：delete，2：block',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'updated date',
  `created_atT` timestamp NULL DEFAULT NULL COMMENT 'created date',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
