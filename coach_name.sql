-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 12:46 PM
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach_name`
--
ALTER TABLE `coach_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=547;

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
