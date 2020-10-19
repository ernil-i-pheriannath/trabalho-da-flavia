SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text DEFAULT NULL,
  `capa` varchar(50) DEFAULT NULL,
  `categorias` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `filmes` (`id`, `nome`, `descricao`, `capa`, `categorias`) VALUES
(1, 'John Wick', 'descrição', 'johnwickcapa.jpg', 'Ação,Oscar'),
(2, 'Vingadores Ultimato', 'descrição', 'johnwickcapa.jpg', 'Ação,Comédia,Aventura,Super-heróis,Oscar'),
(3, 'Se eu Fosse Você', 'descrição', 'johnwickcapa.jpg', 'Comédia'),
(4, 'Vingadores Guerra Infinita', 'descrição', 'johnwickcapa.jpg', 'Ação,Super-heróis,Oscar'),
(5, 'Titanic', 'descrição', 'johnwickcapa.jpg', 'Drama,Oscar'),
(6, 'O Haloween de Hubie', 'descrição', 'johnwickcapa.jpg', 'Comédia,Terror'),
(7, 'The Room', 'descrição', 'johnwickcapa.jpg', 'Drama,Conceitual'),
(8, 'Esqueceram de mim', 'descrição', 'johnwickcapa.jpg', 'Comédia,Oscar'),
(9, 'Frozen/Cinderela 2', 'descrição', 'johnwickcapa.jpg', 'Comédia,Aventura,Fantasia,Drama,Animação,Oscar'),
(11, 'Matrix', 'descrição', 'johnwickcapa.jpg', 'Ação');

CREATE TABLE `_categorias` (
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `_categorias` (`nome`) VALUES
('Ação'),
('Comédia'),
('Aventura'),
('Super-heróis'),
('Oscar'),
('Terror'),
('Drama'),
('Animação'),
('Fantasia'),
('Conceitual'),
('Máfia'),
('Romance'),
('Ficção Científica'),
('Faroeste'),
('Espionagem'),
('Disastre'),
('Apocalipse'),
('Jovens Adultos'),
('Musical'),
('Mistério'),
('Suspense'),
('Crítica Social'),
('Guerra'),
('Dança'),
('Kaiju'),
('Documentário'),
('Opera'),
('Policial'),
('Buddy Cop'),
('Amador'),
('Produções ORT'),
('Lei'),
('Thriller'),
('Pós-Modernista'),
('Noir'),
('Magia'),
('Brasileiro'),
('Surrealista'),
('Exploração'),
('Filme de Arte'),
('Filme de Assalto'),
('Infantil'),
('Histórico'),
('Paródia'),
('Filme Feminino'),
('Artes Marciais'),
('Filme de Estrada'),
('Escola'),
('Tubarão'),
('Mitologia'),
('Grécia antiga'),
('Sobrevivência'),
('Folclore'),
('Indígenas'),
('Antiguidade'),
('Religião'),
('Aliens'),
('Distopia'),
('História Alternativa');


ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
