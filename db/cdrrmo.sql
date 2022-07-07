-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 08:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdrrmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_record`
--

CREATE TABLE `accident_record` (
  `id` int(11) NOT NULL,
  `accident_date` date NOT NULL,
  `location` varchar(500) NOT NULL,
  `details` longtext NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_created` date DEFAULT NULL,
  `created_by` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `date_created`, `created_by`) VALUES
(1, 'Carlo', 'admin_carlo', '$2y$10$Als3c7rr0Zx1VDGxFZWzDOh28DkuLFWMrjB7.TJXZ61S5sDNpTdVy', NULL, NULL),
(9, 'sadasd', 'asdasd', '$2y$10$dGG4KlWMa1cqUD3.tSJyY.vWaU3Sx1nGwDWbOqwPZmIxKwUyXppte', '2021-09-26', 'Carlo'),
(10, 'asdasd', 'sadasda', '$2y$10$7je.EQgpSThrt2L/ZmbBHeF04fa55l/xM3tb4CzlBHUsXONMm0NX.', '2021-09-26', 'Carlo'),
(11, 'asdasd', 'asdasdas', '$2y$10$PFDHkCIZN1JnaESX3TgmAuhBEYfHljFtF/F0MNlAAIDqKcyfXFSPi', '2021-09-26', 'Carlo'),
(12, 'melai', 'melai', '$2y$10$QPaPL0hpDqDEooLAtGRxpOYfyhYniSqEv7MYRvil9hlz5kAv6JaFS', '2021-09-27', 'Carlo'),
(13, 'fdafdf', 'sdfsdf', '$2y$10$WNyCkKfVcSEaue8ZFAOOj.VcB8iGYTMR3eC0iXXxtUfn6e94MtLhe', '2021-09-27', 'test admin'),
(14, 'asdasfds', 'fsdfsdfs', '$2y$10$st8U52.GSAvyolZzmxGFoeWJdvc4S9Sgh.iOXUAPel9WA21y0d0vO', '2021-09-27', 'test admin'),
(15, 'asda', 'dasd', '$2y$10$ICTXCmgaJ8Yn/kOdNWVEteKPjoADj8HtCbrcXVod1YDf9E2jGvQom', '2021-12-03', 'melai'),
(16, 'asdasdasdasd1211', 'asdasdasdas', '$2y$10$fmk0lk8PP.Slynp8Ab.eEO/2s38dqRNhzokoPY.nWQJZMomKEM3bC', '2021-12-03', 'melai'),
(17, 'asda121', 'dadas21', '$2y$10$tw/10R4IPuCLM0TDwGq2k.kyMPJojasxRoHpwJdwVg0dAUu1svzyi', '2021-12-03', 'melai');

-- --------------------------------------------------------

--
-- Table structure for table `brgy`
--

CREATE TABLE `brgy` (
  `id` int(11) NOT NULL,
  `brgy_name` varchar(250) NOT NULL,
  `brgy_chairman` varchar(250) NOT NULL,
  `brgy_username` varchar(250) NOT NULL,
  `brgy_password` varchar(250) NOT NULL,
  `brgy_hotline` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `brgy_address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE `bulletin` (
  `id` int(11) NOT NULL,
  `bulletin_post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `concern_citizen`
--

CREATE TABLE `concern_citizen` (
  `id` int(11) NOT NULL,
  `concern_name` varchar(250) NOT NULL,
  `concern_contact` varchar(50) NOT NULL,
  `concern_address` longtext NOT NULL,
  `concern` longtext NOT NULL,
  `concern_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_hotline`
--

CREATE TABLE `emergency_hotline` (
  `id` int(11) NOT NULL,
  `globe` varchar(100) NOT NULL,
  `smart` varchar(100) NOT NULL,
  `landline` varchar(100) NOT NULL,
  `red_cross` varchar(100) NOT NULL,
  `dotc` varchar(100) NOT NULL,
  `pnp` varchar(100) NOT NULL,
  `bfp` varchar(100) NOT NULL,
  `dpwh` varchar(100) NOT NULL,
  `edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_hotline`
--

INSERT INTO `emergency_hotline` (`id`, `globe`, `smart`, `landline`, `red_cross`, `dotc`, `pnp`, `bfp`, `dpwh`, `edited_by`) VALUES
(1, '1', '2', '3', '4', '09976933975', '09976933976', '09976933977', '09976933888', 12);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `mission` longtext NOT NULL,
  `mission_background` varchar(250) NOT NULL,
  `vision` longtext NOT NULL,
  `vision_background` varchar(250) NOT NULL,
  `about` longtext NOT NULL,
  `about_background` varchar(250) NOT NULL,
  `edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `mission`, `mission_background`, `vision`, `vision_background`, `about`, `about_background`, `edited_by`) VALUES
(1, 'test 1', '61e2ccd270089.jpg', '2', '61e2ccd2700f7.jpg', '3', 'istockphoto-841899584-612x612.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_record`
--
ALTER TABLE `accident_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy`
--
ALTER TABLE `brgy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concern_citizen`
--
ALTER TABLE `concern_citizen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident_record`
--
ALTER TABLE `accident_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brgy`
--
ALTER TABLE `brgy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `concern_citizen`
--
ALTER TABLE `concern_citizen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
