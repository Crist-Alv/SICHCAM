-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2022 a las 06:05:11
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

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
-- Estructura de tabla para la tabla `tbl_agentes`
--

CREATE TABLE `tbl_agentes` (
  `id_agente` bigint(20) NOT NULL,
  `nombre_agente` varchar(255) NOT NULL,
  `apellido_agente` varchar(255) NOT NULL,
  `dui_agente` varchar(10) NOT NULL,
  `sexo_agente` tinyint(4) DEFAULT NULL,
  `codigo_cam _agente` varchar(100) NOT NULL,
  `telefono_agente` varchar(20) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_armas`
--

CREATE TABLE `tbl_armas` (
  `id_arma` bigint(20) NOT NULL,
  `modelo_arma` varchar(255) NOT NULL,
  `id_tipo_arma` bigint(20) NOT NULL,
  `serie_arma` varchar(100) NOT NULL,
  `matricula_arma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dias`
--

CREATE TABLE `tbl_dias` (
  `id_dia` bigint(20) NOT NULL,
  `nombre_dia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_armas`
--

CREATE TABLE `tbl_tipos_armas` (
  `id_tipos_arma` bigint(20) NOT NULL,
  `nombre_tipo_arma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_zonas`
--

CREATE TABLE `tbl_zonas` (
  `id_zona` bigint(20) NOT NULL,
  `nombre_zona` varchar(255) DEFAULT NULL,
  `direccion_zona` text NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_agentes`
--
ALTER TABLE `tbl_agentes`
  ADD PRIMARY KEY (`id_agente`);

--
-- Indices de la tabla `tbl_armas`
--
ALTER TABLE `tbl_armas`
  ADD PRIMARY KEY (`id_arma`);

--
-- Indices de la tabla `tbl_dias`
--
ALTER TABLE `tbl_dias`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indices de la tabla `tbl_tipos_armas`
--
ALTER TABLE `tbl_tipos_armas`
  ADD PRIMARY KEY (`id_tipos_arma`);

--
-- Indices de la tabla `tbl_zonas`
--
ALTER TABLE `tbl_zonas`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_agentes`
--
ALTER TABLE `tbl_agentes`
  MODIFY `id_agente` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_armas`
--
ALTER TABLE `tbl_armas`
  MODIFY `id_arma` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_tipos_armas`
--
ALTER TABLE `tbl_tipos_armas`
  MODIFY `id_tipos_arma` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_zonas`
--
ALTER TABLE `tbl_zonas`
  MODIFY `id_zona` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
