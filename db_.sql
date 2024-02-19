/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 8.0.31 : Database - api_caniob
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`obcanlrg98_quincenal` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `obcanlrg98_quincenal`;

/*Table structure for table `acopios` */

DROP TABLE IF EXISTS `acopios`;

CREATE TABLE `acopios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `TM_BRUTO` double NOT NULL DEFAULT '0',
  `TM_LIQUIDO` double NOT NULL DEFAULT '0',
  `vendor_ci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_nit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_id` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `acopios` */

/*Table structure for table `acs` */

DROP TABLE IF EXISTS `acs`;

CREATE TABLE `acs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_ci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_nit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` int NOT NULL,
  `invoice_date` date NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `product_name` bigint NOT NULL,
  `TM_quantity` double NOT NULL DEFAULT '0',
  `TM_price_usd` double NOT NULL DEFAULT '0',
  `TOTAL_usd` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `acs` */

/*Table structure for table `ars` */

DROP TABLE IF EXISTS `ars`;

CREATE TABLE `ars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_ci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_nit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` int NOT NULL,
  `invoice_date` date NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `product_name` bigint NOT NULL,
  `TM_quantity` double NOT NULL DEFAULT '0',
  `TM_price_usd` double NOT NULL DEFAULT '0',
  `TOTAL_usd` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ars` */

/*Table structure for table `configuration_options` */

DROP TABLE IF EXISTS `configuration_options`;

CREATE TABLE `configuration_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `option_id` bigint NOT NULL,
  `configuration_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `configuration_options` */

insert  into `configuration_options`(`id`,`option_id`,`configuration_id`,`created_at`,`updated_at`) values
(1,1,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(2,2,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(3,3,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(4,4,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(5,5,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(6,6,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(7,7,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(8,8,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(9,9,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(10,10,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(11,1,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(12,2,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(13,3,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(14,4,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(15,5,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(16,6,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(17,7,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(18,8,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(19,9,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(20,10,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(21,1,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(22,2,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(23,3,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(24,4,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(25,5,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(26,6,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(27,7,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(28,8,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(29,9,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(30,10,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(31,1,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(32,2,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(33,3,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(34,4,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(35,5,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(36,6,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(37,7,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(38,8,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(39,9,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(40,10,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(41,1,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(42,2,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(43,3,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(44,4,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(45,5,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(46,6,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(47,7,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(48,8,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(49,9,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(50,10,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(51,1,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(52,2,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(53,3,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(54,4,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(55,5,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(56,6,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(57,7,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(58,8,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(59,9,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(60,10,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(61,1,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(62,2,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(63,3,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(64,4,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(65,5,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(66,6,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(67,7,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(68,8,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(69,9,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(70,10,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(71,1,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(72,2,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(73,3,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(74,4,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(75,5,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(76,6,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(77,7,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(78,8,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(79,9,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(80,10,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(81,1,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(82,2,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(83,3,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(84,4,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(85,5,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(86,6,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(87,7,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(88,8,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(89,9,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(90,10,9,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(91,1,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(92,2,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(93,3,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(94,4,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(95,5,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(96,6,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(97,7,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(98,8,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(99,9,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(100,10,10,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(101,1,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(102,2,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(103,3,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(104,4,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(105,5,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(106,6,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(107,7,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(108,8,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(109,9,11,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(110,10,11,'2024-02-09 00:38:57','2024-02-09 00:38:57');

/*Table structure for table `configurations` */

DROP TABLE IF EXISTS `configurations`;

CREATE TABLE `configurations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `industry_id` bigint NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `configurations` */

insert  into `configurations`(`id`,`description`,`year`,`industry_id`,`status`,`created_at`,`updated_at`) values
(1,'Configuracion 2024 ETASA',2024,1,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(2,'Configuracion 2024 PROLEGA',2024,2,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(3,'Configuracion 2024 IOL',2024,3,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(4,'Configuracion 2024 NUTRIOIL',2024,4,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(5,'Configuracion 2024 GRANOS',2024,5,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(6,'Configuracion 2024 CARGILL',2024,6,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(7,'Configuracion 2024 GRAVETAL',2024,7,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(8,'Configuracion 2024 INTAGRO',2024,8,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(9,'Configuracion 2024 GRANALIMENTO',2024,9,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(10,'Configuracion 2024 CAINSA',2024,10,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56'),
(11,'Configuracion 2024 INOLSA',2024,11,'vigente','2024-02-09 00:38:56','2024-02-09 00:38:56');

/*Table structure for table `cs` */

DROP TABLE IF EXISTS `cs`;

CREATE TABLE `cs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_ci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_nit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` int NOT NULL,
  `invoice_date` date NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `product_name` bigint NOT NULL,
  `TM_quantity` double NOT NULL DEFAULT '0',
  `TM_price_usd` double NOT NULL DEFAULT '0',
  `TOTAL_usd` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cs` */

/*Table structure for table `exp` */

DROP TABLE IF EXISTS `exp`;

CREATE TABLE `exp` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_ci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_nit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` int NOT NULL,
  `invoice_date` date NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `product_name` bigint NOT NULL,
  `TM_quantity` double NOT NULL DEFAULT '0',
  `TM_price_usd` double NOT NULL DEFAULT '0',
  `TOTAL_usd` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `exp` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `files` */

/*Table structure for table `forms` */

DROP TABLE IF EXISTS `forms`;

CREATE TABLE `forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date_reception` date DEFAULT NULL,
  `date_close` date DEFAULT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_id` bigint NOT NULL,
  `industry_id` bigint NOT NULL,
  `period_id` bigint NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `status` enum('borrador','completado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `forms` */

/*Table structure for table `guilds` */

DROP TABLE IF EXISTS `guilds`;

CREATE TABLE `guilds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `guilds` */

/*Table structure for table `his` */

DROP TABLE IF EXISTS `his`;

CREATE TABLE `his` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_ci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_nit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` int NOT NULL,
  `invoice_date` date NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `product_name` bigint NOT NULL,
  `TM_quantity` double NOT NULL DEFAULT '0',
  `TM_price_usd` double NOT NULL DEFAULT '0',
  `TOTAL_usd` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `his` */

/*Table structure for table `hss` */

DROP TABLE IF EXISTS `hss`;

CREATE TABLE `hss` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_ci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_nit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` int NOT NULL,
  `invoice_date` date NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `product_name` bigint NOT NULL,
  `TM_quantity` double NOT NULL DEFAULT '0',
  `TM_price_usd` double NOT NULL DEFAULT '0',
  `TOTAL_usd` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `hss` */

/*Table structure for table `industries` */

DROP TABLE IF EXISTS `industries`;

CREATE TABLE `industries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guild_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `industries` */

insert  into `industries`(`id`,`name`,`nit`,`business_name`,`image`,`guild_id`,`created_at`,`updated_at`) values
(1,'etasa',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(2,'prolega',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(3,'iol',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(4,'nutrioil',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(5,'granos',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(6,'cargill',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(7,'gravetal',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(8,'intagro',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(9,'granalimento',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(10,'cainsa',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(11,'inolsa',NULL,NULL,NULL,NULL,'2024-02-09 00:38:56','2024-02-09 00:38:56');

/*Table structure for table `industry_users` */

DROP TABLE IF EXISTS `industry_users`;

CREATE TABLE `industry_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `industry_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `industry_users` */

insert  into `industry_users`(`id`,`user_id`,`industry_id`,`created_at`,`updated_at`) values
(1,2,1,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(2,3,2,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(3,4,3,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(4,5,4,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(5,6,5,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(6,7,6,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(7,8,7,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(8,9,8,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(9,10,9,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(10,11,10,'2024-02-09 00:38:56','2024-02-09 00:38:56'),
(11,12,11,'2024-02-09 00:38:56','2024-02-09 00:38:56');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_11_11_204444_create_permission_tables',1),
(6,'2024_01_16_134319_create_guilds_table',1),
(7,'2024_01_16_134341_create_industries_table',1),
(8,'2024_01_16_134412_create_industry_users_table',1),
(9,'2024_01_16_140543_create_vendors_table',1),
(10,'2024_01_16_171046_create_products_table',1),
(11,'2024_01_16_171051_create_periods_table',1),
(12,'2024_01_22_104556_create_options_table',1),
(13,'2024_01_22_124538_create_forms_table',1),
(14,'2024_01_22_140204_create_stocks_table',1),
(15,'2024_01_22_140210_create_productions_table',1),
(16,'2024_01_22_140219_create_acopios_table',1),
(17,'2024_01_22_141124_create_priceclosings_table',1),
(18,'2024_01_23_003642_create_configurations_table',1),
(19,'2024_01_23_015729_create_configuration_options_table',1),
(20,'2024_01_24_022348_create_resumes_table',1),
(21,'2024_01_24_182231_create_hss_table',1),
(22,'2024_01_24_182237_create_his_table',1),
(23,'2024_01_24_182315_create_acs_table',1),
(24,'2024_01_24_182337_create_ars_table',1),
(25,'2024_01_24_182344_create_cs_table',1),
(26,'2024_01_24_182350_create_exp_table',1),
(27,'2024_01_30_163824_create_files_table',1);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values
(1,'App\\Models\\User',1),
(2,'App\\Models\\User',2),
(2,'App\\Models\\User',3),
(2,'App\\Models\\User',4),
(2,'App\\Models\\User',5),
(2,'App\\Models\\User',6),
(2,'App\\Models\\User',7),
(2,'App\\Models\\User',8),
(2,'App\\Models\\User',9),
(2,'App\\Models\\User',10),
(2,'App\\Models\\User',11),
(2,'App\\Models\\User',12);

/*Table structure for table `options` */

DROP TABLE IF EXISTS `options`;

CREATE TABLE `options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `options` */

insert  into `options`(`id`,`name`,`route`,`short_name`,`created_at`,`updated_at`) values
(1,'planilla de stock de productos','/stock','stock','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(2,'planilla de producción de productos','/production','production','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(3,'planilla de grano acopiado','/soybean','acopio','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(4,'planilla de precio cerrado de grano','/priceclosing','priceclosing','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(5,'planilla de harina solvente de soya','/hss','hss','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(6,'planilla de harina integral de soya','/his','his','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(7,'planilla de aceite crudo de soya','/acs','acs','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(8,'planilla de aceite refinado de soya','/ars','ars','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(9,'planilla de cascarilla de soya','/cs','cs','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(10,'planilla de expeller de soya','/exp','exp','2024-02-09 00:38:48','2024-02-09 00:38:48');

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `periods` */

DROP TABLE IF EXISTS `periods`;

CREATE TABLE `periods` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `month` tinyint NOT NULL,
  `biweekly` tinyint NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `date_limit` date NOT NULL,
  `status_description` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('vigente','finalizado','pendiente') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vigente',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `periods` */

insert  into `periods`(`id`,`name`,`year`,`month`,`biweekly`,`date_start`,`date_end`,`date_limit`,`status_description`,`status`,`created_at`,`updated_at`) values
(1,'Semana 1-Enero-2023',2023,1,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(2,'Semana 2-Enero-2023',2023,1,2,'2023-01-22','2023-02-02','2023-02-06',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(3,'Semana 1-Febrero-2023',2023,2,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(4,'Semana 2-Febrero-2023',2023,2,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(5,'Semana 1-Marzo-2023',2023,3,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(6,'Semana 2-Marzo-2023',2023,3,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(7,'Semana 1-Abril-2023',2023,4,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(8,'Semana 2-Abril-2023',2023,4,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(9,'Semana 1-Mayo-2023',2023,5,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(10,'Semana 2-Mayo-2023',2023,5,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(11,'Semana 1-Junio-2023',2023,6,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(12,'Semana 2-Junio-2023',2023,6,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(13,'Semana 1-Julio-2023',2023,7,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(14,'Semana 2-Julio-2023',2023,7,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(15,'Semana 1-Agosto-2023',2023,8,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(16,'Semana 2-Agosto-2023',2023,8,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(17,'Semana 1-Septiembre-2023',2023,9,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(18,'Semana 2-Septiembre-2023',2023,9,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(19,'Semana 1-Octubre-2023',2023,10,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(20,'Semana 2-Octubre-2023',2023,10,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(21,'Semana 1-Noviembre-2023',2023,11,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(22,'Semana 2-Noviembre-2023',2023,11,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(23,'Semana 1-Diciembre-2023',2023,12,1,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(24,'Semana 2-Diciembre-2023',2023,12,2,'2023-01-01','2023-01-15','2023-01-21',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(25,'Quincena 1-Enero-2024',2024,1,1,'2024-01-16','2024-01-22','2024-01-31',NULL,'finalizado','2024-02-09 00:38:57','2024-02-09 00:38:57'),
(26,'Quincena 2-Enero-2024',2024,1,2,'2024-02-01','2024-02-07','2024-02-15',NULL,'vigente','2024-02-09 00:38:57','2024-02-09 00:38:57');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `priceclosings` */

DROP TABLE IF EXISTS `priceclosings`;

CREATE TABLE `priceclosings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `regimen` enum('RAU','GENERAL','PROPIO') COLLATE utf8mb4_unicode_ci NOT NULL,
  `TM_RECEIVED` double NOT NULL DEFAULT '0',
  `PRICE_RECEIVED` double NOT NULL DEFAULT '0',
  `IMPORT_TOTAL` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `priceclosings` */

/*Table structure for table `productions` */

DROP TABLE IF EXISTS `productions`;

CREATE TABLE `productions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `TM` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `productions` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factor` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`short_name`,`unit`,`factor`,`created_at`,`updated_at`) values
(1,'Grano de Soya',NULL,NULL,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(2,'Harina de soya solvente','hss',NULL,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(3,'Harina integral de soya','his',NULL,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(4,'Cascarilla de soya','cs',NULL,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(5,'Aceite Crudo de Soya','acs',NULL,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(6,'Aceite refinado de soya','ars',NULL,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57');

/*Table structure for table `resumes` */

DROP TABLE IF EXISTS `resumes`;

CREATE TABLE `resumes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `year` int NOT NULL,
  `month` int NOT NULL,
  `biweekly` tinyint NOT NULL,
  `period_id` bigint NOT NULL,
  `status` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acopio` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acopio_tm` double DEFAULT NULL,
  `priceclosing` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priceclosing_tm` double DEFAULT NULL,
  `priceclosing_usd` double DEFAULT NULL,
  `hss` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hss_tm` double DEFAULT NULL,
  `hss_usd` double DEFAULT NULL,
  `cs` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cs_tm` double DEFAULT NULL,
  `cs_usd` double DEFAULT NULL,
  `acs` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acs_tm` double DEFAULT NULL,
  `acs_usd` double DEFAULT NULL,
  `ars` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ars_tm` double DEFAULT NULL,
  `ars_usd` double DEFAULT NULL,
  `his` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `his_tm` double DEFAULT NULL,
  `his_usd` double DEFAULT NULL,
  `exp` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_tm` double DEFAULT NULL,
  `exp_usd` double DEFAULT NULL,
  `stock` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_hss` double DEFAULT NULL,
  `stock_cs` double DEFAULT NULL,
  `stock_acs` double DEFAULT NULL,
  `stock_ars` double DEFAULT NULL,
  `stock_his` double DEFAULT NULL,
  `stock_exp` double DEFAULT NULL,
  `production` enum('pendiente','completado','retraso','observado') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production_hss` double DEFAULT NULL,
  `production_cs` double DEFAULT NULL,
  `production_acs` double DEFAULT NULL,
  `production_ars` double DEFAULT NULL,
  `production_his` double DEFAULT NULL,
  `production_exp` double DEFAULT NULL,
  `industry_id` bigint NOT NULL,
  `configuration_id` bigint NOT NULL,
  `observation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `resumes` */

insert  into `resumes`(`id`,`year`,`month`,`biweekly`,`period_id`,`status`,`acopio`,`acopio_tm`,`priceclosing`,`priceclosing_tm`,`priceclosing_usd`,`hss`,`hss_tm`,`hss_usd`,`cs`,`cs_tm`,`cs_usd`,`acs`,`acs_tm`,`acs_usd`,`ars`,`ars_tm`,`ars_usd`,`his`,`his_tm`,`his_usd`,`exp`,`exp_tm`,`exp_usd`,`stock`,`stock_hss`,`stock_cs`,`stock_acs`,`stock_ars`,`stock_his`,`stock_exp`,`production`,`production_hss`,`production_cs`,`production_acs`,`production_ars`,`production_his`,`production_exp`,`industry_id`,`configuration_id`,`observation`,`created_at`,`updated_at`) values
(1,2023,1,1,1,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(2,2023,1,2,2,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(3,2023,2,1,3,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(4,2023,2,2,4,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(5,2023,3,1,5,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(6,2023,3,2,6,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(7,2023,4,1,7,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(8,2023,4,2,8,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(9,2023,5,1,9,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(10,2023,5,2,10,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(11,2023,6,1,11,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(12,2023,6,2,12,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(13,2023,7,1,13,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(14,2023,7,2,14,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(15,2023,8,1,15,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(16,2023,8,2,16,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(17,2023,9,1,17,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(18,2023,9,2,18,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(19,2023,10,1,19,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(20,2023,10,2,20,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(21,2023,11,1,21,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(22,2023,11,2,22,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(23,2023,12,1,23,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(24,2023,12,2,24,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(25,2024,1,1,25,'completado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57'),
(26,2024,1,2,26,'pendiente',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,'2024-02-09 00:38:57','2024-02-09 00:38:57');

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values
(1,'administrador','api','2024-02-09 00:38:48','2024-02-09 00:38:48'),
(2,'industria','api','2024-02-09 00:38:48','2024-02-09 00:38:48');

/*Table structure for table `stocks` */

DROP TABLE IF EXISTS `stocks`;

CREATE TABLE `stocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tm` double NOT NULL DEFAULT '0',
  `form_id` bigint NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `product_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `stocks` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `last_login` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`is_active`,`last_login`,`role`,`created_at`,`updated_at`) values
(1,'administrador','$2y$12$ZnIcbwwkk5AJwHarOFlMo.5uCIG7ReeyZ8AysfHCoIpLTJ6i0XlFK',1,NULL,'administrador','2024-02-09 00:38:49','2024-02-09 00:38:49'),
(2,'etasa','$2y$12$4oy29EjWRSD2aylcusPL0.y8YQcuQJDIUvDU3nEaZfOgYbfnbln3C',1,'2024-02-09 01:21:38','industria','2024-02-09 00:38:50','2024-02-09 01:21:38'),
(3,'prolega','$2y$12$ggyCazG7sjep9u4Wbt2jk.6MsLAGrp5SJot9YApwDQg5NqrAEjiNW',1,NULL,'industria','2024-02-09 00:38:51','2024-02-09 00:38:51'),
(4,'iol','$2y$12$n0iPUoqNBf4z.z1RnNydjOZgYjjiKVB40ECdqVPacyw2gWnJfuYAS',1,NULL,'industria','2024-02-09 00:38:51','2024-02-09 00:38:51'),
(5,'nutrioil','$2y$12$Jucztj8pocMSxwWqgkvM3eTf8/68h1OSyWplLzE/0orM4Pt57ZpI.',1,NULL,'industria','2024-02-09 00:38:52','2024-02-09 00:38:52'),
(6,'granos','$2y$12$gQ6yTQYEfHTKZImKS/vUE.RNZOM2UEdLa7cDTG.4Xb2SyP8bZG26O',1,NULL,'industria','2024-02-09 00:38:53','2024-02-09 00:38:53'),
(7,'cargill','$2y$12$CRKQZ/MKYNsT4jTv8g8XyeTEsnBnM/xqDksgX9RLIlzxsFBdtD9WG',1,NULL,'industria','2024-02-09 00:38:53','2024-02-09 00:38:53'),
(8,'gravetal','$2y$12$dh.cljiVTr0QS2HsUsv9neowjJIBPfqsQ.yf8RTZ/./vgd3jzERs.',1,NULL,'industria','2024-02-09 00:38:54','2024-02-09 00:38:54'),
(9,'intagro','$2y$12$ZaNhthLnjMOuOJDl0aF31OSyjBfZIipajK7iTp3xVXELUpYuhRYE6',1,NULL,'industria','2024-02-09 00:38:54','2024-02-09 00:38:54'),
(10,'granalimento','$2y$12$RAzlnSzqP5qtlX.QpjgwTOOT1HthAeiP7aiISiTegAQxxfCDBrw4G',1,NULL,'industria','2024-02-09 00:38:55','2024-02-09 00:38:55'),
(11,'cainsa','$2y$12$vMf2h2Jc0uMcD6aNHDWj1OvwlG9aljQtpLZeQE8Ri2SFpf1xkxyKK',1,NULL,'industria','2024-02-09 00:38:55','2024-02-09 00:38:55'),
(12,'inolsa','$2y$12$IcSYD1e3rL3YJ/YUPBSwU.qMLsMavnAAEiKKQ/lkm8fQpdZ0N7o5m',1,NULL,'industria','2024-02-09 00:38:56','2024-02-09 00:38:56');

/*Table structure for table `vendors` */

DROP TABLE IF EXISTS `vendors`;

CREATE TABLE `vendors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `vendors` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
