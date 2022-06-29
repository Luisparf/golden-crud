-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 29/06/2022 às 10:41
-- Versão do servidor: 8.0.29-0ubuntu0.20.04.3
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--
CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` blob,
  `solucao` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- RELACIONAMENTOS PARA TABELAS `login`:
--

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id`, `titulo`, `foto`, `solucao`) VALUES
(12, 'novo', 0x696d6167656e732f36333331323532613365616265393464643732333634376532616437633536352e706e67, 'sol'),
(13, 'new', 0x696d6167656e732f69636f5f696e666f2e706e67, 'texto'),
(14, 'new', 0x696d6167656e732f436170747572612064652074656c6120646520323032322d30362d30322031302d32342d33332e706e67, 'sadhuashduashduahsd\r\nasduhuashduasd\r\nasdhausduahsd\r\nkkkkkkkkkkkkk\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
