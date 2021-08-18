-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 05:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedulinginterviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cv` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `name`, `mail`, `contact`, `address`, `cv`) VALUES
(11, 'test', 'test@gmail.com', '9876543225', '1-90,mind street, head state, india', 0x68747470733a2f2f64726976652e676f6f676c652e636f6d2f64726976652f6d792d6472697665),
(14, 'test2', 'test2@gmail.com', '235652345', '1-90,mind street, head state, india', 0x68747470733a2f2f64726976652e676f6f676c652e636f6d2f64726976652f6d792d6472697665),
(15, 'ksreddy', 'ksreddy@gmail.com', '7436982374', 'asgard mcu, multiverse', 0x68747470733a2f2f646f63732e676f6f676c652e636f6d2f646f63756d656e742f642f314741625543326534595554666468616d4875654a5838494a346d436d4e352d5f36395669794637493877772f656469743f7573703d64726976655f776562266f7569643d313031313933353636343835313831313038363430);

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `slot` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `date`, `slot`, `name`) VALUES
(3, '2021-07-31', 2, 'C lecturer round1');

-- --------------------------------------------------------

--
-- Table structure for table `interviewapplicant`
--

CREATE TABLE `interviewapplicant` (
  `aid` int(11) NOT NULL,
  `iid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interviewapplicant`
--

INSERT INTO `interviewapplicant` (`aid`, `iid`) VALUES
(10, 1),
(11, 3),
(15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `interviewer`
--

CREATE TABLE `interviewer` (
  `uid` int(11) NOT NULL,
  `iid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interviewer`
--

INSERT INTO `interviewer` (`uid`, `iid`) VALUES
(9, 1),
(9, 2),
(10, 3),
(19, 3);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `iid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `weakness` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `password`, `contact`) VALUES
(1, 'admin@cmrit', '', 'admin@cmrit', ''),
(10, 'faculity', 'faculity@gmail.com', 'password', '87465282744'),
(19, 'name3', 'loki@gmail.com', 'moni@123', '7436982374');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`iid`,`aid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
