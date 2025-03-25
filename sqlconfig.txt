-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 25, 2025 at 06:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mit222checksum`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_checksums`
--

CREATE TABLE `file_checksums` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `checksum` char(32) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `stid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file_checksums`
--

INSERT INTO `file_checksums` (`id`, `file_name`, `file_path`, `checksum`, `upload_date`, `stid`) VALUES
(1, 'book1.PNG', 'uploads/book1.PNG', '5a6eafc8e93119dc0ccee841f7970f9f', '2025-03-24 14:51:42', 1),
(2, 'loginuser.PNG', 'uploads/loginuser.PNG', '36fa5261468b5ca13050e0fa6c7eac61', '2025-03-24 14:52:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `regno`, `name`, `password_hash`, `registration_date`) VALUES
(1, '2312091029', 'Shathulan', '$2y$10$QLAPBKKH/sOPMkFQmUQVx.Cz4y2OIYHeC7dE/Ka3NwxPfwMPcuCJG', '2025-03-24 14:48:58'),
(2, '2312091030', 'Kanesh', '$2y$10$pDIpkWeoADUTiJX5S2XFSOH.Yj4X5IZGCyuaKlZRJW2VEhDK0jAwK', '2025-03-25 16:20:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_checksums`
--
ALTER TABLE `file_checksums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_checksum` (`checksum`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_checksums`
--
ALTER TABLE `file_checksums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
