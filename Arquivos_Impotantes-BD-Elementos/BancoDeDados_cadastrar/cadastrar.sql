-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2023 at 11:11 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastrar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastrarreservar`
--

CREATE TABLE `cadastrarreservar` (
  `id_Reserv` int NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `contacto` varchar(9) DEFAULT NULL,
  `nomequarto` varchar(30) DEFAULT NULL,
  `datareser` varchar(12) DEFAULT NULL,
  `dataentrada` varchar(12) DEFAULT NULL,
  `datasaída` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cadastrarreservar`
--

INSERT INTO `cadastrarreservar` (`id_Reserv`, `nome`, `contacto`, `nomequarto`, `datareser`, `dataentrada`, `datasaída`) VALUES
(13, 'Anderson Manuel', '943278323', 'Quarto Simples', '2023-06-13', '2023-06-15', '2023-08-10'),
(14, 'Genoel Garcia', '943423372', 'Quarto de Solteiro', '2023-06-13', '2023-06-13', '2023-07-27'),
(15, 'Matias Damásio', '932723763', 'Quarto Branquinho', '2023-06-19', '2023-06-20', '2023-10-10'),
(16, 'Nelo Mendes', '945665654', 'Quarto Com Uma Bela Paisagem', '2023-06-13', '2023-06-14', '2023-08-03'),
(21, 'Sofia Ramires', '923374647', 'Quarto da Simplicidade', '2023-06-13', '2023-06-15', '2023-10-25'),
(22, 'Miguél António', '918228373', 'Espetácular', '2023-06-13', '2023-06-13', '2023-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `usuarioBD` varchar(30) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuarioBD`, `senha`) VALUES
(14, 'Freddy Whery', 'd13488d3d0f456b778537530a4a2bd92'),
(15, 'adm', '80177534a0c99a7e3645b52f2027a48b'),
(16, 'Ernesto Cayeye', 'c8e52e9c9ef7cf44adf22fe967589e6d'),
(17, 'Tiago Mambetuku', 'ee829009dd7f26f053e6320674ef7f9f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastrarreservar`
--
ALTER TABLE `cadastrarreservar`
  ADD PRIMARY KEY (`id_Reserv`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastrarreservar`
--
ALTER TABLE `cadastrarreservar`
  MODIFY `id_Reserv` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
