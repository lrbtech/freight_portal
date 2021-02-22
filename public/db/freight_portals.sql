-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 02:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freight_portals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `employee_id`, `name`, `mobile`, `email`, `email_verified_at`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$e5D4Q5L954x3DeH0.CHqtu0AVXdOaYCtoHkTYBqgjRkxgn.Dm1AI2', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assign_trucks`
--

CREATE TABLE `assign_trucks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `truck_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_trucks`
--

INSERT INTO `assign_trucks` (`id`, `truck_id`, `vehicle_no`, `service_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Tn 64 p 2344', '1', '0', '2021-02-20 21:14:16', '2021-02-20 22:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_per_km` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_per_km_loaders` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_km` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `assign_driver_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_driver_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_driver_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `date`, `user_id`, `booking_date`, `booking_time`, `from_address`, `from_latitude`, `from_longitude`, `to_address`, `to_latitude`, `to_longitude`, `service_id`, `service_name`, `billing_type`, `rate_per_km`, `rate_per_km_loaders`, `total_km`, `sub_total`, `vat_amount`, `total`, `status`, `assign_driver_id`, `assign_driver_date`, `assign_driver_time`, `created_at`, `updated_at`) VALUES
(1, '2021-02-20', '1', '2021-02-21', '10:00', '50 Al Fakhamah - Al Manhal - أبوظبي - United Arab Emirates', '24.451852571764906', '54.373567249707015', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '10', NULL, NULL, NULL, '1', '1', '2021-02-21', '07:50:11', '2021-02-21 01:38:27', '2021-02-21 15:50:11'),
(2, '2021-02-20', '1', '2021-02-21', '11:00', 'Office no- 873, Floor No- 8, Al Ghaith Tower,(opposite to ADCB BANK Hamdan Street Abu dhabi - Zone 1شرق 8 - أبو ظبي - United Arab Emirates', '24.4908877', '54.3638712', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '10', '54.5', '2.73', '57.23', '1', '1', '2021-02-21', '07:51:21', '2021-02-21 02:03:40', '2021-02-21 15:51:21'),
(3, '2021-02-21', '1', '2021-02-22', '06:00', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '1', '1', '2021-02-21', '09:13:13', '2021-02-21 16:25:25', '2021-02-21 17:13:13'),
(4, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:27:00', '2021-02-21 16:27:00'),
(5, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:27:33', '2021-02-21 16:27:33'),
(6, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:27:33', '2021-02-21 16:27:33'),
(7, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:28:16', '2021-02-21 16:28:16'),
(8, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:28:18', '2021-02-21 16:28:18'),
(9, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:28:18', '2021-02-21 16:28:18'),
(10, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:29:11', '2021-02-21 16:29:11'),
(11, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:29:12', '2021-02-21 16:29:12'),
(12, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:29:13', '2021-02-21 16:29:13'),
(13, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:29:13', '2021-02-21 16:29:13'),
(14, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:31:46', '2021-02-21 16:31:46'),
(15, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:31:50', '2021-02-21 16:31:50'),
(16, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:31:53', '2021-02-21 16:31:53'),
(17, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:31:56', '2021-02-21 16:31:56'),
(18, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:31:59', '2021-02-21 16:31:59'),
(19, '2021-02-21', '1', '2021-02-22', '11:00', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '2', 'Goods Carriers /Shifting Trucks', '2', '3', '5.45', '5.4', '29.43', '1.47', '30.9', '0', NULL, NULL, NULL, '2021-02-21 16:39:14', '2021-02-21 16:39:14'),
(20, '2021-02-21', '1', '2021-02-22', '10:00', '2/1/30, 1st St, Koodal Nagar, Madurai, Tamil Nadu 625018, India', '9.9591222', '78.1010348', '50 Feet Rd, Sellur, Madurai, Tamil Nadu 625014, India', '9.937459299999999', '78.1219497', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '5.4', '16.2', '0.81', '17.01', '0', NULL, NULL, NULL, '2021-02-21 17:07:20', '2021-02-21 17:07:20'),
(21, '2021-02-21', '1', '2021-02-21', '15:16', 'Hamdan Bin Mohammed St - Abu Dhabi - United Arab Emirates', '24.4934196', '54.3685304', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '1', 'test1', '1', '3', '2', '140', '420', '21', '441', '1', '1', '2021-02-21', '09:16:13', '2021-02-21 17:15:22', '2021-02-21 17:16:13'),
(22, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:38:26', '2021-02-22 20:38:26'),
(23, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:38:56', '2021-02-22 20:38:56'),
(24, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:38:56', '2021-02-22 20:38:56'),
(25, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:47:24', '2021-02-22 20:47:24'),
(26, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:50:04', '2021-02-22 20:50:04'),
(27, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:50:04', '2021-02-22 20:50:04'),
(28, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:52:18', '2021-02-22 20:52:18'),
(29, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:52:22', '2021-02-22 20:52:22'),
(30, '2021-02-22', '1', '2021-02-22', '11:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 20:52:25', '2021-02-22 20:52:25'),
(31, '2021-02-22', '1', '2021-02-22', '12:00', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '140', '420', '21', NULL, '0', NULL, NULL, NULL, '2021-02-22 21:12:04', '2021-02-22 21:12:04'),
(32, '2021-02-22', '1', '2021-02-22', '12:00', 'Dubai - United Arab Emirates', '25.2048493', '55.2707828', 'Abu Dhabi - United Arab Emirates', '24.453884', '54.3773438', '2', 'Goods Carriers /Shifting Trucks', '1', '3', '5.45', '139', '417', '20.85', '437.85', '0', NULL, NULL, NULL, '2021-02-22 21:21:43', '2021-02-22 21:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2021_02_17_081223_create_sessions_table', 2),
(7, '2021_02_20_104037_create_admins_table', 3),
(8, '2021_02_20_113400_create_services_table', 4),
(9, '2021_02_20_123015_create_truck_owners_table', 5),
(10, '2021_02_20_123026_create_assign_trucks_table', 5),
(11, '2021_02_20_170456_create_bookings_table', 6),
(12, '2021_02_22_063558_create_sliders_table', 7),
(13, '2021_02_22_063610_create_settings_table', 7),
(14, '2021_02_22_064545_create_testimonials_table', 7);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_per_km` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_per_km_loaders` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `rate_per_km`, `rate_per_km_loaders`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1', '3', '2', '2053865605.png', '0', '2021-02-20 19:54:52', '2021-02-20 23:51:21'),
(2, 'Goods Carriers /Shifting Trucks', '3', '5.45', '1757086447.png', '0', '2021-02-20 21:36:58', '2021-02-20 21:36:58'),
(3, 'test', '3', '0', NULL, '0', '2021-02-20 23:43:42', '2021-02-22 18:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1xxZ9nJtwuZenxNSl1bloZbBaAEfVFhklJ0lzxFg', 1, '192.168.0.172', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM3FqV0RnQzZaNFZQdUtwZlNKQ1p3UDB1cFRJcTlHbWJ4QXgzQjU2UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xOTIuMTY4LjAuMTA0OjU2MDMvYWRtaW4vc2V0dGluZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1613995291),
('A5wAX2nKZ6DFRSv1jsciXARGkkdynqjm5ge02GR0', 1, '192.168.0.172', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidDdVRkpCRGZmTGM1YVhTMDBtaExuSTgyajBzWk1JY2QxeGlnbFVOViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xOTIuMTY4LjAuMTA0OjU2MDMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZTVENFE1TDk1NHgzRGVIMC5DSHF0dTBBVlhkT2FZQ3RvSGtUWUJxZ2pSa3hnbi5EbTFBSTIiO30=', 1613995499),
('gH0mP70FH7fCI32MPxvF5912C5Tu1UIFJtIDlC7N', 1, '92.99.21.10', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYWN2SWhHc1lmdm1veXRvSFVScEd5RDVoT0FhbjVIeHBVN2hObnQzTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly85Mi45OS4yMS4xMDo1NjAzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGU1RDRRNUw5NTR4M0RlSDAuQ0hxdHUwQVZYZE9hWUN0b0hrVFlCcWdqUmt4Z24uRG0xQUkyIjt9', 1613996402),
('pCFo5Mi05iIAQKaVHVKyvowpWlVNqqqUIn45xu4H', NULL, '92.99.21.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoick93NmpLQ1ZlR1FTWnRGVnRRTkpmNlBFV1dMZmVyRktVRWJNSTFzMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly85Mi45OS4yMS4xMDo1NjAzL3NlcnZpY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1613999956),
('PhCdMBhH8EgUQU8JyXxZEXoGEYzNYBS6UNlu7zfo', 1, '92.99.21.10', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYVFXdGZxY0puTU56UkRSa2dtVGpiaTExNHBFU2RhWjUwaTNocU0yTyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ2OiJodHRwOi8vOTIuOTkuMjEuMTA6NTYwMy91c2VyL2Jvb2tpbmctZGV0YWlscy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGU1RDRRNUw5NTR4M0RlSDAuQ0hxdHUwQVZYZE9hWUN0b0hrVFlCcWdqUmt4Z24uRG0xQUkyIjt9', 1613997576),
('ylu5iTBU55BW88NiBHU2Ao9NBfShibO30CAlhfxw', 1, '92.99.21.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiRnRVV3UyMzZhNzRlaFMzMFQ2YTlRRUZFUnZ5VFF6TjhVRk5WU1JXSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly85Mi45OS4yMS4xMDo1NjAzL2FkbWluL2Jvb2tpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRlNUQ0UTVMOTU0eDNEZUgwLkNIcXR1MEFWWGRPYVlDdG9Ia1RZQnFnalJreGduLkRtMUFJMiI7czoxOToicGFzc3dvcmRfaGFzaF9hZG1pbiI7czo2MDoiJDJ5JDEwJGU1RDRRNUw5NTR4M0RlSDAuQ0hxdHUwQVZYZE9hWUN0b0hrVFlCcWdqUmt4Z24uRG0xQUkyIjt9', 1614000241);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print_terms_and_conditions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `about_us`, `mobile`, `landline`, `email`, `footer_description`, `print_terms_and_conditions`, `admin_email`, `address`, `logo`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `whatsapp`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Swift &amp; Affable, we offer professional transportation services throughout the United Arab Emirates. Our squad is up for the job, from Large to Tiny. Assuring our customers that we stand with our work, putting your satisfaction as our #1 priority. What really makes us stand out is our dedication, great prices, and attention to detail. Contact us to learn more from one of our expert staff on how our professional team can help you!</p>', '+971 - 553625319', NULL, 'services@treightportal.com', NULL, 'We reserve the right, at our sole discretion, to change, modify or otherwise alter these Terms and Conditions at any time. Unless otherwise indicated, amendments will become effective immediately.', 'aravind@lrbinfotech.com', 'Dubai - United Arab Emirates', '1380985330.png', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '2021-02-22 19:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_name`, `description`, `button_name`, `button_link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'The #1 Commercial Truck Service In UAE', 'We do All Types of Trucking services', 'Contact Us', '/contact', '1589036141.jpg', '0', '2021-02-22 15:49:56', '2021-02-22 15:49:56'),
(2, 'The #1 Tow Truck Services In UAE', 'We always work on 24x7.', 'contact us', '#', '1809002818.jpg', '0', '2021-02-22 16:15:14', '2021-02-22 16:15:14'),
(3, 'The #1 Tow Truck Services In UAE', 'We always work on 24x7.', 'contact us', '#', '1150943178.jpg', '0', '2021-02-22 16:15:15', '2021-02-22 16:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `location`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jhon doe', 'Thank you walls property help me, choice dream home We were impressed with the build quality, Plus they are competitively priced.', 'Abu Dhabi', '210455777.jpg', '0', '2021-02-22 15:44:58', '2021-02-22 20:01:03'),
(2, 'jhon doe', 'Thank you walls property help me, choice dream home We were impressed with the build quality, Plus they are competitively priced.', 'Dubai', '519951917.jpg', '0', '2021-02-22 15:46:13', '2021-02-22 20:01:15'),
(3, 'jhon doe', 'Thank you walls property help me, choice dream home We were impressed with the build quality, Plus they are competitively priced.', 'Dubai', '293597639.jpg', '0', '2021-02-22 15:47:13', '2021-02-22 20:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `truck_owners`
--

CREATE TABLE `truck_owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `truck_owners`
--

INSERT INTO `truck_owners` (`id`, `company_name`, `name`, `mobile`, `email`, `city`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Company name', 'Aravind', '963258741', 'aravind.0216@gmail.com', 'Abu dhabi', 'Office no- 873, Floor No- 8, Al Ghaith Tower,(opposite to ADCB BANK Hamdan Street Abu dhabi - Abu Dhabi - United Arab Emirates', '0', '2021-02-20 20:55:26', '2021-02-20 20:55:26'),
(2, 'LRB INFOTECH', 'test', '0567100733', 'thowsif@lrbinfotech.com', 'Abu dhabi', 'Office no- 873, Floor No- 8, Al Ghaith Tower,(opposite to ADCB BANK Hamdan Street Abu dhabi - Abu Dhabi', '0', '2021-02-20 23:44:15', '2021-02-20 23:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `business_type`, `company_name`, `mobile`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aravind', NULL, NULL, NULL, 'aravind.0216@gmail.com', NULL, '$2y$10$e5D4Q5L954x3DeH0.CHqtu0AVXdOaYCtoHkTYBqgjRkxgn.Dm1AI2', NULL, NULL, NULL, NULL, NULL),
(2, 'Prasanth', 'Individual', NULL, '963258741', 'prasanthats@gmail.com', NULL, '$2y$10$F8mX8gkEZ3xzFn8uq6sFrOTX5sKXp7YGP69u.TQEawZIsBCG7QqNa', NULL, NULL, NULL, '2021-02-21 17:35:17', '2021-02-21 17:35:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `assign_trucks`
--
ALTER TABLE `assign_trucks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truck_owners`
--
ALTER TABLE `truck_owners`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_trucks`
--
ALTER TABLE `assign_trucks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `truck_owners`
--
ALTER TABLE `truck_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
