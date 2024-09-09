-- phpMyAdmin SQL Dump
-- version 5.1.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2024 at 10:51 PM
-- Server version: 8.0.33-0ubuntu0.22.10.2
-- PHP Version: 8.1.7-1ubuntu3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `employeeId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `title`, `pdf`, `caption`, `name`, `status`, `employeeId`, `created_at`, `updated_at`) VALUES
(4, 'Ecplan', 'exam questions for JSS1 Second Term.pdf', 'ndndd djkd djkjkd dkllkd', 'Grace favourite', 1, 'UTC91272024', '2024-01-30 00:39:57', '2024-02-06 19:17:11'),
(5, 'Another one joor', NULL, 'i dont know what to type here', 'Famobio ibrahim', 1, 'UTC91272024', '2024-05-17 10:35:58', '2024-05-17 10:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `image`, `created_at`, `updated_at`) VALUES
(1, 'All personnels are to reprt to the parade ground at 1600 for wednesday sports', 'cert.jpg', '2024-01-19 17:19:58', '2024-05-24 11:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 2),
(10, '2024_01_11_181244_create_payrolls_table', 3),
(11, '2024_01_17_185322_create_messages_table', 4),
(12, '2024_01_20_085031_create_newsletters_table', 5),
(13, '2024_01_22_194032_create_notifications_table', 5),
(14, '2024_01_29_102135_create_take_a_leaves_table', 6),
(15, '2024_01_29_234119_create_assignments_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `name`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'okey@gmail.com Amaechi juliet', 'juliet', 'message', '<p>hjhjhjy hhhjjh</p>', '2024-05-15 20:39:34', '2024-05-15 20:39:34'),
(2, 'okey@gmail.com Amaechi juliet', 'juliet', 'message', '<p>hjhjhjy hhhjjh</p>', '2024-05-15 20:40:10', '2024-05-15 20:40:10'),
(3, 'musa@dmail.com', 'Musa', 'message', '<p>jjjhj kkjk jjk</p>', '2024-05-15 20:44:06', '2024-05-15 20:44:06'),
(4, 'All', 'Users', 'church', '<p>ksakld lslkds slkls</p>', '2024-05-15 21:03:24', '2024-05-15 21:03:24'),
(5, 'okey@gmail.com', 'juliet', 'church', '<p>hhjjh kkkj</p>', '2024-05-15 21:11:59', '2024-05-15 21:11:59'),
(6, 'okey@gmail.com', 'juliet', 'message', '<p><strong>This is why You Love God </strong><em>yeah</em></p>', '2024-05-15 21:13:33', '2024-05-15 21:13:33'),
(7, 'All', 'Users', 'message', '<p>come here</p>', '2024-05-21 09:14:37', '2024-05-21 09:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `employeeId`, `message`, `type_of_message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sam', 'hhgjhjf1233', 'fjhkkh hkj jkjkj', 'error', 0, NULL, NULL);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('skywalkernavy@gmail.com', '$2y$12$Tn4MoAdfB0xESHOLXeVdauISBz7wHgaVuTN/FZOJ/y/4ed7UCudta', '2024-05-25 15:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` bigint UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `position`, `salary`, `created_at`, `updated_at`) VALUES
(10, 'Odinary Seaman', '70,000', '2024-05-17 11:08:22', '2024-05-23 18:33:54'),
(11, 'Seaman', '90,000', '2024-05-17 11:08:38', '2024-05-23 18:32:37'),
(13, 'Able Seaman', '100,000', '2024-05-17 11:10:14', '2024-05-23 18:33:39'),
(14, 'Leading Seaman', '120,000', '2024-05-17 11:10:29', '2024-05-23 18:33:28'),
(15, 'Petty Officer', '140,000', '2024-05-17 11:10:46', '2024-05-23 18:33:04'),
(16, 'Warrant Officer', '200,000', '2024-05-22 11:28:23', '2024-05-23 18:33:12'),
(17, 'Master Warrant Officer', '220,000', '2024-05-23 18:34:40', '2024-05-23 18:34:51'),
(18, 'Navy Warrant Officer', '250,000', '2024-05-23 18:35:22', '2024-05-23 18:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `take_a_leaves`
--

CREATE TABLE `take_a_leaves` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `employeeId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `dateofbirth` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `parentname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentnumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `familyaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nokname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noknumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nokaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `place_of_assignment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employeeId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letter` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retired_at` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_poa` int NOT NULL DEFAULT '0',
  `rank_retired_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank_duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phonenumber`, `dateofbirth`, `gender`, `position`, `salary`, `parentname`, `parentnumber`, `familyaddress`, `nokname`, `noknumber`, `nokaddress`, `relationship`, `word`, `image`, `marital_status`, `hobby`, `country`, `state`, `qualification`, `study`, `status`, `place_of_assignment`, `employeeId`, `letter`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`, `time`, `duration`, `retired_at`, `status_poa`, `rank_retired_at`, `rank_time`, `rank_duration`, `start_time`) VALUES
(1, 'Victech', 'admin@gmail.com', '', '07088366968', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, '', '', NULL, '$2y$12$zXrzyu.cZUYg7rFKbYoZr..fCdifn.WQqEP7Zfh.T84a3M3wwJJZi', 1, NULL, '2024-01-07 22:55:21', '2024-05-25 20:14:07', NULL, NULL, '', 0, NULL, NULL, NULL, NULL),
(11, 'Grace favour', 'grace@gmail.com', 'hdhydyuehnnhhjeyyuehjmehhjeyuyudhhdjdhd', '07088366968', '1992-05-05', 'female', 'manager', 50000, 'mr and mr amachi', '09034215678', 'ifo land', 'Mr amachi', '09034215678', 'ifo land', 'uncle', 'Owda3pyuBC', 'pexels-andrea-piacquadio-948873.jpg', 'Single', 'sleeping', 'Argentina', 'lagos', 'HND', 'Physic', 1, NULL, 'UTC439772024', '', NULL, '$2y$12$x9Hzc9/4LJUoRIrnx8t8/OzIAvXMZxNQ0ZcooaPi07wy41TydCes6', 2, NULL, '2024-01-14 06:40:04', '2024-01-17 12:31:51', NULL, NULL, '', 0, NULL, NULL, NULL, NULL),
(15, 'Dave samseon', 'dave@gmail.com', '1010 uyo akaw ibom', '08157401872', '2000-10-10', 'male', 'Warrant Officer', 70, 'mr and mr amachi', '09034215678', '15, Ime Johnson Street, Port Harcourt', 'Mr amachi', '09034215678', '1010 uyo akaw ibom', 'uncle', 'JJkgNekbDh', 'WhatsApp Image 2024-05-22 at 1.43.11 PM.jpeg', 'Single', 'sleeping', 'Andorra', 'Rivers', 'NCE', 'Education', 1, 'Ikot Btuen', 'NNMS468582024', NULL, NULL, '$2y$12$5tpK4xeHMeou5LgKaDdRx.3JRAHOATTevYIW4FCHheKRzSLT.zTlC', 0, NULL, '2024-05-17 08:43:45', '2024-05-23 20:25:47', 'Seconds', '100', '2024-05-23 15:33:44', 1, '2024-05-25 02:01:16', 'Seconds', '102929', '2024-05-23 21:25:47'),
(16, 'Williams james', 'james@gmail.com', 'Umokoro Street', '07088366969', '2018-10-10', 'male', 'Leading Seaman', 100000, 'mr and mr amachi', '09023187345', '15, Ime Johnson Street, Port Harcourt', 'Mr amachi', '09023567893', '1010 uyo akaw ibom', 'Father', 'JRrTmRU26G', 'WhatsApp Image 2024-05-22 at 1.43.17 PM.jpeg', 'Single', 'dancing', 'No Country Choosen', 'Rivers', 'SSCE', 'Physic', 1, 'NNMS', 'NNMS92422024', NULL, NULL, '$2y$12$zeYuNIl7LI3rjn19pSniWOg2If2kXrePePR3bG4wCDLs46Y3cKc.6', 0, NULL, '2024-05-21 08:44:21', '2024-05-24 08:59:58', 'Seconds', '2', '2024-05-23 21:26:49', 1, '2024-06-05 14:21:38', 'Seconds', '1097778', '2024-05-23 21:25:20'),
(17, 'Famobio Ibrahim Babatunde', 'skywalkernavy@gmail.com', 'No 2, GRA third Extension , Ekiti State', '09030502489', '2007-02-19', 'male', 'Leading Seaman', 100000, 'Mr and Mrs Famobio', '0803387046', 'GRA bayelsa State', 'MR Sheriff', '08061661175', 'GRA lagos', 'Brother', 'BQYrUp6ss8', 'WhatsApp Image 2024-05-22 at 1.43.12 PM(1).jpeg', 'Engaged', 'programming', 'No Country Choosen', 'Ekiti', 'SSCE', 'Robotics Engineering', 1, 'nns jubilie', 'NNMS264742024', NULL, NULL, '$2y$12$PrCOL8152z/fWq8.p3AHXOqSuV1huzvxFpTiV.oKCzg3/PeVkYpJ2', 0, NULL, '2024-05-22 11:36:06', '2024-05-25 20:30:56', 'Seconds', '100', '2024-05-25 17:15:07', 1, '2024-05-25 17:08:38', 'Seconds', '20', '2024-05-25 17:08:18'),
(18, 'Usombu Daniel Senater', 'sailordaniel276@gmail.com', 'Ada chenge street', '09077329301', '2008-12-16', 'male', 'Petty Officer', 120, 'Mr Usombu', '09088767899', '1010 uyo akaw ibom', 'Usombu Joe', '08123567657', '15, Ime Johnson Street, Port Harcourt', 'Brother', 'pUkr19lNgk', 'WhatsApp Image 2024-05-22 at 1.43.12 PM.jpeg', 'Engaged', 'inventing', 'Nigeria', 'Benue', 'PHD', 'Physic', 1, 'Ikot Btuen', 'NNMS877872024', NULL, NULL, '$2y$12$v2GGWuK07rTac5BmULpSuO5cEExgRiHh.oy5wY7z5BHGzt1PZzHkm', 0, NULL, '2024-05-22 11:55:25', '2024-05-25 15:59:23', 'Seconds', '40', '2024-05-25 16:34:24', 1, '2024-05-23 23:03:52', 'Minutes', '100', '2024-05-23 21:23:52'),
(19, 'AKPANG S', 'ayimryanishong@gmail.com', '9 Akai Street', '08053321970', '2008-12-10', 'male', 'Able Seaman', 100000, 'Mr and Mrs Ayim', '08037295719', '18 Atakpa street', 'Daniel Ayim', '08157291086', '102 Ikang street', 'Nephew', '3oZ5suc9SD', 'WhatsApp Image 2024-05-22 at 1.43.10 PM.jpeg', 'Single', 'inventing', 'Nigeria', 'Cross River State', 'PHD', 'Mechatronics', 1, 'Warri Station', 'NNMS235052024', NULL, NULL, '$2y$12$X0kPxGfxJpHpx9NWdvYn/OAiJSmw6TR1AhfCLPaF918Lk8ZrABOhO', 0, NULL, '2024-05-22 12:10:43', '2024-05-25 20:30:51', 'Seconds', '30', '2024-05-25 17:00:34', 1, '2024-05-25 16:57:57', 'Seconds', '30', '2024-05-25 16:57:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `take_a_leaves`
--
ALTER TABLE `take_a_leaves`
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
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payrolls`
--
ALTER TABLE `payrolls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `take_a_leaves`
--
ALTER TABLE `take_a_leaves`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
