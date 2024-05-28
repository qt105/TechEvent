-- MySQL dump 10.13  Distrib 8.0.35, for Win64 (x86_64)
--
-- Host: localhost    Database: TechEvent
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sport_id` bigint unsigned DEFAULT NULL,
  `date` date DEFAULT NULL,
  `location` tinytext,
  `image` tinytext,
  `description` text,
  `duration` tinyint DEFAULT NULL,
  `status` enum('not started','ongoing','finished') DEFAULT NULL,
  `name` tinytext,
  `mapImage` tinytext,
  UNIQUE KEY `id` (`id`),
  KEY `sport_id` (`sport_id`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,2,'2024-05-23','Paris','course10km.webp','Une course ├á pieds de 10km au coeur de Paris',3,'not started','course ├á pied de 10km dans paris','course10kmMap.png'),(2,1,'2024-05-24','Paris 16e','basketAveugle.webp','un ├®v├¿nement basique de basketball hahahaha lorem ipsum machin bref ',2,'not started','Basket contre des enfants aveugles','map.png'),(3,3,'2024-06-02','Paris 6e','seine.png','baignade sur 3kilom├¿tres dans paris en compagnie de la faune locale ├á base de rats',4,'not started','nage dans la seine','map.png'),(4,4,'2024-05-29','paris 12e','football.png','un match de foot aveugle dans un parc de paris',3,'not started','football aveugle','map.png'),(5,5,'2024-05-29','Paris','handball.png','match de handball amical en salle ',2,'not started','handball en salle','map.png'),(6,7,'2024-05-30','Paris 16e','horse.png','course ├á cheval dans les rues de parsi',4,'not started','course ├á cheval','map.png'),(7,6,'2024-06-14','Paris 8e','skate.png','comp├®tition amicale de skateboard dans un skatepark parisien',2,'not started','skateboard dans un skatepark','map.png'),(8,2,'2024-05-30','Paris','course10km.webp','course ├á pieds de 5km',2,'not started','course ├á pied le long de la seine','map.png');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sports`
--

DROP TABLE IF EXISTS `sports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sports`
--

LOCK TABLES `sports` WRITE;
/*!40000 ALTER TABLE `sports` DISABLE KEYS */;
INSERT INTO `sports` VALUES (1,'basketball'),(2,'running'),(3,'swimming'),(4,'football'),(5,'handball'),(6,'skateboard'),(7,'horse');
/*!40000 ALTER TABLE `sports` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-28 23:08:36
