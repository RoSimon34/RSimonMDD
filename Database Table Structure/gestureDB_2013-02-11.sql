# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: gestureDB
# Generation Time: 2013-02-11 17:07:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table glogin_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `glogin_users`;

CREATE TABLE `glogin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `glogin_users` WRITE;
/*!40000 ALTER TABLE `glogin_users` DISABLE KEYS */;

INSERT INTO `glogin_users` (`id`, `email`, `name`, `photo`, `registered`)
VALUES
	(1,'romion34@gmail.com','Romaine Simon','assets/img/default_avatar.jpg','2013-02-09 11:42:52');

/*!40000 ALTER TABLE `glogin_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table newmember
# ------------------------------------------------------------

DROP TABLE IF EXISTS `newmember`;

CREATE TABLE `newmember` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bio` text,
  `face` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `newmember` WRITE;
/*!40000 ALTER TABLE `newmember` DISABLE KEYS */;

INSERT INTO `newmember` (`id`, `name`, `email`, `gender`, `bio`, `face`)
VALUES
	(1,'Romaine Simon','romion34@yahoo.com','male','My name is Romaine if you don\'t already know that lol, but really right now everything is going my way, im working hard and most of my dreams or on the table and i eat them shits lol, i have a lot more i want to accomplish and through the strength of \"GOD\" and my hustlers mentality I\'m sure i\'ll meat them. I\'m a college student almost done, looking for the next path to take in life, taking it as it comes but also striving to meet my goals. one thing about me, i love women i really do and I\'m damn there always around women, but i only fucks with one at a time, you can i say I\'m a good boy when i want to be that is lol. But you guys are so beautiful what can i say no mud-butt for RO. Aside all that i love traveling, going out, and experiencing the world really weather if its through art, music, fashion, i just love doing new things and I finally found someone that\'s on the same page as me and wanting to do the same things i do she\'s great, she\'s like i guy but she also got that feminine sexy side. But if you don\'t know me then you need to get to know me lol JK I\'m a funny ass guy and i like to have fun, 90% of the time im laughing or messing around lol.','yes');

/*!40000 ALTER TABLE `newmember` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `project_description` varchar(255) DEFAULT NULL,
  `project_inspiration` varchar(255) DEFAULT NULL,
  `project_medium` varchar(255) DEFAULT NULL,
  `thumbs_up` int(11) DEFAULT NULL,
  `thumbs_down` int(11) DEFAULT NULL,
  `user_comments` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table rating
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rating`;

CREATE TABLE `rating` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `t_up` int(11) DEFAULT NULL,
  `t_down` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `un` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
