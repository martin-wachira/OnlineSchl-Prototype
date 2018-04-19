-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 10:13 PM
-- Server version: 5.5.22
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

CREATE TABLE `lib` (
  `id` int(11) NOT NULL,
  `idno` int(11) NOT NULL,
  `isbno` varchar(100) NOT NULL,
  `course` text NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`id`, `idno`, `isbno`, `course`, `title`) VALUES
(1, 2525, '25mb', 'Computer Science', 'Operating System'),
(5, 12, '123wed', 'Mass Communication', 'fundamentals of journalism'),
(6, 12, '123wed', 'Mass Communication', 'fundamentals of journalism'),
(13, 1, '1', 'Electrical Engineering', '1'),
(14, 452, '87966', 'Computer Science', 'Operating system fundamentals'),
(15, 452, '78955', 'Interior Design', 'interior design fundamentals');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `s_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `id` int(11) NOT NULL,
  `radio` varchar(100) NOT NULL,
  `courses` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`s_id`, `fname`, `sname`, `id`, `radio`, `courses`, `skill`, `password`) VALUES
(1, 'Not sensible! TF', 'New', 22114455, 'on', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'Joe', 'Biden', 789, '', 'Mechanical Engoineering', 'on', '1722a28089f91b73fff8708c26800a5e'),
(3, 'kim', 'w', 6622546, '', 'Interior Design', 'on', 'fb1eaf2bd9f2a7013602be235c305e7a'),
(4, 'stud', 'stud', 555, 'Distance', 'Electrical Engineering', 'on', 'b9ac0988cdd72928bc964d81d5858bb7'),
(5, 'here', 'here', 7894475, '', 'Interior Design', '', '6c92285fa6d3e827b198d120ea3ac674'),
(6, 'new', 'new', 342112243, '', 'Electrical Engineering', '', '15d61712450a686a7f365adf4fef581f'),
(7, 'name', 'name', 65738429, 'Full-time', 'Interior Design', 'on', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'Diana', 'Diana', 87456825, 'Full-time', 'Computer Science', '', '93b63feb993716772ef3b15b08b8e8a8'),
(9, 'j', 'k', 56356243, '', 'Interior Design', 'on', '363b122c528f54df4a0446b6bab05515'),
(10, 'l', 'u', 2123422, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, 'l', 'u', 2123422, '', 'Mechanical Engineering', 'on', '36f3af6226e0b5303e19b824e7442272'),
(12, 'r', 'r', 134356, 'on', 'Electrical Engineering', 'on', '36f3af6226e0b5303e19b824e7442272'),
(13, 'w', 'w', 24264523, 'Full-time', 'Computer Science', 'on', 'ff1ccf57e98c817df1efcd9fe44a8aeb'),
(14, 'mart', 'mart', 1234, 'Part-time', 'Interior Design', 'on', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'Mart', 'Martin', 98765, 'Full-time', 'B/S Management', 'on', 'df6d2338b2b8fce1ec2f6dda0a630eb0'),
(16, 'kim', 'kim', 8, 'Distance', 'Electrical Engineering', 'on', 'c9f0f895fb98ab9159f51fd0297e236d'),
(17, 'lo', 'lo', 23, 'Part-time', 'Mechanical Engineering', 'on', '6364d3f0f495b6ab9dcf8d3b5c6e0b01'),
(18, 'Martin', 'Johns', 452, 'Part-time', 'Computer Science', 'on', '9431c87f273e507e6040fcb07dcb4509'),
(19, 'Duke', 'Duke', 232, 'Full-time', 'Mechanical Engineering', 'on', 'be83ab3ecd0db773eb2dc1b0a17836a1'),
(20, 'Lydiah', 'Mine', 452, 'Full-time', 'Mass Communication', 'on', '818f9c45cfa30eeff277ef38bcbe9910');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib`
--
ALTER TABLE `lib`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib`
--
ALTER TABLE `lib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_register`
--
ALTER TABLE `student_register`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
