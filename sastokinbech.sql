-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 08:37 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sastokinbech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adds`
--

CREATE TABLE `tbl_adds` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `description` varchar(253) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `feature_item` varchar(3) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_adds`
--

INSERT INTO `tbl_adds` (`id`, `user_id`, `title`, `category`, `subcategory`, `description`, `image`, `image2`, `image3`, `feature_item`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mobile on Sale', 'Mobile & Accessories', 'Oppo', '<p>new mobile on sale.</p>', '79834.jpg', '3212.jpg', '90672.jpg', 'yes', 16600, 'Used', '2017-08-18 07:59:31', '2017-08-18 07:59:31'),
(2, 1, 'Dell Laptop', 'Computer & Peripherals', 'Laptop & Accessories', '<p>Laptop on sale.</p>', '79732.jpg', '61732.jpg', '80960.jpg', 'yes', 60000, 'Used', '2017-09-11 16:31:32', '2017-09-11 16:31:32'),
(3, 1, 'Football', 'Sports & Fitness', 'Fotball/Cricket/Other Sporting Goods', '<p>Officaial UCL-2019 match football.</p>', '15259.jpg', '22244.jpg', '97861.jpg', 'yes', 17000, 'Brand new', '2017-09-11 16:37:04', '2017-09-11 16:37:04'),
(4, 2, 'Hartford VR', 'Automobiles', 'Motorcycle', '<p>Brand-new Hartford-VR on sale.</p>', '47233.jpg', '73446.jpg', '65530.jpg', 'yes', 420000, 'Used', '2017-09-11 16:41:48', '2017-09-11 16:41:48'),
(5, 2, 'Musatang on sale.', 'Automobiles', 'Cars', '<p>2years used, comfortable stylish mustang on sale.</p>', '89533.jpg', '22227.jpg', '32897.jpg', 'yes', 700000, 'Used', '2017-09-11 16:44:27', '2017-09-11 16:44:27'),
(6, 3, 'A song of Ice and fire', 'Books & Learning', 'Book-Fiction', '<p><span style=\"color: rgb(84, 84, 84); font-family: arial, sans-serif; font-size: small;\">Fantasy novels written by author George R. R. Martin.</span></p>', '51424.jpg', '31873.jpg', '82224.jpg', 'no', 1400, 'Used', '2017-09-11 16:53:50', '2017-09-11 16:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counters`
--

CREATE TABLE `tbl_counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_counters`
--

INSERT INTO `tbl_counters` (`id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(13, 1, 7, '2017-08-18 07:59:50', '2017-09-11 16:55:11'),
(14, 2, 2, '2017-09-11 16:31:41', '2017-09-11 16:31:41'),
(15, 5, 3, '2017-09-11 16:45:40', '2017-09-11 16:45:45'),
(16, 4, 2, '2017-09-11 16:45:52', '2017-09-11 16:45:52'),
(17, 3, 3, '2017-09-11 16:46:00', '2017-09-11 16:54:15'),
(18, 6, 7, '2017-09-11 16:54:04', '2017-09-11 16:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `district` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address1` varchar(40) DEFAULT NULL,
  `address2` varchar(40) DEFAULT NULL,
  `contact` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `name`, `image`, `email`, `password`, `district`, `city`, `address1`, `address2`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Angad', '79252.jpg', 'angadbudhathoki@hotmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 'Bhaktapur', 'kathmandu', 'Lokanthali', NULL, '9841522160', '2017-08-17 18:07:53', '2017-09-11 16:29:38'),
(2, 'admin', '80300.jpg', 'admin@email.com', 'e00cf25ad42683b3df678c61f42c6bda', 'Kaski', 'Pokhara', 'NewRoad', NULL, '9841522160', '2017-09-11 16:38:09', '2017-09-11 16:38:35'),
(3, 'user1', '57048.jpg', 'user@email.com', 'e00cf25ad42683b3df678c61f42c6bda', 'Bhaktapur', 'MadyapurThimi', 'Lokanthali', NULL, '9841522160', '2017-09-11 16:47:08', '2017-09-11 16:47:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adds`
--
ALTER TABLE `tbl_adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_counters`
--
ALTER TABLE `tbl_counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adds`
--
ALTER TABLE `tbl_adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_counters`
--
ALTER TABLE `tbl_counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
