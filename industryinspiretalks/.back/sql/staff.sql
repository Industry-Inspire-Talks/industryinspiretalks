-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 09:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `social_links` text NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `image_ext` varchar(5) NOT NULL,
  `date_of_joining` varchar(20) NOT NULL,
  `date_of_leaving` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `contact`, `email`, `dob`, `social_links`, `nationality`, `address`, `image_ext`, `date_of_joining`, `date_of_leaving`) VALUES
(1, 'Omkar Shinde', 'Founder & CEO', '', '', '', '', '', '', '', '', ''),
(2, 'Satya Prakash Mohapatra', 'Chief Marketing Officer', '', '', '', '', '', '', '', '', ''),
(3, 'Vishal Nair', 'Chief People Officer', '', '', '', '', '', '', '', '', ''),
(4, 'Danish Shaikh', 'Chief Technology Officer', '', '', '', '', '', '', '', '', ''),
(5, 'Amrita Bhattacharjee', 'Program Manager', '', '', '', '', '', '', '', '', ''),
(6, 'Joseph Nssien', 'Program Manager', '', '', '', '', '', '', '', '', ''),
(7, 'Muneeb Ahmed', 'Community Manager', '', '', '', '', '', '', '', '', ''),
(8, 'Ganesh Dubey', 'Front-End Developer', '', '', '', '', '', '', '', '', ''),
(9, 'Tanmay Jadhav', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(10, 'Omkar Desai', 'Front-End Developer', '', '', '', '', '', '', '', '', ''),
(11, 'Himanshi Lodha', 'Program Manager', '', '', '', '', '', '', '', '', ''),
(12, 'Eshaan Chauhan', 'Marketing Manager', '', '', '', '', '', '', '', '', ''),
(13, 'Ajinkya Sonawale', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(14, 'Aayush Vishnoi', 'Front-End Developer', '', '', '', '', '', '', '', '', ''),
(15, 'Rihen Vora', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(16, 'Karan Sawant', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(17, 'Asish Mohapatra', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(18, 'Varad Gaidhani', 'Community Manager', '', '', '', '', '', '', '', '', ''),
(19, 'Ali Asgar Tinwala', 'Graphic Design Head', '', '', '', '', '', '', '', '', ''),
(20, 'Shashwat Mulgund', 'Graphic Designer', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
