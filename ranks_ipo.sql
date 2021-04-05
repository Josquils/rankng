-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 08:27 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranks_ipo`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `author` varchar(125) NOT NULL DEFAULT 'anonymous',
  `title` varchar(255) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `excerpts` text NOT NULL,
  `tags` text NOT NULL,
  `category` varchar(125) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `author`, `title`, `slug`, `content`, `excerpts`, `tags`, `category`, `thumbnail`, `date`, `last_update`, `update_author`) VALUES
(1, 'Agboro Joseph', 'Test title set', 'Test-title-set', '<p>This is a live example. Lorem Ipsum dolor sit amet consecutor lama nebreah</p>\r\n', 'This is a live example. Lorem Ipsum Dolor Sit Amet', '', 'updates', '0', '2020-09-23 10:57:10', '2020-09-23 12:16:21', 'Agboro Joseph');

-- --------------------------------------------------------

--
-- Table structure for table `rank_data`
--

CREATE TABLE `rank_data` (
  `QI` double NOT NULL DEFAULT '0' COMMENT 'Quality Input',
  `QP` double NOT NULL DEFAULT '0' COMMENT 'Quality Process',
  `QO` double NOT NULL DEFAULT '0' COMMENT 'Quality Output',
  `SLR` double NOT NULL DEFAULT '0' COMMENT 'Student Lecturer Ratio',
  `SAR` double NOT NULL DEFAULT '0' COMMENT 'Student Accreditation Ratio',
  `FL` int(11) NOT NULL DEFAULT '0' COMMENT 'Foreign Lecturers',
  `FS` int(11) NOT NULL DEFAULT '0' COMMENT 'Foreign Students',
  `SQR` double NOT NULL DEFAULT '0' COMMENT 'Student Quality Research',
  `LQR` double NOT NULL DEFAULT '0' COMMENT 'Lecturers Quality Research',
  `SEC` double NOT NULL DEFAULT '0' COMMENT 'Student Exhibitions and Competitions',
  `AGR` double NOT NULL COMMENT 'Acceptance Graduate Ratio',
  `AWD` int(11) NOT NULL DEFAULT '0' COMMENT 'Awards',
  `QG` double NOT NULL DEFAULT '0' COMMENT 'Quality Graduates / Alumnis',
  `school_id` varchar(32) NOT NULL,
  `year` date NOT NULL COMMENT 'Year of Data Capture',
  `total_index` double UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `school_id` varchar(32) NOT NULL,
  `name` varchar(125) NOT NULL,
  `abb` varchar(32) NOT NULL,
  `country` varchar(125) NOT NULL DEFAULT 'nigeria',
  `website` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `about` text NOT NULL,
  `logo` varchar(125) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`school_id`, `name`, `abb`, `country`, `website`, `location`, `about`, `logo`, `author`, `date_added`, `last_update`, `update_author`) VALUES
('5f6dd85f6aaca', 'Lagos State University', 'LASU', 'nigeria', 'lasu.edu.ng', 'Ojo, lagos State', '<p>Lasu was founded in 1987 and it is still the best state university in Nigeria</p>\r\n', 'IMG-20200811-WA00161.jpg', 'Agboro Joseph', '2020-09-25 12:45:35', '2020-09-25 12:56:10', 'Agboro Joseph');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(125) NOT NULL,
  `firstname` varchar(125) NOT NULL,
  `lastname` varchar(125) NOT NULL,
  `position` varchar(125) NOT NULL DEFAULT 'user',
  `password` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstname`, `lastname`, `position`, `password`, `email`, `reg_date`, `last_update`) VALUES
('josquils', 'Agboro', 'Joseph', 'admin', '$2y$11$CtcQJ1h5QWRb.oHRbKYNper7Po3968Z4epChs03uazlfmLpDcs9XC', 'quilsdev@gmail.com', '2020-09-22 13:24:50', '2020-09-22 13:24:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `rank_data`
--
ALTER TABLE `rank_data`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rank_data`
--
ALTER TABLE `rank_data`
  ADD CONSTRAINT `rank_data_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `universities` (`school_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
