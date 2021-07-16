-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 09:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industryinspiretalks`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `perks` text DEFAULT NULL,
  `tenure` text DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `description`, `type`, `skills`, `perks`, `tenure`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Program Manager', '<b>As a Program Manager you’ll be responsible for:</b>  <br><br>• Creating a community about our organisation in your region. <br>• Appointing a Community Manager <br>• Instructing the Community Manager to appoint brand advocates in colleges in your region <br>• Work with the brand advocates to help spread the word about our organisation. <br>• Responsible for facilitating marketing activities in colleges about our organisation <br>• Handling the entire region operations & providing our industry oriented content to the selected colleges <br>', 'Full Time', 'Leadership, Communication Skills, Marketing, Public-Speaking, Program/Project Management, Team Management', 'Internship Letter, LOR, Access to our events', '3 months | 6 months | Project Based', 0, '2021-07-13 19:03:34', '2021-07-14 01:25:45', NULL),
(2, 'Community Manager', '• Working under the Program Manager, helping him with all the activities. <br>\r\n• Responsible for appointing Campus Ambassadors from college in their region <br>\r\n• Collaborating with other communities <br>\r\n• Working with the Program Manager to improve our organisation engagement in your region. <br>\r\n• Reaching out to potential industry leaders & spreading our initiative with them, telling them about Inspire Stories, Our Events <br>\r\n• Facilitate the audience for the online meetups, webinars conducted by Campus Ambassador or Industry Leaders<br>', 'Full Time', 'Leadership, Communication Skills, Marketing, Public-Speaking, Community Management, Interview Skills', 'Internship Letter, LOR, Access to our events', '3 months | 6 months | Project Based', 1, '2021-07-13 19:03:34', '2021-07-13 19:03:34', NULL),
(3, 'Marketing Interns', '• Collecting quantitative & qualitative data from marketing campaigns.  <br>\r\n• Performing market analysis and research on competition  <br>\r\n• Working alongside the CMO & Marketing Manager to prepare strategies to boost our content  <br>\r\n• Reaching out to 50 people per day & telling them about our organisation (Promotion Message will be provided) <br>', 'Internship', 'Leadership, Communication Skills, Marketing, Public-Speaking', 'Internship Letter, LOR, Access to our events', '3 months | 6 months | Project Based', 1, '2021-07-13 19:03:34', '2021-07-13 19:03:34', NULL),
(4, 'Strategic Partnership Manager', '• Liase with partners to solve issues, communicate needs & create synergy  <br>\r\n• Analyze and report on partner initiatives, forecast for strategic & report on key metrics. <br>\r\n• Build the organisation network by through targeted outreach and strong project planning. <br>\r\n• Manage relationships with stakeholders to build the brand & the business <br>\r\n• Champion & Manage new projects to create stronger partnerships <br>\r\n• Looking for sponsors for our events  <br>\r\n• Connecting the Program Managers with the desired stakeholders for meaningful collaborations<br>', 'Internship', 'Leadership, Communication Skills, Convincing Skill, Marketing, Management Skills', 'Internship Letter, LOR, Access to our events', '3 months | 6 months | Project Based', 1, '2021-07-13 19:03:34', '2021-07-13 19:03:34', NULL),
(5, 'Program Manage', '<b>As a Program Manager you’ll be responsible for:</b>  <br><br>• Creating a community about our organisation in your region. <br>• Appointing a Community Manager <br>• Instructing the Community Manager to appoint brand advocates in colleges in your region <br>• Work with the brand advocates to help spread the word about our organisation. <br>• Responsible for facilitating marketing activities in colleges about our organisation <br>• Handling the entire region operations & providing our industry oriented content to the selected colleges <br>', 'Full Time', 'Leadership, Communication Skills, Marketing, Public-Speaking, Program/Project Management, Team Management', 'Internship Letter, LOR, Access to our events', '3 months | 6 months | Project Based', 0, '2021-07-13 14:31:13', '2021-07-13 14:31:13', NULL),
(6, 'Program Manage', '<b>As a Program Manager you’ll be responsible for:</b>  <br><br>• Creating a community about our organisation in your region. <br>• Appointing a Community Manager <br>• Instructing the Community Manager to appoint brand advocates in colleges in your region <br>• Work with the brand advocates to help spread the word about our organisation. <br>• Responsible for facilitating marketing activities in colleges about our organisation <br>• Handling the entire region operations & providing our industry oriented content to the selected colleges <br>', 'Full Time', 'Leadership, Communication Skills, Marketing, Public-Speaking, Program/Project Management, Team Management', 'Internship Letter, LOR, Access to our events', '3 months | 6 months | Project Based', 0, '2021-07-13 14:31:18', '2021-07-13 14:31:18', NULL),
(7, 'Program Manager', '<b>As a Program Manager you’ll be responsible for:</b>  <br><br>• Creating a community about our organisation in your region. <br>• Appointing a Community Manager <br>• Instructing the Community Manager to appoint brand advocates in colleges in your region <br>• Work with the brand advocates to help spread the word about our organisation. <br>• Responsible for facilitating marketing activities in colleges about our organisation <br>• Handling the entire region operations & providing our industry oriented content to the selected colleges <br>', 'Full Time', 'Leadership, Communication Skills, Marketing, Public-Speaking, Program/Project Management, Team Management', 'Internship Letter, LOR, Access to our events', 'months | 6 months | Project Based', 0, '2021-07-13 14:31:48', '2021-07-13 14:31:48', NULL),
(8, 'Program Manage', '<b>As a Program Manager you’ll be responsible for:</b>  <br><br>• Creating a community about our organisation in your region. <br>• Appointing a Community Manager <br>• Instructing the Community Manager to appoint brand advocates in colleges in your region <br>• Work with the brand advocates to help spread the word about our organisation. <br>• Responsible for facilitating marketing activities in colleges about our organisation <br>• Handling the entire region operations & providing our industry oriented content to the selected colleges <br>', 'Full Time', 'Leadership, Communication Skills, Marketing, Public-Speaking, Program/Project Management, Team Management', 'Internship Letter, LOR, Access to our events', '3 months | 6 months | Project Based', 0, '2021-07-13 14:34:01', '2021-07-13 14:34:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `company` varchar(80) DEFAULT NULL,
  `role` varchar(80) DEFAULT NULL,
  `industry` varchar(80) DEFAULT NULL,
  `image_ext` varchar(6) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id`, `name`, `company`, `role`, `industry`, `image_ext`, `link`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ritwik Deshpande', 'JP Morgan Chase & Co', 'Software Development Engineer', 'Financial Services', 'jpg', 'https://www.linkedin.com/in/ritwik-deshpande-ba4b51170/', 0, '2021-07-13 14:36:57', '2021-07-13 09:07:03', NULL),
(2, 'Irin Banerjee', 'D.E Shaw & Co', 'Software Development Engineer', 'Financial Services', 'jpg', 'https://www.linkedin.com/in/irin-banerjee-a8a4261b2/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(3, 'Krishan Kumar', 'Dell', 'Ex-Software Development Engineer', 'Information Technology & Services', 'jpg', 'https://www.linkedin.com/in/krishan-kumar-4ab217166/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(4, 'Prakhar Chaturvedi', 'Sprinklr', 'Software Development Engineer', 'Information Technology & Services', 'jpg', 'https://www.linkedin.com/in/prakhar9453/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(5, 'Rohan Thakur', 'Informatica', 'Associate Software Engineer', 'Computer Software', 'jpg', 'https://www.linkedin.com/in/rohan-thakur-624106168/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(6, 'Kritika Rupauliha', 'Microsoft', 'Software Engineer', 'Computer Software', 'jpg', 'https://www.linkedin.com/in/kritika-rupauliha/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(7, 'Harshit Singh', 'Amazon', 'Software Development Engineer', 'Internet', 'jpg', 'https://www.linkedin.com/in/helios1101/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(8, 'Shivam Kataria', 'BNY Mellon', 'Software Developer', 'Financial Services', 'jpg', 'https://www.linkedin.com/in/shivkat/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(9, 'Akshay Anand', 'redBus', 'Software Engineer', 'Internet', 'png', 'https://www.linkedin.com/in/akshayanand28/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(10, 'Arpan Bhowmik', 'Samsung R&D', 'Senior Engineer', 'Consumer Electronics', 'jpg', 'https://www.linkedin.com/in/arpan9/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(11, 'Raja Rahul', 'IBM', 'Software Development Engineer', 'Information Technology & Services', 'jpeg', 'https://www.linkedin.com/in/raja-rahul/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(12, 'Yusuf Hassan', 'OneDirect', 'Product Manager', 'Information Technology & Services', 'jpeg', 'https://www.linkedin.com/in/syedyhassan/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(13, 'Shashank Mishra', 'Amazon', 'Data Engineer', 'Internet', 'jpeg', 'https://www.linkedin.com/in/shashank219/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(14, 'Pooja Sund', 'Microsoft', 'Director of Technology & Analytics', 'Computer Software', 'jpeg', 'https://www.linkedin.com/in/pooja3p/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(15, 'Varun Sud', 'CompTIA', 'Head of Academic Alliances', 'Information Technology & Services', 'jpeg', 'https://www.linkedin.com/in/varun-sud-31abb18b/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(16, 'Souhardya De', 'Rupa Publications', 'Indian Author', 'Publishing', 'jpeg', 'https://www.linkedin.com/in/souhardya-de-f-r-a-s-4475a4185/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(17, 'Yudi J', 'EXL Healthcare', 'Software Team Manager', 'Healthcare Services', 'jpg', 'https://www.linkedin.com/in/priteshjagani/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(18, 'Meraj Faheem', 'The Hacking School', 'Founder', 'E-Learning', 'jpeg', 'https://www.linkedin.com/in/merajf/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(19, 'Srikumar Nair', 'Microsoft', 'Principal Group Program Manager', 'Computer Software', 'jpeg', 'https://www.linkedin.com/in/srikumarknair/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(20, 'Mrinal Jain', 'Wittyfeed', 'Front-End Engineer', 'Online Media', 'jpeg', 'https://www.linkedin.com/in/mrinaljain/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(21, 'Suman Debnath', 'Amazon Web Services', 'Principal Developer Advocate', 'Information Technology & Services', 'jpeg', 'https://www.linkedin.com/in/suman-d/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(22, 'Vandana Mohture', 'MindArt', 'Founder', 'Professional Training & Coaching', 'jpeg', 'https://www.linkedin.com/in/vandanamohture/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(23, 'Pablo Veramendi', 'Microsoft', 'Director - Audience Evangelism', 'Computer Software', 'jpeg', 'https://www.linkedin.com/in/pveramendi/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(24, 'Prajwal Singh', 'Gojek Tech', 'Product Engineer', 'Internet', 'jpeg', 'https://www.linkedin.com/in/prajwal714/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(25, 'Aswin Nagarajan', 'PayPal', 'Software Engineer', 'Internet', 'jpeg', 'https://www.linkedin.com/in/aswin-nagarajan-a957b8149/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(26, 'Divyansh Srivastava', 'NCR Corporation', 'Software Engineer', 'IT Services', 'jpeg', 'https://www.linkedin.com/in/divyansh-srivastava-a2b87a176/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(27, 'Shwetabh Dixit', 'VISA', 'Software Engineer', 'IT Services', 'jpeg', 'https://www.linkedin.com/in/shwetabh-dixit-4b2aa9149/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(28, 'Aman Sadique', 'Deloitte', 'Analyst', 'Management Consulting', 'jpeg', 'https://www.linkedin.com/in/aman-sadique/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(29, 'Chaitya Chheda', 'Morgan Stanley', 'Technology Associate', 'Financial Services', 'jpg', NULL, 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(30, 'Dhairya Gangwani', 'KPMG', 'SAP Analyst', 'Management Consulting', 'jpg', 'https://www.linkedin.com/in/dhairya-gangwani/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(31, 'Sanjay Malhotra', 'CRED', 'Backend Developer', 'Internet', 'jpg', 'https://www.linkedin.com/in/sanjay-malhotra-28b747147/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(32, 'Devansh Jain', 'udaan', 'Product Engineer', 'Internet', 'jpg', NULL, 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(33, 'Akshay Gupta', 'A-Trac Engineering', 'Managing Director', 'Automotive', 'jpg', 'https://www.linkedin.com/in/akshay-atracparts/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(34, 'Vani Sengupta', 'The Westin Chennai Velachery', 'Director of Human Resources', 'Hospitality', 'png', 'https://www.linkedin.com/in/vani-sengupta-b1499236/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(35, 'Tim Esse', 'Growth by Design Talent', 'Recruiter', 'Staffing & Recruiting', 'jpg', 'https://www.linkedin.com/in/timesse/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(36, 'Ash Rao', 'Verizon', 'Global Talent Acquisition', 'Information Technology & Services', 'jpg', 'https://www.linkedin.com/in/ashrao1/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(37, 'Utkarsh Bagri', 'Pariksha', 'Founder', 'Edtech', 'jpg', 'https://www.linkedin.com/in/utkarshbagri/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(38, 'Kumaresh Bhatt', 'URPopular', 'Founder & CEO', 'Marketing & Advertising', 'png', 'https://www.linkedin.com/in/kumaresh-bhatt/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(39, 'Sandeep Arora', 'Bueno Finance', 'Co-Founder', 'Financial Services', 'jpg', 'https://www.linkedin.com/in/sandeep-arora-065bb519/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(40, 'Tejas Sati', 'Avysh', 'Founder', 'Internet', 'jpg', 'https://www.linkedin.com/in/tejas4sati/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(41, 'Ram Ray', 'Wizita Healthcare', 'CEO', 'Health, Wellness & Fitness', 'jpg', 'https://www.linkedin.com/in/ram-ray-02b14614/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(42, 'Abhijit Sanzgiri', 'A P Sanzgiri & Co', 'Founding Partner', 'Chartered Accountancy', 'jpg', 'https://www.linkedin.com/in/abhijitsanzgiririskderisk/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(43, 'Prakkash Manohar', 'Grofers', 'Data Analyst', 'Internet', 'jpg', 'https://www.linkedin.com/in/manoharprakkash/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL),
(44, 'Chidroop I', 'Walmart Global Tech India', 'Software Engineer', 'Information Technology & Services', 'jpg', 'https://www.linkedin.com/in/chidroop-i/', 1, '2021-07-13 14:36:57', '2021-07-13 14:36:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `image_ext` varchar(6) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title`, `image_ext`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'JP Morgan Chase & Co', 'jpeg', 0, '2021-07-14 05:38:24', '2021-07-14 00:29:09', NULL),
(2, 'D.E Shaw & Co', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(3, 'Dell', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(4, 'Sprinklr', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(5, 'Informatica', 'jpg', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(6, 'Microsoft', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(7, 'Amazon', 'jpg', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(8, 'BNY Mellon', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(9, 'redBus', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(10, 'Samsung', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(11, 'IBM', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(12, 'Gojek', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(13, 'PayPal', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(14, 'NCR Corporation', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(15, 'VISA', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(16, 'EXL Healthcare', 'jpg', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(17, 'Deloitte', 'jpeg', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(18, 'Rupa Publications', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(19, 'CompTIA', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(20, 'The Hacking School', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(21, 'Amazon Web Services', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(22, 'MindArt', 'jpeg', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(23, 'OneDirect', 'jpg', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(24, 'WittyFeed', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(25, 'Morgan Stanley', 'jpg', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(26, 'CRED', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(27, 'KPMG', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(28, 'udaan', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(29, 'Pariksha', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(30, 'URPopular', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(31, 'Bueno Finance', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(32, 'Avysh', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(33, 'Wizita Healthcare', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(34, 'A-Trac Engineering', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(35, 'Growth by Design Talent', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(36, 'Walmart Global Tech India', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL),
(37, 'Grofers', 'png', 1, '2021-07-14 05:38:24', '2021-07-14 05:38:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` int(11) NOT NULL,
  `series_id` int(11) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `link` varchar(60) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `series_id`, `title`, `link`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Podcast Series with Yudi J - EP #1', 'https://www.youtube.com/embed/JBmUScGyOEg', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(2, 1, 'Interview Series with Ritwik - EP #1', 'https://www.youtube.com/embed/FkvVTTgj2y4', 0, '2021-07-13 16:50:34', '2021-07-14 01:24:12', NULL),
(3, 1, 'Interview Series with Irin - EP #2', 'https://www.youtube.com/embed/VhD_-5BVcxM', 1, '2021-07-13 16:50:34', '2021-07-13 11:44:56', NULL),
(4, 1, 'Interview Series with Krishan - EP #3', 'https://www.youtube.com/embed/XAf83l1wfFk', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(5, 1, 'Interview Series with Prakhar - EP #4', 'https://www.youtube.com/embed/vPXOKfKLlY', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(6, 1, 'Interview Series with Rohan - EP #5', 'https://www.youtube.com/embed/xLCOF7aCJ1U', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(7, 1, 'Interview Series with Kritika - EP #6', 'https://www.youtube.com/embed/jiQeFPvU_bI', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(8, 1, 'Interview Series with Harshit - EP #7', 'https://www.youtube.com/embed/JAAwLHLUmu0', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(9, 1, 'Interview Series with Shivam - EP #8', 'https://www.youtube.com/embed/lUE84M_Dq78', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(10, 1, 'Interview Series with Akshay - EP #9', 'https://www.youtube.com/embed/4z7qbq4yAc8', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(11, 1, 'Interview Series with Arpan - EP #10', 'https://www.youtube.com/embed/y5nfPq-rxfw', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(12, 1, 'Interview Series with Rahul - EP #11', 'https://www.youtube.com/embed/rHq1eU14wCs', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(13, 1, 'Interview Series with Prajwal - EP #12', 'https://www.youtube.com/embed/7fPSiJRzojc', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(14, 1, 'Interview Series with Aswin - EP #13', 'https://www.youtube.com/embed/KXc5lU1cYgM', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(15, 1, 'Interview Series with Divyansh - EP #14 (Part 1)', 'https://www.youtube.com/embed/SLenw3oIL0U', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(16, 1, 'Interview Series with Divyansh - EP #14 (Part 2)', 'https://www.youtube.com/embed/sTE6HBTnrsI', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(17, 1, 'Interview Series with Shwetabh - EP #15 (Part 1)', 'https://www.youtube.com/embed/z_V6MAsU43A', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(18, 1, 'Interview Series with Shwetabh - EP #15 (Part 2)', 'https://www.youtube.com/embed/14PaFomXXCc', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(19, 2, 'Podcast Series with Pablo Veramendi - EP #2 (Part 1)', 'https://www.youtube.com/embed/94PKSpqHmaw', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(20, 2, 'Podcast Series with Pablo Veramendi - EP #2 (Part 2)', 'https://www.youtube.com/embed/8hPs3h6iibI', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(21, 1, 'Interview Series with Aman - EP #16 (Part 1)', 'https://www.youtube.com/embed/mktIsxl-vkE', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(22, 1, 'Interview Series with Aman - EP #16 (Part 2)', 'https://www.youtube.com/embed/5Ac9AcsRfz8', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(23, 2, 'Podcast Series with Akshay Gupta - EP #3 (Part 1)', 'https://www.youtube.com/embed/39ENxMow1OM', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(24, 2, 'Podcast Series with Akshay Gupta - EP #3 (Part 2)', 'https://www.youtube.com/embed/r8xh5DnzRSY', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(25, 1, 'Interview Series with Chaitya - EP #17 (Part 1)', 'https://www.youtube.com/embed/WwR_kkwHfCw', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(26, 1, 'Interview Series with Chaitya - EP #17 (Part 2)', 'https://www.youtube.com/embed/R_hpYCL-gwg', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(27, 2, 'Podcast Series with Vani Sengupta -  EP #4 (Part 1)', 'https://www.youtube.com/embed/dVAbIoQuT4k', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(28, 2, 'Podcast Series with Vani Sengupta -  EP #4 (Part 2)', 'https://www.youtube.com/embed/kU1vFrBO2T4', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(29, 2, 'Podcast Series with Tim Esse - EP #5 (Part 1)', 'https://www.youtube.com/embed/EcbqAqAmZ3A', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(30, 2, 'Podcast Series with Tim Esse - EP #5 (Part 2)', 'https://www.youtube.com/embed/DyFxWloJuIw', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(31, 2, 'Podcast Series with Abhijit Sanzgiri - EP #6 (Part 1)', 'https://www.youtube.com/embed/O9VUtS6__lY', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(32, 2, 'Podcast Series with Abhijit Sanzgiri - EP #6 (Part 2)', 'https://www.youtube.com/embed/gTT2LDlYnMs', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(33, 1, 'Interview Series with Dhairya - EP #18 (Part 1)', 'https://www.youtube.com/embed/rEXvlNzI2T0', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(34, 1, 'Interview Series with Dhairya - EP #18 (Part 2)', 'https://www.youtube.com/embed/uI-6LMAyOYc', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(35, 2, 'Podcast Series with Ash Rao - EP #7 (Part 1)', 'https://www.youtube.com/embed/FBcqToBvVWA', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(36, 2, 'Podcast Series with Ash Rao - EP #7 (Part 2)', 'https://www.youtube.com/embed/lwS2wAQX5fo', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(37, 1, 'Interview Series with Devansh - EP #19 (Part 1)', 'https://www.youtube.com/embed/QHITcFmp4Uo', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(38, 1, 'Interview Series with Devansh - EP #19 (Part 2)', 'https://www.youtube.com/embed/IVhiFnB5mfA', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(39, 1, 'Interview Series with Prakkash Manohar - EP #20 (Part 1)', 'https://www.youtube.com/embed/WDmxxEHWK00', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(40, 1, 'Interview Series with Prakkash Manohar - EP #20 (Part 2)', 'https://www.youtube.com/embed/4Nl-v0X7ewc', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(41, 1, 'Interview Series with Chidroop I - EP #21 (Part 1)', 'https://www.youtube.com/embed/OQN83Q2hwC8', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL),
(42, 1, 'Interview Series with Chidroop I - EP #21 (Part 2)', 'https://www.youtube.com/embed/fp5fbD-fREM', 1, '2021-07-13 16:50:34', '2021-07-13 16:50:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `image_ext` varchar(6) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category`, `title`, `description`, `link`, `image_ext`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Industry Expo 2020', 'Path to Product Management', 'Welcome to Day 1 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready!  Yusuf Hassan is a Product Manager with a demonstrated ability to manage the entire product lifecycle - from ideation to deployment and post-deployment enhancements in an agile environment.Introduced QR codes on websites for a seamless payment experience. My area of expertise is to build and enhance products and features for higher customer retention, higher success rates, reduced frauds, and overall engaging experience for the consumer.', 'https://youtu.be/Zt8BhRS2vf0', 'png', 0, '2021-07-13 18:03:31', '2021-07-14 01:25:03', NULL),
(2, 'Industry Expo 2020', 'Career opportunities in Big Data', 'Welcome to Day 2 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Shashank Mishra is a Data Engineer for Amazon, Ex - McKinsey & Company, Ex - Paytm, Founder @ E-Learning Bridge. He is an experienced Data Engineer with a demonstrated history of working in the information technology and services industry. Skilled in BigData technologies and Data Visualization ( Hadoop, Spark, SparkStreaming, HBase, Hive, Sqoop, Kafka, Datastax Cassandra, Datastax Studio, ElasticSearch, Grafana, Kibana) with a good grasp of Java, Python, C++, Core Data Structures & Algorithms, Django, REST API, and Databases. Strong engineering professional with a Master of Computer Applications (M.C.A.) focused in Computer Science and Engineering from Motilal Nehru National Institute Of Technology, Allahabad (NIT Allahabad)  ', 'https://youtu.be/5C5cJSduemw', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 12:40:38', NULL),
(3, 'Industry Expo 2020', 'Build your brand', 'Welcome to Day 3 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Pooja Sund is the Director-Technology & Analytics for Microsoft, Redmond, the USA with 14yrs+ of experience. She is an achievement-oriented finance and technology leader with solid credentials (Gold medalist and 2 times CFO Award winner). 15+ years of global experience in setting the vision, and the ability to execute on that vision by leading teams. An enthusiastic leader with deep technical and financial experience & proven ability to lead high-performing teams, build strong relationships, foster efficiency, and create an impact. I am the recipient of Highest Award for Leadership 2018, Dale Carnegie’s “Advanced Leadership Program”. She loves to make an impact by utilizing my brand of 3P: Passion for Technology, Data Analytics, Leadership and Business intelligence; Power to believe in myself and others, the power to keep ideating, fix things, create clarity, generate positive energy in teams; and lead people and teams to be successful.', 'https://youtu.be/04FokgmRk5o', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 18:03:31', NULL),
(4, 'Industry Expo 2020', 'Your next move: Learn a new skill', 'Welcome to Day 4 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Varun is currently heading the Academic alliances for CompTIA in India, Srilanka, and Bangladesh. My role in CompTIA is to work with Academic institutions build a workforce capable of exploiting technical innovation, protect valuable information, and at the same time help address the scarcity of talent.', 'https://youtu.be/cGnlBjDBzuo', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 18:03:31', NULL),
(5, 'Industry Expo 2020', 'Varied aspects of Indian Publishing Industry', 'Welcome to Day 5 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Souhardya De is an Indian author of Historical Fiction, a Columnist, and a Fellow of the Royal Asiatic Society of Great Britain and Ireland. Souhardya has authored bylines in The Sunday Guardian, The Citizen, WION, The Statesman, Thrive Global, Scroll Media, The Standard, TOI Blogs, The Hills Times, and other notable publications. He writes a fortnightly article on history, art, and culture at The Sunday Guardian and leads the editorial team for the BFF page by the Young Post, South China Morning Post, Hong Kong.  He intends to revitalize and invigorate the Indian art and culture, history, and mythological epics through his works and tries to author them in a way most appealing to the readers of today. Souhardya’s upcoming book is to be released with Rupa Publications India.  ', 'https://youtu.be/6j0tiLrXMV0', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 18:03:31', NULL),
(6, 'Industry Connect', 'Path towards Student Entrepreneurship', 'Welcome to Day 1 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Meraj Faheem is a natural, hardcore and curious entrepreneur. A perfectionist who wants to ship first. His strength lies in planning an end to end growth and GTM strategies using organic, paid and technical solutions backed by data and analytics, and executing them to achieve exponential growth and ROI. He helps build products that sell themselves. Passionate about UX and customer success (you many call it customer support/servicing). He has mastered the art of people (both client and team) and product management.', 'https://youtu.be/vvj_DOImG9Q', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 18:03:31', NULL),
(7, 'Industry Connect', 'Anyone can build apps - Industry Connect', 'Welcome to Day 2 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Srikumar Nair is a product leader with 15 years of experience across Cloud Services, IT Services, product engineering and manufacturing. Expertise in product and service lifecycle management. Motivated to drive strategic and technical solutions to real-world problems and needs of the customer.', 'https://youtu.be/GX8DLWavZEk', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 18:03:31', NULL),
(8, 'Industry Connect', 'Introduction to Flutter', 'Welcome to Day 3 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Professionally Mrinal is a Front-End developer but he is passionate about Open Source and Web Technologies. Mozilla! He loves to volunteer, organize and/or speak at the events. The best source to find or contact him is on Facebook ;), sharing his knowledge and experience on web design & development. What does he do? - Creating events to get all other Mozillian together. - Spreading to the world about developer tools, Firefox, WebFwd & Firefox OS - Speaking at events and trying to connect both communities and getting more people involved in the Mozilla Project. He loves to speak about Developer tools, Firefox OS, and Community Evangelism.', 'https://youtu.be/zSWLbrKtOik', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 18:03:31', NULL),
(9, 'Industry Connect', 'Code in Cloud', 'Welcome to Day 4 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Suman is Storage Professional, mostly focusing on Performance Engineering, System Testing, Quality Engineering and Solutioning. Worked with clients to evaluate technologies. Conduct Assessments/ Workshops/PoC, provide solution architecture. He is Storage and system performance engineer, focusing on raw and application-based performance benchmarking (like Oracle, MS SQL Server, MS Exchange Server, Storage Migration, Bootstrom, etc.), Storage QE professional, expertise on the system, regression and performance testing for various storage systems, especially on distributed storage systems, like IBM SVC and EMC VPLEX.', 'https://youtu.be/R3-HoFoIEew', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 18:03:31', NULL),
(10, 'Industry Connect', 'Mastering Mindful Living', 'Welcome to Day 5 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Vandana is Mindset Coach, a Mentor, Facilitator, Speaker, Cheerleader. She is passionate about helping people see the best in themselves and others. She believes that we all are here with a purpose and if we live a life of purpose, we are sure to stay committed, feel fulfilled and attain our highest potential. She enjoys working with groups and individuals to achieve this and open up the possibilities that exist for them. She coaches from a state of curiosity, asking powerful questions that facilitate their thinking and help them create a solution-focused outcome. She plays the role of a coach, a mentor, a facilitator and a cheerleader championing them all through their journey.', 'https://youtu.be/wbxPZvBxH7s', 'png', 1, '2021-07-13 18:03:31', '2021-07-13 18:03:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industry_experts`
--

CREATE TABLE `industry_experts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image_ext` text DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `company` varchar(80) DEFAULT NULL,
  `linked_link` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `hidden_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industry_leaders`
--

CREATE TABLE `industry_leaders` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `position` varchar(40) DEFAULT NULL,
  `company` varchar(40) DEFAULT NULL,
  `image_ext` varchar(6) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry_leaders`
--

INSERT INTO `industry_leaders` (`id`, `name`, `position`, `company`, `image_ext`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dr. Sneha Rakesh', 'Managing Director', 'Akarmaxs Tech', 'jpeg', 0, '2021-07-14 05:21:12', '2021-07-14 00:01:41', NULL),
(2, 'Paras Pundir', 'Program Manager', 'Microsoft', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(3, 'Srikumar Nair', 'Principal Group Program Manager', 'Microsoft', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(4, 'Satya Prakash Mohapatra', 'Corporate  HR Manager', 'Tata Projects', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(5, 'Vandana Mohture', 'Founder', 'MindArt', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(6, 'Rabiah Bhatia', 'Co-Founder', 'AIBA', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(7, 'Jitesh Khanna', 'Entrepreneur', '', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(8, 'Mahesh Wagh', 'Founder & CEO', 'Ekeeda.com', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(9, 'Bhavana BP', 'Founder & CEO', 'Let Me Listen', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(10, 'Shashank Mishra', 'Data Engineer', 'Amazon', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(11, 'Devan Bhalla', 'Deputy General Manager', 'Amar Ujala', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(12, 'Vishal Nair', 'Vice President', 'Atna Technologies', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(13, 'Sampark Sachdeva', 'Founder & CEO', 'SamparkSeSampark', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(14, 'Sayee Bhvaneswari', 'Founder ', 'Meraki Consulting', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(15, 'Kirupakar S', 'South India Head', 'Neo', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(16, 'Lokesh Sathya', 'Co-Founder & Director', 'Milkydelight', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(17, 'Jyothi Noronha', 'Co-Founder & CEO', 'NeeliTech', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(18, 'Nikita Gupta', 'Founder', 'FAANGPath', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(19, 'Vikas Dua', 'Chief HR Mentor', 'Attayn', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(20, 'Logesh Velsamy', 'Founder & CEO', 'Effitrac Solutions', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(21, 'Shalaka Verma', 'Director - Partner Technology', 'Microsoft', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(22, 'Linda Thackeray', 'Director - The Garage', 'Microsoft', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(23, 'Vani Sengupta', 'Director - Human Resources', 'The Westin Chennai Velachery', 'jpeg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(24, 'Ash Rao', 'Global Talent Acquisition', 'Verizon', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(25, 'Shyam Prashad Rajasekaran', 'Co Founder and Chief Operations', 'Veg Route Agri Tech Private Limited', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(26, 'Samaresh Shah', 'Founder', 'White Canvas India', 'png', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(27, 'Sumit Agarwal', 'Founder', 'PR Signal', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(28, 'Muralidhar Teppala', 'Founder & CEO', 'Shenzyn', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(29, 'Vagisha Arora', 'Freelance Content Writer and Marketer', 'Self Employed', 'png', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(30, 'Deepa Choudhary', 'EA to President & COO', 'MAHLE', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(31, 'Richa Sharma', 'Principal', 'BMVB-ASMA', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(32, 'Bhavna Chibber', 'Vice Principal', 'Gurugram Global Heights School', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(33, 'Mayur Sundararajan', 'Business Head', 'Versa Drives PVT LTD', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(34, 'Dr Shunila Joy Chauhan', 'Principal', 'Thakur International School', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(35, 'Dr Mithileysh Sathiyanarayanan', 'Founder & CEO', 'MIT Square', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(36, 'Sneha Gon', 'Senior Software Developer', 'Etiqa Life insurance', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(37, 'Srivas A', 'COO', 'Jinglebid', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(38, 'Kalpesh Kabra', 'Founder & CEO', 'HWCT India Foundation', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(39, 'Tanvi Sualy', 'Co-Founder', 'Happy People & Co', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(40, 'Saurav Gandhi', 'Co-Founder', 'Bueno Finance', 'jpg', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(41, 'Piyush Verma', 'Founder & CEO', 'Manush Labs', NULL, 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL),
(42, 'Saniya Tilwali', 'Cabin Crew', 'Emirates', 'png', 1, '2021-07-14 05:21:12', '2021-07-14 05:21:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inspire_classes`
--

CREATE TABLE `inspire_classes` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `image_ext` text DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `industry_expert_id` int(11) NOT NULL,
  `enrollment_link` text DEFAULT NULL,
  `session_drive_link` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `hidden_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspire_stories`
--

CREATE TABLE `inspire_stories` (
  `id` int(11) NOT NULL,
  `leader_id` int(11) DEFAULT NULL,
  `image_ext` varchar(6) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspire_stories`
--

INSERT INTO `inspire_stories` (`id`, `leader_id`, `image_ext`, `link`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_career-achievements-technology-activity-6732266136710209536-SS8N', 0, '2021-07-13 17:22:37', '2021-07-14 01:56:37', '2021-07-14 01:56:37'),
(2, 2, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_paraspundir-communityguy-microsoft-activity-6739047122873806848-jw4o', 1, '2021-07-13 17:22:37', '2021-07-14 01:56:41', '2021-07-14 01:56:41'),
(3, 3, 'jpeg', 'class=\"form-control\"', 0, '2021-07-13 17:22:37', '2021-07-14 01:56:44', '2021-07-14 01:56:44'),
(4, 4, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_satyaprakashmohapatra-industryleader-hrmanager-activity-6740603622310191104-bGmI', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(5, 5, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_vandanamohture-womenleaders-womenfounders-activity-6741697307500261376-Mh5t', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(6, 6, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_rabiahbhatia-industryleader-womenleaders-activity-6742085860054974465-P4A0', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(7, 7, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_jiteshkhanna-publicfigure-industryleader-activity-6742750669129834496-snFZ', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(8, 8, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_maheshwagh-ekeeda-elearningplatform-activity-6744486554347163648-7QJg', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(9, 9, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_bhavanabp-letmelisten-solopreneur-activity-6744918216155496448-gBKW', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(10, 10, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_shashankmishra-engineer-youtuber-activity-6746382765962485760-RAHQ', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(11, 11, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_devanbhalla-industryleaders-marketer-activity-6747834965448364032-w_pJ', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(12, 12, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_vishalnair-industryleaders-digitalstrategist-activity-6748213700735438848-v4cz', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(13, 13, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_samparksachdeva-industryleaders-salescoach-activity-6748932254027919360-zLUy', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(14, 14, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_sayeebhuvaneswari-merakiconsulting-entrepreneur-activity-6749653842905972736-xdZA', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(15, 15, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_kirupakars-industryleaders-salesleader-activity-6750748774538338304-ZzTx', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(16, 16, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_lokheshsatya-industryinsights-cofounder-activity-6751456472561004544-iAgL', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(17, 17, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_jyothinoronha-womenleaders-industryinsights-activity-6751829687305146369-wmpb', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(18, 18, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_nikitagupta-womenleaders-industryinsights-activity-6752189043888521216-6dy3', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(19, 19, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_vikasdua-industryleaders-hrexpert-activity-6752899627743371264-w3li', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(20, 20, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_logeshvelusamy-industryleaders-crmsolutions-activity-6753673286162505728-Gk_i', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(21, 21, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_shalakaverma-womenleaders-industryinsights-activity-6754389659104747520-rt88', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(22, 22, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_lindathackeray-womenleaders-industryinsights-activity-6754738906312376320-1aB2', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(23, 23, 'jpeg', 'https://www.linkedin.com/posts/industry-inspire-talks_vanisengupta-womenleaders-industryinsights-activity-6757262687211794432-_9L3', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(24, 24, 'png', 'class=\"form-control\"', 0, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(25, 25, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_shyamprasadrajasekaran-cofounder-vegrouteagritech-activity-6766330914403434496-p2N5', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(26, 26, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_samareshshah-founder-whitecanvasindia-activity-6769523279070924800-jSv2', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(27, 27, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_sumitagarwal-founder-prsignal-activity-6769974382656921600--fMA', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(28, 28, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_muralidharteppala-founder-shenzyn-activity-6770331321307951104-5Ta7', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(29, 29, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_vagishaarora-womenleaders-industryinsights-activity-6772452171222007808-NZDW', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(30, 30, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_deepachoudhary-womenleaders-industryinsights-activity-6776420580469166081-EdcL', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(31, 31, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_richasharma-womenleaders-industryinsights-activity-6776792478986190848-ssvN', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(32, 32, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_bhavnachibber-educationist-womenleaders-activity-6778311792952250368-tLi7', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(33, 33, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_mayursundaranjan-businesshead-versadrives-activity-6779380547220312064-g49E', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(34, 34, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_shunilaroychauhan-educationist-womenleaders-activity-6781158789153456129-WzhF', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(35, 35, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_mithileyshsathiyanarayanan-founder-entrepreneur-activity-6783731624967335937-FB7O', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(36, 36, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_snehagon-seniorsoftwaredeveloper-itprofessionals-activity-6788773700037677056-GrYQ', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(37, 37, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_inspirestories-srivasanantharaman-founderstory-activity-6791695735453835264-UGrx', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(38, 38, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_industryinspiretalks-inspirestories-kalpeshkabra-activity-6792428348921516032-yDX1', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(39, 39, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_tanvisualy-cofounder-womenfounders-activity-6794246080382038016-5Jj0', 1, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(40, 40, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_industryinspiretalks-inspirestories-sauravgandhi-activity-6795333208281088000-f8H3', 0, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(41, 40, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_industryinspiretalks-inspirestories-sauravgandhi-activity-6795333208281088000-f8H3', 0, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(42, 40, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_industryinspiretalks-inspirestories-sauravgandhi-activity-6795333208281088000-f8H3', 0, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(43, 40, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_industryinspiretalks-inspirestories-sauravgandhi-activity-6795333208281088000-f8H3', 0, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(44, 41, 'png', 'https://www.linkedin.com/posts/industry-inspire-talks_industryinspiretalks-inspirestories-piyushverma-activity-6796805418661355520-_IP5', NULL, '2021-07-13 17:22:37', '2021-07-13 17:22:37', NULL),
(45, NULL, NULL, 'https://www.linkedin.com/posts/industry-inspire-talks_career-achievements-technology-activity-6732266136710209536-SS8N', 0, '2021-07-14 00:58:48', '2021-07-14 00:58:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_ext` varchar(6) DEFAULT NULL,
  `coming_soon` tinyint(1) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `name`, `description`, `image_ext`, `coming_soon`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Interview Series', 'Interview series involves people who interned at companies & converted that internship opportunity into a full-time offer.', 'jpeg', 0, 0, '2021-07-13 17:55:28', '2021-07-14 01:24:36', NULL),
(2, 'Podcast Series', 'Podcasts Series involves professionals and  entrepreneurs with 5+ years of Industry experience  holding positions of Founder, MD, CEO, Managers  sharing their inspiring  industry experiences in our series.', 'jpeg', 0, 1, '2021-07-13 17:55:28', '2021-07-13 17:55:28', NULL),
(3, 'Career Stories', '', 'jpeg', 1, 1, '2021-07-13 17:55:28', '2021-07-13 17:55:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `designation` varchar(60) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `social_links` text DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image_ext` varchar(5) DEFAULT NULL,
  `date_of_joining` varchar(20) DEFAULT NULL,
  `date_of_leaving` varchar(20) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `contact`, `email`, `dob`, `social_links`, `nationality`, `address`, `image_ext`, `date_of_joining`, `date_of_leaving`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Omkar Shinde', 'Founder & CEO', '', '', '', '{     \"linkedin\" : \"https://www.linkedin.com/in/omkar-shinde-310aa5193/\",     \"facebook\":\"\",     \"twitter\":\"\",     \"instagram\":\"\",     \"google-plus\":\"\" }', '', '', 'png', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 08:56:37', NULL),
(2, 'Aman Sadique', 'Chief Operating Officer', NULL, NULL, NULL, '{     \"linkedin\" : \"https://www.linkedin.com/in/satya-prakash-mohapatra-153926129/\",     \"facebook\":\"\",     \"twitter\":\"\",     \"instagram\":\"\",     \"googlePlus\":\"\" }', NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 08:56:41', NULL),
(3, 'Vishal Nair', 'Chief People Officer', '', '', '', '{     \"linkedin\" : \"https://www.linkedin.com/in/vishalnairm/\",     \"facebook\":\"\",     \"twitter\":\"\",     \"instagram\":\"\",     \"googlePlus\":\"\" }', '', '', 'png', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 08:56:45', NULL),
(4, 'Danish Shaikh', 'Chief Technology Officer', '8655332519', 'shaikh.danish4444@gmail.com', '1999-01-04', '{     \"linkedin\" : \"https://www.linkedin.com/in/shaikhdanish04/\",     \"facebook\":\"\",     \"twitter\":\"\",     \"instagram\":\"\",     \"googlePlus\":\"\" }', 'Indian', NULL, 'png', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 08:56:48', NULL),
(5, 'Aditya Satish', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(6, 'Bhavana BP', 'Podcast Series Host', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(7, 'Shubhanshu Gupta', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(8, 'Ganesh Dubey', 'Front-End Developer', '', '', '', '', '', '', 'jpg', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(9, 'Tanmay Jadhav', 'Backend Developer', '', '', '', '', '', '', 'jpg', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(10, 'Omkar Desai', 'Front-End Developer', '', '', '', '', '', '', 'jpg', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(11, 'Khayati Shah', 'Social Media Specialist', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(12, 'Eshaan Chauhan', 'Marketing Manager', '', '', '', '', '', '', 'jpg', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(13, 'Ajinkya Sonawale', 'Backend Developer', '', '', '', '', '', '', 'jpg', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(14, 'Rinku Rupraj', 'Social Media Specialist', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(15, 'Yash Anchaliya', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(16, 'Bhavana BP', 'Podcast Series Host', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(17, 'Mohit Patil', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(18, 'Aditya Satish', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(19, 'Aditya Satish', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(20, 'Shashwat Mulgund', 'Graphic Designer', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(21, 'Deepanjali Tripathi', 'Front-End Developer', '', '', '', '', '', '', 'jpg', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(22, 'Soumya Bharati', 'UI/UX Designer', '', '', '', '', '', '', 'jpg', '', '', 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(23, 'Rahul Bharadia', 'Product Manager Intern', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(24, 'Vandana Mohture', 'Podcast Series Host', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(25, 'Aditya Satish', 'Product Manager Intern', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(26, 'Mitali Rajput', 'Marketing Manager Intern', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(27, 'Shruti Shirke', 'Marketing Manager Intern', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 0, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(28, 'Vinita Sharma', 'Marketing Executive', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(29, 'Mayur Thakur', 'Marketing Executive', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(30, 'Sameer Ansari', 'Marketing Executive', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(31, 'Shivam Shukla', 'Marketing Executive', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(32, 'Rutuja Rajhans', 'Web Developer', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1, '2021-07-13 14:16:21', '2021-07-13 14:16:21', NULL),
(33, 'Shoaib', 'Developer', '8655332518', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-07-13 08:46:32', '2021-07-13 08:50:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_old`
--

CREATE TABLE `staff_old` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `designation` varchar(60) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `social_links` text DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image_ext` varchar(5) DEFAULT NULL,
  `date_of_joining` varchar(20) DEFAULT NULL,
  `date_of_leaving` varchar(20) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_old`
--

INSERT INTO `staff_old` (`id`, `name`, `designation`, `contact`, `email`, `dob`, `social_links`, `nationality`, `address`, `image_ext`, `date_of_joining`, `date_of_leaving`, `visible`) VALUES
(1, 'Omkar Shinde', 'Founder & CEO', '', '', '', '{     \"linkedin\" : \"https://www.linkedin.com/in/omkar-shinde-310aa5193/\",     \"facebook\":\"\",     \"twitter\":\"\",     \"instagram\":\"\",     \"googlePlus\":\"\" }', '', '', 'png', '', '', 1),
(2, 'Aman Sadique', 'Chief Operating Officer', NULL, NULL, NULL, '{     \"linkedin\" : \"https://www.linkedin.com/in/satya-prakash-mohapatra-153926129/\",     \"facebook\":\"\",     \"twitter\":\"\",     \"instagram\":\"\",     \"googlePlus\":\"\" }', NULL, NULL, 'jpg', NULL, NULL, 1),
(3, 'Vishal Nair', 'Chief People Officer', '', '', '', '{     \"linkedin\" : \"https://www.linkedin.com/in/vishalnairm/\",     \"facebook\":\"\",     \"twitter\":\"\",     \"instagram\":\"\",     \"googlePlus\":\"\" }', '', '', 'png', '', '', 1),
(4, 'Danish Shaikh', 'Chief Technology Officer', '8655332519', 'shaikh.danish4444@gmail.com', '1999-01-04', '{     \"linkedin\" : \"https://www.linkedin.com/in/shaikhdanish04/\",     \"facebook\":\"\",     \"twitter\":\"\",     \"instagram\":\"\",     \"googlePlus\":\"\" }', 'Indian', NULL, 'png', NULL, NULL, 1),
(5, 'Aditya Satish', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0),
(6, 'Bhavana BP', 'Podcast Series Host', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0),
(7, 'Shubhanshu Gupta', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0),
(8, 'Ganesh Dubey', 'Front-End Developer', '', '', '', '', '', '', 'jpg', '', '', 1),
(9, 'Tanmay Jadhav', 'Backend Developer', '', '', '', '', '', '', 'jpg', '', '', 1),
(10, 'Omkar Desai', 'Front-End Developer', '', '', '', '', '', '', 'jpg', '', '', 1),
(11, 'Khayati Shah', 'Social Media Specialist', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 1),
(12, 'Eshaan Chauhan', 'Marketing Manager', '', '', '', '', '', '', 'jpg', '', '', 1),
(13, 'Ajinkya Sonawale', 'Backend Developer', '', '', '', '', '', '', 'jpg', '', '', 1),
(14, 'Rinku Rupraj', 'Social Media Specialist', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 1),
(15, 'Yash Anchaliya', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL, 0),
(16, 'Bhavana BP', 'Podcast Series Host', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 1),
(17, 'Mohit Patil', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 1),
(18, 'Aditya Satish', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0),
(19, 'Aditya Satish', 'Product Manager Intern', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0),
(20, 'Shashwat Mulgund', 'Graphic Designer', NULL, NULL, NULL, '', NULL, NULL, 'jpg', NULL, NULL, 0),
(21, 'Deepanjali Tripathi', 'Front-End Developer', '', '', '', '', '', '', 'jpg', '', '', 1),
(22, 'Soumya Bharati', 'UI/UX Designer', '', '', '', '', '', '', 'jpg', '', '', 1),
(23, 'Rahul Bharadia', 'Product Manager Intern', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 0),
(24, 'Vandana Mohture', 'Podcast Series Host', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1),
(25, 'Aditya Satish', 'Product Manager Intern', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1),
(26, 'Mitali Rajput', 'Marketing Manager Intern', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1),
(27, 'Shruti Shirke', 'Marketing Manager Intern', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 0),
(28, 'Vinita Sharma', 'Marketing Executive', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1),
(29, 'Mayur Thakur', 'Marketing Executive', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1),
(30, 'Sameer Ansari', 'Marketing Executive', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1),
(31, 'Shivam Shukla', 'Marketing Executive', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1),
(32, 'Rutuja Rajhans', 'Web Developer', NULL, NULL, NULL, NULL, NULL, NULL, 'jpg', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Tanmay', 'Jadhav', 'tanmay@gmail.com', NULL, '$2y$10$XkLdB0fFZimb3rPwgiN2YOjI7u60YE8IpOSnOotlCboAGXwLL175u', 'admin', NULL, '2020-12-22 11:49:17', '2020-12-22 11:49:17'),
(3, 'Admin', '', 'admin@industryinspiretalks.careers', NULL, '$2y$10$Ua7Hr2fcM4uZ9hODJqyvsuXghssQGZ106VlTpE/kxhvrNRaP71EQC', 'admin', NULL, '2020-12-23 07:54:18', '2020-12-23 07:54:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `industry_experts`
--
ALTER TABLE `industry_experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_leaders`
--
ALTER TABLE `industry_leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspire_classes`
--
ALTER TABLE `inspire_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspire_stories`
--
ALTER TABLE `inspire_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_old`
--
ALTER TABLE `staff_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industry_experts`
--
ALTER TABLE `industry_experts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industry_leaders`
--
ALTER TABLE `industry_leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `inspire_classes`
--
ALTER TABLE `inspire_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspire_stories`
--
ALTER TABLE `inspire_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `staff_old`
--
ALTER TABLE `staff_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
