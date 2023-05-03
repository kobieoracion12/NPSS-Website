-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 11:36 AM
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
  `acc_priv` enum('Super Admin','Admin','Administration','Finance','Purchasing') NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`account_no`, `employee_id`, `reg_email`, `reg_password`, `acc_priv`, `date_registered`) VALUES
(1, 2023198600, 'sikobieaypros@gmail.com', '1234', 'Admin', '2023-04-13 02:09:39'),
(2, 2023198601, 'sijirehmaybuko@gmail.com', '6467', 'Admin', '2023-03-21 01:42:50'),
(4, 2023198602, 'sineilaypogs@gmail.com', '3006', '', '2023-03-21 02:26:00'),
(5, 2023198603, 'sirichardaynapakabait@gmail.com', '5992', '', '2023-03-21 02:30:06'),
(7, 2023198605, 'nessbrondilla@gmail.com', '1708', '', '2023-03-22 05:02:13'),
(8, 2023198606, 'samplemail@sample.com', '9501', '', '2023-03-22 05:20:35'),
(9, 2023198607, 'nadeldeleon@gmail.com', '3614', '', '2023-03-22 05:23:30'),
(10, 2023198608, 'miguelyndon@nar.ph', '7806', '', '2023-03-22 05:25:12'),
(11, 2023198609, 'gregmark@nar.ph', '9939', '', '2023-03-22 05:29:27'),
(12, 2023198610, 'susanarondilla@nar.ph', '8086', '', '2023-03-22 05:30:39'),
(13, 2023198611, 'jaysontalavera@nar.ph', '6671', '', '2023-03-22 05:33:29'),
(14, 2023198612, 'jessiesquivel@nar.ph', '9803', '', '2023-03-22 05:34:58'),
(15, 2023198613, 'bernardoesquivel@nar.ph', '8616', '', '2023-03-22 05:35:59'),
(16, 2023198614, 'raymondniro@nar.ph', '4774', '', '2023-03-22 05:37:17'),
(17, 2023198615, 'ramongatbunton@nar.ph', '6301', '', '2023-03-22 05:38:13'),
(18, 2023198616, 'aeronmatthew@nar.ph', '1715', '', '2023-03-22 05:39:32'),
(19, 2023198617, 'reubenpenilla@nar.ph', '6130', '', '2023-03-22 05:40:40'),
(20, 2023198618, 'lazaroperez@nar.ph', '3039', '', '2023-03-22 05:42:01'),
(21, 2023198619, 'ruelniro@nar.ph', '4197', '', '2023-03-22 05:43:02'),
(22, 2023198620, 'christiananselmo@nar.ph', '7186', '', '2023-03-22 05:44:22'),
(23, 2023198621, 'jaymarbanta@nar.ph', '7495', '', '2023-03-22 05:46:14'),
(24, 2023198622, 'nathaliecastro@nar.ph', '8251', '', '2023-03-22 05:47:22'),
(25, 2023198623, 'janetdelacruz@nar.ph', '8660', '', '2023-03-22 05:49:28'),
(26, 2023198624, 'kathescuadra@nar.ph', '3063', '', '2023-03-22 05:51:14'),
(27, 2023198625, 'petergaylan@nar.ph', '7109', '', '2023-03-22 05:53:34'),
(28, 2023198626, 'jeffersonmaranan@nar.ph', '7259', '', '2023-03-22 05:54:54'),
(29, 2023198627, 'ernestopalma@nar.ph', '5460', '', '2023-03-22 05:55:43'),
(30, 2023198628, 'ramelramirez@nar.ph', '4518', '', '2023-03-22 05:56:39'),
(31, 2023198629, 'marilynrondilla@nar.ph', '8370', '', '2023-03-22 05:57:34'),
(32, 2023198630, 'markrondilla@nar.ph', '8759', '', '2023-03-22 05:58:35');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`company_no`, `company_name`, `company_desc`, `branch_site`, `contact_person`, `contact_no`, `company_logo`, `date_registered`) VALUES
(1, 'Jollibee Corporation', 'Bida bida si saya', 'Makati City', 'Richard Ramos', '09998181811', 'jollibee_logo.png', '2023-04-14 01:47:01'),
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
  `company_no` char(59) DEFAULT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docu_archive`
--

INSERT INTO `docu_archive` (`docu_no`, `file_name`, `display_name`, `uploaded_file`, `display_icon`, `display_type`, `company_no`, `date_uploaded`) VALUES
(1, 'CS02-Summary-of-Recommendations.docx', 'SOR', '', NULL, 'docx', '1', '2023-05-03 09:09:15'),
(2, '', 'hahaha', '', 'folder_icon.png', 'png', NULL, '2023-04-14 02:33:16'),
(4, 'CSO5-FORM2.docx', 'Form 2', '', NULL, 'docx', '1', '2023-05-03 09:19:07');

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
  `status` varchar(59) DEFAULT NULL,
  `branch_site` varchar(59) NOT NULL,
  `job_desc` text NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `uploaded_cv` varchar(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`account_id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `given_suffix`, `contact_no`, `given_address`, `birth_date`, `email_add`, `position`, `emp_stat`, `status`, `branch_site`, `job_desc`, `profile_pic`, `uploaded_cv`, `date_created`) VALUES
(1, 2023198600, 'Kobie', '', 'Oracion', '', '09760435424', 'Luisiana, Laguna', '2023-03-21', 'sikobieaypros@gmail.com', 'Intern', 'Intern', 'Inactive', 'Antipolo', 'Corporate Master', 'girl_heart.jpg', NULL, '2023-04-13 02:50:27'),
(2, 2023198601, 'Jireh Geleo', '', 'Ramos', '', '09987654321', 'Santa Cruz, Laguna', '2023-03-21', 'sijirehmaybuko@gmail.com', 'Intern', 'Intern', 'Inactive', 'Antipolo', 'Corporate Slave', 'panda.jpg', NULL, '2023-04-13 02:50:28'),
(4, 2023198602, 'Neil Arthur', '', 'Pornela', '', '09123456789', 'Santa Cruz, Laguna', '2023-03-21', 'sineilaypogs@gmail.com', 'Intern', 'Intern', 'Inactive', 'Antipolo', 'Corporate Pet', 'girl.jpg', 'Application-Form-2.pdf', '2023-04-13 02:50:31'),
(5, 2023198603, 'Richard', '', 'Ramos', '', '09987654321', 'Santa Cruz, Laguna', '2023-03-22', 'sirichardaynapakabait@gmail.com', 'Intern', 'Intern', 'Inactive', 'Antipolo', 'Corporate Flea', 'koenokatachi_sister.jpeg', 'CLAIM-RAMOS, RICHARD DE LEON_2021-1.pdf', '2023-04-13 02:50:33'),
(7, 2023198605, 'Ness', 'Bitong', 'Rondilla', '', '09123456789', 'Luisiana, Laguna', '2023-03-22', 'nessbrondilla@gmail.com', 'President', 'Director', 'Active', 'Antipolo', 'Overseeing budgets, staff, and executives and evaluating the success of the company', 'mam_ness.jpg', 'GRADUATION PORTRAIT BUDGET PROPOSAL.pdf', '2023-04-13 02:20:22'),
(8, 2023198606, 'Centaine Dyan', 'Bitong', 'Rondilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'samplemail@sample.com', 'Auditor', 'Director', 'Active', 'Antipolo', 'Auditors review the accounting records, operational data, and financial records of the company', 'Centaine Dyan Rondilla.jpg', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-04-13 02:20:23'),
(9, 2023198607, 'Nadel', 'Bitong', 'De Leon', '', '09760435424', 'Antipolo City', '2023-03-22', 'nadeldeleon@gmail.com', 'Corporate Secretary', 'Director', 'Active', 'Antipolo', 'Implementing the decisions of the board of directors. Acting as adviser to the company directors', 'Nadel De Leon.jpg', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-04-13 02:20:25'),
(10, 2023198608, 'Miguel Lyndon', 'Bitong', 'Rondilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'miguelyndon@nar.ph', 'Vice President', 'Director', 'Active', 'Antipolo', 'Plan, direct, coordinate, and oversee operations activities in the organization, ensuring development and implementation of efficient operations', 'boss_migs.jpg', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-04-13 02:20:27'),
(11, 2023198609, 'Greg Mark', 'Rondilla', 'Pantas', '', '09760435424', 'Luisiana', '2023-03-22', 'gregmark@nar.ph', 'Purchasing Head', 'Director', 'Active', 'Antipolo', 'Responsible for sourcing equipment, goods and services and managing vendors', 'boss_greg.jpg', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-04-13 02:20:28'),
(12, 2023198610, 'Susana', 'Bitong', 'Rondilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'susanarondilla@nar.ph', 'Vice President', 'Director', 'Active', 'Antipolo', 'Supports the President by overseeing internal operations and stepping in when the president is unavailable', 'Susana Rondilla.jpg', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-04-13 02:20:30'),
(13, 2023198611, 'Jayson', 'Talavera', 'Ascaño', '', '09760435424', 'Antipolo City', '2023-03-22', 'jaysontalavera@nar.ph', 'Family Driver', 'Household', 'Active', 'Antipolo', 'A professional who drives clients around in an efficient, safe and timely manner', 'Jayson Ascaño.jpg', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-04-13 02:20:31'),
(14, 2023198612, 'Jessie', 'Caseta', 'Esquivel', '', '09760435424', 'Antipolo City', '2023-03-22', 'jessiesquivel@nar.ph', 'Family Driver', 'Household', 'Active', 'Antipolo', 'A professional who drives clients around in an efficient, safe and timely manner', 'Jessie Esquivel.jpg', 'sample_resume.pdf', '2023-04-13 02:20:33'),
(15, 2023198613, 'Bernardo', 'Andres', 'Esquivel', 'Jr.', '09760435424', 'Antipolo City', '2023-03-22', 'bernardoesquivel@nar.ph', 'Family Driver', 'Household', 'Active', 'Antipolo', 'A professional who drives clients around in an efficient, safe and timely manner', 'Bernardo Esquivel.jpg', 'sample_resume.pdf', '2023-04-13 02:20:34'),
(16, 2023198614, 'Raymond', 'Talavera', 'Niro', '', '09760435424', 'Antipolo City', '2023-03-22', 'raymondniro@nar.ph', 'Household', 'Household', 'Active', 'Antipolo', 'Cleans and sanitizes bathrooms, showers, toilets, sinks, and countertops. Replenishes toiletries and towels', 'Raymond Niro.jpg', 'sample_resume.pdf', '2023-04-13 02:20:36'),
(17, 2023198615, 'Ramon', 'Sebastian', 'Gatbunton', '', '09760435424', 'Antipolo City', '2023-03-22', 'ramongatbunton@nar.ph', 'Family Driver', 'Household', 'Active', 'Antipolo', 'A professional who drives clients around in an efficient, safe and timely manner', 'Ramon Gatbunton.jpg', 'sample_resume.pdf', '2023-04-13 02:20:37'),
(18, 2023198616, 'Aeron Matthew', 'Andoyo', 'Brillantes', '', '09760435424', 'Antipolo City', '2023-03-22', 'aeronmatthew@nar.ph', 'Encoder', 'Probationary', 'Active', 'Antipolo', 'Responsible for sorting and processing data and maintain database information and essentially, handle all administrative data tasks', 'Aeron Matthew Brillantes.jpg', 'sample_resume.pdf', '2023-04-13 02:20:39'),
(19, 2023198617, 'Reuben', 'Copino', 'Penilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'reubenpenilla@nar.ph', 'Electrical Engineer', 'Probationary', 'Active', 'Antipolo', 'Design, develop and maintain electrical systems for buildings, transport systems and power distribution networks', 'Reuben Penilla.jpg', 'sample_resume.pdf', '2023-04-13 02:20:40'),
(20, 2023198618, 'Lazaro', 'Genobiagon', 'Perez', '', '09760435424', 'Antipolo City', '2023-03-22', 'lazaroperez@nar.ph', 'Technician', 'Probationary', 'Active', 'Antipolo', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building', 'Lazaro Perez.jpg', 'sample_resume.pdf', '2023-04-13 02:20:41'),
(21, 2023198619, 'Ruel', 'Talavera', 'Niro', '', '09760435424', 'Antipolo City', '2023-03-22', 'ruelniro@nar.ph', 'Warehouseman', 'Probationary', 'Active', 'Antipolo', 'Prepares and receives orders as well as moves, stocks, scans and records product inventory', 'Ruel Niro.jpg', 'sample_resume.pdf', '2023-04-13 02:20:43'),
(22, 2023198620, 'Christian Dior', 'Lorena', 'Anselmo', '', '09760435424', 'Antipolo City', '2023-03-22', 'christiananselmo@nar.ph', 'Company Driver', 'Probationary', 'Active', 'Antipolo', 'Safely transporting company staff as well as various products and materials to and from specified locations in a timely manner', 'Christian Dior Anselmo.jpg', 'sample_resume.pdf', '2023-04-13 02:20:45'),
(23, 2023198621, 'Jaymar', 'Ruazol', 'Banta', '', '09760435424', 'Antipolo City', '2023-03-22', 'jaymarbanta@nar.ph', 'Encoder', 'Probationary', 'Active', 'Antipolo', 'Responsible for sorting and processing data and maintain database information and essentially, handle all administrative data tasks', 'Jaymar Banta.jpg', 'sample_resume.pdf', '2023-04-13 02:20:46'),
(24, 2023198622, 'Ma. Nathalie', 'Gomez', 'Castro', '', '09760435424', 'Antipolo City', '2023-03-22', 'nathaliecastro@nar.ph', 'Accounting Assistant', 'Probationary', 'Active', 'Antipolo', 'Prepares budgets and records and sends invoices for services or products rendered by company employees that have been approved by management', 'Ma. Nathalie Castro.jpg', 'sample_resume.pdf', '2023-04-13 02:20:48'),
(25, 2023198623, 'Janet', 'Laurenio', 'Dela Cruz', '', '09760435424', 'Antipolo City', '2023-03-22', 'janetdelacruz@nar.ph', 'Administration Head', 'Probationary', 'Active', 'Antipolo', 'Planning and coordinating administrative procedures and systems and devising ways to streamline processes', 'Janet Dela Cruz.jpg', 'sample_resume.pdf', '2023-04-13 02:20:49'),
(26, 2023198624, 'Katherine', 'Dagangan', 'Escuadra', '', '09760435424', 'Antipolo City', '2023-03-22', 'kathescuadra@nar.ph', 'Assistant Finance', 'Probationary', 'Active', 'Antipolo', 'In charge of keeping track of an organizations finances and prepare financial statements, process invoices, and support other employees', 'Katherine Escuadra.jpg', 'sample_resume.pdf', '2023-04-13 02:20:50'),
(27, 2023198625, 'Peter', 'Labrador', 'Gaylan', '', '09760435424', 'Antipolo City', '2023-03-22', 'petergaylan@nar.ph', 'Technician', 'Probationary', 'Active', 'Antipolo', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building', 'Peter Gaylan.jpg', 'sample_resume.pdf', '2023-04-13 02:20:52'),
(28, 2023198626, 'Jefferson Lester', 'Calicdan', 'Maranan', '', '09760435424', 'Antipolo City', '2023-03-22', 'jeffersonmaranan@nar.ph', 'Thermographer', 'Probationary', 'Active', 'Antipolo', 'Taking infrared images of buildings, the ground, or other subjects, such as the inspection of electrical systems or machinery', 'Jefferson Lester Maranan.jpg', 'sample_resume.pdf', '2023-04-13 02:20:54'),
(29, 2023198627, 'Ernesto', 'Melicor', 'Palma', '', '09760435424', 'Antipolo City', '2023-03-22', 'ernestopalma@nar.ph', 'Encoder', 'Probationary', 'Active', 'Antipolo', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building', 'Ernesto Palma.jpg', 'sample_resume.pdf', '2023-04-13 02:20:55'),
(30, 2023198628, 'Ramel', 'Yanson', 'Ramirez', '', '0915221994', 'Antipolo City', '2023-03-22', 'ramelramirez@nar.ph', 'Company Driver', 'Probationary', 'Active', 'Antipolo', 'Safely transporting company staff as well as various products and materials to and from specified locations in a timely manner', 'Ramel Ramirez.jpg', 'sample_resume.pdf', '2023-04-13 02:20:57'),
(31, 2023198629, 'Marilyn', 'Peradilla', 'Rondilla', '', '09760435424', 'Luisiana', '2023-03-22', 'marilynrondilla@nar.ph', 'Office Staff', 'Probationary', 'Active', 'Antipolo', 'Taking calls from customers and delivering messages while also using basic office equipment like faxes or scanners', 'Marilyn Rondilla.jpg', 'sample_resume.pdf', '2023-04-13 02:20:58'),
(32, 2023198630, 'Mark', 'Gurar', 'Rondilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'markrondilla@nar.ph', 'Technician', 'Probationary', 'Active', 'Antipolo', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building', 'mark rondilla.jpg', 'sample_resume.pdf', '2023-04-13 02:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_status`
--

CREATE TABLE `emp_status` (
  `stat_no` int(59) NOT NULL,
  `emp_stat` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `docu_no` bigint(16) DEFAULT NULL,
  `folder_docu_no` bigint(59) DEFAULT NULL,
  `position_no` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file_access`
--

INSERT INTO `file_access` (`access_no`, `docu_no`, `folder_docu_no`, `position_no`) VALUES
(18, 1, NULL, 1),
(19, 1, NULL, 4),
(20, 1, NULL, 7),
(21, 1, NULL, 10),
(22, 1, NULL, 13),
(23, 1, NULL, 16),
(24, 1, NULL, 19),
(25, 1, NULL, 22),
(26, 1, NULL, 25),
(32, 2, NULL, 1),
(33, 2, NULL, 4),
(34, 2, NULL, 7),
(35, 2, NULL, 11),
(36, 2, NULL, 26),
(37, 2, NULL, 27),
(41, NULL, 2, 25),
(42, NULL, 2, 26),
(43, NULL, 2, 27),
(55, NULL, 1, 1),
(56, NULL, 1, 4),
(57, NULL, 1, 7),
(58, NULL, 1, 25),
(59, NULL, 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `folder_docu_archive`
--

CREATE TABLE `folder_docu_archive` (
  `docu_id` bigint(59) NOT NULL,
  `folder_docu_no` bigint(59) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `uploaded_file` varchar(255) NOT NULL,
  `display_icon` varchar(255) NOT NULL,
  `display_type` varchar(255) NOT NULL,
  `date_uploaded` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `folder_docu_archive`
--

INSERT INTO `folder_docu_archive` (`docu_id`, `folder_docu_no`, `file_name`, `display_name`, `uploaded_file`, `display_icon`, `display_type`, `date_uploaded`) VALUES
(1, 2, 'USE CASE.docx', 'use case', '', '', 'docx', '2023-04-14 02:35:26'),
(2, 2, 'FLOW CHART.docx', 'flow chart', '', '', 'docx', '2023-04-14 02:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_no` bigint(59) NOT NULL,
  `employee_id` bigint(59) NOT NULL,
  `basic_pay` double DEFAULT NULL,
  `salary_adj` double DEFAULT NULL,
  `tax_refund` double DEFAULT NULL,
  `reg_ot1` double DEFAULT NULL,
  `nd_ot1` double DEFAULT NULL,
  `spcl_ot1` double DEFAULT NULL,
  `spcl_ot2` double DEFAULT NULL,
  `nd_ot2` double DEFAULT NULL,
  `nd_ot3` double DEFAULT NULL,
  `lh_ot1` double DEFAULT NULL,
  `lh_ot2` double DEFAULT NULL,
  `lh_ot3` double DEFAULT NULL,
  `lh_ot4` double DEFAULT NULL,
  `allowance` double DEFAULT NULL,
  `gross_pay` double DEFAULT NULL,
  `tardiness` double DEFAULT NULL,
  `lwop` double DEFAULT NULL,
  `absences` double DEFAULT NULL,
  `sss_contri` double DEFAULT NULL,
  `ph_contri` double DEFAULT NULL,
  `hdmf_contri` double DEFAULT NULL,
  `sss_loan` double DEFAULT NULL,
  `hdmf_loan` double DEFAULT NULL,
  `advances` double DEFAULT NULL,
  `wh_tax` double DEFAULT NULL,
  `total_deduc` double DEFAULT NULL,
  `take_home` double DEFAULT NULL,
  `payroll_period` date NOT NULL,
  `payroll_date` date NOT NULL,
  `date_encoded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_no`, `employee_id`, `basic_pay`, `salary_adj`, `tax_refund`, `reg_ot1`, `nd_ot1`, `spcl_ot1`, `spcl_ot2`, `nd_ot2`, `nd_ot3`, `lh_ot1`, `lh_ot2`, `lh_ot3`, `lh_ot4`, `allowance`, `gross_pay`, `tardiness`, `lwop`, `absences`, `sss_contri`, `ph_contri`, `hdmf_contri`, `sss_loan`, `hdmf_loan`, `advances`, `wh_tax`, `total_deduc`, `take_home`, `payroll_period`, `payroll_date`, `date_encoded`) VALUES
(20231160000, 2023198616, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-03-01', '2023-03-31', '2023-03-26 05:46:12'),
(20231160007, 2023198622, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1200, 0, 0, 0, 0, 1200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 12, 1188, '0000-00-00', '0000-00-00', '2023-04-14 09:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_no` bigint(16) NOT NULL,
  `position_name` varchar(249) NOT NULL,
  `job_desc` varchar(249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_no`, `position_name`, `job_desc`) VALUES
(1, 'Accounting Assistant', 'Prepares budgets and records and sends invoices for services or products rendered by company employees that have been approved by management'),
(2, 'Admin Head Assistant', 'Assist with the day-to-day operations such as filing paperwork, answering calls, preparing documents, and managing the calendar of their supervisors'),
(3, 'Administration Head', 'Planning and coordinating administrative procedures and systems and devising ways to streamline processes'),
(4, 'Assistant Finance', 'In charge of keeping track of an organizations finances and prepare financial statements, process invoices, and support other employees'),
(5, 'Auditor', 'Auditors review the accounting records, operational data, and financial records of the company'),
(6, 'Autocad Operator', 'Taking verbal direction and implementing into sketches and calculations to produce the final work. Producing plans, elevations and building layouts'),
(7, 'Company Driver', 'Safely transporting company staff as well as various products and materials to and from specified locations in a timely manner'),
(8, 'Corporate Secretary', 'Implementing the decisions of the board of directors. Acting as adviser to the company directors'),
(9, 'Data Analyst', 'Deep analysis of data and then determining the best way to represent it visually to managers and stakeholders'),
(10, 'Electrical Engineer', 'Design, develop and maintain electrical systems for buildings, transport systems and power distribution networks'),
(11, 'Encoder', 'Responsible for sorting and processing data and maintain database information and essentially, handle all administrative data tasks'),
(12, 'Family Driver', 'A professional who drives clients around in an efficient, safe and timely manner'),
(13, 'Foreman', 'Responsible for scheduling, coordinating and supervising the work of all site operatives, ensuring that all work is delivered safely'),
(14, 'Household', 'Cleans and sanitizes bathrooms, showers, toilets, sinks, and countertops. Replenishes toiletries and towels'),
(15, 'Office Staff', 'Taking calls from customers and delivering messages while also using basic office equipment like faxes or scanners'),
(16, 'President', 'Overseeing budgets, staff, and executives and evaluating the success of the company'),
(17, 'Project Manager', 'Identifies the project\'s goals, objectives, and scope and creates a project plan that outlines the tasks, timelines, and resources required'),
(18, 'Purchasing Head', 'Responsible for sourcing equipment, goods and services and managing vendors'),
(19, 'Sales Executive', 'Sets annual sales goals for the company and works towards achieving them with the assistance of the Sales Manager and Associates'),
(20, 'Technician', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building'),
(21, 'Thermographer', 'Taking infrared images of buildings, the ground, or other subjects, such as the inspection of electrical systems or machinery'),
(22, 'Treasurer', 'Oversee the financial affairs of a company and ensure the organization adheres to all legal accounting practices'),
(23, 'Utility', 'Responsible for keeping the buildings, grounds, equipment and inventory clean, orderly, properly maintained, safe, and secure'),
(24, 'Messenger', 'Securely delivers packages, documents, written and verbal messages, and other items to intended location or recipient in a timely manner'),
(25, 'Vice President', 'Plan, direct, coordinate, and oversee operations activities in the organization, ensuring development and implementation of efficient operations'),
(26, 'Warehouseman', 'Prepares and receives orders as well as moves, stocks, scans and records product inventory'),
(27, 'Intern', 'Assist the company with tasks, such working closely with different team members to learn more about the company');

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
  ADD KEY `docu_no` (`docu_no`),
  ADD KEY `folder_docu_no` (`folder_docu_no`);

--
-- Indexes for table `folder_docu_archive`
--
ALTER TABLE `folder_docu_archive`
  ADD PRIMARY KEY (`docu_id`),
  ADD KEY `folder_docu_no` (`folder_docu_no`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_no`),
  ADD KEY `payroll_ibfk_1` (`employee_id`);

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
  MODIFY `account_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `company_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `docu_archive`
--
ALTER TABLE `docu_archive`
  MODIFY `docu_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `account_id` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `emp_status`
--
ALTER TABLE `emp_status`
  MODIFY `stat_no` int(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `file_access`
--
ALTER TABLE `file_access`
  MODIFY `access_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `folder_docu_archive`
--
ALTER TABLE `folder_docu_archive`
  MODIFY `docu_id` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20231160008;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_no` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  ADD CONSTRAINT `file_access_ibfk_2` FOREIGN KEY (`docu_no`) REFERENCES `docu_archive` (`docu_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `file_access_ibfk_3` FOREIGN KEY (`folder_docu_no`) REFERENCES `folder_docu_archive` (`docu_id`) ON DELETE CASCADE;

--
-- Constraints for table `folder_docu_archive`
--
ALTER TABLE `folder_docu_archive`
  ADD CONSTRAINT `folder_docu_archive_ibfk_1` FOREIGN KEY (`folder_docu_no`) REFERENCES `docu_archive` (`docu_no`) ON DELETE CASCADE;

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
