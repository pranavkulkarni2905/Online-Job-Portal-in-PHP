-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 07:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'pranavk2003', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(3000) NOT NULL,
  `email` varchar(3000) NOT NULL,
  `subject` varchar(3000) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Pranav Kulkarni', 'pranavkulkarni1110@gmail.com', 'None', 'Nice Application ..!!'),
(2, 'Pranav Kulkarni', 'pranavkulkarni1110@gmail.com', 'Job Releated', 'Dear sir,\r\nPlease Post Job related to Civil Branch.');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `category` varchar(2000) NOT NULL,
  `location` varchar(2000) NOT NULL,
  `status` varchar(2000) NOT NULL,
  `end-date` varchar(2000) NOT NULL,
  `grd-year` varchar(2000) NOT NULL,
  `desc` varchar(4000) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `title`, `category`, `location`, `status`, `end-date`, `grd-year`, `desc`, `add_date`) VALUES
(1, 'Software Developer', 'Computer', 'Pune', 'Active', '2022-01-08', '2021,2022', 'Company - Cognizant\r\nPackage - 5 LPA', '2021-12-10 08:00:00'),
(2, 'Web Designer', 'Computer', 'Banglore', 'Active', '2022-01-06', '2021,2022,2023', 'Company-Amazon\r\nPackage-7 LPA', '2021-12-10 08:00:00'),
(3, 'Designer', 'Mechanical', 'Pune', 'Inactive', '2021-12-07', '2021,2022', 'Company-Tata', '2021-12-10 08:00:00'),
(5, 'Full Stack Developer', 'Computer', 'Kolkatta', 'Active', '2022-01-20', '2021,2022,2023', 'Company-DELL\r\nPackage-10 LPA', '2021-12-10 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(2000) NOT NULL,
  `firstname` varchar(2000) NOT NULL,
  `lastname` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `education` varchar(2000) NOT NULL,
  `password` varchar(400) NOT NULL,
  `register_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `firstname`, `lastname`, `email`, `phone`, `age`, `education`, `password`, `register_time`) VALUES
(2, 'pranav2905', 'Pranav', 'Kulkarni', 'pranavkulkarni1110@gmail.com', '8237196934', 19, 'Diploma', 'pranav', '2021-11-26 04:15:23'),
(5, '1906069', 'Pranav', 'Kulkarni', 'pdk29052003@gmail.com', '8237196934', 19, 'Diploma', '12345', '2021-12-12 03:01:56'),
(6, 'prasadk', 'Prasad', 'Kulkarni', 'prasad@gmail.com', '8237196934', 22, 'BE', 'prasad', '2021-12-12 03:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `user-application`
--

CREATE TABLE `user-application` (
  `application_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `clgname` varchar(3000) NOT NULL,
  `percentage` int(11) NOT NULL,
  `skills` varchar(3000) NOT NULL,
  `cv` varchar(1000) NOT NULL,
  `job_title` varchar(2000) NOT NULL,
  `username` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-application`
--

INSERT INTO `user-application` (`application_id`, `user_id`, `job_id`, `clgname`, `percentage`, `skills`, `cv`, `job_title`, `username`, `time`) VALUES
(1, 2, 5, 'Government Polytechnic pune', 92, 'Java,Python', 'Task1.pdf', 'Full Stack Developer', 'pranav2905', '2021-12-11 08:00:00'),
(2, 2, 2, 'Government Polytechnic pune', 89, 'JavaScript', 'Task1.pdf', 'Web Designer', 'pranav2905', '2021-12-11 08:00:00'),
(3, 5, 5, 'Government Polytechnic pune', 93, 'Java,Python', 'Task1.pdf', 'Full Stack Developer', '1906069', '2021-12-11 08:00:00'),
(4, 5, 2, 'Government Polytechnic pune', 78, 'JavaScript', 'Siddharth UG  Resume - 1.pdf', 'Web Designer', '1906069', '2021-12-11 08:00:00'),
(5, 6, 3, 'Modern College', 10, 'CAD', 'Siddharth UG  Resume - 1.pdf', 'Designer', 'prasadk', '2021-12-11 08:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user-application`
--
ALTER TABLE `user-application`
  ADD PRIMARY KEY (`application_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user-application`
--
ALTER TABLE `user-application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
