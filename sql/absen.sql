-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 05:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logabsen`
--

CREATE TABLE `logabsen` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `absen_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen_tgl` date NOT NULL,
  `absen_waktu` time NOT NULL,
  `absen_kode` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logabsen`
--

INSERT INTO `logabsen` (`log_id`, `absen_nama`, `absen_id`, `absen_tgl`, `absen_waktu`, `absen_kode`, `created_at`, `updated_at`) VALUES
(1, 'Didik', '12458', '2020-01-21', '01:33:46', 0, '2020-01-21 08:43:35', '2020-01-21 08:43:35'),
(2, 'Didik', '12458', '2020-01-21', '07:12:18', 0, '2020-01-21 08:43:35', '2020-01-21 08:43:35'),
(3, 'Didik', '12458', '2020-01-21', '16:40:20', 1, '2020-01-21 08:43:35', '2020-01-21 08:43:35'),
(4, 'Fatikhin', '54217', '2020-01-21', '07:25:42', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(5, 'Fatikhin', '54217', '2020-01-21', '07:25:45', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(6, 'Fatikhin', '54217', '2020-01-21', '07:25:48', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(7, 'Endah', '15068', '2020-01-21', '07:26:45', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(8, 'Endah', '15068', '2020-01-21', '16:15:21', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(9, 'Meta', '55838', '2020-01-21', '07:29:48', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(10, 'Meta', '55838', '2020-01-21', '16:26:52', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(11, 'Sri', '9321', '2020-01-21', '07:06:09', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(12, 'Wirjan', '12203', '2020-01-21', '07:23:20', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(13, 'Wirjan', '12203', '2020-01-21', '16:06:21', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(14, 'Aris', '16404', '2020-01-21', '07:29:00', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(15, 'Aris', '16404', '2020-01-21', '07:29:02', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(16, 'Aris', '16404', '2020-01-21', '16:17:20', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(17, 'Addah', '18186', '2020-01-21', '07:30:29', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(18, 'Sinchan', '19680', '2020-01-21', '07:29:08', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(19, 'Linna', '55178', '2020-01-21', '07:28:27', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(20, 'Linna', '55178', '2020-01-21', '07:28:28', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(21, 'Linna', '55178', '2020-01-21', '16:08:30', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(22, 'Linna', '55178', '2020-01-21', '16:08:34', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(23, 'Mus', '19476', '2020-01-21', '07:33:00', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(24, 'Mus', '19476', '2020-01-21', '16:06:39', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(25, 'Rosidi', '19393', '2020-01-21', '07:22:28', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(26, 'Rosidi', '19393', '2020-01-21', '16:17:10', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(27, 'Gun', '55170', '2020-01-21', '07:26:58', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(28, 'Gun', '55170', '2020-01-21', '07:26:59', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(29, 'Wini', '16544', '2020-01-21', '07:31:01', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(30, 'Yanti', '9601', '2020-01-21', '07:24:21', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(31, 'Yanti', '9601', '2020-01-21', '07:24:23', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(32, 'Yanti', '9601', '2020-01-21', '16:17:02', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(33, 'Yanti', '9601', '2020-01-21', '16:17:03', 1, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(34, 'Jimen', '20473', '2020-01-21', '07:29:29', 0, '2020-01-21 08:43:36', '2020-01-21 08:43:36'),
(35, 'Jimen', '20473', '2020-01-21', '07:29:32', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(36, 'Jimen', '20473', '2020-01-21', '16:29:07', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(37, 'Ayu', '57313', '2020-01-21', '07:26:30', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(38, 'Ayu', '57313', '2020-01-21', '16:18:37', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(39, 'Dewi', '17402', '2020-01-21', '07:12:36', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(40, 'Tri', '13829', '2020-01-21', '07:32:10', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(41, 'Tri', '13829', '2020-01-21', '16:27:17', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(42, 'Suhartini', '11047', '2020-01-21', '07:27:39', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(43, 'Suhartini', '11047', '2020-01-21', '16:25:59', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(44, 'Isna', '53294', '2020-01-21', '07:25:37', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(45, 'Isna', '53294', '2020-01-21', '16:26:44', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(46, 'Faisal', '56982', '2020-01-21', '07:20:08', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(47, 'Faisal', '56982', '2020-01-21', '16:13:08', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(48, 'Saan', '14275', '2020-01-21', '06:56:24', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(49, 'Saan', '14275', '2020-01-21', '16:01:51', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(50, 'Atul', '12865', '2020-01-21', '07:24:37', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(51, 'Atul', '12865', '2020-01-21', '07:24:39', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(52, 'Rita', '17228', '2020-01-21', '07:28:06', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(53, 'Nur', '12575', '2020-01-21', '07:28:47', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(54, 'Sulastri', '11320', '2020-01-21', '07:27:32', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(55, 'Sulastri', '11320', '2020-01-21', '16:16:07', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(56, 'Sulastri', '11320', '2020-01-21', '16:23:07', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(57, 'Fikri', '525200005', '2020-01-21', '06:47:44', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(58, 'Islam', '11317', '2020-01-21', '08:37:17', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(59, 'Islam', '11317', '2020-01-21', '16:29:19', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(60, 'Ria', '18188', '2020-01-21', '07:21:53', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(61, 'Ria', '18188', '2020-01-21', '16:12:23', 1, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(62, 'Arir', '525200012', '2020-01-21', '06:12:58', 0, '2020-01-21 08:43:37', '2020-01-21 08:43:37'),
(63, 'Ratna', '54218', '2020-01-21', '07:27:18', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(64, 'Ratna', '54218', '2020-01-21', '07:27:21', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(65, 'Ratna', '54218', '2020-01-21', '16:13:23', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(66, 'Sukri', '16866', '2020-01-21', '06:54:07', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(67, 'Sukri', '16866', '2020-01-21', '06:54:11', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(68, 'Sukri', '16866', '2020-01-21', '16:15:27', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(69, 'Sukri', '16866', '2020-01-21', '16:15:33', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(70, 'Mika', '17401', '2020-01-21', '07:12:42', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(71, 'Mika', '17401', '2020-01-21', '07:12:44', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(72, 'Bedah', '9275', '2020-01-21', '07:07:24', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(73, 'Yudhis', '16053', '2020-01-21', '07:19:34', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(74, 'Cass', '54408', '2020-01-21', '07:27:02', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(75, 'Ibun', '525200001', '2020-01-21', '06:43:41', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(76, 'Juned', '525200002', '2020-01-21', '06:51:27', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(77, 'Mar', '525200003', '2020-01-21', '06:41:38', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(78, 'Mar', '525200003', '2020-01-21', '16:24:15', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(79, 'Muli', '525200004', '2020-01-21', '06:12:49', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(80, 'Muli', '525200004', '2020-01-21', '16:18:58', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(81, 'Yeni', '18187', '2020-01-21', '07:28:23', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(82, 'Yeni', '18187', '2020-01-21', '16:09:31', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(83, 'Tina', '17065', '2020-01-21', '07:29:13', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(84, 'Tina', '17065', '2020-01-21', '16:19:43', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(85, 'Indra', '50125', '2020-01-21', '07:40:58', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(86, 'Darte', '52171', '2020-01-21', '07:30:08', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(87, 'Darte', '52171', '2020-01-21', '16:09:37', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(88, 'Isfi', '525200006', '2020-01-21', '06:14:52', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(89, 'Isfi', '525200006', '2020-01-21', '06:14:54', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(90, 'Isfi', '525200006', '2020-01-21', '16:28:50', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(91, 'Isfi', '525200006', '2020-01-21', '16:28:52', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(92, 'Yasa', '525200007', '2020-01-21', '06:50:28', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(93, 'Birin', '525200008', '2020-01-21', '06:41:52', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(94, 'Birin', '525200008', '2020-01-21', '06:41:54', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(95, 'Salam', '525200009', '2020-01-21', '07:15:11', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(96, 'Salam', '525200009', '2020-01-21', '16:16:49', 1, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(97, 'Medhia', '56359', '2020-01-21', '07:40:54', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(98, 'Arintia', '53721', '2020-01-21', '07:35:02', 0, '2020-01-21 08:43:38', '2020-01-21 08:43:38'),
(99, 'Arintia', '53721', '2020-01-21', '16:07:40', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(100, 'Andi', '14027', '2020-01-21', '07:22:35', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(101, 'Andi', '14027', '2020-01-21', '16:41:52', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(102, 'Amy', '19265', '2020-01-21', '07:15:34', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(103, 'Kartini', '14405', '2020-01-21', '07:06:40', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(104, 'Nurmy', '57173', '2020-01-21', '07:27:23', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(105, 'Nurmy', '57173', '2020-01-21', '16:30:38', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(106, 'Ike', '16061', '2020-01-21', '07:17:43', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(107, 'Ike', '16061', '2020-01-21', '16:19:21', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(108, 'Zainuri', '50165', '2020-01-21', '07:28:55', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(109, 'Zainuri', '50165', '2020-01-21', '07:28:57', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(110, 'Yati', '50272', '2020-01-21', '07:29:06', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(111, 'Anisa', '57724', '2020-01-21', '07:29:16', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(112, 'Anisa', '57724', '2020-01-21', '16:24:41', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(113, 'Anisa', '57724', '2020-01-21', '16:24:47', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(114, 'Wahyudi', '57235', '2020-01-21', '07:14:00', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(115, 'Dony', '56543', '2020-01-21', '08:02:25', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(116, 'Dony', '56543', '2020-01-21', '16:25:13', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(117, 'Ati', '16217', '2020-01-21', '07:23:46', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(118, 'Ati', '16217', '2020-01-21', '07:23:48', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(119, 'Ati', '16217', '2020-01-21', '16:03:45', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(120, 'Ati', '16217', '2020-01-21', '16:03:46', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(121, 'Nuning', '50185', '2020-01-21', '07:27:07', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(122, 'Nuning', '50185', '2020-01-21', '16:15:54', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(123, 'Rika', '20172', '2020-01-21', '07:15:02', 0, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(124, 'Sinchan', '19680', '2020-01-21', '16:58:52', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(125, 'Dewi', '17402', '2020-01-21', '17:02:49', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(126, 'Atul', '12865', '2020-01-21', '17:02:25', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(127, 'Atul', '12865', '2020-01-21', '17:02:27', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(128, 'Nur', '12575', '2020-01-21', '16:54:51', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(129, 'Nur', '12575', '2020-01-21', '16:54:57', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(130, 'Cass', '54408', '2020-01-21', '17:01:33', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(131, 'Amy', '19265', '2020-01-21', '16:43:54', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(132, 'Rika', '20172', '2020-01-21', '16:55:16', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_10_020650_data_pegawai_community', 1),
(5, '2020_01_18_050103_create_log_absens_table', 1),
(6, '2020_01_18_061214_kode_absen', 1),
(7, '2020_01_21_073933_pangkat_golongan', 1),
(8, '2020_01_21_101342_tarik_log', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tariklog`
--

CREATE TABLE `tariklog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tariklog`
--

INSERT INTO `tariklog` (`id`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Data log sebanyak 123 sudah diproses', 1, '2020-01-21 08:43:39', '2020-01-21 08:43:39'),
(2, 'Data log sebanyak 123 sudah diproses', 1, '2020-01-21 08:43:42', '2020-01-21 08:43:42'),
(3, 'Data log sebanyak 132 sudah diproses', 1, '2020-01-21 09:03:53', '2020-01-21 09:03:53'),
(4, 'Data log sebanyak 132 sudah diproses', 1, '2020-01-21 09:03:59', '2020-01-21 09:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `t_gol`
--

CREATE TABLE `t_gol` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_gol`
--

INSERT INTO `t_gol` (`id`, `kode`, `gol`, `pangkat`) VALUES
(1, '11', 'I/a', 'JURU MUDA'),
(2, '12', 'I/b', 'JURU MUDA TINGKAT I'),
(3, '13', 'I/c', 'JURU'),
(4, '14', 'I/d', 'JURU TINGKAT I'),
(5, '21', 'II/a', 'PENGATUR MUDA'),
(6, '22', 'II/b', 'PENGATUR MUDA TINGKAT I'),
(7, '23', 'II/c', 'PENGATUR'),
(8, '24', 'II/d', 'PENGATUR TINGKAT I'),
(9, '31', 'III/a', 'PENATA MUDA'),
(10, '32', 'III/b', 'PENATA MUDA TINGKAT I'),
(11, '33', 'III/c', 'PENATA'),
(12, '34', 'III/d', 'PENATA TINGKAT I'),
(13, '41', 'IV/a', 'PEMBINA'),
(14, '42', 'IV/b', 'PEMBINA TINGKAT I'),
(15, '43', 'IV/c', 'PEMBINA UTAMA MUDA'),
(16, '44', 'IV/d', 'PEMBINA UTAMA MADYA'),
(17, '45', 'IV/e', 'PEMBINA UTAMA');

-- --------------------------------------------------------

--
-- Table structure for table `t_kodeabsen`
--

CREATE TABLE `t_kodeabsen` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_id` tinyint(3) UNSIGNED NOT NULL,
  `kode_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_kodeabsen`
--

INSERT INTO `t_kodeabsen` (`id`, `kode_id`, `kode_nama`, `created_at`, `updated_at`) VALUES
(1, 0, 'Masuk', '2020-01-21 08:41:28', '2020-01-21 08:41:28'),
(2, 1, 'Pulang', '2020-01-21 08:41:28', '2020-01-21 08:41:28'),
(3, 2, 'Keluar', '2020-01-21 08:41:28', '2020-01-21 08:41:28'),
(4, 3, 'Kembali', '2020-01-21 08:41:28', '2020-01-21 08:41:28'),
(5, 4, 'Masuk Lembur', '2020-01-21 08:41:28', '2020-01-21 08:41:28'),
(6, 5, 'Pulang Lembur', '2020-01-21 08:41:28', '2020-01-21 08:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `t_pegawai`
--

CREATE TABLE `t_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen_id` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nipbps` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nipbaru` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuankerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlfoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` tinyint(1) UNSIGNED NOT NULL,
  `gol` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pegawaihonor` tinyint(1) NOT NULL DEFAULT '0',
  `aktif` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_pegawai`
--

INSERT INTO `t_pegawai` (`id`, `nama`, `absen_id`, `nipbps`, `nipbaru`, `email`, `username`, `jabatan`, `satuankerja`, `urlfoto`, `jk`, `gol`, `pegawaihonor`, `aktif`, `created_at`, `updated_at`) VALUES
(1, 'Suntono SE, M.Si', '14129', '340014129', '196602191994011001', 'suntono@bps.go.id', 'suntono', 'Kepala', 'BPS Propinsi', 'https://community.bps.go.id/images/avatar/340014129_20160718092456.jpg', 1, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(2, 'Ir. Lalu Supratna', '13474', '340013474', '196512311992121001', 'lalu.supratna@bps.go.id', 'lalu.supratna', 'Kepala', 'Bagian Tata Usaha', 'https://community.bps.go.id/images/avatar/340013474.jpg', 1, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(3, 'Baiq Kurniawati SST, M.Ak', '16217', '340016217', '197805052000122001', 'baiqk@bps.go.id', 'baiqk', '[Kepala/Staf]', 'Subbagian Bina Program', 'https://community.bps.go.id/images/avatar/16217.JPG', 2, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(4, 'Ayu Rosita Sari SST', '57313', '340057313', '199403062016022001', 'ayu.rosita@bps.go.id', 'ayu.rosita', '[Kepala/Staf]', 'Subbagian Bina Program', 'https://community.bps.go.id/images/avatar/340057313.jpg', 2, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(5, 'I Putu Yudhistira S.E.', '16053', '340016053', '197812271999121001', 'putu.yudhistira@bps.go.id', 'putu.yudhistira', '[Kepala/Staf]', 'Subbagian Bina Program', 'https://community.bps.go.id/images/avatar/340016053.jpg', 1, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(6, 'Andi Guslan SE', '14027', '340014027', '197510141994011001', 'andi.guslan@bps.go.id', 'andi.guslan', '[Kepala/Staf]', 'Subbagian Kepegawaian & Hukum', 'https://community.bps.go.id/images/avatar/340014027.jpg', 1, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(7, 'Linna Winarni S.M.', '55178', '340055178', '199002052011012003', 'linna@bps.go.id', 'linna', '[Kepala/Staf]', 'Subbagian Kepegawaian & Hukum', 'https://community.bps.go.id/images/avatar/340055178_20181022080651.jpg', 2, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(8, 'Lalu Sudiarta Utama S. Adm', '52171', '340052171', '198107272009011010', 'lalu.sudiarta@bps.go.id', 'lalu.sudiarta', '[Kepala/Staf]', 'Subbagian Kepegawaian & Hukum', 'https://community.bps.go.id/images/avatar/340052171.JPG', 1, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(9, 'Ir. B.D. Agustriawati', '13472', '340013472', '196512311992122001', 'baiqdewi@bps.go.id', 'baiqdewi', '[Kepala/Staf]', 'Subbagian Keuangan', 'https://community.bps.go.id/images/avatar/340013472.jpg', 2, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(10, 'Pande Gde Dony Gumilar S.Si, M.M.', '56543', '340056543', '199107192014031002', 'pande.dony@bps.go.id', 'pande.dony', '[Kepala/Staf]', 'Subbagian Keuangan', 'https://community.bps.go.id/images/avatar/340056543_20190928212456.jpg', 1, NULL, 1, 1, '2020-01-21 08:41:59', '2020-01-21 08:41:59'),
(11, 'Aris Wahyudi S.P, M.Ak', '16404', '340016404', '198204182001121004', 'aris.wahyudi@bps.go.id', 'aris.wahyudi', '[Kepala/Staf]', 'Subbagian Keuangan', 'https://community.bps.go.id/images/avatar/340016404.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(12, 'Muhamad Nursan', '19680', '340019680', '198301212007011001', 'nursan@bps.go.id', 'nursan', '[Kepala/Staf]', 'Subbagian Keuangan', 'https://community.bps.go.id/images/avatar/340019680.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(13, 'Arintia Dewi Heryyanti A.Md', '53721', '340053721', '198508232010032001', 'arintia@bps.go.id', 'arintia', '[Kepala/Staf]', 'Subbagian Keuangan', 'https://community.bps.go.id/images/avatar/53721.JPG', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(14, 'Didik Sutarmono SE', '12458', '340012458', '197003131990031002', 'didiks@bps.go.id', 'didiks', '[Kepala/Staf]', 'Subbagian Umum', 'https://community.bps.go.id/images/avatar/12458.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(15, 'I Wayan Wirjan SE', '12203', '340012203', '196812311989031013', 'wirjan@bps.go.id', 'wirjan', '[Kepala/Staf]', 'Subbagian Umum', 'https://community.bps.go.id/images/avatar/340012203.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(16, 'Heri Suria Wirawan', '56628', '340056628', '197312252014061001', 'herisw@bps.go.id', 'herisw', '[Kepala/Staf]', 'Subbagian Umum', 'https://community.bps.go.id/images/avatar/340056628_20190627064551.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(17, 'Baiq Yeni Sulistiana S.Adm, M.Ak', '18187', '340018187', '198612312006042001', 'baiqyeni@bps.go.id', 'baiqyeni', '[Kepala/Staf]', 'Subbagian Umum', 'https://community.bps.go.id/images/avatar/340018187.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(18, 'Sujiman SE', '20473', '340020473', '198008072007101001', 'jimanz@bps.go.id', 'jimanz', '[Kepala/Staf]', 'Subbagian Umum', 'https://community.bps.go.id/images/avatar/340020473.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(19, 'Muslimin', '19476', '340019476', '196412312007011038', 'muslimin4@bps.go.id', 'muslimin4', '[Kepala/Staf]', 'Subbagian Umum', 'https://community.bps.go.id/images/avatar/340019476.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(20, 'Rosidi', '19393', '340019393', '197512312007011009', 'rosidi4@bps.go.id', 'rosidi4', '[Kepala/Staf]', 'Subbagian Umum', 'https://community.bps.go.id/images/avatar/340019393.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(21, 'Indra Sasmita Utama SST', '50125', '340050125', '198509202009021010', 'indrasasmita@bps.go.id', 'indrasasmita', '[Kepala/Staf]', 'Subbagian Pengadaan Barang/Jasa', 'https://community.bps.go.id/images/avatar/340050125.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(22, 'Achmad Gunawan S.Adm', '55170', '340055170', '198107242011011011', 'achmad.gunawan@bps.go.id', 'achmad.gunawan', '[Kepala/Staf]', 'Subbagian Pengadaan Barang/Jasa', 'https://community.bps.go.id/images/avatar/340055170.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(23, 'Siti Mar\'atus Sa\'adah SE, M.Ak', '18186', '340018186', '198301032006042002', 'siti.ms@bps.go.id', 'siti.ms', '[Kepala/Staf]', 'Subbagian Pengadaan Barang/Jasa', 'https://community.bps.go.id/images/avatar/340018186_20190514134712.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(24, 'Arrief Chandra Setiawan S.ST, M.Si', '16182', '340016182', '197712252000121002', 'arrief@bps.go.id', 'arrief', 'Kepala', 'Bidang Statistik Sosial', 'https://community.bps.go.id/images/avatar/16182.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(25, 'Gusti Ketut Indradewi SST, M.Sc', '17402', '340017402', '198204262004122001', 'indradewi@bps.go.id', 'indradewi', '[Kepala/Staf]', 'Seksi Statistik Kependudukan', 'https://community.bps.go.id/images/avatar/340017402_20190718074556.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(26, 'Isna Zuriatina SST., MT.', '53294', '340053294', '198707242009122006', 'isna_z@bps.go.id', 'isna_z', '[Kepala/Staf]', 'Seksi Statistik Kependudukan', 'https://community.bps.go.id/images/avatar/340053294_20161011091624.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(27, 'Amy Wardian Pratama SST', '19265', '340019265', '198405172007011003', 'wardian@bps.go.id', 'wardian', '[Kepala/Staf]', 'Seksi Statistik Ketahanan Sosial', 'https://community.bps.go.id/images/avatar/19265.JPG', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(28, 'Sri Suhartini S.Sos.', '11047', '340011047', '196208241985032004', 'sri.suhartini@bps.go.id', 'sri.suhartini', '[Kepala/Staf]', 'Seksi Statistik Ketahanan Sosial', 'https://community.bps.go.id/images/avatar/340011047.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(29, 'Yati Daryati Nurmalasari SST', '50272', '340050272', '198610232009022006', 'yatidar@bps.go.id', 'yatidar', '[Kepala/Staf]', 'Seksi Statistik Ketahanan Sosial', 'https://community.bps.go.id/images/avatar/340050272_20170103105734.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(30, 'M. Ikhsany Rusyda SST.,M.Si', '17056', '340017056', '198105142003121003', 'ikhsany@bps.go.id', 'ikhsany', '[Kepala/Staf]', 'Seksi Statistik Kesejahteraan Rakyat', 'https://community.bps.go.id/images/avatar/340017056_20180606110633.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(31, 'Ratna Asih Wulandari SST, M.Ak', '50210', '340050210', '198501022009022004', 'ratna_wulan@bps.go.id', 'ratna_wulan', '[Kepala/Staf]', 'Seksi Statistik Kesejahteraan Rakyat', 'https://community.bps.go.id/images/avatar/340050210_20180212133602.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(32, 'Dr. Mohammad Junaedi S.Si.,M.T', '15139', '340015139', '197206211995121001', 'mjunaedi@bps.go.id', 'mjunaedi', 'Kepala', 'Bidang Statistik Produksi', 'https://community.bps.go.id/images/avatar/340015139_20150925105334.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(33, 'Baiq Kartini SE', '14405', '340014405', '196412311994012001', 'baiq_kartini@bps.go.id', 'baiq_kartini', '[Kepala/Staf]', 'Seksi Statistik Pertanian', 'https://community.bps.go.id/images/avatar/340014405.JPG', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(34, 'Anik Pratiwi SST', '54209', '340054209', '198812152010122003', 'anik_pratiwi@bps.go.id', 'anik_pratiwi', '[Kepala/Staf]', 'Seksi Statistik Pertanian', 'https://community.bps.go.id/images/avatar/340054209_20151214140111.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(35, 'Pepti Maya Puspita SST', '50195', '340050195', '198602062009022005', 'pepti@bps.go.id', 'pepti', '[Kepala/Staf]', 'Seksi Statistik Pertanian', 'https://community.bps.go.id/images/avatar/340050195_20180419143533.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(36, 'Meta Indriyana SST', '55838', '340055838', '198905292012112001', 'metaindriyana@bps.go.id', 'metaindriyana', '[Kepala/Staf]', 'Seksi Statistik Pertanian', 'https://community.bps.go.id/images/avatar/55838.JPG', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(37, 'Ir. Raehatul Jannah', '12865', '340012865', '196507291991032001', 'raehatul@bps.go.id', 'raehatul', '[Kepala/Staf]', 'Seksi Statistik Industri', 'https://community.bps.go.id/images/avatar/340012865.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(38, 'Nurlailah', '12575', '340012575', '196904141990032001', 'nurlailah@bps.go.id', 'nurlailah', '[Kepala/Staf]', 'Seksi Statistik Industri', 'https://community.bps.go.id/images/avatar/340012575.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(39, 'Rika Verlita SST', '20172', '340020172', '198508012008012005', 'rika.verlita@bps.go.id', 'rika.verlita', '[Kepala/Staf]', 'Seksi Statistik Industri', 'https://community.bps.go.id/images/avatar/20172.JPG', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(40, 'Ir. Saan', '14275', '340014275', '196412311994011002', 'saan@bps.go.id', 'saan', '[Kepala/Staf]', 'Seksi Statistik Pertambangan, Energi dan Konstruksi', 'https://community.bps.go.id/images/avatar/340014275.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(41, 'Medhia Ratna Puja Hapsari SST', '56359', '340056359', '199107062013112001', 'medhia.ratna@bps.go.id', 'medhia.ratna', '[Kepala/Staf]', 'Seksi Statistik Pertambangan, Energi dan Konstruksi', 'https://community.bps.go.id/images/avatar/56359.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(42, 'Ike Rahayu Sri SST, MM', '16061', '340016061', '197804241999122001', 'ike@bps.go.id', 'ike', '[Kepala/Staf]', 'Seksi Statistik Pertambangan, Energi dan Konstruksi', 'https://community.bps.go.id/images/avatar/340016061.JPG', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(43, 'Ir. Lalu Putradi', '13098', '340013098', '196510151992021001', 'putradi@bps.go.id', 'putradi', 'Kepala', 'Bidang Statistik Distribusi', 'https://community.bps.go.id/images/avatar/340013098.JPG', 1, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(44, 'Sri Endah Wardanti SST, MM.', '15068', '340015068', '197304051994122001', 'endahwardanti@bps.go.id', 'endahwardanti', '[Kepala/Staf]', 'Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar', 'https://community.bps.go.id/images/avatar/340015068.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(45, 'Sri Sulastri', '11320', '340011320', '196512081986032001', 'sri.sulastri@bps.go.id', 'sri.sulastri', '[Kepala/Staf]', 'Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar', 'https://community.bps.go.id/images/avatar/340011320.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:00', '2020-01-21 08:42:00'),
(46, 'Nurul Islamy SST', '57173', '340057173', '199105232014121001', 'nurul.islamy@bps.go.id', 'nurul.islamy', '[Kepala/Staf]', 'Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar', 'https://community.bps.go.id/images/avatar/340057173_20181203143450.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(47, 'Hertina Yusnissa SST, MM', '17065', '340017065', '198110192003122002', 'hertina@bps.go.id', 'hertina', '[Kepala/Staf]', 'Seksi Statistik Keuangan Dan Harga Produsen', 'https://community.bps.go.id/images/avatar/340017065.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(48, 'Ahmad Faisal SST', '56982', '340056982', '199302062014121001', 'ahmad.faisal@bps.go.id', 'ahmad.faisal', '[Kepala/Staf]', 'Seksi Statistik Keuangan Dan Harga Produsen', 'https://community.bps.go.id/images/avatar/56982.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(49, 'Ria Kusumawati', '18188', '340018188', '198506112006042003', 'ria.kusumawati@bps.go.id', 'ria.kusumawati', '[Kepala/Staf]', 'Seksi Statistik Keuangan Dan Harga Produsen', 'https://community.bps.go.id/images/avatar/340018188.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(50, 'Tri Harjanto', '13829', '340013829', '197106031993121002', 'harjan@bps.go.id', 'harjan', '[Kepala/Staf]', 'Seksi Statistik Niaga dan Jasa', 'https://community.bps.go.id/images/avatar/340013829.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(51, 'Nuning Primadianti SST, M.Ec.Dev', '50185', '340050185', '198606142009022009', 'nuningp@bps.go.id', 'nuningp', '[Kepala/Staf]', 'Seksi Statistik Niaga dan Jasa', 'https://community.bps.go.id/images/avatar/50185.JPG', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(52, 'Islam Saribakti SP', '11317', '340011317', '196306041986031004', 'islam@bps.go.id', 'islam', '[Kepala/Staf]', 'Seksi Statistik Niaga dan Jasa', 'https://community.bps.go.id/images/avatar/340011317.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(53, 'Wini Widiastuti S.ST, M.Sc', '16544', '340016544', '198104212002122004', 'winiwidiastuti@bps.go.id', 'winiwidiastuti', '[Kepala/Staf]', 'Seksi Statistik Niaga dan Jasa', 'https://community.bps.go.id/images/avatar/340016544.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(54, 'Ir. I Gusti Lanang Putra', '13471', '340013471', '196808171992121001', 'gustilanangp@bps.go.id', 'gustilanangp', 'Kepala', 'Bidang Neraca Wilayah dan Analisis Statistik', 'https://community.bps.go.id/images/avatar/340013471_20160107150052.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(55, 'Suci Purnamawati S.ST, MM', '17018', '340017018', '198008272003122003', 'suchie@bps.go.id', 'suchie', '[Kepala/Staf]', 'Seksi Neraca Produksi', 'https://community.bps.go.id/images/avatar/17018.JPG', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(56, 'Rosita Fahmi', '17228', '340017228', '198405212003122001', 'rosita.fahmi@bps.go.id', 'rosita.fahmi', '[Kepala/Staf]', 'Seksi Neraca Produksi', 'https://community.bps.go.id/images/avatar/340017228.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(57, 'Muh. Zainuri SST, M.Stat.', '50165', '340050165', '198610182009021001', 'zainuri@bps.go.id', 'zainuri', '[Kepala/Staf]', 'Seksi Neraca Produksi', 'https://community.bps.go.id/images/avatar/340050165_20170518085350.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(58, 'Ir. Muhamad Rifai', '13526', '340013526', '196512311993011001', 'mrifai@bps.go.id', 'mrifai', '[Kepala/Staf]', 'Seksi Neraca Konsumsi', 'https://community.bps.go.id/images/avatar/340013526.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(59, 'Haryani Sri Wahyuni', '9321', '340009321', '196203081982032004', 'haryani.wahyuni@bps.go.id', 'haryani.wahyuni', '[Kepala/Staf]', 'Seksi Neraca Konsumsi', 'https://community.bps.go.id/images/avatar/340009321.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(60, 'Ni Nyoman Ratna Puspitasari SST', '54218', '340054218', '198808312010122002', 'nyomanratna@bps.go.id', 'nyomanratna', '[Kepala/Staf]', 'Seksi Neraca Konsumsi', 'https://community.bps.go.id/images/avatar/340054218.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(61, 'Yassinta Ben Katarti Latiffa Dinar SST, M.Si', '16543', '340016543', '198005052002122004', 'yassinta@bps.go.id', 'yassinta', '[Kepala/Staf]', 'Seksi Analisis Statistik Lintas Sektor', 'https://community.bps.go.id/images/avatar/16543.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(62, 'Anisa Suciningtyas Damayanti SST', '57724', '340057724', '199409222017012001', 'anisa.damayanti@bps.go.id', 'anisa.damayanti', '[Kepala/Staf]', 'Seksi Analisis Statistik Lintas Sektor', 'https://community.bps.go.id/images/avatar/340057724.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(63, 'Anang Zakaria S.Si,M.A.P', '12035', '340012035', '196704281989011001', 'anangz@bps.go.id', 'anangz', 'Kepala', 'Bidang Integrasi Pengolahan dan Diseminasi Statistik', 'https://community.bps.go.id/images/avatar/12035.JPG', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(64, 'Chairul Fatikhin Putra SST, M.M.', '54217', '340054217', '198708152010121005', 'cfatikhinp@bps.go.id', 'cfatikhinp', '[Kepala/Staf]', 'Seksi Integrasi Pengolahan Data', 'https://community.bps.go.id/images/avatar/54217.JPG', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(65, 'Tri Kadaryanti Ningtiyas S.Sos.', '9601', '340009601', '196312251982032001', 'tri_kadaryanti@bps.go.id', 'tri_kadaryanti', '[Kepala/Staf]', 'Seksi Integrasi Pengolahan Data', 'https://community.bps.go.id/images/avatar/340009601.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(66, 'Ahmad Sukri S.Kom', '16866', '340016866', '197804152002121006', 'asukri@bps.go.id', 'asukri', '[Kepala/Staf]', 'Seksi Jaringan dan Rujukan Statistik', 'https://community.bps.go.id/images/avatar/340016866.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(67, 'Subaedah', '9275', '340009275', '196206121982032002', 'subaedah@bps.go.id', 'subaedah', '[Kepala/Staf]', 'Seksi Jaringan dan Rujukan Statistik', 'https://community.bps.go.id/images/avatar/340009275.jpg', 2, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(68, 'Casslirais Surawan S.Si', '54408', '340054408', '198311032011011008', 'casslirais@bps.go.id', 'casslirais', '[Kepala/Staf]', 'Seksi Jaringan dan Rujukan Statistik', 'https://community.bps.go.id/images/avatar/54408.JPG', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(69, 'I Putu Dyatmika SST', '17401', '340017401', '198203192004121002', 'dyatmika@bps.go.id', 'dyatmika', '[Kepala/Staf]', 'Seksi Diseminasi dan Layanan Statistik', 'https://community.bps.go.id/images/avatar/340017401_20190718073247.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(70, 'Wahyudi Septiawan SST', '57235', '340057235', '199209102014121001', 'wahyudi.septiawan@bps.go.id', 'wahyudi.septiawan', '[Kepala/Staf]', 'Seksi Diseminasi dan Layanan Statistik', 'https://community.bps.go.id/images/avatar/57235.jpg', 1, NULL, 1, 1, '2020-01-21 08:42:01', '2020-01-21 08:42:01'),
(71, 'Zamharir Aula', '525200012', '525200012', '525200012', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:53:39', '2020-01-21 08:53:39'),
(72, 'Muhammad Fikri', '525200005', '525200005', '525200005', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:54:26', '2020-01-21 08:54:26'),
(73, 'Danuru Samsi', '525200011', '525200011', '525200011', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:54:52', '2020-01-21 08:54:52'),
(74, 'Lalu Andre Lukito', '525200010', '525200010', '525200010', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:55:08', '2020-01-21 08:55:08'),
(75, 'Salamudin', '525200009', '525200009', '525200009', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:55:59', '2020-01-21 08:55:59'),
(76, 'Musawirin', '525200008', '525200008', '525200008', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:56:14', '2020-01-21 08:56:14'),
(77, 'I Made Suparta Yasa', '525200007', '525200007', '525200007', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:56:35', '2020-01-21 08:56:35'),
(78, 'Muliasih', '525200004', '525200004', '525200004', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 2, NULL, 0, 1, '2020-01-21 08:56:51', '2020-01-21 08:56:51'),
(79, 'Marhamah', '525200003', '525200003', '525200003', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 2, NULL, 0, 1, '2020-01-21 08:57:10', '2020-01-21 08:57:10'),
(80, 'Junnaidi Effendi', '525200002', '525200002', '525200002', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:57:26', '2020-01-21 08:57:26'),
(81, 'Nasibun', '525200001', '525200001', '525200001', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 1, NULL, 0, 1, '2020-01-21 08:57:39', '2020-01-21 08:57:39'),
(82, 'Isfimarnawati', '525200006', '525200006', '525200006', NULL, NULL, 'Honorer', 'Subbagian Umum', 'https://via.placeholder.com/100x100', 2, NULL, 0, 1, '2020-01-21 08:58:29', '2020-01-21 08:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logabsen`
--
ALTER TABLE `logabsen`
  ADD PRIMARY KEY (`log_id`);

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
-- Indexes for table `tariklog`
--
ALTER TABLE `tariklog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_gol`
--
ALTER TABLE `t_gol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kodeabsen`
--
ALTER TABLE `t_kodeabsen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `t_pegawai_nipbps_unique` (`nipbps`),
  ADD UNIQUE KEY `t_pegawai_nipbaru_unique` (`nipbaru`);

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
-- AUTO_INCREMENT for table `logabsen`
--
ALTER TABLE `logabsen`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tariklog`
--
ALTER TABLE `tariklog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_gol`
--
ALTER TABLE `t_gol`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_kodeabsen`
--
ALTER TABLE `t_kodeabsen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
