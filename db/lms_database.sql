-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 08:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `description`, `dateCreated`) VALUES
(1, 'Title 1', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?\n', '2023-04-29 07:27:04'),
(2, 'Title 2', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?\n', '2023-04-29 07:27:24'),
(3, 'Title 3', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?', '2023-04-29 08:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `courseDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseName`, `courseDescription`) VALUES
(1, 'Mathematics', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `employeeName` text NOT NULL,
  `employeeEmail` varchar(100) NOT NULL,
  `employeePassword` varchar(100) NOT NULL,
  `employeeTitle` varchar(255) NOT NULL DEFAULT 'Employee',
  `employeeProfilePicture` text NOT NULL DEFAULT 'default_avatar.png',
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeeID`, `employeeName`, `employeeEmail`, `employeePassword`, `employeeTitle`, `employeeProfilePicture`, `dateCreated`) VALUES
(1, 1, 'Admin ABC', 'admin@ymail.com', 'password', 'Employee', 'default_avatar.png', '2023-04-29 05:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `studentEmail` varchar(100) NOT NULL,
  `studentPassword` varchar(100) NOT NULL,
  `studentPhone` varchar(250) NOT NULL,
  `studentGender` varchar(250) NOT NULL DEFAULT 'N/A',
  `studentYear` text NOT NULL DEFAULT 'Freshman',
  `studentProfilePicture` varchar(255) NOT NULL DEFAULT 'default_avatar.png',
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentID`, `studentName`, `studentEmail`, `studentPassword`, `studentPhone`, `studentGender`, `studentYear`, `studentProfilePicture`, `dateCreated`) VALUES
(3, 1, 'Student Name', 'name@domain.com', 'password', 'N/A', 'N/A', 'Freshman', 'default_avatar.png', '2023-04-29 04:54:46'),
(5, 2147483647, 'Nicanor Pineda', 'kulitnick@yahoo.com', '123', '0909090909', 'N/A', 'Freshman', 'default_avatar.png', '2023-04-29 05:10:29'),
(6, 41232412, 'Carol Ann Tejero', 'caroltejero@gmail.com', '123', '0707070707', 'N/A', 'Freshman', 'default_avatar.png', '2023-04-29 12:04:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentName` (`studentName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
