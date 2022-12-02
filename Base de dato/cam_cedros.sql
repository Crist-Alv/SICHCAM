/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100316
 Source Host           : localhost:3306
 Source Schema         : cam_cedros

 Target Server Type    : MySQL
 Target Server Version : 100316
 File Encoding         : 65001

 Date: 01/12/2022 20:27:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_agentes
-- ----------------------------
DROP TABLE IF EXISTS `tbl_agentes`;
CREATE TABLE `tbl_agentes`  (
  `id_agente` bigint NOT NULL AUTO_INCREMENT,
  `nombre_agente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellido_agente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dui_agente` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sexo_agente` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `codigo_cam_agente` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefono_agente` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correo_agente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `activo` tinyint NOT NULL,
  PRIMARY KEY (`id_agente`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_agentes
-- ----------------------------
INSERT INTO `tbl_agentes` VALUES (1, 'Carlos Daniel', 'PÃ©rez Sosa', '9898498-4', 'Masculino', '1984-9', '5189-4899', 'dani@gmail.com', 'dsfasdgrgdf', 1);
INSERT INTO `tbl_agentes` VALUES (3, 'Cristian MoisÃ©s', 'Alvarado Campos', '3575345-3', 'Masculino', '1868-6', '7876-5434', 'cristts2.0@gmail.com', 'ghmj537254', 1);
INSERT INTO `tbl_agentes` VALUES (21, 'Flor MarÃ­a', 'HernÃ¡ndez LÃ³pez', '4168434-7', 'Femenino', '1453-4', '7845-3287', 'mari@gmail.com', '78fghffdgh', 1);

-- ----------------------------
-- Table structure for tbl_armas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_armas`;
CREATE TABLE `tbl_armas`  (
  `id_arma` bigint NOT NULL AUTO_INCREMENT,
  `modelo_arma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_tipo_arma` bigint NOT NULL,
  `serie_arma` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `matricula_arma` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_arma`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_dias
-- ----------------------------
DROP TABLE IF EXISTS `tbl_dias`;
CREATE TABLE `tbl_dias`  (
  `id_dia` bigint NOT NULL,
  `nombre_dia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_dia`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_tipos_armas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tipos_armas`;
CREATE TABLE `tbl_tipos_armas`  (
  `id_tipos_arma` bigint NOT NULL AUTO_INCREMENT,
  `nombre_tipo_arma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_tipos_arma`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE `tbl_usuario`  (
  `id_User` int NOT NULL AUTO_INCREMENT,
  `nombre_User` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sexo_User` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `correo_User` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rol_User` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass_User` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_User`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_usuario
-- ----------------------------
INSERT INTO `tbl_usuario` VALUES (1, 'Cristian Alvarado', 'Masculino', 'cristts2.0@gmail.com', 'Administrador', 'Q3Jpc3RpYW4yLjA=', 1);
INSERT INTO `tbl_usuario` VALUES (5, 'Pedro', 'Masculino', 'pedro@gmail.com', 'Agente', 'cGVkcm8xMjM=', 0);
INSERT INTO `tbl_usuario` VALUES (6, 'Carlos Daniel', 'Masculino', 'dani@gmail.com', 'Agente', 'UMOpcmV6IFNvc2ExODM4NQ==', 1);
INSERT INTO `tbl_usuario` VALUES (26, 'Flor MarÃ­a', 'Femenino', 'mari@gmail.com', 'Agente', 'SGVybsOhbmRleiBQw6lyZXoyMzExMg==', 1);

-- ----------------------------
-- Table structure for tbl_zonas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_zonas`;
CREATE TABLE `tbl_zonas`  (
  `id_zona` bigint NOT NULL AUTO_INCREMENT,
  `nombre_zona` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `direccion_zona` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `activo` tinyint NOT NULL,
  PRIMARY KEY (`id_zona`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
