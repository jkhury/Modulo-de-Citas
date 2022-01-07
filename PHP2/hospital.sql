-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 01:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `CitasID` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `MedicoID` int(11) NOT NULL,
  `PacienteID` int(11) NOT NULL,
  `Notas` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Nota` date DEFAULT NULL,
  `Hora_Nota` time DEFAULT NULL,
  `Peso` float DEFAULT NULL,
  `TenArt` int(11) DEFAULT NULL,
  `FreCar` int(11) DEFAULT NULL,
  `FreResp` int(11) DEFAULT NULL,
  `Temp` float DEFAULT NULL,
  `CircuCin` float DEFAULT NULL,
  `InMC` float DEFAULT NULL,
  `Talla` int(11) DEFAULT NULL,
  `Obs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Prono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `citas`
--

INSERT INTO `citas` (`CitasID`, `Fecha`, `Hora`, `MedicoID`, `PacienteID`, `Notas`, `Fecha_Nota`, `Hora_Nota`, `Peso`, `TenArt`, `FreCar`, `FreResp`, `Temp`, `CircuCin`, `InMC`, `Talla`, `Obs`, `Prono`) VALUES
(5, '2022-01-03', '13:30:00', 6, 15, 'Cita General', '2022-01-03', '13:45:00', 80, 121, 70, 10, 36.5, 80.5, 36, 160, 'Observacion de el paciente', 'Pronostico del paciente'),
(6, '2021-12-29', '11:30:00', 6, 16, 'General', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2022-01-05', '13:30:00', 6, 15, 'Cita General', '2022-01-05', '13:45:00', 80, 121, 70, 10, 36.5, 80.5, 36, 160, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

CREATE TABLE `medico` (
  `MedicoID` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Esp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Num` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medico`
--

INSERT INTO `medico` (`MedicoID`, `Nombre`, `Apellido`, `Esp`, `Tel_Num`) VALUES
(6, 'Daniel', 'Duran', 'Cirugía', '834-182-2394');

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Edad` date DEFAULT NULL,
  `Dependencia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Expediente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PacienteID` int(11) NOT NULL,
  `Curp` varchar(18) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sex` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`Nombre`, `Apellido`, `Edad`, `Dependencia`, `Expediente`, `PacienteID`, `Curp`, `Sex`) VALUES
('Francisco', 'Jimenez', '1999-09-07', 'Precidencia Municipal', 'Docs/Expedientemedico2.pdf', 15, 'JIMFRAN119259HTSMR', 'Masculino'),
('Francisco', 'Mendez', NULL, '2', NULL, 16, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `UsuarioID` int(11) NOT NULL,
  `Usuario` int(11) NOT NULL,
  `Contraseña` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`CitasID`),
  ADD KEY `cita_paciente` (`PacienteID`),
  ADD KEY `cita_medico` (`MedicoID`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`MedicoID`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`PacienteID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citas`
--
ALTER TABLE `citas`
  MODIFY `CitasID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `MedicoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `PacienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `cita_medico` FOREIGN KEY (`MedicoID`) REFERENCES `medico` (`MedicoID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_paciente` FOREIGN KEY (`PacienteID`) REFERENCES `paciente` (`PacienteID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
