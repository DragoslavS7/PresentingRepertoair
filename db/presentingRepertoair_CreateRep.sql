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
-- Table structure for table `CreateRep`
--

DROP TABLE IF EXISTS `CreateRep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CreateRep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `dateOf` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `dateTo` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CreateRep`
--

LOCK TABLES `CreateRep` WRITE;
/*!40000 ALTER TABLE `CreateRep` DISABLE KEYS */;
INSERT INTO `CreateRep` VALUES (35,'Blog Post One','2018-06-21','2018-06-14','Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio','C:\\fakepath\\Screenshot from 2018-03-15 11:22:27.png','2018-06-18 12:40:32'),(36,'Blog Post One','2018-06-21','2018-06-14','Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio','C:\\fakepath\\Screenshot from 2018-03-15 11:22:27.png','2018-06-18 12:41:39'),(37,'Blog Post One','2018-06-21','2018-06-14','Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio','C:\\fakepath\\Screenshot from 2018-03-15 11:22:27.png','2018-06-18 12:41:40'),(38,'Blog Post One','2018-06-21','2018-06-14','Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit ','C:\\fakepath\\Screenshot from 2018-03-15 11:22:27.png','2018-06-18 12:41:48'),(40,'test','2018-06-22','2018-06-28','dwadawda','C:\\fakepath\\default.png','2018-06-20 08:59:56'),(41,'teste','2018-06-30','2018-06-30','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su','C:\\fakepath\\default.png','2018-06-20 09:29:09'),(42,'Test','2018-06-26','2018-06-30','Lorem ipsom dolar sit,Lorem ipsom dolar sit,Lorem ipsom dolar sit,Lorem ipsom dolar sit,Lorem ipsom dolar sit,Lorem ipsom dolar sit','C:\\fakepath\\veseli-muzicari-01.jpg','2018-06-27 09:55:28'),(43,'Test','2018-06-26','2018-06-30','Lorem ipsom dolar sit,Lorem ipsom dolar sit,Lorem ipsom dolar sit,Lorem ipsom dolar sit,Lorem ipsom dolar sit,Lorem ipsom dolar sit','C:\\fakepath\\veseli-muzicari-01.jpg','2018-06-27 09:55:37');
/*!40000 ALTER TABLE `CreateRep` ENABLE KEYS */;
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
