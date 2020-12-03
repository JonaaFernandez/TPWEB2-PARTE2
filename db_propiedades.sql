-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2020 a las 01:31:48
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
(139, 'aaaaaaaaaaaaaaaaaaa', 3, 98),
(140, 'hice un comentario!!!!!!', 4, 92),
(141, 'hice otro comentario', 5, 92),
(142, 'puedo hacer un comentario!!!!', 4, 92),
(144, 'Hermosa vivienda', 4, 87),
(145, 'muy lindo', 1, 116),
(146, 'prolijo, buena iluminacion natural', 2, 58),
(147, 'tiene cochera ? cuanto paga de expensas?', 4, 58),
(148, 'es muy alto, no tiene alguno del piso 10 para abajo?', 1, 58),
(150, 'sin comentarios', 1, 58);

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
(58, ' Departamento piso 20         ', 20, 'Labarden 1304', 3122, ' especial para estudiantes pudientes, no se aceptan mascotas', '2020-09-28', 'dep910A.tmp'),
(87, '  a    ', 22, '                                                        Fuerte Independencia N° 255 5to. ', 148000, '222', '0000-00-00', 'qui32CD.tmp'),
(91, 'ascasdasd        ', 13, 'Mitre 1674', 145000, ' patio', '0000-00-00', 'dep4780.tmp'),
(92, '    Departamento Centrico de 3 habitaciones sobre ', 11, '    Santos Vega 266', 8500, '  ', '0000-00-00', 'ter35D9.tmp'),
(93, '     Departamento Centrico de 3 habitaciones sobre', 20, '     Avellaneda 145', 98500, '  muy lindo dto', '2020-11-23', 'car55D7.tmp'),
(94, 'Casa amplia 10 habitaciones  ', 22, 'Fuerte Independencia N° 255 5to. ', 114000, 'Patio grande, Cochera amplia', '2020-11-23', 'car4430.tmp'),
(95, '  Sergio    s', 16, '  bbbbbbb', 25000, '  aaaaaaaaaaaaaaa', '2020-11-23', 'quiE987.tmp'),
(96, '  Muy lindo chalet    ', 22, '  Santos Vega 266', 335000, '  Chalet del vecino', '2020-11-23', 'car92A1.tmp'),
(97, '   Campo El refugio de Hnos. Fino      ', 23, '   Cuartel X B. Jyarez', 3500, '  Campo mixto en buen estado, 2 molinos, 4 potreros, galpon. Valor por Hectarea', '2020-11-23', 'lotEF78.tmp'),
(98, '  Campo de caza de perdiz', 23, 'Rotonda la rueda Benito Juarez', 200, '  Los valores presentados son por hectarea.', '2020-11-23', 'camB376.tmp'),
(99, 'Gallo Resort         ', 23, 'Cruce del gallo', 11500, '  lindo campo!!!! el valor estipulado es por hectarea', '2020-11-23', 'cam31CB.tmp'),
(100, '   El terre NO       ', 11, '    Mitre 1674', 25000, 'matayuyo incluido', '2020-11-24', 'cam98E4.tmp'),
(101, 'Campo \"Los Solos\"', 23, 'Lejos', 3500, '  campo de cria, pastos duros', '2020-11-26', 'cam244F.tmp'),
(102, 'Campo abandonado', 23, 'cercani', 4500, '  mitad campo, mitad chacra', '2020-11-26', 'cam8712.tmp'),
(103, 'Departamento en segundo piso', 20, 'Mitre 1674', 85000, '  Para 2 personas , se aceptan mascotas', '2020-12-13', 'dep395C.tmp'),
(104, 'Departamento  a estrenar', 20, 'Lavalle 3144', 111232, 'Supermercado ASIA a media cuadra.', '2020-12-23', 'depE74.tmp'),
(105, ' Terreno para vivienda  ', 11, ' 30x50 ', 123123000, 'Calle afaltada en proceso', '2020-12-28', 'ter3ED7.tmp'),
(111, '  Terreno privado     ', 11, '  Familia Santamarina', 22222, 'Dueños en Ucrania, imposible contactarse', '0000-00-00', 'ter5371.tmp'),
(113, 'Galpon fuerza militar', 16, 'Pujol 23', 45222, '300 mts cuadrados.', '2020-12-18', 'gal4F50.tmp'),
(114, ' Galpon tipo granero', 16, 'Apto ara maquinas agricolas', 2, '  deteriorado', '0000-00-00', 'galF7F5.tmp'),
(116, 'Terreno para barrio privado', 11, 'colectora norte 1302', 50999, '  Barrio universitario en frente', '2020-12-22', 'lotB5A5.tmp');

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
(11, 'terreno', 'Terreno baldio estacionamiento Carrefour'),
(13, 'local', 'loca especial para oficina'),
(16, 'galpon', 'galpon para materiales de construccion'),
(20, 'departamento', 'urbano'),
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
(12, 'jonafernandez', 'jonaafernandez02@gmail.com', '$2y$10$/.wPzNRTVuM12dy8kDuqMeCsP5GUWvtIbJACuG1IlPcOXwVUyp/9W', 1),
(13, 'DIEGOMARADONA', 'diego@asd-com', '$2y$10$CijfUwvUaXZ62oecNL44oeqIk2w8ZwkRR0A9pRl.e.zk9X3khjeiW', 0);

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
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de la tabla `tipos_propiedades`
--
ALTER TABLE `tipos_propiedades`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
