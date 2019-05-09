-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2019 at 11:59 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `username` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`) VALUES
(1, 'Jordyn Jones', 'JJones', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `id_sch` varchar(10) DEFAULT NULL,
  `director` varchar(80) DEFAULT NULL,
  `founded_in` date DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `id_sch`, `director`, `founded_in`, `description`, `img`) VALUES
(1, 'Energy', '1', 'Emy Perez', '1890-10-10', 'The mission of the Energy Department is to ensure America?s security and prosperity by addressing its energy, environmental and nuclear challenges through transformative science and technology solutions.', 'eng.jpg'),
(2, 'Oceanography', '1', 'Veronica Rodrigo Hu', NULL, 'The Department of Oceanography is located on the University of Hawaii\'s largest campus (about 20,000 students), overlooking Waikiki and downtown Honolulu, the State Capitol and business and cultural center. As a designated \'area of excellence\', the marine and earth sciences enjoy strong support at the State and University levels.', NULL),
(3, 'Food & Agriculture', '1', 'William McHang', '1920-12-01', 'The mission of the Office of Environmental Farming & Innovation is to serve California by supporting agricultural production and incentivizing practices resulting in a net benefit for the environment through innovation, efficient management and science.', 'foo.png'),
(4, 'Genetics', '2', 'Kyle Poppins', '1899-02-10', 'A leader in the biomedical revolution, Stanford Medicine has a long tradition of leadership in pioneering research, creative teaching protocols and effective clinical therapies.', 'gen.jpg'),
(5, 'Chemical Engineering', '3', 'Leslie Draco', '1900-10-01', 'Chemical engineering occupies a unique position at the interface between molecular sciences and engineering. Intimately linked with the fundamental subjects of chemistry, biology, mathematics, and physics - chemical engineering offers unparalleled opportunities to do great things.', 'che.jpg'),
(6, 'Computer Science', '3', 'Bill Ortega', '1900-10-01', 'The Department was organized in 1965 and is one of the oldest departments of its kind in the country. The history of the department, including major events and when faculty joined, appears in the CS Timeline. It has a full-time faculty of nearly 40 with around 275-300 students graduating each year.', 'com.jpeg'),
(7, 'Finance', '4', 'Ortega Tyler', '1900-01-01', 'We administer the tax and revenue laws of the City fairly, efficiently and transparently to instill public confidence and encourage compliance while providing exceptional customer service.', 'fin.png'),
(8, 'Public Relations', '4', 'Paul Kazuya', '1980-06-10', 'To find a list of Principal Officers, Assistant Secretaries, Ambassadors and Chiefs of Mission, please select a link from \'In This Section\' on the left. Information on these pages is updated periodically and may not reflect the most current status of appointments and personnel changes.', 'pub.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `department_view`
--
CREATE TABLE `department_view` (
`id` int(11)
,`name` varchar(80)
,`id_sch` varchar(10)
,`director` varchar(80)
,`founded_in` date
,`description` varchar(500)
,`img` varchar(200)
,`school` varchar(80)
);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`) VALUES
(1, 'Environmental Sciences'),
(2, 'Medicine'),
(3, 'Engineering'),
(4, 'Humanity & Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `job` varchar(80) DEFAULT NULL,
  `img` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `job`, `img`) VALUES
(1, 'Jordyn Jones', 'Associate Professor', 'p1.jpg'),
(2, 'William Smith', 'Professor', 'p2.jpg'),
(3, 'Carl Johnson', 'Professor', 'p3.jpg'),
(4, 'Gordon Glum', 'Associate Professor', 'p4.jpg'),
(5, 'Erica Klein', 'Adjunct Professor', 'p5.jpg'),
(6, 'Seth Roy', 'Professor', 'p6.jpg'),
(7, 'Amada Olsen', 'Professor', 'p7.jpg'),
(8, 'Tom Cruise', 'Adjunct Professor', 'p8.jpg'),
(9, 'Jordan Bill', 'Professor', 'p9.jpg'),
(10, 'Socrates', 'Professor', 'p10.jpg'),
(11, 'Jaimie Love', 'Lecturer and Co-Director', 'p11.jpg');

-- --------------------------------------------------------

--
-- Structure for view `department_view`
--
DROP TABLE IF EXISTS `department_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `department_view`  AS  select `departments`.`id` AS `id`,`departments`.`name` AS `name`,`departments`.`id_sch` AS `id_sch`,`departments`.`director` AS `director`,`departments`.`founded_in` AS `founded_in`,`departments`.`description` AS `description`,`departments`.`img` AS `img`,`schools`.`name` AS `school` from (`departments` join `schools` on((`departments`.`id_sch` = `schools`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
