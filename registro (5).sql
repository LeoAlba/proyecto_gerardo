-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2022 a las 08:46:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(10) NOT NULL,
  `nombres` text NOT NULL,
  `apellido_paterno` text NOT NULL,
  `apellido_materno` text NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `numero_celular` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `CURP`, `numero_celular`) VALUES
(1, 'Leonardo', 'Martínez ', 'Romo', 'AARL871223DALUONH0', '4498765432'),
(2, 'Mariano Oswaldo ', 'Quiroz ', 'Cardoso ', 'QCMO050215LOTRBSC4', '4493214589'),
(3, 'David ', 'Bello ', 'Flores', 'BBFD050509UILETCJ6', '4497654326'),
(4, 'Edna Ximena ', 'Torres ', 'Cuevas ', 'TCEX050915AVGTKLM8', '4498217402'),
(5, 'Andrea Julieta ', 'Cruz ', 'Rosales ', 'CRAJ050728MGSULVZ1', '4499530276'),
(6, 'Lizbeth ', 'Herrera ', 'Hernández ', 'HHHL050716SQOLPMS4', '4498762509'),
(7, 'Jeremy ', 'Alférez ', 'Martínez ', 'AAMJ051226MZALORT4', '4490216547'),
(10, 'Valeria ', 'Montoya ', 'Martínez ', 'MMMV991231VSGHUEL3', '4496789034'),
(11, 'Luis', 'Pedroza ', 'Ramos', 'PPRL801027MALUIOS7', '4498543204');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
