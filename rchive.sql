/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - rchive
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rchive` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `rchive`;

/*Table structure for table `rambu` */

DROP TABLE IF EXISTS `rambu`;

CREATE TABLE `rambu` (
  `rambu_id` int(20) NOT NULL AUTO_INCREMENT,
  `jenis` enum('nasional','provinsi','kota') DEFAULT NULL,
  `namarambu` varchar(255) DEFAULT NULL,
  `jenisrambu` varchar(255) DEFAULT NULL,
  `titikrambu` int(255) DEFAULT NULL,
  `kondisirambu` int(255) DEFAULT NULL,
  `tahun` int(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `dokumentasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rambu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `rambu` */

insert  into `rambu`(`rambu_id`,`jenis`,`namarambu`,`jenisrambu`,`titikrambu`,`kondisirambu`,`tahun`,`keterangan`,`lokasi`,`dokumentasi`) values 
(1,'nasional','Satu Arah','Jalan Nasional',5000,5000,2021,'Baik','Persimpangan Tol','rambu/ZCQ1gA35166qVs3zPtOVG0Rbmb18nIGSTUjdRz46.jpg');

/*Table structure for table `tlight` */

DROP TABLE IF EXISTS `tlight`;

CREATE TABLE `tlight` (
  `tlight_id` int(20) NOT NULL AUTO_INCREMENT,
  `jenis` enum('nasional','provinsi','kota') DEFAULT NULL,
  `jenisapill` varchar(255) DEFAULT NULL,
  `titikapill` decimal(65,0) DEFAULT NULL,
  `kondisiapill` varchar(255) DEFAULT NULL,
  `tahun` int(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `dokumentasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tlight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tlight` */

insert  into `tlight`(`tlight_id`,`jenis`,`jenisapill`,`titikapill`,`kondisiapill`,`tahun`,`keterangan`,`lokasi`,`dokumentasi`) values 
(1,'provinsi','3 warna',0,'Baik',2021,'Bekerja dengan baik','Perempatan Blitar','tlight/gFy6JHK8zkVTtRkFXocbHHFOjrgvmrSqptjTPWYj.jpg');

/*Table structure for table `traffic` */

DROP TABLE IF EXISTS `traffic`;

CREATE TABLE `traffic` (
  `traffic_id` int(10) NOT NULL AUTO_INCREMENT,
  `jenis_traffic` enum('nasional','provinsi','kota') DEFAULT NULL,
  `namajalan` varchar(255) DEFAULT NULL,
  `statusjalan` varchar(255) DEFAULT NULL,
  `kapasitasjalan` int(255) DEFAULT NULL,
  `volumelalulintas` int(255) DEFAULT NULL,
  `kondisijalan` varchar(255) DEFAULT 'baik',
  `lebarjalan` int(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `dokumentasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`traffic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `traffic` */

insert  into `traffic`(`traffic_id`,`jenis_traffic`,`namajalan`,`statusjalan`,`kapasitasjalan`,`volumelalulintas`,`kondisijalan`,`lebarjalan`,`keterangan`,`lokasi`,`dokumentasi`) values 
(1,'kota','Jalan Dhoho','Jalan Kota',2000,1800,'Baik',6,'Beroperasi dengan lancar','Kediri','traffic/w0ENPORb2etHApr2H7zZUXd9HTwOK2vjm00Mygc0.jpg');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `access_token` text DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`nis`,`class`,`role`,`access_token`,`is_deleted`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'admin','admin@gmail.com','12345',NULL,NULL,'admin',NULL,0,'2024-07-03 02:05:46','2024-07-25 09:28:55','2024-07-03 02:05:46');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
