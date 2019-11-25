-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 06:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `envi`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigninfo`
--

CREATE TABLE `campaigninfo` (
  `campaign_id` int(11) NOT NULL,
  `campaign_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `campaign_type` tinyint(4) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `lo_id` int(11) NOT NULL,
  `campaign_describe` text COLLATE utf8_unicode_ci NOT NULL,
  `manage_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `manage_authen` text COLLATE utf8_unicode_ci,
  `campaign_document` text COLLATE utf8_unicode_ci,
  `campaign_pic` text COLLATE utf8_unicode_ci,
  `amount_people` int(11) NOT NULL,
  `company_name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `rating_avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guest_join`
--

CREATE TABLE `guest_join` (
  `guest_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `disease` text COLLATE utf8_unicode_ci,
  `allergic_food` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locationinfo`
--

CREATE TABLE `locationinfo` (
  `lo_id` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reportinfo`
--

CREATE TABLE `reportinfo` (
  `report_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `user_target_id` int(11) DEFAULT NULL,
  `isUserReport` int(11) NOT NULL,
  `report_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `report_doc` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `goodness_point` int(11) NOT NULL,
  `phone_no` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `disease` text COLLATE utf8_unicode_ci,
  `allergic_food` text COLLATE utf8_unicode_ci,
  `banned` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `username`, `password`, `firstname`, `lastname`, `goodness_point`, `phone_no`, `email`, `dob`, `disease`, `allergic_food`, `banned`) VALUES
(1, 'admin', '1234', 'adminja', 'eiei', 0, '0851957830', 'admin@envi.org', '1998-08-21', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_join`
--

CREATE TABLE `user_join` (
  `user_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `rating_score` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigninfo`
--
ALTER TABLE `campaigninfo`
  ADD PRIMARY KEY (`campaign_id`),
  ADD KEY `lo_id` (`lo_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `guest_join`
--
ALTER TABLE `guest_join`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `locationinfo`
--
ALTER TABLE `locationinfo`
  ADD PRIMARY KEY (`lo_id`);

--
-- Indexes for table `reportinfo`
--
ALTER TABLE `reportinfo`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `user_target_id` (`user_target_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_join`
--
ALTER TABLE `user_join`
  ADD PRIMARY KEY (`user_id`,`campaign_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigninfo`
--
ALTER TABLE `campaigninfo`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_join`
--
ALTER TABLE `guest_join`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locationinfo`
--
ALTER TABLE `locationinfo`
  MODIFY `lo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportinfo`
--
ALTER TABLE `reportinfo`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigninfo`
--
ALTER TABLE `campaigninfo`
  ADD CONSTRAINT `campaigninfo_ibfk_1` FOREIGN KEY (`lo_id`) REFERENCES `locationinfo` (`lo_id`),
  ADD CONSTRAINT `campaigninfo_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `userinfo` (`user_id`);

--
-- Constraints for table `guest_join`
--
ALTER TABLE `guest_join`
  ADD CONSTRAINT `guest_join_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userinfo` (`user_id`),
  ADD CONSTRAINT `guest_join_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaigninfo` (`campaign_id`);

--
-- Constraints for table `reportinfo`
--
ALTER TABLE `reportinfo`
  ADD CONSTRAINT `reportinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userinfo` (`user_id`),
  ADD CONSTRAINT `reportinfo_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaigninfo` (`campaign_id`),
  ADD CONSTRAINT `reportinfo_ibfk_3` FOREIGN KEY (`user_target_id`) REFERENCES `userinfo` (`user_id`);

--
-- Constraints for table `user_join`
--
ALTER TABLE `user_join`
  ADD CONSTRAINT `user_join_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userinfo` (`user_id`),
  ADD CONSTRAINT `user_join_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaigninfo` (`campaign_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
