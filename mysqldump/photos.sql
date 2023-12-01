-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: mirandadb
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

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
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo_url` varchar(255) NOT NULL,
  `room_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',1),(2,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',2),(3,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',3),(4,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',4),(5,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',5),(6,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',6),(7,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',7),(8,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',8),(9,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',9),(10,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',10),(11,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',11),(12,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',12),(13,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',13),(14,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',14),(15,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',15),(16,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',16),(17,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',17),(18,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',18),(19,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',19),(20,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',20),(21,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',21),(22,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',22),(23,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',23),(24,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',24),(25,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',25),(26,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',26),(27,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',27),(28,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',28),(29,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',29),(30,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',30),(31,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',31),(32,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',32),(33,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',33),(34,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',34),(35,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',35),(36,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',36),(37,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',37),(38,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',38),(39,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',39),(40,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',40),(41,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',41),(42,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',42),(43,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',43),(44,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',44),(45,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',45),(46,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',46),(47,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',47),(48,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',48),(49,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',49),(50,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',50),(51,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',51),(52,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',52),(53,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',53),(54,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',54),(55,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',55),(56,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',56),(57,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',57),(58,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',58),(59,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',59),(60,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',60),(61,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',61),(62,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',62),(63,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',63),(64,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',64),(65,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',65),(66,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',66),(67,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',67),(68,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',68),(69,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',69),(70,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',70),(71,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',71),(72,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room2.jpeg',72),(73,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',73),(74,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room1.jpeg',74),(75,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',75),(76,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room4.jpeg',76),(77,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',77),(78,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room5.jpeg',78),(79,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',79),(80,'https://dashboardgeneralassets.s3.eu-west-1.amazonaws.com/Fotos+Dashboard/room3.jpeg',80);
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-01 11:17:47
