-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 12:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `castecertificate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_mst`
--

CREATE TABLE `address_mst` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `permarent_add` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`permarent_add`)),
  `present_add` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`present_add`)),
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_mst`
--

CREATE TABLE `block_mst` (
  `id` int(11) NOT NULL,
  `sub_div_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_mst`
--

INSERT INTO `block_mst` (`id`, `sub_div_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 24, 'AMTA-I', '2021-02-22 09:32:45', '2021-02-22 09:32:45'),
(2, 24, 'BAGNAN-I', '2021-02-22 09:32:45', '2021-02-22 09:32:45'),
(3, 24, 'SHYAMPUR-I', '2021-02-22 09:33:29', '2021-02-22 09:33:29'),
(4, 24, 'ULUBERIA-I', '2021-02-22 09:33:29', '2021-02-22 09:33:29'),
(5, 23, 'BALLY JAGACHA', '2021-02-22 09:34:27', '2021-02-22 09:34:27'),
(6, 23, 'DOMJUR', '2021-02-22 09:34:27', '2021-02-22 09:34:27'),
(7, 23, 'JAGATBALLAVPUR', '2021-02-22 09:35:08', '2021-02-22 09:35:08'),
(8, 23, 'PANCHLA', '2021-02-22 09:35:08', '2021-02-22 09:35:08'),
(9, 23, 'SANKRAIL', '2021-02-22 09:35:30', '2021-02-22 09:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `caste_or_tribe_mst`
--

CREATE TABLE `caste_or_tribe_mst` (
  `id` int(11) NOT NULL,
  `m_caste_name` enum('SC','ST','OBC') NOT NULL,
  `s_caste_name` enum('OBC','OBC-A','OBC-B') DEFAULT NULL,
  `c_name` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caste_or_tribe_mst`
--

INSERT INTO `caste_or_tribe_mst` (`id`, `m_caste_name`, `s_caste_name`, `c_name`, `created_at`, `updated_at`) VALUES
(1, 'SC', NULL, 'BAGDI', '2021-02-28 15:22:13', '2021-02-28 15:22:13'),
(2, 'SC', NULL, 'BAHELIA', '2021-02-28 15:23:02', '2021-02-28 15:23:02'),
(3, 'SC', NULL, 'BALMIKI', '2021-02-28 15:32:32', '2021-02-28 15:32:32'),
(4, 'SC', NULL, 'BANTAR', '2021-02-28 15:32:32', '2021-02-28 15:32:32'),
(5, 'ST', NULL, 'ASUR', '2021-02-28 15:33:25', '2021-02-28 15:33:25'),
(6, 'ST', NULL, 'BAIGA', '2021-02-28 15:33:25', '2021-02-28 15:33:25'),
(7, 'ST', NULL, 'BEDIA ', '2021-02-28 15:34:04', '2021-02-28 15:34:04'),
(8, 'ST', NULL, 'BEDIYA', '2021-02-28 15:34:04', '2021-02-28 15:34:04'),
(9, 'ST', NULL, 'BHUMIJ', '2021-02-28 15:34:51', '2021-02-28 15:34:51'),
(10, 'ST', NULL, 'BHUTIA', '2021-02-28 15:34:51', '2021-02-28 15:34:51'),
(11, 'ST', NULL, 'BIRHOR', '2021-02-28 15:36:27', '2021-02-28 15:36:27'),
(12, 'ST', NULL, 'BIRJIA', '2021-02-28 15:36:27', '2021-02-28 15:36:27'),
(13, 'ST', NULL, 'CHAKMA', '2021-02-28 15:36:27', '2021-02-28 15:36:27'),
(14, 'OBC', 'OBC', 'RANGWA', '2021-02-28 15:38:38', '2021-02-28 15:38:38'),
(15, 'OBC', 'OBC-A', 'ABDAL (MUSLIM)', '2021-02-04 15:38:58', '2021-02-10 15:39:03'),
(16, 'OBC', 'OBC-A', 'ATTA (MUSLIM)', '2021-02-28 15:38:38', '2021-02-28 15:38:38'),
(17, 'OBC', 'OBC-B', 'ADALDAR(MUSLIM)', '2021-02-28 15:40:02', '2021-02-28 15:40:02'),
(18, 'OBC', 'OBC-B', 'AKUNJI/AKAN/AKHAN(MUSLIM)', '2021-02-28 15:40:02', '2021-02-28 15:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `dist_mst`
--

CREATE TABLE `dist_mst` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `state` varchar(20) NOT NULL DEFAULT 'WEST BENGAL',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dist_mst`
--

INSERT INTO `dist_mst` (`id`, `state_id`, `name`, `state`, `created_at`, `updated_at`) VALUES
(1, 8, 'ALIPURDUAR', 'WEST BENGAL', '2021-02-22 08:57:18', '2021-02-22 08:57:18'),
(2, 8, 'BANKURA', 'WEST BENGAL', '2021-02-22 08:57:18', '2021-02-22 08:57:18'),
(3, 8, 'BIRBHUM', 'WEST BENGAL', '2021-02-22 08:58:06', '2021-02-22 08:58:06'),
(4, 8, 'COOCH BEHAR', 'WEST BENGAL', '2021-02-22 08:58:06', '2021-02-22 08:58:06'),
(5, 8, 'DAKSHIN DINAJPUR', 'WEST BENGAL', '2021-02-22 08:59:12', '2021-02-22 08:59:12'),
(6, 8, 'DARJEELING', 'WEST BENGAL', '2021-02-22 08:59:12', '2021-02-22 08:59:12'),
(7, 8, 'HOOGHLY', 'WEST BENGAL', '2021-02-22 08:59:48', '2021-02-22 08:59:48'),
(8, 8, 'HOWRAH', 'WEST BENGAL', '2021-02-22 08:59:48', '2021-02-22 08:59:48'),
(9, 8, 'JALPAIGURI', 'WEST BENGAL', '2021-02-22 09:00:26', '2021-02-22 09:00:26'),
(10, 8, 'JHARGRAM', 'WEST BENGAL', '2021-02-22 09:00:26', '2021-02-22 09:00:26'),
(11, 8, 'KALIMPONG', 'WEST BENGAL', '2021-02-22 09:00:59', '2021-02-22 09:00:59'),
(12, 8, 'KOLKATA', 'WEST BENGAL', '2021-02-22 09:00:59', '2021-02-22 09:00:59'),
(13, 8, 'MALDAH', 'WEST BENGAL', '2021-02-22 09:01:32', '2021-02-22 09:01:32'),
(14, 8, 'MURSHIDABAD', 'WEST BENGAL', '2021-02-22 09:01:32', '2021-02-22 09:01:32'),
(15, 8, 'NADIA', 'WEST BENGAL', '2021-02-22 09:02:08', '2021-02-22 09:02:08'),
(16, 8, 'NORTH 24 PARGANAS', 'WEST BENGAL', '2021-02-22 09:02:08', '2021-02-22 09:02:08'),
(17, 8, 'PASCHIM BARDHAMAN', 'WEST BENGAL', '2021-02-22 09:02:39', '2021-02-22 09:02:39'),
(18, 8, 'PASCHIM MEDINIPUR', 'WEST BENGAL', '2021-02-22 09:02:39', '2021-02-22 09:02:39'),
(19, 8, 'PURBA BARDHAMAN', 'WEST BENGAL', '2021-02-22 09:03:12', '2021-02-22 09:03:12'),
(20, 8, 'PURBA MEDINIPUR', 'WEST BENGAL', '2021-02-22 09:03:12', '2021-02-22 09:03:12'),
(21, 8, 'PURULIA', 'WEST BENGAL', '2021-02-22 09:03:44', '2021-02-22 09:03:44'),
(22, 8, 'SOUTH 24 PARGANAS', 'WEST BENGAL', '2021-02-22 09:03:44', '2021-02-22 09:03:44'),
(23, 8, 'UTTAR DINAJPUR', 'WEST BENGAL', '2021-02-22 09:04:00', '2021-02-22 09:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `municipality_mst`
--

CREATE TABLE `municipality_mst` (
  `id` int(11) NOT NULL,
  `sub_div_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `municipality_mst`
--

INSERT INTO `municipality_mst` (`id`, `sub_div_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 24, 'ULUBERIA', '2021-02-22 09:31:39', '2021-02-22 09:31:39'),
(2, 23, 'HOWRAH MC', '2021-02-22 09:36:07', '2021-02-22 09:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `p_station_mst`
--

CREATE TABLE `p_station_mst` (
  `id` int(11) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_station_mst`
--

INSERT INTO `p_station_mst` (`id`, `dist_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 12, 'ALIPUR', '2021-02-28 14:09:26', '2021-02-28 14:09:26'),
(2, 12, 'AMHERS STREET', '2021-02-28 14:09:26', '2021-02-28 14:09:26'),
(3, 12, 'ANANDAPUR', '2021-02-28 14:10:22', '2021-02-28 14:10:22'),
(4, 12, 'BALLYGUNGE', '2021-02-28 14:10:22', '2021-02-28 14:10:22'),
(5, 1, 'ALIPURDUAR', '2021-03-01 17:01:40', '2021-03-01 17:01:40'),
(6, 1, 'BIRPARA', '2021-03-01 17:01:40', '2021-03-01 17:01:40'),
(7, 1, 'FALAKATA', '2021-03-01 17:02:26', '2021-03-01 17:02:26'),
(8, 1, 'JAYGAON', '2021-03-01 17:02:26', '2021-03-01 17:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `state_mst`
--

CREATE TABLE `state_mst` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_mst`
--

INSERT INTO `state_mst` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ANDAMAN AND NICOBAR  ISLAND', '2021-03-01 15:52:48', '2021-03-01 15:52:48'),
(2, 'ANDHRA PRADESH', '2021-03-01 15:52:48', '2021-03-01 15:52:48'),
(3, 'ARUNACHAL PRADESH', '2021-03-01 15:53:20', '2021-03-01 15:53:20'),
(4, 'ASSAM', '2021-03-01 15:53:20', '2021-03-01 15:53:20'),
(5, 'BIHAR', '2021-03-01 15:53:55', '2021-03-01 15:53:55'),
(6, 'CHANDIGARH', '2021-03-01 15:53:55', '2021-03-01 15:53:55'),
(7, 'CHHATISGARH', '2021-03-01 15:54:37', '2021-03-01 15:54:37'),
(8, 'WEST BENGAL', '2021-03-01 15:54:37', '2021-03-01 15:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `sub_div_mst`
--

CREATE TABLE `sub_div_mst` (
  `id` int(11) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_div_mst`
--

INSERT INTO `sub_div_mst` (`id`, `dist_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ALIPURDUAR', '2021-02-22 09:05:52', '2021-02-22 09:05:52'),
(2, 2, 'BANKURA', '2021-02-22 09:07:08', '2021-02-22 09:07:08'),
(3, 2, 'BISHNUPUR', '2021-02-22 09:07:08', '2021-02-22 09:07:08'),
(4, 2, 'KHATRA', '2021-02-22 09:07:30', '2021-02-22 09:07:30'),
(5, 3, 'BIRBHUM(SADAR)', '2021-02-22 09:08:29', '2021-02-22 09:08:29'),
(6, 3, 'BOLPUR', '2021-02-22 09:08:29', '2021-02-22 09:08:29'),
(7, 3, 'RAMPURHAT', '2021-02-22 09:08:49', '2021-02-22 09:08:49'),
(8, 4, 'COOCHBIHAR(SADAR)', '2021-02-22 09:10:08', '2021-02-22 09:10:08'),
(9, 4, 'DINHATA', '2021-02-22 09:10:08', '2021-02-22 09:10:08'),
(10, 4, 'MATHABHANGA', '2021-02-22 09:10:42', '2021-02-22 09:10:42'),
(11, 4, 'MEKLIGANJ', '2021-02-22 09:10:42', '2021-02-22 09:10:42'),
(12, 4, 'TUFANGANJ', '2021-02-22 09:11:00', '2021-02-22 09:11:00'),
(13, 5, 'BALURGHAT(SADAR)', '2021-02-22 09:12:03', '2021-02-22 09:12:03'),
(14, 5, 'GANGARAMPUR', '2021-02-22 09:12:03', '2021-02-22 09:12:03'),
(15, 6, 'DARJEELING(SADAR)', '2021-02-22 09:12:53', '2021-02-22 09:12:53'),
(16, 6, 'KURSEONG', '2021-02-22 09:12:53', '2021-02-22 09:12:53'),
(17, 6, 'MIRIK', '2021-02-22 09:13:39', '2021-02-22 09:13:39'),
(18, 6, 'SILIGURI', '2021-02-22 09:13:39', '2021-02-22 09:13:39'),
(19, 7, 'ARAMBAG', '2021-02-22 09:14:34', '2021-02-22 09:14:34'),
(20, 7, 'CHANDANNAGAR', '2021-02-22 09:14:34', '2021-02-22 09:14:34'),
(21, 7, 'HOOGHLY(SADAR)', '2021-02-22 09:15:17', '2021-02-22 09:15:17'),
(22, 7, 'SERAMPORE', '2021-02-22 09:15:17', '2021-02-22 09:15:17'),
(23, 8, 'HOWRAH(SADAR)', '2021-02-22 09:16:05', '2021-02-22 09:16:05'),
(24, 8, 'ULUBERIA', '2021-02-22 09:16:05', '2021-02-22 09:16:05'),
(25, 9, 'JALPAIGURI(SADAR)', '2021-02-22 09:16:57', '2021-02-22 09:16:57'),
(26, 9, 'MAL', '2021-02-22 09:16:57', '2021-02-22 09:16:57'),
(27, 10, 'JHARGRAM SADAR', '2021-02-22 09:18:01', '2021-02-22 09:18:01'),
(28, 11, 'KALIMPONG', '2021-02-22 09:18:33', '2021-02-22 09:18:33'),
(29, 12, 'KOLKATA', '2021-02-22 09:19:08', '2021-02-22 09:19:08'),
(30, 13, 'CHANCHAL', '2021-02-22 09:20:04', '2021-02-22 09:20:04'),
(31, 13, 'MALDAH(SADAR)', '2021-02-22 09:20:04', '2021-02-22 09:20:04'),
(32, 14, 'DOMKAL', '2021-02-22 09:20:58', '2021-02-22 09:20:58'),
(33, 14, 'JANGIPUR', '2021-02-22 09:20:58', '2021-02-22 09:20:58'),
(34, 14, 'KANDI', '2021-02-22 09:21:42', '2021-02-22 09:21:42'),
(35, 14, 'LALBAGH', '2021-02-22 09:21:42', '2021-02-22 09:21:42'),
(36, 14, 'MURSHIDABAD(SADAR)', '2021-02-22 09:22:02', '2021-02-22 09:22:02'),
(37, 15, 'KALYANI', '2021-02-22 09:23:08', '2021-02-22 09:23:08'),
(38, 15, 'NADIA(SADAR)', '2021-02-22 09:23:08', '2021-02-22 09:23:08'),
(39, 15, 'RANAGHAT', '2021-02-22 09:23:50', '2021-02-22 09:23:50'),
(40, 15, 'TEHATTA', '2021-02-22 09:23:50', '2021-02-22 09:23:50'),
(41, 16, 'BARASAT', '2021-02-22 09:24:42', '2021-02-22 09:24:42'),
(42, 16, 'BARRACKPUR', '2021-02-22 09:24:42', '2021-02-22 09:24:42'),
(43, 16, 'BASIRHAT', '2021-02-22 09:25:33', '2021-02-22 09:25:33'),
(44, 16, 'BIDHANNAGAR', '2021-02-22 09:25:33', '2021-02-22 09:25:33'),
(45, 16, 'BONGAON', '2021-02-22 09:25:51', '2021-02-22 09:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_mst`
--

CREATE TABLE `user_mst` (
  `id` int(11) NOT NULL,
  `application_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `birth_add` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`birth_add`)),
  `gender` tinytext NOT NULL,
  `religion` text NOT NULL,
  `nationality` text NOT NULL,
  `name_of_referee_1` text NOT NULL,
  `name_of_referee_2` text NOT NULL,
  `add_of_referee_1` longtext NOT NULL,
  `add_of_referee_2` longtext NOT NULL,
  `applied_category` tinytext NOT NULL,
  `sub_category` tinytext DEFAULT NULL,
  `caste` tinytext NOT NULL,
  `applied_district` text NOT NULL,
  `applied_sub_division` text NOT NULL,
  `applied_municipality_block` text NOT NULL,
  `epic_no` varchar(15) DEFAULT NULL,
  `aadhaar_no` varchar(14) NOT NULL,
  `k_sathi_no` varchar(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_mst`
--
ALTER TABLE `address_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_mst`
--
ALTER TABLE `block_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caste_or_tribe_mst`
--
ALTER TABLE `caste_or_tribe_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dist_mst`
--
ALTER TABLE `dist_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipality_mst`
--
ALTER TABLE `municipality_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_station_mst`
--
ALTER TABLE `p_station_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_mst`
--
ALTER TABLE `state_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_div_mst`
--
ALTER TABLE `sub_div_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_mst`
--
ALTER TABLE `user_mst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_mst`
--
ALTER TABLE `address_mst`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_mst`
--
ALTER TABLE `block_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `caste_or_tribe_mst`
--
ALTER TABLE `caste_or_tribe_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dist_mst`
--
ALTER TABLE `dist_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `municipality_mst`
--
ALTER TABLE `municipality_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_station_mst`
--
ALTER TABLE `p_station_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state_mst`
--
ALTER TABLE `state_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_div_mst`
--
ALTER TABLE `sub_div_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_mst`
--
ALTER TABLE `user_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
