-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 09:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `experience` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `name`, `designation`, `experience`, `email`, `password`, `salary`, `register_id`, `image`, `gender`, `department`, `mobile`, `location`) VALUES
(1, 'Dr. Hrituparna Paul', 'Associate Professor', '7 years', 'hrituparna@gmail.com', 'pass123', 35000, 9658742, 'siet4.jpg', 'female', 'CSE', '8956121358', 'Prayagraj,UP'),
(3, 'Ashutosh Pandey', 'Assistant Professor', '15 Years', 'ashutosh@gmail.com', 'ashutosh@1', 40000, 78641468, 'siet2.jpg', 'male', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `mobile`, `password`, `address`, `id`) VALUES
('Aryan Dubey', 'aryandubeygolu2003@gmail.com', 8423111931, 'aryancool', '96/1 kala danda himmatganj Prayagraj', 11),
('Prince Tiwari', 'tiwariprince370@gmail.com', 9198240802, 'prince@123', 'Pratapgarh, UP', 14);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `father`, `mother`, `mobile`, `branch`, `course`, `year`, `password`, `fees`, `email`, `photo`, `gender`, `location`) VALUES
(1, 'Aryan Kumar Dubey', 'Mr. Ajay Kumar Dubey', 'Mrs. Mini Dubey', 8423111931, 'CSE', 'B.Tech', '4th', 'aryan@123', '60000', 'aryandubeygolu2003@gmail.com', 'img1.png', 'male', '96/1 kala Danda Himmatganj Prayagraj, UP'),
(22, 'Prince Tiwari', 'Mr. Hari Shankar Tiwari', 'Mrs. Poonam Tiwari', 9198240802, 'CSE', 'B.Tech', '4th', 'prince@123', '60000', 'tiwariprince370@gmail.com', 'WhatsApp Image 2025-05-01 at 15.31.50_b49e5478.jpg', 'male', 'Pratapgarh, UP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
