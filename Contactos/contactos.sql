-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2019 a las 16:54:05
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amdeco_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(55) NOT NULL,
  `asunto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `telefono`, `correo`, `asunto`) VALUES
(7, 'rodrigo', '75914388', 'morfeo_che@hotmail.com', 'g3gwegweg'),
(8, 'mabel', '77927901', 'morfeo_che@hotmail.com', 'hola como estas me escribes '),
(9, 'mabel ortiz', '75914388', 'morfeo_che@hotmail.com', 'solicitud de encomieda'),
(10, 'sergio', '75914388', 'morfeo_che@hotmail.com', 'asfcawfaaaaaaaa'),
(13, 'mija', '75914388', 'morfeo_che@hotmail.com', 'afafafaaaaaaaa'),
(14, 'rodrigo', '75914388', 'morfeo_che@hotmail.com', ' Hoy en horas de la maÃ±ana se produjo un nuevo deslizamiento en la vÃ­a entre Caranavi y Santa BÃ¡rbara, La Paz, lo que podrÃ­a provocar retraso en los trabajos que la Administradora Boliviana de Caminos (ABC) realiza para habilitar plenamente la vÃ­a.\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
