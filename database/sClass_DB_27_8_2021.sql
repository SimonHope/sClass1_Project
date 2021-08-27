-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 12:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'simon', 'hope', 'admin', '$Re6q3ux$%^Uzxai36B', 'superadmin', '2021-08-27 16:02:15', '2021-08-08 08:46:21', '2021-08-08 08:46:21'),
(2, 'Mhee', 'Yai', 'Moonlight', 'CYH7dT8K4x%p*34WnJI', 'admin', '2021-08-08 09:18:57', '2021-08-08 09:18:57', '2021-08-08 09:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` enum('true','false') NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `updated_at`, `created_at`) VALUES
(1, 'เกมแนว FPS คืออะไร', 'FPS ย่อมาจาก First-person shooter หรือที่เรียกกันว่า เกมยิงมุมมองบุคคลที่หนึ่ง ลักษณะของเกมยิงประเภทนี้จะนำเสนอความสมจริงในการเล่น', '<p><span style=\"font-size:26px\"><strong>เกมแนว FPS คืออะไร</strong></span><br />\r\n<span style=\"font-size:16px\">FPS&nbsp;ย่อมาจาก&nbsp;First-person shooter&nbsp;หรือที่เรียกกันว่า&nbsp;เกมยิงมุมมองบุคคลที่หนึ่ง ลักษณะของเกมยิงประเภทนี้จะนำเสนอความสมจริงในการเล่นด้วยมุมกล้องที่ผู้เล่นจะเห็นเพียงแค่มือที่ใช้ถืออาวุธของตัวละครให้อารมณ์เหมือนกับกำลังสวมบทตัวละครนั้นจริงๆ ทั้งการเผชิญหน้ากับศัตรูที่เราไม่อาจทันตั้งตัวเพิ่มความตื่นเต้นและสนุกสุดมันส์กลายเป็นแนวเกมต้นแบบให้กับเกมในยุคหลังจนเป็นที่ยอมรับและเป็นที่นิยมอย่างแพร่หลาย&nbsp;ตัวอย่างเกมที่ใช้มุมมองแบบ FPS อาทิเช่น&nbsp;Counter Strike, Special Force และ Sudden Attack</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:24px\">10 อันดับเกม FPS</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:16px\">CALL TO ARMS</span></li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">QUAKE CHAMPIONS</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">PALADINS: CHAMPIONS OF THE REALM</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">TEAM FORTRESS 2</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">BLACK SQUAD</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">WARFACE</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">UNREAL TOURNAMENT</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">PLANETSIDE 2</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">MECHWARRIOR ONLINE</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2><span style=\"font-size:16px\">RING OF ELYSIUM</span></h2>\r\n	</li>\r\n	<li><span style=\"font-size:16px\">CSGO</span></li>\r\n</ol>\r\n', '16293135730281.jpg', 'all,fps', 'true', '2021-08-20 23:22:00', '2021-07-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`id`, `ip`, `device`, `os`, `browser`, `page`, `created_at`) VALUES
(6, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 11:29:53'),
(7, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 11:29:58'),
(8, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 11:30:01'),
(9, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 11:30:04'),
(10, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 11:30:06'),
(12, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:27:13'),
(13, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:27:16'),
(14, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 17:27:18'),
(15, '127.0.0.1', 'iPhone', 'iPhone', 'orthers browser', 'index', '2018-12-31 17:27:19'),
(16, '127.0.0.1', 'Android Phone', 'Android', 'Chrome', 'contact', '2018-12-31 17:27:20'),
(17, '::1', 'Android Phone', 'Android', 'Chrome', 'blog', '2018-12-31 17:28:29'),
(18, '::1', 'Android Phone', 'Android', 'Chrome', 'blog', '2018-12-31 17:28:32'),
(19, '::1', 'Android Phone', 'Android', 'Chrome', 'blog', '2018-12-31 17:28:33'),
(20, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:28:35'),
(21, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:28:35'),
(22, '::1', 'Android Phone', 'Android', 'Chrome', 'blog', '2018-12-31 17:28:36'),
(23, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:28:37'),
(24, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:28:45'),
(25, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 17:28:48'),
(26, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:29:03'),
(27, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:44:52'),
(28, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:44:56'),
(29, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 17:45:03'),
(30, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:45:08'),
(31, '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 17:45:14'),
(32, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:34:53'),
(33, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:34:56'),
(34, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:34:58'),
(35, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:35:00'),
(36, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:35:00'),
(37, '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:35:20'),
(38, '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:35:27'),
(39, '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:35:29'),
(40, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:41:51'),
(41, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:41:54'),
(42, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:41:55'),
(43, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:41:56'),
(44, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:41:56'),
(45, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:41:58'),
(46, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:42:00'),
(47, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:42:01'),
(48, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:42:04'),
(49, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:42:07'),
(50, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:50:51'),
(51, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:50:53'),
(52, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:51:06'),
(53, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:51:07'),
(54, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:51:08'),
(55, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:51:09'),
(56, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:51:10'),
(57, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:51:10'),
(58, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:51:16'),
(59, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:52:10'),
(60, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:52:18'),
(61, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:52:25'),
(62, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:52:25'),
(63, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:52:26'),
(64, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:52:30'),
(65, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 21:00:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
