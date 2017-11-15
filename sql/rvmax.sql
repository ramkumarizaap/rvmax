-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 04:24 PM
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
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `username`, `email`, `password`, `role`, `created_date`, `updated_date`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2017-10-12 07:21:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Active','Incative') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(1, 'CLASS A DIESEL', 'Active'),
(2, 'CLASS A GAS', 'Active'),
(3, 'CLASS B & C', 'Active'),
(4, 'TRAVEL TRAILERS & 5th Wheels', 'Active'),
(5, 'BOATS & CRUISERS', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aboutus` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `phone`, `email`, `aboutus`, `created_date`, `updated_date`) VALUES
(2, 'rajkumar', 'IOJHOI', '1345678945', 'jhfguygthj@gmail.com', 'Other', '2017-10-13 03:51:03', '2017-10-13 04:27:44'),
(3, 'sureskumar', 'chinnasamy', '12345674894', 'dfgfdgdfg@gmail.com', 'Mailer', '2017-10-13 03:52:26', '2017-10-13 04:27:23'),
(4, 'mahendran', 'chinnasamy', '12345674894', 'fdgdfgdfgdfg@gmail.com', 'Internet Search', '2017-10-13 03:52:36', '2017-10-13 04:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(55) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `security_number` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `residence_time` varchar(100) NOT NULL,
  `home_phone` varchar(100) NOT NULL,
  `cell_phone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `drive_lisence` varchar(255) NOT NULL,
  `issue_date` varchar(255) NOT NULL,
  `expir_date` varchar(100) NOT NULL,
  `pre_address` longtext NOT NULL,
  `pre_city` varchar(255) NOT NULL,
  `pre_state` varchar(255) NOT NULL,
  `pre_zipcode` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `emp_address` longtext NOT NULL,
  `emp_city` varchar(255) NOT NULL,
  `emp_state` varchar(255) NOT NULL,
  `emp_zipcode` varchar(255) NOT NULL,
  `work_phone` varchar(255) NOT NULL,
  `howlong` varchar(255) NOT NULL,
  `annual_salary` varchar(255) NOT NULL,
  `bankruptcy` varchar(255) NOT NULL,
  `bank_discharged` varchar(255) NOT NULL,
  `ever_finance` varchar(255) NOT NULL,
  `who_finance` varchar(255) NOT NULL,
  `trading_vehicle` varchar(255) NOT NULL,
  `kind_vehicle` varchar(255) NOT NULL,
  `down_payment` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `firstname`, `middlename`, `lastname`, `birthday`, `security_number`, `address`, `city`, `state`, `zipcode`, `residence_time`, `home_phone`, `cell_phone`, `email`, `drive_lisence`, `issue_date`, `expir_date`, `pre_address`, `pre_city`, `pre_state`, `pre_zipcode`, `employer`, `occupation`, `emp_address`, `emp_city`, `emp_state`, `emp_zipcode`, `work_phone`, `howlong`, `annual_salary`, `bankruptcy`, `bank_discharged`, `ever_finance`, `who_finance`, `trading_vehicle`, `kind_vehicle`, `down_payment`, `created_date`, `updated_date`) VALUES
(3, 'premkumar', 'jghjkhkh', 'chinna', '54654', '546546', 'asdaad', 'erode', 'tamilnadu', '123456', '12', '1236987458', '216569966', 'mahe@gmail.co', 'jhfgjhghg', 'jkghkjhkjh', '4578548', 'hgjhkjerjhkjh', '', 'uigjg', 'jhgjhgjhg', 'jhgjhgjhg', 'jhgjhgjhg', 'kdfghdfkjhdfkkjh', 'erode', 'gjghjhg', 'jhgjhg', '465897978', '6546546', '2313465', 'Select', 'N/A', 'Select', 'kjuyhkjhkjh', 'kjhkjhkjhkjh', 'kjhkjhkjhkjh', 'kjhkjhkjhkj', '2017-10-16 08:01:46', '2017-10-16 09:11:39'),
(4, 'mahendran', 'jghjkhkh', 'chinna', '54654', '546546', 'cvbbbbbbbbbb', 'jhgjhg', 'jhgjhgjhg', '54656546', '65465465', '6544654', '65465465465465', 'mahe@gmail.com', '55', '545465', '654654654', 'jhgjhgjkhgjgjhgjghg', '', 'kjhgjkjhgkjh', '65465654', 'jkhkjhkjkjhkjh', 'kjhkjhkjhkjh', 'jhkjhkjhkjhkjhjkh', 'kjhkjhkjhjk', 'kjhkjhkjh', '65465487', '564687987987', '654654', '56465465', 'Yes', 'Yes', 'Yes', 'kjuyhkjhkjh', 'kjhkjhkjhkjh', 'kjhkjhkjhkhkjh', 'kjhkjhkjhkj', '2017-10-16 08:02:28', '2017-10-16 09:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` longtext NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`, `status`, `created_date`, `updated_date`) VALUES
(2, 'C. L, England', 'RV as described, trustworthy ebayer, looking forward to using it. Many thanks', 'Active', '2017-10-23 09:48:13', '2017-10-26 09:51:56'),
(3, 'J. F, Southfield, MI', 'They provided very friendly and thorough service when I arrived to pickup my RV.', 'Active', '2017-10-23 10:01:26', '2017-10-26 09:52:16'),
(4, 'H. C, Taylors, SC', 'An excellent buying experience! I\'d buy from rvs4less again-no problem!', 'Active', '2017-10-23 10:01:52', '2017-10-26 09:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `filepath` text NOT NULL,
  `filename` text NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `banner_image` text NOT NULL,
  `hitch_weight` varchar(255) NOT NULL,
  `gross_weight` varchar(255) NOT NULL,
  `fresh_water_capacity` varchar(255) NOT NULL,
  `grey_water_capacity` varchar(255) NOT NULL,
  `black_water_capacity` varchar(255) NOT NULL,
  `furnace_btu` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `chassis` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `sleeps` varchar(255) NOT NULL,
  `slides` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `interior` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `more_info` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `stock`, `year`, `make`, `model`, `vin`, `mileage`, `length`, `height`, `filepath`, `filename`, `youtube_url`, `banner_image`, `hitch_weight`, `gross_weight`, `fresh_water_capacity`, `grey_water_capacity`, `black_water_capacity`, `furnace_btu`, `engine`, `chassis`, `type`, `condition`, `sleeps`, `slides`, `price`, `sale_price`, `location`, `interior`, `description`, `more_info`, `created_date`, `last_updated`) VALUES
(1, 'berk08', '2008', 'FOREST RIVER', 'BERKSHIRE 40QS', '', '', '40', '', 'http://localhost/rvmax/assets/img/inventory/', 'berkshire09175809.JPG,berkshire0917582.JPG,berkshire0917621.JPG', 'https://www.youtube.com/embed/PzB8dr4RTsQ?rel=0&controls=0', 'slide--1.jpg', '', '', '', '', '', '', 'Cummins 8.3', 'Freightliner', 1, 'USED', '6', '4', '87500.00', '84995.00', '', '', '<p>This 2008 Forest River Berkshire has great curb appeal which is helped by a glossy full body paint finish. Generator runs great and is relatively quiet. Duel zoned air conditioning helps keep the coach cool in the heat. New waterproof synthetic hardwood flooring throughout the coach as well,</p>', 'http://www.rvt.com/rvdetail.php?id=7638709&preview=1', '2017-10-26 11:48:46', '0000-00-00 00:00:00'),
(2, '08george', '2008', 'FOREST RIVER', 'GEORGETOWN 373DS', '', '', '37', '715', 'http://localhost/rvmax/assets/img/inventory/', '763870919.jpg', 'https://www.youtube.com/embed/a-r3jom8k_o?rel=0&amp;controls=0&amp;showinfo=0', 'slide--2.jpg', '', '', '', '', '', '', 'FORD V10', 'FORD', 2, 'USED', '4', '2', '49995.00', '47500.00', '', '', '<p>This is a one owner low miles very nice Georgetown with hardwood floors.</p><p>Please click on \"More Info\" to see more pictures and a video.</p><p>Please text 864 376 5600 or 864 404 0054</p>', '', '2017-10-26 12:37:26', '0000-00-00 00:00:00'),
(3, '03alfa', '2003', 'ALFA', 'SEE YA 36FD', '', '', '38', '532', 'http://localhost/rvmax/assets/img/inventory/', 'terra30617108781.JPG', 'https://www.youtube.com/embed/BuKQg_cDkC4?rel=0&amp;controls=0&amp;showinfo=0', 'slide--3.jpg', '', '', '', '', '', '', '330 CAT', 'FREIGHTLINER', 1, 'USED', '4', '2', '59995.00', '49995.00', '', '', '<p>This is a RECENT TRADE IN 2003 aLFA with hardwood floors.</p><p>Please click on \"More Info\" to see more pictures and a video. Please text 864 376 5600 or 864 404 0054</p>', '', '2017-10-26 12:45:04', '0000-00-00 00:00:00'),
(4, '2000Bounderdiesel', '2000', 'FLEETWOOD', 'BOUNDER 36S DIESEL PUSHER', '', '', '36', '532', 'http://localhost/rvmax/assets/img/inventory/', '720069728.jpg,72006975.jpg', 'https://www.youtube.com/embed/yeqNP9uM4yo?rel=0&amp;controls=0&amp;showinfo=0', 'slide--4.jpg', '', '', '', '', '', '', 'Cummins ISB 275hp', 'FREIGHTLINER', 1, 'USED', '4', '1', '39995.00', '34995.00', '', '', 'Please click on \"More Info\" to see more pictures and detailed description&nbsp;', 'http://www.rvt.com/rvdetail.php?id=7200697&preview=1', '2017-10-26 12:49:34', '0000-00-00 00:00:00'),
(5, '06nav', '2006', 'HOLIDAY RAMBLER', 'NAVIGATOR 43PBQ', '', '', '43', '1200', 'http://localhost/rvmax/assets/img/inventory/', 'gator07164732.JPG,gator07164738.JPG', '', 'video--bg3.jpg', '', '', '', '', '', '', 'Detroit Series 60', 'RoadMaster', 1, 'USED', '5', '4', '149995.00', '149995.00', '', '', '2006 Holiday Rambler&nbsp; Navigator 43PBQ, One owner, trade in unit on a Prevost Conversion bus, loaded with all the options including Mac Daddy of diesel engines Detroit Series 60 515hp with 1650 lb/ft torque! Aquahot heating, electric power slide tray for storage, all power awnings, remote keyless entry, one piece solid fiberglass roof with 3 AC / heat pumps, panoramic one piece windshield, sliding 10000 watts generator with low hours, recently been serviced by Detroit diesel shop. Air leveling, Roadmaster chassis with 10 airbags, runs supersmooth!! Its pretty much road and camp ready for your travel, this coach was sold very close to half a million dollars, here is your chance to own it for a bargain! Please watch YouTube video provided in this advertisement. Click on MORE INFO to see more pics and video', '', '2017-10-26 12:54:20', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
