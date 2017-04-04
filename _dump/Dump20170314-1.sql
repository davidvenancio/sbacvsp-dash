-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: sbacvsp-dash
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `tb_pessoas`
--

DROP TABLE IF EXISTS `tb_pessoas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pessoas` (
  `pessoa_id` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_nome` varchar(255) DEFAULT NULL,
  `pessoa_crm` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pessoa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoas`
--

LOCK TABLES `tb_pessoas` WRITE;
/*!40000 ALTER TABLE `tb_pessoas` DISABLE KEYS */;
INSERT INTO `tb_pessoas` VALUES (1,'Juliana teste','123456'),(2,'JoÃ£o da Silva','151515'),(3,'Maria Candida','658745');
/*!40000 ALTER TABLE `tb_pessoas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_questoes`
--

DROP TABLE IF EXISTS `tb_questoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_questoes` (
  `questao_id` int(11) NOT NULL AUTO_INCREMENT,
  `questao` text,
  PRIMARY KEY (`questao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_questoes`
--

LOCK TABLES `tb_questoes` WRITE;
/*!40000 ALTER TABLE `tb_questoes` DISABLE KEYS */;
INSERT INTO `tb_questoes` VALUES (1,'NOME'),(2,'CRM'),(3,'DATA DE NASCIMENTO'),(4,'Sexo'),(5,'CIDADE QUE TRABALHA'),(6,'REALIZA PROCEDIMENTO ENDOVASCULAR'),(7,'HÁ QUANTO TEMPO'),(8,'QUANTOS POR MÊS'),(9,'COMENTÁRIO / OBSERVAÇÃO 1'),(10,'ANGIOPLASTIA E STENT PERIFÉRICO'),(11,'ANGIOPLASTIA E STENT CAROTÍDEO'),(12,'EMBOLIZAÇÃO DE MAV'),(13,'ANEURISMA TORÁCICO'),(14,'DISSECÇÃO DE AORTA'),(15,'ANEURISMA TORACO-ABOMINAL'),(16,'Comentario / Observação 2'),(17,'NÚMERO DE HOSPITAIS QUE FAZ PROCEDIMENTOS ENDOVASCULARES'),(18,'HOSPITAL 1'),(19,'HOSP 1 ANO DE FABRICAÇÃO'),(20,'HOSPITAL 1'),(21,'HOSPITAL 1 SISTEMA DE PROTEÇÃO DISPONÍVEL'),(22,'HOSPITAL 2'),(23,'HOSP 2 ANO DE FABRICAÇÃO'),(24,'HOSPITAL 2'),(25,'HOSPITAL 2 SISTEMA DE PROTEÇÃO DISPONÍVEL'),(26,'HOSPITAL 3'),(27,'HOSP 3 ANO DE FABRICAÇÃO'),(28,'HOSPITAL 3'),(29,'HOSPITAL 3 SISTEMA DE PROTEÇÃO DISPONÍVEL'),(30,'ATUA COMO PROCTOR EM OUTRAS CIDADES / SERVIÇOS'),(31,'COMENTÁRIO / OBSERVAÇÃO 3'),(32,'USA CONSTANTEMENTE DURANTE OS PROCEDIMENTOS'),(33,'QUANTO AO AVENTAL'),(34,'PROTEÇÃO COLETIVA - ESCUDO'),(35,'PROTEÇÃO COLETIVA - SAIOTE'),(36,'COMENTÁRIO / OBSERVAÇÃO 4'),(37,'USO DO DOSÍMETRO'),(38,'DOSAGEM DO DOSÍMETRO NO ÚLTIMO RELATÓRIO'),(39,'SOMATÓRIA DA DOSAGEM DO DOSÍMETRO DOS DIVERSOS SERVIÇOS'),(40,'LEITURA DO DOSÍMETRO'),(41,'COMENTÁRIO / OBSERVAÇÃO 4'),(42,'TEM CONHECIMENTO BÁSICO DE FÍSICA DAS RADIAÇÕES PARA O USO APROPRIADO DO EQUIPAMENTO / PROCEDIMENTO?'),(43,'TEM CONHECIMENTO BÁSICO DE FÍSICA DAS RADIAÇÕES PARA O USO APROPRIADO DO EQUIPAMENTO PARA POSICIONAMENTO NA SALA EM USO DE PERFIL / OBLIQUA'),(44,'UTILIZA DE COLIMAÇÃO E FILTROS PRÓPRIA DO FEIXE PRIMÁRIO?'),(45,'AFASTA DO PACIENTE NA HORA DE SUBTRAÇÃO / CINE ANGIOGRAFIA'),(46,'MANTÊM O CORPO E MÃOS DISTANTE DO FEIXE PRIMÁRIO DURANTE O PROCEDIMENTO?'),(47,'MANTÊM A FONTE DISTANTE DO PACIENTE (> 50 CM)'),(48,'PARTICIPARIA DE CURSO SOBRE FÍSICA E SEGURANÇA ?'),(49,'COMENTÁRIO / OBSERVAÇÃO 5'),(50,'PREDISPOSIÇÃO GENÉTICA A DOENÇA NEOPLÁSICA ?'),(51,'CHECK UP'),(52,'APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO? '),(53,'QUAL'),(54,'ALGUÉM DA EQUIPE / COLEGA DO SERVIÇO APRESENTOU ALGUMA DOENÇA RELACIONADA A RADIAÇÃO? '),(55,'COMENTÁRIO / OBSERVAÇÃO 6'),(56,'COMENTÁRIO FINAL E SUGESTÕES');
/*!40000 ALTER TABLE `tb_questoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_respostas`
--

DROP TABLE IF EXISTS `tb_respostas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_respostas` (
  `resposta_id` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_id` int(11) DEFAULT NULL,
  `questao_id` int(11) DEFAULT NULL,
  `resposta` text,
  PRIMARY KEY (`resposta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_respostas`
--

LOCK TABLES `tb_respostas` WRITE;
/*!40000 ALTER TABLE `tb_respostas` DISABLE KEYS */;
INSERT INTO `tb_respostas` VALUES (1,1,1,'Juliana teste'),(2,1,2,'123456'),(3,1,3,'10'),(4,1,4,'5'),(5,1,5,'1984'),(6,1,6,'F'),(7,1,7,'SÃ£o paulo'),(8,1,8,'Sim'),(9,1,9,'< 2 anos'),(10,1,10,'ATÃ‰ 5'),(11,1,11,'COMENTÃRIO / OBSERVAÃ‡ÃƒO 1'),(12,1,12,'Sim'),(13,1,13,'Sim'),(14,1,14,'Sim'),(15,1,15,'Sim'),(16,1,16,'Sim'),(17,1,17,'NÃƒO'),(18,1,18,'-'),(19,1,19,'-'),(20,1,20,'-'),(21,1,21,'-'),(22,1,22,'-'),(23,1,23,'Comentario / ObservaÃ§Ã£o 2'),(24,1,24,'5'),(25,1,25,'ARCO CIRURGICO'),(26,1,26,'-'),(27,1,27,'> 10 anos'),(28,1,28,'MANUTENÃ‡ÃƒO DO APARELHO ANUAL'),(29,1,29,'AVENTAL DE CHUMBO COM MAUTENÃ‡ÃƒO FREQUENTE'),(30,1,30,'-'),(31,1,31,'Ã“CULOS DE PROTEÃ‡ÃƒO CONTRA RADIAÃ‡ÃƒO'),(32,1,32,'-'),(33,1,33,'-'),(34,1,34,'-'),(35,1,35,'DOSÃMETRO PARA RADIAÃ‡ÃƒO'),(36,1,36,'ARCO CIRURGICO'),(37,1,37,'HEMODINAMICA FIXA'),(38,1,38,'5 a 10 anos'),(39,1,39,'MANUTENÃ‡ÃƒO DO APARELHO ANUAL'),(40,1,40,'AVENTAL DE CHUMBO COM MAUTENÃ‡ÃƒO FREQUENTE'),(41,1,41,'-'),(42,1,42,'-'),(43,1,43,'GORRO DE PROTEÃ‡ÃƒO CONTRA RADIAÃ‡ÃƒO'),(44,1,44,'-'),(45,1,45,'-'),(46,1,46,'DOSÃMETRO PARA RADIAÃ‡ÃƒO'),(47,1,47,'-'),(48,1,48,'HEMODINAMICA FIXA'),(49,1,49,'5 a 10 anos'),(50,1,50,'SEMESTRAL'),(51,1,51,'AVENTAL DE CHUMBO COM MAUTENÃ‡ÃƒO FREQUENTE'),(52,1,52,'-'),(53,1,53,'-'),(54,1,54,'-'),(55,1,55,'-'),(56,1,56,'-'),(57,1,57,'DOSÃMETRO PARA RADIAÃ‡ÃƒO'),(58,1,58,'NÃƒO'),(59,1,59,'COMENTÃRIO / OBSERVAÃ‡ÃƒO 3'),(60,1,60,'AVENTAL QUE COBRE A PARTE DA FRENTE E DAS COSTAS DO USUÃRIO'),(61,1,61,'-'),(62,1,62,'GORRO DE PROTEÃ‡ÃƒO'),(63,1,63,'-'),(64,1,64,'Ã“CULOS PLUMBADO OU VISEIRA PROTETORA'),(65,1,65,'Ã“CULOS TENHO DISPONÃVEL MAS USO DE MANEIRA IRREGULAR'),(66,1,66,'PRÃ“PRIO'),(67,1,67,'-'),(68,1,68,'CHUMBO'),(69,1,69,'-'),(70,1,70,'RENOVADO ANUALMENTE'),(71,1,71,'-'),(72,1,72,'USO COLETIVO SEM MANUTENÃ‡ÃƒO OU RENOVAÃ‡ÃƒO'),(73,1,73,'USO ESCUDO DE ANTEPARO SOBRE A MESA RARAMENTE'),(74,1,74,'USARIA SAIOTE DE ANTEPARO SOB A MESA MAS NÃƒO Ã‰ DISPONÃVEL EM TODOS OS SERVIÃ‡OS'),(75,1,75,'COMENTÃRIO / OBSERVAÃ‡ÃƒO 4'),(76,1,76,'CONSTANTEMENTE EM TODOS OS SERVIÃ‡OS'),(77,1,77,'-'),(78,1,78,'RARAMENTE POR EXCEDER O LIMITE DE RADIAÃ‡ÃƒO E ISTO IMPEDIRIA DE TRABALHAR'),(79,1,79,'-'),(80,1,80,'INSTRUMENTADOR UTILIZA'),(81,1,81,'-'),(82,1,82,'INSTRUMENTADOR NÃƒO UTILIZA'),(83,1,83,'DOSAGEM DO DOSÃMETRO NO ÃšLTIMO RELATÃ“RIO'),(84,1,84,'SOMATÃ“RIA DA DOSAGEM DO DOSÃMETRO DOS DIVERSOS SERVIÃ‡OS'),(85,1,85,'NUNCA SOMOU OS RESULTADOS'),(86,1,86,'-'),(87,1,87,'JÃ FOI IMPEDIDO DE TRABALHAR POR EXEDER LIMITE DE RADIAÃ‡ÃƒO EM 1 HOSPITAL'),(88,1,88,'-'),(89,1,89,'OS OUTROS HOSPITAIS NÃƒO SÃƒO INFORMADOS'),(90,1,90,'-'),(91,1,91,'COMENTÃRIO / OBSERVAÃ‡ÃƒO 4'),(92,1,92,'NÃ£o'),(93,1,93,'Sim'),(94,1,94,'NÃ£o'),(95,1,95,'Sim'),(96,1,96,'NÃ£o'),(97,1,97,'Sim'),(98,1,98,'NÃ£o'),(99,1,99,'COMENTÃRIO / OBSERVAÃ‡ÃƒO 5'),(100,1,100,'PAIS TIVERAM / TEM NEOPLASIA'),(101,1,101,'-'),(102,1,102,'IRMÃƒOS TIVERAM / TEM NEOPLASIA'),(103,1,103,'AVALIAÃ‡ÃƒO CLÃNICA ANUAL'),(104,1,104,'-'),(105,1,105,'HEMOGRAMA SERIADO (MENSAL / TRIMESTRAL OU SEMESTRAL)'),(106,1,106,'NEOPLASIA'),(107,1,107,'-'),(108,1,108,'HEMATOLÃ“GICA'),(109,1,109,'-'),(110,1,110,'GEROU AFASTAMENTO TEMPORÃRIO'),(111,1,111,'-'),(112,1,112,'NÃƒO'),(113,1,113,'QUAL'),(114,1,114,'NEOPLASIA'),(115,1,115,'-'),(116,1,116,'HEMATOLÃ“GICA'),(117,1,117,'-'),(118,1,118,'GEROU AFASTAMENTO TEMPORÃRIO'),(119,1,119,'-'),(120,1,120,'Ã“BITO POR TUMOR'),(121,1,121,'COMENTÃRIO / OBSERVAÃ‡ÃƒO 6'),(122,1,122,'COMENTÃRIO FINAL E SUGESTÃ•ES'),(123,2,1,'JoÃ£o da Silva'),(124,2,2,'151515'),(125,2,3,'18'),(126,2,4,'7'),(127,2,5,'1954'),(128,2,6,'M'),(129,2,7,'SÃ£o paulo'),(130,2,8,'-'),(131,2,9,'-'),(132,2,10,'-'),(133,2,11,'-'),(134,2,12,'-'),(135,2,13,'-'),(136,2,14,'-'),(137,2,15,'Sim'),(138,2,16,'-'),(139,2,17,'-'),(140,2,18,'-'),(141,2,19,'-'),(142,2,20,'-'),(143,2,21,'COM PROCTOR'),(144,2,22,'-'),(145,2,23,'sdasdas'),(146,3,1,'Maria Candida'),(147,3,2,'658745'),(148,3,3,'18'),(149,3,4,'6'),(150,3,5,'1995'),(151,3,6,'F'),(152,3,7,'SÃ£o paulo'),(153,3,8,'NÃ£o'),(154,3,9,'< 20'),(155,3,10,'5 - 10'),(156,3,11,'dasdasdas'),(157,3,12,'Sim'),(158,3,13,'-'),(159,3,14,'Sim'),(160,3,15,'-'),(161,3,16,'Sim'),(162,3,17,'-'),(163,3,18,'SIM RAMIFICADA'),(164,3,19,'-'),(165,3,20,'-'),(166,3,21,'-'),(167,3,22,'-'),(168,3,23,'dasdasdas'),(169,3,24,'5'),(170,3,25,'ARCO CIRURGICO'),(171,3,26,'-'),(172,3,27,'5 a 10 anos'),(173,3,28,'SEMESTRAL'),(174,3,29,'-'),(175,3,30,'-'),(176,3,31,'-'),(177,3,32,'GORRO DE PROTEÃ‡ÃƒO CONTRA RADIAÃ‡ÃƒO'),(178,3,33,'ESCUDO DE PROTEÃ‡ÃƒO SOBRE A MESA DE TRABALHO'),(179,3,34,'-'),(180,3,35,'-'),(181,3,36,'ARCO CIRURGICO'),(182,3,37,'-'),(183,3,38,'NÃ£o sei'),(184,3,39,'SEMESTRAL'),(185,3,40,'-'),(186,3,41,'-'),(187,3,42,'-'),(188,3,43,'-'),(189,3,44,'-'),(190,3,45,'-'),(191,3,46,'DOSÃMETRO PARA RADIAÃ‡ÃƒO'),(192,3,47,'ARCO CIRURGICO'),(193,3,48,'-'),(194,3,49,'NÃ£o sei'),(195,3,50,'SEMESTRAL'),(196,3,51,'-'),(197,3,52,'-'),(198,3,53,'-'),(199,3,54,'-'),(200,3,55,'-'),(201,3,56,'-'),(202,3,57,'DOSÃMETRO PARA RADIAÃ‡ÃƒO'),(203,3,58,'NÃƒO'),(204,3,59,'-');
/*!40000 ALTER TABLE `tb_respostas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_respostas_compiladas`
--

DROP TABLE IF EXISTS `tb_respostas_compiladas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_respostas_compiladas` (
  `compilada_id` int(11) NOT NULL,
  `resposta` text,
  PRIMARY KEY (`compilada_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_respostas_compiladas`
--

LOCK TABLES `tb_respostas_compiladas` WRITE;
/*!40000 ALTER TABLE `tb_respostas_compiladas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_respostas_compiladas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_nome` varchar(100) DEFAULT NULL,
  `usuario_login` varchar(45) DEFAULT NULL,
  `usuario_senha` varchar(45) DEFAULT NULL,
  `usuario_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios`
--

LOCK TABLES `tb_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` VALUES (1,'Administrador','admin','3cc80cd40a716d382afbf0f700d92778',1),(2,'Juliana','juliana','cebf7e2da0b4574511b8bcfd091c434a',1);
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-14 22:26:52
