-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 10:21 PM
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
  `industry` varchar(80) NOT NULL,
  `profile_image_ext` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id`, `name`, `company`, `role`, `industry`, `profile_image_ext`) VALUES
(1, 'Ritwik Deshpande', 'JP Morgan Chase & Co', 'Software Development Engineer', 'Financial Services', 'jpg'),
(2, 'Irin Banerjee', 'D.E Shaw & Co', 'Software Development Engineer', 'Financial Services', 'jpg'),
(3, 'Krishan Kumar', 'Dell', 'Ex-Software Development Engineer', 'Information Technology & Services', 'jpg'),
(4, 'Prakhar Chaturvedi', 'Sprinklr', 'Software Development Engineer', 'Information Technology & Services', 'jpg'),
(5, 'Rohan Thakur', 'Informatica', 'Associate Software Engineer', 'Computer Software', 'jpg'),
(6, 'Kritika Rupauliha', 'Microsoft', 'Software Engineer', 'Computer Software', 'jpg'),
(7, 'Harshit Singh', 'Amazon', 'Software Development Engineer', 'Internet', 'jpg'),
(8, 'Shivam Kataria', 'BNY Mellon', 'Software Developer', 'Financial Services', 'jpg'),
(9, 'Akshay Anand', 'redBus', 'Software Engineer', 'Internet', 'png'),
(10, 'Arpan Bhowmik', 'Samsung R&D', 'Senior Engineer', 'Consumer Electronics', 'jpg'),
(11, 'Raja Rahul', 'IBM', 'Software Development Engineer', 'Information Technology & Services', 'jpeg'),
(12, 'Yusuf Hassan', 'OneDirect', 'Product Manager', 'Information Technology & Services', 'jpeg'),
(13, 'Shashank Mishra', 'Amazon', 'Data Engineer', 'Internet', 'jpeg'),
(14, 'Pooja Sund', 'Microsoft', 'Director of Technology & Analytics', 'Computer Software', 'jpeg'),
(15, 'Varun Sud', 'CompTIA', 'Head of Academic Alliances', 'Information Technology & Services', 'jpeg'),
(16, 'Souhardya De', 'Rupa Publications', 'Indian Author', 'Publishing', 'jpeg'),
(17, 'Yudi J', 'EXL Healthcare', 'Software Team Manager', 'Healthcare Services', 'jpg'),
(18, 'Meraj Faheem', 'The Hacking School', 'Founder', 'E-Learning', 'jpeg'),
(19, 'Srikumar Nair', 'Microsoft', 'Principal Group Program Manager', 'Computer Software', 'jpeg'),
(20, 'Mrinal Jain', 'Wittyfeed', 'Front-End Engineer', 'Online Media', 'jpeg'),
(21, 'Suman Debnath', 'Amazon Web Services', 'Principal Developer Advocate', 'Information Technology & Services', 'jpeg'),
(22, 'Vandana Mohture', 'MindArt', 'Founder', 'Professional Training & Coaching', 'jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `logo_image_ext` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title`, `logo_image_ext`) VALUES
(1, 'JP Morgan Chase & Co', 'jpeg'),
(2, 'D.E Shaw & Co', 'png'),
(3, 'Dell', 'png'),
(4, 'Sprinklr', 'png'),
(5, 'Informatica', 'jpg'),
(6, 'Microsoft', 'png'),
(7, 'Amazon', 'jpg'),
(8, 'BNY Mellon', 'png'),
(9, 'redBus', 'png'),
(10, 'Samsung', 'png'),
(11, 'IBM', 'png'),
(12, 'Gojek', 'png'),
(13, 'PayPal', 'png'),
(14, 'NCR Corporation', 'png'),
(15, 'VISA', 'png'),
(16, 'EXL Healthcare', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` int(11) NOT NULL,
  `series_id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `series_id`, `title`, `link`) VALUES
(1, 2, 'Podcast Series with Yudi J - EP #1', 'https://www.youtube.com/embed/JBmUScGyOEg'),
(2, 1, 'Interview Series with Rahul - EP #11', 'https://www.youtube.com/embed/rHq1eU14wCs'),
(3, 1, 'Interview Series with Arpan - EP #10', 'https://www.youtube.com/embed/y5nfPq-rxfw'),
(4, 1, 'Interview Series with Akshay - EP #9', 'https://www.youtube.com/embed/4z7qbq4yAc8'),
(5, 1, 'Interview Series with Shivam - EP #8', 'https://www.youtube.com/embed/lUE84M_Dq78'),
(6, 1, 'Interview Series with Harshit - EP #7', 'https://www.youtube.com/embed/JAAwLHLUmu0'),
(7, 1, 'Interview Series with Kritika - EP #6', 'https://www.youtube.com/embed/jiQeFPvU_bI'),
(8, 1, 'Interview Series with Rohan - EP #5', 'https://www.youtube.com/embed/xLCOF7aCJ1U'),
(9, 1, 'Interview Series with Prakhar - EP #4', 'https://www.youtube.com/embed/vPXOKfKLlY'),
(10, 1, 'Interview Series with Krishan - EP #3', 'https://www.youtube.com/embed/XAf83l1wfFk'),
(11, 1, 'Interview Series with Irin - EP #2', 'https://www.youtube.com/embed/VhD_-5BVcxM'),
(12, 1, 'Interview Series with Ritwik - EP #1', 'https://www.youtube.com/embed/FkvVTTgj2y4');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `thumbnail_image_ext` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category`, `title`, `description`, `link`, `thumbnail_image_ext`) VALUES
(1, 'Industry Expo 2020', 'Path to Product Management', 'Welcome to Day 1 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready!  Yusuf Hassan is a Product Manager with a demonstrated ability to manage the entire product lifecycle - from ideation to deployment and post-deployment enhancements in an agile environment.Introduced QR codes on websites for a seamless payment experience. My area of expertise is to build and enhance products and features for higher customer retention, higher success rates, reduced frauds, and overall engaging experience for the consumer.', 'https://youtu.be/Zt8BhRS2vf0', 'png'),
(2, 'Industry Expo 2020', 'Career opportunities in Big Data', 'Welcome to Day 2 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Shashank Mishra is a Data Engineer for Amazon, Ex - McKinsey & Company, Ex - Paytm, Founder @ E-Learning Bridge. He is an experienced Data Engineer with a demonstrated history of working in the information technology and services industry. Skilled in BigData technologies and Data Visualization ( Hadoop, Spark, SparkStreaming, HBase, Hive, Sqoop, Kafka, Datastax Cassandra, Datastax Studio, ElasticSearch, Grafana, Kibana) with a good grasp of Java, Python, C++, Core Data Structures & Algorithms, Django, REST API, and Databases. Strong engineering professional with a Master of Computer Applications (M.C.A.) focused in Computer Science and Engineering from Motilal Nehru National Institute Of Technology, Allahabad (NIT Allahabad)  ', 'https://youtu.be/5C5cJSduemw', 'png'),
(3, 'Industry Expo 2020', 'Build your brand', 'Welcome to Day 3 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Pooja Sund is the Director-Technology & Analytics for Microsoft, Redmond, the USA with 14yrs+ of experience. She is an achievement-oriented finance and technology leader with solid credentials (Gold medalist and 2 times CFO Award winner). 15+ years of global experience in setting the vision, and the ability to execute on that vision by leading teams. An enthusiastic leader with deep technical and financial experience & proven ability to lead high-performing teams, build strong relationships, foster efficiency, and create an impact. I am the recipient of Highest Award for Leadership 2018, Dale Carnegie’s “Advanced Leadership Program”. She loves to make an impact by utilizing my brand of 3P: Passion for Technology, Data Analytics, Leadership and Business intelligence; Power to believe in myself and others, the power to keep ideating, fix things, create clarity, generate positive energy in teams; and lead people and teams to be successful.', 'https://youtu.be/04FokgmRk5o', 'png'),
(4, 'Industry Expo 2020', 'Your next move: Learn a new skill', 'Welcome to Day 4 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Varun is currently heading the Academic alliances for CompTIA in India, Srilanka, and Bangladesh. My role in CompTIA is to work with Academic institutions build a workforce capable of exploiting technical innovation, protect valuable information, and at the same time help address the scarcity of talent.', 'https://youtu.be/cGnlBjDBzuo', 'png'),
(5, 'Industry Expo 2020', 'Varied aspects of Indian Publishing Industry', 'Welcome to Day 5 of Industry Expo 2k20, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Souhardya De is an Indian author of Historical Fiction, a Columnist, and a Fellow of the Royal Asiatic Society of Great Britain and Ireland. Souhardya has authored bylines in The Sunday Guardian, The Citizen, WION, The Statesman, Thrive Global, Scroll Media, The Standard, TOI Blogs, The Hills Times, and other notable publications. He writes a fortnightly article on history, art, and culture at The Sunday Guardian and leads the editorial team for the BFF page by the Young Post, South China Morning Post, Hong Kong.  He intends to revitalize and invigorate the Indian art and culture, history, and mythological epics through his works and tries to author them in a way most appealing to the readers of today. Souhardya’s upcoming book is to be released with Rupa Publications India.  ', 'https://youtu.be/6j0tiLrXMV0', 'png'),
(6, 'Industry Connect', 'Path towards Student Entrepreneurship', 'Welcome to Day 1 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Meraj Faheem is a natural, hardcore and curious entrepreneur. A perfectionist who wants to ship first. His strength lies in planning an end to end growth and GTM strategies using organic, paid and technical solutions backed by data and analytics, and executing them to achieve exponential growth and ROI. He helps build products that sell themselves. Passionate about UX and customer success (you many call it customer support/servicing). He has mastered the art of people (both client and team) and product management.', 'https://youtu.be/vvj_DOImG9Q', 'png'),
(7, 'Industry Connect', 'Anyone can build apps - Industry Connect', 'Welcome to Day 2 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Srikumar Nair is a product leader with 15 years of experience across Cloud Services, IT Services, product engineering and manufacturing. Expertise in product and service lifecycle management. Motivated to drive strategic and technical solutions to real-world problems and needs of the customer.', 'https://youtu.be/GX8DLWavZEk', 'png'),
(8, 'Industry Connect', 'Introduction to Flutter', 'Welcome to Day 3 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Professionally Mrinal is a Front-End developer but he is passionate about Open Source and Web Technologies. Mozilla! He loves to volunteer, organize and/or speak at the events. The best source to find or contact him is on Facebook ;), sharing his knowledge and experience on web design & development. What does he do? - Creating events to get all other Mozillian together. - Spreading to the world about developer tools, Firefox, WebFwd & Firefox OS - Speaking at events and trying to connect both communities and getting more people involved in the Mozilla Project. He loves to speak about Developer tools, Firefox OS, and Community Evangelism.', 'https://youtu.be/zSWLbrKtOik', 'png'),
(9, 'Industry Connect', 'Code in Cloud', 'Welcome to Day 4 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Suman is Storage Professional, mostly focusing on Performance Engineering, System Testing, Quality Engineering and Solutioning. Worked with clients to evaluate technologies. Conduct Assessments/ Workshops/PoC, provide solution architecture. He is Storage and system performance engineer, focusing on raw and application-based performance benchmarking (like Oracle, MS SQL Server, MS Exchange Server, Storage Migration, Bootstrom, etc.), Storage QE professional, expertise on the system, regression and performance testing for various storage systems, especially on distributed storage systems, like IBM SVC and EMC VPLEX.', 'https://youtu.be/R3-HoFoIEew', 'png'),
(10, 'Industry Connect', 'Mastering Mindful Living', 'Welcome to Day 5 of Industry Connect, A 5-Day virtual event hosted with experts from the industry. Hope you have an amazing learning experience with us. Industry Inspire Talks are back again to equip you with the right dose of industry knowledge and scale-up your industry skills by making you industry-ready! Vandana is Mindset Coach, a Mentor, Facilitator, Speaker, Cheerleader. She is passionate about helping people see the best in themselves and others. She believes that we all are here with a purpose and if we live a life of purpose, we are sure to stay committed, feel fulfilled and attain our highest potential. She enjoys working with groups and individuals to achieve this and open up the possibilities that exist for them. She coaches from a state of curiosity, asking powerful questions that facilitate their thinking and help them create a solution-focused outcome. She plays the role of a coach, a mentor, a facilitator and a cheerleader championing them all through their journey.', 'https://youtu.be/wbxPZvBxH7s', 'png');

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
-- Table structure for table `industry_leaders`
--

CREATE TABLE `industry_leaders` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  `company` varchar(40) NOT NULL,
  `profile_image_ext` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry_leaders`
--

INSERT INTO `industry_leaders` (`id`, `name`, `position`, `company`, `profile_image_ext`) VALUES
(1, 'Dr. Sneha Rakesh', 'Managing Director', 'Akarmaxs Tech', 'jpeg'),
(2, 'Paras Pundir', 'Program Manager', 'Microsoft', 'jpeg'),
(3, 'Srikumar Nair', 'Principal Group Program Manager', 'Microsoft', 'jpeg'),
(4, 'Satya Prakash Mohapatra', 'Corporate  HR Manager', 'Tata Projects', 'jpeg'),
(5, 'Vandana Mohture', 'Founder', 'MindArt', 'jpeg'),
(6, 'Rabiah Bhatia', 'Co-Founder', 'AIBA', 'jpeg'),
(7, 'Jitesh Khanna', 'Entrepreneur', '', 'jpeg'),
(8, 'Mahesh Wagh', 'Founder & CEO', 'Ekeeda.com', 'jpeg'),
(9, 'Bhavana BP', 'Founder & CEO', 'Let Me Listen', 'jpeg'),
(10, 'Shashank Mishra', 'Data Engineer', 'Amazon', 'jpeg'),
(11, 'Devan Bhalla', 'Deputy General Manager', 'Amar Ujala', 'jpeg'),
(12, 'Vishal Nair', 'Vice President', 'Atna Technologies', 'jpeg'),
(13, 'Sampark Sachdeva', 'Founder & CEO', 'SamparkSeSampark', 'jpeg'),
(14, 'Sayee Bhvaneswari', 'Founder ', 'Meraki Consulting', 'jpeg'),
(15, 'Kirupakar S', 'South India Head', 'Neo', 'jpeg'),
(16, 'Lokesh Sathya', 'Co-Founder & Director', 'Milkydelight', 'jpeg'),
(17, 'Jyothi Noronha', 'Co-Founder & CEO', 'NeeliTech', 'jpeg'),
(18, 'Nikita Gupta', 'Founder', 'FAANGPath', 'jpeg'),
(19, 'Vikas Dua', 'Chief HR Mentor', 'Attayn', 'jpeg'),
(20, 'Logesh Velsamy', 'Founder & CEO', 'Effitrac Solutions', 'jpeg'),
(21, 'Shalaka Verma', 'Director - Partner Technology', 'Microsoft', 'jpeg'),
(22, 'Linda Thackeray', 'Director - The Garage', 'Microsoft', 'jpeg'),
(23, 'Vani Sengupta', 'Director - Human Resources', 'The Westin Chennai Velachery', 'jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `inspire_stories`
--

CREATE TABLE `inspire_stories` (
  `id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `post_image_ext` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspire_stories`
--

INSERT INTO `inspire_stories` (`id`, `leader_id`, `post_image_ext`) VALUES
(1, 1, 'jpeg'),
(2, 2, 'jpeg'),
(3, 3, 'jpeg'),
(4, 4, 'jpeg'),
(5, 5, 'jpeg'),
(6, 6, 'jpeg'),
(7, 7, 'jpeg'),
(8, 8, 'jpeg'),
(9, 9, 'jpeg'),
(10, 10, 'jpeg'),
(11, 11, 'jpeg'),
(12, 12, 'jpeg'),
(13, 13, 'jpeg'),
(14, 14, 'jpeg'),
(15, 15, 'jpeg'),
(16, 16, 'jpeg'),
(17, 17, 'jpeg'),
(18, 18, 'jpeg'),
(19, 19, 'jpeg'),
(20, 20, 'jpeg'),
(21, 21, 'jpeg'),
(22, 22, 'jpeg'),
(23, 23, 'jpeg');

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
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `image_ext` varchar(6) NOT NULL,
  `coming_soon` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `name`, `description`, `image_ext`, `coming_soon`) VALUES
(1, 'Interview Series', 'Interview series involves people who interned at companies & converted that internship opportunity into a full-time offer.', 'jpeg', 0),
(2, 'Podcast Series', 'Podcasts Series involves people with 5-10 years of Industry Experience who hold big positions at companies like Founder, MD, CEO, Managers, etc sharing their industry experiences in our series.', 'jpeg', 0),
(3, 'Careers', '', 'jpeg', 1);

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
  `profile_image_ext` varchar(5) NOT NULL,
  `date_of_joining` varchar(20) NOT NULL,
  `date_of_leaving` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `contact`, `email`, `dob`, `social_links`, `nationality`, `address`, `profile_image_ext`, `date_of_joining`, `date_of_leaving`) VALUES
(1, 'Omkar Shinde', 'Founder & CEO', '', '', '', '', '', '', 'png', '', ''),
(2, 'Satya Prakash Mohapatra', 'Chief Marketing Officer', '', '', '', '', '', '', 'jpeg', '', ''),
(3, 'Vishal Nair', 'Chief People Officer', '', '', '', '', '', '', 'png', '', ''),
(4, 'Danish Shaikh', 'Chief Technology Officer', '', '', '', '', '', '', 'png', '', ''),
(5, 'Amrita Bhattacharjee', 'Program Manager', '', '', '', '', '', '', 'jpg', '', ''),
(6, 'Joseph Nssien', 'Program Manager', '', '', '', '', '', '', 'jpg', '', ''),
(7, 'Muneeb Ahmed', 'Community Manager', '', '', '', '', '', '', '', '', ''),
(8, 'Ganesh Dubey', 'Front-End Developer', '', '', '', '', '', '', 'jpg', '', ''),
(9, 'Tanmay Jadhav', 'Backend Developer', '', '', '', '', '', '', 'jpg', '', ''),
(10, 'Omkar Desai', 'Front-End Developer', '', '', '', '', '', '', '', '', ''),
(11, 'Himanshi Lodha', 'Program Manager', '', '', '', '', '', '', '', '', ''),
(12, 'Eshaan Chauhan', 'Marketing Manager', '', '', '', '', '', '', 'jpg', '', ''),
(13, 'Ajinkya Sonawale', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(14, 'Aayush Vishnoi', 'Front-End Developer', '', '', '', '', '', '', '', '', ''),
(15, 'Rihen Vora', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(16, 'Karan Sawant', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(17, 'Asish Mohapatra', 'Backend Developer', '', '', '', '', '', '', '', '', ''),
(18, 'Varad Gaidhani', 'Community Manager', '', '', '', '', '', '', 'jpg', '', ''),
(19, 'Ali Asgar Tinwala', 'Graphic Design Head', '', '', '', '', '', '', 'jpg', '', ''),
(20, 'Shashwat Mulgund', 'Graphic Designer', '', '', '', '', '', '', 'jpg', '', ''),
(21, 'Deepanjali Tripathi', 'Front-End Developer', '', '', '', '', '', '', 'jpg', '', '');

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
(3, 'asd', 'adas', 'abc@gmail.com', NULL, '$2y$10$Ua7Hr2fcM4uZ9hODJqyvsuXghssQGZ106VlTpE/kxhvrNRaP71EQC', 'admin', NULL, '2020-12-23 07:54:18', '2020-12-23 07:54:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community`
--
ALTER TABLE `community`
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
-- Indexes for table `industry_leaders`
--
ALTER TABLE `industry_leaders`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `industry_leaders`
--
ALTER TABLE `industry_leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `inspire_stories`
--
ALTER TABLE `inspire_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
