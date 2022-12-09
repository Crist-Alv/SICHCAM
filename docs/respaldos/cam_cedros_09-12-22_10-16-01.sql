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
  PRIMARY KEY (`cod_horario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;


INSERT INTO tbl_agentes VALUES
("1","Carlos Daniel","PÃ©rez Sosa","9898498-4","Masculino","1984-9","5189-4899","dani@gmail.com","dsfasdgrgdf","1"),
("3","Cristian MoisÃ©s","Alvarado Campos","3575345-3","Masculino","1868-6","7876-5434","cristts2.0@gmail.com","ghmj537254","1"),
("21","Flor MarÃ­a","HernÃ¡ndez LÃ³pez","4168434-7","Femenino","1453-4","7845-3287","mari@gmail.com","78fghffdgh","1"),
("22","Javier Orlando","Delgado MÃ³nico","1234567-8","Masculino","1234-5","7898-5456","jayvi95@gmail.com","Cedros","1"),
("23","Dennis","Portillo","0520167-8","Masculino","","7894-5123","denni98@gmail.com","Estatura 170 cm, cabello negro.","0");




CREATE TABLE `tbl_armas` (
  `id_arma` bigint(20) NOT NULL AUTO_INCREMENT,
  `modelo_arma` varchar(255) NOT NULL,
  `serie_arma` varchar(100) NOT NULL,
  `matricula_arma` varchar(100) NOT NULL,
  `descripcion_arma` varchar(500) NOT NULL,
  PRIMARY KEY (`id_arma`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;






CREATE TABLE `tbl_usuario` (
  `id_User` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_User` varchar(255) NOT NULL,
  `sexo_User` varchar(9) NOT NULL,
  `correo_User` varchar(255) NOT NULL,
  `rol_User` varchar(50) NOT NULL,
  `pass_User` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_User`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;


INSERT INTO tbl_usuario VALUES
("1","Cristian Alvarado","Masculino","cristts2.0@gmail.com","Administrador","Q3Jpc3RpYW4yLjA=","1"),
("5","Pedro","Masculino","pedro@gmail.com","Agente","cGVkcm8xMjM=","0"),
("6","Carlos Daniel","Masculino","dani@gmail.com","Agente","UMOpcmV6IFNvc2ExODM4NQ==","1"),
("26","Flor MarÃ­a","Femenino","mari@gmail.com","Agente","SGVybsOhbmRleiBQw6lyZXoyMzExMg==","1"),
("27","Javier Orlando","Masculino","jayvi95@gmail.com","Administrador","MTIzNDU=","1"),
("28","Dennis","Masculino","denni98@gmail.com","Agente","UG9ydGlsbG80NjMzNg==","1");




CREATE TABLE `tbl_zonas` (
  `id_zona` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_zona` varchar(255) DEFAULT NULL,
  `direccion_zona` text NOT NULL,
  PRIMARY KEY (`id_zona`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;






/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;