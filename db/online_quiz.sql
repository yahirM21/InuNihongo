-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 03:43:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `online_quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(5) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `exam_time_in_minutes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `exam_time_in_minutes`) VALUES
(1, 'Animales', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `total_question` varchar(10) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `exam_results`
--

INSERT INTO `exam_results` (`id`, `username`, `exam_type`, `total_question`, `correct_answer`, `wrong_answer`, `exam_time`) VALUES
(21, 'DaveAG', 'Animales', '10', '10', '0', '2023-10-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `question` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `opt1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `opt2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `opt3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `opt4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `answer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES
(24, '1', 'いぬ', 'opt_images/278ba7eaad259c5e7e13929accd42ecftortuga.png', 'opt_images/278ba7eaad259c5e7e13929accd42ecfperro.png', 'opt_images/278ba7eaad259c5e7e13929accd42ecfconejo.png', 'opt_images/278ba7eaad259c5e7e13929accd42ecftigre.png', 'opt_images/278ba7eaad259c5e7e13929accd42ecfperro.png', 'Animales'),
(25, '2', 'うさぎ', 'opt_images/79d2f4a2f3cd4688129d0a2cd0022689conejo.png', 'opt_images/79d2f4a2f3cd4688129d0a2cd0022689pulpo.png', 'opt_images/79d2f4a2f3cd4688129d0a2cd0022689elefante.png', 'opt_images/79d2f4a2f3cd4688129d0a2cd0022689calamar.png', 'opt_images/79d2f4a2f3cd4688129d0a2cd0022689conejo.png', 'Animales'),
(26, '3', 'たこ', 'opt_images/90d154b924e5b356483157042dd4db49pez.png', 'opt_images/90d154b924e5b356483157042dd4db49calamar.png', 'opt_images/90d154b924e5b356483157042dd4db49pulpo.png', 'opt_images/90d154b924e5b356483157042dd4db49tortuga.png', 'opt_images/90d154b924e5b356483157042dd4db49pulpo.png', 'Animales'),
(27, '4', 'ねこ', 'opt_images/061b27ae82af5400913c565fc5c17974tigre.png', 'opt_images/061b27ae82af5400913c565fc5c17974pez.png', 'opt_images/061b27ae82af5400913c565fc5c17974gato.png', 'opt_images/061b27ae82af5400913c565fc5c17974elefante.png', 'opt_images/061b27ae82af5400913c565fc5c17974gato.png', 'Animales'),
(28, '5', 'さかな', 'opt_images/cdaca963c83a76e68da811f9cb7a6149pez.png', 'opt_images/cdaca963c83a76e68da811f9cb7a6149tortuga.png', 'opt_images/cdaca963c83a76e68da811f9cb7a6149perro.png', 'opt_images/cdaca963c83a76e68da811f9cb7a6149pulpo.png', 'opt_images/cdaca963c83a76e68da811f9cb7a6149pez.png', 'Animales'),
(29, '6', 'タイガー', 'opt_images/0f10b80b0f820eacce5f9b4ce0b59109tigre.png', 'opt_images/0f10b80b0f820eacce5f9b4ce0b59109leon.png', 'opt_images/0f10b80b0f820eacce5f9b4ce0b59109oso.png', 'opt_images/0f10b80b0f820eacce5f9b4ce0b59109pajaro.png', 'opt_images/0f10b80b0f820eacce5f9b4ce0b59109tigre.png', 'Animales'),
(30, '7', 'とり', 'opt_images/863740f54073efb90a4966f748fcfed3tortuga.png', 'opt_images/863740f54073efb90a4966f748fcfed3pulpo.png', 'opt_images/863740f54073efb90a4966f748fcfed3pajaro.png', 'opt_images/863740f54073efb90a4966f748fcfed3gato.png', 'opt_images/863740f54073efb90a4966f748fcfed3pajaro.png', 'Animales'),
(31, '8', 'くま', 'opt_images/17d77d2f8aa77946119abc328aa1eb47perro.png', 'opt_images/17d77d2f8aa77946119abc328aa1eb47leon.png', 'opt_images/17d77d2f8aa77946119abc328aa1eb47conejo.png', 'opt_images/17d77d2f8aa77946119abc328aa1eb47oso.png', 'opt_images/17d77d2f8aa77946119abc328aa1eb47oso.png', 'Animales'),
(32, '9', 'ライオン', 'opt_images/98d024610e0640012e60daf382705ae6gato.png', 'opt_images/98d024610e0640012e60daf382705ae6perro.png', 'opt_images/98d024610e0640012e60daf382705ae6leon.png', 'opt_images/98d024610e0640012e60daf382705ae6tigre.png', 'opt_images/98d024610e0640012e60daf382705ae6leon.png', 'Animales'),
(33, '10', 'かめ', 'opt_images/60d5a7dda471e46dbc5666f7bf684b79tortuga.png', 'opt_images/60d5a7dda471e46dbc5666f7bf684b79pez.png', 'opt_images/60d5a7dda471e46dbc5666f7bf684b79gato.png', 'opt_images/60d5a7dda471e46dbc5666f7bf684b79tigre.png', 'opt_images/60d5a7dda471e46dbc5666f7bf684b79tortuga.png', 'Animales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(2, 'david', 'acosta', 'DaveAG', 'nadanada', 'dagdvd@hotmail.com', '6461790613');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
