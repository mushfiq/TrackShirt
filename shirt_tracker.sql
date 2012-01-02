-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2012 at 01:02 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shirt_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lot_number` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `print_date` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `print_location` varchar(100) NOT NULL,
  `contact_bussiness` varchar(100) NOT NULL,
  `contact_city` varchar(100) NOT NULL,
  `contact_state` varchar(50) NOT NULL,
  `contact_zip_code` varchar(10) NOT NULL,
  `contact_phone` varchar(10) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `general_conformity_certificate` varchar(100) NOT NULL,
  `shirt_cpsia_certification` varchar(100) NOT NULL,
  `ink_cpsia_certification` varchar(100) NOT NULL,
  `vinyl_lettering_cpsia_certification` varchar(1000) NOT NULL,
  `product_entry_time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `lot_number`, `print_date`, `print_location`, `contact_bussiness`, `contact_city`, `contact_state`, `contact_zip_code`, `contact_phone`, `product_image`, `general_conformity_certificate`, `shirt_cpsia_certification`, `ink_cpsia_certification`, `vinyl_lettering_cpsia_certification`, `product_entry_time`) VALUES
(1, 'asdasd', 'asdasd', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(2, '123213', '12/12/12', 'Dhaka', 'Dhaka', 'Dhaka', '', '', '', '', '', '', '', '', '0000-00-00'),
(3, '2323', '12/12/12', 'Ctg', 'Ctg', 'Ctg', '', '', '', '', '', '', '', '', '0000-00-00'),
(4, '12', '12', '12', '12', '12', '', '', '', '', '', '', '', '', '0000-00-00'),
(5, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'adsasd', '', '', '', '', '', '', '', '', '0000-00-00'),
(6, '1212', '12/12/12', 'Dhaka', 'asdasd', 'asdasd', '', '', '', '', '', '', '', '', '0000-00-00'),
(7, '123', '123', '12312', '123', '123', '123', '123123', '', '', '', '', '', '', '0000-00-00'),
(8, '123', '123', '123123', 'waedqwe', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(9, 'ami', 'ami', 'ami', 'adasd', 'asd', 'asd', 'asd', 'asd', '', '', '', '', '', '0000-00-00'),
(10, 'ami', 'ami', 'ami', 'ami', 'ami', 'ami', 'ami', 'ami', '', '', '', '', '', '0000-00-00'),
(11, 'test', 'test', 'test', 'ters', 'stet', 'stet', 'steta', 'tesat', '', '', '', '', '', '0000-00-00'),
(12, 'qweqwe', 'qweqwe', 'qweqwe', 'qweqw', 'qweqwe', 'qweqwe', 'qweqwe', 'qwe', '', '', '', '', '', '0000-00-00'),
(38, '321', '03-01-2011', 'Dhk', 'Ctg', 'NYC', 'NY', '1230', '0171048176', 'opensource_camo_10.jpg', 'test.txt', 'release_party.jpg', 'bs.pdf', 'ger.pdf', '1325529566'),
(14, 'test', 'test', 'test', 'test', 'tset', '', '', '', '', '', '', '', '', '0000-00-00'),
(15, '09', '09', '09', '09', '09', '09', '09', '09', '', '', '', '', '', '0000-00-00'),
(16, '123123', '123123', '123123', '123123', '123123', '123123', '', '', '', '', '', '', '', '0000-00-00'),
(17, 'we', 'we', 'we', 'we', 'we', 'we', '', '', '', '', '', '', '', '0000-00-00'),
(18, 'weasdasd', 'we', 'we', 'we', 'we', 'we', '', '', '', '', '', '', '', '0000-00-00'),
(19, 'qweqwe', 'we', 'we', 'we', 'we', 'we', '', '', '', '', '', '', '', '0000-00-00'),
(20, '0987', '12-12-12', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '1230', '0171048176', '', '', '', '', '', '0000-00-00'),
(21, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(22, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(24, '323233', '232323', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(25, 'm', 'm', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(26, 'm', 'm', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(27, 'dasdas', 'adasd', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(28, 'asdasd', 'adasd', '', '', '', '', '', '', '325973_2621101409669_1319196225_33076322_993537512_o.jpg', '', '', '', '', '0000-00-00'),
(29, 'mushfiq', 'mushfiq', 'Dhaka', 'Ctg', 'Ctg', '', '4230', 'zsdfsd', '325973_2621101409669_1319196225_33076322_993537512_o.jpg', '', '', '', '', '0000-00-00'),
(30, 'asdasd', 'sdfsdf', 'sdf', 'Ctg', 'Dhaka', '', '', '', 'joomla_workshop_08.jpg', '', '', '', '', '0000-00-00'),
(31, '123', '12-12-12', 'Dhaka', 'Ctg', 'Dhaka', 'NY', '1230', '0171048176', 'ubunu_8.04_release_party.jpg', '', '', '', '', '0000-00-00'),
(32, 'asda', 'asdasd', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(33, 'asda', 'asdasd', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(34, 'asda', 'asdasd', '', '', '', '', '', '', 'seven_wonders_camp.jpg', '', '', '', '', '0000-00-00'),
(35, 'rgere', 'err', '', '', '', '', '', '', 'ubunu_8.04_release_party.jpg', 'bs.pdf', '', '', '', '0000-00-00'),
(36, '34567890', '12/12/12', 'Dhaka', 'Chittagong', 'Dhaka', 'NY', '1230', '0171048176', 'opensource_camo_10.jpg', 'ger.pdf', 'study_in_germany.pdf', 'bs.pdf', 'study_in_germany.pdf', '0000-00-00'),
(37, 'new', 'new', 'new', 'new', 'new', '', 'new', 'new', '325973_2621101409669_1319196225_33076322_993537512_o.jpg', 'opensource_camo_10.jpg', 'seven_wonders_camp.jpg', 'linux_administration_09.jpg', 'ubunu_8.04_release_party.jpg', '1325526313');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
