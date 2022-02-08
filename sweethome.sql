-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2021 at 06:13 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweethome`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `size` int(255) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `type`, `sale`, `city`, `price`, `phone`, `size`, `rooms`, `description`, `image`) VALUES
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'ينبيستتلبي', ''),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'ينبيستتلبي', ''),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'ينبيستتلبي', ''),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'تننبي', 0x312e6a7067),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'تننبي', 0x312e6a7067),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'تننبي', 0x4254532028ebb0a9ed8384ec868ceb8584eb8ba8292d20414e50414e4d414ee3808c436f6e63657274205665722ee3808d555345204845414450484f4e45532e6d7034),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'dsffff', 0x5b45584f202d20506f7765725d20436f6d656261636b20537461676520204d20434f554e54444f574e203137303930372045502e3534302e6d7034),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'dsffff', 0x6e622e706e67),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'تننبي', 0x4254532028ebb0a9ed8384ec868ceb8584eb8ba8292d20414e50414e4d414ee3808c436f6e63657274205665722ee3808d555345204845414450484f4e45532e6d7034),
('sara alnajar', 'شقة', 'للبيع', 'عمان', 200, 988983, 2000, 'ستوديو', 'df', ''),
('', '', '', '', 0, 0, 0, '', '', ''),
('', '', '', '', 0, 0, 0, '', '', ''),
('', '', '', '', 0, 0, 0, '', '', ''),
('', '', '', '', 0, 0, 0, '', '', ''),
('sds', 'شقة', 'للبيع', 'عمان', 200, 988983678, 2000, 'ستوديو', 's', ''),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983678, 320, 'ستوديو', '.', ''),
('شقة للبيع', 'شقة', 'للبيع', 'عمان', 200, 988983678, 320, 'ستوديو', 'sdkejf', ''),
('شقة للبيع', 'شقة', 'للبيع', 'البلقاء', 200, 988983678, 320, 'ستوديو', '....', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`) VALUES
(1, 'sara alnajar', 'saraalnajar3012@gmail.com', 'sara2000'),
(2, 'hadeel alshishany', 'hadeel@gmail.com', 'hadeel'),
(102, 'sajdsjfd', 'hasddeel@gmail.com', 'fdjhfs'),
(110, 'aseel', 'aseaelnk96@gmail.com', 'aseel'),
(113, 'yara', 'yara@hotmail.com', 'yara'),
(114, 'sdfsfs', 'haneenalnajar2005@hotmail.com', 'dsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
