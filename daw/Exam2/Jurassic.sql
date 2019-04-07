-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 07:21 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Jurassic`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`rcgc`@`%` PROCEDURE `addIncidente`(IN uIDLugar INT(11), uIDTipo INT (11))
BEGIN 
                INSERT INTO incidentes(IDLugar, IDTipo) VALUES('2','6'); 
            END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `incidentes`
--

CREATE TABLE IF NOT EXISTS `incidentes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FechaHora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IDLugar` int(11) NOT NULL,
  `IDTipo` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDLugar` (`IDLugar`),
  KEY `IDTipo` (`IDTipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `incidentes`
--

INSERT INTO `incidentes` (`ID`, `FechaHora`, `IDLugar`, `IDTipo`) VALUES
(1, '2019-04-05 06:34:09', 1, 1),
(2, '2019-04-05 06:34:09', 2, 2),
(3, '2019-04-05 07:06:17', 1, 2),
(4, '2019-04-05 07:09:28', 4, 1),
(9, '2019-04-05 07:24:38', 8, 5),
(10, '2019-04-05 07:25:09', 8, 6),
(11, '2019-04-05 07:25:34', 3, 1),
(12, '2019-04-05 07:26:14', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `lugares`
--

INSERT INTO `lugares` (`ID`, `Nombre`) VALUES
(1, 'Centro turístico'),
(2, 'Laboratorios'),
(3, 'Restaurante'),
(4, 'Centro operativo'),
(5, 'Triceratops'),
(6, 'Dilofosaurio'),
(7, 'Velociraptors'),
(8, 'TRex'),
(9, 'Planicie de herbívoros');

-- --------------------------------------------------------

--
-- Table structure for table `tipoincidente`
--

CREATE TABLE IF NOT EXISTS `tipoincidente` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(80) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tipoincidente`
--

INSERT INTO `tipoincidente` (`ID`, `Tipo`) VALUES
(1, 'Falla eléctrica'),
(2, 'Fuga de herbívoro'),
(3, 'Fuga de Velociraptor'),
(4, 'Fuga de TRex'),
(5, 'Robo de ADN'),
(6, 'Auto descompuesto'),
(7, 'Visitantes en zona no autorizada');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `incidentes`
--
ALTER TABLE `incidentes`
  ADD CONSTRAINT `incidentes_ibfk_3` FOREIGN KEY (`IDTipo`) REFERENCES `tipoincidente` (`ID`),
  ADD CONSTRAINT `incidentes_ibfk_1` FOREIGN KEY (`IDLugar`) REFERENCES `lugares` (`ID`),
  ADD CONSTRAINT `incidentes_ibfk_2` FOREIGN KEY (`IDLugar`) REFERENCES `lugares` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
