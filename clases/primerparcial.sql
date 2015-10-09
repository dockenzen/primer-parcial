-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2015 a las 00:52:55
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `primerparcial`
--
CREATE DATABASE IF NOT EXISTS `primerparcial` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `primerparcial`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarVoto`(IN `param_id` INT(4))
    NO SQL
DELETE FROM `votos` WHERE id=param_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVoto`(IN `param_id` INT(4), IN `param_dni` INT(8), IN `param_prov` VARCHAR(20), IN `param_pres` VARCHAR(10), IN `param_sexo` VARCHAR(10), IN `param_loca` VARCHAR(20), IN `param_dire` VARCHAR(20))
    NO SQL
INSERT INTO `votos`(id, dni, provincia, localidad, direccion, presidente, sexo) VALUES (param_id, param_dni, param_prov, param_loca, param_dire, param_pres, param_sexo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarVoto`(IN `param_id` INT(4), IN `param_dni` INT(8), IN `param_prov` VARCHAR(20), IN `param_pres` VARCHAR(10), IN `param_sexo` VARCHAR(10), IN `param_loca` VARCHAR(20), IN `param_dire` VARCHAR(20))
    NO SQL
UPDATE `votos` SET provincia=param_prov, presidente=param_pres, sexo=param_sexo, localidad=param_loca, direccion=param_dire WHERE id=param_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodo`()
    NO SQL
SELECT * FROM `votos`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerUno`(IN `param_id` INT(4))
    NO SQL
SELECT * FROM `votos` WHERE id=param_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
`id` int(4) NOT NULL,
  `dni` int(8) NOT NULL,
  `provincia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `presidente` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `votos`
--
ALTER TABLE `votos`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
