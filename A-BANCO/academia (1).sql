-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2022 às 02:29
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinos`
--

CREATE TABLE `treinos` (
  `id` int(11) NOT NULL,
  `usuarios_cpf` varchar(45) NOT NULL,
  `tipoTreino` varchar(45) NOT NULL,
  `categoriaTreino` longtext NOT NULL,
  `nomeTreino` longtext NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `serie` int(11) NOT NULL,
  `repeticao` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `treinos`
--

INSERT INTO `treinos` (`id`, `usuarios_cpf`, `tipoTreino`, `categoriaTreino`, `nomeTreino`, `imagem`, `serie`, `repeticao`, `descricao`, `data`) VALUES
(1, '222.222.222-22', 'BÍCEPES', 'A', 'ROSCA- BARRA', 'rosca-biceps-aberta-na-barra.webp', 3, '12', 'Cuidado com as costas.', '2022-09-25 20:51:05'),
(2, '222.222.222-22', 'PEITO', 'A', 'SUPINO', 'supino.gif', 3, '12', 'Cuidado com as costas', '2022-09-25 20:59:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(20) NOT NULL,
  `nome` longtext NOT NULL,
  `nascimento` date NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `sangue` varchar(45) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `treino` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `ativo` int(11) NOT NULL,
  `dataCadastro` date NOT NULL,
  `imagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `nome`, `nascimento`, `cargo`, `senha`, `sangue`, `celular`, `email`, `cep`, `endereco`, `treino`, `descricao`, `ativo`, `dataCadastro`, `imagem`) VALUES
('078.907.645-45', 'Tiago', '2022-10-24', 'admin', 'teste', 'a+', '11111111111', 'Tiago@jttdtc.com', '44006330', 'BA, Feira de Santana, Muchila, Rua B', '1', 'Cuidado', 1, '2022-10-25', 'undraw_Pic_profile_re_1tdc.png'),
('222.222.222-22', 'João Pedro Rocha Dias', '2022-09-27', 'admin', 'teste', '2', '22222222222', '2', '44090016', 'BA, Feira de Santana, Tomba, Rua Pamponet', '?', '?', 1, '2022-09-27', 'joao.PNG'),
('333.333.333-33', 'Arthur Cardoso', '2022-09-27', 'aluno', 'teste', '3', '33333333333', '3', '44090016', 'BA, Feira de Santana, Tomba, Rua Pamponet', '?', '?', 1, '2022-09-27', 'pessoa.PNG');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `treinos`
--
ALTER TABLE `treinos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
