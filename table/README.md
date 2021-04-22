
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 08:08 AM
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
-- Database: `medicalarchive`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
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
  `phone_number` bigint(10) NOT NULL
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
  `phone_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`first_name`, `last_name`, `age`, `gender`, `address`, `citizenship_number`, `father_name`, `email_address`, `hospital_registration_number`, `department`, `consultant_doctor`, `phone_number`) VALUES
('Anushka', 'Parajuli', 12, 'F', 'Chipledhunga', 'gjsh78699', 'Ashok Raj Parajuli', 'parajulianushka1213@', 10, 'Physician', 'doctor_a', 9863448313),
('Aiyana', 'Koirala', 20, 'F', 'Parsyang', '837589', 'jsd', 'parajulianushka1213@', 11, 'Paedracition', 'doctor_a', 897584),
('Niva', 'Thapa', 7, 'F', 'Chipledhunga', '8hjehi9', 'sbdn', 'parajuliaayush@gmail', 12, 'Nephrologist', 'doctor_a', 9857),
('Arjun', 'Adhikari', 5, 'M', 'dkjs', '78964', 'Ashok Raj Parajuli', 'parajulianushka1213@', 13, 'Paedracition', 'doctor_a', 9863448313),
('aa', 'ss', 12, 'F', 'pokhara', 'aa', 'asa', 'as', 14, 'Paedracition', 'doctor_a', 0),
('puza', 'kafleya', 24, 'F', 'kathmandhu', '12345', 'aaaa', 'aiyanakoirala8a@gmai', 15, 'Paedracition', 'doctor_a', 0),
('ranjana', 'koirala', 22, 'F', 'parshyang', '3456789i', 'raju', 'asmitakoirala1@live.', 16, 'Physician', 'doctor_a', 987654323456),
('amar', 'koirala', 18, 'M', 'pokhara', '123456', 'madhu', 'asmitakoirala1@live.', 17, 'Physician', 'doctor_a', 987654323456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`hospital_registration_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `hospital_registration_number` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
