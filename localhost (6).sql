-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2016 at 11:08 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE IF NOT EXISTS `attendences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `total_presents` int(11) NOT NULL,
  `attendence_percent` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE IF NOT EXISTS `batches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `batch_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  `register_flag` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `delete_flag` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=70 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `course_id`, `batch_id`, `description`, `image`, `delete_flag`, `created_at`, `updated_at`) VALUES
(17, 1, 2, 2, 'helloworld', 'nothing', 0, '2016-07-24 21:33:06', '2016-07-25 01:45:04'),
(18, 2, 2, 2, 'aasdfasdfasdfasdf', 'asdfasdf', 0, '2016-07-24 23:46:08', '2016-07-25 01:36:08'),
(19, 3, 2, 2, 'asfadsfasdfxcvxcvbxcbxcv', 'xvcbcvb', 0, '2016-07-26 00:39:12', '2016-07-26 01:45:09'),
(20, 2, 2, 2, 'nothing else to say', 'asdfasdfafsd', 0, '2016-07-26 00:36:05', '2016-07-26 11:38:11'),
(21, 2, 2, 2, 'ajdkslfjlaksdjflkasdf', 'asdjflaksdjf', 0, '2016-07-26 01:38:17', '2016-07-26 00:38:06'),
(22, 1, 2, 2, 'everything is not bad', 'nothing', 0, '2016-07-25 23:36:07', '2016-07-26 00:38:16'),
(23, 2, 2, 2, 'ssfgsdfgsfdg', 'sdfgsdfgsdfg', 0, '2016-07-26 00:40:12', '2016-07-26 00:39:15'),
(24, 2, 2, 2, 'asdfasdfasfsdf', 'asdfasdf', 0, '2016-07-25 23:38:16', '0000-00-00 00:00:00'),
(25, 1, 2, 2, 'asdfasdfasd asdfasd ', 'asdfasdf ', 0, '2016-07-25 17:30:00', '2016-07-25 17:30:00'),
(26, 3, 2, 2, 'lols', 'asdfasdf', 0, '2016-07-25 21:39:04', '2016-07-26 01:40:19'),
(27, 2, 2, 2, 'nothing gonna change my life for u ', 'alskdfjlasdjfk', 0, '2016-07-26 01:38:12', '2016-07-25 23:36:11'),
(28, 2, 3, 3, 'aksjdklajskldfasdfa ', 'asdfasdf', 0, '2016-07-25 21:35:09', '0000-00-00 00:00:00'),
(29, 3, 2, 2, 'give me your hands', 'as;dfjlkasdjf', 0, '2016-07-25 21:34:09', '2016-07-25 21:36:15'),
(30, 2, 2, 2, 'stupid is beside me', 'asjdfklajsdfkl', 0, '2016-07-26 05:39:20', '2016-07-26 06:42:27'),
(33, 1, 1, 1, 'asdfasfdasdf', 'asdfasdf', 0, '2016-07-26 02:46:18', '0000-00-00 00:00:00'),
(34, 2, 2, 2, 'haha', 'nothing', 0, '2016-07-26 01:41:22', '2016-07-26 00:42:20'),
(35, 3, 3, 3, 'nothing', 'nothing', 0, '2016-07-25 22:38:14', '2016-07-26 00:39:20'),
(36, 3, 4, 4, 'aslkdfjaskldfs ', 'aslasfasdf', 0, '2016-07-26 23:36:12', '2016-07-27 00:37:16'),
(37, 2, 2, 2, 'asdfasdf', 'jLSKFJASLKDF', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 1, 2, 2, 'asfaksjdflk', 'asdjflasdf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 2, 2, 2, 'ssfdgdfg', 'afasdf', 0, '2016-07-28 01:38:21', '2016-07-28 02:41:25'),
(40, 2, 2, 2, 'asdfasdf', 'asfasdfsadf', 0, '2016-07-28 03:41:27', '2016-07-28 02:42:23'),
(41, 2, 33, 3, '3asdf', 'asdfasdf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 2, 2, 2, 'afsdfasd', 'asdfasdf', 0, '2016-07-28 02:38:23', '2016-07-28 01:42:22'),
(43, 2, 2, 2, 'dgdfertyetry', 'teyertyerty', 0, '2016-07-28 02:41:22', '2016-07-28 01:36:19'),
(44, 2, 2, 2, 'asdfadsf', 'asdfj', 0, '2016-07-28 02:41:22', '2016-07-28 02:40:22'),
(45, 2, 2, 2, 'asdfasf', 'asdfadsf', 0, '2016-07-28 01:41:23', '2016-07-28 03:42:23'),
(46, 2, 2, 2, 'asdfasdasdf', 'asdfasdfsfd', 0, '2016-07-28 03:42:23', '2016-07-28 03:38:23'),
(47, 2, 2, 2, 'sdfgsdfg', 'sdfgsdfg', 0, '2016-07-28 06:46:31', '0000-00-00 00:00:00'),
(48, 1, 1, 1, 'rofl', 'asdfasdf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 1, 1, 1, 'lmao', 'asdfkasd', 0, '2016-07-28 01:39:22', '2016-07-28 00:38:19'),
(50, 1, 2, 2, 'asjdfajldsf', 'asdfadfas', 0, '2016-07-28 04:39:25', '2016-07-27 23:39:15'),
(51, 2, 2, 2, 'sdfgsdfg', 'asdfsd', 0, '2016-07-28 01:41:22', '2016-07-28 02:42:23'),
(52, 2, 2, 2, 'what is that going on ', 'asjlfaks', 0, '2016-07-28 02:40:22', '2016-07-28 02:40:22'),
(53, 2, 2, 2, 'hahaha', 'alsjdfk', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 2, 2, 2, 'no more that''s it', 'asdfasf', 0, '2016-07-27 23:38:18', '2016-07-28 02:42:22'),
(55, 3, 3, 3, 'greed is good', '90', 0, '2016-07-28 03:44:26', '2016-07-27 22:37:15'),
(56, 1, 1, 1, 'sdfasdfafd', 'assasdf', 0, '2016-07-28 01:38:20', '2016-07-28 02:41:24'),
(57, 2, 2, 2, 'haha this time is real', 'asdf', 0, '2016-07-28 02:44:22', '2016-07-28 06:49:35'),
(58, 1, 2, 2, 'helloworld this is real', 'ajdslkfjs', 0, '2016-07-28 01:42:23', '2016-07-28 02:41:20'),
(59, 1, 2, 2, 'hey how u doing?', 'sdfg', 0, '2016-07-28 03:42:23', '2016-07-28 03:40:23'),
(60, 1, 2, 2, 'what''s up how u doing? good?', 'asdfasd', 0, '2016-07-28 01:38:16', '2016-07-28 00:39:17'),
(61, 1, 1, 1, 'helloworld', 'aksdkfas', 0, '2016-07-28 00:38:17', '2016-07-28 00:36:17'),
(62, 2, 2, 2, 'anvael hi lvadasjlifncanheid', '', 0, '2016-07-29 23:38:03', '2016-07-30 20:34:02'),
(63, 2, 2, 2, 'kalsdfjklasfd', 'asljfalsdjf', 0, '2016-07-30 04:46:28', '2016-07-30 01:42:22'),
(64, 2, 2, 2, 'fgsgsfgd', 'dsgfsdgf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 2, 2, 2, 'gdfgxsdfgd', 'fdfgdfgdgf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 1, 2, 3, 'asdfasdfs', 'askfjkls', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 3, 3, 3, 'asfasfasdf', 'asdfasdfs', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 2, 3, 2, 'hi im hein htet', 'asdfasdfadsf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 2, 2, 2, 'zljklasdfjklasjdflk', 'lajsdlkfjskl', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_25_070936_create_students_table', 1),
('2016_06_25_071004_create_batches_table', 1),
('2016_06_25_071145_create_courses_table', 1),
('2016_06_25_081716_create_blogs_table', 1),
('2016_06_25_085718_create_attendences_table', 1),
('2016_06_25_090726_create_project_groups_table', 1),
('2016_06_25_092027_create_student_project_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_groups`
--

CREATE TABLE IF NOT EXISTS `project_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) NOT NULL,
  `project_name` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `access`) VALUES
(1, 'admin', 'all'),
(2, 'student', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_project`
--

CREATE TABLE IF NOT EXISTS `student_project` (
  `student_id` int(10) unsigned NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `student_project_student_id_index` (`student_id`),
  KEY `student_project_project_id_index` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activate_flag` tinyint(1) NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `varification_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delete_flag` tinyint(1) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `phone`, `facebook_link`, `activate_flag`, `photo`, `varification_code`, `delete_flag`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 'hnin', 'hnin@gmail.com', '$2y$10$iC85Sww7eyeT7Nc8eYxmh.HhMV3AoPGToI5qRe4YbMpVsPr5iAWaq', '12345', '', 0, '', '', 0, 0, '2016-07-14 03:09:08', '2016-07-14 03:09:08'),
(5, '<script>alert("hnin foolish stupid dummy")</script>', 'ghghjghj@gmail.com', '$2y$10$sP22sNZP8boRKK4s72RJKuSBGxe5CreE.Q.gpIqvFTyj7CliRMtrO', 'root', '', 0, '', '', 0, 0, '2016-08-14 01:53:34', '2016-08-14 01:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `user_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_flag` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_photo`, `role_id`, `remember_token`, `created_at`, `updated_at`, `delete_flag`) VALUES
(1, 'min', 'min@gmail.com', '$2y$10$OTVhYJJxXmjo1oMxD63szuKdLn62DCB0nbytI5wXHRbDCuKp40nNy', '', 1, '6tn6tNtcfdsqSSqY8vsAInmCCNhcIwxvnjdD0sI4vIa7KdHc5MtVGuK17Js8', '2016-07-13 11:40:32', '2016-08-14 02:50:16', 1),
(2, 'hein', 'hein@gmail.com', '$2y$10$d.d6rID0WlG2OSkWCCvbT.mK.f.QnRCtpv2HAKfVIScpC.uEUiBSa', '', 2, 'V92Wc2yMAOb4xenIS9C2T0dIIostAAi5eX8yN8FCPXhAZUOEG7SzgGmbqLDi', '2016-07-14 02:05:46', '2016-08-14 02:51:54', 0),
(3, 'hnin', 'hnin@gmail.com', '$2y$10$iEvvqB71KLJAaSv5tnyJ.e4O8v2W85Mik3Qugy2CIhiGU3q.YRgwe', '', 0, NULL, '2016-07-14 12:29:50', '2016-07-14 12:29:50', 0),
(5, 'pushi', 'pushi@gmail.com', '$2y$10$wWZOi0ZLxdZdybuPJbacY.2TCsyc9ofw2KX1QprvRkb2TmJLInhty', '', 2, 'jErq2zBmuFTWTEWsWmYde0bVZqD41rnWzDD76LikW3NyQOK9oLwjddH5LNJi', '2016-07-16 01:44:07', '2016-07-16 01:52:08', 0),
(17, 'lol', 'lol@gmail.com', '$2y$10$/3tLr0gWOdU1.kyD/3wR9e5hyEVkBUpGbTVQTlS9SC.hNLe8UdJwK', '', 2, '21DpGwEUmVU7NX3zP27Kin9brigVIoCu88GuerDMuJE74eH5NpWDu3VLJoDF', '2016-07-25 04:06:19', '2016-07-25 04:46:09', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_project`
--
ALTER TABLE `student_project`
  ADD CONSTRAINT `student_project_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_project_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
