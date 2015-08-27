-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2015 at 12:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents_access_log`
--

CREATE TABLE IF NOT EXISTS `documents_access_log` (
  `id` bigint(20) NOT NULL,
  `doc_id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date_accessed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents_files`
--

CREATE TABLE IF NOT EXISTS `documents_files` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL COMMENT 'In case some one used a WYSIG EDITOR',
  `slug` varchar(255) NOT NULL,
  `folder_id` bigint(20) NOT NULL,
  `doc_type_id` bigint(20) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` bigint(20) NOT NULL,
  `dateupdate` datetime NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `extra_content` varchar(500) NOT NULL,
  `language` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents_folders`
--

CREATE TABLE IF NOT EXISTS `documents_folders` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` bigint(20) NOT NULL,
  `dateupdated` datetime NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `isactive` bigint(20) NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `language` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents_shared`
--

CREATE TABLE IF NOT EXISTS `documents_shared` (
  `id` bigint(20) NOT NULL,
  `doc_id` bigint(20) NOT NULL,
  `shared_by` bigint(20) NOT NULL,
  `shared_with` bigint(20) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents_tagged`
--

CREATE TABLE IF NOT EXISTS `documents_tagged` (
  `id` bigint(20) NOT NULL,
  `doc_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` bigint(20) NOT NULL,
  `dateupdated` int(11) NOT NULL,
  `updated_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents_tags`
--

CREATE TABLE IF NOT EXISTS `documents_tags` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author` bigint(20) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateupdated` datetime NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `language` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages_category`
--

CREATE TABLE IF NOT EXISTS `pages_category` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` int(11) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` bigint(20) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages_page`
--

CREATE TABLE IF NOT EXISTS `pages_page` (
  `id` bigint(20) NOT NULL,
  `category` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL,
  `section` varchar(200) NOT NULL,
  `code` varchar(400) NOT NULL,
  `permission` varchar(300) NOT NULL,
  `accessby` varchar(300) NOT NULL,
  `otherschecked` text NOT NULL,
  `accesslink` varchar(500) NOT NULL,
  `accessfor` varchar(100) NOT NULL,
  `trash` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=MyISAM AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `section`, `code`, `permission`, `accessby`, `otherschecked`, `accesslink`, `accessfor`, `trash`) VALUES
(26, 'User management', 'delete_user', 'Delete staff', '', 'view_user_list', '', '', 'n'),
(44, 'User management', 'view_user_groups', 'View user groups', '', '', '', '', 'n'),
(45, 'User management', 'add_user_group', 'Add user group', '', '', '', '', 'n'),
(46, 'User management', 'edit_user_group', 'Edit user group', '', '', '', '', 'n'),
(47, 'User management', 'delete_user_group', 'Delete user group', '', '', '', '', 'n'),
(139, 'User management', 'view_users', 'View users', '', '', '', '', 'n'),
(140, 'User management', 'add_user', 'Add user ', '', '', '', '', 'n'),
(141, 'User management', 'delete_users', 'Delete users', '', '', '', '', 'n'),
(142, 'User management', 'edit_users', 'Edit users ', '', '', '', '', 'n'),
(143, 'File management', 'view_files', 'View files', '', '', '', '', 'n'),
(144, 'File management', 'add_files', 'Add files', '', '', '', '', 'n'),
(145, 'File management', 'edit_files', 'Edit files', '', '', '', '', 'n'),
(146, 'File management', 'delete_files', 'Delete files', '', 'view_file', '', '', 'n'),
(147, 'File management', 'view_file_types', 'View file types', '', '', '', '', 'n'),
(148, 'File management', 'add_files_types', 'Add files types', '', '', '', '', 'n'),
(149, 'File management', 'edit_file_types', 'Edit file types', '', '', '', '', 'n'),
(150, 'File management', 'delete_file_types', 'Delete file types', '', 'view_file_types', '', '', 'n'),
(151, 'File management', 'add_file_categories', 'Add file categories', '', '', '', '', 'n'),
(152, 'File management', 'edit_file_categories', 'Edit file categories', '', '', '', '', 'n'),
(153, 'File management', 'view_file_categories', 'View file categories', '', '', '', '', 'n'),
(154, 'File management', 'delete_file_categories', 'Delete file categories', '', 'view_file_categories', '', '', 'n'),
(155, 'Event management', 'add_events', 'Add events', '', '', '', '', 'n'),
(156, 'Event management', 'view_events', 'View events', '', '', '', '', 'n'),
(157, 'Event management', 'edit_events', 'Edit events', '', '', '', '', 'n'),
(158, 'Event management', 'delete_events', 'Delete events', '', 'view_events', '', '', 'n'),
(159, 'Blog management', 'add_blogs', 'Add blogs', '', '', '', '', 'n'),
(160, 'Blog management', 'view_blogs', 'View blogs', '', '', '', '', 'n'),
(161, 'Blog management', 'edit_blogs', 'Edit blogs', '', '', '', '', 'n'),
(162, 'Blog management', 'delete_blogs', 'Delete blogs', '', 'view_blogs', '', '', 'n'),
(163, 'Blog management', 'add_blog_categories', 'Add blog categories', '', '', '', '', 'n'),
(164, 'Blog management', 'view_blog_categories', 'View blog categories', '', '', '', '', 'n'),
(165, 'Blog management', 'edit_blog_categories', 'Edit blog categories', '', '', '', '', 'n'),
(166, 'Blog management', 'delete_blog_categories', 'Delete blog categories', '', 'view_blog_categories', '', '', 'n'),
(171, 'Mail management', 'write_mails', 'Write mails', '', '', '', '', 'n'),
(172, 'Mail management', 'view_mails', 'View mails', '', '', '', '', 'n'),
(173, 'Mail management', 'reply_mails', 'Reply mails', '', '', '', '', 'n'),
(174, 'Mail management', 'delete_mails', 'Delete mails', '', 'view_mails', '', '', 'n'),
(179, 'Organigram management', 'view_levels', 'View levels', '', '', '', '', 'n'),
(180, 'Organigram management', 'add_organigram_image', 'Add organigram image', '', '', '', '', 'n'),
(181, 'Organigram management', 'edit_levels', 'edit levels', '', '', '', '', 'n'),
(182, 'Organigram management', 'delete_levels', 'delete levels', '', '', '', '', 'n'),
(183, 'Organigram management', 'add_levels', 'add levels', '', '', '', '', 'n'),
(184, 'Organigram management', 'view_organigram_image', 'view organigram image', '', '', '', '', 'n'),
(185, 'Organigram management', 'delete_organigram_image', 'delete organigram image', '', '', '', '', 'n'),
(186, 'Organigram management', 'edit_organigram_image', 'edit organigram image', '', '', '', '', 'n'),
(199, 'Career management', 'add_careers', 'add careers', '', '', '', '', 'n'),
(200, 'Career management', 'edit_careers', 'edit careers', '', '', '', '', 'n'),
(201, 'Career management', 'view_careers', 'view careers', '', '', '', '', 'n'),
(202, 'Career management', 'delete_careers', 'delete careers', '', '', '', '', 'n'),
(216, 'User management', 'send_emails', 'send emails', '', '', '', '', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `permissions_group_mapping`
--

CREATE TABLE IF NOT EXISTS `permissions_group_mapping` (
  `id` bigint(20) NOT NULL,
  `group_id` bigint(20) NOT NULL,
  `permission_id` bigint(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions_roles`
--

CREATE TABLE IF NOT EXISTS `permissions_roles` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `groupid` bigint(20) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `author` bigint(20) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions_roles`
--

INSERT INTO `permissions_roles` (`id`, `userid`, `groupid`, `isactive`, `author`, `dateadded`) VALUES
(1, 58, 4, 'Y', 0, '2015-03-21 21:52:42'),
(2, 51, 4, 'Y', 0, '2015-03-24 02:17:16'),
(3, 59, 3, 'Y', 0, '2015-03-24 02:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE IF NOT EXISTS `site_info` (
  `id` int(11) unsigned NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL DEFAULT 'logo.jpg',
  `tagline` text,
  `address` text,
  `tel` varchar(20) NOT NULL,
  `trash` enum('y','n') NOT NULL DEFAULT 'n',
  `email` varchar(50) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `google_maps` text,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `site_languages`
--

CREATE TABLE IF NOT EXISTS `site_languages` (
  `id` bigint(20) NOT NULL,
  `language_name` varchar(255) NOT NULL,
  `default` enum('Y','N') NOT NULL DEFAULT 'Y',
  `author` bigint(20) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_last_visited_url`
--

CREATE TABLE IF NOT EXISTS `site_last_visited_url` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateupdated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_last_visited_url`
--

INSERT INTO `site_last_visited_url` (`id`, `user_id`, `url`, `dateadded`, `dateupdated`) VALUES
(1, 1, 'http://localhost/projects/ci_dms/admin/dashboard', '2015-08-21 00:09:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site_logo`
--

CREATE TABLE IF NOT EXISTS `site_logo` (
  `id` int(11) NOT NULL,
  `logo_name` varchar(255) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `trash` enum('n','y') DEFAULT 'n',
  `dateadded` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_logo`
--

INSERT INTO `site_logo` (`id`, `logo_name`, `width`, `height`, `trash`, `dateadded`) VALUES
(1, 'logo_placeholder.png', 120, 40, 'n', '2015-08-22 19:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `site_menu`
--

CREATE TABLE IF NOT EXISTS `site_menu` (
  `id` bigint(20) NOT NULL,
  `menuname` varchar(255) NOT NULL,
  `author` bigint(20) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `language` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT '4',
  `password` varchar(255) NOT NULL,
  `avatar` varchar(100) NOT NULL DEFAULT 'avatar.jpg',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastlogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `trash` enum('y','n') NOT NULL DEFAULT 'n',
  `slug` bigint(20) NOT NULL,
  `dateupdated` datetime NOT NULL,
  `firsttime` enum('y','n') NOT NULL DEFAULT 'n',
  `isonline` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `usertype`, `password`, `avatar`, `dateadded`, `lastlogin`, `trash`, `slug`, `dateupdated`, `firsttime`, `isonline`) VALUES
(1, 'Cengkuru', 'Michae', 'admin@gmail.com', 1, '202cb962ac59075b964b07152d234b70', '10982207_878245398895036_1341022485478470456_n1.jpg', '2014-10-10 06:05:00', '2015-08-24 01:46:00', 'n', 141490944653434402, '2015-05-13 06:50:00', 'n', 'n'),
(2, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-14 03:36:00', '0000-00-00 00:00:00', 'n', 143952734539736605, '0000-00-00 00:00:00', 'n', 'n'),
(3, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-14 03:36:00', '0000-00-00 00:00:00', 'n', 143952734547188113, '0000-00-00 00:00:00', 'n', 'n'),
(4, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-14 03:58:00', '0000-00-00 00:00:00', 'n', 143952734439030492, '0000-00-00 00:00:00', 'n', 'n'),
(5, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:05:00', '0000-00-00 00:00:00', 'n', 143957194976983452, '0000-00-00 00:00:00', 'n', 'n'),
(6, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:05:00', '0000-00-00 00:00:00', 'n', 143957194973434626, '0000-00-00 00:00:00', 'n', 'n'),
(7, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:05:00', '0000-00-00 00:00:00', 'n', 143957194933595830, '0000-00-00 00:00:00', 'n', 'n'),
(8, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:06:00', '0000-00-00 00:00:00', 'n', 143957198520876977, '0000-00-00 00:00:00', 'n', 'n'),
(9, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:07:00', '0000-00-00 00:00:00', 'n', 143957219900855003, '0000-00-00 00:00:00', 'n', 'n'),
(10, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:07:00', '0000-00-00 00:00:00', 'n', 143957219961078819, '0000-00-00 00:00:00', 'n', 'n'),
(11, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:08:00', '0000-00-00 00:00:00', 'n', 143957219946361208, '0000-00-00 00:00:00', 'n', 'n'),
(12, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:08:00', '0000-00-00 00:00:00', 'n', 143957219966129515, '0000-00-00 00:00:00', 'n', 'n'),
(13, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:08:00', '0000-00-00 00:00:00', 'n', 143957219851518781, '0000-00-00 00:00:00', 'n', 'n'),
(14, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:09:00', '0000-00-00 00:00:00', 'n', 143957219834770874, '0000-00-00 00:00:00', 'n', 'n'),
(15, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:09:00', '0000-00-00 00:00:00', 'n', 143957219895187156, '0000-00-00 00:00:00', 'n', 'n'),
(16, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:10:00', '0000-00-00 00:00:00', 'n', 143957228521928347, '0000-00-00 00:00:00', 'n', 'n'),
(17, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:11:00', '0000-00-00 00:00:00', 'n', 143957228563490913, '0000-00-00 00:00:00', 'n', 'n'),
(18, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:11:00', '0000-00-00 00:00:00', 'n', 143957233837459059, '0000-00-00 00:00:00', 'n', 'n'),
(19, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:14:00', '0000-00-00 00:00:00', 'n', 143957255520662903, '0000-00-00 00:00:00', 'n', 'n'),
(20, 'super', 'user', 'admin@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'avatar.jpg', '2015-08-15 03:15:00', '0000-00-00 00:00:00', 'n', 143957255554733585, '0000-00-00 00:00:00', 'n', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `users_groupaccess`
--

CREATE TABLE IF NOT EXISTS `users_groupaccess` (
  `id` bigint(20) NOT NULL,
  `groupid` varchar(100) NOT NULL,
  `permissionid` varchar(100) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `author` bigint(20) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateupdated` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_groupaccess`
--

INSERT INTO `users_groupaccess` (`id`, `groupid`, `permissionid`, `isactive`, `author`, `dateadded`, `dateupdated`) VALUES
(12, '4', '212', 'Y', 1, '2015-03-23 15:48:06', 0),
(11, '4', '213', 'Y', 1, '2015-03-23 15:48:06', 0),
(10, '4', '214', 'Y', 1, '2015-03-23 15:48:06', 0),
(9, '4', '215', 'Y', 1, '2015-03-23 15:48:06', 0),
(54, '3', '147', 'Y', 1, '2015-07-22 22:21:06', 0),
(13, '4', '211', 'Y', 1, '2015-03-23 15:48:06', 0),
(53, '3', '160', 'Y', 1, '2015-07-22 22:21:06', 0),
(52, '3', '44', 'Y', 1, '2015-07-22 22:21:06', 0),
(51, '3', '139', 'Y', 1, '2015-07-22 22:21:06', 0),
(50, '3', '140', 'Y', 1, '2015-07-22 22:21:06', 0),
(49, '3', '216', 'Y', 1, '2015-07-22 22:21:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` bigint(20) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `abbreviation` char(10) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `author` bigint(20) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_members`
--

CREATE TABLE IF NOT EXISTS `users_members` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `othernames` varchar(255) NOT NULL,
  `imageurl` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `author` bigint(20) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `login_name` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL,
  `previous_password` varchar(255) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_notifications`
--

CREATE TABLE IF NOT EXISTS `users_notifications` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification` text,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seen` enum('y','n') NOT NULL DEFAULT 'n',
  `trash` enum('y','n') NOT NULL DEFAULT 'n',
  `alerttype` varchar(255) NOT NULL DEFAULT 'alert alert_info'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_notifications`
--

INSERT INTO `users_notifications` (`id`, `user_id`, `notification`, `dateadded`, `seen`, `trash`, `alerttype`) VALUES
(1, 1, 'You have successfully been registered', '2015-08-21 00:07:19', 'n', 'n', 'alert alert-success'),
(2, 1, 'updated site logo ', '2015-08-22 19:37:46', 'n', 'n', 'alert alert-info'),
(3, 1, 'You updated site logo info', '2015-08-22 19:48:57', 'n', 'n', 'alert alert-info');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE IF NOT EXISTS `users_roles` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `groupid` bigint(20) NOT NULL,
  `isactive` enum('Y','N') NOT NULL DEFAULT 'Y',
  `author` bigint(20) NOT NULL,
  `dateadded` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE IF NOT EXISTS `usertypes` (
  `id` int(11) unsigned NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `trash` enum('y','n') NOT NULL DEFAULT 'n',
  `slug` varchar(255) NOT NULL,
  `locked` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `usertype`, `trash`, `slug`, `locked`) VALUES
(1, 'superuser', 'n', 'superuser', 'y'),
(3, 'customer care', 'n', 'customer-care', 'y'),
(4, 'site member', 'n', 'site-member', 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `code` (`code`), ADD UNIQUE KEY `code_2` (`code`);

--
-- Indexes for table `permissions_roles`
--
ALTER TABLE `permissions_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_last_visited_url`
--
ALTER TABLE `site_last_visited_url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_logo`
--
ALTER TABLE `site_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groupaccess`
--
ALTER TABLE `users_groupaccess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_notifications`
--
ALTER TABLE `users_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `permissions_roles`
--
ALTER TABLE `permissions_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_last_visited_url`
--
ALTER TABLE `site_last_visited_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_logo`
--
ALTER TABLE `site_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users_groupaccess`
--
ALTER TABLE `users_groupaccess`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `users_notifications`
--
ALTER TABLE `users_notifications`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
