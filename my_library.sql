/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.6.14 : Database - my_library
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`my_library` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `my_library`;

/*Table structure for table `addresses` */

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `address_id` int(11) DEFAULT NULL,
  `address` text,
  KEY `address_id` (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `addresses` */

insert  into `addresses`(`address_id`,`address`) values (301,'12 Main St.,Houston TX 77001'),(302,'1007 Mountain Dr., Gotham NY 10286');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`,`address_id`),
  KEY `address_id` (`address_id`),
  CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `customers` */

insert  into `customers`(`customer_id`,`customer_name`,`address_id`) values (1,'John Doe',301),(2,'Bruce Wayne',302);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`stock`) values (4,'breadmaker',5);

/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `join_year` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `join_year` (`join_year`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

/*Data for the table `states` */

insert  into `states`(`id`,`name`,`join_year`,`population`) values (1,'Alabama',1819,4661900),(2,'Alaska',1959,686293),(3,'Arizona',1912,6500180),(4,'Arkansas',1836,2855390),(5,'California',1850,36756666),(6,'Colorado',1876,4939456),(7,'Connecticut',1788,3501252),(8,'Delaware',1787,873092),(9,'Florida',1845,18328340),(10,'Georgia',1788,9685744),(11,'Hawaii',1959,1288198),(12,'Idaho',1890,1523816),(13,'Illinois',1818,12901563),(14,'Indiana',1816,6376792),(15,'Iowa',1846,3002555),(16,'Kansas',1861,2802134),(17,'Kentucky',1792,4269245),(18,'Louisiana',1812,4410796),(19,'Maine',1820,1316456),(20,'Maryland',1788,5633597),(21,'Massachusetts',1788,6497967),(22,'Michigan',1837,10003422),(23,'Minnesota',1858,5220393),(24,'Mississippi',1817,2938618),(25,'Missouri',1821,5911605),(26,'Montana',1889,967440),(27,'Nebraska',1867,1783432),(28,'Nevada',1864,2600167),(29,'New Hampshire',1788,1315809),(30,'New Jersey',1787,8682661),(31,'New Mexico',1912,1984356),(32,'New York',1788,19490297),(33,'North Carolina',1789,9222414),(34,'North Dakota',1889,641481),(35,'Ohio',1803,11485910),(36,'Oklahoma',1907,3642361),(37,'Oregon',1859,3790060),(38,'Pennsylvania',1787,12448279),(39,'Rhode Island',1790,1050788),(40,'South Carolina',1788,4479800),(41,'South Dakota',1889,804194),(42,'Tennessee',1796,6214888),(43,'Texas',1845,24326974),(44,'Utah',1896,2736424),(45,'Vermont',1791,621270),(46,'Virginia',1788,7769089),(47,'Washington',1889,6549224),(48,'West Virginia',1863,1814468),(49,'Wisconsin',1848,5627967),(50,'Wyoming',1890,532668);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
