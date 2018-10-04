-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2017 at 03:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(4) NOT NULL,
  `imagetitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageID`, `imagetitle`, `description`, `filename`) VALUES
(1, 'Instagram:@MaRk_1', 'black glittery scarv', 'a.jpg'),
(2, 'Instagram:@ch_123', 'nike japan hat', 'b.jpg'),
(3, 'Instagram:@143_jr', 'retro rainbow boble', 'c.jpg'),
(4, 'Instagram:@pedro12', 'green head piece', 'd.jpg'),
(5, 'Instagram:@mike_la', 'vintage brown bag', 'e.jpg'),
(6, 'Instagram:@con_42', 'round  glasses', 'f.jpg'),
(7, 'Instagram:@lewisla', 'round shades gold', 'g.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images_tbl`
--

CREATE TABLE `images_tbl` (
  `imageID` int(11) NOT NULL,
  `imagetitle` varchar(50) COLLATE latin1_bin NOT NULL,
  `description` text COLLATE latin1_bin NOT NULL,
  `filename` varchar(50) COLLATE latin1_bin NOT NULL,
  `album_cover_url` varchar(100) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `images_tbl`
--

INSERT INTO `images_tbl` (`imageID`, `imagetitle`, `description`, `filename`, `album_cover_url`) VALUES
(2, 'White trouser fringe tassel two piece', 'Instagram:@anna_px', 'anna.jpg', ''),
(3, 'Ice Queen Metallic top/bottom Co-ord', 'Instagram:@becky12314', 'becky.jpg', 'becky.jpg'),
(4, 'Japanese style knee high dress', 'Instagram:@han_12x', 'hannah.jpg', 'hannah.jpg'),
(5, 'Pale Pink and yellow Floral Playsuit', 'Instagram:@camxx1', 'camila.jpg', 'camila.jpg'),
(6, 'Mustard Floral Off Shoulder Playsuit', 'Instagram:@cloetat1', 'cloe.jpg', 'cloe.jpg'),
(7, 'Mustard Floral Off Shoulder Playsuit', 'Instagram:@gabby_97', 'gabby.jpg', 'gabby.jpg'),
(8, 'Mustard Floral Off Shoulder Playsuit', 'Instagram:@jess_green', 'jess.jpg', 'jess.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images_tbl1`
--

CREATE TABLE `images_tbl1` (
  `ImageID` int(11) NOT NULL,
  `imagetitle` varchar(50) COLLATE latin1_bin NOT NULL,
  `description` text COLLATE latin1_bin NOT NULL,
  `filename` varchar(50) COLLATE latin1_bin NOT NULL,
  `album_cover_url` varchar(100) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `images_tbl1`
--

INSERT INTO `images_tbl1` (`ImageID`, `imagetitle`, `description`, `filename`, `album_cover_url`) VALUES
(1, 'Instagram:@pet_dj', 'vintage rainbow shirt', 'peter.jpg', 'peter.jpg'),
(2, 'Instagram:@bobby', 'oversize vintage jumper', 'bob.jpg', 'bob.jpg'),
(3, 'Instagram:@simon_3', 'black tokyo hill top', 'simon.jpg', 'simon.jpg'),
(4, 'Instagram:@deon_123', 'black emoji top', 'luke.jpg', 'luke.jpg'),
(5, 'Instagram:@mol_3248', 'white coat with chain', '7.jpg', '7.jpg'),
(6, 'Instagram:@jay_rt', 'vintage style fila jumper', '6.jpg', '6.jpg'),
(7, 'Instagram:@pete13', 'your ego sucks top ', '5.jpg', '5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `images_tbl`
--
ALTER TABLE `images_tbl`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `images_tbl1`
--
ALTER TABLE `images_tbl1`
  ADD PRIMARY KEY (`ImageID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `images_tbl`
--
ALTER TABLE `images_tbl`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `images_tbl1`
--
ALTER TABLE `images_tbl1`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
