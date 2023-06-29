CREATE DATABASE  IF NOT EXISTS `projeto_pws` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projeto_pws`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projeto_pws
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designacaosocial` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `nif` varchar(45) DEFAULT NULL,
  `morada` varchar(45) DEFAULT NULL,
  `codigopostal` varchar(45) DEFAULT NULL,
  `localidade` varchar(45) DEFAULT NULL,
  `capitalsocial` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'desinaca social','empresa@gmail.com','999999999','123','rua da empresa','123-99','local empresa','999');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folhaobras`
--

DROP TABLE IF EXISTS `folhaobras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folhaobras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `valortotal` float NOT NULL,
  `estado` varchar(45) NOT NULL,
  `client_id` int NOT NULL,
  `user_id` int NOT NULL,
  `ivatotal` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_folhaobras_users1_idx` (`client_id`),
  KEY `fk_folhaobras_users2_idx` (`user_id`),
  CONSTRAINT `fk_folhaobras_users1` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_folhaobras_users2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folhaobras`
--

LOCK TABLES `folhaobras` WRITE;
/*!40000 ALTER TABLE `folhaobras` DISABLE KEYS */;
INSERT INTO `folhaobras` VALUES (7,'2023-06-28',0,'Em lançamento',28,27,0),(13,'2023-06-28',0,'Em lançamento',28,27,0),(14,'2023-06-28',0,'Em lançamento',28,27,0),(15,'2023-06-28',0,'Em lançamento',28,27,0),(16,'2023-06-28',0,'Em lançamento',28,27,0),(17,'2023-06-28',0,'Em lançamento',28,27,0),(18,'2023-06-28',0,'Em lançamento',28,27,0),(19,'2023-06-28',0,'Em lançamento',28,27,0),(20,'2023-06-28',0,'Em lançamento',28,27,0),(21,'2023-06-28',0,'Em lançamento',28,27,0),(22,'2023-06-28',0,'Em lançamento',28,27,0),(23,'2023-06-28',0,'Em lançamento',28,27,0),(24,'2023-06-28',0,'Em lançamento',28,27,0),(25,'2023-06-28',0,'Em lançamento',28,27,0);
/*!40000 ALTER TABLE `folhaobras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ivas`
--

DROP TABLE IF EXISTS `ivas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ivas` (
  `id` int NOT NULL,
  `percentagem` float NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `vigor` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ivas`
--

LOCK TABLES `ivas` WRITE;
/*!40000 ALTER TABLE `ivas` DISABLE KEYS */;
INSERT INTO `ivas` VALUES (0,50,'taxa extraordinaria',0),(1,23,'taxa normal',1),(2,13,'taxa intremedia',1),(3,6,'taxa reduzida',1);
/*!40000 ALTER TABLE `ivas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linhaobras`
--

DROP TABLE IF EXISTS `linhaobras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `linhaobras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantidade` int NOT NULL,
  `valor` float NOT NULL,
  `valoriva` float NOT NULL,
  `folhaobras_id` int NOT NULL,
  `servicos_id` int NOT NULL,
  `subtotal` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_linhaobras_folhaobras1_idx` (`folhaobras_id`),
  KEY `fk_linhaobras_servicos1_idx` (`servicos_id`),
  CONSTRAINT `fk_linhaobras_folhaobras1` FOREIGN KEY (`folhaobras_id`) REFERENCES `folhaobras` (`id`),
  CONSTRAINT `fk_linhaobras_servicos1` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linhaobras`
--

LOCK TABLES `linhaobras` WRITE;
/*!40000 ALTER TABLE `linhaobras` DISABLE KEYS */;
INSERT INTO `linhaobras` VALUES (1,1,12,1.44,25,0,13.44);
/*!40000 ALTER TABLE `linhaobras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos` (
  `id` int NOT NULL,
  `referencia` int NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `precohora` float NOT NULL,
  `ivas_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicos_ivas1_idx` (`ivas_id`),
  CONSTRAINT `fk_servicos_ivas1` FOREIGN KEY (`ivas_id`) REFERENCES `ivas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (0,0,'teste',12,0),(1,1,'Pintar',5,1),(2,2,'Demolir',6,2),(3,3,'Construir',7,3),(4,4,'Transporte',8,2),(5,5,'Surpresa',99,1);
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nif` int NOT NULL,
  `role` varchar(45) NOT NULL,
  `telefone` int NOT NULL,
  `morada` varchar(45) NOT NULL,
  `codigopostal` varchar(45) NOT NULL,
  `localidade` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nif_UNIQUE` (`nif`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (27,'admin','admin','admin@gmail.com',1,'admin',1,'rua1','123-11','loacal1'),(28,'cliente','cliente','cliente@gmail.com',2,'cliente',2,'rua2','123-12','loacal2'),(29,'funcionario','funcionario','funcionario@gmail.com',3,'funcionario',3,'rua3','123-13','loacal3'),(30,'funcionario2','funcionario2','funcionario2@gmail.com',4,'funcionario',4,'rua4','123-14','loacal4'),(31,'cliente2','cliente2','cliente3@gmail.com',5,'cliente',5,'rua5','123-15','loacal5'),(32,'cliente3','cliente3','cliente3@gmail.com',6,'cliente',6,'rua6','123-16','loacal6');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'projeto_pws'
--

--
-- Dumping routines for database 'projeto_pws'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-29  8:29:42
