-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 26, 2024 at 04:00 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `peps`
--

CREATE TABLE `peps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peps`
--

INSERT INTO `peps` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `profile_image`, `created_at`, `updated_at`) VALUES
(4, 'Kurt', 'Layam', 'kurt1@gmail.com', '09123456789', '1234', '1721961208.jpg', '2024-07-25 18:33:28', '2024-07-25 18:33:28'),
(11, 'Kurt', 'Layam3', 'kurtla@gmail.com', '0923423', '1234', '1721963676.jpg', '2024-07-25 18:48:36', '2024-07-25 19:14:36'),
(13, 'Kurt Alexander', 'LLLL', 'kurt9@gmail.com', '09874351', '1234', '1721962288.jpg', '2024-07-25 18:51:28', '2024-07-25 18:51:28'),
(14, 'Kurt', 'Test', 'klay12@gmail.com', '0987234', '1234', '1721965379.jpg', '2024-07-25 19:07:33', '2024-07-25 19:42:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peps`
--
ALTER TABLE `peps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peps_email_unique` (`email`),
  ADD UNIQUE KEY `peps_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peps`
--
ALTER TABLE `peps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
