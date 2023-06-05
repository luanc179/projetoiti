-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: cadastro
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `civis`
--

DROP TABLE IF EXISTS `civis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `civis` (
  `nome` varchar(50) DEFAULT NULL,
  `cracha` decimal(2,0) DEFAULT NULL,
  `tpdoc` varchar(50) DEFAULT NULL,
  `numdoc` varchar(50) DEFAULT NULL,
  `entrada` time DEFAULT NULL,
  `saida` time DEFAULT NULL,
  `veiculo` varchar(20) DEFAULT '-',
  `placa` varchar(10) DEFAULT '-',
  `post` varchar(50) DEFAULT NULL,
  `nomeguerra` varchar(50) DEFAULT NULL,
  `destino` varchar(50) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `civis`
--

LOCK TABLES `civis` WRITE;
/*!40000 ALTER TABLE `civis` DISABLE KEYS */;
INSERT INTO `civis` VALUES ('FLAVINHA SIMOES',4,'RG','09090909','14:48:00','00:00:00','Honda','HLT3513','3º Sgt','Simões','Sec Info',1),('arroz e feijao',4,'RG','12411135','18:07:00','18:09:00','Honda','PVS2054','Past/Grad','Simões','Set Fin',5),('Joao maria jose',9,'CPF','1234567890','08:54:00','00:00:00','Honda','PVS2054','Cb','Guerson','Enc Mat CCAp',6);
/*!40000 ALTER TABLE `civis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `miloom`
--

DROP TABLE IF EXISTS `miloom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `miloom` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_vis` varchar(10) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idtmil` int DEFAULT NULL,
  `om` varchar(50) DEFAULT NULL,
  `entrada` time DEFAULT NULL,
  `saida` time DEFAULT NULL,
  `vtr` varchar(30) DEFAULT NULL,
  `eb_placa` varchar(15) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL,
  `nomeguerra` varchar(50) DEFAULT NULL,
  `destino` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `miloom`
--

LOCK TABLES `miloom` WRITE;
/*!40000 ALTER TABLE `miloom` DISABLE KEYS */;
INSERT INTO `miloom` VALUES (1,'Cap','Luan',404040404,'blog','10:30:00','11:00:00','aTEGO','RTF3443','sGT','SIMOES','SEC INFO'),(2,'Cap','arroz e feijao',235,'23','17:29:00','00:00:00','Atego','PVS5050','Cel','Simões','Sgte CCAp'),(3,'Ten Cel','Luan',32421,'17º Batalhão Logístico Leve de Montanha ','17:32:00','00:00:00','Atego','1412412412','Ten Cel','Simões','Cmt CCAp');
/*!40000 ALTER TABLE `miloom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'cadastro'
--

--
-- Dumping routines for database 'cadastro'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-04 17:35:36
