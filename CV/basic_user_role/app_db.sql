-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 11:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `image`) VALUES
(1, 'rady', 'rady@gmail.com', '$2y$10$nmBkc2HJjwfTQ9/VkYnms.TNzeeHPGqKpnshzxHLR0PLQ3LAK8F0u', 'user', '65d3113686c59.png'),
(2, 'admin', 'admin@gmail.com', '$2y$10$qx.PFQa4GRvVXI2m4FFvzOXGEURxIbnYxTny.1iOM4K1DgjAuz0VO', 'admin', '65d3126ae1285.jpg'),
(3, 'test', 'test@gmail.com', '$2y$10$6jDgK0En2XUfOGCEYkWX7ez5p/xt39Z3SIIYsrK/K9YUNvt3MSQXa', 'user', '65d3200067b5c.jpg'),
(4, 'Lev Henderson', 'cyrir@mailinator.com', '$2y$10$EuyPHo0Iyu7Pa3bDd7TY/.YYk36kHiyEmcMQsY2CzX7bNNSVkTtVm', 'user', '65d320b877b23.jpg'),
(5, 'May Ewing', 'vofe@mailinator.com', '$2y$10$3NNJlHkM8zsHPufmgnaLduxFeDvaLJvsa.M1NTrqZ63JOopEmaE2i', 'user', '65d320f97271e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`(100));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
