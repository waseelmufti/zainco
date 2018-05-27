-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 12:35 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zainco`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_image`
--

CREATE TABLE `car_image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_image`
--

INSERT INTO `car_image` (`id`, `image`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 'logo-draft15.jpg', 2, '2018-05-27 18:06:09', '2018-05-27 18:06:09'),
(2, 'logo-draft21.jpg', 2, '2018-05-27 18:06:09', '2018-05-27 18:06:09'),
(3, 'HIBSONS_03.jpg', 19, '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(4, 'logo-draft1.jpg', 19, '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(5, 'logo-draft2.jpg', 19, '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(6, 'HIBSONS_031.jpg', 22, '2018-05-27 19:01:12', '2018-05-27 19:01:12'),
(7, 'logo-draft11.jpg', 22, '2018-05-27 19:01:12', '2018-05-27 19:01:12'),
(8, 'logo-draft21.jpg', 22, '2018-05-27 19:01:12', '2018-05-27 19:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `car_locator`
--

CREATE TABLE `car_locator` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `vehical_make` varchar(100) NOT NULL,
  `vehical_model` varchar(100) NOT NULL,
  `from_year` varchar(20) NOT NULL,
  `to_year` varchar(20) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `from_price` varchar(100) NOT NULL,
  `to_price` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car_table`
--

CREATE TABLE `car_table` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `makeof` varchar(150) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `discount` float NOT NULL,
  `body_style` varchar(150) NOT NULL,
  `color` varchar(100) NOT NULL,
  `no_doors` int(11) NOT NULL,
  `no_seats` int(11) NOT NULL,
  `engine_size` int(11) NOT NULL,
  `engine_capacity` float NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `transmission` float NOT NULL,
  `co_emission` float NOT NULL,
  `ins_grp` int(11) NOT NULL,
  `mpg` float NOT NULL,
  `fuel_cons_ur` float NOT NULL,
  `fuel_cons_ex` float NOT NULL,
  `fuel_cons_com` float NOT NULL,
  `z_s_mph` float NOT NULL,
  `top_speed` float NOT NULL,
  `cylinders` int(11) NOT NULL,
  `engine_pow` float NOT NULL,
  `engine_tor` float NOT NULL,
  `length` float NOT NULL,
  `wheelbase` float NOT NULL,
  `width` float NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_table`
--

INSERT INTO `car_table` (`id`, `title`, `makeof`, `model`, `price`, `discount`, `body_style`, `color`, `no_doors`, `no_seats`, `engine_size`, `engine_capacity`, `fuel_type`, `transmission`, `co_emission`, `ins_grp`, `mpg`, `fuel_cons_ur`, `fuel_cons_ex`, `fuel_cons_com`, `z_s_mph`, `top_speed`, `cylinders`, `engine_pow`, `engine_tor`, `length`, `wheelbase`, `width`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ABS', 'abc', 'abc', 123, 12, 'abc', 'abc', 2, 2, 12, 12, 'abc', 0, 12, 0, 123, 12, 12, 12, 12, 1234, 4, 1234, 12, 12, 32, 21, '<p>abc<br></p>', '2018-05-27 10:51:46', '2018-05-27 10:51:46'),
(2, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 2, 2, 123, 123, 'abc', 0, 12.3, 22, 123, 123, 0, 0, 0, 12.2, 12, 122, 12.2, 12.2, 12.2, 12.1, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 11:02:25', '2018-05-27 11:02:25'),
(3, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 2, 2, 123, 123, 'abc', 0, 12.3, 22, 123, 123, 0, 0, 0, 12.2, 12, 122, 12.2, 12.2, 12.2, 12.1, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 11:09:36', '2018-05-27 11:09:36'),
(4, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 2, 2, 123, 123, 'abc', 0, 12.3, 22, 123, 123, 0, 0, 0, 12.2, 12, 122, 12.2, 12.2, 12.2, 12.1, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 11:10:49', '2018-05-27 11:10:49'),
(5, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 2, 2, 123, 123, 'abc', 0, 12.3, 22, 123, 123, 0, 0, 0, 12.2, 12, 122, 12.2, 12.2, 12.2, 12.1, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 11:14:07', '2018-05-27 11:14:07'),
(6, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 3, 3, 12, 12, 'abc', 0, 123, 12, 12.2, 12, 21, 12, 0, 12, 2, 32, 32, 23, 23, 23, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabc abcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 15:14:28', '2018-05-27 15:14:28'),
(7, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 3, 3, 12, 12, 'abc', 0, 123, 12, 12.2, 12, 21, 12, 0, 12, 2, 32, 32, 23, 23, 23, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabc abcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 15:15:38', '2018-05-27 15:15:38'),
(8, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 3, 3, 12, 12, 'abc', 0, 123, 12, 12.2, 12, 21, 12, 0, 12, 2, 32, 32, 23, 23, 23, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabc abcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 15:16:21', '2018-05-27 15:16:21'),
(9, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 3, 3, 12, 12, 'abc', 0, 123, 12, 12.2, 12, 21, 12, 0, 12, 2, 32, 32, 23, 23, 23, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabc abcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 15:29:16', '2018-05-27 15:29:16'),
(10, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 3, 3, 12, 12, 'abc', 0, 123, 12, 12.2, 12, 21, 12, 0, 12, 2, 32, 32, 23, 23, 23, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabc abcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 16:06:11', '2018-05-27 16:06:11'),
(11, 'abc', 'abc', 'abc', 123, 0, 'abc', 'abc', 3, 3, 12, 12, 'abc', 0, 123, 12, 12.2, 12, 21, 12, 0, 12, 2, 32, 32, 23, 23, 23, '<p>abcabcabcabcabcabcabcabcabcabcabcabcabcabcabc abcabcabcabcabcabcabcabcabcabcabcabcabcabc<br></p>', '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(12, 'ABS', 'ABS', 'ABS', 1234, 0, 'ABS', 'ABS', 12, 12, 12, 12, 'ABS', 0, 12, 12, 12, 12, 12, 12, 0, 12, 12, 12, 12, 12, 12, 12, '<p>ABSABSABSABSABSABSABSABSABSABSABSABS<br></p>', '2018-05-27 18:12:37', '2018-05-27 18:12:37'),
(13, 'abs', 'abs', 'abs', 112, 0, 'abs', 'abs', 12, 12, 123, 123, 'abs', 0, 12, 12, 12, 12, 12, 12, 0, 12, 12, 12, 12, 12, 12, 12, '<p>absabsabsabsabsabsabsabs<br></p>', '2018-05-27 18:18:48', '2018-05-27 18:18:48'),
(14, 'abs', 'abs', 'abs', 112, 0, 'abs', 'abs', 12, 12, 123, 123, 'abs', 0, 12, 12, 12, 12, 12, 12, 0, 12, 12, 12, 12, 12, 12, 12, '<p>absabsabsabsabsabsabsabs<br></p>', '2018-05-27 18:21:38', '2018-05-27 18:21:38'),
(15, 'abs', 'abs', 'abs', 112, 0, 'abs', 'abs', 12, 12, 123, 123, 'abs', 0, 12, 12, 12, 12, 12, 12, 0, 12, 12, 12, 12, 12, 12, 12, '<p>absabsabsabsabsabsabsabs<br></p>', '2018-05-27 18:28:10', '2018-05-27 18:28:10'),
(16, 'abc', 'abcabc', 'abc', 123, 0, 'abc', 'abc', 2, 3, 12, 12, 'abc', 0, 123, 11, 122, 12, 12, 0, 0, 123, 2, 2, 2, 22, 2222, 22, '<p>abcabcabcabcabcabcabc<br></p>', '2018-05-27 18:31:22', '2018-05-27 18:31:22'),
(17, 'abc', 'abcabc', 'abc', 123, 0, 'abc', 'abc', 2, 3, 12, 12, 'abc', 0, 123, 11, 122, 12, 12, 0, 0, 123, 2, 2, 2, 22, 2222, 22, '<p>abcabcabcabcabcabcabc<br></p>', '2018-05-27 18:36:51', '2018-05-27 18:36:51'),
(18, 'abc', 'abcabc', 'abc', 123, 0, 'abc', 'abc', 2, 3, 12, 12, 'abc', 0, 123, 11, 122, 12, 12, 0, 0, 123, 2, 2, 2, 22, 2222, 22, '<p>abcabcabcabcabcabcabc<br></p>', '2018-05-27 18:44:05', '2018-05-27 18:44:05'),
(19, 'abs', 'abs', 'abs', 12, 0, 'abs', 'abs', 2, 3, 2, 22, 'abs', 0, 23, 12, 12, 12, 0, 0, 0, 12, 2, 22, 22, 12, 32, 22, '<p>absabsabsabsabsabsabsabsabs<br></p>', '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(20, 'abs', 'abs', 'abs', 12, 0, 'abs', 'abs', 2, 3, 2, 22, 'abs', 0, 23, 12, 12, 12, 0, 0, 0, 12, 2, 22, 22, 12, 32, 22, '<p>absabsabsabsabsabsabsabsabs<br></p>', '2018-05-27 18:55:13', '2018-05-27 18:55:13'),
(21, 'abs', 'abs', 'abs', 12, 0, 'abs', 'abs', 2, 3, 2, 22, 'abs', 0, 23, 12, 12, 12, 0, 0, 0, 12, 2, 22, 22, 12, 32, 22, '<p>absabsabsabsabsabsabsabsabs<br></p>', '2018-05-27 18:55:25', '2018-05-27 18:55:25'),
(22, 'ABD', 'ABC', 'ABC', 12, 0, 'ABC', 'ABC', 3, 3, 23, 32, 'ABC', 0, 12, 12, 12, 12, 21, 0, 0, 12, 2, 2, 2, 22, 22, 22, '<p>ABCABCABCABCABCABCABCABCABCABC<br></p>', '2018-05-27 19:01:11', '2018-05-27 19:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `car_valuation`
--

CREATE TABLE `car_valuation` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `make_of_car` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `milage` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_valuation`
--

INSERT INTO `car_valuation` (`id`, `reg_no`, `make_of_car`, `model`, `year`, `milage`, `name`, `email`, `phone`, `active`, `created_at`) VALUES
(1, 'dd', 'dd', 'dd', 'dd', '12', 'dd', 'test@test.com', '123', 0, '2018-05-24 18:04:48'),
(2, 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'test@test.com', '123', 0, '2018-05-24 18:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `comfort`
--

CREATE TABLE `comfort` (
  `id` int(11) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comfort`
--

INSERT INTO `comfort` (`id`, `feature`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 'abc', 10, '2018-05-27 16:06:11', '2018-05-27 16:06:11'),
(2, 'abc', 10, '2018-05-27 16:06:11', '2018-05-27 16:06:11'),
(3, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(4, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(5, 'ABS', 12, '2018-05-27 18:12:37', '2018-05-27 18:12:37'),
(6, 'abs', 13, '2018-05-27 18:18:48', '2018-05-27 18:18:48'),
(7, 'abs', 14, '2018-05-27 18:21:38', '2018-05-27 18:21:38'),
(8, 'abs', 15, '2018-05-27 18:28:10', '2018-05-27 18:28:10'),
(9, 'abc', 16, '2018-05-27 18:31:22', '2018-05-27 18:31:22'),
(10, 'abc', 17, '2018-05-27 18:36:51', '2018-05-27 18:36:51'),
(11, 'abc', 18, '2018-05-27 18:44:05', '2018-05-27 18:44:05'),
(12, 'abs', 19, '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(13, 'abs', 20, '2018-05-27 18:55:14', '2018-05-27 18:55:14'),
(14, 'abs', 21, '2018-05-27 18:55:25', '2018-05-27 18:55:25'),
(15, 'ABC', 22, '2018-05-27 19:01:11', '2018-05-27 19:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `phone`, `email`, `message`, `active`, `created_at`, `updated_at`) VALUES
(1, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 15:28:55', '2018-05-24 15:30:07'),
(2, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 15:48:11', '2018-05-24 15:48:11'),
(3, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 15:54:40', '2018-05-24 15:54:40'),
(4, 'test', '00000000', 'test@test.com', 'message', 0, '2018-05-24 15:56:33', '2018-05-24 15:56:33'),
(5, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 15:58:02', '2018-05-24 15:58:02'),
(6, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 15:59:22', '2018-05-24 15:59:22'),
(7, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 16:01:16', '2018-05-24 16:01:16'),
(8, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 16:01:55', '2018-05-24 16:01:55'),
(9, 'test', 'testt', 'test@test.com', 'test', 0, '2018-05-24 16:26:03', '2018-05-24 16:26:03'),
(10, 'test', '00000000', 'test', 'test', 0, '2018-05-24 16:26:48', '2018-05-24 16:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `exterior`
--

CREATE TABLE `exterior` (
  `id` int(11) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exterior`
--

INSERT INTO `exterior` (`id`, `feature`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 'abc', 10, '2018-05-27 16:06:12', '2018-05-27 16:06:12'),
(2, 'abc', 10, '2018-05-27 16:06:12', '2018-05-27 16:06:12'),
(3, 'abc', 10, '2018-05-27 16:06:12', '2018-05-27 16:06:12'),
(4, 'abc', 10, '2018-05-27 16:06:12', '2018-05-27 16:06:12'),
(5, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(6, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(7, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(8, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(9, 'ABS', 12, '2018-05-27 18:12:38', '2018-05-27 18:12:38'),
(10, 'abs', 13, '2018-05-27 18:18:49', '2018-05-27 18:18:49'),
(11, 'abs', 14, '2018-05-27 18:21:38', '2018-05-27 18:21:38'),
(12, 'abs', 15, '2018-05-27 18:28:10', '2018-05-27 18:28:10'),
(13, 'abc', 16, '2018-05-27 18:31:22', '2018-05-27 18:31:22'),
(14, 'abc', 17, '2018-05-27 18:36:51', '2018-05-27 18:36:51'),
(15, 'abc', 18, '2018-05-27 18:44:05', '2018-05-27 18:44:05'),
(16, 'abs', 19, '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(17, 'abs', 20, '2018-05-27 18:55:14', '2018-05-27 18:55:14'),
(18, 'abs', 21, '2018-05-27 18:55:25', '2018-05-27 18:55:25'),
(19, 'ABC', 22, '2018-05-27 19:01:12', '2018-05-27 19:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `interior`
--

CREATE TABLE `interior` (
  `id` int(11) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interior`
--

INSERT INTO `interior` (`id`, `feature`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 'abc', 9, '2018-05-27 15:29:16', '2018-05-27 15:29:16'),
(2, 'abc', 9, '2018-05-27 15:29:16', '2018-05-27 15:29:16'),
(3, 'abc', 9, '2018-05-27 15:29:16', '2018-05-27 15:29:16'),
(4, '9', 9, '2018-05-27 15:29:16', '2018-05-27 15:29:16'),
(5, 'abc', 10, '2018-05-27 16:06:11', '2018-05-27 16:06:11'),
(6, 'abc', 10, '2018-05-27 16:06:11', '2018-05-27 16:06:11'),
(7, 'abc', 10, '2018-05-27 16:06:11', '2018-05-27 16:06:11'),
(8, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(9, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(10, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(11, 'ABS', 12, '2018-05-27 18:12:37', '2018-05-27 18:12:37'),
(12, 'abs', 13, '2018-05-27 18:18:48', '2018-05-27 18:18:48'),
(13, 'abs', 14, '2018-05-27 18:21:38', '2018-05-27 18:21:38'),
(14, 'abs', 15, '2018-05-27 18:28:10', '2018-05-27 18:28:10'),
(15, 'abc', 16, '2018-05-27 18:31:22', '2018-05-27 18:31:22'),
(16, 'abc', 17, '2018-05-27 18:36:51', '2018-05-27 18:36:51'),
(17, 'abc', 18, '2018-05-27 18:44:05', '2018-05-27 18:44:05'),
(18, 'abs', 19, '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(19, 'abs', 20, '2018-05-27 18:55:14', '2018-05-27 18:55:14'),
(20, 'abs', 21, '2018-05-27 18:55:25', '2018-05-27 18:55:25'),
(21, 'ABC', 22, '2018-05-27 19:01:11', '2018-05-27 19:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(11) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `feature`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 'abc', 11, '2018-05-27 16:09:00', '2018-05-27 16:09:00'),
(2, 'abc', 11, '2018-05-27 16:09:00', '2018-05-27 16:09:00'),
(3, 'abc', 11, '2018-05-27 16:09:00', '2018-05-27 16:09:00'),
(4, 'ABS', 12, '2018-05-27 18:12:38', '2018-05-27 18:12:38'),
(5, 'abs', 13, '2018-05-27 18:18:49', '2018-05-27 18:18:49'),
(6, 'abs', 14, '2018-05-27 18:21:39', '2018-05-27 18:21:39'),
(7, 'abs', 15, '2018-05-27 18:28:10', '2018-05-27 18:28:10'),
(8, 'abc', 16, '2018-05-27 18:31:22', '2018-05-27 18:31:22'),
(9, 'abc', 17, '2018-05-27 18:36:51', '2018-05-27 18:36:51'),
(10, 'abc', 18, '2018-05-27 18:44:05', '2018-05-27 18:44:05'),
(11, 'abs', 19, '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(12, 'abs', 20, '2018-05-27 18:55:14', '2018-05-27 18:55:14'),
(13, 'abs', 21, '2018-05-27 18:55:25', '2018-05-27 18:55:25'),
(14, 'ABC', 22, '2018-05-27 19:01:12', '2018-05-27 19:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `safety`
--

CREATE TABLE `safety` (
  `id` int(11) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safety`
--

INSERT INTO `safety` (`id`, `feature`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(2, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(3, 'abc', 11, '2018-05-27 16:08:59', '2018-05-27 16:08:59'),
(4, 'ABS', 12, '2018-05-27 18:12:38', '2018-05-27 18:12:38'),
(5, 'abs', 13, '2018-05-27 18:18:49', '2018-05-27 18:18:49'),
(6, 'abs', 14, '2018-05-27 18:21:39', '2018-05-27 18:21:39'),
(7, 'abs', 15, '2018-05-27 18:28:10', '2018-05-27 18:28:10'),
(8, 'abc', 16, '2018-05-27 18:31:22', '2018-05-27 18:31:22'),
(9, 'abc', 17, '2018-05-27 18:36:51', '2018-05-27 18:36:51'),
(10, 'abc', 18, '2018-05-27 18:44:05', '2018-05-27 18:44:05'),
(11, 'abs', 19, '2018-05-27 18:45:50', '2018-05-27 18:45:50'),
(12, 'abs', 20, '2018-05-27 18:55:14', '2018-05-27 18:55:14'),
(13, 'abs', 21, '2018-05-27 18:55:25', '2018-05-27 18:55:25'),
(14, 'ABC', 22, '2018-05-27 19:01:12', '2018-05-27 19:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'app', 'tester', 'apptester', 'apptester@app.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2018-05-22 18:17:41', '2018-05-22 18:17:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_image`
--
ALTER TABLE `car_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_locator`
--
ALTER TABLE `car_locator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_table`
--
ALTER TABLE `car_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_valuation`
--
ALTER TABLE `car_valuation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comfort`
--
ALTER TABLE `comfort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exterior`
--
ALTER TABLE `exterior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safety`
--
ALTER TABLE `safety`
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
-- AUTO_INCREMENT for table `car_image`
--
ALTER TABLE `car_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `car_locator`
--
ALTER TABLE `car_locator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_table`
--
ALTER TABLE `car_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `car_valuation`
--
ALTER TABLE `car_valuation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comfort`
--
ALTER TABLE `comfort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exterior`
--
ALTER TABLE `exterior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `interior`
--
ALTER TABLE `interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `safety`
--
ALTER TABLE `safety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
