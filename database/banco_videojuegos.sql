-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: loja_videogames
-- ------------------------------------------------------
-- Server version	8.0.45-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientes_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Loma Ebert','jaquan50@example.com','$2y$12$y70Fx2fLrDzDz1/CmWXNcudjO3rXp49JRzNfUbDxHfF4n0PH0xVW2','(706) 220-8273',NULL,'2026-03-27 20:31:16','2026-03-27 20:31:16'),(2,'Tate Gerlach','keebler.emilio@example.net','$2y$12$SHbhzqx6TtS2u7atRKwISeXnnAvSHFTe8i/G5JrUc6FxL9aTzriL6','212-331-3884',NULL,'2026-03-27 20:31:16','2026-03-27 20:31:16'),(3,'Hilario Goyette','wiley.hodkiewicz@example.org','$2y$12$slVhdzPcJHFEL3PohEMCX.B9lwdS2Rc28a978u6fHsSGclmZqIbK6','1-239-428-3124',NULL,'2026-03-27 20:31:16','2026-03-27 20:31:16'),(4,'Darion Runte','schimmel.jaquan@example.net','$2y$12$QgudXCMM0EWIEmDSzlwAeuWC1OnhazJ675ChMHXZ35NtnlNCl81Q2','+1-650-979-0959',NULL,'2026-03-27 20:31:16','2026-03-27 20:31:16'),(5,'Misty Rosenbaum','spencer.welch@example.org','$2y$12$VO/gcKu9pJlRGaWQs3opiOsQ3aS/iYQLAGHAmsuPKymHGwfOMB9R6','+1 (567) 419-4191',NULL,'2026-03-27 20:31:16','2026-03-27 20:31:16'),(6,'Prof. Arden Gottlieb DDS','polson@example.com','$2y$12$/FUWE4LID4KQCF/WFodZC.iwgvX2qVgFtcWUJRzyFn8vmhHezq0yS','828.619.9274',NULL,'2026-03-27 20:31:16','2026-03-27 20:31:16'),(7,'Mr. Micheal Gottlieb PhD','rdouglas@example.org','$2y$12$vdOzf2L9vTEuitVX9CrtJe3zZ7jGQx7czYrl4Fll7.N3L.Zy3NgXK','585-934-5826',NULL,'2026-03-27 20:31:16','2026-03-27 20:31:16'),(8,'Dr. Lew Kassulke V','thora.goodwin@example.net','$2y$12$/V14bpG/evPkfTD1WUjR6.kP2vjm58EtdcKu0hKu88N2pGSi1cOn6','+1-409-903-1027',NULL,'2026-03-27 20:31:16','2026-03-27 20:31:16'),(9,'Cathrine Walsh','imcclure@example.net','$2y$12$6KmAolbReJyT3lRJUemYxOV9Bkt7l1c9LpKj0O5.Tv5.n93s5Ycyq','+1-256-367-7571',NULL,'2026-03-27 20:31:17','2026-03-27 20:31:17'),(10,'Mary Kris','tkohler@example.com','$2y$12$BHExLJKwgmYij0YJNToMj.m135yAHbEg123z06drtNqoT.BKMhGYu','678-916-9971',NULL,'2026-03-27 20:31:17','2026-03-27 20:31:17');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desenvolvedoras`
--

DROP TABLE IF EXISTS `desenvolvedoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `desenvolvedoras` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano_fundacao` int NOT NULL,
  `site_oficial` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_funcionarios` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desenvolvedoras`
--

LOCK TABLES `desenvolvedoras` WRITE;
/*!40000 ALTER TABLE `desenvolvedoras` DISABLE KEYS */;
INSERT INTO `desenvolvedoras` VALUES (2,'Rockstar','Karol',2009,'http://ortiz.org/dignissimos-qui-nam-non-molestiae-nulla-et-corrupti-ab',3509,'2026-03-27 20:31:14','2026-03-27 21:45:09'),(3,'Davis-Hane','Tonga',1999,'https://www.gottlieb.com/quam-dolorem-itaque-qui-aliquid-aut-est',4104,'2026-03-27 20:31:14','2026-03-27 20:31:14'),(4,'Zieme, O\'Reilly and Leuschke','Guyana',2017,'http://www.quigley.com/',4478,'2026-03-27 20:31:14','2026-03-27 20:31:14'),(5,'Hirthe, Willms and Kunze','Guinea',2020,'http://batz.com/qui-error-sit-enim-aut-rem.html',2707,'2026-03-27 20:31:14','2026-03-27 20:31:14');
/*!40000 ALTER TABLE `desenvolvedoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
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
-- Table structure for table `jogos`
--

DROP TABLE IF EXISTS `jogos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jogos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `data_lancamento` date NOT NULL,
  `plataforma_id` bigint unsigned NOT NULL,
  `desenvolvedora_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jogos_plataforma_id_foreign` (`plataforma_id`),
  KEY `jogos_desenvolvedora_id_foreign` (`desenvolvedora_id`),
  CONSTRAINT `jogos_desenvolvedora_id_foreign` FOREIGN KEY (`desenvolvedora_id`) REFERENCES `desenvolvedoras` (`id`) ON DELETE CASCADE,
  CONSTRAINT `jogos_plataforma_id_foreign` FOREIGN KEY (`plataforma_id`) REFERENCES `plataformas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogos`
--

LOCK TABLES `jogos` WRITE;
/*!40000 ALTER TABLE `jogos` DISABLE KEYS */;
INSERT INTO `jogos` VALUES (1,'Rerum qui quo rerum.',163.32,'2003-03-28',4,4,'2026-03-27 20:31:17','2026-03-27 20:31:17'),(3,'Repellendus blanditiis sed.',323.99,'2011-02-20',3,3,'2026-03-27 20:31:17','2026-03-27 20:31:17'),(7,'Officia id autem.',177.47,'1988-07-03',2,2,'2026-03-27 20:31:17','2026-03-27 20:31:17'),(8,'Maxime quaerat eligendi qui.',192.94,'2004-04-21',4,2,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(11,'Numquam vel quis iusto nemo.',286.51,'1971-04-21',3,3,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(12,'Repellat mollitia ipsum nihil.',107.10,'1982-05-24',3,5,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(13,'Tempora sed eum.',260.95,'1975-05-30',2,3,'2026-03-27 20:31:18','2026-03-27 20:31:18');
/*!40000 ALTER TABLE `jogos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_03_11_183405_create_plataformas_table',1),(5,'2026_03_11_183409_create_desenvolvedoras_table',1),(6,'2026_03_11_183412_create_jogos_table',1),(7,'2026_03_11_183415_create_clientes_table',1),(8,'2026_03_11_183418_create_vendedors_table',1),(9,'2026_03_11_183422_create_vendas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `plataformas`
--

DROP TABLE IF EXISTS `plataformas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plataformas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fabricante` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano_lancamento` int NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco_lancamento` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plataformas`
--

LOCK TABLES `plataformas` WRITE;
/*!40000 ALTER TABLE `plataformas` DISABLE KEYS */;
INSERT INTO `plataformas` VALUES (2,'natus','Shields-Medhurst',2010,'Console',486.96,'2026-03-27 20:31:14','2026-03-27 20:31:14'),(3,'omnis','Schaefer, Lakin and Lindgren',2021,'Mobile',501.39,'2026-03-27 20:31:14','2026-03-27 20:31:14'),(4,'non','Gaylord-Weber',2002,'PC',264.09,'2026-03-27 20:31:14','2026-03-27 20:31:14'),(7,'hgjhg','aata',1988,'2',50.00,'2026-03-27 22:40:47','2026-03-27 22:40:47');
/*!40000 ALTER TABLE `plataformas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
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
INSERT INTO `sessions` VALUES ('adahI5vdUtNQpbPDtDabXUR8EuDyHVjN6NTpgqy2',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSEc0VzZaTHBrdzYzTzVYV3RNS29Gc2c4OEk3cWRsZ0JENnprYlBYZCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1775070172),('XN3zKAV4sBQkBg8vu0oqHN7RGXeI1IrSWsNCiGrD',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:147.0) Gecko/20100101 Firefox/147.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjRBZ3Zid1lJS0NsVk4zMFZLSkRBVFpwVWtzbnBzY1FRRWFJaEhFUiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMy92ZW5kYSI7czo1OiJyb3V0ZSI7czoxMToidmVuZGEuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1774640755);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test User','test@example.com','2026-03-27 20:31:18','$2y$12$5AihaNRQAdj2khdygp380uIe0dTdKBqeR8dD0xZX46tg6bOynq6lq','5k0lfMvH05','2026-03-27 20:31:18','2026-03-27 20:31:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendas`
--

DROP TABLE IF EXISTS `vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` bigint unsigned NOT NULL,
  `vendedor_id` bigint unsigned NOT NULL,
  `jogo_id` bigint unsigned NOT NULL,
  `data_venda` datetime NOT NULL,
  `valor_total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendas_cliente_id_foreign` (`cliente_id`),
  KEY `vendas_vendedor_id_foreign` (`vendedor_id`),
  KEY `vendas_jogo_id_foreign` (`jogo_id`),
  CONSTRAINT `vendas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `vendas_jogo_id_foreign` FOREIGN KEY (`jogo_id`) REFERENCES `jogos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `vendas_vendedor_id_foreign` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas`
--

LOCK TABLES `vendas` WRITE;
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` VALUES (2,1,1,13,'2026-02-24 22:49:48',320.30,'2026-03-27 20:31:18','2026-03-27 20:39:45'),(4,10,2,8,'2026-03-13 17:17:55',237.51,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(6,2,2,8,'2026-01-27 21:19:40',458.09,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(9,3,1,8,'2026-02-08 19:19:09',605.33,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(12,3,3,12,'2026-03-11 00:34:30',291.05,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(13,9,2,11,'2026-02-24 11:48:36',76.92,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(14,9,3,1,'2026-01-14 15:49:15',877.17,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(16,2,1,7,'2026-01-16 19:58:21',864.12,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(18,9,2,8,'2026-01-09 00:21:52',176.86,'2026-03-27 20:31:18','2026-03-27 20:31:18'),(19,10,3,1,'2026-01-06 04:41:09',819.72,'2026-03-27 20:31:18','2026-03-27 20:31:18');
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendedores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vendedores_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedores`
--

LOCK TABLES `vendedores` WRITE;
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` VALUES (1,'Derrick Emard','johnson57@example.net','$2y$12$2ugujLgwOn2xnSSKeDU/Cu9iadWZpXkKumwQyQA4CrLjLuf6rXzyK','740.217.0476',NULL,'2026-03-27 20:31:17','2026-03-27 20:31:17'),(2,'Mrs. Electa Luettgen IV','konopelski.damion@example.org','$2y$12$7jsd4odB6wnV7vl4SF6Uc.xTou2h36SRrgBTZEyEMnMUcFZV8VY8.','+1.262.845.8498',NULL,'2026-03-27 20:31:17','2026-03-27 20:31:17'),(3,'Ms. Felicita Rempel II','jedidiah.brekke@example.com','$2y$12$UNzZ6kAMMa7ucRQN7N83heV4oLAoBOKlQu1apNzPkk84Hinh2rw7C','559.700.1662',NULL,'2026-03-27 20:31:17','2026-03-27 20:31:17');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-04-01 22:34:40
