-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 09:20 AM
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
-- Database: `dbtupacsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `account_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `balance` decimal(10,2) DEFAULT 0.00,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`account_id`, `email`, `password`, `role`, `balance`, `client_id`) VALUES
(1, 'darwindarryljean.largoza@gmail.com', 'admin1', 'admin', 0.00, NULL),
(2, 'spencernacario@gmail.com', 'admin2', 'admin', 0.00, NULL),
(3, 'arvin.largoza@gmai.com', 'arvin123', 'client', 0.00, NULL),
(5, 'johnloi.carreon@gmail.com', 'loi123', 'trainer', 0.00, NULL),
(7, 'josemar@gmail.com', 'jose123', 'trainer', 0.00, NULL),
(8, 'jenny123@gmail.com', 'jenny123', 'client', 0.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `activity_id` int(11) NOT NULL,
  `activity_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblclient`
--

CREATE TABLE `tblclient` (
  `client_id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblclient`
--

INSERT INTO `tblclient` (`client_id`, `role`, `fname`, `mname`, `lname`, `gender`, `email`, `password`, `phone_number`, `barangay`, `province`, `city`, `zip_code`) VALUES
(1, 'admin', 'darwin darryl jean', 'e', 'largoza', 'male', 'darwindarryljean.largoza@gmail.com', 'admin1', '09956627081', 'saavedra', 'moalboal', 'cebu', '603221'),
(2, 'admin', 'spencer', 'z', 'nacario', 'male', 'spencernacario@gmail.com', 'admin2', '09956627081', 'talisay', 'naga', 'cebu', '530523'),
(3, 'client', 'darwin arvin jean', 'e', 'largoza', 'male', 'arvin.largoza@gmai.com', 'arvin123', '09956627081', 'saavedra', 'moalboal', 'cebu', '603423'),
(5, 'trainer', 'john loi', 'd', 'carreon', 'male', 'johnloi.carreon@gmail.com', 'loi123', '09935324234', 'palanas', 'ronda', 'cebu', '345325'),
(6, 'trainer', 'josemar', 's', 'pajares', 'male', 'josemar@gmail.com', 'jose123', '09945345343', 'katipunan', 'tisa', 'cebu', '412412'),
(7, 'client', 'jennifer', 'b', 'endino', 'female', 'jenny123@gmail.com', 'jenny123', '09656456373', 'saavedra', 'moalboal', 'cebu', '603423');

-- --------------------------------------------------------

--
-- Table structure for table `tblmember`
--

CREATE TABLE `tblmember` (
  `member_id` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblmember_activities`
--

CREATE TABLE `tblmember_activities` (
  `member_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblmember_programs`
--

CREATE TABLE `tblmember_programs` (
  `member_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnon_member`
--

CREATE TABLE `tblnon_member` (
  `non_member_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnon_member`
--

INSERT INTO `tblnon_member` (`non_member_id`, `client_id`) VALUES
(3, 3),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `payment_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblprogram`
--

CREATE TABLE `tblprogram` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `trainer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbltrainer`
--

CREATE TABLE `tbltrainer` (
  `trainer_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `specialty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE `tbltransaction` (
  `trans_id` int(10) NOT NULL,
  `transac_name` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` varchar(50) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `tblclient`
--
ALTER TABLE `tblclient`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tblmember`
--
ALTER TABLE `tblmember`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `tblmember_activities`
--
ALTER TABLE `tblmember_activities`
  ADD PRIMARY KEY (`member_id`,`activity_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `tblmember_programs`
--
ALTER TABLE `tblmember_programs`
  ADD PRIMARY KEY (`member_id`,`program_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `tblnon_member`
--
ALTER TABLE `tblnon_member`
  ADD PRIMARY KEY (`non_member_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `tblprogram`
--
ALTER TABLE `tblprogram`
  ADD PRIMARY KEY (`program_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `tbltrainer`
--
ALTER TABLE `tbltrainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblclient`
--
ALTER TABLE `tblclient`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblmember`
--
ALTER TABLE `tblmember`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblnon_member`
--
ALTER TABLE `tblnon_member`
  MODIFY `non_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblprogram`
--
ALTER TABLE `tblprogram`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltrainer`
--
ALTER TABLE `tbltrainer`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `trans_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD CONSTRAINT `tblaccount_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tblclient` (`client_id`),
  ADD CONSTRAINT `tblaccount_ibfk_2` FOREIGN KEY (`email`) REFERENCES `tblclient` (`email`);

--
-- Constraints for table `tblmember`
--
ALTER TABLE `tblmember`
  ADD CONSTRAINT `tblmember_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tblclient` (`client_id`);

--
-- Constraints for table `tblmember_activities`
--
ALTER TABLE `tblmember_activities`
  ADD CONSTRAINT `tblmember_activities_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `tblmember` (`member_id`),
  ADD CONSTRAINT `tblmember_activities_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `tblactivity` (`activity_id`);

--
-- Constraints for table `tblmember_programs`
--
ALTER TABLE `tblmember_programs`
  ADD CONSTRAINT `tblmember_programs_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `tblmember` (`member_id`),
  ADD CONSTRAINT `tblmember_programs_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `tblprogram` (`program_id`);

--
-- Constraints for table `tblnon_member`
--
ALTER TABLE `tblnon_member`
  ADD CONSTRAINT `tblnon_member_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tblclient` (`client_id`);

--
-- Constraints for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD CONSTRAINT `tblpayment_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tblclient` (`client_id`);

--
-- Constraints for table `tblprogram`
--
ALTER TABLE `tblprogram`
  ADD CONSTRAINT `tblprogram_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `tbltrainer` (`trainer_id`);

--
-- Constraints for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD CONSTRAINT `tbltransaction_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `tblpayment` (`payment_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
