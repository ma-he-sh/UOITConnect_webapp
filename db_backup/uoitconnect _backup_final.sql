-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 08:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
(3313, 44210, 'Systems Programming ', ' SOFE 3200', 3, 'W2', '18:40:00', '21:30:00', 'Tuesday', 'University Building A1 UA2230', '2016-11-29', '2016-11-29', 'Laboratory', 'TBA'),
(3312, 44210, 'Systems Programming ', ' SOFE 3200', 3, 'W2', '18:40:00', '21:30:00', 'Tuesday', 'University Building A1 UA2230', '2016-11-15', '2016-11-15', 'Laboratory', 'TBA'),
(3311, 44210, 'Systems Programming ', ' SOFE 3200', 3, 'W2', '18:40:00', '21:30:00', 'Tuesday', 'University Building A1 UA2230', '2016-11-01', '2016-11-01', 'Laboratory', 'TBA'),
(3310, 44210, 'Systems Programming ', ' SOFE 3200', 3, 'W2', '18:40:00', '21:30:00', 'Tuesday', 'University Building A1 UA2230', '2016-10-11', '2016-10-11', 'Laboratory', 'TBA'),
(3309, 44210, 'Systems Programming ', ' SOFE 3200', 3, 'W2', '18:40:00', '21:30:00', 'Tuesday', 'University Building A1 UA2230', '2016-09-27', '2016-09-27', 'Laboratory', 'TBA'),
(1210, 43346, 'Intro. to Engineering ', ' ENGR 1015', 10, '', '18:40:00', '21:30:00', 'Thursday', 'University Building A9 ENG2035', '2016-09-08', '2016-12-05', 'Laboratory', 'TBA'),
(1225, 43370, 'Intro. to Engineering ', ' ENGR 1015', 28, '', '10:10:00', '11:00:00', 'Wednesday', 'University Building A1 UA2240', '2016-09-08', '2016-12-05', 'Tutorial', 'TBA'),
(1201, 43337, 'Intro. to Engineering ', ' ENGR 1015', 2, '', '09:40:00', '11:00:00', 'Thursday', 'UOIT Pavilion UP1500', '2016-09-08', '2016-12-05', 'Lecture', 'Marc Rosen'),
(1200, 43337, 'Intro. to Engineering ', ' ENGR 1015', 2, '', '08:10:00', '09:30:00', 'Monday', 'UOIT Pavilion UP1500', '2016-09-08', '2016-12-05', 'Lecture', 'Marc Rosen'),
(1125, 44340, 'Micropro. & Computer Architect', ' ELEE 3450', 11, '', '17:10:00', '18:30:00', 'Thursday', 'Library Portables UL11', '2016-09-08', '2016-12-05', 'Tutorial', 'TBA'),
(1113, 44199, 'Micropro. & Computer Architect', ' ELEE 3450', 7, 'W2', '18:40:00', '21:30:00', 'Monday', 'University Building A2 UA2460', '2016-11-28', '2016-11-28', 'Laboratory', 'TBA'),
(1112, 44199, 'Micropro. & Computer Architect', ' ELEE 3450', 7, 'W2', '18:40:00', '21:30:00', 'Monday', 'University Building A2 UA2460', '2016-11-14', '2016-11-14', 'Laboratory', 'TBA'),
(1111, 44199, 'Micropro. & Computer Architect', ' ELEE 3450', 7, 'W2', '18:40:00', '21:30:00', 'Monday', 'University Building A2 UA2460', '2016-10-31', '2016-10-31', 'Laboratory', 'TBA'),
(1110, 44199, 'Micropro. & Computer Architect', ' ELEE 3450', 7, 'W2', '18:40:00', '21:30:00', 'Monday', 'University Building A2 UA2460', '2016-10-24', '2016-10-24', 'Laboratory', 'TBA'),
(1109, 44199, 'Micropro. & Computer Architect', ' ELEE 3450', 7, 'W2', '18:40:00', '21:30:00', 'Monday', 'University Building A2 UA2460', '2016-09-26', '2016-09-26', 'Laboratory', 'TBA'),
(1083, 44193, 'Micropro. & Computer Architect', ' ELEE 3450', 1, '', '15:40:00', '17:00:00', 'Friday', 'University Building A3 UB2080', '2016-09-08', '2016-12-05', 'Lecture', 'Khalid A. Hafeez'),
(1082, 44193, 'Micropro. & Computer Architect', ' ELEE 3450', 1, '', '14:10:00', '15:30:00', 'Tuesday', 'University Building A3 UB2080', '2016-09-08', '2016-12-05', 'Lecture', 'Khalid A. Hafeez'),
(3302, 44208, 'Systems Programming ', ' SOFE 3200', 1, '', '15:40:00', '17:00:00', 'Wednesday', 'Simcoe Building J125', '2016-09-08', '2016-12-05', 'Lecture', 'Michael J. Benne'),
(3303, 44208, 'Systems Programming ', ' SOFE 3200', 1, '', '14:10:00', '15:30:00', 'Friday', 'Simcoe Building J125', '2016-09-08', '2016-12-05', 'Lecture', 'Michael J. Benne'),
(3314, 44211, 'Systems Programming ', ' SOFE 3200', 4, '', '12:40:00', '14:00:00', 'Tuesday', 'Library Portables UL9', '2016-09-08', '2016-12-05', 'Tutorial', 'TBA'),
(3315, 43509, 'Software Design & Architecture', ' SOFE 3650', 1, '', '15:40:00', '17:00:00', 'Monday', 'Simcoe Building J125', '2016-09-08', '2016-12-05', 'Lecture', 'Mohamed El-Attar'),
(3316, 43509, 'Software Design & Architecture', ' SOFE 3650', 1, '', '14:10:00', '15:30:00', 'Wednesday', 'Simcoe Building J125', '2016-09-08', '2016-12-05', 'Lecture', 'Mohamed El-Attar'),
(3318, 44212, 'Software Design & Architecture', ' SOFE 3650', 4, '', '11:10:00', '14:00:00', 'Monday', 'Energy Research Centre ERC1092', '2016-09-08', '2016-12-05', 'Laboratory', 'TBA'),
(3320, 43511, 'Data Management Systems ', ' SOFE 3700', 1, '', '09:40:00', '11:00:00', 'Tuesday', 'Simcoe Building J127', '2016-09-08', '2016-12-05', 'Lecture', 'Khalid A. Hafeez'),
(3321, 43511, 'Data Management Systems ', ' SOFE 3700', 1, '', '08:10:00', '09:30:00', 'Thursday', 'Simcoe Building J127', '2016-09-08', '2016-12-05', 'Lecture', 'Khalid A. Hafeez'),
(3323, 44213, 'Data Management Systems ', ' SOFE 3700', 3, '', '12:10:00', '14:00:00', 'Thursday', 'Energy Research Centre ERC1096', '2016-09-08', '2016-12-05', 'Laboratory', 'TBA'),
(3324, 43513, 'Design & Analys. of Algorithms', ' SOFE 3770', 1, '', '15:40:00', '17:00:00', 'Tuesday', 'Simcoe Building J127', '2016-09-08', '2016-12-05', 'Lecture', 'Shahryar Rahnama'),
(3325, 43513, 'Design & Analys. of Algorithms', ' SOFE 3770', 1, '', '14:10:00', '15:30:00', 'Thursday', 'Simcoe Building J127', '2016-09-08', '2016-12-05', 'Lecture', 'Shahryar Rahnama'),
(3326, 43514, 'Design & Analys. of Algorithms', ' SOFE 3770', 2, '', '09:40:00', '11:00:00', 'Thursday', 'Simcoe Building J127', '2016-09-08', '2016-12-05', 'Tutorial', 'TBA');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `text` varchar(255) NOT NULL,
  `prof` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `crn` int(11) NOT NULL,
  `rec_type` varchar(225) NOT NULL,
  `event_length` int(11) NOT NULL,
  `event_pid` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `start_date`, `end_date`, `text`, `prof`, `location`, `crn`, `rec_type`, `event_length`, `event_pid`, `user`) VALUES
(56, '2016-09-08 14:10:00', '2016-12-05 15:30:00', ' ELEE 3450U - Micropro. & Computer Architect - 1', 'Khalid A. Hafeez', 'University Building A3 UB2080', 44193, 'week_1___2', 4800, 0, 100491187),
(57, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' ELEE 3450U - Micropro. & Computer Architect - 1', 'Khalid A. Hafeez', 'University Building A3 UB2080', 44193, 'week_1___5', 4800, 0, 100491187),
(58, '2016-09-26 18:40:00', '2016-09-26 21:30:00', ' ELEE 3450U - Micropro. & Computer Architect - 7', 'TBA', 'University Building A2 UA2460', 44199, 'week_1___1', 10200, 0, 100491187),
(59, '2016-10-24 18:40:00', '2016-10-24 21:30:00', ' ELEE 3450U - Micropro. & Computer Architect - 7', 'TBA', 'University Building A2 UA2460', 44199, 'week_1___1', 10200, 0, 100491187),
(60, '2016-10-31 18:40:00', '2016-10-31 21:30:00', ' ELEE 3450U - Micropro. & Computer Architect - 7', 'TBA', 'University Building A2 UA2460', 44199, 'week_1___1', 10200, 0, 100491187),
(61, '2016-11-14 18:40:00', '2016-11-14 21:30:00', ' ELEE 3450U - Micropro. & Computer Architect - 7', 'TBA', 'University Building A2 UA2460', 44199, 'week_1___1', 10200, 0, 100491187),
(62, '2016-11-28 18:40:00', '2016-11-28 21:30:00', ' ELEE 3450U - Micropro. & Computer Architect - 7', 'TBA', 'University Building A2 UA2460', 44199, 'week_1___1', 10200, 0, 100491187),
(63, '2016-09-08 17:10:00', '2016-12-05 18:30:00', ' ELEE 3450U - Micropro. & Computer Architect - 11', 'TBA', 'Library Portables UL11', 44340, 'week_1___4', 4800, 0, 100491187),
(73, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' SOFE 3200U - Systems Programming - 1', 'Michael J. Bennett', 'Simcoe Building J125', 44208, 'week_1___3', 4800, 0, 100491187),
(74, '2016-09-08 14:10:00', '2016-12-05 15:30:00', ' SOFE 3200U - Systems Programming - 1', 'Michael J. Bennett', 'Simcoe Building J125', 44208, 'week_1___5', 4800, 0, 100491187),
(76, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' SOFE 3650U - Software Design & Architecture - 1', 'Mohamed El-Attar', 'Simcoe Building J125', 43509, 'week_1___1', 4800, 0, 100491187),
(77, '2016-09-08 14:10:00', '2016-12-05 15:30:00', ' SOFE 3650U - Software Design & Architecture - 1', 'Mohamed El-Attar', 'Simcoe Building J125', 43509, 'week_1___3', 4800, 0, 100491187),
(78, '2016-09-08 11:10:00', '2016-12-05 14:00:00', ' SOFE 3650U - Software Design & Architecture - 4', 'TBA', 'Energy Research Centre ERC1092', 44212, 'week_1___1', 10200, 0, 100491187),
(79, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___2', 4800, 0, 100491187),
(80, '2016-09-08 08:10:00', '2016-12-05 09:30:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___4', 4800, 0, 100491187),
(81, '2016-09-08 12:10:00', '2016-12-05 14:00:00', ' SOFE 3700U - Data Management Systems - 3', 'TBA', 'Energy Research Centre ERC1096', 44213, 'week_1___4', 6600, 0, 100491187),
(82, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' SOFE 3770U - Design & Analys. of Algorithms - 1', 'Shahryar Rahnamayan', 'Simcoe Building J127', 43513, 'week_1___2', 4800, 0, 100491187),
(83, '2016-09-08 14:10:00', '2016-12-05 15:30:00', ' SOFE 3770U - Design & Analys. of Algorithms - 1', 'Shahryar Rahnamayan', 'Simcoe Building J127', 43513, 'week_1___4', 4800, 0, 100491187),
(84, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3770U - Design & Analys. of Algorithms - 2', 'TBA', 'Simcoe Building J127', 43514, 'week_1___4', 4800, 0, 100491187),
(86, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' SOFE 3200U - Systems Programming - 1', 'Michael J. Bennett', 'Simcoe Building J125', 44208, 'week_1___3', 4800, 0, 100555353),
(87, '2016-09-08 14:10:00', '2016-12-05 15:30:00', ' SOFE 3200U - Systems Programming - 1', 'Michael J. Bennett', 'Simcoe Building J125', 44208, 'week_1___', 4800, 0, 100555353),
(94, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' ELEE 3450U - Micropro. & Computer Architect - 1', 'Khalid A. Hafeez', 'University Building A3 UB2080', 44193, 'week_1___5', 4800, 0, 100555353),
(95, '2016-09-08 12:40:00', '2016-12-05 14:00:00', ' ELEE 3250U - Electric Machines - 7', 'TBA', 'Energy Research Centre ERC1094', 44192, 'week_1___1', 4800, 0, 100555353),
(96, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___2', 4800, 0, 100665880),
(97, '2016-09-08 08:10:00', '2016-12-05 09:30:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___4', 4800, 0, 100665880),
(98, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___2', 4800, 0, 100547276),
(99, '2016-09-08 08:10:00', '2016-12-05 09:30:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___4', 4800, 0, 100547276),
(100, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___2', 4800, 0, 100553999),
(101, '2016-09-08 08:10:00', '2016-12-05 09:30:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___4', 4800, 0, 100553999),
(102, '2016-09-08 12:40:00', '2016-12-05 14:00:00', ' SOFE 3200U - Systems Programming - 4', 'TBA', 'Library Portables UL9', 44211, 'week_1___2', 4800, 0, 100553999),
(103, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3770U - Design & Analys. of Algorithms - 2', 'TBA', 'Simcoe Building J127', 43514, 'week_1___4', 4800, 0, 100553999),
(104, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' SOFE 3650U - Software Design & Architecture - 1', 'Mohamed El-Attar', 'Simcoe Building J125', 43509, 'week_1___1', 4800, 0, 100553999),
(105, '2016-09-08 14:10:00', '2016-12-05 15:30:00', ' SOFE 3650U - Software Design & Architecture - 1', 'Mohamed El-Attar', 'Simcoe Building J125', 43509, 'week_1___3', 4800, 0, 100553999),
(106, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___2', 4800, 0, 100555353),
(107, '2016-09-08 08:10:00', '2016-12-05 09:30:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___4', 4800, 0, 100555353),
(108, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___2', 4800, 0, 111222333),
(109, '2016-09-08 08:10:00', '2016-12-05 09:30:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___4', 4800, 0, 111222333),
(110, '2016-09-08 14:10:00', '2016-12-05 15:30:00', ' ELEE 3450U - Micropro. & Computer Architect - 1', 'Khalid A. Hafeez', 'University Building A3 UB2080', 44193, 'week_1___2', 4800, 0, 111222333),
(111, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' ELEE 3450U - Micropro. & Computer Architect - 1', 'Khalid A. Hafeez', 'University Building A3 UB2080', 44193, 'week_1___5', 4800, 0, 111222333),
(112, '2016-09-27 18:40:00', '2016-09-27 21:30:00', ' SOFE 3200U - Systems Programming - 3', 'TBA', 'University Building A1 UA2230', 44210, 'week_1___2', 10200, 0, 111222333),
(113, '2016-10-11 18:40:00', '2016-10-11 21:30:00', ' SOFE 3200U - Systems Programming - 3', 'TBA', 'University Building A1 UA2230', 44210, 'week_1___2', 10200, 0, 111222333),
(114, '2016-11-01 18:40:00', '2016-11-01 21:30:00', ' SOFE 3200U - Systems Programming - 3', 'TBA', 'University Building A1 UA2230', 44210, 'week_1___2', 10200, 0, 111222333),
(115, '2016-11-15 18:40:00', '2016-11-15 21:30:00', ' SOFE 3200U - Systems Programming - 3', 'TBA', 'University Building A1 UA2230', 44210, 'week_1___2', 10200, 0, 111222333),
(116, '2016-11-29 18:40:00', '2016-11-29 21:30:00', ' SOFE 3200U - Systems Programming - 3', 'TBA', 'University Building A1 UA2230', 44210, 'week_1___2', 10200, 0, 111222333),
(117, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3770U - Design & Analys. of Algorithms - 2', 'TBA', 'Simcoe Building J127', 43514, 'week_1___4', 4800, 0, 111222333),
(118, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___2', 4800, 0, 100542925),
(119, '2016-09-08 08:10:00', '2016-12-05 09:30:00', ' SOFE 3700U - Data Management Systems - 1', 'Khalid A. Hafeez', 'Simcoe Building J127', 43511, 'week_1___4', 4800, 0, 100542925),
(120, '2016-09-08 09:40:00', '2016-12-05 11:00:00', ' SOFE 3770U - Design & Analys. of Algorithms - 2', 'TBA', 'Simcoe Building J127', 43514, 'week_1___4', 4800, 0, 100542925),
(123, '2016-09-08 15:40:00', '2016-12-05 17:00:00', ' SOFE 3200U - Systems Programming - 1', 'Michael J. Bennett', 'Simcoe Building J125', 44208, 'week_1___3', 4800, 0, 100542925),
(124, '2016-09-08 14:10:00', '2016-12-05 15:30:00', ' SOFE 3200U - Systems Programming - 1', 'Michael J. Bennett', 'Simcoe Building J125', 44208, 'week_1___5', 4800, 0, 100542925);

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
(100491187, 100547276),
(100491187, 100553999),
(100491187, 100665880),
(100491187, 111222333),
(100542925, 100553999),
(100542925, 100555353),
(100542925, 111222333),
(100547276, 100555353),
(100553999, 100547276),
(100553999, 100555353),
(100553999, 100665880),
(100553999, 111222333),
(100555232, 100555353),
(100555353, 100491187),
(100555353, 100547276),
(100555353, 100553999),
(100555353, 100555232),
(100555353, 100665880),
(100555353, 111222333),
(100665880, 100491187),
(100665880, 100555232),
(100665880, 100555353);

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
(100555232, 'mi@asd', 'Anush', 'SOFE', 0, '250cf8b51c773f3f8dc8b4be867a9a02', '250cf8b51c773f3f8dc8b4be867a9a02'),
(100491187, '456@das.com', 'Rajiv Galva', 'Engineering', 0, '250cf8b51c773f3f8dc8b4be867a9a02', '250cf8b51c773f3f8dc8b4be867a9a02'),
(100665880, 'dontfailus@please.com', 'Justin', 'Basket Weaving', 0, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(100547276, 'a@a.a', 'Travis Madill', 'Computer Repair and Dissection Engineering', 0, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(100553999, 'notarealengineer@faker.com', 'Varun Gopikrishna', 'Sleep and Food Engineering', 0, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(111222333, 'iamrealtrump@whitehouse.com', 'DonaldTrump', 'Make America America Great Again and Masonary', 0, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(100542925, 'zhihan@whyamihere.com', 'Zhihan', 'Software Engineering', 0, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `stud_courseinfo`
--

CREATE TABLE `stud_courseinfo` (
  `stud_id` int(11) NOT NULL,
  `crn` char(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_courseinfo`
--

INSERT INTO `stud_courseinfo` (`stud_id`, `crn`) VALUES
(100491187, '43509'),
(100491187, '43510'),
(100491187, '43511'),
(100491187, '43513'),
(100491187, '43514'),
(100491187, '43963'),
(100491187, '44193'),
(100491187, '44199'),
(100491187, '44208'),
(100491187, '44212'),
(100491187, '44213'),
(100491187, '44340'),
(100542925, '43511'),
(100542925, '43514'),
(100542925, '44208'),
(100547276, '43511'),
(100553999, '43509'),
(100553999, '43511'),
(100553999, '43514'),
(100553999, '44211'),
(100555353, '43511'),
(100555353, '44192'),
(100555353, '44193'),
(100555353, '44208'),
(100555353, '44213'),
(100665880, '43511'),
(111222333, '43511'),
(111222333, '43514'),
(111222333, '44193'),
(111222333, '44210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_data`
--
ALTER TABLE `course_data`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
