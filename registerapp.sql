-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 06:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registerapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE IF NOT EXISTS `confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(128) NOT NULL DEFAULT '',
  `key` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`id`, `userid`, `key`, `email`) VALUES
(27, '22', 'd2abb394bf8e51efa3c41d7c75f45d0f', ''),
(28, '23', 'd2abb394bf8e51efa3c41d7c75f45d0f', ''),
(29, '24', 'd2abb394bf8e51efa3c41d7c75f45d0f', ''),
(30, '25', 'd2abb394bf8e51efa3c41d7c75f45d0f', ''),
(31, '26', 'd2abb394bf8e51efa3c41d7c75f45d0f', ''),
(32, '27', 'd2abb394bf8e51efa3c41d7c75f45d0f', ''),
(33, '28', 'd2abb394bf8e51efa3c41d7c75f45d0f', ''),
(37, '32', '', ''),
(52, '49', '03f037b99d9356c99dfbcb7e90b02e9f', 'karima');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `password`, `email`, `active`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(3, '', '', 'ahmed', 'foo', '$2y$10$OTllYjYwNjMwYmUxYzY0ZeHM1Vs1xKBMx1CZTWr8SryS4XkMK.3Tm', 'admin', 0, '', '', '', '', '2017-05-03 04:14:55', '2017-05-03 04:14:55'),
(4, '', '', 'ahmed', 'foo', '$2y$10$ZDFmZmRkOGNhMTlhMDUxN.v04Xl88T5f7fQAGmS820s8HwVOCytGi', 'admin', 0, '', '', '', '', '2017-05-03 04:16:12', '2017-05-03 04:16:12'),
(5, '', '', 'ahmed', 'foo', '$2y$10$ZjllMzk1ZDQ4YzE0YmNiMuUZBWgMcGdWPOLgckrW.A9SEabotIVQi', 'admin', 0, '', '', '', '', '2017-05-03 04:21:45', '2017-05-03 04:21:45'),
(6, '', '', 'ahmed', 'foo', '$2y$10$NTRjOGE1ODU4ZDBmZjliYOAQHqjx4fXWE.URLeLYb6iCnphk47Apm', 'admin', 0, '', '', '', '', '2017-05-03 04:23:25', '2017-05-03 04:23:25'),
(7, '', '', 'ahmed', 'foo', '$2y$10$MjVkOTY2MTdjYTAwZTk3M.tudSk./dQswql1wYZz9GCy6DFo5BOfG', 'admin', 0, '', '', '', '', '2017-05-03 04:24:10', '2017-05-03 04:24:10'),
(8, '', '', 'nader', 'ahmed', '$2y$10$NTM3NjFhODJhYTJiZWI1NOCIXNIirgFV6XeCoJfbf2wvSAoOHCiEe', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-03 05:51:40', '2017-05-03 05:51:40'),
(9, '', '', 'kam', 'bjgnhhjn', '$2y$10$N2RlMjI5NmNiODFkZWY3YeJzxZ1hv/4w/zUq4MLvV1xt81NLvFMzW', 'soha', 0, '', '', '', '', '2017-05-03 06:24:34', '2017-05-03 06:24:34'),
(10, '', '', 'kam', 'bjgnhhjn', '$2y$10$MDc4ODJkNWI1ZTAxZjM4Z.dvglK09Svg6K.b4WqkPdy2.KmjytVUG', 'soha', 0, '', '', '', '', '2017-05-03 06:25:17', '2017-05-03 06:25:17'),
(11, '', '', 'kam', 'bjgnhhjn', '$2y$10$YTRhY2Q4MjcwMWQ1MDk1OOvXGRwe/4JbhfcMWhQ.njiJB2E1VBFfm', 'soha', 0, '', '', '', '', '2017-05-03 06:26:42', '2017-05-03 06:26:42'),
(12, '', '', 'kam', 'bjgnhhjn', '$2y$10$MGU1NmMwM2Q5OWU2ZmMwNe6CU3xROwkfxs8kCkqWa351jr7NchWpq', 'soha', 0, '', '', '', '', '2017-05-03 06:27:46', '2017-05-03 06:27:46'),
(13, '', '', 'kam', 'bjgnhhjn', '$2y$10$ODY2NmEzYzIxZTQ1MWI0ZeGNo1ZCHZ.3ZNvtRl20W.FKBheobYzwi', 'soha', 0, '', '', '', '', '2017-05-03 06:36:03', '2017-05-03 06:36:03'),
(14, '', '', 'ali', 'noha', '$2y$10$MmJjOGU0OWNlZDc3MmYyN.1R1.xKPyVebpHnSLyC87yzXTdvkBTum', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-03 07:32:14', '2017-05-03 07:32:14'),
(15, '', '', 'ali', 'noha', '$2y$10$ODRjZDA1YjkzNTdjNTg5YONnFJv81IolKduy0BjLNqm5xNAA9wd8a', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-03 07:33:11', '2017-05-03 07:33:11'),
(16, '', '', 'hana', 'mohamed', '$2y$10$N2RmZmQwOGVkMjI0Njc3NeKXk2OCAVlf7uqnflLL.YDgAzialaaVa', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 01:44:42', '2017-05-04 01:44:42'),
(17, '', '', 'hana', 'mohamed', '$2y$10$NDdmMTdmNDE1ODU5ZThhNuicAz4R3/z4vsfOkW8eeY1NsqCfeGbJu', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 01:55:54', '2017-05-04 01:55:54'),
(18, '', '', 'hana', 'mohamed', '$2y$10$ZThiNzU5NDM3ZDhkOGY4MuyHn.LQwhWqWsz4SpMDM0ahxcmXN.SJq', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 01:56:58', '2017-05-04 01:56:58'),
(19, '', '', 'hana', 'mohamed', '$2y$10$YTFiMDQ2MWE2ZGU5MjEzN.o7Wr3hwvrthiT/5RN3JsE2M/tY8j8RO', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:04:14', '2017-05-04 02:04:14'),
(20, '', '', 'hana', 'mohamed', '$2y$10$YjJkMmQ1YTQ3MDU1MTI1NOScVFc6T9uHy2wbGgPBNGvhU5gUYxosm', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:17:21', '2017-05-04 02:17:21'),
(21, '', '', 'hana', 'mohamed', '$2y$10$NDZkYzVhNDdlOTgwM2FhN.K9ddA0JBJ7OkyH0ruxWJM3G2o.Y0qrK', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:25:10', '2017-05-04 02:25:10'),
(22, '', '', 'hana', 'mohamed', '$2y$10$YjE5ZmY3Yjc2MjNkNmUzMOFGHo0H/dIvtUOJYUxiqp0zklVYcJ8/S', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:26:06', '2017-05-04 02:26:06'),
(23, '', '', 'hana', 'mohamed', '$2y$10$NDcyMjdjZTBmM2RlODJjYey2ghLN5DVUm1sy8J8Yrb.Aw.pFcZ6E2', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:27:53', '2017-05-04 02:27:53'),
(24, '', '', 'hana', 'mohamed', '$2y$10$YjJmYTFhZGEwYTM0N2E4YeasSwZYI6TDLCJR.W1YuQ/gjzC23Hbk6', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:29:17', '2017-05-04 02:29:17'),
(25, '', '', 'hana', 'mohamed', '$2y$10$M2MyNDI1NmIxNmQ3OWM0Ye7VMP1SsATTUIQB/FRvlsOBwkF26wGKC', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:34:01', '2017-05-04 02:34:01'),
(26, '', '', 'hana', 'mohamed', '$2y$10$ZjNhZjc3ZTVlNjgzODA4YOHHPl4699ZzR5Ei1I4JVIzaExm1Ilhcq', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:37:05', '2017-05-04 02:37:05'),
(27, '', '', 'hana', 'mohamed', '$2y$10$NzgzYzE0NzQxYzBmOGEyMelq6Mi6wz067dVC8orMs/WJH7sTFZV62', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:37:37', '2017-05-04 02:37:37'),
(28, '', '', 'hana', 'mohamed', '$2y$10$MWZjNTY4YzQ0YTA3MzAyZejiySXe0iLNP4grxzhU75fNf0GaeXz.u', 'karima.ali70@hotmail.com', 0, '', '', '', '', '2017-05-04 02:40:55', '2017-05-04 02:40:55'),
(29, '', '', 'azaa', 'kamal', '$2y$10$ZmI3NDkyMDEzMWE4MzU4NuNb6XF4bkP9BPvRTya3Ysote4e/pgO92', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 02:43:52', '2017-05-04 02:43:52'),
(30, '', '', 'azaa', 'kamal', '$2y$10$NmYxNTJkZjhlMDRmNmE0Z.IS9hbOGM7lCS8LsPbCI9weoyyi1fEMu', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 02:47:02', '2017-05-04 02:47:02'),
(31, '', '', 'hala', 'nazmy', '$2y$10$MzA5ZDdhM2E3MDI3ZDY1YuX7mad.pFMtNNPGS660X3gjtcKyn9LAy', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 02:53:33', '2017-05-04 02:53:33'),
(32, '', '', 'ebtsam', 'helmy', '$2y$10$MTk5ZjcyNWIzODI1ZTJhMOYlToNMQQniGX1T0Vg1Zi1zYVgQ71Pze', 'aspirewomen.su@gmail.com', 0, '', '', '', '', '2017-05-04 03:01:32', '2017-05-04 03:01:32'),
(33, '', '', 'ebtsam', 'helmy', '$2y$10$NThlYjJlNzI4MDRkNmY2YecLYo.vNkDGaP0R5at8G7xMEsCN6eq9G', 'aspirewomen.su@gmail.com', 1, '', '', '', '', '2017-05-04 03:01:53', '2017-05-04 03:01:53'),
(34, '', '', 'hala', 'nazmy', '$2y$10$NTM4MmIyZjJiOWViNTA3O.vsXjfx0custoKTJxZMRCH2PxEBQTEDG', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 03:06:50', '2017-05-04 03:06:50'),
(35, '', '', 'ebtsam', 'helmy', '$2y$10$NzVmNjFlOWNiYTgxYmY1YesHRH7vJxYjM536j.HbvzmgoB/GbDGDC', 'aspirewomen.su@gmail.com', 1, '', '', '', '', '2017-05-04 03:07:06', '2017-05-04 03:07:06'),
(36, '', '', 'soha', 'ali', '$2y$10$YmI1Y2JkZTQ2NDJhOGI3NuVPduxZsz5cfYOU5uPJZxQmkTIyFBdSO', 'azza.ahle18@gmail.com', 1, '', '', '', '', '2017-05-04 03:12:19', '2017-05-04 03:12:19'),
(37, '', '', 'ahmed', 'ali', '$2y$10$MzExOGM5ZTFiM2M5MjQ0MO6MGUQsazubbqv.FhMF3cLR2CgAWaAOC', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 04:04:12', '2017-05-04 04:04:12'),
(38, 'google', '115462252685107802810', 'karima', 'ali', ' ', 'karimaali9@gmail.com', 0, 'female', 'en', 'https://lh6.googleusercontent.com/--Og-3t__6ZE/AAAAAAAAAAI/AAAAAAAAAB0/h_rUnjwWnNw/photo.jpg', 'https://plus.google.com/115462252685107802810', '2017-05-04 04:57:31', '2017-05-04 04:57:31'),
(39, 'google', '115462252685107802810', 'karima', 'ali', ' ', 'karimaali9@gmail.com', 0, 'female', 'en', 'https://lh6.googleusercontent.com/--Og-3t__6ZE/AAAAAAAAAAI/AAAAAAAAAB0/h_rUnjwWnNw/photo.jpg', 'https://plus.google.com/115462252685107802810', '2017-05-04 04:59:16', '2017-05-04 04:59:16'),
(40, 'google', '115462252685107802810', 'karima', 'ali', ' ', 'karimaali9@gmail.com', 0, 'female', 'en', 'https://lh6.googleusercontent.com/--Og-3t__6ZE/AAAAAAAAAAI/AAAAAAAAAB0/h_rUnjwWnNw/photo.jpg', 'https://plus.google.com/115462252685107802810', '2017-05-04 04:59:25', '2017-05-04 04:59:25'),
(41, '', '', 'seham', 'mohsen', '$2y$10$Y2QxMzczODhjNDEwMGU3YejHy3W9PlyhKJx6YPNakGdaTW52mdBeC', 'aspirewomen.su@gmail.com', 1, '', '', '', '', '2017-05-04 05:52:27', '2017-05-04 05:52:27'),
(42, '', '', 'hade', 'khafage', '$2y$10$MGI2NjM1NDcwMGI0ZjcyNOFoF3noTZtAlwnoySkr0dnFu51f/d0Ky', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 06:35:29', '2017-05-04 06:35:29'),
(43, '', '', 'omar', 'khaled', '$2y$10$YzUzOGMzZGVlNWM3M2U4MeM.PyfeIX7Yfg1iQiegrVRy1/b5Q6ehi', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 06:38:21', '2017-05-04 06:38:21'),
(44, '', '', 'omar', 'khaled', '$2y$10$NzNjOTczODkwNzA0ZGQyO.cF9C1nnwkujaPF4YGDuT8B4gFNad3B.', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 06:38:56', '2017-05-04 06:38:56'),
(45, '', '', 'mohab', 'ahmed', '$2y$10$NWQ2NDNkYzVhYTUzYTc5M.aU0f.xHWrUb5C0htpTeSKWydY.2ULbO', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 06:58:40', '2017-05-04 06:58:40'),
(46, '', '', 'mohab', 'ahmed', '$2y$10$ZjI2MDVjYmFmOGIxZmIxOOuCRp6lVOZm3Sgy1aAmmcTCgtg92RGGO', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 07:04:40', '2017-05-04 07:04:40'),
(47, '', '', 'mohab', 'ahmed', '$2y$10$ZWZiZGZmMjk2NzY0ZDIyMOszrXoYu6FyrQ40R.psADMdpTDgwweI2', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 07:05:47', '2017-05-04 07:05:47'),
(48, '', '', 'warda', 'hassan', '$2y$10$YjM3NzEyZDM2MzgxYWM1YOooZi8GLiCDFQU5NzuyTMrjlu2CGl2yO', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 07:21:52', '2017-05-04 07:21:52'),
(49, '', '', 'ahmed', 'foo', '$2y$10$ODNmNjM3OGIxYjZhZGU0YuyZWJn4PBTbhHjv31JLFLQ4b9Q3wJ5pe', 'karima', 0, '', '', '', '', '2017-05-04 07:22:41', '2017-05-04 07:22:41'),
(50, '', '', 'yassen', 'mohamed', '$2y$10$NjMyN2I2ODVjZGU0NzZiMugDBRciik6WmRuNg6Z8tlG6Su7Z8HlIG', 'a.rema28@yahoo.com', 1, '', '', '', '', '2017-05-04 07:33:10', '2017-05-04 07:33:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
