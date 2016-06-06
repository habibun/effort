CREATE DATABASE  IF NOT EXISTS `effort` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `effort`;
-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (i686)
--
-- Host: 127.0.0.1    Database: effort
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `accessLog`
--

DROP TABLE IF EXISTS `accessLog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accessLog` (
  `memberId` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pageUrl` varchar(255) NOT NULL,
  `numVisits` mediumint(9) NOT NULL,
  `lastAccess` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`memberId`,`pageUrl`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accessLog`
--

LOCK TABLES `accessLog` WRITE;
/*!40000 ALTER TABLE `accessLog` DISABLE KEYS */;
INSERT INTO `accessLog` VALUES (1,'diary.php',2,'2015-11-26 14:04:50'),(3,'books.php',2,'2015-11-26 14:04:51'),(3,'contact.php',1,'2015-11-26 14:04:52'),(6,'books.php',4,'2015-11-26 14:04:53');
/*!40000 ALTER TABLE `accessLog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `address_id` int(11) DEFAULT NULL,
  `address` text,
  KEY `address_id` (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (301,'12 Main St.,Houston TX 77001'),(302,'1007 Mountain Dr., Gotham NY 10286');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`,`address_id`),
  KEY `address_id` (`address_id`),
  CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'John Doe',301),(2,'Bruce Wayne',302);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fruit`
--

DROP TABLE IF EXISTS `fruit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fruit` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fruit`
--

LOCK TABLES `fruit` WRITE;
/*!40000 ALTER TABLE `fruit` DISABLE KEYS */;
INSERT INTO `fruit` VALUES (1,'banana','yellow'),(3,'plum','purple'),(5,'tangerine','orange');
/*!40000 ALTER TABLE `fruit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` char(41) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `joinDate` date NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `favoriteGenre` enum('crime','horror','thriller','romance','sciFi','adventure','nonFiction') NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `otherInterests` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `emailAddress` (`emailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'sparky','*6C8989366EAF75BB670AD8EA7A7FC1176A95CEF4','John','Sparks','2007-11-13','m','crime','jsparks@example.com','Football, fishing and gardening'),(2,'mary','*6C8989366EAF75BB670AD8EA7A7FC1176A95CEF4','Mary','Newton','2007-02-06','f','thriller','mary@example.com','Writing, hunting and travel'),(3,'jojo','*6C8989366EAF75BB670AD8EA7A7FC1176A95CEF4','Jo','Scrivener','2006-09-03','f','romance','jscrivener@example.com','Genealogy, writing, painting'),(4,'marty','*6C8989366EAF75BB670AD8EA7A7FC1176A95CEF4','Marty','Pareene','2007-01-07','m','horror','marty@example.com','Guitar playing, rock music, clubbing'),(5,'nickb','*6C8989366EAF75BB670AD8EA7A7FC1176A95CEF4','Nick','Blakeley','2007-08-19','m','sciFi','nick@example.com','Watching movies, cooking, socializing'),(6,'bigbill','*6C8989366EAF75BB670AD8EA7A7FC1176A95CEF4','Bill','Swan','2007-06-11','m','nonFiction','billswan@example.com','Tennis, judo, music'),(7,'janefield','*6C8989366EAF75BB670AD8EA7A7FC1176A95CEF4','Jane','Field','2006-03-03','f','crime','janefield@example.com','Thai cookery, gardening, traveling');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (4,'breadmaker',5);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `join_year` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `join_year` (`join_year`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,'Alabama',1819,4661900),(2,'Alaska',1959,686293),(3,'Arizona',1912,6500180),(4,'Arkansas',1836,2855390),(5,'California',1850,36756666),(6,'Colorado',1876,4939456),(7,'Connecticut',1788,3501252),(8,'Delaware',1787,873092),(9,'Florida',1845,18328340),(10,'Georgia',1788,9685744),(11,'Hawaii',1959,1288198),(12,'Idaho',1890,1523816),(13,'Illinois',1818,12901563),(14,'Indiana',1816,6376792),(15,'Iowa',1846,3002555),(16,'Kansas',1861,2802134),(17,'Kentucky',1792,4269245),(18,'Louisiana',1812,4410796),(19,'Maine',1820,1316456),(20,'Maryland',1788,5633597),(21,'Massachusetts',1788,6497967),(22,'Michigan',1837,10003422),(23,'Minnesota',1858,5220393),(24,'Mississippi',1817,2938618),(25,'Missouri',1821,5911605),(26,'Montana',1889,967440),(27,'Nebraska',1867,1783432),(28,'Nevada',1864,2600167),(29,'New Hampshire',1788,1315809),(30,'New Jersey',1787,8682661),(31,'New Mexico',1912,1984356),(32,'New York',1788,19490297),(33,'North Carolina',1789,9222414),(34,'North Dakota',1889,641481),(35,'Ohio',1803,11485910),(36,'Oklahoma',1907,3642361),(37,'Oregon',1859,3790060),(38,'Pennsylvania',1787,12448279),(39,'Rhode Island',1790,1050788),(40,'South Carolina',1788,4479800),(41,'South Dakota',1889,804194),(42,'Tennessee',1796,6214888),(43,'Texas',1845,24326974),(44,'Utah',1896,2736424),(45,'Vermont',1791,621270),(46,'Virginia',1788,7769089),(47,'Washington',1889,6549224),(48,'West Virginia',1863,1814468),(49,'Wisconsin',1848,5627967),(50,'Wyoming',1890,532668);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-02  0:51:54
