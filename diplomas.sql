-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-04-2025 a las 14:38:51
-- Versión del servidor: 8.0.41-0ubuntu0.20.04.1
-- Versión de PHP: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-06:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abriltest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `td_curso_usuario`
--

CREATE TABLE `td_curso_usuario` (
  `curd_id` int NOT NULL,
  `cur_id` int NOT NULL,
  `usu_id` int NOT NULL,
  `fech_crea` datetime NOT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;


CREATE TABLE `tm_categoria` (
  `cat_id` int NOT NULL,
  `cat_nom` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;


--
-- Estructura de tabla para la tabla `tm_curso`
--

CREATE TABLE `tm_curso` (
  `cur_id` int NOT NULL,
  `cat_id` int NOT NULL,
  `cur_nom` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `cur_descrip` varchar(1000) COLLATE utf8mb3_spanish_ci NOT NULL,
  `cur_fechini` date DEFAULT NULL,
  `cur_fechfin` date DEFAULT NULL,
  `inst_id` int NOT NULL,
  `cur_img` varchar(250) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `tm_curso`
--

INSERT INTO `tm_curso` (`cur_id`, `cat_id`, `cur_nom`, `cur_descrip`, `cur_fechini`, `cur_fechfin`, `inst_id`, `cur_img`, `fech_crea`, `est`) VALUES
(26, 9, 'SBRM 2024', 'Certificado emitido por IEEE Seccion El Salvador para el SBRM 2024', '2024-10-29', '2024-10-31', 1, '../../public/690977225.jpg', '2024-11-16 20:05:57', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_instructor`
--

CREATE TABLE `tm_instructor` (
  `inst_id` int NOT NULL,
  `inst_nom` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `inst_apep` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `inst_apem` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `inst_correo` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `inst_sex` varchar(1) COLLATE utf8mb3_spanish_ci NOT NULL,
  `inst_telf` varchar(12) COLLATE utf8mb3_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `tm_instructor`
--

INSERT INTO `tm_instructor` (`inst_id`, `inst_nom`, `inst_apep`, `inst_apem`, `inst_correo`, `inst_sex`, `inst_telf`, `fech_crea`, `est`) VALUES
(1, 'Isidro', 'Marroquin', 'Echeverria', 'alexandermarq@ieee.org', 'M', '50372064733', '2021-04-26 20:24:06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `usu_id` int NOT NULL,
  `usu_nom` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `usu_apep` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `usu_apem` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `usu_correo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `usu_pass` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `usu_sex` varchar(1) COLLATE utf8mb3_spanish_ci NOT NULL,
  `usu_telf` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `rol_id` int NOT NULL,
  `usu_dni` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int NOT NULL,
  `p_1_c` tinyint DEFAULT NULL,
  `p_2_c` tinyint DEFAULT NULL,
  `p_3_c` tinyint DEFAULT NULL,
  `p_4_t` text COLLATE utf8mb3_spanish_ci,
  `p_5_c` tinyint DEFAULT NULL,
  `p_6_c` tinyint DEFAULT NULL,
  `p_7_c` tinyint DEFAULT NULL,
  `p_8_t` text COLLATE utf8mb3_spanish_ci,
  `p_9_c` tinyint DEFAULT NULL,
  `p_10_c` tinyint DEFAULT NULL,
  `p_11_t` text COLLATE utf8mb3_spanish_ci,
  `p_12_c` tinyint DEFAULT NULL,
  `p_13_c` tinyint DEFAULT NULL,
  `est_encuesta` tinyint DEFAULT '0',
  `fecha_respuesta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Indices de la tabla `td_curso_usuario`
--
ALTER TABLE `td_curso_usuario`
  ADD PRIMARY KEY (`curd_id`);

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  ADD PRIMARY KEY (`cur_id`);

--
-- Indices de la tabla `tm_instructor`
--
ALTER TABLE `tm_instructor`
  ADD PRIMARY KEY (`inst_id`);

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `td_curso_usuario`
--
ALTER TABLE `td_curso_usuario`
  MODIFY `curd_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  MODIFY `cur_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tm_instructor`
--
ALTER TABLE `tm_instructor`
  MODIFY `inst_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- 1. Agregar campos adicionales a tm_usuario
ALTER TABLE tm_usuario
ADD COLUMN pasaporte_numero VARCHAR(20),
ADD COLUMN pais_procedencia VARCHAR(100),
ADD COLUMN numero_miembro_ieee VARCHAR(50),
ADD COLUMN membresia_ieee ENUM('IEEE Professional', 'IEEE Student', 'No miembro IEEE');

-- 2. Crear tabla tm_planes
CREATE TABLE tm_planes (
    plan_id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    membresia_ieee ENUM('IEEE Professional', 'IEEE Student', 'No miembro IEEE') NOT NULL
);

-- 3. Crear tabla tm_pagos
CREATE TABLE tm_pagos (
    pago_id INT AUTO_INCREMENT PRIMARY KEY,
    usu_id INT NOT NULL,
    plan_id INT NOT NULL,
    enlace_pago TEXT,
    estado_pago ENUM('Pendiente', 'Pagado', 'Cancelado') DEFAULT 'Pendiente',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_pago DATETIME,
    id_transaccion VARCHAR(100),
    url_pago TEXT,
    monto_pago DECIMAL(10,2),
    FOREIGN KEY (usu_id) REFERENCES tm_usuario(usu_id),
    FOREIGN KEY (plan_id) REFERENCES tm_planes(plan_id)
);
