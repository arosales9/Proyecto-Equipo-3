-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2018 a las 04:40:36
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
-- Base de datos: `data_project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idproyecto` int(250) NOT NULL,
  `nombreproyecto` varchar(250) NOT NULL,
  `descripcion` longtext NOT NULL,
  `encargado` varchar(250) NOT NULL,
  `CalificacionPro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idproyecto`, `nombreproyecto`, `descripcion`, `encargado`, `CalificacionPro`) VALUES
(1, 'Proyecto 1', 'Este es mi primer proyecto', 'Antoni', 0),
(2, 'Proyecto 1', 'Este es mi primer proyecto', 'Antoni', 0),
(3, 'aaa', 'aa', 'yo', 0),
(4, 'aaa', 'askpcjndsp', 'yo', 0),
(5, 'Uno', 'DockStyle', 'tres', 0),
(6, 'Uno', 'DockStyle', 'tres', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rfid`
--

CREATE TABLE `rfid` (
  `idrfid` int(11) NOT NULL,
  `rfid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rfid`
--

INSERT INTO `rfid` (`idrfid`, `rfid`) VALUES
(1, '2041204186173178\r'),
(2, '204186173178\r'),
(3, '204255173178\r'),
(4, '20204186173178\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(200) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasena` varchar(200) NOT NULL,
  `Correo_electronico` varchar(200) NOT NULL,
  `tipousuario` varchar(200) NOT NULL,
  `rfid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Usuario`, `Contrasena`, `Correo_electronico`, `tipousuario`, `rfid`) VALUES
('a1', 'arosales', 'f55ff16f66f43360266b95db6f8fec01d76031054306ae4a4b380598f6cfd114', 'arosales9@ucol.mx', 'usuario', ''),
('Anthony', 'arosales9', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', 'arosales9@ucol.mx', 'usuario', '2041204186173178');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idproyecto`);

--
-- Indices de la tabla `rfid`
--
ALTER TABLE `rfid`
  ADD PRIMARY KEY (`idrfid`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `usuario` (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idproyecto` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rfid`
--
ALTER TABLE `rfid`
  MODIFY `idrfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
