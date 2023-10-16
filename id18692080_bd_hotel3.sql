-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-05-2022 a las 14:25:13
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18692080_bd_hotel3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellidos` varchar(70) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `procedencia` varchar(30) NOT NULL,
  `forma_pago` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellidos`, `telefono`, `email`, `procedencia`, `forma_pago`) VALUES
(1, 'Boutique', 'Reyna', '7821026407', 'hboutique_reyna@hotmail.com', 'Av. Constitucion', 'Efectivo'),
(2, 'Eduardo', 'Ocelotl', '7821026407', 'eduardocelotl2016@gmail.com', 'Av. Palafox', 'Efectivo'),
(3, 'Eduardo', 'Ocelotl', '7821026407', 'eduardocelotl2016@gmail.com', 'Av. Palafox', 'Efectivo'),
(4, '', '', '', '', '', ''),
(5, 'Diana', 'Romero', '7821026407', 'eocelotl@gmail.com', 'Av. Constitucion', 'Efectivo'),
(6, 'jhjh', 'nkn', '7676', 'jjhj@kjkj.com', 'nkkh', 'Efectivo'),
(7, 'Eduardo', 'Ocelotl', '7821026407', 'eduardocelotl2016@gmail.com', 'Av. Palafox', 'Tarjeta'),
(8, 'Eduardo', 'Ocelotl', '7821026407', 'eduardocelotl2016@gmail.com', 'Av. Palafox', 'Efectivo'),
(9, 'Mario', 'Ismael', '7351052091', 'marrio123ordie@gmail.com', 'kassf', 'Tarjeta'),
(10, 'Mario', 'Ismael', '7351052091', 'marrio123ordie@gmail.com', 'kassf', 'Tarjeta'),
(11, 'Mario', 'Ismael', '7351052091', 'marrio123ordie@gmail.com', 'EN TU CORAZON', 'Tarjeta'),
(12, 'Fernanada', 'Tellez', '454674', 'eocelotlvalencia@outlook.com', 'xfgxf', 'Tarjeta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `tipo` varchar(70) NOT NULL,
  `num_habitacion` varchar(70) NOT NULL,
  `max_personas` varchar(10) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `costo_base` varchar(20) NOT NULL,
  `estado` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id_habitacion`, `tipo`, `num_habitacion`, `max_personas`, `descripcion`, `costo_base`, `estado`) VALUES
(1, 'Reina de lujo', '1', '2', 'Cama tamaño Queen', '850', 'Disponible'),
(2, 'Deluxe 1 Queen', '2', '2', 'Cama Queen size', '850', 'Disponible'),
(3, 'Deluxe 1 Queen', '3', '2', 'Cama Queen size', '850', 'Disponible'),
(4, 'Deluxe 1 Queen', '4', '2', 'Cama Queen size', '850', 'Disponible'),
(5, 'Deluxe 1 Queen', '5', '2', 'Cama Queen size', '850', 'Disponible'),
(6, 'Deluxe 1 KIng', '6', '2', 'Cama King size', '950', 'Ocupado'),
(7, 'Deluxe 1 KIng', '7', '2', 'Cama King size', '950', 'Ocupado'),
(8, 'Deluxe 1 KIng', '8', '2', 'Cama King size', '950', 'Ocupado'),
(9, 'Deluxe 1 KIng', '9', '2', 'Cama King size', '950', 'Ocupado'),
(10, 'Deluxe 1 KIng', '10', '2', 'Cama King size', '950', 'Disponible'),
(11, 'Deluxe Doble', '11', '4', 'Habitación elegante', '1000', 'Ocupado'),
(12, 'Deluxe Doble', '12', '4', 'Habitación elegante', '1000', 'Ocupado'),
(13, 'Deluxe Doble', '13', '4', 'Habitación elegante', '1000', 'Ocupado'),
(14, 'Deluxe Doble', '14', '4', 'Habitación elegante', '1000', 'Ocupado'),
(15, 'Deluxe Doble', '15', '4', 'Habitación elegante', '1000', 'Disponible'),
(16, 'Estudio Familiar', '16', '6', 'Habitación amplia', '1000', 'Ocupado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion_reservada`
--

CREATE TABLE `habitacion_reservada` (
  `id_habiatacionr` int(11) NOT NULL,
  `personas_ocupan` varchar(8) NOT NULL,
  `notas` varchar(300) DEFAULT NULL,
  `incidencias` varchar(300) DEFAULT NULL,
  `id_huesped` int(11) NOT NULL,
  `fecha_entrada` varchar(30) NOT NULL,
  `fecha_salida` date NOT NULL,
  `hora_salida` varchar(12) DEFAULT NULL,
  `id_habitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion_reservada`
--

INSERT INTO `habitacion_reservada` (`id_habiatacionr`, `personas_ocupan`, `notas`, `incidencias`, `id_huesped`, `fecha_entrada`, `fecha_salida`, `hora_salida`, `id_habitacion`) VALUES
(1, '3', NULL, NULL, 5, '2022-05-20', '2022-05-26', NULL, 7),
(2, '2', NULL, NULL, 6, '2022-05-22', '2022-05-23', NULL, 8),
(3, '3', NULL, NULL, 7, '2022-05-09', '2022-05-02', NULL, 2),
(4, '3', NULL, NULL, 8, '2022-05-09', '2022-05-04', NULL, 3),
(5, '2', NULL, NULL, 12, '2022-05-28', '2022-05-31', NULL, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `fecha_llegada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `num_personas` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `fecha_llegada`, `fecha_salida`, `num_personas`) VALUES
(1, '2022-04-20', '2022-04-21', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `user`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indices de la tabla `habitacion_reservada`
--
ALTER TABLE `habitacion_reservada`
  ADD PRIMARY KEY (`id_habiatacionr`),
  ADD KEY `id_habitacion` (`id_habitacion`),
  ADD KEY `id_habitacion_2` (`id_habitacion`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `habitacion_reservada`
--
ALTER TABLE `habitacion_reservada`
  MODIFY `id_habiatacionr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
