-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 22:19:18
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
-- Base de datos: `florvax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoplantas`
--

CREATE TABLE `infoplantas` (
  `plantID` int(11) NOT NULL,
  `plantName` varchar(55) NOT NULL,
  `plantSciName` varchar(100) NOT NULL,
  `plantBio` text NOT NULL,
  `plantFamily` int(11) NOT NULL,
  `plantPicture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1622688038, 340066300, 'hola man'),
(2, 340066300, 1622688038, 'bien'),
(3, 1622688038, 340066300, 'hola'),
(4, 340066300, 1622688038, 'hola'),
(5, 440971576, 1622688038, 'hola pedro, necesito tu ayuda'),
(6, 1622688038, 440971576, 'hola Mauricio, claro, dime !!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1622688038, 'Mauricio', 'Sevilla', 'hola@configuroweb.com', '4b67deeb9aba04a5b54632ad19934f26', '1652660564avatar.png', 'Disponible'),
(2, 340066300, 'Juan', 'Usuario', 'jusuario@cweb.com', '4b67deeb9aba04a5b54632ad19934f26', '1652660638staff-avatar.png', 'Desconectad@'),
(3, 440971576, 'Pedro', 'Usuario', 'pusuario@cweb.com', '4b67deeb9aba04a5b54632ad19934f26', '1652670758chatbot.png', 'Disponible'),
(4, 480326195, 'santiago', 'huanca', 'santiagomaytahuanca@gmail.com', '8b54cef5908f2d82c21dc997ba8bbdcc', '1698264305perrito.jpg', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `userID` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `profilePic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`userID`, `email`, `username`, `passw`, `profilePic`) VALUES
(1, 'pepe@gmail.com', 'Miguelito', 'sanchez', ''),
(2, 'sandiego@hotmail.com', 'Pepitos', 'as', ''),
(3, 'santiagomaytahuanca@gmail.com', 'asfaf', '1234', ''),
(4, 'ireigjiortegjiore@gmail.com', '214e21qr21', '1q3fr31', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `infoplantas`
--
ALTER TABLE `infoplantas`
  ADD PRIMARY KEY (`plantID`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `infoplantas`
--
ALTER TABLE `infoplantas`
  MODIFY `plantID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
