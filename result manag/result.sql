-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 01:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(225) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `subn` varchar(255) NOT NULL,
  `cls` varchar(255) NOT NULL,
  `tmark` varchar(255) NOT NULL,
  `pmark` varchar(255) NOT NULL,
  `omark` varchar(255) NOT NULL,
  `texam` varchar(255) NOT NULL,
  `session` int(255) NOT NULL,
  `tname` varchar(225) NOT NULL,
  `tid` varchar(225) NOT NULL,
  `ids` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(225) NOT NULL,
  `v_by` varchar(225) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `sub`, `subn`, `cls`, `tmark`, `pmark`, `omark`, `texam`, `session`, `tname`, `tid`, `ids`, `name`, `status`, `v_by`, `date`) VALUES
(17, '6', '', '3', '100', '35', '90', '1', 2, 'result@123', '', '1 ', 'Hari Yadav', 0, '', '2021-11-09'),
(18, '6', '', '3', '100', '35', '90', '1', 2, 'result@123', '', '1 ', 'Hari Yadav', 0, '', '2021-11-09'),
(19, '4', '4', '3', '100', '35', '90', '1', 2, 'result@123', '', '1 ', 'Hari Yadav', 0, '', '2021-11-09'),
(20, '4', 'History', '3', '100', '35', '90', '1', 2, 'result@123', '', '1 ', 'Hari Yadav', 0, '', '2021-11-09'),
(21, '6', 'Sociology', '1', '100', '35', '40', '2', 2, 'result@123', '', '2 ', 'ramchandra BUDHATHOKI', 0, '', '2021-11-09'),
(25, '', 'Science', '3', '100', '35', '88', '2', 1, 'dd dffd', '', '3   ', 'khilak budhathoki', 1, 'Admin', '2021-11-10'),
(26, '2', 'Math', '3', '100', '35', '98', '1', 1, 'Hari Yadav', '', '3 ', 'khilak budhathoki', 1, 'Admin', '2021-11-10'),
(27, '4', 'History', '3', '100', '35', '89', '2', 3, 'Hari Yadav', '', '3 ', 'khilak budhathoki', 0, '', '2021-11-10'),
(28, '7', 'Computery', '8', '100', '35', '95', '2', 1, 'Hari Yadav', '', '11     ', 'Adarsh Thapa', 0, '', '2021-11-10'),
(29, '7', 'Computer', '11', '25', '10', '20', '1', 1, 'Hari Yadav', '', '11 ', 'Adarsh Thapa', 0, '', '2021-11-10'),
(31, '7', 'Computer', '12', '25', '10', '22', '1', 1, 'Hari Yadav', '', '12 ', 'Padma Sahi ', 0, '', '2021-11-10'),
(32, '7', 'Computer', '13', '100', '35', '34', '2', 1, 'Hari Yadav', '', '13 ', 'Samjhana Shahi', 0, '', '2021-11-10'),
(33, '7', 'Computer', '13', '25', '10', '15', '2', 1, 'Hari Yadav', '', '13 ', 'Samjhana Shahi', 0, '', '2021-11-10'),
(34, '', 'Sociology', '10', '100', '35', '70', '2', 1, 'dd dffd', '', '10   ', 'hemraj thapa', 0, '', '2021-11-10'),
(35, '6', 'Sociology', '16', '100', '35', '99', '2', 1, 'dd dffd', '', '16 ', 'Padma 2', 0, '', '2021-11-10'),
(38, '', 'Sociology', '3', '100', '35', '6660', '2', 1, 'dd dffd', '', '    k', 'hiu', 0, '', '2021-11-11'),
(39, '', 'Sociology', '3', '100', '35', '88', '2', 1, 'dd dffd', '', '3   ', 'khilak budhathoki', 1, 'Admin', '2021-11-11'),
(44, '7', 'Computer', '4', '100', '35', '88', '2', 1, 'dd dffd', '', '4      ', 'gausami kurkuri', 1, 'science', '2021-11-11'),
(45, '6', 'Sociology', '4', '100', '35', '34', '2', 1, 'dd dffd', '', '4 ', 'gausami kurkuri', 0, '', '2021-11-11'),
(50, '3', 'Science', '25', '100', '35', '90', '2', 1, 'science science', '', '25 ', 'Hari parsad Chaudhary', 1, 'Admin', '2021-11-11'),
(51, '7', 'Computer', '3', '100', '35', '98', '2', 1, 'Computer Teacher', '', '3 ', 'khilak budhathoki', 1, 'Admin', '2021-11-11'),
(52, '7', 'Computer', '26', '100', '35', '98', '2', 1, 'Computer Teacher', '', '26 ', 'Ananad Partap', 1, 'Admin', '2021-11-11'),
(54, '3', 'Science', '3', '100', '35', '20', '2', 1, 'science science', '', '3 ', 'khilak budhathoki', 1, 'admin', '2021-11-11'),
(55, '3', 'Science', '25', '100', '35', '55', '2', 1, 'science science', '', '25 ', 'Hari parsad Chaudhary', 0, '', '2021-11-11'),
(56, '3', 'Science', '25', '100', '35', '45', '2', 1, 'science science', '', '25 ', 'Hari parsad Chaudhary', 0, '', '2021-11-11'),
(57, '3', 'Science', '25', '100', '35', '65', '2', 1, 'science science', '', '25 ', 'Hari parsad Chaudhary', 0, '', '2021-11-11'),
(58, '3', 'Science', '25', '25', '35', '23', '1', 1, 'science science', '', '25 ', 'Hari parsad Chaudhary', 0, '', '2021-11-12'),
(59, '7', 'Computer', '4', '100', '35', '45', '2', 1, 'Computer Teacher', '', '4 ', 'khilak budhathoki', 0, '', '2021-11-12'),
(60, '7', 'Computer', '4', '100', '35', '87', '2', 1, 'Computer Teacher', '18', '4 ', 'khilak budhathoki', 0, '', NULL),
(61, '7', 'Computer', '4', '100', '35', '88', '2', 1, 'Computer Teacher', '18', '4 ', 'khilak budhathoki', 0, '', '2021-11-12'),
(62, '4', 'History', '2', '100', '35', '67', '2', 1, 'history history', '21', '33 ', 'hari parsand  update', 1, 'admin', NULL),
(63, '7', 'Computer', '2', '100', '35', '56', '2', 1, 'Computer Teacher', '18', '33 ', 'hari parsand  update', 1, 'admin', NULL),
(64, '7', 'Computer', '2', '100', '35', '65', '2', 1, 'Computer Teacher', '18', '33 ', 'hari parsand  update', 1, 'admin', NULL),
(65, '7', 'Computer', '2', '100', '35', '56', '2', 2, 'Computer Teacher', '18', '2 ', 'ramchandra BUDHATHOKI', 0, '', NULL),
(67, '7', 'Computer', '4', '100', '35', 's', '-Select-', 0, 'Computer Teacher', '18', '27 ', 'Amrit Kumar', 0, '', NULL),
(68, '3', 'Science', '2', '100', '76', '45', '2', 1, 'science science', '18', '39  ', 'studentname studentlname', 1, 'Admin', NULL),
(69, '3', 'Science', '1', '100', '35', '87', '2', 3, 'science science', '22', '35 ', 'Ombabu chauhan', 1, 'Admin', NULL),
(70, '7', 'Computer', '2', '100', '35', '98', '2', 1, 'comptech comlname', '38', '37 ', 'fname no lname', 0, '', NULL),
(71, '7', 'Computer', '2', '100', '35', '78', '2', 2, 'comptech comlname', '38', '37 ', 'fname no lname', 0, '', NULL),
(72, '7', 'Computer', '2', '100', '35', '97', '2', 1, 'comtech complast', '41', '39 ', 'studentname studentlname', 1, 'Admin', NULL),
(74, '4', 'History', '2', '100', '35', '98', '2', 1, 'history history', '21', '39 ', 'studentname studentlname', 1, 'Admin', NULL),
(75, '4', 'History', '2', '100', '35', '56', '2', 2, 'history history', '21', '39 ', 'studentname studentlname', 1, 'Admin', NULL),
(77, '3', 'Science', '2', '100', '35', '88', '2', 2, 'science science', '22', '39 ', 'studentname studentlname', 1, 'Admin', NULL),
(78, '4', 'History', '2', '100', '35', '56', '2', 1, 'history1 lastnamehist1', '44', '42   ', 'fname2 lname2', 0, '', NULL),
(80, '6', 'Sociology', '7', '100', '35', '67', '2', 1, 'socio1 tech sociology', '47', '45   ', 'fclass7 class7lname', 0, '', NULL),
(81, '4', 'History', '6', '100', '35', '78', '2', 1, 'Histry01 last name of histyry', '53', '51  ', 'grade6 singh', 1, 'Admin', NULL),
(82, '6', 'Sociology', '6', '100', '35', '98', '2', 1, 'sociology Sociologyti', '19', '51  ', 'grade6 singh', 2, 'Admin', NULL),
(83, '7', 'Computer', '6', '100', '35', '56', '2', 1, 'Computer Teacher', '18', '51 ', 'grade6 singh', 1, 'Admin', NULL),
(84, '3', 'Science', '6', '100', '35', '68', '2', 1, 'ramp sing', '56', '55 ', 'yuvraj budhathokie', 1, 'Admin', NULL),
(85, '6', 'Sociology', '6', '100', '35', '66', '2', 1, 'sociology Sociologyti', '19', '55  ', 'yuvraj budhathokie', 2, 'Admin', NULL),
(86, '7', 'Computer', '6', '100', '35', '76', '2', 1, 'Computer Teacher', '18', '55 ', 'yuvraj budhathokie', 1, 'Admin', NULL),
(87, '4', 'History', '6', '100', '35', '46', '2', 1, 'history history', '21', '55 ', 'yuvraj budhathokie', 1, 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stddata`
--

CREATE TABLE `stddata` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `cls` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `action` varchar(233) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stddata`
--

INSERT INTO `stddata` (`id`, `fname`, `lname`, `cls`, `father`, `address`, `pass`, `status`, `action`, `date`) VALUES
(1, 'Hari', 'Yadav', '7', 'Ram Lal Yadav', 'gangapur 09', 'result@123', '0\r\n', '', '2021-11-07 18:30:00'),
(3, 'gausami ', 'kurkuri', '4', 'gausami partap kurkuri', 'bangad-kupinde munci.09 sera', 'result@123', '0', '', '2021-11-08 18:30:00'),
(4, 'khilak', 'budhathoki', '4', 'rudra raj ', 'bangad-kupinde munci.09 sera salyan ,nepal', 'result@123', '0', '', '2021-11-09 18:30:00'),
(10, 'hemraj', 'thapa', '8', 'kul nayar', 'prmandfka 09jjkdf', 'result@123', '0', '', '2021-11-09 18:30:00'),
(11, 'Adarsh', 'Thapa', '8', 'surbir', 'Thapa', 'result@123', '0', '', '2021-11-09 18:30:00'),
(12, 'Padma', 'Sahi ', '8', 'Gyaneswor shahi', 'Roorkee,Haldiram pur', 'result@123', '0', '', '2021-11-09 18:30:00'),
(13, 'Samjhana', 'Shahi', '8', 'Gyanesower shahi', 'Roorkee,Halidram pur', 'result@123', '0', '', '2021-11-09 18:30:00'),
(15, 'Admin', 'Admin', '0', 'Admin', 'Admin', 'Test@123', '10', '', '2021-11-09 18:30:00'),
(18, 'Computer', 'Teacher', '7', 'Computer father', 'address laptop', 'result@123', '1', '0', '2021-11-10 18:30:00'),
(19, 'Sociology', 'Sociologyti', '6', 'Sociological fathar', 'sociaological addfeee', 'result@123', '1', '0', '2021-11-10 18:30:00'),
(20, 'gk', 'gk', '5', 'gk father', 'gk address', 'result@123', '1', '0', '2021-11-10 18:30:00'),
(21, 'history', 'history', '4', 'history fatheor', 'address socil', 'result@123', '1', '0', '2021-11-10 18:30:00'),
(22, 'science', 'science', '3', 'father of science', 'address science', 'result@123', '1', '0', '2021-11-10 18:30:00'),
(23, 'math', 'math', '2', 'father math', 'address math', 'result@123', '1', '0', '2021-11-10 18:30:00'),
(24, 'hindi', 'hindi', '1', 'father hindi', 'address hidi', 'result@123', '1', '0', '2021-11-10 18:30:00'),
(25, 'Hari parsad', 'Chaudhary', '4', 'Kali Parsad Chaudary', 'bangad kupinde ,09 des', 'result@123', '0', '', '2021-11-10 18:30:00'),
(26, 'Ananad', 'Partap', '4', 'Rabi Sankar Sharma', 'Bihar,0098', 'result@123', '0', '', '2021-11-10 18:30:00'),
(27, 'Amrit', 'Kumar', '4', 'Ratan lal yadav', 'Bihar 0090', 'result@123', '0', '', '2021-11-10 18:30:00'),
(28, 'samir', 'Ananad', '4', 'Ananad parsad', 'bihar000tttr', 'result@123', '0', '', '2021-11-10 18:30:00'),
(29, 'khilak', '', '4', '', '', '', '', '', '2021-11-11 18:30:00'),
(30, 'khilak', '', '4', '', '', '', '', '', '2021-11-11 18:30:00'),
(33, 'hari', 'parsand  update', '2', 'ram prasand update ', 'bandad kupnd', 'result@123', '0', '', '2021-11-13 14:10:33'),
(35, 'Ombabu', 'chauhan', '1', 'Ram prasad chauhan', 'ganga pur 00098 angmora village', 'result@123', '0', '', '2021-11-13 16:02:08'),
(42, 'fname2', 'lname2', '2', 'father name', 'adresh of', 'result@123', '0', '', '2021-11-15 10:32:04'),
(43, 'fname3', 'laname3', '3', 'fathername3', 'address name3', 'result@123', '0', '', '2021-11-15 10:32:34'),
(45, 'fclass7', 'class7lname', '7', 'father name class 7', 'address class7', 'result@123', '0', '', '2021-11-15 10:40:50'),
(46, 'class1', 'lname class 1', '1', 'father name claass1', 'address class1', 'result@123', '0', '', '2021-11-15 10:41:33'),
(48, 'fnamecls3', 'lname cls3', '3', 'fattheorname', 'address', 'result@123', '0', '', '2021-11-16 13:22:21'),
(49, 'yuvraj', 'budhathoki', '1', 'father', 'adress', 'result@123', '0', '', '2021-11-16 13:23:01'),
(51, 'grade6', 'singh', '6', 'father of grade 6', 'grade 8', 'result@123', '0', '', '2021-11-17 03:46:29'),
(55, 'yuvraj', 'budhathokie', '6', 'father of yuvraj', 'address of me', 'result@123', '0', '', '2021-11-17 04:08:21'),
(56, 'ramp', 'sing', '3', 'father of ramp', 'asd', 'result@123', '1', '0', '2021-11-17 04:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `subgrd`
--

CREATE TABLE `subgrd` (
  `id` int(11) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `cls` int(255) NOT NULL,
  `sid` int(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subgrd`
--

INSERT INTO `subgrd` (`id`, `sub`, `cls`, `sid`, `date`) VALUES
(1, '7', 1, 0, '2021-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `cls` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub`, `cls`, `date`) VALUES
(1, 'Hindi', 2, '0000-00-00 00:00:00'),
(2, 'Math', 2, '2021-11-07 18:30:00'),
(3, 'Science', 2, '2021-11-07 18:30:00'),
(4, 'History', 2, '2021-11-07 18:30:00'),
(5, 'General Knowledge', 2, '2021-11-07 18:30:00'),
(6, 'Sociology', 3, '2021-11-07 18:30:00'),
(7, 'Computer', 2, '2021-11-07 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdb`
--

CREATE TABLE `teacherdb` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `cls` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherdb`
--

INSERT INTO `teacherdb` (`id`, `fname`, `lname`, `cls`, `father`, `address`, `pass`, `date`) VALUES
(1, 'yubraj', 'Yadav', '3', 'ram prasd', 'gangapur 010', 'result@123', '2021-11-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stddata`
--
ALTER TABLE `stddata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subgrd`
--
ALTER TABLE `subgrd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherdb`
--
ALTER TABLE `teacherdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `stddata`
--
ALTER TABLE `stddata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `subgrd`
--
ALTER TABLE `subgrd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacherdb`
--
ALTER TABLE `teacherdb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
