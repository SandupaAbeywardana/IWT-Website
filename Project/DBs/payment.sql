-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 04:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textile`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Card_Holder_Name` varchar(50) NOT NULL,
  `Credit_Card_Number` varchar(80) NOT NULL,
  `Exp_Month` varchar(50) NOT NULL,
  `Exp_Year` varchar(10) NOT NULL,
  `cvv` int(10) NOT NULL,
  `Email` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Card_Holder_Name`, `Credit_Card_Number`, `Exp_Month`, `Exp_Year`, `cvv`, `Email`) VALUES
('asdfghjkkjhgfds', '111222333444555', '11', '2011', 123, 'qs@df.com'),
('adsfg', '123456', '10', '13', 213, 'aw@df.cdf'),
('asdfghjkjhgfdsa', '123456765421', '12', '1212', 234, 'dfdgf@ff.com'),
('asdfghjkkjhgfds', '1234567890', '12', '2011', 123, 'asdf@dfg.com'),
('14563214524562', '3635632563', '5963', '145845623', 95623, 'sandupa.isum@gmail.com'),
('16324521452', '56324525', '456', '58256', 56, '123@123.lk'),
('r3f', 'f434f', '34f', '34f', 34, '4fd34@kh.lk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Credit_Card_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
