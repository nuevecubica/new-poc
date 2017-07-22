# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.17)
# Database: mydiabetesdaily
# Generation Time: 2017-07-22 20:49:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) DEFAULT NULL,
  `admin_lastname` varchar(50) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_type` smallint(1) DEFAULT NULL,
  `admin_email` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `image_id`, `created`, `author`, `body`)
VALUES
	(5,5,'2017-07-22 11:26:30','Oscar Wilde','Majestuoso diseÃ±ador, ojala todos puedan diseÃ±ar asi!... algun dÃ­a.'),
	(7,6,'2017-07-22 11:30:40','Lauriano Vega','Decir que Alejandro es un genio es poco que decir.');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image_filename` varchar(255) NOT NULL,
  `image_type` varchar(100) NOT NULL,
  `image_size` int(11) NOT NULL,
  `image_caption` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `image_filename`, `image_type`, `image_size`, `image_caption`)
VALUES
	(5,'adolfo_babatz_page.jpg','image/jpeg',82224,'Alfonso Babatz'),
	(6,'alejandro_faesi_page.jpg','image/jpeg',15625,'Alejandro faesi'),
	(7,'adriana_tortojada_page.jpg','image/jpeg',20438,'Adriana Tortojada'),
	(8,'alfonso_de_lara_page.jpg','image/jpeg',88775,'Alfonso de Lara'),
	(9,'alfonso_pena_page.jpg','image/jpeg',76557,'Alfonso PeÃ±a'),
	(10,'antonio_villarreal_page.jpg','image/jpeg',75939,'Antonio Villareal'),
	(11,'dan_rosen_page.jpg','image/jpeg',83698,'Dan Rosen'),
	(12,'david_odonovan_page.jpg','image/jpeg',15852,'David Odonovan'),
	(13,'eamonn_maguire_page.jpg','image/jpeg',78593,'Eamonn Maguire'),
	(14,'francisco_ortega_page.jpg','image/jpeg',73758,'Francisco Ortega'),
	(15,'paolo_sironi_page.jpg','image/jpeg',73858,'Paulo Sironi'),
	(16,'izzy_nelken_page.jpg','image/jpeg',85491,'Izzy Nelken'),
	(17,'rita_gnutti_page.jpg','image/jpeg',86595,'Rita Gnutti'),
	(18,'ronald_filler_page.jpg','image/jpeg',71776,'Ronald Filler'),
	(19,'sissel_eckerle_page.jpg','image/jpeg',70923,'Sissel Eckerle');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_data`;

CREATE TABLE `user_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `height` decimal(10,0) DEFAULT NULL,
  `ideal_weight` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_if_fk` (`user_id`),
  CONSTRAINT `user_if_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_lastname` varchar(50) DEFAULT NULL,
  `user_middlename` varchar(50) DEFAULT NULL,
  `user_nickname` varchar(16) DEFAULT NULL,
  `user_fb_id` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(150) DEFAULT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `user_confirm` tinyint(1) NOT NULL DEFAULT '0',
  `user_initial_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `user_name`, `user_lastname`, `user_middlename`, `user_nickname`, `user_fb_id`, `user_email`, `user_password`, `user_avatar`, `user_confirm`, `user_initial_date`)
VALUES
	(62,'Alex','Vaught','Ortiz','Alexoboy','','alex@vaught.studio','$2y$10$NWIzYTJmOWZkNzIzZDU1YedpibSu8qzGmMypW3YYxOgDPe1beDw0u','',0,'2017-07-15'),
	(63,'Claudio','Dieguez','Carnero','Crady','','crady@crady.net','$2y$10$NTc2MzlmZGRiMjY1ZTRkOOXC66o2qW6E4t.Up43u2XbTadJAwYsIm','',0,'2017-07-15'),
	(64,'Juan','Herrera','Xocho','Jok3rcito','','jokercito@smartlab.com','$2y$10$YWU4ZjlhZmUwOGI2Y2Y4ZOjj9Q9wNXSpaG5EJQtR..p/i85JVJVPq','',0,'2017-07-21');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
