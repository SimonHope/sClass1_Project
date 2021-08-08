-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 09:08 AM
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
(1, 'เกมแนว FPS คืออะไร', 'FPS&nbsp;ย่อมาจาก&nbsp;First-person shooter&nbsp;หรือที่เรียกกันว่า&nbsp;เกมยิงมุมมองบุคคลที่หนึ่ง ลักษณะของเกมยิงประเภทนี้จะนำเสนอความสมจริงในการเล่น', '<h1><span style=\"font-size:26px\"><strong>เกมแนว FPS คืออะไร</strong></span><br /></h1>\r\n                        <span style=\"font-size:16px\">FPS&nbsp;ย่อมาจาก&nbsp;First-person shooter&nbsp;หรือที่เรียกกันว่า&nbsp;เกมยิงมุมมองบุคคลที่หนึ่ง ลักษณะของเกมยิงประเภทนี้จะนำเสนอความสมจริงในการเล่นด้วยมุมกล้องที่ผู้เล่นจะเห็นเพียงแค่มือที่ใช้ถืออาวุธของตัวละครให้อารมณ์เหมือนกับกำลังสวมบทตัวละครนั้นจริงๆ ทั้งการเผชิญหน้ากับศัตรูที่เราไม่อาจทันตั้งตัวเพิ่มความตื่นเต้นและสนุกสุดมันส์กลายเป็นแนวเกมต้นแบบให้กับเกมในยุคหลังจนเป็นที่ยอมรับและเป็นที่นิยมอย่างแพร่หลาย&nbsp;ตัวอย่างเกมที่ใช้มุมมองแบบ FPS อาทิเช่น&nbsp;Counter Strike, Special Force และ Sudden Attack</span>\r\n                        <br>\r\n                        <br>\r\n                        <p><span style=\"font-size:24px\">10 อันดับเกม FPS</span></p>\r\n                        \r\n                        <ol>\r\n                            <li><span style=\"font-size:16px\">CALL TO ARMS</span></li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">QUAKE CHAMPIONS</span></h2>\r\n                            </li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">PALADINS: CHAMPIONS OF THE REALM</span></h2>\r\n                            </li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">TEAM FORTRESS 2</span></h2>\r\n                            </li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">BLACK SQUAD</span></h2>\r\n                            </li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">WARFACE</span></h2>\r\n                            </li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">UNREAL TOURNAMENT</span></h2>\r\n                            </li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">PLANETSIDE 2</span></h2>\r\n                            </li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">MECHWARRIOR ONLINE</span></h2>\r\n                            </li>\r\n                            <li>\r\n                            <h2><span style=\"font-size:16px\">RING OF ELYSIUM</span></h2>\r\n                            </li>\r\n                        </ol>', 'img7.jpg', 'all,fps', 'true', '2021-07-19 00:00:00', '2021-07-19 00:00:00'),
(2, 'MMORPG คืออะไร', 'MMORPG คือเกมสวมบทบาท', 'เกมแนว RPG คืออะไร\r\nก่อนจะทำความรู้จักกับชื่อเต็มของ MMORPG เรามารู้จัก 3 ตัวหลังกันก่อนครับว่าเกมแนว RPG ที่เราคุ้นๆหูมันคืออะไร เกมแนว RPG ย่อมาจากคำว่า Role Playing Game หมายถึงเกมที่เราต้องเล่นตามบทบาทของเกม กล่าวคือเล่นตามท้องเรื่องที่เกมวางระบบเอาไว้เรียบร้อยแล้ว หากเอาคำว่า Role มาแปลที่แปลว่า “บทบาท” ก็จะได้คำแปลตรงๆของ Role Playing Game บทบาทการเล่นเกม หรือเล่นตามบทบาท นั้นเอง', 'img8.jpg', 'all,mmorpg', 'true', '2021-07-18 00:00:00', '2021-07-18 00:00:00'),
(3, 'MOBA คืออะไร', 'จจุบันตลาดเกมได้แตกสายสารพัดแนวเกมออกมามากมาย จนทำให้เกมที่เกิดใหม่ๆ บางเกมไม่ปรากฏแนวทางเกมเป็นที่แน่ชัด ทำให้มีการเรียกแนวเกมบางเกมแบบมั่วปนไปมา หรือไม่ค่อยเคลียร์ในแนวเกมสักเท่าไร ซึ่งในช่วงหลายปีที่ผ่านมานี้ก็มีแนวเกมใหม่เกิดขึ้นมา นั่นคือเกมแนว MOBA', 'แนวเกมใหม่เกิดขึ้นมา นั่นคือเกมแนว MOBA (Multiplayer Online Battle Arena) ซึ่งเป็นแนวเกมที่ถูกอ้างอิงจาก Multiplayer Map ในตำนานของ Warcraft III ที่ชื่อว่า Defense of the Ancients หรือ DotA นั่นเอง และนอกจากคำว่า MOBA แล้ว เกมในแนว DotA   ยังถูกเรียกในชื่ออื่นๆ อีกมากมายเช่น TTRPG (Tactical Team-based Role Playing Game ) หรือบางทีก็เรียกว่า ARTS             (Action Real Time Strategy) โดยชื่อเหล่านี้ถูกอ้างอิงจาก Multiplayer Map ที่ชื่อ Aeon of Strife หรือ AoS ของ StarCraft นั่นเอง\r\n\r\n     เพื่อนๆ หลายคนที่อาจจะไม่เคยสัมผัสกับเกมแนว MOBA มาก่อน อาจจะเคยได้ยินชื่อเกมแนวนี้มาบ้าง เช่น Demigod,      League of Legends (LoL) หรือ Heroes of Newerth (HoN) ซึ่งเป็นเกม MOBA รุ่นใหม่ที่แตกไอเดียมากจากรุ่นใหญ่อย่าง DotA    ซึ่งถือได้ว่าเป็นแม่แบบของเกมแนว MOBA และแต่ละเกมนั้นก็มีกลุ่มฐานผู้เล่นที่เหนียวแน่นอยู่ไม่น้อยเลยเช่นกัน โดยหลักการแล้ว การจัดประเภทของเกมว่าจะเป็น MOBA หรือไม่นั้นจะต้องมีองค์ประกอบของฟีเจอร์ที่แสดงความเป็น MOBA อยู่ดังนี้\r\n\r\n     1. ผู้เล่นแต่ละคนจะควบคุมเพียงแค่ 1 Unit (ตัวละคร) เท่านั้น โดยที่ตัวละครนั้นๆ จะมีสกิลให้ใช้ที่หลากหลายมากมาย รวมถึงจะมีการแบ่งฝั่งในการเล่นอย่างชัดเจน โดยจะต้องอยู่ฝั่งใดฝั่งหนึ่งเท่านั้น\r\n\r\n     2. แต่ละทีมจะต้องมีฐานที่จะต้องคอยป้องกัน แต่ในขณะเดียวกันก็จะต้องบุกไปทำลายฐานฝ่ายตรงข้ามด้วย\r\n\r\n     3. ภายในทีมจะมีสมาชิก 5 คน และแต่ละคนจะควบคุมเพียงแค่ตัวละครของตัวเองเท่านั้น ไม่สามารถควบคุมตัวละครของสมาชิกอื่นๆ ภายในทีมเดียวกันได้', 'img9.jpg', 'all,moba', 'true', '2021-07-07 00:00:00', '2021-07-07 00:00:00');

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

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `detail`, `created_at`) VALUES
(1, 'simonhope', '090000090909099', 'testestest@testestest', 'dskgjdsklgtestesteset', '2021-07-13'),
(2, 'dddd', '123213214325', 'asdfdsaf@example', 'tyutyrutruty', '2021-07-30'),
(3, 'test', '09-23804534', 'fgdhgfdh@gdfhgfdh', 'dfsgdsfgdsf', '2021-07-31'),
(4, 'nut log', '0987205644', 'admid@test.com', 'สวัสดีครับ สนใจอยากทำเว็บครับ', '2021-07-31'),
(5, 'Simon', '0988882221', 'test@emam', 'สวัสดีครับ สนใจครับ', '2021-07-31'),
(6, 'Simon', '0988882221', 'test@emam', 'สวัสดีครับ สนใจครับ อยากเรียนครับ', '2021-07-31'),
(7, 'Simon', '0988882221', 'admid@test.com', 'สวัสดีครับสนใจเรียนครับ', '2021-07-31');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
