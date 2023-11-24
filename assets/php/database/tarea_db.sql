-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 19:06:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tarea_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `correo`, `contrasena`) VALUES
(1, 'prueba1@gmail.com', '12345678'),
(2, 'alumno1@gmail.com', 'alumno12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario_texto` text NOT NULL,
  `archivo_nombre` varchar(255) DEFAULT NULL,
  `tarea_id` int(11) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario_texto`, `archivo_nombre`, `tarea_id`, `fecha_creacion`) VALUES
(1, 'hola', 'almendra.jpg', NULL, '2023-11-23 18:33:30'),
(2, 'gg', '', NULL, '2023-11-23 18:40:02'),
(3, 'gg', '', NULL, '2023-11-23 18:40:23'),
(4, 'aa', '', 4, '2023-11-23 18:46:43'),
(5, 'yo se la conozco a usted', '', 5, '2023-11-23 18:50:08'),
(6, 'bunkn', 'almendra.jpg', 6, '2023-11-23 18:51:43'),
(7, 'hola', NULL, NULL, '2023-11-23 19:12:36'),
(8, 'aa', NULL, NULL, '2023-11-23 19:12:45'),
(9, 'aa', NULL, NULL, '2023-11-23 19:12:48'),
(10, '', '', 7, '2023-11-23 20:05:51'),
(11, 'descripcion', '', 8, '2023-11-23 20:06:03'),
(12, 'descripcion de la tarea', 'Index.html', 9, '2023-11-23 20:09:04'),
(13, '', '', 10, '2023-11-23 20:14:03'),
(14, 'gvby', 'avellana.jpg', 11, '2023-11-23 21:11:51'),
(15, 'Descripcion de alguna tarea o algo', 'tu_archivo.js', 12, '2023-11-24 03:14:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `id` int(11) NOT NULL,
  `comentario` text DEFAULT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`id`, `comentario`, `fecha_envio`) VALUES
(1, 'hola', '2023-11-23 19:19:09'),
(2, 'hola', '2023-11-23 19:34:19'),
(3, 'compañero', '2023-11-23 19:38:47'),
(4, 'hola', '2023-11-23 19:41:09'),
(5, 'g', '2023-11-23 19:42:01'),
(6, 'g', '2023-11-23 19:44:19'),
(7, 'robertito', '2023-11-23 19:46:32'),
(8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-11-23 19:46:57'),
(9, 'hhh', '2023-11-23 19:47:25'),
(10, 'g', '2023-11-23 20:05:25'),
(11, 'aca se dejan los comentarios', '2023-11-23 20:09:17'),
(12, 'aa', '2023-11-23 20:14:00'),
(13, 'gvrbh', '2023-11-23 21:12:13'),
(14, 'Aca se mostraran los comentarios que hagan los alumnos y profesores', '2023-11-24 03:12:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `correo`, `contrasena`) VALUES
(2, 'prueba2@gmail.com', '12345678'),
(3, 'prueba3@gmail.com', '87654321'),
(4, 'prueba4@gmail.com', '13579246'),
(5, 'docente1@gmail.com', 'docente12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `tarea_texto` text NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `tarea_texto`, `fecha_creacion`) VALUES
(1, 'aaa', '2023-11-23 18:33:30'),
(2, 'gg', '2023-11-23 18:40:02'),
(3, 'gg', '2023-11-23 18:40:23'),
(4, 'aaa', '2023-11-23 18:46:43'),
(5, 'y se que la pasaremos al 100', '2023-11-23 18:50:08'),
(6, 'hhh', '2023-11-23 18:51:43'),
(7, 'aaa', '2023-11-23 20:05:51'),
(8, 'titulo', '2023-11-23 20:06:03'),
(9, 'nombre de la tarea', '2023-11-23 20:09:04'),
(10, 'qq', '2023-11-23 20:14:03'),
(11, 'gg', '2023-11-23 21:11:51'),
(12, 'Titulo de la tarea', '2023-11-24 03:14:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarea_id` (`tarea_id`);

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`tarea_id`) REFERENCES `tareas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
