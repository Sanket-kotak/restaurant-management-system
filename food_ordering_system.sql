-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 03:48 AM
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
-- Database: `food_ordering_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(5) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_category` varchar(50) NOT NULL,
  `food_description` varchar(500) NOT NULL,
  `food_original_price` varchar(5) NOT NULL,
  `food_discount_price` varchar(5) NOT NULL,
  `food_availibility` varchar(50) NOT NULL,
  `food_veg_nonveg` varchar(10) NOT NULL,
  `food_ingredients` varchar(1000) NOT NULL,
  `food_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_category`, `food_description`, `food_original_price`, `food_discount_price`, `food_availibility`, `food_veg_nonveg`, `food_ingredients`, `food_image`) VALUES
(3, 'Noodles', 'chinese', 'Noodles', '100', '80', 'Yes', 'Veg', 'Cumin Powder,Sambar Powder', 'images/d350cdf2d217c95d63f9eb9cded04b81.png'),
(4, 'Burger', 'burger', 'this is nice burger', '10', '8', 'Yes', 'Veg', 'Pepper Powder,Spices Mixture', 'images/9b4417c485a3c6fff503413222102d8b.png'),
(5, 'punjabi sabji', 'punjabi', 'punjabi sabji', '12', '10', 'Yes', 'Veg', 'Pepper Powder,Spices Mixture', 'images/d9107d5e9e6598f5838bccca6533d0b7.png'),
(6, 'this is tesing', 'chinese', 'this is testing', '8', '5', 'Yes', 'Veg', 'Pepper Powder,Spices Mixture', 'images/5ad1f320ee4cd895b534c35e7cba24c0.png');

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE `food_categories` (
  `id` int(5) NOT NULL,
  `food_categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`id`, `food_categories`) VALUES
(1, 'chinese'),
(2, 'punjabi'),
(3, 'burger');

-- --------------------------------------------------------

--
-- Table structure for table `food_ingredients`
--

CREATE TABLE `food_ingredients` (
  `id` int(5) NOT NULL,
  `food_ingredients` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_ingredients`
--

INSERT INTO `food_ingredients` (`id`, `food_ingredients`) VALUES
(2, 'Spices Mixture'),
(3, 'Cumin Powder'),
(4, 'Pepper Powder'),
(5, 'Turmeric Powder'),
(6, 'Sambar Powder'),
(7, 'Red Chili Powder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_ingredients`
--
ALTER TABLE `food_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_ingredients`
--
ALTER TABLE `food_ingredients`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
