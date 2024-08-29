-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: r6laravel
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `carTitle` varchar(255) NOT NULL,
  `image` varchar(2048) DEFAULT NULL,
  `discription` text NOT NULL,
  `price` double NOT NULL,
  `published` tinyint(1) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cars_category_id_foreign` (`category_id`),
  CONSTRAINT `cars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'marcedes','38e933a15a2972a8295806f01b43cc01.png','Quam consequatur incidunt facilis voluptate quia dolorem. Laudantium cumque eos est ullam molestias. Quidem aspernatur mollitia rerum est ipsum ex.',875,0,1,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(2,'marcedes','','Voluptas voluptate ipsam facere velit. Aut debitis sit distinctio quo voluptates voluptas ut. Quibusdam eveniet alias totam non culpa at.',949,0,4,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(3,'pmw','4c0bfeda3d9b809372075a28743626df.png','Consequatur magni sint voluptatibus praesentium excepturi sit consequatur veniam. Harum quis aut et est. Id ut ut molestias est et. Veritatis quos quo qui ut.',392,0,5,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(4,'marcedes','c11dcfb739270bb0fdfb9f3d9a7777b3.png','Aut exercitationem qui ratione ipsam id eaque. Totam doloremque veritatis repudiandae praesentium vitae vel. Exercitationem voluptatem fugiat ea unde quae porro deserunt.',468,1,4,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(5,'pmw','cde2527e673933d35dbe3810e62180b0.png','Qui qui illum optio neque et non. Velit voluptas iusto illum qui et praesentium aut. Eius omnis optio qui sed molestiae sit.',734,1,5,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(6,'pmw','97abda5f583cc68974af5d0b73ef9a50.png','Qui nemo omnis architecto molestiae tenetur suscipit. Aliquam recusandae animi quam voluptas deserunt. Eum dolores voluptas aut perferendis itaque. Inventore minima eius doloremque adipisci.',171,0,2,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(7,'pmw','58332d071aaa900971389d72490fe986.png','Aut modi voluptate laborum sed. Ut velit recusandae minus autem reiciendis non. Quaerat voluptas porro et quam vel. Id sint reprehenderit molestiae quaerat a officiis.',344,0,5,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(8,'marcedes','5182f3b8c6063558bead92b8d20edc90.png','Et labore soluta est omnis vero sit aut. Culpa impedit consequuntur voluptatibus sit perspiciatis.',267,0,2,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(9,'pmw','','Laborum quasi hic omnis. Repellendus illo dolore accusamus reprehenderit vel deserunt. Quae ea rerum asperiores itaque dolore at a. Ut quae vel itaque debitis adipisci veniam vel.',500,0,5,NULL,'2024-08-28 14:13:27','2024-08-28 14:13:27'),(10,'pmw','986b37401ff7b36d81a55a3a89959088.png','Consectetur et aut aliquid sapiente doloribus et fugit eum. Sequi eum repellat fuga debitis dolor voluptas. Et enim sit et nesciunt. Perspiciatis voluptatibus sunt doloribus blanditiis eaque.',484,0,5,NULL,'2024-08-28 14:13:28','2024-08-28 14:13:28');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_category_unique` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'quidem','2024-08-28 14:12:26','2024-08-28 14:12:26'),(2,'nihil','2024-08-28 14:12:26','2024-08-28 14:12:26'),(3,'laboriosam','2024-08-28 14:12:26','2024-08-28 14:12:26'),(4,'molestiae','2024-08-28 14:12:27','2024-08-28 14:12:27'),(5,'et','2024-08-28 14:12:27','2024-08-28 14:12:27');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoris`
--

DROP TABLE IF EXISTS `categoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoris` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoris`
--

LOCK TABLES `categoris` WRITE;
/*!40000 ALTER TABLE `categoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `className` varchar(50) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` double NOT NULL,
  `isFulled` tinyint(1) NOT NULL,
  `timeFrom` time NOT NULL,
  `timeTo` time NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (142,'2024_07_11_104321_create_categoris_table',1),(219,'0001_01_01_000000_create_users_table',2),(220,'0001_01_01_000001_create_cache_table',2),(221,'0001_01_01_000002_create_jobs_table',2),(222,'2024_07_17_191306_create_classes_table',2),(223,'2024_07_31_190904_add_to_classes_table',2),(224,'2024_08_04_190517_create_products_table',2),(225,'2024_08_11_150305_create_phones_table',2),(226,'2024_08_11_150407_create_students_table',2),(227,'2024_08_11_181355_create_categories_table',2),(228,'2024_08_17_162233_create_cars_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phones`
--

LOCK TABLES `phones` WRITE;
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `image` varchar(2048) DEFAULT NULL,
  `like` int(11) NOT NULL,
  `price` double NOT NULL,
  `discription` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('UMaTQGaDLmza8lLAk4Dz0BD1e4zv8jUGWvSVBIjQ',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY2paSGQ1QVIxaU53N2lYSFVRQ2NZZTR1SjBKTDIyTEJKNlpxeHJRcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdXRoL2dpdGh1Yi9yZWRpcmVjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToic3RhdGUiO3M6NDA6IjJxQ21tSkNpYU1wb3R6Y2pibmszZEd6M2xEYXgzY1JJMUxlS2lQaDMiO30=',1724866974);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_phone_id_foreign` (`phone_id`),
  CONSTRAINT `students_phone_id_foreign` FOREIGN KEY (`phone_id`) REFERENCES `phones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `github_id` varchar(255) DEFAULT NULL,
  `github_token` varchar(255) DEFAULT NULL,
  `github_refresh_token` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Robbie Hettinger',1,'lhaag@example.org','614.754.7266','2024-08-28 14:12:24','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'pZlspccsQO','2024-08-28 14:12:25','2024-08-28 14:12:25'),(2,'Elian Watsica',0,'zelma.ohara@example.net','(341) 585-2684','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'QHQHwaSCyz','2024-08-28 14:12:25','2024-08-28 14:12:25'),(3,'Rashad Abbott',0,'slangosh@example.net','1-954-894-4074','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'5LAlPuDJGf','2024-08-28 14:12:25','2024-08-28 14:12:25'),(4,'Robb Kautzer',0,'matteo66@example.org','1-248-532-6602','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'vCJf6Yw7B0','2024-08-28 14:12:25','2024-08-28 14:12:25'),(5,'Dr. Laurence Stoltenberg',1,'brain92@example.org','747.755.4815','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'lNCfyEYyvK','2024-08-28 14:12:25','2024-08-28 14:12:25'),(6,'Prof. Abe Parisian IV',1,'royal.crooks@example.net','+1 (432) 473-6004','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'nufTwMBmFE','2024-08-28 14:12:26','2024-08-28 14:12:26'),(7,'Giovanni Deckow',1,'domingo51@example.com','+1.872.575.1429','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'nlDN6XPWSZ','2024-08-28 14:12:26','2024-08-28 14:12:26'),(8,'Marjory Hoppe',0,'fzulauf@example.org','(575) 536-3264','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'vgHcSIWMeG','2024-08-28 14:12:26','2024-08-28 14:12:26'),(9,'Clementine Jaskolski',1,'kcruickshank@example.net','702.717.2451','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'sNkzkJlVAw','2024-08-28 14:12:26','2024-08-28 14:12:26'),(10,'Louisa Schamberger',0,'sblock@example.com','1-469-895-2288','2024-08-28 14:12:25','$2y$12$ma3UspqwtSgSY74dUoo2kO0yU0wa51mmC9oYwVKeMG1q2ldlzFGmK',NULL,NULL,NULL,'lb4o5Bg89B','2024-08-28 14:12:26','2024-08-28 14:12:26');
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

-- Dump completed on 2024-08-28 23:15:03
