-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 08:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database02`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `processador` varchar(128) NOT NULL,
  `memram` varchar(128) NOT NULL,
  `polegadas` varchar(64) NOT NULL,
  `placavideo` varchar(128) NOT NULL,
  `preco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `processador`, `memram`, `polegadas`, `placavideo`, `preco`) VALUES
(1, 'Macbook Pro', 'i9 9a gen', '16GB DDR4', '16', 'Radeon Pro 5500M', 'R$35.299,00'),
(33, 'AN515-54-58CL', 'i5 9a gen', '8GB DDR4', '15.6', 'GTX1650', 'R$7.299,00'),
(34, 'Predator PH315-52-79VM', 'i7 9a gen', '16GB DD4', '15.6', 'RTX 2060', 'R$9.299,07');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `email`) VALUES
(1, 'Pwny Chersk', '15687395185', 'punichersk@protonmail.ch'),
(7, 'pedro', '41298321327', 'daoskf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(5, 'Elliot Alderson', 'leet@prontonmail.ch', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
