-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.25 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para systransportes
CREATE DATABASE IF NOT EXISTS `systransportes` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `systransportes`;


-- Copiando estrutura para tabela systransportes.cidades
CREATE TABLE IF NOT EXISTS `cidades` (
  `codigo` int(7) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.cotacoes
CREATE TABLE IF NOT EXISTS `cotacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `codCidadeOrigem` int(7) DEFAULT NULL,
  `codCidadeDestino` int(7) DEFAULT NULL,
  `valorCarga` float DEFAULT NULL,
  `ValorFrete` float DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `largura` float DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `comprimento` float DEFAULT NULL,
  `prazo` int(3) DEFAULT NULL,
  `quantidadeCaixa` int(11) DEFAULT NULL,
  `descricao` longtext,
  `aprovadoCliente` tinyint(4) DEFAULT NULL,
  `aprovadoAtendente` tinyint(4) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cotacoes_usuarios` (`idUsuario`),
  KEY `FK_cotacoes_cidades` (`codCidadeOrigem`),
  KEY `FK_cotacoes_cidades_2` (`codCidadeDestino`),
  CONSTRAINT `FK_cotacoes_cidades` FOREIGN KEY (`codCidadeOrigem`) REFERENCES `cidades` (`codigo`),
  CONSTRAINT `FK_cotacoes_cidades_2` FOREIGN KEY (`codCidadeDestino`) REFERENCES `cidades` (`codigo`),
  CONSTRAINT `FK_cotacoes_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.ctes
CREATE TABLE IF NOT EXISTS `ctes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCotacao` int(11) DEFAULT NULL,
  `idManifesto` int(11) DEFAULT NULL,
  `idFaturamento` int(11) DEFAULT NULL,
  `idRemetente` int(11) DEFAULT NULL,
  `idDestinatario` int(11) DEFAULT NULL,
  `emissao` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `dataEntrega` date DEFAULT NULL,
  `HoraEntrega` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ctes_cotacoes` (`idCotacao`),
  KEY `FK_ctes_manifestos` (`idManifesto`),
  KEY `FK_ctes_faturamentos` (`idFaturamento`),
  KEY `FK_ctes_usuarios` (`idRemetente`),
  KEY `FK_ctes_usuarios_2` (`idDestinatario`),
  CONSTRAINT `FK_ctes_cotacoes` FOREIGN KEY (`idCotacao`) REFERENCES `cotacoes` (`id`),
  CONSTRAINT `FK_ctes_faturamentos` FOREIGN KEY (`idFaturamento`) REFERENCES `faturamentos` (`id`),
  CONSTRAINT `FK_ctes_manifestos` FOREIGN KEY (`idManifesto`) REFERENCES `manifestos` (`id`),
  CONSTRAINT `FK_ctes_usuarios` FOREIGN KEY (`idRemetente`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `FK_ctes_usuarios_2` FOREIGN KEY (`idDestinatario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.faturamentos
CREATE TABLE IF NOT EXISTS `faturamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emissao` date DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `qtdCtes` int(11) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `dataPagamento` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.manifestos
CREATE TABLE IF NOT EXISTS `manifestos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `idVeiculo` int(11) DEFAULT NULL,
  `emissao` date DEFAULT NULL,
  `valorTotal` float DEFAULT NULL,
  `qtdCtes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_manifestos_usuarios` (`idUsuario`),
  KEY `FK_manifestos_veiculos` (`idVeiculo`),
  CONSTRAINT `FK_manifestos_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `FK_manifestos_veiculos` FOREIGN KEY (`idVeiculo`) REFERENCES `veiculos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.rastreamentos
CREATE TABLE IF NOT EXISTS `rastreamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCte` int(11) DEFAULT NULL,
  `localizacao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_rastreamentos_ctes` (`idCte`),
  CONSTRAINT `FK_rastreamentos_ctes` FOREIGN KEY (`idCte`) REFERENCES `ctes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.usuarioperfil
CREATE TABLE IF NOT EXISTS `usuarioperfil` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPerfil` int(11) NOT NULL DEFAULT '1',
  `idStatus` int(11) NOT NULL,
  `codCidade` int(11) NOT NULL,
  `nomeCompleto` varchar(50) DEFAULT NULL,
  `razaoSocial` varchar(50) DEFAULT NULL,
  `nomeFantasia` varchar(50) DEFAULT NULL,
  `tipoEmpresa` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `orgaoExpedidor` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `cnpj` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone1` varchar(50) DEFAULT NULL,
  `telefone2` varchar(50) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_usuarios_usuarioperfil` (`idPerfil`),
  KEY `FK_usuarios_usuariostatus` (`idStatus`),
  KEY `FK_usuarios_cidades` (`codCidade`),
  CONSTRAINT `FK_usuarios_cidades` FOREIGN KEY (`codCidade`) REFERENCES `cidades` (`codigo`),
  CONSTRAINT `FK_usuarios_usuarioperfil` FOREIGN KEY (`idPerfil`) REFERENCES `usuarioperfil` (`id`),
  CONSTRAINT `FK_usuarios_usuariostatus` FOREIGN KEY (`idStatus`) REFERENCES `usuariostatus` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.usuariostatus
CREATE TABLE IF NOT EXISTS `usuariostatus` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela systransportes.veiculos
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(8) NOT NULL,
  `capacidadeKg` float DEFAULT NULL,
  `capacidadeM3` float DEFAULT NULL,
  `ano` varchar(4) DEFAULT NULL,
  `tipo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
