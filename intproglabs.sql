-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 01, 2023 at 07:25 PM
-- Server version: 8.0.24
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intproglabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int NOT NULL,
  `bank_name` varchar(128) NOT NULL,
  `itn_number` bigint UNSIGNED NOT NULL,
  `credit_rating` varchar(8) NOT NULL,
  `asset_volume` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `itn_number`, `credit_rating`, `asset_volume`) VALUES
(7, 'ТИНЬКОФФ БАНК', 7710140679, 'A', 1600000000),
(9, 'ОАО «РГС Банк»', 7718105676, 'B', 528244221),
(10, 'ОАО «МТС-Банк»', 7702045051, 'A', 835664910),
(11, 'КИВИ БАНК (АО)', 3123011520, 'A', 1353264000);

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int NOT NULL,
  `created_at` int NOT NULL,
  `offer_id` int NOT NULL,
  `initial_deposit_amout` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `created_at`, `offer_id`, `initial_deposit_amout`) VALUES
(10, 1654067084, 5, 10010),
(11, 1654067084, 5, 3333),
(12, 1660305944, 9, 500000),
(13, 1663871110, 11, 27650),
(14, 1664708701, 5, 120000),
(16, 1668174959, 13, 4650),
(17, 1668178414, 13, 11205);

-- --------------------------------------------------------

--
-- Table structure for table `deposit_offers`
--

CREATE TABLE `deposit_offers` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `interest_rate` float NOT NULL,
  `bank_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `deposit_offers`
--

INSERT INTO `deposit_offers` (`id`, `name`, `interest_rate`, `bank_id`) VALUES
(5, 'Тинькофф Black Platinum', 5, 7),
(8, 'МТС 1 год', 7.5, 10),
(9, 'МТС 3 года', 12, 10),
(10, 'Россгострах Хороший 3 месяца', 4, 9),
(11, 'Россгострах Хороший 6 месяца', 4.5, 9),
(12, 'Россгострах Хороший 12 месяцев', 6.7, 9),
(13, 'Киви до востребования', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2),
(2, 'operator', '4b583376b2767b923c3e1da60d10de59', 1),
(7, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deposit_id_fk` (`offer_id`);

--
-- Indexes for table `deposit_offers`
--
ALTER TABLE `deposit_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_id_fk` (`bank_id`);

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
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `deposit_offers`
--
ALTER TABLE `deposit_offers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deposits`
--
ALTER TABLE `deposits`
  ADD CONSTRAINT `deposit_id_fk` FOREIGN KEY (`offer_id`) REFERENCES `deposit_offers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `deposit_offers`
--
ALTER TABLE `deposit_offers`
  ADD CONSTRAINT `bank_id_fk` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
