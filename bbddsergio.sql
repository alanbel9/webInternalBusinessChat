/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.3.16-MariaDB : Database - bdproyect
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdproyect` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bdproyect`;

/*Table structure for table `canales` */

DROP TABLE IF EXISTS `canales`;

CREATE TABLE `canales` (
  `Id_Canal` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Descripcion` longtext DEFAULT NULL,
  PRIMARY KEY (`Id_Canal`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `canales` */

insert  into `canales`(`Id_Canal`,`Nombre`,`Descripcion`) values 
(1,'Cafe','Para tomar cafe'),
(2,'Futbolin','Para jugar al futbolin'),
(3,'Ping-Pong','Para jugar al ping-pong'),
(4,'Fumar','Para fumar'),
(5,'PHP','Cursado PHP'),
(6,'Java','Cursado Java');

/*Table structure for table `conversa` */

DROP TABLE IF EXISTS `conversa`;

CREATE TABLE `conversa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Us` int(11) DEFAULT NULL,
  `Id_Canal` int(11) DEFAULT NULL,
  `Mensaje` longtext DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Us` (`Id_Us`),
  KEY `Id_Canal` (`Id_Canal`),
  CONSTRAINT `conversa_ibfk_1` FOREIGN KEY (`Id_Us`) REFERENCES `usuarios` (`Id_Us`),
  CONSTRAINT `conversa_ibfk_2` FOREIGN KEY (`Id_Canal`) REFERENCES `canales` (`Id_Canal`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `conversa` */

insert  into `conversa`(`Id`,`Id_Us`,`Id_Canal`,`Mensaje`,`Fecha`) values 
(4,1,1,'holaaaaa','2019-08-26 11:54:52'),
(5,1,1,'qqqqqqqqqqqqqqqqqq','2019-08-26 11:55:16');

/*Table structure for table `u_c` */

DROP TABLE IF EXISTS `u_c`;

CREATE TABLE `u_c` (
  `Id_Us` int(11) DEFAULT NULL,
  `Id_Canal` int(11) DEFAULT NULL,
  `Id_UC` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_UC`),
  UNIQUE KEY `unique` (`Id_Us`,`Id_Canal`),
  KEY `us` (`Id_Us`),
  KEY `ca` (`Id_Canal`),
  CONSTRAINT `ca-pk` FOREIGN KEY (`Id_Canal`) REFERENCES `canales` (`Id_Canal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `us-pk` FOREIGN KEY (`Id_Us`) REFERENCES `usuarios` (`Id_Us`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `u_c` */

insert  into `u_c`(`Id_Us`,`Id_Canal`,`Id_UC`) values 
(1,1,10),
(1,2,13),
(1,3,14),
(1,4,12),
(1,5,7),
(1,6,9);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `Id_Us` int(11) NOT NULL AUTO_INCREMENT,
  `Correo` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Puesto` varchar(100) DEFAULT NULL,
  `Conocimientos` longtext DEFAULT NULL,
  `Aficiones` longtext DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `Fecha_Nac` date DEFAULT NULL,
  `Fecha_Ult_Con` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_Us`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`Id_Us`,`Correo`,`Password`,`Nombre`,`Apellidos`,`Puesto`,`Conocimientos`,`Aficiones`,`Foto`,`Fecha_Nac`,`Fecha_Ult_Con`) values 
(1,'sas@mail.com','sas','Alan','Bel','desarrollador','Se de tooo','Pescar mulatas','https://ugc.kn3.net/i/760x/http://2.bp.blogspot.com/-i9_wTy7yzJM/TmkyIIT9FJI/AAAAAAAAA4E/rx7lpuIK17w','2019-08-07',NULL),
(2,'ee','ee','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(3,'lourdes@chat','1111','Lourdes','Chavarria','platicadora','molestar','ver series ',NULL,'2000-05-03',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
