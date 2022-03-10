-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 10:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_tbl`
--

CREATE TABLE `customers_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `current_balance` decimal(10,0) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_tbl`
--

INSERT INTO `customers_tbl` (`id`, `name`, `current_balance`, `email`, `phone`, `address`) VALUES
(1, 'sameh hessien', '200000', 'kfhna@jgj', '0199948', '44kklsd dsfm'),
(2, 'uPDTTLXz9a', '80000', 'xjl3b@z4ky.com', 'u80xxTEvop', 'CMV7ZAyqYM'),
(3, 'm9nkeTtoXi', '5000000', 'oi0o0@tmyc.com', 'xYfhHN59HH', 'fO9UDtQegg'),
(4, 'r6BE5wt4JK', '60000', 'lal8l@eoya.com', 'GfYTcfUH6B', 'kE39EdtuZ4');

-- --------------------------------------------------------

--
-- Table structure for table `referred_tbl`
--

CREATE TABLE `referred_tbl` (
  `referred_id` int(11) NOT NULL,
  `transfer_amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transfers_tbl`
--

CREATE TABLE `transfers_tbl` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_balance_after_transfer` decimal(10,0) NOT NULL,
  `transfer_amount` decimal(10,0) NOT NULL,
  `reffered_id` int(11) NOT NULL,
  `referred_name` varchar(150) NOT NULL,
  `referred_balance` decimal(10,0) NOT NULL,
  `reffered_balance_after_transfer` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers_tbl`
--

INSERT INTO `transfers_tbl` (`id`, `customer_id`, `customer_name`, `customer_balance_after_transfer`, `transfer_amount`, `reffered_id`, `referred_name`, `referred_balance`, `reffered_balance_after_transfer`) VALUES
(14, 3, 'm9nkeTtoXi', '4900000', '100000', 4, 'r6BE5wt4JK', '60000', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referred_tbl`
--
ALTER TABLE `referred_tbl`
  ADD PRIMARY KEY (`referred_id`);

--
-- Indexes for table `transfers_tbl`
--
ALTER TABLE `transfers_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reffered_id` (`reffered_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `referred_tbl`
--
ALTER TABLE `referred_tbl`
  MODIFY `referred_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfers_tbl`
--
ALTER TABLE `transfers_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transfers_tbl`
--
ALTER TABLE `transfers_tbl`
  ADD CONSTRAINT `transfers_tbl_ibfk_1` FOREIGN KEY (`reffered_id`) REFERENCES `customers_tbl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
