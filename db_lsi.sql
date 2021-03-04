-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 04:00 PM
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
-- Database: `db_lsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_id`, `email`, `password`, `date_created`) VALUES
(1, 'admin@gmail.com', 'admin', '2021-01-22 09:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `account_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`account_id`, `username`, `email`, `password`, `date_created`, `date_modified`) VALUES
(11, 'racelle', 'admin@gmail.com', '123', '2021-01-22 09:24:11', '2021-01-22 14:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `lsi`
--

CREATE TABLE `lsi` (
  `lsi_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `birthdate` date NOT NULL,
  `citizenship` varchar(60) NOT NULL,
  `mobile_number` varchar(60) NOT NULL,
  `place_from` varchar(60) NOT NULL,
  `date_of_arrival` date NOT NULL,
  `status` varchar(60) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idx_name` varchar(60) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lsi`
--

INSERT INTO `lsi` (`lsi_id`, `name`, `age`, `address`, `birthdate`, `citizenship`, `mobile_number`, `place_from`, `date_of_arrival`, `status`, `date_created`, `date_modified`, `idx_name`, `account_id`) VALUES
(12, 'LOL', 20, 'Male', '2021-01-22', 'ROOM 4', '1000.00', '3', '2021-01-23', 'Negative', '2021-01-18 16:00:00', '2021-01-22 14:47:53', '', 0),
(20, 'Racelle', 20, 'Capoocan', '2020-01-01', 'Filipino', '09', 'Manila', '2020-01-01', 'Positive', '2021-01-22 08:16:19', '2021-01-22 09:22:02', '', 0),
(27, 'Racelle', 20, 'Capoocan, Leyte', '2000-06-27', 'Filipino', '09676853559', 'Cebu City', '2021-01-20', 'DISCHARGED', '2021-01-22 09:58:08', '2021-01-22 14:58:40', '', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `lsi`
--
ALTER TABLE `lsi`
  ADD PRIMARY KEY (`lsi_id`),
  ADD KEY `name` (`name`),
  ADD KEY `idx_name` (`idx_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lsi`
--
ALTER TABLE `lsi`
  MODIFY `lsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
