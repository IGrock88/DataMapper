CREATE DATABASE  IF NOT EXISTS `datamapper` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `datamapper`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: datamapper
-- ------------------------------------------------------
-- Server version	5.6.38-log

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
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `pass` varchar(500) NOT NULL,
  `prim` varchar(500) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fx_id_role_idx` (`id_role`),
  CONSTRAINT `fx_id_role` FOREIGN KEY (`id_role`) REFERENCES `user_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'user','Иван','$2y$10$mBPas3uNzVeY0AYq4MWu7es7BfLAmI6j4r8fjmkaNRGeupNax69ZO','',1),(2,'Igor','Игорь','$2y$10$V3zPnMWjgMNYFg398bqO1eqMcVTKzD1vqiMRRKdbdkCIfeerE9m2q','',1),(3,'Vasya','Вася','$2y$10$u0RVPhfxF9Vidj8WBRC3hObF.ksz.3qfcIPvhaVaG0KRaWC81WHtq','',1),(4,'Test','Test','$2y$10$Y5LMHkg2LIWjBC8f6sCqhev4emvBBPhUZuGkX7pWRTumlbp5tt0Ea','',1),(5,'mvc','qwerty','$2y$10$f32xPus4AmLlrkPvetIJPOwwJBZSdhlRavBSdpYwec1wGR/HStT1O','',1),(6,'admin','admin','$2y$10$hBdA3sedXQ21Q9VzKSQyyeuOfnwN8ORctWlFz.W1g1RrwG/OXmTiG','',2),(7,'admin2','admin2','$2y$10$ApoCx4Kj3hx3LDc4fxyqQ.gVmTZwRbFtYWh9Tl3fiuX1SRVAKXQJW','',2),(8,'admin3','user','$2y$10$Q6vbDaoEwLMxigd/AfjUaeJMWAEtoGTS6K6ezwpjd55ljrLYv2qFi','',2),(9,'Super','Super','$2y$10$smY/woGdKIHbWSkQTiMFu.422737sMf.j.ckNwpunkMa2BsaTSYAO','',1);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'user'),(2,'admin');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-26 12:26:55
