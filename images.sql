-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 03:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `prodID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `img_dir`, `prodID`) VALUES
(1, 'black jacket', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\shirt.jpg', 1),
(2, 'blue pants', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\pants.jpg', 2),
(3, 'shoe', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\shoe.png', 3),
(4, 'boy set', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\Kid1.jpg', 4),
(5, 'red shoe', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\shoe.jpg', 5),
(6, 'blue shoe', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\shoe2.jpg', 6),
(7, 'blouse', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\Blouse.jpg', 7),
(8, 'short sleeve shirt', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\short sleve shirt.jpg', 8),
(9, 'palazzo pants', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\palazzo.png', 9),
(10, 'yellow jacket', 'C:\\xampp\\htdocs\\GitHub\\Web-project\\images\\jacket.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`prodID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `id` FOREIGN KEY (`prodID`) REFERENCES `products` (`prodID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
