-- MySQL dump 10.13  Distrib 8.0.25, for macos11 (x86_64)
--
-- Host: localhost    Database: expatta1_clientlogin
-- ------------------------------------------------------
-- Server version	5.7.32

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
-- Table structure for table `bank_information`
--

DROP TABLE IF EXISTS `bank_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bank_information` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `account_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `account_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `routing_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `bank_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_information`
--

LOCK TABLES `bank_information` WRITE;
/*!40000 ALTER TABLE `bank_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `bank_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `street_address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apartment_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dependents`
--

DROP TABLE IF EXISTS `dependents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dependents` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssn` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `relationship` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naturalized` tinyint(1) DEFAULT NULL,
  `year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `dependents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dependents`
--

LOCK TABLES `dependents` WRITE;
/*!40000 ALTER TABLE `dependents` DISABLE KEYS */;
/*!40000 ALTER TABLE `dependents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filing_years`
--

DROP TABLE IF EXISTS `filing_years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filing_years` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `filing_years_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filing_years`
--

LOCK TABLES `filing_years` WRITE;
/*!40000 ALTER TABLE `filing_years` DISABLE KEYS */;
INSERT INTO `filing_years` VALUES (1,1,'2018'),(2,1,''),(3,1,'');
/*!40000 ALTER TABLE `filing_years` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filings`
--

DROP TABLE IF EXISTS `filings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filings` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `filing_years_id` int(50) NOT NULL,
  `amended_returns` tinyint(1) DEFAULT NULL,
  `returning_clients` tinyint(1) DEFAULT NULL,
  `ustax_return` tinyint(1) DEFAULT NULL,
  `taxreturn_extension` tinyint(1) DEFAULT NULL,
  `duedate_return` date DEFAULT NULL,
  `claimed_dependent` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filings`
--

LOCK TABLES `filings` WRITE;
/*!40000 ALTER TABLE `filings` DISABLE KEYS */;
/*!40000 ALTER TABLE `filings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_information`
--

DROP TABLE IF EXISTS `general_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `general_information` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `amended_returns` tinyint(1) DEFAULT NULL,
  `returning_clients` tinyint(1) DEFAULT NULL,
  `ustax_return` tinyint(1) DEFAULT NULL,
  `taxreturn_extension` tinyint(1) DEFAULT NULL,
  `duedate_return` datetime DEFAULT NULL,
  `claimed_dependent` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `general_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_information`
--

LOCK TABLES `general_information` WRITE;
/*!40000 ALTER TABLE `general_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_questions`
--

DROP TABLE IF EXISTS `general_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `general_questions` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `living_us` tinyint(1) NOT NULL,
  `ip_pin` tinyint(1) NOT NULL,
  `ippin_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `general_questions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_questions`
--

LOCK TABLES `general_questions` WRITE;
/*!40000 ALTER TABLE `general_questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itin_information`
--

DROP TABLE IF EXISTS `itin_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itin_information` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `itin` tinyint(1) DEFAULT NULL,
  `itin_number` int(50) DEFAULT NULL,
  `apply_itin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `itin_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itin_information`
--

LOCK TABLES `itin_information` WRITE;
/*!40000 ALTER TABLE `itin_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `itin_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_information`
--

DROP TABLE IF EXISTS `personal_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_information` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` datetime(6) NOT NULL,
  `us_citizen` tinyint(1) NOT NULL,
  `ssn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `personal_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_information`
--

LOCK TABLES `personal_information` WRITE;
/*!40000 ALTER TABLE `personal_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spouse_itins`
--

DROP TABLE IF EXISTS `spouse_itins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `spouse_itins` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `itin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itin_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apply_itin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `spouse_itins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spouse_itins`
--

LOCK TABLES `spouse_itins` WRITE;
/*!40000 ALTER TABLE `spouse_itins` DISABLE KEYS */;
/*!40000 ALTER TABLE `spouse_itins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spouse_personals`
--

DROP TABLE IF EXISTS `spouse_personals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `spouse_personals` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `occupation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `us_citizen` tinyint(1) DEFAULT NULL,
  `ssn` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spouse_personals`
--

LOCK TABLES `spouse_personals` WRITE;
/*!40000 ALTER TABLE `spouse_personals` DISABLE KEYS */;
/*!40000 ALTER TABLE `spouse_personals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spouse_sids`
--

DROP TABLE IF EXISTS `spouse_sids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `spouse_sids` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `id_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `issue_date` datetime DEFAULT NULL,
  `issue_state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nydigit_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `spouse_sids_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spouse_sids`
--

LOCK TABLES `spouse_sids` WRITE;
/*!40000 ALTER TABLE `spouse_sids` DISABLE KEYS */;
/*!40000 ALTER TABLE `spouse_sids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spouseus_dls`
--

DROP TABLE IF EXISTS `spouseus_dls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `spouseus_dls` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `license_number` int(50) NOT NULL,
  `expiration_date` datetime NOT NULL,
  `issue_date` datetime NOT NULL,
  `issue_state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nydigit_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `spouseus_dls_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spouseus_dls`
--

LOCK TABLES `spouseus_dls` WRITE;
/*!40000 ALTER TABLE `spouseus_dls` DISABLE KEYS */;
/*!40000 ALTER TABLE `spouseus_dls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxpayer_sids`
--

DROP TABLE IF EXISTS `taxpayer_sids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taxpayer_sids` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `id_number` int(50) NOT NULL,
  `expiration_date` datetime NOT NULL,
  `issue_date` datetime NOT NULL,
  `issue_state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nydigit_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `taxpayer_sids_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxpayer_sids`
--

LOCK TABLES `taxpayer_sids` WRITE;
/*!40000 ALTER TABLE `taxpayer_sids` DISABLE KEYS */;
/*!40000 ALTER TABLE `taxpayer_sids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxpayer_usdls`
--

DROP TABLE IF EXISTS `taxpayer_usdls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taxpayer_usdls` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `license_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `expiration_date` datetime NOT NULL,
  `issue_date` date NOT NULL,
  `issue_state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nydigit_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `taxpayer_usdls_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxpayer_usdls`
--

LOCK TABLES `taxpayer_usdls` WRITE;
/*!40000 ALTER TABLE `taxpayer_usdls` DISABLE KEYS */;
/*!40000 ALTER TABLE `taxpayer_usdls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'andy','kwesi','monthy','andy@gmail.com','$2y$10$tsG2LvvOqVIgHB.bICK7uuH/6Zet.AjM1sVkIb7X9HgbcFP5BT35.','2008-04-22 05:20:17','client'),(2,'test','kwesi','test','test@gmail.com','$2y$10$WvjlrYnEMz8VZxXla1RlJOjYvHuGFiLjK9mGy2.hO5dlzGY5Hpoae','2008-04-22 05:25:23','client'),(3,'test1','kwesi','test1','test1@gmail.com','$2y$10$MUjF0t42BZms5fE1fyb0JOxTDsdlZyzIK7TF.U0lVQmznv189E.RW','2008-04-22 05:27:29','client'),(4,'test2','kwesi','test2','test2@gmail.com','$2y$10$ZuA55TQ5klwPVJZkZykipemK4cgKKg3vBgdu4dTVOEGoaTPU1NM4a','2008-04-22 05:29:54','client'),(5,'Nana','Kwesi','Mensah','nana@gmail.com','$2y$10$KEwN2gAVRfw9DQxdc0/HAuSbSYjnmceDJ1XsYNPZik48ZOyG3qlfe','2012-04-22 02:30:51','client');
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

-- Dump completed on 2022-05-21  8:42:09
