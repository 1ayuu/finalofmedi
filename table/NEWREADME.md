-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 09:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalarchiver`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoimtment`
--

CREATE TABLE `appoimtment` (
  `hospital_registration_number` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `eventdt` datetime NOT NULL,
  `department` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `eventdt` datetime NOT NULL,
  `patient_id` int(11) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Consultant_Doctor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `eventdt`, `patient_id`, `Department`, `Consultant_Doctor`) VALUES
(1, 'anushka', '2021-06-03 09:07:00', 0, '', ''),
(2, 'aiyana', '2021-06-10 09:31:00', 11, '', ''),
(3, 'hari', '2021-06-13 10:21:00', 19, 'Physician', 'doctor_a'),
(4, 'aiyana', '2021-06-10 10:26:00', 11, 'Physician', 'doctor_a'),
(5, 'radha', '2021-06-10 10:26:00', 102, 'Physician', 'doctor_a'),
(6, 'radha', '2021-06-10 10:26:00', 102, 'Physician', 'doctor_a'),
(7, 'amarr', '2021-06-07 10:37:00', 1212, 'Paedracition', 'doctor_c'),
(8, 'amar', '2021-06-30 10:38:00', 12, 'Gynaecologist', 'doctor_a'),
(9, 'amar', '2021-06-30 10:38:00', 12, 'Gynaecologist', 'doctor_a'),
(10, 'amar', '2021-06-30 10:38:00', 12, 'Gynaecologist', 'doctor_a'),
(11, 'aiyana', '2021-06-10 10:42:00', 11, 'Gynaecologist', 'doctor_a'),
(12, 'aiyana', '2021-06-10 10:42:00', 11, 'Gynaecologist', 'doctor_a'),
(13, 'raja', '2021-06-10 10:45:00', 7253, 'Physician', 'doctor_a');

-- --------------------------------------------------------

--
-- Table structure for table `newvalue`
--

CREATE TABLE `newvalue` (
  `id` varchar(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `eventdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` text NOT NULL,
  `citizenship_number` varchar(20) NOT NULL,
  `father_name` text NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `hospital_registration_number` int(3) NOT NULL,
  `department` text NOT NULL,
  `consultant_doctor` text NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `tempertaure` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`first_name`, `last_name`, `age`, `gender`, `address`, `citizenship_number`, `father_name`, `email_address`, `hospital_registration_number`, `department`, `consultant_doctor`, `phone_number`, `blood`, `tempertaure`, `reg_date`) VALUES
('aa', 'ss', 12, 'F', 'pokhara', 'aa', 'asa', 'as', 14, 'Paedracition', 'doctor_a', 0, '', '', '2021-05-31 02:52:09'),
('puza', 'kafleya', 24, 'F', 'kathmandhu', '12345', 'aaaa', 'aiyanakoirala8a@gmai', 15, 'Paedracition', 'doctor_a', 0, '', '', '2021-05-31 02:52:09'),
('ranjana', 'koirala', 22, 'F', 'parshyang', '3456789i', 'raju', 'asmitakoirala1@live.', 16, 'Physician', 'doctor_a', 987654323456, '', '', '2021-05-31 02:52:09'),
('amar', 'koirala', 18, 'M', 'pokhara', '123456', 'madhu', 'asmitakoirala1@live.', 17, 'Physician', 'doctor_a', 987654323456, '', '', '2021-05-31 02:52:09'),
('amari', 'Koirala', 47, 'M', 'kathmandhu', '123456', 'madhu', 'gehab39725@dvdoto.co', 18, 'Gynaecologist', 'doctor_a', 9876543234, '', '', '2021-05-31 02:52:09'),
('hari', 'bahadur', 21, 'M', 'shyanja', '123456', 'asa', 'gehab39725@dvdoto.co', 19, 'Physician', 'doctor_a', 987654323456, 'ab+', '97', '2021-05-31 02:52:09'),
('hari', 'bahadur', 21, 'M', 'shyanja', '123456', 'asa', 'gehab39725@dvdoto.co', 20, 'Physician', 'doctor_a', 987654323456, 'ab+', '97', '2021-05-31 02:52:09'),
('Aiyana ', 'poudel', 18, 'F', 'pokhara', 'aa', 'raju', 'aiyanakoirala8@gmail', 22, 'Neurologist', 'doctor_c', 9876543234, 'ab+', '99', '2021-05-31 02:52:09'),
('hariya', 'poudel', 18, 'M', 'kathmandhu', '3456789i', 'sayam', 'd@gmail.com', 25, 'Gynaecologist', 'doctor_a', 9876543234, 'ab+', '98', '2021-05-31 06:35:38'),
('ramayan', 'ram', 89, 'M', 'kathmandhu', '123456', 'sayam', 'aiyanakoirala8@gmail', 26, 'Gynaecologist', 'doctor_a', 987654323456, 'ab+', '97', '2021-06-01 05:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `toupdate`
--

CREATE TABLE `toupdate` (
  `CheckBy` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `medicine` longtext NOT NULL,
  `patient_id` int(3) NOT NULL,
  `PatientName` varchar(50) NOT NULL,
  `updateTimee` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toupdate`
--

INSERT INTO `toupdate` (`CheckBy`, `description`, `medicine`, `patient_id`, `PatientName`, `updateTimee`) VALUES
('dr a', 'fdxfv', 'xbvcb', 0, '', '2021-05-31 06:58:46'),
('', ' vb c', '', 12, 'aiyana', '2021-05-31 06:58:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`hospital_registration_number`);

--
-- Indexes for table `toupdate`
--
ALTER TABLE `toupdate`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `hospital_registration_number` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
