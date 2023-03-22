-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 07:59 AM
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
(1, 2023198600, 'sikobieaypros@gmail.com', '8317', 'Admin', '2023-03-21 01:18:12'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docu_archive`
--

INSERT INTO `docu_archive` (`docu_no`, `file_name`, `display_name`, `uploaded_file`, `display_icon`, `display_type`, `date_uploaded`) VALUES
(1, 'CLAIM-RAMOS, RICHARD DE LEON_2021-1.docx', 'Ramos Claim', '', NULL, 'docx', '2023-03-22 06:30:42'),
(2, 'Application-Form-2.pdf', 'Sample2', '', NULL, 'pdf', '2023-03-22 03:34:30'),
(3, 'ADNILAG Tourism Video Ad Competition 2023 Mechanics and Entry form.pdf', 'ADnilag Mechanics', '', NULL, 'pdf', '2023-03-22 03:44:29'),
(5, 'KUYA RODEL ID.docx', 'Manong Driver ID', '', NULL, 'docx', '2023-03-22 04:34:03'),
(6, '', 'Sample', '', 'folder_icon.png', 'png', '2023-03-22 04:34:10'),
(7, 'JAK_invoice.xlsx', 'JAK Invoice', '', NULL, 'xlsx', '2023-03-22 04:36:34');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`account_id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `given_suffix`, `contact_no`, `given_address`, `birth_date`, `email_add`, `position`, `emp_stat`, `branch_site`, `job_desc`, `profile_pic`, `uploaded_cv`, `date_created`) VALUES
(1, 2023198600, 'Kobies', 'Naghuhubad', 'Oracion', 'Jr.', '09123456789', 'Luisiana, Laguna', '2023-03-21', 'sikobieaypros@gmail.com', 'President', 'Director', 'Antipolo', 'Corporate Master', 'girl_heart.jpg', NULL, '2023-03-22 03:37:31'),
(2, 2023198601, 'Jireh', 'Dinamankupal', 'Ramos', '', '09987654321', 'Santa Cruz, Laguna', '2023-03-21', 'sijirehmaybuko@gmail.com', 'Vice President', 'Director', 'Antipolo', 'Corporate Slave', 'panda.jpg', NULL, '2023-03-21 02:28:08'),
(4, 2023198602, 'Neil', 'Wholesome', 'Pornela', 'Ay', '09123456789', 'Santa Cruz, Laguna', '2023-03-21', 'sineilaypogs@gmail.com', 'Messenger', 'Regular', 'Antipolo', 'Corporate Pet', 'girl.jpg', 'Application-Form-2.pdf', '2023-03-21 02:28:11'),
(5, 2023198603, 'Richard', 'Kupallang', 'Ramos', 'Sr', '09987654321', 'Santa Cruz, Laguna', '2023-03-22', 'sirichardaynapakabait@gmail.com', 'Treasurer', 'Regular', 'Antipolo', 'Corporate Flea', 'koenokatachi_sister.jpeg', 'CLAIM-RAMOS, RICHARD DE LEON_2021-1.pdf', '2023-03-21 02:30:06'),
(7, 2023198605, 'Ness', 'Bitong', 'Rondilla', '', '09123456789', 'Luisiana, Laguna', '2023-03-22', 'nessbrondilla@gmail.com', 'President', 'Director', 'Antipolo', 'Overseeing budgets, staff, and executives and evaluating the success of the company', 'mam_ness.jpg', 'GRADUATION PORTRAIT BUDGET PROPOSAL.pdf', '2023-03-22 05:17:32'),
(8, 2023198606, 'Centaine Dyan', '', 'Rondilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'samplemail@sample.com', 'Auditor', 'Director', 'Antipolo', 'Auditors review the accounting records, operational data, and financial records of the company', '', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-03-22 05:21:06'),
(9, 2023198607, 'Nadel', '', 'De Leon', '', '09760435424', 'Antipolo City', '2023-03-22', 'nadeldeleon@gmail.com', 'Corporate Secretary', 'Director', 'Antipolo', 'Implementing the decisions of the board of directors. Acting as adviser to the company directors', '', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-03-22 05:23:30'),
(10, 2023198608, 'Miguel Lyndon', '', 'Rondilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'miguelyndon@nar.ph', 'Vice President', 'Director', 'Antipolo', 'Plan, direct, coordinate, and oversee operations activities in the organization, ensuring development and implementation of efficient operations', 'boss_migs.jpg', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-03-22 05:25:35'),
(11, 2023198609, 'Greg Mark', 'Rondilla', 'Pantas', '', '09760435424', 'Luisiana', '2023-03-22', 'gregmark@nar.ph', 'Purchasing Head', 'Director', 'Antipolo', 'Responsible for sourcing equipment, goods and services and managing vendors', 'boss_greg.jpg', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-03-22 05:29:27'),
(12, 2023198610, 'Susana', 'Bitong', 'Rondilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'susanarondilla@nar.ph', 'Vice President', 'Director', 'Antipolo', 'Supports the President by overseeing internal operations and stepping in when the president is unavailable', '', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-03-22 05:30:39'),
(13, 2023198611, 'Jayson', 'Talavera', 'Ascaño', '', '09760435424', 'Antipolo City', '2023-03-22', 'jaysontalavera@nar.ph', 'Family Driver', 'Household', 'Antipolo', 'A professional who drives clients around in an efficient, safe and timely manner', '', 'CE_CREATIVE_SHOT_ORACION.pdf', '2023-03-22 05:33:29'),
(14, 2023198612, 'Jessie', 'Caseta', 'Esquivel', '', '09760435424', 'Antipolo City', '2023-03-22', 'jessiesquivel@nar.ph', 'Family Driver', 'Household', 'Antipolo', 'A professional who drives clients around in an efficient, safe and timely manner', '', 'sample_resume.pdf', '2023-03-22 05:34:58'),
(15, 2023198613, 'Bernardo', 'Andres', 'Esquivel', 'Jr.', '09760435424', 'Antipolo City', '2023-03-22', 'bernardoesquivel@nar.ph', 'Family Driver', 'Household', 'Antipolo', 'A professional who drives clients around in an efficient, safe and timely manner', '', 'sample_resume.pdf', '2023-03-22 05:35:59'),
(16, 2023198614, 'Raymond', 'Talavera', 'Niro', '', '09760435424', 'Antipolo City', '2023-03-22', 'raymondniro@nar.ph', 'Household', 'Household', 'Antipolo', 'Cleans and sanitizes bathrooms, showers, toilets, sinks, and countertops. Replenishes toiletries and towels', '', 'sample_resume.pdf', '2023-03-22 05:37:17'),
(17, 2023198615, 'Ramon', 'Sebastian', 'Gatbunton', '', '09760435424', 'Antipolo City', '2023-03-22', 'ramongatbunton@nar.ph', 'Family Driver', 'Household', 'Antipolo', 'A professional who drives clients around in an efficient, safe and timely manner', '', 'sample_resume.pdf', '2023-03-22 05:38:13'),
(18, 2023198616, 'Aeron Matthew', 'Andoyo', 'Brillantes', '', '09760435424', 'Antipolo City', '2023-03-22', 'aeronmatthew@nar.ph', 'Encoder', 'Probationary', 'Antipolo', 'Responsible for sorting and processing data and maintain database information and essentially, handle all administrative data tasks', '', 'sample_resume.pdf', '2023-03-22 05:45:20'),
(19, 2023198617, 'Reuben', 'Copino', 'Penilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'reubenpenilla@nar.ph', 'Electrical Engineer', 'Probationary', 'Antipolo', 'Design, develop and maintain electrical systems for buildings, transport systems and power distribution networks', '', 'sample_resume.pdf', '2023-03-22 05:40:40'),
(20, 2023198618, 'Lazaro', 'Genobiagon', 'Perez', '', '09760435424', 'Antipolo City', '2023-03-22', 'lazaroperez@nar.ph', 'Technician', 'Probationary', 'Antipolo', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building', '', 'sample_resume.pdf', '2023-03-22 05:42:01'),
(21, 2023198619, 'Ruel', 'Talavera', 'Niro', '', '09760435424', 'Antipolo City', '2023-03-22', 'ruelniro@nar.ph', 'Warehouseman', 'Probationary', 'Antipolo', 'Prepares and receives orders as well as moves, stocks, scans and records product inventory', '', 'sample_resume.pdf', '2023-03-22 05:43:02'),
(22, 2023198620, 'Christian Dior', 'Lorena', 'Anselmo', '', '09760435424', 'Antipolo City', '2023-03-22', 'christiananselmo@nar.ph', 'Company Driver', 'Probationary', 'Antipolo', 'Safely transporting company staff as well as various products and materials to and from specified locations in a timely manner', '', 'sample_resume.pdf', '2023-03-22 05:44:22'),
(23, 2023198621, 'Jaymar', 'Ruazol', 'Banta', '', '09760435424', 'Antipolo City', '2023-03-22', 'jaymarbanta@nar.ph', 'Encoder', 'Probationary', 'Antipolo', 'Responsible for sorting and processing data and maintain database information and essentially, handle all administrative data tasks', '', 'sample_resume.pdf', '2023-03-22 05:46:14'),
(24, 2023198622, 'Ma. Nathalie', 'Gomez', 'Castro', '', '09760435424', 'Antipolo City', '2023-03-22', 'nathaliecastro@nar.ph', 'Accounting Assistant', 'Probationary', 'Antipolo', 'Prepares budgets and records and sends invoices for services or products rendered by company employees that have been approved by management', '', 'sample_resume.pdf', '2023-03-22 05:47:22'),
(25, 2023198623, 'Janet', 'Laurenio', 'Dela Cruz', '', '09760435424', 'Antipolo City', '2023-03-22', 'janetdelacruz@nar.ph', 'Administration Head', 'Probationary', 'Antipolo', 'Planning and coordinating administrative procedures and systems and devising ways to streamline processes', '', 'sample_resume.pdf', '2023-03-22 05:49:28'),
(26, 2023198624, 'Katherine', 'Dagangan', 'Escuadra', '', '09760435424', 'Antipolo City', '2023-03-22', 'kathescuadra@nar.ph', 'Assistant Finance', 'Probationary', 'Antipolo', 'In charge of keeping track of an organizations finances and prepare financial statements, process invoices, and support other employees', '', 'sample_resume.pdf', '2023-03-22 05:51:14'),
(27, 2023198625, 'Peter', 'Labrador', 'Gaylan', '', '09760435424', 'Antipolo City', '2023-03-22', 'petergaylan@nar.ph', 'Technician', 'Probationary', 'Antipolo', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building', '', 'sample_resume.pdf', '2023-03-22 05:53:39'),
(28, 2023198626, 'Jefferson Lester', 'Calicdan', 'Maranan', '', '09760435424', 'Antipolo City', '2023-03-22', 'jeffersonmaranan@nar.ph', 'Thermographer', 'Probationary', 'Antipolo', 'Taking infrared images of buildings, the ground, or other subjects, such as the inspection of electrical systems or machinery', '', 'sample_resume.pdf', '2023-03-22 05:54:54'),
(29, 2023198627, 'Ernesto', 'Melicor', 'Palma', '', '09760435424', 'Antipolo City', '2023-03-22', 'ernestopalma@nar.ph', 'Encoder', 'Probationary', 'Antipolo', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building', '', 'sample_resume.pdf', '2023-03-22 05:55:43'),
(30, 2023198628, 'Ramel', 'Yanson', 'Ramirez', '', '0915221994', 'Antipolo City', '2023-03-22', 'ramelramirez@nar.ph', 'Company Driver', 'Probationary', 'Antipolo', 'Safely transporting company staff as well as various products and materials to and from specified locations in a timely manner', '', 'sample_resume.pdf', '2023-03-22 05:56:39'),
(31, 2023198629, 'Marilyn', 'Peradilla', 'Rondilla', '', '09760435424', 'Luisiana', '2023-03-22', 'marilynrondilla@nar.ph', 'Office Staff', 'Probationary', 'Antipolo', 'Taking calls from customers and delivering messages while also using basic office equipment like faxes or scanners', '', 'sample_resume.pdf', '2023-03-22 05:57:34'),
(32, 2023198630, 'Mark', 'Gurar', 'Rondilla', '', '09760435424', 'Antipolo City', '2023-03-22', 'markrondilla@nar.ph', 'Technician', 'Probationary', 'Antipolo', 'Installs all of the wiring, circuits, and outlets needed to power lights, appliances, and equipment within a building', '', 'sample_resume.pdf', '2023-03-22 05:58:35');

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
  `docu_no` bigint(16) NOT NULL,
  `position_no` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(10, 2, 6),
(11, 3, 24),
(12, 5, 1),
(13, 5, 4),
(14, 5, 6),
(15, 5, 9),
(16, 5, 14),
(17, 7, 2);

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
  MODIFY `docu_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `access_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `file_access_ibfk_2` FOREIGN KEY (`docu_no`) REFERENCES `docu_archive` (`docu_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
