-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hospital
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor` (
  `emp_id` varchar(25) NOT NULL DEFAULT '',
  `specialization` varchar(20) DEFAULT NULL,
  `ref_id` varchar(25) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  CONSTRAINT `doctor_ibfk_4` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE,
  CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE,
  CONSTRAINT `doctor_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES ('SandyDoc','Physician','None','Permanent');
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `emp_id` varchar(30) NOT NULL DEFAULT '',
  `age` int(3) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  CONSTRAINT `employee_ibfk_5` FOREIGN KEY (`emp_id`) REFERENCES `user_registration` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `user_registration` (`user_id`),
  CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `user_registration` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `user_registration` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`emp_id`) REFERENCES `user_registration` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('N',12,'9876543210_','NU','M','Enter text here...SHVJBHKZVBKDC','56','2014-11-12','Enter text here...ASOI;LKCINAS;','Nurse'),('Nurse',22,'8499998982_9949005988','NurseIam','F','Kadapa','  2000','2014-11-12','Intermediate','Nurse'),('SandyDoc',19,'8499998982_9949005988',' Sandy_Employee','M','Hyderabad',' 20000','2014-11-12','MBBS','Doctor'),('SandyRecep',28,'8499998982_9298355311','Sandy_Receptionist','M','Vijayawada','6000','2014-11-12','Intermediate','Receptionist');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `prod_id` varchar(50) NOT NULL DEFAULT '',
  `price` varchar(25) DEFAULT NULL,
  `company` varchar(25) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `quantity` int(6) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES ('100','Dumbells','Vibro','kafj',1),('tha','20000','xyz','ThreadMill',1),('weight machin','2000','jh','Enter text here...',20);
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicines`
--

DROP TABLE IF EXISTS `medicines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicines` (
  `med_id` varchar(25) NOT NULL DEFAULT '',
  `price` int(5) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicines`
--

LOCK TABLES `medicines` WRITE;
/*!40000 ALTER TABLE `medicines` DISABLE KEYS */;
INSERT INTO `medicines` VALUES ('1',200,'Feverones',0),('5',2000,'sinus ',1),('9',250,'Cough',2);
/*!40000 ALTER TABLE `medicines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `patient_id` varchar(15) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `date_admitted` date DEFAULT NULL,
  `treatment_period` date DEFAULT NULL,
  `info` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`patient_id`),
  CONSTRAINT `patient_ibfk_4` FOREIGN KEY (`patient_id`) REFERENCES `user_registration` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `user_registration` (`user_id`),
  CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `user_registration` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`patient_id`) REFERENCES `user_registration` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES ('SandyPat',20,'8888888888_9999999999',' Sandeep_Patient','M','Kadapa','2014-11-12','2014-11-12','Fever');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prescription` (
  `pres_id` varchar(50) NOT NULL DEFAULT '',
  `patient_id` varchar(50) DEFAULT NULL,
  `medicine_id` varchar(500) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `emp_id` varchar(50) DEFAULT NULL,
  `med_id` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`pres_id`),
  KEY `medicine_id` (`medicine_id`),
  KEY `emp_id` (`emp_id`),
  KEY `patient_id` (`patient_id`),
  CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `prescription_ibfk_10` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE,
  CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  CONSTRAINT `prescription_ibfk_3` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `prescription_ibfk_4` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE,
  CONSTRAINT `prescription_ibfk_5` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE,
  CONSTRAINT `prescription_ibfk_6` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`med_id`),
  CONSTRAINT `prescription_ibfk_7` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE,
  CONSTRAINT `prescription_ibfk_8` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE,
  CONSTRAINT `prescription_ibfk_9` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prescription`
--

LOCK TABLES `prescription` WRITE;
/*!40000 ALTER TABLE `prescription` DISABLE KEYS */;
INSERT INTO `prescription` VALUES ('100','SandyPat','5','Get cured!','SandyDoc','a:4:{i:0;s:1:\"5\";i:1;s:1:\"1\";i:2;s:1:\"9\";i:3;s:1:\"2\";}');
/*!40000 ALTER TABLE `prescription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `record_no` varchar(10) NOT NULL DEFAULT '',
  `patient_id` varchar(25) DEFAULT NULL,
  `emp_id` varchar(25) DEFAULT NULL,
  `record_info` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`record_no`),
  KEY `emp_id` (`emp_id`),
  KEY `patient_id` (`patient_id`),
  CONSTRAINT `record_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `record_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  CONSTRAINT `record_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE,
  CONSTRAINT `record_ibfk_4` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE,
  CONSTRAINT `record_ibfk_5` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE,
  CONSTRAINT `record_ibfk_6` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `record_ibfk_7` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE,
  CONSTRAINT `record_ibfk_8` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES ('11','SandyPat','SandyRecep','Patient Information');
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_registration` (
  `user_id` varchar(100) NOT NULL,
  `passwd` varchar(36) DEFAULT NULL,
  `firstlogin` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_registration`
--

LOCK TABLES `user_registration` WRITE;
/*!40000 ALTER TABLE `user_registration` DISABLE KEYS */;
INSERT INTO `user_registration` VALUES ('aaa','c4ca4238a0b923820dcc509a6f75849b','1'),('admin','202cb962ac59075b964b07152d234b70',NULL),('N','c4ca4238a0b923820dcc509a6f75849b','2n'),('Nurse','202cb962ac59075b964b07152d234b70','2n'),('qwerty1','202cb962ac59075b964b07152d234b70','1'),('SandyDoc','202cb962ac59075b964b07152d234b70','2d'),('SandyPat','202cb962ac59075b964b07152d234b70','2p'),('SandyRecep','202cb962ac59075b964b07152d234b70','2r'),('Sandy_Doctor','202cb962ac59075b964b07152d234b70','1');
/*!40000 ALTER TABLE `user_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wards`
--

DROP TABLE IF EXISTS `wards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wards` (
  `ward_id` varchar(20) DEFAULT NULL,
  `patient_id` varchar(25) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `extension` int(10) DEFAULT NULL,
  `nurse_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wards`
--

LOCK TABLES `wards` WRITE;
/*!40000 ALTER TABLE `wards` DISABLE KEYS */;
INSERT INTO `wards` VALUES ('101','','General',2000,20,''),('102','None','General',1000,10,'Nurse'),('111','','General',2000,15,'N');
/*!40000 ALTER TABLE `wards` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-12 15:10:59
