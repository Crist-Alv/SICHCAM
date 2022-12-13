SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `cam_cedros`
--




CREATE TABLE `horario` (
  `cod_horario` int(11) NOT NULL AUTO_INCREMENT,
  `dia` varchar(25) NOT NULL,
  `agenteh` varchar(100) NOT NULL,
  `armah` varchar(100) NOT NULL,
  `zonah` varchar(100) NOT NULL,
  `hora_entrada` text NOT NULL,
  `hora_salida` text NOT NULL,
  `fecha_horario` date NOT NULL,
  PRIMARY KEY (`cod_horario`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;


INSERT INTO horario VALUES
("18","Martes","Ivan Amilcar Alvarado Ventura","266b6 - revolver colt cobra","Alcaldia Municipal","08:00","20:00","2022-12-13"),
("19","Martes","Jorge Alberto MartÃ­nez","85d789 - revolver colt python","Cementerio viejo","08:00","20:00","2022-12-13"),
("20","Martes","Daniel Enrique Ventura","563e1 - revolver colt python","Parque Central","20:00","12:00","2022-12-13");




CREATE TABLE `tbl_agentes` (
  `id_agente` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_agente` varchar(255) NOT NULL,
  `apellido_agente` varchar(255) NOT NULL,
  `dui_agente` varchar(10) NOT NULL,
  `sexo_agente` varchar(9) NOT NULL,
  `codigo_cam_agente` varchar(100) NOT NULL,
  `telefono_agente` varchar(20) NOT NULL,
  `correo_agente` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `activo` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_agente`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;


INSERT INTO tbl_agentes VALUES
("24","Jorge Alberto","MartÃ­nez","0523167-8","Masculino","7894-5","7895-4612","jorge84@gmail.com","1A. ave. Norte, colonia las Mercedes, San Rafael Cedros, CuscatlÃ¡n","1"),
("25","JosÃ© Esteban","MejÃ­a Turcios","7895461-3","Masculino","7894-5","7613-5455","mejia78@gmail.com","1A. ave. Norte, pasaje F, colonia las Mercedes, San Rafael Cedros, CuscatlÃ¡n","1"),
("26","Daniel Enrique","Ventura","6541325-5","Masculino","789566","7654-8934","danenri@81.com","Barrio El Calvario, casa #23, San Rafael Cedros, Cuscatlán","1"),
("27","Ivan Amilcar","Alvarado Ventura","9856252-3","Masculino","324569","7916-5513","ivan89@gmail.com","Cantón Soledad, calle a la curvona, San Rafael Cedros, Cuscatlán","1");




CREATE TABLE `tbl_armas` (
  `id_arma` bigint(20) NOT NULL AUTO_INCREMENT,
  `modelo_arma` varchar(255) NOT NULL,
  `serie_arma` varchar(100) NOT NULL,
  `matricula_arma` varchar(100) NOT NULL,
  `descripcion_arma` varchar(500) NOT NULL,
  PRIMARY KEY (`id_arma`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;


INSERT INTO tbl_armas VALUES
("3","revolver colt cobra","266b6","786512983","Revolver colt cobra calibre 38."),
("4","revolver colt python","85d789","651234568","revolver colt python calibre 38 cacha negra."),
("5","revolver colt python","563e1","781278453","revolver colt python calibre 38 cacha cafe."),
("6","S&M 649","458a4","154876234","S&M 649 calibre 357 max, capacidad 5 tiros."),
("7","M&P340","87w98","573197521","M&P340 calibre 38, capacidad 5 tiros.");




CREATE TABLE `tbl_usuario` (
  `id_User` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_User` varchar(255) NOT NULL,
  `sexo_User` varchar(9) NOT NULL,
  `correo_User` varchar(255) NOT NULL,
  `rol_User` varchar(50) NOT NULL,
  `pass_User` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_User`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;


INSERT INTO tbl_usuario VALUES
("1","Cristian Alvarado","Masculino","cristts2.0@gmail.com","Administrador","Q3Jpc3RpYW4yLjA=","1"),
("30","Jorge Alberto","Masculino","jorge84@gmail.com","Agente","TWFydMOtbmV6ODMzMzE=","1"),
("31","JosÃ© Esteban","Masculino","mejia78@gmail.com","Agente","TWVqw61hIFR1cmNpb3M5MzQzNA==","1"),
("32","Daniel Enrique","Masculino","danenri@81.com","Agente","VmVudHVyYTIzMzcx","1"),
("33","Ivan Amilcar","Masculino","ivan89@gmail.com","Agente","QWx2YXJhZG8gVmVudHVyYTIzMjU=","1");




CREATE TABLE `tbl_zonas` (
  `id_zona` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_zona` varchar(255) DEFAULT NULL,
  `direccion_zona` text NOT NULL,
  PRIMARY KEY (`id_zona`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;


INSERT INTO tbl_zonas VALUES
("4","Alcaldia Municipal","Esta zona comprende el edificio de la alcaldÃ­a municipal y la calle principal."),
("5","Parque Central","Esta zona comprende el parque central y las calles alrededor de este."),
("6","Cementerio viejo","Esta zona comprende el cementerio viejo, la cancha de enfrente, la sal de velaciÃ³n, oficina del tiangue."),
("7","Cementerio nuevo","Esta zona comprende la extensiÃ³n del cementerio nuevo ademÃ¡s de la calle que conduce a este."),
("8","Campo de futbol","Esta zona comprende el area de la cancha de futbol y sus alrededores."),
("9","Mercado Municipal","Esta zona comprende el area del mercado municipal, calle a punto de buses y calle al parque");




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;