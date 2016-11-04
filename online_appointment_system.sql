-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2016 at 08:14 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_appointment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_history`
--

CREATE TABLE `appointment_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `appointment_date` text NOT NULL,
  `time_id` int(11) NOT NULL,
  `current_status` text NOT NULL,
  `prescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_history`
--

INSERT INTO `appointment_history` (`id`, `user_id`, `disease`, `age`, `doc_id`, `appointment_date`, `time_id`, `current_status`, `prescription`) VALUES
(3, 18, 'Acidity', '24', 1, '10/26/2016', 1, '', ''),
(4, 18, 'hormon disorder', '24', 3, '11/23/2016', 14, '', ''),
(5, 18, 'Pete Batha', '24', 4, '10/31/2016', 13, '', ''),
(8, 2, 'LL', '23', 1, '10/27/2016', 1, 'Improving  fff                                                                                                                                                                                                                                             ', 'Nothing      \r\nshow                                                                                                                                                                                                                                                                                                                                                         '),
(9, 2, 'Acidity', '23', 3, '10/29/2016', 16, ' aa ', ''),
(10, 19, 'Gas', '23', 1, '10/27/2016', 2, '', ''),
(11, 19, 'Acidity', '23', 4, '11/09/2016', 10, '', ''),
(13, 21, 'Acidity', '45', 1, '11/17/2016', 6, '', ''),
(14, 21, 'Gas', '45', 4, '10/28/2016', 10, '', ''),
(15, 22, 'Acidity', '20', 1, '10/27/2016', 6, '', ''),
(17, 22, 'Pete Batha', '20', 4, '11/09/2016', 13, '', ''),
(19, 22, 'hormon disorder', '20', 3, '11/01/2016', 18, '', ''),
(20, 2, 'Acidity', '23', 4, '10/31/2016', 8, ' aa ', ''),
(21, 24, 'Acidity', '32', 1, '10/30/2016', 3, '', ''),
(22, 24, 'hormon disorder', '32', 3, '11/09/2016', 18, '', ''),
(23, 24, 'Pete Batha', '32', 1, '11/01/2016', 5, '', ''),
(24, 23, 'Pete Batha', '25', 1, '10/29/2016', 1, '', ''),
(25, 23, 'Insomnia', '25', 5, '10/27/2016', 13, '', ''),
(26, 22, 'Migrane', '20', 5, '10/27/2016', 14, '', ''),
(27, 20, 'hormon disorder', '19', 7, '11/17/2016', 18, '', ''),
(28, 20, 'Janina', '19', 5, '11/02/2016', 15, '', ''),
(29, 2, 'Acidity', '23', 1, '10/31/2016', 3, '                                         aa                                         ', 'OK                                                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'gastrology'),
(2, 'hormon'),
(3, 'Psychology');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `chamber_id` int(11) NOT NULL,
  `shift` int(11) NOT NULL COMMENT '1=morning, 2=evening',
  `dept_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pro_pic` varchar(255) NOT NULL,
  `start_time` text NOT NULL,
  `end_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doc_name`, `degree`, `chamber_id`, `shift`, `dept_id`, `email`, `password`, `pro_pic`, `start_time`, `end_time`) VALUES
(1, 'AB', 'MBBS', 1, 1, 1, 'ab@gmail.com', '202cb962ac59075b964b07152d234b70', '1475684083_80541992.jpg', '10:00 AM', '12:30 PM'),
(3, 'CD', 'MBBS', 2, 2, 2, 'cd@gmail.com', '202cb962ac59075b964b07152d234b70', '1474967939_52127075.jpg', '08:30 PM', '10:30 PM'),
(4, 'EF', 'fcps', 1, 2, 1, 'ef@gmail.com', '202cb962ac59075b964b07152d234b70', '1474967939_52127075.jpg', '05:00 PM', '08:00 PM'),
(5, 'GH', 'FCPS', 1, 2, 3, 'gh@gmail.com', '202cb962ac59075b964b07152d234b70', '', '07:30 PM', '10:30 PM'),
(6, 'IJ', 'MBBS', 2, 1, 3, 'ij@gmail.com', '202cb962ac59075b964b07152d234b70', '', '10:00 AM', '12:30 PM'),
(8, 'KL', 'MBBS', 2, 2, 3, 'kl@gmail.com', '202cb962ac59075b964b07152d234b70', '', '08:30 PM', '10:30 PM'),
(10, 'MN', 'FCPS', 1, 1, 1, 'mn@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', ''),
(21, 'OP', 'MBBS', 1, 2, 1, 'amin@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medical_center`
--

CREATE TABLE `medical_center` (
  `id` int(11) NOT NULL,
  `medical_center_name` varchar(255) NOT NULL,
  `medical_center_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_center`
--

INSERT INTO `medical_center` (`id`, `medical_center_name`, `medical_center_address`) VALUES
(1, 'Apollo', 'Dhanmondi'),
(2, 'Square', 'Dhanmondi');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `shift` int(11) NOT NULL COMMENT '1=morning, 2=evening',
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `shift`, `time`) VALUES
(1, 1, '10:00 AM'),
(2, 1, '10:30 AM'),
(3, 1, '11:00 AM'),
(4, 1, '11:30 AM'),
(5, 1, '12:00 PM'),
(6, 1, '12:30 PM'),
(7, 2, '05:00 PM'),
(8, 2, '05:30 PM'),
(9, 2, '06:00 PM'),
(10, 2, '06:30 PM'),
(11, 2, '07:00 PM'),
(12, 2, '07:30 PM'),
(13, 2, '08:00 PM'),
(14, 2, '08:30 PM'),
(15, 2, '09:00 PM'),
(16, 2, '09:30 PM'),
(17, 2, '10:00 PM'),
(18, 2, '10:30 PM'),
(19, 2, '11:00 PM'),
(20, 2, '11:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL COMMENT '1=Male , 2=Female',
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET macce COLLATE macce_bin NOT NULL,
  `login_type` int(11) NOT NULL COMMENT '1=User , 2=Doctor , 3=Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `gender`, `age`, `email`, `username`, `password`, `login_type`) VALUES
(2, 'Saq', 1, '23', 'saq@b.n', 'saqib', '202cb962ac59075b964b07152d234b70', 1),
(17, 'admin', 1, '23', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 3),
(19, 'saif', 1, '23', 'saif@gmail.com', 'saif', '202cb962ac59075b964b07152d234b70', 1),
(20, 'Rocky', 1, '19', 'rocky@gmail.com', 'rocky', '202cb962ac59075b964b07152d234b70', 1),
(21, 'Minhaz Kadir', 1, '45', 'minhaz@gmail.com', 'maruf', '202cb962ac59075b964b07152d234b70', 1),
(22, 'Rose', 2, '20', 'rose@gmail.com', 'rose', '202cb962ac59075b964b07152d234b70', 1),
(23, 'Dipabali', 2, '25', 'dipa@gmail.com', 'dipa', '202cb962ac59075b964b07152d234b70', 1),
(24, 'Ashfaq Ahmed', 1, '32', 'ashfaq@gmail.com', 'ashfaq', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_history`
--
ALTER TABLE `appointment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `medical_center`
--
ALTER TABLE `medical_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_history`
--
ALTER TABLE `appointment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `medical_center`
--
ALTER TABLE `medical_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
