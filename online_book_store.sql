-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 01:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_products`
--

CREATE TABLE `books_products` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publication` varchar(30) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `date_added` date NOT NULL,
  `cover` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_products`
--

INSERT INTO `books_products` (`id`, `title`, `author`, `publication`, `genre`, `price`, `ISBN`, `date_added`, `cover`) VALUES
(1, 'Songs of Lawino', 'Okot pBitek', 'Nigeria', 'novels', 24000, '1244-3423-44538-4412', '2022-01-30', '41e1dfdNemL._SX342_BO1,204,203,200_.jpg'),
(2, 'This Time Tomorrow', 'Ngungi wa Thiongo', 'Nairobi - Kenya', 'novels', 28000, '1234-8764-3980-2736', '2022-01-29', 'download (1).jpg'),
(3, 'Takadini', 'Ben Hanson', 'Morogoro - Tanzania', 'novels', 8000, '9863-2368-9876-2638', '2022-01-29', 'ad36cb12d6764b60b0b30b9449fcf2ae.jpeg'),
(4, 'Three Suitors One Husband', 'Oyono Mbia', 'Dar es Salaam - Tanzania', 'plays', 15000, '3849-3838-4874-2222', '2022-01-22', '51HrThfXtLL._SX373_BO1,204,203,200_.jpg'),
(5, 'Hawa The Bus Driver', 'Richard Mabala', 'Dar es salaam', 'plays', 8000, '1237-6484-4483-2857', '2022-01-30', 'download (2).jpg'),
(6, 'Mabala the Farmer', 'Richard Mabala', 'Dar es Salaam', 'plays', 8000, '7495-7384-2222-9287', '2022-01-28', 'download (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`) VALUES
(1, 'John Doe', 'john@mail.com', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `date_added` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_products`
--
ALTER TABLE `books_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_products`
--
ALTER TABLE `books_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
