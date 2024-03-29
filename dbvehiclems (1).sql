-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 03:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbvehiclems`
--

-- --------------------------------------------------------

--
-- Table structure for table `allvehicles`
--

CREATE TABLE `allvehicles` (
  `id` int(11) NOT NULL,
  `regnum` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `manudate` int(255) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  `used` int(255) DEFAULT NULL,
  `capacity` int(255) DEFAULT NULL,
  `value` int(255) DEFAULT NULL,
  `mileage` int(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `own_ministry` varchar(255) DEFAULT NULL,
  `assigned` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `assigned_person` varchar(255) DEFAULT NULL,
  `assigned_position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allvehicles`
--

INSERT INTO `allvehicles` (`id`, `regnum`, `brand`, `type`, `manudate`, `regdate`, `used`, `capacity`, `value`, `mileage`, `category`, `own_ministry`, `assigned`, `status`, `assigned_person`, `assigned_position`, `created_at`, `updated_at`) VALUES
(3, 'KQ-7809', 'Nissan', 'Teena', 2011, '2011-10-28', 12, 2496, NULL, NULL, 'Petrol', 'Other', 'Assigned', 'Good', 'Hon.Minister', 'Minister', '2023-12-03 22:14:39', '2023-12-20 03:49:48'),
(5, 'CAT-8228', 'Audi', 'A8 3.0L', 2016, '2016-07-21', 7, 2995, 34900000, NULL, 'Petrol', 'Ministry', 'Assigned', 'Good', 'Hon.Minister', 'Minister', '2023-12-03 22:30:39', '2023-12-04 01:13:51'),
(19, 'CAB-9183', 'Toyota', 'Land Cruiser', 2014, '2014-11-26', 9, 2986, NULL, 292978, 'Diesel', 'Ministry', 'Assigned', 'Good', 'Hon. State Minister', 'State Minister', '2023-12-05 22:09:11', '2023-12-05 22:09:11'),
(20, 'KU-7910', 'Toyota', 'Land Cruiser', 2012, '2012-11-19', 11, 4461, NULL, 358741, 'Diesel', 'Ministry', 'Assigned', 'Good', 'Hon. State Minister', 'State Minister', '2023-12-05 22:50:46', '2023-12-05 22:50:46'),
(21, 'PH-0993', 'Mitsubishi', 'KB4TGJNXZR', 2014, '2015-12-29', 8, 2500, 6390000, 218148, 'Diesel', 'Ministry', 'Assigned', 'Good', 'Hon. State Minister', 'State Minister', '2023-12-05 22:53:44', '2023-12-05 22:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regnum` varchar(255) DEFAULT NULL,
  `own_ministry` varchar(255) DEFAULT NULL,
  `own_other` varchar(255) DEFAULT NULL,
  `assigned` varchar(255) DEFAULT NULL,
  `unassigned` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `assigned_person` varchar(255) DEFAULT NULL,
  `assigned_position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `regnum`, `own_ministry`, `own_other`, `assigned`, `unassigned`, `status`, `assigned_person`, `assigned_position`, `created_at`, `updated_at`) VALUES
(1, 'KQ-7809', 'No', 'Yes', 'Yes', 'No', 'Good', 'Hon.Minister', 'Minister', '2023-11-30 07:33:22', '2023-11-30 07:33:45'),
(2, 'CAT-8228', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Hon.Minister', 'Minister', '2023-11-30 09:53:23', '2023-11-30 09:53:23'),
(3, 'CAB-9183', 'Yes', 'No', 'Yes', 'No', 'Good', 'Hon. State Minister', 'State Minister', '2023-12-01 04:20:35', '2023-12-03 04:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `availables`
--

CREATE TABLE `availables` (
  `id` bigint(255) NOT NULL,
  `regnum` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` int(15) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `sal_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `mobile`, `nic`, `sal_no`, `created_at`, `updated_at`) VALUES
(5, 'L.A Wijesiri Ranjith', 779121255, '780920599V', '400010', '2023-12-28 00:57:26', '2023-12-28 00:57:26'),
(6, 'M.K Prabath Dhanushka Kumara', 716031911, '823053797V', '400032', '2023-12-28 00:59:31', '2023-12-28 00:59:31'),
(7, 'P.W Thilina Lasantha', 710841366, '862800745V', '400035', '2023-12-28 01:03:41', '2023-12-28 01:03:41'),
(8, 'L.K Haththakage', 715555547, '197430602973', '400044/42', '2023-12-28 01:09:51', '2023-12-28 01:09:51'),
(9, 'B.G.S.A Shrimal', 718208585, '198610402480', '400046', '2023-12-28 01:12:55', '2023-12-28 01:12:55'),
(10, 'K.K.G Gayan Indika', 719601861, '873094346V', '400047', '2023-12-28 01:14:45', '2023-12-28 01:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_11_15_060033_create_students_table', 1),
(24, '2023_11_23_101039_create_vehicles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allvehicles`
--
ALTER TABLE `allvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availables`
--
ALTER TABLE `availables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allvehicles`
--
ALTER TABLE `allvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `availables`
--
ALTER TABLE `availables`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
