-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table db_pwbs.tb_mahasiswa: ~5 rows (approximately)
/*!40000 ALTER TABLE `tb_mahasiswa` DISABLE KEYS */;
INSERT INTO `tb_mahasiswa` (`id`, `npm`, `nama`, `telepon`, `jurusan`) VALUES
	(1, '17312261', 'olid', '082372247859', 'IF'),
	(2, '17243544', 'ollldsf', '08214352', 'TI'),
	(3, '129083021', 'kholid', '023834223', 'TI'),
	(4, '1465465', 'Jokowazza', '023834223', 'IF'),
	(5, '14654546', 'Jokowaz', '023834223', 'SI');
/*!40000 ALTER TABLE `tb_mahasiswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
