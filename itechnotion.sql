-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 09:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itechnotion`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_detail`
--

CREATE TABLE `emp_detail` (
  `emp_no` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_phoneNo` varchar(10) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_age` int(11) NOT NULL,
  `emp_exp` int(11) NOT NULL,
  `emp_skill` varchar(10) NOT NULL,
  `emp_resume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_detail`
--

INSERT INTO `emp_detail` (`emp_no`, `emp_name`, `emp_phoneNo`, `emp_email`, `emp_age`, `emp_exp`, `emp_skill`, `emp_resume`) VALUES
(1, 'Nisha Gandhi', '8154907088', 'nisha13gandhi13@gmail.com', 23, 1, 'sports', 'upload/Nisha_Resume (1).pdf'),
(2, 'Gandhi Nisha Manishkumar', '8154907088', 'nisha13gandhi13@gmail.com', 25, 1, 'sports', 'upload/Nisha_Resume (1).pdf'),
(3, 'Gandhi Nisha Manishkumar', '8154907088', 'nisha13gandhi13@gmail.com', 25, 1, 'sports', 'upload/Nisha_Resume (1).pdf'),
(4, 'Gandhi Nisha Manishkumar', '8154907088', 'nisha13gandhi13@gmail.com', 25, 1, 'sports', 'upload/Nisha_Resume (1).pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_detail`
--
ALTER TABLE `emp_detail`
  ADD PRIMARY KEY (`emp_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_detail`
--
ALTER TABLE `emp_detail`
  MODIFY `emp_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
