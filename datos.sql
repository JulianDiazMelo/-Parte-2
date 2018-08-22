-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2018 a las 10:30:13
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `tarjeta` varchar(20) NOT NULL,
  `titular` varchar(30) NOT NULL,
  `numero` int(20) NOT NULL,
  `cvv2` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `telefono` int(30) NOT NULL,
  `codigo` int(30) NOT NULL,
  `pregunta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ID`, `nombre`, `apellido`, `correo`, `tarjeta`, `titular`, `numero`, `cvv2`, `fecha`, `direccion`, `ciudad`, `zipcode`, `pais`, `telefono`, `codigo`, `pregunta`) VALUES
(10, 'Julian David', 'Diaz Melo', 'jdiazmelo@uniminuto.edu.co', '', '2451544524', 365245225, 2541, '2018-08-16', 'Calle Uniminuto', 'Bogota', 254, 'francia', 2147483647, 3524, ''),
(11, 'Tulio Perez', 'Manco ', 'jhmk@hotmail.com', 'bancolombia', '564564', 5645745, 7546, '2018-08-07', '4564456', '345346', 345654645, 'estadosunidos', 6456456, 34536546, 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
