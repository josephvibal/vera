-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2016 at 08:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vera_book_keeping`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `company_name` varchar(150) DEFAULT NULL,
  `legal_name` varchar(150) DEFAULT NULL,
  `tax_id` varchar(150) DEFAULT NULL,
  `street_address` text,
  `city` text,
  `phone` varchar(120) DEFAULT NULL,
  `fax` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `website` varchar(120) DEFAULT NULL,
  `type_of_org` varchar(120) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`id`, `company_id`, `company_name`, `legal_name`, `tax_id`, `street_address`, `city`, `phone`, `fax`, `email`, `website`, `type_of_org`, `logo`, `created_at`, `updated_at`, `deleted_at`, `created_by`) VALUES
(1, 3, 'abc', 'abc', '000-000-001', 'blah', 'blah', 'asd', NULL, 'zheijen@yahoo.com', 'adds', 'Advertising', NULL, '2016-07-29 06:15:57', '2016-07-29 06:15:57', NULL, '1'),
(2, 4, 'abc5', 'abc5', '000-000-002', 'asd', 'asd', 'asd', NULL, 'zheijen2@yahoo.com', 'www.hello.com', 'Art, Writing, or Photography', NULL, '2016-07-29 06:32:24', '2016-07-29 06:32:24', NULL, '1'),
(3, 5, 'abc5d', 'abc5d', '000-000-003', 'asd', 'asd', 'asd', NULL, 'zheijend2@yahoo.com', 'www.hello.com', 'Art, Writing, or Photography', NULL, '2016-07-29 06:42:24', '2016-07-29 06:42:24', NULL, '1'),
(4, 7, 'abc enterprise', 'abc enterprise', '000-000-005', 'blah', 'asd', 'asd', NULL, 'a@wa.com', 'www.hello.com', 'General Service-based Business', NULL, '2016-07-29 09:19:20', '2016-07-29 09:19:20', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `industry_type`
--

CREATE TABLE `industry_type` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industry_type`
--

INSERT INTO `industry_type` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Accounting or Bookkeeping', 'Accounting or Bookkeeping', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(2, 'Advertising or Public Relations', 'Advertising or Public Relations', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(3, 'Agriculture, Ranching, or Farming', 'Agriculture, Ranching, or Farming', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(4, 'Art, Writing, or Photography', 'Art, Writing, or Photography', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(5, 'Automotive Sales or Repair', 'Automotive Sales or Repair', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(6, 'Church or Religious Organization', 'Church or Religious Organization', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(7, 'Construction General Contractor', 'Construction General Contractor', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(8, 'Construction Trades (Plumber,Electrician,HVAC,etc)', 'Construction Trades (Plumber,Electrician,HVAC,etc)', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(9, 'Design, Architecture, or Engineering', 'Design, Architecture, or Engineering', NULL, NULL),
(10, 'Financial Services other than Accounting or Bookkeeping', 'Financial Services other than Accounting or Bookkeeping', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(11, 'Hair Salon, Beauty Salon, or Barbershop', 'Hair Salon, Beauty Salon, or Barbershop', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(12, 'Information Technology (Computer, Software)', 'Information Technology (Computer, Software)', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(13, 'Insurance Agency or Broker', 'Insurance Agency or Broker', NULL, NULL),
(14, 'Lawn Care or Landscaping', 'Lawn Care or Landscaping', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(15, 'Legal Services', 'Legal Services', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(16, 'Lodging (Hotel, Motel)', 'Lodging (Hotel, Motel)', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(17, 'Manufacturer Representative or Agent', 'Manufacturer Representative or Agent', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(18, 'Manufacturing', 'Manufacturing', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(19, 'Medical, Dental, or Health Service', 'Medical, Dental, or Health Service', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(20, 'Non-Profit', 'Non-Profit', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(21, 'Professional Consulting', 'Professional Consulting', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(22, 'Property Management or Home Association', 'Property Management or Home Association', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(23, 'Real Estate Brokerage or Developer', 'Real Estate Brokerage or Developer', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(24, 'Rental', 'Rental', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(25, 'Repair and Maintenance', 'Repair and Maintenance', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(26, 'Restaurant, Caterer, or Bar', 'Restaurant, Caterer, or Bar', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(27, 'Retail Shop or Online Commerce', 'Retail Shop or Online Commerce', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(28, 'Sales: Independent Agent', 'Sales: Independent Agent', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(29, 'Transportation, Trucking, or Delivery', 'Transportation, Trucking, or Delivery', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(30, 'WholeSale Distribution and Sales', 'WholeSale Distribution and Sales', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(31, 'General Product-based Business ', 'General Product-based Business ', '2016-07-26 00:00:00', '2016-07-26 00:00:00'),
(32, 'General Service-based Business ', 'General Service-based Business ', '2016-07-26 00:00:00', '2016-07-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `company_name` varchar(150) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `password_temp` varchar(60) DEFAULT NULL,
  `code` varchar(60) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `password_expiration_date` datetime DEFAULT NULL,
  `login_attempt` int(11) DEFAULT NULL,
  `initial_login` varchar(10) DEFAULT NULL,
  `old_password` varchar(100) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `role` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company_name`, `email`, `username`, `password`, `password_temp`, `code`, `active`, `created_at`, `updated_at`, `remember_token`, `password_expiration_date`, `login_attempt`, `initial_login`, `old_password`, `admin`, `role`) VALUES
(1, 'vera', 'vera@gmail.com', 'admin', '$2y$10$rAvjASm0SBvnNwTxYBH/ouRI0Hnit1MWNuzBv8aldlp7nGOnekAnO', NULL, NULL, 1, NULL, '2016-08-03 11:07:09', 'KyI5rtwzP2fOLxmttAyZcHEhdZ6WxII0iufxbyPFBabVCYdX0QalCo9NzN2P', NULL, NULL, NULL, NULL, 1, '1'),
(3, 'abc', 'zheijen@yahoo.com', 'zheijen@yahoo.com', '$2y$10$J/ckz9JuNu0JnsiyuyVt..Q0Awe3kiBPdMuMqvEnUaQNSM/19HvrG', NULL, 'E3GP9c3tgCaBcDoU5Id2miYleqljwTWtwi7bsK1atQ8yu1jDaDsF6dZlSfVr', 0, '2016-07-29 06:15:57', '2016-07-29 06:15:57', NULL, NULL, NULL, NULL, '$2y$10$J/ckz9JuNu0JnsiyuyVt..Q0Awe3kiBPdMuMqvEnUaQNSM/19HvrG', 0, '0'),
(4, 'abc5', 'zheijen2@yahoo.com', 'zheijen2@yahoo.com', '$2y$10$CEJ.yaUdj2vMPBib0pHBbOrNp6mAc.dx3jgKub4X8k5mXBhuTgrfm', NULL, 'geOYRc9TtpmsTWTnGIsVf5yE6u7MrTOzsvH7IedbxSzvEKJqU2x5Bb7zT2aD', 0, '2016-07-29 06:32:24', '2016-07-29 06:32:24', NULL, NULL, NULL, NULL, '$2y$10$CEJ.yaUdj2vMPBib0pHBbOrNp6mAc.dx3jgKub4X8k5mXBhuTgrfm', 0, '0'),
(5, 'abc5d', 'zheijend2@yahoo.com', 'zheijend2@yahoo.com', '$2y$10$U2uBkkbxkXcU8TflMzjDROZaeulEaEx1jvIiD/5U//3WoBcdyk12u', NULL, 'AUrMEhP4tZwTyJ0u45nREMMzoycsPecfF1QYwzFcxQSgVjCc1ZylG0fr6CSX', 0, '2016-07-29 06:42:24', '2016-07-29 06:42:24', NULL, NULL, NULL, NULL, '$2y$10$U2uBkkbxkXcU8TflMzjDROZaeulEaEx1jvIiD/5U//3WoBcdyk12u', 0, '0'),
(6, 'www', 'a@a.com', 'a@a.com', '$2y$10$kPEL233CLQx7cRuQtBrd0uCPvudB8xVJPcht4voLdOo9V8xzb5/ca', NULL, 'PoSurrAMhlaeNCDHKVzjcRQLU5v9II2HWxwN7Vn9voyirKQ8PtBQxJiikXt9', 0, '2016-07-29 09:17:09', '2016-07-29 09:17:09', NULL, NULL, NULL, NULL, '$2y$10$kPEL233CLQx7cRuQtBrd0uCPvudB8xVJPcht4voLdOo9V8xzb5/ca', 0, '0'),
(7, 'abc enterprise', 'a@wa.com', 'a@wa.com', '$2y$10$lxo/CutqNbQaKkEkYsjx2uFuzqUZM.9X5fBOaDvWfP/nZyaj.ZQwy', NULL, 'ItxbzdgfDQquZ2RjsCEPXOmXV1J5G6171mMnYp5ErscZ0zOOaYzx56XRh6Kd', 0, '2016-07-29 09:19:20', '2016-07-29 09:19:20', NULL, NULL, NULL, NULL, '$2y$10$lxo/CutqNbQaKkEkYsjx2uFuzqUZM.9X5fBOaDvWfP/nZyaj.ZQwy', 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_type`
--
ALTER TABLE `industry_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `industry_type`
--
ALTER TABLE `industry_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
