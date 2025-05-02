-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 09:41 AM
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
-- Database: `faculty_upload_paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload_paper`
--

CREATE TABLE `upload_paper` (
  `id` int(11) NOT NULL,
  `paper` varchar(255) NOT NULL,
  `semester` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upload_paper_by_faculty_id_1`
--

CREATE TABLE `upload_paper_by_faculty_id_1` (
  `id` int(11) NOT NULL,
  `paper` varchar(255) DEFAULT NULL,
  `semester` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_paper_by_faculty_id_1`
--

INSERT INTO `upload_paper_by_faculty_id_1` (`id`, `paper`, `semester`) VALUES
(1, 'SELab.pdf', '4th'),
(2, 'AI Lab F.pdf', '5th'),
(3, 'CN1.pdf', '5th');

-- --------------------------------------------------------

--
-- Table structure for table `upload_paper_by_faculty_id_3`
--

CREATE TABLE `upload_paper_by_faculty_id_3` (
  `id` int(11) NOT NULL,
  `paper` varchar(255) DEFAULT NULL,
  `semester` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_paper_by_faculty_id_3`
--

INSERT INTO `upload_paper_by_faculty_id_3` (`id`, `paper`, `semester`) VALUES
(1, 'CN1.pdf', '5th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_paper`
--
ALTER TABLE `upload_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_paper_by_faculty_id_1`
--
ALTER TABLE `upload_paper_by_faculty_id_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_paper_by_faculty_id_3`
--
ALTER TABLE `upload_paper_by_faculty_id_3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_paper`
--
ALTER TABLE `upload_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload_paper_by_faculty_id_1`
--
ALTER TABLE `upload_paper_by_faculty_id_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload_paper_by_faculty_id_3`
--
ALTER TABLE `upload_paper_by_faculty_id_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
