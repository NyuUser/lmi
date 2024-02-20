-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: lmi_entrance_exam
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customerfile`
--

DROP TABLE IF EXISTS `customerfile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerfile` (
  `custcde` varchar(255) NOT NULL,
  `tercde` varchar(255) NOT NULL,
  `cusdsc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerfile`
--

LOCK TABLES `customerfile` WRITE;
/*!40000 ALTER TABLE `customerfile` DISABLE KEYS */;
INSERT INTO `customerfile` VALUES ('cust1','Malabon','customer 1'),('cust2','Navotas','customer 2'),('cust3','Caloocan','customer 3');
/*!40000 ALTER TABLE `customerfile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lmi_entrance_exam`
--

DROP TABLE IF EXISTS `lmi_entrance_exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lmi_entrance_exam` (
  `docnum` int(11) NOT NULL AUTO_INCREMENT,
  `trndte` datetime NOT NULL,
  `custcde` varchar(255) NOT NULL,
  `trntot` int(11) NOT NULL,
  `recid` int(11) DEFAULT NULL,
  `custdsc` varchar(255) NOT NULL,
  PRIMARY KEY (`docnum`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lmi_entrance_exam`
--

LOCK TABLES `lmi_entrance_exam` WRITE;
/*!40000 ALTER TABLE `lmi_entrance_exam` DISABLE KEYS */;
INSERT INTO `lmi_entrance_exam` VALUES (1,'2024-02-20 00:00:00','cust1',1234,1,'customer 1'),(2,'2024-02-21 00:00:00','cust2',5431,2,'customer 2'),(3,'2024-02-22 00:00:00','cust3',1112,3,'customer 3'),(4,'2024-02-23 00:00:00','cust1',1111,4,'customer 1');
/*!40000 ALTER TABLE `lmi_entrance_exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `territoryfile`
--

DROP TABLE IF EXISTS `territoryfile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `territoryfile` (
  `tercde` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `territoryfile`
--

LOCK TABLES `territoryfile` WRITE;
/*!40000 ALTER TABLE `territoryfile` DISABLE KEYS */;
INSERT INTO `territoryfile` VALUES ('Malabon'),('Navotas'),('Caloocan');
/*!40000 ALTER TABLE `territoryfile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-20 10:13:10
