CREATE TABLE `usuarios`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `foto` varchar(255),
  `fecha_nacimiento` datetime,
  `puesto` varchar(255),
  `aficiones` text,
  `conocimientos` text,
  `fecha_ultima_conexion` datetime
);

CREATE TABLE `grupos`
(
  `id` int PRIMARY KEY AUTO_INCREMENT ,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text,
  `foto` varchar(255),
  `fecha_creacion` datetime
);

CREATE TABLE `mensajes`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_grupo` int NOT NULL,
  `fecha` datetime NOT NULL,
  `mensaje` text
);

CREATE TABLE `suscripciones`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_grupo` int NOT NULL,
  `fecha` datetime NOT NULL
);