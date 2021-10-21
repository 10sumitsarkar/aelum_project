-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 01:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aelum`
--

-- --------------------------------------------------------

--
-- Table structure for table `aelum_details`
--

CREATE TABLE `aelum_details` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `your_self` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aelum_details`
--

INSERT INTO `aelum_details` (`id`, `full_name`, `email`, `dob`, `your_self`, `date`) VALUES
(1, 'sumit sarkar', '10sumitsarkar@gmail.com', '1999-03-01', 'hii,\nmy name is sumit sarkar, i am basically from west bengal but currently i live in delhi.\ni have completed my 10th , 12th from gyan bharti public school, gaya , bihar.\ni completed my btech with computer science from DCRUST university ,sonipat,haryana.\nthank you', '2021-10-22 04:10:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aelum_details`
--
ALTER TABLE `aelum_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aelum_details`
--
ALTER TABLE `aelum_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
