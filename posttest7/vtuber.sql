-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 02:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtuber`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ytname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `debut` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `nama`, `ytname`, `status`, `debut`, `gambar`) VALUES
(2, 'Tokoyami Towa', 'Towa ch.', 'Hololive', '', ''),
(4, 'Amatsuka Uto', 'Uto ch.', 'Indie', '', ''),
(6, 'Sakura Miko', 'Miko ch.', 'Hololive', '', ''),
(8, 'Mika Melatika', 'Mika Melatika [NIJISANJI]', 'Nijisanji', '', ''),
(9, 'Shylily', 'Shylily', 'Indie', '', ''),
(10, 'kson', 'kson', 'Vshojo', '', ''),
(11, 'Ironmouse', 'Ironmouse', 'Vshojo', '2017-08-04', 'Ironmouse.png'),
(12, 'Bonnievier Pranaja', 'Bonnivier Pranaja [NIJISANJI]', 'Nijisanji', '', ''),
(14, 'Siska Leontyne', 'Siska Leontyne [NIJISANJI]', 'Nijisanji', '2020-08-08', 'Siska Leontyne.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `pwd`) VALUES
(1, 'Rivan Abdillah', 'Nakiripan', '$2y$10$aA4iJ.pbyIgtL041gr7c3efagF7Z8vunLXilSY4RZ72mVvcbgIssy'),
(2, 'Rhefa', 'Shrkm', '$2y$10$H8o5ETwnLUINikbdDKY3K.5husu8uCSlOmqvAopAe0iKl0sKm/j3C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
