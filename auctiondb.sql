-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2014 at 07:04 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auctiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adloginfo`
--

CREATE TABLE IF NOT EXISTS `adloginfo` (
  `ip` varchar(30) NOT NULL,
  `browser` varchar(70) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adloginfo`
--

INSERT INTO `adloginfo` (`ip`, `browser`, `date`) VALUES
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-18 11:17:37'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge', '2014-04-18 11:18:29'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-18 11:49:13'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-18 11:49:30'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge', '2014-04-18 11:58:54'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-19 09:50:18'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-19 09:56:18'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 09:21:09'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 09:46:24'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 09:50:41'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 11:45:04'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 11:52:24'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 12:25:47'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 12:28:49'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 12:49:37'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 12:56:49'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 13:09:59'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-21 13:11:09'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-23 12:32:08'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-23 12:34:03'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-24 12:42:53'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-24 15:22:24'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-24 15:28:59'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-24 15:30:09'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-24 15:31:22'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-24 15:38:47'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-25 11:41:07'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-25 16:35:36'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-25 16:45:42'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-25 16:50:10'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-25 16:52:48'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-25 17:38:27'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-25 17:52:03'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-25 18:33:44'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge', '2014-04-26 09:46:05'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge', '2014-04-26 09:46:21'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge', '2014-05-09 10:26:19'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge', '2014-05-09 10:40:30'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge', '2014-05-09 10:43:52'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Ge', '2014-05-09 10:44:21'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-03-20 10:55:35'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-03-20 10:55:55'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-03-20 10:58:00'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-03-20 11:03:03'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-03-20 11:08:16'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28', '2014-04-26 11:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `auctionmaster`
--

CREATE TABLE IF NOT EXISTS `auctionmaster` (
  `aucid` int(11) NOT NULL AUTO_INCREMENT,
  `itid` int(11) NOT NULL,
  `aucdate` date NOT NULL,
  `aucstarttime` datetime NOT NULL,
  `aucendtime` datetime NOT NULL,
  `itemprice` int(11) NOT NULL,
  PRIMARY KEY (`aucid`),
  KEY `itid` (`itid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bidreport`
--

CREATE TABLE IF NOT EXISTS `bidreport` (
  `bidid` int(11) NOT NULL AUTO_INCREMENT,
  `itid` int(11) NOT NULL,
  `bidder` varchar(60) NOT NULL,
  `biddatetime` varchar(60) NOT NULL,
  `bidamount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`bidid`),
  KEY `itid` (`itid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `bidreport`
--

INSERT INTO `bidreport` (`bidid`, `itid`, `bidder`, `biddatetime`, `bidamount`, `status`) VALUES
(34, 91, 'satishgelanibca@gmail.com', '2014-03-20 11:08:37', 502, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(40) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Art'),
(2, 'Automobile'),
(3, 'Books'),
(4, 'Business &  Industrial'),
(5, 'Cameras & Photo'),
(6, 'Cell Phones'),
(7, 'Clothing & watches'),
(8, 'Coins & stamps'),
(9, 'Collectibles'),
(10, 'Comics & Cards'),
(11, 'Computer & Software'),
(12, 'Electronics'),
(13, 'Home & Garden'),
(14, 'Movie & Video'),
(15, 'Health & Beauty'),
(16, 'Music'),
(17, 'Jewelry'),
(18, 'Office & Business'),
(19, 'Goods & Services'),
(20, 'Toys & Games'),
(21, 'Special Products');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `ctid` int(11) NOT NULL AUTO_INCREMENT,
  `ctname` varchar(100) NOT NULL,
  `stid` int(11) NOT NULL,
  PRIMARY KEY (`ctid`),
  KEY `stid` (`stid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ctid`, `ctname`, `stid`) VALUES
(1, 'surat', 1),
(2, 'mumbai', 2),
(3, 'baroda', 1),
(4, 'rajkot', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `uname`, `mno`, `detail`) VALUES
(4, 'jaydip', 'jaydipdonga5@gmail.com', '9654545545', 'awesome auction website.'),
(5, 'satish ', 'satishmakvana@yahoo.com', '8980383712', 'hfvhjjhkljl.gvm'),
(6, '', '', '', ''),
(7, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `itembuyer`
--

CREATE TABLE IF NOT EXISTS `itembuyer` (
  `itid` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `bidprice` int(11) NOT NULL,
  PRIMARY KEY (`itid`,`regid`),
  KEY `itid` (`itid`),
  KEY `regid` (`regid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemmaster`
--

CREATE TABLE IF NOT EXISTS `itemmaster` (
  `itid` int(11) NOT NULL AUTO_INCREMENT,
  `itname` varchar(100) NOT NULL,
  `catid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `descri` varchar(500) NOT NULL,
  `regid` int(11) NOT NULL,
  `itadddate` date NOT NULL,
  `itlastdate` date NOT NULL,
  `itprice` int(11) NOT NULL,
  `itbidprice` int(11) NOT NULL,
  `new` longtext NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`itid`),
  KEY `subname` (`subid`,`regid`),
  KEY `regid` (`regid`),
  KEY `catid` (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `itemmaster`
--

INSERT INTO `itemmaster` (`itid`, `itname`, `catid`, `subid`, `descri`, `regid`, `itadddate`, `itlastdate`, `itprice`, `itbidprice`, `new`, `status`) VALUES
(63, 'volkswagen', 2, 52, 'this is my car', 37, '2014-04-21', '2014-04-23', 100000, 10000, 'Product/2010-volkswagen-golf-pic-64278.png', 0),
(65, 'bullet Royal', 2, 53, 'very  funny ', 21, '2014-04-25', '2014-05-08', 100000, 50000, 'Product/download.jpg', 0),
(66, 'Militry Tank', 21, 134, 'This is used in 2nd world war', 17, '2014-04-25', '2014-05-14', 10000000, 100000, 'Product/special.jpg', 0),
(68, 'Samsung memory card', 6, 119, 'this is very old accessories.', 21, '2014-04-26', '2014-05-08', 500, 100, 'Product/2Mobile Accessories.jpg', 0),
(69, 'namo autogaph', 9, 63, 'namo autograph', 21, '2014-05-09', '2014-05-10', 100000, 100, 'Product/Autographs1.jpg', 0),
(70, 'animation', 9, 62, 'this is my animation', 21, '2014-05-09', '2014-05-10', 100000, 10000, 'Product/Animation1.jpg', 0),
(71, 'beauty ', 15, 131, 'nice product', 21, '2014-05-09', '2014-05-10', 500, 100, 'Product/beauty.jpg', 0),
(72, 'blueray', 14, 94, 'my blueray', 21, '2014-05-09', '2014-05-17', 5000, 1000, 'Product/Blueray.jpg', 0),
(73, 'car', 2, 52, 'my old and valuable car', 21, '2014-05-09', '2014-05-16', 100000, 10000, 'Product/Cars1.jpg', 0),
(74, 'business book', 4, 122, 'my success book', 21, '2014-05-09', '2014-05-15', 1000, 500, 'Product/busines.jpg', 0),
(75, 'tv', 12, 82, 'this is my grandfather tv', 21, '2014-05-09', '2014-05-10', 100000, 10000, 'Product/tv.jpg', 0),
(76, 'catalogs', 3, 54, 'my vatalog', 21, '2014-05-09', '2014-05-10', 1000, 100, 'Product/Catalogs.jpg', 0),
(77, 'doll', 9, 66, 'this is nice doll', 21, '2014-05-09', '2014-05-10', 1000, 100, 'Product/Dolls.jpg', 0),
(78, 'comic book', 10, 70, 'this is nice1', 21, '2014-05-09', '2014-05-10', 1000, 100, 'Product/Comic Books.jpg', 0),
(79, 'children book', 3, 56, 'nice1', 21, '2014-05-09', '2014-05-10', 1000, 100, 'Product/Children.jpg', 0),
(80, 'golden watch', 7, 127, 'this is pm watch', 21, '2014-05-09', '2014-05-10', 100000, 10000, 'Product/Golden Watch1.jpg', 0),
(81, 'old car', 2, 52, 'special open car', 21, '2014-05-09', '2014-05-10', 100000, 10000, 'Product/Cars2.jpg', 0),
(82, 'Refrigrator', 12, 82, 'this is my fridge', 21, '2014-05-09', '2014-05-16', 10000, 1000, 'Product/frez.jpg', 0),
(83, 'dvd player', 14, 95, 'nice1', 21, '2014-05-09', '2014-05-17', 5000, 500, 'Product/DvD.jpg', 0),
(84, 'furniture', 13, 88, 'this is in perfect condition.', 21, '2014-05-09', '2014-05-10', 100000, 10000, 'Product/Furniture2.jpg', 0),
(85, 'Hd camera', 5, 123, 'nice picture quality.', 21, '2014-05-09', '2014-05-10', 5000, 1000, 'Product/Hd Camera1.jpg', 0),
(86, 'golden mobile', 6, 118, 'this is golden mobile', 21, '2014-05-09', '2014-05-10', 100000, 10000, 'Product/Mobile2.jpg', 0),
(87, 'old coin', 8, 128, 'this is very old coin.', 21, '2014-05-09', '2014-05-10', 5000, 500, 'Product/Old Coin.jpg', 0),
(88, 'gramophone', 16, 100, 'this is very old', 21, '2014-05-09', '2014-05-10', 100000, 10000, 'Product/music.jpg', 0),
(89, 'stamp', 8, 129, 'this is very old stamp', 21, '2014-05-09', '2014-05-10', 5000, 500, 'Product/Stamp.jpg', 0),
(90, 'software', 11, 80, 'nice1', 21, '2014-05-09', '2014-05-10', 1000, 500, 'Product/Software.jpg', 0),
(91, 'toy solider', 20, 117, 'nice1', 21, '2014-05-09', '2014-05-10', 5000, 500, 'Product/toysoldir.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`nid`, `uname`) VALUES
(1, 'satishgelanibca@gmail.com'),
(2, 'satishgelanibca@gmail.com'),
(3, 'satishgelanibca@gmail.com'),
(4, 'satishgelanibca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `regid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `hear` varchar(40) NOT NULL,
  `addd` varchar(200) NOT NULL,
  `ctid` int(11) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`regid`),
  KEY `cityid` (`ctid`),
  KEY `ctid` (`ctid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `name`, `uname`, `pass`, `hear`, `addd`, `ctid`, `mno`, `utype`, `country`, `gender`) VALUES
(17, 'Satish', 'satishgelanibca@gmail.com', 'satish', 'Advertising', 'powder gali', 2, '7405444281', '0', 'India', 'male'),
(21, 'abhi', 'gediya5345@gmail.com', '123456', 'Friend', 'hajkfsegfseg', 1, '1111111111', '2', 'India', 'male'),
(22, 'satani', 'satanirahul@gmail.com', '111111', 'Friend', '25,rachna soc', 1, '9999999999', '1', 'India', 'male'),
(37, 'jaydip donga', 'jaydipdonga5@gmail.com', 'radhe123', 'Friend', 'vdsvsv', 1, '7405444281', '1', 'India', 'male'),
(38, 'satish gelani', 'satishgelani64@gmail.com', 'radhe123', 'Friend', 'vgsdfvgdsv', 2, '7405444281', '2', 'India', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `stid` int(11) NOT NULL AUTO_INCREMENT,
  `stname` varchar(40) NOT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stid`, `stname`) VALUES
(1, 'gujarat'),
(2, 'maharastra'),
(3, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `subname` varchar(20) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`subid`),
  KEY `catid` (`catid`),
  KEY `catid_2` (`catid`),
  KEY `catid_3` (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subid`, `subname`, `catid`) VALUES
(47, 'Amateur Art', 1),
(48, 'Ancient World', 1),
(49, 'Fine Art', 1),
(50, 'Painting', 1),
(51, 'Prints', 1),
(52, 'Cars', 2),
(53, 'Motorcycles', 2),
(54, 'Catalogs', 3),
(55, 'Computer & Internet', 3),
(56, 'Children', 3),
(57, 'General Knowladge', 3),
(58, 'Cooking', 3),
(59, 'News', 3),
(60, 'Sports', 3),
(62, 'Animation', 9),
(63, 'Autographs', 9),
(66, 'Dolls', 9),
(70, 'Comic Books', 10),
(76, 'Trading Cards', 10),
(77, 'General', 11),
(78, 'Hardware', 11),
(79, 'Internet Services', 11),
(80, 'Software', 11),
(81, 'Internet Services', 12),
(82, 'General', 12),
(86, 'Baby Items', 13),
(87, 'Crafts', 13),
(88, 'Furniture', 13),
(89, 'Garden', 13),
(90, 'General', 13),
(91, 'Household Items', 13),
(92, 'Tools & Hardware', 13),
(93, 'Weddings', 13),
(94, 'Blueray', 14),
(95, 'DvD', 14),
(96, 'General', 14),
(97, 'HD-DvD', 14),
(98, 'VHS', 14),
(99, 'CDs', 16),
(100, 'Instruments', 16),
(101, 'Memorabilia', 16),
(102, 'Records', 16),
(103, 'Tapes', 16),
(104, 'Fax Machines', 18),
(105, 'Briefcases', 18),
(106, 'Pagers', 18),
(107, 'Metaphysical', 19),
(108, 'Property', 19),
(109, 'Services', 19),
(110, 'Ticket & Events', 19),
(111, 'Travels', 19),
(112, 'Diecast', 20),
(113, 'Fisher Price', 20),
(114, 'Games', 20),
(115, 'Lot Cars', 20),
(116, 'Marbles', 20),
(117, 'Toy Soldiers', 20),
(118, 'Mobile', 6),
(119, 'Mobile Accessories', 6),
(122, 'Books', 4),
(123, 'Hd Camera', 5),
(125, 'Jeans', 7),
(126, 'Shirt', 7),
(127, 'Golden Watch', 7),
(128, 'Old Coin', 8),
(129, 'Stamp', 8),
(130, 'Health', 15),
(131, 'Beauty', 15),
(132, 'Gold', 17),
(133, 'Silver', 17),
(134, 'General', 21);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auctionmaster`
--
ALTER TABLE `auctionmaster`
  ADD CONSTRAINT `auctionmaster_ibfk_1` FOREIGN KEY (`itid`) REFERENCES `itemmaster` (`itid`);

--
-- Constraints for table `bidreport`
--
ALTER TABLE `bidreport`
  ADD CONSTRAINT `bidreport_ibfk_1` FOREIGN KEY (`itid`) REFERENCES `itemmaster` (`itid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`stid`) REFERENCES `state` (`stid`);

--
-- Constraints for table `itembuyer`
--
ALTER TABLE `itembuyer`
  ADD CONSTRAINT `itembuyer_ibfk_1` FOREIGN KEY (`itid`) REFERENCES `itemmaster` (`itid`),
  ADD CONSTRAINT `itembuyer_ibfk_2` FOREIGN KEY (`regid`) REFERENCES `registration` (`regid`);

--
-- Constraints for table `itemmaster`
--
ALTER TABLE `itemmaster`
  ADD CONSTRAINT `itemmaster_ibfk_3` FOREIGN KEY (`subid`) REFERENCES `subcategory` (`subid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itemmaster_ibfk_4` FOREIGN KEY (`regid`) REFERENCES `registration` (`regid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`ctid`) REFERENCES `city` (`ctid`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `category` (`catid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
