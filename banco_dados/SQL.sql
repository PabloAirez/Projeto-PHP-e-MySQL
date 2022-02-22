-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2021 às 11:53
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `helloworld`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `usuario` varchar(120) NOT NULL,
  `conteudo` mediumtext NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `modificacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_postagens` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum`
--

CREATE TABLE `forum` (
  `id_codForum` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_saladeestudo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfildev`
--

CREATE TABLE `perfildev` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `tecnologias` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perfildev`
--

INSERT INTO `perfildev` (`id`, `titulo`, `descricao`, `tecnologias`) VALUES
(2, '<h3>Desenvolvedor Back-end</h3>', '<p>Seu perfil combina com o de um desenvolvedor back-end! </p>\r\n    <p>Esse desenvolvedor é responsável por criar a lógica por trás de um site ou aplicativo</p>\r\n    <p>Quando criamos uma conta em um site por exemplo, quem fará o controle para tudo funcionar é esse dev</p>\r\n    <p>Então prepare-se para estudar bastante e criar muitos sistemas revolucionários!</p>', '<p>O que devo estudar: Redes de internet, git, lógica e algoritmos, PHP, banco de dados, Laravel</p>'),
(3, '<h3>Desenvolvedor Front-end</h3>', '<p>Seu perfil combina com o de um desenvolvedor front-end! </p>\r\n    <p>Esse desenvolvedor é responsável por fazer a parte de sites que os usuários vêem</p>\r\n    <p>Pode se dizer de modo simplório que o mesmo é responsável por deixar o site bonito</p>\r\n    <p>E fácil de mexer, sem se preocupar em como as coisas acontecerão por trás da tela</p>', '<p>O que devo estudar: HTML, CSS, Javascript, git, VueJS, ReactJS,UX/UI</p>'),
(4, ' <h3>Desenvolvedor Fullstack</h3>', '<p>Seu perfil combina com o de um desenvolvedor fullstack! </p>\r\n    <p>Esse desenvolvedor tem o conhecimento de front-end, back-end, mobile e até de jogos</p>\r\n    <p>Por tanto, ele é quem mais precisa se dedicar para se especializar</p>\r\n    <p>Recomendamos que escolha uma área para se especializar enquanto estuda as outras</p>', '<p>O que devo estudar: HTML, CSS, lógica de programação, Javascript, git, ReactJS, React Native, nodeJS, C#, Unity</p>'),
(5, ' <h3>Desenvolvedor de Games</h3>', '<p>Seu perfil combina com o de um desenvolvedor de Games! </p>\r\n    <p>Esse desenvolvedor é responsável por criar jogos para as mais diversas plataformas!</p>\r\n    <p>Você pode criar jogos incríveis que irão divertir muitas pessoas e ainda ganhar um bom dinheiro</p>\r\n    <p>Deixe sua criatividade aflorar e explore esse novo mundo!</p>', '<p>O que devo estudar: Lógica de programação, modelagem 3D ou pixel art, C++, C#, Unity e Unreal Engine </p>'),
(6, '<h3>Desenvolvedor Mobile</h3>', '<p>Seu perfil combina com o de um desenvolvedor Mobile! </p>\r\n    <p>Esse desenvolvedor é responsável por criar aplicativos para dispositivos móveis</p>\r\n    <p>Você pode fazer aplicativos que ajudem as pessoas e publica-los nas lojas mobile</p>\r\n    <p>Como na Appstore e Playstore</p>', '<p>O que devo estudar: HTML, CSS, Javascript, git, como funciona um celular, diferentes tipos de telas, React Native/Flutter e Android Studio</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `id_postagem` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `conteudo` mediumtext NOT NULL,
  `autor` varchar(120) DEFAULT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_modificacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_sala` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saladeestudos`
--

CREATE TABLE `saladeestudos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_modificacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `saladeestudos`
--

INSERT INTO `saladeestudos` (`id`, `nome`, `descricao`, `categoria`, `data_criacao`, `data_modificacao`) VALUES
(1, 'estudo fullstack', 'compartilhar dicas para devs fullstack', 'fullstack', '2021-12-22 10:39:46', '2021-12-22 10:39:46'),
(2, 'estudo fullstack', 'compartilhar dicas para devs fullstack', 'fullstack', '2021-12-22 10:43:58', '2021-12-22 10:43:58'),
(3, 'estudo fullstack', 'compartilhar dicas para devs fullstack', 'fullstack', '2021-12-22 10:46:00', '2021-12-22 10:46:00'),
(4, 'estudo fullstack', 'compartilhar dicas para devs fullstack', 'fullstack', '2021-12-22 10:46:22', '2021-12-22 10:46:22'),
(5, 'bdf', 'sfvsdfb', 'sfdfddfdf', '2021-12-22 10:51:28', '2021-12-22 10:51:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(400) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `data_criacao`, `data_alteracao`, `id_perfil`) VALUES
(3, 'paulo', 'jeje2lee@gmail.com', '$2y$10$wXNCS6528WZ8oLtW6bKJfuTU8ZgeEFViY5nvmb4i1/0BAb4tBvasW', '2021-12-21 23:02:00', '2021-12-22 07:43:34', 4),
(4, 'oi', 'PABLO@GMAIL.COM', '$2y$10$Qmum2OdhIek04lgZipUSIOaeTw89lUAPiB3McWJeCJTSiJWWpHvry', '2021-12-21 23:41:42', '2021-12-22 08:37:46', 5),
(5, 'oi', 'oi@oi.com', '$2y$10$D7DA7iV6ns.mr6wFXZ4P8uaeB2uPEGS5Tccz6Q9W7nYzOUZFPblWW', '2021-12-22 00:30:18', '2021-12-22 07:59:43', 4),
(6, 'bu', 'bu@bu.com', '$2y$10$5fiWSoW5YOBk.t8zk74lrOp8e6vRBgDMA3q/vzsDPlW5GtiLNmGem', '2021-12-22 08:26:42', '2021-12-22 08:43:14', 6),
(7, 'REGEG', 'IO@GMAIL.COM', '$2y$10$joY.L9osmufphA4hkEKgCeibEUouZ4nbgRF2eVQvOEZvy.ekQr7eq', '2021-12-22 09:23:35', '2021-12-22 09:23:35', NULL),
(8, 'REGEG', 'IO@GMAIL.COM', '$2y$10$V1u5uKh6aAlKbnDfLbLMR.r77IdX1bBx4/QV1k/us.mlCkodoWxUG', '2021-12-22 09:24:03', '2021-12-22 09:24:03', NULL),
(9, 'erf', 'RGNRGN@MI.COM', '$2y$10$tT4lWPnoPWhvhw8R9LZKK.STKc/TaetgH.E/5JwwEBxoLHA5/54De', '2021-12-22 09:25:34', '2021-12-22 09:25:34', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `fk_ComentarioPost` (`id_postagens`);

--
-- Índices para tabela `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_codForum`),
  ADD KEY `fk_UsuarioForum` (`id_usuario`),
  ADD KEY `fk_SalaForum` (`id_saladeestudo`);

--
-- Índices para tabela `perfildev`
--
ALTER TABLE `perfildev`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id_postagem`),
  ADD KEY `fk_SalaPostagem` (`id_sala`);

--
-- Índices para tabela `saladeestudos`
--
ALTER TABLE `saladeestudos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_UsuarioPerfil` (`id_perfil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `forum`
--
ALTER TABLE `forum`
  MODIFY `id_codForum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfildev`
--
ALTER TABLE `perfildev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id_postagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saladeestudos`
--
ALTER TABLE `saladeestudos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_ComentarioPost` FOREIGN KEY (`id_postagens`) REFERENCES `postagens` (`id_postagem`);

--
-- Limitadores para a tabela `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `fk_SalaForum` FOREIGN KEY (`id_saladeestudo`) REFERENCES `saladeestudos` (`id`),
  ADD CONSTRAINT `fk_UsuarioForum` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `postagens`
--
ALTER TABLE `postagens`
  ADD CONSTRAINT `fk_SalaPostagem` FOREIGN KEY (`id_sala`) REFERENCES `saladeestudos` (`id`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_UsuarioPerfil` FOREIGN KEY (`id_perfil`) REFERENCES `perfildev` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
