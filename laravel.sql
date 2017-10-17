-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2017 a las 00:12:42
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcat` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcat`, `nombre`) VALUES
(19, 'Acero y sus derivados'),
(20, 'Cemento'),
(21, 'Hormigón'),
(22, 'Viguetas'),
(23, 'Complementos'),
(24, 'Maquinarias'),
(25, 'Equipos'),
(26, 'Repuestos'),
(27, 'Materiales Eléctricos'),
(28, 'Madera y sus derivados'),
(29, 'Pruebas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria`
--

CREATE TABLE IF NOT EXISTS `convocatoria` (
  `idpublic` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(10) NOT NULL,
  `idcat` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convocatoria`
--

INSERT INTO `convocatoria` (`idpublic`, `titulo`, `descripcion`, `fecha`, `estado`, `idcat`) VALUES
(1, 'prueba-1', 'https://www.dropbox.com/s/xvz55izqx6hs35x/Licitacion.docx?dl=1', '2017-10-12', 'activa', 29),
(2, 'prueba-2', 'https://www.dropbox.com/s/xvz55izqx6hs35x/Licitacion.docx?dl=1', '2017-10-12', 'activa', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `proveedor` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `privilegio` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `correo`, `password`, `remember_token`, `proveedor`, `telefono`, `direccion`, `privilegio`) VALUES
(2, 'richardpizarrocampos@gmail.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', '7JIWyc5yri9Qj277XFFjZzi4QUmNVTxN6DbkWDPz727f4Sl5A9XqWWVejQXl', 'empresa-1', '725-25368', 'calle/Los Angeles', 0),
(3, 'pizarrocamposrichard@gmail.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'KhlNeTODuPwHGdkkqGfDURywluAlK9EMAesi8fHcsl0fvpeXiqwGhplVOvXO', 'empresa-2', '898-12345', 'calle/San José', 0),
(5, 'sonia.roca@laslomas.com.bo', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'ilC2k7o5RqY62LqdFeBCNbKf1LIG8VLEUIoK1LYybmASsgNBsx7UHXHWpxKD', 'IMPORT EXPORT LAS LOMAS LTDA', '', '', 0),
(6, 'prom_constructoras@ferrotodo.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'SRFHsm6qGze79bDDbXmx0yMTGjrJGGKXPjBe88BxXno82IDvYMvZsIuvaOdm', 'INDUSTRIAS FERROTODO LTDA', '', '', 0),
(7, 'pherrera@monterreysrl.com.bo', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'gjLFkp0uU9oMmIxFWqOtwVnOkhJdiW4vHIDHkn3AsZD8DaBpERSB0znblv58', 'IMPORTADORA MONTERREY S.R.L', '', '', 0),
(8, 'robin.calvo@itacamba.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'P35fb1ThrLThEy3qj20BWwTiVJ1FDzXGz1tbXQI3LazwH8oV689IEhU07P4f', 'ITACAMBA CEMENTO S.A', '', '', 0),
(9, 'dbaes@concretec.com.bo', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'ZvMM5P5LN3GYaTCzvfxOiHqICgubesblk0fthXVGEE9Duj37BCWmcuBdR7nG', 'INVERSIONES SUCRE S.A', '', '', 0),
(10, 'jfuentes@soboce.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'UHFzGkQS6dCWv2Z7mMv5Kf6xeZs60kkvzT05XuccvLno5MXP8LH9K2WktHaP', 'SOCIEDAD BOLIVIANA DE CEMENTO S.A', '', '', 0),
(11, 'rhchavez@prefortesa.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'Q9IPgvrqu5UWGaVEpoz2HOqi6yWo3iUj20I3baz8uw71MDolqMkHRcXhjgiU', 'PREFORTE PRETENSADOS Y HORMIGONES S.A', '', '', 0),
(12, 'javier@polimix.com.bo', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'Edwp9Q0ftNJH7Yl6d4Owx4f8YRfdYXqBI7wvzwwqozQJkHAtQXnH3cWBuINF', 'POLIMIX BOLIVIA HORMIGON S.R.L', '', '', 0),
(13, 'cinthya_tellez@koncreto.com.bo', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'cV8kxtkEEbWwVxXVPCbvgO4IAN2x2CNfvVCYJHPEaUrnteHBKzHl4VVq9FFb', 'FABRICA DE HORMIGON KONCRETO S.A', '', '', 0),
(14, 'repuestos@saci.com.bo', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'sGBadgZCkZdPP9n92mFHtx2XtY8Xy20BiNQM2GemlMYLVpz0l6PQsYY6W4aH', 'SACI', '', '', 0),
(15, 'pedro.perez@finning.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'OzD7IqVTwzvNgXW69toNVF2G2wSFI2aR6jg1aEudfO455BU80ylgaCVmI3qd', 'FINNING BOLIVIA S.A', '', '', 0),
(16, 'ener-jacobo@electrored.com.bo', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', 'huhr5o3LDl9w8jaT6UJpKePdXIxYZ1hnOctNJT81kodTXE62c5e9qIvdqJyF', 'ELECTRORED BOLIVIA S.R.L', '', '', 0),
(17, 'aarias@gruporoda.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', '7CoCQBS6o66FrQHAT57FPatQeoZ59gb3wkYkweVhGW2LwjrwqMkAAw2Tk3Pf', 'INDUSTRIA FORESTAL CIMAL IMR S.A', '', '', 0),
(18, 'richardpizarro@grayhatcorp.com', '$2y$10$cWT1lfoxATLbbh8RWwlbgOgLca3UiDt1S4Ey1SO0PC/5o.hX1pF0a', '0YgH52tCqmn0YXCbl4IW7wWuwBZPYLd4G9v0wEcCERUbo0pn2mjZnV08ZHyL', 'Incotec', '(591 3) 342-9522', '5to. Anillo, esquina radial 27.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov_cat`
--

CREATE TABLE IF NOT EXISTS `prov_cat` (
  `id` int(11) NOT NULL,
  `idcat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prov_cat`
--

INSERT INTO `prov_cat` (`id`, `idcat`) VALUES
(2, 19),
(5, 19),
(6, 19),
(7, 19),
(18, 19),
(2, 20),
(8, 20),
(9, 20),
(10, 20),
(18, 20),
(2, 21),
(10, 21),
(11, 21),
(12, 21),
(13, 21),
(18, 21),
(2, 22),
(10, 22),
(11, 22),
(18, 22),
(2, 23),
(10, 23),
(11, 23),
(18, 23),
(2, 24),
(14, 24),
(15, 24),
(18, 24),
(2, 25),
(14, 25),
(15, 25),
(18, 25),
(2, 26),
(14, 26),
(15, 26),
(18, 26),
(2, 27),
(16, 27),
(18, 27),
(2, 28),
(17, 28),
(18, 28),
(2, 29),
(3, 29),
(18, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov_conv`
--

CREATE TABLE IF NOT EXISTS `prov_conv` (
  `id` int(11) NOT NULL,
  `idpublic` int(10) NOT NULL,
  `fecha_ad` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcat`);

--
-- Indices de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD PRIMARY KEY (`idpublic`), ADD KEY `idcat` (`idcat`), ADD KEY `idcat_2` (`idcat`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prov_cat`
--
ALTER TABLE `prov_cat`
  ADD PRIMARY KEY (`id`,`idcat`), ADD KEY `idcat` (`idcat`);

--
-- Indices de la tabla `prov_conv`
--
ALTER TABLE `prov_conv`
  ADD PRIMARY KEY (`id`,`idpublic`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcat` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  MODIFY `idpublic` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prov_cat`
--
ALTER TABLE `prov_cat`
ADD CONSTRAINT `prov_cat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `proveedor` (`id`),
ADD CONSTRAINT `prov_cat_ibfk_2` FOREIGN KEY (`idcat`) REFERENCES `categoria` (`idcat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
