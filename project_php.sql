-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2022 a las 17:49:36
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `navegacion`
--

CREATE TABLE `navegacion` (
  `id` int(11) NOT NULL,
  `opcion` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `navegacion`
--

INSERT INTO `navegacion` (`id`, `opcion`, `fecha`) VALUES
(1, 'Pago', NULL),
(2, 'Contacto', NULL),
(3, 'Atención', NULL),
(4, 'Nosotros', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda`
--

CREATE TABLE `prenda` (
  `id` int(11) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `imagen` varchar(60) NOT NULL,
  `precio` int(12) NOT NULL,
  `tipo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prenda`
--

INSERT INTO `prenda` (`id`, `nombre`, `imagen`, `precio`, `tipo`) VALUES
(1, 'Camisa M/L hombre unicolor', '../public/imgs/pospago/camisa unicolor.jpg', 20000, 1),
(2, 'camisa manga corta a rayas', '../public/imgs/pospago/camisa a rayas.jpg', 22000, 1),
(3, 'chaqueta efecto piel', '../public/imgs/pospago/chaqueta efecto piel.jpg', 40000, 3),
(4, 'chaqueta jean', '../public/imgs/pospago/chaqueta jean.jpeg', 32000, 3),
(5, 'camisa manga corta jean', '../public/imgs/pospago/camisa jean.jpeg', 25000, 1),
(6, 'camisa en rayas azul', '../public/imgs/pospago/camisa a rayas azul.jpg', 24000, 1),
(7, 'camisa a cuadros', '../public/imgs/pospago/camisa a cuadros.jpg', 24000, 1),
(8, 'camisa estampada', '../public/imgs/pospago/camisa estampada.jpg', 23000, 1),
(9, 'Gorra estampada', '../public/imgs/pospago/gorra estampada.jpg', 17000, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `titulo` varchar(32) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `titulo`, `descripcion`, `imagen`, `fecha`) VALUES
(1, 'Item n1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee', '../public/imgs/pospago/1.jpg', NULL),
(2, 'item n2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '../public/imgs/pospago/2.jpg', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `navegacion`
--
ALTER TABLE `navegacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prenda`
--
ALTER TABLE `prenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `navegacion`
--
ALTER TABLE `navegacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prenda`
--
ALTER TABLE `prenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
