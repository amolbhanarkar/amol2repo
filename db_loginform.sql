-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 06:17 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loginform`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `password` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `email`, `mobile`, `password`, `status`) VALUES
(1, 'ddsd', '9900@gmail.com', 2147483647, 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(2, 'ddsd', '9900@gmail.com', 2147483647, '698d51a19d8a121ce581499d7b701668', 0),
(3, 'ddsd', '9900@gmail.com', 2147483647, '0cc175b9c0f1b6a831c399e269772661', 0),
(4, 'ddsd', '9900@gmail.com', 2147483647, 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(5, 'ddsd', '9900@gmail.com', 999999999, 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(6, 'ddsd', 'a@gmail.com', 2147483647, 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(7, 'amol', 'amol@gmail.com', 2147483647, '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
