-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2022 a las 04:59:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cam_cedros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `cod_horario` int(11) NOT NULL,
  `dia` varchar(25) NOT NULL,
  `agenteh` varchar(100) NOT NULL,
  `armah` varchar(100) NOT NULL,
  `zonah` varchar(100) NOT NULL,
  `hora_entrada` text NOT NULL,
  `hora_salida` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_agentes`
--

CREATE TABLE `tbl_agentes` (
  `id_agente` bigint(20) NOT NULL,
  `nombre_agente` varchar(255) NOT NULL,
  `apellido_agente` varchar(255) NOT NULL,
  `dui_agente` varchar(10) NOT NULL,
  `sexo_agente` varchar(9) NOT NULL,
  `codigo_cam_agente` varchar(100) NOT NULL,
  `telefono_agente` varchar(20) NOT NULL,
  `correo_agente` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tbl_agentes`
--

INSERT INTO `tbl_agentes` (`id_agente`, `nombre_agente`, `apellido_agente`, `dui_agente`, `sexo_agente`, `codigo_cam_agente`, `telefono_agente`, `correo_agente`, `direccion`, `activo`) VALUES
(1, 'Carlos Daniel', 'PÃ©rez Sosa', '9898498-4', 'Masculino', '1984-9', '5189-4899', 'dani@gmail.com', 'dsfasdgrgdf', 1),
(3, 'Cristian MoisÃ©s', 'Alvarado Campos', '3575345-3', 'Masculino', '1868-6', '7876-5434', 'cristts2.0@gmail.com', 'ghmj537254', 1),
(21, 'Flor MarÃ­a', 'HernÃ¡ndez LÃ³pez', '4168434-7', 'Femenino', '1453-4', '7845-3287', 'mari@gmail.com', '78fghffdgh', 1),
(22, 'Javier Orlando', 'Delgado Mónico', '1234567-8', 'Masculino', '1234-5', '7898-5456', 'jayvi95@gmail.com', 'Cedros', 1),
(23, 'Dennis', 'Portillo', '0520167-8', 'Masculino', '', '7894-5123', 'denni98@gmail.com', 'Estatura 170 cm, cabello negro.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_armas`
--

CREATE TABLE `tbl_armas` (
  `id_arma` bigint(20) NOT NULL,
  `modelo_arma` varchar(255) NOT NULL,
  `serie_arma` varchar(100) NOT NULL,
  `matricula_arma` varchar(100) NOT NULL,
  `descripcion_arma` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_User` int(11) NOT NULL,
  `nombre_User` varchar(255) NOT NULL,
  `sexo_User` varchar(9) NOT NULL,
  `correo_User` varchar(255) NOT NULL,
  `rol_User` varchar(50) NOT NULL,
  `pass_User` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_User`, `nombre_User`, `sexo_User`, `correo_User`, `rol_User`, `pass_User`, `estado`) VALUES
(1, 'Cristian Alvarado', 'Masculino', 'cristts2.0@gmail.com', 'Administrador', 'Q3Jpc3RpYW4yLjA=', 1),
(5, 'Pedro', 'Masculino', 'pedro@gmail.com', 'Agente', 'cGVkcm8xMjM=', 0),
(6, 'Carlos Daniel', 'Masculino', 'dani@gmail.com', 'Agente', 'UMOpcmV6IFNvc2ExODM4NQ==', 1),
(26, 'Flor MarÃ­a', 'Femenino', 'mari@gmail.com', 'Agente', 'SGVybsOhbmRleiBQw6lyZXoyMzExMg==', 1),
(27, 'Javier Orlando', 'Masculino', 'jayvi95@gmail.com', 'Administrador', 'MTIzNDU=', 1),
(28, 'Dennis', 'Masculino', 'denni98@gmail.com', 'Agente', 'UG9ydGlsbG80NjMzNg==', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_zonas`
--

CREATE TABLE `tbl_zonas` (
  `id_zona` bigint(20) NOT NULL,
  `nombre_zona` varchar(255) DEFAULT NULL,
  `direccion_zona` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`cod_horario`);

--
-- Indices de la tabla `tbl_agentes`
--
ALTER TABLE `tbl_agentes`
  ADD PRIMARY KEY (`id_agente`) USING BTREE;

--
-- Indices de la tabla `tbl_armas`
--
ALTER TABLE `tbl_armas`
  ADD PRIMARY KEY (`id_arma`) USING BTREE;

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_User`) USING BTREE;

--
-- Indices de la tabla `tbl_zonas`
--
ALTER TABLE `tbl_zonas`
  ADD PRIMARY KEY (`id_zona`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `cod_horario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_agentes`
--
ALTER TABLE `tbl_agentes`
  MODIFY `id_agente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tbl_armas`
--
ALTER TABLE `tbl_armas`
  MODIFY `id_arma` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tbl_zonas`
--
ALTER TABLE `tbl_zonas`
  MODIFY `id_zona` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
