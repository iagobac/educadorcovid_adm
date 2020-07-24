-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mccrato_siaed
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `inscricao`
--

DROP TABLE IF EXISTS `inscricao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscricao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `file_link` varchar(255) NOT NULL,
  `semana_aula_id` int(11) NOT NULL,
  `serie_id` int(11) NOT NULL,
  `inscricao_tipo_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `arquivos_fk1_idx` (`serie_id`),
  KEY `inscricao_fk_idx` (`semana_aula_id`),
  KEY `inscricao_fk2_idx` (`inscricao_tipo_id`),
  CONSTRAINT `inscricao_fk` FOREIGN KEY (`semana_aula_id`) REFERENCES `semana_aula` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `inscricao_fk1` FOREIGN KEY (`serie_id`) REFERENCES `serie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `inscricao_fk2` FOREIGN KEY (`inscricao_tipo_id`) REFERENCES `inscricao_tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscricao`
--

LOCK TABLES `inscricao` WRITE;
/*!40000 ALTER TABLE `inscricao` DISABLE KEYS */;
/*!40000 ALTER TABLE `inscricao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscricao_tipo`
--

DROP TABLE IF EXISTS `inscricao_tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscricao_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscricao_tipo`
--

LOCK TABLES `inscricao_tipo` WRITE;
/*!40000 ALTER TABLE `inscricao_tipo` DISABLE KEYS */;
INSERT INTO `inscricao_tipo` VALUES (1,'ARQUIVO',1),(2,'VÍDEO',1),(3,'ÁUDIO',1);
/*!40000 ALTER TABLE `inscricao_tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semana_aula`
--

DROP TABLE IF EXISTS `semana_aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semana_aula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `status` int(11) DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semana_aula`
--

LOCK TABLES `semana_aula` WRITE;
/*!40000 ALTER TABLE `semana_aula` DISABLE KEYS */;
INSERT INTO `semana_aula` VALUES (1,'1ª SEMANA (02 A 08/04)',1,'2020-04-11 17:52:41',1),(2,'2ª SEMANA (13 A 17/04)',1,'2020-04-11 00:11:29',1);
/*!40000 ALTER TABLE `semana_aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serie`
--

DROP TABLE IF EXISTS `serie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serie`
--

LOCK TABLES `serie` WRITE;
/*!40000 ALTER TABLE `serie` DISABLE KEYS */;
INSERT INTO `serie` VALUES (1,'1º ANO',1,'2020-04-11 00:10:34'),(2,'2º ANO',1,'2020-04-11 00:10:34'),(3,'3º ANO',1,'2020-04-11 00:10:34'),(4,'4º ANO',1,'2020-04-11 00:10:34'),(5,'5º ANO',1,'2020-04-11 00:10:34'),(6,'6º ANO',1,'2020-04-11 00:10:34'),(7,'7º ANO',1,'2020-04-11 00:10:34'),(8,'8º ANO',1,'2020-04-11 00:10:34'),(9,'9º ANO',1,'2020-04-11 00:10:34'),(10,'EDUCAÇÃO ESPECIAL',1,'2020-04-11 00:09:45'),(11,'EJA I',1,'2020-04-11 00:09:45'),(12,'EJA II',1,'2020-04-11 00:09:45'),(13,'EJA III',1,'2020-04-11 00:09:45'),(14,'EJA IV',1,'2020-04-11 00:09:45'),(15,'INFANTIL - PRÉ-ESCOLA',1,'2020-04-11 00:09:45'),(16,'INFANTIL - CRECHE',1,'2020-04-11 00:09:45');
/*!40000 ALTER TABLE `serie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-11 21:25:40
