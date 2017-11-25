-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: qepd
-- ------------------------------------------------------
-- Server version	5.5.58-0ubuntu0.14.04.1

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
-- Table structure for table `capacidades`
--

DROP TABLE IF EXISTS `capacidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capacidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adultos` int(11) NOT NULL,
  `parvulos` int(11) NOT NULL,
  `reducciones` int(11) NOT NULL,
  `anforas` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capacidades`
--

LOCK TABLES `capacidades` WRITE;
/*!40000 ALTER TABLE `capacidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `capacidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cinerarios`
--

DROP TABLE IF EXISTS `cinerarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cinerarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sala` tinyint(1) NOT NULL,
  `capilla` tinyint(1) NOT NULL,
  `podium` tinyint(1) NOT NULL,
  `liturgia` tinyint(1) NOT NULL,
  `amplificacion` tinyint(1) NOT NULL,
  `diacono` tinyint(1) NOT NULL,
  `coro` int(11) DEFAULT NULL,
  `cafeteria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ceremonia` tinyint(1) NOT NULL,
  `anforaincl` tinyint(1) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cinerarios`
--

LOCK TABLES `cinerarios` WRITE;
/*!40000 ALTER TABLE `cinerarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `cinerarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `componentes`
--

DROP TABLE IF EXISTS `componentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `componentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_view` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `componentes`
--

LOCK TABLES `componentes` WRITE;
/*!40000 ALTER TABLE `componentes` DISABLE KEYS */;
INSERT INTO `componentes` VALUES (1,'Urna',9,'urnas/add','urnas/view/'),(2,'Velatorio',9,'velatorios/add','velatorios/view/'),(3,'Traslado',9,'traslados/add','traslados/view/'),(4,'Crematorio',10,'crematorio/add','crematorio/view/'),(5,'Anfora',10,'anforas/add','anforas/view/'),(6,'Sepultacion',11,'sepultaciones/add','sepultaciones/view/'),(7,'Capacidad',12,'capacidades/add','capacidades/view/'),(8,'Construccion',12,'construcciones/add','construcciones/view/'),(9,'Ubicacion',12,'ubicaciones/add','ubicaciones/view/'),(10,'Mantencion',12,'mantenciones/add','mantenciones/view/');
/*!40000 ALTER TABLE `componentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunas`
--

DROP TABLE IF EXISTS `comunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunas`
--

LOCK TABLES `comunas` WRITE;
/*!40000 ALTER TABLE `comunas` DISABLE KEYS */;
INSERT INTO `comunas` VALUES (2,'Providencia','13'),(3,'Estación Central','13'),(4,'La Florida','13'),(5,'Peñalolén','13');
/*!40000 ALTER TABLE `comunas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `condiciones`
--

DROP TABLE IF EXISTS `condiciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condiciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `formapago` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plazopago` int(11) DEFAULT NULL,
  `compraanticipada` int(11) DEFAULT NULL,
  `segurodeceso` int(11) DEFAULT NULL,
  `convenios` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descuentocol` int(11) DEFAULT NULL,
  `descuentonicho` int(11) DEFAULT NULL,
  `pensiones` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condiciones`
--

LOCK TABLES `condiciones` WRITE;
/*!40000 ALTER TABLE `condiciones` DISABLE KEYS */;
INSERT INTO `condiciones` VALUES (1,1,56500,'Contado',1,1,1,NULL,0,0,1),(2,2,98900,'3 Cheques',1,1,1,NULL,0,0,2);
/*!40000 ALTER TABLE `condiciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `construcciones`
--

DROP TABLE IF EXISTS `construcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `construcciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_construccion_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `terminacion_id` int(11) NOT NULL,
  `grabado` tinyint(1) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `construcciones`
--

LOCK TABLES `construcciones` WRITE;
/*!40000 ALTER TABLE `construcciones` DISABLE KEYS */;
INSERT INTO `construcciones` VALUES (1,1,1,1,1,1);
/*!40000 ALTER TABLE `construcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cotizaciones`
--

DROP TABLE IF EXISTS `cotizaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cotizaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destinatario_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `cliente` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `difunto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(10) NOT NULL,
  `estatura` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cotizaciones`
--

LOCK TABLES `cotizaciones` WRITE;
/*!40000 ALTER TABLE `cotizaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `cotizaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinatarios`
--

DROP TABLE IF EXISTS `destinatarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinatarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinatarios`
--

LOCK TABLES `destinatarios` WRITE;
/*!40000 ALTER TABLE `destinatarios` DISABLE KEYS */;
INSERT INTO `destinatarios` VALUES (1,'Bebé'),(2,'Niño'),(3,'Adulto');
/*!40000 ALTER TABLE `destinatarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_empresa_id` int(11) NOT NULL,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (4,'Funerarias Prat','contacto@funerariasprat.cl','78963872-5',1,2,'2017-10-16','2017-10-16'),(5,'Cementerio Parque del Recuerdo','contacto@parquerecuerdo.cl','82745600-2',1,1,'2017-10-16','2017-10-16'),(6,'Funerarias Coloma','contacto@fcoloma.cl','77965871-3',1,2,'2017-10-16','2017-10-16'),(7,'Funerarias La Paz','contacto@lapaz.cl','45625897-6',1,2,'2017-10-16','2017-10-16'),(8,'Parque Metropolitano','contacto@metropolitano.cl','65987400-9',1,1,'2017-10-16','2017-10-16'),(9,'Flores Santa Lucia','contacto@floresstalucia.cl','6983210-6',1,3,'2017-10-16','2017-10-16'),(10,'Camino del Sendero','contacto@cdelsendero.cl','56983200-1',1,1,'2017-10-16','2017-10-16');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `componente_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'Imagen 1','upl_593710062b241.png',1,1),(2,'Imagen 2','upl_5937109b6b6fe.png',3,2),(3,'Urna 1','upl_59b8015e6c67a.jpg',1,1);
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mantenciones`
--

DROP TABLE IF EXISTS `mantenciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mantenciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cobro` tinyint(1) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mantenciones`
--

LOCK TABLES `mantenciones` WRITE;
/*!40000 ALTER TABLE `mantenciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `mantenciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiales`
--

DROP TABLE IF EXISTS `materiales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiales`
--

LOCK TABLES `materiales` WRITE;
/*!40000 ALTER TABLE `materiales` DISABLE KEYS */;
INSERT INTO `materiales` VALUES (1,'Concreto armado'),(2,'Ladrillo'),(3,'Otro');
/*!40000 ALTER TABLE `materiales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos`
--

DROP TABLE IF EXISTS `periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos`
--

LOCK TABLES `periodos` WRITE;
/*!40000 ALTER TABLE `periodos` DISABLE KEYS */;
/*!40000 ALTER TABLE `periodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planes`
--

DROP TABLE IF EXISTS `planes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_plan_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `destinatario_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planes`
--

LOCK TABLES `planes` WRITE;
/*!40000 ALTER TABLE `planes` DISABLE KEYS */;
INSERT INTO `planes` VALUES (1,'Plan estrellas','P0001',1,9,6,3,2,'2017-10-24 12:37:42','2017-11-16 15:20:55'),(2,'Plan  Superior','P0002',3,9,6,3,1,'2017-10-24 14:58:55','2017-10-24 15:37:40'),(3,'Plan de Sepulturas','P004',1,11,10,3,2,'2017-11-20 17:08:10','2017-11-20 17:08:10'),(4,'Plan Cinerario','P005',1,10,8,3,2,'2017-11-24 18:06:40','2017-11-24 18:06:40'),(5,'Plan Cinerario 2','P005',2,10,5,3,2,'2017-11-24 18:07:08','2017-11-24 18:07:08');
/*!40000 ALTER TABLE `planes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regiones`
--

DROP TABLE IF EXISTS `regiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regiones`
--

LOCK TABLES `regiones` WRITE;
/*!40000 ALTER TABLE `regiones` DISABLE KEYS */;
INSERT INTO `regiones` VALUES (1,'I Tarapacá'),(2,'II Antofagasta'),(3,'III Atacama'),(4,'IV Coquimbo'),(5,'V Valparaiso'),(6,'VI OHiggins'),(7,'VII Maule'),(8,'VIII Bio Bio'),(9,'IX Araucanía'),(10,'X Los Lagos'),(11,'XI Aysén'),(12,'XII Magallanes'),(13,'XIII Metropolitana'),(14,'XIV Los Rios'),(15,'XV Arica y Parinacota');
/*!40000 ALTER TABLE `regiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador'),(2,'nuevo'),(3,'Usuario'),(4,'ClienteN'),(5,'Otro'),(6,'Nuevo'),(7,'Manuel');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sedes`
--

DROP TABLE IF EXISTS `sedes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sedes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sector` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ubicacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  `comuna_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sedes`
--

LOCK TABLES `sedes` WRITE;
/*!40000 ALTER TABLE `sedes` DISABLE KEYS */;
INSERT INTO `sedes` VALUES (1,'Principal','Agustinas','1291',NULL,'Centro',6,1),(2,'Agustinas','Agustinas','1292','','0',6,3);
/*!40000 ALTER TABLE `sedes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sepultaciones`
--

DROP TABLE IF EXISTS `sepultaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sepultaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sala` tinyint(1) NOT NULL,
  `capilla` tinyint(1) NOT NULL,
  `liturgia` tinyint(1) NOT NULL,
  `toldos` int(11) DEFAULT NULL,
  `sillas` int(11) DEFAULT NULL,
  `amplificacion` tinyint(1) NOT NULL,
  `diacono` tinyint(1) NOT NULL,
  `coro` int(11) DEFAULT NULL,
  `cafeteria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sepultaciones`
--

LOCK TABLES `sepultaciones` WRITE;
/*!40000 ALTER TABLE `sepultaciones` DISABLE KEYS */;
INSERT INTO `sepultaciones` VALUES (2,1,1,2,1,50,2,1,0,'1',3);
/*!40000 ALTER TABLE `sepultaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (9,'Funerarios',2),(10,'Cinerario',1),(11,'Sepultación',1),(12,'Sepulturas',1);
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soluciones`
--

DROP TABLE IF EXISTS `soluciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soluciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solucion` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `anios` int(11) DEFAULT NULL,
  `tipo_solucion` int(11) NOT NULL,
  `tipo_plan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soluciones`
--

LOCK TABLES `soluciones` WRITE;
/*!40000 ALTER TABLE `soluciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `soluciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefonos`
--

DROP TABLE IF EXISTS `telefonos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sede_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefonos`
--

LOCK TABLES `telefonos` WRITE;
/*!40000 ALTER TABLE `telefonos` DISABLE KEYS */;
INSERT INTO `telefonos` VALUES (2,'1234567892',2),(3,'12345678',2),(4,'956872356',6),(6,'988051289',1),(7,'226789654',2);
/*!40000 ALTER TABLE `telefonos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terminaciones`
--

DROP TABLE IF EXISTS `terminaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terminaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terminaciones`
--

LOCK TABLES `terminaciones` WRITE;
/*!40000 ALTER TABLE `terminaciones` DISABLE KEYS */;
INSERT INTO `terminaciones` VALUES (1,'Granito'),(2,'Mármol'),(3,'Concreto en bruto'),(4,'Pasto'),(5,'Tierra'),(6,'Otro');
/*!40000 ALTER TABLE `terminaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_construcciones`
--

DROP TABLE IF EXISTS `tipo_construcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_construcciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_construcciones`
--

LOCK TABLES `tipo_construcciones` WRITE;
/*!40000 ALTER TABLE `tipo_construcciones` DISABLE KEYS */;
INSERT INTO `tipo_construcciones` VALUES (1,'Bajo tierra'),(2,'Semi enterrada'),(3,'Edificada');
/*!40000 ALTER TABLE `tipo_construcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_empresas`
--

DROP TABLE IF EXISTS `tipo_empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_empresas`
--

LOCK TABLES `tipo_empresas` WRITE;
/*!40000 ALTER TABLE `tipo_empresas` DISABLE KEYS */;
INSERT INTO `tipo_empresas` VALUES (1,'Cementerio'),(2,'Funeraria'),(3,'Floristería'),(4,'Otro'),(5,'Cinerario');
/*!40000 ALTER TABLE `tipo_empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_planes`
--

DROP TABLE IF EXISTS `tipo_planes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_planes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_planes`
--

LOCK TABLES `tipo_planes` WRITE;
/*!40000 ALTER TABLE `tipo_planes` DISABLE KEYS */;
INSERT INTO `tipo_planes` VALUES (1,'Básico'),(2,'Medio'),(3,'Superior');
/*!40000 ALTER TABLE `tipo_planes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_sepulturas`
--

DROP TABLE IF EXISTS `tipo_sepulturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_sepulturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_sepulturas`
--

LOCK TABLES `tipo_sepulturas` WRITE;
/*!40000 ALTER TABLE `tipo_sepulturas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_sepulturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_soluciones`
--

DROP TABLE IF EXISTS `tipo_soluciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_soluciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_soluciones`
--

LOCK TABLES `tipo_soluciones` WRITE;
/*!40000 ALTER TABLE `tipo_soluciones` DISABLE KEYS */;
INSERT INTO `tipo_soluciones` VALUES (1,'Bóveda'),(2,'Nicho'),(3,'Mausoleo'),(4,'Columbario'),(5,'Patio Común');
/*!40000 ALTER TABLE `tipo_soluciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_ubicaciones`
--

DROP TABLE IF EXISTS `tipo_ubicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_ubicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_ubicaciones`
--

LOCK TABLES `tipo_ubicaciones` WRITE;
/*!40000 ALTER TABLE `tipo_ubicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_ubicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traslados`
--

DROP TABLE IF EXISTS `traslados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traslados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instalacion` tinyint(1) NOT NULL,
  `funeral` tinyint(1) NOT NULL,
  `conflores` tinyint(1) NOT NULL,
  `acompanamiento` tinyint(4) NOT NULL,
  `pasajeros` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traslados`
--

LOCK TABLES `traslados` WRITE;
/*!40000 ALTER TABLE `traslados` DISABLE KEYS */;
INSERT INTO `traslados` VALUES (1,2,1,1,1,100,1);
/*!40000 ALTER TABLE `traslados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_ubicacion_id` int(11) NOT NULL,
  `estacionamientos` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicaciones`
--

LOCK TABLES `ubicaciones` WRITE;
/*!40000 ALTER TABLE `ubicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urnas`
--

DROP TABLE IF EXISTS `urnas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `urnas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `medidas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `terminaciones` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL,
  `componente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urnas`
--

LOCK TABLES `urnas` WRITE;
/*!40000 ALTER TABLE `urnas` DISABLE KEYS */;
INSERT INTO `urnas` VALUES (2,'Modelo AB','200 x 300 cm','Madera','enlacado','cafe',1,1);
/*!40000 ALTER TABLE `urnas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `roles_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Segundo','Galdames','segundogaldames@gmail.com','ad4bb92f93e69b89cd82d4308c6026622a6be163','2017-04-18','2017-04-18',1),(2,'Jose','Perez','jose@gmail.com','ad4bb92f93e69b89cd82d4308c6026622a6be163','2017-04-18','2017-04-18',3);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `velatorios`
--

DROP TABLE IF EXISTS `velatorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `velatorios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tramites` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `asesor` tinyint(1) NOT NULL,
  `sala` tinyint(1) NOT NULL,
  `capilla` tinyint(1) NOT NULL,
  `cirios` int(11) DEFAULT NULL,
  `portacirios` int(11) DEFAULT NULL,
  `cruces` int(11) DEFAULT NULL,
  `florescanastos` int(11) DEFAULT NULL,
  `florescubreurnas` int(11) DEFAULT NULL,
  `condolencias` int(11) DEFAULT NULL,
  `parroco` tinyint(1) NOT NULL,
  `coro` int(11) DEFAULT NULL,
  `avisosprensa` int(11) DEFAULT NULL,
  `tarjetas` int(11) DEFAULT NULL,
  `cafeteria` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `velatorios`
--

LOCK TABLES `velatorios` WRITE;
/*!40000 ALTER TABLE `velatorios` DISABLE KEYS */;
INSERT INTO `velatorios` VALUES (3,'Inscripciones Registro Civil',2,1,2,4,4,2,0,0,3,2,0,0,100,1,2);
/*!40000 ALTER TABLE `velatorios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-25  0:09:14
