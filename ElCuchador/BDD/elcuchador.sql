-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2020 a las 03:08:11
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elcuchador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `clave` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`clave`, `nombre`, `contra`, `correo`, `tipo`) VALUES
(1, 'Nacho', 'JJLuis2225', 'navarroluis360@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `clave` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `tnegocio` int(2) NOT NULL,
  `tcomida` int(2) NOT NULL,
  `pagina` varchar(30) DEFAULT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudn`
--

CREATE TABLE `solicitudn` (
  `clave` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `tnegocio` int(2) NOT NULL,
  `tcomida` int(2) NOT NULL,
  `pagina` varchar(30) DEFAULT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitudn`
--

INSERT INTO `solicitudn` (`clave`, `nombre`, `contra`, `correo`, `direccion`, `telefono`, `imagen`, `tnegocio`, `tcomida`, `pagina`, `tipo`) VALUES
(1, 'Burger King', 'JJLuis2225', 'navarroluisminecraft@gmail.com', 'Solares Valle de la Garza, Blvd. Miguel de la Madrid 1580, S', '+523141172151', 'assets/imagennegocio/burguerkingofertaaaa.png', 0, 3, 'http://www.burgerking.com.mx/', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `clave` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validador`
--

CREATE TABLE `validador` (
  `clave` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `validador`
--

INSERT INTO `validador` (`clave`, `nombre`, `contra`, `correo`, `tipo`) VALUES
(1, 'Joana', 'joana123', 'jgomez.mig@gmail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`clave`),
  ADD UNIQUE KEY `nombre` (`nombre`,`correo`);

--
-- Indices de la tabla `solicitudn`
--
ALTER TABLE `solicitudn`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`clave`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `validador`
--
ALTER TABLE `validador`
  ADD PRIMARY KEY (`clave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `clave` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `clave` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudn`
--
ALTER TABLE `solicitudn`
  MODIFY `clave` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `clave` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `validador`
--
ALTER TABLE `validador`
  MODIFY `clave` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
