-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2020 at 10:34 AM
-- Server version: 5.5.64-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meetha63`
--

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` int(11) NOT NULL COMMENT 'ID หมวดหมู่',
  `name` varchar(255) NOT NULL COMMENT 'หมวดหมู่',
  `create_date` date NOT NULL COMMENT 'วันที่สร้าง',
  `cat_id` int(11) DEFAULT NULL COMMENT 'id ha_category'
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `create_date`, `cat_id`) VALUES
(94, 'เอกสารประชุมทีม FAR เดือน ตุลาคม 2562', '2020-04-15', 1),
(95, 'เอกสารประชุมทีม FAR เดือน พฤศจิกายน 2562', '2020-04-15', 2),
(96, 'เอกสารประชุมทีม FAR เดือน ธันวาคม 2562', '2020-04-15', 3),
(97, 'เอกสารประชุมทีม FAR เดือน มกราคม 2563', '2020-04-15', 4),
(98, 'เอกสารประชุมทีม FAR เดือน กุมภาพันธ์ 2563', '2020-04-15', 5),
(99, 'เอกสารประชุมทีม FAR เดือน มีนาคม 2563', '2020-04-15', 6),
(100, 'เอกสารประชุมทีม FAR เดือน เมษายน 2563', '2020-04-15', 7),
(101, 'เอกสารประชุมทีม FAR เดือน พฤษภาคม 2563', '2020-04-15', 8),
(102, 'เอกสารประชุมทีม FAR เดือน มิถุนายน 2563', '2020-04-15', 9),
(103, 'เอกสารประชุมทีม FAR เดือน กรกฏาคม 2563', '2020-04-15', 10),
(104, 'เอกสารประชุมทีม FAR เดือน สิงหาคม 2563', '2020-04-15', 11),
(105, 'เอกสารประชุมทีม FAR เดือน กันยายน 2563', '2020-04-15', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ha_category`
--

CREATE TABLE IF NOT EXISTS `ha_category` (
  `id` int(11) NOT NULL COMMENT 'ID หมวดหมู่',
  `name` varchar(255) NOT NULL COMMENT 'หมวดหมู่',
  `create_date` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_category`
--

INSERT INTO `ha_category` (`id`, `name`, `create_date`) VALUES
(1, 'ตุลาคม 2562', '2019-05-08'),
(2, 'พฤศจิกายน 2562', '2019-05-08'),
(3, 'ธันวาคม 2562', '2019-05-08'),
(4, 'มกราคม 2563', '2019-05-08'),
(5, 'กุมภาพันธ์ 2563', '2020-02-19'),
(6, 'มีนาคม 2563', '2020-02-19'),
(7, 'เมษายน 2563', '2020-02-19'),
(8, 'พฤษภาคม 2563', '2020-02-19'),
(9, 'มิถุนายน 2563', '2020-02-19'),
(10, 'กรกฏาคม 2563', '2020-02-19'),
(11, 'สิงหาคม 2563', '2020-02-19'),
(12, 'กันยายน 2563', '2020-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `ha_documents`
--

CREATE TABLE IF NOT EXISTS `ha_documents` (
  `id` int(11) NOT NULL,
  `ref` varchar(50) DEFAULT NULL COMMENT 'หลายเลข referent สำหรับอัพโหลดไฟล์ ajax',
  `title` varchar(255) DEFAULT NULL COMMENT 'ชื่องาน',
  `description` text COMMENT 'รายละเอียด',
  `covenant` varchar(255) DEFAULT NULL COMMENT 'file',
  `docs` text COMMENT 'เอกสารประกอบ',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'สร้างวันที่',
  `cat_id` int(11) DEFAULT NULL COMMENT 'ID หมวดหมู่หลัก',
  `group_id` int(11) DEFAULT NULL COMMENT 'ID หมวดหมู่ย่อย'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_documents`
--

INSERT INTO `ha_documents` (`id`, `ref`, `title`, `description`, `covenant`, `docs`, `create_date`, `cat_id`, `group_id`) VALUES
(24, 'iTszpY-ZXEc49VlwwetFuC', 'ประชุมครั้งที่ 4', 'ประชุมครั้งที่ 4', NULL, '{"7f171706550c67a0bc5bd5671e6cf93b.pdf":"รายงานการประชุมทีม Fa11 กพ63.pdf"}', '2020-04-16 06:42:43', 5, 98);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1429928899),
('m000000_000001_CreateRbacTables', 1429929043),
('m000000_000002_CreateUserTables', 1429941926),
('m000000_000003_ChangeTokenColumn', 1429941926),
('m140209_132017_init', 1435203411),
('m140403_174025_create_account_table', 1435203411),
('m140504_113157_update_tables', 1435203411),
('m140504_130429_create_token_table', 1435203411),
('m140830_171933_fix_ip_field', 1435203411),
('m140830_172703_change_account_table_name', 1435203411),
('m141222_110026_update_ip_field', 1435203411),
('m141222_135246_alter_username_length', 1552026516),
('m150614_103145_update_social_account_table', 1552026516),
('m150623_212711_fix_username_notnull', 1552026516),
('m151218_234654_add_timezone_to_profile', 1552026516),
('m160929_103127_add_last_login_at_to_user_table', 1552026516);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `public_email` varchar(255) DEFAULT NULL,
  `gravatar_email` varchar(255) DEFAULT NULL,
  `gravatar_id` varchar(32) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `bio` text,
  `timezone` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, 'admin', '', 'moderndog007@gmail.com', '194675aaf7dbd2adb0f7dadc97dd6219', 'sawangweerawong', 'http://sawang.phoubon.in.th/', 'IT', NULL),
(2, 'u27967', '', 'sawanghosp27967@gmail.com', '5f5a6c7d8b36b438580bec04398a9d85', 'sawangweerawong', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE IF NOT EXISTS `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `data` text,
  `code` varchar(32) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(1, 'NMdk4T8YFgDwEpGzu5q_YUKiR5ikpM5d', 1435206956, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `upload_id` int(11) NOT NULL,
  `ref` varchar(50) DEFAULT NULL,
  `file_name` varchar(150) DEFAULT NULL COMMENT 'ชื่อไฟล์',
  `real_filename` varchar(150) DEFAULT NULL COMMENT 'ชื่อไฟล์จริง',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` int(11) DEFAULT NULL COMMENT 'ประเภท'
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`upload_id`, `ref`, `file_name`, `real_filename`, `create_date`, `type`) VALUES
(21, 'iOOxVkSwrurplsO0DicB-K', 'DSC05017.jpg', '63b9ec8d31e909eedea284d346983e17.jpg', '2015-03-19 19:10:43', NULL),
(22, 'iOOxVkSwrurplsO0DicB-K', 'dimple-logo-wallper.png', 'b582f9a54aa139c40ef8bff7bf1aa34f.png', '2015-03-19 19:10:44', NULL),
(23, 'iOOxVkSwrurplsO0DicB-K', 'DSC05019.jpg', '3898b672c6c7d521d4ff0b7567e16acf.jpg', '2015-03-19 19:10:45', NULL),
(24, 'iOOxVkSwrurplsO0DicB-K', 'DSC05018.jpg', '6773ca8feb5a999ddde2cf9406e07ab3.jpg', '2015-03-19 19:10:45', NULL),
(32, 'iOOxVkSwrurplsO0DicB-K', '20100123dodugi-alt-100124141539-phpapp02.pdf', '75cf33f077cf87f228dd1463aea08261.pdf', '2015-03-23 03:38:25', NULL),
(38, 'ulqHch76LQGjKHHTQGjnjM', 'images (4).jpg', 'a5c3fab2e36e83fdc9ef5de68773e275.jpg', '2015-03-27 15:05:03', NULL),
(39, 'ulqHch76LQGjKHHTQGjnjM', 'images (6) (1).jpg', '34633deaa8795c249a7e28d6b7b2a666.jpg', '2015-03-27 15:05:03', NULL),
(40, 'ulqHch76LQGjKHHTQGjnjM', 'images (6).jpg', 'a0b1295cc902e1173f98d2bb21e9ce99.jpg', '2015-03-27 15:05:03', NULL),
(41, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0003.jpg', '4345002b4f8b59366cdcfda567139dc7.jpg', '2015-03-29 04:29:54', NULL),
(42, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0002.jpg', '6795af6aa96dd0fcb16a1d2402fd069a.jpg', '2015-03-29 04:29:54', NULL),
(43, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0004.jpg', '6612805742ff5f74fb1a425b0c078d55.jpg', '2015-03-29 04:29:54', NULL),
(44, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0001.jpg', '0c72bb8fef418d71b1de37a47bb688f5.jpg', '2015-03-29 04:29:54', NULL),
(45, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0006.jpg', 'eddb4df3b2b6437b2a1193c7cc871636.jpg', '2015-03-29 04:29:54', NULL),
(46, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0005.jpg', '0b89d9df62d23dc62aab2d58736f6d6d.jpg', '2015-03-29 04:29:55', NULL),
(47, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0008.jpg', 'bfe2af5b7bec99eeacfbca4ca7571d3e.jpg', '2015-03-29 04:29:57', NULL),
(48, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0007.jpg', '39b90b01f97617bf280fbbddfd76f9b8.jpg', '2015-03-29 04:29:57', NULL),
(49, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0009.jpg', 'c2159c08d7670d7ed8231ffeef3e1b50.jpg', '2015-03-29 04:29:57', NULL),
(50, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0010.jpg', '26f8f0736676f645a115ac35eaf410f2.jpg', '2015-03-29 04:29:57', NULL),
(51, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0011.jpg', '07ec56dd42fbb2fa3a8298663fa75c5f.jpg', '2015-03-29 04:29:57', NULL),
(52, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0012.jpg', 'ebf0715269f0477071fd9fa103827c77.jpg', '2015-03-29 04:29:57', NULL),
(53, 'TGW9_0pt3mZI9nZR_KGWh5', 'DSCN0013.jpg', '14015fc5a2f8e97170a8d391ada5c23f.jpg', '2015-03-29 04:29:58', NULL),
(54, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0001.jpg', '57b260bd7413868b0f7bd810caeb91aa.jpg', '2015-03-29 04:38:15', NULL),
(55, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0002.jpg', '6720248638a1459241bf52fd87280379.jpg', '2015-03-29 04:38:15', NULL),
(56, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0006.jpg', '9275f9f03959eab63300d5a09260a84d.jpg', '2015-03-29 04:38:15', NULL),
(57, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0003.jpg', '0d46343b038f6bc1b415dac7eaf7c090.jpg', '2015-03-29 04:38:15', NULL),
(58, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0004.jpg', 'cf6eaf0d71e988249128470e1c3b4449.jpg', '2015-03-29 04:38:15', NULL),
(59, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0005.jpg', '92ffe44313f8d01de26486b7a1c232d2.jpg', '2015-03-29 04:38:15', NULL),
(60, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0008.jpg', 'b65b4200f3d9ff9b44ef737037c267a5.jpg', '2015-03-29 04:38:18', NULL),
(61, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0007.jpg', '31582d80c131b5b97a1ea36d5ad5db1d.jpg', '2015-03-29 04:38:18', NULL),
(62, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0009.jpg', '9feed510329885a9c3c10033da3d135b.jpg', '2015-03-29 04:38:18', NULL),
(63, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0010.jpg', 'ccc0ecf6abb712db1287d5cbf52fb938.jpg', '2015-03-29 04:38:18', NULL),
(64, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0011.jpg', 'beeb548ad929ed703eb29894cced6dc4.jpg', '2015-03-29 04:38:18', NULL),
(65, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0012.jpg', 'dad9f2c6f4b65e85dc8f6b1531697456.jpg', '2015-03-29 04:38:18', NULL),
(66, 'B8NCq0YUMW2tXLCiIT6K00', 'DSCN0013.jpg', '7db6f5519a53efed44a45696c0156830.jpg', '2015-03-29 04:38:19', NULL),
(67, 'gGLS1cqznyya6YIxbd6d39', 'DSCN0013.jpg', '8f5d6cc81108df308c560c962bdad30a.jpg', '2015-03-29 04:40:21', NULL),
(68, 'gGLS1cqznyya6YIxbd6d39', 'DSCN0011.jpg', 'e8b656a1dc898713dfcf1ff3c913f3cc.jpg', '2015-03-29 04:40:21', NULL),
(69, 'gGLS1cqznyya6YIxbd6d39', 'DSCN0012.jpg', '8181408f983071fbe07bcc17db9504c1.jpg', '2015-03-29 04:40:21', NULL),
(81, '6f6VTlqDp-V6nrU4KAMjh1', 'DSCN2624.jpg', 'ea8d13a73df757b0839c7b649e65ca52.jpg', '2015-03-29 15:26:33', NULL),
(82, '6f6VTlqDp-V6nrU4KAMjh1', 'DSCN2625.jpg', 'b86a108fa450c5fb3d9c55f87661fd09.jpg', '2015-03-29 15:26:34', NULL),
(84, '6f6VTlqDp-V6nrU4KAMjh1', 'DSCN2627.jpg', '181880c3d439cc64ad25e1e9f69568fd.jpg', '2015-03-29 15:26:35', NULL),
(86, '6f6VTlqDp-V6nrU4KAMjh1', 'DSCN2629.jpg', 'b86b5d85f6f7b51ec4fbaff8c5b3ae19.jpg', '2015-03-29 15:26:37', NULL),
(89, '6f6VTlqDp-V6nrU4KAMjh1', 'DSCN2632.jpg', 'df3dbb2ef010a4ff19e6497a1ce124e6.jpg', '2015-03-29 15:26:39', NULL),
(92, '6f6VTlqDp-V6nrU4KAMjh1', 'DSCN2635.jpg', '5173dfd54c720768e8f36307b7f4f2bb.jpg', '2015-03-29 15:26:41', NULL),
(94, '6f6VTlqDp-V6nrU4KAMjh1', 'DSCN2637.jpg', '18fce2b7964373337fa7eada41bbbd6d.jpg', '2015-03-29 15:26:42', NULL),
(100, '6f6VTlqDp-V6nrU4KAMjh1', 'DSCN2656.jpg', '135986dcf78c72bb7e738992248d6833.jpg', '2015-03-29 15:26:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
(1, 'admin', 'moderndog007@gmail.com', '$2y$12$hU70CUB58TllUf3ssooPOet40uyPPemTwrcCIvTEwM./MG0dkYUhK', 'cvHiM7kFUIajP2Bvnw4MgvBvyY7h0xbs', 1552026751, NULL, NULL, '127.0.0.1', 1435206956, 1580959070, 0, 1587019200),
(2, 'far', 'sawanghosp27967@gmail.com', '$2y$12$MGN48gxCfAHHYa3rQxgKauKlkYovZOdLUadJzy1O9DDl.2mGf.5M.', 'AQyMXt4bf8YYY1IXlWwsoGp-ZMVJNMVa', 1557281733, '', NULL, '::1', 1557281733, 1586917627, 0, 1587095688);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`) USING BTREE;

--
-- Indexes for table `ha_category`
--
ALTER TABLE `ha_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ha_documents`
--
ALTER TABLE `ha_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`) USING BTREE,
  ADD KEY `group_id` (`group_id`) USING BTREE;

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID หมวดหมู่',AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `ha_category`
--
ALTER TABLE `ha_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID หมวดหมู่',AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ha_documents`
--
ALTER TABLE `ha_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `group_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `ha_category` (`id`);

--
-- Constraints for table `ha_documents`
--
ALTER TABLE `ha_documents`
  ADD CONSTRAINT `ha_documents_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`),
  ADD CONSTRAINT `ha_documents_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `ha_category` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
