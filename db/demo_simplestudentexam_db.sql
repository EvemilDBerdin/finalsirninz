-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2022 at 01:34 AM
-- Server version: 5.7.40
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_simplestudentexam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `e_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_started` text NOT NULL,
  `date_submitted` text NOT NULL,
  `all_questions` int(11) NOT NULL,
  `all_correct_answer` text NOT NULL,
  `exam_status` int(1) NOT NULL COMMENT '0 - enabled, 1-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`e_id`, `user_id`, `date_started`, `date_submitted`, `all_questions`, `all_correct_answer`, `exam_status`) VALUES
(1, 2, '', '2022-11-11 : 03:32:59pm', 6, '0', 0),
(2, 2, '', '2022-11-11 : 03:33:49pm', 6, '0', 0),
(3, 2, '', '2022-11-11 : 03:34:16pm', 6, '0', 0),
(4, 2, '', '2022-11-11 : 03:36:04pm', 6, '0', 0),
(5894, 2, '', '2022-11-11 : 03:36:49pm', 6, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

CREATE TABLE `exam_details` (
  `ed_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `questionaire_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_answer` text NOT NULL,
  `edetails_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`ed_id`, `exam_id`, `questionaire_id`, `user_id`, `user_answer`, `edetails_status`) VALUES
(1, 1, 1, 0, 'Merging', 0),
(2, 2, 2, 0, 'Of arranging the data in a table.', 0),
(3, 1, 10, 0, 'Delete obsolete records', 0),
(4, 1, 4, 0, 'Field', 0),
(5, 2, 1, 0, 'Data manipulation', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questionaire`
--

CREATE TABLE `questionaire` (
  `q_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` text NOT NULL,
  `questionaire_status` int(1) NOT NULL COMMENT '0-enabled, 1-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionaire`
--

INSERT INTO `questionaire` (`q_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `questionaire_status`) VALUES
(1, 'Database is highly effective for', 'Editing', 'Merging', 'Data manipulation', 'Copying', 'Data manipulation', 0),
(2, 'Sorting is a process', 'Of arranging the data in a table.', 'Of joining data from two or more tables.', 'To select a desired specific data.', 'Of performing corrections.', 'Of arranging the data in a table.', 0),
(4, 'Currency, text and decimal are examples for _____ types.', 'Name', 'Field', 'Both', 'Data', 'Field', 0),
(10, 'With the help of Structured Query Language one can', 'Search the database to locate records', 'List a subset of records', 'All the above', 'Delete obsolete records', 'Search the database to locate records', 0),
(11, 'Which of the following language is the predecessor to C Programming Language?', 'A', 'B', 'BCPL', 'C++', 'BCPL', 0),
(51, 'Which of the following language is the predecessor to C Programming Language?', 'A', 'B', 'BCPL', 'C++', 'BCPL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `age` int(11) NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_type` int(1) NOT NULL COMMENT '1 admin, 2 student',
  `user_status` int(1) NOT NULL COMMENT '1 deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `firstname`, `lastname`, `age`, `contact`, `email`, `username`, `password`, `user_type`, `user_status`) VALUES
(1, 'John Carlo', 'Baguio', 1, '2323232', 'webtestreceive@gmail.com', 'student', '123123', 2, 0),
(2, 'Scott Mitchell', 'Mosqueda', 22, '09295788241', 'proweaverscott@awesome.af', 'proweaver', 'proweaver', 2, 0),
(4, 'Proweaver Admin', 'Test', 30, '09565137105', 'evemil.berdin@proweaver.net', 'admin', '123123', 1, 0),
(28, 'Proweaver', 'SPTeam', 100, '09565137105', 'prospteam@gmail.com', 'web2SPAccount', 'Ocf7CrAqtKkZ2yc4', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD PRIMARY KEY (`ed_id`);

--
-- Indexes for table `questionaire`
--
ALTER TABLE `questionaire`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5895;

--
-- AUTO_INCREMENT for table `exam_details`
--
ALTER TABLE `exam_details`
  MODIFY `ed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `questionaire`
--
ALTER TABLE `questionaire`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
