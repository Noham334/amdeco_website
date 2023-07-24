-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 30-01-2019 a las 15:39:31
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `folder` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `titulo`, `descripcion`, `lugar`, `folder`, `src`, `fecha`) VALUES
(1, 'Capacitacion impuestos', 'nada todavia', 'amdeco', 'uploads/', '7.docx', '2019-01-17'),
(2, 'Taller IVA', 'Manejo de inventarios', 'amdeco', 'uploads/', 'EJEMPLO_ARBOL_DE_DECISION.pdf', '2019-01-24'),
(3, 'Taller procedimiento administrativo', 'Manejo de personal administrativo', 'amdeco', 'uploads/', 'EjSELECTcomplex3.pdf', '2019-01-25'),
(4, 'TALLER DE CAPACITACIÃ“N', 'Manejo de personal administrativo', 'amdeco', 'uploads/', 'gastos_tiquipaya.docx', '2019-01-29'),
(5, 'TALLER DE CAPACITACIÃ“N', 'Manejo de inventarios', 'amdeco', 'uploads/', 'EJEMPLO_TABLA_DE_DECISION_7.pdf', '0000-00-00'),
(6, 'TALLER DE CAPACITACIÃ“N', 'Manejo de personal administrativo', 'amdeco', 'uploads/', 'EJEMPLO_TABLA_DE_DECISION_8.pdf', '0000-00-00'),
(7, 'Capacitacion impuestos', 'Manejo de personal administrativo', 'amdeco', 'uploads/', 'EJEMPLO_TABLA_DE_DECISION_9.pdf', '0000-00-00'),
(8, 'TALLER DE CAPACITACIÃ“N', 'Manejo de inventarios', 'amdeco', 'uploads/', 'EJEMPLO_TABLA_DE_DECISION_11.pdf', '2019-01-30'),
(9, 'Taller IVA', 'nada todavia', 'amdeco', 'uploads/', '22270frontfacingbabychick_98728_1.png', '2019-01-31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
