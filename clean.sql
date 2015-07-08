-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2015 at 10:38 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clean`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `priority` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `priority`) VALUES
(1, 'Buy more stuff!', 7),
(3, 'Do some exercise!', 9),
(4, 'Watch TV', 3),
(5, 'saff feffe', 3),
(6, 'SUCCESS JIMINEY!', 666),
(7, 'dsda', 3),
(8, 'Ysssaaa', 9000),
(9, 'wwa', 4),
(10, 'fff', 5),
(13, 'fre', 4),
(21, 'Fass', 1),
(22, 'Gunadaaaaaaaaaa', 1),
(23, 'HUI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pword` varchar(240) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pword`) VALUES
(1, 'chris', 'test'),
(2, 'client', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE IF NOT EXISTS `webpages` (
`id` int(11) NOT NULL,
  `page_headline` varchar(240) NOT NULL,
  `page_title` varchar(240) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `page_url` varchar(240) NOT NULL,
  `page_content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`id`, `page_headline`, `page_title`, `keywords`, `description`, `page_url`, `page_content`) VALUES
(3, '', 'Home', '', 'This is the index page', '/home', ''),
(4, '', 'About', '', 'About us', '/about', ''),
(5, '', 'Services', '', 'Our services', '/services', ''),
(6, '', 'Prices', '', 'Our pricing', '/prices', ''),
(7, '', 'Terms & Conditions', '', 'Terms & Conditions', '/terms', ''),
(8, '', 'Privacy policy', '', 'Privacy policy', '/privacy', ''),
(10, '', 'Contacts', '', 'Get in touch', '/contacts', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webpages`
--
ALTER TABLE `webpages`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `webpages`
--
ALTER TABLE `webpages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
