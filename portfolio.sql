-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 09:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `del_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `sub_title`, `title`, `description`, `picture`, `status`, `del_status`) VALUES
(2, 'Hi, I\'m', 'About me', 'Lorem ipsum dolor sit amet', 'about_65083.jpg', 1, 0),
(5, 'Coaeum', 'Fugiat distinctio', 'Aliquip eligendi acc', 'about_69131.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `pro_pic` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `btnText` varchar(40) NOT NULL,
  `btnUrl` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `del_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `pro_pic`, `sub_title`, `title`, `description`, `btnText`, `btnUrl`, `status`, `del_status`) VALUES
(1, '1.png', 'Hi', 'I\'m Rabiul', 'I’ve always been drawn to the overlap between design and development. Enjoy each aspect, and love building sites & mobile apps from start to finish, for clients come from all over the world.', 'Contact me', 'https://example.com', 1, 0),
(2, '2.png', 'Hello', 'I\'m Isabella', 'I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience.', 'See more', 'https://www.dofucylide.biz', 0, 0),
(3, '3.png', 'Hey', 'I\'m Sophia', 'I like to read, I like to write; I like to think, I like to dream; I like to talk, I like to listen.', 'Resume', 'https://www.wyvibuhynahasi.org.uk', 0, 1),
(14, 'user_13727.png', 'Hi', 'Omnis quae', 'I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience.', 'CV', 'https://www.lasypihebypes.com.au', 0, 0),
(15, 'user_49867.png', 'Hi, I\'m', 'Janifer lopez', 'I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience.', 'Resume', 'https://www.busacynepibutyr.ca', 0, 0),
(16, 'user_26943.png', 'Hi', 'I\'m afcasc', 'savsvsd', 'sdvsdvsdv', 'http://localhost/portfolio/admin/banners/banners.php', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `performance` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `year`, `performance`, `status`, `del_status`) VALUES
(3, 'Labore incidunt rat', 2022, 98, 1, 0),
(5, 'Expedita nobis volup', 2008, 60, 1, 0),
(6, 'Sint ullamco est s', 2010, 25, 1, 0),
(7, 'Maxime esse quia aut', 2012, 10, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `social` varchar(255) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `photo`, `text`, `social`, `status`) VALUES
(1, 'site-logo.png', 'White Logo', '', 1),
(2, 's_logo.png', 'Color Logo', '', 1),
(3, 'Copyright', 'Copyright © 2022 RixetBD | All Rights Reserved | Develop By Rabiul', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `platform`, `url`, `status`) VALUES
(1, 'facebook ', 'https://www.facebook.com/rixet.rabiul/', 1),
(2, 'twitter ', 'https://twitter.com/rixetbd', 1),
(3, 'instagram ', 'https://www.instagram.com/rixetbd/', 1),
(4, 'linkedin ', 'https://www.linkedin.com/in/rixetbd/', 1),
(5, 'whatsapp ', 'https://wa.link/b0dyi1', 1),
(6, 'pinterest ', 'https://www.facebook.com/rixet.rabiul/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `del_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `email`, `password`, `photo`, `status`, `del_status`) VALUES
(72, 'Admin', 'Paki Conley', 'dezijih', 'sorivug@nomail.com', '$2y$10$ew/fjKPLdl1huqkTAmxplePU0Zq.Q19CMUq1beHPEXLgUdfJn6V82', 'user_93766.jpg', 0, 0),
(73, 'Editor', 'Virginia Trevino', 'bymix', 'xili@nomail.com', '$2y$10$X3.n/.wnFzrue5P4b2o1Eer94VDRhyfuiRXtbMOYCrngtPW24BBAm', 'user_95527.jpg', 0, 0),
(74, 'Member', 'Ulla Collins', 'puwypywib', 'lozoto@gmail.com', '$2y$10$euDbx43ZFIlAj/jXULdYauP8zpEvg/pVufFDfKJ7vZReIiShuMcvW', 'user_24035.', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
