# Host: localhost  (Version 5.5.5-10.4.13-MariaDB)
# Date: 2020-10-10 21:31:22
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "author"
#

DROP TABLE IF EXISTS `author`;
CREATE TABLE `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_author` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

#
# Data for table "author"
#

INSERT INTO `author` VALUES (1,'Shandika Galih'),(2,'Gfriend'),(3,'Rizky Febian'),(4,'Jhon Doe'),(5,'Budi Sutomo');

#
# Structure for table "content"
#

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_content` varchar(100) DEFAULT NULL,
  `video_link` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `id_course` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

#
# Data for table "content"
#

INSERT INTO `content` VALUES (1,'Belajar PHP','https://youtu.be/XTrU0GzMfCk','Tutorial',1),(2,'Fever','https://youtu.be/Zll7O1v63aY','Music',2),(3,'Kesempurnaan Cinta - Rizky Febian','https://youtu.be/XyHhr2XbaGc','Music',3),(4,'Belajar JavaScript','https://youtu.be/XGdkjh32','Tutorial',NULL);

#
# Structure for table "course"
#

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_course` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `id_author` int(5) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

#
# Data for table "course"
#

INSERT INTO `course` VALUES (1,'PHP','thumbnail.jpg',1,'30 menit','belajar cara menggunakan sintaks pada php '),(2,'Fever','thumbnail3.jpg',2,'4 menit','fever sebuah lagu bertemakan musim panas'),(3,'Kesempurnaan Cinta','thumbnail1.jpg',3,'4 menit','kesempurnaan cinta di nyanyikan oleh rizky febian'),(4,'JavaScript','thumbnail2.jpg',NULL,'30 menit','belajar menggunakan query selector');
