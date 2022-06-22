-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Nov-2019 às 00:57
-- Versão do servidor: 5.5.28
-- versão do PHP: 5.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `tbusuarios`
--
CREATE DATABASE IF NOT EXISTS `tbusuarios` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tbusuarios`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nome` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` char(32) NOT NULL,
  `adm` int(10) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `adm`, `id`, `cpf`) VALUES
('Raphael', 'raphacalixto10@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 0, 1, '60e352c188daed0d3cace25e4a5dafd5'),
('Leonidas', 'leonidas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 2, 'df65a265f57fcdeb879f930c0f60f5fe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
