-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2024 at 02:40 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niagaped_Innovatio`
--

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `certification_id` int(11) NOT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `certName` varchar(255) DEFAULT NULL,
  `validity` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`certification_id`, `profile_id`, `certName`, `validity`, `email`) VALUES
(15, 8, 'gHH', '2024-01-23', 'thevan@gmail.com'),
(17, 8, 'c', '2024-01-26', 'thevan@gmail.com'),
(18, 8, 'jjhj', '2030-03-21', 'thevan@gmail.com'),
(20, 8, 'vzv', '2024-01-23', 'thevan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `eventDescription` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `eventName`, `category`, `eventDescription`, `date`, `time`, `venue`, `user_id`, `feedback`, `filepath`) VALUES
(1, 'Sparkling Gala Night', 'Competition/Scholarship', 'to give a chance for your style grows', '2023-12-06', '16:04:10', 'Selangor', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', 'uploads/YV.jpeg'),
(2, 'Tech Innovators Expo', 'Volunteer', 'This is Roy activity', '2023-12-05', '10:07:12', 'UTM', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', ''),
(4, 'Wellness Retreat', 'Internship', 'Experience share market at your fingertips with TICK PRO stock investment mobile trading app', '2023-12-07', '16:00:00', 'Cyberjaya, Selangor', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', ''),
(5, 'Start Up Project', 'Competition/Scholarship', 'Experience share market at your fingertips with TICK PRO stock investment mobile trading app', '2023-12-06', '18:15:00', 'Cyberjaya, Selangor', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', ''),
(6, 'Compfair', 'Program/Activities', 'This is a event about......', '2023-12-06', '10:20:00', 'N28a', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', ''),
(7, 'Midnight Masquerade', 'Program/Activities', 'This is a event about......', '2023-12-22', '10:55:00', 'UTM', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', ''),
(8, 'Start Up Project', 'Program/Activities', 'This is a event about......', '2023-12-11', '10:04:00', 'Cyberjaya, Selangor', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', ''),
(9, 'YV Fair', 'Program/Activities', 'This is a event about......', '2023-12-21', '10:50:00', 'UTM', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', ''),
(10, 'Jazz in the Park', 'Part Time', 'This is a event about......', '2023-12-19', '12:10:00', 'Cyberjaya, Selangor', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', ''),
(11, 'Global Health Summit', 'Part Time', 'Love the Earth', '2023-12-19', '12:10:00', 'Kuala Lumpur', 19, '', ''),
(12, 'Adventure Quest Challenge', 'Volunteer', 'Feel the adventure', '2023-12-19', '12:50:00', 'hghgh', 19, '', ''),
(13, 'Artisan Craft Fair', 'Competition/Scholarship', 'Art is life', '2023-12-06', '12:55:00', 'UTM', 19, '', ''),
(14, 'Culinary Delights Showcase', 'Part Time', 'This is a event about......', '2023-12-31', '20:14:00', 'Kuala Lumpur', 19, '', ''),
(15, 'Starry Night Charity Ball', 'Competition/Scholarship', 'This event open to all UTM students', '2023-12-20', '10:30:00', 'UTM', 19, '', ''),
(16, 'Coding competition', 'Competition/Scholarship', 'This event open to all UTM students', '2023-12-20', '10:30:00', 'UTM', 19, '', ''),
(17, 'Sustainable Living Workshop', 'Program/Activities', 'This event open to all UTM students', '2023-12-20', '10:30:00', 'UTM', 19, '', ''),
(18, '123 competition', 'Bootcamp/Workshop', 'This is a event about......', '2023-12-09', '12:00:00', 'MMU Melaka', 19, '', ''),
(19, 'Cultural Fusion Festival', 'Bootcamp/Workshop', 'This is a event about......', '2023-12-14', '23:02:00', 'MMU Melaka', 19, '', ''),
(20, 'Mindfulness Meditation Retreat', 'Competition/Scholarship', 'This event open to all UTM students', '2023-12-01', '23:09:00', 'MMU Melaka', 19, '', ''),
(21, 'Nature Talk', 'Program/Activities', 'This event open to all UTM students', '2023-12-27', '23:30:00', '123 workshop', 19, '', ''),
(22, 'Fast typing Competition', 'Program/Activities', 'This event for UTM students', '2024-01-01', '06:25:00', 'UTM', 19, '', ''),
(23, 'Virtual Reality Experience Expo', 'Program/Activities', 'This event for UTM students', '2024-01-01', '06:25:00', 'UTM', 19, '', ''),
(24, 'Future of Finance Forum', 'Program/Activities', 'This event for UTM students', '2024-01-01', '06:25:00', 'UTM', 19, '', ''),
(25, 'Science and Technology Symposium', 'Program/Activities', 'This event for UTM students', '2024-01-01', '06:25:00', 'UTM', 19, '', ''),
(26, 'Fast typing Competition', 'Program/Activities', 'This event for UTM students', '2024-01-01', '06:25:00', 'UTM', 19, '', ''),
(27, 'Gala Night', 'Part Time', 'pp', '2024-01-16', '07:08:00', 'p', 19, '', ''),
(28, 'Cesco', 'Program/Activities', 'Event', '2024-01-13', '02:50:00', 'Pahang', 19, '', ''),
(30, 'Cesco', 'Program/Activities', 'We love it', '2024-01-11', '14:29:00', 'Pahang', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', 'uploads/YV.jpeg'),
(31, 'Bola Tampar', 'Competition/Scholarship', 'Volleyball tournament', '2024-01-19', '11:20:00', 'Kolej Matrikulasi Johor', 19, 'https://docs.google.com/forms/d/1uXV9hhsKVscj_ctkB7BTgpej04ZrmhXncfgSCEo2hwU/prefill', 'uploads/DSC_0932.JPG'),
(32, 'Bola Tampar', 'Competition/Scholarship', 'Volleyball tournament', '2024-01-19', '11:20:00', 'Kolej Matrikulasi Johor', 19, 'https://docs.google.com/forms/d/1uXV9hhsKVscj_ctkB7BTgpej04ZrmhXncfgSCEo2hwU/prefill', 'uploads/DSC_0932.JPG'),
(33, 'Bola Tampar', 'Competition/Scholarship', 'Volleyball tournament', '2024-01-19', '11:20:00', 'Kolej Matrikulasi Johor', 19, 'https://docs.google.com/forms/d/1uXV9hhsKVscj_ctkB7BTgpej04ZrmhXncfgSCEo2hwU/prefill', 'uploads/DSC_0932.JPG'),
(34, 'Compfair 2021', 'Part Time', 'Try the adventure of being a nerd', '2024-01-01', '13:00:00', 'UTM, Skudai', 19, 'https://forms.gle/XE1zuHSXycB7zAox7', ''),
(35, 'Cesco', 'Volunteering', 'This is event description', '2024-01-25', '12:18:00', 'johor', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', 'uploads/youthventuresasia_logo.jpeg'),
(36, 'YV gala', 'Program/Activities', 'MMU Melaka', '2024-01-18', '12:22:00', 'zCybrr', 19, 'https://docs.google.com/forms/d/e/1FAIpQLSdv_IakApqB6FAAzrLuQfOT7dWCIvaMrxKrsO324P6NnG2DXw/viewform?usp=sf_link', 'uploads/2.png');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `jobtitle` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `profile_id`, `jobtitle`, `company`, `from_date`, `to_date`, `email`) VALUES
(18, 8, 'Junior developer', 'Huawei', '2023-12-27', '2024-01-30', 'thevan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `client_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `invitation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`client_id`, `event_id`, `invitation_date`) VALUES
(2, 1, '2024-01-15'),
(2, 2, '2024-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `option_skill`
--

CREATE TABLE `option_skill` (
  `skill_id` int(11) NOT NULL,
  `skillName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `option_skill`
--

INSERT INTO `option_skill` (`skill_id`, `skillName`) VALUES
(1, 'Copywriting in English'),
(2, 'Copywriting in Bahasa Malaysia'),
(3, 'Copywriting in Mandarin'),
(4, 'Copywriting in Tamil'),
(5, 'Public Speaking in English'),
(6, 'Public Speaking in Bahasa Malaysia'),
(7, 'Public Speaking in Mandarin'),
(8, 'Public Speaking in Tamil'),
(9, 'Videography'),
(10, 'Photography'),
(11, 'Animation'),
(12, 'App development (web)'),
(13, 'App development (iOS)'),
(14, 'App development (android)'),
(15, 'Website development'),
(16, 'Hardware development'),
(17, 'Digital marketing'),
(18, 'Social Media marketing'),
(19, 'SEO/SEM'),
(20, 'Corporate communication'),
(21, 'Public relation'),
(22, 'Sales'),
(23, 'Customer service'),
(24, 'Physical event management'),
(25, 'Project management'),
(26, 'Social media management'),
(27, 'Content creation (youtube)'),
(28, 'Content creation (facebook)'),
(29, 'Content creation (tiktok)'),
(30, 'Content creation (instagram)'),
(31, 'Content creation (twitter)'),
(32, 'Woodwork'),
(33, 'Arts and craft'),
(34, 'Creative content'),
(35, 'Music composition'),
(36, 'Music instrument'),
(37, 'Research'),
(38, 'Accounting'),
(39, 'Singing'),
(40, 'Acting'),
(41, 'Emcee/Host'),
(42, 'Teach');

-- --------------------------------------------------------

--
-- Table structure for table `option_software_skill`
--

CREATE TABLE `option_software_skill` (
  `softwareSkill_id` int(11) NOT NULL,
  `softwareSkillName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `option_software_skill`
--

INSERT INTO `option_software_skill` (`softwareSkill_id`, `softwareSkillName`) VALUES
(1, 'Instagram'),
(2, 'Facebook'),
(3, 'Tiktok'),
(4, 'Twitter'),
(5, 'Youtube'),
(6, 'Zoom'),
(7, 'Microsoft Teams'),
(8, 'Meet'),
(9, 'OBS'),
(10, 'Google Drive'),
(11, 'Google Sheet'),
(12, 'Google Docs'),
(13, 'Google form'),
(14, 'Google Site'),
(15, 'Adobe Photoshop'),
(16, 'Adobe Illustrator'),
(17, 'Adobe After Effect'),
(18, 'Adobe Premier Pro'),
(19, 'Adobe Dreamweaver'),
(20, 'Canva'),
(21, 'Inshot'),
(22, 'Wordpress'),
(23, 'Airtable'),
(24, 'Shopify'),
(25, 'Wix'),
(26, 'Facebook Ads'),
(27, 'Instagram Ads'),
(28, 'Lazada'),
(29, 'Shopee'),
(30, 'Ebay'),
(31, 'Amazon'),
(32, 'Mudah.my'),
(33, 'Carousell'),
(34, 'Orderla.my'),
(35, 'Yezza.io'),
(36, 'Bubble.io'),
(37, 'Notion'),
(38, 'Tableau'),
(39, 'PostgreSQL'),
(40, 'Firebase'),
(41, 'Android Studio'),
(42, 'Xcode'),
(43, 'Flutter'),
(44, 'ARKit'),
(45, 'Amazon Web Services'),
(46, 'Hubspot'),
(47, 'Mailchimp'),
(48, 'Adobe XD'),
(49, 'Sketch'),
(50, 'Proto.io'),
(51, 'Webflow'),
(52, 'Raspeberry Pi'),
(53, 'Arduino');

-- --------------------------------------------------------

--
-- Table structure for table `partnerclient`
--

CREATE TABLE `partnerclient` (
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `companyDescription` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `officeNum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pr_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partnerclient`
--

INSERT INTO `partnerclient` (`client_id`, `user_id`, `companyName`, `companyDescription`, `city`, `country`, `officeNum`, `email`, `pr_image`) VALUES
(2, 22, 'Petronas Sdn Bhd', 'This is Petronas Account', 'Muar', 'Malaysia', '013-2807996', 'petronas@gmail.com', 'images/users/Petronas/65a4f038cb75b7.88809595.png'),
(3, 24, 'Partner Company', 'This is partner', 'Muar', 'Malaysia', '123-456789', 'partner@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `register_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `dream` text NOT NULL,
  `passion` text NOT NULL,
  `hiddenTalent` text NOT NULL,
  `presentStatus` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `internshipYear` varchar(255) NOT NULL,
  `graduationYear` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `archieveGoal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register_id`, `event_id`, `profile_id`, `dream`, `passion`, `hiddenTalent`, `presentStatus`, `institution`, `internshipYear`, `graduationYear`, `goal`, `archieveGoal`) VALUES
(1, 2, 4, 'to be alive', 'to remember how to breath', 'Breathing', 'Full Time Study', 'UTM', '2026', '2027', 'Being data engineers', 'Surviving the course'),
(2, 5, 4, 'to be alive', 'to remember how to breath', 'Breathing', 'Full Time Study', 'UTM', '2026', '2027', 'Being data engineers', 'Surviving the course'),
(3, 1, 4, 'to be alive', 'to remember how to breath', 'Breathing', 'Full Time Study', 'UTM', '2026', '2027', 'Being data engineers', 'Surviving the course'),
(4, 3, 4, 'to be alive', 'to remember how to breath', 'Breathing', 'Full Time Study', 'UTM', '2026', '2027', 'Being data engineers', 'Surviving the course'),
(5, 1, 11, 'To be a data engineer', 'developing softwares', 'coding', 'Full Time Study', 'Universiti Teknologi Malaysia', '2026', '2027', 'To be the best version of me', 'Achieve new things even if it small'),
(6, 33, 1, 'Dream to be a meaningful human', 'None', 'None', 'Full Time Study', 'UTM', '2026', '2027', 'None', 'None'),
(7, 1, 1, 'Dream to be a meaningful human', 'None', 'None', 'Full Time Study', 'UTM', '2026', '2027', 'None', 'None'),
(8, 11, 1, 'Dream to be a meaningful human', 'None', 'None', 'Full Time Study', 'UTM', '2026', '2027', 'None', 'None'),
(9, 6, 1, 'Dream to be a meaningful human', 'None', 'None', 'Full Time Study', 'UTM', '2026', '2027', 'None', 'None'),
(11, 1, 12, 'My dream is to be a pilot', 'My passion is to cooking', 'My hidden talent is drawing', 'Part Time Study', 'UTM', '2026', '2027', 'I hope to own a coffee shop', 'I will study hard'),
(12, 36, 1, 'Dream to be a meaningful human', 'None', 'None', 'Full Time Study', 'UTM', '2026', '2027', 'None', 'None'),
(13, 31, 1, 'Dream to be a meaningful human', 'None', 'None', 'Full Time Study', 'UTM', '2026', '2027', 'None', 'None'),
(14, 8, 1, 'Dream to be a meaningful human', 'adft', 'None', 'Full Time Study', 'UTM', '2026', '2027', 'None', 'None'),
(15, 1, 8, 'to become billionaire', 'i passionate about travelling', 'Im good in drawing.', 'Part Time Study', 'UTM', '2025', '2026', 'I will be ceo of a company', 'I will innovate something cool'),
(16, 10, 11, 'To be a data engineer', 'developing softwares', 'coding', 'Full Time Study', 'Universiti Teknologi Malaysia', '2026', '2027', 'To be the best version of me', 'Achieve new things even if it small'),
(17, 2, 8, 'to become billionaire', 'i passionate about travelling', 'Im good in drawing.', 'Part Time Study', 'UTM', '2025', '2026', 'I will be ceo of a company', 'I will innovate something cool'),
(18, 1, 14, 'ytregfd', 'gfd', 'Breathing', 'Part Time Study', 'UTM', '2026', '2027', 'hgfhgfd', 'gfd');

-- --------------------------------------------------------

--
-- Table structure for table `rewardnbadge`
--

CREATE TABLE `rewardnbadge` (
  `badge_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `goldBadge` int(11) NOT NULL,
  `silverBadge` int(11) NOT NULL,
  `bronzeBadge` int(11) NOT NULL,
  `claimStatus` tinyint(4) DEFAULT NULL,
  `dateAwarded` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rewardnbadge`
--

INSERT INTO `rewardnbadge` (`badge_id`, `event_id`, `profile_id`, `goldBadge`, `silverBadge`, `bronzeBadge`, `claimStatus`, `dateAwarded`) VALUES
(1, 0, 1, 3, 1, 3, NULL, NULL),
(2, 0, 3, 0, 0, 0, NULL, NULL),
(3, 0, 5, 0, 0, 0, NULL, NULL),
(4, 0, 7, 0, 0, 0, NULL, NULL),
(5, 0, 9, 0, 0, 0, NULL, NULL),
(6, 0, 4, 2, 1, 0, NULL, NULL),
(7, 0, 6, 0, 0, 0, NULL, NULL),
(8, 0, 8, 1, 1, 0, NULL, NULL),
(9, 0, 11, 1, 1, 0, 1, '2024-01-20'),
(10, 0, 14, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `profile_id`) VALUES
(2, 1),
(5, 4),
(24, 11),
(27, 11),
(41, 11),
(2, 0),
(3, 0),
(5, 0),
(1, 12),
(2, 12),
(4, 8),
(12, 8),
(5, 14);

-- --------------------------------------------------------

--
-- Table structure for table `softwareskill`
--

CREATE TABLE `softwareskill` (
  `softwareSkill_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `softwareskill`
--

INSERT INTO `softwareskill` (`softwareSkill_id`, `profile_id`) VALUES
(1, 1),
(5, 4),
(3, 0),
(4, 0),
(5, 0),
(1, 12),
(2, 12),
(3, 12),
(1, 8),
(2, 11),
(2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNum` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `education` varchar(255) DEFAULT NULL,
  `course` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`profile_id`, `user_id`, `name`, `email`, `phoneNum`, `DOB`, `gender`, `race`, `education`, `course`, `city`, `country`, `bio`, `image`) VALUES
(1, 14, 'Wan Nur Sofea', 'wnsofea@gmail.com', '013-2807791', '2003-02-01', 'Female', 'Malay', 'UTM', 'Data Engineering', 'Bandar Baru Bangi', 'Malaysia', 'Just chillin', 'images/users/wannursofea/65a35c16b6ca47.78509872.png'),
(4, 15, 'Low Ying Xi', 'yingxi@gmail.com', '011-10511399', '2003-06-29', 'Female', 'Chinese', 'UIAM', 'Data Engineering', 'Muar', 'Malaysia', 'Hi This is my profile', 'images/users/yingxi/65a364b87d96d7.95928688.jpg'),
(6, 16, 'Muhammad Danial Bin Ahmad Syahir', 'danial@gmail.com', '013-3820326', '2003-07-27', 'Male', 'Malay', '', 'Data Engineering', '', '', '', ''),
(8, 17, 'Thevan Raju A/L Jeganath', 'thevan@gmail.com', '011-1095737', '2003-04-25', 'Male', 'Indian', 'UTM', 'Data Engineering', 'Gelang Patah', 'Malaysia', 'Hardworking', 'images/users/thevan/65a3d032c4b0d1.49387984.png'),
(9, 18, 'Wan Muhammad Izzan Bin Mohd Hasbullah', 'izzan@gmail.com', '018-9745266', '2001-04-17', 'Male', 'Malay', 'UIAM', 'Accounting', 'bbb', 'malaysia', '', 'images/users/izzan/65a4b0625fa366.49164051.jpeg'),
(10, 20, 'Ali bin Abu', 'ali@gmail.com', '013-23456789', '2004-01-01', 'Male', 'Malay', 'UTM', 'Accounting', 'Shah Alam', 'Malaysia', 'Thrive the best while you&#39;re still breathing', 'images/users/aliyouth/65a69d1ac190d3.65435152.jpeg'),
(11, 21, 'Fatimah', 'fatimah@gmail.com', '012-3456789', '2003-01-14', 'Female', 'Chinese', 'USIM', 'Software Engineering', 'Johor Bahru', 'Malaysia', 'Just chillin hehe', 'images/users/Fatimah/65b9a5ee2fc363.94311899.jpg'),
(12, 23, 'John', 'John@gmail.com', '012-3456789', '2024-01-24', 'Male', 'Chinese', NULL, 'Bachelor of Management', NULL, '', '', ''),
(13, 25, 'Full Name', 'Anonymous@gmail.com', '012-1234567', '2024-01-15', 'Male', 'Others', '', 'Data Engineering', '', '', '', ''),
(14, 26, 'Ikmal', 'ikmal@gmail.com', '013-23456789', '2024-01-18', 'Male', 'Malay', '', 'Account', '', '', '', ''),
(15, 29, '', 'yh@gmail.com', '', '0000-00-00', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_reg_status` varchar(255) NOT NULL,
  `datetime_register` datetime DEFAULT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expired` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `user_role`, `user_reg_status`, `datetime_register`, `reset_token_hash`, `reset_token_expired`) VALUES
(1, '2dddwd', 'ying080@gmail.com', '123', '', '', NULL, NULL, NULL),
(2, 'yingxi', 'yingxi0805@gmail.com', '$2y$10$XffQmzqR0YsrEKKhfo4KH..JRA0MvjkJHCVkobqGCbNn9hmfg8tGC', 'Student', 'active', NULL, '27a6435689dbbefc14a05292f5f6ba9bdc7d47af73597063af1e20691cb49c26', '2024-01-30 11:03:04'),
(3, 'wendy', 'lowxi@graduate.utm.my', '$2y$10$ncLLgWu1SHtMg8.ithH7NOlMnYL6wymnFXHrBI8VmjGg8j8UDL4EC', '', '', NULL, '4ccd049509ed1519f5b0e925540c9b05a4df25e9edbddcb42d0c5f1878b5c331', '2024-01-13 17:14:28'),
(5, 'yingXi123', 'yxyx@gmail.com', '$2y$10$WkGr6eocYW.0qOF5MGbqFerRj8bmPcn5Y.L.hcOF5W0knm03vXhh6', 'Student', 'active', '2024-01-13 03:51:41', NULL, NULL),
(6, 'lowxi123', 'low@gmail.com', '$2y$10$hd3iWgoy/77zpzainMvT2.4vT29SU2dQzm4qfNOOc5vVWCopHmsdW', 'Student', 'active', '2024-01-13 05:49:52', NULL, NULL),
(7, 'JiaHeng01', 'LJH@gmail.com', '$2y$10$RWd1J47zmYKa14gQKnt6z.jb1otCgFZmXCMTNG7dd50dQRPz0RjPK', 'Student', 'active', '2024-01-13 07:39:56', NULL, NULL),
(9, 'Shell01', 'shell01@gmail.com', '$2y$10$z3Yk7NQZJumq/G05BqE7h.Bs5YXiW4c.beFaO2YrF98sHStaQYEDq', 'Partner', 'active', '2024-01-13 10:27:41', NULL, NULL),
(10, 'James2003', 'James@gmail.com', '$2y$10$okEYl72JJvpRK3C2D8IxxeZzurBbTNJ2IJQInQ3NEuis3A9nEiznq', 'Student', 'active', '2024-01-13 10:40:08', NULL, NULL),
(11, 'Milo1213', 'milo@gmail.com', '$2y$10$TqHejpUi5NFfSHifDF/7mexUMzlAMLE2jjIb3W3xnlZH85Nq2pR9K', 'Partner', 'active', '2024-01-13 10:41:43', '56bcbeaf3d0231c41404fdd1315f8f08c9a160594790ab8dee2a3070b6138664', '2024-01-13 08:27:25'),
(12, 'ivansofea3', 'wnsofea123@gmail.com', '$2y$10$usKqbgAS./dT5cgcowGqKubDv2FhwgRY.9K9YTipyJb3aXY.53mwq', '', '', NULL, '2965f514952575ba54df97f592e9fd265529b3b6f5043a931bea5b0e9a206df5', '2024-01-16 13:15:18'),
(13, 'wannursofea', 'wannursofea@gmail.com', '$2y$10$5o2ug7P6m5grvXko9jESaeblo4O3Oq1s/adCh3oqcine1gwr5yKBW', 'Student', 'active', '2024-01-14 02:02:15', NULL, NULL),
(14, 'wannursofea', 'wnsofea@gmail.com', '$2y$10$BAdhZISurWBU.Us4G4Z9nOqvtjAHOSh4PNqJgR7CW35JIdBPweqp6', 'Student', 'active', '2024-01-14 03:27:11', NULL, NULL),
(15, 'yingxi', 'yingxi@gmail.com', '$2y$10$cYkFrNtQ76FP6qghBAHcy.LsJ9z4uH3Lt6.m3ixsbgid6QWqlRn8i', 'Student', 'active', '2024-01-14 09:36:31', NULL, NULL),
(16, 'danial', 'danial@gmail.com', '$2y$10$7dlG.O1DF578R.neXPRdV.KM7W4Nkmkcbb9aOSYaYYoqhR9kvibCC', 'Student', 'active', '2024-01-14 09:41:19', NULL, NULL),
(17, 'thevan', 'thevan@gmail.com', '$2y$10$busqNIR9iYNZ3oewOyBYJeOv0aiF4Lds/NJ.qUxiiXGZOfM9ffvUW', 'Student', 'active', '2024-01-14 09:49:26', 'b89d655ed646f867105c9fe5fe4916e916a01b5b9e86d2d355e64ac6944fa9b9', '2024-01-24 00:59:58'),
(18, 'izzan', 'izzan@gmail.com', '$2y$10$cl4nRLv/ehG2WcJSr9Dzz.hMKCz2is8UlAgWbRN2ooEBXiyPj0x4G', 'Student', 'active', '2024-01-14 09:52:49', '21796d113f63a03baffbeff3fdc037465981381e136c6a1718faaa07bab65c4e', '2024-01-16 13:14:06'),
(19, 'adminYV', 'YouthVenture@gmail.com', '$2y$10$J9mniEgnAW102xCb6gc6yOQnY8oECiifqilMAv23MBphTK7vain7a', 'Admin', 'active', '2024-01-14 16:54:01', NULL, NULL),
(20, 'aliyouth', 'ali@gmail.com', '$2y$10$wLyZRB7ZP.M9U5Hvb/KuA.3taC8ACWn5dAsf9kt6VJVXPmKQhM9YS', 'Student', 'active', '2024-01-14 20:41:40', NULL, NULL),
(21, 'Fatimah', 'fatimah@gmail.com', '$2y$10$5Pe3GCRuOcGaHfcTcSNaqu.69mesLepoKlFU90SN3GXvV8.3tTdFG', 'Student', 'active', '2024-01-14 20:44:52', NULL, NULL),
(22, 'Petronas', 'petronas@gmail.com', '$2y$10$Hc7ooSKGwGKVJHgk1uAHkuWgtQSGFIaS0z3TRHrqxKGUgx08FJ2jS', 'Partner', 'active', '2024-01-14 20:52:58', NULL, NULL),
(23, 'John123', 'John@gmail.com', '$2y$10$EXYFvnhDLtaYwOy42lRskutRRve3rFv2s2dt7R1R8IevOS9SSawaS', 'Student', 'active', '2024-01-15 10:47:40', NULL, NULL),
(24, 'Partner', 'partner@gmail.com', '$2y$10$9D7vpFfpzNWwCg4Pr6JYzuOaDBP/55gEatgKpHPhPjra.Nq9ZPf8i', 'Partner', 'active', '2024-01-15 14:36:34', NULL, NULL),
(25, 'Anonymous', 'Anonymous@gmail.com', '$2y$10$8EzMVOLQTEb2ytOkY/djduQOGTGETZlAgwSPa.FCa0hmBCHSoTN1C', 'Student', 'active', '2024-01-15 21:41:18', NULL, NULL),
(26, 'ikmal', 'ikmal@gmail.com', '$2y$10$zUfMbNKTl7DeIB7zAdKYZOAJXMwIWl2x86736ZZjiBqmKocu57cvO', 'Student', 'active', '2024-01-19 12:06:47', NULL, NULL),
(27, 'rr43r34r', 'w2@gmial.com', '$2y$10$frmp8Lft9.zE8y/Ivvf1zO2YvH3goegI5Da/ySoqf/LCeJ9mlGMi6', 'Partner', 'active', '2024-01-22 22:44:19', NULL, NULL),
(28, 'yy', 'y@gmail.com', '$2y$10$aFyH8DtF.XIaCpnIyh.8IuCHHSaD0zRqC76Ao87b3eOS0AbV7JQ0y', 'Partner', 'active', '2024-01-22 23:03:56', NULL, NULL),
(29, 'yh', 'yh@gmail.com', '$2y$10$PMxoavJf4OckREKarTCin.EaJIg4a14hW4QlqyCME5akz17m8UW6K', 'Student', 'active', '2024-01-22 23:21:00', NULL, NULL),
(30, 'lotus', 'lotus@gmail.com', '$2y$10$UZIk40ihD4qmw09ICVSiAOuBx1izESbxx37Uk/1GUBBHPnr08H/Ee', 'Student', 'active', '2024-01-23 23:34:01', NULL, NULL),
(31, 'Thevan', 'thevanraju1605@gmail.com', '$2y$10$6skj3K80BztHvQwgQuETC.so3xN7FQsEXBECHISFLmEoQtAXcAvbS', 'Student', 'active', '2024-01-24 00:38:20', 'e33a97c54312c292b9f7885d1286343b1474da1e74eebf1f8d140f1e20006a46', '2024-01-24 01:08:42'),
(32, 'tata', 'tata@gmail.com', '$2y$10$t.sqqkwjNMWmlvSgHnlfAOpCze28Hf.vK35KHEkZLKAj5PG9UBO0W', 'Student', 'active', '2024-01-24 01:18:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yvadmin`
--

CREATE TABLE `yvadmin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yvadmin`
--

INSERT INTO `yvadmin` (`admin_id`, `email`, `user_id`, `image`) VALUES
(1, 'YouthVenture@gmail.com', 19, 'images/users/adminYV/YVlogo.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`certification_id`),
  ADD KEY `certification_ibfk_1` (`profile_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `experience_ibfk_1` (`profile_id`);

--
-- Indexes for table `option_skill`
--
ALTER TABLE `option_skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `option_software_skill`
--
ALTER TABLE `option_software_skill`
  ADD PRIMARY KEY (`softwareSkill_id`);

--
-- Indexes for table `partnerclient`
--
ALTER TABLE `partnerclient`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `partnerclient_ibfk_1` (`user_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `rewardnbadge`
--
ALTER TABLE `rewardnbadge`
  ADD PRIMARY KEY (`badge_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `student_ibfk_1` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- Indexes for table `yvadmin`
--
ALTER TABLE `yvadmin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `YVAdmin_ibfk_1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `option_skill`
--
ALTER TABLE `option_skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `option_software_skill`
--
ALTER TABLE `option_software_skill`
  MODIFY `softwareSkill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `partnerclient`
--
ALTER TABLE `partnerclient`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rewardnbadge`
--
ALTER TABLE `rewardnbadge`
  MODIFY `badge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `yvadmin`
--
ALTER TABLE `yvadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certification`
--
ALTER TABLE `certification`
  ADD CONSTRAINT `certification_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `student` (`profile_id`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `student` (`profile_id`);

--
-- Constraints for table `partnerclient`
--
ALTER TABLE `partnerclient`
  ADD CONSTRAINT `partnerclient_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
