-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for brahmastra
CREATE DATABASE IF NOT EXISTS `brahmastra` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `brahmastra`;

-- Dumping structure for table brahmastra.event_register
CREATE TABLE IF NOT EXISTS `event_register` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(6) DEFAULT NULL,
  `user_id` varchar(3) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `phone` varchar(10) DEFAULT NULL,
  `dept` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `college` varchar(50) NOT NULL DEFAULT '',
  `year` varchar(50) NOT NULL DEFAULT '',
  `event_dept` varchar(50) DEFAULT NULL,
  `event_name` varchar(50) NOT NULL DEFAULT '',
  `tran_id` varchar(50) DEFAULT NULL,
  `insert_time` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table brahmastra.event_register: 0 rows
/*!40000 ALTER TABLE `event_register` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_register` ENABLE KEYS */;

-- Dumping structure for table brahmastra.login_register
CREATE TABLE IF NOT EXISTS `login_register` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT '',
  `event_status` int DEFAULT '0',
  `insert_date` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table brahmastra.login_register: 2 rows
/*!40000 ALTER TABLE `login_register` DISABLE KEYS */;
INSERT INTO `login_register` (`id`, `username`, `email`, `password`, `event_status`, `insert_date`) VALUES
	(1, 'MATHAN RAJ M', 'mathanrajm2003@gmail.com', '1234', 1, '2023-08-21 07:10:43'),
	(2, 'hemasundar', 'spideysundar2004@gmail.com', '1234', 0, '2023-08-22 08:34:43');
/*!40000 ALTER TABLE `login_register` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
