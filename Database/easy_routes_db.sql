-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 09:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_routes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_vehicle`
--

CREATE TABLE `available_vehicle` (
  `av_id` int(100) NOT NULL,
  `av_v_type` varchar(30) NOT NULL,
  `av_v_number` varchar(30) NOT NULL,
  `start_point` varchar(30) NOT NULL,
  `end_point` varchar(30) NOT NULL,
  `dep_time` varchar(30) NOT NULL,
  `arr_time` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `free_seat` int(100) NOT NULL,
  `free_seat_index` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_vehicle`
--

INSERT INTO `available_vehicle` (`av_id`, `av_v_type`, `av_v_number`, `start_point`, `end_point`, `dep_time`, `arr_time`, `date`, `free_seat`, `free_seat_index`) VALUES
(1, 'bus', 'GL-001', 'Dhaka', 'Chittagong', '12:00 AM', '8:00 PM', '2022-12-31', 40, '0000000000000000000000000000000000000000'),
(2, 'bus', 'SS-001', 'Dhaka', 'Chittagong', '2:00 PM', '10:00 PM', '2022-12-31', 14, '0000001111111111111111111111111100000000'),
(3, 'bus', 'SS-002', 'Chittagong', 'Dhaka', '10:00 AM', '8:00 PM', '2022-12-31', 20, '0001111111111000000000000111111111100000'),
(4, 'bus', 'HE-001', 'Chittagong', 'Dhaka', '10:00 AM', '8:00 PM', '2022-12-30', 24, '0101001000000111111111111000000000000001'),
(5, 'bus', 'HE-002', 'Chittagong', 'Dhaka', '08:00 AM', '04:00 PM', '2022-12-31', 24, '0101001000000111111111111000000000000001'),
(6, 'bus', 'HE-003', 'Dhaka', 'Chittagong', '10:00 PM', '05:00 AM', '2022-12-30', 34, '0000111000000100000000000001000000000001'),
(7, 'bus', 'HE-003', 'Dhaka', 'Chittagong', '11:00 AM', '7:00 PM', '2023-01-02', 40, '0000000000000000000000000000000000000000');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `b_id` int(100) NOT NULL,
  `b_p_name` varchar(100) NOT NULL,
  `b_p_gender` varchar(100) NOT NULL,
  `b_p_mobile` varchar(100) NOT NULL,
  `b_p_email` varchar(100) NOT NULL,
  `b_p_seat` varchar(100) NOT NULL,
  `b_total_fare` int(100) NOT NULL,
  `b_user_name` varchar(100) NOT NULL,
  `b_v_type` varchar(100) NOT NULL,
  `b_v_number` varchar(100) NOT NULL,
  `b_start_point` varchar(100) NOT NULL,
  `b_end_point` varchar(100) NOT NULL,
  `b_dep_time` varchar(100) NOT NULL,
  `b_arr_time` varchar(100) NOT NULL,
  `b_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`b_id`, `b_p_name`, `b_p_gender`, `b_p_mobile`, `b_p_email`, `b_p_seat`, `b_total_fare`, `b_user_name`, `b_v_type`, `b_v_number`, `b_start_point`, `b_end_point`, `b_dep_time`, `b_arr_time`, `b_date`) VALUES
(1, 'ab cd', 'male', '11', '11', 'A1 A2 B1 B2', 3800, 'Text_User', '0', '0', '0', '0', '2', '10', '0000-00-00'),
(2, 'Jabed  Iqbal ', 'male', '01837844828', 'joy', 'A1 A2 B1 B2', 5600, 'Jabed Iqbal Joy', 'bus', 'Hanif Enterprise', 'Dhaka', 'Chittagong', '11:00 AM', '7:00 PM', '2023-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `destination_id` int(11) NOT NULL,
  `destination_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`destination_id`, `destination_name`) VALUES
(1, 'Dhaka'),
(2, 'Faridpur'),
(3, 'Gazipur'),
(4, 'Gopalganj'),
(5, 'Jamalpur'),
(6, 'Kishoreganj'),
(7, 'Madaripur'),
(8, 'Manikganj'),
(9, 'Munshiganj'),
(10, 'Mymensingh'),
(11, 'Narayanganj'),
(12, 'Narsingdi'),
(13, 'Netrokona'),
(14, 'Rajbari'),
(15, 'Shariatpur'),
(16, 'Sherpur'),
(17, 'Tangail'),
(18, 'Bogra'),
(19, 'Joypurhat'),
(20, 'Naogaon'),
(21, 'Natore'),
(22, 'Nawabganj'),
(23, 'Pabna'),
(24, 'Rajshahi'),
(25, 'Sirajgonj'),
(26, 'Dinajpur'),
(27, 'Gaibandha'),
(28, 'Kurigram'),
(29, 'Lalmonirhat'),
(30, 'Nilphamari'),
(31, 'Panchagarh'),
(32, 'Rangpur'),
(33, 'Thakurgaon'),
(34, 'Barguna'),
(35, 'Barisal'),
(36, 'Bhola'),
(37, 'Jhalokati'),
(38, 'Patuakhali'),
(39, 'Pirojpur'),
(40, 'Bandarban'),
(41, 'Brahmanbaria'),
(42, 'Chandpur'),
(43, 'Chittagong'),
(44, 'Comilla'),
(45, 'Cox”s'),
(46, 'Bazar'),
(47, 'Feni'),
(48, 'Khagrachari'),
(49, 'Lakshmipur'),
(50, 'Noakhali'),
(51, 'Rangamati'),
(52, 'Habiganj'),
(53, 'Maulvibazar'),
(54, 'Sunamganj'),
(55, 'Sylhet'),
(56, 'Bagerhat'),
(57, 'Chuadanga'),
(58, 'Jessore'),
(59, 'Jhenaidah'),
(60, 'Khulna'),
(61, 'Kushtia'),
(62, 'Magura'),
(63, 'Meherpur'),
(64, 'Narail');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_user_name` varchar(100) NOT NULL,
  `u_mobile` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `user_type` varchar(30) NOT NULL DEFAULT 'user',
  `u_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_user_name`, `u_mobile`, `u_pass`, `user_type`, `u_img`) VALUES
(1, '1', '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'user', 'Screenshot (216).png'),
(2, '2', '2', '2', 'c81e728d9d4c2f636f067f89cc14862c', 'user', 'Screenshot (216).png'),
(3, 'Jabed Iqbal Joy', 'joy12', '01837844828', 'c4ca4238a0b923820dcc509a6f75849b', 'user', 'pic-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `v_id` int(100) NOT NULL,
  `v_type` varchar(30) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `v_number` varchar(30) NOT NULL,
  `v_class` varchar(30) NOT NULL,
  `v_total_seat` int(100) NOT NULL,
  `v_fare_per_seat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `v_type`, `v_name`, `v_number`, `v_class`, `v_total_seat`, `v_fare_per_seat`) VALUES
(1, 'bus', 'Green Line Paribahan', 'GL-001', 'AC', 40, 1600),
(2, 'bus', 'Hanif Enterprise', 'HE-001', 'AC', 40, 1400),
(3, 'bus', 'Hanif Enterprise', 'HE-002', 'AC', 40, 1400),
(4, 'bus', 'Hanif Enterprise', 'HE-003', 'AC', 40, 1400),
(5, 'bus', 'Soudia Coach Service', 'SS-001', 'AC', 40, 950),
(6, 'bus', 'Soudia Coach Service', 'SS-002', 'AC', 40, 950);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_vehicle`
--
ALTER TABLE `available_vehicle`
  ADD PRIMARY KEY (`av_id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_mobile` (`u_mobile`),
  ADD UNIQUE KEY `u_user_name` (`u_user_name`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_id`),
  ADD UNIQUE KEY `v_number` (`v_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_vehicle`
--
ALTER TABLE `available_vehicle`
  MODIFY `av_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `v_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
