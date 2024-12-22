-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 02:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `attempted_test`
--

CREATE TABLE `attempted_test` (
  `atmpt_tst_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ques` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `atmpt_date` date NOT NULL,
  `test_level` varchar(10) NOT NULL,
  `test_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attempted_test`
--

INSERT INTO `attempted_test` (`atmpt_tst_id`, `user_id`, `ques`, `score`, `atmpt_date`, `test_level`, `test_name`) VALUES
(1, 1, 20, 0, '2024-11-07', 'Easy', ''),
(2, 22, 10, 3, '2024-11-07', 'Easy', ''),
(3, 22, 20, 3, '2024-11-07', 'Easy', ''),
(4, 22, 20, 0, '2024-12-03', 'Easy', ''),
(5, 22, 20, 0, '2024-12-03', 'Easy', ''),
(6, 22, 20, 0, '2024-12-03', 'Easy', ''),
(7, 22, 20, 1, '2024-12-03', 'Easy', ''),
(8, 22, 20, 2, '2024-12-03', 'Easy', ''),
(9, 22, 4, 0, '2024-12-03', 'Easy', ''),
(10, 22, 20, 1, '2024-12-03', 'Easy', ''),
(11, 22, 2, 0, '2024-12-03', 'Easy', ''),
(12, 22, 4, 0, '2024-12-03', 'Easy', ''),
(13, 22, 4, 0, '2024-12-03', 'Easy', ''),
(14, 22, 4, 2, '2024-12-03', 'Easy', ''),
(15, 22, 4, 0, '2024-12-03', 'Easy', ''),
(16, 22, 20, 2, '2024-12-03', 'Easy', 'Docker'),
(17, 22, 20, 0, '2024-12-03', 'Easy', 'Linux'),
(18, 22, 4, 1, '2024-12-03', 'Easy', 'bash');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'Student'),
(2, 'Admin'),
(3, 'teacher'),
(4, 'Controller'),
(5, 'Registrar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `name`, `fname`, `cnic`, `email`, `password`, `contact`, `is_active`) VALUES
(1, 1, 'Shahid Ahmed', 'Mohammad Ali', '3540215126547', 'shahid@gmail.com', 'shahid@123', '03333213214', 1),
(20, 2, 'Admin', '', 'admin', 'admin@gmail.com', 'admin123', '', 0),
(22, 1, 'umair Ramzan', 'Ramzan', '4540257768550', 'umair.sheikh1992@gmail.com', '1234', '03435333774', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempted_test`
--
ALTER TABLE `attempted_test`
  ADD PRIMARY KEY (`atmpt_tst_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `cnic` (`cnic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempted_test`
--
ALTER TABLE `attempted_test`
  MODIFY `atmpt_tst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
