-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.38-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para upepbd
CREATE DATABASE IF NOT EXISTS `upepbd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `upepbd`;

-- Volcando estructura para tabla upepbd.actualidad
CREATE TABLE IF NOT EXISTS `actualidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `Foto` varchar(50) NOT NULL,
  `fecha_publicacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla upepbd.actualidad: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `actualidad` DISABLE KEYS */;
INSERT INTO `actualidad` (`id`, `titulo`, `descripcion`, `Foto`, `fecha_publicacion`) VALUES
	(1, 'Pedro Sánchez advierte a la oposición de que el Congreso de los Diputados "no es un ring de boxeo"', 'El líder socialista recuerda a los indecisos que el único voto que “garantiza ganar y gobernar es el PSOE”, por lo que ha pedido que se concentre todo el voto en las candidaturas socialistas y en Ángel Gabilondo para poner fin a 24 años de gobiernos de PP en la Comunidad de Madrid', 'noticia1.jpg', '2019-05-24 16:11:49'),
	(2, '"Prefiero que me comparen con Valle-Inclán; Harry Potter se repite, es un poco cansino"', 'Pese a su estilo y formas decimonónicas, Agustín Zamarrón (Miranda de Ebro, 1946) utiliza whatsApp y teléfono móvil.', 'noticia2.jpg', '2019-05-24 16:11:49'),
	(3, 'Casado asegura que Sánchez y Junqueras "ya han pactado escaños en una investidura a cambio de indultos"', 'El presidente del Partido Popular, Pablo Casado, está convencido de que ya existe un acuerdo entre el PSOE y las fuerzas independentistas catalanas para que éstas apoyen la investidura de Pedro Sánchez a cambio de que los políticos encarcelados sean indultados por el Ejecutivo', 'noticia3.jpg', '2019-05-24 16:11:49'),
	(4, 'El candidato del PP que asiste a prostitutas para "rescatarlas" a través de la fe', 'El número 6 de la lista del PP en Barcelona tiene dos vidas. Por la mañana, es un atareado abogado que circula por los pasillos del juzgado con toga, traje y corbata. Cuando llega la madrugada, se pone una gorra, un largo abrigo de lana y visita a las prostitutas de la zona del Camp Nou para intentar sacarlas de la calle a través de la fe católica.', 'noticia4.jpg', '2019-05-24 16:11:49'),
	(5, 'El candidato de Vox a presidir Extremadura aprovecha el debate en la televisión pública para alabar a Franco', 'Alabanzas al régimen de Franco y un nuevo llamamiento a eliminar la Ley regional de Memoria Democrática como primera acción de gobierno. Este fue el mensaje que lanzó el candidato de Vox a la Junta, Juan Antonio Morales, durante su intervención en el debate electoral a siete emitido este martes en la televisión pública extremeña.', 'noticia5.jpg', '2019-05-24 16:11:49'),
	(6, 'Jackass en el Congreso', 'Las tres derechas anticipan una legislatura bronca ya desde el pleno de constitución del Congreso ', 'noticia6.jpg', '2019-05-24 16:11:49'),
	(10, 'La jueza de la F1 rechaza archivar la causa contra Camps y ve â€œpoco serioâ€ que el fiscal quiera cerrarla  es alg', 'La magistrada recuerda a AnticorrupciÃ³n que fue este Ã³rgano quien presentÃ³ la querella inicial que dio lugar ', 'noticia7.jpg', '2019-05-24 16:13:01'),
	(11, 'Aparece colgado en Sant VicenÃ§ dels Horts un muÃ±eco con rostro de Junqueras ', 'Cerca tambiÃ©n ha aparecido una pintada donde se lee: "Junqueras, pÃºdrete en la cÃ¡rcel"', 'noticia8.jpg', '2019-05-24 16:16:36'),
	(12, 'Hola buenos dias', 'Hola buenos dias', 'noticia6.jpg', '2019-05-28 17:46:59');
/*!40000 ALTER TABLE `actualidad` ENABLE KEYS */;

-- Volcando estructura para tabla upepbd.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `ID_Administrador` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` char(50) NOT NULL,
  `Apellidos` char(50) NOT NULL,
  `DNI` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla upepbd.administrador: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` (`ID_Administrador`, `Nombre`, `Apellidos`, `DNI`, `Email`, `Contrasena`) VALUES
	(1, 'Administrador', 'Administrador', 'Administrador', 'Administrador', 'Administrador');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Volcando estructura para tabla upepbd.candidato
CREATE TABLE IF NOT EXISTS `candidato` (
  `id_candidato` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_candidato`),
  KEY `FK_candidatos_usuario` (`id_usuario`),
  CONSTRAINT `FK_candidatos_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`ID_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla upepbd.candidato: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `candidato` DISABLE KEYS */;
INSERT INTO `candidato` (`id_candidato`, `id_usuario`, `descripcion`) VALUES
	(1, 1, NULL),
	(2, 2, NULL),
	(3, 3, NULL),
	(4, 4, NULL),
	(5, 5, NULL),
	(6, 6, NULL);
/*!40000 ALTER TABLE `candidato` ENABLE KEYS */;

-- Volcando estructura para tabla upepbd.cuentas
CREATE TABLE IF NOT EXISTS `cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `archivo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla upepbd.cuentas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `cuentas` DISABLE KEYS */;
INSERT INTO `cuentas` (`id`, `titulo`, `archivo`) VALUES
	(1, 'Ver informe del tribunal de cuentas de 2014 y 2015', 'c1262.pdf'),
	(2, 'Ver informe del tribunal de cuentas de 2016 y 2017', 'c1263.pdf'),
	(3, 'Ver informe del tribunal de cuentas de 2018 y 2019', 'c1264.pdf');
/*!40000 ALTER TABLE `cuentas` ENABLE KEYS */;

-- Volcando estructura para tabla upepbd.foro
CREATE TABLE IF NOT EXISTS `foro` (
  `Tema` varchar(50) NOT NULL,
  `Comentario` text NOT NULL,
  `Fecha_Publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `Tema` (`Tema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla upepbd.foro: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `foro` DISABLE KEYS */;
INSERT INTO `foro` (`Tema`, `Comentario`, `Fecha_Publicacion`) VALUES
	('Cuentas', 'Yo blanqueo todo el dinero', '2019-05-24 12:25:52'),
	('Corrupcion', 'Diego Moreno Alfaro es un corrupto', '2019-05-24 12:25:52'),
	('Cuentas', 'Como me hago una cuenta B?', '2019-05-24 12:25:52'),
	('Cuentas', 'Yo tambien blanqueo todo el dinero', '2019-05-24 12:25:52'),
	('Corrupcion', 'Han cerrado mi empresa', '2019-05-24 12:25:52'),
	('Corrupcion', 'Pablo Vidal investigado por trafico de bolis en mercado negro de primaria', '2019-05-24 12:25:52'),
	('Transparencia', 'Me gustaria que hicierais publicas todas sus cuentas', '2019-05-24 12:25:52'),
	('Accesibilidad', 'Me gustaria que realizarais obras para la mejora de la accesibilidad para discapacitados', '2019-05-24 14:25:57');
/*!40000 ALTER TABLE `foro` ENABLE KEYS */;

-- Volcando estructura para tabla upepbd.movimientos
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla upepbd.movimientos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `movimientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimientos` ENABLE KEYS */;

-- Volcando estructura para tabla upepbd.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_usuario` int(50) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(9) NOT NULL,
  `Foto` varchar(50) NOT NULL,
  `Nombre` char(50) NOT NULL,
  `Apellidos` char(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Ciudad` char(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Fecha_Alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cuota` int(2) NOT NULL DEFAULT '9',
  PRIMARY KEY (`ID_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla upepbd.usuario: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`ID_usuario`, `DNI`, `Foto`, `Nombre`, `Apellidos`, `Email`, `Contrasena`, `Ciudad`, `Fecha`, `Fecha_Alta`, `Cuota`) VALUES
	(1, '26915244T', 'user.png', 'Pablo', 'Torres Ibañez', 'Pablotorres74@gmail.com', 'pablotorres', 'Madrid', '1974-10-12', '2019-05-28 17:39:21', 9),
	(2, '22557364E', 'user.png', 'Mariana', 'Montes Calero', 'marianamontero@witty.com', '12345', 'Cadiz', '1963-02-28', '2019-05-28 19:17:05', 30),
	(3, '20341627J', 'user.png', 'Juan Jose', 'Martin Carrasco', 'juanjo.carrasco@hotmail.com', '123456789', 'Madrid', '1965-01-11', '2019-05-28 19:17:11', 9),
	(4, '71461373M', 'user.png', 'Andres', 'Cano Mendez', 'Pueseso@gmail.com', 'soygenial1234', 'Madrid', '1986-12-20', '2019-05-28 19:17:24', 9),
	(5, '36832580N', 'user.png', 'Clara', 'Gomez Rojas', 'clararojas_gomez@gmail.com', 'clarita1982', 'Madrid', '1982-05-14', '2019-05-28 17:06:49', 30),
	(6, '79574174Q', 'user.png', 'Lola', 'Costa Real', 'sr722nqrr@earthling.net', '637172', 'Madrid', '1972-05-20', '2019-05-28 19:29:38', 30),
	(7, '01322985W', 'user.png', 'Marta', 'Mendez Medina', '6mytx26rs@hotmail.com', 'bK1rC7fT', 'Segovia', '1966-03-03', '2019-05-28 16:54:46', 9),
	(8, '94748992D', 'user.png', 'German', 'Real Cabello', 'german_cabello@gmail.com', 'lF7eD1fD', 'Salamanca', '1989-03-01', '2019-05-28 16:58:42', 9),
	(9, '79078453Z', 'user.png', 'Carlos Alberto', 'Estevez Amaya', 'estevez.carlos@yahoo.es', 'carlosAlberto', 'Barcelona', '1989-08-25', '2019-05-28 18:52:45', 9),
	(10, '89493310B', 'user.png', 'Concepcion', 'Duran Bello', 'duranbello54@gmail.com', '89493310B', 'Cantabria', '1954-08-31', '2019-05-28 18:52:47', 9),
	(11, '76069151D', 'user.png', 'Ramon', 'Merino Ahmed', 'ramon83merino@hotmail.com', 'Valladolid83', 'Valladolid', '1983-02-11', '2019-05-28 19:11:38', 9),
	(12, '02416636A', 'user.png', 'Jose Enrique', 'Grande Salvador', 'joseenrique_90@gmail.com', 'dH2lT1iE', 'Almeria', '1990-06-15', '2019-05-28 19:16:53', 25),
	(13, '18321764X', 'user.png', 'Susana', 'Iglesias Domingo', 'susana_98@gmail.com', 'dD4bS6jC', 'Caceres', '1999-10-29', '2019-05-28 19:19:15', 9),
	(14, '17182987D', 'user.png', 'Natividad', 'Godoy Pelaez', 'natividad_85@hotmail.com', 'natividadGodoy85', 'Caceres', '1985-01-02', '2019-05-28 19:20:32', 9),
	(15, '28331480B', 'user.png', 'Maria Francisca', 'Robles Caro', 'mariafrancisca.55@gmail.com', 'mariaFrancisca1234', 'Huelva', '1963-04-27', '2019-05-28 19:24:28', 9),
	(16, '86251769K', 'user.png', 'Juan Diego', 'Galan Pineda', 'juandiego_95@gamil.com', 'Pueseso14525', 'Castellon', '1995-06-10', '2019-05-28 19:26:41', 9),
	(17, '02069443H', 'user.png', 'Jairo', 'Escudero Iglesias', 'jairo_48@gmail.com', '895613256', 'Girona', '1948-09-04', '2019-05-28 19:27:19', 9),
	(18, '23009957K', 'user.png', 'Paula', 'Mora Pulido', 'paula_90@gmail.com', '23009957K', 'Alava', '1990-01-26', '2019-05-28 19:32:15', 9),
	(19, '97988055M', 'user.png', 'Rosa Maria', 'Garrido Jimenez', 'rosamaria@gmail.com', 'rosamaria', 'Valladolid', '1987-11-12', '2019-05-28 19:44:50', 9),
	(20, '49416767W', 'user.png', 'Mateo', 'Pena Corrales', 'mateo_84', 'mateo84Pena', 'Toledo', '1985-04-25', '2019-05-28 19:46:28', 9);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para disparador upepbd.movimientos_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `movimientos_before_insert` BEFORE INSERT ON `movimientos` FOR EACH ROW BEGIN
	update movimientos set movimientos.Total = (select Sum(movimientos.total) from movimientos) where movimientos.id_presupuesto = (select max(movimientos.id_presupuesto));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador upepbd.usuario_before_delete
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
