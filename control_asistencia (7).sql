-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2024 a las 13:06:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_asistencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `idasistencia` int(11) NOT NULL,
  `codigo_persona` varchar(20) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo` varchar(45) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`idasistencia`, `codigo_persona`, `fecha_hora`, `tipo`, `fecha`) VALUES
(135, '444', '2024-10-29 14:49:41', 'Salida', '2024-10-29'),
(136, '444', '2024-10-29 14:49:49', 'Entrada', '2024-10-29'),
(137, '123', '2024-10-29 14:59:10', 'Entrada', '2024-10-29'),
(138, '444', '2024-10-29 15:00:58', 'Salida', '2024-10-29'),
(139, '444', '2024-10-29 15:01:03', 'Entrada', '2024-10-29'),
(140, '123', '2024-10-29 15:04:44', 'Salida', '2024-10-29'),
(141, '123', '2024-10-29 15:04:49', 'Entrada', '2024-10-29'),
(142, '123', '2024-10-29 15:06:08', 'Salida', '2024-10-29'),
(143, '123', '2024-10-29 15:06:15', 'Entrada', '2024-10-29'),
(144, '444', '2024-10-29 15:07:16', 'Salida', '2024-10-29'),
(145, '123', '2024-10-29 15:08:11', 'Salida', '2024-10-29'),
(146, '123', '2024-10-29 15:09:08', 'Entrada', '2024-10-29'),
(147, '123', '2024-10-29 15:10:11', 'Salida', '2024-10-29'),
(148, '123', '2024-10-29 15:11:00', 'Entrada', '2024-10-29'),
(149, '123', '2024-10-29 15:11:30', 'Salida', '2024-10-29'),
(150, '444', '2024-11-25 14:41:58', 'Entrada', '2024-11-25'),
(151, '444', '2024-11-25 14:42:12', 'Salida', '2024-11-25'),
(152, '444', '2024-11-25 14:51:52', 'Entrada', '2024-11-25'),
(153, '444', '2024-11-25 14:51:58', 'Salida', '2024-11-25'),
(154, '444', '2024-11-25 14:52:07', 'Entrada', '2024-11-25'),
(155, '444', '2024-11-25 14:53:57', 'Salida', '2024-11-25'),
(156, '444', '2024-11-25 15:41:36', 'Entrada', '2024-11-25'),
(157, '444', '2024-11-25 15:41:48', 'Salida', '2024-11-25'),
(158, '444', '2024-11-25 15:44:18', 'Entrada', '2024-11-25'),
(159, '444', '2024-11-25 15:44:25', 'Salida', '2024-11-25'),
(160, '444', '2024-11-25 16:12:51', 'Salida', '2024-11-25'),
(161, '444', '2024-11-25 16:12:56', 'Entrada', '2024-11-25'),
(162, '444', '2024-11-25 16:13:01', 'Salida', '2024-11-25'),
(163, '444', '2024-11-27 05:46:41', 'Entrada', '2024-11-27'),
(164, '444', '2024-11-27 05:47:32', 'Salida', '2024-11-27'),
(165, '555', '2024-11-27 05:50:57', 'Entrada', '2024-11-27'),
(166, '555', '2024-11-27 05:51:03', 'Salida', '2024-11-27'),
(167, '444', '2024-11-27 23:52:35', 'Entrada', '2024-11-27'),
(168, '444', '2024-11-27 23:52:42', 'Salida', '2024-11-27'),
(169, '555', '2024-11-27 23:52:49', 'Entrada', '2024-11-27'),
(170, '555', '2024-11-27 23:52:55', 'Salida', '2024-11-27'),
(171, '444', '2024-11-28 00:08:54', 'Entrada', '2024-11-27'),
(172, '444', '2024-11-28 00:09:00', 'Salida', '2024-11-27'),
(173, '555', '2024-11-28 00:09:21', 'Entrada', '2024-11-27'),
(174, '555', '2024-11-28 00:09:27', 'Salida', '2024-11-27'),
(175, '444', '2024-11-28 02:26:22', 'Entrada', '2024-11-27'),
(176, '444', '2024-11-28 02:26:28', 'Salida', '2024-11-27'),
(177, '444', '2024-11-28 09:42:25', 'Entrada', '2024-11-28'),
(178, '444', '2024-11-28 09:42:33', 'Salida', '2024-11-28'),
(179, '555', '2024-11-28 09:42:41', 'Entrada', '2024-11-28'),
(180, '555', '2024-11-28 09:42:48', 'Salida', '2024-11-28'),
(181, '666', '2024-11-28 10:10:00', 'Entrada', '2024-11-28'),
(182, '666', '2024-11-28 10:10:08', 'Salida', '2024-11-28'),
(183, '666', '2024-11-28 10:17:24', 'Entrada', '2024-11-28'),
(184, '666', '2024-11-28 10:17:31', 'Salida', '2024-11-28'),
(185, '666', '2024-11-28 10:19:59', 'Entrada', '2024-11-28'),
(186, '666', '2024-11-28 10:20:10', 'Salida', '2024-11-28'),
(187, '777', '2024-11-28 12:02:26', 'Entrada', '2024-11-28'),
(188, '777', '2024-11-28 12:02:33', 'Salida', '2024-11-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fechacreada` datetime NOT NULL,
  `idusuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`iddepartamento`, `nombre`, `descripcion`, `fechacreada`, `idusuario`) VALUES
(1, 'Personal de prevencion', 'Prevenir robos y hurtos', '2024-01-26 00:00:00', '1'),
(2, 'Atención al cliente', 'encargado de guiar al cliente', '2024-01-26 00:15:24', '1'),
(4, 'Administración', 'encargado del establecimiento', '2024-01-26 21:25:08', '1'),
(5, 'cajero', 'encargado de los movimientos de caja', '2024-01-26 21:25:45', '1'),
(6, 'Personal de Vigilancia', 'vigilante', '2024-01-26 21:26:14', '1'),
(7, 'Personal de Limpieza', 'encargado de la limpieza del establecimiento', '0000-00-00 00:00:00', '1'),
(8, 'limpieza2', 'limpieza2', '2024-11-28 05:34:25', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idtipousuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fechacreada` datetime NOT NULL,
  `idusuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idtipousuario`, `nombre`, `descripcion`, `fechacreada`, `idusuario`) VALUES
(1, 'Administrador', 'Con priviliegios de gestionar todo el sistema', '2024-01-26 00:00:00', '1'),
(2, 'empleado', 'promueve los productos', '2024-01-26 00:30:13', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `iddepartamento` int(11) NOT NULL,
  `idtipousuario` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `fechacreado` datetime NOT NULL,
  `codigo_persona` varchar(20) DEFAULT NULL,
  `iteracion` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `apellidos`, `user`, `iddepartamento`, `idtipousuario`, `email`, `password`, `imagen`, `estado`, `fechacreado`, `codigo_persona`, `iteracion`) VALUES
(1, 'yampiers', 'Quispe', 'yampiers', 4, 1, 'yampiers@gmail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'default.jpg', 1, '2024-01-26 00:00:00', '444', 1),
(19, 'paola', 'astrid', 'paola', 2, 2, 'paola@gmail.com', '0baff97ff722b0be472c1ff5a1edabf7cefb089d0575794975c3007989327efa', '', 1, '2024-11-26 23:49:53', '555', 0),
(24, 'juan', 'Perez', 'juancito', 5, 2, 'juan@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '1732792775.png', 1, '2024-11-28 04:16:05', '666', 0),
(25, 'pedro', 'gonzales', 'pedro', 7, 2, 'pedro@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '', 1, '2024-11-28 06:00:56', '777', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`idasistencia`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idtipousuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `login` (`user`),
  ADD UNIQUE KEY `codigo_persona` (`codigo_persona`),
  ADD KEY `fk_departamento` (`iddepartamento`),
  ADD KEY `fk_tiposusario` (`idtipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `idasistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idtipousuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idtipousuario`) REFERENCES `tipousuario` (`idtipousuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
