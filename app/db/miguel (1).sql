-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 16:18:32
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
-- Base de datos: `miguel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canal_de_aprendizaje_de_preferencia`
--

CREATE TABLE `canal_de_aprendizaje_de_preferencia` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `p1` int(11) DEFAULT NULL,
  `p2` int(11) DEFAULT NULL,
  `p3` int(11) DEFAULT NULL,
  `p4` int(11) DEFAULT NULL,
  `p5` int(11) DEFAULT NULL,
  `p6` int(11) DEFAULT NULL,
  `p7` int(11) DEFAULT NULL,
  `p8` int(11) DEFAULT NULL,
  `p9` int(11) DEFAULT NULL,
  `p10` int(11) DEFAULT NULL,
  `p11` int(11) DEFAULT NULL,
  `p12` int(11) DEFAULT NULL,
  `p13` int(11) DEFAULT NULL,
  `p14` int(11) DEFAULT NULL,
  `p15` int(11) DEFAULT NULL,
  `p16` int(11) DEFAULT NULL,
  `p17` int(11) DEFAULT NULL,
  `p18` int(11) DEFAULT NULL,
  `p19` int(11) DEFAULT NULL,
  `p20` int(11) DEFAULT NULL,
  `p21` int(11) DEFAULT NULL,
  `p22` int(11) DEFAULT NULL,
  `p23` int(11) DEFAULT NULL,
  `p24` int(11) DEFAULT NULL,
  `p25` int(11) DEFAULT NULL,
  `p26` int(11) DEFAULT NULL,
  `p27` int(11) DEFAULT NULL,
  `p28` int(11) DEFAULT NULL,
  `p29` int(11) DEFAULT NULL,
  `p30` int(11) DEFAULT NULL,
  `p31` int(11) DEFAULT NULL,
  `p32` int(11) DEFAULT NULL,
  `p33` int(11) DEFAULT NULL,
  `p34` int(11) DEFAULT NULL,
  `p35` int(11) DEFAULT NULL,
  `p36` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `canal_de_aprendizaje_de_preferencia`
--

INSERT INTO `canal_de_aprendizaje_de_preferencia` (`id`, `id_user`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`) VALUES
(1, 1, 4, 5, 4, 2, 2, 4, 3, 4, 4, 2, 3, 4, 4, 2, 3, 4, 3, 4, 2, 1, 5, 3, 2, 5, 5, 3, 3, 2, 4, 2, 4, 4, 4, 4, 5, 3),
(2, 2, 4, 1, 3, 2, 5, 4, 1, 2, 4, 3, 1, 1, 4, 3, 3, 3, 4, 4, 2, 2, 5, 2, 3, 3, 4, 5, 2, 2, 2, 3, 4, 2, 4, 3, 3, 2),
(3, 3, 3, 3, 4, 1, 1, 4, 2, 2, 2, 4, 2, 2, 2, 1, 3, 1, 1, 3, 1, 3, 3, 3, 3, 2, 3, 3, 2, 3, 5, 5, 3, 3, 2, 3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test2`
--

CREATE TABLE `test2` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `p1` varchar(1) DEFAULT NULL,
  `p2` varchar(1) DEFAULT NULL,
  `p3` varchar(1) DEFAULT NULL,
  `p4` varchar(1) DEFAULT NULL,
  `p5` varchar(1) DEFAULT NULL,
  `p6` varchar(1) DEFAULT NULL,
  `p7` varchar(1) DEFAULT NULL,
  `p8` varchar(1) DEFAULT NULL,
  `p9` varchar(1) DEFAULT NULL,
  `p10` varchar(1) DEFAULT NULL,
  `p11` varchar(1) DEFAULT NULL,
  `p12` varchar(1) DEFAULT NULL,
  `p13` varchar(1) DEFAULT NULL,
  `p14` varchar(1) DEFAULT NULL,
  `p15` varchar(1) DEFAULT NULL,
  `p16` varchar(1) DEFAULT NULL,
  `p17` varchar(1) DEFAULT NULL,
  `p18` varchar(1) DEFAULT NULL,
  `p19` varchar(1) DEFAULT NULL,
  `p20` varchar(1) DEFAULT NULL,
  `p21` varchar(1) DEFAULT NULL,
  `p22` varchar(1) DEFAULT NULL,
  `p23` varchar(1) DEFAULT NULL,
  `p24` varchar(1) DEFAULT NULL,
  `p25` varchar(1) DEFAULT NULL,
  `p26` varchar(1) DEFAULT NULL,
  `p27` varchar(1) DEFAULT NULL,
  `p28` varchar(1) DEFAULT NULL,
  `p29` varchar(1) DEFAULT NULL,
  `p30` varchar(1) DEFAULT NULL,
  `p31` varchar(1) DEFAULT NULL,
  `p32` varchar(1) DEFAULT NULL,
  `p33` varchar(1) DEFAULT NULL,
  `p34` varchar(1) DEFAULT NULL,
  `p35` varchar(1) DEFAULT NULL,
  `p36` varchar(1) DEFAULT NULL,
  `p37` varchar(1) DEFAULT NULL,
  `p38` varchar(1) DEFAULT NULL,
  `p39` varchar(1) DEFAULT NULL,
  `p40` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `test2`
--

INSERT INTO `test2` (`id`, `id_user`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `p38`, `p39`, `p40`) VALUES
(1, 1, 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'C', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test3`
--

CREATE TABLE `test3` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `p1` varchar(1) DEFAULT NULL,
  `p2` varchar(1) DEFAULT NULL,
  `p3` varchar(1) DEFAULT NULL,
  `p4` varchar(1) DEFAULT NULL,
  `p5` varchar(1) DEFAULT NULL,
  `p6` varchar(1) DEFAULT NULL,
  `p7` varchar(1) DEFAULT NULL,
  `p8` varchar(1) DEFAULT NULL,
  `p9` varchar(1) DEFAULT NULL,
  `p10` varchar(1) DEFAULT NULL,
  `p11` varchar(1) DEFAULT NULL,
  `p12` varchar(1) DEFAULT NULL,
  `p13` varchar(1) DEFAULT NULL,
  `p14` varchar(1) DEFAULT NULL,
  `p15` varchar(1) DEFAULT NULL,
  `p16` varchar(1) DEFAULT NULL,
  `p17` varchar(1) DEFAULT NULL,
  `p18` varchar(1) DEFAULT NULL,
  `p19` varchar(1) DEFAULT NULL,
  `p20` varchar(1) DEFAULT NULL,
  `p21` varchar(1) DEFAULT NULL,
  `p22` varchar(1) DEFAULT NULL,
  `p23` varchar(1) DEFAULT NULL,
  `p24` varchar(1) DEFAULT NULL,
  `p25` varchar(1) DEFAULT NULL,
  `p26` varchar(1) DEFAULT NULL,
  `p27` varchar(1) DEFAULT NULL,
  `p28` varchar(1) DEFAULT NULL,
  `p29` varchar(1) DEFAULT NULL,
  `p30` varchar(1) DEFAULT NULL,
  `p31` varchar(1) DEFAULT NULL,
  `p32` varchar(1) DEFAULT NULL,
  `p33` varchar(1) DEFAULT NULL,
  `p34` varchar(1) DEFAULT NULL,
  `p35` varchar(1) DEFAULT NULL,
  `p36` varchar(1) DEFAULT NULL,
  `p37` varchar(1) DEFAULT NULL,
  `p38` varchar(1) DEFAULT NULL,
  `p39` varchar(1) DEFAULT NULL,
  `p40` varchar(1) DEFAULT NULL,
  `p41` varchar(1) DEFAULT NULL,
  `p42` varchar(1) DEFAULT NULL,
  `p43` varchar(1) DEFAULT NULL,
  `p44` varchar(1) DEFAULT NULL,
  `p45` varchar(1) DEFAULT NULL,
  `p46` varchar(1) DEFAULT NULL,
  `p47` varchar(1) DEFAULT NULL,
  `p48` varchar(1) DEFAULT NULL,
  `p49` varchar(1) DEFAULT NULL,
  `p50` varchar(1) DEFAULT NULL,
  `p51` varchar(1) DEFAULT NULL,
  `p52` varchar(1) DEFAULT NULL,
  `p53` varchar(1) DEFAULT NULL,
  `p54` varchar(1) DEFAULT NULL,
  `p55` varchar(1) DEFAULT NULL,
  `p56` varchar(1) DEFAULT NULL,
  `p57` varchar(1) DEFAULT NULL,
  `p58` varchar(1) DEFAULT NULL,
  `p59` varchar(1) DEFAULT NULL,
  `p60` varchar(1) DEFAULT NULL,
  `p61` varchar(1) DEFAULT NULL,
  `p62` varchar(1) DEFAULT NULL,
  `p63` varchar(1) DEFAULT NULL,
  `p64` varchar(1) DEFAULT NULL,
  `p65` varchar(1) DEFAULT NULL,
  `p66` varchar(1) DEFAULT NULL,
  `p67` varchar(1) DEFAULT NULL,
  `p68` varchar(1) DEFAULT NULL,
  `p69` varchar(1) DEFAULT NULL,
  `p70` varchar(1) DEFAULT NULL,
  `p71` varchar(1) DEFAULT NULL,
  `p72` varchar(1) DEFAULT NULL,
  `p73` varchar(1) DEFAULT NULL,
  `p74` varchar(1) DEFAULT NULL,
  `p75` varchar(1) DEFAULT NULL,
  `p76` varchar(1) DEFAULT NULL,
  `p77` varchar(1) DEFAULT NULL,
  `p78` varchar(1) DEFAULT NULL,
  `p79` varchar(1) DEFAULT NULL,
  `p80` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `test3`
--

INSERT INTO `test3` (`id`, `id_user`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `p38`, `p39`, `p40`, `p41`, `p42`, `p43`, `p44`, `p45`, `p46`, `p47`, `p48`, `p49`, `p50`, `p51`, `p52`, `p53`, `p54`, `p55`, `p56`, `p57`, `p58`, `p59`, `p60`, `p61`, `p62`, `p63`, `p64`, `p65`, `p66`, `p67`, `p68`, `p69`, `p70`, `p71`, `p72`, `p73`, `p74`, `p75`, `p76`, `p77`, `p78`, `p79`, `p80`) VALUES
(1, 1, '+', '+', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) DEFAULT '1234',
  `name` varchar(32) DEFAULT NULL,
  `surnames` varchar(20) NOT NULL,
  `tel` int(15) NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `cp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `role`, `email`, `password`, `name`, `surnames`, `tel`, `ciudad`, `cp`) VALUES
(1, 1, 'user@gmail.com', '1234', 'Don Vergas', '', 0, '', 0),
(2, 2, 'p@gmail.com', '1234', '', '', 0, '', 0),
(3, 3, 'admin@gmail.com', '1234', '', '', 0, '', 0),
(4, 1, 'Miguel@gmail.com', '1234', 'Karime', 'kjkkjkj', 322332, '23123', 3132),
(5, 1, '20307035@utcgg.edu.mx', '1234', 'Karime', 'Espinosa', 75555555, 'Petatlan', 8888),
(6, 1, 'coito@gmail.com', '1234', 'Miguel', 'Reynosa', 2147483647, 'this', 40882);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_role`
--

INSERT INTO `user_role` (`id`, `descripcion`) VALUES
(1, 'Usuario'),
(2, 'psicólogo'),
(3, 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canal_de_aprendizaje_de_preferencia`
--
ALTER TABLE `canal_de_aprendizaje_de_preferencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `test3`
--
ALTER TABLE `test3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indices de la tabla `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canal_de_aprendizaje_de_preferencia`
--
ALTER TABLE `canal_de_aprendizaje_de_preferencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `test2`
--
ALTER TABLE `test2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `test3`
--
ALTER TABLE `test3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `id_role` FOREIGN KEY (`role`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
