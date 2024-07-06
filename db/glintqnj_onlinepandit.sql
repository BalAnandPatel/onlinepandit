-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 05:16 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glintqnj_onlinepandit`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `createdOn` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp(6) NULL DEFAULT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `fullName`, `userName`, `password`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, 'Admin', 'Admin', 'Admin@2024', '2024-06-27 03:35:19.637339', '0', '0000-00-00 00:00:00.000000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `eventId` int(11) DEFAULT NULL,
  `userMobile` varchar(100) DEFAULT NULL,
  `fromDate` varchar(100) DEFAULT NULL,
  `toDate` varchar(100) DEFAULT NULL,
  `message` mediumtext,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `cancelledBy` varchar(5) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `eventId`, `userMobile`, `fromDate`, `toDate`, `message`, `regDate`, `status`, `cancelledBy`, `updationDate`) VALUES
(1, 'anand patel', 1, '9984087027', NULL, NULL, 'Hamare ghar pooja karni hai kripay call kare', '2024-06-27 03:37:14', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ANAND PATEL', '9984087027', 'giplanand@gmail.com', 'Pooja Samagri', 'Please call me', 0, '2024-06-27 03:44:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(155) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(155) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Ganesh Sthapna', 'Ganesh Sthapna', 'event_2.png', '0', '2024-06-27 08:28:38', NULL),
(2, 'Laxmi Puja', 'Laxmi Puja', 'event_1.png', '0', '2024-06-27 08:26:13', NULL),
(12, 'Arya Samaj Havan', 'Arya Samaj Havan', 'event_11.png', '0', '2024-06-27 08:36:28', NULL),
(5, 'Mahamrityunjay Jap', 'Mahamrityunjay Jap', 'event_4.png', '0', '2024-06-27 08:31:05', NULL),
(13, 'Upanayan', 'Upanayan', 'event_12.png', '0', '2024-06-27 08:37:08', NULL),
(7, 'Graha Pravesh', 'Graha Pravesh', 'event_6.png', '0', '2024-06-27 08:32:30', NULL),
(8, 'Vivah', 'Vivah', 'event_7.png', '0', '2024-06-27 08:33:40', NULL),
(9, 'Vrat', 'Vrat', 'event_8.png', '0', '2024-06-27 08:34:17', NULL),
(11, 'Rites', 'Rites', 'event_10.png', '0', '2024-06-27 08:35:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE `imagegallery` (
  `id` int(255) NOT NULL,
  `galleryTitle` varchar(255) NOT NULL,
  `galleryDescription` varchar(1000) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_name` (`name`),
  ADD UNIQUE KEY `exam_name_2` (`name`);

--
-- Indexes for table `imagegallery`
--
ALTER TABLE `imagegallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
