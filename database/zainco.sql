-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 10:18 PM
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
-- Table structure for table `book_drive`
--

CREATE TABLE `book_drive` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `make_of` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(68, '126382508.jpg', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(69, '1300699610.jpg', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(70, '131052171.jpg', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(71, '133033731.jpg', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(72, '135996141.jpg', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(73, '139443572.jpg', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(74, '140132091.jpg', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(243, '16056901_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(244, '16056859_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(245, '16056884_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(246, '16056857_003.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(247, '16056863_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(248, '16056867.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(249, '14380302.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(250, '16056901.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(251, '13006996.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(252, '10266648.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(253, '16056872_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(254, '16056884.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(255, '16056880_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(256, '12638250.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(257, '16056869_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(258, '16056880.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(259, '16056860_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(260, '16056863.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(261, '16056894.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(262, '16056872.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(263, '13599614.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(264, '15939562.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(265, '16056889.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(266, '13944357.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(267, '16056876.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(268, '10844529.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(269, '16056859.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(270, '16056857_002.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(271, '16056860.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(272, '16056862.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(273, '16056869.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(274, '16056857.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(275, '14013209.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(276, 'wwww2.jpg', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(277, '1300699611.jpg', 25, '2018-06-10 12:16:49', '2018-06-10 12:16:49'),
(278, '131052172.jpg', 25, '2018-06-10 12:16:49', '2018-06-10 12:16:49');

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
-- Table structure for table `car_services`
--

CREATE TABLE `car_services` (
  `id` int(11) NOT NULL,
  `service` varchar(200) NOT NULL,
  `car_ser_id` int(11) NOT NULL,
  `form_type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_services`
--

INSERT INTO `car_services` (`id`, `service`, `car_ser_id`, `form_type`, `created_at`) VALUES
(20, 'Engine Service', 21, 'servicing', '2018-06-27 19:42:19'),
(21, 'Breaks', 21, 'servicing', '2018-06-27 19:42:19'),
(22, 'Tyers', 21, 'servicing', '2018-06-27 19:42:19'),
(23, 'Suspension', 21, 'servicing', '2018-06-27 19:42:19'),
(24, 'Batteries', 21, 'servicing', '2018-06-27 19:42:19'),
(25, 'Engine Service', 22, 'servicing', '2018-06-27 19:43:13'),
(26, 'Tyers', 22, 'servicing', '2018-06-27 19:43:13'),
(27, 'Batteries', 22, 'servicing', '2018-06-27 19:43:13'),
(28, 'Mobile Car Dignose', 23, 'cardignose', '2018-06-27 19:44:44'),
(29, 'Book in our Garage', 23, 'cardignose', '2018-06-27 19:44:44'),
(30, 'Book in our Garage', 24, 'cardignose', '2018-06-27 19:45:49'),
(31, 'Mobile Car Dignose', 27, 'cardignose', '2018-06-27 20:17:28'),
(32, 'Book in our Garage', 27, 'cardignose', '2018-06-27 20:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `car_service_form`
--

CREATE TABLE `car_service_form` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `make_of_car` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `year` varchar(50) NOT NULL,
  `mileage` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `form_type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_service_form`
--

INSERT INTO `car_service_form` (`id`, `reg_no`, `make_of_car`, `model`, `year`, `mileage`, `name`, `email`, `phone`, `active`, `form_type`, `created_at`) VALUES
(21, 'ff', 'ff', 'ff', '123', '12', 'ff', 'fff@fff.com', '00000000000000', 0, 'servicing', '2018-06-27 19:42:19'),
(22, 'eee', 'ffvvv', 'X5 3.0 D M M', 'dd', '12', 'ff', 'fff@fff.com', '1234567890', 0, 'servicing', '2018-06-27 19:43:13'),
(23, 'eeen', 'ffvvvj', 'abc', '123', '12666', 'test', 'test@test.com', '123', 0, 'cardignose', '2018-06-27 19:44:43'),
(24, 'eeendd', 'ffvvvjdd', 'ABSdd', '123', '126666666', 'abccdd', 'blah@blah.com', '00000000000000', 0, 'cardignose', '2018-06-27 19:45:49'),
(25, 'eeengg', 'ffvvvggg', 'abcgg', '1233', '543', 'test', 'test@test.com', '00000000', 0, 'cardignose2', '2018-06-27 19:46:30'),
(26, 'eee', 'ffvvv', 'abc', 'dd', '12', 'test', 'fff@fff.com', '00000000000000', 0, 'vehiclehealth', '2018-06-27 20:10:59'),
(27, 'eeendd', 'ffvvvggg', 'abc', '1233', '', 'dd', 'blah@blah.com', '00000000000000', 0, 'cardignose', '2018-06-27 20:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `car_table`
--

CREATE TABLE `car_table` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `makeof` varchar(150) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `registered` varchar(20) NOT NULL,
  `owners` varchar(100) NOT NULL,
  `body_style` varchar(150) NOT NULL,
  `color` varchar(100) NOT NULL,
  `mileage` float NOT NULL,
  `no_doors` int(11) NOT NULL,
  `no_seats` int(11) NOT NULL,
  `engine_size` int(11) NOT NULL,
  `engine_capacity` float NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `transmission` varchar(150) NOT NULL,
  `co_emission` float NOT NULL,
  `gearbox` varchar(50) NOT NULL,
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

INSERT INTO `car_table` (`id`, `title`, `makeof`, `model`, `price`, `discount`, `registered`, `owners`, `body_style`, `color`, `mileage`, `no_doors`, `no_seats`, `engine_size`, `engine_capacity`, `fuel_type`, `transmission`, `co_emission`, `gearbox`, `fuel_cons_ur`, `fuel_cons_ex`, `fuel_cons_com`, `z_s_mph`, `top_speed`, `cylinders`, `engine_pow`, `engine_tor`, `length`, `wheelbase`, `width`, `description`, `created_at`, `updated_at`) VALUES
(25, '2009 09 BMW X5 3.0 D M SPORT 5d AUTO 232 BHP', 'BMW', 'X5 3.0 D M', 14495, 0, '2009', '1', 'Estate', 'Silver', 0, 5, 7, 2993, 3, 'Diesel', 'Automatic', 214, 'Automatic', 27.7, 40.9, 34.9, 8.1, 134, 6, 232, 384, 4851, 2933, 1994, '<p>\r\n</p><h2></h2>\r\n                 <div>\r\n                  <ul></ul>\r\n                 </div>\r\n                 <div><b>For more info on this vehicle call our showroom on 0121 5262220</b>\r\n\r\n                             \r\n                  <p>STAR SILVER STUNNING\r\nEXAMPLE, UPTO DATE SERVICE HISTORY, PRO SAT NAV + DAKOTA LEATHER + BUY\r\nWITH CONFIDENCE PACKAGE + 12 MONTHS RAC WARRANTY + 12 MONTHS RAC\r\nBREAKDOWN + 12 MONTHS NEW MOT + RAC 82 POINT APPROVED INSPECTION  + LOW\r\nRATE FINANCE ARRANGED + 2 MONTHS PAUSE PLAN FINANCE DEAL +</p>\r\n                  <p></p>\r\n\r\n                             <p>Every effort has been made to ensure the\r\n accuracy of the above information but errors may occur. Please check\r\nwith a salesperson.</p>\r\n                 </div>\r\n\r\n<br><p></p>', '2018-05-30 17:10:48', '2018-06-22 17:12:48'),
(26, '2009 09 BMW X5 3.0 D M SPORT 5d AUTO 232 BHP', 'Mercidce', 'X5 3.0 D M', 14495, 0, '2009', '1', 'Estate', 'Silver', 1200, 5, 7, 2993, 3, 'Diesel', 'Automatic', 214, 'Automatic', 27.7, 40.9, 34.9, 8.1, 134, 6, 232, 384, 4851, 2933, 1994, '<p>\r\n</p><h2></h2>\r\n                 <div>\r\n                  <ul></ul>\r\n                 </div>\r\n                 <div><b>For more info on this vehicle call our showroom on 0121 5262220</b>\r\n\r\n                             \r\n                  <p>STAR SILVER STUNNING\r\nEXAMPLE, UPTO DATE SERVICE HISTORY, PRO SAT NAV + DAKOTA LEATHER + BUY\r\nWITH CONFIDENCE PACKAGE + 12 MONTHS RAC WARRANTY + 12 MONTHS RAC\r\nBREAKDOWN + 12 MONTHS NEW MOT + RAC 82 POINT APPROVED INSPECTION  + LOW\r\nRATE FINANCE ARRANGED + 2 MONTHS PAUSE PLAN FINANCE DEAL +</p>\r\n                  <p></p>\r\n\r\n                             <p>Every effort has been made to ensure the\r\n accuracy of the above information but errors may occur. Please check\r\nwith a salesperson.</p>\r\n                 </div>\r\n\r\n<br><p></p>', '2018-06-01 17:08:20', '2018-06-22 17:00:06');

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
(1, '1234', 'bmw', 'bmw2009', '2103', '2100', 'test', 'test@test.com', '00000000000000', 0, '2018-05-31 17:52:00'),
(3, 'abc', 'bmw', 'bmw2009', '2009', '20000', 'abc', 'test@test.com', '0000000000', 0, '2018-05-31 17:55:52');

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
(21, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(69, 'Bluetooth Telephone Preparation', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(70, 'Heated Front Seats', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(71, 'Professional Navigation System', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(72, 'Third Row Seating', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(73, 'USB/Audio Interface', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(74, 'fea_5 ', 25, '2018-06-10 12:16:48', '2018-06-10 12:16:48');

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
(1, 'test', '00000000', 'test@test.com', 'testtesttesttesttesttest testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest ', 0, '2018-05-24 15:28:55', '2018-05-31 16:44:10'),
(2, 'test', '00000000', 'test@test.com', 'test', 1, '2018-05-24 15:48:11', '2018-05-31 18:18:27'),
(3, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 15:54:40', '2018-05-24 15:54:40'),
(4, 'test', '00000000', 'test@test.com', 'message', 0, '2018-05-24 15:56:33', '2018-05-24 15:56:33'),
(5, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 15:58:02', '2018-05-24 15:58:02'),
(6, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 15:59:22', '2018-05-24 15:59:22'),
(7, 'test', '00000000', 'test@test.com', 'test', 0, '2018-05-24 16:01:16', '2018-05-24 16:01:16'),
(8, 'test', '00000000', 'test@test.com', 'test', 1, '2018-05-24 16:01:55', '2018-05-31 17:09:42'),
(11, 'waseel', '1234567890', 'waseel@waseel.com', 'this is a test message', 1, '2018-05-31 17:10:43', '2018-06-23 17:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `form_type` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `car_id` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `form_type`, `subject`, `name`, `phone`, `email`, `message`, `car_id`, `active`, `created_at`) VALUES
(2, 'reserve', 'Application to reserve vehicle: 2009 BMW X5 3.0 D M', '11', '11', 'test@test.com', '1233', 23, 0, '2018-06-03 10:12:17'),
(4, 'reserve', 'Application to reserve vehicle: 2009 BMW X5 3.0 D M', 'hello', '00000000000000', 'test@test.com', 'test', 23, 0, '2018-06-03 11:04:33'),
(6, 'testdrive', 'Book test drive: 2009 BMW X5 3.0 D M', 'hello', '00000000', 'test@test.com', 'test', 23, 0, '2018-06-03 16:41:14');

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
(30, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(33, 'abc', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(106, 'Alloy Wheels - 19in', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(107, 'Body Coloured Bumpers', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(108, 'Headlamp Wash - Unspecified', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(109, 'Mirrors External - Electric/Heated', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(110, 'Rear Wash/Wipe - Rear', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(111, 'Roof Rails', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(112, 'Side Protection Mouldings', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(113, 'Washer Jets - Heated', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(114, 'fea_5 ', 25, '2018-06-10 12:16:48', '2018-06-10 12:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `general_forms`
--

CREATE TABLE `general_forms` (
  `id` int(11) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `engine_size` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `vehicle_mileage` varchar(100) NOT NULL,
  `no_owners` int(11) NOT NULL,
  `first_reg` varchar(100) NOT NULL,
  `mot_exp` varchar(100) NOT NULL,
  `last_service` varchar(100) NOT NULL,
  `service_his` varchar(200) NOT NULL,
  `last_service_mileage` varchar(100) NOT NULL,
  `general_condition` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `form_type` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_forms`
--

INSERT INTO `general_forms` (`id`, `vehicle`, `fname`, `lname`, `phone`, `postcode`, `vehicle_model`, `engine_size`, `color`, `vehicle_mileage`, `no_owners`, `first_reg`, `mot_exp`, `last_service`, `service_his`, `last_service_mileage`, `general_condition`, `message`, `form_type`, `active`, `created_at`) VALUES
(3, 'BMW-X5 3.0 D M', 'ff', 'ff', '00000000000000', '45000', 'abc', '123', 'ff', '123454', 12, '06/22/2018', '06/14/2018', '06/21/2018', 'part', '111', 'non', 'hhhhhhhhhhhhhhhhhhhh', 'partexchange', 1, '2018-06-22 17:23:31'),
(5, 'Mercidce-X5 3.0 D M', 'abc', 'abc', '00000000', '45000', 'abc', '33', 'ff', '1234', 12, '06/11/2018', '06/04/2018', '06/05/2018', 'full', '123', 'full', 'kljaf dsf jlkfja dfda fkljafa;f', 'partexchange', 1, '2018-06-23 05:00:00'),
(6, '', 'ff', 'app', '00000000000000', '45000', 'app', '33', 'app', '00', 1, '06/06/2018', '06/12/2018', '06/16/2018', 'full', '111', 'full', ',mcna', 'sellcar', 1, '2018-06-24 10:00:27'),
(10, '', 'ff', 'app', '00000000', '45000', 'app', '123', 'app', '1234', 12, '06/13/2018', '06/20/2018', '06/19/2018', 'part', '123', 'non', 'kfjalfja\'jfa\'       la;kfjjjjjjjjjjjjjjjjjjj', 'sellcar', 1, '2018-06-24 16:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `general_form_images`
--

CREATE TABLE `general_form_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `form_id` int(11) NOT NULL,
  `form_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_form_images`
--

INSERT INTO `general_form_images` (`id`, `image`, `form_id`, `form_type`) VALUES
(17, '1084452912.jpg', 3, 'partexchange'),
(18, '109080245.jpg', 3, 'partexchange'),
(19, '1263825015.jpg', 3, 'partexchange'),
(20, '1300699616.jpg', 3, 'partexchange'),
(21, '131052177.jpg', 3, 'partexchange'),
(22, '133033735.jpg', 3, 'partexchange'),
(23, '135996147.jpg', 3, 'partexchange'),
(24, '139443577.jpg', 3, 'partexchange'),
(31, '1300699617.jpg', 5, 'partexchange'),
(32, '131052179.jpg', 5, 'partexchange'),
(33, '133033737.jpg', 5, 'partexchange'),
(34, '135996149.jpg', 5, 'partexchange'),
(43, '1310521711.jpg', 10, 'sellcar'),
(44, '133033739.jpg', 10, 'sellcar'),
(45, '1359961411.jpg', 10, 'sellcar'),
(46, '1394435710.jpg', 10, 'sellcar'),
(47, '140132094.jpg', 10, 'sellcar');

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
(42, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(44, 'abc', 28, '2018-06-08 17:19:34', '2018-06-08 17:19:34'),
(210, 'Adjustable Steering Column/Wheel - Rake/Reach', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(211, 'Air-Conditioning - Automatic', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(212, 'Centre Console', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(213, 'Computer - Unspecified', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(214, 'Cruise Control', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(215, 'Electric Windows - Front/Rear', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(216, 'In Car Entertainment - Radio/CD/MP3', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(217, 'Mirrors Internal - Automatic Dimming Rear View', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(218, 'Power Socket - Unspecified', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(219, 'Rain Sensor', 23, '2018-06-10 12:15:24', '2018-06-10 12:15:24'),
(220, 'Seat Height Adjustment - Electric Front/Driver Memory', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(221, 'Seating Capacity - Five Seats', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(222, 'Seats Split Rear', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(223, 'Sound Processor', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(224, 'Speakers - Six', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(225, 'Steering Wheel Leather', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(226, 'Tinted Glass - All Round', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(227, 'Upholstery Leather', 23, '2018-06-10 12:15:25', '2018-06-10 12:15:25'),
(228, 'fea_5 ', 25, '2018-06-10 12:16:48', '2018-06-10 12:16:48');

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
(17, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(19, 'abc', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(38, 'Media Package', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(39, 'Self-Levelling Suspension', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(40, 'fea_5 ', 25, '2018-06-10 12:16:49', '2018-06-10 12:16:49'),
(41, 'hellow', 25, '2018-06-10 12:16:49', '2018-06-10 12:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Car Dignose', 'car-dignose2', '<p></p><div>All modern cars rely on a range of on-board electronic management systems, often referred to as car diagnostics. Car diagnostics and engine diagnostics are a form of technology that uses sensors to read the parameters of the main components in your vehicle.</div><div><br></div><div>The majority of car owners will never know that there are any problems with these systems until an amber or red light appears on the car’s instrument display. If your car is displaying a red warning light while you are driving it this means you need to stop. In the event of this happening it’s very important that you get the car checked as soon as possible by a Team at Best Car Trading diagnostics specialist.</div><div><br></div><div>An amber light serves as more of a warning, but it still means that you should have your car checked at your earliest convenience. These warning lights can indicate a range of problems from engine warning lights to emissions errors, it all depends on the sophistication of the car diagnostics and engine diagnostics in your vehicle. <br></div><p></p>', '160568631.jpg', '2018-06-06 14:50:32', '2018-06-27 20:17:03'),
(2, 'Part Exchange Your  Vehicle Today', 'part-exchange-2', 'If you already have a vehicle you may consider opting for a part exchange. A part exchange allows you to put the value of your old vehicle towards the cost of your new one and if you\'re thinking of purchasing your next vehicle, a part exchange could cover your payments. <br>', '16056869_0021.jpg', '2018-06-06 14:51:13', '2018-06-22 17:10:29'),
(4, 'Warranty', 'warranty', '<h3>GOLD</h3>Designed to help with the cost of repairs, our Gold Warranty benefits include: <br>All Mechanical and Electrical parts cover <br>Parts, labour and VAT <br>National repair network <br>3 months to 1 year options available <br>Fast payment of valid claims <br>Optional Recovery <br>Unlimited claims <br>Claim limit of £1000 per claim <br><div><br></div><h3>BRONZE PLUS <br></h3><div>Designed to help with the cost of repairs, our Bronze Plus Warranty benefits include:</div><div>Listed parts cover </div>Optional cover - turbo charger <br>Parts, labour and VAT <br>National repair network <br>3 months to 1 year options available <br>Fast payment of valid claims <br>Optional Recovery <br>Unlimited claims <br>Claim limit of £500 per claim<br><br><br><br><br><br><br><br><br><br><br>', '16056857_0021.jpg', '2018-06-06 14:51:42', '2018-06-07 18:08:40'),
(5, 'Accident Claims', 'accident-claims', '<p></p><p>If you’ve been injured in an accident, you’ll want to file an insurance claim with either your insurer or the insurer of the responsible party as soon as possible (but after seeking medical attention). The claim is the first step toward being compensated for medical expenses, lost wages, or other damages resulting from the accident.</p><p></p><p></p><p>Best Car Trading promise to work with experienced personal injury solicitors so that you receive the best service possible ensuring a swift claims process with many claims settled in 3-4 months. Best Car Trading work very closely with our panel of experienced personal injury solicitors to ensure you receive the highest level of service as well as maximum compensation for personal injury, vehicle damages and all other out of pocket expenses. As part of our ongoing pledge to our clients; new and existing, we promise to act in good faith for everyone who wishes to pursue a personal injury claim arising from a car accident.</p><br><p></p>', '143803021.jpg', '2018-06-06 17:15:12', '2018-06-07 18:17:20'),
(6, 'Break Down Recovery', 'recovery', '<p>A vehicle breakdown can be a stressful situation. Often mechanical failures can mean that a car needs to be taken off the road to a nearby garage for extensive repairs. </p><p>Best Car Trading recovery specialists goal is to ensure that your vehicle is safely relocated for further examination and that whatever repairs are required are carried out in the quickest possible time .<br></p>', '16056872_0021.jpg', '2018-06-07 18:34:05', '2018-06-07 18:34:05'),
(7, 'Vehicle Health', 'vehicle-health2', '<p>No Data<br></p>', 'wwww1.jpg', '2018-06-07 19:09:34', '2018-06-27 20:00:39');

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
(37, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(39, 'abc', 28, '2018-06-08 17:19:35', '2018-06-08 17:19:35'),
(220, 'Air Bag Driver', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(221, 'Air Bag Passenger', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(222, 'Air Bag Side - Driver/Passenger', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(223, 'Alarm - Remote Control', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(224, 'Anti-Lock Brakes', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(225, 'Central Door Locking - Remote', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(226, 'Centre Rear Seat Belt', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(227, 'Child Locks - Manual', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(228, 'Electronic Brake Force Distribution', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(229, 'Exterior Lighting - Unspecified', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(230, 'Front Fog Lights', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(231, 'Head Air Bags - Front/Rear', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(232, 'Immobiliser', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(233, 'Parking Aid - Front/Rear', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(234, 'Power-Assisted Steering', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(235, 'Seat - ISOFIX Anchorage Point - Rear', 23, '2018-06-10 12:15:26', '2018-06-10 12:15:26'),
(236, 'Seat Belt Pre-Tensioners - Front', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(237, 'Third Brake Light', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(238, 'Traction Control System', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(239, 'Tyre Pressure Control', 23, '2018-06-10 12:15:27', '2018-06-10 12:15:27'),
(240, 'fea_5 ', 25, '2018-06-10 12:16:49', '2018-06-10 12:16:49');

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
(1, 'app', 'tester', 'apptester', 'apptester@app.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2018-05-22 18:17:41', '2018-06-04 18:30:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_drive`
--
ALTER TABLE `book_drive`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `car_services`
--
ALTER TABLE `car_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_service_form`
--
ALTER TABLE `car_service_form`
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
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exterior`
--
ALTER TABLE `exterior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_forms`
--
ALTER TABLE `general_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_form_images`
--
ALTER TABLE `general_form_images`
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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `safety`
--
ALTER TABLE `safety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_drive`
--
ALTER TABLE `book_drive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_image`
--
ALTER TABLE `car_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `car_locator`
--
ALTER TABLE `car_locator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_services`
--
ALTER TABLE `car_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `car_service_form`
--
ALTER TABLE `car_service_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `car_table`
--
ALTER TABLE `car_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `car_valuation`
--
ALTER TABLE `car_valuation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comfort`
--
ALTER TABLE `comfort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exterior`
--
ALTER TABLE `exterior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `general_forms`
--
ALTER TABLE `general_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `general_form_images`
--
ALTER TABLE `general_form_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `interior`
--
ALTER TABLE `interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `safety`
--
ALTER TABLE `safety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
