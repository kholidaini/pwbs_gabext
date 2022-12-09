-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_pwbs
CREATE DATABASE IF NOT EXISTS `db_pwbs` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `db_pwbs`;

-- Dumping structure for table db_pwbs.tb_mahasiswa
CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `jurusan` enum('IF','SI','TI','TK','SIA') COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table db_pwbs.tb_mahasiswa: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_mahasiswa` DISABLE KEYS */;
INSERT INTO `tb_mahasiswa` (`id`, `npm`, `nama`, `telepon`, `jurusan`) VALUES
	(30, '14561223', 'designer pc', '12389000928', 'SI'),
	(31, '20938490', 'achilles', '902380923', 'IF');
/*!40000 ALTER TABLE `tb_mahasiswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
