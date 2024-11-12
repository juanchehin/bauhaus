-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.3.0 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bauhaus
CREATE DATABASE IF NOT EXISTS `bauhaus` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bauhaus`;

-- Volcando estructura para tabla bauhaus.artistas
CREATE TABLE IF NOT EXISTS `artistas` (
  `id_artista` int NOT NULL AUTO_INCREMENT,
  `artista` varchar(45) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_artista`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla bauhaus.artistas: ~0 rows (aproximadamente)
INSERT INTO `artistas` (`id_artista`, `artista`, `imagen`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Marcel Breuer', '../imagenes/influyentes breuer.jpg', 'Pionero en el uso del acero tubular para muebles, como su famosa silla Wassily. Su enfoque combinaba funcionalidad con diseño minimalista, influenciando el diseño de productos industriales', NULL, NULL),
	(2, 'Wilhelm Wagenfeld', '../imagenes/influyentes wagenfeld.jpg', 'Conocido por su icónica lámpara WG24, creó objetos cotidianos de diseño sencillo y práctico, utilizando materiales industriales y democratizando el buen diseño', NULL, NULL),
	(3, 'László Moholy-Nagy', '../imagenes/influyentes moholy.jpg', 'Innovador en la integración de nuevas tecnologías en el diseño, impulsó la experimentación con materiales como el metal y el vidrio, influenciando el enfoque funcional y estético del diseño de productos.', NULL, NULL);

-- Volcando estructura para tabla bauhaus.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='almacena los usuarios del sistema';

-- Volcando datos para la tabla bauhaus.usuarios: ~0 rows (aproximadamente)
INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `correo`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
