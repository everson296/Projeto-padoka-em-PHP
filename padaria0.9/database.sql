-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: dbcontatosprojeto3
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblcontatos`
--

DROP TABLE IF EXISTS `tblcontatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblcontatos` (
  `idContatos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(17) NOT NULL,
  `celular` varchar(17) NOT NULL,
  `email` varchar(100) NOT NULL,
  `homePage` varchar(150) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `idSugestaoCritica` int(11) NOT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `obs` text,
  PRIMARY KEY (`idContatos`),
  KEY `Fk_sujestao_contatos` (`idSugestaoCritica`),
  CONSTRAINT `Fk_sujestao_contatos` FOREIGN KEY (`idSugestaoCritica`) REFERENCES `tblsugestaocritica` (`idSugestaoCritica`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcontatos`
--

LOCK TABLES `tblcontatos` WRITE;
/*!40000 ALTER TABLE `tblcontatos` DISABLE KEYS */;
INSERT INTO `tblcontatos` VALUES (5,'Luiz espalha lixo','011 9648-8022','11 95874-4587','espalhaLixo666@gmail.com','ola','https://www.facebook.com/',2,'espalhador de lixo','M','muito limpo'),(10,'Everson Silva','011 4787-4878','11 45878-4587','tutinha296@gmail.com','ola','https://www.facebook.com/',2,'programador','M','vai trabalhar '),(11,'JEFFERSON SILVA DE ALMEIDA','119 6488-0229','11 45874-4444','jefferson296@gmail.com','sevage','https://www.facebook.com/',1,'Eletrecista','M','bom dia pessoa'),(13,'teste','(11) 11111-1111','(11) 1111-11111','tutinha296@gmail.com','link','https://www.facebook.com/',2,'programador','F','teste'),(14,'teste','(11) 11111-1111','(11) 1111-11111','tutinha296@gmail.com','link','https://www.facebook.com/',2,'programador','F','teste');
/*!40000 ALTER TABLE `tblcontatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcuriosidadecard`
--

DROP TABLE IF EXISTS `tblcuriosidadecard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblcuriosidadecard` (
  `idCuriosidadeCard` int(4) NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `dataPublicacao` date NOT NULL,
  `nomeEscritor` varchar(100) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `ativacao` varchar(1) NOT NULL,
  PRIMARY KEY (`idCuriosidadeCard`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcuriosidadecard`
--

LOCK TABLES `tblcuriosidadecard` WRITE;
/*!40000 ALTER TABLE `tblcuriosidadecard` DISABLE KEYS */;
INSERT INTO `tblcuriosidadecard` VALUES (2,'fc788f73f64df4e93bf14f1d0c6a8396.jpg','porque comemos pão no café da manhã','2020-07-12','Everson Silva','O pão pode estar presente no café da manhã e em alguma refeição principal, como almoço ou jantar. A porção recomendada é de 2 fatias de pão de forma por dia. Além de contribuir para a saciedade, os pães, especialmente os integrais, são compostos por fibras que ajudam no controle de peso e até na redução do colesterol.','1'),(3,'f4161c85a40bc486ec58c2c9ecad9ce3.jpg','Café brasileiro','2020-07-15','Everson Silva','Você sabia que o café do brasil é considerado o melhor café do mundo, já foi por volta de 1900 a maior rende do Brasil, pelas exportações para o exterior.','0'),(4,'541f3a4c8079f17de83015d42b4df43b.jpg','pão era dinheiro','2020-07-20','Everson Silva','o pão ja foi usado antigamente como moeda de troca, no égito era muito utilizado como pagamento para os escravos ou como pagamento por serviços  ','1'),(7,'703e15823980e7587518817994819310.jpg','teste','2020-07-21','Everson Silva','teste','0'),(8,'27d4cdb811a61384deb372b171be9915.jpg','teste','2020-07-22','Everson Silva','teste','1'),(9,'37630f6a6be09945976d518a7e030af4.jpg','pão','2020-07-24','Everson Silva','teste','1');
/*!40000 ALTER TABLE `tblcuriosidadecard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcuriosidadeimg`
--

DROP TABLE IF EXISTS `tblcuriosidadeimg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblcuriosidadeimg` (
  `idCuriosidadeImg` int(4) NOT NULL AUTO_INCREMENT,
  `imgPrimaria` varchar(200) NOT NULL,
  `imgSecundaria` varchar(200) NOT NULL,
  `imgTerciaria` varchar(200) NOT NULL,
  `imgQuartaria` varchar(200) NOT NULL,
  PRIMARY KEY (`idCuriosidadeImg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcuriosidadeimg`
--

LOCK TABLES `tblcuriosidadeimg` WRITE;
/*!40000 ALTER TABLE `tblcuriosidadeimg` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblcuriosidadeimg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblempresa`
--

DROP TABLE IF EXISTS `tblempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblempresa` (
  `idEmpresa` int(4) NOT NULL AUTO_INCREMENT,
  `imgPrincipal` varchar(255) NOT NULL,
  `sobreEmpresa` varchar(255) NOT NULL,
  `txtInformacao` varchar(255) NOT NULL,
  `txtTrabalheConosco` varchar(255) NOT NULL,
  `telefone` varchar(17) NOT NULL,
  `celular` varchar(17) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblempresa`
--

LOCK TABLES `tblempresa` WRITE;
/*!40000 ALTER TABLE `tblempresa` DISABLE KEYS */;
INSERT INTO `tblempresa` VALUES (1,'e3861002ff7bba2bf8d97a3e18bfa029.jpg','Em nossa empresa prezamos pelo bem estar de nossos funcionários e principalmente pela qualidade do produto que nossos clientes iram ingerir, gostamos de cuidar de tudo e manter tudo em uma boa e santa paz. ','Nossa empresa toma muito cuidado para que nossos utensílios de cozinha sempre estejam bem higienizados e limpos para que os nossos pães e doces estejam em perfeita qualidade.','Em nossa empresa nós gostamos de manter a ordem e a calma, nossos funcionários ganham benefícios cedidos pela empresa, temos a prioridade de atender o cliente com a melhor qualidade que ele merece e também os funcionários. Veja as vagas livres.','(011) 9480-4580','(11) 9854-75122','R. Serra de Parima - Jardim Bela Vista, Itapevi - SP','296');
/*!40000 ALTER TABLE `tblempresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblestados`
--

DROP TABLE IF EXISTS `tblestados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblestados` (
  `idEstados` int(4) NOT NULL AUTO_INCREMENT,
  `nomeEstado` varchar(100) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  PRIMARY KEY (`idEstados`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblestados`
--

LOCK TABLES `tblestados` WRITE;
/*!40000 ALTER TABLE `tblestados` DISABLE KEYS */;
INSERT INTO `tblestados` VALUES (1,'Acre','AC'),(2,'Alagoas','AL'),(3,'Amapá','AP'),(4,'Amazonas','AM'),(5,'Bahia','BA'),(6,'Ceará','CE'),(7,'Distrito Federal','DF'),(8,'Espírito Santo','ES'),(9,'Goiás','GO'),(10,'Maranhão','MA'),(11,'Mato Grosso','MT'),(12,'Mato Grosso do Sul','MS'),(13,'Minas Gerais','MG'),(14,'Pará','PA'),(15,'Paraíba','PB'),(16,'Paraná','PR'),(17,'Pernambuco','PE'),(18,'Piauí','PI'),(19,'Rio de Janeiro','RJ'),(20,'Rio Grande do Norte','RN'),(21,'Rio Grande do Sul ','RS'),(22,'Rondônia','RO'),(23,'Roraima','RR'),(24,'Santa Catarina','SC'),(25,'São Paulo ','SP'),(26,'Sergipe','SE'),(27,'Tocantins','TO');
/*!40000 ALTER TABLE `tblestados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblloja`
--

DROP TABLE IF EXISTS `tblloja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblloja` (
  `idLoja` int(4) NOT NULL AUTO_INCREMENT,
  `idEstados` int(4) NOT NULL,
  `imgLoja` varchar(150) NOT NULL,
  `nomeLoja` varchar(150) NOT NULL,
  `nomeGerente` varchar(150) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `linkGoogleMaps` varchar(500) DEFAULT NULL,
  `ativacao` tinyint(1) NOT NULL,
  PRIMARY KEY (`idLoja`),
  KEY `FK_estados_loja` (`idEstados`),
  CONSTRAINT `FK_estados_loja` FOREIGN KEY (`idEstados`) REFERENCES `tblestados` (`idEstados`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblloja`
--

LOCK TABLES `tblloja` WRITE;
/*!40000 ALTER TABLE `tblloja` DISABLE KEYS */;
INSERT INTO `tblloja` VALUES (1,25,'42a4170bc3beae310fd04d3c3afb0fd8.jpg','hill valley','Everson','R. alexinia.S.cobra.galvão','nossa senhora do fatima','96','tutinha296@gmail.com','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14628.38820748867!2d-46.9204031!3d-23.5649576!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb77fc807a1988995!2sMini%20Mercado%20e%20Padaria%20Coimbra!5e0!3m2!1spt-BR!2sbr!4v1594349129511!5m2!1spt-BR!2sbr',0),(2,12,'4d344e7a9606c847587d0ab5b2037965.gif','THE DOCTOR WHO TESTE TESte456456','ajgdlçakfjhdghdafgjkhdajgdlçakfjhdghdafgjkhd','R. Serra de Parima - Jardim Bela Vista, ItJardim Bela Vista, It','R. Serra de Parima - Jardim Bela Vista,Jardim Bela Vista, ItJardim Bela Vista, It','45687','tutinha296@gmail.com','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.375320067444!2d-46.9096216008206!3d-23.55609169750367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x806163d56303848a!2sPadaria%20Hora%20Do%20cafe!5e0!3m2!1spt-BR!2sbr!4v1594414167750!5m2!1spt-BR!2sbr',0),(4,17,'6e333eb5108ff3d048cd3f0ba5311186.jpg','hyrule','zelda','bafo','daaa','333','link@gmail.com','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.375320067444!2d-46.9096216008206!3d-23.55609169750367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x806163d56303848a!2sPadaria%20Hora%20Do%20cafe!5e0!3m2!1spt-BR!2sbr!4v1594414167750!5m2!1spt-BR!2sbr',1),(5,15,'aa070442b45535b961560b28a3e1198c.jpg','Sonho da manhã','Afonso','R. Serra de Parima - Jardim Bela Vista, Itapevi - SP','nossa senhora do fatima','96','fonso@gmail.com','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.375320067444!2d-46.9096216008206!3d-23.55609169750367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x806163d56303848a!2sPadaria%20Hora%20Do%20cafe!5e0!3m2!1spt-BR!2sbr!4v1594414167750!5m2!1spt-BR!2sbr',0),(6,2,'08c0ba43de3b16eb1d6ac99d8e64d96e.jpg','hill valley','Everson','R. alexinia.S.cobra.galvão','nossa senhora do fatima','96','tutinha296@gmail.com','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.375320067444!2d-46.9096216008206!3d-23.55609169750367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x806163d56303848a!2sPadaria%20Hora%20Do%20cafe!5e0!3m2!1spt-BR!2sbr!4v1594414167750!5m2!1spt-BR!2sbr',0),(7,13,'33b6a0cdaecb87baaf7f5fddb3b8de18.jpg','queju','marco','R.minas','mineiro','96','queiju54@gmail.com','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.375320067444!2d-46.9096216008206!3d-23.55609169750367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x806163d56303848a!2sPadaria%20Hora%20Do%20cafe!5e0!3m2!1spt-BR!2sbr!4v1594414167750!5m2!1spt-BR!2sbr',1),(8,2,'402ed964079981c817fa6125332437ef.jpg','hill valley','Everson','R. alexinia.S.cobra.galvão','nossa senhora do fatima','96','gigi@gmail.com','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.065170834929!2d-46.92530697156827!3d-23.558877689216224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6e245e4e92b686c!2sPingo%20De%20Ouro%20Padaria!5e0!3m2!1spt-BR!2sbr!4v1594413701081!5m2!1spt-BR!2sbr',1);
/*!40000 ALTER TABLE `tblloja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblnivel`
--

DROP TABLE IF EXISTS `tblnivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblnivel` (
  `idNivel` int(4) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(150) NOT NULL,
  `ativar` varchar(1) NOT NULL,
  `ADMusuario` varchar(1) NOT NULL,
  `ADMfaleConosco` varchar(1) NOT NULL,
  `ADMprodutos` varchar(1) NOT NULL,
  `ADMconteudo` varchar(1) NOT NULL,
  PRIMARY KEY (`idNivel`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblnivel`
--

LOCK TABLES `tblnivel` WRITE;
/*!40000 ALTER TABLE `tblnivel` DISABLE KEYS */;
INSERT INTO `tblnivel` VALUES (1,'administrador','1','1','1','1','1'),(4,'fonso','0','1','1','0','0'),(5,'teste','0','1','1','0','0'),(6,'teste','0','1','1','0','0'),(7,'teste','0','1','1','0','0'),(8,'teste','0','1','1','0','0'),(9,'teste','0','1','1','0','0'),(10,'ola','0','1','0','0','0');
/*!40000 ALTER TABLE `tblnivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsugestaocritica`
--

DROP TABLE IF EXISTS `tblsugestaocritica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblsugestaocritica` (
  `idSugestaoCritica` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(2) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`idSugestaoCritica`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsugestaocritica`
--

LOCK TABLES `tblsugestaocritica` WRITE;
/*!40000 ALTER TABLE `tblsugestaocritica` DISABLE KEYS */;
INSERT INTO `tblsugestaocritica` VALUES (1,'su','sugestao'),(2,'cr','critica');
/*!40000 ALTER TABLE `tblsugestaocritica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblusuario`
--

DROP TABLE IF EXISTS `tblusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblusuario` (
  `idUsuario` int(4) NOT NULL AUTO_INCREMENT,
  `idNivel` int(4) NOT NULL,
  `nomeUsuario` varchar(150) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `ativacao` varchar(1) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `FK_nivel_usuario` (`idNivel`),
  CONSTRAINT `FK_nivel_usuario` FOREIGN KEY (`idNivel`) REFERENCES `tblnivel` (`idNivel`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblusuario`
--

LOCK TABLES `tblusuario` WRITE;
/*!40000 ALTER TABLE `tblusuario` DISABLE KEYS */;
INSERT INTO `tblusuario` VALUES (1,1,'everson','58ca87be53056b0d62d524c95031750a','tutinha296@gmail.com','1'),(5,4,'fonso','202cb962ac59075b964b07152d234b70','fonso@gmail.com','1'),(6,1,'admin','21232f297a57a5a743894a0e4a801fc3','admin@gmail.com','1');
/*!40000 ALTER TABLE `tblusuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-24 16:30:01
