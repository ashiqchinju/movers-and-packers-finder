-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 10:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicleonboarding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adhaar` bigint(12) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `fname`, `uname`, `email`, `adhaar`, `gender`, `phone`, `password`) VALUES
(1, 'admin 1', 'admin1', 'a1@test.com', 684152641568, 'Male', 4569876549, 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `cquery_tb`
--

CREATE TABLE `cquery_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adhaar` bigint(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cquery_tb`
--

INSERT INTO `cquery_tb` (`id`, `name`, `email`, `adhaar`, `message`) VALUES
(1, 'customer 1', 'c1@test.com', 654164312643, 'a trial message'),
(2, 'customer 1', 'c1@test.com', 654164312643, 'required'),
(3, 'customer 1', 'c1@test.com', 654164312643, 'required');

-- --------------------------------------------------------

--
-- Table structure for table `creg_tb`
--

CREATE TABLE `creg_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `adhaar` bigint(12) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `district` varchar(255) NOT NULL,
  `taluk` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creg_tb`
--

INSERT INTO `creg_tb` (`id`, `fname`, `uname`, `email`, `phone`, `adhaar`, `gender`, `dob`, `district`, `taluk`, `address`, `password`) VALUES
(1, 'customer 1', 'customer1', 'c1@test.com', 3684684520, 654164312643, 'Female', '1980-01-22', 'Chikmagaluru', 'chikmagaluru', 'opp good morning shop,gauri kaluve', 'password123'),
(2, 'customer 2', 'customer2', 'c2@test.com', 9864548645, 684516845168, 'Female', '1997-07-04', 'Shimoga', 'bhadravati', 'Baballi,Bhadravathi', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `dquery_tb`
--

CREATE TABLE `dquery_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dl` varchar(255) NOT NULL,
  `adhaar` bigint(12) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dquery_tb`
--

INSERT INTO `dquery_tb` (`id`, `name`, `email`, `dl`, `adhaar`, `message`) VALUES
(4, 'driver one', 'd1@test.com', 'ka182012651321631', 351436451321, 'query1');

-- --------------------------------------------------------

--
-- Table structure for table `dreg_tb`
--

CREATE TABLE `dreg_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `adhaar` bigint(12) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `district` varchar(255) NOT NULL,
  `taluk` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `password` varchar(255) NOT NULL,
  `veh_type` varchar(255) NOT NULL,
  `dl_number` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dreg_tb`
--

INSERT INTO `dreg_tb` (`id`, `fname`, `uname`, `email`, `phone`, `adhaar`, `gender`, `dob`, `district`, `taluk`, `address`, `password`, `veh_type`, `dl_number`) VALUES
(5, 'driver one', 'driver1', 'd1@test.com', 3653156316, 351531635153, 'Male', '1993-02-27', 'Chikmagaluru', 'chikmagaluru', 'shaduli nagar,Uppalli', '', 'truck', 'ka184521653120653'),
(6, 'driver two', 'driver2', 'd2@test.com', 6846345168, 643516341463, 'Male', '1982-04-29', 'Chikmagaluru', 'tarikere', 'xyz', 'password123', 'Truck', 'ka186541653213545');

-- --------------------------------------------------------

--
-- Table structure for table `voreg_tb`
--

CREATE TABLE `voreg_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `adhaar` bigint(12) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `taluk` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voreg_tb`
--

INSERT INTO `voreg_tb` (`id`, `fname`, `uname`, `email`, `phone`, `adhaar`, `gender`, `district`, `taluk`, `address`, `password`) VALUES
(1, 'v owner 1', 'vowner1', 'vo1@test.com', 6531688542, 332168413685, 'Male', 'Chikmagaluru', 'chikmagaluru', 'shanti nagar,hk road', 'password123'),
(2, 'name', 'name', 'name@name.com', 6654654654, 654654632165, 'Female', 'Hassan', 'hassan', 'near bus stand,hassan', '');

-- --------------------------------------------------------

--
-- Table structure for table `vquery_tb`
--

CREATE TABLE `vquery_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adhaar` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vreg_tb`
--

CREATE TABLE `vreg_tb` (
  `id` int(11) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `oemail` varchar(255) NOT NULL,
  `oadhaar` bigint(12) NOT NULL,
  `ophone` bigint(10) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `taluk` varchar(255) NOT NULL,
  `vname` varchar(255) NOT NULL,
  `vmodel` varchar(255) NOT NULL,
  `vtype` varchar(255) NOT NULL,
  `ftype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vreg_tb`
--

INSERT INTO `vreg_tb` (`id`, `oname`, `oemail`, `oadhaar`, `ophone`, `regno`, `district`, `taluk`, `vname`, `vmodel`, `vtype`, `ftype`) VALUES
(2, 'v owner 1', 'vo1@test.com', 332168413685, 9638527410, 'ka18e6523', 'Chikmagaluru', 'chikmagaluru', 'tata', 'asd', 'Truck', 'diesel'),
(3, 'v owner 1', 'vo1@test.com', 332168413685, 9868956295, 'KA18ea6250', 'Chikmagaluru', 'kadur', 'tata', 'ABC', 'truck', 'diesel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cquery_tb`
--
ALTER TABLE `cquery_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creg_tb`
--
ALTER TABLE `creg_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dquery_tb`
--
ALTER TABLE `dquery_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dreg_tb`
--
ALTER TABLE `dreg_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voreg_tb`
--
ALTER TABLE `voreg_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vquery_tb`
--
ALTER TABLE `vquery_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vreg_tb`
--
ALTER TABLE `vreg_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cquery_tb`
--
ALTER TABLE `cquery_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `creg_tb`
--
ALTER TABLE `creg_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dquery_tb`
--
ALTER TABLE `dquery_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dreg_tb`
--
ALTER TABLE `dreg_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `voreg_tb`
--
ALTER TABLE `voreg_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vquery_tb`
--
ALTER TABLE `vquery_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vreg_tb`
--
ALTER TABLE `vreg_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
