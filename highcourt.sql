-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 06:03 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `highcourt`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcase`
--

CREATE TABLE IF NOT EXISTS `addcase` (
`id` int(78) NOT NULL,
  `ctitle` varchar(200) NOT NULL,
  `firno` varchar(200) NOT NULL,
  `lacno` varchar(200) NOT NULL,
  `cmpno` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `partyadv` varchar(200) NOT NULL,
  `othername` varchar(200) NOT NULL,
  `otheradv` varchar(200) NOT NULL,
  `ctype` varchar(200) NOT NULL,
  `cyear` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `desc` longtext NOT NULL,
  `caseno` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `final` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `status` varchar(80) NOT NULL,
  `coatno` varchar(400) NOT NULL,
  `judge` varchar(300) NOT NULL,
  `main1` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `addcase`
--

INSERT INTO `addcase` (`id`, `ctitle`, `firno`, `lacno`, `cmpno`, `pname`, `partyadv`, `othername`, `otheradv`, `ctype`, `cyear`, `state`, `desc`, `caseno`, `date`, `final`, `pdf`, `status`, `coatno`, `judge`, `main1`) VALUES
(4, 'murder', '1234567890', '987654321', '78678678678', 'kamal', 'rohan', 'amit', 'ram lal', 'CACP', '1990', 'AMBALA', 'dfjhdjsk sfkdjslk sfdkjsd ksdfj fdskjdf fskjdf sfdkj sdfkjds sdfk fskldjfs fskjd fsdkfjsd fsdkjfs fskldfjskl', '1225', '12-02-1990', '22-05-1990', 'casefile/Ans.docx', 'Objection', '53', '9028', 'Supplementary'),
(5, 'fdsfd', '3424342', '4234234', '654656546', 'kamal', 'hfghfgh', 'hfghfghf', 'ram lal', 'CACP', '2001', 'BARNALA', 'dasdas asddas asddas sadas', '6926', '12-02-1990', '22-05-1990', 'casefile/quespaper.docx', 'Pending', '654654654', '9028', 'Main'),
(6, 'theft', '123', '456', '789', 'abcd', 'efgh', 'ijkl', 'mnop', 'CWP', '2000', 'BHIWANI', 'sjvnrfjlnwljfnewlkkfn weljk ljv velfn sewn ljm ev vlk delkkjd', '2645', '01-02-2000', '01-05-2000', 'casefile/java.docx', 'Objection', '67', '9120', 'Supplementary');

-- --------------------------------------------------------

--
-- Table structure for table `addcause`
--

CREATE TABLE IF NOT EXISTS `addcause` (
  `ctype` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `main1` varchar(45) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcause`
--

INSERT INTO `addcause` (`ctype`, `pdf`, `main1`, `date`) VALUES
('Special-DB', 'causefile/Ans.docx', 'Main', '02-09-2010'),
('Lok-Adalat', 'causefile/java.docx', 'Supplementary', '02-09-2010');

-- --------------------------------------------------------

--
-- Table structure for table `cjustice`
--

CREATE TABLE IF NOT EXISTS `cjustice` (
`id` int(78) NOT NULL,
  `name` varchar(54) NOT NULL,
  `form` varchar(65) NOT NULL,
  `to` varchar(76) NOT NULL,
  `remarks` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cjustice`
--

INSERT INTO `cjustice` (`id`, `name`, `form`, `to`, `remarks`) VALUES
(1, 'mr. justice M.c mahanjan', '27/9/1943', '01/10/1948', ' daskldj; daskldkklas dalskdl;as sal;dkl;as asl;dkals daskdjasd'),
(2, 'mr. justice M.c mahanjan', '27/9/1943', '01/10/1948', ' daskldj; daskldkklas dalskdl;as sal;dkl;as asl;dkals daskdjasd');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(65) NOT NULL,
  `name` varchar(65) NOT NULL,
  `logo` varchar(65) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `logo`, `images`) VALUES
(1, 'first', 'first/1.jpg', 'first/1.jpg'),
(2, 'first', 'first/1.jpg', 'first/2.jpg'),
(3, 'first', 'first/1.jpg', 'first/3.jpg'),
(4, 'first', 'first/1.jpg', 'first/4.jpg'),
(8, '15aug function', '15aug function/aa.jpg', '15aug function/aa.jpg'),
(9, '15aug function', '15aug function/aa.jpg', '15aug function/aaa.jpg'),
(10, '15aug function', '15aug function/aa.jpg', '15aug function/abc.jpg'),
(11, '15aug function', '15aug function/aa.jpg', '15aug function/Jellyfish.jpg'),
(12, '15aug function', '15aug function/aa.jpg', '15aug function/Lighthouse.jpg'),
(13, 'Second', 'Second/Chrysanthemum.jpg', 'Second/Desert.jpg'),
(14, 'Second', 'Second/Chrysanthemum.jpg', 'Second/Hydrangeas.jpg'),
(15, 'hgdhj', 'hgdhj/Tulips.jpg', 'hgdhj/Chrysanthemum.jpg'),
(16, 'hgdhj', 'hgdhj/Tulips.jpg', 'hgdhj/Koala.jpg'),
(17, 'hgdhj', 'hgdhj/Tulips.jpg', 'hgdhj/Lighthouse.jpg'),
(18, 'hgdhj', 'hgdhj/Tulips.jpg', 'hgdhj/Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE IF NOT EXISTS `judge` (
`id` int(255) NOT NULL,
  `code` varchar(546) NOT NULL,
  `name` varchar(656) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`id`, `code`, `name`) VALUES
(1, '9119', 'MR. JUSTICE A.K. SIKRI, CHIEF JUSTICE'),
(2, '9029', 'MR. JUSTICE MUKUL MUDGAL, CHIEF JUSTICE'),
(3, '203', 'MR. JUSTICE RANJAN GOGOI, CHIEF JUSTICE'),
(4, '9120', 'MR. JUSTICE SANJAY KISHAN KAUL, CHIEF JUSTICE'),
(5, '9028', 'MR. JUSTICE TIRATH SINGH THAKUR, CHIEF JUSTICE'),
(6, '9027', 'MR. JUSTICE VIJENDER KUMAR JAIN, CHIEF JUSTICE'),
(7, '322', 'MR. JUSTICE A.N. JINDAL'),
(8, '230', 'MR. JUSTICE ADARSH KUMAR GOEL'),
(9, '308', 'MR. JUSTICE AJAI LAMBA'),
(10, '284', 'MR. JUSTICE AJAY KUMAR MITTAL'),
(11, '354', 'MR. JUSTICE AJAY TEWARI'),
(12, '363', 'MR. JUSTICE ALOK SINGH'),
(13, '476', 'MR. JUSTICE AMIT RAWAL'),
(14, '416', 'MR. JUSTICE AMOL RATTAN SINGH'),
(15, '424', 'MRS. JUSTICE ANITA CHAUDHRY');

-- --------------------------------------------------------

--
-- Table structure for table `justice`
--

CREATE TABLE IF NOT EXISTS `justice` (
`id` int(78) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cno` varchar(89) NOT NULL,
  `assets` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `justice`
--

INSERT INTO `justice` (`id`, `name`, `cno`, `assets`) VALUES
(1, 'dskjfk ldfl dfdasjkfh jkasdjk', '2', 'judges/java.docx');

-- --------------------------------------------------------

--
-- Table structure for table `justice2`
--

CREATE TABLE IF NOT EXISTS `justice2` (
`id` int(89) NOT NULL,
  `name` varchar(89) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `justice2`
--

INSERT INTO `justice2` (`id`, `name`, `from`, `to`) VALUES
(1, 'fsjkjkfjldk', '2016-03-11', '2016-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(56) NOT NULL,
  `email` varchar(67) NOT NULL,
  `pwd` varchar(78) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(65) NOT NULL,
  `title` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `news` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `place`, `date`, `news`) VALUES
(2, 'fdsjfkl', 'lskdajkdsjkl', '14/03/16', 'dsklajdksl dskladjkas daskld asdkaskld daskldsk'),
(3, 'dfakdjklsaaldskd', 'dsl;ak;ldskl; ', '14/03/16', 'dklasdkl;kdsl; dasldkal;s daslkdjask askldkasd'),
(4, 'Celebrations', 'Chandigarh', '02/04/16', 'News News');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcase`
--
ALTER TABLE `addcase`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cjustice`
--
ALTER TABLE `cjustice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `justice`
--
ALTER TABLE `justice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `justice2`
--
ALTER TABLE `justice2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcase`
--
ALTER TABLE `addcase`
MODIFY `id` int(78) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cjustice`
--
ALTER TABLE `cjustice`
MODIFY `id` int(78) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `judge`
--
ALTER TABLE `judge`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `justice`
--
ALTER TABLE `justice`
MODIFY `id` int(78) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `justice2`
--
ALTER TABLE `justice2`
MODIFY `id` int(89) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(56) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
