-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 04:19 PM
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
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `COUNTRY` varchar(255) NOT NULL,
  `PHONE_NUMBER` int(11) NOT NULL,
  `MESSAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `FIRST_NAME`, `EMAIL`, `COUNTRY`, `PHONE_NUMBER`, `MESSAGE`) VALUES
(6, 'dfvb', 'sachinthaka60@gmail.com', 'Sri Lanka', 715886675, 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `new_customers`
--

CREATE TABLE `new_customers` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Acc_Type` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_customers`
--

INSERT INTO `new_customers` (`id`, `First_Name`, `Last_Name`, `Email`, `Acc_Type`, `Password`, `Confirm_Password`) VALUES
(4, 'Sandupa', 'Abeywardana', 'sandupa.isum@gmail.com', 'user', '123456', '123456'),
(5, 'Sachinthaka', 'Ayeshmantha', 'sachinthaka600@gmail.com', 'User', '123456', '123456'),
(6, 'devanji', 'bandara', 'dev.bandara@gmail.com', 'user', '123', '123');

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

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `AreaCode` text NOT NULL,
  `PhoneNumber` text NOT NULL,
  `Email` varchar(300) NOT NULL,
  `reg_Address` varchar(1000) NOT NULL,
  `vacancies` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `FirstName`, `LastName`, `DOB`, `AreaCode`, `PhoneNumber`, `Email`, `reg_Address`, `vacancies`) VALUES
(3, 'Sachinthaka', 'Ayeshmantha', '2022-05-16', '71', '5886675', 'sachinthaka60@gmail.com', '138/k, Ihalayagoda Gampaha Ihalayagoda Gampaha GAMPAHA Western province Sri Lanka ', 'Manager'),
(4, 'Chathurani', 'Vimansha', '2022-05-27', '70', '1545158', 'nethmimal21@gmail.com', '35/10 Henegadara Rd Godigamuwa Maharagama  Maharagama Western Province Other Sri Lanka ', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_customers`
--
ALTER TABLE `new_customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Email_2` (`Email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Credit_Card_Number`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_customers`
--
ALTER TABLE `new_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
