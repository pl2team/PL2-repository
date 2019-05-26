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

INSERT INTO tantargyak (Megnevezes, Kategoria) VALUES ('Magyar','Humán');
INSERT INTO tantargyak (Megnevezes, Kategoria) VALUES ('Angol','Humán');
INSERT INTO tantargyak (Megnevezes, Kategoria) VALUES ('Matematika','Reál');
INSERT INTO tantargyak (Megnevezes, Kategoria) VALUES ('Fizika','Reál');

INSERT INTO feladattipusok (Megnevezes) VALUES ('Szöveges');

INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('János Vitéz',1,1,'Tüzesen süt le a nyári nap sugára
Az ég tetejéről a juhászbojtárra.
Fölösleges dolog sütnie oly nagyon,
A juhásznak úgyis nagy melege vagyon.

Szerelem tüze ég fiatal szivében,
Ugy legelteti a nyájt a faluvégen.
Faluvégen nyája mig szerte legelész,
Ő addig subáján a fűben heverész.

Tenger virág nyílik tarkán körülötte,
De ő a virágra szemét nem vetette;
Egy kőhajtásnyira foly tőle a patak,
Bámuló szemei odatapadtanak.

(Pest, 1844, november-december)');

INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 1',1,2,'English lession 1.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 2',1,2,'English lession 2.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 3',1,2,'English lession 3.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 4',1,2,'English lession 4.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 5',1,2,'English lession 5.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 6',1,2,'English lession 6.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 7',1,2,'English lession 7.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 8',1,2,'English lession 8.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 9',1,2,'English lession 9.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 10',1,2,'English lession 10.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 11',1,2,'English lession 11.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lession 12',1,2,'English lession 12.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Összeadás',1,3,'1 + 1 = 2');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Kivonás',1,3,'3 - 2 = 1');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Szorzás',1,3,'1 * 1 = 1');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Osztás',1,3,'8 / 4 = 2');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lecke 1',1,4,'Fizika lecke 1.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lecke 2',1,4,'Fizika lecke 2.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lecke 3',1,4,'Fizika lecke 3.');
INSERT INTO tananyagok (Megnevezes, IdFeladattipusok,IdTantargy, Tartalom) VALUES ('Lecke 4',1,4,'Fizika lecke 4.');

COMMIT;