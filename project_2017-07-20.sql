# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.18)
# Database: project
# Generation Time: 2017-07-20 14:40:48 +0000
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
  `MODL_NUM` char(4) NOT NULL,
  `MODL_VENDOR` varchar(30) DEFAULT NULL,
  `MODL_RELEASE` date DEFAULT NULL,
  `MODL_PRICE` int(11) DEFAULT NULL,
  `MODL_CAPACITY` char(10) DEFAULT NULL,
  `MODL_SIZE` char(30) DEFAULT NULL,
  `MODL_SYSTEM` char(30) DEFAULT NULL,
  `MODL_CHIP` char(30) DEFAULT NULL,
  `MODL_CREARED_AT` timestamp NULL DEFAULT NULL,
  `MODL_UPDATED_AT` timestamp NULL DEFAULT NULL,
  `MODL_DALETED` int(11) DEFAULT NULL,
  PRIMARY KEY (`MODL_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='This is the phone model table which include the info of the model.';



# Dump of table RATE
# ------------------------------------------------------------

CREATE TABLE `RATE` (
  `RATE_NUM` char(4) NOT NULL,
  `RATE_DATE` date DEFAULT NULL,
  `RATE_STAR` char(1) DEFAULT NULL,
  `RATE_COMMENT` varchar(500) DEFAULT NULL,
  `USER_NUM` char(4) DEFAULT NULL,
  `MODL_NUM` char(4) DEFAULT NULL,
  `RATE_CREARED_AT` timestamp NULL DEFAULT NULL,
  `RATE_UPDATED_AT` timestamp NULL DEFAULT NULL,
  `RATE_DALETED` int(11) DEFAULT NULL,
  PRIMARY KEY (`RATE_NUM`),
  KEY `USER_NUM` (`USER_NUM`),
  KEY `MODL_NUM` (`MODL_NUM`),
  CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`USER_NUM`) REFERENCES `USER` (`USER_NUM`),
  CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`MODL_NUM`) REFERENCES `MODEL` (`MODL_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='This is the rate. Rate star allows user to choose from 1 to 5.';



# Dump of table USER
# ------------------------------------------------------------

CREATE TABLE `USER` (
  `USER_NUM` char(4) NOT NULL,
  `USER_NAME` varchar(30) DEFAULT NULL,
  `USER_AGE` char(3) NOT NULL,
  `USER_EMAIL` varchar(50) DEFAULT NULL,
  `USER_DELETAED` int(11) NOT NULL,
  `USER_UPDATED_AT` timestamp NULL DEFAULT NULL,
  `USER_CREARED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`USER_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='This the user table, using to store users’ info.';




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
