-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 21:05:48
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_propiedades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(7) NOT NULL,
  `comentario` varchar(225) NOT NULL,
  `puntaje` int(1) NOT NULL,
  `propiedad` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `puntaje`, `propiedad`) VALUES
(7, 'Muy limpio y prolijo, buena atencion, volveremos!', 5, 61),
(10, 'Que valores de expensas maneja?', 3, 58),
(20, 'nuevo comentario LINDO', 2, 54),
(50, 'ytyyyyyyyyyyyyy', 1, 54),
(51, 'ththtyu', 1, 60),
(52, 'ththtyu', 1, 60),
(54, 'ththtyu', 1, 60),
(56, 'aaaaaa', 2, 57),
(57, 'asdasdñk,lansdlkñaasdasdasdsasd', 1, 57),
(58, 'sorongoooo', 1, 54),
(59, 'lllllllll', 4, 54),
(60, 'sarasaaaaaa', 5, 54),
(61, 'wwww', 1, 54),
(64, 'buenos dias, me gustaria saber sii en algun momento van a agrandar el espacio para los caracteres porque realmente no veo un choto! gracias!!!', 1, 54);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` int(2) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `valor` float NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla de Propiedades';

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `nombre`, `tipo`, `direccion`, `valor`, `descripcion`, `fecha`, `imagen`) VALUES
(54, 'Casa grande', 12, 'la madrid 22', 190000, '  4 ambientes , 3 baños, patio grande, cochera, living-comedor', '2020-10-04', 'viejo.png'),
(57, 'departamento a estrenar', 15, '25 de mayo 209', 88000, '  a estrenar, 3 baños, 2 piletas, lavadero, no aceptan mascotas', '2020-09-29', 'boquita.png'),
(58, 'monoambiente lujoso', 15, 'rodriguez 11', 32444, ' especial para estudiantes pudientes, no se aceptan mascotas', '2020-09-28', 'riber.jpg'),
(60, ' casa de barro  ', 12, ' don segundo sombra 3131', 900, ' amplia', '2020-10-20', NULL),
(61, 'Complejo el salpicon', 18, 'colectora norte 1252', 180000, ' Complejo con quincho, baños, cambiadores, cancha de futbol, cancha de voley , comedor amplio . pileta para adultos y para niños', '2020-10-01', NULL),
(62, ' jona  ', 4, ' pkijhopiñlkjñlko{jm', 65444500000, '  ijhbbkjln.l', '2020-11-10', '1.p6D4C.tmp'),
(63, 'Pileta club Nahuel', 4, 'bla bla', 1.23123e17, '  pileta cubierta', '2020-11-11', 'nahD162.tmp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_propiedades`
--

CREATE TABLE `tipos_propiedades` (
  `id` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tipos de Propiedad';

--
-- Volcado de datos para la tabla `tipos_propiedades`
--

INSERT INTO `tipos_propiedades` (`id`, `nombre`, `descripcion`) VALUES
(4, 'chacra', 'benito juarez quinta hermosa'),
(9, 'quinta', 'tres arroyos'),
(10, 'lote', 'vacio 2'),
(11, 'terreno', 'Terreno baldio antes estacionamiento Carrefour'),
(12, 'casa', 'avenida brasil'),
(13, 'local', 'loca especial para oficina'),
(14, 'duplex', 'patio cerrado, dos ambientes, cochera'),
(15, 'departamento', 'no hay detalles aun'),
(16, 'galpon', 'galpon para materiales de construccion'),
(18, 'pileta', ' no apta para colonia de vacaciones'),
(20, 'departamento', 'urbano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `email`, `password`, `admin`) VALUES
(1, 'jonafernandez', 'jonaafernandez02@gmail.com', '$2y$10$90DPrTQc4vvkPm3J7Ms//uB3xmYP1dGCKxmL/EKmctIQ/8000SmWy', 1),
(2, 'sergio fino', 'sergiofino@river.com', '$2y$10$ZhmoU4YVbfdfcXL0RpKzcOY1TnmL1rT0XTmAEgT6DG54VSgVZ6duC', 1),
(5, 'melisa', 'meli@melisa.com', '$2y$10$lvdy0DgrJObCZoPULadpku3p6C0UYo2ZcDLRRVqXgTj1VHUUjvhYC', 0),
(8, 'adriana', 'adrifi@auto.com', '$2y$10$lxyYOpups0TCpKAUnMjIQOr7mEMW0EO4kWAR4wd3gjgQ9uRYGMo96', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propiedad` (`propiedad`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `por_tipo` (`tipo`) USING BTREE;

--
-- Indices de la tabla `tipos_propiedades`
--
ALTER TABLE `tipos_propiedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `tipos_propiedades`
--
ALTER TABLE `tipos_propiedades`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`propiedad`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
