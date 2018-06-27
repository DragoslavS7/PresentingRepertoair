CREATE DATABASE  IF NOT EXISTS `presentingRepertoair` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `presentingRepertoair`;
-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: presentingRepertoair
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

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
-- Table structure for table `Reserved`
--

DROP TABLE IF EXISTS `Reserved`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reserved` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `address2` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `zip` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tikets` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reserved`
--

LOCK TABLES `Reserved` WRITE;
/*!40000 ALTER TABLE `Reserved` DISABLE KEYS */;
INSERT INTO `Reserved` VALUES (70,'Naslov','Dragoslav','Predojevic','Gagi','gagi@gmail.com','top 1 ','top 1','United States','California','21000','4','2018-06-18 11:13:06'),(71,'gaga','daw','daw','fawfw','fafawaw','fawfaw','fawfw','United States','California','252','3','2018-06-18 11:16:45'),(72,'daw','daw','daw','awd','ad','daw','daw','United States','California','423','2','2018-06-18 11:39:06'),(73,'daw','daw','daw','awd','ad','daw','daw','United States','California','423','2','2018-06-18 11:40:28'),(74,'daw','daw','daw','awd','ad','daw','daw','United States','California','423','2','2018-06-18 11:49:17'),(75,'daw','daw','daw','awd','ad','daw','daw','United States','California','423','2','2018-06-18 11:56:47'),(76,'daw','daw','daw','awd','ad','daw','daw','United States','California','423','2','2018-06-18 11:59:37'),(84,'dawdawdaw','daw','dawdawdaw','dawdawdaw','dawdaw','adwdaw','dawdawdaw','United States','California','23144','3','2018-06-20 08:36:20'),(85,'dawdaw','faw','fsawafasa','aswaf','gagi.predojevic932@hotmail.com','fesds','vevssd','United States','California','231241','3','2018-06-20 08:41:55'),(86,'daw','daw','daw','vdf','bcbc','bfcbcf','bfc','United States','California','432','5','2018-06-20 08:47:18');
/*!40000 ALTER TABLE `Reserved` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-27 16:44:34
