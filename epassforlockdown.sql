-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 04:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epassforlockdown`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'denish', 'denish@gmail.com', 'hi'),
(2, 'denish', 'denish@gmail.com', 'hi'),
(3, 'denish', 'denish@gmail.com', 'jkgyjgy'),
(4, 'denish', 'denish@gmail.com', 'gaegaegeag'),
(5, 'denish', 'denish@gmail.com', 'gaegaegeag'),
(6, 'denish', 'denish@gmail.com', 'sfaffa'),
(7, 'denish', 'denish@gmail.com', 'cszfs'),
(8, 'denish', 'denish@gmail.com', 'faffwaf'),
(9, 'denish', 'denish@gmail.com', 'dwdwdw'),
(10, 'denish', 'denish@gmail.com', 'testing....'),
(11, 'denish', 'denish@gmail.com', 'testing....'),
(12, 'denish', 'denish@gmail.com', 'geagageag'),
(13, 'afaffawffawfe', 'denish@gmail.com', 'gesgeaghsgahgs'),
(14, 'afaffawffawfe', 'denish@gmail.com', 'gesgeaghsgahgs'),
(15, 'afaffawffawfe', 'denish@gmail.com', 'gesgeaghsgahgs'),
(16, 'denish', 'denish@gmail.com', 'sfaffaf'),
(17, 'denish', 'denish@gmail.com', 'sfaffaf'),
(18, 'denish', 'denish@gmail.com', 'egaesgeag'),
(19, 'denish', 'denish@gmail.com', 'sfaffaf'),
(20, 'denish', 'denish@gmail.com', 'giitdu'),
(21, 'denish', 'denish@gmail.com', 'giitdu'),
(22, 'denish', 'denish@gmail.com', 'testststeettesetyiij'),
(23, 'denish', 'denish@gmail.com', 'testststeettesetyiij'),
(26, 'denish', 'denish@gmail.com', 'dfaefa'),
(27, 'denish', 'denish@gmail.com', 'dfaefa'),
(28, 'denish', 'denish@gmail.com', 'dfaefa'),
(29, 'denish', 'denish@gmail.com', 'dfaefa'),
(30, 'denish', 'denish@gmail.com', 'dfaefa'),
(31, 'denish', 'denish@gmail.com', 'dfaefa'),
(32, 'denish', 'denish@gmail.com', 'dfaefa'),
(33, 'denish', 'denish@gmail.com', 'dfaefa'),
(34, 'denish', 'denish@gmail.com', 'dfaefa'),
(35, 'denish', 'denish@gmail.com', 'rgrsgrs'),
(36, 'denish', 'denish@gmail.com', 'rgrsgrs'),
(37, 'denish', 'denish@gmail.com', 'denish'),
(38, 'denish', 'denish@gmail.com', 'dafag'),
(39, 'denish', 'denish@gmail.com', 'abcd\r\n'),
(40, 'denish', 'denish@gmail.com', 'lolwfjwkfj'),
(41, 'denish', 'denish@gmail.com', 'lolwfjwkfj'),
(42, 'bddbdb', 'denish@gmail.com', 'ccvcvvhhj'),
(43, 'denish', 'denish@gmail.com', 'hjhvhcfh'),
(44, 'denish', 'denish@gmail.com', 'dhdhdfh'),
(45, 'denish', 'denish@gmail.com', 'gfsgfsf'),
(46, 'denish', 'denish@gmail.com', 'hghgfghf'),
(47, 'denish', 'denish@gmail.com', 'hghgfghf'),
(48, 'denish', 'denish@gmail.com', 'hghgfghf'),
(49, 'denish', 'denish@gmail.com', 'faefgeafa'),
(50, 'denish', 'denish@gmail.com', 'helloooo\r\n'),
(51, 'denish', 'denish@gmail.com', 'helloooo\r\n'),
(52, 'denish', 'denish@gmail.com', 'aegaegaegeah'),
(53, 'denish', 'denish@gmail.com', 'aegaegaegeah'),
(54, 'denish', 'denish@gmail.com', 'testing'),
(55, 'denish', 'denish@gmail.com', 'helllllllllooooooooo'),
(56, 'denish', 'denish@gmail.com', 'KKNDSJBDBJKDFDSBK'),
(57, 'denish', 'denish@gmail.com', 'hekjafjkahfkjwh'),
(58, 'denish', 'denish@gmail.com', 'hekjafjkahfkjwh'),
(59, 'denish', 'denish@gmail.com', 'grsgrsgsrgsg'),
(60, 'denish', 'denish@gmail.com', 'heelelleellellele'),
(61, 'Denish K Ranpariya', 'denish@gmail', 'this website is awesome.'),
(62, 'denish', 'denishranpariya10@gmail.com', 'this is an awesome website...'),
(63, 'denish', 'denish@gmail.com', 'this is an absolutely awesome website. I love it.'),
(64, 'denish', 'denish@gmail.com', 'i am loving it...'),
(65, 'denish', 'denishranpariya10@gmail.com', 'this is an awesome website.');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `wnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `raddress` text NOT NULL,
  `offaddress` text NOT NULL,
  `service` varchar(255) NOT NULL,
  `fdate` varchar(255) NOT NULL,
  `tdate` varchar(255) NOT NULL,
  `ftime` varchar(255) NOT NULL,
  `ttime` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `epassid` text NOT NULL,
  `passportphoto` text NOT NULL,
  `idphoto` text NOT NULL,
  `otherphoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `name`, `gender`, `number`, `wnumber`, `email`, `raddress`, `offaddress`, `service`, `fdate`, `tdate`, `ftime`, `ttime`, `district`, `status`, `epassid`, `passportphoto`, `idphoto`, `otherphoto`) VALUES
(1, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'wwe', 'water', '2020-04-07', '2020-04-01', '15:00', '01:59', 'rajkot', 'accepted', 'denish571bb5d981c4995efb08bdc2a3cc4b04', 'upload/denishranpariyadenish1512@gmail.com_1', 'upload/denishranpariyadenish1512@gmail.com_2', 'destfile3'),
(2, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'bjhwrb', 'E-commerce', '2020-04-08', '2020-04-09', '02:01', '22:00', 'rajkot', 'accepted', 'denish02f4b5f72b746dfe77b0982bb58716f2', 'upload/denish8000512652_1png', 'upload/denish8000512652_2png', 'upload/denish8000512652_3png'),
(3, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'sds', 'water', '2020-04-14', '2020-04-16', '14:00', '01:00', 'rajkot', 'accepted', 'denishb54b8e4f776ea3f0ca1b137291177c78', 'upload/denishb54b8e4f776ea3f0ca1b137291177c78_1.png', 'upload/denishb54b8e4f776ea3f0ca1b137291177c78_2.png', 'upload/denishb54b8e4f776ea3f0ca1b137291177c78_3.png'),
(4, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'gvhcgh', 'electricity', '2020-04-09', '2020-04-16', '13:59', '01:00', 'rajkot', 'accepted', 'denisha70e71c0b43f9bdcf247b8496a2d9046', 'upload/denisha70e71c0b43f9bdcf247b8496a2d9046_1.png', 'upload/denisha70e71c0b43f9bdcf247b8496a2d9046_2.png', 'upload/denisha70e71c0b43f9bdcf247b8496a2d9046_3.png'),
(5, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'adef', 'water', '2020-04-17', '2020-04-08', '12:01', '15:00', 'rajkot', 'accepted', 'denish6395dc2ac98279c8d5ed1eb370aed7c1', 'upload/denish6395dc2ac98279c8d5ed1eb370aed7c1_1.png', 'upload/denish6395dc2ac98279c8d5ed1eb370aed7c1_2.png', 'upload/denish6395dc2ac98279c8d5ed1eb370aed7c1_3.png'),
(6, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'adef', 'water', '2020-04-17', '2020-04-08', '12:01', '15:00', 'rajkot', 'accepted', 'denish8b8c3a5186a637677760c70581bcde28', 'upload/denish8b8c3a5186a637677760c70581bcde28_1.png', 'upload/denish8b8c3a5186a637677760c70581bcde28_2.png', 'upload/denish8b8c3a5186a637677760c70581bcde28_3.png'),
(7, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'adef', 'water', '2020-04-17', '2020-04-08', '12:01', '15:00', 'rajkot', 'accepted', 'denish1d047e3133705572401dec524353b3c1', 'upload/denish1d047e3133705572401dec524353b3c1_1.png', 'upload/denish1d047e3133705572401dec524353b3c1_2.png', 'upload/denish1d047e3133705572401dec524353b3c1_3.png'),
(8, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'adef', 'water', '2020-04-17', '2020-04-08', '12:01', '15:00', 'rajkot', 'rejected', 'denish4c0415e35395e527db22c3356cea342a', 'upload/denish4c0415e35395e527db22c3356cea342a_1.png', 'upload/denish4c0415e35395e527db22c3356cea342a_2.png', 'upload/denish4c0415e35395e527db22c3356cea342a_3.png'),
(9, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'dwdw', 'take away/home delivery', '2020-04-15', '2020-04-08', '01:00', '13:00', 'rajkot', 'rejected', 'denish176eab1e359ad5173da2869c986f3eb3', 'upload/denish176eab1e359ad5173da2869c986f3eb3_1.png', 'upload/denish176eab1e359ad5173da2869c986f3eb3_2.png', 'upload/denish176eab1e359ad5173da2869c986f3eb3_3.png'),
(10, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'dwdw', 'take away/home delivery', '2020-04-15', '2020-04-08', '01:00', '13:00', 'rajkot', 'pending', 'denish5cdb65693f8529e2fc2a0a126df2062a', 'upload/denish5cdb65693f8529e2fc2a0a126df2062a_1.png', 'upload/denish5cdb65693f8529e2fc2a0a126df2062a_2.png', 'upload/denish8000512652_3.png'),
(11, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'abc', 'food items', '2020-04-17', '2020-04-17', '12:00', '13:00', 'rajkot', 'pending', 'denish0be6f51a8ad0a1d8340f69888dde7220', 'upload/denish0be6f51a8ad0a1d8340f69888dde7220_1.png', 'upload/denish0be6f51a8ad0a1d8340f69888dde7220_2.png', 'upload/denish8000512652_3.png'),
(12, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'abc', 'food items', '2020-04-17', '2020-04-17', '12:00', '13:00', 'rajkot', 'pending', 'denishf9ad15cc3b054d853f98e2fd9453dc80', 'upload/denishf9ad15cc3b054d853f98e2fd9453dc80_1.png', 'upload/denishf9ad15cc3b054d853f98e2fd9453dc80_2.png', 'upload/denish8000512652_3.png'),
(13, 'Denish K Ranpariya', 'male', '8000512652', '', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'abc', 'E-commerce', '2020-05-01', '2020-05-09', '13:00', '18:00', 'rajkot', 'pending', 'DenishKRanpariya0b640d565a23dceafba653b3989a5a98', 'upload/DenishKRanpariya0b640d565a23dceafba653b3989a5a98_1.png', 'upload/DenishKRanpariya0b640d565a23dceafba653b3989a5a98_2.png', 'upload/DenishKRanpariya8000512652_3.png'),
(14, 'Denish K Ranpariya', 'male', '8000512652', '', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'abc', 'E-commerce', '2020-05-01', '2020-05-09', '13:00', '18:00', 'rajkot', 'pending', 'DenishKRanpariyae19ec8c3d79da62e0ee95c53289d50f0', 'upload/DenishKRanpariyae19ec8c3d79da62e0ee95c53289d50f0_1.png', 'upload/DenishKRanpariyae19ec8c3d79da62e0ee95c53289d50f0_2.png', 'upload/DenishKRanpariya8000512652_3.png'),
(15, 'denish', 'male', '8000512652', '', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'fafwf', 'electricity', '2020-05-02', '2020-05-16', '13:00', '17:00', 'rajkot', 'pending', 'denisha3094786efac12177ae4db6ddf6f1ef9', 'upload/denisha3094786efac12177ae4db6ddf6f1ef9_1.png', 'upload/denisha3094786efac12177ae4db6ddf6f1ef9_2.png', 'upload/denish8000512652_3.png'),
(16, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'abc', 'food items', '2020-05-02', '2020-05-15', '13:00', '18:00', 'rajkot', 'pending', 'denish9ace76ab4bdbdf2981353fe2861aa009', 'upload/denish9ace76ab4bdbdf2981353fe2861aa009_1.png', 'upload/denish9ace76ab4bdbdf2981353fe2861aa009_2.png', 'upload/denish8000512652_3.png'),
(17, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'abc', 'E-commerce', '2020-05-01', '2020-05-09', '13:01', '17:59', 'rajkot', 'pending', 'denish72cd174499b9e5628002ddbd7f7ec839', 'upload/denish72cd174499b9e5628002ddbd7f7ec839_1.png', 'upload/denish72cd174499b9e5628002ddbd7f7ec839_2.png', 'upload/denish8000512652_3.png'),
(18, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'wFWFAW', 'electricity', '2020-05-02', '2020-05-08', '13:00', '18:59', 'rajkot', 'pending', 'denish53cb376adffa8f2156b110798928be7c', 'upload/denish53cb376adffa8f2156b110798928be7c_1.png', 'upload/denish53cb376adffa8f2156b110798928be7c_2.png', 'upload/denish8000512652_3.png'),
(19, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'sdsds', 'electricity', '2020-05-02', '2020-05-13', '13:00', '16:59', 'rajkot', 'pending', 'denishf19c0a060fe87c0423be86af309680c4', 'upload/denishf19c0a060fe87c0423be86af309680c4_1.png', 'upload/denishf19c0a060fe87c0423be86af309680c4_2.png', 'upload/denish8000512652_3.png'),
(20, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'jhdkjwhfkjwh', 'milk plants', '2020-05-15', '2020-05-16', '13:00', '14:00', 'rajkot', 'accepted', 'denish596137aeefb11c09e4cdd4283481416c', 'upload/denish596137aeefb11c09e4cdd4283481416c_1.png', 'upload/denish596137aeefb11c09e4cdd4283481416c_2.png', 'upload/denish8000512652_3.png'),
(21, 'denish', 'male', '8000512652', '8000512652', 'ranpariyadenish1512@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'abcdd', 'water', '2020-05-05', '2020-05-08', '13:00', '18:00', 'rajkot', 'pending', 'denisha8fd53392bba77b2d95b2323d0fe3e03', 'upload/denisha8fd53392bba77b2d95b2323d0fe3e03_1.png', 'upload/denisha8fd53392bba77b2d95b2323d0fe3e03_2.png', 'upload/denish8000512652_3.png'),
(22, 'denish k ranpariya', 'male', '8000512652', '', 'denishranpariya10@gmail.com', '\"Hari om Shanti\",C-8,shantiniketan res., near aalap green city,raiya road,rajkot.', 'office', 'food items', '2020-06-27', '2020-06-29', '09:00', '20:00', 'rajkot', 'accepted', 'denishkranpariya9953a81fd757e69b23aa8e4023c45ef0', 'upload/denishkranpariya9953a81fd757e69b23aa8e4023c45ef0_1.jpg', 'upload/denishkranpariya9953a81fd757e69b23aa8e4023c45ef0_2.jpg', 'upload/denishkranpariya8000512652_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `cpassword`, `token`, `status`) VALUES
(4, 'denish', '18dce102@charusat.edu.in', '$2y$10$9oWNqkdXWd3yVLzEOuoDf.4CmOstQqLCu0X2MaErRESAtvSai3/7i', '$2y$10$es1xqLmmQ9EaTczu.8LlK.EJPDvKvPJiUIS0x5YmcbyetYssoJ0TG', 'd43ad3e14a90e6d3cdf2c279486710', 'active'),
(16, 'Denish Ranpariya', 'ranpariyadenish1512@gmail.com', '$2y$10$seAWGV6xI78q6Ugm3jNN8.e.J/C6nxNiTkmXCG3gE7GPv1.027U1G', '$2y$10$pSH7h0kN/JlvePXrN4Fb0O5eERSp4GD4EJcT5uh3gKfHcEjxCJtTu', '3052e36e079063f7b195ba890deddd', 'active'),
(21, 'denish', 'denishranpariya10@gmail.com', '$2y$10$ORAfbhnuVD4ObF6CvC8uDuq0aqmuXneeGfhEVTvdB/kiJ.ZzOZaYi', '$2y$10$ta7VGYmS/q9p51f4T5ju4uAkKD2SFF6f83KwlRX/UBiF6/XfoTEii', 'a42af6dd5d05c3e2e0b997bb06cdaa', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
