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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `start_date` date NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `activity` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'https://avatars.githubusercontent.com/u/26484536','Oral35','Receptionist','Fletcher.Brown@mirandahotel.com','IXnY3OHsiuOBx80i69rT','2023-11-30','Regional Mobility Consultant','644.357.4339','active'),(2,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/694.jpg','Terence.Anderson','Manager','Amari_Stoltenberg@mirandahotel.com','qEY1YBfTitEEvJilarrf','2023-11-29','Human Operations Supervisor','(821) 723-1846','inactive'),(3,'https://avatars.githubusercontent.com/u/97246814','Jaunita_Kautzer','Receptionist','Ryan_Armstrong32@mirandahotel.com','cOaYG38KElZ7j_Im7nVc','2023-11-11','Customer Accountability Specialist','887.212.3303 x4392','inactive'),(4,'https://avatars.githubusercontent.com/u/53096953','Janet_Johns84','Receptionist','Clark.Osinski@mirandahotel.com','3PayjcuR2Ect_iAQ1kzx','2023-11-04','International Interactions Associate','(280) 345-3345 x2376','active'),(5,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/891.jpg','Cathy_Keebler','Receptionist','Peggie93@mirandahotel.com','E5d09Dp56IviRlTcViRp','2023-12-02','Investor Infrastructure Agent','1-658-384-3805','active'),(6,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/916.jpg','Bernice81','Manager','Herminia37@mirandahotel.com','m68kpamKg5oLiMwPXCNC','2023-11-11','Central Markets Consultant','606-938-4143','inactive'),(7,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/799.jpg','Elda73','Receptionist','Gerhard_Hayes@mirandahotel.com','qnFZVyEQMlm_6jgu1tt2','2023-11-02','District Data Coordinator','799-889-1798 x087','inactive'),(8,'https://avatars.githubusercontent.com/u/32885609','Colin_Abshire','Manager','Brionna_Altenwerth74@mirandahotel.com','ku6RuSpYcs_nknvbwFeP','2023-11-15','Investor Usability Facilitator','533.682.2544 x1341','active'),(9,'https://avatars.githubusercontent.com/u/54702273','Karli48','Room Service','Camden52@mirandahotel.com','vtKkoY2lWHvtOyMe8ZgH','2023-12-25','Chief Functionality Architect','593-771-7850 x83349','inactive'),(10,'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/952.jpg','Gillian75','Manager','Aurore_Abbott@mirandahotel.com','5yxSeEXkljmbM2ncpFPI','2023-11-26','Legacy Integration Assistant','699.689.9228 x737','active');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-01 11:18:05
