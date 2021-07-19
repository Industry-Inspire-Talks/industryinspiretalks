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
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `company` varchar(80) NOT NULL,
  `role` varchar(80) NOT NULL,
  `industry` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id`, `name`, `company`, `role`, `industry`) VALUES
(1, 'Ritwik Deshpande', 'JP Morgan Chase & Co', 'Software Development Engineer', 'Financial Services'),
(2, 'Irin Banerjee', 'D.E Shaw & Co', 'Software Development Engineer', 'Financial Services'),
(3, 'Krishan Kumar', 'Flipkart', 'Software Development Engineer', 'Internet'),
(4, 'Prakhar Chaturvedi', 'Sprinklr', 'Software Development Engineer', 'Information Technology & Services'),
(5, 'Rohan Thakur', 'Informatica', 'Associate Software Engineer', 'Computer Software'),
(6, 'Kritika Rupauliha', 'Microsoft', 'Software Engineer', 'Computer Software'),
(7, 'Harshit Singh', 'Amazon', 'Software Development Engineer', 'Internet'),
(8, 'Shivam Kataria', 'BNY Mellon', 'Software Developer', 'Financial Services'),
(9, 'Akshay Anand', 'redBus', 'Software Engineer', 'Internet'),
(10, 'Arpan Bhowmik', 'Samsung R&D', 'Senior Engineer', 'Consumer Electronics'),
(11, 'Raja Rahul', 'IBM', 'Software Development Engineer', 'Information Technology & Services'),
(12, 'Yusuf Hassan', 'OneDIrect', 'Product Manager', 'Information Technology & Services'),
(13, 'Shashank Mishra', 'Amazon', 'Data Engineer', 'Internet'),
(14, 'Pooja Sund', 'Microsoft', 'Director of Technology & Analytics', 'Computer Software'),
(15, 'Varun Sud', 'CompTiA', 'Head of Academic Alliances', 'Information Technology & Services'),
(16, 'Souhardya De', 'Rupa Publications', 'Indian Author', 'Publishing'),
(17, 'Yudi J', 'EXL Healthcare', 'Software Team Manager', 'Healthcare Services'),
(18, 'Meraj Faheem', 'The Hacking School', 'Founder', 'E-Learning'),
(19, 'Srikumar Nair', 'Microsoft', 'Principal Group Program Manager', 'Computer Software'),
(20, 'Mrinal Jain', 'Wittyfeed', 'Front-End Engineer', 'Online Media'),
(21, 'Suman Debnath', 'Amazon Web Services', 'Principal Developer Advocate', 'Information Technology & Services'),
(22, 'Vandana Mohture', 'MindArt', 'Founder', 'Professional Training & Coaching');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
