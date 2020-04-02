-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 07:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Names` longtext NOT NULL,
  `tel` int(11) NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Names`, `tel`, `username`, `password`) VALUES
(1, 'Salomon', 783120304, 'Salomon', 'X20q6AcLfz7qg+++dWpoMQ=='),
(2, 'Milton', 788881130, 'Milton', '2ODHPGhe7CWJZfIx1kaQ9Q==');

-- --------------------------------------------------------

--
-- Table structure for table `wp_blog`
--

CREATE TABLE `wp_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_tittle` longtext NOT NULL,
  `blog_descr` longtext NOT NULL,
  `blog_content` longtext NOT NULL,
  `blog_photo` longtext NOT NULL,
  `blog_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wp_blog`
--

INSERT INTO `wp_blog` (`blog_id`, `blog_tittle`, `blog_descr`, `blog_content`, `blog_photo`, `blog_date`) VALUES
(1, 'Test 1', 'test 1 short description', 'test 1 long description test 1 long description test 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long description test 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long descriptiontest 1 long description test 1 long description test 1 long description test 1 long description test 1 long descriptiontest 1 long descriptiontest 1 long description', '3b5588e04dcbe259f77cdf3278063979.jpg', '2020-04-02 17:17:52'),
(2, 'Test 2', '<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .', '<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .<span class=\"badge badge-pill badge-success\">Done</span> You have succeffuly Created new Blog .', '5599c520cafadd47526e0dd4f6b707af.png', '2020-04-02 17:28:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_blog`
--
ALTER TABLE `wp_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_blog`
--
ALTER TABLE `wp_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
