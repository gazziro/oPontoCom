-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2021 às 13:29
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancodedadostde6`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comprador`
--

CREATE TABLE `comprador` (
  `cpf_comprador` varchar(11) NOT NULL,
  `endereco_entrega` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comprador`
--

INSERT INTO `comprador` (`cpf_comprador`, `endereco_entrega`) VALUES
('', ''),
('111', 'durvalino'),
('13131313131', 'Rua Pedro Monteleone'),
('420', 'Ibaté'),
('49455', 'Casa'),
('666', NULL),
('777', NULL),
('999', 'Itirapina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `codigo_ident_produto` int(11) NOT NULL,
  `preco` int(11) DEFAULT NULL,
  `data_emissao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`codigo_ident_produto`, `preco`, `data_emissao`) VALUES
(121, 250, '2020-12-19'),
(321, 20, '2021-01-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `data_criacao_conta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`cpf`, `nome`, `endereco`, `email`, `senha`, `data_criacao_conta`) VALUES
('', '', '', '', '', NULL),
('111', 'Gabriel', 'durvalino', 'gab@gmail.com', '1234', '2020-09-13'),
('13131313131', 'Rythm', 'Rua Pedro Monteleone', 'R@gmail.com', '13245', NULL),
('13133131313', 'Tavinho', 'São Carlos', '', '', NULL),
('3131', 'guilherme', NULL, 'gui@gmail.com', '1234567', NULL),
('3131345654', 'Tavinho', 'São Carlos', 'tavinhopiranhudo@gmail.com', '66ficamol60ficaduro', NULL),
('420', 'teste', 'Ibaté', 'teste@gmail.com', 'teste', NULL),
('49455', 'Gabriel', 'Casa', 'g@gmail.com', '41414141', NULL),
('4949', 'otavio', NULL, 'otavio@gmail', '1234567', NULL),
('505', 'Pessoa', NULL, 'p@hotmail.com', 'senha456', '2020-12-25'),
('666', 'Coisa Ruim', 'inferno', 'satanas@tartaro.com', 'senha666', '2012-02-11'),
('777', 'Raffa', 'Guarulhos', 'bcraff@gmail.com', 'senha777', NULL),
('999', 'Jaime', 'Itirapina', 'jaime@gmail.com', 'senha432', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo_ident` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `descricao` varchar(999) DEFAULT NULL,
  `data_anuncio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo_ident`, `nome`, `preco`, `descricao`, `data_anuncio`) VALUES
(121, 'bicicleta', 249.99, 'é uma bicicleta', NULL),
(321, 'controle', 20, 'funciona', NULL),
(777, 'óculos do raffa moreira', 777, 'Gang Gang bro óculos do lil raff', NULL),
(888, 'Teclado', 299, 'Redragon Kumara', NULL),
(6565, 'aaa', 7777777, 'teste', NULL),
(7876, 'Alcool', 15, 'em gel', NULL),
(65657, 'aaab', 7777777, 'teste', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `cpf_vendedor` varchar(11) NOT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`cpf_vendedor`, `cnpj`, `cidade`, `estado`) VALUES
('', '', '', ''),
('111', '888', 'Araraquara', 'SP'),
('420', '8989', 'Itirapina', 'SP'),
('505', '949', 'São Carlos', 'SP'),
('666', '747', 'são carlos', 'SP');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comprador`
--
ALTER TABLE `comprador`
  ADD PRIMARY KEY (`cpf_comprador`);

--
-- Índices para tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD PRIMARY KEY (`codigo_ident_produto`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo_ident`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`cpf_vendedor`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comprador`
--
ALTER TABLE `comprador`
  ADD CONSTRAINT `comprador_ibfk_1` FOREIGN KEY (`cpf_comprador`) REFERENCES `pessoa` (`cpf`);

--
-- Limitadores para a tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD CONSTRAINT `nota_fiscal_ibfk_1` FOREIGN KEY (`codigo_ident_produto`) REFERENCES `produto` (`codigo_ident`);

--
-- Limitadores para a tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`cpf_vendedor`) REFERENCES `pessoa` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
