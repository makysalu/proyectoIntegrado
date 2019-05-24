-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.16-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ulyc
CREATE DATABASE IF NOT EXISTS `ulyc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ulyc`;

-- Volcando estructura para tabla ulyc.actualidad
CREATE TABLE IF NOT EXISTS `actualidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `Foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ulyc.actualidad: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `actualidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `actualidad` ENABLE KEYS */;

-- Volcando estructura para tabla ulyc.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `ID_Administrador` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` char(50) NOT NULL,
  `Apellidos` char(50) NOT NULL,
  `DNI` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ulyc.administrador: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
REPLACE INTO `administrador` (`ID_Administrador`, `Nombre`, `Apellidos`, `DNI`, `Email`, `Contrasena`) VALUES
	(1, 'Administrador', 'Administrador', 'Administrador', 'Administrador', 'Administrador');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Volcando estructura para tabla ulyc.candidato
CREATE TABLE IF NOT EXISTS `candidato` (
  `id_candidato` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_candidato`),
  KEY `FK_candidatos_usuario` (`id_usuario`),
  CONSTRAINT `FK_candidatos_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ulyc.candidato: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `candidato` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidato` ENABLE KEYS */;

-- Volcando estructura para tabla ulyc.cuentas
CREATE TABLE IF NOT EXISTS `cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `archivo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ulyc.cuentas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cuentas` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuentas` ENABLE KEYS */;

-- Volcando estructura para tabla ulyc.foro
CREATE TABLE IF NOT EXISTS `foro` (
  `Tema` varchar(50) NOT NULL,
  `Comentario` text NOT NULL,
  `Fecha_Publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `Tema` (`Tema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ulyc.foro: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `foro` DISABLE KEYS */;
REPLACE INTO `foro` (`Tema`, `Comentario`, `Fecha_Publicacion`) VALUES
	('Cuentas', 'Yo blanqueo todo el dinero', '2019-05-24 12:25:52'),
	('Corrupcion', 'Diego Moreno Alfaro es un corrupto', '2019-05-24 12:25:52'),
	('Cuentas', 'Como me hago una cuenta B?', '2019-05-24 12:25:52'),
	('Cuentas', 'Yo tambien blanqueo todo el dinero', '2019-05-24 12:25:52'),
	('Corrupcion', 'Borja y Fran han cerrado mi empresa', '2019-05-24 12:25:52'),
	('Corrupcion', 'Pablo Vidal investigado por trafico de bolis en mercado negro de primaria', '2019-05-24 12:25:52'),
	('Transparencia', 'Me gustaria que este partido politico hiciera publicas todas sus cuentas', '2019-05-24 12:25:52'),
	('Accesibilidad', 'Me gustaria que este partido realizara obras para la mejora de la accesibilidad para discapacitados', '2019-05-24 14:25:57');
/*!40000 ALTER TABLE `foro` ENABLE KEYS */;

-- Volcando estructura para tabla ulyc.movimientos
CREATE TABLE IF NOT EXISTS `movimientos` (
  `id_presupuesto` int(11) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(9) NOT NULL,
  `Nombre` char(50) NOT NULL,
  `Apellidos` char(50) NOT NULL,
  `Asunto` char(50) NOT NULL,
  `presupuesto` int(11) NOT NULL DEFAULT '0',
  `Total` int(11) NOT NULL,
  `Fech_realizacion` date NOT NULL,
  PRIMARY KEY (`id_presupuesto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ulyc.movimientos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `movimientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimientos` ENABLE KEYS */;

-- Volcando estructura para tabla ulyc.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_usuario` int(50) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(9) NOT NULL,
  `Foto` blob NOT NULL,
  `Nombre` char(50) NOT NULL,
  `Apellidos` char(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Ciudad` char(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Fecha_Alta` date NOT NULL,
  `Cuota` int(2) NOT NULL DEFAULT '9',
  PRIMARY KEY (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ulyc.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para disparador ulyc.actualizar_movimientos
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `actualizar_movimientos` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
	insert into movimientos (`DNI`, `Nombre`, `Apellidos`, `Asunto`, `presupuesto`, `Fech_realizacion`) values (NEW.DNI, new.Nombre, new.Apellidos, 'Cuota', new.Cuota, new.Fech_Alta);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador ulyc.movimientos_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `movimientos_before_insert` BEFORE INSERT ON `movimientos` FOR EACH ROW BEGIN
	update movimientos set movimientos.Total = (select Sum(movimientos.total) from movimientos) where movimientos.id_presupuesto = (select max(movimientos.id_presupuesto));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador ulyc.usuario_before_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `usuario_before_delete` BEFORE DELETE ON `usuario` FOR EACH ROW BEGIN
	delete from candidato where candidato.id_usuario = OLD.ID_usuario;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
