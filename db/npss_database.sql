-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 03:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npss_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE `account_info` (
  `account_no` bigint(59) NOT NULL,
  `employee_id` bigint(16) NOT NULL,
  `reg_email` varchar(59) NOT NULL,
  `reg_password` varchar(59) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`account_no`, `employee_id`, `reg_email`, `reg_password`, `date_registered`) VALUES
(202300001, 202319863, 'nestorrondilla@gmail.com', '7672', '2023-03-20 02:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `account_id` bigint(16) NOT NULL,
  `employee_id` bigint(16) NOT NULL,
  `first_name` varchar(59) NOT NULL,
  `middle_name` varchar(59) DEFAULT NULL,
  `last_name` varchar(59) NOT NULL,
  `given_suffix` varchar(59) DEFAULT NULL,
  `contact_no` bigint(11) DEFAULT NULL,
  `given_address` varchar(249) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `email_add` varchar(59) DEFAULT NULL,
  `position` varchar(59) NOT NULL,
  `branch_site` varchar(59) NOT NULL,
  `job_desc` text NOT NULL,
  `profile_pic` longblob DEFAULT NULL,
  `uploaded_cv` longblob DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`account_id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `given_suffix`, `contact_no`, `given_address`, `birth_date`, `email_add`, `position`, `branch_site`, `job_desc`, `profile_pic`, `uploaded_cv`, `date_created`) VALUES
(3, 202319861, 'Kobie', '', 'Oracion', '', 9760435424, 'Luisiana, Laguna', '2000-07-12', 'kobie.oracion12@gmail.com', 'Intern', 'Antipolo', '', NULL, NULL, '2023-03-20 02:16:36'),
(5, 20231987, 'Neil Arthur', 'Almadin', 'Pornela', 'Jr.', 9158493256, 'Sta.Cruz, Laguna', '2023-03-20', 'akosineilmabait@yahoo.com', 'Intern', 'Antipolo', 'kahit ano', NULL, NULL, '2023-03-20 02:18:12'),
(7, 202319862, 'Richard', 'Almadin', 'Ramos', 'Sr.', 9158762834, 'kahit san', '2023-03-20', 'akosirichardmabait@yahoo.com', 'Intern', 'Antipolo', 'taga gawa ng bold', NULL, NULL, '2023-03-20 02:28:53'),
(8, 20231988, 'Jireh Geleo', 'Almadin', 'Ramos', '', 9760435424, 'kahit san din', '2023-03-20', 'akosijirehmabait@yahoocom', 'Intern', 'Antipolo', 'taga bold', NULL, NULL, '2023-03-20 02:29:29'),
(13, 202319863, 'Nestor', 'Alcala', 'Rondilla', '', 9760435424, 'Antipolo City', '2023-03-20', 'nestorrondilla@gmail.com', 'Hermano Mayor', 'Antipolo', 'sample', NULL, NULL, '2023-03-20 02:45:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`account_no`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_info`
--
ALTER TABLE `account_info`
  MODIFY `account_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202300002;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `account_id` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_info`
--
ALTER TABLE `account_info`
  ADD CONSTRAINT `account_info_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
