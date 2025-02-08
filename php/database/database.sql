-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_site_venda_ervas
CREATE DATABASE IF NOT EXISTS `db_site_venda_ervas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_site_venda_ervas`;

-- Copiando estrutura para tabela db_site_venda_ervas.herbs
CREATE TABLE IF NOT EXISTS `herbs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `location` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `supplier_id` int DEFAULT '0',
  `category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `supplier` (`supplier_id`) USING BTREE,
  CONSTRAINT `FK_herbs_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_site_venda_ervas.herbs: ~0 rows (aproximadamente)
INSERT INTO `herbs` (`id`, `name`, `location`, `description`, `supplier_id`, `category`) VALUES
	(2, 'aweae', 'dasda', 'sdada', 4, 'sdasda');

-- Copiando estrutura para tabela db_site_venda_ervas.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `date` date NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT '',
  `author` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_site_venda_ervas.post: ~0 rows (aproximadamente)
INSERT INTO `post` (`id`, `name`, `description`, `date`, `category`, `author`) VALUES
	(1, 'sdasda', 'sdasd1', '1231-03-12', '231231', '23123');

-- Copiando estrutura para tabela db_site_venda_ervas.supplier
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `farm` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(50) DEFAULT NULL,
  `cnpj` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_site_venda_ervas.supplier: ~0 rows (aproximadamente)
INSERT INTO `supplier` (`id`, `name`, `email`, `farm`, `phone`, `cnpj`) VALUES
	(3, 'Lucas Molozzi Mantelli', 'lucasmmantelli@gmail.com', 'Lucas Molozzi Mantelli', '49999380686', '12121212121212'),
	(4, 'aABB', 'lucasmmantelli@gmail.com', 'Lucas Molozzi Mantelli', '49999380686', '12121212121212'),
	(5, 's', 's@a', 's', 's', 's');

-- Copiando estrutura para tabela db_site_venda_ervas.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `admin` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_site_venda_ervas.user: ~2 rows (aproximadamente)
INSERT INTO `user` (`id`, `name`, `login`, `password`, `phone`, `email`, `admin`) VALUES
	(6, 'Lucas Molozzi Mantelli', 'lucasmmantelli@gmail.com', '$2y$10$s2v8LEUafkc36t4nUPTyMeoqy8UAGkRHxXLCtAXklQqy7HlClIzoG', '49999380686', 'lucasmmantelli@gmail.com', 0),
	(9, 'aaaa', 'aaaa', '$2y$10$YoCf/UTcswBRS3cBIpcSVupc.QKsOhnnmhjBHegZka6Dihu7nvj7i', '49999380686', 'aaaa@aaaa', 0),
	(10, 'admin', 'admin', '$2y$10$ZmYfVa.01S.Y/JhihD24Xez4GgODd1pVqTzws7ZDgXtZqFNvXLD/a', '1234567890', 'admin@admin', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
