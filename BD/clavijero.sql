-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2020 a las 00:33:05
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clavijero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscontacto`
--

CREATE TABLE `datoscontacto` (
  `ID` int(11) NOT NULL,
  `CURPEmpleado` varchar(20) CHARACTER SET latin1 NOT NULL,
  `CorreoPersonal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `CorreoInstitucion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `TelefonoCasa` varchar(12) CHARACTER SET latin1 NOT NULL,
  `TelefonoCelular` varchar(12) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscontactodependiente`
--

CREATE TABLE `datoscontactodependiente` (
  `ID` int(11) NOT NULL,
  `CurpDependiente` varchar(20) CHARACTER SET latin1 NOT NULL,
  `CorreoPersonal` varchar(100) NOT NULL,
  `Celular` int(11) NOT NULL,
  `TelefonoCasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosempresa`
--

CREATE TABLE `datosempresa` (
  `ID` int(11) NOT NULL,
  `CURPEmpleado` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Cargo` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Depto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Subdireccion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Piso` int(11) NOT NULL,
  `Extension` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Responsable` varchar(2) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependienteeconomico`
--

CREATE TABLE `dependienteeconomico` (
  `ID` int(11) NOT NULL,
  `CURPEmpleado` varchar(20) NOT NULL,
  `CurpDependiente` varchar(20) NOT NULL,
  `NombreD` varchar(20) NOT NULL,
  `ApPaternoD` varchar(20) NOT NULL,
  `ApMaternoD` varchar(20) NOT NULL,
  `Calle` varchar(20) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID` int(11) NOT NULL,
  `CURPEmpleado` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `ApPaterno` varchar(20) NOT NULL,
  `ApMaterno` varchar(20) NOT NULL,
  `Sexo` varchar(12) NOT NULL,
  `FecNac` date NOT NULL,
  `EstadoCivil` varchar(15) NOT NULL,
  `RFC` varchar(18) NOT NULL,
  `SegSocial` varchar(18) NOT NULL,
  `INE` varchar(20) NOT NULL,
  `TipoSangre` varchar(20) NOT NULL,
  `Calle` varchar(40) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Colonia` varchar(40) NOT NULL,
  `Localidad` varchar(40) NOT NULL,
  `Municipio` varchar(40) NOT NULL,
  `Estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `ID` int(11) NOT NULL,
  `CURPEmpleado` varchar(20) NOT NULL,
  `MaxEstudio` varchar(20) NOT NULL,
  `EstudioAlcanzado` varchar(20) NOT NULL,
  `NumComprobEst` varchar(20) NOT NULL,
  `Escuela` varchar(100) NOT NULL,
  `Duracion` varchar(20) NOT NULL,
  `Cedula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `ID` int(11) NOT NULL,
  `CURPEmpleado` varchar(20) NOT NULL,
  `Imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro`
--

CREATE TABLE `otro` (
  `ID` int(11) NOT NULL,
  `CURPEmpleado` varchar(20) NOT NULL,
  `EnfermedadAlergia` varchar(100) NOT NULL,
  `Observacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datoscontacto`
--
ALTER TABLE `datoscontacto`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `CURPEmpleado` (`CURPEmpleado`);

--
-- Indices de la tabla `datoscontactodependiente`
--
ALTER TABLE `datoscontactodependiente`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indices de la tabla `datosempresa`
--
ALTER TABLE `datosempresa`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `CURPEmpleado` (`CURPEmpleado`);

--
-- Indices de la tabla `dependienteeconomico`
--
ALTER TABLE `dependienteeconomico`
  ADD PRIMARY KEY (`CurpDependiente`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`),
  ADD KEY `CURPEmpleado` (`CURPEmpleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`CURPEmpleado`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `CURPEmpleado` (`CURPEmpleado`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `CURPEmpleado` (`CURPEmpleado`);

--
-- Indices de la tabla `otro`
--
ALTER TABLE `otro`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `CURPEmpleado` (`CURPEmpleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datoscontacto`
--
ALTER TABLE `datoscontacto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `datoscontactodependiente`
--
ALTER TABLE `datoscontactodependiente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `datosempresa`
--
ALTER TABLE `datosempresa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dependienteeconomico`
--
ALTER TABLE `dependienteeconomico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `otro`
--
ALTER TABLE `otro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datoscontacto`
--
ALTER TABLE `datoscontacto`
  ADD CONSTRAINT `datoscontacto_ibfk_1` FOREIGN KEY (`CURPEmpleado`) REFERENCES `empleado` (`CURPEmpleado`);

--
-- Filtros para la tabla `datosempresa`
--
ALTER TABLE `datosempresa`
  ADD CONSTRAINT `datosempresa_ibfk_1` FOREIGN KEY (`CURPEmpleado`) REFERENCES `empleado` (`CURPEmpleado`);

--
-- Filtros para la tabla `dependienteeconomico`
--
ALTER TABLE `dependienteeconomico`
  ADD CONSTRAINT `dependienteeconomico_ibfk_1` FOREIGN KEY (`CURPEmpleado`) REFERENCES `empleado` (`CURPEmpleado`);

--
-- Filtros para la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD CONSTRAINT `estudio_ibfk_1` FOREIGN KEY (`CURPEmpleado`) REFERENCES `empleado` (`CURPEmpleado`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`CURPEmpleado`) REFERENCES `empleado` (`CURPEmpleado`);

--
-- Filtros para la tabla `otro`
--
ALTER TABLE `otro`
  ADD CONSTRAINT `otro_ibfk_1` FOREIGN KEY (`CURPEmpleado`) REFERENCES `empleado` (`CURPEmpleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
