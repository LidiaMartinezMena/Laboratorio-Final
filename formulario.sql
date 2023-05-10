-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2023 a las 11:30:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratoriofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `Nombre` varchar(20) NOT NULL,
  `Primer_apellido` varchar(20) NOT NULL,
  `Segundo_apellido` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`Nombre`, `Primer_apellido`, `Segundo_apellido`, `Email`, `Login`, `Password`) VALUES
('0', 'Martinez', 'Mena', 'david.achutegui2@gmail.com', 'Lidia29', 'As12!'),
('0', 'Martinez', 'Mena', 'david.achutegui3@gmail.com', 'Lidia29', 'As12!'),
('David', 'Martinez', 'Moreno', 'david.achutegui7@gmail.com', 'Lidia29', 'As12!'),
('0', 'Achutegui', 'Moreno', 'david.achutegui@gmail.com', 'Achu12', 'Ac12!'),
('0', 'Martinez', 'Mena', 'l.martinez.mena2@gmail.com', 'Achu12', 'Ac12!'),
('0', 'Martinez', 'Mena', 'l.martinez.mena3@gmail.com', 'Achu12', 'Ac12!'),
('0', 'Martinez', 'Mena', 'l.martinez.mena4@gmail.com', 'Achu12', 'Ac12!'),
('0', 'Martinez', 'Mena', 'l.martinez.mena5@gmail.com', 'Achu12', 'Ac12!'),
('0', 'Martinez', 'Mena', 'l.martinez.mena6@gmail.com', 'Achu12', 'Ac12!'),
('0', 'Martinez', 'Moreno', 'l.martinez.mena9@gmail.com', 'Achu12', 'Di12!'),
('0', 'Martinez', 'Mena', 'l.martinez.mena@gmail.com', 'Achu12', 'Ac12!'),
('0', 'Perez', 'Lopez', 'luisperez@gmail.com', 'LUis2', 'Lu12!'),
('0', 'Rojas', 'LOrenzo', 'pepelorenzo@gmail.com', 'Pepe12', 'Pep12!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
