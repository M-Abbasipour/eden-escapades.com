-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Sep 01, 2016 at 11:46 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eden`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `accepted`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 0, NULL, NULL),
(2, 5, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `user_id`, `parent_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'This is a status update fro Frankie', '2016-07-18 13:42:54', '2016-07-18 13:42:54'),
(2, 1, NULL, 'This is a status\r\n', '2016-07-19 15:17:27', '2016-07-19 15:17:27'),
(3, 1, NULL, 'This is a status from oakley', '2016-07-19 16:38:35', '2016-07-19 16:38:35'),
(4, 1, NULL, 'This is a status', '2016-07-19 17:13:30', '2016-07-19 17:13:30'),
(5, 1, NULL, 'Status here', '2016-07-19 17:16:56', '2016-07-19 17:16:56'),
(6, 1, NULL, 'fed', '2016-07-19 17:18:33', '2016-07-19 17:18:33'),
(7, 1, 6, 'This is a reply', '2016-07-19 17:20:04', '2016-07-19 17:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `location`, `first_name`, `last_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'michelleabbasipour@outlook.com', 'BassiBabes', '$2y$10$yvpdd.IBpuclJ8pZUtaSQuTyIJ6LRIzz7kSTPLAoyZuJPU1q8oQCC', '', '', '', '6TkU4q1Rb3w1tSubTRfLwLZWVZdhkJrJ7C57exO00eREIyl37xSgm0WeFyvY', '2016-07-16 15:31:14', '2016-07-19 17:33:07'),
(2, 'frankie@email.com', 'Frankie', '$2y$10$v791UtcZiRyFDmBa6ZdFh.hOA6/R8zyqQGj8M7eCQ.fdac81XbYJ6', '', '', '', NULL, '2016-07-18 13:37:13', '2016-07-18 13:37:13'),
(3, 'ramsey@email.com', 'Ramsey', '$2y$10$MgantXQRuIzR6qF74KAD2OKY2/C7uJlcp9DjEOVa5S7xbS1LcHwBS', '', '', '', NULL, '2016-07-18 13:37:27', '2016-07-18 13:37:27'),
(4, 'jake@email.com', 'Jake', '$2y$10$l41Uw2QtWzy5bIX5rvbLGe8RCgLVn9Ez1cWegRcdWWlgElw8aLaZ6', '', '', '', NULL, '2016-07-18 13:37:39', '2016-07-18 13:37:39'),
(5, 'oakley@email.com', 'Oakley', '$2y$10$qD4DnQe2NR1XK/jywZuWnOfpdtLGmPq.1HprknycVHw0tD.o2WELu', '', '', '', NULL, '2016-07-18 13:37:57', '2016-07-18 13:37:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;