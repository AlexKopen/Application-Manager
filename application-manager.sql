-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2015 at 06:59 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `trip` date NOT NULL,
  `json` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `date`, `trip`, `json`) VALUES
(1, 'Alex Kopen', '2015-08-18', '2015-09-01', '[{"name":"first-name","value":"Alex"},{"name":"middle-name","value":"Daniel"},{"name":"last-name","value":"Kopen"},{"name":"address","value":"8581 shadow creek dr"},{"name":"address-two","value":""},{"name":"city","value":"Maple Grove"},{"name":"state","value":"MN"},{"name":"zip","value":"55311"},{"name":"home-phone-1","value":"763"},{"name":"home-phone-2","value":"494"},{"name":"home-phone-3","value":"4471"},{"name":"cell-phone-1","value":"763"},{"name":"cell-phone-2","value":"286"},{"name":"cell-phone-3","value":"7557"},{"name":"email","value":"alexkopen@gmail.com"},{"name":"age","value":"21"},{"name":"birthdate","value":"02/08/1994"},{"name":"nationality","value":"U.S."},{"name":"birthplace","value":"Robbinsdale"},{"name":"passport-number","value":"123456"},{"name":"passport-issue-date","value":"01/03/2012"},{"name":"passport-expiration-date","value":"01/03/2018"},{"name":"marital","value":"Single"},{"name":"reference1-name","value":"bobby johnson"},{"name":"reference1-relationship","value":"madeup"},{"name":"reference1-phone","value":"7632869887"},{"name":"reference1-email","value":"bjohnson@lol.com"},{"name":"reference1-name","value":"tim yoki"},{"name":"reference1-relationship","value":"daddy"},{"name":"reference1-phone","value":"7634948875"},{"name":"reference1-email","value":"hisemail@hehe.com"},{"name":"legal-signature-first","value":"Alex Daniel Kopen"}]'),
(6, 'new guy', '2015-08-15', '2015-11-06', '[{"name":"first-name","value":"Alex"},{"name":"middle-name","value":"Daniel"},{"name":"last-name","value":"Kopen"},{"name":"address","value":"8581 shadow creek dr"},{"name":"address-two","value":""},{"name":"city","value":"Maple Grove"},{"name":"state","value":"MN"},{"name":"zip","value":"55311"},{"name":"home-phone-1","value":"763"},{"name":"home-phone-2","value":"494"},{"name":"home-phone-3","value":"4471"},{"name":"cell-phone-1","value":"763"},{"name":"cell-phone-2","value":"286"},{"name":"cell-phone-3","value":"7557"},{"name":"email","value":"alexkopen@gmail.com"},{"name":"age","value":"21"},{"name":"birthdate","value":"02/08/1994"},{"name":"nationality","value":"U.S."},{"name":"birthplace","value":"Robbinsdale"},{"name":"passport-number","value":"123456"},{"name":"passport-issue-date","value":"01/03/2012"},{"name":"passport-expiration-date","value":"01/03/2018"},{"name":"marital","value":"Single"},{"name":"reference1-name","value":"bobby johnson"},{"name":"reference1-relationship","value":"madeup"},{"name":"reference1-phone","value":"7632869887"},{"name":"reference1-email","value":"bjohnson@lol.com"},{"name":"reference1-name","value":"tim yoki"},{"name":"reference1-relationship","value":"daddy"},{"name":"reference1-phone","value":"7634948875"},{"name":"reference1-email","value":"hisemail@hehe.com"},{"name":"legal-signature-first","value":"Alex Daniel Kopen"}]');

-- --------------------------------------------------------

--
-- Table structure for table `trip_dates`
--

CREATE TABLE IF NOT EXISTS `trip_dates` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `leader` varchar(64) NOT NULL,
  `is_full` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_dates`
--

INSERT INTO `trip_dates` (`id`, `date`, `leader`, `is_full`) VALUES
(3, '2015-10-12', 'Ann Brau & Rebecca Christiansen', 1),
(4, '2016-01-18', 'Joyce Getchell & Eileen Bock', 1),
(5, '2016-03-07', 'Ann Brau & Mary Welle', 1),
(6, '2016-06-20', 'Joyce Getchell', 0),
(7, '2016-07-11', 'Tim & Christine Davis', 0),
(8, '2016-10-10', 'Rebecca Christiansen and Ruby Montgomery', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(64) NOT NULL,
  `salt` char(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`) VALUES
(1, 'reiserapp', 'd3a3716a256b53216b992f4205c836db670a5a634bf497304f58875dc156607d', 'bd4bc9b4aead95e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_dates`
--
ALTER TABLE `trip_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `trip_dates`
--
ALTER TABLE `trip_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
