-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql110.epizy.com
-- Generation Time: Aug 03, 2018 at 09:02 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21276875_gaarmyandic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(255) NOT NULL,
  `d_pass` varchar(255) NOT NULL,
  `d_rule` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `d_name`, `d_pass`, `d_rule`) VALUES
(2, 'garmyan', 'garmyan2020', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dic`
--

CREATE TABLE IF NOT EXISTS `dic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `english` varchar(100) NOT NULL,
  `kurdish` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `d_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=511 ;

--
-- Dumping data for table `dic`
--

INSERT INTO `dic` (`id`, `english`, `kurdish`, `active`, `d_date`) VALUES
(481, 'true', 'Ø±Ø§Ø³ØªÚ¯Û†', 2, ' 30 / 04 / 2018 '),
(480, 'theyy', 'Ø¦Û•ÙˆØ§Ù†', 0, ' 30 / 04 / 2018 '),
(479, 'they', 'Ø¦Û•ÙˆØ§Ù†', 2, ' 30 / 04 / 2018 '),
(478, 'qwz', 'gwz', 0, ' 30 / 04 / 2018 '),
(477, 'uguiguig', 'yhvgyuguy', 0, ' 30 / 04 / 2018 '),
(474, 'scattered', 'Ø¨ÚµØ§Ùˆ Ø¨ÙˆÙˆÙŠÛ•ÙˆÛ•', 2, ' 30 / 04 / 2018 '),
(475, 'certain', 'Ø¯ÚµÙ†ÛŒØ§ØŒ Ù…Ø³Û†Ú¯Û•Ø±', 2, ' 30 / 04 / 2018 '),
(471, 'we go', 'Ø¦ÛŽÛ• Ø¯Û•Ø±Û†ÛŒÙ†', 2, ' 30 / 04 / 2018 '),
(469, 'i am', 'Ù…Ù†', 2, ' 29 / 04 / 2018 '),
(472, 'angel', 'ÙØ±ÛŒØ´ØªÛ•', 2, ' 30 / 04 / 2018 '),
(476, 'hiiii', 'iugiugiu', 0, ' 30 / 04 / 2018 '),
(466, 'go', 'Ø¨Ú•Û†', 2, ' 26 / 04 / 2018 '),
(465, 'hi', 'Ø³Ù„Ø§Ùˆ', 2, ' 26 / 04 / 2018 '),
(463, 'think', 'Ø¨ÛŒØ±Ú©Ø±Ø¯Ù†Û•ÙˆÛ•', 2, ' 26 / 04 / 2018 '),
(464, 'well', 'Ø¨Ø§Ø´', 2, ' 26 / 04 / 2018 '),
(462, 'how', 'Ú†Û†Ù†', 2, ' 26 / 04 / 2018 '),
(461, 'help', 'ÛŒØ§Ø±Ù…Û•ØªÛŒ', 2, ' 26 / 04 / 2018 '),
(460, 'hhhhhhhhhhhhhh', 'hhhhhhhhhh', 2, ' 26 / 04 / 2018 '),
(459, 'book', 'Ù¾Ù‡â€ŒØ±ØªÙˆÙƒ', 2, ' 26 / 04 / 2018 '),
(458, 'you', 'ØªÛ†', 2, ' 26 / 04 / 2018 '),
(457, 'love', 'Ø®Û†Ø´Û•ÙˆÛŒØ³ØªÛŒ', 2, ' 26 / 04 / 2018 '),
(456, 'girl', 'Ú©Ú†', 2, ' 26 / 04 / 2018 '),
(454, 'poor', 'Ù‡Û•Ú˜Ø§Ø±', 2, ' 26 / 04 / 2018 '),
(455, 'boy', 'Ú©ÙˆØ±', 2, ' 26 / 04 / 2018 '),
(453, 'we', 'Ø¦ÛŽÙ…Û•', 2, ' 26 / 04 / 2018 '),
(452, 'hello', 'Ø³Ù„Ø§Ùˆ', 2, ' 26 / 04 / 2018 '),
(441, 'sick', 'Ù†Û•Ø®Û†Ø´', 2, ' 25 / 04 / 2018 '),
(442, 'small', 'Ø¨Ú†ÙˆÙˆÚ©', 2, ' 25 / 04 / 2018 '),
(443, 'town', 'Ø´Ø§Ø±Û†Ú†Ú©Û•', 2, ' 25 / 04 / 2018 '),
(444, 'invite', 'Ø¨Ø§Ù†Ú¯ Ù‡ÛŽØ´Øª', 2, ' 25 / 04 / 2018 '),
(445, 'party', 'Ø¦Ø§Ù‡Û•Ù†Ú¯', 2, ' 25 / 04 / 2018 '),
(446, 'shose', 'Ù¾ÛŽÙ„Ø§Ùˆ', 2, ' 25 / 04 / 2018 '),
(448, 'cow', 'Ù…Ø§Ù†Ú¯Ø§', 2, ' 25 / 04 / 2018 '),
(449, 'eat', 'Ø®ÙˆØ§Ø±Ø¯Ù†', 2, ' 25 / 04 / 2018 '),
(450, 'walk', 'Ø±Û†ÛŒØ´ØªÙ†', 2, ' 25 / 04 / 2018 '),
(451, 'hear', 'Ø¨ÛŒØ³ØªÙ†', 2, ' 25 / 04 / 2018 '),
(482, 'we good', 'Ø¦ÛŽÙ…Û• Ø¨Ø§Ø´ÛŒÙ†', 2, ' 27 / 05 / 2018 '),
(483, 'kudish', 'Ú¯', 2, ' 29 / 05 / 2018 '),
(505, 'seat', 'Ú©ÙˆØ±Ø³ÛŒ', 2, ' 18 / 07 / 2018 '),
(485, 'clandestine', 'Ù†Ù‡ÛŽÙ†ÛŒ', 2, ' 29 / 05 / 2018 '),
(487, 'add', 'Ø²ÛŒØ§Ø¯Ú©Ø±Ø¯Ù†', 2, ' 03 / 06 / 2018 '),
(498, 'hdhshs', 'Ù†ÛŒØªÛŒÛ•ÙˆÚ¤Ù‡Ø¨', 2, ' 04 / 06 / 2018 '),
(499, 'cat', 'Ù¾Ø´ÛŒÙƒ', 2, ' 04 / 06 / 2018 '),
(490, 'Comprehend', 'ØªÛŽÚ¯Û•ÛŒØ´ØªÙ† - ØªÛŽØ¯Û•Ú¯Ø§Øª', 2, ' 04 / 06 / 2018 '),
(491, 'Appropriate', 'Ú¯ÙˆÙ†Ø¬Ø§Ùˆ', 2, ' 04 / 06 / 2018 '),
(492, 'Door', 'Ù‚Ø§Ù¾ÛŒ', 2, ' 04 / 06 / 2018 '),
(493, 'Avoid', 'Ù„ÛŽ Ù„Ø§Ú†ÙˆÙˆÙ† - Ø®Û† Ø¯ÙˆØ±Ø®Ø³ØªÙ†Û•ÙˆÛ•', 2, ' 04 / 06 / 2018 '),
(494, 'Experiment', 'ØªØ§Ù‚ÛŒ Ú©Ø±Ø¯Ù†Û•ÙˆÛ•', 2, ' 04 / 06 / 2018 '),
(495, 'Silly', 'Ú¯ÛŽÙ„', 2, ' 04 / 06 / 2018 '),
(496, 'Willy nilly', 'Ø¨ÚµÛŽÛŒ Ùˆ Ù†Û•ÚµÛŽÛŒ', 2, ' 04 / 06 / 2018 '),
(497, 'Good', 'Ø¨Ø§Ø´Û•', 2, ' 04 / 06 / 2018 '),
(500, 'Banana', 'Ù…Û†Ø²', 2, ' 04 / 06 / 2018 '),
(501, 'hello world', 'Ø³ÚµØ§Ùˆ Ø¬ÛŒÙ‡Ø§Ù†', 2, ' 10 / 06 / 2018 '),
(502, 'well done', 'Ø¯Û•Ø³Øª Ø®Û†Ø´', 2, ' 08 / 07 / 2018 '),
(503, 'find', 'Ø¯Û†Ø²ÛŒÙ†Û•ÙˆÛ•', 2, ' 08 / 07 / 2018 '),
(504, 'porn', 'Ú¯Ø§Ù†', 2, ' 15 / 07 / 2018 '),
(506, 'never', 'Ù‡Û•Ø±Ú¯ÛŒØ²', 2, ' 21 / 07 / 2018 '),
(508, 'come', 'Ù‡Ø§ØªÙ†', 2, ' 03 / 08 / 2018 '),
(509, 'bad', 'Ø®Ø±Ø§Ù¾', 2, ' 03 / 08 / 2018 '),
(510, 'sorry', 'Ø¨Û•Ø¯Ø§Ø®Û•ÙˆÛ•', 2, ' 03 / 08 / 2018 ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
