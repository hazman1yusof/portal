/*
SQLyog Community v12.5.0 (32 bit)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_date` date DEFAULT NULL,
  `activity_name` varchar(222) DEFAULT NULL,
  `activity_time` time DEFAULT NULL,
  `activity_venue` varchar(20) DEFAULT NULL,
  `activity_image` varchar(255) DEFAULT NULL,
  `activity_desc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `activity_detail` */

insert  into `activity_detail`(`id`,`activity_date`,`activity_name`,`activity_time`,`activity_venue`,`activity_image`,`activity_desc`) values 
(1,'2018-10-01','Activity 1','00:12:00','Venue 1','activity/pjmVvekLVRh49hMEArQEPZQzrEPjQ3dbqMXlLOUo.png','Description here dsasdsad'),
(2,'2018-10-03','Activity 2','00:00:00','Venue 2','activity/98AA9TSeKqXtQbBbW7mKRhU4eBvh1IV2YGAKSFrW.png','Description here');

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

/*Data for the table `carousel` */

insert  into `carousel`(`id`,`lineno`,`carousel_path`,`carousel_text`,`active`) values 
(8,1,'carousel/8EiFwVfvUxU8v7h8sfHuSNsc976pk0nppOfGoMKv.jpeg',NULL,'1'),
(9,2,'carousel/zvBgeQ83E1GjNFTDwlRGnW4RpGtt71oEbw3VoFGt.jpeg',NULL,'1'),
(10,3,'carousel/q4bwbWLogx5OxtgstVWOwlKXBq7khGDBpCX6O8Rx.jpeg',NULL,'1'),
(11,4,'carousel/XBWxyVYmbwLpgq1v49B6cppuq5MBm6fzYQN4hand.jpeg',NULL,'1'),
(12,5,'carousel/lmJGrEsCaPLrsF0WOudNnYYWB1dHxPMRwRJ2UVkC.jpeg',NULL,'1');

/*Table structure for table `carousel_img` */

DROP TABLE IF EXISTS `carousel_img`;

CREATE TABLE `carousel_img` (
  `carousel_image` varchar(30) DEFAULT NULL,
  `carousel_text` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `carousel_img` */

insert  into `carousel_img`(`carousel_image`,`carousel_text`) values 
('img/carousel/maroon.jpg','Text here'),
('img/carousel/blue.jpg','Text here');

/*Table structure for table `info_detail` */

DROP TABLE IF EXISTS `info_detail`;

CREATE TABLE `info_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_name` varchar(30) DEFAULT NULL,
  `info_date` date DEFAULT NULL,
  `info_content` text,
  `info_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `info_detail` */

insert  into `info_detail`(`id`,`info_name`,`info_date`,`info_content`,`info_image`) values 
(1,'Info 1','2018-10-02','Curabitur quam augue, sollicitudin id risus eu, porttitor efficitur odio. Nunc malesuada enim eget erat vehicula cursus. Etiam gravida dolor eget lorem commodo viverra ut non est. Fusce facilisis auctor turpis. Pellentesque erat nisl, luctus vel ante in, vestibulum feugiat ligula. Sed sollicitudin lacinia eros vitae sagittis. Suspendisse nec mollis mauris, eu auctor mi. Etiam felis nunc, elementum eu ex ac, mollis tempor tortor. Proin non arcu vel arcu fermentum ultrices.','info/eCYTwENm2locbWKkXNFGE9AdP1iU4PnViXFgLp1P.png'),
(2,'Info 2','2018-10-03','Curabitur quam augue, sollicitudin id risus eu, porttitor efficitur odio. Nunc malesuada enim eget erat vehicula cursus. Etiam gravida dolor eget lorem commodo viverra ut non est. Fusce facilisis auctor turpis. Pellentesque erat nisl, luctus vel ante in, vestibulum feugiat ligula. Sed sollicitudin lacinia eros vitae sagittis. Suspendisse nec mollis mauris, eu auctor mi. Etiam felis nunc, elementum eu ex ac, mollis tempor tortor. Proin non arcu vel arcu fermentum ultrices.','info/ZVXffbTBD1Fdl7Boa5RGyxWEGo3HUB1t8hMkWKL9.jpeg');

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

/*Data for the table `main_page` */

insert  into `main_page`(`logo1`,`logo1_hypertext`,`logo1_link`,`logo2`,`logo2_hypertext`,`logo2_link`,`main_title`,`title_link`,`activity_title`,`info_title`,`social_media`,`about_title`,`about_info`,`links_title`,`links_list`,`contact_title`,`contact_address`,`contact_tel`,`contact_fax`,`contact_whatsapp`,`footer1`,`footer2`) values 
('img/header/logoukm.png',NULL,'http://www.ukm.my/portal/','img/header/logoivi.png',NULL,'http://www.ivi.ukm.my/en/','Professional Certificate in Data Science \r\n','http://www.ivi.ukm.my/en/','Activities','Information','Social Media','About Us',NULL,'Links','<p>\r\n<a href=\"http://www.ivi.ukm.my/en/feed/rss/\" title=\"RSS\" class=\"fa fa-rss\"></a>\r\n<a href=\"https://www.facebook.com/Institute.Visual.Informatics/?hc_ref=NEWSFEED&fref=nf\" title=\"Facebook\" class=\"fa fa-facebook\"></a>\r\n<a href=\"https://twitter.com/UKMIVI\" title=\"Twitter\" class=\"fa fa-twitter\"></a>\r\n<a href=\"https://www.youtube.com/user/ukmwebtv\" title=\"Youtube\" class=\"fa fa-youtube\"></a>\r\n<a href=\"https://www.instagram.com/iviukm_insta/?hl=en\" title=\"Instagram\" class=\"fa fa-instagram\"></a>\r\n</p>','Contact Us','Institute of Visual Informatics\r\nUniversiti Kebangsaan Malaysia\r\n43600 UKM Bangi, Selangor','+603-8921 6073','+603-8921 6072',NULL,NULL,NULL);

/*Table structure for table `module_master` */

DROP TABLE IF EXISTS `module_master`;

CREATE TABLE `module_master` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `module_image` varchar(255) DEFAULT NULL,
  `module_name` varchar(30) DEFAULT NULL,
  `module_summary` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `module_master` */

insert  into `module_master`(`id`,`module_image`,`module_name`,`module_summary`) values 
(5,'module/F0y2niTFc8gkEIYZUcWMATnCi17NxNnNIsIVAYrL.jpeg','Module 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat faucibus lorem, vel rutrum erat condimentum vel. Nullam convallis facilisis cursus. Nullam pellentesque augue magna, a elementum sapien mattis vitae. Cras commodo accumsan ligula ac ornare. Proin pharetra, massa sed semper convallis, nulla turpis laoreet augue, sed hendrerit ante odio sed odio. Nullam vestibulum cursus dui eu gravida. In hac habitasse platea dictumst. Aenean a nibh ex. Vestibulum vitae nibh massa. Vestibulum laoreet porttitor massa sed mollis.'),
(6,'module/IUp8Y5s3VG3d9lr0qfgvChN3IkmuR5QbYk239bVQ.jpeg','Module 2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat faucibus lorem, vel rutrum erat condimentum vel. Nullam convallis facilisis cursus. Nullam pellentesque augue magna, a elementum sapien mattis vitae. Cras commodo accumsan ligula ac ornare. Proin pharetra, massa sed semper convallis, nulla turpis laoreet augue, sed hendrerit ante odio sed odio. Nullam vestibulum cursus dui eu gravida. In hac habitasse platea dictumst. Aenean a nibh ex. Vestibulum vitae nibh massa. Vestibulum laoreet porttitor massa sed mollis.'),
(7,'module/RE5GjvcXEV5uF8R9CozRhPPKWUBX3whFpACExzVs.png','Module 3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat faucibus lorem, vel rutrum erat condimentum vel. Nullam convallis facilisis cursus. Nullam pellentesque augue magna, a elementum sapien mattis vitae. Cras commodo accumsan ligula ac ornare. Proin pharetra, massa sed semper convallis, nulla turpis laoreet augue, sed hendrerit ante odio sed odio. Nullam vestibulum cursus dui eu gravida. In hac habitasse platea dictumst. Aenean a nibh ex. Vestibulum vitae nibh massa. Vestibulum laoreet porttitor massa sed mollis.'),
(8,'module/LKlH7YTc9CBWK9Z0rVBU1nkdUKFvQlyiKCvKM3uU.png','Module 4','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat faucibus lorem, vel rutrum erat condimentum vel. Nullam convallis facilisis cursus. Nullam pellentesque augue magna, a elementum sapien mattis vitae. Cras commodo accumsan ligula ac ornare. Proin pharetra, massa sed semper convallis, nulla turpis laoreet augue, sed hendrerit ante odio sed odio. Nullam vestibulum cursus dui eu gravida. In hac habitasse platea dictumst. Aenean a nibh ex. Vestibulum vitae nibh massa. Vestibulum laoreet porttitor massa sed mollis.');

/*Table structure for table `socmed` */

DROP TABLE IF EXISTS `socmed`;

CREATE TABLE `socmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `socmed_name` varchar(30) DEFAULT NULL,
  `socmed_desc` text,
  `socmed_link` varchar(122) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `socmed` */

insert  into `socmed`(`id`,`socmed_name`,`socmed_desc`,`socmed_link`) values 
(2,'facebook','<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMasjidBBSB&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\" \r\n                  width=\"250\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\">\r\n                </iframe>',NULL);

/*Table structure for table `socmed_detail` */

DROP TABLE IF EXISTS `socmed_detail`;

CREATE TABLE `socmed_detail` (
  `socmed_name` varchar(30) DEFAULT NULL,
  `socmed_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `socmed_detail` */

insert  into `socmed_detail`(`socmed_name`,`socmed_desc`) values 
('Nmae','escc\r\n');

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

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`role`,`status`,`remember_token`) values 
(5,'hazman','hazman','Admin',NULL,'nxl8XCDYLXQpnYOoCY9CcrdQaEzxmU0HjbLjolSOgsNZAXk7QUPdPNCUD0jG');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
