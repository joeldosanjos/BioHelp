/*
SQLyog Enterprise v12.13 (64 bit)
MySQL - 10.1.19-MariaDB : Database - biohelp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`biohelp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `biohelp`;

/*Table structure for table `comum` */

DROP TABLE IF EXISTS `comum`;

CREATE TABLE `comum` (
  `nome` varchar(80) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `codigoc` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigoc`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `comum` */

insert  into `comum`(`nome`,`login`,`senha`,`codigoc`) values ('Joel dos Anjos GonÃ§alves','Perceunt','1029384756qp',1);

/*Table structure for table `guarda` */

DROP TABLE IF EXISTS `guarda`;

CREATE TABLE `guarda` (
  `nome` varchar(80) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `codigog` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigog`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `guarda` */

insert  into `guarda`(`nome`,`login`,`senha`,`cpf`,`nascimento`,`codigog`) values ('Joel dos Anjos GonÃ§alves','Perceunt','1029384756qp','49567028842','2001-07-16',1);

/*Table structure for table `informes` */

DROP TABLE IF EXISTS `informes`;

CREATE TABLE `informes` (
  `cod` int(4) NOT NULL AUTO_INCREMENT,
  `dataocorrido` date NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `informes` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
