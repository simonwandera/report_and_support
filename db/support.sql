-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2021 at 01:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support`
--

-- --------------------------------------------------------

--
-- Table structure for table `anonymous_reasons`
--

CREATE TABLE `anonymous_reasons` (
  `ID` int(11) NOT NULL,
  `RESPONDENT_ID` int(11) NOT NULL,
  `REASON` varchar(277) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anonymous_reasons`
--

INSERT INTO `anonymous_reasons` (`ID`, `RESPONDENT_ID`, `REASON`) VALUES
(1, 5, 'I don\'t know what to do'),
(2, 5, 'I don\'t want anyone to know what happened'),
(3, 5, 'I feel like they have more authority than me'),
(4, 6, 'I don\'t know what to do'),
(5, 6, 'I don\'t want anyone to know what happened'),
(6, 6, 'I feel like they have more authority than me'),
(7, 7, 'I don\'t know what to do'),
(8, 7, 'I don\'t want anyone to know what happened'),
(9, 7, 'I feel like they have more authority than me'),
(10, 8, 'I don\'t know what to do'),
(11, 8, 'I don\'t want anyone to know what happened'),
(12, 8, 'I feel like they have more authority than me'),
(13, 9, 'I don\'t know what to do'),
(14, 9, 'I don\'t want anyone to know what happened'),
(15, 9, 'I feel like they have more authority than me'),
(16, 10, 'I don\'t know what to do'),
(17, 10, 'I don\'t want anyone to know what happened'),
(18, 10, 'I feel like they have more authority than me'),
(19, 11, 'I don\'t know what to do'),
(20, 11, 'I don\'t want anyone to know what happened'),
(21, 11, 'I feel like they have more authority than me'),
(22, 12, 'I don\'t know what to do'),
(23, 12, 'I don\'t want anyone to know what happened'),
(24, 12, 'I feel like they have more authority than me'),
(25, 13, 'I don\'t know what to do'),
(26, 13, 'I don\'t want anyone to know what happened'),
(27, 13, 'I feel like they have more authority than me'),
(28, 14, 'Not selected'),
(29, 15, 'Not selected'),
(30, 16, 'Not selected'),
(31, 17, 'Not selected'),
(32, 18, 'Not selected'),
(33, 19, 'I don\'t know what to do'),
(34, 20, 'I don\'t know what to do'),
(35, 27, 'I\'m concerned it might impact my future career/studies'),
(36, 29, 'Not selected'),
(37, 36, 'I don\'t want to get anyone in trouble'),
(38, 42, 'Not selected'),
(39, 43, 'I feel like they have more authority than me'),
(40, 47, 'I don\'t know what to do'),
(41, 47, 'I don\'t want anyone to know what happened'),
(42, 47, 'I feel like they have more authority than me'),
(43, 48, 'I don\'t know what to do'),
(44, 48, 'I don\'t want anyone to know what happened'),
(45, 48, 'I feel like they have more authority than me'),
(46, 49, 'I don\'t know what to do'),
(47, 49, 'I don\'t want anyone to know what happened'),
(48, 49, 'I feel like they have more authority than me'),
(49, 50, 'I want the University to have this information'),
(50, 50, 'The person didn\'t want to report it themselves'),
(51, 50, 'I don\'t know what to do'),
(52, 51, 'I\'ve reported it but no-one took me seriously');

-- --------------------------------------------------------

--
-- Stand-in structure for view `anonymous_report`
-- (See below for the actual view)
--
CREATE TABLE `anonymous_report` (
`ID` int(100)
,`RESPONDENT_ID` int(10)
,`TYPE` varchar(100)
,`QUESTION_ID` int(10)
,`QUESTION` varchar(1050)
,`ANSWER` text
,`DATE_CREATED` date
);

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `CONTACT_ID` int(10) NOT NULL,
  `CONTACT_NAME` varchar(50) NOT NULL,
  `CONTACT_EMAIL` varchar(30) NOT NULL,
  `STUDENT_NUMBER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`CONTACT_ID`, `CONTACT_NAME`, `CONTACT_EMAIL`, `STUDENT_NUMBER`) VALUES
(1, 'FOREST WHITAKER', 'simonwandera12', 'pbppbppb'),
(2, 'FOREST WHITAKER', 'simonwandera12', 'pbppbppb'),
(3, 'FOREST WHITAKER', 'simonwandera12', 'pbppbppb'),
(4, 'FOREST WHITAKER', 'simonwandera12', 'rt45'),
(21, 'FOREST WHITAKER', 'simonwandera12', 'pbppbppb'),
(22, 'FOREST WHITAKER', 'simonwandera12', 'pbppbppb'),
(23, 'FOREST WHITAKER', 'simonwandera12', 'pbppbppb'),
(24, 'FOREST WHITAKER', 'simonwandera12', 'pbppbppb'),
(25, 'FOREST WHITAKER', 'simonwandera12', 'pbppbppb'),
(26, 'FOREST WHITAKER', 'simonwandera12', 'e9/lo'),
(28, 'FOREST WHITAKER', 'simonwandera12', 'e9/lo'),
(30, 'Fresh', 'simonwandera12', 'rt45'),
(31, 'jerusha', 'jerushae', '987'),
(32, 'jerusha', 'jerushae', '987'),
(33, 'jerusha', 'jerushae', '987'),
(34, 'jerusha', 'jerushae', '987'),
(35, 'jerusha', 'jerushae', '987'),
(37, 'Simon cowell', 'N/A', 'N/A'),
(38, '32', 'N/A', 'N/A'),
(39, 'Simon cowell', 'N/A', 'N/A'),
(40, 'Simon cowell', 'N/A', 'N/A'),
(41, 'ss', 'N/A', 'N/A'),
(44, 'WERE ANDETA', 'wanderasimoh@gmail.com', 's234'),
(45, 'simon', '3', '2'),
(46, 'Simon cowell', '3', '234');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `ID` int(10) NOT NULL,
  `LINK_NAME` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CATEGORY_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`ID`, `LINK_NAME`, `ADDRESS`, `CATEGORY_ID`) VALUES
(3, 'Act of many', 'http://localhost/report4/group_editor.php?id=1', '1'),
(4, 'many Act of many', 'www.cf.com', '1'),
(7, 'How to overcome discrimination', 'www.kariokor.ac.ke/descrimination', '4'),
(11, 'Addressing workplace harassment', 'blog.shrm.org/blog/addressing-workplace-harassment-wearework', '2');

-- --------------------------------------------------------

--
-- Table structure for table `link_categories`
--

CREATE TABLE `link_categories` (
  `ID` int(100) NOT NULL,
  `CATEGORY` varchar(255) NOT NULL,
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link_categories`
--

INSERT INTO `link_categories` (`ID`, `CATEGORY`, `IMAGE`) VALUES
(1, 'Support Available from the University', '1.jpg'),
(2, 'Sexual Harassment', '1.jpg'),
(4, 'Discrimination', 'descimination.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `TITLE` varchar(34) NOT NULL DEFAULT 'ADMIN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME`, `PASSWORD`, `TITLE`) VALUES
('remmy@admin.com', 'ADMIN', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`ID`, `USERNAME`, `TIME`) VALUES
(6, 'root', '2021-04-06 11:49:40'),
(7, 'root', '2021-04-06 11:49:50'),
(8, 'simonwandera12@gmail.com', '2021-04-15 06:35:41'),
(9, 'simonwandera12@gmail.com', '2021-04-15 07:57:59'),
(10, 'simonwandera12@gmail.com', '2021-04-16 17:45:05'),
(11, 'peterkiprotich@maseno.ac.ke', '2021-04-16 17:47:35'),
(12, 'simonwandera12@gmail.com', '2021-05-04 07:44:02'),
(13, 'simonwandera12@gmail.com', '2021-05-06 20:18:36'),
(14, 'simonwandera12@gmail.com', '2021-05-06 20:47:12'),
(15, 'simonwandera12@gmail.com', '2021-05-06 21:13:34'),
(19, 'simonwandera12@gmail.com', '2021-05-07 12:59:50'),
(20, 'simonwandera12@gmail.com', '2021-05-07 14:39:27'),
(21, 'simonwandera12@gmail.com', '2021-05-09 08:35:19'),
(22, 'simonwandera12@gmail.com', '2021-05-09 19:25:06'),
(23, 'simonwandera12@gmail.com', '2021-05-10 04:44:33'),
(24, 'simonwandera12@gmail.com', '2021-08-02 16:46:46'),
(25, 'simonwandera12@gmail.com', '2021-08-02 16:47:38'),
(26, 'simonwandera12@gmail.com', '2021-08-02 21:00:18'),
(27, 'simonwandera12@gmail.com', '2021-08-02 21:15:45'),
(28, 'simonwandera12@gmail.com', '2021-08-05 13:28:31'),
(29, 'simonwandera12@gmail.com', '2021-08-07 19:04:14'),
(30, 'simonwandera12@gmail.com', '2021-08-07 20:39:33'),
(31, 'simonwandera12@gmail.com', '2021-08-07 20:45:18'),
(32, 'simonwandera12@gmail.com', '2021-08-07 21:00:01'),
(33, 'simonwandera12@gmail.com', '2021-08-07 21:03:30'),
(34, 'simonwandera12@gmail.com', '2021-08-07 21:19:58'),
(35, 'simonwandera12@gmail.com', '2021-08-07 21:34:16'),
(36, 'simonwandera12@gmail.com', '2021-08-10 11:58:22'),
(37, 'simonwandera12@gmail.com', '2021-08-10 12:08:45'),
(38, 'simonwandera12@gmail.com', '2021-08-10 13:51:32'),
(39, 'simonwandera12@gmail.com', '2021-08-10 13:52:10'),
(40, 'simonwandera12@gmail.com', '2021-08-10 23:05:49'),
(41, 'simonwandera12@gmail.com', '2021-08-10 23:11:28'),
(42, 'simonwandera12@gmail.com', '2021-08-10 23:36:04'),
(43, 'simonwandera12@gmail.com', '2021-08-10 23:38:41'),
(44, 'simonwandera12@gmail.com', '2021-09-14 13:40:09'),
(45, 'simonwandera12@gmail.com', '2021-09-14 14:08:07'),
(46, 'simonwandera12@gmail.com', '2021-09-20 09:08:56'),
(47, 'simonwandera12@gmail.com', '2021-09-20 10:08:21'),
(48, 'simonwandera12@gmail.com', '2021-09-20 10:14:21'),
(49, 'simonwandera12@gmail.com', '2021-09-20 11:28:36'),
(50, 'simonwandera12@gmail.com', '2021-09-20 19:20:05'),
(51, 'simonwandera12@gmail.com', '2021-09-20 19:29:40'),
(52, 'simonwandera12@gmail.com', '2021-09-24 11:49:54'),
(53, 'simonwandera12@gmail.com', '2021-09-24 11:55:39'),
(54, 'remmy@admin.com', '2021-10-13 11:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ID` int(100) NOT NULL,
  `QUESTION` varchar(1050) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ID`, `QUESTION`) VALUES
(1, 'Are you reporting on behalf of yourself or somebody else?'),
(2, 'What is your connection with the University?'),
(3, 'Which of the following best describes the situation your report relates to?'),
(4, 'Please provide any details of the report you would like to make'),
(5, 'File'),
(6, 'Do you believe that any protected characteristics were a factor in the incident?'),
(7, 'Have your reported this incident elsewhere?'),
(8, 'Age'),
(9, 'Do you consider yourself to be disabled'),
(10, 'Ethnicity'),
(11, 'Gender'),
(12, 'Is your gender identity different from the gender you were assigned at birth?'),
(13, 'What is your legal sex?'),
(14, 'Religion or belief'),
(15, 'Sexual orientation'),
(16, 'Can you tell us why you\'ve chosen to report anonymously?'),
(17, 'Contact Details');

-- --------------------------------------------------------

--
-- Table structure for table `related_factors`
--

CREATE TABLE `related_factors` (
  `ID` int(10) NOT NULL,
  `RESPONDENT_ID` int(10) NOT NULL,
  `FACTOR` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `related_factors`
--

INSERT INTO `related_factors` (`ID`, `RESPONDENT_ID`, `FACTOR`) VALUES
(1, 1, 'Disability'),
(2, 1, 'Sex'),
(3, 1, 'Sexual orientation'),
(4, 1, 'Race'),
(5, 1, 'Religion or belief'),
(6, 2, 'Disability'),
(7, 2, 'Sex'),
(8, 3, 'Disability'),
(9, 2, 'Sexual orientation'),
(10, 3, 'Sex'),
(11, 2, 'Race'),
(12, 3, 'Sexual orientation'),
(13, 2, 'Religion or belief'),
(14, 3, 'Race'),
(15, 3, 'Religion or belief'),
(16, 4, 'Sexual orientation'),
(17, 4, 'Race'),
(18, 5, 'Disability'),
(19, 5, 'Sex'),
(20, 6, 'Disability'),
(21, 6, 'Sex'),
(22, 7, 'Disability'),
(23, 7, 'Sex'),
(24, 8, 'Disability'),
(25, 8, 'Sex'),
(26, 9, 'Disability'),
(27, 9, 'Sex'),
(28, 10, 'Disability'),
(29, 10, 'Sex'),
(30, 11, 'Disability'),
(31, 11, 'Sex'),
(32, 12, 'Disability'),
(33, 12, 'Sex'),
(34, 13, 'Disability'),
(35, 13, 'Sex'),
(36, 14, 'Gender reassignment'),
(37, 15, 'Gender reassignment'),
(38, 16, 'Marital or civil partnership status'),
(39, 17, 'Sexual orientation'),
(40, 17, 'Marital or civil partnership status'),
(41, 18, 'Sexual orientation'),
(42, 18, 'Marital or civil partnership status'),
(43, 19, 'Sexual orientation'),
(44, 19, 'Marital or civil partnership status'),
(45, 20, 'Sexual orientation'),
(46, 20, 'Marital or civil partnership status'),
(47, 21, 'Disability'),
(48, 21, 'Religion or belief'),
(49, 21, 'Pregnancy or maternity status'),
(50, 22, 'Disability'),
(51, 22, 'Religion or belief'),
(52, 22, 'Pregnancy or maternity status'),
(53, 23, 'Disability'),
(54, 23, 'Religion or belief'),
(55, 23, 'Pregnancy or maternity status'),
(56, 24, 'Disability'),
(57, 24, 'Religion or belief'),
(58, 24, 'Pregnancy or maternity status'),
(59, 25, 'Disability'),
(60, 25, 'Religion or belief'),
(61, 25, 'Pregnancy or maternity status'),
(62, 26, 'Disability'),
(63, 26, 'Sex'),
(64, 26, 'Sexual orientation'),
(65, 27, 'Gender reassignment'),
(66, 28, 'Disability'),
(67, 29, 'Race'),
(68, 29, 'Religion or belief'),
(69, 29, 'Pregnancy or maternity status'),
(70, 30, 'Disability'),
(71, 30, 'Sex'),
(72, 30, 'Sexual orientation'),
(73, 31, 'Race'),
(74, 32, 'Race'),
(75, 33, 'Race'),
(76, 34, 'Race'),
(77, 35, 'Race'),
(78, 35, 'Marital or civil partnership status'),
(79, 36, 'Race'),
(80, 36, 'Gender reassignment'),
(81, 37, 'Sexual orientation'),
(82, 38, 'Disability'),
(83, 39, 'Sexual orientation'),
(84, 40, 'Sexual orientation'),
(85, 41, 'Disability'),
(86, 42, 'Marital or civil partnership status'),
(87, 43, 'Sexual orientation'),
(88, 44, 'Disability'),
(89, 44, 'Sex'),
(90, 45, 'Disability'),
(91, 45, 'Sex'),
(92, 46, 'Disability'),
(93, 46, 'Sex'),
(94, 46, 'Gender reassignment'),
(95, 47, 'Disability'),
(96, 48, 'Disability'),
(97, 49, 'Disability'),
(98, 50, 'Age'),
(99, 50, 'Marital or civil partnership status'),
(100, 51, 'Age'),
(101, 51, 'Disability');

-- --------------------------------------------------------

--
-- Stand-in structure for view `report`
-- (See below for the actual view)
--
CREATE TABLE `report` (
`ID` int(10)
,`TYPE` varchar(100)
,`DATE_CREATED` date
,`ABOUT` mediumtext
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reports`
-- (See below for the actual view)
--
CREATE TABLE `reports` (
`ID` int(10)
,`TYPE` varchar(100)
,`DATE_CREATED` date
,`ARCHIVE` int(11)
,`READ` int(11)
,`ABOUT` text
);

-- --------------------------------------------------------

--
-- Table structure for table `respondents`
--

CREATE TABLE `respondents` (
  `ID` int(10) NOT NULL,
  `TYPE` varchar(100) NOT NULL,
  `DATE_CREATED` date NOT NULL,
  `ARCHIVE` int(11) NOT NULL DEFAULT 0,
  `READ` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `respondents`
--

INSERT INTO `respondents` (`ID`, `TYPE`, `DATE_CREATED`, `ARCHIVE`, `READ`) VALUES
(1, 'with_details', '2021-04-01', 1, 1),
(2, 'with_details', '2021-04-01', 1, 0),
(3, 'with_details', '2021-04-01', 1, 1),
(4, 'with_details', '2021-04-06', 1, 1),
(5, 'anonymous', '2021-04-15', 0, 1),
(6, 'anonymous', '2021-04-15', 0, 1),
(7, 'anonymous', '2021-04-15', 0, 1),
(8, 'anonymous', '2021-04-15', 0, 1),
(9, 'anonymous', '2021-04-15', 0, 1),
(10, 'anonymous', '2021-04-15', 0, 1),
(11, 'anonymous', '2021-04-15', 0, 1),
(12, 'anonymous', '2021-04-15', 1, 0),
(13, 'anonymous', '2021-04-15', 1, 1),
(14, 'anonymous', '2021-04-15', 1, 0),
(15, 'anonymous', '2021-04-15', 1, 0),
(16, 'anonymous', '2021-04-15', 1, 0),
(17, 'anonymous', '2021-04-15', 1, 1),
(18, 'anonymous', '2021-04-15', 1, 0),
(19, 'anonymous', '2021-04-15', 0, 1),
(20, 'anonymous', '2021-04-15', 0, 1),
(21, 'with_details', '2021-04-15', 1, 1),
(22, 'with_details', '2021-04-15', 1, 1),
(23, 'with_details', '2021-04-15', 1, 1),
(24, 'with_details', '2021-04-15', 1, 1),
(25, 'with_details', '2021-04-15', 1, 0),
(26, 'with_details', '2021-04-15', 1, 1),
(27, 'anonymous', '2021-05-04', 1, 1),
(28, 'with_details', '2021-05-06', 1, 1),
(29, 'anonymous', '2021-05-06', 1, 1),
(30, 'with_details', '2021-05-06', 1, 1),
(31, 'with_details', '2021-05-09', 0, 1),
(32, 'with_details', '2021-05-09', 1, 0),
(33, 'with_details', '2021-05-09', 0, 1),
(34, 'with_details', '2021-05-09', 0, 1),
(35, 'with_details', '2021-05-09', 1, 0),
(36, 'anonymous', '2021-05-09', 0, 1),
(37, 'with_details', '2021-08-05', 0, 1),
(38, 'with_details', '2021-08-05', 0, 1),
(39, 'with_details', '2021-08-05', 0, 1),
(40, 'with_details', '2021-08-05', 0, 1),
(41, 'with_details', '2021-08-05', 0, 1),
(42, 'anonymous', '2021-08-05', 0, 1),
(43, 'anonymous', '2021-08-05', 0, 1),
(44, 'with_details', '2021-08-10', 0, 1),
(45, 'with_details', '2021-08-10', 1, 1),
(46, 'with_details', '2021-08-10', 1, 1),
(47, 'anonymous', '2021-08-11', 0, 1),
(48, 'anonymous', '2021-08-11', 1, 1),
(49, 'anonymous', '2021-08-11', 0, 1),
(50, 'anonymous', '2021-09-20', 0, 1),
(51, 'anonymous', '2021-09-20', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `ID` int(100) NOT NULL,
  `RESPONDENT_ID` int(10) NOT NULL,
  `QUESTION_ID` int(10) NOT NULL,
  `ANSWER` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`ID`, `RESPONDENT_ID`, `QUESTION_ID`, `ANSWER`) VALUES
(1, 1, 1, 'My self'),
(2, 1, 2, 'Staff'),
(3, 1, 3, 'Bullying'),
(4, 1, 4, 'spov'),
(5, 1, 5, 'JavaScript.pdf'),
(6, 1, 6, 'Multiple'),
(7, 1, 7, 'No'),
(8, 1, 8, '18 - 21 years'),
(9, 1, 9, 'Not selected'),
(10, 1, 10, 'Not selected'),
(11, 1, 11, 'Female'),
(12, 1, 12, 'Not selected'),
(13, 1, 13, 'male'),
(14, 1, 14, 'Not selected'),
(15, 1, 15, 'Not selected'),
(16, 1, 17, 'multiple'),
(17, 2, 1, 'My self'),
(18, 2, 2, 'Staff'),
(19, 2, 3, 'Bullying'),
(20, 2, 4, 'spov'),
(21, 2, 5, 'JavaScript.pdf'),
(22, 2, 6, 'Multiple'),
(23, 2, 7, 'No'),
(24, 2, 8, '18 - 21 years'),
(25, 2, 9, 'Not selected'),
(26, 2, 10, 'Not selected'),
(27, 2, 11, 'Female'),
(28, 2, 12, 'Not selected'),
(29, 2, 13, 'male'),
(30, 2, 14, 'Not selected'),
(31, 2, 15, 'Bi-Sexual'),
(32, 2, 17, 'multiple'),
(33, 3, 1, 'My self'),
(34, 3, 2, 'Staff'),
(35, 3, 3, 'Physical violence'),
(36, 3, 4, 'spov'),
(37, 3, 5, 'JavaScript.pdf'),
(38, 3, 6, 'Multiple'),
(39, 3, 7, 'No'),
(40, 3, 8, '18 - 21 years'),
(41, 3, 9, 'Not selected'),
(42, 3, 10, 'Not selected'),
(43, 3, 11, 'Female'),
(44, 3, 12, 'Not selected'),
(45, 3, 13, 'male'),
(46, 3, 14, 'Not selected'),
(47, 3, 15, 'Bi-Sexual'),
(48, 3, 17, 'multiple'),
(49, 4, 1, 'Someone else'),
(50, 4, 2, 'Staff'),
(51, 4, 3, 'Physical violence'),
(52, 4, 4, 'thre '),
(53, 4, 5, 'funnycode.jpg'),
(54, 4, 6, 'Multiple'),
(55, 4, 7, 'police'),
(56, 4, 8, '22 - 25 years'),
(57, 4, 9, 'Not selected'),
(58, 4, 10, 'Not selected'),
(59, 4, 11, 'Not selected'),
(60, 4, 12, 'Not selected'),
(61, 4, 13, 'Not selected'),
(62, 4, 14, 'Not selected'),
(63, 4, 15, 'Not selected'),
(64, 4, 17, 'multiple'),
(65, 5, 1, 'Someone else'),
(66, 5, 2, 'Postgraduate'),
(67, 5, 3, 'Sexual violence'),
(68, 5, 4, 'NA'),
(69, 5, 5, 'No File provided'),
(70, 5, 6, 'multiple'),
(71, 5, 7, 'No'),
(72, 5, 8, '26 - 35 years'),
(73, 5, 9, 'No'),
(74, 5, 10, 'Not selected'),
(75, 5, 11, 'Female'),
(76, 5, 12, 'Not selected'),
(77, 5, 13, 'male'),
(78, 5, 14, 'Hindu'),
(79, 5, 15, 'Not selected'),
(80, 5, 16, 'multiple'),
(81, 6, 1, 'Someone else'),
(82, 6, 2, 'Postgraduate'),
(83, 6, 3, 'Sexual violence'),
(84, 6, 4, 'NA'),
(85, 6, 5, 'No File provided'),
(86, 6, 6, 'multiple'),
(87, 6, 7, 'No'),
(88, 6, 8, '26 - 35 years'),
(89, 6, 9, 'No'),
(90, 6, 10, 'Not selected'),
(91, 6, 11, 'Female'),
(92, 6, 12, 'Not selected'),
(93, 6, 13, 'male'),
(94, 6, 14, 'Hindu'),
(95, 6, 15, 'Not selected'),
(96, 6, 16, 'multiple'),
(97, 7, 1, 'Someone else'),
(98, 7, 2, 'Postgraduate'),
(99, 7, 3, 'Sexual violence'),
(100, 7, 4, 'NA'),
(101, 7, 5, 'No File provided'),
(102, 7, 6, 'multiple'),
(103, 7, 7, 'No'),
(104, 7, 8, '26 - 35 years'),
(105, 7, 9, 'No'),
(106, 7, 10, 'Not selected'),
(107, 7, 11, 'Female'),
(108, 7, 12, 'Not selected'),
(109, 7, 13, 'male'),
(110, 7, 14, 'Hindu'),
(111, 7, 15, 'Not selected'),
(112, 7, 16, 'multiple'),
(113, 8, 1, 'Someone else'),
(114, 8, 2, 'Postgraduate'),
(115, 8, 3, 'Sexual violence'),
(116, 8, 4, 'NA'),
(117, 8, 5, 'No File provided'),
(118, 8, 6, 'multiple'),
(119, 8, 7, 'No'),
(120, 8, 8, '26 - 35 years'),
(121, 8, 9, 'No'),
(122, 8, 10, 'Not selected'),
(123, 8, 11, 'Female'),
(124, 8, 12, 'Not selected'),
(125, 8, 13, 'male'),
(126, 8, 14, 'Hindu'),
(127, 8, 15, 'Not selected'),
(128, 8, 16, 'multiple'),
(129, 9, 1, 'Someone else'),
(130, 9, 2, 'Postgraduate'),
(131, 9, 3, 'Sexual violence'),
(132, 9, 4, 'NA'),
(133, 9, 5, 'No File provided'),
(134, 9, 6, 'multiple'),
(135, 9, 7, 'No'),
(136, 9, 8, '26 - 35 years'),
(137, 9, 9, 'No'),
(138, 9, 10, 'Not selected'),
(139, 9, 11, 'Female'),
(140, 9, 12, 'Not selected'),
(141, 9, 13, 'male'),
(142, 9, 14, 'Hindu'),
(143, 9, 15, 'Not selected'),
(144, 9, 16, 'multiple'),
(145, 10, 1, 'Someone else'),
(146, 10, 2, 'Postgraduate'),
(147, 10, 3, 'Sexual violence'),
(148, 10, 4, 'NA'),
(149, 10, 5, 'No File provided'),
(150, 10, 6, 'multiple'),
(151, 10, 7, 'No'),
(152, 10, 8, '26 - 35 years'),
(153, 10, 9, 'No'),
(154, 10, 10, 'Not selected'),
(155, 10, 11, 'Female'),
(156, 10, 12, 'Not selected'),
(157, 10, 13, 'male'),
(158, 10, 14, 'Hindu'),
(159, 10, 15, 'Not selected'),
(160, 10, 16, 'multiple'),
(161, 11, 1, 'Someone else'),
(162, 11, 2, 'Postgraduate'),
(163, 11, 3, 'Sexual violence'),
(164, 11, 4, 'NA'),
(165, 11, 5, 'funnycode.jpg'),
(166, 11, 6, 'multiple'),
(167, 11, 7, 'No'),
(168, 11, 8, '26 - 35 years'),
(169, 11, 9, 'No'),
(170, 11, 10, 'Not selected'),
(171, 11, 11, 'Female'),
(172, 11, 12, 'Not selected'),
(173, 11, 13, 'male'),
(174, 11, 14, 'Hindu'),
(175, 11, 15, 'Not selected'),
(176, 11, 16, 'multiple'),
(177, 12, 1, 'Someone else'),
(178, 12, 2, 'Postgraduate'),
(179, 12, 3, 'Sexual violence'),
(180, 12, 4, 'NA'),
(181, 12, 5, 'funnycode.jpg'),
(182, 12, 6, 'multiple'),
(183, 12, 7, 'No'),
(184, 12, 8, '26 - 35 years'),
(185, 12, 9, 'No'),
(186, 12, 10, 'Not selected'),
(187, 12, 11, 'Female'),
(188, 12, 12, 'Not selected'),
(189, 12, 13, 'male'),
(190, 12, 14, 'Hindu'),
(191, 12, 15, 'Not selected'),
(192, 12, 16, 'multiple'),
(193, 13, 1, 'Someone else'),
(194, 13, 2, 'Postgraduate'),
(195, 13, 3, 'Sexual violence'),
(196, 13, 4, 'NA'),
(197, 13, 5, 'funnycode.jpg'),
(198, 13, 6, 'multiple'),
(199, 13, 7, 'No'),
(200, 13, 8, '26 - 35 years'),
(201, 13, 9, 'No'),
(202, 13, 10, 'Not selected'),
(203, 13, 11, 'Female'),
(204, 13, 12, 'Not selected'),
(205, 13, 13, 'male'),
(206, 13, 14, 'Hindu'),
(207, 13, 15, 'Not selected'),
(208, 13, 16, 'multiple'),
(209, 14, 1, 'My self'),
(210, 14, 2, 'Staff'),
(211, 14, 3, 'Sexual harassment'),
(212, 14, 4, 'd'),
(213, 14, 5, 'funnycode.jpg'),
(214, 14, 6, 'multiple'),
(215, 14, 7, 'No'),
(216, 14, 8, 'Not selected'),
(217, 14, 9, 'Not selected'),
(218, 14, 10, 'Not selected'),
(219, 14, 11, 'Not selected'),
(220, 14, 12, 'Not selected'),
(221, 14, 13, 'Not selected'),
(222, 14, 14, 'Not selected'),
(223, 14, 15, 'Not selected'),
(224, 14, 16, 'multiple'),
(225, 15, 1, 'My self'),
(226, 15, 2, 'Staff'),
(227, 15, 3, 'Sexual harassment'),
(228, 15, 4, 'd'),
(229, 15, 5, 'funnycode.jpg'),
(230, 15, 6, 'multiple'),
(231, 15, 7, 'No'),
(232, 15, 8, 'Not selected'),
(233, 15, 9, 'Not selected'),
(234, 15, 10, 'Not selected'),
(235, 15, 11, 'Not selected'),
(236, 15, 12, 'Not selected'),
(237, 15, 13, 'Not selected'),
(238, 15, 14, 'Not selected'),
(239, 15, 15, 'Not selected'),
(240, 15, 16, 'multiple'),
(241, 16, 1, 'Someone else'),
(242, 16, 2, 'Postgraduate'),
(243, 16, 3, 'Sexual violence'),
(244, 16, 4, ',mj'),
(245, 16, 5, 'No File provided'),
(246, 16, 6, 'multiple'),
(247, 16, 7, 'No'),
(248, 16, 8, '26 - 35 years'),
(249, 16, 9, 'Not selected'),
(250, 16, 10, 'Not selected'),
(251, 16, 11, 'Not selected'),
(252, 16, 12, 'Not selected'),
(253, 16, 13, 'Not selected'),
(254, 16, 14, 'Not selected'),
(255, 16, 15, 'Not selected'),
(256, 16, 16, 'multiple'),
(257, 17, 1, 'Someone else'),
(258, 17, 2, 'Postgraduate'),
(259, 17, 3, 'Sexual violence'),
(260, 17, 4, ',mj'),
(261, 17, 5, 'Programming-is-like-sex-Technology-Quotes.png'),
(262, 17, 6, 'multiple'),
(263, 17, 7, 'No'),
(264, 17, 8, '26 - 35 years'),
(265, 17, 9, 'Not selected'),
(266, 17, 10, 'Not selected'),
(267, 17, 11, 'Not selected'),
(268, 17, 12, 'Not selected'),
(269, 17, 13, 'male'),
(270, 17, 14, 'Not selected'),
(271, 17, 15, 'Not selected'),
(272, 17, 16, 'multiple'),
(273, 18, 1, 'Someone else'),
(274, 18, 2, 'Postgraduate'),
(275, 18, 3, 'Sexual violence'),
(276, 18, 4, ',mj'),
(277, 18, 5, 'Programming-is-like-sex-Technology-Quotes.png'),
(278, 18, 6, 'multiple'),
(279, 18, 7, 'No'),
(280, 18, 8, '26 - 35 years'),
(281, 18, 9, 'Not selected'),
(282, 18, 10, 'Not selected'),
(283, 18, 11, 'Not selected'),
(284, 18, 12, 'Not selected'),
(285, 18, 13, 'male'),
(286, 18, 14, 'Not selected'),
(287, 18, 15, 'Not selected'),
(288, 18, 16, 'multiple'),
(289, 19, 1, 'Someone else'),
(290, 19, 2, 'Postgraduate'),
(291, 19, 3, 'Sexual violence'),
(292, 19, 4, ',mjd'),
(293, 19, 5, 'Programming-is-like-sex-Technology-Quotes.png'),
(294, 19, 6, 'multiple'),
(295, 19, 7, 'No'),
(296, 19, 8, '26 - 35 years'),
(297, 19, 9, 'Not selected'),
(298, 19, 10, 'Not selected'),
(299, 19, 11, 'Not selected'),
(300, 19, 12, 'Not selected'),
(301, 19, 13, 'male'),
(302, 19, 14, 'Not selected'),
(303, 19, 15, 'Prefer Not to say'),
(304, 19, 16, 'multiple'),
(305, 20, 1, 'Someone else'),
(306, 20, 2, 'Postgraduate'),
(307, 20, 3, 'Sexual violence'),
(308, 20, 4, ',mjd'),
(309, 20, 5, 'Programming-is-like-sex-Technology-Quotes.png'),
(310, 20, 6, 'multiple'),
(311, 20, 7, 'No'),
(312, 20, 8, '26 - 35 years'),
(313, 20, 9, 'Not selected'),
(314, 20, 10, 'Not selected'),
(315, 20, 11, 'Not selected'),
(316, 20, 12, 'Not selected'),
(317, 20, 13, 'male'),
(318, 20, 14, 'Not selected'),
(319, 20, 15, 'Prefer Not to say'),
(320, 20, 16, 'multiple'),
(321, 21, 1, 'Someone else'),
(322, 21, 2, 'Postgraduate'),
(323, 21, 3, 'Bullying'),
(324, 21, 4, 'd'),
(325, 21, 5, 'lect11.pdf'),
(326, 21, 6, 'Multiple'),
(327, 21, 7, 'No'),
(328, 21, 8, '18 - 21 years'),
(329, 21, 9, 'Not selected'),
(330, 21, 10, 'Not selected'),
(331, 21, 11, 'Female'),
(332, 21, 12, 'Not selected'),
(333, 21, 13, 'Not selected'),
(334, 21, 14, 'Hindu'),
(335, 21, 15, 'Not selected'),
(336, 21, 17, 'multiple'),
(337, 22, 1, 'Someone else'),
(338, 22, 2, 'Postgraduate'),
(339, 22, 3, 'Bullying'),
(340, 22, 4, 'd'),
(341, 22, 5, 'lect11.pdf'),
(342, 22, 6, 'Multiple'),
(343, 22, 7, 'No'),
(344, 22, 8, '18 - 21 years'),
(345, 22, 9, 'Not selected'),
(346, 22, 10, 'Not selected'),
(347, 22, 11, 'Female'),
(348, 22, 12, 'Not selected'),
(349, 22, 13, 'Not selected'),
(350, 22, 14, 'Hindu'),
(351, 22, 15, 'Not selected'),
(352, 22, 17, 'multiple'),
(353, 23, 1, 'Someone else'),
(354, 23, 2, 'Postgraduate'),
(355, 23, 3, 'Bullying'),
(356, 23, 4, 'd'),
(357, 23, 5, 'lect11.pdf'),
(358, 23, 6, 'Multiple'),
(359, 23, 7, 'No'),
(360, 23, 8, '18 - 21 years'),
(361, 23, 9, 'Not selected'),
(362, 23, 10, 'Not selected'),
(363, 23, 11, 'Female'),
(364, 23, 12, 'Not selected'),
(365, 23, 13, 'Not selected'),
(366, 23, 14, 'Hindu'),
(367, 23, 15, 'Not selected'),
(368, 23, 17, 'multiple'),
(369, 24, 1, 'Someone else'),
(370, 24, 2, 'Postgraduate'),
(371, 24, 3, 'Bullying'),
(372, 24, 4, 'd'),
(373, 24, 5, 'lect11.pdf'),
(374, 24, 6, 'Multiple'),
(375, 24, 7, 'No'),
(376, 24, 8, '18 - 21 years'),
(377, 24, 9, 'Not selected'),
(378, 24, 10, 'Not selected'),
(379, 24, 11, 'Female'),
(380, 24, 12, 'Not selected'),
(381, 24, 13, 'Not selected'),
(382, 24, 14, 'Hindu'),
(383, 24, 15, 'Not selected'),
(384, 24, 17, 'multiple'),
(385, 25, 1, 'Someone else'),
(386, 25, 2, 'Postgraduate'),
(387, 25, 3, 'Bullying'),
(388, 25, 4, 'd'),
(389, 25, 5, 'lect11.pdf'),
(390, 25, 6, 'Multiple'),
(391, 25, 7, 'No'),
(392, 25, 8, '18 - 21 years'),
(393, 25, 9, 'Not selected'),
(394, 25, 10, 'Not selected'),
(395, 25, 11, 'Female'),
(396, 25, 12, 'Not selected'),
(397, 25, 13, 'Not selected'),
(398, 25, 14, 'Hindu'),
(399, 25, 15, 'Not selected'),
(400, 25, 17, 'multiple'),
(401, 26, 1, 'My self'),
(402, 26, 2, 'Undergraduate'),
(403, 26, 3, 'Bullying'),
(404, 26, 4, 'procedure'),
(405, 26, 5, 'jquery_tutorial.pdf'),
(406, 26, 6, 'Multiple'),
(407, 26, 7, 'No'),
(408, 26, 8, 'Not selected'),
(409, 26, 9, 'No'),
(410, 26, 10, 'Not selected'),
(411, 26, 11, 'Prefer to self-describe'),
(412, 26, 12, 'Prefer not to say'),
(413, 26, 13, 'Prefer not to say'),
(414, 26, 14, 'Prefer not to say'),
(415, 26, 15, 'Prefer Not to say'),
(416, 26, 17, 'multiple'),
(417, 27, 1, 'My self'),
(418, 27, 2, 'Staff'),
(419, 27, 3, 'Sexual harassment'),
(420, 27, 4, 'j'),
(421, 27, 5, 'Python Crash Course, 2nd Edition.pdf'),
(422, 27, 6, 'multiple'),
(423, 27, 7, 'No'),
(424, 27, 8, 'Not selected'),
(425, 27, 9, 'Not selected'),
(426, 27, 10, 'Not selected'),
(427, 27, 11, 'Not selected'),
(428, 27, 12, 'Not selected'),
(429, 27, 13, 'Not selected'),
(430, 27, 14, 'Not selected'),
(431, 27, 15, 'Not selected'),
(432, 27, 16, 'multiple'),
(433, 28, 1, 'Someone else'),
(434, 28, 2, 'Postgraduate'),
(435, 28, 3, 'Sexual violence'),
(436, 28, 4, 'No internet\r\nTry:\r\n\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nERR_INTERNET_DISCONNECTED\r\n'),
(437, 28, 5, 'index.php'),
(438, 28, 6, 'Multiple'),
(439, 28, 7, 'No'),
(440, 28, 8, '26 - 35 years'),
(441, 28, 9, 'Not selected'),
(442, 28, 10, 'Not selected'),
(443, 28, 11, 'Not selected'),
(444, 28, 12, 'Not selected'),
(445, 28, 13, 'Not selected'),
(446, 28, 14, 'Not selected'),
(447, 28, 15, 'Not selected'),
(448, 28, 17, 'multiple'),
(449, 29, 1, 'Someone else'),
(450, 29, 2, 'Postgraduate'),
(451, 29, 3, 'Covid 19 related concern'),
(452, 29, 4, 'you would like to make\r\n'),
(453, 29, 5, 'badboy.png'),
(454, 29, 6, 'multiple'),
(455, 29, 7, 'No'),
(456, 29, 8, '17 or under'),
(457, 29, 9, 'Yes'),
(458, 29, 10, 'Prefer not to say'),
(459, 29, 11, 'Male'),
(460, 29, 12, 'Yes'),
(461, 29, 13, 'Female'),
(462, 29, 14, 'No religion'),
(463, 29, 15, 'Heterosexual/Straight'),
(464, 29, 16, 'multiple'),
(465, 30, 1, 'Someone else'),
(466, 30, 2, 'Staff'),
(467, 30, 3, 'Bullying'),
(468, 30, 4, 'Provide dates, times and locations if possible. You only need to share what you feel comfortable writing\r\nPlease provide any details of the report you would like to make\r\n'),
(469, 30, 5, 'JavaScript.pdf'),
(470, 30, 6, 'Multiple'),
(471, 30, 7, 'No'),
(472, 30, 8, '36 - 45 years'),
(473, 30, 9, 'No'),
(474, 30, 10, 'Prefer not to say'),
(475, 30, 11, 'Non Binary'),
(476, 30, 12, 'No'),
(477, 30, 13, 'Intersex'),
(478, 30, 14, 'Muslim'),
(479, 30, 15, 'Homosexual'),
(480, 30, 17, 'multiple'),
(481, 31, 1, 'My self'),
(482, 31, 2, 'Staff'),
(483, 31, 3, 'Sexual violence'),
(484, 31, 4, 'hj'),
(485, 31, 5, 'reportwithdetails.php'),
(486, 31, 6, 'Multiple'),
(487, 31, 7, 'No'),
(488, 31, 8, 'Not selected'),
(489, 31, 9, 'Not selected'),
(490, 31, 10, 'Prefer not to say'),
(491, 31, 11, 'Not selected'),
(492, 31, 12, 'Not selected'),
(493, 31, 13, 'Not selected'),
(494, 31, 14, 'Hindu'),
(495, 31, 15, 'Heterosexual/Straight'),
(496, 31, 17, 'multiple'),
(497, 32, 1, 'My self'),
(498, 32, 2, 'Staff'),
(499, 32, 3, 'Sexual violence'),
(500, 32, 4, 'hj'),
(501, 32, 5, 'reportwithdetails.php'),
(502, 32, 6, 'Multiple'),
(503, 32, 7, 'No'),
(504, 32, 8, 'Not selected'),
(505, 32, 9, 'Not selected'),
(506, 32, 10, 'Prefer not to say'),
(507, 32, 11, 'Not selected'),
(508, 32, 12, 'Not selected'),
(509, 32, 13, 'Not selected'),
(510, 32, 14, 'Hindu'),
(511, 32, 15, 'Heterosexual/Straight'),
(512, 32, 17, 'multiple'),
(513, 33, 1, 'My self'),
(514, 33, 2, 'Staff'),
(515, 33, 3, 'Sexual violence'),
(516, 33, 4, 'hj'),
(517, 33, 5, 'reportwithdetails.php'),
(518, 33, 6, 'Multiple'),
(519, 33, 7, 'No'),
(520, 33, 8, 'Not selected'),
(521, 33, 9, 'Not selected'),
(522, 33, 10, 'Prefer not to say'),
(523, 33, 11, 'Not selected'),
(524, 33, 12, 'Not selected'),
(525, 33, 13, 'Not selected'),
(526, 33, 14, 'Hindu'),
(527, 33, 15, 'Heterosexual/Straight'),
(528, 33, 17, 'multiple'),
(529, 34, 1, 'My self'),
(530, 34, 2, 'Staff'),
(531, 34, 3, 'Sexual violence'),
(532, 34, 4, 'hj'),
(533, 34, 5, 'reportwithdetails.php'),
(534, 34, 6, 'Multiple'),
(535, 34, 7, 'No'),
(536, 34, 8, 'Not selected'),
(537, 34, 9, 'Not selected'),
(538, 34, 10, 'Prefer not to say'),
(539, 34, 11, 'Not selected'),
(540, 34, 12, 'Not selected'),
(541, 34, 13, 'Not selected'),
(542, 34, 14, 'Hindu'),
(543, 34, 15, 'Heterosexual/Straight'),
(544, 34, 17, 'multiple'),
(545, 35, 1, 'My self'),
(546, 35, 2, 'Staff'),
(547, 35, 3, 'Sexual violence'),
(548, 35, 4, 'hj'),
(549, 35, 5, 'reportwithdetails.php'),
(550, 35, 6, 'Multiple'),
(551, 35, 7, 'No'),
(552, 35, 8, '26 - 35 years'),
(553, 35, 9, 'Not selected'),
(554, 35, 10, 'Prefer not to say'),
(555, 35, 11, 'Not selected'),
(556, 35, 12, 'Not selected'),
(557, 35, 13, 'Not selected'),
(558, 35, 14, 'Hindu'),
(559, 35, 15, 'Heterosexual/Straight'),
(560, 35, 17, 'multiple'),
(561, 36, 1, 'My self'),
(562, 36, 2, 'Postgraduate'),
(563, 36, 3, 'Harassment'),
(564, 36, 4, ' ghfj bgfj'),
(565, 36, 5, 'No File provided'),
(566, 36, 6, 'multiple'),
(567, 36, 7, 'No'),
(568, 36, 8, '22 - 25 years'),
(569, 36, 9, 'Not selected'),
(570, 36, 10, 'Not selected'),
(571, 36, 11, 'Not selected'),
(572, 36, 12, 'Prefer not to say'),
(573, 36, 13, 'Not selected'),
(574, 36, 14, 'Hindu'),
(575, 36, 15, 'Heterosexual/Straight'),
(576, 36, 16, 'multiple'),
(577, 37, 1, 'Someone else'),
(578, 37, 2, 'Postgraduate'),
(579, 37, 3, 'Bullying'),
(580, 37, 4, 'Djj'),
(581, 37, 5, 'No File provided'),
(582, 37, 6, 'Multiple'),
(583, 37, 7, 'Police'),
(584, 37, 8, 'Not selected'),
(585, 37, 9, 'Not selected'),
(586, 37, 10, 'Not selected'),
(587, 37, 11, 'Not selected'),
(588, 37, 12, 'Not selected'),
(589, 37, 13, 'Not selected'),
(590, 37, 14, 'Not selected'),
(591, 37, 15, 'Not selected'),
(592, 37, 17, 'multiple'),
(593, 38, 1, 'My self'),
(594, 38, 2, 'Postgraduate'),
(595, 38, 3, 'Bullying'),
(596, 38, 4, ' kl'),
(597, 38, 5, 'No File provided'),
(598, 38, 6, 'Multiple'),
(599, 38, 7, 'No'),
(600, 38, 8, 'Not selected'),
(601, 38, 9, 'Not selected'),
(602, 38, 10, 'Not selected'),
(603, 38, 11, 'Not selected'),
(604, 38, 12, 'Not selected'),
(605, 38, 13, 'Not selected'),
(606, 38, 14, 'Not selected'),
(607, 38, 15, 'Not selected'),
(608, 38, 17, 'multiple'),
(609, 39, 1, 'Someone else'),
(610, 39, 2, 'Postgraduate'),
(611, 39, 3, 'Bullying'),
(612, 39, 4, 'Djj'),
(613, 39, 5, 'No File provided'),
(614, 39, 6, 'Multiple'),
(615, 39, 7, 'Police'),
(616, 39, 8, 'Not selected'),
(617, 39, 9, 'Not selected'),
(618, 39, 10, 'Not selected'),
(619, 39, 11, 'Not selected'),
(620, 39, 12, 'Not selected'),
(621, 39, 13, 'Not selected'),
(622, 39, 14, 'Not selected'),
(623, 39, 15, 'Not selected'),
(624, 39, 17, 'multiple'),
(625, 40, 1, 'Someone else'),
(626, 40, 2, 'Postgraduate'),
(627, 40, 3, 'Bullying'),
(628, 40, 4, 'Djj'),
(629, 40, 5, 'No File provided'),
(630, 40, 6, 'Multiple'),
(631, 40, 7, 'Police'),
(632, 40, 8, 'Not selected'),
(633, 40, 9, 'Not selected'),
(634, 40, 10, 'Not selected'),
(635, 40, 11, 'Not selected'),
(636, 40, 12, 'Not selected'),
(637, 40, 13, 'Not selected'),
(638, 40, 14, 'Not selected'),
(639, 40, 15, 'Not selected'),
(640, 40, 17, 'multiple'),
(641, 41, 1, 'Someone else'),
(642, 41, 2, 'Postgraduate'),
(643, 41, 3, 'Covid 19 related concern'),
(644, 41, 4, 's'),
(645, 41, 5, 'No File provided'),
(646, 41, 6, 'Multiple'),
(647, 41, 7, 'No'),
(648, 41, 8, 'Not selected'),
(649, 41, 9, 'Not selected'),
(650, 41, 10, 'Not selected'),
(651, 41, 11, 'Not selected'),
(652, 41, 12, 'Not selected'),
(653, 41, 13, 'Not selected'),
(654, 41, 14, 'Not selected'),
(655, 41, 15, 'Not selected'),
(656, 41, 17, 'multiple'),
(657, 42, 1, 'Someone else'),
(658, 42, 2, 'Staff'),
(659, 42, 3, 'Harassment'),
(660, 42, 4, 'mkn'),
(661, 42, 5, 'No File provided'),
(662, 42, 6, 'multiple'),
(663, 42, 7, 'No'),
(664, 42, 8, 'Not selected'),
(665, 42, 9, 'Not selected'),
(666, 42, 10, 'Not selected'),
(667, 42, 11, 'Not selected'),
(668, 42, 12, 'Not selected'),
(669, 42, 13, 'Not selected'),
(670, 42, 14, 'Not selected'),
(671, 42, 15, 'Not selected'),
(672, 42, 16, 'multiple'),
(673, 43, 1, 'Someone else'),
(674, 43, 2, 'Staff'),
(675, 43, 3, 'Bullying'),
(676, 43, 4, 'Ff'),
(677, 43, 5, 'No File provided'),
(678, 43, 6, 'multiple'),
(679, 43, 7, 'No'),
(680, 43, 8, 'Not selected'),
(681, 43, 9, 'Not selected'),
(682, 43, 10, 'Not selected'),
(683, 43, 11, 'Not selected'),
(684, 43, 12, 'Not selected'),
(685, 43, 13, 'Not selected'),
(686, 43, 14, 'Not selected'),
(687, 43, 15, 'Not selected'),
(688, 43, 16, 'multiple'),
(689, 44, 1, 'My self'),
(690, 44, 2, 'Staff'),
(691, 44, 3, 'Physical Violence'),
(692, 44, 4, 'Welcome to the University of York’s Report & Support tool. This is the place to report student misconduct and find out about support available for students from the University and other services.'),
(693, 44, 5, 'computer_graphics_tutorial.pdf'),
(694, 44, 6, 'Multiple'),
(695, 44, 7, 'No'),
(696, 44, 8, '26 - 35 years'),
(697, 44, 9, 'Not selected'),
(698, 44, 10, 'Not selected'),
(699, 44, 11, 'Not selected'),
(700, 44, 12, 'No'),
(701, 44, 13, 'Not selected'),
(702, 44, 14, 'Not selected'),
(703, 44, 15, 'Bi-Sexual'),
(704, 44, 17, 'multiple'),
(705, 45, 1, 'Someone else'),
(706, 45, 2, 'Postgraduate'),
(707, 45, 3, 'Harassment'),
(708, 45, 4, 'admin/assets/uploaded/'),
(709, 45, 5, '1529220807438.jpg'),
(710, 45, 6, 'Multiple'),
(711, 45, 7, 'No'),
(712, 45, 8, '18 - 21 years'),
(713, 45, 9, 'Not selected'),
(714, 45, 10, 'Prefer not to say'),
(715, 45, 11, 'Not selected'),
(716, 45, 12, 'Not selected'),
(717, 45, 13, 'Prefer not to say'),
(718, 45, 14, 'Not selected'),
(719, 45, 15, 'Not selected'),
(720, 45, 17, 'multiple'),
(721, 46, 1, 'Someone else'),
(722, 46, 2, 'Postgraduate'),
(723, 46, 3, 'Harassment'),
(724, 46, 4, 'If applicable, upload any image files that you wish to include as evidence\r\n'),
(725, 46, 5, 'IMG20180617151941.jpg'),
(726, 46, 6, 'Multiple'),
(727, 46, 7, 'No'),
(728, 46, 8, '18 - 21 years'),
(729, 46, 9, 'Not selected'),
(730, 46, 10, 'Prefer not to say'),
(731, 46, 11, 'Non Binary'),
(732, 46, 12, 'Not selected'),
(733, 46, 13, 'Prefer not to say'),
(734, 46, 14, 'Muslim'),
(735, 46, 15, 'Bi-Sexual'),
(736, 46, 17, 'multiple'),
(737, 47, 1, 'Someone else'),
(738, 47, 2, 'Postgraduate'),
(739, 47, 3, 'Physical Violence'),
(740, 47, 4, 'hetr syei nu   }\r\n\r\n                                                                 ?>  }\r\n\r\n                                                                 ?>  }\r\n\r\n                                                                 ?>'),
(741, 47, 5, 'about.php'),
(742, 47, 6, 'multiple'),
(743, 47, 7, 'No'),
(744, 47, 8, '22 - 25 years'),
(745, 47, 9, 'No'),
(746, 47, 10, 'Prefer not to say'),
(747, 47, 11, 'Female'),
(748, 47, 12, 'No'),
(749, 47, 13, 'Intersex'),
(750, 47, 14, 'Muslim'),
(751, 47, 15, 'Bi-Sexual'),
(752, 47, 16, 'multiple'),
(753, 48, 1, 'My self'),
(754, 48, 2, 'Postgraduate'),
(755, 48, 3, 'Sexual violence'),
(756, 48, 4, 'hetr syei nu   }\r\n\r\n                                                                 ?>  }\r\n\r\n                                                                 ?>  }\r\n\r\n                                                                 ?>'),
(757, 48, 5, 'about.php'),
(758, 48, 6, 'multiple'),
(759, 48, 7, 'Police'),
(760, 48, 8, '22 - 25 years'),
(761, 48, 9, 'No'),
(762, 48, 10, 'Prefer not to say'),
(763, 48, 11, 'Female'),
(764, 48, 12, 'No'),
(765, 48, 13, 'Intersex'),
(766, 48, 14, 'Muslim'),
(767, 48, 15, 'Bi-Sexual'),
(768, 48, 16, 'multiple'),
(769, 49, 1, 'My self'),
(770, 49, 2, 'Postgraduate'),
(771, 49, 3, 'Sexual violence'),
(772, 49, 4, 'hetr syei nu   }\r\n\r\n                                                                 ?>  }\r\n\r\n                                                                 ?>  }\r\n\r\n                                                                 ?>'),
(773, 49, 5, 'No File provided'),
(774, 49, 6, 'multiple'),
(775, 49, 7, 'Police'),
(776, 49, 8, '22 - 25 years'),
(777, 49, 9, 'No'),
(778, 49, 10, 'Prefer not to say'),
(779, 49, 11, 'Female'),
(780, 49, 12, 'No'),
(781, 49, 13, 'Intersex'),
(782, 49, 14, 'Muslim'),
(783, 49, 15, 'Bi-Sexual'),
(784, 49, 16, 'multiple'),
(785, 50, 1, 'My self'),
(786, 50, 2, 'Undergraduate'),
(787, 50, 3, 'Sexual violence'),
(788, 50, 4, 'Provide dates, times and locations if possible. You only need to share what you feel comfortable writing\r\nProvide dates, times and locations if possible. You only need to share what you feel comfortable writing\r\nProvide dates, times and locations if possible. You only need to share what you feel comfortable writing\r\nProvide dates, times and locations if possible. You only need to share what you feel comfortable writing\r\n'),
(789, 50, 5, 'water.jpg'),
(790, 50, 6, 'multiple'),
(791, 50, 7, 'Police'),
(792, 50, 8, '18 - 21 years'),
(793, 50, 9, 'No'),
(794, 50, 10, 'Not selected'),
(795, 50, 11, 'Female'),
(796, 50, 12, 'No'),
(797, 50, 13, 'Intersex'),
(798, 50, 14, 'Muslim'),
(799, 50, 15, 'Homosexual'),
(800, 50, 16, 'multiple'),
(801, 51, 1, 'Someone else'),
(802, 51, 2, 'Postgraduate'),
(803, 51, 3, 'Bullying'),
(804, 51, 4, 'jhg'),
(805, 51, 5, 'logo.jpeg'),
(806, 51, 6, 'multiple'),
(807, 51, 7, 'No'),
(808, 51, 8, 'Not selected'),
(809, 51, 9, 'Not selected'),
(810, 51, 10, 'Not selected'),
(811, 51, 11, 'Not selected'),
(812, 51, 12, 'Not selected'),
(813, 51, 13, 'Not selected'),
(814, 51, 14, 'Not selected'),
(815, 51, 15, 'Not selected'),
(816, 51, 16, 'multiple');

-- --------------------------------------------------------

--
-- Structure for view `anonymous_report`
--
DROP TABLE IF EXISTS `anonymous_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `anonymous_report`  AS SELECT `rs`.`ID` AS `ID`, `rs`.`RESPONDENT_ID` AS `RESPONDENT_ID`, `rt`.`TYPE` AS `TYPE`, `rs`.`QUESTION_ID` AS `QUESTION_ID`, `q`.`QUESTION` AS `QUESTION`, `rs`.`ANSWER` AS `ANSWER`, `rt`.`DATE_CREATED` AS `DATE_CREATED` FROM ((`responses` `rs` join `questions` `q` on(`rs`.`QUESTION_ID` = `q`.`ID`)) join `respondents` `rt` on(`rt`.`ID` = `rs`.`RESPONDENT_ID`)) ORDER BY `rs`.`ID` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `report`
--
DROP TABLE IF EXISTS `report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report`  AS SELECT `respondents`.`ID` AS `ID`, `respondents`.`TYPE` AS `TYPE`, `respondents`.`DATE_CREATED` AS `DATE_CREATED`, (select `responses`.`ANSWER` from `responses` where `responses`.`RESPONDENT_ID` = `respondents`.`ID` and `responses`.`QUESTION_ID` = 3) AS `ABOUT` FROM `respondents` ;

-- --------------------------------------------------------

--
-- Structure for view `reports`
--
DROP TABLE IF EXISTS `reports`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reports`  AS SELECT `r`.`ID` AS `ID`, `r`.`TYPE` AS `TYPE`, `r`.`DATE_CREATED` AS `DATE_CREATED`, `r`.`ARCHIVE` AS `ARCHIVE`, `r`.`READ` AS `READ`, `rr`.`ANSWER` AS `ABOUT` FROM (`respondents` `r` join `responses` `rr` on(`r`.`ID` = `rr`.`RESPONDENT_ID` and `rr`.`QUESTION_ID` = 3)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anonymous_reasons`
--
ALTER TABLE `anonymous_reasons`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `link_categories`
--
ALTER TABLE `link_categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `related_factors`
--
ALTER TABLE `related_factors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `respondents`
--
ALTER TABLE `respondents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anonymous_reasons`
--
ALTER TABLE `anonymous_reasons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `link_categories`
--
ALTER TABLE `link_categories`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `related_factors`
--
ALTER TABLE `related_factors`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `respondents`
--
ALTER TABLE `respondents`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=817;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
