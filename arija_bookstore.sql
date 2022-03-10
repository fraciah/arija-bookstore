-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 08:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arija_bookstore`
--
CREATE DATABASE IF NOT EXISTS `arija_bookstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `arija_bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `isbn` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `edition` varchar(30) NOT NULL,
  `publication` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`isbn`, `title`, `author`, `edition`, `publication`) VALUES
('1e323', 'Blue ', 'Phik', '1000', 'Eagle'),
('A1', 'Amazing Stories', 'Amanda Jones', '100', 'Vitabu'),
('A10', 'Das Kapital', 'Karl Marx', '1000', 'Penguin'),
('A2', 'Amazing People', 'Amanda Jones', '100', 'Vitabu'),
('A3', 'From zero to hero', 'Philip. K Williams', '2000', 'Eagle'),
('A4', 'Adventures of Tom Sawyer', 'Mark Twain', '100', 'Eagle'),
('A5', 'Alice in Wonderland', 'Lewis Carrol', '200', 'Eagle'),
('A6', 'Ancient Mariner', 'Coleridge', '2', 'Kasuku'),
('A7', 'Pride and Prejudice', 'Jane Austen', '1000', 'Kasuku'),
('A8', 'Atomic Habits', 'James Clear', '100', 'Penguin'),
('A9', 'The Wild Iris', 'Louis Gluck', '200', 'Pearl'),
('jkdloads', 'Balcony Mix', 'Amapiano', '1000', 'Penguin'),
('lk7865', 'AAA', 'EDDS', '100', 'Vitabu'),
('qwe2', 'Atomic Habits', 'James Clear', '1000', 'Penguin'),
('qweghj3', 'Thinking Ways', 'Anna Todd', '1000', 'Eagle'),
('sd57', 'Hello', 'Adelle', '1000', 'Penguin'),
('tuuy78', 'Blessings Yard', 'Joeboy', '1000', 'Pearl'),
('ty8678', 'Pink Things', 'Amanda J', '1000', 'Eagle');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrowId` int(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `borrowDate` date NOT NULL,
  `returnDate` date NOT NULL,
  `isbn` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrowId`, `username`, `id`, `title`, `borrowDate`, `returnDate`, `isbn`) VALUES
(17, 'Nathan', 9, 'From zero to hero', '2022-03-01', '2022-03-04', 0),
(18, 'Blue', 13, 'From zero to hero', '2022-03-04', '2022-03-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `created_at`) VALUES
(1, 'fraciah', '$2y$10$Tw4bp.QhDvpLu66d39TQReprOYGep2UODvv7aMOFcLpYI8Cy.RGEu', 0, '2022-02-24 17:49:42'),
(2, 'Karagu', '$2y$10$N9E1M2SUN8BUWUNmHOqgjuH3dM6qMhm6HXxY1ipE0YiChcFEnQGIS', 0, '2022-02-24 19:05:54'),
(3, 'Amina', '$2y$10$0qAms/YpeV1dgiLQWCocIe2YFk/L15mVFnzL1T9Tnk4esDe97.Ps.', 0, '2022-02-25 14:16:57'),
(4, 'Leila', '$2y$10$Hb/tgisgaGwseTzHhg7M1enjrlvGfPOi9lK14Oti7avTyP0/9d4Hu', 0, '2022-02-28 14:15:58'),
(5, 'DionPat', '$2y$10$8qBqC8UA7bO3KddASIZiIO6kdzCVsm/13O0z3X1Xk3gCylFhSRxV6', 0, '2022-02-28 16:03:40'),
(6, 'Nicole Jones', '$2y$10$eNHY4WodWq8C3q.94MrMWeAqqq1DMIX5XEVh85U4bOWqdUcMGPZhi', 0, '2022-02-28 16:08:52'),
(7, 'Mary', '$2y$10$8FJpeFVSM3EuCdtnfyjajutRkOIiuzTCSryU0Uk3BdPaKMKlHZfB6', 0, '2022-03-02 17:59:39'),
(8, 'Mary Jane', '$2y$10$HguNhK6IYp8ARnijI8OzJOBWNktet/WXXqMEvuKh5u/./TNvsYw3O', 0, '2022-03-02 18:00:26'),
(9, 'Nathan', '$2y$10$6DjSngPd7O4i8vE2Ad/jcOCzr.WjOaG/XTVSvVE/3qv4mkdH.pw36', 0, '2022-03-03 14:42:27'),
(10, 'Amina H', '$2y$10$H44Stmh3x2r7yv.gCcNFF.0bN1DLNY9KpJa61c9mXiU5FEiu7Hs0u', 0, '2022-03-04 12:15:35'),
(11, 'admin', '$2y$10$/f/p02nuNbjYncPkSU0lPelaFdbJDqhXHgKntXF4rf8EoUgGUYAsO', 1, '2022-03-06 21:47:09'),
(12, 'fk', '$2y$10$8CO6UP2D8yKh8aLnBDzCFuohkXp5nQ2zCVVzbHu7S3Ujuxo3vqtRe', 0, '2022-03-06 22:33:29'),
(13, 'Blue', '$2y$10$13Bt..oInAymxwJSLQ2RuO7fjy1BP4zuFHDsWQwzdFkEG0cff9Ywm', 0, '2022-03-09 12:17:36'),
(14, 'Adelle Onyango', '$2y$10$aBPMelHq2MhUprpyb5/yVufUg7qxoNUk6AKKNkZr.vplvrNFDp0DG', 0, '2022-03-10 01:40:48'),
(15, 'Nathan Murimi', '$2y$10$2K89yJghs7MTdbxgGbzbUOGz/1Bxca6DgaGi7vE0zFk8k6Uc.8kp6', 0, '2022-03-10 08:34:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrowId`);

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
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrowId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
