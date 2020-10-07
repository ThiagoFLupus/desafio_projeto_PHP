-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Out-2020 às 22:29
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vik`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

DROP TABLE IF EXISTS `tb_funcionario`;
CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cpf` int(11) UNSIGNED NOT NULL,
  `nome` varchar(200) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `foto` blob NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`id`, `cpf`, `nome`, `funcao`, `foto`) VALUES
(19, 2147483647, 'ZÃ© da Horta ', 'Vendedor ', 0x31395f6c6f676f2e6a7067),
(18, 545646, 'Akira ', 'Auxiliar moral', 0x31385f6c6f676f5f322e6a7067),
(20, 562142879, 'Phill Phell', 'Gerente', 0x32305f70726f6772616d6163616f2e6a7067),
(21, 2147483647, 'Maria do salÃ£o', 'Supervisora', 0x32315f706167696e612d656d2d636f6e7374727563616f2e706e67),
(22, 2147483647, 'Veia do aÃ§Ãµugue', 'AÃ§ougueira', 0x32325f7061696e656c486f6d652e6a7067);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone`
--

DROP TABLE IF EXISTS `tb_telefone`;
CREATE TABLE IF NOT EXISTS `tb_telefone` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ddd` int(2) UNSIGNED NOT NULL,
  `numero` int(9) UNSIGNED NOT NULL,
  `funcionario_id` int(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `funcionario_id` (`funcionario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_telefone`
--

INSERT INTO `tb_telefone` (`id`, `ddd`, `numero`, `funcionario_id`) VALUES
(12, 61, 33695487, 20),
(8, 61, 897524561, 19),
(9, 61, 888542211, 19),
(10, 61, 888542298, 18),
(11, 61, 225754415, 18),
(13, 61, 89745875, 20),
(14, 61, 888852264, 22);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
