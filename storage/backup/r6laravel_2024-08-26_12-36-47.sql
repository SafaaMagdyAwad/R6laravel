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
INSERT INTO `cache` VALUES ('engsafaamagdy1024@gmail.com|127.0.0.1','i:1;',1724321772),('engsafaamagdy1024@gmail.com|127.0.0.1:timer','i:1724321771;',1724321772),('humberto.zboncak@example.org|127.0.0.1','i:2;',1724003368),('humberto.zboncak@example.org|127.0.0.1:timer','i:1724003368;',1724003368);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'marcedes','4a93c7661c9267ceb444956a3aca3219.png','Aliquam repellendus dolor a quae. Dolor eum beatae velit harum incidunt. Minus aperiam doloribus et ratione et. Ducimus dignissimos amet aperiam veritatis saepe unde architecto aspernatur.',777,0,5,NULL,'2024-08-18 14:20:57','2024-08-18 14:20:57'),(2,'pmw','0fb339dbf71417303423084844594457.png','Doloremque atque amet in qui et alias tempore. Et recusandae nam sed nihil et quas. Molestiae rerum ut debitis adipisci.',305,0,4,NULL,'2024-08-18 14:20:57','2024-08-18 14:20:57'),(3,'pmw','116a67c5bc9b0929e70d6a7a5d099dad.png','Qui eius rerum consectetur a. Est a adipisci ratione vel et deleniti. Dolorem ea et sint quibusdam qui qui. Ratione vitae et placeat voluptatem.',883,0,4,NULL,'2024-08-18 14:20:57','2024-08-18 14:20:57'),(4,'pmw','a10f55b6016139401297639a4aa1f107.png','Exercitationem est sint voluptas distinctio aut. Magnam ad nesciunt veritatis vel porro mollitia qui. Dolorum nesciunt quibusdam rerum qui. Sed nihil aut nihil explicabo quia at atque.',690,1,2,NULL,'2024-08-18 14:20:58','2024-08-18 14:20:58'),(5,'pmw','49ea6d11754fd065958aede31947d8db.png','Veritatis nesciunt nisi ratione officia sequi aut incidunt exercitationem. In incidunt exercitationem architecto eos temporibus eum et soluta. Voluptas velit ea esse rerum soluta.',604,0,4,NULL,'2024-08-18 14:20:58','2024-08-18 14:20:58'),(6,'marcedes','45f359c25b02bf7c1102d023f1d15e2e.png','Qui aut est velit aut dolor libero eum. Alias tempora est commodi culpa aut est in. Fugiat dolorum eligendi esse autem dolores facilis. Nihil et veritatis pariatur ut quisquam et ullam nisi.',316,0,5,NULL,'2024-08-18 14:20:58','2024-08-18 14:20:58'),(7,'marcedes','c9c60bdfc602fdb5d1626de85d543af9.png','Molestias voluptates doloremque harum ut rerum. Nihil quaerat recusandae quo in. Autem aperiam consectetur eius quisquam optio.',502,0,4,NULL,'2024-08-18 14:20:58','2024-08-18 14:20:58'),(8,'marcedes','38dc770a44ab153e41e7dff29c176b4f.png','Possimus earum rerum inventore voluptates qui. At eos nam ea adipisci suscipit ullam omnis. Aut est voluptas explicabo odit.',496,1,2,NULL,'2024-08-18 14:20:58','2024-08-18 14:20:58'),(9,'marcedes','426f375a68b3db55f686086c1c8b6474.png','Sapiente id esse alias ut. Veritatis ut ab nulla dolore non rem earum. Qui aperiam quidem est quaerat.',862,1,3,NULL,'2024-08-18 14:20:59','2024-08-18 14:20:59'),(10,'pmw','b860745d0dffc871bdcadbde9e94efab.png','Sit atque cumque saepe aut qui maiores et. Exercitationem rem cupiditate explicabo velit.',530,0,2,NULL,'2024-08-18 14:20:59','2024-08-18 14:20:59'),(11,'مرسيدس','1724327364.jpg','فيبلؤرؤرؤشسلشلارساش',44,1,3,NULL,'2024-08-22 08:49:24','2024-08-22 08:49:24');
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
INSERT INTO `categories` VALUES (1,'fugit','2024-08-18 14:20:45','2024-08-18 14:20:45'),(2,'quia','2024-08-18 14:20:45','2024-08-18 14:20:45'),(3,'maxime','2024-08-18 14:20:45','2024-08-18 14:20:45'),(4,'sunt','2024-08-18 14:20:45','2024-08-18 14:20:45'),(5,'et','2024-08-18 14:20:45','2024-08-18 14:20:45');
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
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (142,'2024_07_11_104321_create_categoris_table',1),(189,'0001_01_01_000000_create_users_table',2),(190,'0001_01_01_000001_create_cache_table',2),(191,'0001_01_01_000002_create_jobs_table',2),(192,'2024_07_17_191306_create_classes_table',2),(193,'2024_07_31_190904_add_to_classes_table',2),(194,'2024_08_04_190517_create_products_table',2),(195,'2024_08_11_150305_create_phones_table',2),(196,'2024_08_11_150407_create_students_table',2),(197,'2024_08_11_181355_create_categories_table',2),(198,'2024_08_17_162233_create_cars_table',2);
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
INSERT INTO `sessions` VALUES ('3nTpOldjYluEJjptP9s7w4aBLZBA8BSNUroTPiZf',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkRMaWh3cEJTc0xZTjNDaUJhVTFoa2lOR1kzNEU3cWttU3N3dDFHSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1724666838),('x0eJbh8JzYPBUsaOhgzLd9PXCCOo4KabO001XPt6',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaWtVejhGSXVJYzlPS3VxSnFqNzdKUkNoeVBCeDQ1eVVFQzN4TVFmdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbWFpbC92ZXJpZnkiO319',1724231720),('zpvRxWHnDEyRfkIGSJe8TMqg1xVAMoBjK77iL6ve',2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiWFlGM0tmM28zZzdOb2RibEhKVGFXMlV1WVNnaW9ZUWU1WDNWUzRDQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZW4vY2FyL2NyZWF0ZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzI0MzIxODc4O31zOjY6ImxvY2FsZSI7czoyOiJlbiI7fQ==',1724328372);
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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Miss Imelda Kutch',1,'mateo.deckow@example.com','617-374-8691',NULL,'$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','uEm1Vbz4VdK8OUsHV0ts9uDF9B3poWH7V5TduQBn8g0UCM5OjkLfdf303coF','2024-08-18 14:20:44','2024-08-18 14:20:44'),(2,'Sofia Jakubowski',1,'salvatore99@example.com','747-368-5901','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','4XHgMRYg0f','2024-08-18 14:20:44','2024-08-18 14:20:44'),(3,'Dayne Fisher',1,'patsy72@example.org','+14179267556','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','07UpLGbNSh','2024-08-18 14:20:44','2024-08-18 14:20:44'),(4,'Amira Kilback',0,'ularkin@example.org','+1-386-765-5942','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','GmyOkiYT4T','2024-08-18 14:20:44','2024-08-18 14:20:44'),(5,'Taylor Osinski',0,'senger.charity@example.org','(856) 210-0984','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','J6vuvOo8YZ','2024-08-18 14:20:45','2024-08-18 14:20:45'),(6,'Mattie Mraz',1,'kutch.caesar@example.com','1-814-382-7286','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','GUTMAR9ACt','2024-08-18 14:20:45','2024-08-18 14:20:45'),(7,'Prof. Rhianna Hyatt MD',0,'humberto.zboncak@example.org','(678) 566-9066','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','NfuPX4rzolgFkfJ1rYjqC27zGwZ10TfBmXxmkSIfs53vr5ixJbGzOFl1gMDw','2024-08-18 14:20:45','2024-08-18 14:20:45'),(8,'Alfred Schneider',1,'fcremin@example.org','+1-540-620-0478','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','ZLEXqtlUnMb43znVrWnqck0T5WGy83eWdzJj7eqrFoT5c7xu8eqqdTOME6uk','2024-08-18 14:20:45','2024-08-18 14:20:45'),(9,'Kiara Nolan',1,'simone61@example.net','530-716-8176','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','IL6P6ahM6z','2024-08-18 14:20:45','2024-08-18 14:20:45'),(10,'Greta Goldner',1,'vance.mitchell@example.net','252.580.0501','2024-08-18 14:20:44','$2y$12$5xqGoT6WBihV4xlzd/xDb.OlEczPtcYvXBTpAZUGaqPGmcJ3hFOwC','ppl0LicWaCK3Bp0wAa9oabPQU4dJj33k9ZNCrbZcDSgLTMrQtjBw383QSR5A','2024-08-18 14:20:45','2024-08-18 14:20:45'),(11,'owner',1,'owner@site.com','01067605447','2024-08-18 14:20:44','$2y$12$92AK.wakvVTAkfPktw2Nb.eDZdSwYt.OqYUQgX6PQO1cCe/22k7ea',NULL,'2024-08-19 06:51:29','2024-08-19 06:51:29');
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

-- Dump completed on 2024-08-26 15:36:52
