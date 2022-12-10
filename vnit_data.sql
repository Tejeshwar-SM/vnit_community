-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 06:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vnit_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `community_info`
--

CREATE TABLE `community_info` (
  `community_id` int(11) NOT NULL,
  `community_name` varchar(256) NOT NULL,
  `discription` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `members` int(11) NOT NULL DEFAULT '0',
  `owner` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community_info`
--

INSERT INTO `community_info` (`community_id`, `community_name`, `discription`, `status`, `img`, `members`, `owner`) VALUES
(2, 'One Piece', 'bjdkdhvdhhhhhhhhhhhhh djjjjjjjjjjjj vjjjjjjjjjj', 1, '516664.jpg', 10, '1'),
(3, 'Naruto', 'wert\r\ngrdsggggggggggggggggggggggggggggggggg', 0, '578022.png', 20, '1');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `time` time(6) NOT NULL,
  `date` date NOT NULL,
  `user_id` varchar(256) NOT NULL,
  `title` varchar(3000) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `time`, `date`, `user_id`, `title`, `content`) VALUES
(1, '12:06:14.000000', '2022-06-11', 'max11', 'why is snow white?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, '12:06:14.000000', '2022-06-11', 'peter11', 'why is moon round?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, '26:10:11.000000', '2022-06-10', 'tom23', 'what are bards?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, '26:10:11.000000', '2022-06-10', 'john23', 'what are showers?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `staticcustomerinfo`
--

CREATE TABLE `staticcustomerinfo` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile_img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staticcustomerinfo`
--

INSERT INTO `staticcustomerinfo` (`user_id`, `user_name`, `mobile`, `email`, `password`, `profile_img`) VALUES
(1, 'UHJhdGhhbSBHaXJp', 0, 'cHJhdGhhbUBnbWFpbC5jb20=', '164a48e142551453efaf0806a26a58ed', '');

-- --------------------------------------------------------

--
-- Table structure for table `variablecustomerinfo`
--

CREATE TABLE `variablecustomerinfo` (
  `user_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community_info`
--
ALTER TABLE `community_info`
  ADD PRIMARY KEY (`community_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `staticcustomerinfo`
--
ALTER TABLE `staticcustomerinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community_info`
--
ALTER TABLE `community_info`
  MODIFY `community_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staticcustomerinfo`
--
ALTER TABLE `staticcustomerinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
