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
  `supplier_id` int DEFAULT NULL,
  `category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `supplier` (`supplier_id`) USING BTREE,
  CONSTRAINT `FK_herbs_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_site_venda_ervas.herbs: ~0 rows (aproximadamente)
INSERT INTO `herbs` (`id`, `name`, `location`, `description`, `supplier_id`, `category`) VALUES
	(11, 'Erva 1', 'Campinas - Sp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel ante sodales, feugiat ipsum et, maximus nulla. Sed ornare sapien quis felis hendrerit auctor. Vivamus ullamcorper feugiat consequat. Donec condimentum nulla dolor, id ultrices nisl cursus id. Sed a ipsum eu est euismod luctus. Praesent vitae congue velit. Phasellus ac fermentum libero, vel auctor mi.', 8, 'Chás'),
	(12, 'Erva 2', 'Belo Horizonte - MG', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel ante sodales, feugiat ipsum et, maximus nulla. Sed ornare sapien quis felis hendrerit auctor. Vivamus ullamcorper feugiat consequat. Donec condimentum nulla dolor, id ultrices nisl cursus id. Sed a ipsum eu est euismod luctus. Praesent vitae congue velit. Phasellus ac fermentum libero, vel auctor mi.', 9, 'Chás'),
	(13, 'Erva 3', 'Joaçaba - SC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel ante sodales, feugiat ipsum et, maximus nulla. Sed ornare sapien quis felis hendrerit auctor. Vivamus ullamcorper feugiat consequat. Donec condimentum nulla dolor, id ultrices nisl cursus id. Sed a ipsum eu est euismod luctus. Praesent vitae congue velit. Phasellus ac fermentum libero, vel auctor mi.', 8, 'Ervas Medicinais'),
	(14, 'Erva 4', 'Chapecó - SC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel ante sodales, feugiat ipsum et, maximus nulla. Sed ornare sapien quis felis hendrerit auctor. Vivamus ullamcorper feugiat consequat. Donec condimentum nulla dolor, id ultrices nisl cursus id. Sed a ipsum eu est euismod luctus. Praesent vitae congue velit. Phasellus ac fermentum libero, vel auctor mi.', 8, 'Ervas');

-- Copiando estrutura para tabela db_site_venda_ervas.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `date` date NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT '',
  `author` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_site_venda_ervas.post: ~0 rows (aproximadamente)
INSERT INTO `post` (`id`, `name`, `description`, `date`, `category`, `author`) VALUES
	(7, 'Nova erva disponível', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel ante sodales, feugiat ipsum et, maximus nulla. Sed ornare sapien quis felis hendrerit auctor. Vivamus ullamcorper feugiat consequat. Donec condimentum nulla dolor, id ultrices nisl cursus id. Sed a ipsum eu est euismod luctus. Praesent vitae congue velit. Phasellus ac fermentum libero, vel auctor mi.', '2025-02-10', 'Ervas Medicinais', 'Lucas'),
	(8, 'Nova funcionalidade ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel ante sodales, feugiat ipsum et, maximus nulla. Sed ornare sapien quis felis hendrerit auctor. Vivamus ullamcorper feugiat consequat. Donec condimentum nulla dolor, id ultrices nisl cursus id. Sed a ipsum eu est euismod luctus. Praesent vitae congue velit. Phasellus ac fermentum libero, vel auctor mi.', '2025-02-10', 'Sistema', 'Giselly');

-- Copiando estrutura para tabela db_site_venda_ervas.supplier
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `farm` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(50) DEFAULT NULL,
  `cnpj` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_site_venda_ervas.supplier: ~0 rows (aproximadamente)
INSERT INTO `supplier` (`id`, `name`, `email`, `farm`, `phone`, `cnpj`) VALUES
	(8, 'Forncedor 1', 'fazenda@fazenda.com', 'Fazenda 1', '0000000000', '0000000000000'),
	(9, 'Forncedor 2', 'fazenda@fazenda.com', 'Fazenda 2', '00000000000', '0000000000000');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_site_venda_ervas.user: ~2 rows (aproximadamente)
INSERT INTO `user` (`id`, `name`, `login`, `password`, `phone`, `email`, `admin`) VALUES
	(10, 'admin', 'admin', '$2y$10$ZmYfVa.01S.Y/JhihD24Xez4GgODd1pVqTzws7ZDgXtZqFNvXLD/a', '1234567890', 'admin@admin', 1),
	(11, 'user', 'user', '$2y$10$ZjG.uF8BudmCAwOc7DWMouXap71SOFgaEvtFsmpimi1IQPzobY6WO', '1111111111', 'user@user', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
