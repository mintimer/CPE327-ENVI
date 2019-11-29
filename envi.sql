-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 12:33 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

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
  `manage_authen` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaign_document` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaign_pic` text COLLATE utf8_unicode_ci NOT NULL,
  `amount_people` int(11) NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `lati` double NOT NULL,
  `longti` double NOT NULL,
  `rating_avg` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `campaigninfo`
--

INSERT INTO `campaigninfo` (`campaign_id`, `campaign_name`, `campaign_type`, `start_time`, `end_time`, `campaign_describe`, `manage_name`, `manage_authen`, `campaign_document`, `campaign_pic`, `amount_people`, `location`, `status`, `user_id`, `lati`, `longti`, `rating_avg`) VALUES
(1, 'Push da payload', 3, '2019-12-30', '2019-12-31', 'Lets help DVA to got this win of payload pushing now !!!!!', 'D.Va', NULL, NULL, './pic/campaign/Push da payload.png', 12, 'Busan', 1, 9, 35.14876876243253, 129.0537048847939, 0),
(2, 'Plook Prayad', 1, '2019-12-28', '2019-12-31', 'Plook kun ter rao sao pai tum mai ya mua arai wa eiei zaza!!', 'Harn Bangmod', NULL, NULL, './pic/campaign/Plook Prayad.jpg', 44, 'Bang mod', 1, 3, 13.651032936218165, 100.49537658691406, 0),
(6, 'Lang Par Char', 2, '2020-01-15', '2020-01-22', 'A Stop on the Salt Route 1000 B.C. As they rounded a bend in the path that ran beside the river, Lara recognized the silhouette of a fig tree atop a nearby hill. The weather was hot and the days were long. The fig tree was in full leaf, but not yet bearing fruit. Soon Lara spotted other landmarksâ€”an outcropping of limestone beside the path that had a silhouette like a manâ€™s face, a marshy spot beside the river where the waterfowl were easily startled, a tall tree that looked like a man with his arms upraised. They were drawing near to the place where there was an island in the river. The island was a good spot to make camp. They would sleep on the island tonight. Lara had been back and forth along the river path many times in her short life. Her people had not created the pathâ€”it had always been there, like the riverâ€”but their deerskin-shod feet and the wooden wheels of their handcarts kept the path well worn. Laraâ€™s people were salt traders, and their livelihood took them on a continual journey.', 'Polar Bear', NULL, NULL, './pic/campaign/Lang Par Char.jpg', 10, 'Greenland', 0, 3, 60.05032975791311, -43.19330771519503, 0),
(7, 'The World', 4, '2020-03-05', '2020-04-24', 'KILL THANOS', 'TONY STARK', NULL, NULL, './pic/campaign/The World.jpg', 99, 'BENGBENG', 1, 9, 13.637535802375337, 87.23495707392317, 0),
(8, 'Clean Egypt', 1, '2020-05-01', '2020-05-02', 'MUDAMUDAMUMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDADAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDAMUDA', 'DIO', NULL, NULL, './pic/campaign/Clean Egypt.jpg', 10, 'Nile River', 1, 11, 26.98527590307631, 31.378434396274997, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `goodness_point` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `disease` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `allergic_food` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `banned` int(11) NOT NULL DEFAULT 0,
  `picture_path` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `username`, `password`, `firstname`, `lastname`, `goodness_point`, `email`, `disease`, `allergic_food`, `banned`, `picture_path`) VALUES
(1, 'admin', '1234', 'Prayad', 'Janjao', 9999, 'admin@envi.org', NULL, NULL, 0, './pic/profile/adminpic.jpg'),
(3, 'mint', '1234', 'Settapong', 'Subkong', 100, 'mint@envi.org', NULL, NULL, 0, './pic/profile/mint.jpg'),
(5, 'test', '1150', 'Test', 'Unknown', 100, 'test@test.test', NULL, NULL, 0, ''),
(9, 'man', '1234', 'Prakasit', 'Nuchkamnerd', 100, 'man@hotmail.com', NULL, NULL, 0, './pic/profile/man.jpg'),
(10, 'k', '1234', 'Kakyoin', 'Noriaki', 100, 'k@hotmail.com', NULL, NULL, 0, './pic/profile/k.jpg'),
(11, 'd', '1234', 'DIO', 'DEJANERO', 100, 'd@hotmail.com', NULL, NULL, 0, './pic/profile/d.jpg'),
(13, 'pong', '1234', 'PRA', 'KRAPONG', 100, 'p@eee.com', NULL, NULL, 0, './pic/profile/pong.jpg'),
(16, '1234', '1234', '1234', '1234', 100, 'teat.@', NULL, NULL, 0, './pic/profile/1234.jpg'),
(17, 'nopic', '1234', 'nopic', 'naja', 100, 'pen@eiei.com', NULL, NULL, 0, ''),
(18, 'pen', '1234', 'I HAVE A PEN', 'I HAVE A APPLE', 100, 'pen@gmail.com', NULL, NULL, 0, './pic/profile/pen.jpg'),
(20, 'do', '1234', 'An An An', 'Tod Tae Mo Da I Su Ki Dorae Mo1', 100, 'do@do.com', NULL, NULL, 0, './pic/profile/do.jpg'),
(21, 'nobi', '1234', 'Nobi', 'Nobita', 100, 'nobi@nobita.com', NULL, NULL, 0, './pic/profile/nobi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_join`
--

CREATE TABLE `user_join` (
  `user_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `rating_score` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_join`
--

INSERT INTO `user_join` (`user_id`, `campaign_id`, `rating_score`, `comment`) VALUES
(3, 2, NULL, NULL),
(3, 6, NULL, NULL),
(3, 8, NULL, NULL),
(5, 1, 1, '\r\n        '),
(5, 7, NULL, NULL),
(5, 8, 4, '\r\n        '),
(9, 1, NULL, NULL),
(9, 2, 5, '\r\n        '),
(9, 7, NULL, NULL),
(9, 8, 3, '\r\n        '),
(10, 1, NULL, NULL),
(10, 2, NULL, NULL),
(10, 7, NULL, NULL),
(10, 8, NULL, NULL),
(11, 1, NULL, NULL),
(11, 2, NULL, NULL),
(11, 7, NULL, NULL),
(11, 8, NULL, NULL),
(13, 2, NULL, NULL),
(13, 8, NULL, NULL),
(16, 8, NULL, NULL),
(17, 7, NULL, NULL),
(17, 8, NULL, NULL),
(18, 8, NULL, NULL),
(20, 8, NULL, NULL),
(21, 1, 4, '\r\n        '),
(21, 2, NULL, NULL);

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
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigninfo`
--
ALTER TABLE `campaigninfo`
  ADD CONSTRAINT `campaigninfo_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `userinfo` (`user_id`);

--
-- Constraints for table `user_join`
--
ALTER TABLE `user_join`
  ADD CONSTRAINT `user_join_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_join_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaigninfo` (`campaign_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
