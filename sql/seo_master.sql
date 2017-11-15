-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 01:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rvmax`
--

-- --------------------------------------------------------

--
-- Table structure for table `seo_master`
--

CREATE TABLE `seo_master` (
  `id` int(11) NOT NULL,
  `sm_page` text NOT NULL,
  `sm_page_title` text NOT NULL,
  `sm_keyword` text NOT NULL,
  `sm_description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `last_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo_master`
--

INSERT INTO `seo_master` (`id`, `sm_page`, `sm_page_title`, `sm_keyword`, `sm_description`, `created_date`, `last_updated`) VALUES
(1, 'Home', 'Rvmax-Home', 'rvmax-home', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:02:23', '0000-00-00 00:00:00'),
(2, 'Contact Us', 'Rvmax-contact', 'contact-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:07:14', '0000-00-00 00:00:00'),
(3, 'Consignment', 'Rvmax-Consignment', 'consignment-keyword', 'RVMAX.us, New & Used RVs, motorhomes, campers and more.', '2017-11-08 11:08:25', '0000-00-00 00:00:00'),
(4, 'Aboust Us', 'Rvmax-About us', 'about_us-keyword', 'New & Used RVs, motorhomes, campers and more.  RVMAX.US is a family RV dealer located in South Carolina. We are an authorized dealers for light weight travel trailers, fifth wheels and toy haulers', '2017-11-08 11:10:30', '0000-00-00 00:00:00'),
(5, 'Search', 'Rvmax-Search with model and stockes', 'search-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:11:33', '0000-00-00 00:00:00'),
(6, 'Top Seller Awards', 'Rvmax-Top seller Awards', 'top_seller-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:15:16', '0000-00-00 00:00:00'),
(7, 'Single Inventory', 'Rvmax-Inventories in category classes wise ', 'inventory-keyword', 'inventory-description', '2017-11-08 11:17:28', '0000-00-00 00:00:00'),
(8, 'Links', 'RV Sales in SC - South Carolina RV Dealers - Auction RVs Rvs4less.com \noffers the widest selection in new and used Rvs. Visit us on ebay for our rv \nauction specials.', 'links-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:18:36', '0000-00-00 00:00:00'),
(9, 'Legal Notice', 'Rvmax- Legal|Notice', 'legal_notice-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:21:53', '0000-00-00 00:00:00'),
(10, 'Terms & Conditions', 'Rvmax- Terms & Conditions', 'terms-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:23:50', '0000-00-00 00:00:00'),
(11, 'Warranties', 'RV Sales in SC - South Carolina RV Dealers - Auction RVs Rvs4less.com \noffers the widest selection in new and used Rvs. Visit us on ebay for our rv \nauction specials.', 'warranties-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:24:44', '0000-00-00 00:00:00'),
(12, 'Rv Life', 'RV Experience - Buy Repo and Used RVs from RVMAX.us.', 'rv_life-keyword', 'rv_life-description', '2017-11-08 11:25:49', '0000-00-00 00:00:00'),
(13, 'CLASS A DIESEL', 'Class A Diesel RVs. Consignment and Repo Rvs from RVMAX.us.', 'class_a_diesel-keyword', 'Used RVs for Sale, Consignment motorhomes, campers and more. Located in South Carolina.', '2017-11-08 11:33:49', '0000-00-00 00:00:00'),
(14, 'CLASS A GAS', 'Class A Gas RVs. Consignment and Repo Rvs from RVMAX.us.', 'Class_a_gas-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:37:17', '0000-00-00 00:00:00'),
(15, 'CLASS B & C', 'Repossessed Class B&C Rvs for Sale - Repossessed Rvs.', 'class_b&c-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:41:39', '0000-00-00 00:00:00'),
(16, 'Feedback page', 'Rvmax-Feedback', 'feedback-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:43:26', '0000-00-00 00:00:00'),
(17, 'Credit Application', 'Rvmax-cerdit Aapplication', 'credit-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 11:47:41', '0000-00-00 00:00:00'),
(18, 'Inventory', 'Rvmax-Inventory', 'inventory-keyword', 'rv dealers greenville sc, rv sales in south caroli...', '2017-11-08 12:19:30', '0000-00-00 00:00:00'),
(19, 'Credit_applcation', 'Credit Application', 'credit-keyword', 'rv dealers greenville sc, rv sales in south carolina, rv dealer auction, nc rv dealers, rv campers for sale, class a rv for sale, ebay rv auction, rv dealers in sc, used rv auction, rv sales sc, rv sales south carolina, class c rv for sale, south carolina rv auction, used class c rv for sale, sc rv dealers', '2017-11-08 12:27:22', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seo_master`
--
ALTER TABLE `seo_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seo_master`
--
ALTER TABLE `seo_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
