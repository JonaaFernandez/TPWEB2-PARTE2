-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 18:14:49
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
(2, 'HORRIBLE!!!! ', 1, 52),
(5, 'exelente lugar, gran servicio.', 4, 50),
(6, 'linda experiancia, gracias por todo!', 3, 55),
(7, 'Muy limpio y prolijo, buena atencion, volveremos!', 5, 61),
(8, 'consular si acepta boa constrictora como mascota.', 3, 52),
(9, 'Hola, necesitaria coordinar para ir a verlo pérsonalmente,te mande al mail mi telefono, gracias! ', 2, 53),
(10, 'Que valores de expensas maneja?', 3, 58),
(11, 'Buen dia, quisiera ir a verlo, como podemos coordinar?', 5, 57),
(12, 'Me encanto el servicio de limpieza, muy recomendable el lugar!', 5, 52),
(13, 'Hermoso lugar para estar una semana sin bañarse.', 5, 60),
(14, 'Lindo lugar, rustico, familiar, algo sucio sin embargo.', 5, 60),
(15, 'Familia Barroso les agradece la hospitalidad.', 5, 60),
(16, 'BURUNGANGA', 1, 52),
(18, 'probando si anda', 5, 54);

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
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla de Propiedades';

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `nombre`, `tipo`, `direccion`, `valor`, `descripcion`, `fecha`) VALUES
(50, '  Chacra  pulperia    ', 4, '  rotonda la pulperia', 755000, ' 1200 mts cuadrados', '2020-10-15'),
(52, ' duplex dique  ', 14, ' avenida alvear 321', 90000, ' a media cuadra del dique', '2020-10-06'),
(53, ' Lote superficie 3 hectareas  ', 10, ' ruta 73 km 56', 189000, '  especial para siembra', '2020-10-06'),
(54, 'Casa grande', 12, 'la madrid 22', 190000, '  4 ambientes , 3 baños, patio grande, cochera, living-comedor', '2020-10-04'),
(55, 'estancia la pepona', 9, 'paso de los andes 112', 120000, '  pileta triangular', '2020-10-29'),
(56, 'casa 5 ambientes', 12, 'paraguay 222', 233000, '  ', '2020-10-30'),
(57, 'departamento a estrenar', 15, '25 de mayo 209', 88000, '  a estrenar, 3 baños, 2 piletas, lavadero, no aceptan mascotas', '2020-09-29'),
(58, 'monoambiente lujoso', 15, 'rodriguez 11', 32444, ' especial para estudiantes pudientes, no se aceptan mascotas', '2020-09-28'),
(59, ' baldio 30x30  ', 11, ' paz 1402', 90000, 'apto para complejo de departamentos', '2020-10-11'),
(60, 'casa de barro', 12, 'don segundo sombra 3131', 900, ' amplia', '2020-10-20'),
(61, 'Complejo el salpicon', 18, 'colectora norte 1252', 180000, ' Complejo con quincho, baños, cambiadores, cancha de futbol, cancha de voley , comedor amplio . pileta para adultos y para niños', '2020-10-01');

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
(4, 'chacra', 'benito juarez quinta'),
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
(1, 'jonafernandez', 'jonaafernandez02@gmail.com', '$2y$10$90DPrTQc4vvkPm3J7Ms//uB3xmYP1dGCKxmL/EKmctIQ/8000SmWy', 0),
(2, 'sergio fino', 'sergiofino@river.com', '$2y$10$ZhmoU4YVbfdfcXL0RpKzcOY1TnmL1rT0XTmAEgT6DG54VSgVZ6duC', 0),
(4, ' pepito', 'pepito@rita.com', '$2y$10$7iQjCW9l04T/UwJOdw47IOkRUcXbvWdzvom/MxFAapQeNqNcGe3s2', 0),
(5, 'melisa', 'meli@melisa.com', '$2y$10$lvdy0DgrJObCZoPULadpku3p6C0UYo2ZcDLRRVqXgTj1VHUUjvhYC', 0),
(6, 'melisa', 'asdasdasd@asdasdc.com', '$2y$10$iCvq4uft3RI0S0kujjXUEO7m5iOyMp/CB0HmYRWydpAwNiozI4Cza', 0),
(7, 'rita', 'ritita@cotorra.com', '$2y$10$qEl4SL.8ppd6/7zSbxnoTekUkzCEH7wq2YFXwVu2/kRQ73LruCiTe', 0),
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
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
