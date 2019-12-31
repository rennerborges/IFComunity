-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Dez-2019 às 02:01
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ifc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `PK_admin` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `matricula` varchar(256) NOT NULL,
  `senha` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `curso` varchar(256) NOT NULL,
  `PK_aluno` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `matricula` varchar(256) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `turma` varchar(256) NOT NULL,
  `type` int(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fale`
--

CREATE TABLE `fale` (
  `PK_fale` int(11) NOT NULL,
  `FK_aluno` int(11) NOT NULL,
  `conteudo` varchar(1000) NOT NULL,
  `data` date NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

CREATE TABLE `notificacao` (
  `PK_notificacao` int(11) NOT NULL,
  `FK_adm` int(11) NOT NULL,
  `conteudo` varchar(300) NOT NULL,
  `turma` int(11) NOT NULL,
  `curso` varchar(20) NOT NULL,
  `view` int(11) NOT NULL,
  `FK_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `FK_ADMIN` int(11) NOT NULL,
  `FK_ALUNO` int(11) NOT NULL,
  `PK_ocorrencia` int(11) NOT NULL,
  `artigo` varchar(256) NOT NULL,
  `dataOcorrencia` date NOT NULL,
  `hora` time NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `observacao` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`PK_admin`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`PK_aluno`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Índices para tabela `fale`
--
ALTER TABLE `fale`
  ADD PRIMARY KEY (`PK_fale`),
  ADD KEY `aluno_fale` (`FK_aluno`);

--
-- Índices para tabela `notificacao`
--
ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`PK_notificacao`),
  ADD KEY `notificacao_adm` (`FK_adm`),
  ADD KEY `notificacao_aluno` (`FK_aluno`);

--
-- Índices para tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`PK_ocorrencia`),
  ADD KEY `aluno_ocorrencia` (`FK_ALUNO`),
  ADD KEY `admin_ocorrencia` (`FK_ADMIN`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `PK_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `PK_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT de tabela `fale`
--
ALTER TABLE `fale`
  MODIFY `PK_fale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `notificacao`
--
ALTER TABLE `notificacao`
  MODIFY `PK_notificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `PK_ocorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `fale`
--
ALTER TABLE `fale`
  ADD CONSTRAINT `aluno_fale` FOREIGN KEY (`FK_aluno`) REFERENCES `aluno` (`PK_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `notificacao`
--
ALTER TABLE `notificacao`
  ADD CONSTRAINT `notificacao_adm` FOREIGN KEY (`FK_adm`) REFERENCES `administrador` (`PK_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `notificacao_aluno` FOREIGN KEY (`FK_aluno`) REFERENCES `aluno` (`PK_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `admin_ocorrencia` FOREIGN KEY (`FK_ADMIN`) REFERENCES `administrador` (`PK_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `aluno_ocorrencia` FOREIGN KEY (`FK_ALUNO`) REFERENCES `aluno` (`PK_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
