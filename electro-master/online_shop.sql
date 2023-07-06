-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2023 at 11:58 PM
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
  `Pro_Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
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
('img\\product\\1000-4.png', 'ProArt Studiobook Pro 16 OLED (W7604)', 1000),
('img\\product\\1001-3.png', 'Vivobook Pro 16X OLED ( N7600, 12th Gen Intel )', 1001),
('img\\product\\1001-1.png', 'Vivobook Pro 16X OLED ( N7600, 12th Gen Intel )', 1001),
('img\\product\\1001-2.png', 'Vivobook Pro 16X OLED ( N7600, 12th Gen Intel )', 1001),
('img\\product\\1001-4.png', 'Vivobook Pro 16X OLED ( N7600, 12th Gen Intel )', 1001),
('img\\product\\1001-5.png', 'Vivobook Pro 16X OLED ( N7600, 12th Gen Intel )', 1001),
('img\\product\\1002-1.png', 'Zenbook Pro 16X OLED (UX7602)', 1002),
('img\\product\\1002-2.png', 'Zenbook Pro 16X OLED (UX7602)', 1002),
('img\\product\\1002-3.png', 'Zenbook Pro 16X OLED (UX7602)', 1002),
('img\\product\\1002-4.png', 'Zenbook Pro 16X OLED (UX7602)', 1002),
('img\\product\\1002-5.png', 'Zenbook Pro 16X OLED (UX7602)', 1002),
('img\\product\\1003-1.png', 'ExpertBook L1 L1500', 1003),
('img\\product\\1003-2.png', 'ExpertBook L1 L1500', 1003);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Order_Num` int NOT NULL,
  `UserName` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `Pro_Codes` varchar(70) COLLATE utf8mb4_persian_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `Cost` int NOT NULL,
  PRIMARY KEY (`Order_Num`),
  UNIQUE KEY `Order_Num` (`Order_Num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Pro_Code` int NOT NULL,
  `Pro_Name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `Pro_Brand` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci DEFAULT NULL,
  `Pro_Intro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Pro_Desc` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `Pro_Detail` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Pro_Cat` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL DEFAULT 'Laptop',
  `Pro_Price` int NOT NULL DEFAULT '0',
  `Pro_Qty` int NOT NULL DEFAULT '0',
  `Off` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Pro_Code`),
  UNIQUE KEY `Pro_Code` (`Pro_Code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pro_Code`, `Pro_Name`, `Pro_Brand`, `Pro_Intro`, `Pro_Desc`, `Pro_Detail`, `Pro_Cat`, `Pro_Price`, `Pro_Qty`, `Off`) VALUES
(1000, 'ProArt Studiobook Pro 16 OLED (W7604)', 'Asus', 'The new ProArt Studiobook Pro 16 OLED is a powerful mobile workstation that exceeds all expectations and goes far beyond the extraordinary. You can use it for gaming an graphic design as well!', 'Its unstoppable 13th Gen Intel® Core™ i9-13980HX processor, pro-grade NVIDIA RTX™ 3000 Ada Generation Laptop GPU, vast amounts of memory and ultrafast storage will supercharge your content creation workflow and let your imagination do what it does best. The certified color-accurate 16-inch 3.2K 120 Hz OLED touchscreen will do full justice to your creative vision, and you\'ll enjoy unrivaled precision control of your apps with the large, stylus-compatible haptic touchpad and intuitive ASUS Dial rotary control. Take your creativity to the next level with ProArt Studiobook Pro 16 OLED.', '<ul><li>Windows 11 Pro - ASUS recommends Windows 11 Pro for business</li>\n<li>Intel® Core™ i9-13980HX processor</li>\n<li>NVIDIA RTX™ 3000 Ada Generation Laptop GPU</li>\n<li>16” 3.2K 120 Hz OLED 16:10 display</li>\n<li>Up to 64 GB two SODIMM slots memory</li>\n<li>Up to 8 TB two M.2 slots PCIe® SSD</li>\n<li>ASUS Dial</li>\n<li>Thunderbolt™ 4 USB-C®</li></ul>', 'Laptop', 1000, 10, 10),
(1001, 'Vivobook Pro 16X OLED ( N7600, 12th Gen Intel )', 'ASUS', 'Ignite your creativity with Vivobook Pro 16X OLED, the uncompromising powerhouse for discovering your potential and exploring the future!', 'Vivobook Pro 16X OLED brings you the speed and accuracy you need to realize your vision, with a 16-inch NanoEdge 4K OLED1 display, 12th Generation Intel® H Series CPU, and NVIDIA® GeForce RTX™ 3050 Ti graphics2. The exclusive ASUS DialPad gives you precise and intuitive control of your creative tools, and the dual-fan cooling design lets you work in undisturbed peace. Vivobook Pro 16X OLED unlocks the door to your creative future.', '<ul> <li>Windows 11 Pro - ASUS recommends Windows 11 Pro for business</li> <li>Up to 12th Gen Intel Core™ i7 processor</li> <li>Up to NVIDIA<sup>®</sup> GeForce<sup>®</sup> RTX3050 Ti</li> <li>Up to 4K OLED display</li> <li>Up to 32GB LPDDR5</li> <li>Up to 1TB SSD</li> <li>ASUS IceCool Plus thermal technology</li> </ul>', 'Laptop', 2000, 1, 15),
(1002, 'Zenbook Pro 16X OLED (UX7602)', 'ASUS ', 'Zenbook Pro 16X OLED is a no-compromise creator laptop with a wealth of innovative design features and a brand-new all-metal design.', 'Inside, it features a new breakthrough ultra-compact ASUS Supernova system-on-module (SoM) design that enables ultra-powerful performance from the Intel® Core™ i9-13905H processor, NVIDIA® GeForce RTX™ 4080 GPU and LPDDR5X DRAM with a 7467MHz memory frequency. Outside, there’s a world-leading 16:10 3.2K 120Hz OLED HDR NanoEdge touchscreen1. The new Active Aerodynamic System Ultra (AAS Ultra) mechanism powers the auto-tilting keyboard that ensures a comfortable typing angle, and AAS Ultra also enhances system cooling for maximum performance. There’s an all-new White RGB intelligent lighting system that enables smart interactivity features. The innovative ASUS Dial allows precise fingertip control of creative parameters in Adobe® apps, while the new larger ASUS NumberPad features haptic feedback and enhanced pressure sensitivity for easier number entry. Zenbook Pro 16X OLED redefines what a creator laptop should be, and helps you take your creativity to the next level.ASUS Supernova SoM design\n13th gen Intel® Core™ i9-13905H processor\nNVIDIA® GeForce® RTX 4080\n32 GB LPDDR5X RAM and 2 TB SSD storage\n16\" 3.2K 120Hz OLED NanoEdge display\nLong-lasting 96 Wh battery\nASUS Dial', '<ul> <li>Windows 11 Pro - ASUS recommends Windows 11 Pro for business</li> <li>ASUS Supernova SoM design</li> <li>13th gen Intel<sup>®</sup> Core™ i9-13905H processor</li> <li>NVIDIA<sup>®</sup> GeForce<sup>®</sup> RTX 4080</li> <li>32 GB LPDDR5X RAM and 2 TB SSD storage</li> <li>16\" 3.2K 120Hz OLED NanoEdge display</li> <li>Long-lasting 96 Wh battery</li> <li>ASUS Dial</li> </ul>', 'Laptop', 2600, 1, 10),
(1003, 'ExpertBook L1 L1500', 'ASUS', 'ASUS ExpertBook L1 is tailored for business, making it the smart choice for ambitious startups, established education organizations and growing firms of all sizes.', ' It boasts high performance, military-grade durability and extensive customization to empower your business. It’s also engineered to confidently handle whatever tasks come your way, with a full set of I/O ports, speedy WiFi 6 and cutting-edge AI noise-canceling technology. ExpertBook L1 streamlines your workflow to keep you productive.\nAMD Radeon™ Graphics\nUp to 32 GB memory\nUp to 2 TB HDD + 1TB SSD storage\nUp to 15\" FHD NanoEdge display\nNanoEdge 90% screen-to-body ratio\nOptional fingerprint sensor login', '<ul> <li>Windows 11 Pro - ASUS recommends Windows 11 Pro for business, Free Upgrade to Windows 11¹ (when available, see below)</li> <li>AMD Radeon<sup>™</sup> Graphics</li> <li>Up to 32 GB memory</li> <li>Up to 2 TB HDD + 1TB SSD storage</li> <li>Up to 15 FHD NanoEdge display</li> <li>NanoEdge 90% screen-to-body ratio</li> <li>Optional fingerprint sensor login</li> </ul>', 'Laptop', 800, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `First_Name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Last_Name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `Type` int NOT NULL DEFAULT '2',
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First_Name`, `Last_Name`, `Username`, `Password`, `Type`, `Email`) VALUES
('Mohamad', 'Hatami', 'mohamad844', '0640971180', 1, 'mohammad8448145@gmail.com'),
('Mohamad', 'Hatami', 'mohammad844', '0640971180', 2, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
