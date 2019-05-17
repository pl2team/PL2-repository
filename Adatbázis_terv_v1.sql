-- CREATE SCHEMA `projektlabor` DEFAULT CHARACTER SET utf8 ;

DROP TABLE IF EXISTS `projektlabor`.`tananyagok`;
DROP TABLE IF EXISTS `projektlabor`.`megoldasok`;
DROP TABLE IF EXISTS `projektlabor`.`tantargyak`;
DROP TABLE IF EXISTS `projektlabor`.`feladattipusok`;
DROP TABLE IF EXISTS `projektlabor`.`user_has_jogsultsag`;
DROP TABLE IF EXISTS `projektlabor`.`user`;
DROP TABLE IF EXISTS `projektlabor`.`jogosultsag`;

CREATE TABLE `projektlabor`.`user` (
  `IdUser` INT NOT NULL AUTO_INCREMENT,
  `UserName` VARCHAR(100) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdUser`))
  ENGINE = InnoDB;
  
CREATE TABLE `projektlabor`.`jogosultsag` (
  `IdJogosultsag` INT NOT NULL AUTO_INCREMENT,
  `Megnevezes` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdJogosultsag`))
  ENGINE = InnoDB;
  
CREATE TABLE `projektlabor`.`user_has_jogsultsag` (
  `IdUser` INT NOT NULL,
  `IdJogosultsag` INT NOT NULL,
  PRIMARY KEY (`IdUser`, `IdJogosultsag`))
  ENGINE = InnoDB;  

CREATE TABLE `projektlabor`.`tantargyak` (
  `IdTantargyak` INT NOT NULL AUTO_INCREMENT,
  `Megnevezes` VARCHAR(100) NOT NULL,
  `Kategoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdTantargyak`))
  ENGINE = InnoDB;

CREATE TABLE `projektlabor`.`feladattipusok` (
  `IdFeladattipusok` INT NOT NULL AUTO_INCREMENT,
  `Megnevezes` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdFeladattipusok`))
  ENGINE = InnoDB;

CREATE TABLE `projektlabor`.`tananyagok` (
  `IdTananyag` INT NOT NULL AUTO_INCREMENT,
  `Megnevezes` VARCHAR(100) NOT NULL,
  `IdFeladattipusok` INT NOT NULL,
  `IdTantargy` INT NOT NULL,
  PRIMARY KEY (`IdTananyag`),
  INDEX `FK_Tananyagok_IdTantargy_idx` (`IdTantargy` ASC),
  INDEX `FK_Tananyagok_IdFeladattipusok_idx` (`IdFeladattipusok` ASC),
  CONSTRAINT `FK_Tananyagok_IdTantargy`
    FOREIGN KEY (`IdTantargy`)
    REFERENCES `projektlabor`.`tantargyak` (`IdTantargyak`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Tananyagok_IdFeladattipusok`
    FOREIGN KEY (`IdFeladattipusok`)
    REFERENCES `projektlabor`.`feladattipusok` (`IdFeladattipusok`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
  ENGINE = InnoDB;

CREATE TABLE `projektlabor`.`megoldasok` (
  `IdMegoldasok` INT NOT NULL AUTO_INCREMENT,
  `IdTananyag` INT NOT NULL,
  `Megnevezes` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdMegoldasok`),
  INDEX `FK_Megoldasok_IdTananyag_idx` (`IdTananyag` ASC),
  CONSTRAINT `FK_Megoldasok_IdTananyag`
    FOREIGN KEY (`IdTananyag`)
    REFERENCES `projektlabor`.`tananyagok` (`IdTananyag`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
  ENGINE = InnoDB;
