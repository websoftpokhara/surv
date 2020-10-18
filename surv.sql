-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2020 at 05:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surv`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_08_153426_create_records_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minicipality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wardno` int(11) NOT NULL,
  `tole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'M',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identycardoption` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `identycardno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cityzenshipoption` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `cityzenshipno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familyno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otherdisableinfamilyoption` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `otherdisableinfamilyno` int(11) DEFAULT NULL,
  `gname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnumber` int(11) NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainingoption` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `whattraining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wheretraining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessoption` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `whatbusiness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effectonbusiness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessstatus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `possiable` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `fullname`, `province`, `district`, `minicipality`, `wardno`, `tole`, `age`, `gender`, `type`, `identycardoption`, `identycardno`, `cityzenshipoption`, `cityzenshipno`, `familyno`, `otherdisableinfamilyoption`, `otherdisableinfamilyno`, `gname`, `relation`, `contactnumber`, `education`, `trainingoption`, `whattraining`, `wheretraining`, `businessoption`, `whatbusiness`, `effectonbusiness`, `businessstatus`, `remark`, `possiable`, `created_at`, `updated_at`) VALUES
(1, 'sdfhsfdj', 'गण्डकी प्रदेश', 'कास्की', 'Pokhara Metropolitan City', 8, 'dsjfnsd', 7, 'M', 'Physical', 'Y', '3', 'Y', '2323432', '2', 'Y', 1, 'dfsdfsdf', 'sdfdf', 234234, 'विद्यालय स्तरीय', 'Y', 'werwer', 'werer', 'Y', 'werwer', 'werer', 'प्रमाणपत्र तह', 'wrwerwer', NULL, '2020-10-08 10:46:52', '2020-10-08 10:46:52'),
(2, 'sdfjknsdf', 'गण्डकी प्रदेश', 'कास्की', 'Pokhara Metropolitan City', 8, 'dfksjdf', 7, 'M', 'Physical', 'Y', 'sdfjnsdjf', 'Y', 'jdfsdjf', '1', 'Y', 2, 'sdkjfsdjk', 'kjsdkdf', 8748342, 'शिक्षा', 'Y', 'sjdfsj', 'kjnsdkf', 'Y', 'kdjfskd', 'jksdnfksdf', 'प्रमाणपत्र तह', 'djfskjdfnjskdf', NULL, '2020-10-08 10:56:13', '2020-10-08 10:56:13'),
(3, 'dsjhfjsdf', 'गण्डकी प्रदेश', 'कास्की', 'Pokhara Metropolitan City', 9, 'skdjfnjskd', 89, 'M', 'Physical', 'N', NULL, 'N', NULL, '1', NULL, NULL, 'sdfsdf', 'sdfsdf', 3848429, 'विद्यालय स्तरीय', 'N', NULL, NULL, 'N', NULL, NULL, 'संचालन भैरहेको', NULL, NULL, '2020-10-08 11:15:35', '2020-10-08 11:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ishwor', 'admin@admin.com', NULL, '$2y$10$CnRjTLhlGxb9dSJEHBZwNOxnscvqSdoc7nKZOxJ6PgtGakcWvChcO', NULL, '2020-10-08 09:47:32', '2020-10-08 09:47:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
