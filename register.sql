-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2016 at 04:59 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(12) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `createdate`) VALUES
('admin', '1234', '2016-07-17 12:02:00'),
('admin1', 'admin1', '2016-07-17 06:30:05'),
('admin2', 'admin2', '2016-07-17 09:30:15'),
('admin3', '32cacb2f994f', '2016-07-19 06:47:17'),
('admin4', '(admin4)', '0000-00-00 00:00:00'),
('nadicom', '(nadicom)', '0000-00-00 00:00:00'),
('pija', 'pija', '2016-07-17 06:33:50'),
('staff', 'staff', '2016-07-17 09:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `loguser`
--

CREATE TABLE `loguser` (
  `log_id` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `action` varchar(20) NOT NULL,
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loguser`
--

INSERT INTO `loguser` (`log_id`, `username`, `action`, `logtime`) VALUES
(1, 'admin', 'log masuk', '2016-08-17 16:54:06'),
(2, 'admin', 'log keluar', '2016-08-17 16:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `icno` bigint(16) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nric` bigint(16) NOT NULL,
  `dob` date NOT NULL,
  `citizen` varchar(25) NOT NULL,
  `race` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `address` varchar(150) NOT NULL,
  `job` varchar(25) NOT NULL,
  `salary` float NOT NULL,
  `phone1` int(12) NOT NULL,
  `phone2` int(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gmpcname` varchar(100) NOT NULL,
  `kptname` varchar(100) NOT NULL,
  `icno` bigint(16) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `oic` bigint(16) NOT NULL,
  `dob` int(12) NOT NULL,
  `pob` varchar(100) NOT NULL,
  `issuedate` datetime NOT NULL,
  `citizen` varchar(25) NOT NULL,
  `race` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `postcode` int(8) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tahun` varchar(12) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_action`
--

CREATE TABLE `staff_action` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `icno` bigint(16) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `gmpcname` varchar(100) NOT NULL,
  `kptname` varchar(100) NOT NULL,
  `icno` bigint(16) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `oic` bigint(16) NOT NULL,
  `dob` date NOT NULL,
  `pob` varchar(100) NOT NULL,
  `issuedate` datetime NOT NULL,
  `citizen` varchar(25) NOT NULL,
  `race` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `postcode` int(8) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tahun` varchar(12) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `flag` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nric` bigint(16) NOT NULL,
  `tlahir` date NOT NULL,
  `negara` varchar(25) NOT NULL,
  `bangsa` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kerja` varchar(25) NOT NULL,
  `gaji` float NOT NULL,
  `tel1` int(12) NOT NULL,
  `tel2` int(12) NOT NULL,
  `emel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `gmpcname`, `kptname`, `icno`, `gender`, `oic`, `dob`, `pob`, `issuedate`, `citizen`, `race`, `religion`, `address1`, `address2`, `address3`, `postcode`, `city`, `state`, `photo`, `phone`, `email`, `tahun`, `kelas`, `flag`, `nama`, `nric`, `tlahir`, `negara`, `bangsa`, `agama`, `alamat`, `kerja`, `gaji`, `tel1`, `tel2`, `emel`) VALUES
('pakupakis', 'paku', 'pakis', 98, '', 98, '0000-00-00', 'jihi', '2016-07-31 00:00:00', 'ji', 'ij', 'ji', 'ji', 'ji', 'ji', 12, 'ji', 'ji', '', 12, 'ji', 'ji', 'ji', 1, '', 0, '0000-00-00', '', '', '', '', '', 0, 0, 0, ''),
('Alif Syukri Mahasan', 'Alif Syukri Mahasan', 'Alif Syukri Mahasan', 120319036543, 'Male', 0, '0000-00-00', 'Kota Bharu', '0000-00-00 00:00:00', 'Warganegara', 'Melayu', 'Islam', 'Banguna MDT', 'Wakaf Bharu', 'Kelantan', 71234, 'Tumpat', 'Kelantan', '', 193332191, 'alif@gmail.com', 'Tingkatan 3', 'Amanah', 0, 'Mahasan Abdullah', 630811038765, '1963-08-11', '', '', '', 'Wakaf Bharu', 'Guru', 4000, 192913532, 167878654, 'mahasan@gmail.com'),
('Siti Saleha Jusoh', 'Siti Saleha Jusoh', 'Siti Saleha Jusoh', 920109035432, 'Female', 0, '0000-00-00', 'Hospital Tengku Anis', '0000-00-00 00:00:00', 'Warganegara', 'Melayu', 'Islam', 'Simpang Tiga Tok Bali', '21002 Pasir Puteh', ' Kelantan', 21002, 'Pasir Putih ', 'Kelantan', '', 193332191, 'salehaJ@yahoo.com', 'Tingkatan 3', 'Amanah', 0, '', 0, '0000-00-00', '', '', '', '', '', 0, 0, 0, ''),
('Norhafiza Ab Rahman', 'Hafiza', 'HR', 930526035488, 'female', 0, '0000-00-00', 'Bachok, Kelantan', '2016-07-28 00:00:00', 'Warganegara', 'Melayu', 'Islam', 'Kg Gong Nyatoh', 'Telong', 'Bachok Kelantan', 16310, 'Bachok', 'Kelantan', '', 192913532, 'fifiaman265@gmail.com', '3', 'DAT', 0, '', 0, '0000-00-00', '', '', '', '', '', 0, 0, 0, ''),
('Muhammad Basiir Zulkifle', 'Muhammad Basiir Zulkifle', 'Muhammad Basiir Zulkifle', 930915015245, 'Male', 0, '0000-00-00', 'Pontian Johor', '2016-08-02 00:00:00', 'Warganegara', 'Melayu', 'Islam', 'No 18, Jalan Padi Ria 9,', 'Bandar Baru Uda', 'Johor Bahru, Johor', 81200, 'Johor Bahru', 'Johor', '', 137828478, 'muhdbasiir@gmail.com', '4', 'BIT', 0, '', 0, '0000-00-00', '', '', '', '', '', 0, 0, 0, ''),
('Muhammad Zulfikri Ab Rahman', 'Muhammad Zulfikri Ab Rahman', 'Muhammad Zulfikri Ab Rahman', 951215035133, 'Male', 0, '0000-00-00', 'Bachok, Kelantan', '0000-00-00 00:00:00', 'Warganegara', 'Melayu', 'Islam', 'Kg Gong Nyatoh', 'Telong', 'Bachok Kelantan', 16310, 'Bachok', 'Kelantan', '', 1129424285, 'zulfikri@gmail.com', '', '', 0, 'Ab Rahman Mohamed', 631108035145, '1963-11-08', '', '', '', 'Kg Gong Nyatoh Telong 16310 Bachok Kelantan', 'Kontraktor', 7000, 139271030, 97858591, 'abrahman@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nric` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cod` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `g_name` text NOT NULL,
  `addr` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel1` int(12) NOT NULL,
  `tel2` int(12) NOT NULL,
  `fax` int(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `ssss` varchar(100) NOT NULL,
  `katalaluan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nric`, `username`, `cod`, `name`, `g_name`, `addr`, `email`, `tel1`, `tel2`, `fax`, `password`, `trn_date`, `ssss`, `katalaluan`) VALUES
(2, 930915035482, 'fifi', 'di130015', 'Norhafiza Ab Rahman', 'Ab Rahman Mohamad', 'Parit Raja Batu Pahat', 'fifiaman@gmail.com', 192913532, 198976543, 97858591, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-13 08:38:36', '', ''),
(8, 930526035488, 'hafiza', 'DI130015', 'NORHAFIZA AB RAHMAN', 'AB RAHMAN MOHAMAD', 'KG GONG NYATOH TELONG 16310 BACHOK KELANTAN', 'hafizarahman93@gmail.com', 192913532, 1119674109, 97858591, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-12 10:21:29', '', ''),
(9, 571006035044, 'pauziah', 'di130013', 'Pauziah Mohd Salleh', 'Ab Rahman Mohamad', 'Kg Gong Nyatoh', 'pauziah@gmail.com', 179429642, 139271030, 97858591, 'b706835de79a2b4e80506f582af3676a', '2016-07-14 04:15:38', '', ''),
(11, 930721086544, 'fatin', '12345', 'Fatin Farhana', 'Jamaludin', 'Kluang Johor', 'farhana@gmail.com', 192915433, 1129876543, 97878685, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-14 04:21:58', '', ''),
(13, 930915015244, 'admina', 'di12345', 'Nurul Sazuani', 'Salleh Yaacob', 'Taman Dahlia', 'sazuani@gmail.com', 192913532, 1119674109, 97878685, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-14 04:23:35', '', ''),
(14, 930915015242, 'sabrina', 'di130008', 'Nor Sabrina', 'zulkifle salleh', 'bbu', 'sabrina@gmail.com', 192913532, 1119674109, 97878654, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-14 04:28:21', '', ''),
(18, 951215035468, 'aminah', 'ai110816', 'Siti Aminah Wahab', 'Wahab Bin Talib', 'Kg Alor Gajah', 'aminah@gmail.com', 137878654, 127878654, 97878653, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-14 10:28:00', '', ''),
(19, 920902018762, 'fauzana', 'ai110808', 'Farah Fauzana', 'Ab Rahim Latif', 'Jalan Long Yunus Kota Bharu', 'ffauzana@gmail.com', 187878654, 139291030, 77878654, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-17 08:43:05', '', ''),
(20, 901018016522, 'janna', 'ci130011', 'janna nick', 'jallaludin hassan', 'Taman Melawati Shah Alam', 'jannanick@gmail.com', 196543211, 1137878961, 75435432, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-18 10:18:19', '', ''),
(24, 910112016542, 'suzana', 'ai110810', 'Fatin Suzana', 'Ab Salam Majid', '', 'suzana@gmail.com', 197878654, 167878654, 77878651, '81dc9bdb52d04dc20036dbd8313ed055', '2016-07-27 10:01:49', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `loguser`
--
ALTER TABLE `loguser`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`nric`),
  ADD KEY `icno` (`icno`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_action`
--
ALTER TABLE `staff_action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `icno` (`icno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`icno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `tahun` (`tahun`,`kelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nric` (`nric`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `cod` (`cod`),
  ADD KEY `ssss` (`ssss`,`katalaluan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loguser`
--
ALTER TABLE `loguser`
  MODIFY `log_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_action`
--
ALTER TABLE `staff_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`icno`) REFERENCES `student` (`icno`) ON DELETE NO ACTION;

--
-- Constraints for table `staff_action`
--
ALTER TABLE `staff_action`
  ADD CONSTRAINT `staff_action_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin` (`username`),
  ADD CONSTRAINT `staff_action_ibfk_2` FOREIGN KEY (`icno`) REFERENCES `student` (`icno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
