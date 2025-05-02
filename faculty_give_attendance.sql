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
-- Database: `faculty_give_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_by_facultyid_1`
--

CREATE TABLE `attendance_by_facultyid_1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `roll_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_by_facultyid_1`
--

INSERT INTO `attendance_by_facultyid_1` (`id`, `name`, `roll_no`) VALUES
(1, 'Aryan Kumar Dubey', 10),
(2, 'Prince Tiwari', 12),
(3, 'Amar Singh', 13),
(4, 'Priyanshu Mishra', 4);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_by_facultyid_3`
--

CREATE TABLE `attendance_by_facultyid_3` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `roll_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_by_facultyid_3`
--

INSERT INTO `attendance_by_facultyid_3` (`id`, `name`, `roll_no`) VALUES
(1, 'Aryan Kumar Dubey', 1),
(2, 'Prince Tiwari', 2),
(3, 'Amar Singh', 3),
(4, 'Priyanshu Mishra', 4);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_record_by_facultyid_1`
--

CREATE TABLE `attendance_record_by_facultyid_1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `roll_no` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_record_by_facultyid_1`
--

INSERT INTO `attendance_record_by_facultyid_1` (`id`, `name`, `roll_no`, `status`, `date`) VALUES
(1, 'Aryan Kumar Dubey', 10, 'Present', '2025-03-26'),
(2, 'Prince Tiwari', 12, 'Absent', '2025-03-26'),
(3, 'Amar Singh', 13, 'Absent', '2025-03-26'),
(4, 'Aryan Kumar Dubey', 10, 'Present', '2025-04-22'),
(5, 'Prince Tiwari', 12, 'Present', '2025-04-22'),
(6, 'Amar Singh', 13, 'Present', '2025-04-22'),
(7, 'Aryan Kumar Dubey', 10, 'Present', '2025-04-26'),
(8, 'Prince Tiwari', 12, 'Absent', '2025-04-26'),
(9, 'Amar Singh', 13, 'Present', '2025-04-26'),
(10, 'Aryan Kumar Dubey', 10, 'Present', '2025-04-28'),
(11, 'Prince Tiwari', 12, 'Absent', '2025-04-28'),
(12, 'Amar Singh', 13, 'Present', '2025-04-28'),
(13, 'Aryan Kumar Dubey', 10, 'Present', '2025-05-02'),
(14, 'Prince Tiwari', 12, 'Present', '2025-05-02'),
(15, 'Amar Singh', 13, 'Present', '2025-05-02'),
(16, 'Priyanshu Mishra', 4, 'Present', '2025-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_record_by_facultyid_3`
--

CREATE TABLE `attendance_record_by_facultyid_3` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `roll_no` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_record_by_facultyid_3`
--

INSERT INTO `attendance_record_by_facultyid_3` (`id`, `name`, `roll_no`, `status`, `date`) VALUES
(1, 'Aryan Kumar Dubey', 1, 'Present', '2025-04-30'),
(2, 'Prince Tiwari', 2, 'Absent', '2025-04-30'),
(3, 'Amar Singh', 3, 'Absent', '2025-04-30'),
(4, 'Priyansgu Mishra', 4, 'Present', '2025-04-30'),
(5, 'Aryan Kumar Dubey', 1, 'Present', '2025-05-01'),
(6, 'Prince Tiwari', 2, 'Present', '2025-05-01'),
(7, 'Amar Singh', 3, 'Present', '2025-05-01'),
(8, 'Priyansgu Mishra', 4, 'Present', '2025-05-01'),
(9, 'Aryan Kumar Dubey', 1, 'Present', '2025-05-02'),
(10, 'Prince Tiwari', 2, 'Present', '2025-05-02'),
(11, 'Amar Singh', 3, 'Absent', '2025-05-02'),
(12, 'Priyansgu Mishra', 4, 'Present', '2025-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_by_facultyid_1`
--
ALTER TABLE `attendance_by_facultyid_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_by_facultyid_3`
--
ALTER TABLE `attendance_by_facultyid_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_record_by_facultyid_1`
--
ALTER TABLE `attendance_record_by_facultyid_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_record_by_facultyid_3`
--
ALTER TABLE `attendance_record_by_facultyid_3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_by_facultyid_1`
--
ALTER TABLE `attendance_by_facultyid_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendance_by_facultyid_3`
--
ALTER TABLE `attendance_by_facultyid_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendance_record_by_facultyid_1`
--
ALTER TABLE `attendance_record_by_facultyid_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `attendance_record_by_facultyid_3`
--
ALTER TABLE `attendance_record_by_facultyid_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
