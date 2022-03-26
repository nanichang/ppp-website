-- MySQL dump 10.13  Distrib 8.0.28, for macos12.0 (arm64)
--
-- Host: localhost    Database: ppp
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activations`
--

DROP TABLE IF EXISTS `activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activations`
--

LOCK TABLES `activations` WRITE;
/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bids`
--

DROP TABLE IF EXISTS `bids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bids` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bids`
--

LOCK TABLES `bids` WRITE;
/*!40000 ALTER TABLE `bids` DISABLE KEYS */;
/*!40000 ALTER TABLE `bids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contractors`
--

DROP TABLE IF EXISTS `contractors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contractors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_sector_id` int unsigned DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `split_percentage` decimal(5,2) NOT NULL DEFAULT '0.00',
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contractors`
--

LOCK TABLES `contractors` WRITE;
/*!40000 ALTER TABLE `contractors` DISABLE KEYS */;
/*!40000 ALTER TABLE `contractors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lga_data`
--

DROP TABLE IF EXISTS `lga_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lga_data` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lga_chairman` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga_population` int DEFAULT NULL,
  `lga_land_area` double(8,2) DEFAULT NULL,
  `lga_distance_from_jos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga_minerals` longtext COLLATE utf8mb4_unicode_ci,
  `lga_produce` longtext COLLATE utf8mb4_unicode_ci,
  `lga_festive_dates` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga_opportunities` longtext COLLATE utf8mb4_unicode_ci,
  `lga_attractions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lga_data_lga_id_foreign` (`lga_id`),
  CONSTRAINT `lga_data_lga_id_foreign` FOREIGN KEY (`lga_id`) REFERENCES `lgas` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lga_data`
--

LOCK TABLES `lga_data` WRITE;
/*!40000 ALTER TABLE `lga_data` DISABLE KEYS */;
INSERT INTO `lga_data` VALUES (1,'Hon. Alamba Danladi Jock',175267,1312.50,'54 Km South of Jos','Cassiterite, Columbite, Monazite, Zircon, Quartz, Feldspars, Kaolin, Glass sand, Magnetite, Clay, Hard Rock, Sand,  Wolframite, Ilmenite/Rutile, Tin, Gemstones (Tourmaline,Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Fluoride','Maize, Potatoes, Vegetables, Cocoyam, Acha, Millet, Cowpea, kidney beans, finger millet (tamba)','Nzem Berom (April)','Processing of crops into end-consumer products, Mineral exploration and processing','Kurra waterfalls',1,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(2,'Hon. Igmala Andy Stephen',189834,1776.00,'30 Km North West of Jos','Cassiterite, Columbite, Quartz, Feldspars, Kaolin, Magnetite, Wolframite, Ilmenite/Rutile, Tin, Hard Rock, Clay, Sand, Gemstones (Tourmaline,Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive,Fluoride)','Acha, Maize, beans, yams, groundnut, potatoes, soya beans, beniseed, finger millet (tamba)','Irigwe New Year Festival (Jan), Zarachi','Processing of Soya Oil and exploration of minerals available ','N/A',2,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(3,'Hon. Guluwa Joseph',179550,1593.00,'77 Km South of Jos','Cassiterite, Columbite, Kaolin, Garnet, Clay, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)','Maize, potatoes, kidney beans, avocado pear, olive fruits, palm/trees, coffee, sugar cane, apples, sweet potatoes, cocoyam, finger millet (tamba), vegetables, acha','Ron/Kulere (Dec/Feb), Pu\'us Kang Mushere (April)','Storage and Processing of Irish Potatoes and  Maize','N/A',3,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(4,'Ezekiel Yakubu Izang',85607,911.30,'35 Km East of Jos','Cassiterite, Columbite, Monazite, Quartz, Magnetite, Wolframite, Ilmenite/Rutile, Mica, Tin, Clay, Hard Rock, Sand','Maize, cowpeas, soybeans, groundnut, yam, rice, cassava, acha, guinea corn, sweet potatoes, vegetables','Afizere (Jan)','Large scale production of exotic fruits, cut flowers and coffee for the purpose of processing and exportation','N/A',4,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(5,'Hon. Usman Shehu Bala',429300,650.00,'State Capital','Cassiterite, Columbite, Monazite, Quartz, Kaolin, Glass Sand, Magnetite, Wolframite, Ilenite/Rutile, Mica, Tin, Clay, Hard Rock, Sand','Maize, Vegetables, beans, acha, olive fruits, soybeans, coffee, guinea corn, apples, cut flowers','Afizere (Jan), Nzem Berom (April)','Large scale farming of vegetables, fruits and cut flowers. Mineral processing and exportation.','N/A',5,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(6,'Hon. Davou Gideon Dung',309716,650.00,'15 Km South of Jos','Cassiterite, Columbite, Monazite, Magnetite, Wolframite, Ilenite/Rutile, Tin, Hard Rock, Sand, Clay, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)','Acha, millet, maize potatoes, vegetables, coffee, sweet potatoes, apples, olive fruits, cut flowers','Nzem Berom (April)','Processing of some of the crops and minerals into finished products.','N/A',6,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(7,'Hon. Yusuf Dayyabu Garga',165898,2788.40,'191 Km South West of Jos','Cassiterite, Columbite, Zircon, Quartz, Kaolin, Galena/Sphalerite, Magnetite, Mica, Gypsum, Tantalite, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)','Maize, cotton, guinea corn, sugar cane, millet, cowpeas, rice, groundnuts Bambaranuts','Bogghom (Dec/Jan)','Large scale production of groundnuts and sugarcane for processing into finished products.','N/A',7,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(8,'Hon. Gotip Henry',124424,2788.40,'152 Km South East of Jos','Quartz, Feldspars, Kaolin, Garnet, Hard Rock, Sand','Millet, Guinea corn, beans, groundnut, Bambaranuts, Acha, sweet potatoes, yams','Pusdung (Mar/April)','Large scale production of cotton and olives for textile and olive oil manufacturing respectively.','N/A',8,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(9,'Hon. Bitrus Zulfa',140643,2440.00,'194 Km South East of Jos','Quartz, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)','Groundnut, maize, pepper, cotton, millet, cowpea, rice, yam, cassava, guinea corn, bambaranuts','Taroh Day (Mar/Apr)','Large scale manufacturing of rice for local consumption and export purposes.','N/A',9,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(10,'Hon. Bulus Vincent Venman',106305,1250.00,'237 Km South East of Jos','Barytes, Hard Rock, Sand','Groundnuts, rice, maize, yams, cassava, yams','Taroh Day (Mar/Apr), Resettlement Day','Large scale production of some of the major crops grown here.','N/A',10,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(11,'Hon. Dapuy Minister Daniel',294931,1587.50,'77 Km South East of Jos','Zircon, Garnet, Magnetite, Wolframite, Ilenite/Rutile, Clay, Hard Rock, Sand','Maize, potatoes, guinea corn, cocoyam, sweet potatoes, kidney beans, cowpea, sugar cane, acha','Puskaat (April)','Large scale production of sugarcane for processing into other finished products and other crops as well.','N/A',11,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(12,'Hon. Bako Augustine',97411,630.00,'240 Km South East of Jos','Hard Rock, Sand','Guinea corn, groundnuts, bambaranuts, cowpeas, millet, maize, yams, cassava','Rye-Ywom (Dec)','Glass sand exploration and processing into glass and ceramics.','N/A',12,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(13,'Hon. Kak\'mena Audu Goteng',191685,1334.00,'120 Km South East of Jos','Zircon, Feldspar, Garnet, Mica, Talc, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride)','Maize, rice, acha, potatoes, olive fruits, millet, guinea corn, cowpeas, tomatoes','Pusdung (Mar/April)','Olive oil processing and others','N/A',13,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(14,'Hon. Da\'a Ernest Abner',196929,2688.00,'298 Km South East of Jos','Barytes, Salt, Hard Rock, Sand','Rice, yam, maize, cassava, sorghum, bambara nuts','Bit Goemai (Mar/Apr), Pan (March)','Large scale Yam and Rice production for export purposes and others','N/A',14,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(15,'Hon. Galleon Mafeng',131557,807.00,'51 Km South West of Jos','Cassiterite, Columbite, Monazite, Quartz, Feldspars, Kaolin, Magnetite, Mica, Tin, Hard Rock, Sand, Gemstones (Tourmaline, Topaz, Amethyst, Aquamarine, Sapphire, Emerald, Corundum, Olive, Flouride) ','Ginger, palm trees, Acha, millet, guinea corn, vegetables, yams, sugar cane, cocoyam, cassava, olive, fruits, citrus, potatoes and sweet potatoes','Nzem Berom (April)','Large scale production and processing of vegetables and fruits and Gemstone exportation.','N/A',15,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(16,'Hon. Na\'antuam Alexander',208017,2437.00,'254 Km South East of Jos','Barytes, Salt, Hard Rock, Sand','Yams, rice, guinea corn, maize, cassava, millet, groundnuts','Bit Goemai (Mar/Apr)','Large scale production of Rice and Yam for export purposes','N/A',16,'2022-03-25 09:55:20','2022-03-25 09:55:20'),(17,'Hon. Buba Ado Abubakar',161714,4306.00,'216 Km South West of Jos','Galena/Sphalerite, Gypsum, Hard Rock, Sand','Guinea corn, cowpeas, maize, rice, millet, cassava, soya beans, watermelon, sweet melon','Thaar (Nov)','Large scale production of Livestocks  and Yam for export purposes.','N/A',17,'2022-03-25 09:55:20','2022-03-25 09:55:20');
/*!40000 ALTER TABLE `lga_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lgas`
--

DROP TABLE IF EXISTS `lgas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lgas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lga_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lgas`
--

LOCK TABLES `lgas` WRITE;
/*!40000 ALTER TABLE `lgas` DISABLE KEYS */;
INSERT INTO `lgas` VALUES (1,'Barkin Ladi','barkin_ladi','2022-03-25 09:55:20','2022-03-25 09:55:20'),(2,'Bassa','bassa','2022-03-25 09:55:20','2022-03-25 09:55:20'),(3,'Bokkos','bokkos','2022-03-25 09:55:20','2022-03-25 09:55:20'),(4,'Jos East','jos_east','2022-03-25 09:55:20','2022-03-25 09:55:20'),(5,'Jos North','jos_north','2022-03-25 09:55:20','2022-03-25 09:55:20'),(6,'Jos South','jos_south','2022-03-25 09:55:20','2022-03-25 09:55:20'),(7,'Kanam','kanam','2022-03-25 09:55:20','2022-03-25 09:55:20'),(8,'Kanke','kanke','2022-03-25 09:55:20','2022-03-25 09:55:20'),(9,'Langtang North','langtang_north','2022-03-25 09:55:20','2022-03-25 09:55:20'),(10,'Langtang South','langtang_south','2022-03-25 09:55:20','2022-03-25 09:55:20'),(11,'Mangu','mangu','2022-03-25 09:55:20','2022-03-25 09:55:20'),(12,'Mikang','mikang','2022-03-25 09:55:20','2022-03-25 09:55:20'),(13,'Pankshin','pankshin','2022-03-25 09:55:20','2022-03-25 09:55:20'),(14,'Qua\'an Pan','quaan_pan','2022-03-25 09:55:20','2022-03-25 09:55:20'),(15,'Riyom','riyom','2022-03-25 09:55:20','2022-03-25 09:55:20'),(16,'Shendam','shendam','2022-03-25 09:55:20','2022-03-25 09:55:20'),(17,'Wase','wase','2022-03-25 09:55:20','2022-03-25 09:55:20');
/*!40000 ALTER TABLE `lgas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_07_02_230147_migration_cartalyst_sentinel',1),(2,'2019_08_19_000000_create_failed_jobs_table',1),(3,'2019_12_14_000001_create_personal_access_tokens_table',1),(4,'2022_03_14_110539_create_bids_table',1),(5,'2022_03_14_153638_create_contractors_table',1),(6,'2022_03_14_155112_create_countries_table',1),(7,'2022_03_21_134407_create_teams_table',1),(8,'2022_03_21_150418_create_lgas_table',1),(9,'2022_03_21_150704_create_lga_data_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persistences`
--

DROP TABLE IF EXISTS `persistences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persistences` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persistences`
--

LOCK TABLES `persistences` WRITE;
/*!40000 ALTER TABLE `persistences` DISABLE KEYS */;
/*!40000 ALTER TABLE `persistences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reminders`
--

DROP TABLE IF EXISTS `reminders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reminders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reminders`
--

LOCK TABLES `reminders` WRITE;
/*!40000 ALTER TABLE `reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_users` (
  `user_id` int unsigned NOT NULL,
  `role_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'superadmin','Super Admin',NULL,'Can Create other users, perform CREATE, UPDATE, READ and DELETE on the system.','2022-03-25 09:55:20','2022-03-25 09:55:20'),(2,'admin','Admin',NULL,'Can Create other users but not super admin, perform CREATE, UPDATE, READ and DELETE on the system.','2022-03-25 09:55:20','2022-03-25 09:55:20'),(3,'contractor','Contractor',NULL,'Can only publish news','2022-03-25 09:55:20','2022-03-25 09:55:20');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `throttle` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Contractor',
  `cac` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_sector_id` int unsigned DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `split_percentage` decimal(5,2) NOT NULL DEFAULT '0.00',
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-25 11:55:29
