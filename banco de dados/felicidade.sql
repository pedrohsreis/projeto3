CREATE DATABASE  IF NOT EXISTS `felicidade` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `felicidade`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: felicidade
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(45) DEFAULT NULL,
  `assunto` varchar(45) DEFAULT NULL,
  `email` varchar(68) DEFAULT NULL,
  `mensagem` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (1,'Steven Tyler','Musica','steventyler@aerosmith.com','Aerosmith eh foda dms'),(3,'Joe Perry','musica2.0','aerosmith@hotmail.com','Aerosmith eh foda dmss!!'),(6,'Chad ','uahsiduah','Nickelback@gmail.com','NICKELBACKKKKK'),(7,'Gabriel','CODE','gabrieliorio7@gmail.com','Testando funÃ§oes');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imovel`
--

DROP TABLE IF EXISTS `imovel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imovel` (
  `idimovel` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) DEFAULT NULL,
  `descricao` varchar(400) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `tipo_idtipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idimovel`),
  KEY `tipo_idtipo` (`tipo_idtipo`),
  CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`tipo_idtipo`) REFERENCES `tipo` (`idtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imovel`
--

LOCK TABLES `imovel` WRITE;
/*!40000 ALTER TABLE `imovel` DISABLE KEYS */;
INSERT INTO `imovel` VALUES (1,'casa1','descricao da casa',NULL,'bdcasa1.jpg',NULL),(2,'casa2','descricao da casa',NULL,'bdcasa2.jpg',NULL),(3,'casa3','descricao da casa',NULL,'bdcasa3.jpg',NULL),(4,'casa4','descricao da casa',NULL,'bdcasa4.jpg',NULL),(5,'casa5','descricao da casa',NULL,'bdcasa5.jpg',NULL),(6,'casa6','descricao da casa',NULL,'bdcasa6.jpg',NULL),(7,'CASA DE CAMPO','Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos.',NULL,'bdcasa7.jpg',NULL),(8,'CASA DE PRAIA','Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos.',NULL,'bdcasa8.jpg',NULL),(9,'CASA COLONIAL','Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos',NULL,'bdcasa9.jpg',NULL);
/*!40000 ALTER TABLE `imovel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `idtipo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `tipouser` int(11) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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

-- Dump completed on 2017-11-17 14:47:03
