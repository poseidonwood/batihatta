-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: hybriddb
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

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
-- Table structure for table `domain`
--

DROP TABLE IF EXISTS `domain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_domain` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domain`
--

LOCK TABLES `domain` WRITE;
/*!40000 ALTER TABLE `domain` DISABLE KEYS */;
INSERT INTO `domain` VALUES (1,'http://localhost/batihatta/new/','Sistem Pendukung Keputusan : Pemilihan Lokasi Stand','Y');
/*!40000 ALTER TABLE `domain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_perb_kriteria`
--

DROP TABLE IF EXISTS `tb_perb_kriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_perb_kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nilai_banding` int(5) NOT NULL,
  `kriteria1` varchar(30) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `kriteria2` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_perb_kriteria`
--

LOCK TABLES `tb_perb_kriteria` WRITE;
/*!40000 ALTER TABLE `tb_perb_kriteria` DISABLE KEYS */;
INSERT INTO `tb_perb_kriteria` VALUES ('B01 ',1,'LOKASI','1. Sama penting dengan','LOKASI'),('B02 ',1,'LABA','1. Sama penting dengan','LABA'),('B03 ',1,'KEAMANAN','1. Sama penting dengan','KEAMANAN'),('B04 ',1,'BIAYA SEWA','1. Sama penting dengan','BIAYA SEWA'),('B05 ',1,'TATA LETAK','1. Sama penting dengan','TATA LETAK'),('B06 ',5,'KEAMANAN','5. Lebih penting dari','LOKASI');
/*!40000 ALTER TABLE `tb_perb_kriteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_total`
--

DROP TABLE IF EXISTS `tb_total`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_total` (
  `id_total` varchar(255) NOT NULL,
  `total_1` float NOT NULL,
  `total_2` float NOT NULL,
  `total_3` float NOT NULL,
  `total_4` float NOT NULL,
  `total_5` float NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_total`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_total`
--

LOCK TABLES `tb_total` WRITE;
/*!40000 ALTER TABLE `tb_total` DISABLE KEYS */;
INSERT INTO `tb_total` VALUES ('2020-06-29 23:35:14',18,17.5,10.75,5.56,1.79,'2020-06-30 00:03:07'),('3Cs8At',20,13,10,5.63,1.83,'2020-06-30 00:41:14'),('OCIWXB',17,16.5,11.83,3.45,2.23,'2020-06-30 00:43:11'),('rEOWRX',18,18.5,12,5.43,1.84,'2020-06-30 00:53:59'),('vxKmcJ',17,19,14.66,5.44,1.76,'2020-06-30 00:48:17'),('XKEcg7',17,16.5,11.83,3.45,2.23,'2020-06-30 00:42:41');
/*!40000 ALTER TABLE `tb_total` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_alternatif`
--

DROP TABLE IF EXISTS `tbl_alternatif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_alternatif` (
  `id_alternatif` int(15) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `pembagi` float DEFAULT NULL,
  `lokasi` float DEFAULT NULL,
  `laba` float DEFAULT NULL,
  `keamanan` float DEFAULT NULL,
  `biaya_sewa` float DEFAULT NULL,
  `tata_letak` float DEFAULT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_alternatif`
--

LOCK TABLES `tbl_alternatif` WRITE;
/*!40000 ALTER TABLE `tbl_alternatif` DISABLE KEYS */;
INSERT INTO `tbl_alternatif` VALUES (1,'Test',1,2,3,4,5,6);
/*!40000 ALTER TABLE `tbl_alternatif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_bobot`
--

DROP TABLE IF EXISTS `tbl_bobot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bobot` (
  `id_bobot` int(100) NOT NULL AUTO_INCREMENT,
  `id_total` varchar(100) DEFAULT NULL,
  `p_vector` float DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  `eigen_v` float DEFAULT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `status_bobot` varchar(255) DEFAULT NULL,
  `status_hitung` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bobot`
--

LOCK TABLES `tbl_bobot` WRITE;
/*!40000 ALTER TABLE `tbl_bobot` DISABLE KEYS */;
INSERT INTO `tbl_bobot` VALUES (1,'rEOWRX',NULL,NULL,NULL,'2020-06-29 23:05:02','MENCARI NILAI BOBOT','INPUT BOBOT');
/*!40000 ALTER TABLE `tbl_bobot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kriteria`
--

DROP TABLE IF EXISTS `tbl_kriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(20) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kriteria`
--

LOCK TABLES `tbl_kriteria` WRITE;
/*!40000 ALTER TABLE `tbl_kriteria` DISABLE KEYS */;
INSERT INTO `tbl_kriteria` VALUES (4,'LOKASI'),(5,'LABA'),(6,'KEAMANAN'),(7,'BIAYA SEWA'),(8,'TATA LETAK');
/*!40000 ALTER TABLE `tbl_kriteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_topsis`
--

DROP TABLE IF EXISTS `tbl_topsis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_topsis` (
  `aplus` int(11) NOT NULL,
  `amin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_topsis`
--

LOCK TABLES `tbl_topsis` WRITE;
/*!40000 ALTER TABLE `tbl_topsis` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_topsis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin@admin.com','21232f297a57a5a743894a0e4a801fc3','Y');
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

-- Dump completed on 2020-06-30 13:54:55
