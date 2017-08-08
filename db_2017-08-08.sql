# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.19)
# Database: db
# Generation Time: 2017-08-08 08:48:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table defenders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `defenders`;

CREATE TABLE `defenders` (
  `dplayer_num` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearance` int(11) NOT NULL,
  `shooting_accuracy%` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `goal_conceded` int(11) NOT NULL,
  `interceptions` int(11) NOT NULL,
  `total_clearances` int(11) NOT NULL,
  `tackle_success` int(11) NOT NULL,
  `yellow/red_card` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dplayer_num`),
  UNIQUE KEY `defenders_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `defenders` WRITE;
/*!40000 ALTER TABLE `defenders` DISABLE KEYS */;

INSERT INTO `defenders` (`dplayer_num`, `name`, `age`, `height`, `country`, `team`, `appearance`, `shooting_accuracy%`, `goals`, `goal_conceded`, `interceptions`, `total_clearances`, `tackle_success`, `yellow/red_card`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'David Luiz',30,189,'Brazil','Chelsea',114,24,7,86,253,521,121,28,NULL,NULL,NULL),
	(2,'Gary Cahill',32,193,'England','Chelsea',320,27,27,393,407,2614,325,38,NULL,NULL,NULL),
	(3,'Cesar Apilicueta',28,178,'Spain','Chelsea',160,22,3,146,311,513,352,18,NULL,NULL,NULL),
	(4,'Marcos Alonso',27,188,'Spain','Chelsea',56,28,7,53,104,191,100,10,NULL,NULL,NULL),
	(5,'Mathieu Debuchy',32,177,'France','Arsenal',56,23,2,77,112,277,127,14,NULL,NULL,NULL),
	(6,'Kieran Gibbs',27,179,'England','Arsenal',137,20,2,105,257,412,201,15,NULL,NULL,NULL),
	(7,'Per Mertesacker',32,198,'Germany','Arsenal',150,23,5,151,255,807,110,13,NULL,NULL,NULL),
	(8,'Laurent Koscielny',31,186,'France','Arsenal',213,26,17,206,613,1280,273,32,NULL,NULL,NULL),
	(9,'Vincent Kompany\n',31,193,'Belgium','Manchester City',231,19,16,198,489,1414,396,50,NULL,NULL,NULL),
	(10,'Eliaquim Mangala\n',26,188,'France','Manchester City',48,20,0,45,106,268,60,12,NULL,NULL,NULL),
	(11,'John Stones\n',23,188,'England','Manchester City',104,24,1,118,149,467,101,6,NULL,NULL,NULL),
	(12,'Jason Denayer\n',22,184,'Belgium','Manchester City',24,22,0,30,34,80,23,2,NULL,NULL,NULL),
	(13,'Kyle Walker\n',27,178,'England','Manchester City',198,21,5,206,405,667,618,35,NULL,NULL,NULL),
	(14,'Mamadou Sakho\n',27,187,'France','Liverpool',64,25,2,82,106,415,68,2,NULL,NULL,NULL),
	(15,'Nathaniel Clyne\n',26,175,'England','Liverpool',164,24,4,189,258,377,306,15,NULL,NULL,NULL),
	(16,'Dejan Lovren\n',28,188,'Croatia','Liverpool',110,24,4,120,215,776,140,19,NULL,NULL,NULL),
	(17,'James Milner\n',31,175,'England','Liverpool',453,30,48,315,391,363,542,55,NULL,NULL,NULL),
	(18,'Jon Flanagan\n',24,181,'England','Liverpool',46,20,1,51,84,144,94,11,NULL,NULL,NULL),
	(19,'Phil Jones\n',25,180,'England','Manchester United',157,25,2,139,339,873,254,24,NULL,NULL,NULL),
	(20,'Marcos Rojo\n',27,187,'Argentina','Manchester United',59,20,1,43,117,314,90,14,NULL,NULL,NULL),
	(21,'Chris Smalling\n',27,194,'England','Manchester United',166,26,7,150,270,1022,151,14,NULL,NULL,NULL),
	(22,'Luke Shaw\n',22,185,'England','Manchester United',92,23,0,82,117,313,139,10,NULL,NULL,NULL),
	(23,'Daley Blind\n',27,180,'Netherlands','Manchester United',83,22,4,79,205,289,143,8,NULL,NULL,NULL),
	(24,'Antonio Valencia\n',32,180,'Ecuador','Manchester United',288,30,21,228,377,274,529,46,NULL,NULL,NULL),
	(25,'Matteo Darmian\n',27,182,'Italy','Manchester United',46,22,1,26,81,124,96,11,NULL,NULL,NULL),
	(31,'Danny Rose\n',27,173,'England','Tottenham Hotspur',135,23,9,132,259,360,280,35,NULL,NULL,NULL),
	(32,'Toby Alderweireld\n',28,186,'Belgium','Tottenham Hotspur',94,22,6,74,123,588,101,7,NULL,NULL,NULL),
	(33,'Jan Vertonghen\n',30,189,'Belgium','Tottenham Hotspur',151,21,4,160,317,1030,225,27,NULL,NULL,NULL),
	(34,'Kieran Trippier\n',26,178,'England','Tottenham Hotspur',56,20,1,60,100,176,82,4,NULL,NULL,NULL),
	(35,'Ben Davies\n',24,181,'Wales','Tottenham Hotspur',125,23,4,135,189,457,193,15,NULL,NULL,NULL);

/*!40000 ALTER TABLE `defenders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table forwards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `forwards`;

CREATE TABLE `forwards` (
  `fplayer_num` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearance` int(11) NOT NULL,
  `shooting_accuracy%` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `passing_accuracy%` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `foul_conceded` int(11) NOT NULL,
  `tackle_success%` int(11) NOT NULL,
  `yellow/red_card` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`fplayer_num`),
  UNIQUE KEY `forwards_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `forwards` WRITE;
/*!40000 ALTER TABLE `forwards` DISABLE KEYS */;

INSERT INTO `forwards` (`fplayer_num`, `name`, `age`, `height`, `country`, `team`, `appearance`, `shooting_accuracy%`, `goals`, `passing_accuracy%`, `assists`, `foul_conceded`, `tackle_success%`, `yellow/red_card`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Michy Batshuayi',25,185,'Belgium','Chelsea',20,47,5,83,3,8,50,0,NULL,NULL,NULL),
	(2,'Diego Costa',29,186,'Spain','Chelsea',89,42,52,75,16,107,55,52,NULL,NULL,NULL),
	(3,'Alexis Sánchez',28,169,'Chile','Arsenal',103,38,53,78,22,136,53,11,NULL,NULL,NULL),
	(4,'Olivier Giroud',30,192,'France\n','Arsenal',164,39,69,77,23,168,52,18,NULL,NULL,NULL),
	(5,'Theo Walcott',28,176,'England','Arsenal',264,43,65,80,43,227,49,6,NULL,NULL,NULL),
	(6,'Danny Welbeck',26,185,'England','Arsenal',170,39,36,73,17,126,48,12,NULL,NULL,NULL),
	(7,'Raheem Sterling\n',22,170,'England','Manchester City',159,39,31,78,23,109,55,17,NULL,NULL,NULL),
	(8,'Sergio Agüero\n',29,173,'Argentina','Manchester City',181,42,122,79,29,298,50,18,NULL,NULL,NULL),
	(9,'Roberto Firmino\n',25,181,'Brazil','Liverpool',66,43,21,77,14,70,52,6,NULL,NULL,NULL),
	(10,'Daniel Sturridge\n',27,188,'England','Liverpool',185,41,72,78,19,202,51,9,NULL,NULL,NULL),
	(11,'Anthony Martial\n',21,181,'France','Manchester United',56,43,15,79,10,43,54,4,NULL,NULL,NULL),
	(12,'Marcus Rashford\n',19,180,'England','Manchester United',43,42,10,76,3,25,56,3,NULL,NULL,NULL),
	(13,'Romelu Lukaku\n',24,190,'Belgium','Manchester United',186,45,85,78,28,241,57,11,NULL,NULL,NULL),
	(14,'Harry Kane\n',24,188,'England','Tottenham Hotspur',116,47,78,79,12,193,59,12,NULL,NULL,NULL);

/*!40000 ALTER TABLE `forwards` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table goalkeepers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `goalkeepers`;

CREATE TABLE `goalkeepers` (
  `gplayer_num` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearance` int(11) NOT NULL,
  `clean_sheets` int(11) NOT NULL,
  `goal_conceded` int(11) NOT NULL,
  `penalty_saves` int(11) NOT NULL,
  `distribution_accuracy` int(11) NOT NULL,
  `total_saves` int(11) NOT NULL,
  `total_clearances` int(11) NOT NULL,
  `yellow/red_card` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`gplayer_num`),
  UNIQUE KEY `goalkeepers_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `goalkeepers` WRITE;
/*!40000 ALTER TABLE `goalkeepers` DISABLE KEYS */;

INSERT INTO `goalkeepers` (`gplayer_num`, `name`, `age`, `height`, `country`, `team`, `appearance`, `clean_sheets`, `goal_conceded`, `penalty_saves`, `distribution_accuracy`, `total_saves`, `total_clearances`, `yellow/red_card`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Thibaut Courtois',25,199,'Belgium','Chelsea',91,33,87,1,1,209,48,5,NULL,NULL,NULL),
	(2,'Willy Caballero',35,186,'Argentina','Chelsea',23,7,22,1,0,52,13,0,NULL,NULL,NULL),
	(3,'Petr Cech',35,196,'Czech Republic','Arsenal',402,149,276,3,253,886,182,7,NULL,NULL,NULL),
	(4,'David Ospina',28,183,'Colombia','Arsenal',24,10,20,0,9,68,19,0,NULL,NULL,NULL),
	(5,'Claudio Bravo',34,184,'Chile','Manchester City',22,5,26,1,27,33,27,0,NULL,NULL,NULL),
	(6,'Simon Mignolet\n',29,193,'Belgium','Liverpool',226,73,287,7,241,634,145,4,NULL,NULL,NULL),
	(7,'Adam Bogdan\n',29,194,'Hungary','Liverpool',26,1,51,1,74,92,30,0,NULL,NULL,NULL),
	(8,'David de Gea\n',26,192,'Spain','Manchester United',200,75,196,2,750,535,70,3,NULL,NULL,NULL),
	(9,'Hugo Lloris\n',30,188,'France','Tottenham Hotspur',170,59,185,2,796,427,200,2,NULL,NULL,NULL),
	(10,'Michel Vorm\n',33,183,'Netherlands','Tottenham Hotspur',99,31,127,3,558,309,26,6,NULL,NULL,NULL);

/*!40000 ALTER TABLE `goalkeepers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table midfielders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `midfielders`;

CREATE TABLE `midfielders` (
  `mplayer_num` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearance` int(11) NOT NULL,
  `shooting_accuracy%` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `passing_accuracy%` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `foul_conceded` int(11) NOT NULL,
  `tackle_success%` int(11) NOT NULL,
  `yellow/red_card` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mplayer_num`),
  UNIQUE KEY `midfielders_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `midfielders` WRITE;
/*!40000 ALTER TABLE `midfielders` DISABLE KEYS */;

INSERT INTO `midfielders` (`mplayer_num`, `name`, `age`, `height`, `country`, `team`, `appearance`, `shooting_accuracy%`, `goals`, `passing_accuracy%`, `assists`, `foul_conceded`, `tackle_success%`, `yellow/red_card`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Pedro',30,169,'Spain','Chelsea',64,28,16,82,11,33,77,9,NULL,NULL,NULL),
	(2,'Cesc Fabregas',30,180,'Spain','Chelsea',312,36,48,85,107,178,75,68,NULL,NULL,NULL),
	(3,'Eden Hazard',26,173,'Belgium','Chelsea',174,42,57,85,35,138,81,11,NULL,NULL,NULL),
	(4,'N\'Golo Kante',26,168,'France','Chelsea',72,25,2,89,5,12,69,12,NULL,NULL,NULL),
	(5,'Willian',29,175,'Brazil','Chelsea',130,33,19,83,13,68,73,15,NULL,NULL,NULL),
	(6,'Victor Moses',27,177,'Nigeria','Chelsea',190,28,17,78,15,81,76,13,NULL,NULL,NULL),
	(7,'Aaron Ramsey',26,178,'Wales','Arsenal',210,32,29,86,32,117,75,26,NULL,NULL,NULL),
	(8,'Jack Wilshere',25,172,'England','Arsenal',146,36,7,84,14,44,75,30,NULL,NULL,NULL),
	(9,'Mesut Özil',28,180,'Germany','Arsenal',116,47,23,89,42,69,75,6,NULL,NULL,NULL),
	(10,'Alex Oxlade-Chamberlain',23,180,'England','Arsenal',129,25,9,84,14,37,80,6,NULL,NULL,NULL),
	(11,'Santiago Cazorla',32,168,'Spain','Arsenal',129,36,25,85,35,112,76,13,NULL,NULL,NULL),
	(12,'Francis Coquelin',26,178,'France','Arsenal',98,10,0,80,1,3,74,18,NULL,NULL,NULL),
	(13,'Samir Nasri\n',30,175,'France','Manchester City',215,34,36,87,38,117,79,27,NULL,NULL,NULL),
	(14,'Kevin De Bruyne\n',26,181,'Belgium','Manchester City',64,34,13,89,28,47,76,7,NULL,NULL,NULL),
	(15,'David Silva\n',31,173,'Spain','Manchester City',220,32,39,88,64,128,74,24,NULL,NULL,NULL),
	(16,'Fernandinho',32,179,'Brazil','Manchester City',131,29,12,76,9,35,71,29,NULL,NULL,NULL),
	(17,'Yaya Touré\n',34,188,'Cote D\'Ivoire','Manchester City',220,34,62,83,30,150,73,33,NULL,NULL,NULL),
	(18,'Philippe Coutinho\n',25,171,'Brazil','Liverpool',138,31,34,82,29,140,77,9,NULL,NULL,NULL),
	(19,'Jordan Henderson\n',27,182,'England','Liverpool',251,29,24,86,37,86,72,31,NULL,NULL,NULL),
	(20,'Adam Lallana\n',29,172,'England','Liverpool',156,37,29,84,27,93,79,14,NULL,NULL,NULL),
	(21,'Emre Can\n',23,184,'Germany','Liverpool',89,31,7,80,2,28,82,18,NULL,NULL,NULL),
	(22,'Paul Pogba\n',24,191,'France','Manchester United',33,33,5,88,4,32,75,7,NULL,NULL,NULL),
	(23,'Juan Mata\n',29,170,'Spain','Manchester United',193,38,45,87,43,115,73,15,NULL,NULL,NULL),
	(24,'Jesse Lingard\n',24,175,'England','Manchester United',51,38,5,82,3,26,75,7,NULL,NULL,NULL),
	(25,'Michael Carrick\n',36,188,'England','Manchester United',479,23,24,84,40,55,70,41,NULL,NULL,NULL),
	(26,'Ashley Young\n',32,175,'England','Manchester United',297,33,44,86,63,165,75,51,NULL,NULL,NULL),
	(27,'Marouane Fellaini\n',29,194,'Belgium','Manchester United',230,37,33,84,15,137,78,56,NULL,NULL,NULL),
	(28,'Nemanja Matic\n',29,194,'Serbia','Manchester United',123,28,4,82,16,27,75,23,NULL,NULL,NULL),
	(29,'Son Heung-Min\n',25,183,'South Korea','Tottenham Hotspur',62,39,18,83,7,46,74,2,NULL,NULL,NULL),
	(30,'Erik Lamela\n',25,181,'Argentina','Tottenham Hotspur',85,33,8,85,18,41,75,17,NULL,NULL,NULL),
	(31,'Victor Wanyama\n',26,188,'Kenya','Tottenham Hotspur',121,24,8,83,3,28,77,34,NULL,NULL,NULL),
	(32,'Eric Dier\n',23,188,'England','Tottenham Hotspur',101,25,7,84,4,16,78,20,NULL,NULL,NULL),
	(33,'Moussa Sissoko\n',27,187,'France','Tottenham Hotspur',143,32,11,85,19,54,83,25,NULL,NULL,NULL),
	(34,'Mousa Dembélé\n',30,185,'Belgium','Tottenham Hotspur',205,31,12,86,12,59,82,24,NULL,NULL,NULL),
	(35,'Christian Eriksen\n',25,175,'Denmark','Tottenham Hotspur',134,36,31,87,38,135,80,9,NULL,NULL,NULL);

/*!40000 ALTER TABLE `midfielders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table teams
# ------------------------------------------------------------

DROP TABLE IF EXISTS `teams`;

CREATE TABLE `teams` (
  `team_num` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shooting_accuracy%` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `passing_accuracy%` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `save` int(11) NOT NULL,
  `tackle_success%` int(11) NOT NULL,
  `yellow_card` int(11) NOT NULL,
  `red_card` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`team_num`),
  UNIQUE KEY `teams_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;

INSERT INTO `teams` (`team_num`, `name`, `shooting_accuracy%`, `goals`, `passing_accuracy%`, `assists`, `save`, `tackle_success%`, `yellow_card`, `red_card`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Chelsea',34,1645,83,207536,391,76,1536,74,NULL,NULL,NULL),
	(2,'Arsenal',36,1698,84,222156,463,74,1417,84,NULL,NULL,NULL),
	(3,'Liverpool',33,1601,81,207917,355,75,1219,55,NULL,NULL,NULL),
	(4,'Manchester City\n',34,1173,82,204956,337,75,1158,63,NULL,NULL,NULL),
	(5,'Manchester United\n',35,1856,84,214139,382,75,1336,61,NULL,NULL,NULL),
	(6,'Tottenham Hotspur\n',34,1406,80,190626,414,76,1397,59,NULL,NULL,NULL);

/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
