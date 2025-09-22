-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 11:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahal neustad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` char(30) NOT NULL,
  `pass` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('ali1992004@gmail.com', 'ali102030');

-- --------------------------------------------------------

--
-- Table structure for table `bookers`
--

CREATE TABLE `bookers` (
  `email` char(30) NOT NULL,
  `match_stadium_date` char(255) NOT NULL,
  `sit_cost` char(255) NOT NULL,
  `cc` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `subject` char(255) NOT NULL,
  `message` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('ali', 'aaaaa@gmail.com', 'hiaaa', 'beaaa');

-- --------------------------------------------------------

--
-- Table structure for table `costumer1`
--

CREATE TABLE `costumer1` (
  `name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `phone_number` char(255) NOT NULL,
  `player` char(255) NOT NULL,
  `jersey` char(255) NOT NULL,
  `quantity` char(255) NOT NULL,
  `cnumber` char(255) NOT NULL,
  `total_price` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `costumer1`
--

INSERT INTO `costumer1` (`name`, `email`, `phone_number`, `player`, `jersey`, `quantity`, `cnumber`, `total_price`) VALUES
('ali abdel wahed', 'aliabdelwahed1992004@gmail.com', '+96181610222', '19 - ALPHONSO DAVIES', '2017 - HOME', '6', '123456789124567', '$300.00');

-- --------------------------------------------------------

--
-- Table structure for table `costumer2`
--

CREATE TABLE `costumer2` (
  `name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `phone` char(255) NOT NULL,
  `jersey` char(255) NOT NULL,
  `number` char(255) NOT NULL,
  `kit_name` char(255) NOT NULL,
  `quantity` char(255) NOT NULL,
  `cnumber` char(255) NOT NULL,
  `total_price` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `costumer2`
--

INSERT INTO `costumer2` (`name`, `email`, `phone`, `jersey`, `number`, `kit_name`, `quantity`, `cnumber`, `total_price`) VALUES
('ali abdel wahed', 'abdelwahed1992004@gmail.com', '+96181610222', '2020 - HOME', '11', 'ALITOOOO', '3', '0000000000000000', '$150.00');

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

CREATE TABLE `donars` (
  `name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `phone_number` char(30) NOT NULL,
  `amount` char(30) NOT NULL,
  `cardNB` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`name`, `email`, `phone_number`, `amount`, `cardNB`) VALUES
('ali abdel wahed', 'aliabdelwahed1992004@gmail.com', '+96181610468', '50000', '1234567891234567');

-- --------------------------------------------------------

--
-- Table structure for table `fan`
--

CREATE TABLE `fan` (
  `fanId` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `email` char(50) NOT NULL,
  `pass` char(30) NOT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fan`
--

INSERT INTO `fan` (`fanId`, `name`, `email`, `pass`, `Dob`) VALUES
(1, 'ALIz', 'ali199@gmail.com', 'ali19999', '2013-08-06'),
(2, 'ali', 'abdelwahedali1992004@gmail.com', 'ali199204', '2023-08-03'),
(3, 'ali abdel wahed', 'aliabdelwahed1992004@gmail.com', 'ali1992004', '2004-09-10'),
(4, 'ali abdel wahed', 'aliabdelwahed1992004@gmail.com', 'ali1992004', '2004-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `kits`
--

CREATE TABLE `kits` (
  `season` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `oppenent` char(30) NOT NULL,
  `stadium` char(30) NOT NULL,
  `date` date NOT NULL,
  `competition` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`oppenent`, `stadium`, `date`, `competition`) VALUES
('ARSENAL', 'EMERATES STADIUM', '2023-10-12', 'Champions league'),
('BORRUSIA DORTMUND', 'Allianz', '2023-10-08', 'Bundesliga'),
('BORRUSIA DORTMUND', 'Signal iduna park', '2023-09-11', 'bundesliga'),
('FCK', 'Allianz', '2023-10-16', 'Bundesliga'),
('HEIDENHEIM', 'Allianz', '2023-09-22', 'Bundesliga'),
('JAHN-REGENSBURG', 'Straze', '2023-09-26', 'Bundesliga'),
('KARLSRUHER', 'Karlzk', '2023-10-04', 'Bundesliga'),
('liverpool', 'anfield', '2023-09-01', 'Champions league'),
('MAN CITY', 'Allianz', '2023-11-01', 'Champions league'),
('MAN CITY', 'EITHAD STADIUM', '2023-10-17', 'Champions league'),
('PSG', 'Allianz', '2023-10-01', 'Champions league'),
('PSG', 'Parc des princes', '2023-09-07', 'Champions league'),
('Real betis', 'ESTADIO BENITO VILLAMARIN', '2023-09-19', 'Club friendlies'),
('RED STAR', 'BELGRAD', '2023-10-21', 'Champions league'),
('Tottenham', 'New Euro Arena', '2023-09-16', 'Club friendlies');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `number` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `last_name` char(255) NOT NULL,
  `position` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`number`, `name`, `last_name`, `position`) VALUES
(1, 'MANU', 'NEUER', 'GOALKEEPER'),
(2, 'DAYO', 'UMPAMECANO', 'DEFENDER'),
(3, 'MATTIAS', 'DE LIGT', 'DEFENDER'),
(4, 'KIM', 'MIN  JAE', 'DEFENDER'),
(6, 'JOUSHUA', 'KINNICH', 'MIDFIELDER'),
(7, 'SERGE', 'GNABRI', 'LEFT WING'),
(8, 'LEO', 'GORETZ', 'MIDDFIELDER'),
(9, 'HARRY', 'KAME', 'STRICKER'),
(10, 'LEROY', 'SANEZ', 'RIGHT WING'),
(11, 'KING', 'COMAM', 'LEFT WING'),
(13, 'ERIC', 'CHOUPOO', 'STRICKER'),
(19, 'ALPHONSO', 'DAVIES', 'LEFT BACK\r\n'),
(22, 'NOUSSIR', 'MOUZRAWA', 'RIGHT BACK'),
(23, 'SVEN', 'ULREY', 'GOALKEEPER'),
(25, 'THOMAS', 'MULLET', 'SECOND STRICKER'),
(38, 'MARCO', 'GRAVENER', 'ATTACKING MIDFIELDER'),
(42, 'JAMAL', 'MUSALIA', 'ATTACKING MIDFIELDER'),
(43, 'JOSEP', 'STANZIK', 'RIGHT BACK');

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE `shirts` (
  `season` char(30) NOT NULL,
  `type` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`season`, `type`) VALUES
('2016', 'GOALKEEPER'),
('2017', 'GOALKEEPER'),
('2023', 'GOALKEEPER'),
('2020', 'GOALKEEPER'),
('2021', 'GOALKEEPER'),
('2022', 'GOALKEEPER'),
('2019', 'GOALKEEPER'),
('2018', 'GOALKEEPER'),
('2016', 'HOME'),
('2016', 'AWAY'),
('2017', 'HOME'),
('2017', 'AWAY'),
('2018', 'HOME'),
('2018', 'AWAY'),
('2019', 'HOME'),
('2019', 'AWAY'),
('2020', 'HOME'),
('2020', 'AWAY'),
('2021', 'HOME'),
('2021', 'AWAY'),
('2022', 'HOME'),
('2022', 'AWAY'),
('2023', 'HOME'),
('2023', 'AWAY');

-- --------------------------------------------------------

--
-- Table structure for table `sit`
--

CREATE TABLE `sit` (
  `class` char(30) NOT NULL,
  `cost` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sit`
--

INSERT INTO `sit` (`class`, `cost`) VALUES
('4TH RANGE', '350 $'),
('5TH RANGE', '300 $'),
('FIRST SIT', '1500 $'),
('LAST RANGE', '200 $'),
('SECOND RANGE', '750 $'),
('THIRD RANGE', '500 $'),
('VIP + TOP CHARCTERS', '5000 $'),
('VIP HIGH CLASS', '3500 $');

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

CREATE TABLE `sponsers` (
  `brand_name` char(255) NOT NULL,
  `phone` char(255) NOT NULL,
  `website` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sponsers`
--

INSERT INTO `sponsers` (`brand_name`, `phone`, `website`) VALUES
('DEUTSCHE TELEKOM', '0800 33 03000', 'https://www.telekom.com/en'),
('ADIDAS', '+49 9132 6464101\r\n\r\n\r\n', 'https://www.adidas.de/'),
('QATAR AIRWAYS', '1-877-777-2827', 'https://www.qatarairways.com/en/homepage.html/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bookers`
--
ALTER TABLE `bookers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`name`,`email`);

--
-- Indexes for table `donars`
--
ALTER TABLE `donars`
  ADD PRIMARY KEY (`email`,`amount`,`cardNB`);

--
-- Indexes for table `fan`
--
ALTER TABLE `fan`
  ADD PRIMARY KEY (`fanId`);

--
-- Indexes for table `kits`
--
ALTER TABLE `kits`
  ADD PRIMARY KEY (`season`),
  ADD KEY `season` (`season`),
  ADD KEY `season_2` (`season`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`oppenent`,`stadium`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `sit`
--
ALTER TABLE `sit`
  ADD PRIMARY KEY (`class`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fan`
--
ALTER TABLE `fan`
  MODIFY `fanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
