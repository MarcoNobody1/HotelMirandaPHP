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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `archived` binary(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'2020-10-07 19:24:01','Shawn Vandervort','Andrew.Kris9@anymail.com','1-791-812-5693','Arbustum vero thymum.','Doloremque absorbeo pectus amplexus delectatio virga vestrum. Coepi decumbo conventus approbo aperte.',_binary '1'),(2,'2020-11-15 18:16:32','Kendra Reichert','Lisette.Weber@anymail.com','705-911-1022 x243','Laboriosam speciosus.','Conor capitulus adsuesco basium aqua officia desipio. Vinum calco caute compono apostolus sumo ago vito. Utrimque taedium stabilis tantillus ustulo ipsam.',_binary '0'),(3,'2020-06-03 06:44:54','Arthur Pfannerstill','Sienna_Gleason21@anymail.com','268.295.9319 x167','Cognomen cultura.','Averto defetiscor defero somnus patria sufficio. Alioqui censura chirographum eveniet vito adhaero aduro.',_binary '0'),(4,'2020-09-03 18:37:19','Carrie Tillman','Solon.Mills64@anymail.com','1-772-201-2004 x226','Aer aveho carpo demitto.','Strenuus cura canis amet amplitudo quae complectus curto terga. Confero adficio canto. Corrigo civis consuasor ver venustas alii vir vomer ratione repellendus.',_binary '0'),(5,'2020-05-29 16:37:20','Nicole Harris','Norbert79@anymail.com','958-303-2276','Inventore acer audeo cattus.','Quo substantia curto.',_binary '1'),(6,'2020-03-28 02:50:22','Dominick Batz I','Shaniya_Fadel41@anymail.com','650.616.0885 x62957','Desidero.','Vehemens cervus vesco carbo ambitus viduo surculus commodi vilis. Repudiandae ut defungo aedificium audio tonsor bene. Teres summopere debilito provident tondeo aggredior.',_binary '0'),(7,'2020-12-29 11:25:27','Marilyn Nienow','London13@anymail.com','(295) 272-2359 x92450','Provident.','Velut venio carbo campana amplus taedium.',_binary '1'),(8,'2020-07-17 00:26:51','Rufus Hegmann DVM','Anne_Walker73@anymail.com','1-844-656-0969','Viduo terebro culpo aptus.','Crastinus corrumpo coadunatio adipiscor maiores possimus.',_binary '1'),(9,'2020-11-13 17:28:50','Harvey Halvorson','Julianne.Ledner@anymail.com','710.829.2740','Adsidue aptus.','Curvo adsidue aestivus summa suadeo depono. Cuius vester vulariter eos xiphias tamen temporibus tollo administratio. Cuppedia anser argumentum claustrum amicitia alienus.',_binary '0'),(10,'2020-08-29 17:40:54','Marguerite Cruickshank','Ramona.Nader@anymail.com','(656) 233-2497 x0959','Causa quia.','Vel adhaero aer xiphias vetus compello cuius aqua. Ventito canis ex ustilo ocer thymbra.',_binary '0'),(11,'2023-12-01 08:51:18','Marco Cámara','marcocamaradiaz@gmail.com','+34 671 251 377 ','Okay','okay',_binary '\0'),(12,'2023-12-01 08:51:57','admin','marcocamaradiaz@gmail.com','+34 671 251 377 ','asda','Yes!',_binary '\0'),(13,'2023-12-01 08:53:09','admin','marcocamaradiaz@gmail.com','+34 671 251 377 ','asda','Yes!',_binary '\0'),(14,'2023-12-01 08:53:16','admin','marcocamaradiaz@gmail.com','+34 671 251 377 ','asda','Yes!',_binary '\0'),(15,'2023-12-01 08:55:05','minimarcorchea@gmail.com','marckfackc@gmail.com','+34 671 251 377 ','Okay','asdaa',_binary '\0'),(16,'2023-12-01 08:56:00','admin','ANDREEADAMIAN1@GMAIL.COM','+34 671 251 377 ','Okay','asda',_binary '\0'),(17,'2023-12-01 08:58:19','Marco Cámara','marcocamaradiaz@gmail.com','+34 671 251 377 ','Okay','Yes',_binary '\0'),(18,'2023-12-01 09:02:23','Marco Cámara','marcocamaradiaz@gmail.com','+34 671 251 377 ','Okay','asda',_binary '\0'),(19,'2023-12-01 09:08:50','Marco Cámara','sini@gmail.com','+34 671 251 377 ','Okay','asda',_binary '\0'),(20,'2023-12-01 09:09:37','admin','marcocamaradiaz@gmail.com','+34 671 251 377 ','Okay','asda',_binary '\0');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-01 11:17:42
