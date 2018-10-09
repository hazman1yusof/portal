/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 5.7.19 : Database - myportal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`myportal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `myportal`;

/*Table structure for table `activity_detail` */

DROP TABLE IF EXISTS `activity_detail`;

CREATE TABLE `activity_detail` (
  `activity_date` date DEFAULT NULL,
  `activity_name` text,
  `activity_time` varchar(10) DEFAULT NULL,
  `activity_venue` varchar(20) DEFAULT NULL,
  `activity_image` varchar(30) DEFAULT NULL,
  `activity_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `carousel` */

DROP TABLE IF EXISTS `carousel`;

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lineno` int(5) DEFAULT NULL,
  `carousel_path` varchar(255) DEFAULT NULL,
  `carousel_text` varchar(30) DEFAULT NULL,
  `active` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Table structure for table `carousel_img` */

DROP TABLE IF EXISTS `carousel_img`;

CREATE TABLE `carousel_img` (
  `carousel_image` varchar(30) DEFAULT NULL,
  `carousel_text` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `info_detail` */

DROP TABLE IF EXISTS `info_detail`;

CREATE TABLE `info_detail` (
  `info_name` varchar(30) DEFAULT NULL,
  `info_date` date DEFAULT NULL,
  `info_content` text,
  `info_image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `main_page` */

DROP TABLE IF EXISTS `main_page`;

CREATE TABLE `main_page` (
  `logo1` varchar(30) DEFAULT NULL,
  `logo1_hypertext` tinyint(1) DEFAULT NULL,
  `logo1_link` varchar(30) DEFAULT NULL,
  `logo2` varchar(30) DEFAULT NULL,
  `logo2_hypertext` tinyint(1) DEFAULT NULL,
  `logo2_link` varchar(30) DEFAULT NULL,
  `main_title` varchar(100) DEFAULT NULL,
  `title_link` varchar(30) DEFAULT NULL,
  `activity_title` varchar(30) DEFAULT NULL,
  `info_title` varchar(30) DEFAULT NULL,
  `social_media` varchar(30) DEFAULT NULL,
  `about_title` varchar(20) DEFAULT NULL,
  `about_info` varchar(100) DEFAULT NULL,
  `links_title` varchar(30) DEFAULT NULL,
  `links_list` text,
  `contact_title` varchar(20) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `contact_tel` varchar(15) DEFAULT NULL,
  `contact_fax` varchar(15) DEFAULT NULL,
  `contact_whatsapp` varchar(15) DEFAULT NULL,
  `footer1` varchar(100) DEFAULT NULL,
  `footer2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `module_master` */

DROP TABLE IF EXISTS `module_master`;

CREATE TABLE `module_master` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `module_image` varchar(255) DEFAULT NULL,
  `module_name` varchar(30) DEFAULT NULL,
  `module_summary` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `socmed` */

DROP TABLE IF EXISTS `socmed`;

CREATE TABLE `socmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `socmed_name` varchar(30) DEFAULT NULL,
  `socmed_desc` text,
  `socmed_link` varchar(122) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `socmed_detail` */

DROP TABLE IF EXISTS `socmed_detail`;

CREATE TABLE `socmed_detail` (
  `socmed_name` varchar(30) DEFAULT NULL,
  `socmed_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(33) DEFAULT NULL,
  `password` varchar(22) DEFAULT NULL,
  `role` varchar(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
