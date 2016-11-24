-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 06:51 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uoitconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_data`
--

CREATE TABLE `course_data` (
  `cid` int(11) NOT NULL,
  `crn` int(11) NOT NULL,
  `ctitle` varchar(30) NOT NULL,
  `ccode` varchar(10) NOT NULL,
  `section` int(11) NOT NULL,
  `week` varchar(2) DEFAULT NULL,
  `stime` varchar(8) NOT NULL,
  `etime` varchar(8) NOT NULL,
  `day` varchar(9) NOT NULL,
  `location` varchar(30) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `ctype` varchar(10) NOT NULL,
  `professor` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_data`
--

INSERT INTO `course_data` (`cid`, `crn`, `ctitle`, `ccode`, `section`, `week`, `stime`, `etime`, `day`, `location`, `sdate`, `edate`, `ctype`, `professor`) VALUES
(1, 43509, 'Software Design & Architecture', 'SOFE 3650U', 1, NULL, '15:40:00', '17:00:00', 'Monday', 'Simcoe Building J125', '2016-09-08', '2016-05-12', 'Lecture', 'Mohamed El-Attar'),
(2, 43509, 'Software Design & Architecture', 'SOFE 3650U', 1, NULL, '14:10:00', '15:30:00', 'Wednesday', 'Simcoe Building J125', '2016-09-08', '2016-05-12', 'Lecture', 'Mohamed El-Attar'),
(3, 43963, 'Software Design & Architecture', 'SOFE 3650U', 3, NULL, '18:40:00', '21:30:00', 'Wednesday', 'University Building A1 UA2230', '2016-09-08', '2016-05-12', 'Laboratory', 'TBA'),
(4, 43510, 'Software Design & Architecture', 'SOFE 3650U', 2, NULL, '15:40:00', '17:00:00', 'Thursday', 'Simcoe Building J127', '2016-09-08', '2016-05-12', 'Tutorial', 'TBA'),
(5, 41641, 'Marketing Research', 'BUSI 3260U', 1, NULL, '8:10:00', '9:30:00', 'Tuesday', 'Energy Research Centre ERC1094', '2016-09-08', '2016-05-12', 'Lecture', 'Salma Karray'),
(6, 41641, 'Marketing Research', 'BUSI 3260U', 1, NULL, '9:40:00', '11:00:00', 'Friday', 'Energy Research Centre ERC1094', '2016-09-08', '2016-05-12', 'Lecture', 'Salma Karray'),
(7, 40143, 'Graphic Design I', 'INFR 1310U', 1, NULL, '14:10:00', '17:00:00', 'Tuesday', 'University Building A1 UA1220', '2016-09-08', '2016-05-12', 'Lecture', 'Mike Hansen'),
(8, 40143, 'Graphic Design I', 'INFR 1310U', 3, NULL, '8:10:00', '11:00:00', 'Wednesday', 'Simcoe Building J127', '2016-09-08', '2016-05-12', 'Lecture', 'Mike Hansen'),
(9, 40673, 'Intro to Nuclear Reactor Tech.', 'ENGR 3860U', 1, NULL, '14:10:00', '17:00:00', 'Tuesday', 'University Building A3 UB2034', '2016-09-08', '2016-05-12', 'Lecture', 'George Bereznai'),
(10, 40674, 'Intro to Nuclear Reactor Tech.', 'ENGR 3860U', 2, 'W1', '16:10:00', '17:00:00', 'Wednesday', 'Energy Research Centre ERC3027', '2016-09-21', '2016-09-21', 'Tutorial', 'TBA');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `stud_id` int(11) NOT NULL,
  `frnd_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`stud_id`, `frnd_id`) VALUES
(100456892, 100522349),
(100491187, 100522349),
(100491187, 100542925),
(100491187, 100652348),
(100522349, 100456892),
(100522349, 100542925),
(100522349, 100652348),
(100542925, 100491187),
(100542925, 100522349),
(100542925, 100556989),
(100555353, 100565788),
(100556989, 100542925),
(100652348, 100491187),
(100652348, 100522349);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` int(11) NOT NULL,
  `stud_email` varchar(320) NOT NULL,
  `stud_name` varchar(320) NOT NULL,
  `stud_field` varchar(320) NOT NULL,
  `stud_verify` int(11) DEFAULT '0',
  `passw1` varchar(200) NOT NULL,
  `passw2` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `stud_email`, `stud_name`, `stud_field`, `stud_verify`, `passw1`, `passw2`) VALUES
(100555353, 'mi6softlab@gmail.com', 'Mahesh', 'Sofe', 0, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(100555232, 'mi@asd', 'Anush', 'SOFE', 0, '250cf8b51c773f3f8dc8b4be867a9a02', '250cf8b51c773f3f8dc8b4be867a9a02');

-- --------------------------------------------------------

--
-- Table structure for table `stud_courseinfo`
--

CREATE TABLE `stud_courseinfo` (
  `stud_id` int(11) NOT NULL,
  `crn` char(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_data`
--
ALTER TABLE `course_data`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`stud_id`,`frnd_id`),
  ADD KEY `frnd_id` (`frnd_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `stud_courseinfo`
--
ALTER TABLE `stud_courseinfo`
  ADD PRIMARY KEY (`stud_id`,`crn`),
  ADD KEY `crn` (`crn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
