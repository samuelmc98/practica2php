-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2020 a las 21:38:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_gestion_de_notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_administrador`
--

CREATE TABLE `tbl_administrador` (
  `id_administrador` int(11) NOT NULL,
  `email_administrador` varchar(255) NOT NULL,
  `passwd_administrador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_administrador`
--

INSERT INTO `tbl_administrador` (`id_administrador`, `email_administrador`, `passwd_administrador`) VALUES
(1, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumnos`
--

CREATE TABLE `tbl_alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(255) NOT NULL,
  `primer_apellido_alummno` varchar(255) NOT NULL,
  `segundo_apellido_alumno` varchar(255) NOT NULL,
  `grupo_alumno` varchar(255) NOT NULL,
  `email_alumno` varchar(255) NOT NULL,
  `passwd_alumno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_alumnos`
--

INSERT INTO `tbl_alumnos` (`id_alumno`, `nombre_alumno`, `primer_apellido_alummno`, `segundo_apellido_alumno`, `grupo_alumno`, `email_alumno`, `passwd_alumno`) VALUES
(6, 'ytjtyj', 'YJYTJY', 'jtyj', '', '', ''),
(7, 'samu', 'muñ', 'GRAMOkuik', 'daw', 'sau@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notas`
--

CREATE TABLE `tbl_notas` (
  `id_asignatura` int(11) NOT NULL,
  `nombre_asignatura` varchar(255) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `nota_alumno` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `tbl_alumnos`
--
ALTER TABLE `tbl_alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `tbl_notas`
--
ALTER TABLE `tbl_notas`
  ADD PRIMARY KEY (`id_asignatura`),
  ADD KEY `fk_alumnos_notas` (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_alumnos`
--
ALTER TABLE `tbl_alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_notas`
--
ALTER TABLE `tbl_notas`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_notas`
--
ALTER TABLE `tbl_notas`
  ADD CONSTRAINT `fk_alumnos_notas` FOREIGN KEY (`id_alumno`) REFERENCES `tbl_alumnos` (`id_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
