-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 04:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

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
  `acc_priv` enum('Super Admin','Admin','Administration','Finance','Purchasing') NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`account_no`, `employee_id`, `reg_email`, `reg_password`, `acc_priv`, `date_registered`) VALUES
(1, 2023198600, 'sikobieaypros@gmail.com', '8317', 'Admin', '2023-03-21 01:18:12'),
(2, 2023198601, 'sijirehmaybuko@gmail.com', '6467', 'Admin', '2023-03-21 01:42:50'),
(4, 2023198602, 'sineilaypogs@gmail.com', '3006', '', '2023-03-21 02:26:00'),
(5, 2023198603, 'sirichardaynapakabait@gmail.com', '5992', '', '2023-03-21 02:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `company_no` bigint(59) NOT NULL,
  `company_name` varchar(249) NOT NULL,
  `company_desc` text NOT NULL,
  `branch_site` varchar(59) NOT NULL,
  `contact_person` varchar(249) NOT NULL,
  `contact_no` varchar(59) NOT NULL,
  `company_logo` varchar(249) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`company_no`, `company_name`, `company_desc`, `branch_site`, `contact_person`, `contact_no`, `company_logo`, `date_registered`) VALUES
(1, 'Jollibee Corporation', 'Bida bida si saya', 'Makati City', 'Richard Ramos', '09998181811', 'jollibee_logo.png', '2023-03-21 04:44:20'),
(2, 'Philippine Air Force', 'Hukbong Himpapawid', 'Pasay City', 'Neil Major Pornela', '09696969696', 'philippine_airfore_logo.png', '2023-03-22 00:26:59'),
(6, 'Coca-Cola Corporation', 'Beverage Manufacturer', 'Sta.Rosa, Laguna', 'Kobie Oracion', '0915221994', 'coca_cola_logo.png', '2023-03-22 01:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `docu_archive`
--

CREATE TABLE `docu_archive` (
  `docu_no` bigint(59) NOT NULL,
  `file_name` varchar(249) NOT NULL,
  `display_name` varchar(249) NOT NULL,
  `uploaded_file` varchar(249) NOT NULL,
  `display_icon` varchar(249) DEFAULT NULL,
  `display_type` varchar(249) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docu_archive`
--

INSERT INTO `docu_archive` (`docu_no`, `file_name`, `display_name`, `uploaded_file`, `display_icon`, `display_type`, `date_uploaded`) VALUES
(1, 'CLAIM-RAMOS, RICHARD DE LEON_2021-1.docx', 'Sample', '', NULL, 'docx', '2023-03-22 03:33:57'),
(2, 'Application-Form-2.pdf', 'Sample2', '', NULL, 'pdf', '2023-03-22 03:34:30');

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
  `contact_no` varchar(11) DEFAULT NULL,
  `given_address` varchar(249) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `email_add` varchar(59) DEFAULT NULL,
  `position` varchar(59) NOT NULL,
  `emp_stat` varchar(59) NOT NULL,
  `branch_site` varchar(59) NOT NULL,
  `job_desc` text NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `uploaded_cv` varchar(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`account_id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `given_suffix`, `contact_no`, `given_address`, `birth_date`, `email_add`, `position`, `emp_stat`, `branch_site`, `job_desc`, `profile_pic`, `uploaded_cv`, `date_created`) VALUES
(1, 2023198600, 'Kobies', 'Naghuhubad', 'Oracion', 'Jr.', '09123456789', 'Luisiana, Laguna', '2023-03-21', 'sikobieaypros@gmail.com', 'President', 'Director', 'Antipolo', 'Corporate Master', 'girl_heart.jpg', NULL, '2023-03-22 03:37:31'),
(2, 2023198601, 'Jireh', 'Dinamankupal', 'Ramos', '', '09987654321', 'Santa Cruz, Laguna', '2023-03-21', 'sijirehmaybuko@gmail.com', 'Vice President', 'Director', 'Antipolo', 'Corporate Slave', 'panda.jpg', NULL, '2023-03-21 02:28:08'),
(4, 2023198602, 'Neil', 'Wholesome', 'Pornela', 'Ay', '09123456789', 'Santa Cruz, Laguna', '2023-03-21', 'sineilaypogs@gmail.com', 'Messenger', 'Regular', 'Antipolo', 'Corporate Pet', 'girl.jpg', 'Application-Form-2.pdf', '2023-03-21 02:28:11'),
(5, 2023198603, 'Richard', 'Kupallang', 'Ramos', 'Sr', '09987654321', 'Santa Cruz, Laguna', '2023-03-22', 'sirichardaynapakabait@gmail.com', 'Treasurer', 'Regular', 'Antipolo', 'Corporate Flea', 'koenokatachi_sister.jpeg', 'CLAIM-RAMOS, RICHARD DE LEON_2021-1.pdf', '2023-03-21 02:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `emp_status`
--

CREATE TABLE `emp_status` (
  `stat_no` int(59) NOT NULL,
  `emp_stat` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_status`
--

INSERT INTO `emp_status` (`stat_no`, `emp_stat`) VALUES
(1, 'Director'),
(2, 'End of Contract'),
(3, 'Household'),
(4, 'Probationary'),
(5, 'Regular'),
(6, 'Retired'),
(7, 'Terminated'),
(8, 'Intern');

-- --------------------------------------------------------

--
-- Table structure for table `file_access`
--

CREATE TABLE `file_access` (
  `access_no` int(11) NOT NULL,
  `docu_no` bigint(16) NOT NULL,
  `position_no` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_access`
--

INSERT INTO `file_access` (`access_no`, `docu_no`, `position_no`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 7),
(4, 1, 10),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 4),
(9, 2, 5),
(10, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_no` bigint(16) NOT NULL,
  `position_name` varchar(249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_no`, `position_name`) VALUES
(1, 'Accounting Assistant'),
(2, 'Admin Head Assistant'),
(3, 'Administration Head'),
(4, 'Assistant Finance'),
(5, 'Auditor'),
(6, 'Autocad Operator'),
(7, 'Company Driver'),
(8, 'Corporate Secretary'),
(9, 'Data Analyst'),
(10, 'Electrical Engineer'),
(11, 'Encoder'),
(12, 'Family Driver'),
(13, 'Foreman'),
(14, 'Household'),
(15, 'Office Staff'),
(16, 'President'),
(17, 'Project Manager'),
(18, 'Purchasing Head'),
(19, 'Sales Executive'),
(20, 'Technician'),
(21, 'Thermographer'),
(22, 'Treasurer'),
(23, 'Utility'),
(24, 'Messenger'),
(25, 'Vice President'),
(26, 'Warehouseman');

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
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`company_no`);

--
-- Indexes for table `docu_archive`
--
ALTER TABLE `docu_archive`
  ADD PRIMARY KEY (`docu_no`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `emp_status`
--
ALTER TABLE `emp_status`
  ADD PRIMARY KEY (`stat_no`);

--
-- Indexes for table `file_access`
--
ALTER TABLE `file_access`
  ADD PRIMARY KEY (`access_no`),
  ADD KEY `position_no` (`position_no`),
  ADD KEY `docu_no` (`docu_no`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_info`
--
ALTER TABLE `account_info`
  MODIFY `account_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `company_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `docu_archive`
--
ALTER TABLE `docu_archive`
  MODIFY `docu_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `account_id` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_status`
--
ALTER TABLE `emp_status`
  MODIFY `stat_no` int(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `file_access`
--
ALTER TABLE `file_access`
  MODIFY `access_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_no` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_info`
--
ALTER TABLE `account_info`
  ADD CONSTRAINT `account_info_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `file_access`
--
ALTER TABLE `file_access`
  ADD CONSTRAINT `file_access_ibfk_1` FOREIGN KEY (`position_no`) REFERENCES `position` (`position_no`),
  ADD CONSTRAINT `file_access_ibfk_2` FOREIGN KEY (`docu_no`) REFERENCES `docu_archive` (`docu_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
