/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 8.0.30 : Database - rchive
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rchive` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `rchive`;

/*Table structure for table `rambu` */

DROP TABLE IF EXISTS `rambu`;

CREATE TABLE `rambu` (
  `rambu_id` int NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `namarambu` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenisrambu` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `titikrambu` int DEFAULT NULL,
  `kondisirambu` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dokumentasi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`rambu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `rambu` */

insert  into `rambu`(`rambu_id`,`jenis`,`namarambu`,`jenisrambu`,`titikrambu`,`kondisirambu`,`tahun`,`keterangan`,`lokasi`,`dokumentasi`) values 
(8,'Jalan Dhoho',NULL,'eee\r\nf\r\nf',12,34,213,NULL,NULL,'rambu/JoAKhPcscAYzr7j1o0TScwkTuh3ySTekfqmyxyln.jpg');

/*Table structure for table `rambu_dokumentasis` */

DROP TABLE IF EXISTS `rambu_dokumentasis`;

CREATE TABLE `rambu_dokumentasis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rambu_id` int NOT NULL,
  `dokumentasi` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `rambu_id` (`rambu_id`),
  CONSTRAINT `rambu_dokumentasis_ibfk_1` FOREIGN KEY (`rambu_id`) REFERENCES `rambu` (`rambu_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `rambu_dokumentasis` */

/*Table structure for table `tlight` */

DROP TABLE IF EXISTS `tlight`;

CREATE TABLE `tlight` (
  `tlight_id` int NOT NULL AUTO_INCREMENT,
  `jenis` enum('nasional','provinsi','kota') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenisapill` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `titikapill` decimal(65,0) DEFAULT NULL,
  `kondisiapill` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dokumentasi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`tlight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tlight` */

insert  into `tlight`(`tlight_id`,`jenis`,`jenisapill`,`titikapill`,`kondisiapill`,`tahun`,`keterangan`,`lokasi`,`dokumentasi`) values 
(1,'provinsi','3 warnaaa',1,'Buruk',2021,'Bekerja dengan baikk','Jalan Doho','tlight/nBwGjOp7rFUQB4TO8MIzJYAgl8KJZoHhcnGADExa.jpg');

/*Table structure for table `traffic` */

DROP TABLE IF EXISTS `traffic`;

CREATE TABLE `traffic` (
  `traffic_id` int NOT NULL AUTO_INCREMENT,
  `jenis_traffic` enum('nasional','provinsi','kota') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `namajalan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `statusjalan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kapasitasjalan` int DEFAULT NULL,
  `volumelalulintas` int DEFAULT NULL,
  `kondisijalan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'baik',
  `lebarjalan` int DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dokumentasi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`traffic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `traffic` */

insert  into `traffic`(`traffic_id`,`jenis_traffic`,`namajalan`,`statusjalan`,`kapasitasjalan`,`volumelalulintas`,`kondisijalan`,`lebarjalan`,`keterangan`,`lokasi`,`dokumentasi`) values 
(1,'kota','Jalan Dhoho','Jalan Kota',2000,1800,'Baik',6,'Beroperasi dengan lancar','Kediri','traffic/y0tWm5kOTsbkAXLz2rMsajwgiUOu1ZnBMirqzzv9.jpg'),
(2,'nasional','Jalan Malang',NULL,100,100,'Cukup Baik',4,'Baik',NULL,'traffic/ROqgzSCucgQkEcr3mgjar4SZ5miPt5bkqinUX0pk.jpg');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nis` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `class` int DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'admin',
  `access_token` text COLLATE utf8mb4_general_ci,
  `is_deleted` tinyint DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`nis`,`class`,`role`,`access_token`,`is_deleted`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'admin','admin@gmail.com','12345',NULL,NULL,'admin',NULL,0,'2024-07-03 02:05:46','2024-07-25 09:28:55','2024-07-03 02:05:46');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
