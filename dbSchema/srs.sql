-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 06:05 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `Name` varchar(25) DEFAULT NULL,
  `latitude` int(11) DEFAULT NULL,
  `longitude` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`Name`, `latitude`, `longitude`) VALUES
('Ariyalur ', 11, 79),
('Chennai ', 13, 80),
('Coimbatore ', 11, 76),
('Cuddalore ', 11, 79),
('Dharmapuri ', 12, 78),
('Dindigul ', 10, 77),
('Erode ', 11, 77),
('Kanchipuram ', 12, 79),
('Kanyakumari ', 8, 77),
('Karur ', 10, 78),
('Krishnagiri ', 12, 78),
('Madurai ', 9, 77),
('Nagapattinam ', 10, 79),
('Namakkal ', 11, 78),
('Nilgiris ', 11, 76),
('Perambalur ', 11, 78),
('Pudukkottai ', 10, 78),
('Ramanathapuram ', 9, 78),
('Salem ', 11, 78),
('Sivaganga ', 9, 78),
('Thanjavur ', 10, 79),
('Theni ', 10, 77),
('Thoothukudi ', 8, 78),
('Tiruchirappalli ', 10, 78),
('Tirunelveli ', 8, 77),
('Tiruppur ', 11, 77),
('Tiruvallur ', 13, 79),
('Tiruvannamalai ', 12, 79),
('Tiruvarur ', 10, 79),
('Vellore ', 12, 79),
('Viluppuram ', 11, 79),
('Virudhunagar ', 9, 77);

-- --------------------------------------------------------

--
-- Table structure for table `nanthakumar`
--

CREATE TABLE `nanthakumar` (
  `id` int(11) NOT NULL DEFAULT '0',
  `fbid` varchar(50) DEFAULT NULL,
  `collegeName` varchar(50) DEFAULT NULL,
  `reviews` text,
  `latitude` float(25,3) DEFAULT NULL,
  `longitude` float(25,3) DEFAULT NULL,
  `attribute` varchar(10) DEFAULT NULL,
  `factor` float DEFAULT NULL,
  `goodOrBad` int(11) DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `measure` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nanthakumar`
--

INSERT INTO `nanthakumar` (`id`, `fbid`, `collegeName`, `reviews`, `latitude`, `longitude`, `attribute`, `factor`, `goodOrBad`, `district`, `measure`) VALUES
(1, 'Praveen Kumar', 'sjce', 'Average', 11.000, 79.000, 'Studies', 0, 0, 'Ariyalur', 10),
(2, 'Pradeep', 'sjce', 'Good', 13.000, 80.000, 'Sports', 0.44, 0, 'Chennai', 15),
(3, 'Wajid', 'sjce', 'Bad', 11.000, 76.000, 'Discipline', -0.54, 1, 'Coimbatore', 14),
(4, 'Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Cuddalore', 11),
(5, 'Koushik', 'sathyabama', 'Average', 12.000, 78.000, 'Transport', 0, 1, 'Dharmapuri', 6),
(6, 'Jacob Joshua', 'sathyabama', 'Average', 11.000, 79.000, 'Food', 0, 1, 'Ariyalur', 7),
(7, 'Koushik', 'sathyabama', 'Bad', 13.000, 80.000, 'Transport', -0.54, 1, 'Chennai', 14),
(8, 'Praveen Kumar', 'sjce', 'Bad', 11.000, 76.000, 'Studies', -0.54, 1, 'Coimbatore', 15),
(9, 'Pradeep', 'sjce', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Cuddalore', 13),
(10, 'Pradeep', 'sjce', 'Good', 12.000, 78.000, 'Sports', 0.44, 1, 'Dharmapuri', 12),
(11, 'Pradeep', 'sathyabama', 'Average', 11.000, 79.000, 'Sports', 0, 1, 'Ariyalur', 8),
(12, 'Pradeep', 'sjce', 'Good', 13.000, 80.000, 'Sports', 0.44, 1, 'Chennai', 15),
(13, 'Pradeep', 'sjce', 'Average', 11.000, 76.000, 'Sports', 0, 1, 'Coimbatore', 8),
(14, 'Pradeep', 'sathyabama', 'Average', 11.000, 79.000, 'Sports', 0, 1, 'Cuddalore', 8),
(15, 'Jacob Joshua', 'sathyabama', 'Bad', 12.000, 78.000, 'Food', -0.54, 1, 'Dharmapuri', 12),
(16, 'Wajid', 'sathyabama', 'Bad', 11.000, 79.000, 'Discipline', -0.54, 1, 'Ariyalur', 14),
(17, 'Wajid', 'sathyabama', 'Average', 13.000, 80.000, 'Discipline', 0, 1, 'Chennai', 12),
(18, 'Jacob Joshua', 'sjce', 'Average', 11.000, 76.000, 'Food', 0, 1, 'Coimbatore', 7),
(19, 'Praveen Kumar', 'sathyabama', 'Good', 11.000, 79.000, 'Studies', 0.44, 1, 'Cuddalore', 14),
(20, 'Koushik', 'sjce', 'Bad', 12.000, 78.000, 'Transport', -0.54, 1, 'Dharmapuri', 11),
(21, 'Praveen Kumar', 'sjce', 'Average', 11.000, 79.000, 'Studies', 0, 1, 'Ariyalur', 10),
(22, 'Praveen Kumar', 'sjce', 'Good', 13.000, 80.000, 'Studies', 0.44, 1, 'Chennai', 17),
(23, 'Wajid', 'sathyabama', 'Good', 11.000, 76.000, 'Discipline', 0.44, 1, 'Coimbatore', 13),
(24, 'Praveen Kumar', 'sjce', 'Average', 11.000, 79.000, 'Studies', 0, 1, 'Cuddalore', 10),
(25, 'Jacob Joshua', 'sathyabama', 'Average', 12.000, 78.000, 'Food', 0, 1, 'Dharmapuri', 7),
(26, 'Jacob Joshua', 'sathyabama', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Ariyalur', 11),
(27, 'Praveen Kumar', 'sjce', 'Average', 13.000, 80.000, 'Studies', 0, 1, 'Chennai', 13),
(28, 'Praveen Kumar', 'sjce', 'Bad', 11.000, 76.000, 'Studies', -0.54, 1, 'Coimbatore', 15),
(29, 'Wajid', 'sathyabama', 'Bad', 11.000, 79.000, 'Discipline', -0.54, 1, 'Cuddalore', 14),
(30, 'Koushik', 'sjce', 'Good', 12.000, 78.000, 'Transport', 0.44, 1, 'Dharmapuri', 10),
(31, 'Pradeep', 'sathyabama', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Ariyalur', 13),
(32, 'Wajid', 'sjce', 'Good', 13.000, 80.000, 'Discipline', 0.44, 1, 'Chennai', 16),
(33, 'Koushik', 'sjce', 'Good', 11.000, 76.000, 'Transport', 0.44, 1, 'Coimbatore', 10),
(34, 'Pradeep', 'sathyabama', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Cuddalore', 13),
(35, 'Wajid', 'sjce', 'Bad', 12.000, 78.000, 'Discipline', -0.54, 1, 'Dharmapuri', 14),
(36, 'Praveen Kumar', 'sathyabama', 'Average', 11.000, 79.000, 'Studies', 0, 1, 'Ariyalur', 10),
(37, 'Koushik', 'sjce', 'Good', 13.000, 80.000, 'Transport', 0.44, 1, 'Chennai', 13),
(38, 'Wajid', 'sathyabama', 'Good', 11.000, 76.000, 'Discipline', 0.44, 1, 'Coimbatore', 13),
(39, 'Pradeep', 'sathyabama', 'Average', 11.000, 79.000, 'Sports', 0, 1, 'Cuddalore', 8),
(40, 'Praveen Kumar', 'sjce', 'Bad', 12.000, 78.000, 'Studies', -0.54, 1, 'Dharmapuri', 15),
(41, 'Jacob Joshua', 'sathyabama', 'Bad', 11.000, 79.000, 'Food', -0.54, 1, 'Ariyalur', 12),
(42, 'Praveen Kumar', 'sathyabama', 'Good', 13.000, 80.000, 'Studies', 0.44, 1, 'Chennai', 17),
(43, 'Wajid', 'sathyabama', 'Good', 11.000, 76.000, 'Discipline', 0.44, 1, 'Coimbatore', 13),
(44, 'Pradeep', 'sathyabama', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Cuddalore', 13),
(45, 'Koushik', 'sjce', 'Good', 12.000, 78.000, 'Transport', 0.44, 1, 'Dharmapuri', 10),
(46, 'Pradeep', 'sathyabama', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Ariyalur', 13),
(47, 'Praveen Kumar', 'sathyabama', 'Average', 13.000, 80.000, 'Studies', 0, 1, 'Chennai', 13),
(48, 'Pradeep', 'sathyabama', 'Good', 11.000, 76.000, 'Sports', 0.44, 1, 'Coimbatore', 12),
(49, 'Wajid', 'sathyabama', 'Average', 11.000, 79.000, 'Discipline', 0, 1, 'Cuddalore', 9),
(50, 'Praveen Kumar', 'sjce', 'Bad', 12.000, 78.000, 'Studies', -0.54, 1, 'Dharmapuri', 15),
(51, 'Jacob Joshua', 'sathyabama', 'Average', 11.000, 79.000, 'Food', 0, 1, 'Ariyalur', 7),
(52, 'Pradeep', 'sathyabama', 'Bad', 13.000, 80.000, 'Sports', -0.54, 1, 'Chennai', 16),
(53, 'Praveen Kumar', 'sjce', 'Average', 11.000, 76.000, 'Studies', 0, 1, 'Coimbatore', 10),
(54, 'Praveen Kumar', 'sathyabama', 'Bad', 11.000, 79.000, 'Studies', -0.54, 1, 'Cuddalore', 15),
(55, 'Pradeep', 'sathyabama', 'Average', 12.000, 78.000, 'Sports', 0, 1, 'Dharmapuri', 8),
(56, 'Pradeep', 'sjce', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Ariyalur', 13),
(57, 'Praveen Kumar', 'sathyabama', 'Good', 13.000, 80.000, 'Studies', 0.44, 1, 'Chennai', 17),
(58, 'Jacob Joshua', 'sathyabama', 'Good', 11.000, 76.000, 'Food', 0.44, 1, 'Coimbatore', 11),
(59, 'Jacob Joshua', 'sathyabama', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Cuddalore', 11),
(60, 'Pradeep', 'sjce', 'Average', 12.000, 78.000, 'Sports', 0, 1, 'Dharmapuri', 8),
(61, 'Jacob Joshua', 'sjce', 'Bad', 11.000, 79.000, 'Food', -0.54, 1, 'Ariyalur', 12),
(62, 'Koushik', 'sjce', 'Bad', 13.000, 80.000, 'Transport', -0.54, 1, 'Chennai', 14),
(63, 'Jacob Joshua', 'sjce', 'Good', 11.000, 76.000, 'Food', 0.44, 1, 'Coimbatore', 11),
(64, 'Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Cuddalore', 11),
(65, 'Koushik', 'sjce', 'Good', 12.000, 78.000, 'Transport', 0.44, 1, 'Dharmapuri', 10),
(66, 'Wajid', 'sathyabama', 'Average', 11.000, 79.000, 'Discipline', 0, 1, 'Ariyalur', 9),
(67, 'Pradeep', 'sjce', 'Average', 13.000, 80.000, 'Sports', 0, 1, 'Chennai', 11),
(68, 'Jacob Joshua', 'sathyabama', 'Average', 11.000, 76.000, 'Food', 0, 1, 'Coimbatore', 7),
(69, 'Wajid', 'sathyabama', 'Average', 11.000, 79.000, 'Discipline', 0, 1, 'Cuddalore', 9),
(70, 'Pradeep', 'sathyabama', 'Bad', 12.000, 78.000, 'Sports', -0.54, 1, 'Dharmapuri', 13),
(71, 'Wajid', 'sathyabama', 'Bad', 11.000, 79.000, 'Discipline', -0.54, 1, 'Ariyalur', 14),
(72, 'Pradeep', 'sathyabama', 'Good', 13.000, 80.000, 'Sports', 0.44, 1, 'Chennai', 15),
(73, 'Koushik', 'sjce', 'Good', 11.000, 76.000, 'Transport', 0.44, 1, 'Coimbatore', 10),
(74, 'Jacob Joshua', 'sathyabama', 'Average', 11.000, 79.000, 'Food', 0, 1, 'Cuddalore', 7),
(75, 'Koushik', 'sathyabama', 'Average', 12.000, 78.000, 'Transport', 0, 1, 'Dharmapuri', 6),
(76, 'Pradeep', 'sjce', 'Good', 11.000, 79.000, 'Sports', 0.44, 1, 'Ariyalur', 12),
(77, 'Praveen Kumar', 'sathyabama', 'Average', 13.000, 80.000, 'Studies', 0, 1, 'Chennai', 13),
(78, 'Wajid', 'sjce', 'Good', 11.000, 76.000, 'Discipline', 0.44, 1, 'Coimbatore', 13),
(79, 'Koushik', 'sjce', 'Good', 11.000, 79.000, 'Transport', 0.44, 1, 'Cuddalore', 10),
(80, 'Jacob Joshua', 'sjce', 'Bad', 12.000, 78.000, 'Food', -0.54, 1, 'Dharmapuri', 12),
(81, 'Jacob Joshua', 'sjce', 'Bad', 11.000, 79.000, 'Food', -0.54, 1, 'Ariyalur', 12),
(82, 'Koushik', 'sjce', 'Bad', 13.000, 80.000, 'Transport', -0.54, 1, 'Chennai', 14),
(83, 'Koushik', 'sathyabama', 'Bad', 11.000, 76.000, 'Transport', -0.54, 1, 'Coimbatore', 11),
(84, 'Wajid', 'sjce', 'Average', 11.000, 79.000, 'Discipline', 0, 1, 'Cuddalore', 9),
(85, 'Pradeep', 'sjce', 'Average', 12.000, 78.000, 'Sports', 0, 1, 'Dharmapuri', 8),
(86, 'Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Ariyalur', 11),
(87, 'Wajid', 'sjce', 'Bad', 13.000, 80.000, 'Discipline', -0.54, 1, 'Chennai', 17),
(88, 'Praveen Kumar', 'sathyabama', 'Average', 11.000, 76.000, 'Studies', 0, 1, 'Coimbatore', 10),
(89, 'Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Cuddalore', 11),
(90, 'Koushik', 'sathyabama', 'Average', 12.000, 78.000, 'Transport', 0, 1, 'Dharmapuri', 6),
(91, 'Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Ariyalur', 11),
(92, 'Koushik', 'sathyabama', 'Average', 13.000, 80.000, 'Transport', 0, 1, 'Chennai', 9),
(93, 'Jacob Joshua', 'sathyabama', 'Bad', 11.000, 76.000, 'Food', -0.54, 1, 'Coimbatore', 12),
(94, 'Praveen Kumar', 'sjce', 'Bad', 11.000, 79.000, 'Studies', -0.54, 1, 'Cuddalore', 15),
(95, 'Jacob Joshua', 'sjce', 'Good', 12.000, 78.000, 'Food', 0.44, 1, 'Dharmapuri', 11),
(96, 'Koushik', 'sjce', 'Average', 11.000, 79.000, 'Transport', 0, 1, 'Ariyalur', 6),
(97, 'Praveen Kumar', 'sathyabama', 'Good', 13.000, 80.000, 'Studies', 0.44, 1, 'Chennai', 17),
(98, 'Pradeep', 'sathyabama', 'Good', 11.000, 76.000, 'Sports', 0.44, 1, 'Coimbatore', 12),
(99, 'Praveen Kumar', 'sjce', 'Bad', 11.000, 79.000, 'Studies', -0.54, 1, 'Cuddalore', 15),
(100, 'Praveen Kumar', 'sathyabama', 'Average', 12.000, 78.000, 'Studies', 0, 1, 'Dharmapuri', 10);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `fbid` varchar(50) DEFAULT NULL,
  `collegeName` varchar(50) DEFAULT NULL,
  `reviews` text,
  `latitude` float(25,3) DEFAULT NULL,
  `longitude` float(25,3) DEFAULT NULL,
  `attribute` varchar(10) DEFAULT NULL,
  `factor` float DEFAULT NULL,
  `goodOrBad` int(11) DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`fbid`, `collegeName`, `reviews`, `latitude`, `longitude`, `attribute`, `factor`, `goodOrBad`, `district`, `id`) VALUES
('Praveen Kumar', 'sjce', 'Average', 11.000, 79.000, 'Studies', 0, 0, 'Ariyalur', 1),
('Pradeep', 'sjce', 'Good', 13.000, 80.000, 'Sports', 0.44, 0, 'Chennai', 2),
('Wajid', 'sjce', 'Bad', 11.000, 76.000, 'Discipline', -0.54, 1, 'Coimbatore', 3),
('Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Cuddalore', 4),
('Koushik', 'sathyabama', 'Average', 12.000, 78.000, 'Transport', 0, 1, 'Dharmapuri', 5),
('Jacob Joshua', 'sathyabama', 'Average', 11.000, 79.000, 'Food', 0, 1, 'Ariyalur', 6),
('Koushik', 'sathyabama', 'Bad', 13.000, 80.000, 'Transport', -0.54, 1, 'Chennai', 7),
('Praveen Kumar', 'sjce', 'Bad', 11.000, 76.000, 'Studies', -0.54, 1, 'Coimbatore', 8),
('Pradeep', 'sjce', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Cuddalore', 9),
('Pradeep', 'sjce', 'Good', 12.000, 78.000, 'Sports', 0.44, 1, 'Dharmapuri', 10),
('Pradeep', 'sathyabama', 'Average', 11.000, 79.000, 'Sports', 0, 1, 'Ariyalur', 11),
('Pradeep', 'sjce', 'Good', 13.000, 80.000, 'Sports', 0.44, 1, 'Chennai', 12),
('Pradeep', 'sjce', 'Average', 11.000, 76.000, 'Sports', 0, 1, 'Coimbatore', 13),
('Pradeep', 'sathyabama', 'Average', 11.000, 79.000, 'Sports', 0, 1, 'Cuddalore', 14),
('Jacob Joshua', 'sathyabama', 'Bad', 12.000, 78.000, 'Food', -0.54, 1, 'Dharmapuri', 15),
('Wajid', 'sathyabama', 'Bad', 11.000, 79.000, 'Discipline', -0.54, 1, 'Ariyalur', 16),
('Wajid', 'sathyabama', 'Average', 13.000, 80.000, 'Discipline', 0, 1, 'Chennai', 17),
('Jacob Joshua', 'sjce', 'Average', 11.000, 76.000, 'Food', 0, 1, 'Coimbatore', 18),
('Praveen Kumar', 'sathyabama', 'Good', 11.000, 79.000, 'Studies', 0.44, 1, 'Cuddalore', 19),
('Koushik', 'sjce', 'Bad', 12.000, 78.000, 'Transport', -0.54, 1, 'Dharmapuri', 20),
('Praveen Kumar', 'sjce', 'Average', 11.000, 79.000, 'Studies', 0, 1, 'Ariyalur', 21),
('Praveen Kumar', 'sjce', 'Good', 13.000, 80.000, 'Studies', 0.44, 1, 'Chennai', 22),
('Wajid', 'sathyabama', 'Good', 11.000, 76.000, 'Discipline', 0.44, 1, 'Coimbatore', 23),
('Praveen Kumar', 'sjce', 'Average', 11.000, 79.000, 'Studies', 0, 1, 'Cuddalore', 24),
('Jacob Joshua', 'sathyabama', 'Average', 12.000, 78.000, 'Food', 0, 1, 'Dharmapuri', 25),
('Jacob Joshua', 'sathyabama', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Ariyalur', 26),
('Praveen Kumar', 'sjce', 'Average', 13.000, 80.000, 'Studies', 0, 1, 'Chennai', 27),
('Praveen Kumar', 'sjce', 'Bad', 11.000, 76.000, 'Studies', -0.54, 1, 'Coimbatore', 28),
('Wajid', 'sathyabama', 'Bad', 11.000, 79.000, 'Discipline', -0.54, 1, 'Cuddalore', 29),
('Koushik', 'sjce', 'Good', 12.000, 78.000, 'Transport', 0.44, 1, 'Dharmapuri', 30),
('Pradeep', 'sathyabama', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Ariyalur', 31),
('Wajid', 'sjce', 'Good', 13.000, 80.000, 'Discipline', 0.44, 1, 'Chennai', 32),
('Koushik', 'sjce', 'Good', 11.000, 76.000, 'Transport', 0.44, 1, 'Coimbatore', 33),
('Pradeep', 'sathyabama', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Cuddalore', 34),
('Wajid', 'sjce', 'Bad', 12.000, 78.000, 'Discipline', -0.54, 1, 'Dharmapuri', 35),
('Praveen Kumar', 'sathyabama', 'Average', 11.000, 79.000, 'Studies', 0, 1, 'Ariyalur', 36),
('Koushik', 'sjce', 'Good', 13.000, 80.000, 'Transport', 0.44, 1, 'Chennai', 37),
('Wajid', 'sathyabama', 'Good', 11.000, 76.000, 'Discipline', 0.44, 1, 'Coimbatore', 38),
('Pradeep', 'sathyabama', 'Average', 11.000, 79.000, 'Sports', 0, 1, 'Cuddalore', 39),
('Praveen Kumar', 'sjce', 'Bad', 12.000, 78.000, 'Studies', -0.54, 1, 'Dharmapuri', 40),
('Jacob Joshua', 'sathyabama', 'Bad', 11.000, 79.000, 'Food', -0.54, 1, 'Ariyalur', 41),
('Praveen Kumar', 'sathyabama', 'Good', 13.000, 80.000, 'Studies', 0.44, 1, 'Chennai', 42),
('Wajid', 'sathyabama', 'Good', 11.000, 76.000, 'Discipline', 0.44, 1, 'Coimbatore', 43),
('Pradeep', 'sathyabama', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Cuddalore', 44),
('Koushik', 'sjce', 'Good', 12.000, 78.000, 'Transport', 0.44, 1, 'Dharmapuri', 45),
('Pradeep', 'sathyabama', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Ariyalur', 46),
('Praveen Kumar', 'sathyabama', 'Average', 13.000, 80.000, 'Studies', 0, 1, 'Chennai', 47),
('Pradeep', 'sathyabama', 'Good', 11.000, 76.000, 'Sports', 0.44, 1, 'Coimbatore', 48),
('Wajid', 'sathyabama', 'Average', 11.000, 79.000, 'Discipline', 0, 1, 'Cuddalore', 49),
('Praveen Kumar', 'sjce', 'Bad', 12.000, 78.000, 'Studies', -0.54, 1, 'Dharmapuri', 50),
('Jacob Joshua', 'sathyabama', 'Average', 11.000, 79.000, 'Food', 0, 1, 'Ariyalur', 51),
('Pradeep', 'sathyabama', 'Bad', 13.000, 80.000, 'Sports', -0.54, 1, 'Chennai', 52),
('Praveen Kumar', 'sjce', 'Average', 11.000, 76.000, 'Studies', 0, 1, 'Coimbatore', 53),
('Praveen Kumar', 'sathyabama', 'Bad', 11.000, 79.000, 'Studies', -0.54, 1, 'Cuddalore', 54),
('Pradeep', 'sathyabama', 'Average', 12.000, 78.000, 'Sports', 0, 1, 'Dharmapuri', 55),
('Pradeep', 'sjce', 'Bad', 11.000, 79.000, 'Sports', -0.54, 1, 'Ariyalur', 56),
('Praveen Kumar', 'sathyabama', 'Good', 13.000, 80.000, 'Studies', 0.44, 1, 'Chennai', 57),
('Jacob Joshua', 'sathyabama', 'Good', 11.000, 76.000, 'Food', 0.44, 1, 'Coimbatore', 58),
('Jacob Joshua', 'sathyabama', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Cuddalore', 59),
('Pradeep', 'sjce', 'Average', 12.000, 78.000, 'Sports', 0, 1, 'Dharmapuri', 60),
('Jacob Joshua', 'sjce', 'Bad', 11.000, 79.000, 'Food', -0.54, 1, 'Ariyalur', 61),
('Koushik', 'sjce', 'Bad', 13.000, 80.000, 'Transport', -0.54, 1, 'Chennai', 62),
('Jacob Joshua', 'sjce', 'Good', 11.000, 76.000, 'Food', 0.44, 1, 'Coimbatore', 63),
('Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Cuddalore', 64),
('Koushik', 'sjce', 'Good', 12.000, 78.000, 'Transport', 0.44, 1, 'Dharmapuri', 65),
('Wajid', 'sathyabama', 'Average', 11.000, 79.000, 'Discipline', 0, 1, 'Ariyalur', 66),
('Pradeep', 'sjce', 'Average', 13.000, 80.000, 'Sports', 0, 1, 'Chennai', 67),
('Jacob Joshua', 'sathyabama', 'Average', 11.000, 76.000, 'Food', 0, 1, 'Coimbatore', 68),
('Wajid', 'sathyabama', 'Average', 11.000, 79.000, 'Discipline', 0, 1, 'Cuddalore', 69),
('Pradeep', 'sathyabama', 'Bad', 12.000, 78.000, 'Sports', -0.54, 1, 'Dharmapuri', 70),
('Wajid', 'sathyabama', 'Bad', 11.000, 79.000, 'Discipline', -0.54, 1, 'Ariyalur', 71),
('Pradeep', 'sathyabama', 'Good', 13.000, 80.000, 'Sports', 0.44, 1, 'Chennai', 72),
('Koushik', 'sjce', 'Good', 11.000, 76.000, 'Transport', 0.44, 1, 'Coimbatore', 73),
('Jacob Joshua', 'sathyabama', 'Average', 11.000, 79.000, 'Food', 0, 1, 'Cuddalore', 74),
('Koushik', 'sathyabama', 'Average', 12.000, 78.000, 'Transport', 0, 1, 'Dharmapuri', 75),
('Pradeep', 'sjce', 'Good', 11.000, 79.000, 'Sports', 0.44, 1, 'Ariyalur', 76),
('Praveen Kumar', 'sathyabama', 'Average', 13.000, 80.000, 'Studies', 0, 1, 'Chennai', 77),
('Wajid', 'sjce', 'Good', 11.000, 76.000, 'Discipline', 0.44, 1, 'Coimbatore', 78),
('Koushik', 'sjce', 'Good', 11.000, 79.000, 'Transport', 0.44, 1, 'Cuddalore', 79),
('Jacob Joshua', 'sjce', 'Bad', 12.000, 78.000, 'Food', -0.54, 1, 'Dharmapuri', 80),
('Jacob Joshua', 'sjce', 'Bad', 11.000, 79.000, 'Food', -0.54, 1, 'Ariyalur', 81),
('Koushik', 'sjce', 'Bad', 13.000, 80.000, 'Transport', -0.54, 1, 'Chennai', 82),
('Koushik', 'sathyabama', 'Bad', 11.000, 76.000, 'Transport', -0.54, 1, 'Coimbatore', 83),
('Wajid', 'sjce', 'Average', 11.000, 79.000, 'Discipline', 0, 1, 'Cuddalore', 84),
('Pradeep', 'sjce', 'Average', 12.000, 78.000, 'Sports', 0, 1, 'Dharmapuri', 85),
('Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Ariyalur', 86),
('Wajid', 'sjce', 'Bad', 13.000, 80.000, 'Discipline', -0.54, 1, 'Chennai', 87),
('Praveen Kumar', 'sathyabama', 'Average', 11.000, 76.000, 'Studies', 0, 1, 'Coimbatore', 88),
('Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Cuddalore', 89),
('Koushik', 'sathyabama', 'Average', 12.000, 78.000, 'Transport', 0, 1, 'Dharmapuri', 90),
('Jacob Joshua', 'sjce', 'Good', 11.000, 79.000, 'Food', 0.44, 1, 'Ariyalur', 91),
('Koushik', 'sathyabama', 'Average', 13.000, 80.000, 'Transport', 0, 1, 'Chennai', 92),
('Jacob Joshua', 'sathyabama', 'Bad', 11.000, 76.000, 'Food', -0.54, 1, 'Coimbatore', 93),
('Praveen Kumar', 'sjce', 'Bad', 11.000, 79.000, 'Studies', -0.54, 1, 'Cuddalore', 94),
('Jacob Joshua', 'sjce', 'Good', 12.000, 78.000, 'Food', 0.44, 1, 'Dharmapuri', 95),
('Koushik', 'sjce', 'Average', 11.000, 79.000, 'Transport', 0, 1, 'Ariyalur', 96),
('Praveen Kumar', 'sathyabama', 'Good', 13.000, 80.000, 'Studies', 0.44, 1, 'Chennai', 97),
('Pradeep', 'sathyabama', 'Good', 11.000, 76.000, 'Sports', 0.44, 1, 'Coimbatore', 98),
('Praveen Kumar', 'sjce', 'Bad', 11.000, 79.000, 'Studies', -0.54, 1, 'Cuddalore', 99),
('Praveen Kumar', 'sathyabama', 'Average', 12.000, 78.000, 'Studies', 0, 1, 'Dharmapuri', 100);

-- --------------------------------------------------------

--
-- Table structure for table `templocation`
--

CREATE TABLE `templocation` (
  `latitude` float(25,3) DEFAULT NULL,
  `longitude` float(25,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float(25,3) DEFAULT NULL,
  `longitude` float(25,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `latitude`, `longitude`) VALUES
(7, '523398048006411', 'Nantha', 'Kumar', 'Undefined', 'male', 'en_GB', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/11059673_100300860316134_4327072545467399920_n.jpg?oh=2917e9a56e115c13262f3cedb790883e&oe=5AC61614', 'https://www.facebook.com/app_scoped_user_id/523398048006411/', 13.090, 80.250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
