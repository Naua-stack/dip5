/* Comandos que devem ser executados no workbench local antes de abrir a aplicação*/

CREATE DATABASE `dip5` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE dip5;

CREATE TABLE `eventos` (
  `idevento` int(11) NOT NULL,
  `nome` varchar(64) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`idevento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO dip5.eventos VALUES(1, 'Hawks X Pacers', '2022-10-04 16:30');
INSERT INTO dip5.eventos VALUES(2, 'Bulls X Heat', '2022-10-04 16:30');
INSERT INTO dip5.eventos VALUES(3, 'Lakers X Nets', '2022-10-04 16:30');

CREATE TABLE `registro_evento` (
  `idregistro_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_evento` varchar(64) DEFAULT NULL,
  `data_evento` varchar(45) DEFAULT NULL,
  `nome_usuario` varchar(45) DEFAULT NULL,
  `cpf_usuario` varchar(45) DEFAULT NULL,
  `email_usuario` varchar(45) DEFAULT NULL,
  `telefone_usuario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idregistro_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
