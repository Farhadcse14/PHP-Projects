-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 09:31 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `mode`) VALUES
(1, 'library@gmail.com', '111111', 'library'),
(2, 'teacher@gmail.com', '111111', 'teacher'),
(3, 'provost@gmail.com', '111111', 'provost'),
(4, 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(10) NOT NULL,
  `s_id` int(1) NOT NULL,
  `req_id` int(1) NOT NULL,
  `req_lib` int(1) NOT NULL,
  `req_ma` int(1) NOT NULL,
  `req_cer` int(1) NOT NULL,
  `req_tm` int(1) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `s_id`, `req_id`, `req_lib`, `req_ma`, `req_cer`, `req_tm`, `date`) VALUES
(101, 30, 0, 2, 0, 2, 0, '2019-02-13 05:08:41.168981'),
(102, 30, 0, 2, 0, 0, 0, '2019-02-13 05:39:48.452788'),
(103, 26, 3, 1, 0, 0, 0, '2019-03-01 21:23:40.085166'),
(104, 26, 3, 0, 0, 0, 0, '2019-03-01 21:26:53.583248');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `s_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `roll` varchar(15) NOT NULL,
  `registration` varchar(20) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `hall` varchar(255) NOT NULL,
  `resident` varchar(255) NOT NULL,
  `room` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `session` varchar(20) NOT NULL,
  `pre_add` varchar(30) NOT NULL,
  `par_add` varchar(30) NOT NULL,
  `img_name` varchar(30) NOT NULL,
  `sig_name` varchar(30) NOT NULL,
  `b_group` varchar(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`s_id`, `first_name`, `last_name`, `roll`, `registration`, `dept`, `hall`, `resident`, `room`, `gender`, `mobile`, `dob`, `f_name`, `m_name`, `email`, `session`, `pre_add`, `par_add`, `img_name`, `sig_name`, `b_group`, `username`, `password`, `cpassword`, `cgpa`, `date`) VALUES
(22, 'Zahidul', 'Hasan', '140148', '1401050', 'Computer Science and Engineering', 'Shaheed Mashiur Rahman Hall', 'Residential', '323', 'Male', '01966939910', '2019-02-04', 'Riaz Rahman', 'Heena Begum', 'sohag@gmail.com', '2014-15', 'Room:323, Shaheed Moshiur Rahm', 'Khulna', '42702419_1066653536846426_3356', 'chairman.jpg', 'AB+', 'sohag', 'sohag', 'sohag', '3.20', '2019-02-12 15:39:05'),
(24, 'Hazam', 'Sana', '140103', '1401018', 'Industrial and Production Engineering', 'Shaheed Mashiur Rahman Hall', 'Residential', '323', 'Male', '01966939910', '2019-02-14', 'Riaz Rahman', 'Heena Begum', 'sana@gmail.com', '2014-15', 'Room:323, Shaheed Moshiur Rahm', 'klna', '37971872_1881254122170866_1255', 'chairman.jpg', 'A-', 'sana', 'sana', 'sana', '3.25', '2019-02-12 15:39:05'),
(25, 'sadaf', 'pantho', '140125', '1401050', 'Microbiology', 'Shaheed Mashiur Rahman Hall', 'Residential', '408', 'Male', '01966939910', '2019-02-04', 'Islam Sheikh', 'Rehana Begum', 'pantho@gmail.com', '2014-15', 'Room:323, Shaheed Moshiur Rahm', 'Jsr', '3-5.jpg', 'chairman.jpg', 'O+', 'pantho', 'pantho', 'pantho', '3.10', '2019-02-12 15:39:05'),
(26, 'Rabeya', 'Khatun', '140103', '1401050', 'Petroleum and Mining Engineering', 'Sheikh Hasina Hall', 'Residential', '502', 'Female', '01943565421', '2019-03-07', 'Islam Sheikh', 'Heena Begum', 'rabeya@gmail.com', '2014-15', 'Room:323, Shaheed Moshiur Rahm', 'Khulna', 'n.jpg', 'sign.jpg', 'A-', 'rabeya', 'rabeya', 'rabeya', '3.29', '2019-03-01 20:45:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
