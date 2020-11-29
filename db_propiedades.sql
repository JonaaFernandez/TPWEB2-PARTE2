-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 22:28:43
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
(133, 'puedo comentar???', 4, 58),
(136, 'que liiiinnnndoooooo', 5, 91),
(137, 'que lindooooooo', 4, 58),
(139, 'aaaaaaaaaaaaaaaaaaa', 3, 98),
(140, 'hice un comentario!!!!!!', 4, 92),
(141, 'hice otro comentario', 5, 92),
(142, 'puedo hacer un comentario!!!!', 4, 92);

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
(58, '    monoambiente lujoso        ', 20, '    rodriguez 11', 32444, ' especial para estudiantes pudientes, no se aceptan mascotas', '2020-09-28', NULL),
(87, 'Departamento Centrico de 3 habitaciones sobre call', 22, 'Fuerte Independencia N° 255 5to. \"A\"', 148000, '  zzzzzzzzzzzzzzz', '0000-00-00', 'con1078.tmp'),
(91, '   Departamento Centrico de 3 habitaciones sobre c', 13, '   Mitre 1674', 145000, '  patio', '0000-00-00', 'car4C96.tmp'),
(92, '  Departamento Centrico de 3 habitaciones sobre ca', 11, '  Santos Vega 266', 8500, '  ', '0000-00-00', 'con7D3D.tmp'),
(93, ' Departamento Centrico de 3 habitaciones sobre cal', 20, ' Avellaneda 145', 98500, '  muy lindo dto', '2020-11-23', 'dep903F.tmp'),
(94, ' Departamento Centrico de 3 habitaciones sobre cal', 20, ' Fuerte Independencia N° 255 5to. ', 114000, '  sarasa', '2020-11-23', 'depE899.tmp'),
(95, 'Sergio', 16, 'bbbbbbb', 25000, '  aaaaaaaaaaaaaaa', '2020-11-23', 'gal95AE.tmp'),
(96, 'Muy lindo chalet', 22, 'Santos Vega 266', 335000, '  Chalet del vecino', '2020-11-23', 'carB2C9.tmp'),
(97, 'Campo El refugio de Hnos. Fino', 23, 'Cuartel X B. Jyarez', 3500, '  Campo mixto en buen estado, 2 molinos, 4 potreros, galpon. Valor por Hectarea', '2020-11-23', 'ter7491.tmp'),
(98, 'Campo 100% agricola, de primer nivel', 23, 'consultar - partido de Tandil', 11500, '  Los valores presentados son por hectarea.', '2020-11-23', 'cam143.tmp'),
(99, 'campo agricola', 23, 'cuartel X tandil', 11500, '  lindo campo!!!! el valor estipulado es por hectarea', '2020-11-23', 'cam547B.tmp'),
(100, 'el terre', 11, 'Mitre 1674', 25000, '  nada ', '2020-11-24', 'ter34B6.tmp'),
(101, 'campo de cria', 23, 'lejos', 3500, '  campo de cria, pastos duros', '2020-11-26', 'cam145E.tmp'),
(102, 'CAMPO MIXTO', 23, 'cercani', 4500, '  mitad campo, mitad chacra', '2020-11-26', 'camB4C7.tmp'),
(103, 'sdfsdf', 20, 'dfsdf', 85000, '  ', '0000-00-00', '9BC3.tmp');

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
(11, 'terreno', 'Terreno baldio antes estacionamiento Carrefour'),
(13, 'local', 'loca especial para oficina'),
(16, 'galpon', 'galpon para materiales de construccion'),
(20, 'departamento', 'urbano'),
(21, 'casa sobre avenida Brasil', 'linnnnda casa'),
(22, 'casa', 'casaaaa'),
(23, 'campo', 'superficie rural de mas de 50 hectareas');

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
(2, 'sergio fino', 'sergiofino@river.com', '$2y$10$ZhmoU4YVbfdfcXL0RpKzcOY1TnmL1rT0XTmAEgT6DG54VSgVZ6duC', 1),
(5, 'melisa', 'meli@melisa.com', '$2y$10$lvdy0DgrJObCZoPULadpku3p6C0UYo2ZcDLRRVqXgTj1VHUUjvhYC', 0),
(8, 'adriana', 'adrifi@auto.com', '$2y$10$lxyYOpups0TCpKAUnMjIQOr7mEMW0EO4kWAR4wd3gjgQ9uRYGMo96', 0),
(9, 'Silvia', 'silvia@silvia', '$2y$10$IeHvpG62M1d4Q3avIcrDHeoEfsuHlH6ApjX/62G6XK7xcFLi9aG3q', 1),
(10, 'rita', 'ritiiiittta@cotorrita', '$2y$10$erEOM7lXlL0AT0NRJ/ezK.sI2WrirXp02YonnjjCjoFg5MTY.gxfy', 0),
(11, 'user', 'user@user', '$2y$10$gtKoYgSWAnnlWyfjHQUXzucBCtTKrWb20xLTuBsptCri.iRxQ9dWS', 0);

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
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `tipos_propiedades`
--
ALTER TABLE `tipos_propiedades`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
