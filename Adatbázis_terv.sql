-- CREATE SCHEMA `projektlabor` DEFAULT CHARACTER SET utf8 ;

DROP TABLE IF EXISTS `megoldasok`;
DROP TABLE IF EXISTS `tananyagok`;
DROP TABLE IF EXISTS `tantargyak`;
DROP TABLE IF EXISTS `feladattipusok`;
DROP TABLE IF EXISTS `user_has_jogsultsag`;
DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `jogosultsag`;

CREATE TABLE `user` (
  `IdUser` INT NOT NULL AUTO_INCREMENT,
  `UserName` VARCHAR(100) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdUser`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;
  
CREATE TABLE `jogosultsag` (
  `IdJogosultsag` INT NOT NULL AUTO_INCREMENT,
  `Megnevezes` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdJogosultsag`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;
  
CREATE TABLE `user_has_jogsultsag` (
  `IdUser` INT NOT NULL,
  `IdJogosultsag` INT NOT NULL,
  PRIMARY KEY (`IdUser`, `IdJogosultsag`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;  

CREATE TABLE `tantargyak` (
  `IdTantargyak` INT NOT NULL AUTO_INCREMENT,
  `Megnevezes` VARCHAR(100) NOT NULL,
  `Kategoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdTantargyak`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `feladattipusok` (
  `IdFeladattipusok` int(11) NOT NULL AUTO_INCREMENT,
  `Megnevezes` varchar(45) NOT NULL,
  `Tartalom` longtext,
  PRIMARY KEY (`IdFeladattipusok`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tananyagok` (
  `IdTananyag` int(11) NOT NULL AUTO_INCREMENT,
  `Megnevezes` varchar(100) NOT NULL,
  `IdFeladattipusok` int(11) NOT NULL,
  `IdTantargy` int(11) NOT NULL,
  `Tartalom` longtext,
  PRIMARY KEY (`IdTananyag`),
  KEY `FK_Tananyagok_IdTantargy_idx` (`IdTantargy`),
  KEY `FK_Tananyagok_IdFeladattipusok_idx` (`IdFeladattipusok`),
  CONSTRAINT `FK_Tananyagok_IdFeladattipusok` FOREIGN KEY (`IdFeladattipusok`) REFERENCES `feladattipusok` (`IdFeladattipusok`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Tananyagok_IdTantargy` FOREIGN KEY (`IdTantargy`) REFERENCES `tantargyak` (`IdTantargyak`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `megoldasok` (
  `IdMegoldasok` int(11) NOT NULL AUTO_INCREMENT,
  `IdTananyag` int(11) NOT NULL,
  `Megnevezes` varchar(45) NOT NULL,
  `Tartalom` longtext,
  PRIMARY KEY (`IdMegoldasok`),
  KEY `FK_Megoldasok_IdTananyag_idx` (`IdTananyag`),
  CONSTRAINT `FK_Megoldasok_IdTananyag` FOREIGN KEY (`IdTananyag`) REFERENCES `tananyagok` (`IdTananyag`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
