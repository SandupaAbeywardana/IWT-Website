-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:11 AM
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
(6, 'dfvb', 'sachinthaka60@gmail.com', 'Sri Lanka', 715886675, 'sd'),
(7, 'Piyumini', 'umasathkumara@gmail.com', 'Sri Lanka', 776589340, 'Hi');

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
(4, 'Sandupa', 'Abeywardana', 'isum@pornhub.com', 'user', '123456', '123456'),
(5, 'Piyumini', 'Umaya', 'umasathkumara@gmail.com', 'user', '12345@', '12345@'),
(6, 'Eranda', 'Thathsara', 'eranda.thathsara2000@gmail.com', 'user', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Card_Holder_Name` varchar(50) NOT NULL,
  `Credit_Card_Number` int(80) NOT NULL,
  `Exp_Month` varchar(50) NOT NULL,
  `Exp_Year` varchar(10) NOT NULL,
  `cvv` int(10) NOT NULL,
  `Email` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Card_Holder_Name`, `Credit_Card_Number`, `Exp_Month`, `Exp_Year`, `cvv`, `Email`) VALUES
('898', 0, '65', '545', 544, 'eranda.thathsara2000@gmail.com'),
('rtr', 45, '77', '', 666, '6@h.lk'),
('121', 121, '11', '11', 111, 'eranda.thathsara2000@gmail.com'),
('122', 122, '12', '2', 122, '123@123.lk'),
('23', 123, '214', '124', 124, '124@wer.lk'),
('241', 124, '1241', '', 412, 'eranda.thathsara2000@gmail.com'),
('123', 213, '13', '132', 123, '123@123.lk'),
('324', 234, '234', '342', 324, 'inf@ewr.lk'),
('2q333', 334, '234', '', 2342, '23@2.lk'),
('test', 343, '23', '', 23, '23@23.lk'),
('99', 567, '55', '5555', 55, 'eranda.thathsara2000@gmail.com'),
('5667', 889, '8898', '0909', 78, 'eranda.thathsara2000@gmail.com'),
('fsf', 4444, '4', '', 4, 'eranda.thathsara2000@gmail.com'),
('ty', 4545, '545', '', 454, '545@lk.lk'),
('456', 5467, '345', '78', 123, 'eran.jk2000@gmail.com'),
('777', 8898, '8', '90', 78, 'eranda.thathsara2000@gmail.com'),
('423', 23432, '5', '4', 243, 'eranda.thathsara5000@gmail.com'),
('2423', 234234, '2342', '', 234, 'in@gm.lk'),
('dfghjk', 4562146, '156', '2563', 25963, 'sandupa.isum@gmail.com'),
('hhhhhhhhhhh', 12349623, '636632', '5289585', 41524852, 'sachi@sachi.com');

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
(4, 'Chathurani', 'Vimansha', '2022-05-18', '70', '5886675', 'nethmimal21@gmail.com', '35/10 Henegadara Rd Godigamuwa Maharagama Ihalayagoda Gampaha Maharagama Western Province Other Sri Lanka ', 'Pattern Maker');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
