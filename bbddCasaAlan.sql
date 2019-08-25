/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.38-MariaDB : Database - bdproyect
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdproyect` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `bdproyect`;

/*Table structure for table `canales` */

DROP TABLE IF EXISTS `canales`;

CREATE TABLE `canales` (
  `Id_Canal` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Descripcion` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`Id_Canal`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `canales` */

insert  into `canales`(`Id_Canal`,`Nombre`,`Descripcion`) values 
(1,'java','grupo para los programadores de java de la quinta planta'),
(2,'php','grupo para los programadores de PHP'),
(3,'ping pong','grupo para los programadores que sean amantes del ping pong'),
(4,'futbolin','grupo para los futbolineros');

/*Table structure for table `conversa` */

DROP TABLE IF EXISTS `conversa`;

CREATE TABLE `conversa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_us` int(11) DEFAULT NULL,
  `id_canal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `conversa` */

/*Table structure for table `migration_versions` */

DROP TABLE IF EXISTS `migration_versions`;

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migration_versions` */

/*Table structure for table `u_c` */

DROP TABLE IF EXISTS `u_c`;

CREATE TABLE `u_c` (
  `Id_UC` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Canal` int(11) DEFAULT NULL,
  `Id_Us` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_UC`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `u_c` */

insert  into `u_c`(`Id_UC`,`Id_Canal`,`Id_Us`) values 
(1,2,1),
(2,2,1),
(3,2,1),
(4,4,1),
(5,2,1),
(6,1,1),
(7,4,1),
(8,4,1);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `Id_Us` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puesto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aficiones` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conocimientos` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_Nac` date DEFAULT NULL,
  `Fecha_Ult_Con` date DEFAULT NULL,
  PRIMARY KEY (`Id_Us`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`Id_Us`,`correo`,`password`,`nombre`,`apellidos`,`puesto`,`aficiones`,`conocimientos`,`foto`,`Fecha_Nac`,`Fecha_Ult_Con`) values 
(1,'alan@gmail.com','1234','alan','bel lacoma','Recursos Humanos','basket futbol','php direccion equipos java html css',NULL,'2014-08-02',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
