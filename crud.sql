-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 01:19 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobregistration`
--

CREATE TABLE `jobregistration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `refer` varchar(255) NOT NULL,
  `jobpost` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobregistration`
--

INSERT INTO `jobregistration` (`id`, `name`, `degree`, `mobile`, `email`, `refer`, `jobpost`, `photo`) VALUES
(8, 'Hanzala', 'Bscs', '40823047', 'abc@gmail.com', 'abc', 'Web Developer', 'upload/coding.png'),
(9, 'Jon Snow', 'MS', '03414498234', 'usmanmaliksahib2611@gmail.com', 'Fahad', 'Web Developer', '52433d4d-4124-407b-8880-6a35f23f8208.png'),
(11, 'Javaid', 'B tech', '209473048', 'javaid@gmail.com', 'Ahmad', 'Web Developer', 'upload/coding.png'),
(12, 'abc', 'sdf', '42343', 'sdflj@ljf', 'fjsldfj', 'Web Developer', 'upload/NewTux.svg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobregistration`
--
ALTER TABLE `jobregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobregistration`
--
ALTER TABLE `jobregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
