-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 05:37 PM
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
-- Database: `storey`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_service`
--

CREATE TABLE `customer_service` (
  `emp_ID` int(10) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `emp_address` varchar(50) NOT NULL,
  `emp_pno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invouce`
--

CREATE TABLE `invouce` (
  `IN_ID` int(50) NOT NULL,
  `C_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(50) NOT NULL,
  `P_Method` varchar(30) NOT NULL,
  `P_Total` int(30) NOT NULL,
  `P_Time` int(20) NOT NULL,
  `cost` int(20) NOT NULL,
  `C_Email` varchar(50) NOT NULL,
  `IN_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Prod_ID` int(50) NOT NULL,
  `P_Name` varchar(30) NOT NULL,
  `PCost` int(15) NOT NULL,
  `PType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `Seller_ID` int(10) NOT NULL,
  `S_email` varchar(30) NOT NULL,
  `S_name` varchar(30) NOT NULL,
  `S_address` varchar(50) NOT NULL,
  `S_pno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `SC_ID` int(10) NOT NULL,
  `SC_name` varchar(30) NOT NULL,
  `SC_address` varchar(50) NOT NULL,
  `SC_pno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `WL_ID` int(50) NOT NULL,
  `c_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_service`
--
ALTER TABLE `customer_service`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `invouce`
--
ALTER TABLE `invouce`
  ADD PRIMARY KEY (`IN_ID`),
  ADD KEY `fk_ji` (`C_Email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `fk_C2_Email` (`IN_ID`),
  ADD KEY `fk_C4_Email` (`C_Email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Prod_ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`Seller_ID`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`SC_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`WL_ID`),
  ADD KEY `fk_c_email` (`c_email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invouce`
--
ALTER TABLE `invouce`
  ADD CONSTRAINT `fk_ji` FOREIGN KEY (`C_Email`) REFERENCES `users` (`email`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_C1_Email` FOREIGN KEY (`C_Email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `fk_C2_Email` FOREIGN KEY (`IN_ID`) REFERENCES `invouce` (`IN_ID`),
  ADD CONSTRAINT `fk_C3_Email` FOREIGN KEY (`C_Email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `fk_C4_Email` FOREIGN KEY (`C_Email`) REFERENCES `users` (`email`);

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `fk_c_email` FOREIGN KEY (`c_email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
