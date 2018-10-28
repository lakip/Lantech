-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2018 at 09:26 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'aron', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK', 'Aron', 'Langat', 'profile.jpg', '2018-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_registration`
--

CREATE TABLE `buyer_registration` (
  `id` int(20) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `idno` int(50) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_registration`
--

INSERT INTO `buyer_registration` (`id`, `fname`, `lname`, `idno`, `date`, `username`, `password`) VALUES
(1, 'a', 'l', 25165564, '2018-06-26', 'lakip', 8520),
(2, '', '', 275156065, '2018-06-26', 'la', 8520);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `date` date NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `idno` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `orderr` varchar(200) NOT NULL,
  `orderNumber` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`date`, `fname`, `lname`, `idno`, `phone`, `orderr`, `orderNumber`, `status`) VALUES
('2018-07-09', 'aron', 'langat', 32017484, 702012702, '300', 'MNKJHYTF4664F', 'order pending');

-- --------------------------------------------------------

--
-- Table structure for table `daily_collection`
--

CREATE TABLE `daily_collection` (
  `tarehe` date NOT NULL,
  `hno` varchar(200) NOT NULL,
  `bno` varchar(200) NOT NULL,
  `noCollected` int(100) NOT NULL,
  `broken` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_collection`
--

INSERT INTO `daily_collection` (`tarehe`, `hno`, `bno`, `noCollected`, `broken`) VALUES
('2018-06-01', 'HOUSE 1', 'batch 1', 98, 3),
('2018-07-11', 'HOUSE 1', 'batch 1', 100, 1),
('2018-07-12', 'HOUSE 1', 'batch 1', 100, 1),
('2018-07-11', 'HOUSE 1', 'batch 1', 100, 1),
('2018-07-11', 'HOUSE 2', 'batch 1', 100, 1),
('2018-07-18', 'HOUSE 1', 'batch 1', 520, 20),
('2018-07-18', 'HOUSE 1', 'batch 1', 85, 15);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `date` date NOT NULL,
  `hno` varchar(100) NOT NULL,
  `bno` varchar(100) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`date`, `hno`, `bno`, `comment`) VALUES
('2018-06-26', 'house 1', 'batch 1', 'commit\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `date` date NOT NULL,
  `hno` varchar(200) NOT NULL,
  `bno` varchar(100) NOT NULL,
  `no` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`date`, `hno`, `bno`, `no`) VALUES
('2018-06-25', 'HOUSE 1', 'batch 1', 100),
('2018-07-18', 'HOUSE 2', 'batch 1', 300),
('2018-07-18', 'HOUSE 1', 'batch 1', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'langat', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK', 'kipngeno', 'langat', 'profile.jpg', '2018-07-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_registration`
--
ALTER TABLE `buyer_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idno` (`idno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`orderNumber`),
  ADD UNIQUE KEY `orderNumber` (`orderNumber`),
  ADD UNIQUE KEY `idno` (`idno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `buyer_registration`
--
ALTER TABLE `buyer_registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
