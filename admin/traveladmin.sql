/*
SQLyog Ultimate - MySQL GUI v8.22 
MySQL - 5.0.27-community-nt : Database - traveladmin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`traveladmin` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `traveladmin`;

/*Table structure for table `billing` */

DROP TABLE IF EXISTS `billing`;

CREATE TABLE `billing` (
  `id` int(11) NOT NULL auto_increment,
  `first_name` varchar(50) NOT NULL default '',
  `middle_name` varchar(50) NOT NULL default '',
  `last_name` varchar(50) NOT NULL default '',
  `sales` int(11) NOT NULL default '0',
  `country` varchar(50) NOT NULL default '',
  `streetaddress` varchar(50) NOT NULL default '',
  `city` varchar(50) NOT NULL default '',
  `state` varchar(50) NOT NULL default '',
  `zip` varchar(10) NOT NULL default '',
  `phone1` varchar(50) NOT NULL default '',
  `streetaddress2` varchar(50) NOT NULL default '',
  `business_name` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `billing` */

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(11) NOT NULL auto_increment,
  `salesId` int(11) NOT NULL,
  `productId` int(11) NOT NULL default '0',
  `rate` decimal(10,2) NOT NULL default '0.00',
  `qty` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

/*Table structure for table `client` */

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `id` int(11) NOT NULL auto_increment,
  `client_email` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `status` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `client_email` (`client_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `client` */

insert  into `client`(`id`,`client_email`,`password`,`status`) values (1,'fried.dust@gmail.com','password',NULL);

/*Table structure for table `dbinfo` */

DROP TABLE IF EXISTS `dbinfo`;

CREATE TABLE `dbinfo` (
  `id` int(11) NOT NULL auto_increment,
  `sales` int(11) NOT NULL default '0',
  `dbno` varchar(50) NOT NULL default '',
  `debittype` varchar(50) NOT NULL default '',
  `code` varchar(50) NOT NULL default '',
  `expdate` date NOT NULL default '0000-00-00',
  `fname` varchar(50) NOT NULL default '',
  `lname` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dbinfo` */

/*Table structure for table `feedbacks` */

DROP TABLE IF EXISTS `feedbacks`;

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `address` varchar(255) default NULL,
  `phone` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `country` varchar(255) default NULL,
  `comment` text,
  `onDate` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedbacks` */

insert  into `feedbacks`(`id`,`name`,`address`,`phone`,`email`,`country`,`comment`,`onDate`) values (5,'sumit','ktm','4425789','sumit@gmail.com','nepal','The hotel is so so good !','2010-09-07 11:00:40'),(6,'fasdf','asdf',NULL,'someone@gmail.com','fasdf','fasdf','2010-12-28 16:36:54'),(8,'','sadfasdfasdf','asdfasdf@sdf.gh','asdfsdf','asdfasdfasdf','','2011-09-01 17:35:56'),(9,'','asdf','asdfasd@sdf.com','asdfsd','asdfasdf','','2011-09-01 17:36:57');

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL default '',
  `urlname` varchar(250) NOT NULL,
  `type` varchar(200) NOT NULL default '',
  `parentId` int(11) NOT NULL default '0',
  `shortcontents` text NOT NULL,
  `contents` longtext NOT NULL,
  `linkType` varchar(255) NOT NULL default '',
  `weight` int(11) NOT NULL default '50',
  `onDate` date NOT NULL default '0000-00-00',
  `image` varchar(250) NOT NULL default '',
  `display` varchar(10) NOT NULL,
  `featured` varchar(3) NOT NULL default '',
  `code` varchar(15) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pageTitle` text NOT NULL,
  `pageKeyword` text NOT NULL,
  `sold` varchar(3) NOT NULL default '',
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `pcolor` int(11) NOT NULL,
  `scolor` int(11) NOT NULL,
  `duration` int(10) NOT NULL,
  `altitude` varchar(25) NOT NULL,
  `grade` int(1) NOT NULL,
  `groupsize` varchar(250) NOT NULL default '',
  `regionId` int(10) NOT NULL,
  `categoryId` int(10) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `urlname` (`urlname`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`urlname`,`type`,`parentId`,`shortcontents`,`contents`,`linkType`,`weight`,`onDate`,`image`,`display`,`featured`,`code`,`price`,`pageTitle`,`pageKeyword`,`sold`,`width`,`height`,`pcolor`,`scolor`,`duration`,`altitude`,`grade`,`groupsize`,`regionId`,`categoryId`) values (1,'Drinks','drinks','',0,'','','ProductCategory',3,'2011-08-29','1.jpg','','','','','','','',0,0,0,0,0,'',0,'',0,0),(2,'Noodles','noodles','',0,'','','ProductCategory',2,'2011-08-29','2.jpg','','','','','','','',0,0,0,0,0,'',0,'',0,0),(3,'Soft Drinks','soft-drinks','',1,'','','ProductCategory',0,'2011-08-29','3.jpg','','','','','','','',0,0,0,0,0,'',0,'',0,0),(4,'Hard Drinks','hard-drinks','',1,'','','ProductCategory',0,'2011-08-29','4.jpg','','','','','','','',0,0,0,0,0,'',0,'',0,0),(5,'asdf asdfasf ','asdf-asdfasf','CMS Links',0,'','','List',0,'2011-08-29','','','yes','','','','','',0,0,0,0,0,'',0,'',0,0),(6,'asdf','asdf','',0,'','','ProductCategory',1,'2011-08-29','6.jpg','','','','','asdfasdf','askeyyyyy','',0,0,0,0,0,'',0,'',0,0),(7,'list name','list-name','CMS Links',0,'','','List',0,'2011-08-29','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(8,'title','title','',7,'short desc','sdfas fasf asdf asd asd asd sda sdf sdfsadfasdfasdfsa ','ListSub',0,'2011-08-29','','','yes','','','list title','list keyword','',0,0,0,0,0,'',0,'',0,0),(9,'normal group name','normal-group-name','Header Links',0,'short contents&nbsp;','contents','Normal Group',0,'2011-08-29','9.jpg','list','','','','','','',0,0,0,0,0,'',0,'',0,0),(10,'my name','my-name','Header Links',0,'short&nbsp;','content','Normal Group',10,'2011-08-29','10.jpg','list','','','','','','',0,0,0,0,0,'',0,'',0,0),(11,'asdf asf asf asdf ','asdf-asf-asf-asdf','Header Links',0,'&nbsp;asdf asdf asdf asdf','&nbsp;as dfas asdf asdf asd','Normal Group',20,'2011-08-29','11.jpg','normal','','','','main page title','main page keyword','',0,0,0,0,0,'',0,'',0,0),(12,'asdfas df asdsss ssss','asdfas-df-asdsss-ssss','Header Links',9,'SDFADF ASFASFsdfsdfa asdfas ssss','SHO RTASLDFJAS F ASDF ASDFf sdf asdf asf dfas dfasf sfsdfsfsdf ssss','Contents Page',10,'2011-08-29','12.jpg','','','','',' asdf asdf asf sdaf  sss','asdf asdf asdf asdfa sss','',0,0,0,0,0,'',0,'',0,0),(13,'List main name','list-main-name','Header Links',9,'','','List',20,'2011-08-29','','','','','','main page title','main page keyword','',0,0,0,0,0,'',0,'',0,0),(14,'list title','list-titlelist','',13,'shor tdesc','','ListSub',0,'2011-08-29','','','yes','','','list page title','list page keyword','',0,0,0,0,0,'',0,'',0,0),(36,'hello','hello','',0,'','','ProductCategory',5,'2011-08-30','36.jpg','','','','','hello','world','',0,0,0,0,0,'',0,'',0,0),(16,'list title','list-title','',13,'','','ListSub',0,'2011-08-29','16.jpg','','yes','','','title of the page','keyword of the page','',0,0,0,0,0,'',0,'',0,0),(17,'list title','sdfsdfasdfasdfasdfasdf','',13,'','sadfasd fasdf asd asdf as','ListSub',10,'2011-08-29','','','no','','','list page title','list page keyword','',0,0,0,0,0,'',0,'',0,0),(18,'aaba mileko titles','aaba-mileko-titless','',13,'short descs','content s','ListSub',30,'2011-08-29','18.jpg','','yes','','','aaba chai mileko titles','aaba chai mileko contents','',0,0,0,0,0,'',0,'',0,0),(19,'aaba mileko title','aaba-mileko-titleaba','',0,'short desc','content&nbsp;','ListSub',20,'2011-08-29','','','no','','','aaba chai mileko title','aaba chai mileko content','',0,0,0,0,0,'',0,'',0,0),(37,'there','there','',6,'22sadfaf','&nbsp;asdfafd<br />\r\nas<br />\r\nfdasdfasdfasfdass<br />\r\n<br />\r\n<br />\r\n<br />\r\nssdf','Product',0,'2011-08-30','37.jpg','','Yes','hello','232','tits','keys','',30,50,2,6,0,'',0,'',0,0),(105,'Testimonials','testimonials','Header Links',0,'','testimonials','Link',50,'2011-09-01','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(40,'new mileko content page','new-mileko-content-page','Header Links',9,'short contents','&nbsp;contents','Contents Page',110,'2011-08-31','40.jpg','','','','','pg title','pg keyword','',0,0,0,0,0,'',0,'',0,0),(41,'asdfasf asdf ','asdfaasdf-asf-as','Header Links',9,'asdfa sdf asdf asdf asdasdf asdf asdf asdf asdf asdf asdf asdf asd','asdfa sdf asdf asdf asdasdf asdf asdf asdf asdf asdf asdf asdf asd','Contents Page',120,'2011-08-31','41.jpg','','','','','','','',0,0,0,0,0,'',0,'',0,0),(28,'new gallery','new-gallery','Header Links',9,'','','Gallery',100,'2011-08-30','','','','','','new page title','new page keyword','',0,0,0,0,0,'',0,'',0,0),(42,'aa','aa','Header Links',9,'','','List',130,'2011-08-31','42.jpg','','','','','hh','ii','',0,0,0,0,0,'',0,'',0,0),(43,'dd','dd','',42,'ee','ff&nbsp;','ListSub',10,'2011-08-31','43.jpg','','yes','','','bb','cc','',0,0,0,0,0,'',0,'',0,0),(44,'jj','jjkk','',42,'ll','mm&nbsp;','ListSub',20,'2011-08-31','44.jpg','','yes','','','hh','ii','',0,0,0,0,0,'',0,'',0,0),(45,'RT','rt','',42,'YTR','&nbsp;UYU','ListSub',30,'2011-08-31','','','yes','','','WE','ER','',0,0,0,0,0,'',0,'',0,0),(46,'asdfasfasdf','asdfasfasdf','Header Links',9,'','','Gallery',140,'2011-08-31','','','','','','s','a','',0,0,0,0,0,'',0,'',0,0),(47,'as dfasdf df','as-dfasdf-df','',42,'asd fasd','&nbsp; asdf as','ListSub',40,'2011-08-31','47.jpg','','no','','','asdf asdf','asdf asdf','',0,0,0,0,0,'',0,'',0,0),(48,'img','img','Header Links',9,'','','Gallery',150,'2011-08-31','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(63,'latest name','latest-name','Header Links',9,'','','Video Gallery',160,'2011-08-31','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(98,'','98','',95,'qwerqwer','','GallerySub',50,'2011-09-01','98.jpg','','','','','','','',0,0,0,0,0,'',0,'',0,0),(100,'','100','',95,'sdfasdf','','GallerySub',50,'2011-09-01','100.jpg','','','','','','','',0,0,0,0,0,'',0,'',0,0),(101,'fas asdf','fas-asdf','Header Links',0,'','','Video Gallery',40,'2011-09-01','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(99,'','99','',95,'sadfasdf','','GallerySub',50,'2011-09-01','99.jpg','','','','','','','',0,0,0,0,0,'',0,'',0,0),(95,'sdf fasdf as','sdf-fasdf-as','Header Links',0,'','','Gallery',30,'2011-09-01','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(94,'sdfg sdg sdf','sdfg-sdg-sdfsfdg-sdf','',13,'sdfasasdf as asf as asd asdf','&nbsp;df asdf asdf asdf','ListSub',40,'2011-09-01','94.jpg','','no','','','as dfasf a','asd fasf asf','',0,0,0,0,0,'',0,'',0,0),(93,'Juice','juice','',1,'slfdk','adfa<br />\r\nsf<br />\r\nasf<br />\r\nasjdf<br />\r\nsa<br />\r\nfasdf&nbsp;','Product',0,'2011-09-01','93.jpg','','No','J-101','10','Juice Title','Juice keyword','',0,0,0,0,0,'',0,'',0,0),(92,'Fanta','fanta','',3,'sajldf asdf\r\na fd\r\nas dfa\r\nsf','aslfd asdf; aflas <br />\r\nfa sf<br />\r\nas fasldfka sf<br />\r\nas falskf asf<br />\r\nas fasdf<br />\r\n&nbsp;asdf asdfasfasdfasfd asf asfasdf asdf afsd&nbsp;','Product',0,'2011-08-31','92.jpg','','No','SD-10102','30','','','',0,0,0,0,0,'',0,'',0,0),(91,'Coca Cola','coca-cola','',3,'lsf salf asdf\r\nas fa\r\nsf af\r\n ad\r\nf ','asf<br />\r\nasdf asdfasd fsadlfk sadf salfk salf aslf asldk aslfk saf<br />\r\nas fas<br />\r\nf a<br />\r\nf asfasfdljalfa sfl aslfdk salf aslfk saflsa fla sdfas<br />\r\nf asflka flask flas fa<br />\r\nsf aslkasldfa&nbsp;','Product',0,'2011-08-31','91.jpg','','No','SD-10101','20','','','',0,0,0,0,0,'',0,'',0,0),(106,'Products','products','Header Links',0,'','products','Link',60,'2011-09-02','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(107,'asdfsa df as fasd asdf','asdfsa-df-as-fasd-asdf','Header Links',0,'&nbsp;asdfasdf','&nbsp;asdfasdfsdf','Normal Group',70,'2011-09-02','','list','','','','','','',0,0,0,0,0,'',0,'',0,0),(108,'Home','home','Top Links',0,'','index','Link',10,'2011-09-02','108.png','normal','','','','','','',0,0,0,0,0,'',0,'',0,0),(109,'About Us','about-us','Top Links',0,'&nbsp;','&nbsp;','Contents Page',20,'2011-09-02','109.png','normal','','','','','','',0,0,0,0,0,'',0,'',0,0),(110,'Online Booking','online-booking','Top Links',0,'','booking','Link',30,'2011-09-02','110.png','normal','','','','','','',0,0,0,0,0,'',0,'',0,0),(111,'Site Map','site-map','Top Links',0,'','sitemap','Link',40,'2011-09-02','111.png','normal','','','','','','',0,0,0,0,0,'',0,'',0,0),(112,'Contact Us','contact-us','Top Links',0,'<div><strong>Samye Travels Pvt. Ltd.</strong></div>\r\n<div>Kamaladi Chowk, Putalisadak</div>\r\n<div>Kathmandu, Nepal</div>\r\n<div>P.O.Box : 123456</div>\r\n<div>Tel. : 977-1-0000000, 0000000, 0000000, 0000000</div>\r\n<div>Fax : +977-1-0000000</div>\r\n<div>E-mail : info@samyetravels.com.np</div>','<div><strong>Samye Travels Pvt. Ltd.</strong></div>\r\n<div>Kamaladi Chowk, Putalisadak</div>\r\n<div>Kathmandu, Nepal</div>\r\n<div>P.O.Box : 123456</div>\r\n<div>Tel. : 977-1-0000000, 0000000, 0000000, 0000000</div>\r\n<div>Fax : +977-1-0000000</div>\r\n<div>E-mail : info@samyetravels.com.np</div>','Contents Page',50,'2011-09-02','112.png','normal','','','','','','',0,0,0,0,0,'',0,'',0,0),(113,'asdfasf asdf asf asf ','asdfasf-asdf-asf-asf','Header Links',0,'&nbsp;','&nbsp;','Normal Group',80,'2011-09-02','','list','No','','','','','',0,0,0,0,0,'',0,'',0,0),(114,' asf asdf asf asf','asf-asdf-asf-asfdf-asdf-asdf-asd','Header Links',0,'&nbsp;','&nbsp;','Contents Page',90,'2011-09-02','','normal','Yes','','','','','',0,0,0,0,0,'',0,'',0,0),(132,'Annapurna Region','annapurna-region','',130,'','','PackageType',10,'2011-09-04','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(124,'Nepal','nepal','',0,'','','PackageRegion',50,'2011-09-02','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(125,'Tibet','tibet','',0,'','','PackageRegion',50,'2011-09-02','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(126,'India','india','',0,'','','PackageRegion',20,'2011-09-02','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(127,'Bhutan','bhutan','',0,'','','PackageRegion',50,'2011-09-02','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(131,'Tours','tours','',0,'','','PackageType',10,'2011-09-04','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(130,'Trekking','trekking','',0,'','','PackageType',10,'2011-09-04','','','','','','','','',0,0,0,0,0,'',0,'',0,0),(135,'Package Name','package-name','',0,'','','',10,'2011-09-04','','','Yes','','','','','',0,0,0,0,10,'4848',0,'',126,130),(136,'Package Names','package-names','',0,'','','',10,'2011-09-04','136.jpg','','Yes','','','','','',0,0,0,0,10,'4848',0,'',126,130),(137,'Package Namessdfgsdfgds','package-namessdfgsdfgds','',0,'','','',20,'2011-09-04','137.jpg','','Yes','','','','','',0,0,0,0,10,'4848',0,'',126,130),(138,'Package Namessdfgsdfgdssdfas df','package-namessdfgsdfgdssdfas-dfasdf-asdfas','',0,'&nbsp;asdf asf asf asf asdf','','',20,'2011-09-04','138.jpg','','Yes','','','','','',0,0,0,0,10,'4848',1,'grups',126,130);

/*Table structure for table `listingfiles` */

DROP TABLE IF EXISTS `listingfiles`;

CREATE TABLE `listingfiles` (
  `id` int(11) NOT NULL auto_increment,
  `caption` text NOT NULL,
  `filename` varchar(255) NOT NULL default '',
  `listingId` int(11) NOT NULL default '0',
  `onDate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `listingfiles` */

insert  into `listingfiles`(`id`,`caption`,`filename`,`listingId`,`onDate`) values (13,'caption of ','Hydrangeas.jpg',16,2011),(14,'gg','Koala.jpg',43,2011),(15,'','Lighthouse.jpg',44,2011);

/*Table structure for table `personal_client_details` */

DROP TABLE IF EXISTS `personal_client_details`;

CREATE TABLE `personal_client_details` (
  `id` int(11) NOT NULL auto_increment,
  `client_id` int(11) NOT NULL default '0',
  `first_name` varchar(50) NOT NULL default '',
  `middle_name` varchar(50) NOT NULL default '',
  `last_name` varchar(50) NOT NULL default '',
  `country` varchar(50) NOT NULL default '',
  `streetaddress` varchar(50) NOT NULL default '',
  `city` varchar(50) NOT NULL default '',
  `state` varchar(50) NOT NULL default '',
  `zip` varchar(10) NOT NULL default '',
  `phone1` varchar(50) NOT NULL default '',
  `phone2` varchar(50) NOT NULL default '',
  `streetaddress2` varchar(50) NOT NULL default '',
  `business_name` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `personal_client_details` */

insert  into `personal_client_details`(`id`,`client_id`,`first_name`,`middle_name`,`last_name`,`country`,`streetaddress`,`city`,`state`,`zip`,`phone1`,`phone2`,`streetaddress2`,`business_name`) values (1,1,'Fried','','Dust','United States','Flowermound','Flowermound','Texas','75028','','','','');

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `id` int(11) NOT NULL auto_increment,
  `client` int(11) NOT NULL default '0',
  `pay_by` varchar(20) NOT NULL default '',
  `ondate` date NOT NULL default '0000-00-00',
  `ship_by` varchar(200) NOT NULL default '',
  `shipping_charge` decimal(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sales` */

/*Table structure for table `shipping` */

DROP TABLE IF EXISTS `shipping`;

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL auto_increment,
  `first_name` varchar(50) NOT NULL default '',
  `middle_name` varchar(50) NOT NULL default '',
  `last_name` varchar(50) NOT NULL default '',
  `sales` int(11) NOT NULL default '0',
  `country` varchar(50) NOT NULL default '',
  `streetaddress` varchar(50) NOT NULL default '',
  `city` varchar(50) NOT NULL default '',
  `state` varchar(50) NOT NULL default '',
  `zip` varchar(10) NOT NULL default '',
  `phone1` varchar(50) NOT NULL default '',
  `streetaddress2` varchar(50) NOT NULL default '',
  `business_name` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shipping` */

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id` int(11) NOT NULL auto_increment,
  `sales` int(11) NOT NULL default '0',
  `status` enum('processed','fake','unprocessed') NOT NULL default 'processed',
  `ondate` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status` */

/*Table structure for table `temp_cart` */

DROP TABLE IF EXISTS `temp_cart`;

CREATE TABLE `temp_cart` (
  `id` int(11) NOT NULL auto_increment,
  `buyingId` varchar(200) character set utf8 collate utf8_bin NOT NULL default '',
  `productId` int(11) NOT NULL default '0',
  `rate` decimal(10,2) NOT NULL default '0.00',
  `qty` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `temp_cart` */

insert  into `temp_cart`(`id`,`buyingId`,`productId`,`rate`,`qty`) values (5,'',91,'20.00',1),(6,'',92,'30.00',1);

/*Table structure for table `testimonials` */

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `id` int(10) NOT NULL auto_increment,
  `image` varchar(250) NOT NULL default '',
  `name` varchar(250) NOT NULL default '',
  `address` varchar(250) NOT NULL,
  `comments` text NOT NULL,
  `status` int(1) NOT NULL default '0',
  `onDate` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

/*Data for the table `testimonials` */

insert  into `testimonials`(`id`,`image`,`name`,`address`,`comments`,`status`,`onDate`) values (4,'','John Shrestha','','Guide Hitesh was fantastic - always smiling, nothing was too much trouble and we had the best time and are currently planning our return trip.',1,'2010-08-21'),(5,'','kiran gothe','','What a great site it is.',0,'2010-08-21'),(9,'','kumari','','fadsf',0,'2010-12-28'),(35,'','','','',0,'2011-08-17'),(11,'','saurav','','what a great site this is !',1,'2010-12-29'),(12,'','Vijay Thulung Rai','a','I have had the experience of the lifetime with the travel company. The journey has been the best of all i had. I\'m looking forward to have another holiday with the company.',1,'2010-12-29'),(38,'1314871595jellyfish.jpg','My Name','My Address','testimonial',0,'2011-09-01'),(39,'1314872714','sdfasdf','asdfasdf','asdf',0,'2011-09-01'),(40,'1314874345','asdfasdf','asdfasasdfa','asdfasfasfasf',0,'2011-09-01'),(41,'1314874502','sdfasdf','sdfasdf','asdf',0,'2011-09-01'),(42,'1314874759','asdfasdf','sdfasdfasf','asdfasdf',0,'2011-09-01'),(43,'1314874809','asdfasd','asdfasdf','asdf',0,'2011-09-01'),(44,'1314874828','asdfasd','asdfasdf','asdf',0,'2011-09-01'),(45,'1314938065','sdfgsdgf','sdfgsdgf','sdfgsdg',0,'2011-09-02'),(46,'1314938192','sdfgasdf','sdfgasdfasdf','asdf',0,'2011-09-02');

/*Table structure for table `usergroups` */

DROP TABLE IF EXISTS `usergroups`;

CREATE TABLE `usergroups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usergroups` */

insert  into `usergroups`(`id`,`name`,`power`) values (1,'admin',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastLogin` datetime NOT NULL default '0000-00-00 00:00:00',
  `loginTimes` int(10) unsigned NOT NULL default '0',
  `status` enum('A','D') NOT NULL default 'D',
  `userGroupId` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`lastLogin`,`loginTimes`,`status`,`userGroupId`) values (1,'admin','admin','2011-09-04 11:45:18',127,'A',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
