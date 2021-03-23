-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2020 às 02:13
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
-- Banco de dados: `prova`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `renda` decimal(10,2) NOT NULL,
  `credito` decimal(10,2) NOT NULL,
  `fk_idpessoas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idcliente`, `renda`, `credito`, `fk_idpessoas`) VALUES
(1, '10000.00', '1000.00', 1),
(2, '20000.00', '2000.00', 2),
(3, '10000.00', '2000.00', 3),
(6, '1000.00', '300.00', 4),
(13, '55555.00', '555555.00', 0),
(14, '6666.00', '66666.00', 0),
(15, '30000.00', '2000.00', 0),
(16, '0.00', '0.00', 0),
(17, '10000.00', '2000.00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedidos`
--

CREATE TABLE `itens_pedidos` (
  `fk_idpedido` int(11) NOT NULL,
  `fk_idproduto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `status` enum('confirmado','cancelado','espera') NOT NULL,
  `fk_idvendedor` int(11) NOT NULL,
  `fk_idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `data`, `valor`, `status`, `fk_idvendedor`, `fk_idcliente`) VALUES
(1, '2015-04-22', '9', 'confirmado', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `idpessoa` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `status` enum('A','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`idpessoa`, `nome`, `cpf`, `status`) VALUES
(1, 'shaolin', 1111111111, 'A'),
(2, 'gabriel lindao', 22222222222, 'A'),
(3, 'vitao', 33333333333, 'I'),
(4, 'vendedor', 444444444444, 'A'),
(14, 'teste', 5119522525, ''),
(15, 'GABRIEL PEREIRA DOS SANTOS', 44444444444, ''),
(16, 'cinco', 555555555555, ''),
(17, '666', 66666666666, ''),
(18, 'test', 44444444444, ''),
(19, '', 0, ''),
(20, '', 0, ''),
(21, '', 0, ''),
(22, '', 0, ''),
(23, '', 0, ''),
(24, '', 0, ''),
(25, 'teste', 12345678910, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `estoque` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `status` enum('A','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `descricao`, `estoque`, `valor`, `status`) VALUES
(1, 'salgadinho', 999, '6.00', 'A'),
(2, 'coca-cola', 999, '8.50', 'A'),
(3, 'detergente', 550, '6.80', ''),
(11, 'detergente', 550, '6.80', 'I'),
(12, 'detergente', 550, '6.80', 'A'),
(13, '', 0, '0.00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(65) NOT NULL,
  `login` varchar(55) NOT NULL,
  `senha` varchar(65) NOT NULL,
  `tipo` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `tipo`) VALUES
(2, 'vendedor', 'vendedor', 'vendedor', 'vendedor'),
(4, 'cliente', 'cliente', 'cliente', 'cliente'),
(10, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `idvendedor` int(11) NOT NULL,
  `salario` int(11) NOT NULL,
  `fk_idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`idvendedor`, `salario`, `fk_idpessoa`) VALUES
(1, 1000, 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idpessoa`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`idvendedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idpessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `idvendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
