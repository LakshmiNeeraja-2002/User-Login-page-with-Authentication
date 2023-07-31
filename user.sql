-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 30, 2023 at 03:37 PM
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
-- Database: `registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `phone_number`, `password`, `profile_pic`) VALUES
('Devi', 'Lokarapu', 'devi123@gmail.com', '9381881519', 'qwer45', ''),
('Devi', 'Lokarapu', 'devi123@gmail.com', '9381881519', 'qwer45', ''),
('Devi', 'Lokarapu', 'devi123@gmail.com', '9381881519', 'qwer45', 0x646f776e6c6f61642e6a7067),
('Devi', 'Lokarapu', 'devi123@gmail.com', '9381881519', 'qwer45', 0x646f776e6c6f61642e6a7067),
('Devi', 'Lokarapu', 'devi123@gmail.com', '9381881519', 'qwer45', 0x646f776e6c6f61642e6a7067),
('Devi', 'Lokarapu', 'devi123@gmail.com', '9381881519', 'qwer45', 0x646f776e6c6f61642e6a7067),
('Devi', 'Lokarapu', 'devi123@gmail.com', '9381881519', 'qwer45', 0x646f776e6c6f61642e6a7067),
('Devi', 'Lokarapu', 'devi123@gmail.com', '9381881519', 'qwer45', 0x646f776e6c6f61642e6a7067),
('Neeraja', 'Guturu', 'neeraja@gmail.com', '9381881519', 'Neeraja746', 0x42616e6e65722e706e67),
('Yamini', 'Gosula', 'yamini123@gmail.com', '6304229424', 'Yamini123', 0x42616e6e65722e706e67),
('Nandini ', 'Gorripati', 'nandini123@gmail.com', '8341712772', 'Nandini34', 0x6973746f636b70686f746f2d313335353632343332342d3130323478313032342e6a7067),
('Tejaswini ', 'Pedamarla', 'smileyneeraja123@gmail.com', '9381881519', 'Teju76556', 0x646f776e6c6f61642e6a7067),
('Lakshmi', 'Guturu', 'smileyneeraja123@gmail.com', '9381881519', 'Neeru746', 0x42616e6e65722e706e67);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
