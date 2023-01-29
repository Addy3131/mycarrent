-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 03:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `pass`, `created_dt`, `updated_dt`) VALUES
(1, 'adnan', 'addy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-01-18 06:48:59', '2023-01-18 06:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `adv_id` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `car_title` varchar(255) DEFAULT NULL,
  `driver_type` varchar(255) DEFAULT NULL,
  `car_number` int(11) DEFAULT NULL,
  `rc_book` varchar(255) DEFAULT NULL,
  `license_no` int(11) DEFAULT NULL,
  `car_img` varchar(255) DEFAULT NULL,
  `model_year` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `fuel_type` varchar(50) DEFAULT NULL,
  `created_dt` date DEFAULT NULL,
  `updated_dt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`adv_id`, `cus_id`, `city_id`, `area_id`, `cat_id`, `car_title`, `driver_type`, `car_number`, `rc_book`, `license_no`, `car_img`, `model_year`, `price`, `fuel_type`, `created_dt`, `updated_dt`) VALUES
(2, 6, 1, 1, 2, 'Civic', '2', 1234, 'handmade.png', 2147483647, 'LOGIN.png', 2015, 50, 'Diesel', '2023-01-29', '2023-01-29'),
(3, 6, 1, 1, 2, 'Civic', '2', 1234, 'handmade.png', 2147483647, 'LOGIN.png', 2015, 50, 'Diesel', '2023-01-29', '2023-01-29'),
(4, 6, 1, 1, 2, 'Civic', '2', 1234, 'handmade.png', 2147483647, 'LOGIN.png', 2015, 50, 'Diesel', '2023-01-29', '2023-01-29'),
(5, 6, 2, 4, 15, 'honda', '4', 4321, '1599107148_3rd-birthday-cake-with-name-and-photo.png', 2147483647, 'civic.jpg', 2109, 40, 'Petrol', '2023-01-29', '2023-01-29');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `created_dt`, `update_dt`, `city_id`) VALUES
(1, 'Maninagar', NULL, NULL, 1),
(2, 'Naroda', NULL, NULL, 1),
(3, 'Jashodanagar', NULL, NULL, 1),
(4, 'Borivali', NULL, NULL, 2),
(5, 'Virar', NULL, NULL, 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_img` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_img`, `created_dt`, `updated_dt`) VALUES
(2, 'Sedan', 'sedan.jpg', NULL, NULL),
(15, 'SUV', 'suv.jpeg', NULL, NULL),
(16, 'Coupe', 'coupe.jpg', NULL, NULL),
(17, ' SPORTS CAR', 'sports.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `created_dt`, `update_dt`) VALUES
(1, 'Ahmedabad', NULL, NULL),
(2, 'Mumbai', NULL, NULL),
(3, 'Chennai', NULL, NULL),
(4, 'Bangalore', NULL, NULL),
(5, 'Delhi', NULL, NULL),
(6, 'Goa', NULL, NULL),
(7, 'Kolkata', NULL, NULL),
(8, 'Lucknow', NULL, NULL),
(9, 'Mirzapur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_us` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `email`, `pass`, `created_dt`, `update_dt`) VALUES
(2, 'Adnan ', 'Adnan@gmail.com', 81, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rent_dec`
--

CREATE TABLE `rent_dec` (
  `image` varchar(255) DEFAULT NULL,
  `Tandc` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cus_id`, `cus_name`, `cemail`, `cpass`, `cphone`, `cgen`, `city`, `file`, `status`, `created_dt`, `updated_dt`, `city_name`) VALUES
(6, 'Addy', 'addy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 123456789, 'Male', 9, 'LOGIN FORM.png', 'unblock', '2023-01-19 20:18:47', '2023-01-19 20:18:47', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`adv_id`),
  ADD KEY `cus` (`cus_id`),
  ADD KEY `area` (`area_id`),
  ADD KEY `cat` (`cat_id`),
  ADD KEY `city_id` (`city_id`);

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
  ADD PRIMARY KEY (`city_id`),
  ADD UNIQUE KEY `city_name` (`city_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

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
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `area` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`),
  ADD CONSTRAINT `cat` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `cus` FOREIGN KEY (`cus_id`) REFERENCES `user` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
