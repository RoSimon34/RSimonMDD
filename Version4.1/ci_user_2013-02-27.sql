# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: ci_user
# Generation Time: 2013-02-28 02:18:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `medium` varchar(255) NOT NULL DEFAULT '',
  `inspiration` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `filename`, `title`, `description`, `medium`, `inspiration`)
VALUES
	(88,'','nnonon','ononono','onon','oonon'),
	(89,'','uiuiu','ivivi','vivi','ivivv'),
	(90,'','sdffsdfsdf','sdfsdfsdf','sdfsdf','sdfsdfsdf'),
	(91,'','sdffsdfsdf','sdfsdfsdf','sdfsdf','sdfsdfsdf'),
	(92,'','sdffsdfsdf','sdfsdfsdf','sdfsdf','sdfsdfsdf'),
	(93,'','sdffsdfsdf','sdfsdfsdf','sdfsdf','sdfsdfsdf'),
	(94,'','sdffsdfsdf','sdfsdfsdf','sdfsdf','sdfsdfsdf'),
	(95,'','Rachel','adfsdfsdf','adsfsdf','sdfsdfsdf'),
	(96,'','Romaine2','rivbb\'ivdb\'bsvidbs\'db','pen and ink','\'ivb;bed \'bf o;bi\'\'ivb\'id'),
	(97,'','SimonF','bgr;oiwbg;oiwrbob','fbeiobweihefioh',';oibe;oihg;wogibegoib');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table message
# ------------------------------------------------------------

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;

INSERT INTO `message` (`id`, `username`, `email`, `message`)
VALUES
	(1,'romaine','romaine@me.com','i love you work amzing job so far');

/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `username`, `email`, `password`)
VALUES
	(10,'Romaine','romaine@me.com','25d55ad283aa400af464c76d713c07ad'),
	(11,'SeanCasey','sean@me.com','25d55ad283aa400af464c76d713c07ad');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_vote
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_vote`;

CREATE TABLE `user_vote` (
  `vote_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vote_desc` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `up_vote` int(10) unsigned NOT NULL,
  `down_vote` int(10) unsigned NOT NULL,
  PRIMARY KEY (`vote_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `user_vote` WRITE;
/*!40000 ALTER TABLE `user_vote` DISABLE KEYS */;

INSERT INTO `user_vote` (`vote_id`, `vote_desc`, `up_vote`, `down_vote`)
VALUES
	(1,'Project one',1,1),
	(2,'Project two',1,1),
	(3,'Project three',1,1);

/*!40000 ALTER TABLE `user_vote` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
