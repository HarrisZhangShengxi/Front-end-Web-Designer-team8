-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: phone
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model` (
  `MODL_NUM` int(11) NOT NULL AUTO_INCREMENT,
  `MODL_NAME` char(30) DEFAULT NULL,
  `MODL_VENDOR` char(30) NOT NULL,
  `MODL_RELEASE` date DEFAULT NULL,
  `MODL_PRICE` char(30) DEFAULT NULL,
  `MODL_CAPACITY` char(10) DEFAULT NULL,
  `MODL_SIZE` char(30) DEFAULT NULL,
  `MODL_SYSTEM` char(30) DEFAULT NULL,
  `MODL_CHIP` char(30) DEFAULT NULL,
  PRIMARY KEY (`MODL_NUM`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model`
--

LOCK TABLES `model` WRITE;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` VALUES (1,'IPhone 6s','Apple','2015-09-25','CAD$769/ CAD$899','32GB/128GB','(138.3mm*67.1mm*7.1mm) & 143 g','IOS 10','A9 Chip with 64-bit architectu'),(2,'IPhone 6s Plus','Apple','2015-09-25','CAD$899/ CAD$1,029','32GB/128GB','(158.2mm*77.9mm*7.3mm) & 192 g','IOS 10','A9 Chip with 64-bit architectu'),(3,'IPhone 7','Apple','2016-09-16','CAD$899/ CAD$1,029/ CAD$1,159','32GB/128GB','(138.3mm*67.1mm*7.1mm) & 138 g','IOS 10','A10 Fusion chip with 64-bit ar'),(4,'IPhone 7 Plus','Apple','2016-09-16','CAD$1,049/ CAD$1,179/ CAD$1,30','32GB/128GB','(158.2mm*77.9mm*7.3mm) & 188 g','IOS 10','A10 Fusion chip with 64-bit ar'),(5,'Nexus 6P','Google','2015-10-20','CAD$699/ CAD$749/ CAD$899','32GB/64GB/','(159.3mm*77.8mm*7.3mm) & 178 g','Android 6.0 Marshmallow','Qualcomm® Snapdragon™ 810 v2.1'),(6,'Pixel','Google','2016-10-20','CAD$749/ CAD$899','32GB/128GB','(143.8mm*69.5mm*7.3mm) & 143 g','Android 7.1 Nougat','Qualcomm® Snapdragon™ 821, 64-'),(7,'Galaxy S8','Samsung','2017-04-21','CAD$1,035','64GB','(148.9mm*68.1mm*8mm) & 155 gra','Android','MSM 8998 Octa Core 2.35Ghz (Qu'),(8,'Galaxy S8+','Samsung','2017-04-21','CAD$1,115','64GB','(159.5mm*73.4mm*8.1mm) & 173 g','Android','MSM 8998 Octa Core 2.35Ghz (Qu'),(9,'Galaxy S7','Samsung','2016-03-12','CAD$899','32GB','(142.4mm*69.6mm*7.9mm) & 152 g','Android','1.6GHz octa-core'),(10,'Galaxy Note 5','Samsung','2015-08-21','CAD$697/ CAD$793','32GB/64GB','(153.2mm*76.1mm*7.6) & 171 gra','Android','Octa Core 2.1Ghz'),(11,'HTC U11','HTC','2017-06-05','CAD$899','64GB','(153.9mm*75.9mm*7.9mm) & 169 g','Android™ 7.1 with HTC Sense™','Qualcomm™ Snapdragon™ 835, 64'),(12,'HTC 10','HTC','2016-05-06','CAD$749','32GB','(145.9mm*71.9mm*9mm) & 161 gra','Android™ 6 with HTC Sens','Qualcomm® Snapdragon™ 820, Qua'),(13,'HTC U Ultra','HTC','2017-03-10','CAD$949','64GB','(162.41mm*79.79mm*7.99mm) & 17','Android™ 7.0 with HTC Sense™','Qualcomm™ Snapdragon™ 821, 64'),(14,'Mate 9','Huawei','0000-00-00','CAD$899','64GB','(156.9mm*78.9mm*7.9mm) & 190 g','Android 7.0 (Nougat)','Octa-core (4x2.4 GHz Cortex-A7'),(15,'P10','Huawei','2017-02-26','CAD$959','32GB','(145.3mm*69.3mm*6.98mm) & 145','Android™ 7.0','HUAWEI Kirin 960 CPU, Octa-cor'),(16,'P9','Huawei','0000-00-00','CAD$676/ CAD$807','32GB/64GB','(145mm*70.9mm*7mm) & 144 grams','Android 6.0 (Marshmallow)','Octa-core (4x2.5 GHz Cortex-A7'),(17,'Mate 8','Huawei','0000-00-00','CAD$676/ CAD$749','32GB/64GB','(157.1mm*80.6mm*7.9mm) & 185 g','Android 6.0 (Marshmallow)','Octa-core (4x2.3 GHz Cortex-A7');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rate` (
  `RATE_NUM` int(11) NOT NULL AUTO_INCREMENT,
  `RATE_DATE` date DEFAULT NULL,
  `RATE_STAR` char(1) DEFAULT NULL,
  `RATE_COMMENT` char(255) DEFAULT NULL,
  `USER_NUM` int(11) DEFAULT NULL,
  `MODL_NUM` int(11) DEFAULT NULL,
  PRIMARY KEY (`RATE_NUM`),
  KEY `USER_NUM` (`USER_NUM`),
  KEY `MODL_NUM` (`MODL_NUM`),
  CONSTRAINT `rate-fk1` FOREIGN KEY (`USER_NUM`) REFERENCES `user` (`USER_NUM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `rate-fk2` FOREIGN KEY (`MODL_NUM`) REFERENCES `model` (`MODL_NUM`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate`
--

LOCK TABLES `rate` WRITE;
/*!40000 ALTER TABLE `rate` DISABLE KEYS */;
/*!40000 ALTER TABLE `rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `USER_NUM` int(11) NOT NULL AUTO_INCREMENT,
  `USER_NAME` char(30) NOT NULL,
  `USER_AGE` char(3) NOT NULL,
  `USER_EMAIL` char(50) NOT NULL,
  PRIMARY KEY (`USER_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-19 17:15:33
