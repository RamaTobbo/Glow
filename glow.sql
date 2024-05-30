-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 01:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glow`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phonenumber` varchar(150) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phonenumber`, `comment`) VALUES
(1, 'rama', 'ramatobbo@gmail.com', '789765345', 'very nice products'),
(4, 'bahaa', 'bahaa@gmail.com', '79544687', 'amazing'),
(5, 'Rahaf', 'rahaf@gmail.com', '345678', 'very nice'),
(7, 'nour', 'nour@gmail.com', '345678', 'very nice'),
(8, 'Riwa', 'riwa@gmail.com', '5647890', 'not bad'),
(9, 'Riwa', 'riwa@gmail.com', '5647890', 'not bad'),
(10, 'Sara', 'sara@gmail.com', '567890', 'very nice'),
(11, 'rama', 'ramatobbo@gmail.com', '456567', 'not bad'),
(12, 'rama', 'sara@gmail.com', '34446785', 'very nice'),
(13, 'Rahaf', 'rahaf@gmail.com', '1234567', 'veryyy nicee');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `skintype_id` int(11) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `age`, `gender`, `skintype_id`, `FirstName`, `LastName`) VALUES
(71, 20, 'female', 1, 'Rama', 'Tobbo'),
(73, 23, 'female', 4, 'Nour', 'Tobbo'),
(74, 32, 'female', 3, 'Ranim', 'Hajar'),
(75, 20, 'female', 2, 'Rim', 'Akkawi'),
(78, 20, 'female', 1, 'Riwa', 'Hammoud'),
(79, 22, 'female', 4, 'Rama', 'Samir');

-- --------------------------------------------------------

--
-- Table structure for table `joined_users`
--

CREATE TABLE `joined_users` (
  `email` varchar(150) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joined_users`
--

INSERT INTO `joined_users` (`email`, `id`) VALUES
('ramatobbo@gmail.com', 3),
('nour@gmail.com', 4),
('sara@gmail.com', 13),
('sara@gmail.com', 14);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `ProductPhoto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `ProductPhoto`) VALUES
(1, 'Shampoo', 10, 'back1 (1).jpg'),
(2, 'Conditioner', 10, 'back2.jpg'),
(3, 'Eye Creme', 10, 'back3.jpg'),
(6, 'sunscreen', 20, 'back3.jpg'),
(7, 'Lotion', 30, 'back2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`) VALUES
(18, 'raghad', 'raghad@gmail.com', '$2y$10$u0QazTL0gTYFIfy.WFJQeOoVqJhXZLKK9Go66Uw7.udejNDpv43F2'),
(19, 'rama', 'r@gmail.com', '$2y$10$eP8vg86J7aXrHwS5fHzsr.xTlSpoUxcXIDhwIIv98.wW/60cXoc7q'),
(20, 'rana', 'rana@gmail.com', '$2y$10$H/UujKom5D7rjaXzY4/a0OZdD0aVw5k7RHydOIbZWp5frjNkKKo3K'),
(21, 'bahaa', 'bahaa@gmail.com', '$2y$10$W1vPr/o7vO8SCeu1lWQlM.l1r4QE4s0LkiovoA9SQpCcOcwhb0eQy'),
(22, 'riwa', 'riwa@gmail.com', '$2y$10$idiXmhbKjMRsFvAOXdcJ4ubJxRbh.LqEvsfdywTWTEGPep90NQqyS'),
(23, 'nour', 'nour@gmail.com', '$2y$10$tDEn4jJ7C5evJ3Es1JNbBe4RNS7f0lHB7Tv3Pm2Zcijs3BfYbIuHS'),
(24, 'rahaf', 'rahaf@gmail.com', '$2y$10$WUWA3aNTy76FMarWyn.XDeqTxeT6M6G6ntBYe522my20WdJ2uvOCm'),
(25, 'noura', 'noura@gmail.com', '$2y$10$Qk6v7Ek0mCEV9AzGYRhise31zu87MmL6O.JqHc5n113AJiW7SPkKq'),
(26, 'bahaa123', 'bibo@gmail.com', '$2y$10$qs/H4gQ71IJh5WB6ujD1tOz34mc54GxfWgiKEDE6UZpEKAOsFMPi6'),
(27, 'rama2003', 'rama3@gmail.com', '$2y$10$EmCgo2ao.j9M0FmHKTObduWkNdWKXnWx5JBoSW2Rpe8QAGLGxQK2y');

-- --------------------------------------------------------

--
-- Table structure for table `skintypes`
--

CREATE TABLE `skintypes` (
  `SkinTypeID` int(11) NOT NULL,
  `SkinType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skintypes`
--

INSERT INTO `skintypes` (`SkinTypeID`, `SkinType`) VALUES
(1, 'Dry'),
(2, 'Oily'),
(3, 'Combination'),
(4, 'Normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_skintype` (`skintype_id`);

--
-- Indexes for table `joined_users`
--
ALTER TABLE `joined_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skintypes`
--
ALTER TABLE `skintypes`
  ADD PRIMARY KEY (`SkinTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `joined_users`
--
ALTER TABLE `joined_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `skintypes`
--
ALTER TABLE `skintypes`
  MODIFY `SkinTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `fk_skintype` FOREIGN KEY (`skintype_id`) REFERENCES `skintypes` (`SkinTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
