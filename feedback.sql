-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Mar-2015 às 12:21
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `cNome` varchar(75) NOT NULL,
  `cEmail` varchar(70) NOT NULL,
  `cTelefone` varchar(45) NOT NULL,
  `cSexo` varchar(1) NOT NULL,
  `cEstado` varchar(2) NOT NULL,
  `cDisciplinas` varchar(300) NOT NULL,
  `cComentario` varchar(140) NOT NULL,
  `idComent` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idComent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`cNome`, `cEmail`, `cTelefone`, `cSexo`, `cEstado`, `cDisciplinas`, `cComentario`, `idComent`) VALUES
('Igor', 'ogp@iofn', '999999', 'M', 'MS', 'SO', 'ciovusdiofbsdiobfsdnfviosdngviodsniovdfnosdinoidsniosd', 1),
('', 'dvd', 'vdd', 'v', '', 'MS', 'dweb', 4),
('', 'vfdd', 'dfgfd', 'f', '', 'MS', 'dweb', 5),
('', 'vfdd', 'dfgfd', 'f', '', 'MS', 'dweb', 6),
('djvbdsu', 'uidbvidub', 'uivbduivb', 'M', 'MS', 'dweb', 'vdd', 13),
('fwewe', 'fewwef', 'wefwe', 'M', 'MS', 'dweb', 'ff', 14),
('dvddvd', 'vdd', 'vdd', 'M', 'MS', 'dweb', 'vddd', 15),
('vdvds', 'vfdfd', 'vdvd', 'M', 'MS', 'dweb', 'vdvv', 16),
('vdd', 'vddv', 'vdd', 'M', 'MS', 'dweb', 'sds', 17),
('cvscvs', 'cvdsdcsc', 'scscs', 'M', 'MS', 'dweb', 'cscs', 18),
('vdd', 'vvvv', 'vvv', 'M', 'MS', 'dweb', 'vvv', 21),
('cscjkns', 'jc scvs', 'iocuisbcisu', 'M', 'MS', 'dweb,dmob', 'vbfbfv', 22),
('tony', 'tony.santos@', '878787', 'M', 'MS', 'dweb,dmob', 'oi.. acabei de aprender como fazer uma tabela dinamica em php', 24),
('tony', 'tony.santos@', '878787', '', 'MS', '', 'estava sem comentário', 25),
('vitor ', 'ifauio', '232655', 'M', 'SP', 'dweb', 'fadfad', 26),
('vitor ALTERADO 2', 'ifauio ', '232655', 'M', 'SP', '', 'fadfad ALTERADO 2', 27),
('tererearfda ', 'reafsa', 'rearfda', 'M', 'TO', 'dweb,dmob,lprog', 'fasdfa fa fdas', 28);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
