-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 10:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalrichs_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `s_no` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`s_no`, `full_name`, `email`, `date`, `subject`, `message`) VALUES
(29, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', '2020-06-27', 'Software engineering', 'good'),
(30, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', '2020-06-27', 'Software engineering', 'good'),
(31, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', '2020-06-27', 'Software engineering', 'sdsfdsf'),
(32, 'Preeti kumari kushwaha', 'kushwahapreeti999@gmail.com', '2020-06-27', 'Software engineering', 'fdfd'),
(33, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', '2020-06-27', 'SLMCKDMFCDS', 'CMNXMNCM'),
(34, '', '', '2020-06-27', '', ''),
(35, '', '', '2020-06-27', '', ''),
(36, '', '', '2020-06-27', '', ''),
(37, '', '', '2020-06-27', '', ''),
(38, '', '', '2020-06-27', '', ''),
(39, '', '', '2020-06-27', '', ''),
(40, '', '', '2020-06-27', '', ''),
(41, 'preeti', 'kushwahapreeti999@gmail.com', '2020-06-27', 'Software engineering', 'nice'),
(42, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', '2020-06-27', 'sdsf', 'xfvdvd'),
(43, 'Ashu', 'kushwahapreeti999@gmail.com', '2020-06-28', 'asd', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `s_no` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`s_no`, `fullname`, `email`, `username`, `phone_no`, `password`, `confirm_password`, `created_date`, `user_id`, `category`) VALUES
(55, 'Preeti kumari kushwaha', 'kushwahapreeti999@gmail.com', 'preeti12', 8394028035, '123456', '123456', '0000-00-00', 0, 0),
(56, 'Kiran Kumari', 'kiran@gmail.com', 'kiran', 8394028035, '123456', '123456', '2020-06-26', 0, 0),
(57, 'Rajesh kumar', 'Rajesh@gmail.com', 'rajesh', 1234567894, '123456', '123456', '2020-06-26', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload_doc_table`
--

CREATE TABLE `upload_doc_table` (
  `document_id` int(10) NOT NULL,
  `upload_document` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `upload_date` date NOT NULL,
  `doc_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_doc_table`
--

INSERT INTO `upload_doc_table` (`document_id`, `upload_document`, `user_id`, `username`, `status`, `upload_date`, `doc_title`) VALUES
(59, '20200629090645_918197.docx', 0, '', 1, '2020-06-29', 'short_note_on_conid_19'),
(60, '20200629090628_421397.csv', 0, '', 1, '2020-06-29', 'short_note_on_conid_19'),
(63, '20200629090640_784100.jpg', 0, '', 1, '2020-06-29', 'file');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `upload_doc_table`
--
ALTER TABLE `upload_doc_table`
  ADD PRIMARY KEY (`document_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `upload_doc_table`
--
ALTER TABLE `upload_doc_table`
  MODIFY `document_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
