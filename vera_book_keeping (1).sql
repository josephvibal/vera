-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 11:11 AM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `on_post` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `from_user` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(4, 7, 'abc enterprise', 'abc enterprise', '000-000-005', 'blah', 'asd', 'asd', NULL, 'a@wa.com', 'www.hello.com', 'General Service-based Business', NULL, '2016-07-29 09:19:20', '2016-07-29 09:19:20', NULL, '1'),
(17, 20, 'test2', 'test2', '111-000-111', 'asd', 'asd', '6464654', NULL, 'josephvibal@gmail.com', 'http://loopsoft-techcorp.com', 'WholeSale Distribution and Sales', NULL, '2016-08-08 09:01:53', '2016-08-08 09:01:53', NULL, '1'),
(18, 21, 'test2', 'test2', '111-000-111', 'asd', 'asd', '6464654', NULL, 'josephvibal@gmail.com', 'http://loopsoft-techcorp.com', 'WholeSale Distribution and Sales', NULL, '2016-08-08 09:01:53', '2016-08-08 09:01:53', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `original_name` text NOT NULL,
  `storage_name` text NOT NULL,
  `storage_path` text,
  `file_type` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `list_of_files`
--

CREATE TABLE `list_of_files` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `form_title` varchar(250) DEFAULT NULL,
  `form_description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_files`
--

INSERT INTO `list_of_files` (`id`, `type`, `form_title`, `form_description`, `created_at`, `updated_at`) VALUES
(1, 1, '0605', 'Payment Form', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(2, 1, '1601C', 'Monthly Remittance Return of Income Taxes Withheld on Compensation', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(3, 1, '1601E', 'Monthly Remittance Return of Creditable Income Taxes Withheld (Expanded)', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(4, 1, '1604CF', 'Annual Information Return of Income Tax Withheld on Compensation and Final Withholding Taxes', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(5, 1, '1905', 'Application for Registration Information Update for Updating / Cancellation of Registration / Cancellation of TIN / New Copy of TIN card / New copy of Certificate of Registration', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(6, 1, '1906', 'Application for Authority to Print Receipts and Invoices', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(7, 1, '1907', 'Application for Permit to Use Cash Register machines/Point-of-Sale Machine', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(8, 1, '2000', 'Documentary Stamps Tax Declaration/ Return', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(9, 1, '2000-OT', 'Documentary Stamp Tax Declaration/Return (One Time Transactions)', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(10, 1, '2110', 'Application for Abatement or Cancellation of Tax, Penalties and/or Interest Under Rev. Reg. No. ______', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(11, 1, '2200 A', 'Excise Tax Return for Alcohol Products', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(12, 1, '2200 AN', 'Excise Tax Return for Automobiles and Non-Essential', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(13, 1, '2200 M', 'Excise Tax Return for Mineral Products', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(14, 1, '2307', 'Certificate of Creditable Tax Withheld at Source', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(15, 1, '2316', 'Certificate of Compensation Payment / Tax Withheld For Compensation Payment With or Without TAx Withheld', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(16, 1, '1701', 'Annual Income Tax Return for Self-Employed Individuals, Estates and Trust', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(17, 1, '1701Q', 'Quarterly Income Tax Return for Self-employed Individuals, Estates, and Trusts (Including Those with both Business and Compensation Income ) Description', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(18, 1, '1702Q', 'Quarterly Income Tax Return for Corporations, Partnerships and Other Non-Individual Taxpayers', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(19, 1, '1702-RT', 'Annual Income Tax Return for Corporations, Partnerships and Other Non-Individual Taxpayer Subject Only to REGULAR Income Tax Rate Description', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(20, 1, '2550M', 'Monthly Value-Added Tax Declaration', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(21, 1, '2550Q', 'Quarterly Value-Added Tax Declaration', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(22, 1, '2551M', 'Monthly Percentage Tax Return Description', '2016-08-05 15:25:00', '2016-08-05 15:25:00'),
(23, 2, 'G.I.S.', 'General Information Sheet', '2016-08-08 00:00:00', '2016-08-08 00:00:00'),
(24, 2, 'A.F.S.', 'Audited Financial Statement', '2016-08-08 00:00:00', '2016-08-08 00:00:00'),
(25, 3, 'D.T.I. permit', '', '2016-08-08 00:00:00', '2016-08-08 00:00:00'),
(26, 3, 'Mayor''s Permit', NULL, '2016-08-08 00:00:00', '2016-08-08 00:00:00'),
(27, 3, 'Fire Permit', NULL, '2016-08-08 00:00:00', '2016-08-08 00:00:00'),
(28, 3, 'Sanitary Permit', NULL, NULL, NULL),
(29, 3, 'Locational Permit', NULL, NULL, NULL),
(30, 3, 'S.S.S. Registration', NULL, NULL, NULL),
(31, 3, 'PHIL Health Registration', NULL, NULL, NULL),
(32, 3, 'Pag-Ibig Fund Registration', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `body`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', '<p>test</p>', 'test', 1, '2016-08-12 01:47:35', '2016-08-12 01:47:35'),
(2, 1, 'All about Euri', '<p>Si Euri ay isang batang makulit, pero siya ay mabait. :)</p>', 'all-about-euri', 1, '2016-08-12 13:42:21', '2016-08-12 13:42:21');
INSERT INTO `posts` (`id`, `author_id`, `title`, `body`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(3, 20, 'second user', '<p>/*!<br /> * skrollr core<br /> *<br /> * Alexander Prinzhorn - https://github.com/Prinzhorn/skrollr<br /> *<br /> * Free to use under terms of MIT license<br /> */<br />(function(window, document, undefined) {<br /> ''use strict'';</p>\r\n<p>/*<br /> * Global api.<br /> */<br /> var skrollr = window.skrollr = {<br /> get: function() {<br /> return _instance;<br /> },<br /> //Main entry point.<br /> init: function(options) {<br /> return _instance || new Skrollr(options);<br /> },<br /> VERSION: ''0.6.21''<br /> };</p>\r\n<p>//Minify optimization.<br /> var hasProp = Object.prototype.hasOwnProperty;<br /> var Math = window.Math;<br /> var getStyle = window.getComputedStyle;</p>\r\n<p>//They will be filled when skrollr gets initialized.<br /> var documentElement;<br /> var body;</p>\r\n<p>var EVENT_TOUCHSTART = ''touchstart'';<br /> var EVENT_TOUCHMOVE = ''touchmove'';<br /> var EVENT_TOUCHCANCEL = ''touchcancel'';<br /> var EVENT_TOUCHEND = ''touchend'';</p>\r\n<p>var SKROLLABLE_CLASS = ''skrollable'';<br /> var SKROLLABLE_BEFORE_CLASS = SKROLLABLE_CLASS + ''-before'';<br /> var SKROLLABLE_BETWEEN_CLASS = SKROLLABLE_CLASS + ''-between'';<br /> var SKROLLABLE_AFTER_CLASS = SKROLLABLE_CLASS + ''-after'';</p>\r\n<p>var SKROLLR_CLASS = ''skrollr'';<br /> var NO_SKROLLR_CLASS = ''no-'' + SKROLLR_CLASS;<br /> var SKROLLR_DESKTOP_CLASS = SKROLLR_CLASS + ''-desktop'';<br /> var SKROLLR_MOBILE_CLASS = SKROLLR_CLASS + ''-mobile'';</p>\r\n<p>var DEFAULT_EASING = ''linear'';<br /> var DEFAULT_DURATION = 1000;//ms<br /> var DEFAULT_MOBILE_DECELERATION = 0.004;//pixel/ms&sup2;</p>\r\n<p>var DEFAULT_SMOOTH_SCROLLING_DURATION = 200;//ms</p>\r\n<p>var ANCHOR_START = ''start'';<br /> var ANCHOR_END = ''end'';<br /> var ANCHOR_CENTER = ''center'';<br /> var ANCHOR_BOTTOM = ''bottom'';</p>\r\n<p>//The property which will be added to the DOM element to hold the ID of the skrollable.<br /> var SKROLLABLE_ID_DOM_PROPERTY = ''___skrollable_id'';</p>\r\n<p>var rxTouchIgnoreTags = /^(?:input|textarea|button|select)$/i;</p>\r\n<p>var rxTrim = /^\\s+|\\s+$/g;</p>\r\n<p>//Find all data-attributes. data-[_constant]-[offset]-[anchor]-[anchor].<br /> var rxKeyframeAttribute = /^data(?:-(_\\w+))?(?:-?(-?\\d*\\.?\\d+p?))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/;</p>\r\n<p>var rxPropValue = /\\s*([\\w\\-\\[\\]]+)\\s*:\\s*(.+?)\\s*(?:;|$)/gi;</p>\r\n<p>//Easing function names follow the property in square brackets.<br /> var rxPropEasing = /^([a-z\\-]+)\\[(\\w+)\\]$/;</p>\r\n<p>var rxCamelCase = /-([a-z])/g;<br /> var rxCamelCaseFn = function(str, letter) {<br /> return letter.toUpperCase();<br /> };</p>\r\n<p>//Numeric values with optional sign.<br /> var rxNumericValue = /[\\-+]?[\\d]*\\.?[\\d]+/g;</p>\r\n<p>//Used to replace occurences of {?} with a number.<br /> var rxInterpolateString = /\\{\\?\\}/g;</p>\r\n<p>//Finds rgb(a) colors, which don''t use the percentage notation.<br /> var rxRGBAIntegerColor = /rgba?\\(\\s*-?\\d+\\s*,\\s*-?\\d+\\s*,\\s*-?\\d+/g;</p>\r\n<p>//Finds all gradients.<br /> var rxGradient = /[a-z\\-]+-gradient/g;</p>\r\n<p>//Vendor prefix. Will be set once skrollr gets initialized.<br /> var theCSSPrefix = '''';<br /> var theDashedCSSPrefix = '''';</p>\r\n<p>//Will be called once (when skrollr gets initialized).<br /> var detectCSSPrefix = function() {<br /> //Only relevant prefixes. May be extended.<br /> //Could be dangerous if there will ever be a CSS property which actually starts with "ms". Don''t hope so.<br /> var rxPrefixes = /^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;</p>\r\n<p>//Detect prefix for current browser by finding the first property using a prefix.<br /> if(!getStyle) {<br /> return;<br /> }</p>\r\n<p>var style = getStyle(body, null);</p>\r\n<p>for(var k in style) {<br /> //We check the key and if the key is a number, we check the value as well, because safari''s getComputedStyle returns some weird array-like thingy.<br /> theCSSPrefix = (k.match(rxPrefixes) || (+k == k &amp;&amp; style[k].match(rxPrefixes)));</p>\r\n<p>if(theCSSPrefix) {<br /> break;<br /> }<br /> }</p>\r\n<p>//Did we even detect a prefix?<br /> if(!theCSSPrefix) {<br /> theCSSPrefix = theDashedCSSPrefix = '''';</p>\r\n<p>return;<br /> }</p>\r\n<p>theCSSPrefix = theCSSPrefix[0];</p>\r\n<p>//We could have detected either a dashed prefix or this camelCaseish-inconsistent stuff.<br /> if(theCSSPrefix.slice(0,1) === ''-'') {<br /> theDashedCSSPrefix = theCSSPrefix;</p>\r\n<p>//There''s no logic behind these. Need a look up.<br /> theCSSPrefix = ({<br /> ''-webkit-'': ''webkit'',<br /> ''-moz-'': ''Moz'',<br /> ''-ms-'': ''ms'',<br /> ''-o-'': ''O''<br /> })[theCSSPrefix];<br /> } else {<br /> theDashedCSSPrefix = ''-'' + theCSSPrefix.toLowerCase() + ''-'';<br /> }<br /> };</p>\r\n<p>var polyfillRAF = function() {<br /> var requestAnimFrame = window.requestAnimationFrame || window[theCSSPrefix.toLowerCase() + ''RequestAnimationFrame''];</p>\r\n<p>var lastTime = _now();</p>\r\n<p>if(_isMobile || !requestAnimFrame) {<br /> requestAnimFrame = function(callback) {<br /> //How long did it take to render?<br /> var deltaTime = _now() - lastTime;<br /> var delay = Math.max(0, 1000 / 60 - deltaTime);</p>\r\n<p>return window.setTimeout(function() {<br /> lastTime = _now();<br /> callback();<br /> }, delay);<br /> };<br /> }</p>\r\n<p>return requestAnimFrame;<br /> };</p>\r\n<p>var polyfillCAF = function() {<br /> var cancelAnimFrame = window.cancelAnimationFrame || window[theCSSPrefix.toLowerCase() + ''CancelAnimationFrame''];</p>\r\n<p>if(_isMobile || !cancelAnimFrame) {<br /> cancelAnimFrame = function(timeout) {<br /> return window.clearTimeout(timeout);<br /> };<br /> }</p>\r\n<p>return cancelAnimFrame;<br /> };</p>\r\n<p>//Built-in easing functions.<br /> var easings = {<br /> begin: function() {<br /> return 0;<br /> },<br /> end: function() {<br /> return 1;<br /> },<br /> linear: function(p) {<br /> return p;<br /> },<br /> quadratic: function(p) {<br /> return p * p;<br /> },<br /> cubic: function(p) {<br /> return p * p * p;<br /> },<br /> swing: function(p) {<br /> return (-Math.cos(p * Math.PI) / 2) + 0.5;<br /> },<br /> sqrt: function(p) {<br /> return Math.sqrt(p);<br /> },<br /> outCubic: function(p) {<br /> return (Math.pow((p - 1), 3) + 1);<br /> },<br /> //see https://www.desmos.com/calculator/tbr20s8vd2 for how I did this<br /> bounce: function(p) {<br /> var a;</p>\r\n<p>if(p &lt;= 0.5083) {<br /> a = 3;<br /> } else if(p &lt;= 0.8489) {<br /> a = 9;<br /> } else if(p &lt;= 0.96208) {<br /> a = 27;<br /> } else if(p &lt;= 0.99981) {<br /> a = 91;<br /> } else {<br /> return 1;<br /> }</p>\r\n<p>return 1 - Math.abs(3 * Math.cos(p * a * 1.028) / a);<br /> }<br /> };</p>\r\n<p>/**<br /> * Constructor.<br /> */<br /> function Skrollr(options) {<br /> documentElement = document.documentElement;<br /> body = document.body;</p>\r\n<p>detectCSSPrefix();</p>\r\n<p>_instance = this;</p>\r\n<p>options = options || {};</p>\r\n<p>_constants = options.constants || {};</p>\r\n<p>//We allow defining custom easings or overwrite existing.<br /> if(options.easing) {<br /> for(var e in options.easing) {<br /> easings[e] = options.easing[e];<br /> }<br /> }</p>\r\n<p>_edgeStrategy = options.edgeStrategy || ''set'';</p>\r\n<p>_listeners = {<br /> //Function to be called right before rendering.<br /> beforerender: options.beforerender,</p>\r\n<p>//Function to be called right after finishing rendering.<br /> render: options.render<br /> };</p>\r\n<p>//forceHeight is true by default<br /> _forceHeight = options.forceHeight !== false;</p>\r\n<p>if(_forceHeight) {<br /> _scale = options.scale || 1;<br /> }</p>\r\n<p>_mobileDeceleration = options.mobileDeceleration || DEFAULT_MOBILE_DECELERATION;</p>\r\n<p>_smoothScrollingEnabled = options.smoothScrolling !== false;<br /> _smoothScrollingDuration = options.smoothScrollingDuration || DEFAULT_SMOOTH_SCROLLING_DURATION;</p>\r\n<p>//Dummy object. Will be overwritten in the _render method when smooth scrolling is calculated.<br /> _smoothScrolling = {<br /> targetTop: _instance.getScrollTop()<br /> };</p>\r\n<p>//A custom check function may be passed.<br /> _isMobile = ((options.mobileCheck || function() {<br /> return (/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera);<br /> })());</p>\r\n<p>if(_isMobile) {<br /> _skrollrBody = document.getElementById(''skrollr-body'');</p>\r\n<p>//Detect 3d transform if there''s a skrollr-body (only needed for #skrollr-body).<br /> if(_skrollrBody) {<br /> _detect3DTransforms();<br /> }</p>\r\n<p>_initMobile();<br /> _updateClass(documentElement, [SKROLLR_CLASS, SKROLLR_MOBILE_CLASS], [NO_SKROLLR_CLASS]);<br /> } else {<br /> _updateClass(documentElement, [SKROLLR_CLASS, SKROLLR_DESKTOP_CLASS], [NO_SKROLLR_CLASS]);<br /> }</p>\r\n<p>//Triggers parsing of elements and a first reflow.<br /> _instance.refresh();</p>\r\n<p>_addEvent(window, ''resize orientationchange'', function() {<br /> var width = documentElement.clientWidth;<br /> var height = documentElement.clientHeight;</p>\r\n<p>//Only reflow if the size actually changed (#271).<br /> if(height !== _lastViewportHeight || width !== _lastViewportWidth) {<br /> _lastViewportHeight = height;<br /> _lastViewportWidth = width;</p>\r\n<p>_requestReflow = true;<br /> }<br /> });</p>\r\n<p>var requestAnimFrame = polyfillRAF();</p>\r\n<p>//Let''s go.<br /> (function animloop(){<br /> _render();<br /> _animFrame = requestAnimFrame(animloop);<br /> }());</p>\r\n<p>return _instance;<br /> }</p>\r\n<p>/**<br /> * (Re)parses some or all elements.<br /> */<br /> Skrollr.prototype.refresh = function(elements) {<br /> var elementIndex;<br /> var elementsLength;<br /> var ignoreID = false;</p>\r\n<p>//Completely reparse anything without argument.<br /> if(elements === undefined) {<br /> //Ignore that some elements may already have a skrollable ID.<br /> ignoreID = true;</p>\r\n<p>_skrollables = [];<br /> _skrollableIdCounter = 0;</p>\r\n<p>elements = document.getElementsByTagName(''*'');<br /> } else {<br /> //We accept a single element or an array of elements.<br /> elements = [].concat(elements);<br /> }</p>\r\n<p>elementIndex = 0;<br /> elementsLength = elements.length;</p>\r\n<p>for(; elementIndex &lt; elementsLength; elementIndex++) {<br /> var el = elements[elementIndex];<br /> var anchorTarget = el;<br /> var keyFrames = [];</p>\r\n<p>//If this particular element should be smooth scrolled.<br /> var smoothScrollThis = _smoothScrollingEnabled;</p>\r\n<p>//The edge strategy for this particular element.<br /> var edgeStrategy = _edgeStrategy;</p>\r\n<p>if(!el.attributes) {<br /> continue;<br /> }</p>\r\n<p>//Iterate over all attributes and search for key frame attributes.<br /> var attributeIndex = 0;<br /> var attributesLength = el.attributes.length;</p>\r\n<p>for (; attributeIndex &lt; attributesLength; attributeIndex++) {<br /> var attr = el.attributes[attributeIndex];</p>\r\n<p>if(attr.name === ''data-anchor-target'') {<br /> anchorTarget = document.querySelector(attr.value);</p>\r\n<p>if(anchorTarget === null) {<br /> throw ''Unable to find anchor target "'' + attr.value + ''"'';<br /> }</p>\r\n<p>continue;<br /> }</p>\r\n<p>//Global smooth scrolling can be overridden by the element attribute.<br /> if(attr.name === ''data-smooth-scrolling'') {<br /> smoothScrollThis = attr.value !== ''off'';</p>\r\n<p>continue;<br /> }</p>\r\n<p>//Global edge strategy can be overridden by the element attribute.<br /> if(attr.name === ''data-edge-strategy'') {<br /> edgeStrategy = attr.value;</p>\r\n<p>continue;<br /> }</p>\r\n<p>var match = attr.name.match(rxKeyframeAttribute);</p>\r\n<p>if(match === null) {<br /> continue;<br /> }</p>\r\n<p>var kf = {<br /> props: attr.value,<br /> //Point back to the element as well.<br /> element: el<br /> };</p>\r\n<p>keyFrames.push(kf);</p>\r\n<p>var constant = match[1];</p>\r\n<p>if(constant) {<br /> //Strip the underscore prefix.<br /> kf.constant = constant.substr(1);<br /> }</p>\r\n<p>//Get the key frame offset.<br /> var offset = match[2];</p>\r\n<p>//Is it a percentage offset?<br /> if(/p$/.test(offset)) {<br /> kf.isPercentage = true;<br /> kf.offset = (offset.slice(0, -1) | 0) / 100;<br /> } else {<br /> kf.offset = (offset | 0);<br /> }</p>\r\n<p>var anchor1 = match[3];</p>\r\n<p>//If second anchor is not set, the first will be taken for both.<br /> var anchor2 = match[4] || anchor1;</p>\r\n<p>//"absolute" (or "classic") mode, where numbers mean absolute scroll offset.<br /> if(!anchor1 || anchor1 === ANCHOR_START || anchor1 === ANCHOR_END) {<br /> kf.mode = ''absolute'';</p>\r\n<p>//data-end needs to be calculated after all key frames are known.<br /> if(anchor1 === ANCHOR_END) {<br /> kf.isEnd = true;<br /> } else if(!kf.isPercentage) {<br /> //For data-start we can already set the key frame w/o calculations.<br /> //#59: "scale" options should only affect absolute mode.<br /> kf.offset = kf.offset * _scale;<br /> }<br /> }<br /> //"relative" mode, where numbers are relative to anchors.<br /> else {<br /> kf.mode = ''relative'';<br /> kf.anchors = [anchor1, anchor2];<br /> }<br /> }</p>\r\n<p>//Does this element have key frames?<br /> if(!keyFrames.length) {<br /> continue;<br /> }</p>\r\n<p>//Will hold the original style and class attributes before we controlled the element (see #80).<br /> var styleAttr, classAttr;</p>\r\n<p>var id;</p>\r\n<p>if(!ignoreID &amp;&amp; SKROLLABLE_ID_DOM_PROPERTY in el) {<br /> //We already have this element under control. Grab the corresponding skrollable id.<br /> id = el[SKROLLABLE_ID_DOM_PROPERTY];<br /> styleAttr = _skrollables[id].styleAttr;<br /> classAttr = _skrollables[id].classAttr;<br /> } else {<br /> //It''s an unknown element. Asign it a new skrollable id.<br /> id = (el[SKROLLABLE_ID_DOM_PROPERTY] = _skrollableIdCounter++);<br /> styleAttr = el.style.cssText;<br /> classAttr = _getClass(el);<br /> }</p>\r\n<p>_skrollables[id] = {<br /> element: el,<br /> styleAttr: styleAttr,<br /> classAttr: classAttr,<br /> anchorTarget: anchorTarget,<br /> keyFrames: keyFrames,<br /> smoothScrolling: smoothScrollThis,<br /> edgeStrategy: edgeStrategy<br /> };</p>\r\n<p>_updateClass(el, [SKROLLABLE_CLASS], []);<br /> }</p>\r\n<p>//Reflow for the first time.<br /> _reflow();</p>\r\n<p>//Now that we got all key frame numbers right, actually parse the properties.<br /> elementIndex = 0;<br /> elementsLength = elements.length;</p>\r\n<p>for(; elementIndex &lt; elementsLength; elementIndex++) {<br /> var sk = _skrollables[elements[elementIndex][SKROLLABLE_ID_DOM_PROPERTY]];</p>\r\n<p>if(sk === undefined) {<br /> continue;<br /> }</p>\r\n<p>//Parse the property string to objects<br /> _parseProps(sk);</p>\r\n<p>//Fill key frames with missing properties from left and right<br /> _fillProps(sk);<br /> }</p>\r\n<p>return _instance;<br /> };</p>\r\n<p>/**<br /> * Transform "relative" mode to "absolute" mode.<br /> * That is, calculate anchor position and offset of element.<br /> */<br /> Skrollr.prototype.relativeToAbsolute = function(element, viewportAnchor, elementAnchor) {<br /> var viewportHeight = documentElement.clientHeight;<br /> var box = element.getBoundingClientRect();<br /> var absolute = box.top;</p>\r\n<p>//#100: IE doesn''t supply "height" with getBoundingClientRect.<br /> var boxHeight = box.bottom - box.top;</p>\r\n<p>if(viewportAnchor === ANCHOR_BOTTOM) {<br /> absolute -= viewportHeight;<br /> } else if(viewportAnchor === ANCHOR_CENTER) {<br /> absolute -= viewportHeight / 2;<br /> }</p>\r\n<p>if(elementAnchor === ANCHOR_BOTTOM) {<br /> absolute += boxHeight;<br /> } else if(elementAnchor === ANCHOR_CENTER) {<br /> absolute += boxHeight / 2;<br /> }</p>\r\n<p>//Compensate scrolling since getBoundingClientRect is relative to viewport.<br /> absolute += _instance.getScrollTop();</p>\r\n<p>return (absolute + 0.5) | 0;<br /> };</p>\r\n<p>/**<br /> * Animates scroll top to new position.<br /> */<br /> Skrollr.prototype.animateTo = function(top, options) {<br /> options = options || {};</p>\r\n<p>var now = _now();<br /> var scrollTop = _instance.getScrollTop();</p>\r\n<p>//Setting this to a new value will automatically cause the current animation to stop, if any.<br /> _scrollAnimation = {<br /> startTop: scrollTop,<br /> topDiff: top - scrollTop,<br /> targetTop: top,<br /> duration: options.duration || DEFAULT_DURATION,<br /> startTime: now,<br /> endTime: now + (options.duration || DEFAULT_DURATION),<br /> easing: easings[options.easing || DEFAULT_EASING],<br /> done: options.done<br /> };</p>\r\n<p>//Don''t queue the animation if there''s nothing to animate.<br /> if(!_scrollAnimation.topDiff) {<br /> if(_scrollAnimation.done) {<br /> _scrollAnimation.done.call(_instance, false);<br /> }</p>\r\n<p>_scrollAnimation = undefined;<br /> }</p>\r\n<p>return _instance;<br /> };</p>\r\n<p>/**<br /> * Stops animateTo animation.<br /> */<br /> Skrollr.prototype.stopAnimateTo = function() {<br /> if(_scrollAnimation &amp;&amp; _scrollAnimation.done) {<br /> _scrollAnimation.done.call(_instance, true);<br /> }</p>\r\n<p>_scrollAnimation = undefined;<br /> };</p>\r\n<p>/**<br /> * Returns if an animation caused by animateTo is currently running.<br /> */<br /> Skrollr.prototype.isAnimatingTo = function() {<br /> return !!_scrollAnimation;<br /> };</p>\r\n<p>Skrollr.prototype.setScrollTop = function(top, force) {<br /> _forceRender = (force === true);</p>\r\n<p>if(_isMobile) {<br /> _mobileOffset = Math.min(Math.max(top, 0), _maxKeyFrame);<br /> } else {<br /> window.scrollTo(0, top);<br /> }</p>\r\n<p>return _instance;<br /> };</p>\r\n<p>Skrollr.prototype.getScrollTop = function() {<br /> if(_isMobile) {<br /> return _mobileOffset;<br /> } else {<br /> return window.pageYOffset || documentElement.scrollTop || body.scrollTop || 0;<br /> }<br /> };</p>\r\n<p>Skrollr.prototype.getMaxScrollTop = function() {<br /> return _maxKeyFrame;<br /> };</p>\r\n<p>Skrollr.prototype.on = function(name, fn) {<br /> _listeners[name] = fn;</p>\r\n<p>return _instance;<br /> };</p>\r\n<p>Skrollr.prototype.off = function(name) {<br /> delete _listeners[name];</p>\r\n<p>return _instance;<br /> };</p>\r\n<p>Skrollr.prototype.destroy = function() {<br /> var cancelAnimFrame = polyfillCAF();<br /> cancelAnimFrame(_animFrame);<br /> _removeAllEvents();</p>\r\n<p>_updateClass(documentElement, [NO_SKROLLR_CLASS], [SKROLLR_CLASS, SKROLLR_DESKTOP_CLASS, SKROLLR_MOBILE_CLASS]);</p>\r\n<p>var skrollableIndex = 0;<br /> var skrollablesLength = _skrollables.length;</p>\r\n<p>for(; skrollableIndex &lt; skrollablesLength; skrollableIndex++) {<br /> _reset(_skrollables[skrollableIndex].element);<br /> }</p>\r\n<p>documentElement.style.overflow = body.style.overflow = ''auto'';<br /> documentElement.style.height = body.style.height = ''auto'';</p>\r\n<p>if(_skrollrBody) {<br /> skrollr.setStyle(_skrollrBody, ''transform'', ''none'');<br /> }</p>\r\n<p>_instance = undefined;<br /> _skrollrBody = undefined;<br /> _listeners = undefined;<br /> _forceHeight = undefined;<br /> _maxKeyFrame = 0;<br /> _scale = 1;<br /> _constants = undefined;<br /> _mobileDeceleration = undefined;<br /> _direction = ''down'';<br /> _lastTop = -1;<br /> _lastViewportWidth = 0;<br /> _lastViewportHeight = 0;<br /> _requestReflow = false;<br /> _scrollAnimation = undefined;<br /> _smoothScrollingEnabled = undefined;<br /> _smoothScrollingDuration = undefined;<br /> _smoothScrolling = undefined;<br /> _forceRender = undefined;<br /> _skrollableIdCounter = 0;<br /> _edgeStrategy = undefined;<br /> _isMobile = false;<br /> _mobileOffset = 0;<br /> _translateZ = undefined;<br /> };</p>\r\n<p>/*<br /> Private methods.<br /> */</p>\r\n<p>var _initMobile = function() {<br /> var initialElement;<br /> var initialTouchY;<br /> var initialTouchX;<br /> var currentElement;<br /> var currentTouchY;<br /> var currentTouchX;<br /> var lastTouchY;<br /> var deltaY;</p>\r\n<p>var initialTouchTime;<br /> var currentTouchTime;<br /> var lastTouchTime;<br /> var deltaTime;</p>\r\n<p>_addEvent(documentElement, [EVENT_TOUCHSTART, EVENT_TOUCHMOVE, EVENT_TOUCHCANCEL, EVENT_TOUCHEND].join('' ''), function(e) {<br /> var touch = e.changedTouches[0];</p>\r\n<p>currentElement = e.target;</p>\r\n<p>//We don''t want text nodes.<br /> while(currentElement.nodeType === 3) {<br /> currentElement = currentElement.parentNode;<br /> }</p>\r\n<p>currentTouchY = touch.clientY;<br /> currentTouchX = touch.clientX;<br /> currentTouchTime = e.timeStamp;</p>\r\n<p>if(!rxTouchIgnoreTags.test(currentElement.tagName)) {<br /> e.preventDefault();<br /> }</p>\r\n<p>switch(e.type) {<br /> case EVENT_TOUCHSTART:<br /> //The last element we tapped on.<br /> if(initialElement) {<br /> initialElement.blur();<br /> }</p>\r\n<p>_instance.stopAnimateTo();</p>\r\n<p>initialElement = currentElement;</p>\r\n<p>initialTouchY = lastTouchY = currentTouchY;<br /> initialTouchX = currentTouchX;<br /> initialTouchTime = currentTouchTime;</p>\r\n<p>break;<br /> case EVENT_TOUCHMOVE:<br /> //Prevent default event on touchIgnore elements in case they don''t have focus yet.<br /> if(rxTouchIgnoreTags.test(currentElement.tagName) &amp;&amp; document.activeElement !== currentElement) {<br /> e.preventDefault();<br /> }</p>\r\n<p>deltaY = currentTouchY - lastTouchY;<br /> deltaTime = currentTouchTime - lastTouchTime;</p>\r\n<p>_instance.setScrollTop(_mobileOffset - deltaY, true);</p>\r\n<p>lastTouchY = currentTouchY;<br /> lastTouchTime = currentTouchTime;<br /> break;<br /> default:<br /> case EVENT_TOUCHCANCEL:<br /> case EVENT_TOUCHEND:<br /> var distanceY = initialTouchY - currentTouchY;<br /> var distanceX = initialTouchX - currentTouchX;<br /> var distance2 = distanceX * distanceX + distanceY * distanceY;</p>\r\n<p>//Check if it was more like a tap (moved less than 7px).<br /> if(distance2 &lt; 49) {<br /> if(!rxTouchIgnoreTags.test(initialElement.tagName)) {<br /> initialElement.focus();</p>\r\n<p>//It was a tap, click the element.<br /> var clickEvent = document.createEvent(''MouseEvents'');<br /> clickEvent.initMouseEvent(''click'', true, true, e.view, 1, touch.screenX, touch.screenY, touch.clientX, touch.clientY, e.ctrlKey, e.altKey, e.shiftKey, e.metaKey, 0, null);<br /> initialElement.dispatchEvent(clickEvent);<br /> }</p>\r\n<p>return;<br /> }</p>\r\n<p>initialElement = undefined;</p>\r\n<p>var speed = deltaY / deltaTime;</p>\r\n<p>//Cap speed at 3 pixel/ms.<br /> speed = Math.max(Math.min(speed, 3), -3);</p>\r\n<p>var duration = Math.abs(speed / _mobileDeceleration);<br /> var targetOffset = speed * duration + 0.5 * _mobileDeceleration * duration * duration;<br /> var targetTop = _instance.getScrollTop() - targetOffset;</p>\r\n<p>//Relative duration change for when scrolling above bounds.<br /> var targetRatio = 0;</p>\r\n<p>//Change duration proportionally when scrolling would leave bounds.<br /> if(targetTop &gt; _maxKeyFrame) {<br /> targetRatio = (_maxKeyFrame - targetTop) / targetOffset;</p>\r\n<p>targetTop = _maxKeyFrame;<br /> } else if(targetTop &lt; 0) {<br /> targetRatio = -targetTop / targetOffset;</p>\r\n<p>targetTop = 0;<br /> }</p>\r\n<p>duration = duration * (1 - targetRatio);</p>\r\n<p>_instance.animateTo((targetTop + 0.5) | 0, {easing: ''outCubic'', duration: duration});<br /> break;<br /> }<br /> });</p>\r\n<p>//Just in case there has already been some native scrolling, reset it.<br /> window.scrollTo(0, 0);<br /> documentElement.style.overflow = body.style.overflow = ''hidden'';<br /> };</p>\r\n<p>/**<br /> * Updates key frames which depend on others / need to be updated on resize.<br /> * That is "end" in "absolute" mode and all key frames in "relative" mode.<br /> * Also handles constants, because they may change on resize.<br /> */<br /> var _updateDependentKeyFrames = function() {<br /> var viewportHeight = documentElement.clientHeight;<br /> var processedConstants = _processConstants();<br /> var skrollable;<br /> var element;<br /> var anchorTarget;<br /> var keyFrames;<br /> var keyFrameIndex;<br /> var keyFramesLength;<br /> var kf;<br /> var skrollableIndex;<br /> var skrollablesLength;<br /> var offset;<br /> var constantValue;</p>\r\n<p>//First process all relative-mode elements and find the max key frame.<br /> skrollableIndex = 0;<br /> skrollablesLength = _skrollables.length;</p>\r\n<p>for(; skrollableIndex &lt; skrollablesLength; skrollableIndex++) {<br /> skrollable = _skrollables[skrollableIndex];<br /> element = skrollable.element;<br /> anchorTarget = skrollable.anchorTarget;<br /> keyFrames = skrollable.keyFrames;</p>\r\n<p>keyFrameIndex = 0;<br /> keyFramesLength = keyFrames.length;</p>\r\n<p>for(; keyFrameIndex &lt; keyFramesLength; keyFrameIndex++) {<br /> kf = keyFrames[keyFrameIndex];</p>\r\n<p>offset = kf.offset;<br /> constantValue = processedConstants[kf.constant] || 0;</p>\r\n<p>kf.frame = offset;</p>\r\n<p>if(kf.isPercentage) {<br /> //Convert the offset to percentage of the viewport height.<br /> offset = offset * viewportHeight;</p>\r\n<p>//Absolute + percentage mode.<br /> kf.frame = offset;<br /> }</p>\r\n<p>if(kf.mode === ''relative'') {<br /> _reset(element);</p>\r\n<p>kf.frame = _instance.relativeToAbsolute(anchorTarget, kf.anchors[0], kf.anchors[1]) - offset;</p>\r\n<p>_reset(element, true);<br /> }</p>\r\n<p>kf.frame += constantValue;</p>\r\n<p>//Only search for max key frame when forceHeight is enabled.<br /> if(_forceHeight) {<br /> //Find the max key frame, but don''t use one of the data-end ones for comparison.<br /> if(!kf.isEnd &amp;&amp; kf.frame &gt; _maxKeyFrame) {<br /> _maxKeyFrame = kf.frame;<br /> }<br /> }<br /> }<br /> }</p>\r\n<p>//#133: The document can be larger than the maxKeyFrame we found.<br /> _maxKeyFrame = Math.max(_maxKeyFrame, _getDocumentHeight());</p>\r\n<p>//Now process all data-end keyframes.<br /> skrollableIndex = 0;<br /> skrollablesLength = _skrollables.length;</p>\r\n<p>for(; skrollableIndex &lt; skrollablesLength; skrollableIndex++) {<br /> skrollable = _skrollables[skrollableIndex];<br /> keyFrames = skrollable.keyFrames;</p>\r\n<p>keyFrameIndex = 0;<br /> keyFramesLength = keyFrames.length;</p>\r\n<p>for(; keyFrameIndex &lt; keyFramesLength; keyFrameIndex++) {<br /> kf = keyFrames[keyFrameIndex];</p>\r\n<p>constantValue = processedConstants[kf.constant] || 0;</p>\r\n<p>if(kf.isEnd) {<br /> kf.frame = _maxKeyFrame - kf.offset + constantValue;<br /> }<br /> }</p>\r\n<p>skrollable.keyFrames.sort(_keyFrameComparator);<br /> }<br /> };</p>\r\n<p>/**<br /> * Calculates and sets the style properties for the element at the given frame.<br /> * @param fakeFrame The frame to render at when smooth scrolling is enabled.<br /> * @param actualFrame The actual frame we are at.<br /> */<br /> var _calcSteps = function(fakeFrame, actualFrame) {<br /> //Iterate over all skrollables.<br /> var skrollableIndex = 0;<br /> var skrollablesLength = _skrollables.length;</p>\r\n<p>for(; skrollableIndex &lt; skrollablesLength; skrollableIndex++) {<br /> var skrollable = _skrollables[skrollableIndex];<br /> var element = skrollable.element;<br /> var frame = skrollable.smoothScrolling ? fakeFrame : actualFrame;<br /> var frames = skrollable.keyFrames;<br /> var firstFrame = frames[0].frame;<br /> var lastFrame = frames[frames.length - 1].frame;<br /> var beforeFirst = frame &lt; firstFrame;<br /> var afterLast = frame &gt; lastFrame;<br /> var firstOrLastFrame = frames[beforeFirst ? 0 : frames.length - 1];<br /> var key;<br /> var value;</p>\r\n<p>//If we are before/after the first/last frame, set the styles according to the given edge strategy.<br /> if(beforeFirst || afterLast) {<br /> //Check if we already handled this edge case last time.<br /> //Note: using setScrollTop it''s possible that we jumped from one edge to the other.<br /> if(beforeFirst &amp;&amp; skrollable.edge === -1 || afterLast &amp;&amp; skrollable.edge === 1) {<br /> continue;<br /> }</p>\r\n<p>//Add the skrollr-before or -after class.<br /> _updateClass(element, [beforeFirst ? SKROLLABLE_BEFORE_CLASS : SKROLLABLE_AFTER_CLASS], [SKROLLABLE_BEFORE_CLASS, SKROLLABLE_BETWEEN_CLASS, SKROLLABLE_AFTER_CLASS]);</p>\r\n<p>//Remember that we handled the edge case (before/after the first/last keyframe).<br /> skrollable.edge = beforeFirst ? -1 : 1;</p>\r\n<p>switch(skrollable.edgeStrategy) {<br /> case ''reset'':<br /> _reset(element);<br /> continue;<br /> case ''ease'':<br /> //Handle this case like it would be exactly at first/last keyframe and just pass it on.<br /> frame = firstOrLastFrame.frame;<br /> break;<br /> default:<br /> case ''set'':<br /> var props = firstOrLastFrame.props;</p>\r\n<p>for(key in props) {<br /> if(hasProp.call(props, key)) {<br /> value = _interpolateString(props[key].value);</p>\r\n<p>skrollr.setStyle(element, key, value);<br /> }<br /> }</p>\r\n<p>continue;<br /> }<br /> } else {<br /> //Did we handle an edge last time?<br /> if(skrollable.edge !== 0) {<br /> _updateClass(element, [SKROLLABLE_CLASS, SKROLLABLE_BETWEEN_CLASS], [SKROLLABLE_BEFORE_CLASS, SKROLLABLE_AFTER_CLASS]);<br /> skrollable.edge = 0;<br /> }<br /> }</p>\r\n<p>//Find out between which two key frames we are right now.<br /> var keyFrameIndex = 0;<br /> var framesLength = frames.length - 1;</p>\r\n<p>for(; keyFrameIndex &lt; framesLength; keyFrameIndex++) {<br /> if(frame &gt;= frames[keyFrameIndex].frame &amp;&amp; frame &lt;= frames[keyFrameIndex + 1].frame) {<br /> var left = frames[keyFrameIndex];<br /> var right = frames[keyFrameIndex + 1];</p>\r\n<p>for(key in left.props) {<br /> if(hasProp.call(left.props, key)) {<br /> var progress = (frame - left.frame) / (right.frame - left.frame);</p>\r\n<p>//Transform the current progress using the given easing function.<br /> progress = left.props[key].easing(progress);</p>\r\n<p>//Interpolate between the two values<br /> value = _calcInterpolation(left.props[key].value, right.props[key].value, progress);</p>\r\n<p>value = _interpolateString(value);</p>\r\n<p>skrollr.setStyle(element, key, value);<br /> }<br /> }</p>\r\n<p>break;<br /> }<br /> }<br /> }<br /> };</p>\r\n<p>/**<br /> * Renders all elements.<br /> */<br /> var _render = function() {<br /> if(_requestReflow) {<br /> _requestReflow = false;<br /> _reflow();<br /> }</p>\r\n<p>//We may render something else than the actual scrollbar position.<br /> var renderTop = _instance.getScrollTop();</p>\r\n<p>//If there''s an animation, which ends in current render call, call the callback after rendering.<br /> var afterAnimationCallback;<br /> var now = _now();<br /> var progress;</p>\r\n<p>//Before actually rendering handle the scroll animation, if any.<br /> if(_scrollAnimation) {<br /> //It''s over<br /> if(now &gt;= _scrollAnimation.endTime) {<br /> renderTop = _scrollAnimation.targetTop;<br /> afterAnimationCallback = _scrollAnimation.done;<br /> _scrollAnimation = undefined;<br /> } else {<br /> //Map the current progress to the new progress using given easing function.<br /> progress = _scrollAnimation.easing((now - _scrollAnimation.startTime) / _scrollAnimation.duration);</p>\r\n<p>renderTop = (_scrollAnimation.startTop + progress * _scrollAnimation.topDiff) | 0;<br /> }</p>\r\n<p>_instance.setScrollTop(renderTop, true);<br /> }<br /> //Smooth scrolling only if there''s no animation running and if we''re not forcing the rendering.<br /> else if(!_forceRender) {<br /> var smoothScrollingDiff = _smoothScrolling.targetTop - renderTop;</p>\r\n<p>//The user scrolled, start new smooth scrolling.<br /> if(smoothScrollingDiff) {<br /> _smoothScrolling = {<br /> startTop: _lastTop,<br /> topDiff: renderTop - _lastTop,<br /> targetTop: renderTop,<br /> startTime: _lastRenderCall,<br /> endTime: _lastRenderCall + _smoothScrollingDuration<br /> };<br /> }</p>\r\n<p>//Interpolate the internal scroll position (not the actual scrollbar).<br /> if(now &lt;= _smoothScrolling.endTime) {<br /> //Map the current progress to the new progress using easing function.<br /> progress = easings.sqrt((now - _smoothScrolling.startTime) / _smoothScrollingDuration);</p>\r\n<p>renderTop = (_smoothScrolling.startTop + progress * _smoothScrolling.topDiff) | 0;<br /> }<br /> }</p>\r\n<p>//That''s were we actually "scroll" on mobile.<br /> if(_isMobile &amp;&amp; _skrollrBody) {<br /> //Set the transform ("scroll it").<br /> skrollr.setStyle(_skrollrBody, ''transform'', ''translate(0, '' + -(_mobileOffset) + ''px) '' + _translateZ);<br /> }</p>\r\n<p>//Did the scroll position even change?<br /> if(_forceRender || _lastTop !== renderTop) {<br /> //Remember in which direction are we scrolling?<br /> _direction = (renderTop &gt; _lastTop) ? ''down'' : (renderTop &lt; _lastTop ? ''up'' : _direction);</p>\r\n<p>_forceRender = false;</p>\r\n<p>var listenerParams = {<br /> curTop: renderTop,<br /> lastTop: _lastTop,<br /> maxTop: _maxKeyFrame,<br /> direction: _direction<br /> };</p>\r\n<p>//Tell the listener we are about to render.<br /> var continueRendering = _listeners.beforerender &amp;&amp; _listeners.beforerender.call(_instance, listenerParams);</p>\r\n<p>//The beforerender listener function is able the cancel rendering.<br /> if(continueRendering !== false) {<br /> //Now actually interpolate all the styles.<br /> _calcSteps(renderTop, _instance.getScrollTop());</p>\r\n<p>//Remember when we last rendered.<br /> _lastTop = renderTop;</p>\r\n<p>if(_listeners.render) {<br /> _listeners.render.call(_instance, listenerParams);<br /> }<br /> }</p>\r\n<p>if(afterAnimationCallback) {<br /> afterAnimationCallback.call(_instance, false);<br /> }<br /> }</p>\r\n<p>_lastRenderCall = now;<br /> };</p>\r\n<p>/**<br /> * Parses the properties for each key frame of the given skrollable.<br /> */<br /> var _parseProps = function(skrollable) {<br /> //Iterate over all key frames<br /> var keyFrameIndex = 0;<br /> var keyFramesLength = skrollable.keyFrames.length;</p>\r\n<p>for(; keyFrameIndex &lt; keyFramesLength; keyFrameIndex++) {<br /> var frame = skrollable.keyFrames[keyFrameIndex];<br /> var easing;<br /> var value;<br /> var prop;<br /> var props = {};</p>\r\n<p>var match;</p>\r\n<p>while((match = rxPropValue.exec(frame.props)) !== null) {<br /> prop = match[1];<br /> value = match[2];</p>\r\n<p>easing = prop.match(rxPropEasing);</p>\r\n<p>//Is there an easing specified for this prop?<br /> if(easing !== null) {<br /> prop = easing[1];<br /> easing = easing[2];<br /> } else {<br /> easing = DEFAULT_EASING;<br /> }</p>\r\n<p>//Exclamation point at first position forces the value to be taken literal.<br /> value = value.indexOf(''!'') ? _parseProp(value) : [value.slice(1)];</p>\r\n<p>//Save the prop for this key frame with his value and easing function<br /> props[prop] = {<br /> value: value,<br /> easing: easings[easing]<br /> };<br /> }</p>\r\n<p>frame.props = props;<br /> }<br /> };</p>\r\n<p>/**<br /> * Parses a value extracting numeric values and generating a format string<br /> * for later interpolation of the new values in old string.<br /> *<br /> * @param val The CSS value to be parsed.<br /> * @return Something like ["rgba(?%,?%, ?%,?)", 100, 50, 0, .7]<br /> * where the first element is the format string later used<br /> * and all following elements are the numeric value.<br /> */<br /> var _parseProp = function(val) {<br /> var numbers = [];</p>\r\n<p>//One special case, where floats don''t work.<br /> //We replace all occurences of rgba colors<br /> //which don''t use percentage notation with the percentage notation.<br /> rxRGBAIntegerColor.lastIndex = 0;<br /> val = val.replace(rxRGBAIntegerColor, function(rgba) {<br /> return rgba.replace(rxNumericValue, function(n) {<br /> return n / 255 * 100 + ''%'';<br /> });<br /> });</p>\r\n<p>//Handle prefixing of "gradient" values.<br /> //For now only the prefixed value will be set. Unprefixed isn''t supported anyway.<br /> if(theDashedCSSPrefix) {<br /> rxGradient.lastIndex = 0;<br /> val = val.replace(rxGradient, function(s) {<br /> return theDashedCSSPrefix + s;<br /> });<br /> }</p>\r\n<p>//Now parse ANY number inside this string and create a format string.<br /> val = val.replace(rxNumericValue, function(n) {<br /> numbers.push(+n);<br /> return ''{?}'';<br /> });</p>\r\n<p>//Add the formatstring as first value.<br /> numbers.unshift(val);</p>\r\n<p>return numbers;<br /> };</p>\r\n<p>/**<br /> * Fills the key frames with missing left and right hand properties.<br /> * If key frame 1 has property X and key frame 2 is missing X,<br /> * but key frame 3 has X again, then we need to assign X to key frame 2 too.<br /> *<br /> * @param sk A skrollable.<br /> */<br /> var _fillProps = function(sk) {<br /> //Will collect the properties key frame by key frame<br /> var propList = {};<br /> var keyFrameIndex;<br /> var keyFramesLength;</p>\r\n<p>//Iterate over all key frames from left to right<br /> keyFrameIndex = 0;<br /> keyFramesLength = sk.keyFrames.length;</p>\r\n<p>for(; keyFrameIndex &lt; keyFramesLength; keyFrameIndex++) {<br /> _fillPropForFrame(sk.keyFrames[keyFrameIndex], propList);<br /> }</p>\r\n<p>//Now do the same from right to fill the last gaps</p>\r\n<p>propList = {};</p>\r\n<p>//Iterate over all key frames from right to left<br /> keyFrameIndex = sk.keyFrames.length - 1;</p>\r\n<p>for(; keyFrameIndex &gt;= 0; keyFrameIndex--) {<br /> _fillPropForFrame(sk.keyFrames[keyFrameIndex], propList);<br /> }<br /> };</p>\r\n<p>var _fillPropForFrame = function(frame, propList) {<br /> var key;</p>\r\n<p>//For each key frame iterate over all right hand properties and assign them,<br /> //but only if the current key frame doesn''t have the property by itself<br /> for(key in propList) {<br /> //The current frame misses this property, so assign it.<br /> if(!hasProp.call(frame.props, key)) {<br /> frame.props[key] = propList[key];<br /> }<br /> }</p>\r\n<p>//Iterate over all props of the current frame and collect them<br /> for(key in frame.props) {<br /> propList[key] = frame.props[key];<br /> }<br /> };</p>\r\n<p>/**<br /> * Calculates the new values for two given values array.<br /> */<br /> var _calcInterpolation = function(val1, val2, progress) {<br /> var valueIndex;<br /> var val1Length = val1.length;</p>\r\n<p>//They both need to have the same length<br /> if(val1Length !== val2.length) {<br /> throw ''Can\\''t interpolate between "'' + val1[0] + ''" and "'' + val2[0] + ''"'';<br /> }</p>\r\n<p>//Add the format string as first element.<br /> var interpolated = [val1[0]];</p>\r\n<p>valueIndex = 1;</p>\r\n<p>for(; valueIndex &lt; val1Length; valueIndex++) {<br /> //That''s the line where the two numbers are actually interpolated.<br /> interpolated[valueIndex] = val1[valueIndex] + ((val2[valueIndex] - val1[valueIndex]) * progress);<br /> }</p>\r\n<p>return interpolated;<br /> };</p>\r\n<p>/**<br /> * Interpolates the numeric values into the format string.<br /> */<br /> var _interpolateString = function(val) {<br /> var valueIndex = 1;</p>\r\n<p>rxInterpolateString.lastIndex = 0;</p>\r\n<p>return val[0].replace(rxInterpolateString, function() {<br /> return val[valueIndex++];<br /> });<br /> };</p>\r\n<p>/**<br /> * Resets the class and style attribute to what it was before skrollr manipulated the element.<br /> * Also remembers the values it had before reseting, in order to undo the reset.<br /> */<br /> var _reset = function(elements, undo) {<br /> //We accept a single element or an array of elements.<br /> elements = [].concat(elements);</p>\r\n<p>var skrollable;<br /> var element;<br /> var elementsIndex = 0;<br /> var elementsLength = elements.length;</p>\r\n<p>for(; elementsIndex &lt; elementsLength; elementsIndex++) {<br /> element = elements[elementsIndex];<br /> skrollable = _skrollables[element[SKROLLABLE_ID_DOM_PROPERTY]];</p>\r\n<p>//Couldn''t find the skrollable for this DOM element.<br /> if(!skrollable) {<br /> continue;<br /> }</p>\r\n<p>if(undo) {<br /> //Reset class and style to the "dirty" (set by skrollr) values.<br /> element.style.cssText = skrollable.dirtyStyleAttr;<br /> _updateClass(element, skrollable.dirtyClassAttr);<br /> } else {<br /> //Remember the "dirty" (set by skrollr) class and style.<br /> skrollable.dirtyStyleAttr = element.style.cssText;<br /> skrollable.dirtyClassAttr = _getClass(element);</p>\r\n<p>//Reset class and style to what it originally was.<br /> element.style.cssText = skrollable.styleAttr;<br /> _updateClass(element, skrollable.classAttr);<br /> }<br /> }<br /> };</p>\r\n<p>/**<br /> * Detects support for 3d transforms by applying it to the skrollr-body.<br /> */<br /> var _detect3DTransforms = function() {<br /> _translateZ = ''translateZ(0)'';<br /> skrollr.setStyle(_skrollrBody, ''transform'', _translateZ);</p>\r\n<p>var computedStyle = getStyle(_skrollrBody);<br /> var computedTransform = computedStyle.getPropertyValue(''transform'');<br /> var computedTransformWithPrefix = computedStyle.getPropertyValue(theDashedCSSPrefix + ''transform'');<br /> var has3D = (computedTransform &amp;&amp; computedTransform !== ''none'') || (computedTransformWithPrefix &amp;&amp; computedTransformWithPrefix !== ''none'');</p>\r\n<p>if(!has3D) {<br /> _translateZ = '''';<br /> }<br /> };</p>\r\n<p>/**<br /> * Set the CSS property on the given element. Sets prefixed properties as well.<br /> */<br /> skrollr.setStyle = function(el, prop, val) {<br /> var style = el.style;</p>\r\n<p>//Camel case.<br /> prop = prop.replace(rxCamelCase, rxCamelCaseFn).replace(''-'', '''');</p>\r\n<p>//Make sure z-index gets a &lt;integer&gt;.<br /> //This is the only &lt;integer&gt; case we need to handle.<br /> if(prop === ''zIndex'') {<br /> if(isNaN(val)) {<br /> //If it''s not a number, don''t touch it.<br /> //It could for example be "auto" (#351).<br /> style[prop] = val;<br /> } else {<br /> //Floor the number.<br /> style[prop] = '''' + (val | 0);<br /> }<br /> }<br /> //#64: "float" can''t be set across browsers. Needs to use "cssFloat" for all except IE.<br /> else if(prop === ''float'') {<br /> style.styleFloat = style.cssFloat = val;<br /> }<br /> else {<br /> //Need try-catch for old IE.<br /> try {<br /> //Set prefixed property if there''s a prefix.<br /> if(theCSSPrefix) {<br /> style[theCSSPrefix + prop.slice(0,1).toUpperCase() + prop.slice(1)] = val;<br /> }</p>\r\n<p>//Set unprefixed.<br /> style[prop] = val;<br /> } catch(ignore) {}<br /> }<br /> };</p>\r\n<p>/**<br /> * Cross browser event handling.<br /> */<br /> var _addEvent = skrollr.addEvent = function(element, names, callback) {<br /> var intermediate = function(e) {<br /> //Normalize IE event stuff.<br /> e = e || window.event;</p>\r\n<p>if(!e.target) {<br /> e.target = e.srcElement;<br /> }</p>\r\n<p>if(!e.preventDefault) {<br /> e.preventDefault = function() {<br /> e.returnValue = false;<br /> };<br /> }</p>\r\n<p>return callback.call(this, e);<br /> };</p>\r\n<p>names = names.split('' '');</p>\r\n<p>var name;<br /> var nameCounter = 0;<br /> var namesLength = names.length;</p>\r\n<p>for(; nameCounter &lt; namesLength; nameCounter++) {<br /> name = names[nameCounter];</p>\r\n<p>if(element.addEventListener) {<br /> element.addEventListener(name, callback, false);<br /> } else {<br /> element.attachEvent(''on'' + name, intermediate);<br /> }</p>\r\n<p>//Remember the events to be able to flush them later.<br /> _registeredEvents.push({<br /> element: element,<br /> name: name,<br /> listener: callback<br /> });<br /> }<br /> };</p>\r\n<p>var _removeEvent = skrollr.removeEvent = function(element, names, callback) {<br /> names = names.split('' '');</p>\r\n<p>var nameCounter = 0;<br /> var namesLength = names.length;</p>\r\n<p>for(; nameCounter &lt; namesLength; nameCounter++) {<br /> if(element.removeEventListener) {<br /> element.removeEventListener(names[nameCounter], callback, false);<br /> } else {<br /> element.detachEvent(''on'' + names[nameCounter], callback);<br /> }<br /> }<br /> };</p>\r\n<p>var _removeAllEvents = function() {<br /> var eventData;<br /> var eventCounter = 0;<br /> var eventsLength = _registeredEvents.length;</p>\r\n<p>for(; eventCounter &lt; eventsLength; eventCounter++) {<br /> eventData = _registeredEvents[eventCounter];</p>\r\n<p>_removeEvent(eventData.element, eventData.name, eventData.listener);<br /> }</p>\r\n<p>_registeredEvents = [];<br /> };</p>\r\n<p>var _reflow = function() {<br /> var pos = _instance.getScrollTop();</p>\r\n<p>//Will be recalculated by _updateDependentKeyFrames.<br /> _maxKeyFrame = 0;</p>\r\n<p>if(_forceHeight &amp;&amp; !_isMobile) {<br /> //un-"force" the height to not mess with the calculations in _updateDependentKeyFrames (#216).<br /> body.style.height = ''auto'';<br /> }</p>\r\n<p>_updateDependentKeyFrames();</p>\r\n<p>if(_forceHeight &amp;&amp; !_isMobile) {<br /> //"force" the height.<br /> body.style.height = (_maxKeyFrame + documentElement.clientHeight) + ''px'';<br /> }</p>\r\n<p>//The scroll offset may now be larger than needed (on desktop the browser/os prevents scrolling farther than the bottom).<br /> if(_isMobile) {<br /> _instance.setScrollTop(Math.min(_instance.getScrollTop(), _maxKeyFrame));<br /> } else {<br /> //Remember and reset the scroll pos (#217).<br /> _instance.setScrollTop(pos, true);<br /> }</p>\r\n<p>_forceRender = true;<br /> };</p>\r\n<p>/*<br /> * Returns a copy of the constants object where all functions and strings have been evaluated.<br /> */<br /> var _processConstants = function() {<br /> var viewportHeight = documentElement.clientHeight;<br /> var copy = {};<br /> var prop;<br /> var value;</p>\r\n<p>for(prop in _constants) {<br /> value = _constants[prop];</p>\r\n<p>if(typeof value === ''function'') {<br /> value = value.call(_instance);<br /> }<br /> //Percentage offset.<br /> else if((/p$/).test(value)) {<br /> value = (value.slice(0, -1) / 100) * viewportHeight;<br /> }</p>\r\n<p>copy[prop] = value;<br /> }</p>\r\n<p>return copy;<br /> };</p>\r\n<p>/*<br /> * Returns the height of the document.<br /> */<br /> var _getDocumentHeight = function() {<br /> var skrollrBodyHeight = (_skrollrBody &amp;&amp; _skrollrBody.offsetHeight || 0);<br /> var bodyHeight = Math.max(skrollrBodyHeight, body.scrollHeight, body.offsetHeight, documentElement.scrollHeight, documentElement.offsetHeight, documentElement.clientHeight);</p>\r\n<p>return bodyHeight - documentElement.clientHeight;<br /> };</p>\r\n<p>/**<br /> * Returns a string of space separated classnames for the current element.<br /> * Works with SVG as well.<br /> */<br /> var _getClass = function(element) {<br /> var prop = ''className'';</p>\r\n<p>//SVG support by using className.baseVal instead of just className.<br /> if(window.SVGElement &amp;&amp; element instanceof window.SVGElement) {<br /> element = element[prop];<br /> prop = ''baseVal'';<br /> }</p>\r\n<p>return element[prop];<br /> };</p>\r\n<p>/**<br /> * Adds and removes a CSS classes.<br /> * Works with SVG as well.<br /> * add and remove are arrays of strings,<br /> * or if remove is ommited add is a string and overwrites all classes.<br /> */<br /> var _updateClass = function(element, add, remove) {<br /> var prop = ''className'';</p>\r\n<p>//SVG support by using className.baseVal instead of just className.<br /> if(window.SVGElement &amp;&amp; element instanceof window.SVGElement) {<br /> element = element[prop];<br /> prop = ''baseVal'';<br /> }</p>\r\n<p>//When remove is ommited, we want to overwrite/set the classes.<br /> if(remove === undefined) {<br /> element[prop] = add;<br /> return;<br /> }</p>\r\n<p>//Cache current classes. We will work on a string before passing back to DOM.<br /> var val = element[prop];</p>\r\n<p>//All classes to be removed.<br /> var classRemoveIndex = 0;<br /> var removeLength = remove.length;</p>\r\n<p>for(; classRemoveIndex &lt; removeLength; classRemoveIndex++) {<br /> val = _untrim(val).replace(_untrim(remove[classRemoveIndex]), '' '');<br /> }</p>\r\n<p>val = _trim(val);</p>\r\n<p>//All classes to be added.<br /> var classAddIndex = 0;<br /> var addLength = add.length;</p>\r\n<p>for(; classAddIndex &lt; addLength; classAddIndex++) {<br /> //Only add if el not already has class.<br /> if(_untrim(val).indexOf(_untrim(add[classAddIndex])) === -1) {<br /> val += '' '' + add[classAddIndex];<br /> }<br /> }</p>\r\n<p>element[prop] = _trim(val);<br /> };</p>\r\n<p>var _trim = function(a) {<br /> return a.replace(rxTrim, '''');<br /> };</p>\r\n<p>/**<br /> * Adds a space before and after the string.<br /> */<br /> var _untrim = function(a) {<br /> return '' '' + a + '' '';<br /> };</p>\r\n<p>var _now = Date.now || function() {<br /> return +new Date();<br /> };</p>\r\n<p>var _keyFrameComparator = function(a, b) {<br /> return a.frame - b.frame;<br /> };</p>\r\n<p>/*<br /> * Private variables.<br /> */</p>\r\n<p>//Singleton<br /> var _instance;</p>\r\n<p>/*<br /> A list of all elements which should be animated associated with their the metadata.<br /> Exmaple skrollable with two key frames animating from 100px width to 20px:</p>\r\n<p>skrollable = {<br /> element: &lt;the DOM element&gt;,<br /> styleAttr: &lt;style attribute of the element before skrollr&gt;,<br /> classAttr: &lt;class attribute of the element before skrollr&gt;,<br /> keyFrames: [<br /> {<br /> frame: 100,<br /> props: {<br /> width: {<br /> value: [''{?}px'', 100],<br /> easing: &lt;reference to easing function&gt;<br /> }<br /> },<br /> mode: "absolute"<br /> },<br /> {<br /> frame: 200,<br /> props: {<br /> width: {<br /> value: [''{?}px'', 20],<br /> easing: &lt;reference to easing function&gt;<br /> }<br /> },<br /> mode: "absolute"<br /> }<br /> ]<br /> };<br /> */<br /> var _skrollables;</p>\r\n<p>var _skrollrBody;</p>\r\n<p>var _listeners;<br /> var _forceHeight;<br /> var _maxKeyFrame = 0;</p>\r\n<p>var _scale = 1;<br /> var _constants;</p>\r\n<p>var _mobileDeceleration;</p>\r\n<p>//Current direction (up/down).<br /> var _direction = ''down'';</p>\r\n<p>//The last top offset value. Needed to determine direction.<br /> var _lastTop = -1;</p>\r\n<p>//The last time we called the render method (doesn''t mean we rendered!).<br /> var _lastRenderCall = _now();</p>\r\n<p>//For detecting if it actually resized (#271).<br /> var _lastViewportWidth = 0;<br /> var _lastViewportHeight = 0;</p>\r\n<p>var _requestReflow = false;</p>\r\n<p>//Will contain data about a running scrollbar animation, if any.<br /> var _scrollAnimation;</p>\r\n<p>var _smoothScrollingEnabled;</p>\r\n<p>var _smoothScrollingDuration;</p>\r\n<p>//Will contain settins for smooth scrolling if enabled.<br /> var _smoothScrolling;</p>\r\n<p>//Can be set by any operation/event to force rendering even if the scrollbar didn''t move.<br /> var _forceRender;</p>\r\n<p>//Each skrollable gets an unique ID incremented for each skrollable.<br /> //The ID is the index in the _skrollables array.<br /> var _skrollableIdCounter = 0;</p>\r\n<p>var _edgeStrategy;</p>\r\n<p><br /> //Mobile specific vars. Will be stripped by UglifyJS when not in use.<br /> var _isMobile = false;</p>\r\n<p>//The virtual scroll offset when using mobile scrolling.<br /> var _mobileOffset = 0;</p>\r\n<p>//If the browser supports 3d transforms, this will be filled with ''translateZ(0)'' (empty string otherwise).<br /> var _translateZ;</p>\r\n<p>//Will contain data about registered events by skrollr.<br /> var _registeredEvents = [];</p>\r\n<p>//Animation frame id returned by RequestAnimationFrame (or timeout when RAF is not supported).<br /> var _animFrame;<br />}(window, document));</p>', 'second-user', 1, '2016-08-13 10:57:18', '2016-08-13 10:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `company_name` varchar(150) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
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
  `role` varchar(150) DEFAULT NULL,
  `avatar` text,
  `company_logo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company_name`, `email`, `username`, `password`, `password_temp`, `code`, `active`, `created_at`, `updated_at`, `remember_token`, `password_expiration_date`, `login_attempt`, `initial_login`, `old_password`, `admin`, `role`, `avatar`, `company_logo`) VALUES
(1, 'vera', 'vera@gmail.com', 'admin', '$2y$10$rAvjASm0SBvnNwTxYBH/ouRI0Hnit1MWNuzBv8aldlp7nGOnekAnO', NULL, NULL, 1, NULL, '2016-08-13 11:16:08', 'W8FsSL4ugVCRW6DNHbni1BXSmjMqghWYDZoiQMGytve57QzLp8J3umdHDa6w', NULL, NULL, NULL, NULL, 1, 'admin', 'cool-cat-with-sunglasses-wallpaper-3.jpg', 'vera_logo.png'),
(3, 'abc', 'zheijen@yahoo.com', 'zheijen@yahoo.com', '$2y$10$J/ckz9JuNu0JnsiyuyVt..Q0Awe3kiBPdMuMqvEnUaQNSM/19HvrG', NULL, 'E3GP9c3tgCaBcDoU5Id2miYleqljwTWtwi7bsK1atQ8yu1jDaDsF6dZlSfVr', 0, '2016-07-29 06:15:57', '2016-07-29 06:15:57', NULL, NULL, NULL, NULL, '$2y$10$J/ckz9JuNu0JnsiyuyVt..Q0Awe3kiBPdMuMqvEnUaQNSM/19HvrG', 0, '0', 'cool-cat-with-sunglasses-wallpaper-3.jpg', 'vera_logo.png'),
(4, 'abc5', 'zheijen2@yahoo.com', 'zheijen2@yahoo.com', '$2y$10$CEJ.yaUdj2vMPBib0pHBbOrNp6mAc.dx3jgKub4X8k5mXBhuTgrfm', NULL, 'geOYRc9TtpmsTWTnGIsVf5yE6u7MrTOzsvH7IedbxSzvEKJqU2x5Bb7zT2aD', 0, '2016-07-29 06:32:24', '2016-07-29 06:32:24', NULL, NULL, NULL, NULL, '$2y$10$CEJ.yaUdj2vMPBib0pHBbOrNp6mAc.dx3jgKub4X8k5mXBhuTgrfm', 0, '0', NULL, NULL),
(5, 'abc5d', 'zheijend2@yahoo.com', 'zheijend2@yahoo.com', '$2y$10$U2uBkkbxkXcU8TflMzjDROZaeulEaEx1jvIiD/5U//3WoBcdyk12u', NULL, 'AUrMEhP4tZwTyJ0u45nREMMzoycsPecfF1QYwzFcxQSgVjCc1ZylG0fr6CSX', 0, '2016-07-29 06:42:24', '2016-07-29 06:42:24', NULL, NULL, NULL, NULL, '$2y$10$U2uBkkbxkXcU8TflMzjDROZaeulEaEx1jvIiD/5U//3WoBcdyk12u', 0, '0', NULL, NULL),
(6, 'www', 'a@a.com', 'a@a.com', '$2y$10$kPEL233CLQx7cRuQtBrd0uCPvudB8xVJPcht4voLdOo9V8xzb5/ca', NULL, 'PoSurrAMhlaeNCDHKVzjcRQLU5v9II2HWxwN7Vn9voyirKQ8PtBQxJiikXt9', 0, '2016-07-29 09:17:09', '2016-07-29 09:17:09', NULL, NULL, NULL, NULL, '$2y$10$kPEL233CLQx7cRuQtBrd0uCPvudB8xVJPcht4voLdOo9V8xzb5/ca', 0, '0', NULL, NULL),
(20, 'test2', 'josephvibal@gmail.com', 'josephvibal@gmail.com', '$2y$10$rAvjASm0SBvnNwTxYBH/ouRI0Hnit1MWNuzBv8aldlp7nGOnekAnO', NULL, 'XLVUkGfntsmNYXKIU6Sd6Wa1vnltM7VABYxvFFKTGb8OHCJ2VctnllLTID64', 1, '2016-08-08 09:01:53', '2016-08-13 11:16:51', 'SaDuzAe2llHxeV9Jgkz7l1Zcd9fCL3LOg7ajBil8ca2qmvZVc5RbBYzsv0cE', NULL, NULL, NULL, '$2y$10$h.YlTzBD56LylB9I3hBwn.4shoRBcAw6nHB..fc/KZZtysIMJDYQC', 0, 'author', 'cool-cat-with-sunglasses-wallpaper-3.jpg', 'vera_logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_on_post_foreign` (`on_post`),
  ADD KEY `comments_from_user_foreign` (`from_user`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_type`
--
ALTER TABLE `industry_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_files`
--
ALTER TABLE `list_of_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `industry_type`
--
ALTER TABLE `industry_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `list_of_files`
--
ALTER TABLE `list_of_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
