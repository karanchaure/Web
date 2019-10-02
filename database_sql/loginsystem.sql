-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2019 at 05:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`id`, `title`, `url`) VALUES
(1, 'Jai Jai Shivshankar Song | War | Hrithik Roshan | Tiger Shroff | Vishal & Shekhar ft, Vishal, Benny ', 'https://www.youtube.com/embed/0kfLTq57_Y0'),
(2, 'Afghan Jalebi (Ya Baba) Full Song with LYRICS | Phantom | Saif Ali Khan, Katrina Kaif | T-Series ', 'https://www.youtube.com/embed/1Cf2uUyvFi8'),
(3, 'Padmaavat: Khalibali - Ranveer Singh | Deepika Padukone | Shahid Kapoor | Shivam Pathak ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/v7K4vGYL9zI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'wow', 'adga@dwf.etjet', 'root', ''),
(2, 'kafa', 'adga@dwf.etjet', 'root', ''),
(3, 'kafa', 'adga@dwf.etjet', 'uyi', 'saf'),
(4, 'sf', 'saffa@ds.sr', 'awa', 'fxn'),
(5, 'sfdxdxh', 'saffa@ds.srx', 'awaxfh', 'saasf'),
(6, 'sfdxdxh', 'saffa@ds.srx', 'awaxfh', 'saasf'),
(7, 'sfdxddsgsdgsdg', 'saffa@ds.srx', 'awaxfh', 'dsgds'),
(8, 'boxer', 'saffa@ds.srx', 'awaxfh', 'fxn'),
(9, 'boxer12', 'saffa@ds.srx', 'awaxfh', 'gsg'),
(10, 'boxer500', 'saffa@ds.srx', 'awaxfh', 'gdsg'),
(11, 'boxer1000', 'saffa@ds.srx', 'awaxfh', 'saffs'),
(12, 'wowo', 'eubufQ@fwe.fdf', 'ewyw', 'he'),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, 'sb', 'eubufQ@fwe.fdf', 'awa', 'ggol'),
(16, 'sh', 'geee@fwf.yf', 'srhsh', 'srhhr'),
(17, 'sfdxddsgsdgsdg', 'JSH@savgj.skab', 'ufyl', 'tsj'),
(18, 'sfdxddsgsdgsdg', 'JSH@savgj.skab', 'ufyl', 'tsj'),
(19, 'afwfaw', 'adga@dwf.etjet', 'affas', 'afsfas'),
(20, 'afwfaw', 'adga@dwf.etjet', 'affas', 'afsfas'),
(21, 'fawfa', 'saffa@ds.srx', 'asfgsa', 'gdassgdg'),
(22, 'wowoo', 'JSH@savgj.skab', 'awa', 'fgtk'),
(23, 'karan', 'JSH@savgj.skab', 'karano', 'wow'),
(24, 'karan', 'JSH@savgj.skab', 'karano', 'wow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
