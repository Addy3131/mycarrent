-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 12:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `pass`, `created_dt`, `updated_dt`) VALUES
(1, 'adnan', 'addy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-01-18 06:48:59', '2023-01-18 06:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `advertisment`
--

CREATE TABLE `advertisment` (
  `adv_id` int(11) NOT NULL,
  `car_title` varchar(255) DEFAULT NULL,
  `driver_type` varchar(255) DEFAULT NULL,
  `car_number` int(11) DEFAULT NULL,
  `rc_book` varchar(255) DEFAULT NULL,
  `licence_no` int(11) DEFAULT NULL,
  `car_pickup_address` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `rent_type` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `from_book_date` datetime DEFAULT NULL,
  `to_book_date` datetime DEFAULT NULL,
  `specific_comment` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `adver_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `created_dt`, `update_dt`) VALUES
(1, 'Ahmedabad', NULL, NULL),
(2, 'Mumbai', NULL, NULL),
(3, 'Chennai', NULL, NULL),
(4, 'Bangalore', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_us` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rent_dec`
--

CREATE TABLE `rent_dec` (
  `image` varchar(255) DEFAULT NULL,
  `Tandc` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(255) DEFAULT NULL,
  `cemail` varchar(255) DEFAULT NULL,
  `cpass` varchar(255) DEFAULT NULL,
  `cphone` bigint(11) DEFAULT NULL,
  `cgen` varchar(255) NOT NULL,
  `city` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` enum('block','unblock') DEFAULT 'unblock',
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cus_id`, `cus_name`, `cemail`, `cpass`, `cphone`, `cgen`, `city`, `file`, `status`, `created_dt`, `updated_dt`, `city_name`) VALUES
(2, 'addy', 'addy@GMAIL.COM', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 'male', 2, '', 'unblock', '2023-01-19 14:48:24', '2023-01-19 14:48:24', ''),
(5, 'RAJ', 'raj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1234567689, 'Female', 3, 'download.jfif', 'unblock', '2023-01-19 15:11:05', '2023-01-19 15:11:05', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advertisment`
--
ALTER TABLE `advertisment`
  ADD PRIMARY KEY (`adv_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `adver_id` (`adver_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `city` (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisment`
--
ALTER TABLE `advertisment`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisment`
--
ALTER TABLE `advertisment`
  ADD CONSTRAINT `advertisment_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `user` (`cus_id`),
  ADD CONSTRAINT `advertisment_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `advertisment_ibfk_3` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`),
  ADD CONSTRAINT `advertisment_ibfk_4` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `user` (`cus_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`adver_id`) REFERENCES `advertisment` (`adv_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `city` FOREIGN KEY (`city`) REFERENCES `city` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
