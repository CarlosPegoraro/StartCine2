-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para startcine
CREATE DATABASE IF NOT EXISTS `startcine` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `startcine`;

-- Copiando estrutura para tabela startcine.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela startcine.users: ~11 rows (aproximadamente)
INSERT INTO `users` (`ID`, `NAME`, `EMAIL`, `PASS`) VALUES
	(10, 'carlos', 'cepldudu@gmail.com', '1401'),
	(11, 'ed', '14@gmail.com', '1401'),
	(12, '25', '25@gmail.com', '1401'),
	(13, '24@gmail', '24@gmail', '1401'),
	(14, 'da', 'da@da.com', '1401'),
	(15, 'a', 'a@a', '1401'),
	(16, 'b', 'b@b', '1401'),
	(17, 'c', 'c@c', '1401'),
	(18, 'd', 'd@d', '1401'),
	(19, 'car', 'car@gmail.com', '1401'),
	(20, 'ca', 'ca@gmail.com', '1401');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
