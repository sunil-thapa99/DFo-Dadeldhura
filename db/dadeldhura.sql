-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 09:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dadeldhura`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(15) NOT NULL,
  `description` varchar(500) NOT NULL,
  `busn` varchar(100) NOT NULL,
  `spentTitle` varchar(300) NOT NULL,
  `buying` varchar(300) NOT NULL,
  `panNo` varchar(50) NOT NULL,
  `paymentReceiver` varchar(300) NOT NULL,
  `billDate` date NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `onDate` date NOT NULL,
  `publish` varchar(3) NOT NULL,
  `weight` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `description`, `busn`, `spentTitle`, `buying`, `panNo`, `paymentReceiver`, `billDate`, `amount`, `remarks`, `onDate`, `publish`, `weight`) VALUES
(9, '&#2313;&#2340;&#2381;&#2346;&#2366;&#2342;&#2344; &#2360;&#2366;&#2350;&#2366;&#2327;&#2381;&#2352;&#2368;&#2325;&#2379; &#2349;&#2369;&#2325;&#2381;&#2340;&#2366;&#2344;&#2368;', '&#2409;&#2407;&#2408;&#2407;&#2407;&#2414;&#2409;', '&#2408;&#2408;&#2411;&#2408;&#2407;', '&#2360;&#2379;&#2333;&#2376;', '&#2409;&#2406;&#2408;&#2406;&#2412;&#2415;&#2414;&', '&#2347;&#2379;&#2344;&#2366; &#2335;&#2381;&#2352;&#2375;&#2337;&#2352;&#2381;&#2360;', '2073-06-12', '&#2407;&#2409;&#2409;&#2412;&#2409;&#2407;.&#2411;&#2410;', '', '2016-10-02', 'No', 10),
(10, '&#2313;&#2340;&#2381;&#2346;&#2366;&#2342;&#2344; &#2360;&#2366;&#2350;&#2366;&#2327;&#2381;&#2352;&#2368;&#2325;&#2379; &#2349;&#2369;&#2325;&#2381;&#2340;&#2366;&#2344;&#2368; ', '&#2409;&#2407;&#2408;&#2407;&#2407;&#2414;&#2409;', '&#2408;&#2408;&#2411;&#2408;&#2407;', '&#2360;&#2379;&#2333;&#2376;', '&#2409;&#2406;&#2410;&#2411;&#2411;&#2413;&#2413;&', '&#2332;&#2351; &#2358;&#2381;&#2352;&#2368; &#2358;&#2381;&#2351;&#2366;&#2350; &#2335;&#2381;&#2352;&#2375;&#2337;&#2367;&#2329;&#2381;&#2327; &#2325;&#2344;&#2381;&#2360;&#2344;', '2073-06-12', '&#2413;&#2411;&#2408;&#2410;&#2412;.&#2413;&#2406;', '', '2016-10-02', 'No', 20),
(12, '&#2331;&#2346;&#2366;&#2311; &#2360;&#2350;&#2381;&#2348;&#2344;&#2381;&#2343;&#2368;', '&#2409;&#2407;&#2408;&#2407;&#2407;&#2414;&#2409;', '&#2408;&#2408;&#2411;&#2408;&#2408;', '&#2360;&#2366;&#2375;&#2333;&#2376;', '&#2412;&#2406;&#2407;&#2412;&#2410;&#2409;&#2413;&', '&#2332;&#2367; &#2319;&#2360;&#2381; &#2319;&#2339;&#2381;&#2337; &#2350;&#2367;&#2337;&#2367;&#2351;&#2366; &#2360;&#2352;&#2381;&#2349;&#2367;&#2360;', '0000-00-00', '&#2412;&#2406;&#2406;&#2406;&#2406;&#2404;', '', '2016-11-28', 'No', 30),
(13, '&#2352;&#2366;&#2311;&#2332;&#2379;&#2348;&#2367;&#2351;&#2350; &#2350;&#2354;&#2350;&#2366; &#2309;&#2344;&#2369;&#2342;&#2366;&#2344;', '&#2409;&#2407;&#2408;&#2407;&#2407;&#2414;&#2409;', '&#2408;&#2412;&#2410;&#2407;&#2409;', '&#2360;&#2367;&#2354;&#2348;&#2344;&#2381;&#2342;&#2368; &#2342;&#2352;&#2349;&#2366;&#2313;&#2346;&#2340;&#2381;&#2352;', '&#2409;&#2406;&#2411;&#2406;&#2407;&#2415;&#2409;&', '&#2346;&#2381;&#2352;&#2366;&#2352;&#2350;&#2381;&#2349; &#2348;&#2366;&#2351;&#2366;&#2375;&#2335;&#2375;&#2325; &#2335;&#2375;&#2325;&#2381;&#2344;&#2379;&#2354;&#2379;&#2332;&#2368; &#2347;&#2352; &#2344;&#2375;&#2330;&#2352;', '2073-08-05', '&#2412;&#2407;&#2415;&#2410;&#2414;&#2412;&#2404;', '', '2016-11-28', 'Yes', 40),
(14, '&#2350;&#2375;&#2358;&#2367;&#2344;&#2352;&#2368; &#2309;&#2366;&#2376;&#2332;&#2366;&#2352; &#2360;&#2350;&#2381;&#2348;&#2344;&#2381;&#2343;&#2368;', '&#2409;&#2407;&#2408;&#2407;&#2407;&#2414;&#2410;', '&#2408;&#2415;&#2411;&#2407;&#2407;', '&#2360;&#2379;&#2333;&#2376; ', '&#2412;&#2406;&#2407;&#2409;&#2415;&#2411;&#2409;&', 'LOYAL COMPUTER INFOSYS, NEW ROAD, KTM', '2073-11-02', '&#2407;&#2411;&#2413;&#2411;&#2408;&#2408;&#2404;&#2407;&#2408;', '', '2016-11-28', 'Yes', 50),
(15, '&#2309;&#2344;&#2381;&#2351; &#2325;&#2366;&#2352;&#2381;&#2351;&#2325;&#2381;&#2352;&#2350;', '&#2409;&#2407;&#2408;&#2407;&#2407;&#2414;&#2409;', '&#2408;&#2408;&#2411;&#2408;&#2408;', '&#2348;&#2379;&#2354;&#2346;&#2340;&#2381;&#2352; &#2309;&#2366;&#2357;&#2381;&#2361;&#2366;&#2344;', '&#2409;&#2406;&#2410;&#2411;&#2411;&#2413;&#2413;&', '&#2332;&#2351;&#2358;&#2381;&#2352;&#2368; &#2358;&#2381;&#2351;&#2366;&#2350; &#2335;&#2381;&#2352;&#2375;&#2337;&#2367;&#2329; &#2325;&#2344;&#2381;&#2360;&#2352;&#2381;&#2344;', '0000-00-00', '&#2407;&#2415;&#2413;&#2413;&#2414;&#2414;&#2407;', '', '2017-05-08', 'Yes', 60);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(20) NOT NULL,
  `ecozone` varchar(500) NOT NULL,
  `devregion` varchar(500) NOT NULL,
  `publish` varchar(3) NOT NULL,
  `weight` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `code`, `ecozone`, `devregion`, `publish`, `weight`) VALUES
(2, 'झापा', '001', 'तराइ', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 10),
(3, 'इलाम', '002', 'तराइ', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 20),
(4, 'पाँचथर', '003', 'पहाड', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 30),
(5, 'ताप्लेजुङ', '004', 'हिमाल', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 40),
(6, 'मोरङ ', '005', 'तराइ', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 50),
(7, 'सुनसरी', '006', 'तराइ', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 60),
(8, 'भोजपुर', '007', 'पहाड', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 70),
(9, 'धनकुटा', '008', 'पहाड', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 80),
(10, 'तेह्रथुम ', '009', 'पहाड', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 90),
(11, 'संखुवासभा', '010', 'हिमाल', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 100),
(12, 'सिराहा', '011', 'तराइ', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 110),
(13, 'उदयपुर', '012', 'पहाड', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 120),
(14, 'खोटाङ', '013', 'पहाड', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 130),
(15, 'ओखलढुङ्गा', '014', 'पहाड', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 140),
(16, 'सोलुखुम्बु', '015', 'हिमाल', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 150),
(17, 'धनुषा', '017', 'तराइ', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 170),
(28, 'सप्तरी', '016', 'तराइ', 'पूर्वाञ्चल विकास क्षेत्र', 'Yes', 160),
(19, 'महोत्तरी', '018', 'तराइ', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 180),
(20, 'सिन्धुली', '019', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 190),
(30, 'काभ्रेपलाञ्चोक', '020', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 200),
(22, 'रामेछाप', '021', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 210),
(23, 'दोलखा', '022', 'हिमाल', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 220),
(24, 'भक्तपुर', '023', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 230),
(25, 'धादिङ', '024', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 240),
(27, 'काठमाडौं ', '025', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 250),
(29, 'सर्लाही', '026', 'तराइ', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 260),
(31, 'ललितपुर', '027', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 270),
(32, 'नुवाकोट', '028', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 280),
(33, 'मकवानपुर', '029', 'पहाड', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 290),
(34, 'रसुवा', '030', 'हिमाल', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 300),
(35, 'सिन्धुपलाञ्चोक', '031', 'हिमाल', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 310),
(36, 'बारा', '032', 'तराइ', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 320),
(37, 'पर्सा', '033', 'तराइ', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 330),
(38, 'रौतहट', '034', 'तराइ', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 340),
(39, 'चितवन', '035', 'तराइ', 'मध्यमाञ्चल विकास क्षेत्र', 'Yes', 350),
(40, 'गोर्खा', '036', 'तराइ', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 360),
(41, 'कास्की', '037', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 370),
(42, 'लमजुङ् ', '038', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 380),
(43, 'स्याङ्जा', '039', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 390),
(44, 'तनहुँ ', '040', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 400),
(45, 'मनाङ', '041', 'हिमाल', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 410),
(46, 'कपिलवस्तु', '042', 'तराइ', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 420),
(47, 'नवलपरासी ', '043', 'तराइ', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 430),
(48, 'रूपन्देही', '044', 'तराइ', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 440),
(49, 'अर्घाखाँची ', '0045', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 450),
(50, 'गुल्मी ', '046', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 460),
(51, 'पाल्पा ', '047', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 470),
(52, 'बाग्लुङ ', '048', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 480),
(53, 'म्याग्दी ', '049', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 490),
(54, 'पर्वत ', '050', 'पहाड', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 500),
(55, 'मुस्ताङ ', '051', 'हिमाल', 'पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 510),
(56, 'दाङ', '052', 'पहाड', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 520),
(57, 'प्युठान', '053', 'पहाड', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 530),
(58, 'रोल्पा', '054', 'पहाड', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 540),
(59, 'रुकुम ', '055', 'पहाड', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 550),
(60, 'सल्यान', '056', 'पहाड', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 560),
(61, 'बाँके ', '057', 'तराइ', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 570),
(62, 'बर्दिया ', '058', 'तराइ', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 580),
(63, 'सुर्खेत ', '059', 'पहाड', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 590),
(64, 'दैलेख ', '060', 'पहाड', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 600),
(65, 'जाजरकोट ', '061', 'पहाड', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 610),
(66, 'डोल्पा ', '062', 'हिमाल', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 620),
(67, 'हुम्ला ', '063', 'हिमाल', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 630),
(68, 'जुम्ला ', '064', 'हिमाल', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 640),
(69, 'कालीकोट ', '065', 'हिमाल', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 650),
(70, 'मुगु ', '066', 'हिमाल', 'मध्य-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 660),
(71, 'कैलाली ', '067', 'तराइ', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 670),
(72, 'अछाम ', '068', 'पहाड', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 680),
(73, 'डोटी ', '0069', 'पहाड', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 690),
(74, 'बझाङ ', '070', 'हिमाल', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 700),
(75, 'बाजुरा', '071', 'हिमाल', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 710),
(76, 'कञ्चनपुर ', '072', 'तराइ', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 720),
(77, 'डडेलधुरा ', '073', 'पहाड', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 730),
(78, 'वैतडी', '074', 'पहाड', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 740),
(79, 'दार्चुला ', '075', 'पहाड', 'सुदूर-पश्चिमाञ्चल विकास क्षेत्र', 'Yes', 750);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `comment` text,
  `onDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `address`, `phone`, `email`, `country`, `comment`, `onDate`) VALUES
(1, 'a', 's', NULL, 'kh6ganesh@yahoo.com', 'nepal', 'aaaa', '2013-01-28 12:05:00'),
(2, 'ekrbk', 'bb', NULL, 'kh6ganesh@gmail.com', 'bk', 'b', '2013-12-09 02:48:29'),
(3, 'ganesh', 'ktm', NULL, 'kh6ganesh@yahoo.com', 'lsjkdg', 'alskng', '2013-12-09 02:52:20'),
(4, 'ganesh', 'skdjhg', NULL, 'kh6ganesh@gmail.com', 'nepal', 'lsdgsedf', '2015-02-10 11:01:15'),
(5, 'ganesh', 'skdjhg', NULL, 'kh6ganesh@gmail.com', 'nepal', 'lsdgsedf', '2015-02-10 11:01:35'),
(6, 'sldbg', 'eaargb', NULL, 'kh6ganesh@gmail.com', 'aagb', 'bsrbg', '2015-02-10 11:16:26'),
(7, 'ganesh', 'kahtmandu', NULL, 'kh6ganesh@gmail.com', 'nepal', 'this is for test feedback thank you.', '2015-02-10 11:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `nameen` varchar(255) NOT NULL,
  `urlname` varchar(250) CHARACTER SET latin1 NOT NULL,
  `type` varchar(200) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `parentId` int(11) NOT NULL DEFAULT '0',
  `shortcontents` text NOT NULL,
  `shortcontentsen` text NOT NULL,
  `contents` longtext NOT NULL,
  `contentsen` text NOT NULL,
  `linkType` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `weight` int(11) NOT NULL DEFAULT '50',
  `hide` varchar(3) CHARACTER SET latin1 NOT NULL DEFAULT 'no',
  `onDate` date NOT NULL DEFAULT '0000-00-00',
  `image` varchar(250) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `display` varchar(10) CHARACTER SET latin1 NOT NULL,
  `featured` varchar(3) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `block` varchar(100) CHARACTER SET latin1 NOT NULL,
  `transportation` varchar(250) CHARACTER SET latin1 NOT NULL,
  `pageTitle` text CHARACTER SET latin1 NOT NULL,
  `pageKeyword` text CHARACTER SET latin1 NOT NULL,
  `activity` varchar(100) CHARACTER SET latin1 NOT NULL,
  `publish` varchar(3) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `nameen`, `urlname`, `type`, `parentId`, `shortcontents`, `shortcontentsen`, `contents`, `contentsen`, `linkType`, `weight`, `hide`, `onDate`, `image`, `display`, `featured`, `block`, `transportation`, `pageTitle`, `pageKeyword`, `activity`, `publish`) VALUES
(386, '&#2357;&#2367;&#2337;&#2367;&#2351;&#2379;', 'Videos', 'video-gallery', 'Header', 0, '', '', '', '', 'Normal Group', 68, 'no', '2016-06-16', '', 'normal', 'No', '', '', '', '', '', ''),
(234, '&#2360;&#2350;&#2381;&#2346;&#2352;&#2381;&#2325; &#2336;&#2375;&#2327;&#2366;&#2344;&#2366;', 'Contacts', 'contact', 'Header', 0, '<strong>&nbsp;नेपाल सरकार</strong>\r\n<br /> <br /> <strong>वन तथा भू संरक्षण मन्त्रालय</strong><br /> <br /> \r\n<strong>&nbsp;वन विभाग</strong><br /> \r\n<br /> <em>डडेल्धुरा</em><br /> \r\n<br /> फोन : &nbsp;०९६-४२०१४५ <br /> \r\n<br /> इमेल: &nbsp;<br /> ', '<strong>&nbsp;नेपाल सरकार</strong>\r\n<br /> <br /> <strong>वन तथा भू संरक्षण मन्त्रालय</strong><br /> <br /> \r\n<strong>&nbsp;वन विभाग</strong><br /> \r\n<br /> <em>डडेल्धुरा</em><br /> \r\n<br /> फोन : &nbsp;०९६-४२०१४५ <br /> \r\n<br /> इमेल: &nbsp;<br /> ', '<p><strong>&nbsp;नेपाल सरकार</strong>\r\n<br /> <br /> <strong>वन तथा भू संरक्षण मन्त्रालय</strong><br /> <br /> \r\n<strong>&nbsp;वन विभाग</strong><br /> \r\n<br /> <em>डडेल्धुरा</em><br /> \r\n<br /> फोन : &nbsp;०९६-४२०१४५ <br /> \r\n<br /> इमेल: &nbsp;<br /> </p>\r\n', '<p><strong>&nbsp;नेपाल सरकार</strong>\r\n<br /> <br /> <strong>वन तथा भू संरक्षण मन्त्रालय</strong><br /> <br /> \r\n<strong>&nbsp;वन विभाग</strong><br /> \r\n<br /> <em>डडेल्धुरा</em><br /> \r\n<br /> फोन : &nbsp;०९६-४२०१४५ <br /> \r\n<br /> इमेल: &nbsp;<br /> </p>\r\n', 'Contents Page', 70, 'no', '2013-12-09', '', 'normal', 'No', '', '', '', '', '', ''),
(8, 'Slider', '', 'slider', 'Other', 0, '', '', '', '', 'Gallery', 10, 'no', '2012-12-11', '', 'normal', 'No', '', '', '', '', '', ''),
(56, '&#2327;&#2371;&#2361; &#2346;&#2371;&#2359;&#2381;&#8205;&#2336;', 'Home', 'home', 'Header', 0, '', '', 'home', '', 'Link', 10, 'no', '2012-12-13', '', 'normal', 'No', '', '', '', '', '', ''),
(176, 'वन विभागमा स्वागतम', 'Welcome to Forest Department', 'welcome-to-forest-department', 'Other', 0, '<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 'Contents Page', 20, 'no', '2013-11-26', '', 'normal', 'No', '', '', '', '', '', ''),
(399, 'वन विभाग', 'Depertment of Forests', 'dof', 'Header', 363, '', '', 'http://www.dof.gov.np', '', 'Link', 30, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(400, 'वन अनुसन्धान तथा सर्वेक्षण विभाग', 'Department of Forest Research and Survey', 'dofrs', 'Header', 363, '', '', 'http://www.dfrs.gov.np', '', 'Link', 40, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(558, '', '', '558', '', 8, 'Forest 1', '', '', '', 'GallerySub', 50, 'no', '2018-07-11', '558.jpg', '', '', '', '', '', '', '', ''),
(338, '&#2357;&#2367;&#2357;&#2367;&#2343;', 'Others', 'publications--', 'Header', 0, '', '', '', '', 'Normal Group', 23, 'no', '2015-04-07', '', 'normal', 'No', '', '', '', '', '', ''),
(296, '&#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;', 'Staffs', 'staff', 'Header', 0, '', '', '<table border=\"1\" cellpadding=\"0\" cellspacing=\"1\" style=\"width:542px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>&#2325;&#2381;&#2352;</strong><strong>.</strong><strong>&#2360;&#2306;</strong><strong>.&nbsp;</strong></td>\r\n			<td style=\"width:119px\"><strong>&#2346;&#2342;</strong>&nbsp;</td>\r\n			<td><strong>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368;</strong></td>\r\n			<td style=\"width:122px\"><strong>&#2325;&#2366;&#2352;&#2381;&#2351;&#2352;&#2340;</strong> <strong>&#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;&#2325;&#2379;</strong> <strong>&#2344;&#2366;&#2350;</strong></td>\r\n			<td><strong>&#2360;&#2381;&#2341;&#2366;&#2351;&#2368;</strong> <strong>&#2336;&#2375;&#2327;&#2366;&#2344;&#2366;</strong></td>\r\n			<td style=\"width:67px\"><strong>&#2325;&#2376;&#2347;&#2367;&#2351;&#2340;</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&nbsp;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2346;&#2381;&#2352;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2352;&#2367;&#2325;&#2381;&#2340;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2311;&#2344;&#2381;&#2342;&#2381;&#2352; &#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2323;&#2354;&#2368;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2409;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;. &#2348;&#2366;&#2354;&#2368; &#2360;&#2306;&#2352;&#2325;&#2381;&#2359;&#2339; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&nbsp;&#2358;&#2381;&#2352;&#2368; &#2352;&#2366;&#2350; &#2330;&#2344;&#2381;&#2342;&#2381;&#2352; &#2346;&#2380;&#2337;&#2375;&#2354;</td>\r\n			<td>&nbsp;&#2352;&#2369;&#2346;&#2366;&#2325;&#2379;&#2335; &ndash; &#2411;, &#2340;&#2344;&#2361;&#2369;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2410;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2325;&#2367;&#2352;&#2339;&#2361;&#2352;&#2368; &#2350;&#2366;&#2360;&#2381;&#2325;&#2375;</td>\r\n			<td>&#2336;&#2350;&#2375;&#2354;, &#2325;&#2366;&#2336;&#2350;&#2366;&#2337;&#2380;&#2306;&ndash;&#2408;&#2415;&nbsp;&nbsp;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2411;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&nbsp;&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2337;&#2366;. &#2332;&#2344;&#2366;&#2352;&#2381;&#2342;&#2344; &#2326;&#2337;&#2381;&#2325;&#2366;</td>\r\n			<td>&#2325;&#2366;.&#2350;.&#2346;&#2366;.-&#2410;, &#2325;&#2366;&#2336;&#2350;&#2366;&#2339;&#2381;&#2337;&#2380;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2412;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&nbsp;&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2360;&#2369;&#2344;&#2367;&#2354; &#2346;&#2366;&#2339;&#2381;&#2337;&#2375;&nbsp;</td>\r\n			<td>&#2325;&#2366;&#2360;&#2381;&#2325;&#2368;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2413;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2360;&#2366;&#2352; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&nbsp;&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2342;&#2367;&#2346;&#2325; &#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2346;&#2381;&#2351;&#2366;&#2325;&#2369;&#2352;&#2375;&#2354;</td>\r\n			<td>&nbsp;&#2330;&#2367;&#2340;&#2357;&#2344;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2414;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2348;&#2354;&#2352;&#2366;&#2350; &#2352;&#2367;&#2332;&#2366;&#2354;</td>\r\n			<td>&#2328;&#2340;&#2366;&#2344; &ndash; &#2408;, &#2350;&#2381;&#2351;&#2366;&#2327;&#2381;&#2342;&#2368;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2415;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2360;&#2366;&#2352; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&nbsp;&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2350;&#2344;&#2367;&#2340;&#2366; &#2341;&#2366;&#2346;&#2366;</td>\r\n			<td>&#2342;&#2367;&#2325;&#2381;&#2340;&#2375;&#2354; &ndash; &#2412;, &#2326;&#2379;&#2335;&#2366;&#2329;&#2381;&#2327;</td>\r\n			<td style=\"width:67px\">&#2309;&#2343;&#2381;&#2351;&#2351;&#2344; &#2348;&#2367;&#2342;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2406;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2344;&#2375;&#2340;&#2381;&#2352; &#2346;&#2381;&#2352;&#2360;&#2366;&#2342; &#2349;&#2335;&#2381;&#2335;</td>\r\n			<td>&nbsp;&#2330;&#2367;&#2340;&#2357;&#2344;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2407;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2354;&#2375;&#2326;&#2366; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2310;&#2340;&#2381;&#2350;&#2366;&#2352;&#2366;&#2350; &#2341;&#2366;&#2346;&#2366;&nbsp;</td>\r\n			<td>&#2354;&#2366;&#2350;&#2366;&#2335;&#2366;&#2352;, &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2408;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2352;&#2366;&#2332;&#2369; &#2338;&#2325;&#2366;&#2354;</td>\r\n			<td>&#2348;&#2366;&#2306;&#2360;&#2348;&#2366;&#2352;&#2368;&ndash;&#2407;, &#2360;&#2367;&#2344;&#2381;&#2343;&#2369;&#2346;&#2366;&#2354;&#2381;&#2330;&#2379;&#2325;</td>\r\n			<td style=\"width:67px\">&#2309;&#2343;&#2381;&#2351;&#2351;&#2344; &#2348;&#2367;&#2342;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2409;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2346;&#2381;&#2352;&#2325;&#2366;&#2360; &#2346;&#2380;&#2337;&#2354;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2410;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2352;&#2366;&#2332;&#2344; &#2346;&#2352;&#2367;&#2351;&#2366;&#2352;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2411;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2351;&#2379;&#2332;&#2344;&#2366; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2348;&#2330;&#2381;&#2330;&#2369; &#2325;&#2376;&#2354;&#2366;&#2358; &#2325;&#2379;&#2311;&#2352;&#2366;&#2354;&#2366;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2412;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2354;&#2375;&#2326;&#2366;&#2346;&#2366;&#2354;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2346;&#2381;&#2352;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2358;&#2366;&#2352;&#2342;&#2366; &#2325;&#2379;&#2311;&#2352;&#2366;&#2354;&#2366;&nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2413;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2344;&#2366;.&#2360;&#2369;.&nbsp;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2346;&#2381;&#2352;.&#2346;&#2381;&#2352;.&nbsp;&nbsp;</td>\r\n			<td style=\"width:122px\">&nbsp;&#2352;&#2367;&#2325;&#2381;&#2340;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2414;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2335;&#2366;&#2311;&#2346;&#2367;&#2359;&#2381;&#2335;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2358;&#2366;&#2352;&#2342;&#2366; &#2346;&#2380;&#2337;&#2375;&#2354;&nbsp;</td>\r\n			<td>&#2349;&#2376;&#2360;&#2368;&#2346;&#2366;&#2335;&#2368; &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;</td>\r\n			<td style=\"width:67px\">&#2325;&#2352;&#2366;&#2352;&#2350;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2415;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2346;&#2381;&#2352;&#2366;.&#2360;. (&#2350;&#2366;&#2335;&#2379;)</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2346;&#2381;&#2352;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2352;&#2367;&#2325;&#2381;&#2340;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2406;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2346;&#2381;&#2352;&#2366;.&#2360;. (&#2350;&#2366;&#2335;&#2379;)</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2346;&#2381;&#2352;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368;&#2350;&#2340;&#2368; &#2325;&#2354;&#2381;&#2346;&#2344;&#2366; &#2325;&#2366;&#2352;&#2381;&#2325;&#2368;</td>\r\n			<td>&#2327;&#2379;&#2342;&#2366;&#2350;&#2330;&#2380;&#2352;&ndash;&#2410;, &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2407;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2344;&#2366;.&#2346;&#2381;&#2352;&#2366;.&#2360;.</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&nbsp;&#2352;&#2367;&#2325;&#2381;&#2340;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2408;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2326;&#2352;&#2367;&#2342;&#2366;&#2352;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;.&nbsp;</td>\r\n			<td style=\"width:122px\">&nbsp;&#2358;&#2381;&#2352;&#2368; &#2354;&#2325;&#2381;&#2359;&#2381;&#2350;&#2368; &#2348;&#2352;&#2366;&#2354;</td>\r\n			<td>&#2325;&#2366;&#2360;&#2381;&#2325;&#2368;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2409;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2311;&#2354;&#2375;&#2325;&#2381;&#2335;&#2381;&#2352;&#2368;&#2360;&#2367;&#2351;&#2344;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2352;&#2367;&#2325;&#2381;&#2340;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2410;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2361;&#2354;&#2369;&#2325;&#2366; &#2360;&#2357;&#2366;&#2352;&#2368; &#2330;&#2366;&#2354;&#2325;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2350;&#2343;&#2369; &#2350;&#2352;&#2336;&#2366;</td>\r\n			<td>&#2327;&#2379;&#2352;&#2381;&#2326;&#2366;&nbsp;</td>\r\n			<td style=\"width:67px\">&#2325;&#2352;&#2366;&#2352;&#2350;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2411;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2361;&#2381;&#2351;&#2366;&#2349;&#2368; &#2360;&#2357;&#2366;&#2352;&#2368; &#2330;&#2366;&#2354;&#2325;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2350;&#2344; &#2325;&#2369;&#2350;&#2366;&#2352; &#2344;&#2327;&#2352;&#2325;&#2379;&#2335;&#2368;</td>\r\n			<td>&#2360;&#2369;&#2344;&#2381;&#2342;&#2352;&#2368;&#2332;&#2354;, &#2325;&#2366;&#2336;&#2350;&#2366;&#2337;&#2380;&nbsp;</td>\r\n			<td style=\"width:67px\">&#2325;&#2352;&#2366;&#2352;&#2350;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2412;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2325;&#2366;&#2352;&#2381;&#2351;&#2366;&#2354;&#2351; &#2360;&#2361;&#2351;&#2379;&#2327;&#2368;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2325;&#2350;&#2354;&#2325;&#2371;&#2359;&#2381;&#2339; &#2349;&#2339;&#2381;&#2337;&#2366;&#2352;&#2368;</td>\r\n			<td>&#2311;&#2350;&#2366;&#2337;&#2379;&#2354;&ndash;&#2411;, &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2413;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2325;&#2366;&#2352;&#2381;&#2351;&#2366;&#2354;&#2351; &#2360;&#2361;&#2351;&#2379;&#2327;&#2368;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2325;&#2375;&#2342;&#2366;&#2352;&#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2325;&#2366;&#2352;&#2381;&#2325;&#2368;</td>\r\n			<td>&#2333;&#2352;&#2370;&#2357;&#2366;&#2352;&#2366;&#2360;&#2368;&ndash;&#2414;, &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;&nbsp;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2414;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2325;&#2366;&#2352;&#2381;&#2351;&#2366;&#2354;&#2351; &#2360;&#2361;&#2351;&#2379;&#2327;&#2368;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2340;&#2381;&#2352;&#2367;&#2349;&#2369;&#2357;&#2344; &#2330;&#2380;&#2343;&#2352;&#2368;</td>\r\n			<td>&#2348;&#2344;&#2352;&#2333;&#2369;&#2354;&#2366;&ndash;&#2407;, &#2360;&#2346;&#2381;&#2340;&#2352;&#2368;</td>\r\n			<td style=\"width:67px\">&#2325;&#2352;&#2366;&#2352;&#2350;&#2366;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<table align=\"left\" border=\"3\" cellpadding=\"3\" cellspacing=\"3\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>&#2325;&#2381;&#2352;</strong><strong>.</strong><strong>&#2360;&#2306;</strong><strong>.&nbsp;</strong></td>\r\n			<td style=\"width:119px\"><strong>&#2346;&#2342;</strong>&nbsp;</td>\r\n			<td><strong>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368;</strong></td>\r\n			<td style=\"width:122px\"><strong>&#2325;&#2366;&#2352;&#2381;&#2351;&#2352;&#2340;</strong> <strong>&#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;&#2325;&#2379;</strong> <strong>&#2344;&#2366;&#2350;</strong></td>\r\n			<td><strong>&#2360;&#2381;&#2341;&#2366;&#2351;&#2368;</strong> <strong>&#2336;&#2375;&#2327;&#2366;&#2344;&#2366;</strong></td>\r\n			<td style=\"width:67px\"><strong>&#2325;&#2376;&#2347;&#2367;&#2351;&#2340;</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&nbsp;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2346;&#2381;&#2352;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2357;&#2352;&#2367;&#2359;&#2381;&#2336; &#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2311;&#2344;&#2381;&#2342;&#2381;&#2352; &#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2323;&#2354;&#2368;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2409;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;. &#2348;&#2366;&#2354;&#2368; &#2360;&#2306;&#2352;&#2325;&#2381;&#2359;&#2339; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2352;&#2366;&#2350; &#2330;&#2344;&#2381;&#2342;&#2381;&#2352; &#2346;&#2380;&#2337;&#2375;&#2354;&nbsp;</td>\r\n			<td>&#2352;&#2369;&#2346;&#2366;&#2325;&#2379;&#2335; &ndash; &#2411;, &#2340;&#2344;&#2361;&#2369;&nbsp;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2410;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2325;&#2367;&#2352;&#2339;&#2361;&#2352;&#2368; &#2350;&#2366;&#2360;&#2381;&#2325;&#2375;</td>\r\n			<td>&#2336;&#2350;&#2375;&#2354;, &#2325;&#2366;&#2336;&#2350;&#2366;&#2337;&#2380;&#2306;&ndash;&#2408;&#2415;&nbsp;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2411;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&nbsp;&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2337;&#2366;. &#2332;&#2344;&#2366;&#2352;&#2381;&#2342;&#2344; &#2326;&#2337;&#2381;&#2325;&#2366;</td>\r\n			<td>&#2325;&#2366;.&#2350;.&#2346;&#2366;.-&#2410;, &#2325;&#2366;&#2336;&#2350;&#2366;&#2339;&#2381;&#2337;&#2380;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2412;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&nbsp;&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2360;&#2369;&#2344;&#2367;&#2354; &#2346;&#2366;&#2339;&#2381;&#2337;&#2375;&nbsp;</td>\r\n			<td>&#2325;&#2366;&#2360;&#2381;&#2325;&#2368;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2413;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2348;&#2352;&#2367;&#2359;&#2381;&#2336; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2360;&#2366;&#2352; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&nbsp;&#2352;&#2366;.&#2346;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2342;&#2367;&#2346;&#2325; &#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2346;&#2381;&#2351;&#2366;&#2325;&#2369;&#2352;&#2375;&#2354;</td>\r\n			<td>&nbsp;&#2330;&#2367;&#2340;&#2357;&#2344;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2414;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2343;&#2381;&#2352;&#2369;&#2348; &#2338;&#2325;&#2366;&#2354;</td>\r\n			<td>&#2357;&#2379;&#2352;&#2381;&#2354;&#2366;&uml; &ndash;&#2414;, &#2327;&#2379;&#2352;&#2326;&#2366;</td>\r\n			<td style=\"width:67px\">&#2309;&#2343;&#2381;&#2351;&#2351;&#2344; &#2348;&#2367;&#2342;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2415;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2360;&#2366;&#2352; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&nbsp;&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2350;&#2344;&#2367;&#2340;&#2366; &#2341;&#2366;&#2346;&#2366;</td>\r\n			<td>&#2342;&#2367;&#2325;&#2381;&#2340;&#2375;&#2354; &ndash; &#2412;, &#2326;&#2379;&#2335;&#2366;&#2329;&#2381;&#2327;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2406;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2348;&#2354;&#2352;&#2366;&#2350; &#2352;&#2367;&#2332;&#2366;&#2354;</td>\r\n			<td>&#2328;&#2340;&#2366;&#2344; &ndash; &#2408;, &#2350;&#2381;&#2351;&#2366;&#2327;&#2381;&#2342;&#2368;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2407;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2354;&#2375;&#2326;&#2366; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2310;&#2340;&#2381;&#2350;&#2366;&#2352;&#2366;&#2350; &#2341;&#2366;&#2346;&#2366;&nbsp;</td>\r\n			<td>&#2354;&#2366;&#2350;&#2366;&#2335;&#2366;&#2352;, &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2408;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2335;&#2369;&#2325; &#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2341;&#2366;&#2346;&#2366;</td>\r\n			<td>&#2346;&#2352;&#2381;&#2357;&#2340;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2409;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2344;&#2375;&#2340;&#2381;&#2352; &#2346;&#2381;&#2352;&#2360;&#2366;&#2342; &#2349;&#2335;&#2381;&#2335;</td>\r\n			<td>&#2330;&#2367;&#2340;&#2357;&#2344;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2410;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2350;&#2366;&#2335;&#2379; &#2357;&#2367;&#2332;&#2381;&#2334;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2352;&#2366;&#2332;&#2369; &#2338;&#2325;&#2366;&#2354;</td>\r\n			<td>&#2348;&#2366;&#2306;&#2360;&#2348;&#2366;&#2352;&#2368;&ndash;&#2407;, &#2360;&#2367;&#2344;&#2381;&#2343;&#2369;&#2346;&#2366;&#2354;&#2381;&#2330;&#2379;&#2325;</td>\r\n			<td style=\"width:67px\">&#2309;&#2343;&#2381;&#2351;&#2351;&#2344; &#2348;&#2367;&#2342;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2411;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2351;&#2379;&#2332;&#2344;&#2366; &#2309;&#2343;&#2367;&#2325;&#2371;&#2340;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2340;&#2371;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2348;&#2330;&#2381;&#2330;&#2369; &#2325;&#2376;&#2354;&#2366;&#2358; &#2325;&#2379;&#2311;&#2352;&#2366;&#2354;&#2366;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2412;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2354;&#2375;&#2326;&#2366;&#2346;&#2366;&#2354;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2346;&#2381;&#2352;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2358;&#2366;&#2352;&#2342;&#2366; &#2325;&#2379;&#2311;&#2352;&#2366;&#2354;&#2366;&nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2413;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2344;&#2366;.&#2360;&#2369;.&nbsp;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2346;&#2381;&#2352;.&#2346;&#2381;&#2352;.&nbsp;&nbsp;</td>\r\n			<td style=\"width:122px\">&nbsp;&#2352;&#2367;&#2325;&#2381;&#2340;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2414;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2335;&#2366;&#2311;&#2346;&#2367;&#2359;&#2381;&#2335;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2358;&#2366;&#2352;&#2342;&#2366; &#2346;&#2380;&#2337;&#2375;&#2354;&nbsp;</td>\r\n			<td>&#2349;&#2376;&#2360;&#2368;&#2346;&#2366;&#2335;&#2368; &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;</td>\r\n			<td style=\"width:67px\">&#2325;&#2352;&#2366;&#2352;&#2350;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2407;&#2415;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2346;&#2381;&#2352;&#2366;.&#2360;. (&#2350;&#2366;&#2335;&#2379;)</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2346;&#2381;&#2352;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2352;&#2367;&#2325;&#2381;&#2340;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2406;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2346;&#2381;&#2352;&#2366;.&#2360;. (&#2350;&#2366;&#2335;&#2379;)</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2346;&#2381;&#2352;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368;&#2350;&#2340;&#2368; &#2325;&#2354;&#2381;&#2346;&#2344;&#2366; &#2325;&#2366;&#2352;&#2381;&#2325;&#2368;</td>\r\n			<td>&#2327;&#2379;&#2342;&#2366;&#2350;&#2330;&#2380;&#2352;&ndash;&#2410;, &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2407;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2344;&#2366;.&#2346;&#2381;&#2352;&#2366;.&#2360;.</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;&#2366;.</td>\r\n			<td style=\"width:122px\">&nbsp;&#2352;&#2367;&#2325;&#2381;&#2340;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2408;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2326;&#2352;&#2367;&#2342;&#2366;&#2352;</td>\r\n			<td>&#2352;&#2366;.&#2346;.&#2309;&#2344;&#2306;.&#2342;&#2381;&#2357;&#2367;.&#2346;&#2381;&#2352;.&nbsp;</td>\r\n			<td style=\"width:122px\">&nbsp;&#2358;&#2381;&#2352;&#2368; &#2354;&#2325;&#2381;&#2359;&#2381;&#2350;&#2368; &#2348;&#2352;&#2366;&#2354;</td>\r\n			<td>&#2325;&#2366;&#2360;&#2381;&#2325;&#2368;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2409;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2311;&#2354;&#2375;&#2325;&#2381;&#2335;&#2381;&#2352;&#2368;&#2360;&#2367;&#2351;&#2344;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2352;&#2367;&#2325;&#2381;&#2340;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2410;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2361;&#2354;&#2369;&#2325;&#2366; &#2360;&#2357;&#2366;&#2352;&#2368; &#2330;&#2366;&#2354;&#2325;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2350;&#2343;&#2369; &#2350;&#2352;&#2336;&#2366;</td>\r\n			<td>&#2327;&#2379;&#2352;&#2381;&#2326;&#2366;&nbsp;</td>\r\n			<td style=\"width:67px\">&#2325;&#2352;&#2366;&#2352;&#2350;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2411;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2361;&#2381;&#2351;&#2366;&#2349;&#2368; &#2360;&#2357;&#2366;&#2352;&#2368; &#2330;&#2366;&#2354;&#2325;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2350;&#2344; &#2325;&#2369;&#2350;&#2366;&#2352; &#2344;&#2327;&#2352;&#2325;&#2379;&#2335;&#2368;</td>\r\n			<td>&#2360;&#2369;&#2344;&#2381;&#2342;&#2352;&#2368;&#2332;&#2354;, &#2325;&#2366;&#2336;&#2350;&#2366;&#2337;&#2380;&nbsp;</td>\r\n			<td style=\"width:67px\">&#2325;&#2352;&#2366;&#2352;&#2350;&#2366;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2412;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2325;&#2366;&#2352;&#2381;&#2351;&#2366;&#2354;&#2351; &#2360;&#2361;&#2351;&#2379;&#2327;&#2368;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2325;&#2350;&#2354;&#2325;&#2371;&#2359;&#2381;&#2339; &#2349;&#2339;&#2381;&#2337;&#2366;&#2352;&#2368;</td>\r\n			<td>&#2311;&#2350;&#2366;&#2337;&#2379;&#2354;&ndash;&#2411;, &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2413;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2325;&#2366;&#2352;&#2381;&#2351;&#2366;&#2354;&#2351; &#2360;&#2361;&#2351;&#2379;&#2327;&#2368;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2325;&#2375;&#2342;&#2366;&#2352;&#2348;&#2361;&#2366;&#2342;&#2369;&#2352; &#2325;&#2366;&#2352;&#2381;&#2325;&#2368;</td>\r\n			<td>&#2333;&#2352;&#2370;&#2357;&#2366;&#2352;&#2366;&#2360;&#2368;&ndash;&#2414;, &#2354;&#2354;&#2367;&#2340;&#2346;&#2369;&#2352;&nbsp;&nbsp;</td>\r\n			<td style=\"width:67px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&#2408;&#2414;</strong>&nbsp;</td>\r\n			<td style=\"width:119px\">&#2325;&#2366;&#2352;&#2381;&#2351;&#2366;&#2354;&#2351; &#2360;&#2361;&#2351;&#2379;&#2327;&#2368;</td>\r\n			<td>&#2358;&#2381;&#2352;&#2375;&#2339;&#2368; &#2357;&#2367;&#2361;&#2368;&#2344;</td>\r\n			<td style=\"width:122px\">&#2358;&#2381;&#2352;&#2368; &#2340;&#2381;&#2352;&#2367;&#2349;&#2369;&#2357;&#2344; &#2330;&#2380;&#2343;&#2352;&#2368;</td>\r\n			<td>&#2348;&#2344;&#2352;&#2333;&#2369;&#2354;&#2366;&ndash;&#2407;, &#2360;&#2346;&#2381;&#2340;&#2352;&#2368;</td>\r\n			<td style=\"width:67px\">&#2325;&#2352;&#2366;&#2352;&#2350;&#2366;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Contents Page', 30, 'no', '2015-01-17', '', 'normal', 'No', '', '', '', '', '', ''),
(373, '&#2349;&#2367;&#2337;&#2367;&#2351;&#2379;', 'Official-Video', 'youtube', 'Other', 0, '', '', '', '', 'Link', 140, 'no', '2016-06-15', '', 'normal', 'No', '', '', '', '', '', ''),
(422, '&#2327;&#2369;&#2339;&#2360;&#2381;&#2340;&#2352;&#2351;&#2369;&#2325;&#2381;&#2340; &#2325;&#2350;&#2381;&#2346;&#2379;&#2360;&#2381;&#2335; &#2350;&#2354; &#2348;&#2344;&#2366;&#2313;&#2344;&#2375; &#2340;&#2352;&#2367;&#2325;&#2366; ', '', 'gunstarukata-compost-mal-banaune-tarika', 'Header', 386, '', '', 'https://www.youtube.com/embed/sPpgdLvJKGk', '', 'Link', 20, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(421, '&#2350;&#2366;&#2335;&#2379; &#2325;&#2379; &#2344;&#2350;&#2369;&#2344;&#2366; &#2354;&#2367;&#2344;&#2375; &#2340;&#2352;&#2367;&#2325;&#2366; ', '', 'matoko-namuna-lene-tarika', 'Header', 386, '', '', 'https://www.youtube.com/embed/eZa910rlNIU', '', 'Link', 10, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(274, 'जिल्ला बन अधिकृत', 'Message from District Forest Officer', 'message-from-district-forest-officer', 'Other', 0, 'इन्द्रमणि भण्डारी&nbsp; (जिल्ला बन अधिकृत)', 'Mr. Indramani Bhandari', '<p>Mr. Indramani Bhandari</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humor and the like).</p>\r\n', '<p>Mr. Indramani Bhandari</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humor and the like).</p>\r\n', 'Contents Page', 90, 'no', '2014-04-22', 'dfo.jpg', 'normal', 'No', '', '', '', '', '', ''),
(367, 'Officer-Photo', 'Officer-Photo', 'officer-photo', 'Other', 0, '', '', '', '', 'Gallery', 130, 'no', '2016-06-13', '', 'normal', 'No', '', '', '', '', '', ''),
(499, '', '', '499', '', 367, 'Balaram Rijal (Soil Scientist)', '', '', '', 'GallerySub', 50, 'no', '2016-08-01', '499.jpg', '', '', '', '', '', '', '', ''),
(459, 'Bhakaro Sudhar Karyabidhi', 'Bhakaro Sudhar Karyabidhi', 'bhakaro-sudhar-karyabidhi', 'Header', 338, '', '', '', '', 'File', 70, 'no', '2016-07-11', 'bhakaro sudhar karyabidhi.pdf', 'normal', 'No', '', '', '', '', '', ''),
(363, '&#2354;&#2367;&#2329;&#2381;&#2325;&#2381;&#2360;', 'Links', 'important-links', 'Header', 0, '', '', '', '', 'Normal Group', 50, 'no', '2016-06-12', '', 'normal', 'No', '', '', '', '', '', ''),
(559, '', '', '559', '', 8, 'Forest 2', '', '', '', 'GallerySub', 50, 'no', '2018-07-11', '559.jpg', '', '', '', '', '', '', '', ''),
(321, 'सूचना', 'Notice', 'information-news', 'Header', 0, '', '', '', '', 'List', 15, 'no', '2015-01-18', 'Rhizobium tender notice.pdf', 'normal', 'No', '', '', '', '', '', ''),
(496, 'Aunudan-Ko-Details', '', 'aunudan-ko-details', '', 492, '', '', '', '', 'ListSub', 10, 'no', '2016-08-01', '', '', 'no', '', '', '', '', '', ''),
(510, 'Mato Biseshanka-2072', 'Mato Biseshanka-2072', 'mato-biseshanka-2072', 'Header', 338, '', '', 'Mato Biseshanka-2072.pdf', '', 'File', 55, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(560, '', '', '560', '', 8, 'Forest 3', '', '', '', 'GallerySub', 50, 'no', '2018-07-11', '560.jpg', '', '', '', '', '', '', '', ''),
(356, '&#2327;&#2381;&#2351;&#2366;&#2354;&#2375;&#2352;&#2368;', 'Gallery', 'gallery', 'Header', 0, '', '', '', '', 'Gallery', 65, 'no', '2015-08-17', '', 'normal', 'No', '', '', '', '', '', ''),
(428, '', '', '428', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '428.jpg', '', '', '', '', '', '', '', ''),
(426, '', '', '426', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '426.jpg', '', '', '', '', '', '', '', ''),
(427, '&#2332;&#2357;&#2367;&#2325; &#2350;&#2354; ', '', 'jaibek-mal', 'Header', 386, '', '', 'https://www.youtube.com/embed/4vBb88C4EwM', '', 'Link', 40, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(362, 'साहायक जिल्ला बन अधिकृत', 'Assistant District Forest Officer', 'assistant-district-forest-officer', 'Other', 0, 'प्रकाश जोशी&nbsp;', 'Prakash Joshi (Assistant District Forest Officer)', '<p>Prakash Joshi (Assistant District Forest Officer)</p>\r\n', 'Prakash Joshi (Assistant District Forest Officer)', 'Contents Page', 120, 'no', '2016-06-12', 'ass_dfo.jpg', 'normal', 'Yes', '', '', '', '', '', ''),
(397, '&#2325;&#2371;&#2359;&#2367; &#2357;&#2367;&#2325;&#2366;&#2360; &#2350;&#2344;&#2381;&#2340;&#2381;&#2352;&#2366;&#2354;&#2351;', 'Ministry of Forests and Environment', 'forest-development-ministry', 'Header', 363, '', '', 'http://www.mfsc.gov.np/', '', 'Link', 10, 'no', '2018-07-16', '', 'normal', 'No', '', '', '', '', '', ''),
(417, 'Annual Report 2068-69', 'Annual Report 2068-69', 'annual-report-2068-69', 'Header', 338, '', '', 'Annual Report 2068-69.pdf', '', 'File', 50, 'no', '2016-07-11', 'Annual Report 2068-69.pdf', 'normal', 'No', '', '', '', '', '', ''),
(418, 'Annual Report 2069-70', 'Annual Report 2069-70', 'annual-report-2069-70', 'Header', 338, '', '', 'Annual Report 2069-70.pdf', '', 'File', 40, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(462, 'Soil Fertility Map of Palpa', 'Soil Fertility Map of Palpa', 'soil-fertility-map-of-palpa', 'Header', 338, '', '', 'Soil Fertility Map of Palpa.pdf', '', 'File', 100, 'no', '2016-07-12', '', 'normal', 'No', '', '', '', '', '', ''),
(470, 'Soil Fertility  Map  of Myagdi', 'Soil Fertility  Map  of Myagdi', 'soil-fertility-map-of-myagdi', 'Header', 338, '', '', 'Soil Fertility  Map  of Myagdi.pdf', '', 'File', 110, 'no', '2016-07-12', '', 'normal', 'No', '', '', '', '', '', ''),
(401, 'राष्ट्रिय निकुञ्ज तथा वन्यजन्तु संरक्षण विभाग', '	Department of National parks and Wildlife Conservation', 'dnpwc', 'Header', 363, '', '', 'http://www.dnpwc.gov.np/', '', 'Link', 50, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(402, 'भू तथा जलाधार संरक्षण विभाग', 'Department of Soil Conservation and Watershed Management', 'dscwm', 'Header', 363, '', '', 'http://www.dscwm.gov.np', '', 'Link', 60, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(546, '', '', '546', '', 367, 'Dr. Janardan Khadka ( Senior soil Scientist)', '', '', '', 'GallerySub', 50, 'no', '2016-11-28', '546.jpg', '', '', '', '', '', '', '', ''),
(423, '&#2332;&#2376;&#2357;&#2367;&#2325; &#2350;&#2354;  &#2348;&#2344;&#2366;&#2313;&#2344;&#2375; &#2340;&#2352;&#2367;&#2325;&#2366; ', '', 'jaibek-mal-banaune-tarikaa', 'Header', 386, '', '', 'https://www.youtube.com/embed/R39Fnn20B0U', '', 'Link', 30, 'no', '2016-07-11', '', 'normal', 'No', '', '', '', '', '', ''),
(429, '', '', '429', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '429.jpg', '', '', '', '', '', '', '', ''),
(430, '', '', '430', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '430.jpg', '', '', '', '', '', '', '', ''),
(431, '', '', '431', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '431.jpg', '', '', '', '', '', '', '', ''),
(432, '', '', '432', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '432.jpg', '', '', '', '', '', '', '', ''),
(433, '', '', '433', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '433.jpg', '', '', '', '', '', '', '', ''),
(434, '', '', '434', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '434.jpg', '', '', '', '', '', '', '', ''),
(435, '', '', '435', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '435.jpg', '', '', '', '', '', '', '', ''),
(436, '', '', '436', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '436.jpg', '', '', '', '', '', '', '', ''),
(437, '', '', '437', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '437.jpg', '', '', '', '', '', '', '', ''),
(438, '', '', '438', '', 356, 'Soil Lab Hariharbhawan', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '438.jpg', '', '', '', '', '', '', '', ''),
(439, '', '', '439', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '439.jpg', '', '', '', '', '', '', '', ''),
(440, '', '', '440', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '440.jpg', '', '', '', '', '', '', '', ''),
(441, '', '', '441', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '441.jpg', '', '', '', '', '', '', '', ''),
(442, '', '', '442', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '442.jpg', '', '', '', '', '', '', '', ''),
(443, '', '', '443', '', 356, 'Soil Lab', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '443.jpg', '', '', '', '', '', '', '', ''),
(444, '', '', '444', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '444.jpg', '', '', '', '', '', '', '', '');
INSERT INTO `groups` (`id`, `name`, `nameen`, `urlname`, `type`, `parentId`, `shortcontents`, `shortcontentsen`, `contents`, `contentsen`, `linkType`, `weight`, `hide`, `onDate`, `image`, `display`, `featured`, `block`, `transportation`, `pageTitle`, `pageKeyword`, `activity`, `publish`) VALUES
(445, '', '', '445', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '445.jpg', '', '', '', '', '', '', '', ''),
(446, '', '', '446', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '446.jpg', '', '', '', '', '', '', '', ''),
(447, '', '', '447', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '447.jpg', '', '', '', '', '', '', '', ''),
(448, '', '', '448', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '448.jpg', '', '', '', '', '', '', '', ''),
(449, '', '', '449', '', 356, 'Filed', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '449.jpg', '', '', '', '', '', '', '', ''),
(450, '', '', '450', '', 356, 'Machine', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '450.jpg', '', '', '', '', '', '', '', ''),
(451, '', '', '451', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '451.jpg', '', '', '', '', '', '', '', ''),
(452, '', '', '452', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '452.jpg', '', '', '', '', '', '', '', ''),
(453, '', '', '453', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '453.jpg', '', '', '', '', '', '', '', ''),
(454, '', '', '454', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '454.jpg', '', '', '', '', '', '', '', ''),
(455, '', '', '455', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '455.jpg', '', '', '', '', '', '', '', ''),
(458, '', '', '458', '', 356, '', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '458.jpg', '', '', '', '', '', '', '', ''),
(457, '', '', '457', '', 356, 'Survey', '', '', '', 'GallerySub', 50, 'no', '2016-07-11', '457.jpg', '', '', '', '', '', '', '', ''),
(476, 'Soli Fertility Map of Kalikot', 'Soli Fertility Map of Kalikot', 'soli-fertility-map-of-kalikot', 'Header', 338, '', '', 'Soli Fertility map of Kalikot.pdf', '', 'File', 170, 'no', '2016-07-14', '', 'normal', 'No', '', '', '', '', '', ''),
(488, 'Soil Fertility Map of Parbat', 'Soil Fertility Map of Parbat', 'soil-fertility-map-of-parbat', 'Header', 338, '', '', 'Soil Fertility Map of Parbat.pdf', '', 'File', 290, 'no', '2016-07-24', '', 'normal', 'No', '', '', '', '', '', ''),
(489, 'Soil Fertility Map of Banke', 'Soil Fertility Map of Banke', 'soil-fertility-map-of-banke', 'Header', 338, '', '', 'Soil Fertility Map of Banke.pdf', '', 'File', 300, 'no', '2016-07-24', '', 'normal', 'No', '', '', '', '', '', ''),
(494, '&#2350;&#2366;&#2335;&#2379; &#2357;&#2381;&#2351;&#2357;&#2360;&#2381;&#2341;&#2366;&#2346;&#2344; &#2344;&#2367;&#2352;&#2381;&#2342;&#2375;&#2358;&#2344;&#2366;&#2354;&#2351;&#2325;&#2379; &#2310;&#2344;&#2381;&#2340;&#2352;&#2367;&#2325;', '&#2350;&#2366;&#2335;&#2379; &#2357;&#2381;&#2351;&#2357;&#2360;&#2381;&#2341;&#2366;&#2346;&#2344; &#2344;&#2367;&#2352;&#2381;&#2342;&#2375;&#2358;&#2344;&#2366;&#2354;&#2351;&#2325;&#2379; &#2310;&#2344;&#2381;&#2340;&#2352;&#2367;&#2325;', 'mato', 'Header', 338, '', '', '', '', 'Gallery', 72, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(495, '', '', '495', '', 494, '', '', '', '', 'GallerySub', 50, 'no', '2016-08-01', '495.png', '', '', '', '', '', '', '', ''),
(509, '', '', '509', '', 367, 'Ramchandra Poudel (Senior Plant Protection Officer)', '', '', '', 'GallerySub', 50, 'no', '2016-08-01', '509.jpg', '', '', '', '', '', '', '', ''),
(498, '&#2350;&#2366;&#2335;&#2379; &#2357;&#2381;&#2351;&#2357;&#2360;&#2381;&#2341;&#2366;&#2346;&#2344; &#2325;&#2366;&#2352;&#2381;&#2351;&#2325;&#2381;&#2352;&#2350; &#2360;&#2350;&#2381;&#2348;&#2344;&#2381;&#2343;&#2368;', '&#2350;&#2366;&#2335;&#2379; &#2357;&#2381;&#2351;&#2357;&#2360;&#2381;&#2341;&#2366;&#2346;&#2344; &#2325;&#2366;&#2352;&#2381;&#2351;&#2325;&#2381;&#2352;&#2350; &#2360;&#2350;&#2381;&#2348;&#2344;&#2381;&#2343;&#2368;', 'soil----', 'Header', 338, '', '', 'Soil Management Norms.pdf', '', 'File', 71, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(492, '&#2346;&#2381;&#2352;&#2325;&#2366;&#2358;&#2344;', 'Publications', 'publication', 'Header', 553, '', '', '', '', 'List', 22, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(521, '', '', '521', '', 367, 'Atmaram Thapa (Account Officer)', '', '', '', 'GallerySub', 50, 'no', '2016-08-01', '521.jpg', '', '', '', '', '', '', '', ''),
(524, '&#2309;&#2344;&#2381;&#2351; ', '', 'others', '', 492, '', '', '', '', 'ListSub', 50, 'no', '2016-08-03', '', '', 'no', '', '', '', '', '', ''),
(525, '&#2346;&#2352;&#2367;&#2330;&#2351; ', '', 'introduction', '', 492, '', '', '', '', 'ListSub', 60, 'no', '2016-08-03', '', '', 'no', '', '', '', '', '', ''),
(526, '', '', '526', '', 367, 'Netra Prasad Bhatta (Soil Scientist)', '', '', '', 'GallerySub', 50, 'no', '2016-08-04', '526.jpg', '', '', '', '', '', '', '', ''),
(501, '', '', '501', '', 367, 'Laxmi Baral (Store Keeper)', '', '', '', 'GallerySub', 50, 'no', '2016-08-01', '501.jpg', '', '', '', '', '', '', '', ''),
(502, '', '', '502', '', 367, 'Sunil Pandey (Senior Soil Scientist)', '', '', '', 'GallerySub', 50, 'no', '2016-08-01', '502.jpg', '', '', '', '', '', '', '', ''),
(503, 'Bio-fertilizer', 'Bio-fertilizer', 'bio-fertilizer', 'Header', 338, '', '', 'Bio-fertilizer.pdf', '', 'File', 60, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(504, 'Brief Introduction', 'Brief Introduction', 'brief-introduction', 'Header', 338, '', '', 'Brief Introduction.pdf', '', 'File', 1, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(506, 'Brochure Bhakaro', 'Brochure Bhakaro', 'brochure-bhakaro', 'Header', 338, '', '', 'Brochure Bhakaro.pdf', '', 'File', 69, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(507, 'Green manures', 'Green manures', 'green-manures', 'Header', 338, '', '', 'Green manures.pdf', '', 'File', 61, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(508, 'Sampling', 'Sampling', 'sampling', 'Header', 338, '', '', 'Sampling.pdf', '', 'File', 59, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(511, 'Vermi-composting', 'Vermi-composting', 'vermi-composting', 'Header', 338, '', '', 'Vermi-composting.pdf', '', 'File', 65, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(518, 'Organic Jingle', '', 'organic-jingle', 'Header', 386, '', '', 'https://www.youtube.com/embed/sw0jlvkH9KA', '', 'Link', 2, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(519, 'PRANGARIK KHETI', '', 'prangarik-kheti', 'Header', 386, '', '', 'https://www.youtube.com/embed/9Nd-v0LBiQk', '', 'Link', 6, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(517, 'Soil Sampling Method', '', 'soil-sampling-method', 'Header', 386, '', '', 'https://www.youtube.com/embed/_8Rt8UEEzhk', '', 'Link', 5, 'no', '2016-08-01', '', 'normal', 'No', '', '', '', '', '', ''),
(520, 'Annual Reports', '', 'annual-reports', '', 492, '', '', '', '', 'ListSub', 20, 'no', '2016-08-01', '', '', 'no', '', '', '', '', '', ''),
(522, 'Books of Soil', '', 'books-of-soil', '', 492, '', '', '', '', 'ListSub', 30, 'no', '2016-08-01', '', '', 'no', '', '', '', '', '', ''),
(523, 'Soil Fertility Map', '', 'soil-fertility-map', '', 492, '', '', '', '', 'ListSub', 40, 'no', '2016-08-02', '', '', 'no', '', '', '', '', '', ''),
(537, 'Regional Soil Testing Laboratory, Jhumka', 'Regional Soil Testing Laboratory, Jhumka', 'regional-soil-testing-laboratory-jhumka', 'Header', 529, '&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2333;&#2369;&#2350;&#2381;&#2325;&#2366;, &#2360;&#2369;&#2344;&#2360;&#2352;&#2368; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2408;&#2411;-&#2411;&#2412;&#2408;&#2406;&#2415;&#2415;<br />\r\n&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2361;&#2375;&#2335;&#2380;&#2305;&#2337;&#2366;, &#2350;&#2325;&#2357;&#2366;&#2344;&#2346;&#2369;&#2352; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2411;&#2413;-&#2410;&#2407;&#2408;&#2411;&#2409;&#2411;<br />\r\n&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2346;&#2379;&#2326;&#2352;&#2366;, &#2325;&#2366;&#2360;&#2381;&#2325;&#2368; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2412;&#2407;-&#2410;&#2412;&#2406;&#2407;&#2414;&#2413;<br />\r\n&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2326;&#2332;&#2369;&#2352;&#2366;, &#2348;&#2366;&#2305;&#2325;&#2375; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2414;&#2407;-&#2411;&#2412;&#2406;&#2410;&#2408;&#2409;<br />\r\n&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2360;&#2369;&#2344;&#2381;&#2342;&#2352;&#2346;&#2369;&#2352;, &#2325;&#2344;&#2381;&#2330;&#2344;&#2346;&#2369;&#2352; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2415;&#2415;-&#2412;&#2415;&#2406;&#2412;&#2414;&#2415;<br />\r\n&#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2360;&#2369;&#2352;&#2369;&#2329;&#2381;&#2327;&#2366;, &#2333;&#2366;&#2346;&#2366; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2408;&#2409;-&#2411;&#2411;&#2406;&#2406;&#2412;&#2410;', 'Regional Soil Testing Laboratory, Jhumka, Sunsari Ph. No. 025-562099<br />\r\nRegional Soil Testing Laboratory, Hetauda, Makawanpur Ph. No. 057-412535<br />\r\nRegional Soil Testing Laboratory, Pokhara, Kaski Ph. No. 061-460187<br />\r\nRegional Soil Testing Laboratory, Khajura, Banke Ph. No. 081-560423<br />\r\nRegional Soil Testing Laboratory, Sunderpur, Kanchanpur Ph. No. 099-690689<br />\r\nSoil Testing Laboratory, Surunga, Jhapa Ph. No. 023-550064<br />\r\n&nbsp;', '&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2333;&#2369;&#2350;&#2381;&#2325;&#2366;, &#2360;&#2369;&#2344;&#2360;&#2352;&#2368; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2408;&#2411;-&#2411;&#2412;&#2408;&#2406;&#2415;&#2415;<br />\r\n&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2361;&#2375;&#2335;&#2380;&#2305;&#2337;&#2366;, &#2350;&#2325;&#2357;&#2366;&#2344;&#2346;&#2369;&#2352; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2411;&#2413;-&#2410;&#2407;&#2408;&#2411;&#2409;&#2411;<br />\r\n&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2346;&#2379;&#2326;&#2352;&#2366;, &#2325;&#2366;&#2360;&#2381;&#2325;&#2368; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2412;&#2407;-&#2410;&#2412;&#2406;&#2407;&#2414;&#2413;<br />\r\n&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2326;&#2332;&#2369;&#2352;&#2366;, &#2348;&#2366;&#2305;&#2325;&#2375; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2414;&#2407;-&#2411;&#2412;&#2406;&#2410;&#2408;&#2409;<br />\r\n&#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2368;&#2351; &#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2360;&#2369;&#2344;&#2381;&#2342;&#2352;&#2346;&#2369;&#2352;, &#2325;&#2344;&#2381;&#2330;&#2344;&#2346;&#2369;&#2352; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2415;&#2415;-&#2412;&#2415;&#2406;&#2412;&#2414;&#2415;<br />\r\n&#2350;&#2366;&#2335;&#2379; &#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2339; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;&#2358;&#2366;&#2354;&#2366;, &#2360;&#2369;&#2352;&#2369;&#2329;&#2381;&#2327;&#2366;, &#2333;&#2366;&#2346;&#2366; &nbsp;&#2347;&#2379;&#2344; &#2344;&#2306;. &#2406;&#2408;&#2409;-&#2411;&#2411;&#2406;&#2406;&#2412;&#2410;', 'Regional Soil Testing Laboratory, Jhumka, Sunsari Ph. No. 025-562099<br />\r\nRegional Soil Testing Laboratory, Hetauda, Makawanpur Ph. No. 057-412535<br />\r\nRegional Soil Testing Laboratory, Pokhara, Kaski Ph. No. 061-460187<br />\r\nRegional Soil Testing Laboratory, Khajura, Banke Ph. No. 081-560423<br />\r\nRegional Soil Testing Laboratory, Sunderpur, Kanchanpur Ph. No. 099-690689<br />\r\nSoil Testing Laboratory, Surunga, Jhapa Ph. No. 023-550064', 'Contents Page', 20, 'no', '2016-08-18', '', 'normal', 'No', '', '', '', '', '', ''),
(541, 'karabidi', '', 'karabidi', '', 492, '', '', '', '', 'ListSub', 2, 'no', '2016-09-08', '', '', 'no', '', '', '', '', '', ''),
(551, '', '', '551', '', 367, 'Mr. Indra Bahadur Oli (Act. Chief Soil Scientist)', '', '', '', 'GallerySub', 50, 'no', '2017-04-07', '551.jpg', '', '', '', '', '', '', '', ''),
(552, 'aaa', 'qqqqq', 'aaa', 'Header', 386, '', '', 'https://www.youtube.com/embed/s00HrKXbgSs', '', 'Link', 50, 'no', '2017-05-17', '', 'normal', 'No', '', '', '', '', '', ''),
(553, '&#2346;&#2381;&#2352;&#2325;&#2366;&#2358;&#2344;', 'Publication', 'publication-1', 'Header', 0, '', '', '', '', 'Normal Group', 17, 'no', '2017-05-17', '', 'normal', 'No', '', '', '', '', '', ''),
(556, '/imp Block', 'Imp Block', 'imp-block', 'Other', 0, '', '', '', '', 'Normal Group', 150, 'no', '2018-07-04', '', 'normal', 'No', '', '', '', '', '', ''),
(557, 'sdf', '', 'sdf', 'Other', 556, '', '', 'dsfsdf', '', 'Link', 10, 'no', '2018-07-04', '', 'normal', 'No', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `listingfiles`
--

CREATE TABLE `listingfiles` (
  `id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `listingId` int(11) NOT NULL DEFAULT '0',
  `onDate` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listingfiles`
--

INSERT INTO `listingfiles` (`id`, `caption`, `filename`, `listingId`, `onDate`) VALUES
(12, '', 'anudan.pdf', 496, 2016),
(2, '', 'google tricks1.txt', 323, 2015),
(3, '', 'google tricks2.txt', 324, 2015),
(4, '', 'google tricks2.txt', 325, 2015),
(5, '', 'Progress  2071.72  Agri.xls', 351, 2015),
(6, '', 'Progress  2071.72  Ext.xls', 352, 2015),
(7, '', 'Progress 2070.71 Horti.xls', 353, 2015),
(8, '', 'Progress  3 rd 2071.72 Agri..xls', 354, 2015),
(9, '', 'Progress  3 rd 2071.72 Ext..xls', 355, 2015),
(10, '', 'anudan.pdf', 324, 2016),
(11, '', 'anudan.pdf', 322, 2016),
(13, '', 'Mato Biseshanka-2072.pdf', 497, 2016),
(14, '', 'Annual Report 2071-72.pdf', 520, 2016),
(15, '', '024_Digo mato vyawasthapan bibidh pakshyaharu.pdf', 522, 2016),
(16, '', 'Annual Report 2069-70.pdf', 520, 2016),
(17, '', 'Annual Report 2068-69.pdf', 520, 2016),
(18, '', 'Ekikrit khadhyatwo byawasthapan karyapustika.pdf', 522, 2016),
(19, '', 'Ekikrit khadhyatwo byawasthapan krishak pathsala.pdf', 522, 2016),
(20, '', 'Mato Parishyan pustika.pdf', 522, 2016),
(21, '', 'Kshetriya mato parichyan prayogshala.pdf', 522, 2016),
(22, '', 'National workshop on sustainable soil management programe.pdf', 522, 2016),
(25, '', 'Components of IPNS.pdf', 522, 2016),
(26, '', 'Mato jachne kit box sanchalan nirdesika.pdf', 522, 2016),
(27, '', 'Mato ko urbarasakti naksa, bibaran ra mato sudhaar ko sifaris - ek jhalak.pdf', 522, 2016),
(28, '', 'Mato tatha malkhadi byawastha sambandhi.pdf', 522, 2016),
(29, '', 'Study report on organic manure and nutrients.pdf', 522, 2016),
(30, '', 'Summary report of review and planning workshop on sustainable soil management programe.pdf', 522, 2016),
(31, '', 'Tarkari balima khadatwo kami va badiko lakshyan haru part-1.pdf', 522, 2016),
(32, '', 'Tarkari balima khadhatwo kami tatha badi lakshyanharu_Part-2.pdf', 522, 2016),
(33, '', 'Workshop on soil fertility management activities in Nepal_Searchable.pdf', 522, 2016),
(34, '', 'Workshop on soil fertility management programe and working procedure.pdf', 522, 2016),
(35, '', 'Soil Fertility  Map  of Myagdi.pdf', 523, 2016),
(36, '', 'Soil fertility Map of Arghakhachi.pdf', 523, 2016),
(37, '', 'Soil fertility map of baglung.pdf', 523, 2016),
(38, '', 'Soil Fertility Map of Banke.pdf', 523, 2016),
(39, '', 'Soil Fertility Map of Chitwan Irrigation and East Rapti.pdf', 523, 2016),
(40, '', 'Soil Fertility Map of Dadeldhura.pdf', 523, 2016),
(41, '', 'Soil fertility Map of Dailekh.pdf', 523, 2016),
(42, '', 'Soil Fertility Map of Dang.pdf', 523, 2016),
(43, '', 'Soil Fertility Map of Dolakha.pdf', 523, 2016),
(44, '', 'Soil Fertility Map of Gulmi.pdf', 523, 2016),
(45, '', 'Soil Fertility Map of Jajarkot.pdf', 523, 2016),
(46, '', 'Soil Fertility Map of Jumla.pdf', 523, 2016),
(47, '', 'Soil fertility map of Khotang.pdf', 523, 2016),
(48, '', 'Soil Fertility Map of Lamjung.pdf', 523, 2016),
(49, '', 'Soil Fertility Map of Lele.pdf', 523, 2016),
(50, '', 'Soil Fertility Map of Mahottari.pdf', 523, 2016),
(51, '', 'Soil Fertility Map of Makwanpur.pdf', 523, 2016),
(52, '', 'Soil Fertility Map of Okhaldhunga.pdf', 523, 2016),
(53, '', 'Soil Fertility Map of Palpa.pdf', 523, 2016),
(58, '', 'Soli Fertility map of Kalikot.pdf', 523, 2016),
(59, '', 'Soil Fertility Map of Syangja.pdf', 523, 2016),
(60, '', 'Soil Fertility Map of Ramechhap.pdf', 523, 2016),
(61, '', 'Soil Fertility Map of Parbat.pdf', 523, 2016),
(62, '', 'Soil Fertility Map of Parsa.pdf', 523, 2016),
(63, '', 'Soil Fertility Map of Pyuthan.pdf', 523, 2016),
(64, '', 'Soil Fertility Map of Rupandehi.pdf', 523, 2016),
(65, '', 'Soil Fertility Map of Sindhuli.pdf', 523, 2016),
(66, '', 'Soil Fertility Map of Surkhet.pdf', 523, 2016),
(67, '', 'Soil Fertility Map of Terathum.pdf', 523, 2016),
(68, '', 'Bhakaro Sudhar Karyabidhi.pdf', 524, 2016),
(69, '', 'Bio-fertilizer.pdf', 524, 2016),
(70, '', 'Green manures.pdf', 524, 2016),
(71, '', 'Brochure Bhakaro.pdf', 524, 2016),
(72, '', 'Sampling.pdf', 524, 2016),
(73, '', 'Soil Management Norms.pdf', 524, 2016),
(74, '', 'Vermi-composting.pdf', 524, 2016),
(75, '', 'Brief Introduction.pdf', 525, 2016),
(76, '', 'mal.pdf', 527, 2016),
(100, '', 'OM Registration Sheet 2073.xlsx', 528, 2147483647),
(79, 'Karyabidhi organic fertilizer regulation', 'Karyabidhi organic fertilizer regulation.pdf', 532, 2016),
(80, '', 'O.F regulation Karyabidhi District levrl.pdf', 533, 2016),
(81, '', 'organic fertilizer subsidy guideline 2068.pdf', 534, 2016),
(82, '', 'Rhizobium tender notice.pdf', 535, 2016),
(97, '', 'OF PMAMP.pdf', 541, 2147483647),
(86, '', 'Lab equipments and glassware tender notice 2073.pdf', 542, 2016),
(99, '', 'private sector training2.jpg', 549, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `ph_texture`
--

CREATE TABLE `ph_texture` (
  `ph_id` int(10) NOT NULL,
  `ph_value` varchar(255) NOT NULL,
  `pahad_balaute_domat` float NOT NULL,
  `pahad_domat` float NOT NULL,
  `pahad_chimtyaelo_domat` float NOT NULL,
  `tarai_balaute_domat` float NOT NULL,
  `tarai_domat` float NOT NULL,
  `tarai_chimtyaelo_domat` float NOT NULL,
  `publish` varchar(3) NOT NULL,
  `weight` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ph_texture`
--

INSERT INTO `ph_texture` (`ph_id`, `ph_value`, `pahad_balaute_domat`, `pahad_domat`, `pahad_chimtyaelo_domat`, `tarai_balaute_domat`, `tarai_domat`, `tarai_chimtyaelo_domat`, `publish`, `weight`) VALUES
(1, '6.4', 15, 20, 24, 8, 14, 22, 'Yes', 10),
(3, '6.3', 29, 40, 48, 15, 24, 44, 'Yes', 20),
(4, '6.2', 43, 60, 72, 23, 34, 64, 'Yes', 30),
(5, '6.1', 58, 78, 98, 30, 44, 86, 'Yes', 40),
(6, '6', 71, 92, 120, 38, 52, 106, 'Yes', 50),
(7, '5.9', 85, 110, 146, 45, 62, 128, 'Yes', 60),
(8, '5.8', 97, 128, 166, 52, 72, 146, 'Yes', 70),
(9, '5.7', 108, 142, 188, 58, 82, 166, 'Yes', 80),
(10, '5.6', 119, 158, 208, 64, 90, 184, 'Yes', 90),
(11, '5.5', 130, 170, 230, 70, 100, 200, 'Yes', 100),
(12, '5.4', 140, 188, 252, 76, 110, 220, 'Yes', 110),
(13, '5.3', 150, 204, 274, 81, 118, 238, 'Yes', 120),
(14, '5.2', 160, 218, 294, 86, 126, 254, 'Yes', 130),
(15, '5.1', 169, 228, 314, 91, 136, 270, 'Yes', 140),
(16, '5', 176, 240, 334, 96, 142, 286, 'Yes', 150),
(17, '4.9', 184, 252, 354, 101, 150, 302, 'Yes', 160),
(18, '4.8', 191, 262, 374, 106, 158, 316, 'Yes', 170),
(19, '4.7', 199, 272, 390, 111, 166, 330, 'Yes', 180),
(20, '4.6', 205, 280, 406, 120, 180, 340, 'Yes', 190),
(21, '4.5', 210, 290, 420, 120, 180, 350, 'Yes', 200);

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `rm_id` int(10) NOT NULL,
  `crop_name` text NOT NULL,
  `nitrogen_max` float NOT NULL,
  `nitrogen_mid` float NOT NULL,
  `nitrogen_min` float NOT NULL,
  `phosphorus_max` float NOT NULL,
  `phosphorus_mid` float NOT NULL,
  `phosphorus_min` float NOT NULL,
  `potas_max` float NOT NULL,
  `potas_mid` float NOT NULL,
  `potas_min` float NOT NULL,
  `publish` varchar(3) NOT NULL,
  `weight` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recommendation`
--

INSERT INTO `recommendation` (`rm_id`, `crop_name`, `nitrogen_max`, `nitrogen_mid`, `nitrogen_min`, `phosphorus_max`, `phosphorus_mid`, `phosphorus_min`, `potas_max`, `potas_mid`, `potas_min`, `publish`, `weight`) VALUES
(1, 'धान सिंचित ', 5, 2.5, 1.25, 1.5, 0.75, 0.38, 1.5, 0.75, 0.38, 'Yes', 10),
(2, 'धान असिंचित', 3, 1.5, 0.75, 1, 0.5, 0.25, 1, 0.5, 0.25, 'Yes', 20),
(3, 'मकै बर्षे ', 3, 1.5, 0.75, 1.5, 0.75, 0.38, 1.5, 0.75, 0.38, 'Yes', 30),
(4, 'मकै हिउदे', 4.5, 2.25, 1.13, 2.25, 1.13, 0.56, 2.25, 1.13, 0.56, 'Yes', 40),
(5, 'गहुँ सिंचित', 5, 2.5, 1.25, 2.5, 1.25, 0.63, 1.3, 0.65, 0.33, 'Yes', 50),
(6, 'गहुँ असिंचित', 2.5, 1.25, 0.63, 2.5, 1.25, 0.63, 1, 0.5, 0.25, 'Yes', 60),
(7, 'कोदो उन्नत ', 3, 1.5, 0.75, 2, 1, 0.5, 1.5, 0.75, 0.38, 'Yes', 70),
(8, 'उखु (मोरहन बाली) ', 6, 3, 1.5, 3, 1.5, 0.75, 2, 1, 0.5, 'Yes', 80),
(9, 'उखु (खुटीबाली )', 7.5, 3.75, 1.88, 3, 1.5, 0.75, 2, 1, 0.5, 'Yes', 90),
(10, 'तोरी रायो  ', 3, 1.5, 0.75, 2, 1, 0.5, 1, 0.5, 0.25, 'Yes', 100),
(11, 'जौ , उवा', 2, 1, 0.5, 2, 1, 0.5, 1.5, 0.75, 0.38, 'Yes', 110),
(12, 'फापर ', 1.5, 0.75, 0.38, 1.5, 0.75, 0.38, 1, 0.5, 0.25, 'Yes', 120),
(13, 'अदुवा , अलैची', 2.5, 1.25, 0.63, 1.5, 0.75, 0.38, 2.5, 1.25, 0.63, 'Yes', 130),
(14, 'आलु ', 11, 5.5, 2.75, 7, 3.5, 1.75, 5, 2.5, 1.25, 'Yes', 140),
(15, 'तरकारी बाली सागपात जात', 10, 5, 2.5, 9, 4.5, 2.25, 4, 2, 1, 'Yes', 150),
(16, 'तरकारी बाली जरे जात', 10, 5, 2.5, 9, 4.5, 2.25, 4, 2, 1, 'Yes', 160),
(17, 'हरियो केराउ', 0.75, 0.38, 0.19, 2, 1, 0.5, 6, 3, 1.5, 'Yes', 170),
(18, 'काँक्रो', 7, 3.5, 1.75, 2, 1, 0.5, 5, 2.5, 1.25, 'Yes', 180),
(19, 'जुकिनि', 12, 6, 3, 9, 4.5, 2.25, 3, 1.25, 0.75, 'Yes', 190),
(20, 'गोलभेंडा (सृजना) ', 10, 5, 2.5, 9, 4.5, 2.25, 4, 2, 1, 'Yes', 200),
(21, 'गोलभेंडा ( होचा आन्य जात )', 10, 5, 2.5, 10, 5, 2.5, 7.5, 3.75, 1.88, 'Yes', 210),
(22, 'भन्टा  ', 10, 5, 2.5, 9, 4.5, 2.25, 4, 2, 1, 'Yes', 220),
(23, 'रामतोरिया ', 1, 5, 2.5, 9, 4.5, 2.25, 3, 1.5, 0.75, 'Yes', 230),
(24, 'काउली (लोकल )', 10, 5, 2.5, 6, 3, 1.5, 4, 2, 1, 'Yes', 240),
(25, 'काउली (हईब्रिड)', 10, 5, 2.5, 6, 3, 1.5, 5, 2.5, 1.25, 'Yes', 250),
(26, 'बन्दा ', 12, 6, 3, 9, 4.5, 2.25, 4, 2, 1, 'Yes', 260),
(27, 'सिमि ', 4, 2, 1, 6, 3, 1.5, 3, 1.5, 0.75, 'Yes', 270),
(28, 'तितेकरेला ', 10, 5, 2.5, 6, 3, 1.5, 3, 1.5, 0.75, 'Yes', 280),
(29, 'तने बोडी ', 4, 2, 1, 6, 3, 1.5, 2, 1, 0.5, 'Yes', 290),
(30, 'भेंडा खुर्सानी ', 10, 5, 2.5, 5, 2.5, 1.25, 5, 2.5, 1.25, 'Yes', 300),
(31, 'प्याज ', 12, 6, 3, 9, 4.5, 2.25, 4, 2, 1, 'Yes', 310);

-- --------------------------------------------------------

--
-- Table structure for table `report_table`
--

CREATE TABLE `report_table` (
  `report_id` int(10) NOT NULL,
  `generated_date` date NOT NULL,
  `registration_number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `land_address` varchar(500) NOT NULL,
  `ward_number` varchar(255) NOT NULL,
  `district` int(10) NOT NULL,
  `kitta_number` varchar(255) NOT NULL,
  `khet_baari` varchar(255) NOT NULL,
  `sand_format` int(1) NOT NULL,
  `ph_value` varchar(255) NOT NULL,
  `organic_value` varchar(255) NOT NULL,
  `nitrogen_value` float NOT NULL,
  `phosphorus_value` float NOT NULL,
  `potas_value` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_table`
--

INSERT INTO `report_table` (`report_id`, `generated_date`, `registration_number`, `name`, `land_address`, `ward_number`, `district`, `kitta_number`, `khet_baari`, `sand_format`, `ph_value`, `organic_value`, `nitrogen_value`, `phosphorus_value`, `potas_value`) VALUES
(8, '2073-06-03', '21', 'Bharat', 'Dhaddhai', '6', 48, '125', 'खेत', 2, '3.5', '0.85', 5, 20, 15),
(3, '2073-06-05', 'चलानि', 'ानिसह', 'कोतहिाौा', '4', 48, '54', 'गारको', 1, '6', '10', 2, 3, 4),
(4, '2073-06-12', '212', 'asdasferwe', 'sdsfs', '23', 2, '21312', '123', 2, '5', '6', 2, 5, 3),
(5, '2073-06-05', '5', 'Ashok', 'kaski', '7', 59, '10', 'khet', 1, '5.9', '2.1', 0.15, 43, 12),
(6, '2073-06-06', '2', 'akash', 'adf', '1', 2, '2', 'bari', 1, '5.1', '.12', 0.09, 35, 109),
(7, '2073-06-16', '१०५', 'राम', 'धापाखेल', '२२', 2, '-', 'खेत', 2, '3.0', '2.3', 0.11, 55, 210),
(9, '2073-11-01', '-', '-', '-', '-', 48, '-', '-', 2, '0', '0', 0, 0, 0),
(10, '2073-11-24', '', ' Ram', 'Baidawli', '7', 48, '102', 'khet', 2, '7.5', '.06', 0.02, 35, 110);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT '',
  `name` varchar(250) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL,
  `comments` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `onDate` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastLogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginTimes` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` enum('A','D') NOT NULL DEFAULT 'D',
  `userGroupId` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `lastLogin`, `loginTimes`, `status`, `userGroupId`) VALUES
(1, 'admin', 'dfodadeldhura_nepal', '2018-07-16 12:26:51', 425, 'A', 1),
(2, 'manager', 'manager', '2018-07-08 13:04:44', 89, 'A', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `urlname` (`urlname`);

--
-- Indexes for table `listingfiles`
--
ALTER TABLE `listingfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph_texture`
--
ALTER TABLE `ph_texture`
  ADD PRIMARY KEY (`ph_id`),
  ADD KEY `ph_id` (`ph_id`);

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`rm_id`),
  ADD KEY `ph_id` (`rm_id`);

--
-- Indexes for table `report_table`
--
ALTER TABLE `report_table`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `ph_id` (`report_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=561;

--
-- AUTO_INCREMENT for table `listingfiles`
--
ALTER TABLE `listingfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `ph_texture`
--
ALTER TABLE `ph_texture`
  MODIFY `ph_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `recommendation`
--
ALTER TABLE `recommendation`
  MODIFY `rm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `report_table`
--
ALTER TABLE `report_table`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
