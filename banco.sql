-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Out-2020 às 20:48
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cabot`
--
CREATE DATABASE IF NOT EXISTS `cabot` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cabot`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id_cat` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nome`) VALUES
(1, 'Ação'),
(2, 'Comédia'),
(3, 'Aventura'),
(4, 'Terror'),
(5, 'Fantasia'),
(6, 'Drama'),
(7, 'Super-heróis'),
(8, 'Documentários'),
(9, 'Conceitual'),
(10, 'Animação'),
(11, 'Oscar'),
(12, 'Ficção Científica'),
(13, 'Infantil'),
(14, 'Romance'),
(15, 'Suspense'),
(16, 'Mistério'),
(17, 'Psicológico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE `filmes` (
  `id_filme` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `capa` varchar(64) DEFAULT NULL,
  `descricao` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `nome`, `capa`, `descricao`) VALUES
(1, 'John Wick', 'johnwickcapa.jpg', 0x486f6d656d2064656369646520656d62617263617220656d20756d61206a6f726e6164612064652076696e67616e8761206170a27320756d61207472a067696361207065726461),
(2, 'Vingadores Ultimato', 'johnwickcapa.jpg', NULL),
(3, 'Se Eu Fosse Você', 'johnwickcapa.jpg', NULL),
(4, 'Vingadores Guerra Infinita', 'johnwickcapa.jpg', NULL),
(5, 'Titanic', 'johnwickcapa.jpg', NULL),
(6, 'O Haloween de Hubie', 'johnwickcapa.jpg', NULL),
(7, 'The Room', 'johnwickcapa.jpg', NULL),
(8, 'Esqueceram de mim', 'johnwickcapa.jpg', NULL),
(9, 'Frozen/Cinderela 2', 'johnwickcapa.jpg', NULL),
(10, 'O Poderoso Chefão', 'opoderosochefao.jpg', 0x446f6e204d696368656c20436f726c656f6e6520657374a020656e76656c686563656e646f20652c20636f6d206120616a75646120646f20736f6272696e686f20566963656e7465204d616e63696e692c2062757363612061206c65676974696d6187c66f20646f7320696e74657265737365732064612066616da16c69612c20656d204e6f766120596f726b2065206e61204974a06c69612c20616e74657320646520737561206d6f7274652e204d6173207365752070726f74656769646f206ec66f20657374a02073a220696e74657265737361646f20656d20706172746520646f20696d708272696f2064612066616da16c69612e20456c652074616d62826d20646573656a6120612066696c6861206465204d69636861656c2c204d6172792e),
(11, 'Matrix', NULL, NULL),
(12, 'Duro de Matar', 'durodematarcapa.jpg', 0x4f20706f6c696369616c206465204e6f766120596f726b204a6f686e204d63436c616e6520657374a0207669736974616e646f207375612066616da16c6961206e6f204e6174616c2e20456c652070617274696369706120646520756d6120636f6e6672617465726e697a6187c66f2064652066696d20646520616e6f206e61207365646520646120656d7072657361206a61706f6e65736120656d207175652061206573706f73612074726162616c68612e2041206665737461208220696e746572726f6d7069646120706f7220746572726f7269737461732071756520696e766164656d206f2065646966a163696f206465206c75786f2e204d63436c616e65206ec66f2064656d6f7261206120706572636562657220717565206ec66f2068a0206e696e6775826d20706172612073616c76a02d6c6f732c2061206ec66f2073657220656c65207072a27072696f2e),
(13, 'Missão Impossível 2', 'missaoimpossivel2.jpg', 0x4f206167656e746520646f20676f7665726e6f20457468616e2048756e74206520736575206d656e746f722c204a696d205068656c70732c20656d62617263616d20656d20756d61206d697373c66f20736563726574612071756520746f6d6120756d2072756d6f20646573617374726f736f2c206e61207175616c204a696d2082206d6f72746f206520457468616e20746f726e612d7365206f207072696e636970616c20737573706569746f20646f20617373617373696e61746f2e2041676f726120756d20667567697469766f2c2048756e742072656372757461206f206272696c68616e7465204c757468657220537469636b656c6c2065206f2070696c6f746f204672616e7a204b726965676572207061726120616a7564a02d6c6f206120656e74726172206e6f2070728264696f206461204349412c20666f7274656d656e7465207669676961646f2c20612066696d20646520706567617220756d206172717569766f20646520636f6d70757461646f7220636f6e666964656e6369616c20717565207661692070726f7661722073756120696e6f63886e6369612e);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme_cat`
--

DROP TABLE IF EXISTS `filme_cat`;
CREATE TABLE `filme_cat` (
  `id_filme` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filme_cat`
--

INSERT INTO `filme_cat` (`id_filme`, `id_cat`) VALUES
(1, 1),
(1, 11),
(2, 1),
(2, 7),
(2, 2),
(2, 3),
(2, 11),
(3, 14),
(3, 2),
(4, 11),
(4, 1),
(4, 7),
(5, 11),
(5, 6),
(5, 14),
(6, 2),
(6, 15),
(6, 4),
(6, 16),
(7, 6),
(7, 9),
(7, 17),
(8, 2),
(8, 13),
(8, 11),
(9, 11),
(9, 10),
(9, 5),
(9, 3),
(9, 13),
(9, 2),
(9, 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`);

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id_filme`);

--
-- Índices para tabela `filme_cat`
--
ALTER TABLE `filme_cat`
  ADD KEY `id_filme` (`id_filme`),
  ADD KEY `id_cat` (`id_cat`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `filme_cat`
--
ALTER TABLE `filme_cat`
  ADD CONSTRAINT `filme_cat_ibfk_1` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id_filme`),
  ADD CONSTRAINT `filme_cat_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categorias` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
