-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 08:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_hashtag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_hashtag`, `event_description`, `event_image`, `created_at`, `updated_at`) VALUES
(13, 'batch 2001', '#lifeIsGood', 'this is not good', 'image1.jpg', '2020-09-13 00:46:29', '2020-11-11 08:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE `graduates` (
  `id` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MiddleName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TelNum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MobileNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BirthDate` date NOT NULL,
  `CivilStat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Citizenship` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EmailAdd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GraduatedLvl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `YearGrad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CompanyAdd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ComPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `graduates`
--

INSERT INTO `graduates` (`id`, `FirstName`, `LastName`, `MiddleName`, `TelNum`, `Address`, `MobileNo`, `BirthDate`, `CivilStat`, `Age`, `Gender`, `Religion`, `Citizenship`, `EmailAdd`, `GraduatedLvl`, `Course`, `YearGrad`, `Company`, `CompanyAdd`, `ComPosition`, `created_at`, `updated_at`, `event_id`, `picture`) VALUES
(15, 'john ivan ', 'flores', 'asdasd', 'sasas', 'cubao quezon city philippines', '09128330614', '2020-11-12', 'sasas', '12', 'male', 'sas', 'sasas', 'vanlare165@gmail.com', 'highschool', 'bsit', '2020', 'google', 'cubao quezon city philippines', 'CEO', '2020-11-11 01:31:55', '2020-11-11 01:31:55', 13, 'e2d9242dd7b26fe18fc6b5c3e17090f9.jpg'),
(16, 'banski', 'pacheco', 'flores', 'sa', 'asas', 'asas', '2020-11-20', 'sas', 'sas', 'asas', 'asas', 'sas', 'asas', 'gradschool', 'asas', 'asas', 'asas', 'asas', 'asas', '2020-11-11 03:50:16', '2020-11-11 03:50:16', 13, 'yusuke_urameshi_by_flavio_ruru_dcaqepr-fullview.png'),
(17, 'john ivan flores', 'flores', 'ocray', '0999999099', 'cubao quezon city philippines', '09128330614', '2020-11-11', 'married', '122', 'male', 'N/A', 'filipino', 'vanlare165@gmail.com', 'highschool', 'bsit', '2020', 'google', 'cubao quezon city philippines', 'CEO', '2020-11-13 02:36:25', '2020-11-13 02:36:25', 13, '67248468_560567227810836_4010835010138406912_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2020_01_21_180124_create_speakers_table', 1),
('2020_01_23_102544_create_events_table', 2),
('2020_01_23_105403_add_event_id_to_speakers_table', 3),
('2020_01_28_133306_create_alumnis_table', 4),
('2020_01_29_004420_create_schedules_table', 4),
('2020_01_29_013227_add_event_id_scheduled_table', 5),
('2020_09_12_112655_create_alumni_table', 6),
('2020_09_12_130155_create_ewans_table', 7),
('2020_09_12_130339_create_graduates_table', 7),
('2020_09_13_062450_add_event_id_to_graduates_table', 8),
('2020_11_11_091915_add_picture_to_graduates_table', 9),
('2020_11_11_092405_add_image_to_graduates_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `schedule_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_7` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_8` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `schedule_1`, `schedule_2`, `schedule_3`, `schedule_4`, `schedule_5`, `schedule_6`, `schedule_7`, `schedule_8`, `created_at`, `updated_at`, `event_id`) VALUES
(10, '10:00 - 11:00', '11:00 - 12:00', '12:00 - 1:00', '1:00 - 1:30', '1:30 - : 4:00', '4:00 - 4:30', '4:30 - 5:00', '5:00 - 6:00', '2020-11-11 07:51:27', '2020-11-11 07:51:27', 13);

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `title`, `picture`, `description`, `created_at`, `updated_at`, `event_id`) VALUES
(99, 'john', 'noice', 'download.jpg', 'asdasdasd', '2020-11-11 02:10:48', '2020-11-11 08:02:37', 13),
(100, 'ewan', 'dasdasd', '7771683223d86b237a3304d6f32828b9--headshot-poses-headshot-photography.jpg', 'dasdasd', '2020-11-11 08:00:17', '2020-11-11 08:02:49', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'vanlare165@gmail.com', '$2y$10$r6xDLrWwlFpAH75Dn3gTV.7IubRLf11lrHsTMKp3CCfnrQwzkIypi', '2SK7H6EQdNGARULnw91N21HvUOGnAe9BCVE69obtnZMYsg8g5c1mQK0vKfDS', '2020-01-26 06:37:21', '2020-09-11 20:57:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `graduates_event_id_foreign` (`event_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_event_id_foreign` (`event_id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `speakers_event_id_foreign` (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `graduates`
--
ALTER TABLE `graduates`
  ADD CONSTRAINT `graduates_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `speakers`
--
ALTER TABLE `speakers`
  ADD CONSTRAINT `speakers_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
