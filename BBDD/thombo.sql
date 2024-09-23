-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2024 a las 18:02:59
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `thombo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(555) NOT NULL,
  `lastname` varchar(555) NOT NULL,
  `email` varchar(555) NOT NULL,
  `password` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'nombre', 'apellido', 'correo@gmail.com', 'cdcb7422ca0fe077931b84e6fb7e6dfb7d6678dc7e9ae9c4335e98edc7d5761a'),
(2, 'Perds', 'Contrsa', 'correa@gmail.com', 'cdcb7422ca0fe077931b84e6fb7e6dfb7d6678dc7e9ae9c4335e98edc7d5761a'),
(3, 'Claudio Gabriel', 'Perez', 'gabrieelpereez@gmail.com', 'e056df6ca75b0a2dd7a08455c3df52381b985cc20c2dd1b97aa9f62138fa81f2'),
(4, 'Claudio', 'Apellido', 'claudio@gmail.com', 'cdcb7422ca0fe077931b84e6fb7e6dfb7d6678dc7e9ae9c4335e98edc7d5761a'),
(5, 'Claudio', 'Apellido', 'claudioa@gmail.com', 'cdcb7422ca0fe077931b84e6fb7e6dfb7d6678dc7e9ae9c4335e98edc7d5761a'),
(6, 'Claudio', 'Apellido', 'claudio123@gmail.com', 'cdcb7422ca0fe077931b84e6fb7e6dfb7d6678dc7e9ae9c4335e98edc7d5761a'),
(7, 'Gabriel', 'Perez', 'gabiperez@gmail.com', 'cdcb7422ca0fe077931b84e6fb7e6dfb7d6678dc7e9ae9c4335e98edc7d5761a'),
(8, 'Thomas', 'Boateng', 'thomasboateng337@gmail.com', '4cb57a26b2cf1f5839d0d3499c04707765aff0623a9f8e7245640b104a3e8386'),
(9, 'Zuure', 'George', 'zuuregeorge123@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
