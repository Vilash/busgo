-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: bus_reservations_system
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `route`
--

DROP TABLE IF EXISTS `route`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`ticket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route`
--

LOCK TABLES `route` WRITE;
/*!40000 ALTER TABLE `route` DISABLE KEYS */;
INSERT INTO `route` VALUES (1,13,1,'2015-09-03'),(2,12,103,'2015-09-03'),(3,4,23,'2015-09-03'),(4,9,50,'2015-09-03'),(5,9,109,'2015-09-03'),(6,12,51,'2015-09-03'),(7,11,17,'2015-09-03'),(8,7,99,'2015-09-03'),(9,11,30,'2015-09-03'),(10,10,123,'2015-09-03'),(11,6,23,'2015-09-03'),(12,8,67,'2015-09-03'),(13,6,119,'2015-09-03'),(14,11,97,'2015-09-03'),(15,4,39,'2015-09-03'),(16,13,98,'2013-05-05'),(17,6,98,'2013-05-05');
/*!40000 ALTER TABLE `route` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (1,'Altinho','Arpora',5),(2,'Altinho','Bicholim',6),(3,'Altinho','Batim',7),(4,'Altinho','Canacona',8),(5,'Altinho','Curchorem',9),(6,'Altinho','Dabal',10),(7,'Altinho','Farmagudi',11),(8,'Altinho','Panaji',12),(9,'Altinho','Vasco',13),(10,'Altinho','Margao',14),(11,'Altinho','Verna',15),(12,'Arpora','Altinho',16),(13,'Arpora','Bicholim',17),(14,'Arpora','Batim',18),(15,'Arpora','Canacona',19),(16,'Arpora','Curchorem',20),(17,'Arpora','Dabal',21),(18,'Arpora','Farmagudi',22),(19,'Arpora','Panaji',23),(20,'Arpora','Vasco',24),(21,'Arpora','Margao',25),(22,'Arpora','Verna',26),(23,'Bicholim','Altinho',27),(24,'Bicholim','Arpora',28),(25,'Bicholim','Batim',29),(26,'Bicholim','Canacona',30),(27,'Bicholim','Curchorem',31),(28,'Bicholim','Dabal',32),(29,'Bicholim','Farmagudi',33),(30,'Bicholim','Panaji',34),(31,'Bicholim','Vasco',35),(32,'Bicholim','Margao',36),(33,'Bicholim','Verna',37),(34,'Batim','Altinho',38),(35,'Batim','Arpora',39),(36,'Batim','Bicholim',40),(37,'Batim','Canacona',41),(38,'Batim','Curchorem',42),(39,'Batim','Dabal',43),(40,'Batim','Farmagudi',44),(41,'Batim','Panaji',45),(42,'Batim','Vasco',46),(43,'Batim','Margao',47),(44,'Batim','Verna',48),(45,'Canacona','Altinho',49),(46,'Canacona','Arpora',50),(47,'Canacona','Bicholim',51),(48,'Canacona','Batim',52),(49,'Canacona','Curchorem',53),(50,'Canacona','Dabal',54),(51,'Canacona','Farmagudi',55),(52,'Canacona','Panaji',56),(53,'Canacona','Vasco',57),(54,'Canacona','Margao',58),(55,'Canacona','Verna',59),(56,'Curchorem','Altinho',60),(57,'Curchorem','Arpora',61),(58,'Curchorem','Bicholim',62),(59,'Curchorem','Batim',63),(60,'Curchorem','Canacona',64),(61,'Curchorem','Dabal',65),(62,'Curchorem','Farmagudi',66),(63,'Curchorem','Panaji',67),(64,'Curchorem','Vasco',68),(65,'Curchorem','Margao',69),(66,'Curchorem','Verna',70),(67,'Dabal','Altinho',71),(68,'Dabal','Arpora',72),(69,'Dabal','Bicholim',73),(70,'Dabal','Batim',74),(71,'Dabal','Canacona',75),(72,'Dabal','Curchorem',76),(73,'Dabal','Farmagudi',77),(74,'Dabal','Panaji',78),(75,'Dabal','Vasco',79),(76,'Dabal','Margao',80),(77,'Dabal','Verna',81),(78,'Farmagudi','Altinho',82),(79,'Farmagudi','Arpora',83),(80,'Farmagudi','Bicholim',84),(81,'Farmagudi','Batim',85),(82,'Farmagudi','Canacona',86),(83,'Farmagudi','Curchorem',87),(84,'Farmagudi','Dabal',88),(85,'Farmagudi','Panaji',89),(86,'Farmagudi','Vasco',90),(87,'Farmagudi','Margao',91),(88,'Farmagudi','Verna',92),(89,'Panaji','Altinho',93),(90,'Panaji','Arpora',94),(91,'Panaji','Bicholim',95),(92,'Panaji','Batim',96),(93,'Panaji','Canacona',97),(94,'Panaji','Curchorem',98),(95,'Panaji','Dabal',99),(96,'Panaji','Farmagudi',100),(97,'Panaji','Vasco',101),(98,'Panaji','Margao',102),(99,'Panaji','Verna',103),(100,'Vasco','Altinho',104),(101,'Vasco','Arpora',105),(102,'Vasco','Bicholim',106),(103,'Vasco','Batim',107),(104,'Vasco','Canacona',108),(105,'Vasco','Curchorem',109),(106,'Vasco','Dabal',110),(107,'Vasco','Farmagudi',111),(108,'Vasco','Panaji',112),(109,'Vasco','Margao',113),(110,'Vasco','Verna',114),(111,'Margao','Altinho',115),(112,'Margao','Arpora',116),(113,'Margao','Bicholim',117),(114,'Margao','Batim',118),(115,'Margao','Canacona',119),(116,'Margao','Curchorem',120),(117,'Margao','Dabal',121),(118,'Margao','Farmagudi',122),(119,'Margao','Panaji',123),(120,'Margao','Vasco',124),(121,'Margao','Verna',125),(122,'Verna','Altinho',126),(123,'Verna','Arpora',127),(124,'Verna','Bicholim',128),(125,'Verna','Batim',129),(126,'Verna','Canacona',130),(127,'Verna','Curchorem',131),(128,'Verna','Dabal',132),(129,'Verna','Farmagudi',133),(130,'Verna','Panaji',134),(131,'Verna','Vasco',135),(132,'Verna','Margao',136);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Jag_Bajwa','secret password',25,'m'),(2,'Anand_Subramanian','abra cadabra',35,'f'),(3,'Asura_Bajwa','hocus pocus',12,'x'),(4,'Markandeya_Soni','secret',15,'m'),(5,'Kabandha_Saini','password',59,'f'),(6,'Ranjan_Chopra','internet',65,'x'),(7,'Purdy_Manna','secret password',28,'m'),(8,'Bhishma Dolma','abra cadabra',27,'f'),(9,'Tariq Deo','hocus pocus',55,'x'),(10,'Sanjiv Basak','secret',25,'m'),(11,'Vilas','secret',25,'m'),(13,'Rinkesh Patel','password',28,'m');
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

-- Dump completed on 2015-09-08 16:41:29
