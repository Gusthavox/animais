-- Adminer 4.8.1 MySQL 5.5.5-10.5.19-MariaDB-1:10.5.19+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `db_adocao`;
CREATE DATABASE `db_adocao` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_adocao`;

DROP TABLE IF EXISTS `tb_adocao`;
CREATE TABLE `tb_adocao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `id_adotante` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_animal` (`id_animal`),
  KEY `id_adotante` (`id_adotante`),
  CONSTRAINT `tb_adocao_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `tb_animal` (`id_animal`),
  CONSTRAINT `tb_adocao_ibfk_2` FOREIGN KEY (`id_adotante`) REFERENCES `tb_adotante` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_adocao` (`id`, `id_animal`, `id_adotante`) VALUES
(1,	12,	4),
(2,	12,	5),
(3,	14,	6),
(4,	12,	7);

DROP TABLE IF EXISTS `tb_adotante`;
CREATE TABLE `tb_adotante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `idade` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_adotante` (`id`, `nome`, `idade`, `cpf`, `celular`, `endereco`) VALUES
(1,	'Lucas',	35,	'11122233344',	'987654321',	'Rua1'),
(2,	'Lucas',	35,	'11122233344',	'987654321',	'Rua1'),
(3,	'Lucas',	35,	'11122233344',	'987654321',	'Rua1'),
(4,	'Lucas',	35,	'11122233344',	'987654321',	'Rua1'),
(5,	'Giovana',	16,	'11122233344',	'987654321',	'carmo'),
(6,	'Lucas',	35,	'9999999',	'987654321',	'aaaaaaa'),
(7,	'filme teste',	22,	'20228138903',	'123456789',	'aaaaaaaaa');

DROP TABLE IF EXISTS `tb_animal`;
CREATE TABLE `tb_animal` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `especie` varchar(100) NOT NULL,
  `raca` varchar(100) NOT NULL,
  `sexo` char(2) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `nome_animal` varchar(100) NOT NULL,
  PRIMARY KEY (`id_animal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_animal` (`id_animal`, `especie`, `raca`, `sexo`, `cor`, `nome_animal`) VALUES
(12,	'Gato',	'Cinza',	'M',	'cinza',	'Ranz'),
(13,	'Bonito',	'Beleza',	'F',	'cinza',	'kitty'),
(14,	'Gato',	'punk',	'M',	'malhado',	'loki'),
(15,	'cachorro',	'golden',	'F',	'Amarelo',	'Paul'),
(16,	'cachorro',	'sem',	'F',	'branco',	'Doguinha'),
(17,	'cachorro',	'Pug',	'M',	'bege',	'Baiacu');

DROP TABLE IF EXISTS `tb_fornecedor`;
CREATE TABLE `tb_fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `idade` int(3) NOT NULL,
  `endereco` int(200) NOT NULL,
  `cpf` int(11) NOT NULL,
  `celular` int(13) NOT NULL,
  `tb_animal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_fornecedor_tb_animal_idx` (`tb_animal_id`),
  CONSTRAINT `fk_tb_fornecedor_tb_animal` FOREIGN KEY (`tb_animal_id`) REFERENCES `tb_animal` (`id_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `tb_veterinario`;
CREATE TABLE `tb_veterinario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `cpf` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `celular` int(13) NOT NULL,
  `idade` int(3) NOT NULL,
  `formacao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_veterinario` (`id`, `nome`, `cpf`, `endereco`, `celular`, `idade`, `formacao`) VALUES
(1,	'João',	202902901,	'Heitorai',	99222865,	23,	'UEG'),
(2,	'Kátia',	26781926,	'Ceres',	99276532,	41,	'USP'),
(3,	'Eduardo',	28391663,	'Goianésia',	994827618,	21,	'UEG'),
(4,	'Gusthavo',	123456789,	'ass',	1223434,	19,	'usp');

-- 2023-06-27 14:01:08
