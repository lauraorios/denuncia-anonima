-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2021 às 00:44
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `denuncia_anonima`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdm` int(11) NOT NULL,
  `nomeAdm` varchar(45) NOT NULL,
  `funcao` varchar(45) NOT NULL,
  `emailAdm` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdm`, `nomeAdm`, `funcao`, `emailAdm`, `senha`) VALUES
(1, 'Laura Oliveira Rios', 'Desenvolvedora ', 'laura@laura.com', '80ef61a9478f668711adb7df30543230'),
(3, 'Paulo Carlos César', 'Analista ', 'paulo@paulo.com', '9aa6e5f2256c17d2d430b100032b997c'),
(4, 'Usuário', 'Teste', 'admin@admin.com', '9c1ad00a16a7c67e2727b471ac969e96');

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `idDenuncia` int(11) NOT NULL,
  `endereco` varchar(450) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `nomeLocal` varchar(45) DEFAULT NULL,
  `data` date NOT NULL,
  `agressor` varchar(45) NOT NULL,
  `detalhes` varchar(800) NOT NULL,
  `tipo_crime_d` int(11) NOT NULL,
  `tipo_violencia_d` int(11) NOT NULL,
  `tipo_denuncia_d` int(11) NOT NULL,
  `midia` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `denuncia`
--

INSERT INTO `denuncia` (`idDenuncia`, `endereco`, `cidade`, `cep`, `nomeLocal`, `data`, `agressor`, `detalhes`, `tipo_crime_d`, `tipo_violencia_d`, `tipo_denuncia_d`, `midia`) VALUES
(15, 'Rua 23342, quadra 05, conjuto 9, casa 221', 'Cruzeiro (RA XI)', '90090-00', '', '2021-06-11', 'Desconhecido(a)', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim nisi, condimentum eget lacus ut, tempor placerat dui. Pellentesque pretium scelerisque lectus, nec semper augue feugiat et. Etiam volutpat laoreet massa auctor sollicitudin. Pellentesque eget interdum erat, non bibendum lacus. Ut id orci at nunc sollicitudin finibus ac in ex. Etiam mattis turpis vel iaculis consectetur. Integer cursus, diam in eleifend rhoncus, lorem felis efficitur leo, sit amet volutpat odio justo vel lectus. Sed tempus vulputate erat, sit amet bibendum nunc venenatis ut. Aliquam eget feugiat ex, quis commodo ligula. \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim nisi, condimentum eget lacus ut, tempor placerat dui. Pellentesque pretium scelerisque lectus, nec semper augue ', 16, 5, 3, '20210612120655.jpeg'),
(16, 'Rua 3002, quadra 02, conjuto 2, casa 32', 'Planaltina (RA VI)', '71111-11', '', '2021-06-11', 'Parente (relação familiar)', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim nisi, condimentum eget lacus ut, tempor placerat dui. Pellentesque pretium scelerisque lectus, nec semper augue feugiat et. Etiam volutpat laoreet massa auctor sollicitudin. Pellentesque eget interdum erat, non bibendum lacus. Ut id orci at nunc sollicitudin finibus ac in ex. Etiam mattis turpis vel iaculis consectetur. Integer cursus, diam in eleifend rhoncus, lorem felis efficitur leo, sit amet volutpat odio justo vel lectus. Sed tempus vulputate erat, sit amet bibendum nunc venenatis ut. Aliquam eget feugiat ex, quis commodo ligula. \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim nisi, condimentum eget lacus ut, tempor placerat dui. Pellentesque pretium scelerisque lectus, nec semper augue ', 12, 7, 4, '20210612120629.zip');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_crime`
--

CREATE TABLE `tipo_crime` (
  `idCrime` int(11) NOT NULL,
  `desTipoCrime` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_crime`
--

INSERT INTO `tipo_crime` (`idCrime`, `desTipoCrime`) VALUES
(4, 'Roubo'),
(6, 'Furto'),
(7, 'Maus-tratos'),
(8, 'Homicídio'),
(9, 'Falsificação'),
(10, 'Latrocínio'),
(11, 'Pedofilia'),
(12, 'Estupro'),
(13, 'Sequestro'),
(14, 'Posse ou porte ilegal de arma'),
(16, 'Crime de ódio'),
(17, 'Outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_denuncia`
--

CREATE TABLE `tipo_denuncia` (
  `idTipoDenuncia` int(11) NOT NULL,
  `desTipoDenuncia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_denuncia`
--

INSERT INTO `tipo_denuncia` (`idTipoDenuncia`, `desTipoDenuncia`) VALUES
(2, 'Discriminação Racial'),
(3, 'Disciminação Religiosa'),
(4, 'Discriminação por Orientação Sexual'),
(5, 'Discriminação por Deficiência'),
(6, 'Discriminação contra a Pessoa Idosa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_violencia`
--

CREATE TABLE `tipo_violencia` (
  `idViolencia` int(11) NOT NULL,
  `desTipoViolencia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_violencia`
--

INSERT INTO `tipo_violencia` (`idViolencia`, `desTipoViolencia`) VALUES
(1, 'Física'),
(5, 'Psicológica'),
(6, 'Moral'),
(7, 'Sexual'),
(8, 'Patrimonial'),
(9, 'Verbal'),
(10, 'Difamação ou Injúria'),
(11, 'Cárcere privado'),
(13, 'Negligência'),
(14, 'Violência Institucional'),
(15, 'Outra');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdm`),
  ADD UNIQUE KEY `emailAdm` (`emailAdm`);

--
-- Índices para tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`idDenuncia`),
  ADD KEY `id_crime_fk` (`tipo_crime_d`),
  ADD KEY `id_violencia_fk` (`tipo_violencia_d`) USING BTREE,
  ADD KEY `id_tipodenuncia_fk` (`tipo_denuncia_d`);

--
-- Índices para tabela `tipo_crime`
--
ALTER TABLE `tipo_crime`
  ADD PRIMARY KEY (`idCrime`);

--
-- Índices para tabela `tipo_denuncia`
--
ALTER TABLE `tipo_denuncia`
  ADD PRIMARY KEY (`idTipoDenuncia`);

--
-- Índices para tabela `tipo_violencia`
--
ALTER TABLE `tipo_violencia`
  ADD PRIMARY KEY (`idViolencia`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `idDenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tipo_crime`
--
ALTER TABLE `tipo_crime`
  MODIFY `idCrime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tipo_denuncia`
--
ALTER TABLE `tipo_denuncia`
  MODIFY `idTipoDenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tipo_violencia`
--
ALTER TABLE `tipo_violencia`
  MODIFY `idViolencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD CONSTRAINT `id_crime_fk` FOREIGN KEY (`tipo_crime_d`) REFERENCES `tipo_crime` (`idCrime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_tipodenuncia_fk` FOREIGN KEY (`tipo_denuncia_d`) REFERENCES `tipo_denuncia` (`idTipoDenuncia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_violencia_fk` FOREIGN KEY (`tipo_violencia_d`) REFERENCES `tipo_violencia` (`idViolencia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
