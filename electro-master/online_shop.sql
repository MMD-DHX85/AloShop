-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2023 at 09:06 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--
CREATE DATABASE IF NOT EXISTS `online_shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci;
USE `online_shop`;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `Path` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Pro_Name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `Pro_Code` int NOT NULL,
  UNIQUE KEY `Path` (`Path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Path`, `Pro_Name`, `Pro_Code`) VALUES
('img\\store\\1000.png', 'ProArt Studiobook Pro 16 OLED (W7604)', 1000),
('img\\store\\1001.png', 'Vivobook Pro 16X OLED ( N7600, 12th Gen Intel )', 1001),
('img\\store\\1002.png', 'Zenbook Pro 16X OLED (UX7602)', 1002),
('img\\store\\1003.png', 'ExpertBook L1 L1500', 1003),
('img\\product\\1000-1.png', 'ProArt Studiobook Pro 16 OLED (W7604)', 1000),
('img\\product\\1000-2.png', 'ProArt Studiobook Pro 16 OLED (W7604)', 1000),
('img\\product\\1000-3.png', 'ProArt Studiobook Pro 16 OLED (W7604)', 1000),
('img\\product\\1000-4.png', 'ProArt Studiobook Pro 16 OLED (W7604)', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Pro_Code` int NOT NULL,
  `Pro_Name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `Pro_Brand` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `Pro_Intro` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `Pro_Desc` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `Pro_Detail` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Pro_Cat` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT 'Laptop',
  `Pro_Price` int NOT NULL DEFAULT '0',
  `Pro_Qty` int NOT NULL DEFAULT '0',
  `Off` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Pro_Code`),
  UNIQUE KEY `Pro_Code` (`Pro_Code`)
) ENGINE=MyISAM AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pro_Code`, `Pro_Name`, `Pro_Brand`, `Pro_Intro`, `Pro_Desc`, `Pro_Detail`, `Pro_Cat`, `Pro_Price`, `Pro_Qty`, `Off`) VALUES
(1000, 'ProArt Studiobook Pro 16 OLED (W7604)', 'Asus', 'The new ProArt Studiobook Pro 16 OLED is a powerful mobile workstation that exceeds all expectations and goes far beyond the extraordinary. You can use it for gaming an graphic design as well!', 'Its unstoppable 13th Gen Intel® Core™ i9-13980HX processor, pro-grade NVIDIA RTX™ 3000 Ada Generation Laptop GPU, vast amounts of memory and ultrafast storage will supercharge your content creation workflow and let your imagination do what it does best. The certified color-accurate 16-inch 3.2K 120 Hz OLED touchscreen will do full justice to your creative vision, and you\'ll enjoy unrivaled precision control of your apps with the large, stylus-compatible haptic touchpad and intuitive ASUS Dial rotary control. Take your creativity to the next level with ProArt Studiobook Pro 16 OLED.', '<ul><li class=\"detail\">Windows 11 Pro - ASUS recommends Windows 11 Pro for business</li>\n<li>Intel® Core™ i9-13980HX processor</li>\n<li>NVIDIA RTX™ 3000 Ada Generation Laptop GPU</li>\n<li>16” 3.2K 120 Hz OLED 16:10 display</li>\n<li>Up to 64 GB two SODIMM slots memory</li>\n<li>Up to 8 TB two M.2 slots PCIe® SSD</li>\n<li>ASUS Dial</li>\n<li>Thunderbolt™ 4 USB-C®</li></ul>', 'Laptop', 1000, 10, 10),
(1001, 'Vivobook Pro 16X OLED ( N7600, 12th Gen Intel )', 'ASUS', '', 'Windows 11 Pro - ASUS recommends Windows 11 Pro for business\r\nUp to 12th Gen Intel Core™ i9 processor\r\nUp to NVIDIA® GeForce® RTX3070 Ti\r\n2.5K 165Hz IPS display\r\nUp to DDR5 32GB 4800MHz\r\nUp to 2TB SSD\r\nASUS IceCool Pro thermal technology', '', 'Laptop', 2000, 1, 15),
(1002, 'Zenbook Pro 16X OLED (UX7602)', 'ASUS ', '', 'Windows 11 Pro - ASUS recommends Windows 11 Pro for business\r\nASUS Supernova SoM design\r\n13th gen Intel® Core™ i9-13905H processor\r\nNVIDIA® GeForce® RTX 4080\r\n32 GB LPDDR5X RAM and 2 TB SSD storage\r\n16\" 3.2K 120Hz OLED NanoEdge display\r\nLong-lasting 96 Wh battery\r\nASUS Dial', '', 'Laptop', 2600, 1, 10),
(1003, 'ExpertBook L1 L1500', 'ASUS', '', 'Windows 11 Pro - ASUS recommends Windows 11 Pro for business, Free Upgrade to Windows 11¹ (when available, see below)\r\nAMD Radeon™ Graphics\r\nUp to 32 GB memory\r\nUp to 2 TB HDD + 1TB SSD storage\r\nUp to 15\" FHD NanoEdge display\r\nNanoEdge 90% screen-to-body ratio\r\nOptional fingerprint sensor login', '', 'Laptop', 800, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `First_Name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Last_Name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Username` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `Type` int NOT NULL DEFAULT '2',
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First_Name`, `Last_Name`, `Username`, `Password`, `Type`, `Email`) VALUES
('Mohamad', 'Hatami', 'mohamad844', '0640971180', 1, 'mohammad8448145@gmail.com'),
('بب', 'بب', 'ببب', 'ببب', 2, 'testtest@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
