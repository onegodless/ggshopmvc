-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2018 at 07:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ggshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` tinytext NOT NULL,
  `plataforms` tinytext NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `image` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `plataforms`, `price`, `description`, `image`) VALUES
(1, 'Batman 1', 'XBOX ONE, PS4', '22.45', 'Batman 1 game.', 'ggshop/imgs/games/batman_1.jpeg'),
(2, 'Batman 2', 'XBOX ONE, PS4', '30.85', 'Batman 2 game.', 'ggshop/imgs/games/batman_1.jpeg'),
(3, 'Batman 3', 'XBOX ONE, PS4', '32.95', 'Batman 3 game.', 'ggshop/imgs/games/batman_1.jpeg'),
(4, 'Batman 4', 'XBOX ONE, PS4', '42.30', 'Batman 3 game.', 'ggshop/imgs/games/batman_1.jpeg'),
(5, 'Batman 5', 'XBOX ONE, PS4', '48.15', 'Batman 5 game.', 'ggshop/imgs/games/batman_1.jpeg'),
(6, 'Batman 6', 'XBOX ONE, PS4', '55.65', 'Batman 6 game.', 'ggshop/imgs/games/batman_1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
