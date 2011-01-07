-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2011 at 08:46 PM
-- Server version: 5.1.52
-- PHP Version: 5.2.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dane_dane`
--

-- --------------------------------------------------------

--
-- Table structure for table `painting`
--

CREATE TABLE IF NOT EXISTS `painting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `dimensions` varchar(255) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `painting_U_1` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `painting`
--

INSERT INTO `painting` (`id`, `title`, `medium`, `dimensions`, `year`, `description`, `category`, `subcategory`, `thumbnail`, `image`, `order`, `created_at`, `updated_at`) VALUES
(1, 'A Leader And Others', 'acrylic on masonite', '4”x6” ', '2008', '', '', '', '36b4e4e43d4ac5a606da853cb83d4755efdac02f.jpg', '7be2af776d5d161615786c450e40548a5084d292.jpg', 31, '2009-07-18 21:38:40', '2009-08-04 20:38:57'),
(2, 'Battle For Nashville', 'acrylic on masonite', '5”x7”', '2008', '', '', '', '35c1a8d50d40fec5a188f868a2e6f08a9ebd93af.jpg', '21aefde911fc8631ab5d88b2b8efee7a5e4bb085.jpg', 35, '2009-07-18 21:41:42', '2009-08-04 20:56:07'),
(3, 'Battle For Nashville II', 'acrylic on masonite', '5”x7”', '2009', '', '', '', '342130f297736c4848df99c7cc75bc10b0c48072.jpg', '5c49a5ca3b8efbf6cd67a3aeb68b60d3a5fa2546.jpg', 10, '2009-07-18 21:43:18', '2009-08-04 20:28:42'),
(4, 'Camp', 'acrylic on masonite', '5”x7”', '2009', '', '', '', 'be3a24db3ce96ddf7a81d7606f354bdc55dde621.jpg', '240e5843f9cf452f7f2f238bbd3a60038835891f.jpg', 22, '2009-07-18 21:44:42', '2009-08-04 20:34:20'),
(5, 'Cannonman', 'acrylic on canvas', '6”x9” ', '2007', '', '', '', '734e2a2ecf2da5201b6a94234a19d715368e4ab0.jpg', 'c88f52e63de31b2ff5645ce86dc4678d6d785d2a.jpg', 26, '2009-07-18 21:47:26', '2009-09-26 19:47:20'),
(6, 'Captured', 'acrylic on masonite', '4”x6”', '2008', '', '', '', '5d3357dbd502daeebd0ba466131c9fe43c3906af.jpg', '84ced4de292b6ba2db7f2e80a846fce56a4b303b.jpg', 7, '2009-07-18 21:48:06', '2009-08-04 20:27:46'),
(7, 'For The Cause', 'acrylic on masonite', '4”x6”', '2008', '', '', '', '913c68bd66318066bc2ad2137b5953299eb1be51.jpg', '9a7dcd594b8c8cfbcea732b065f0f3fafc20cbb9.jpg', 5, '2009-07-18 21:48:50', '2009-08-04 20:26:58'),
(8, 'Friend Or Foe', 'acrylic on masonite', '5”x7”', '2009', '', '', '', '7600868b1d809dd251387aa310c9cf853d2586bf.jpg', '9366873c0821cda285ed43d873448e79c8672653.jpg', 9, '2009-07-18 21:49:36', '2009-08-04 20:28:18'),
(9, 'Ghost Of Him', 'acrylic on masonite', '4”x6”', '2009', '', '', '', '3dd77b1e5f083d65c949d7e0a19b5b2619496e26.jpg', 'b4a559d5e2e015a0d75c5fd7e8b66b8cc45aecc7.jpg', 29, '2009-07-18 21:51:54', '2009-08-04 20:37:54'),
(10, 'In The Midst', 'acrylic on canvas', '20"x24"', '2007', '', '', '', '0290d1ecfb2e5b67c03e0db0a95afa23d012758a.jpg', '3cde85970c967143078dc594b4615fa824fb05da.jpg', 2, '2009-07-18 21:53:51', '2009-08-04 20:25:31'),
(11, 'Jeb', 'acrylic on canvas', '8"x10"', '2007', '', '', '', 'd0d85fc8c6e7795bbb30993a0f93da56aad157b1.jpg', '20c91a794cad1da4c0454729ef5b11d596a25097.jpg', 24, '2009-07-18 21:54:31', '2009-08-04 20:35:32'),
(12, 'Life Goes On', 'acrylic on masonite', '8"x12"', '2009', '', '', '', 'c846b9e61eb100c32229a616c127b34a85523d00.jpg', '804d29d758d895fdf6facbc55595e57eb3fbeb37.jpg', 8, '2009-07-18 22:06:21', '2009-08-04 20:28:04'),
(13, 'Medicine', 'acrylic on canvas', '6”x9” ', '2007', '', '', '', '738adbabab1ae6dc902948c0d671ae889d9e25cc.jpg', '0ba7292455b0fd97196068adcfc0afda5024bae5.jpg', 16, '2009-07-18 22:06:50', '2009-08-04 20:31:22'),
(14, 'Not Done Yet', 'acrylic on masonite', '8"x12"', '2009', '', '', '', '8744a7b0907e98303ee59cd96e792e9df396b545.jpg', '9ed0b01d12eb6dea6fc52f7844a5806ce7b8d65a.jpg', 17, '2009-07-18 22:08:04', '2009-08-04 20:31:43'),
(15, 'Nurse', 'acrylic on masonite', '8"x12"', '2009', '', '', '', '732e76bb67ba2c649984575619ccc333e4f78518.jpg', '9c7f66366a38c821cc5e8b1b868cd083b9d5535c.jpg', 14, '2009-07-18 22:08:43', '2009-08-04 20:30:32'),
(16, 'Prisoners Under Guard', 'acrylic on canvas', '9"x12"', '2007', '', '', '', 'f0790666360a120d4e8f2f4750d031ef65cae148.jpg', 'e71fdeb83aeebba35e40dc2ce1db3df04f4011df.jpg', 0, '2009-07-18 22:10:20', '2009-08-04 20:24:27'),
(17, 'Ready', 'acrylic on masonite', '5”x7”', '2008', '', '', '', 'be0ec46c6fe68c3d2006c3c241b9bfe592c9d90d.jpg', 'b7c4e9521833a975c58f125722a9d8ee96c5d3f9.jpg', 25, '2009-07-18 22:12:38', '2009-08-04 20:35:55'),
(18, 'Soldier Boy', 'acrylic on canvas', '12"x16"', '2007', '', '', '', '7b7e9b2dadec0d53d082dd8a95f64decca9a98b1.jpg', 'dc86d2a721e100659d2424f9c1d6e03ee4ca8b68.jpg', 1, '2009-07-18 22:14:27', '2009-08-04 20:24:50'),
(19, 'Spotters', 'acrylic on canvas', '18"x24"', '2007', '', '', '', 'ab7f7939b8821041d266a9209276887d435f2a9c.jpg', '18ab42c8f68c2b3507bf39a3cd718fb9851a72b1.jpg', 23, '2009-07-18 22:15:13', '2009-08-04 20:34:56'),
(20, 'St.', 'acrylic on canvas', '28"x36"', '2009', '', '', '', '99fbef28b449498ed1374d8d42e45e787b7139c9.jpg', '76d32ab88947e72919f4027d39320c8b1def5870.jpg', 19, '2009-07-18 22:15:57', '2009-08-04 20:32:24'),
(21, 'Them Or Us', 'acrylic on canvas', '36"x48"', '2007', '', '', '', '67dced63d7bc8212cb1e587d73fc643e8afa7cf0.jpg', 'ce7b0cf19b39bc35616fa3cd0f52cb5c883d12c1.jpg', 13, '2009-07-18 22:16:35', '2009-08-04 20:29:58'),
(22, 'Under The Flag', 'acrylic on masonite', '5”x7”', '2009', '', '', '', 'b10d72ff4c2b94a5e011fd8c80f48f510ef02d60.jpg', '55b6ac8d973d469d60c40272dade19f14eab5739.jpg', 20, '2009-07-18 22:17:11', '2009-08-04 20:32:46'),
(23, 'Us Or Them', 'acrylic on canvas', '36"x48"', '2007', '', '', '', '4e2fdb004129875bce9c1c64c6765451db58550b.jpg', '5697dd10f478ce4f881edec202ae7c28cccf826b.jpg', 27, '2009-07-18 22:17:49', '2009-08-04 20:36:59'),
(24, 'Which Side Are They On?', 'acrylic on masonite', '4”x6”', '2009', '', '', '', '1b1a8773fa4da224a5de6101173266893192ddd5.jpg', '38155a2777000c0bed23e17ccca340817655f399.jpg', 34, '2009-07-18 22:18:32', '2009-08-04 20:55:42'),
(25, 'Willing', 'acrylic on canvas', '12"x12"', '2007', '', '', '', '4787fccaaa94256ab081b05ff533de9bd1e4ccc7.jpg', 'a545c8ad756086d625f71a77d1e451aaeb111949.jpg', 6, '2009-07-18 22:43:14', '2009-08-04 20:27:23'),
(26, 'With Their Swords', 'acrylic on canvas', '18"x18"', '2007', '', '', '', '6dada49a10002f998cf3b8b42bb750b2f15edd14.jpg', '97dd4d3aca21b9e0d7e7e7c9adc3ea3191ac8fde.jpg', 30, '2009-07-18 22:44:00', '2009-08-04 20:38:32'),
(27, 'Wounded no. 000192 ', 'acrylic on paper', '8"x12"', '2008', '', '', '', '19bb90615f6b468b4fcbab9c119789be496082e3.jpg', '2b19756a8cf2c2bafbe109d3ab6654995bdc4c5d.jpg', 4, '2009-07-18 22:45:59', '2009-08-04 20:26:34'),
(28, 'Wounded no. 000203', 'acrylic on paper', '8"x12"', '2008', '', '', '', 'dc77fca112ae70056af25aabe0e0a5119fc8c304.jpg', '9c54a230022f50d5f5604f18d35ee8753c539f17.jpg', 18, '2009-07-18 22:48:00', '2009-08-04 20:32:05'),
(29, 'Wounded no. 000262-2', 'acrylic on masonite', '4”x6”', '2008', '', '', '', 'f55d95ec6519729301a93280d67b452da439abc7.jpg', 'e84893fc4dbc7abb97d04101dfc829a8a659f2db.jpg', 33, '2009-07-26 12:49:40', '2009-08-04 20:55:08'),
(30, 'Wounded no. 000339', 'acrylic on paper', '8"x12"', '2008', '', '', '', '44d3b7d4fbd2201e3f8819b19665b7851ba521fd.jpg', '7cbd492b757087534a659ae05f63c923dc5e6cd7.jpg', 28, '2009-07-26 12:54:16', '2009-08-04 20:37:22'),
(31, 'Wounded no. 000347', 'acrylic on paper', '8"x12"', '2008', '', '', '', 'a1a0566d2e90b56a2968405897db0d544d8105a3.jpg', 'f3cbaf86667166f43505c1d66934d5ca7cd7a53b.jpg', 12, '2009-07-26 12:56:43', '2009-08-04 20:29:34'),
(32, 'Wounded no. 000417', 'acrylic on paper', '8"x12"', '2008', '', '', '', '197702482af1397cdd3a15b22621f4d833725a64.jpg', '4bc3500e4dbc44a7fd355c92980fd16cc5b64823.jpg', 15, '2009-07-26 12:57:47', '2009-08-04 20:31:00'),
(33, 'Respite', 'acrylic on masonite', '5”x7”', '2008', '', '', '', 'b0107c45620edc6c4c631b7e1f087974a4f4c0d8.jpg', '757845f40733ad8eda86f9be654c97561fa50c1d.jpg', 11, '2009-07-26 17:38:18', '2009-08-04 20:29:11'),
(34, 'Prepped', 'acrylic on masonite', '5”x7”', '2009', '', '', '', '14748def03896515cc0b18776f8dd6b56327527c.jpg', '273be1575c9300308c34b25b2962adfbe53eb85f.jpg', 3, '2009-07-26 17:39:14', '2009-08-04 20:26:11'),
(35, 'Three Fighting For', 'acrylic on canvas', '16"x16"', '2007', '', '', '', '8da5785699930a71ee399edf26e3a1dff8861a5b.jpg', '67766fada81740b744c6164cebdefb5759f60cb7.jpg', 21, '2009-07-26 17:41:50', '2009-08-04 20:33:19'),
(36, 'Two For Them', 'acrylic on masonite', '4”x6”', '2009', '', '', '', '7dec52b7a879a4b18b8e70e255cd2f3f1d3bbdd5.jpg', 'b9901f313777397e7cda8a9f028f177bbff63846.jpg', 32, '2009-07-26 17:42:41', '2009-08-04 20:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_group_U_1` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sf_guard_group`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_group_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group_permission` (
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_FI_2` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_group_permission`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_permission_U_1` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sf_guard_permission`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_remember_key`
--

CREATE TABLE IF NOT EXISTS `sf_guard_remember_key` (
  `user_id` int(11) NOT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`,`ip_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_remember_key`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_user_U_1` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sf_guard_user`
--

INSERT INTO `sf_guard_user` (`id`, `username`, `algorithm`, `salt`, `password`, `created_at`, `last_login`, `is_active`, `is_super_admin`) VALUES
(1, 'admin', 'sha1', 'ddf0c91a2f321eac610d9f6d87833d32', 'ac4a1e9372c4aa6d16fbb8e83039ba0ce78bb310', '2009-07-19 22:47:39', '2010-08-25 21:27:31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_FI_2` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_user_group`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_permission` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_FI_2` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_user_permission`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `sf_guard_group_permission`
--
ALTER TABLE `sf_guard_group_permission`
  ADD CONSTRAINT `sf_guard_group_permission_FK_1` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_group_permission_FK_2` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_remember_key`
--
ALTER TABLE `sf_guard_remember_key`
  ADD CONSTRAINT `sf_guard_remember_key_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_user_group`
--
ALTER TABLE `sf_guard_user_group`
  ADD CONSTRAINT `sf_guard_user_group_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_group_FK_2` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_user_permission`
--
ALTER TABLE `sf_guard_user_permission`
  ADD CONSTRAINT `sf_guard_user_permission_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_permission_FK_2` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
