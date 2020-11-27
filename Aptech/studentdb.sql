-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 05:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `Document` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentId`, `Name`, `Phone`, `Email`, `Password`, `Gender`, `Image`, `Document`) VALUES
(8, 'Waleed ghani', '03202010410', 'Waleed@gmail.com', 'waleed123', 'Male', 'Uploads/StudentImages/638016.png', 'Uploads/Documents/716625bootstrap-4.5.2-dist.zip'),
(9, 'Huma wania Shaikh', '03202010410', '', '123', 'Female', 'Uploads/StudentImages/181361.png', 'Uploads/Documents/395972accordion.min.js'),
(10, 'Zain ahmed 2', '03202010411', 'Zain@gmail.com', '123', 'Male', 'Uploads/StudentImages/198336.png', 'Uploads/Documents/29936545933masjid digital signage.pdf'),
(13, 'malik', '03202010410', 'malik@gmail.com', '123', 'Male', 'Uploads/StudentImages/841485.png', 'Uploads/Documents/924191image1.jpg'),
(14, 'Waleed ghani', '03202010410', 'Waleed@gmail.com', 'waleed123', 'Male', '', ''),
(17, 'Irtaza', '03202010410', 'ali@gmail.com', '123', 'Male', '', ''),
(19, 'Huma wania Shaikh', '03202010410', 'Huma@gmail.com', '', '', '', ''),
(21, 'ali', '0320-9865321', 'ali@gmail.com', '', '', '', ''),
(22, 'Zain ahmed', '03202010410', 'Zain@gmail.com', '', '', '', ''),
(23, 'Zain ahmed', '03202010410', 'Zain@gmail.com', '', '', '', ''),
(24, 'Zain ahmed', '03202010410', 'Zain@gmail.com', '', '', '', ''),
(25, 'Zain ahmed', '03202010410', 'Zain@gmail.com', '', '', '', ''),
(26, 'farwa', '03202010410', 'farwa@gmail.com', '', '', '', ''),
(27, 'farwa', '03202010410', 'farwa@gmail.com', '', '', '', ''),
(28, 'Zaheen fatima', '03202010410', 'Fatima@gmail.com', '', '', '', ''),
(29, 'ali', '03202010410', '9f3efe5f6440fb71b7a29f2ec9706638558987377c5df7c8e1', '123', 'Male', '', ''),
(30, 'ali', '03202010410', '9f3efe5f6440fb71b7a29f2ec9706638558987377c5df7c8e1', '123', 'Male', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Image` text,
  `TeacherId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentId`, `Name`, `Phone`, `Email`, `Password`, `Image`, `TeacherId`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Ghani Waqas', '0320-9865321', 'ghani@gmail.com', 'ghani123', NULL, 3, NULL, NULL),
(2, 'Raees Zada Yasir', '0320-9865321', 'Raees@gmail.com', 'ghani123', NULL, NULL, NULL, '2020-11-20 05:13:26'),
(3, 'ali', '03202010410', 'ali@gmail.com', '123', NULL, 1, '2020-11-13 00:58:24', '2020-11-13 00:58:24'),
(5, 'Zain ahmed', '03202010410', 'Zain@gmail.com', '123', NULL, 3, '2020-11-19 23:30:48', '2020-11-19 23:30:48'),
(6, 'ali', '03202010410', 'ali@gmail.com', '123', 'uploads/kpzylwyug9UTbrLDr7AiVZclQwBTcNdZWmQxIt5d.jpeg', 1, '2020-11-20 05:41:07', '2020-11-23 05:24:38'),
(7, 'Zain ahmed', '03202010410', 'Zain@gmail.com', '123', 'uploads/cwMv8bB85DwVD1cGyqOhXy9J2ThAwiFTjiAVpv4Y.jpeg', 2, '2020-11-20 05:49:15', '2020-11-20 05:49:15'),
(8, 'Huma wania Shaikh\"', '03202010410', 'Huma@gmail.com', '123', 'uploads/uDouXQ0pVVHeMQDnDR9Wqg2xRU7FKbfQH5qzBb3K.jpeg', 1, '2020-11-20 05:49:46', '2020-11-20 05:49:46'),
(9, 'Waleed', '03202010410', 'Waleed@gmail.com', '123', 'uploads/codJM5MFIp2tpBESDqgyewNQ17Q2v26KkGvinjc8.jpeg', 3, '2020-11-20 05:50:05', '2020-11-20 05:50:05'),
(10, 'Maryam', '03202010410', 'maryam@gmail.com', '123', 'uploads/hv6oPQ1EvSfMHo9aHGCoS0X3lEK2LPu3r4CUaxoK.jpeg', 2, '2020-11-23 05:49:17', '2020-11-23 05:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `TeacherId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`TeacherId`, `Name`, `Phone`, `created_at`, `updated_at`) VALUES
(1, 'Sir Shahnawaz khan jadoon', '03202010410', '2020-11-23 05:14:53', '2020-11-23 05:14:53'),
(2, 'Sir hassan Javed', '03202010410', '2020-11-23 05:15:06', '2020-11-23 05:15:06'),
(3, 'Sir Daniyal', '03202010410', '2020-11-23 05:15:14', '2020-11-23 05:15:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentId`),
  ADD KEY `TeacherId` (`TeacherId`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`TeacherId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `TeacherId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`TeacherId`) REFERENCES `teachers` (`TeacherId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
