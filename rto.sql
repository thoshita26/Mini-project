-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 03:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aadhar` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aadhar`, `password`) VALUES
('555555555555', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `challan`
--

CREATE TABLE `challan` (
  `challan_number` varchar(20) NOT NULL,
  `dl_no` varchar(20) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `fee` varchar(20) NOT NULL,
  `offenses` varchar(50) NOT NULL,
  `pay` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challan`
--

INSERT INTO `challan` (`challan_number`, `dl_no`, `vehicle_no`, `fee`, `offenses`, `pay`) VALUES
('12', '78956', '4347', '2000', 'sec a sec b', 'yes'),
('154286', 'LL123456', '4876', '1000', 'sec a secb', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `compliant`
--

CREATE TABLE `compliant` (
  `aadhar` varchar(12) NOT NULL,
  `cdate` date NOT NULL,
  `cdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dl`
--

CREATE TABLE `dl` (
  `name` varchar(25) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `guardian` varchar(25) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `ll_no` varchar(12) NOT NULL,
  `password3` varchar(50) NOT NULL,
  `issuedate` date NOT NULL,
  `validitydate` date NOT NULL,
  `statuss` varchar(12) NOT NULL,
  `dl_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ll`
--

CREATE TABLE `ll` (
  `name` varchar(25) NOT NULL,
  `guardian` varchar(25) NOT NULL,
  `guardian_phone_no` varchar(10) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `door_no` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `district` varchar(25) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(15) NOT NULL,
  `statuss` varchar(15) NOT NULL,
  `ll_no` varchar(10) NOT NULL,
  `password1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ll`
--

INSERT INTO `ll` (`name`, `guardian`, `guardian_phone_no`, `aadhar`, `phone_no`, `gender`, `door_no`, `city`, `district`, `pincode`, `dob`, `type`, `statuss`, `ll_no`, `password1`) VALUES
('vaishnavi', 'ranga', '7895785978', '111111111111', '9848984898', 'f', '9-90', 'nidadavole', 'east godavari', '534001', '1998-06-01', 'Three wheeler', 'Not Allocated', '-', '123'),
('Neethi', 'raman', '7841369585', '666666666666', '9856856985', 'm', '9-90', 'dfndf', 'eluru', '584632', '2022-06-27', 'two wheeler', 'Allocated', 'LL123456', '987'),
('Harini', 'narasimha', '7845961237', '787878787878', '7845968574', 'f', '8-78', 'porumamilla', 'kadapa', '516193', '2022-07-04', 'two wheeler', 'Not Allocated', '-', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `policeusers`
--

CREATE TABLE `policeusers` (
  `aadhar` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policeusers`
--

INSERT INTO `policeusers` (`aadhar`, `password`) VALUES
('888888888888', 'fall'),
('777777777777', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `traffic`
--

CREATE TABLE `traffic` (
  `aadhar` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traffic`
--

INSERT INTO `traffic` (`aadhar`, `password`) VALUES
('785678567856', 'plz'),
('154215421542', '485796');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `aadhar`, `password`) VALUES
('rama', '123443211234', '827ccb0eea8a706c4c34a16891f84e7b'),
('vaishnavi', '111111111111', '202cb962ac59075b964b07152d234b70'),
('radha', '222222222222', 'radha'),
('meghana', '222222222222', 'maggi'),
('raj', '121212121212', 'raj'),
('kusuma', '874587458745', 'kusu'),
('Sai Ganga Bhavani', '784512963693', 'user1'),
('Vaishnavi', '789654123785', '12345'),
('Harini', '787878787878', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `vr`
--

CREATE TABLE `vr` (
  `temporary_number` varchar(19) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `guardian` varchar(25) NOT NULL,
  `guardianphoneno` varchar(10) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `chassis_no` varchar(20) NOT NULL,
  `engine_no` varchar(15) NOT NULL,
  `vehicle_class` varchar(15) NOT NULL,
  `color` varchar(15) NOT NULL,
  `fuel_type` varchar(15) NOT NULL,
  `seating` varchar(20) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `statuss` varchar(20) NOT NULL,
  `permanent` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vr`
--

INSERT INTO `vr` (`temporary_number`, `name`, `phoneno`, `guardian`, `guardianphoneno`, `aadhar`, `chassis_no`, `engine_no`, `vehicle_class`, `color`, `fuel_type`, `seating`, `password2`, `statuss`, `permanent`) VALUES
('89562', 'Sai ganga bhavani', '9848576321', 'rama krishna', '8587496527', '784512963693', '1HGBH41JXMN10918', '52WVC10338', 'A', 'white', 'petrol', '4', '1234', 'Allocated', '78965');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
