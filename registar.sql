-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Jun-2019 às 16:26
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `places`
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE IF NOT EXISTS `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alojamento` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uni` varchar(100) NOT NULL,
  `distancia` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `places`
--

INSERT INTO `places` (`id`, `alojamento`, `cidade`, `uni`, `distancia`, `preco`, `mail`, `descricao`, `foto`) VALUES
(1, 'Apartamento', 'Coimbra', 'Faculdade de CiÃªncias do Desporto e EducaÃ§Ã£o FÃ­sica', 200, 350, 'RitaSofia@hotmail.com', 'T3 com cozinha equipada, acesso a varanda e lavandaria completa.', '1.jpg'),
(2, 'Apartamento', 'Coimbra', 'Faculdade de CiÃªncias e Tecnologia', 240, 400, 'Andre.84.sa@hotmail.com', 'T3 totalmente equipada e acesso a jardim partilhado.', '2.jpg'),
(3, 'Quarto', 'Coimbra', 'Faculdade de Medicina', 315, 260, 'LuisYonau.78@gmail.com', 'Quarto com cozinha partilhada e casa de banho privada.', '3.jpg'),
(4, 'Quarto', 'Coimbra', 'Instituto Superior Miguel Torga', 50, 300, 'Sonia.Pascoal.88@gmail.com', 'Quarto com casa de banho privativa e acesso a varanda.', '4.jpg'),
(5, 'Quarto', 'Coimbra', 'Escola Superior de Enfermagem de Coimbra', 200, 70, 'JoaoMHG123@hotmail.com', 'Quarto com casa de banho privativa e acesso a estacionamento do prÃ©dio.', '5.jpg'),
(6, 'Apartamento', 'Coimbra', 'Faculdade de CiÃªncias do Desporto e EducaÃ§Ã£o FÃ­sica', 40, 400, 'Omar.276488@hotmail.com', 'T3 com cozinha totalmente equipada e acesso a jardim partilhado.', '6.jpg'),
(7, 'Apartamento', 'Coimbra', 'Instituto Superior Miguel Torga', 90, 420, 'SuuF42@gmail.com', 'T2 com cozinha equipada e acesso a garagem.', '7.jpg'),
(8, 'EstÃºdio', 'Coimbra', 'Instituto Superior Miguel Torga', 40, 70, 'Esteves.loki.45@gmail.com', 'EstÃºdio com cozinha partilhada.', '8.jpg'),
(10, 'Quarto', 'Coimbra', 'Instituto Superior Miguel Torga', 43, 220, 'Ricardomalva97@hotmail.com', 'Quarto todo equipado, acesso a cozinha partilhada e casa de banho privativa.', '10.jpg'),
(11, 'Apartamento', 'Coimbra', 'Instituto Superior Miguel Torga', 115, 360, 'Ricardomalva97@hotmail.com', 'T3 com cozinha e lavandaria equipada e acesso a garagem.', '11.jpg'),
(12, 'Quarto', 'Coimbra', 'Instituto de Direito', 60, 110, 'TRocha.89@hotmail.com', 'Quarto com casa de banho privativa e acesso a garagem.', '12.jpg'),
(13, 'Quarto', 'Coimbra', 'Instituto Superior Miguel Torga', 320, 245, 'Klever900@gmail.com', 'T2 com cozinha e sala equipada.', '13.jpg'),
(14, 'Quarto', 'Coimbra', 'Faculdade de CiÃªncias do Desporto e EducaÃ§Ã£o FÃ­sica', 50, 75, 'Sussy67.LM@hotmail.com', 'Quarto com cozinha partilhada e casa de banho privativa.', '14.jpg'),
(15, 'Quarto', 'Coimbra', 'Faculdade de CiÃªncias e Tecnologia', 135, 140, 'Pedrologgy.79@gmail.com', 'Quarto com casa de banho privativa e acesso a estacionamento do prÃ©dio.', '15.jpg'),
(16, 'Apartamento', 'Coimbra', 'Faculdade de Economia', 100, 260, 'Vasco.566@hotmail.com', 'T3 com garagem e piscina', '16.jpg'),
(17, 'Apartamento', 'Coimbra', 'Instituto Superior Miguel Torga', 100, 380, 'Fran.88.Louis@hotmail.com', 'T5 com cozinha equipada e acesso a varanda.', '17.jpg'),
(18, 'Apartamento', 'Coimbra', 'Instituto Superior Miguel Torga', 140, 900, 'Ricardomalva97@hotmail.com', 'T6 com cozinha e lavandaria totalmente equipada, acesso Ã  piscina e garagem.', '18.jpg'),
(19, 'Quarto', 'Coimbra', 'Instituto Superior Miguel Torga', 145, 120, 'Fran.88.Louis@hotmail.com', 'T2 com cozinha partilhada e casa de banho privada.', '9'),
(20, 'Quarto', 'Coimbra', 'Faculdade de FarmÃ¡cia', 300, 55, 'Andre.84.sa@hotmail.com', 'T1 com cozinha e casa de banho partilhada.', '20.jpg'),
(21, 'Apartamento', 'Coimbra', 'Faculdade de Economia', 230, 220, 'Dani.8755.M@gmail.com', 'T2 com cozinha e sala equipada.', '21.jpg'),
(22, 'Quarto', 'Coimbra', 'Faculdade de CiÃªncias do Desporto e EducaÃ§Ã£o FÃ­sica', 60, 60, 'TRocha.89@hotmail.com', 'T2 com cozinha partilhada e casa de banho privada.', '22.jpg'),
(23, 'Apartamento', 'Coimbra', 'Escola Superior de Enfermagem de Coimbra', 200, 280, 'Ricardomalva97@hotmail.com', 'T4 com cozinha equipada e acesso a jardim.', '23.jpg'),
(24, 'EstÃºdio', 'Coimbra', 'Instituto Superior Miguel Torga', 140, 54, 'Klever900@gmail.com', 'EstÃºdio com cozinha partilhada e casa de banho privativa.', '24.jpg'),
(25, 'Apartamento', 'Coimbra', 'Faculdade de Medicina', 125, 450, 'GFD.65438@hotmail.com', 'T3 com cozinha equipada, acesso a varanda e lavandaria completa.', '25.jpg'),
(26, 'Apartamento', 'Coimbra', 'Faculdade de CiÃªncias do Desporto e EducaÃ§Ã£o FÃ­sica', 70, 780, 'LuisYonau.78@gmail.com', 'T5 com cozinha e sala equipada e acesso a ginÃ¡sio.', '26.jpg'),
(27, 'Quarto', 'Coimbra', 'Instituto Superior Miguel Torga', 200, 140, 'Ricardomalva97@hotmail.com', 'T2 com cozinha equipada e acesso a garagem.', '28.jpg'),
(28, 'Quarto', 'Coimbra', 'Faculdade de CiÃªncias e Tecnologia', 20, 240, 'Harthur4500@gmail.com', 'Quarto com acesso a lavandaria, cozinha partilhada e garagem.', '31.jpg'),
(29, 'Apartamento', 'Coimbra', 'Instituto de Direito', 100, 305, '123@123.com', 'T2 com cozinha partilhada e casa de banho privada.', '2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `person` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `person`) VALUES
(1, 'Ricardomalva97@hotmail.com', '1234', 'Ricardo'),
(4, 'Harthur4500@gmail.com', '123', 'Harthur'),
(5, 'SuuF42@gmail.com', '123', 'Su'),
(7, '1234@1234.com', '1234', '1234'),
(8, 'batista@gmail.com', '123456', 'Batista');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
