-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 05:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `environplatformdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `admin_username` text NOT NULL,
  `admin_password` text NOT NULL,
  `admin_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `admin_username`, `admin_password`, `admin_date`) VALUES
(1, 'admin', 'admin001', '2022-07-18 13:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(236) NOT NULL,
  `account_id` text NOT NULL,
  `name` text NOT NULL,
  `wallet_address` text NOT NULL,
  `package` text NOT NULL,
  `amount` text NOT NULL,
  `roi` text NOT NULL,
  `bonus` text NOT NULL,
  `billing_days` text NOT NULL,
  `status` text NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `account_id`, `name`, `wallet_address`, `package`, `amount`, `roi`, `bonus`, `billing_days`, `status`, `order_time`) VALUES
(1, '1', '', 'Deborah John', '12eyugr7r76Teteye673468hrut8t5yTtyhf4536', 'STARTER(90 Days)    $100', '$500', '$1200', '$300', '90', 'Unpaid', '2022-09-05 23:47:57'),
(4, '2', 'EVP202202', 'Olumide Ayodeji', '1NDFRoAAtAzy2jNA1XZNGwXvTPGAV8e4wN', 'STARTER(90 Days)    $100', '$2000', '$2500', '$200', '90', 'Unpaid', '2022-09-05 23:58:46'),
(5, '3', 'EVP202203', 'Solmon', '1NDFRoAAtAzy2jNA1XZNGwXvTPGAV8e4wN', 'PROFESSIONAL(180 Days)    $1,500', '', '', '', '90', '', '2022-07-20 00:27:17'),
(8, '9', 'EVP202209', 'Deborah John', '1NDFRoAAtAzy2jNA1XZNGwXvTPGAV8e4wN', 'Basic Plan(7 Days) $500', '', '', '', 'Default select', '', '2022-08-24 20:50:40'),
(9, '1', 'EVP202201', 'Deborah John', '1NDFRoAAtAzy2jNA1XZNGwXvTPGAV8e4wN', 'Basic Plan(7 Days) $500', '', '', '', '14', '', '2022-09-02 13:40:30'),
(10, '1', 'EVP202201', 'Deborah John', '1NDFRoAAtAzy2jNA1XZNGwXvTPGAV8e4wN', 'Basic Plan', '$500', '$1200', '$300', '7', 'Paid', '2022-09-05 23:46:03'),
(11, '1', 'EVP202201', 'Deborah John', 'gcvwufiwfiwojnfuiwhfwigf7weyr90', 'Deluxe Plan', '$1,000', '', '', '14', '', '2022-09-06 03:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `social_details`
--

CREATE TABLE `social_details` (
  `id` int(11) NOT NULL,
  `instagram_username` text NOT NULL,
  `instagram_password` text NOT NULL,
  `user_id` text NOT NULL,
  `status` text NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_details`
--

INSERT INTO `social_details` (`id`, `instagram_username`, `instagram_password`, `user_id`, `status`) VALUES
(1, 'oooo', 'oooo', '', 'Yes'),
(2, 'themes', 'ffff', '', ''),
(3, 'themes', 'ffff', '', ''),
(4, 'Shittu Olumide', 'weds', '', 'Yes'),
(7, 'unicorn', '45678', '1', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `location` text NOT NULL,
  `phone_number` text NOT NULL,
  `password` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`id`, `username`, `email`, `location`, `phone_number`, `password`, `time`) VALUES
(1, 'Ayomide', 'ayo@gmail.com', 'Nigeria', '08103016965', 'ayomide', '2022-09-02 13:12:22'),
(2, 'Blessing Thompson', 'blessingt@gmail.com', 'California', '09084746484', 'blessingt', '2022-07-26 22:34:46'),
(3, 'Joshua Ayobami', 'joshuaayo@ymail.com', 'Lagos, Nigeria', '09160569211', '1234567890', '2022-08-24 21:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tasks`
--

CREATE TABLE `staff_tasks` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `name` text NOT NULL,
  `task` text NOT NULL,
  `completed` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_tasks`
--

INSERT INTO `staff_tasks` (`id`, `user_id`, `name`, `task`, `completed`, `time`) VALUES
(1, '1', 'Ayomide', 'dljfdkvjxkvxkbvdjkvnsdkcbsdcscsdfhdfuvduifsuivscbsdividvuidvvdiviovsoxcxjnsvcbuidcvd', 'Yes', '2022-09-06 02:00:04'),
(2, '2', 'john', 'environplatformdb', 'No', '2022-09-06 01:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email_address` varchar(156) NOT NULL,
  `user_password` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `full_name`, `email_address`, `user_password`, `time`) VALUES
(1, 'Deborah John', 'debbie@gmail.com', '67890', '2022-09-02 13:35:43'),
(2, 'Olumide Ayodeji', 'olu@gmail.com', '67890', '2022-07-14 14:03:35'),
(3, 'Solmon', 'solomon@gmail.com', 'solomon', '2022-07-18 11:42:32'),
(4, 'Deborah John', 'debbie@g.com', 'debbie', '2022-07-19 13:36:09'),
(5, 'Jojo', 'jojo@gmail.com', 'jojo', '2022-07-20 14:38:33'),
(6, 'The Mayor', 'mayor@gmail.com', '12345', '2022-07-26 22:08:20'),
(7, 'Dami Olbe', 'damii@gmail.com', 'dani', '2022-08-18 16:30:18'),
(8, 'Shittu Olumide', 'shittuolumide@gmail.com', 'shittuolumide', '2022-08-24 09:48:50'),
(9, 'Deborah John', 'JAMESBROWN2938@MAILNESIA.COM', 'Acidbase1', '2022-08-24 20:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `wallet` text NOT NULL,
  `created_by` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `wallet`, `created_by`, `date_created`) VALUES
(1, '1NDFRoAAtAzy2jNA1XZNGwXvTPGAV8e4wN', 'admin', '2022-09-06 02:43:29'),
(2, 'gcvwufiwfiwojnfuiwhfwigf7weyr90', 'admin', '2022-09-06 03:02:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_details`
--
ALTER TABLE `social_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_tasks`
--
ALTER TABLE `staff_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `social_details`
--
ALTER TABLE `social_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_tasks`
--
ALTER TABLE `staff_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
