-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 01:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ggnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_contact` varchar(20) NOT NULL,
  `admin_type` int(11) NOT NULL,
  `admin_profile_photo` varchar(255) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL,
  `salt` varchar(100) DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `click` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_contact`, `admin_type`, `admin_profile_photo`, `admin_password`, `salt`, `last_login`, `status`, `click`) VALUES
(1, 'Sanjok', 'sanzokgyawali123@gmail.com', '9812927525', 1, NULL, '0efe5e0f6ee16c180e06c8ed947aa09ce17de4a9', '5e379343d4f6b', '2020-01-21', 1, 4),
(54, 'Hotel Yak & Yeti', 'yakyeti@gmail.com', '98007777', 2, '5e3793d7d0bae.jpg', '0efe5e0f6ee16c180e06c8ed947aa09ce17de4a9', '5e379343d4f6b', '2020-02-03', 1, 91),
(55, 'Hotel Radisson', 'radisson@gmail.com', '980077734', 2, '5e3794021a4ec.jpg', '0efe5e0f6ee16c180e06c8ed947aa09ce17de4a9', '5e379343d4f6b', '2020-02-03', 1, 10),
(56, 'Hotel Shanker', 'shanker@gmail.com', '980077737', 2, '5e37943a388ba.jpg', '944b1f977940cce677e3181605cc1219d3804363', '5e37943a388a4', '2020-02-03', 1, 0),
(57, 'Hotel Green park', 'greenpark@gmail.com', '980077756', 2, '5e3794b42e01c.jpg', '3c1dadd2bb44c115222adab089f68888e8b74586', '5e3794b42e004', '2020-02-03', 1, 0),
(58, 'Kesara Resort', 'kesararesort@gmail.com', '980077745', 2, '5e3794d49a9f6.jpg', '29b74ff3ea10ed0ccc8594c97361547a127efa2f', '5e3794d49a9d9', '2020-02-03', 1, 0),
(59, 'Galaxy Guest House', 'galaxyguesthouse@gmail.com', '980077756', 2, '5e37951328ef1.jpg', 'e2a1805d7506433571570648e777e068fe4b4c57', '5e37951328eda', '2020-02-03', 1, 0),
(60, 'Hotel Bodhi Redsun', 'bodhiredsun@gmail.com', '9800777598', 2, '5e37953c84f9e.jpeg', '3da91a670a72cda86b7e25090c2eef5f45bb6ccf', '5e37953c84f88', '2020-02-03', 1, 0),
(61, 'Hotel Tulip', 'tulip@gmail.com', '985705674', 2, '5e37956e1430a.jpg', '776cab393e41d037c32b0d5e1292624d1941f52f', '5e37956e142f3', '2020-02-03', 1, 20),
(62, 'Club Denovo Hotel', 'clubdenovo@gmail.com', '98670578', 2, '5e37958ddd4d1.jpg', '03557aedc41a6e132eca49ad6d5d7397e290bfb7', '5e37958ddd4ba', '2020-02-03', 1, 0),
(63, 'Hotel Grand Shambhala', 'grand@gmail.com', '98706858', 2, '5e3795bd3c459.jpg', '530867738288377814f1621c73f10e39b0b185aa', '5e3795bd3c443', '2020-02-03', 1, 0),
(64, 'Hotel Mustang Monalisa', 'monalisa@gmail.con', '98786959', 2, '5e3795ddf0f0f.jpg', '07674642bc106a3dfdb3ddf161d2dcf6c68b9229', '5e3795ddf0efa', '2020-02-03', 1, 0),
(65, 'Atithi Resort & Spa', 'atithi@gmail.com', '98768949', 2, '5e3796280f957.jpg', '03f0a6efce1ce9976944cdf62dba370c6fe2e1f6', '5e3796280f93b', '2020-02-03', 1, 0),
(66, 'Hotel Zostel', 'zostel@gmail.com', '98475234', 2, '5e379644113b7.jpg', '24791a0abdc777e20313ea8746ce9c00c7bead94', '5e3796441139c', '2020-02-03', 1, 0),
(67, 'Hotel Pokhara Grande', 'grande@gmail.com', '9848545', 2, '5e3796656f56b.jpg', '05298d224d2af32839dc0bcf57ba121f0acafd3b', '5e3796656f554', '2020-02-03', 1, 0),
(71, 'Jon Snow', 'Jondai@gmail.com', '9800777206', 3, '5e37994f80288.jpeg', '1160fe218431a38a071d77f932ac43a719a05744', '5e37994f80273', '2020-02-03', 1, 5),
(72, 'Daenerys Targaryan', 'madktmoh@gmail.com', '980077767', 3, '5e37998198475.jpg', '0efe5e0f6ee16c180e06c8ed947aa09ce17de4a9', '5e379343d4f6b', '2020-02-03', 1, 0),
(73, 'Tyrion Laninster', 'tyrionsmallboy@gmail.com', '984545252', 3, '5e3799a35c034.jpg', '52dbe2746c6aedcb5f74b173daf6cc208a2ede8a', '5e3799a35c01e', '2020-02-03', 1, 20),
(74, 'Palpa Dhaka House', 'localitems@gmail.com', '9812927525', 5, '65aa6791a8a8e.jpg', '0fe1c3fc99c058fecdfe5a340e1541a718f58066', '65aa6791a8a73', '2024-01-19', 1, 7),
(75, 'Maya Tours and Travels', 'maya@gmail.com', '9812927525', 4, '65aa70891c190.jpg', '55bd5f3ed1eacd540d89f6caa0adeabf903e03da', '65aa70891c167', '2024-01-19', 1, 1),
(76, 'Mustang Apple House', 'apple@gmail.com', '9812927525', 5, '65ab623975d4c.jpg', 'e91ec3ed2930c68c13146980356bc50e17776bce', '65ab623972e7b', '2024-01-20', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_available`
--

CREATE TABLE `tbl_available` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_available`
--

INSERT INTO `tbl_available` (`id`, `admin_email`, `route_id`) VALUES
(4, 'hoteltulip@gmail.com', 6),
(7, 'asian@gmail.com', 10),
(8, 'yakyeti@gmail.com', 18),
(9, 'radisson@gmail.com', 18),
(10, 'tyrionsmallboy@gmail.com', 18),
(11, 'Jondai@gmail.com', 18),
(12, 'tulip@gmail.com', 19),
(13, 'tyrionsmallboy@gmail.com', 19),
(15, 'yakyeti@gmail.com', 11),
(16, 'radisson@gmail.com', 11),
(17, 'localitems@gmail.com', 11),
(18, 'madktmoh@gmail.com', 11),
(19, 'maya@gmail.com', 11),
(20, 'apple@gmail.com', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `route_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `comment`, `email`, `name`, `route_id`) VALUES
(12, 'Hello Guys, Thankyou for this site that i am able to know about the facts of nepal and event happeni', 'iglesias89@gmail.com', 'Henry Iglesias', 5),
(13, 'Thankyou so much who ever created this because i got to know about the NEPAL in my own language.', 'hingma!@gmail.com', 'Ming Hingma', 5),
(14, 'Thankyou Guys for this helpful website. ', 'chaudhary@gmail.com', 'Sushant Chaudhary', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donate`
--

CREATE TABLE `tbl_donate` (
  `id` int(11) NOT NULL,
  `donate_name` varchar(255) NOT NULL,
  `ref_code` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_donate`
--

INSERT INTO `tbl_donate` (`id`, `donate_name`, `ref_code`, `email`, `contact`, `event_id`) VALUES
(1, 'INGO', '123VBP', 'sanzokgyawali123@gmail.com', '9812927525', 1),
(2, 'Sanjok', '2245', 'sanzokgyawali123@gmail.com', '9812927525', 4),
(3, 'Sanjok', '225', 'sanzokgyawali123@gmail.com', '9812927525', 5),
(4, 'Amisha', '1234', 'sanzokgyawali123@gmail.com', '9812927525', 10),
(5, 'Sanjok', '1234', 'sanzokgyawali123@gmail.com', '9812927525', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `start_date_time` datetime DEFAULT NULL,
  `end_date_time` datetime DEFAULT NULL,
  `event_description` text NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `start_date_time`, `end_date_time`, `event_description`, `destination`) VALUES
(6, 'EDUCATION FOR ALL.', '2020-02-23 05:00:00', '2020-02-23 19:00:00', '<p>EDUCATION for all is a programme, organized by Youth from butwal to educate and aware the children&nbsp;who are from remote areas.</p>\r\n', '0'),
(7, 'Inauguration of Tilottama Peace Park.', '2020-02-28 10:00:00', '2020-02-28 16:00:00', '<p>Tillotama Peace Park is recently built&nbsp;in this Tilottama Municipality which Inauguration Programme is going to be held on&nbsp;this coming&nbsp; FEB28th.</p>\r\n', '0'),
(8, 'Manglapur Industrial fair 2076', '2020-01-28 05:00:00', '2020-02-05 22:00:00', '<p>Manglapur Industrial fair is&nbsp; happeing in Manglapur in the given time where we can see the various industrial programme and can be the part of thr programme.,</p>\r\n', '0'),
(9, 'Baunnakoti Area Development Project', '2020-02-04 11:11:00', '2020-03-04 10:10:00', '<p>Government is planning to develop Baunnakoti Area. Due to less government budget we would like to ask for the financial support. You can donate us through esewa. Following is our esewa account.</p>\r\n\r\n<p>9812927525(Sanjok Gyawali)</p>\r\n\r\n<p>After sending the money don&#39;t forget to fill the form from the below donate button.</p>\r\n', '0'),
(10, 'Bhairahawa Park', '2020-02-22 11:11:00', '2023-02-22 04:00:00', '<p>Bhairahawa Park is a famous park having lots of enjoying material etc</p>\r\n\r\n<p>To help us to develop bhairahawa park then donate us with money.</p>\r\n\r\n<p>You can send us money through</p>\r\n\r\n<p>Esewa: 9812927525</p>\r\n\r\n<p>Bank Deposit: NMB Bank 987127782138721378</p>\r\n\r\n<p>jhkwhjdjhewjw</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0'),
(11, 'butwal', '2020-03-23 10:30:00', '2022-08-23 00:30:00', '<p>this is non popular place .</p>\r\n\r\n<p>this place has very nice&nbsp; natural beauty.</p>\r\n\r\n<p>many tourist visit every year.</p>\r\n', '0'),
(12, 'Mustang Conservation Unit', '1998-12-06 00:00:00', '2050-12-06 00:00:00', '<p>The Mustang Conservation Unit stands out as a highly effective initiative dedicated to preserving the environmental integrity of the Mustang region. This unit plays a crucial role in cleansing the Mustang area and its surroundings. Additionally, it actively contributes to the decomposition of waste manure, fostering the creation of efficient and cultivable land.</p>\r\n', 'Mustang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `route_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `title`, `photo`, `route_id`) VALUES
(12, 'hello', '5e4e1f54b79de.png', 20),
(14, 'MAP', '65ab2221cbd26.jpg', 11),
(15, 'Syangja', '65aa625b9f99f.jpg', 11),
(16, 'Pokhara Image', '65aa625bb4bd5.jpg', 11),
(17, 'Jomsom Photo', '65aa625bc9c98.jpg', 11),
(19, 'PALPA', '65aa625b8fa02.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(11) NOT NULL,
  `rec` varchar(100) NOT NULL,
  `sen` varchar(100) NOT NULL,
  `message` text DEFAULT NULL,
  `message_datetime` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `rec`, `sen`, `message`, `message_datetime`, `status`) VALUES
(1, 'hello@hello.com', 'hoteltulip@gmail.com', 'I would like to know you can you provide me the details', '2020-02-02 03:00:00', 0),
(2, 'hoteltulip@gmail.com', 'hdsahdhshdsa@hdsjhdjhas', 'Hello Nepal', '2020-02-02 04:00:00', 0),
(3, 'hoteltulip@gmail.com', 'hoteltulip@gmail.com', '<p>dhsahdjsajhhjkashjkahksjsahjkd</p>\r\n', '0000-00-00 00:00:00', 0),
(4, 'hoteltulip@gmail.com', 'hoteltulip@gmail.com', '<p>djsdhashjdsajkdsa</p>\r\n', '2020-02-02 17:11:41', 0),
(5, 'hoteltulip@gmail.com', 'hoteltulip@gmail.com', '<p>djsdhashjdsajkdsa</p>\r\n', '2020-02-02 17:13:24', 0),
(12, 'asian@gmail.com', 'ndasn@ndansjdnj', 'nkdanjkdnkasnjda', '2020-02-03 04:24:39', 0),
(13, 'asian@gmail.com', 'ndasn@ndansjdnj', 'nkdanjkdnkasnjda', '2020-02-03 04:26:01', 0),
(14, 'asian@gmail.com', 'ndasn@ndansjdnj', 'nkdanjkdnkasnjda', '2020-02-03 04:26:12', 0),
(15, 'yakyeti@gmail.com', 'sanzokgyawali123@gmail.com', 'dhsadgdhadasghjdhgjghsjad', '2020-02-20 06:49:33', 0),
(16, 'yakyeti@gmail.com', 'sanzokgyawali123@gmail.com', 'dhsadgdhadasghjdhgjghsjad', '2020-02-20 06:49:33', 0),
(17, 'yakyeti@gmail.com', 'yakyeti@gmail.com', '<p>mnndsbfmsdb</p>\r\n', '2020-02-20 06:50:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `venue_photo` varchar(100) DEFAULT NULL,
  `click` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `address`, `remarks`, `venue_photo`, `click`) VALUES
(3, 'Lumbini', 'Lumbini Rupandehi', 'It is the birthplace of lord buddha.', '5e36a000979cd.jpg', NULL),
(6, 'Mustang', 'Mustang, Nepal', 'Mustang District (Nepali: मुस्ताङ जिल्लाAbout this soundListen (help·info)) is one of the seventy-se', '5e37a49348324.jpg', NULL),
(8, 'Pokhara', 'Pokhara, Nepal', 'Pokhara is a city on Phewa Lake, in central Nepal. It’s known as a gateway to the Annapurna Circuit,', '5e37a5410ecd4.jpg', NULL),
(9, 'Illam', 'Illam, Nepal', 'Ilam is one of four urban municipalities of Ilam District, which lies in the Mahabharata hilly range', '5e37a5aee3cc6.jpg', NULL),
(10, 'Butwal', 'Butwal, Nepal', 'Butwal officially Butwal Sub-Metropolitan is one of the twin cities of rapidly growing Butwal-Bhaira', '5e37a6d8f1428.jpg', NULL),
(12, 'Kathmandu', 'Kathmandu, Nepal', 'Kathmandu is the capital city of Nepal. ', '5e37b9fd61710.jpg', NULL),
(13, 'Chitwan National Park', 'Chitwan, Nepal', 'Chitwan National Park is a preserved area in the Terai Lowlands of south-central Nepal, known for it', '5e37ba514a018.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_researcher`
--

CREATE TABLE `tbl_researcher` (
  `id` int(11) NOT NULL,
  `traveller_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_researcher`
--

INSERT INTO `tbl_researcher` (`id`, `traveller_name`) VALUES
(1, 'Sanjok Gyawali'),
(2, 'Sanjok Gyawali'),
(3, 'Sanjok Gyawali'),
(4, 'Sanjok Gyawali'),
(5, ''),
(6, 'Sanjok Gyawali'),
(7, 'Bhalwari City'),
(8, 'Bhalwari City'),
(9, 'Bhalwari City'),
(10, 'Bhalwari City'),
(11, 'Bhalwari City'),
(12, 'Sudan'),
(13, 'Sudan'),
(14, ''),
(15, 'Asmita'),
(16, 'Dhiren'),
(17, 'Dhiren'),
(18, 'Dhiren'),
(19, 'Krishna Gopal Chaudhary'),
(20, 'Krishna Gopal Chaudhary'),
(21, 'Krishna Gopal Chaudhary'),
(22, 'Krishna Gopal Chaudhary'),
(23, 'Krishna Gopal Chaudhary'),
(24, 'Krishna Gopal Chaudhary'),
(25, 'Bibek'),
(26, 'Sanjok Gyawali'),
(27, 'Dhiren'),
(28, 'Dhiren'),
(29, 'Dhiren'),
(30, 'Bhalwari City'),
(31, 'Krishna Gopal Chaudhary'),
(32, 'Asmita'),
(33, 'dnjsadanjsnbadnsj'),
(34, 'hello'),
(35, 'hello'),
(36, 'hello'),
(37, 'hello'),
(38, 'hello'),
(39, 'hello'),
(40, 'Bibek Adhikari'),
(41, 'smith'),
(42, 'Dhiren'),
(43, 'Dhiren'),
(44, 'Dhiren'),
(45, 'Dhiren'),
(46, 'Dhiren'),
(47, 'Dhiren'),
(48, 'Dhiren'),
(49, 'Dhiren'),
(50, 'Dhiren'),
(51, 'Dhiren'),
(52, 'Dhiren'),
(53, 'Bibek Adhikari'),
(54, 'Bibek Adhikari'),
(55, 'Bibek Adhikari'),
(56, 'yak'),
(57, 'bibek adhikari'),
(58, 'gfffgfhgfhg'),
(59, 'Sanju'),
(60, 'Bhalwari City'),
(61, 'Bhalwari City'),
(62, 'Bhalwari City'),
(63, 'Bhalwari City'),
(64, 'Krishna Gopal Chaudhary'),
(65, 'kisan'),
(66, 'Sanjok Gyawali'),
(67, 'Sanjok Gyawali'),
(68, 'Dhiren'),
(69, 'Bibek Adhikari'),
(70, 'Sanjok Gyawali'),
(71, 'Sanjok Gyawali'),
(72, 'Bhalwari City'),
(73, 'Bhalwari City'),
(74, 'Bhalwari City'),
(75, 'Bhalwari City'),
(76, 'Bhalwari City'),
(77, 'Bhalwari City'),
(78, 'Prabesh Gyawali'),
(79, 'Sailesh'),
(80, 'Sailesh'),
(81, 'Shailesh'),
(82, 'Krishna Gopal Chaudhary'),
(83, 'mnsadbsa'),
(84, 'mnsadbsa'),
(85, 'Sanjok Gyawali'),
(86, 'Bibek'),
(87, 'Dhiren'),
(88, 'abc'),
(89, 'abc'),
(90, 'ghcshdfgsdhg'),
(91, 'vbsfdga'),
(92, 'Sanjok Gyawali'),
(93, 'Krishna Gopal Chaudhary'),
(94, 'Sanjok Gyawali'),
(95, 'Sanjok Gyawali'),
(96, 'Sanjok Gyawali'),
(97, 'Sanjok Gyawali'),
(98, 'bdsahbd'),
(99, 'Mamata Tharu'),
(100, 'Sanjok Gyawali'),
(101, 'Hari Bhandari'),
(102, 'Bibek'),
(103, 'bibek adhikari'),
(104, 'Bibek'),
(105, 'Bibek'),
(106, 'bibek'),
(107, 'Bibek'),
(108, 'Bibek Adhikari'),
(109, 'bibek adhikari'),
(110, 'Bibek Adhikari'),
(111, 'Bibek Adhikari'),
(112, 'Bibek Adhikari'),
(113, 'Bibek Adhikari'),
(114, 'Bibek Adhikari'),
(115, 'Bibek Adhikari'),
(116, 'Bibek Adhikari'),
(117, 'Bibek'),
(118, 'amisha'),
(119, 'Bibek'),
(120, 'Bibek'),
(121, 'Bibek'),
(122, 'Dhiren'),
(123, 'Dhiren'),
(124, 'Krishna Gopal Chaudhary'),
(125, 'Sanjok Gyawali'),
(126, 'hello'),
(127, 'Bibek Adhikari'),
(128, 'Sanjok Gyawali'),
(129, 'Krishna Gopal Chaudhary'),
(130, 'Bibek Adhikari'),
(131, 'Krishna Gopal Chaudhary'),
(132, 'Bibek'),
(133, 'Bibek Adhikari'),
(134, 'Bibek Adhikari'),
(135, 'Bibek Adhikari'),
(136, 'hello'),
(137, 'Sanjok Gyawali'),
(138, 'Dhiren'),
(139, 'Krishna Gopal Chaudhary'),
(140, 'Bibek'),
(141, 'Bibek'),
(142, 'Jalan Pun'),
(143, 'Bibek'),
(144, 'Bibek'),
(145, 'Bibek'),
(146, 'Sanjok Gyawali'),
(147, 'Sanjok Gyawali'),
(148, 'Dhiren'),
(149, 'Sanjok Gyawali'),
(150, 'Krishna Gopal Chaudhary'),
(151, 'sadikshya'),
(152, 'Bibek Adhikari'),
(153, 'hello'),
(154, 'Bibek'),
(155, 'Bibek'),
(156, 'Bibek'),
(157, 'Sanjok Gyawali'),
(158, 'hello'),
(159, 'Sanjok Gyawali'),
(160, 'Krishna Gopal Chaudhary'),
(161, 'Bibek'),
(162, 'Bibek'),
(163, 'Bibek'),
(164, 'prerna'),
(165, 'bishu kharel'),
(166, 'mamata'),
(167, 'Bibek'),
(168, 'hello'),
(169, 'Sanjok Gyawali'),
(170, 'Krishna Gopal Chaudhary'),
(171, 'Sanjok Gyawali'),
(172, 'Sanjok Gyawali'),
(173, 'Sanjok Gyawali'),
(174, 'hello'),
(175, 'Dhiren'),
(176, 'Bibek'),
(177, 'Dhiren'),
(178, 'Krishna Gopal Chaudhary'),
(179, 'bimal'),
(180, 'Sanjok Gyawali'),
(181, 'Sanjok Gyawali'),
(182, 'alisha'),
(183, 'Bibek Adhikari'),
(184, 'Bibek Adhikari'),
(185, 'Dhiren'),
(186, 'Dhiren'),
(187, 'Sanjok Gyawali'),
(188, 'Sanjok Gyawali'),
(189, 'Sanjok Gyawali'),
(190, 'Sanjok Gyawali'),
(191, 'Dhiren'),
(192, 'Sanjok Gyawali'),
(193, 'Sanjok Gyawali'),
(194, 'Hello'),
(195, 'BIJAY'),
(196, 'BIJAY'),
(197, 'BIJAY'),
(198, 'BIJAY'),
(199, 'BIJAY'),
(200, 'Sanjok Gyawali'),
(201, 'Sanjok Gyawali'),
(202, 'Sanjok Gyawali'),
(203, 'Sanjok Gyawali'),
(204, 'Sanjok Gyawali'),
(205, 'Sanjok Gyawali'),
(206, 'Sanjok'),
(207, 'Sanjok'),
(208, 'Sanjok'),
(209, 'Sanjok'),
(210, 'Sanjok'),
(211, 'Sanjok'),
(212, 'Sanjok'),
(213, 'Alina'),
(214, 'Alina'),
(215, 'Alina'),
(216, 'Alina'),
(217, 'Alina'),
(218, 'Alina'),
(219, 'Alina'),
(220, 'Alina'),
(221, 'Alina'),
(222, 'Alina'),
(223, 'Alina'),
(224, 'Sanjok'),
(225, 'alisha'),
(226, 'sanish'),
(227, 'sanzo'),
(228, 'sanzo'),
(229, 'Alina'),
(230, 'Alina'),
(231, 'Alina'),
(232, 'Alina'),
(233, 'Alina'),
(234, 'Alina'),
(235, 'Alina'),
(236, 'Alina'),
(237, 'Alina'),
(238, 'Alina'),
(239, 'Alina'),
(240, 'Alina'),
(241, 'Alina'),
(242, 'Alina'),
(243, 'Alina'),
(244, 'sushma'),
(245, 'Samikshya'),
(246, 'Samikshya'),
(247, 'Samikshya'),
(248, 'Samikshya'),
(249, 'Samikshya'),
(250, 'Samikshya'),
(251, 'Samikshya'),
(252, 'Samikshya'),
(253, 'Samikshya'),
(254, 'Samikshya'),
(255, 'Samikshya'),
(256, 'Samikshya'),
(257, 'Samikshya'),
(258, 'Samikshya'),
(259, 'Samikshya'),
(260, 'Samikshya'),
(261, 'Samikshya'),
(262, 'Samikshya'),
(263, 'Samikshya'),
(264, 'Samikshya'),
(265, 'Samikshya'),
(266, 'Samikshya'),
(267, 'Samikshya'),
(268, 'Samikshya'),
(269, 'Samikshya'),
(270, 'Samikshya'),
(271, 'Samikshya'),
(272, 'Samikshya'),
(273, 'Alina'),
(274, 'Alina'),
(275, 'Alina'),
(276, 'Alina'),
(277, 'Alina'),
(278, 'Alina'),
(279, 'Alina'),
(280, 'Alina'),
(281, 'Alina'),
(282, 'Alina'),
(283, 'Alina'),
(284, 'Sanjok'),
(285, 'Sanish'),
(286, 'Sanish'),
(287, 'Sanish'),
(288, 'hhhh'),
(289, 'hhhh'),
(290, 'hhhh'),
(291, 'Sanjok'),
(292, 'Sanjok'),
(293, 'Sanjok'),
(294, 'Sanjok'),
(295, 'Sanjok'),
(296, 'Alina'),
(297, 'Bhide'),
(298, 'alina'),
(299, 'ss'),
(300, 'ee'),
(301, 'ee'),
(302, 'ee'),
(303, 'ee'),
(304, 'ee'),
(305, 'ee'),
(306, 'ee'),
(307, 'ee'),
(308, 'ee'),
(309, 'ee'),
(310, 'ee'),
(311, 'ee'),
(312, 'n'),
(313, 'm'),
(314, 'njm'),
(315, 'njm'),
(316, 'njm'),
(317, 'njm'),
(318, 'njm'),
(319, 'njm'),
(320, 'njm'),
(321, 'njm'),
(322, 'njm'),
(323, 'njm'),
(324, 'njm'),
(325, 'njm'),
(326, 'njm'),
(327, 'njm'),
(328, 'njm'),
(329, 'njm'),
(330, 'njm'),
(331, 'njm'),
(332, 'njm'),
(333, 'njm'),
(334, 'njm'),
(335, 'njm'),
(336, 'njm'),
(337, 'njm'),
(338, 'njm'),
(339, 'njm'),
(340, 'njm'),
(341, 'njm'),
(342, 'njm'),
(343, 'njm'),
(344, 'njm'),
(345, 'njm'),
(346, 'njm'),
(347, ''),
(348, 'Sanjok'),
(349, 'Sanjok'),
(350, 'Sanjok'),
(351, 'Sanjok'),
(352, 'Alina'),
(353, 'Yogesh'),
(354, 'Yogesh'),
(355, 'Yogesh'),
(356, 'Yogesh'),
(357, 'Yogesh'),
(358, 'Yogesh'),
(359, 'Yogesh'),
(360, 'Alina'),
(361, 'Alina'),
(362, 'Alina'),
(363, 'Alina'),
(364, 'Alina'),
(365, 'Alina'),
(366, 'Alina'),
(367, 'Alina'),
(368, 'Alina'),
(369, 'Alina'),
(370, 'Alina'),
(371, 'Alina'),
(372, 'Alina'),
(373, 'Alina'),
(374, 'Alina'),
(375, 'Alina'),
(376, 'Alina'),
(377, 'Alina'),
(378, 'Alina'),
(379, 'Alina'),
(380, 'Alina'),
(381, 'Alina'),
(382, 'alina'),
(383, 'alina'),
(384, 'alina'),
(385, 'Sanjok'),
(386, 'Sanjok'),
(387, 'Sanjok'),
(388, 'Sanjok');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route`
--

CREATE TABLE `tbl_route` (
  `id` int(11) NOT NULL,
  `dest_name` varchar(100) NOT NULL,
  `start_name` varchar(100) NOT NULL,
  `route_desc` text NOT NULL,
  `adv_routes` text NOT NULL,
  `des_routes` text NOT NULL,
  `other_places` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_route`
--

INSERT INTO `tbl_route` (`id`, `dest_name`, `start_name`, `route_desc`, `adv_routes`, `des_routes`, `other_places`) VALUES
(11, 'Mustang', 'Butwal', '<p>Butwal - Palpa- Syangja</p>\r\n\r\n<p>Syangja - Pokhara(You can rest on Pokhara)</p>\r\n\r\n<p>Next day start your trip from Pokhara - Beni(You can stay on Beni for better views)</p>\r\n\r\n<p>Beni - Mustang- Upper Mustang</p>\r\n\r\n', '<ol>\n	<li>\n	<p><strong>Scenic Marvels:</strong> The Butwal to Mustang route boasts breathtaking landscapes, featuring verdant valleys, majestic mountains, and captivating vistas, providing travelers with a visually stunning and immersive journey.</p>\n	</li>\n	<li>\n	<p><strong>Cultural Diversity:</strong> Travelers along this route encounter a rich tapestry of cultures in the towns and villages they pass through, offering a unique opportunity to experience local traditions and ways of life.</p>\n	</li>\n</ol>\n', '<ol>\n	<li>\n	<p><strong>Challenging Terrain:</strong> The route from Butwal to Mustang often involves traversing challenging terrains, including mountainous and hilly areas, which can pose difficulties for transportation and may require careful navigation.</p>\n	</li>\n	<li>\n	<p><strong>Weather Variability:</strong> The region is susceptible to unpredictable weather conditions, such as heavy rainfall or snowfall, which can impact road conditions and lead to potential travel disruptions or delays.</p>\n	</li>\n</ol>\n', '<p>Palpa Jordhara, tansen, Bhairavsthan, Rani Mahal, Ridhi dham, Bahun Pahad, Devi\'s Fall, Fewa Lake, Jomsom Bajar, Kagbeni, Upper Mustang </p>'),
(13, 'Lumbini', 'Butwal', '<p>Lumbini - Bhairahawa</p>\r\n\r\n<p>Bhairahawa - Butwal</p>\r\n', '', '', ''),
(17, 'Illam', 'Mustang', '<table border=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Mustang - Beni</p>\r\n\r\n			<p>Beni - Pokhara</p>\r\n\r\n			<p>Pokhara - Mugling</p>\r\n\r\n			<p>Mugling - Kathmandu</p>\r\n\r\n			<p>Kathmandu - Illam</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', ''),
(18, 'Kathmandu', 'Butwal', '<p>Butwal - Narayangardh</p>\r\n\r\n<p>Narayangardh&nbsp;- Mugling</p>\r\n\r\n<p>Mugling - Kathmandu</p>\r\n', '<p>This Route is faster than the Route that goes through Palpa - Pokhara to Kathmandu.</p>\r\n\r\n<p>Safe Road.</p>\r\n', '<p>Traffic rate is High.</p>\r\n', '<p>Chitwan</p>\r\n\r\n<p>Lumbini</p>\r\n\r\n<p>Jalbire (Lamo Jharana)</p>\r\n'),
(19, 'Butwal', 'Kathmandu', '<p>Kathmandu - Malekhu</p>\r\n\r\n<p>Malekhu - Kurintar</p>\r\n\r\n<p>Kurintar - Naryangardh</p>\r\n\r\n<p>Narayangardh - Butwal</p>\r\n', '<p>This route is safe than the route which goes to Butwal from pokhara and palpa.</p>\r\n', '<p>Traffic rate is high.</p>\r\n\r\n<p>Due to Road Coinstruction strike might occur so you neeed to be updated with our site.&nbsp;</p>\r\n', '<p>Malekhu - Where you can have the fresh fish while in your journeuy.</p>\r\n\r\n<p>Kurintar- Kurintar '),
(20, 'Chitwan National Park', 'Butwal', '<p>Butwal- Bardaghat</p>\r\n\r\n<p>Bardaghat-Daunne</p>\r\n\r\n<p>Daunne-Naryangadh</p>\r\n\r\n<p>Naryangadh-Sauraha</p>\r\n', '<p>1) Religious places</p>\r\n\r\n<p>2) Nature</p>\r\n\r\n<p>3) Hill&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>1) Jam&nbsp;</p>\r\n\r\n<p>2) Landslide</p>\r\n\r\n<p>3) Time consuming</p>\r\n', '<p>1) Daunne</p>\r\n\r\n<p>2) CG temple</p>\r\n\r\n<p>3) Maulakali</p>\r\n\r\n<p>4) Narayani River</p>\r\n\r\n<p>5) '),
(21, 'Illam', 'Butwal', '<p>no</p>\r\n', '<ol>\n	<li>\n	<p><strong>Scenic Marvels:</strong> The Butwal to Mustang route boasts breathtaking landscapes, featuring verdant valleys, majestic mountains, and captivating vistas, providing travelers with a visually stunning and immersive journey.</p>\n	</li>\n	<li>\n	<p><strong>Cultural Diversity:</strong> Travelers along this route encounter a rich tapestry of cultures in the towns and villages they pass through, offering a unique opportunity to experience local traditions and ways of life.</p>\n	</li>\n</ol>\n', '<ol>\n	<li>\n	<p><strong>Challenging Terrain:</strong> The route from Butwal to Mustang often involves traversing challenging terrains, including mountainous and hilly areas, which can pose difficulties for transportation and may require careful navigation.</p>\n	</li>\n	<li>\n	<p><strong>Weather Variability:</strong> The region is susceptible to unpredictable weather conditions, such as heavy rainfall or snowfall, which can impact road conditions and lead to potential travel disruptions or delays.</p>\n	</li>\n</ol>\n', '<p>Palpa Jordhara, tansen, Bhairavsthan, Rani Mahal, Ridhi dham, Bahun Pahad,</p>\n\n<p>Devi&#39;s F');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_start`
--

CREATE TABLE `tbl_start` (
  `id` int(11) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_start`
--

INSERT INTO `tbl_start` (`id`, `place_name`, `address`, `remarks`) VALUES
(7, 'Butwal', 'Butwal, Nepal', 'Butwal is lies in TERAI.'),
(8, 'Lumbini', 'Lumbini Rupandehi', 'Lumbini is the birth place of Gautam Buddha.'),
(9, 'Chitwan National Park', 'Chitwan, Nepal', 'Chitwan National Park is a preserved area in the Terai Lowlands of south-central Nepal, known for it'),
(10, 'Mustang', 'Mustang, Nepal', 'Mustang District (Nepali: मुस्ताङ जिल्लाAbout this soundListen (help·info)) is one of the seventy-se'),
(11, 'Kathmandu', 'Kathmandu, Nepal', 'Kathmandu is the capital city of Nepal. '),
(12, 'Pokhara', 'Pokhara, Nepal', 'Pokhara is a city on Phewa Lake, in central Nepal. It’s known as a gateway to the Annapurna Circuit,'),
(13, 'Mustang', 'Mustang, Nepal', 'Mustang District (Nepali: मुस्ताङ जिल्लाAbout this soundListen (help·info)) is one of the seventy-se'),
(14, 'Butwal', 'Kathmandu, Nepal', 'Kathmandu is the capital city of Nepal. '),
(15, 'Kathmandu', 'Kathmandu, Nepal', 'Kathmandu is the capital city of Nepal. '),
(16, 'Pokhara', 'Pokhara, Nepal', 'gkytdyt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_available`
--
ALTER TABLE `tbl_available`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donate`
--
ALTER TABLE `tbl_donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_researcher`
--
ALTER TABLE `tbl_researcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_route`
--
ALTER TABLE `tbl_route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_start`
--
ALTER TABLE `tbl_start`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_available`
--
ALTER TABLE `tbl_available`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_donate`
--
ALTER TABLE `tbl_donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_researcher`
--
ALTER TABLE `tbl_researcher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `tbl_route`
--
ALTER TABLE `tbl_route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_start`
--
ALTER TABLE `tbl_start`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
