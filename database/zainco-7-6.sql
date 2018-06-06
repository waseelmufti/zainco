-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 09:54 PM
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
(9, '16056872_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(10, '16056867_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(11, '16056862_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(12, '16056866_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(13, '10908024.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(14, '16056894_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(15, '16056860_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(16, '16056865_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(17, '15973591_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(18, '16056866.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(19, '16056876_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(20, '16056861_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(21, '13303373.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(22, '15973592_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(23, '16056859_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(24, '16056876_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(25, '16056880_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(26, '16056889_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(27, '16056884_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(28, '13105217.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(29, '16056867_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(30, '16056901_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(31, '15973591.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(32, '15973592.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(33, '16056859_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(34, '16056884_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(35, '16056857_003.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(36, '16056863_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(37, '16056867.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(38, '14380302.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(39, '16056901.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(40, '13006996.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(41, '10266648.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(42, '16056872_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(43, '16056884.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(44, '16056861_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(45, '16056880_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(46, '12638250.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(47, '16056869_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(48, '16056865.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(49, '16056880.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(50, '16056860_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(51, '16056863.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(52, '16056894.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(53, '16056861.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(54, '16056872.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(55, '13599614.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(56, '15939562.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(57, '16056889.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(58, '13944357.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(59, '16056876.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(60, '10844529.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(61, '16056859.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(62, '16056857_002.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(63, '16056860.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(64, '16056862.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(65, '16056869.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(66, '16056857.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12'),
(67, '14013209.jpg', 23, '2018-05-30 15:56:12', '2018-05-30 15:56:12');

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
  `ins_grp` int(11) NOT NULL,
  `mpg` float NOT NULL,
  `gearbox` varchar(50) NOT NULL,
  `fea_1` varchar(255) NOT NULL,
  `fea_2` varchar(255) NOT NULL,
  `fea_3` varchar(255) NOT NULL,
  `fea_4` varchar(255) NOT NULL,
  `fea_5` varchar(255) NOT NULL,
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

INSERT INTO `car_table` (`id`, `title`, `makeof`, `model`, `price`, `discount`, `registered`, `owners`, `body_style`, `color`, `mileage`, `no_doors`, `no_seats`, `engine_size`, `engine_capacity`, `fuel_type`, `transmission`, `co_emission`, `ins_grp`, `mpg`, `gearbox`, `fea_1`, `fea_2`, `fea_3`, `fea_4`, `fea_5`, `fuel_cons_ur`, `fuel_cons_ex`, `fuel_cons_com`, `z_s_mph`, `top_speed`, `cylinders`, `engine_pow`, `engine_tor`, `length`, `wheelbase`, `width`, `description`, `created_at`, `updated_at`) VALUES
(23, '2009 09 BMW X5 3.0 D M SPORT 5d AUTO 232 BHP', 'BMW', 'X5 3.0 D M', 14495, 0, '2009', '1', 'Estate', 'Silver', 98000, 5, 7, 2993, 3, 'Diesel', 'Automatic', 214, 43, 34.9, 'Automatic', '', '', '', '', '', 27.7, 40.9, 34.9, 8.1, 134, 6, 232, 384, 4851, 2933, 1994, '<p>\r\n</p><h2></h2>\r\n																	<div>\r\n																		<ul></ul>\r\n																	</div>\r\n																	<div><b>For more info on this vehicle call our showroom on 0121 5262220</b>\r\n\r\n							                      \r\n																		<p>STAR SILVER STUNNING\r\nEXAMPLE, UPTO DATE SERVICE HISTORY, PRO SAT NAV + DAKOTA LEATHER + BUY\r\nWITH CONFIDENCE PACKAGE + 12 MONTHS RAC WARRANTY + 12 MONTHS RAC\r\nBREAKDOWN + 12 MONTHS NEW MOT + RAC 82 POINT APPROVED INSPECTION  + LOW\r\nRATE FINANCE ARRANGED + 2 MONTHS PAUSE PLAN FINANCE DEAL +</p>\r\n																		<p></p>\r\n\r\n							                      <p>Every effort has been made to ensure the\r\n accuracy of the above information but errors may occur. Please check\r\nwith a salesperson.</p>\r\n																	</div>\r\n\r\n<br><p></p>', '2018-05-30 15:56:08', '2018-05-30 16:47:19'),
(24, 'ABS', 'abs', 'abc', 1234, 0, '2009', '12', 'gearbox', 'gearbox', 0, 8, 99, 0, 45, 'gearbox', 'gearbox', 123, 45, 56.8, 'gearbox', '', '', '', '', '', 56, 88, 99, 77, 123, 5, 55, 555, 55, 66, 66, '<p>\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n\r\ngearbox\r\n\r\n<br></p>', '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(25, 'fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 ', 'fea_5 ', 'fea_5 fea_5 ', 123445, 0, '2010', '2', 'fea_5 ', 'fea_5 ', 0, 6, 8, 123, 33, 'fea_5 ', 'fea_5 ', 23, 23, 12.2, 'fea_5 ', 'fea_5 ', 'fea_5 ', 'fea_5 ', 'fea_5 ', 'fea_5 ', 123, 123, 123, 123, 12, 3, 32, 21, 21, 12, 2222, '<p>fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5&nbsp;</p><p>fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5&nbsp;</p><p><br></p><p>fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 fea_5 <br></p>', '2018-05-30 17:10:48', '2018-05-30 17:10:48'),
(26, 'BMW 2009', 'bmw', '2009x', 122200, 0, '1234', '1', 'estate', 'blue', 1200, 6, 6, 6666, 12, 'deasial', 'automatic', 12, 33, 1.22, 'automatic', 'blue tooth', '8 piston', 'leater seats', 'high roof', 'mobile charger', 12, 123, 123, 123, 1234, 98, 123, 1234, 12345, 12, 12, 'SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` ', '2018-06-01 17:08:20', '2018-06-01 17:08:20'),
(27, 'BMW 2009', 'bmw', '2009x', 122200, 0, '1234', '1', 'estate', 'blue', 1200, 6, 6, 6666, 12, 'deasial', 'automatic', 12, 33, 1.22, 'automatic', 'blue tooth', '8 piston', 'leater seats', 'high roof', 'mobile charger', 12, 123, 123, 123, 1234, 98, 123, 1234, 12345, 12, 12, 'SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` SELECT DISTINCT makeof, model FROM `car_table` ', '2018-06-01 17:09:07', '2018-06-01 17:09:07');

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
(16, 'Bluetooth Telephone Preparation', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(17, 'Heated Front Seats', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(18, 'Professional Navigation System', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(19, 'Third Row Seating', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(20, 'USB/Audio Interface', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(21, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(22, 'fea_5 ', 25, '2018-05-30 17:10:48', '2018-05-30 17:10:48');

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
(11, 'waseel', '1234567890', 'waseel@waseel.com', 'this is a test message', 0, '2018-05-31 17:10:43', '2018-05-31 17:10:43');

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
(20, 'Alloy Wheels - 19in', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(21, 'Body Coloured Bumpers', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(22, 'Headlamp Wash - Unspecified', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(23, 'Mirrors External - Electric/Heated', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(24, 'Paint Metallic', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(25, 'Rear Wash/Wipe - Rear', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(26, 'Roof Rails', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(27, 'Side Protection Mouldings', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(28, 'Spare Wheel - Unspecified', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(29, 'Washer Jets - Heated', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(30, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(31, 'fea_5 ', 25, '2018-05-30 17:10:48', '2018-05-30 17:10:48'),
(32, 'fea_5 ', 25, '2018-05-30 17:10:48', '2018-05-30 17:10:48');

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
(22, 'Adjustable Steering Column/Wheel - Rake/Reach', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(23, 'Air-Conditioning - Automatic', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(24, 'Armrest - Front', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(25, 'Centre Console', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(26, 'Computer - Unspecified', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(27, 'Cruise Control', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(28, 'Cup Holder', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(29, 'Electric Windows - Front/Rear', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(30, 'In Car Entertainment - Radio/CD/MP3', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(31, 'Mirrors Internal - Automatic Dimming Rear View', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(32, 'Power Socket - Unspecified', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(33, 'Rain Sensor', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(34, 'Seat Height Adjustment - Electric Front/Driver Memory', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(35, 'Seating Capacity - Five Seats', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(36, 'Seats Split Rear', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(37, 'Sound Processor', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(38, 'Speakers - Six', 23, '2018-05-30 15:56:08', '2018-05-30 15:56:08'),
(39, 'Steering Wheel Leather', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(40, 'Tinted Glass - All Round', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(41, 'Upholstery Leather', 23, '2018-05-30 15:56:09', '2018-05-30 15:56:09'),
(42, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(43, 'fea_5 ', 25, '2018-05-30 17:10:48', '2018-05-30 17:10:48');

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
(15, 'Media Package', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(16, 'Self-Levelling Suspension', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(17, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(18, 'fea_5 ', 25, '2018-05-30 17:10:49', '2018-05-30 17:10:49');

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
(1, 'Dummy Page', 'dummy-page', 'loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum ', '', '2018-06-06 14:50:32', '2018-06-06 14:50:32'),
(2, 'Dummy Page 2', 'dummy-page-2', 'loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum ', '', '2018-06-06 14:51:13', '2018-06-06 14:51:13'),
(3, 'Dummy Page 3', 'dummy-page-3', 'loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum ', '', '2018-06-06 14:51:28', '2018-06-06 14:51:28'),
(4, 'Dummy Page 4', 'dummy-page-4', 'loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum loreum ispum ', '', '2018-06-06 14:51:42', '2018-06-06 14:51:42'),
(5, 'testing testing', 'testing-testing', '<p>If you are looking for great savings on quality used cars in the \r\nWalsall area , then you have reached the right place. Globe Motors are a\r\n specialist used car dealer based in West Midlands . We are proud to \r\noffer you a first class customer service and very competitive pricing, \r\nso please browse our stock list. At Globe Motors we stock a range of \r\nused cars to suit all budgets and lifestyles so we are sure to have the \r\nright car for you.</p>\r\n\r\n<p>If you are looking for a second hand car in Walsall , then don\'t \r\ndelay, call us today to book a test drive. In order to offer cars to \r\nsuit everyone we make sure that we update our stocklist regularly. It is\r\n therefore always worth giving us a call, even if you don\'t see what you\r\n are looking for on our website.</p>\r\n\r\n<p>We realise that buying a car can be a daunting experience, but don\'t \r\nworry, we are well established within the Walsall area and come with a \r\ngreat reputation. Furthermore we offer excellent advice and experience \r\non vehicles and vehicle maintenance. Our friendly staff will go the \r\nextra mile to guarantee that you receive the advice you need. This is \r\nthe reason why many of our customers keep coming back to us.</p>\r\n\r\n<p>At Globe Motors we don\'t just sell cars, we do everything possible to\r\n get you driving your perfect car. Why not come along to our dealership \r\nin Walsall? We look forward to meeting you!</p>', '143803021.jpg', '2018-06-06 17:15:12', '2018-06-06 19:31:07');

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
(15, 'Air Bag Driver', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(16, 'Air Bag Passenger', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(17, 'Air Bag Side - Driver/Passenger', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(18, 'Alarm - Remote Control', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(19, 'Anti-Lock Brakes', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(20, 'Central Door Locking - Remote', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(21, 'Centre Rear Seat Belt', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(22, 'Child Locks - Manual', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(23, 'Electronic Brake Force Distribution', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(24, 'Electronic Stability Programme', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(25, 'Exterior Lighting - Unspecified', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(26, 'Front Fog Lights', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(27, 'Head Air Bags - Front/Rear', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(28, 'Head Restraints - Removable', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(29, 'Immobiliser', 23, '2018-05-30 15:56:10', '2018-05-30 15:56:10'),
(30, 'Parking Aid - Front/Rear', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(31, 'Power-Assisted Steering', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(32, 'Seat - ISOFIX Anchorage Point - Rear', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(33, 'Seat Belt Pre-Tensioners - Front', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(34, 'Third Brake Light', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(35, 'Traction Control System', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(36, 'Tyre Pressure Control', 23, '2018-05-30 15:56:11', '2018-05-30 15:56:11'),
(37, 'gearbox', 24, '2018-05-30 16:55:03', '2018-05-30 16:55:03'),
(38, 'fea_5 ', 25, '2018-05-30 17:10:49', '2018-05-30 17:10:49');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `car_locator`
--
ALTER TABLE `car_locator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_table`
--
ALTER TABLE `car_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `car_valuation`
--
ALTER TABLE `car_valuation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comfort`
--
ALTER TABLE `comfort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `interior`
--
ALTER TABLE `interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `safety`
--
ALTER TABLE `safety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
