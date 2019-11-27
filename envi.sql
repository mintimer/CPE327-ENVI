-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 05:33 PM
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
  `campaign_describe` text COLLATE utf8_unicode_ci NOT NULL,
  `manage_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `manage_authen` text COLLATE utf8_unicode_ci,
  `campaign_document` text COLLATE utf8_unicode_ci,
  `campaign_pic` text COLLATE utf8_unicode_ci NOT NULL,
  `amount_people` int(11) NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `lati` double NOT NULL,
  `longti` double NOT NULL,
  `rating_avg` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `campaigninfo`
--

INSERT INTO `campaigninfo` (`campaign_id`, `campaign_name`, `campaign_type`, `start_time`, `end_time`, `campaign_describe`, `manage_name`, `manage_authen`, `campaign_document`, `campaign_pic`, `amount_people`, `location`, `status`, `user_id`, `lati`, `longti`, `rating_avg`) VALUES
(1, 'Push da payload', 1, '2019-12-27', '2019-12-27', 'Lets help DVA to got this win of payload pushing now !!!!!', 'D.Va', NULL, NULL, './pic/campaign/Push da payload.png', 12, 'Busan', 0, 9, 35.14876876243253, 129.0537048847939, 0);

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
  `banned` int(11) NOT NULL DEFAULT '0',
  `picture_path` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `username`, `password`, `firstname`, `lastname`, `goodness_point`, `phone_no`, `email`, `dob`, `disease`, `allergic_food`, `banned`, `picture_path`) VALUES
(1, 'admin', '1234', 'Prayad', 'Janjao', 9999, '0851957830', 'admin@envi.org', '1998-08-21', NULL, NULL, 0, './pic/profile/adminpic.jpg'),
(3, 'mint', '1234', 'Settapong', 'Subkong', 100, '0851957830', 'mint@envi.org', '1998-08-21', NULL, NULL, 0, './pic/profile/mint.jpg'),
(5, 'test', '1150', 'Test', 'Unknown', 100, '191', 'test@test.test', '1982-06-11', NULL, NULL, 0, ''),
(9, 'man', '1234', 'Prakasit', 'Nuchkamnerd', 100, '191', 'man@hotmail.com', '1998-09-20', NULL, NULL, 0, './pic/profile/man.jpg');

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
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `guest_join`
--
ALTER TABLE `guest_join`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`);

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
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guest_join`
--
ALTER TABLE `guest_join`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportinfo`
--
ALTER TABLE `reportinfo`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigninfo`
--
ALTER TABLE `campaigninfo`
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
