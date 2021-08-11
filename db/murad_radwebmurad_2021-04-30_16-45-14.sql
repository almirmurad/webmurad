-- MySQL dump 10.14  Distrib 5.5.65-MariaDB, for Linux (x86_64)
--
-- Host: robb0516.publiccloud.com.br    Database: murad_radwebmurad
-- ------------------------------------------------------
-- Server version	5.6.37-82.2-log

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
-- Current Database: `murad_radwebmurad`
--


--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `banner_id` int(10) NOT NULL AUTO_INCREMENT,
  `banner_desc` varchar(100) NOT NULL,
  `banner_img` varchar(100) NOT NULL,
  `banner_link` varchar(100) NOT NULL,
  `banner_tam` varchar(50) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'banner rotativo','testebanner.jpg','http://www.leaodois.com.br','150'),(2,'banner','testebanner2.jpg','http://www.webmurad.com.br','150'),(3,'banner rotativo 3','testebanner3.jpg','http://www.leaodois.com.br','150'),(4,'novo banner','testebanner4.jpg','http://www.leaodois.com.br','150'),(19,'Web Murad - Desenvolvimento Web','banner_webmurad.jpg','http://www.webmurad.com.br',''),(18,'banner seis','testebanner5.jpg','','');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `cod_categoria` smallint(6) NOT NULL,
  `nome_categoria` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'SINUCA / BILHAR'),(2,'PEBOLIM / TOTÓ');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `sexo_cliente` char(5) CHARACTER SET latin1 NOT NULL,
  `nome_cliente` varchar(150) CHARACTER SET latin1 NOT NULL,
  `cpf_cliente` char(11) CHARACTER SET latin1 NOT NULL,
  `rg_cliente` char(9) CHARACTER SET latin1 NOT NULL,
  `nascimento_cliente` char(8) CHARACTER SET latin1 NOT NULL,
  `email_cliente` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telefone_cliente` int(10) NOT NULL,
  `rua_cliente` varchar(100) CHARACTER SET latin1 NOT NULL,
  `numero_cliente` varchar(10) CHARACTER SET latin1 NOT NULL,
  `cep_cliente` char(8) CHARACTER SET latin1 NOT NULL,
  `estado_cliente` varchar(30) CHARACTER SET latin1 NOT NULL,
  `cidade_cliente` varchar(100) CHARACTER SET latin1 NOT NULL,
  `bairro_cliente` varchar(100) CHARACTER SET latin1 NOT NULL,
  `senha_cliente` varchar(50) CHARACTER SET latin1 NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'f','ALMIR MURAD OLIVEIRA JUNIOR','35948731880','401885781','01011987','almir_murad@hotmail.com',0,'ANTONIO MARQUES','401','11740000','SÃO PAULO','ITANHAÉM','SAVOY II','a305270ddbce06b68cbca8e214cf9dd96e58d7b2','2012-07-04'),(2,'fem','RAFAELA FERNANDA OLIVEIRA LUCANO','36310844890','401885781','05111988','rafaela.lucano@hotmail.com',0,'ANTONIO MARQUES','401','11740000','SÃO PAULO','ITANHAÉM','SAVOY II','3474ad7ff89d1145b2b5a6639112c373bdfb7c10','2012-07-04'),(3,'fem','RAFAELA FERNANDA OLIVEIRA LUCANO','36310844890','401885781','05111988','rafaela.lucano@hotmail.com',0,'ANTONIO MARQUES','401','11740000','SÃO PAULO','ITANHAÉM','SAVOY II','3474ad7ff89d1145b2b5a6639112c373bdfb7c10','2012-07-04'),(4,'fem','RAFAELA FERNANDA OLIVEIRA LUCANO','36310844890','401885781','05111988','rafaela.lucano@hotmail.com',0,'ANTONIO MARQUES','401','11740000','SÃO PAULO','ITANHAÉM','SAVOY II','3474ad7ff89d1145b2b5a6639112c373bdfb7c10','2012-07-04'),(5,'fem','RAFAELA FERNANDA OLIVEIRA LUCANO','36310844890','401885781','05111988','rafaela.lucano@hotmail.com',0,'ANTONIO MARQUES','401','11740000','SÃO PAULO','ITANHAÉM','SAVOY II','3474ad7ff89d1145b2b5a6639112c373bdfb7c10','2012-07-04'),(7,'masc','MANÉ DAS COUVES','12345678900','987654321','12345678','manedascouves@gmail.com',0,'antonio marques','401','11740000','São Paulo','itanhaém','savoy 2','b80d97ee5122948a5aa67bcdd7d042d97f515f52','2012-07-25'),(8,'fem','RAFAELA FERNANDA MURAD LUCANO','36345347890','406752697','11052012','rafaela.lucano@hotmail.com',0,'ANTONIO MARQUES','401','11740000','São Paulo','ITANHAÉM','SAVOY','5a366d7cd88726d3c266dfd08687652d2212b67e','2012-07-30'),(16,'masc','ALMIR JR','12345678900','490909090','01010101','almir_murad@hotmail.com',1334267878,'SAVOY II','401','11740000','CEAR?','ITANHA?M','SAVOY II','cfd05dbdf09bc4f9b06c75600632cc05650f2187','2013-01-09'),(11,'','Samuray Shadow','66666666666','555555555','01010101','samuray@yahoo.com.br',1334264136,'jaspion','69','12345678','São Paulo','São Paulo','Sé','ed9d3d832af899035363a69fd53cd3be8f71501c','2012-08-14'),(14,'','ALMIR JUNIOR','35555555555','401111111','01011987','junior@hotmail.com',1334277686,'SOROCABANA','100','11740000','SãO PAULO','ITANHAéM','CENTRO','7c222fb2927d828af22f592134e8932480637c0d','2012-09-24'),(15,'masc','FABRICIO DE OLIVEIRA ROCHA','12123456789','121212345','12122011','fabricio@sobrinho.com.br',1334278101,'IVOTY','41','11740000','SÃO PAULO','ITANHAÉM','IVOTY','f800e56c0846b22e3a76eb04c3d31ba8746527fa','2012-09-27');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `cod_email` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome_email` varchar(60) NOT NULL,
  `email_email` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (1,'almir MURAD OLIVEIRA JUNIOR','almir_murad@hotmail.com'),(2,'almir MURAD OLIVEIRA JUNIOR','almir_murad@hotmail.com'),(3,'almir MURAD OLIVEIRA JUNIOR','almir_murad@hotmail.com'),(4,'Rafaela Lucano','rafaela.lucano@hotmail.com');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itenspedido`
--

DROP TABLE IF EXISTS `itenspedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itenspedido` (
  `coditem` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `codped` tinyint(4) NOT NULL DEFAULT '0',
  `codprod` int(4) NOT NULL DEFAULT '0',
  `qtd` tinyint(4) NOT NULL DEFAULT '0',
  `preco` float NOT NULL,
  PRIMARY KEY (`coditem`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itenspedido`
--

LOCK TABLES `itenspedido` WRITE;
/*!40000 ALTER TABLE `itenspedido` DISABLE KEYS */;
INSERT INTO `itenspedido` VALUES (1,1,1,1,35),(2,2,1,1,35),(3,3,1,1,35),(4,4,1,1,35),(5,5,1,1,35),(6,6,1,1,35),(7,7,1,1,35),(8,8,1,2,35),(9,9,1,1,35);
/*!40000 ALTER TABLE `itenspedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `destaque` varchar(3) NOT NULL DEFAULT 'sim',
  `data` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `noticia` text NOT NULL,
  `resumo` varchar(300) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (1,'asdsd','sim','2020-03-06','','asdasd','asdasd'),(2,'123123','sim','2020-03-06','sun_9-wallpaper-1366x768.jpg','asd','asd'),(3,'123132','sim','2020-03-06','admin.jpg.php','ads','asd'),(4,'teste 2020','sim','2020-07-12','canalJuan.png','teste de envio ','teste');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `codped` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `cliente` varchar(150) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `frete` float NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codped`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-01-19 00:14:11',0,1),(2,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-01-21 21:33:12',0,0),(3,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-01-23 21:36:50',0,0),(4,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-02-10 09:43:32',21.3,0),(5,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-02-12 10:50:36',27,0),(6,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-02-22 22:00:19',21.3,0),(7,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-02-28 20:35:46',21.3,2),(8,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-02-28 21:28:52',21.3,0),(9,'ALMIR MURAD OLIVEIRA JUNIOR','35948731880','2013-03-04 23:03:13',27,0);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `codigo_produto` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(80) NOT NULL,
  `descricao_produto` text CHARACTER SET latin1 NOT NULL,
  `preco` float NOT NULL,
  `peso` float NOT NULL,
  `codigo_categoria` smallint(6) NOT NULL,
  `cod_subcategoria` smallint(6) NOT NULL,
  `adicionais` text CHARACTER SET latin1 NOT NULL,
  `foto_1` varchar(20) CHARACTER SET latin1 NOT NULL,
  `foto_2` varchar(20) CHARACTER SET latin1 NOT NULL,
  `foto_3` varchar(20) CHARACTER SET latin1 NOT NULL,
  `foto_4` varchar(20) CHARACTER SET latin1 NOT NULL,
  `quantidade` int(11) NOT NULL,
  `destaque` char(3) CHARACTER SET latin1 NOT NULL,
  `entrada` date NOT NULL,
  `tipo_embalagem` int(11) NOT NULL,
  `comprimento_embalagem` decimal(10,0) NOT NULL,
  `altura_embalagem` decimal(10,0) NOT NULL,
  `largura_embalagem` decimal(10,0) NOT NULL,
  `diametro_embalagem` decimal(10,0) NOT NULL,
  PRIMARY KEY (`codigo_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=160 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'bolinhas alterado','pressão',35,10.7,1,1,'Peso dever? ser em gramas','nophoto.jpg','nophoto.jpg','nophoto.jpg','nophoto.jpg',987,'sim','2012-05-22',1,17,12,15,12),(4,'NOVO TESTE','DFMVSKFNÇ',10,5,1,1,'KLNJ','250365_6795.jpg','bolas2.jpg','mesa.jpg','snooker1.jpg',0,'sim','2012-05-22',1,15,28,20,0),(5,'NOVO TESTE','alteração com dados da embalagem',35,5,1,1,'KLNJ','858850_77544392.jpg','bolas.jpg','bolas2.jpg','705365_21126813.jpg',52,'sim','2012-05-22',1,15,12,15,0),(6,'TERCEIRA ALTERAÇÃO','CORAção',30,5,1,1,'KLNJ','600_10e9.jpg','250365_6795.jpg','486892_75760366.jpg','529979_15346069.jpg',45,'sim','2012-05-22',1,15,16,29,0),(146,'TESTE LISTA CATEGORIA','TESTE PARA VER SE A LISTAGEM DE SELECT CATEGORIAS DEU CERTO',10,10,1,2,'','snooker2.jpg','486892_75760366.jpg','705365_21126813.jpg','snooker4.jpg',2,'sim','2012-07-07',1,0,0,0,0),(7,'NOVO TESTE','DFMVSKFNÇ',35,5,1,4,'KLNJ','bolas.jpg','705365_21126813.jpg','bolas2.jpg','529979_15346069.jpg',100,'sim','2012-05-22',1,34,22,12,0),(8,'NOVO TESTE','DFMVSKFNÇ',3.5,5,1,1,'KLNJ','mesa2.jpg','250365_6795.jpg','486892_75760366.jpg','mesa.jpg',70,'sim','2012-05-22',1,0,0,0,0),(9,'NOVO TESTE','DFMVSKFNÇ',350000,5,1,1,'KLNJ','nophoto.jpg','','','',2,'nao','2012-05-22',0,0,0,0,0),(10,'NOVO TESTE','DFMVSKFNÇ',35,5,1,2,'KLNJ','nophoto.jpg','','','',2,'nao','2012-05-22',0,0,0,0,0),(11,'NOVO TESTE','DFMVSKFNÇ',0.35,5,1,2,'KLNJ','nophoto.jpg','','','',2,'nao','2012-05-22',0,0,0,0,0),(12,'DESTAQUE = NÃO','TESTE DE PRODUTO DESTAQUE NÃO',20,5,1,1,'TESTE','bolapt.jpg','','','',2,'nao','2012-05-25',0,0,0,0,0),(13,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0,12,1,2,'TESTE','705365_21126813.jpg','snooker4.jpg','snooker2.jpg','bolas.jpg',29,'sim','2012-05-28',1,13,16,12,0),(14,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0,3,1,3,'TESTE','snooker1.jpg','529979_15346069.jpg','bolas.jpg','bolas2.jpg',74,'sim','2012-05-28',1,12,16,18,0),(15,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0,15,1,4,'TESTE','snooker2.jpg','529979_15346069.jpg','858850_77544392.jpg','snooker3.jpg',45,'sim','2012-05-28',1,13,14,15,0),(16,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,1,1,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(17,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,1,1,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(18,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,1,1,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(19,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,1,1,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(20,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,1,1,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(21,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,5,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(22,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,5,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(23,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,5,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(24,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,5,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(25,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,5,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(26,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,5,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(27,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,5,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(28,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,6,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(29,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,6,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(30,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,6,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(31,'TESTE DE PRODUTOS ','TESTE DE PRODUTOS PARA PAGINAÇÃO',0.3,0,2,6,'TESTE','bolapt.jpg','','','',3,'nao','2012-05-28',0,0,0,0,0),(126,'FOTOS','TESTE DE FOTOS',33,3,2,1,'TODAS','logo1.jpg','logofundo.jpg','foto_md3','foto_md4',0,'sim','2012-06-01',0,0,0,0,0),(127,'FOTOS','TESTE DE FOTOS',33,3,2,1,'TODAS','logo1.jpg','logofundo.jpg','logofundo2.jpg','webmurad.jpg',0,'sim','2012-06-01',0,0,0,0,0),(128,'FOTOS','TESTE DE FOTOS',33,3,2,1,'TODAS','snooker1.jpg','snooker2.jpg','snooker3.jpg','snooker4.jpg',-1,'sim','2012-06-01',0,0,0,0,0),(129,'TESTE RAFA','TESTE COM A RAFA',45,3,2,1,'LINDA ESPOSA LOIRA','DSC09317.JPG','DSC09276.JPG','DSC09321.JPG','DSC09342.JPG',-1,'sim','2012-06-07',0,0,0,0,0),(145,'TESTE 2 SEM FOTO 4','TESTE 2 COM FOTO',0,0,0,0,'','bolas2.jpg','bolas.jpg','705365_21126813.jpg','529979_15346069.jpg',5,'sim','2012-07-02',0,0,0,0,0),(147,'TESTE LISTA CATEGORIA','TESTE DE LISTAGEM DE SELECT SUBCATEGORIAS E CATEGORIAS',0,2,1,2,'CATEGORIA = 2 SUBCATEGORIA =3','','','','',3,'nao','2012-07-07',0,0,0,0,0),(148,'TESTE DE LISTA 2','TESTE DE LISTA 2',13,1,1,2,'','nophoto.jpg','nophoto.jpg','nophoto.jpg','nophoto.jpg',3,'nao','2012-07-07',0,0,0,0,0),(149,'MESA REFOR','MESA SUPER REFOR',50,2,1,1,'ACOMPANHA TACO E BOLINHAS','mesa2.jpg','mesa.jpg','snooker4.jpg','snooker3.jpg',-2,'sim','2012-07-27',0,0,0,0,0),(150,'teste 150','INSERÇÃO DE PRODUTOS\r\n',50,32,1,3,'TESTE 200','nophoto.jpg','nophoto.jpg','nophoto.jpg','nophoto.jpg',2,'sim','2012-08-31',1,0,0,32,12),(151,'Acessórios de Bilhar','TACOS, BOLAS GIZ',85,2,1,4,'','snooker2.jpg','bolas2.jpg','529979_15346069.jpg','486892_75760366.jpg',-1,'sim','2012-09-20',1,12,15,18,0),(152,'MESA LOREM IPSUM','LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTEM VEL EUM IRIURE DOLOR IN HENDRERIT IN VULPUTATE VELIT ESSE MOLESTIE CONSEQUAT, VEL ILLUM DOLORE EU FEUGIAT NULLA FACILISIS AT VERO EROS ET ACCUMSAN ET IUSTO ODIO DIGNISSIM QUI BLANDIT PRAESENT LUPTATUM ZZRIL DELENIT AUGUE DUIS DOLORE TE FEUGAIT NULLA FACILISI.\r\nLOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTEM VEL EUM IRIURE DOLOR IN HENDRERIT IN VULPUTATE VELIT ESSE MOLESTIE CONSEQUAT, VEL ILLUM DOLORE EU FEUGIAT NULLA FACILISIS AT VERO EROS ET ACCUMSAN ET IUSTO ODIO DIGNISSIM QUI BLANDIT PRAESENT LUPTATUM ZZRIL DELENIT AUGUE DUIS DOLORE TE FEUGAIT NULLA FACILISI.',3450,50,1,1,'LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WI','600_10e9.jpg','250365_6795.jpg','mesa2.jpg','mesa.jpg',119,'sim','2012-09-24',1,30,40,29,0),(153,'PRODUTOS PAGINAÇÃO','TESTE DE ACENTUAÇÃO',79,4,1,4,'','nophoto.jpg','nophoto.jpg','nophoto.jpg','nophoto.jpg',70,'sim','2012-09-24',1,23,34,21,0),(154,'CORAÇÃO VALENTE','PRODUTO DO CORAÇÃO',12,3,1,3,'','snooker1.jpg','bolas2.jpg','486892_75760366.jpg','600_10e9.jpg',159,'sim','2012-09-24',1,14,12,13,0),(155,'CORA','DESCRI',1235,15,1,2,'PESO DEVER? SER EM GRAMAS','bolas.jpg','snooker2.jpg','snooker4.jpg','bolas.jpg',30,'sim','2012-09-24',1,0,0,0,0),(156,'ALTERA??O DE COLLA??O','LATIN1_SWEDISCH_CI',3245,3,1,3,'','bolas2.jpg','529979_15346069.jpg','858850_77544392.jpg','600_10e9.jpg',50,'sim','2012-09-24',1,14,34,4,0),(157,'ALTERA','REWRE',34,4,1,2,'','nophoto.jpg','nophoto.jpg','nophoto.jpg','nophoto.jpg',34,'sim','2012-09-24',1,0,0,0,0),(158,'ALTERAÇÃO DE COLLAÇÃO','ALTERA??O',34.35,2,1,3,'','nophoto.jpg','nophoto.jpg','nophoto.jpg','nophoto.jpg',23,'sim','2012-09-24',1,0,0,0,0),(159,'BOLãO','ALTERAçãO DE COLLAçãO',35.5,3,1,2,'','nophoto.jpg','nophoto.jpg','nophoto.jpg','nophoto.jpg',40,'sim','2012-09-24',1,0,0,0,0);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategorias`
--

DROP TABLE IF EXISTS `subcategorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategorias` (
  `cod_subcategoria` smallint(6) NOT NULL,
  `nome_subcategoria` varchar(60) CHARACTER SET latin1 NOT NULL,
  `cod_categoria` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategorias`
--

LOCK TABLES `subcategorias` WRITE;
/*!40000 ALTER TABLE `subcategorias` DISABLE KEYS */;
INSERT INTO `subcategorias` VALUES (1,'MESAS',1),(2,'TACOS',1),(3,'BOLAS',1),(4,'ACESSÓRIOS',1),(5,'MESAS',2),(2,'ACESSÓRIOS',2);
/*!40000 ALTER TABLE `subcategorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `nome_usuario` varchar(150) NOT NULL,
  `nivel_acesso` char(1) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `data_usuario` date DEFAULT NULL,
  PRIMARY KEY (`nome_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('ALMIR MURAD OLIVEIRA JUNIOR','A','e55e0ac006e4e83d7d9d9cd63e3a0ee42d1fb5d8','2012-07-04'),('RAFAELA FERNANDA OLIVEIRA LUCANO','B','a305270ddbce06b68cbca8e214cf9dd96e58d7b2','2012-07-04'),('FRANCISCO HUMBERTO GALLUCI ','A','afd74c64faa22577897e0a58c63750eababcd2b4','2012-08-13');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-30 16:45:22

