-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 06:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach_name`
--

CREATE TABLE `coach_name` (
  `id` int(11) NOT NULL,
  `coach` varchar(100) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_name`
--

INSERT INTO `coach_name` (`id`, `coach`, `p_id`) VALUES
(1, 'RINKU SOHI', 510),
(2, 'RINKU SOHI', 511),
(4, 'Raj', 513),
(518, 'Raj', 514),
(519, 'Raj', 515),
(520, 'Hirensir', 516),
(522, 'Chandresh', 518),
(523, 'Chandresh', 519),
(524, 'Ilyas', 520),
(525, 'Ilyas', 521),
(526, 'RINKU SOHI', 522),
(527, 'RINKU SOHI', 523),
(528, 'RINKU SOHI', 524),
(529, 'Raj', 525),
(530, 'Raj', 526),
(531, 'Raj', 527),
(532, 'Hirensir', 528),
(533, 'Hirensir', 529),
(534, 'Hirensir', 530),
(535, 'Chandrakant', 531),
(536, 'Chandrakant', 532),
(537, 'Jabirhusen', 533),
(538, 'Jabirhusen', 534),
(539, 'Chandresh', 535),
(540, 'Chandresh', 536),
(541, 'Ilyas', 537),
(542, 'Ilyas', 538),
(543, 'Arun padya', 539),
(544, 'Arun padya', 540),
(545, 'Raj', 541),
(546, 'Raj', 542);

-- --------------------------------------------------------

--
-- Table structure for table `excel_karate_data`
--

CREATE TABLE `excel_karate_data` (
  `SR.NO` int(11) NOT NULL,
  `GENDER` varchar(15) NOT NULL,
  `NAME OF PLAYER` varchar(100) NOT NULL,
  `DATE OF BIRTH` date NOT NULL,
  `BELT` varchar(100) NOT NULL,
  `AGE` int(100) NOT NULL,
  `WEIGHT` int(100) NOT NULL,
  `KATA` varchar(100) NOT NULL,
  `KUMITE` varchar(100) NOT NULL,
  `COACH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excel_karate_data`
--

INSERT INTO `excel_karate_data` (`SR.NO`, `GENDER`, `NAME OF PLAYER`, `DATE OF BIRTH`, `BELT`, `AGE`, `WEIGHT`, `KATA`, `KUMITE`, `COACH`) VALUES
(1, 'F', 'NANCY VIKAS SODHI', '0000-00-00', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(2, 'F', 'NANCY VIKAS SODHI', '0000-00-00', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(3, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(4, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(5, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(6, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(7, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(8, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(9, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(10, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(11, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(12, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(13, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(14, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(15, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(16, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(17, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(18, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(19, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(20, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(21, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(22, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(23, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(24, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(25, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(26, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(27, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(28, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(29, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(30, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(31, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(32, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(33, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(34, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(35, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(36, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(37, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(38, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(39, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(40, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(41, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(42, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(43, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(44, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(45, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(46, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(47, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(48, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(49, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(50, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(51, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(52, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(53, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(54, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(55, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(56, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(57, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(58, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(59, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(60, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(61, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(62, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(63, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(64, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(65, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(66, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(67, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(68, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(69, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(70, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(71, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(72, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(73, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(74, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(75, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(76, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(77, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(78, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(79, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(80, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(81, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(82, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(83, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(84, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(85, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(86, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(87, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(88, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(89, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(90, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(91, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(92, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(93, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(94, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(95, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(96, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(97, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(98, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(99, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(100, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(101, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(102, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(103, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(104, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(105, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(106, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(107, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(108, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(109, 'OHI', 'ISHANI SENGUPTA', '0000-00-00', '', 0, 0, '', '', ''),
(110, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(111, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(112, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(113, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(114, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(115, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(116, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(117, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(118, 'OHI', 'ISHANI SENGUPTA', '0000-00-00', '', 0, 0, '', '', ''),
(119, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(120, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(121, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(122, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(123, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(124, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(125, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(126, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(127, 'F', 'NANCY VIKAS SODHI', '2006-11-26', 'BB', 12, 44, 'Y', 'Y', 'RINKU SOHI'),
(128, '', '', '0000-00-00', '', 0, 0, '', '', ''),
(129, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(130, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(131, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(132, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(133, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(134, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(135, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(136, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(137, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(138, 'F', 'ARYA R. NAIR', '2009-10-06', 'COLOUR', 9, 40, 'Y', 'Y', 'RINKU SOHI'),
(139, 'F', 'CHAUDHARI KHUSHBU V.', '0000-00-00', 'COLOUR', 12, 45, 'Y', 'Y', 'RINKU SOHI'),
(140, 'F', 'PATEL KRUPAL H.', '2004-02-11', 'BB', 14, 43, 'Y', 'Y', 'RINKU SOHI'),
(141, 'F', 'PREETI G. MATHAPATI', '0000-00-00', 'COLOUR', 10, 30, 'Y', 'Y', 'RINKU SOHI'),
(142, 'F', 'ASMI C. RANE', '2011-02-08', 'COLOUR', 7, 29, 'Y', 'Y', 'RINKU SOHI'),
(143, 'F', 'RADHIKA S. PUROHIT', '0000-00-00', 'COLOUR', 12, 46, 'Y', 'Y', 'RINKU SOHI'),
(144, 'F', 'ASHIMA SINGH', '2012-11-06', 'COLOUR', 6, 18, 'Y', 'Y', 'RINKU SOHI'),
(145, 'F', 'MYTHILI MAHESH', '2012-01-04', 'COLOUR', 6, 29, 'Y', 'Y', 'RINKU SOHI'),
(146, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(147, 'F', 'NANCY VIKAS SODHI', '0000-00-00', '', 0, 0, '', '', ''),
(148, 'F', 'NANCY VIKAS SODHI', '0000-00-00', '', 0, 0, '', '', ''),
(149, 'F', 'NANCY VIKAS SODHI', '0000-00-00', '', 0, 0, '', '', ''),
(150, 'F', 'NANCY VIKAS SODHI', '0000-00-00', '', 0, 0, '', '', ''),
(151, 'f', 'NANCY VIKAS ', '0000-00-00', '', 0, 0, '', '', ''),
(152, 'f', 'NANCY  ', '0000-00-00', '', 0, 0, '', '', ''),
(153, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(154, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(155, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(156, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(157, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(158, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(159, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(160, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(161, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(162, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(163, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(164, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(165, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(166, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(167, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(168, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(169, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(170, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(171, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(172, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(173, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(174, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(175, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(176, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(177, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(178, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(179, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(180, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(181, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(182, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(183, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI'),
(184, 'F', 'ISHANI SENGUPTA', '2009-02-12', 'BB', 9, 20, 'Y', 'Y', 'RINKU SOHI');

-- --------------------------------------------------------

--
-- Table structure for table `karate_form_data`
--

CREATE TABLE `karate_form_data` (
  `id` int(11) NOT NULL,
  `competitiondate` date DEFAULT NULL,
  `player_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `belt` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `kata` varchar(100) NOT NULL,
  `kumite` varchar(100) NOT NULL,
  `coach` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karate_form_data`
--

INSERT INTO `karate_form_data` (`id`, `competitiondate`, `player_name`, `gender`, `dob`, `belt`, `age`, `weight`, `kata`, `kumite`, `coach`) VALUES
(510, '2021-02-10', 'NANCY VIKAS SODHI', 'female', '2006-11-21', 'Brown', 15, '44', 'yes', 'yes', 'RINKU SOHI'),
(511, '2021-02-10', 'PALAKSHI VIKAS SODHI', 'female', '2011-10-24', 'Brown', 10, '20', 'yes', 'yes', 'RINKU SOHI'),
(513, '2021-02-10', 'CHAUHAN SHRUSHTI H.', 'female', '2011-03-06', 'Other color', 10, '20', 'yes', 'yes', 'Raj'),
(514, '2021-02-10', 'Anoushka Handa', 'female', '2010-10-10', 'Other color', 11, '25', 'yes', 'yes', 'Raj'),
(515, '2021-02-10', 'Shuchi Kadiya', 'female', '2001-04-18', 'Brown', 20, '43', 'yes', 'yes', 'Raj'),
(516, '2021-02-10', 'Lodhi Nency ', 'female', '2001-09-07', 'Brown', 20, '44', 'no', 'yes', 'Hirensir'),
(518, '2021-02-10', 'KRISHA DHOLAKIA', 'female', '2011-12-03', 'Other color', 10, '31', 'yes', 'yes', 'Chandresh'),
(519, '2021-02-10', 'PATEL KRISHA BHAVIKUMAR', 'female', '2009-03-27', 'Brown', 12, '45', 'yes', 'yes', 'Chandresh'),
(520, '2021-02-10', 'Vaishali Gohte', 'female', '2012-09-20', 'Other color', 9, '20', 'yes', 'yes', 'Ilyas'),
(521, '2021-02-10', 'Sonali', 'female', '2011-01-19', 'Other', 10, '26', 'yes', 'yes', 'Ilyas'),
(522, '2021-02-10', 'BANDAL AADITYA R.', 'male', '1999-05-15', 'Brown', 22, '67', 'yes', 'yes', 'RINKU SOHI'),
(523, '2021-02-10', 'CHAUDHARI DHRUV V.', 'male', '2010-08-20', 'Other color', 11, '17', 'yes', 'yes', 'RINKU SOHI'),
(524, '2021-02-10', 'RISHABH T. PANDEY', 'male', '2008-04-26', 'Brown', 13, '40', 'yes', 'yes', 'RINKU SOHI'),
(525, '2021-02-10', 'Dhyan Patel', 'male', '2011-11-27', 'Other color', 10, '25', 'yes', 'yes', 'Raj'),
(526, '2021-02-10', 'Shashwat Vaghela', 'male', '2011-10-10', 'Other color', 10, '18', 'yes', 'yes', 'Raj'),
(527, '2021-02-10', 'Rudra Patel', 'male', '2006-09-25', 'Other color', 15, '48', 'yes', 'yes', 'Raj'),
(528, '2021-02-10', 'Prajpati Rutvik ', 'male', '1999-10-12', 'Brown', 22, '70', 'no', 'yes', 'Hirensir'),
(529, '2021-02-10', 'parmar yuvraj sinh ', 'male', '2009-10-05', 'Other color', 12, '22', 'yes', 'yes', 'Hirensir'),
(530, '2021-02-10', 'Ajmeri jenish ', 'male', '2008-02-07', 'Brown', 13, '29', 'yes', 'yes', 'Hirensir'),
(531, '2021-02-10', 'BURHANUDDIN', 'male', '2005-09-02', 'Other', 16, '47', 'yes', 'yes', 'Chandrakant '),
(532, '2021-02-10', 'MANUSH KALPESHBHAI RAJYAGURU', 'male', '2005-09-02', 'Other color', 16, '60', 'yes', 'yes', 'Chandrakant '),
(533, '2021-02-10', 'Akshat C.Soni', 'male', '2008-10-18', 'Brown', 13, '35', 'yes', 'yes', 'Jabirhusen'),
(534, '2021-02-10', 'Yash A Jayswal', 'male', '2005-08-26', 'Other color', 16, '48', 'yes', 'yes', 'Jabirhusen'),
(535, '2021-02-10', 'KAVYA CHIRAG SHAH', 'male', '2009-08-17', 'Brown', 12, '24', 'yes', 'yes', 'Chandresh'),
(536, '2021-02-10', 'PATEL DHAIRYA NITESHKUMAR', 'male', '2010-10-02', 'Other color', 11, '20', 'yes', 'yes', 'Chandresh'),
(537, '2021-02-10', 'Prajapati Kamal', 'male', '1997-10-05', 'Brown', 24, '59', 'yes', 'yes', 'Ilyas'),
(538, '2021-02-10', 'Yashraj Kotiya', 'male', '2012-12-12', 'Other color', 9, '21', 'yes', 'yes', 'Ilyas'),
(539, '2021-02-10', 'ARISH ARIFBHAI VHORA', 'male', '2008-06-19', 'Other color', 13, '29', 'yes', 'yes', 'Arun padya'),
(540, '2021-02-10', 'AYUSH ROHIBHAI DEROLA', 'male', '2010-05-14', 'Other color', 11, '20', 'yes', 'yes', 'Arun padya'),
(541, '2021-02-11', 'yash', 'male', '2013-05-11', 'Black', 8, '44', 'yes', 'yes', 'Raj'),
(542, '2021-02-18', 'Dhruv', 'male', '2011-08-08', 'Other color', 10, '44', 'yes', 'yes', 'Raj'),
(543, '2021-02-18', 'Harshil', 'male', '2005-05-18', 'Brown', 16, '55', 'yes', 'yes', 'Chandresh'),
(544, '2021-02-18', 'PARSHVA CHETAN SHAH', 'male', '2014-01-18', 'Other color', 7, '44', 'yes', 'yes', 'Chandresh'),
(545, '2021-02-18', 'YUG  DILIPKUMAR PARMAR', 'male', '2010-01-21', 'Other color', 11, '38', 'yes', 'yes', 'Arun padya'),
(546, '2021-02-18', 'MEGH JIGAR GANDHI', 'male', '2010-01-18', 'Other color', 11, '40', 'yes', 'yes', 'Chandresh'),
(547, '2021-02-18', 'SHUBHAM YADAV', 'male', '2009-01-17', 'Other color', 12, '44', 'yes', 'yes', 'RINKU SOHI'),
(548, '2021-02-18', 'DHRUVITSINH B MAHIDA', 'male', '2013-07-19', 'Other color', 8, '30', 'yes', 'yes', 'Chandresh'),
(549, '2021-02-18', 'Mistry Parth Alkesh', 'male', '2008-08-16', 'Brown', 13, '35', 'yes', 'yes', 'Ilyas'),
(550, '2021-02-18', 'KANISH SINGH', 'male', '2012-06-21', 'Other color', 9, '34', 'yes', 'yes', 'Chandresh'),
(551, '2021-02-18', 'Faizuddin A Kazi', 'female', '2008-08-18', 'Other color', 13, '44', 'yes', 'yes', 'Jabirhusen'),
(552, '2021-02-18', 'Jishan M Maniyar', 'male', '2006-06-18', 'Other color', 15, '71', 'yes', 'yes', 'Jabirhusen'),
(553, '2021-02-18', 'Sahimkhan Pathan', 'male', '2008-01-19', 'Other color', 13, '38', 'yes', 'yes', 'Jabirhusen'),
(554, '2021-02-18', 'DWEEP V. GADKARI', 'male', '2010-01-29', 'Other color', 11, '34', 'yes', 'yes', 'RINKU SOHI'),
(555, '2021-02-18', 'HARPALPRAVINSHIH SOLANKI', 'male', '2012-02-23', 'Other color', 9, '35', 'yes', 'yes', 'Arun padya'),
(556, '2021-02-18', 'Thakkar Darshan', 'male', '2011-01-18', 'Other color', 10, '48', 'yes', 'yes', 'Ilyas'),
(560, '2021-03-24', 'Trivedi Abhi A.', 'male', '1999-03-01', 'Black', 21, '67', 'yes', 'no', 'Raj'),
(561, '2021-03-15', 'Parmar Indra A.', 'male', '1998-10-06', 'Other COlor', 23, '70', 'yes', 'no', 'Rinku Sohi'),
(562, '2021-03-05', 'Captain Jack sparrow ', 'male', '1963-06-09', 'Brown', 58, '65', 'yes', 'yes', 'Yash'),
(563, '2021-03-08', 'sonali', 'female', '2011-02-17', 'Other color', 10, '38', 'yes', 'yes', 'RINKU SOHI'),
(564, '2021-03-08', 'Maitri', 'female', '2008-02-23', 'Other color', 13, '44', 'yes', 'yes', 'RINKU SOHI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach_name`
--
ALTER TABLE `coach_name`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `p_id` (`p_id`);

--
-- Indexes for table `excel_karate_data`
--
ALTER TABLE `excel_karate_data`
  ADD PRIMARY KEY (`SR.NO`);

--
-- Indexes for table `karate_form_data`
--
ALTER TABLE `karate_form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach_name`
--
ALTER TABLE `coach_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=547;

--
-- AUTO_INCREMENT for table `excel_karate_data`
--
ALTER TABLE `excel_karate_data`
  MODIFY `SR.NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `karate_form_data`
--
ALTER TABLE `karate_form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=565;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coach_name`
--
ALTER TABLE `coach_name`
  ADD CONSTRAINT `coach_name_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `karate_form_data` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
