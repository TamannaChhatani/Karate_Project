-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 11:16 AM
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
(564, '2021-03-08', 'Maitri', 'female', '2008-02-23', 'Other color', 13, '44', 'yes', 'yes', 'RINKU SOHI'),
(565, '2021-03-09', 'Nikhil Makwana Balwatbahi', 'Male', '0000-00-00', 'Colour Belt', 11, '34', 'No', 'Yes', 'DAHOD'),
(566, '2021-03-09', 'Meet Daraji Bharatbhai', 'Male', '0000-00-00', 'Colour Belt', 10, '34', 'No', 'Yes', 'VADODARA Corp.'),
(567, '2021-03-09', 'Varshil Arvindbhai Vasoya', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT Corp.'),
(568, '2021-03-09', 'Yash Chandubhsi Lakkad', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT Corp.'),
(569, '2021-03-09', 'Divy Jagdishbhai Khakhariya', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT Corp.'),
(570, '2021-03-09', 'ISHAN RAJEEV JASWAL', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'VADODARA Corp.'),
(571, '2021-03-09', 'Rohit dadusingbhai bij', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'VALSAD'),
(572, '2021-03-09', 'JAYADIP JASUBHAI PARMAR', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'MAHESANA'),
(573, '2021-03-09', 'Utpal Rajendrabhai Chaudhari', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT Corp.'),
(574, '2021-03-09', 'VINAY YOGESHKUMAR PRANAMI', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'BANASKANTHA'),
(575, '2021-03-09', 'Vipul Madhubhai Gurav', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'VALSAD'),
(576, '2021-03-09', 'MAMATA ARAJANBHAI PARAMAR', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(577, '2021-03-09', 'SHUBHAM PARESHKUMAR VAGHELA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT Corp.'),
(578, '2021-03-09', 'Harshil Manilal Parikh', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(579, '2021-03-09', 'Chehor Jivraj bhai Rabari', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(580, '2021-03-09', 'Moryaraj J JAdeja', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'BHAVNAGAR Corp.'),
(581, '2021-03-09', 'Jaimin Dasaratha bhai Panchal', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(583, '2021-03-09', 'Mihir K Suchak', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(584, '2021-03-09', 'JAY DHANSUKHBHAI FINDOLIYA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT GRAMYA'),
(585, '2021-03-09', 'Parthiv Chirag Parekh', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'VADODARA Corp.'),
(586, '2021-03-09', 'MANISHKUMAR GOPARAM SUTHAR', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'NAVSARI'),
(587, '2021-03-09', 'APURVA DEVENDRASINH THAKOR', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'VALSAD'),
(588, '2021-03-09', 'KAUSHALSINGH JITENDRABHAI RAJPUT', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'NAVSARI'),
(589, '2021-03-09', 'NEEL SADEV DESAI', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(591, '2021-03-09', 'Pandiya Abhishek Sanjay', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(595, '2021-03-09', 'Sumit Ram Vadher', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(596, '2021-03-09', 'Ravi Yatinbhai Padariya', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT Corp.'),
(598, '2021-03-09', 'Aaksaa Abdul Aalam', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'PANCHMAHALS'),
(600, '2021-03-09', 'RUTVIK RAJENDRAKUMAR BAROT', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(603, '2021-03-09', 'SAHDEVBHAI GAGJIBHAI BAVALVA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD GRAMYA'),
(604, '2021-03-09', 'Yogeshbhai jerambhai vagadiya', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD GRAMYA'),
(605, '2021-03-09', 'Ved vipulbhai bhavashar', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Aravalli'),
(608, '2021-03-09', 'MANISHKUMAR DHIRUBHAI VAGADIYA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD GRAMYA'),
(609, '2021-03-09', 'VINIT MUKESHBHAI GOHEL', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD GRAMYA'),
(611, '2021-03-09', 'ZILL SANJAYKUMAR PATEL', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'ANAND'),
(613, '2021-03-09', 'Harsh Prakashkumar Parmar', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(614, '2021-03-09', 'PURVI A PATEL', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'NAVSARI'),
(615, '2021-03-09', 'SHIV SATISHBHAI PRAJAPATI', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT GRAMYA'),
(616, '2021-03-09', 'RAVI RAGHU RATHOD', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT GRAMYA'),
(617, '2021-03-09', 'DATTESH RAVINDRARAO ZAREKAR', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'VADODARA Corp.'),
(618, '2021-03-09', 'RAM PASHURAM GYANCHAND', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'KACHCHH'),
(619, '2021-03-09', 'Hardik Sarad Baraiya', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(620, '2021-03-09', 'SURESH GORABHAI GAMARA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD GRAMYA'),
(621, '2021-03-09', 'Hitesh Bijal Rathod', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(622, '2021-03-09', 'CHAITANYA SATISHPRASAD BHATT', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD GRAMYA'),
(623, '2021-03-09', 'Mayur A Bheda', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(624, '2021-03-09', 'Vijay Rama Jadav', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(625, '2021-03-09', 'Sandip K Vadher', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(626, '2021-03-09', 'NISHIKANT DHARNIDHAR DATTA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(627, '2021-03-09', 'Pitesha Jesa Bhoda', 'Male', '0000-00-00', 'Colour Belt', 9, '37', 'No', 'Yes', 'Gir Somnath'),
(628, '2021-03-09', 'DHYEY PANKAJBHAI HANSALIYA', 'Male', '0000-00-00', 'Colour Belt', 8, '37', 'No', 'Yes', 'JAMNAGAR GRAMYA'),
(629, '2021-03-09', 'ILESHBHAI RAMESHAI DAMOR', 'Male', '0000-00-00', 'Colour Belt', 7, '37', 'No', 'Yes', 'Mahisagar'),
(630, '2021-03-09', 'RAJESH DASRTBHAI THAKOR', 'Male', '0000-00-00', 'Colour Belt', 8, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(631, '2021-03-09', 'Jeet bhadeshbhai nayi', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(632, '2021-03-09', 'Ajay kalubhai bharvad', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(633, '2021-03-09', 'MANISHBHAI RAMESHBHAI DAMOR', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(634, '2021-03-09', 'DIRENDESIN DILPSIH RAJPUT', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(635, '2021-03-09', 'ARCHITKUMAR VINODBHAI PATEL', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'NAVSARI'),
(636, '2021-03-09', 'MEET FAKIRBHAI GUJALKAR', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(637, '2021-03-09', 'Vivek H Chudasama', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'Gir Somnath'),
(641, '2021-03-09', 'Milan H Chudasama', 'Male', '0000-00-00', 'Colour Belt', 16, '37', 'No', 'Yes', 'BANASKANTHA'),
(642, '2021-03-09', 'Kamlesh Dasha Jetava', 'Male', '0000-00-00', 'Colour Belt', 17, '37', 'No', 'Yes', 'Gir Somnath'),
(643, '2021-03-09', 'AJAMAD ANAVARBHAI PATHAN', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'Gir Somnath'),
(644, '2021-03-09', 'VRAJ NARESHBHAI PRAJAPATI', 'Male', '0000-00-00', 'Colour Belt', 14, '37', 'No', 'Yes', 'BANASKANTHA'),
(645, '2021-03-09', 'MILAN RAJESHBHAI PRAJAPATI', 'Male', '0000-00-00', 'Colour Belt', 13, '37', 'No', 'Yes', 'BANASKANTHA'),
(646, '2021-03-09', 'Rumit narsinhb thakor', 'Male', '0000-00-00', 'Colour Belt', 10, '37', 'No', 'Yes', 'AHMADABAD GRAMYA'),
(647, '2021-03-09', 'DHARAMVIR HIRALAL MAHANTO', 'Male', '0000-00-00', 'Colour Belt', 9, '37', 'No', 'Yes', 'Gir Somnath'),
(648, '2021-03-09', 'CHRISTOPHER L GEORGE', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(649, '2021-03-09', 'SAHI ABIDALI RAIN', 'Male', '0000-00-00', 'Colour Belt', 17, '37', 'No', 'Yes', 'TAPI'),
(650, '2021-03-09', 'JATIN BHARAT MORE', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'TAPI'),
(651, '2021-03-09', 'UBED YUNUS MIRZA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'TAPI'),
(652, '2021-03-09', 'ANSH MODH SANJAYKUMAR', 'Male', '0000-00-00', 'Colour Belt', 10, '37', 'No', 'Yes', 'BANASKANTHA'),
(653, '2021-03-09', 'Dharmesh Rameshbhai Chohan', 'Male', '0000-00-00', 'Colour Belt', 5, '37', 'No', 'Yes', 'JUNAGADH'),
(654, '2021-03-09', 'MITANG HASHMUKH BHAI LAKHANI', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT GRAMYA'),
(655, '2021-03-09', 'TARJ VIJAYKUMAR CHAUDHARI', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(656, '2021-03-09', 'KISHOR PALABHAI CHAUHAN', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'Gir Somnath'),
(657, '2021-03-09', 'HARSH SATISHKUMAR LILAVALA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'SURAT Corp.'),
(658, '2021-03-09', 'Hareshbhai Pragabhai Chaudhary', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'BANASKANTHA'),
(659, '2021-03-09', 'SAURAV SATISHBHAI CHAUHAN', 'Male', '0000-00-00', 'Colour Belt', 6, '37', 'No', 'Yes', 'SURAT Corp.'),
(660, '2021-03-09', 'VISHVAJIT SANJAYAKUMAR MAKVANA', 'Male', '0000-00-00', 'Colour Belt', 15, '37', 'No', 'Yes', 'SABARKANTHA'),
(661, '2021-03-09', 'Mukeshbhai Bhalabhai Deshai', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'BANASKANTHA'),
(662, '2021-03-09', 'Nitin Rameshbhai Shingala', 'Male', '0000-00-00', 'Colour Belt', 13, '37', 'No', 'Yes', 'JUNAGADH'),
(663, '2021-03-09', 'OMDEVSINH VANRAJSINH CHUDASAMA', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(664, '2021-03-09', 'KAUSHIKBHAI HAJABHAI KIDESHA', 'Male', '0000-00-00', 'Colour Belt', 10, '37', 'No', 'Yes', 'Gir Somnath'),
(665, '2021-03-09', 'Kuldip R Chaudhary', 'Male', '0000-00-00', 'Colour Belt', 5, '37', 'No', 'Yes', 'BANASKANTHA'),
(666, '2021-03-09', 'VIPUL ASHOKBHAI MALI', 'Male', '0000-00-00', 'Colour Belt', 7, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(667, '2021-03-09', 'Kausik Prakash Rukhi', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'PATAN'),
(668, '2021-03-09', 'HARSHIL GAUTAMKUMAR DAVE', 'Male', '0000-00-00', 'Colour Belt', 11, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(669, '2021-03-09', 'DEEPAK RAMESH PAREEK', 'Male', '0000-00-00', 'Colour Belt', 15, '37', 'No', 'Yes', 'SURAT Corp.'),
(670, '2021-03-09', 'MANSINH KESHAVBHAI CHAUHAN', 'Male', '0000-00-00', 'Colour Belt', 16, '37', 'No', 'Yes', 'Mahisagar'),
(671, '2021-03-09', 'Rakeshbhai Ranjeetbhai Parmar', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'Mahisagar'),
(672, '2021-03-09', 'PRUTHVIRAJSINH DIPUBHAI RANA', 'Male', '0000-00-00', 'Colour Belt', 14, '37', 'No', 'Yes', 'AHMADABAD GRAMYA'),
(673, '2021-03-09', 'JAN VIJAYBHAI PATEL', 'Male', '0000-00-00', 'Colour Belt', 16, '37', 'No', 'Yes', 'SURAT Corp.'),
(674, '2021-03-09', 'RAJ MAHESH SHARMA', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'VADODARA Corp.'),
(675, '2021-03-09', 'JAYKANT CHINTUBHAI PATEL', 'Male', '0000-00-00', 'Colour Belt', 15, '37', 'No', 'Yes', 'SURAT Corp.'),
(676, '2021-03-09', 'VISHAL SINGH THAKUR', 'Male', '0000-00-00', 'Colour Belt', 14, '37', 'No', 'Yes', 'VADODARA Corp.'),
(677, '2021-03-09', 'CHINTAN PRABHUDASBHAI VEKARIYA', 'Male', '0000-00-00', 'Colour Belt', 15, '37', 'No', 'Yes', 'AMRELI'),
(678, '2021-03-09', 'ABHISHEK NILESH PATEL', 'Male', '0000-00-00', 'Colour Belt', 13, '37', 'No', 'Yes', 'VADODARA Corp.'),
(679, '2021-03-09', 'VISHVAS BAIMIN PATEL', 'Male', '0000-00-00', 'Colour Belt', 13, '37', 'No', 'Yes', 'VADODARA Corp.'),
(680, '2021-03-09', 'NAREDRA NAJBHAI VAGHOSI', 'Male', '0000-00-00', 'Colour Belt', 16, '37', 'No', 'Yes', 'AMRELI'),
(681, '2021-03-09', 'VIVEK NITINBHAI GOHIL', 'Male', '0000-00-00', 'Colour Belt', 17, '37', 'No', 'Yes', 'BANASKANTHA'),
(682, '2021-03-09', 'YUNIT BIRENDRASINGH SINGH', 'Male', '0000-00-00', 'Colour Belt', 14, '37', 'No', 'Yes', 'AHMADABAD Corp.'),
(683, '2021-03-09', 'KALAVADIYA Pravinbhai ZALAVADIYA', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'AMRELI'),
(684, '2021-03-09', 'KARMIT HITESHBHAI SOJITARA', 'Male', '0000-00-00', 'Colour Belt', 13, '37', 'No', 'Yes', 'AMRELI'),
(685, '2021-03-09', 'Ayush Jitesh Soni', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'VALSAD'),
(686, '2021-03-09', 'PRIYANSHU NILESHBHAI PADSALA', 'Male', '0000-00-00', 'Colour Belt', 12, '37', 'No', 'Yes', 'AMRELI'),
(687, '2021-03-09', 'paraskumar ashokkumar chauhan', 'Male', '0000-00-00', 'Colour Belt', 13, '37', 'No', 'Yes', 'BHAVNAGAR GRAMYA'),
(688, '2021-03-09', 'Samarth M Vaghela', 'Male', '0000-00-00', 'Colour Belt', 14, '37', 'No', 'Yes', 'BHARUCH'),
(689, '2021-03-09', 'RAVI MADHUBHAI MUNGALPARA', 'Male', '0000-00-00', 'Colour Belt', 15, '37', 'No', 'Yes', 'AMRELI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karate_form_data`
--
ALTER TABLE `karate_form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karate_form_data`
--
ALTER TABLE `karate_form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=690;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
