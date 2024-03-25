-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2023 a las 21:30:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nueva_fundacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursa`
--

CREATE DATABASE nueva_fundacion;

USE nueva_fundacion;

CREATE TABLE `cursa` (
  `id_cursa` int(11) NOT NULL,
  `fecha_inscripcion` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_est` int(11) NOT NULL,
  `id_taller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dictado`
--

CREATE TABLE `dictado` (
  `id_dictado` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_taller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_est` int(11) NOT NULL,
  `cedula` int(10) NOT NULL,
  `primer_nombre` varchar(10) NOT NULL,
  `segundo_nombre` varchar(10) NOT NULL,
  `primer_apellido` varchar(10) NOT NULL,
  `segundo_apellido` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  `genero` text NOT NULL,
  `condicion` varchar(100) NOT NULL,
  `municipio` varchar(20) NOT NULL,
  `parroquia` varchar(20) NOT NULL,
  `av_calle` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Disparadores `estudiante`
--
DELIMITER $$
CREATE TRIGGER `notificacion_editar_estudiante` AFTER UPDATE ON `estudiante` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha editado la información de un estudiante', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_eliminar_estudiante` AFTER DELETE ON `estudiante` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha eliminado un estudiante', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_insertar_estudiante` AFTER INSERT ON `estudiante` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha insertado un nuevo estudiante', CURRENT_USER());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insert_trigger_fundacion`
--

CREATE TABLE `insert_trigger_fundacion` (
  `id_trigger_insert` int(11) NOT NULL,
  `desc_trigger_insert` varchar(200) NOT NULL,
  `user_trigger_insert` varchar(50) NOT NULL,
  `fecha_trigger_insert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes`
--

CREATE TABLE `mes` (
  `id_mes` int(11) NOT NULL,
  `nombre_mes` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mes`
--

INSERT INTO `mes` (`id_mes`, `nombre_mes`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `monto` smallint(6) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `forma_pago` varchar(10) NOT NULL,
  `concepto` varchar(100) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Disparadores `pago`
--
DELIMITER $$
CREATE TRIGGER `notificacion_insertar_pago` AFTER INSERT ON `pago` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha insertado un nuevo pago', CURRENT_USER());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_prof` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  `genero` varchar(20) NOT NULL,
  `municipio` varchar(20) NOT NULL,
  `parroquia` varchar(20) NOT NULL,
  `av_calle` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Disparadores `profesor`
--
DELIMITER $$
CREATE TRIGGER `notificacion_editar_profesor` AFTER UPDATE ON `profesor` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha editado la información de un profesor', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_eliminar_profesor` AFTER DELETE ON `profesor` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha eliminado un profesor', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_insertar_profesor` AFTER INSERT ON `profesor` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha insertado un nuevo profesor', CURRENT_USER());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realiza`
--

CREATE TABLE `realiza` (
  `id_realiza` int(11) NOT NULL,
  `id_cursa` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL,
  `id_mes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representado`
--

CREATE TABLE `representado` (
  `ID` int(11) NOT NULL,
  `id_repre` int(11) NOT NULL,
  `id_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `id_repre` int(11) NOT NULL,
  `cedula` int(10) NOT NULL,
  `primer_nombre` varchar(10) NOT NULL,
  `segundo_nombre` varchar(10) NOT NULL,
  `primer_apellido` varchar(10) NOT NULL,
  `segundo_apellido` varchar(10) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `correo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Disparadores `representante`
--
DELIMITER $$
CREATE TRIGGER `notificacion_editar_representante` AFTER UPDATE ON `representante` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha editado la información de un representante', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_eliminar_representante` AFTER DELETE ON `representante` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha eliminado un representante', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_insertar_representante` AFTER INSERT ON `representante` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha insertado un nuevo representante', CURRENT_USER());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `id_taller` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sede` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `taller`
--

INSERT INTO `taller` (`id_taller`, `nombre`, `sede`, `descripcion`) VALUES
(1, 'Percusión Afrovenezolana', 'Pasaje 8', 'Los géneros de percusión más famosos de Venezuela'),
(3, 'Percusión Afrolatina', 'Teatro Alameda', 'Los géneros de percusión más famosos del caribe'),
(4, 'Percusión infantil', 'Los Hornos', 'Enseñarle a los niños la base general de la percusión'),
(5, 'Décimas', 'Los Hornos', 'Enseñarle a los niños como cantarle y hablarle a la Cruz de Mayo'),
(6, 'Shekeré', 'Teatro Alameda', 'El arte de este instrumento ancentral '),
(7, 'Piano', 'Teatro Alameda', 'Se enseña las técnicas para dominar este bello instrumento'),
(8, 'Canto & Cuerda', 'Teatro Alameda', 'Se enseña como modular la voz para cantar y como tocar'),
(9, 'Ballet 1er Año', 'Teatro Alameda', 'El primer nivel para las niñas y jóvenes que quieran aprender esta forma de bailar'),
(10, 'Ballet 2do Año', 'Teatro Alameda', 'El segundo nivel para las niñas y jóvenes que quieran aprender esta forma de bailar'),
(11, 'Gimnasia', 'Teatro Alameda', 'Aprender a tener disciplina '),
(12, 'Danza', 'Teatro Alameda', 'Se enseña como bailar'),
(13, 'Danza Contemporánea', 'Teatro Alameda', 'Se enseña como bailar los géneros afrovenezolanos'),
(14, 'Karate', 'Teatro Alameda', 'Se enseña la autodefensa mental y física');

--
-- Disparadores `taller`
--
DELIMITER $$
CREATE TRIGGER `notificacion_editar_taller` AFTER UPDATE ON `taller` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha editado la información de un taller', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_eliminar_taller` AFTER DELETE ON `taller` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha eliminado un taller', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_insertar_taller` AFTER INSERT ON `taller` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha insertado un nuevo taller', CURRENT_USER());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `apellido`, `nombre_usuario`, `contrasena`, `rol`) VALUES
(1, 'Israel', 'León', 'Leon1515', '1234', 'Super Usuario');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `notificacion_editar_usuario` AFTER UPDATE ON `usuarios` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Un súper usuario ha editado información de un usuario administrador', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_eliminar_usuario` AFTER DELETE ON `usuarios` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Un súper usuario ha eliminado a un usuario administrador', CURRENT_USER());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `notificacion_insertar_usuario` AFTER INSERT ON `usuarios` FOR EACH ROW begin 
    insert into insert_trigger_fundacion (desc_trigger_insert, user_trigger_insert) 
    value ('Se ha registrado un nuevo usuario', CURRENT_USER());
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD PRIMARY KEY (`id_cursa`),
  ADD KEY `cursa_ibfk_1` (`id_est`),
  ADD KEY `cursa_ibfk_2` (`id_taller`);

--
-- Indices de la tabla `dictado`
--
ALTER TABLE `dictado`
  ADD PRIMARY KEY (`id_dictado`),
  ADD KEY `dictado_ibfk_1` (`id_taller`),
  ADD KEY `dictado_ibfk_2` (`id_prof`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_est`);

--
-- Indices de la tabla `insert_trigger_fundacion`
--
ALTER TABLE `insert_trigger_fundacion`
  ADD PRIMARY KEY (`id_trigger_insert`);

--
-- Indices de la tabla `mes`
--
ALTER TABLE `mes`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_prof`);

--
-- Indices de la tabla `realiza`
--
ALTER TABLE `realiza`
  ADD PRIMARY KEY (`id_realiza`),
  ADD KEY `realiza_ibfk_1` (`id_cursa`),
  ADD KEY `realiza_ibfk_2` (`id_pago`),
  ADD KEY `realiza_ibfk_3` (`id_mes`);

--
-- Indices de la tabla `representado`
--
ALTER TABLE `representado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `representado_ibfk_1` (`id_repre`),
  ADD KEY `representado_ibfk_2` (`id_est`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id_repre`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`id_taller`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursa`
--
ALTER TABLE `cursa`
  MODIFY `id_cursa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dictado`
--
ALTER TABLE `dictado`
  MODIFY `id_dictado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `insert_trigger_fundacion`
--
ALTER TABLE `insert_trigger_fundacion`
  MODIFY `id_trigger_insert` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `realiza`
--
ALTER TABLE `realiza`
  MODIFY `id_realiza` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `representado`
--
ALTER TABLE `representado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
  MODIFY `id_repre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `taller`
--
ALTER TABLE `taller`
  MODIFY `id_taller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
