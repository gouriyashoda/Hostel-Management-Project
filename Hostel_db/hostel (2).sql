-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 11:08 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

CREATE TABLE `academic_details` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(40) NOT NULL,
  `yoj` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `date_of_admission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`id`, `reg_id`, `yoj`, `course`, `sem`, `date_of_admission`) VALUES
(3, '124', '2021', 'BCA', '4', '2022-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_details`
--

CREATE TABLE `attendance_details` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `reg_id` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `sem` int(11) NOT NULL,
  `course` varchar(40) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(50) NOT NULL,
  `attendance_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_details`
--

INSERT INTO `attendance_details` (`id`, `date`, `reg_id`, `name`, `sem`, `course`, `month`, `year`, `attendance_status`) VALUES
(4, '0000-00-00', '124', '', 0, '', 'june', '2022', 'present'),
(5, '0000-00-00', '125', '', 0, '', 'june', '2022', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `enroll_student`
--

CREATE TABLE `enroll_student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gaurdian_name` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `parents_contact_no` varchar(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `block_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll_student`
--

INSERT INTO `enroll_student` (`id`, `first_name`, `last_name`, `dob`, `age`, `gender`, `c_address`, `p_address`, `phone`, `mobile`, `email`, `gaurdian_name`, `occupation`, `parents_contact_no`, `course`, `sem`, `block_name`) VALUES
(2, 'yashoda', 'G', '2001-08-13', '21', 'on', 'Dharwad', 'Belagavi', '2147483647', '2147483647', 'gouriyashoda@gmail.com', 'Basavaraj', 'Farmer', '2147483647', 'BCA', '6', '0'),
(3, 'Rani', 'I', '2001-05-15', '21', 'on', 'Dharwad', 'Belagavi', '2147483647', '2147483647', 'Ranibi@gmail.com', 'Babu', 'Farmer', '2147483647', 'BCA', '6', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(40) NOT NULL,
  `about_service` varchar(200) NOT NULL,
  `about_food` varchar(200) NOT NULL,
  `cleanliness` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `labour_details`
--

CREATE TABLE `labour_details` (
  `id` int(11) NOT NULL,
  `labour_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wages_per_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`) VALUES
('admin', '1111', 'admin'),
('user', '2222', 'user'),
('gouriyashoda733@gmail.com', '9876', 'student'),
('yashodagouri733@gmail.com', '890', 'student'),
('gouriyashoda@gmail.com', '12345', 'student'),
('rishwarashetty@gmail.com', '12345', 'admin'),
('ranib2320@gmail.com', '5678', 'student'),
('rishwarashetti@gmail.com', '5678', 'student'),
('mess', '6789', 'mess');

-- --------------------------------------------------------

--
-- Table structure for table `mess_bill`
--

CREATE TABLE `mess_bill` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(40) NOT NULL,
  `no_of_presence` int(11) NOT NULL,
  `mess_bill` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess_bill`
--

INSERT INTO `mess_bill` (`id`, `reg_id`, `no_of_presence`, `mess_bill`, `payment_status`, `month`, `year`, `date`) VALUES
(1, '123', 25, '2800', 'paid', 'june', '2022', '2022-06-05'),
(2, '0', 0, '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `otp`, `status`) VALUES
(1, 599292303, 'inactive'),
(2, 127547539, 'inactive'),
(3, 1113032419, 'inactive'),
(4, 364534842, 'inactive'),
(5, 270824455, 'inactive'),
(6, 813210340, 'inactive'),
(7, 1765760521, 'active'),
(8, 196781461, 'active'),
(9, 9631, 'active'),
(10, 7015, 'active'),
(11, 2668, 'active'),
(12, 2507, 'active'),
(13, 1854, 'active'),
(14, 3547, 'active'),
(15, 5864, 'active'),
(16, 1852, 'active'),
(17, 4184, 'active'),
(18, 6593, 'active'),
(19, 2103, 'active'),
(20, 3439, 'active'),
(21, 1797, 'active'),
(22, 4691, 'active'),
(23, 4987, 'active'),
(24, 6919, 'active'),
(25, 6113, 'active'),
(26, 5162, 'active'),
(27, 9083, 'active'),
(28, 3604, 'active'),
(29, 2400, 'active'),
(30, 1609, 'active'),
(31, 3917, 'active'),
(32, 3794, 'active'),
(33, 8859, 'active'),
(34, 2631, 'active'),
(35, 8657, 'active'),
(36, 5044, 'active'),
(37, 1693, 'active'),
(38, 2380, 'active'),
(39, 4555, 'active'),
(40, 6676, 'active'),
(41, 8455, 'active'),
(42, 5428, 'active'),
(43, 7500, 'active'),
(44, 7760, 'active'),
(45, 4976, 'active'),
(46, 8154, 'active'),
(47, 7512, 'active'),
(48, 4872, 'active'),
(49, 2230, 'active'),
(50, 3217, 'active'),
(51, 5486, 'active'),
(52, 4870, 'active'),
(53, 5670, 'active'),
(54, 3318, 'active'),
(55, 8118, 'active'),
(56, 3503, 'active'),
(57, 5285, 'active'),
(58, 2495, 'active'),
(59, 1182, 'active'),
(60, 5999, 'active'),
(61, 9674, 'active'),
(62, 1500, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(40) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `paid` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `payment_date` date NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`id`, `reg_id`, `total_amount`, `paid`, `balance`, `payment_date`, `month`, `year`) VALUES
(1, '0', '', '', '', '0000-00-00', '', ''),
(2, '123', '500', '300', '200', '2022-06-05', 'june', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `permanant_address` varchar(100) NOT NULL,
  `adhar_no` int(12) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `full_name`, `city`, `district`, `permanant_address`, `adhar_no`, `contact_no`, `email`, `status`) VALUES
(123, 'yashoda', 'Belagavi', '2022-06-23', 'dharwad', 2147483647, 2147483647, 'gouriyashoda@gmail.com', 'registered'),
(124, 'Rani', 'Ramdurg', 'Belagavi', 'bgm', 2147483647, 2147483647, 'ranibi@gmail.com', 'registered'),
(125, 'swati', 'Dharwad', 'Dharwad', 'Dwd', 2147483647, 2147483647, 'swati8907@gmail.com', 'registered'),
(126, 'Teja', 'Kittur', 'Belagavi', 'Kittur Belgavi', 2147483647, 2147483647, 'tejateja234@gmail.com', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `block_name` varchar(20) NOT NULL,
  `facilities` varchar(200) NOT NULL,
  `total_members` varchar(20) NOT NULL,
  `total_beds` varchar(20) NOT NULL,
  `remaining_beds` int(11) NOT NULL,
  `room_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`id`, `room_no`, `block_name`, `facilities`, `total_members`, `total_beds`, `remaining_beds`, `room_status`) VALUES
(1, 1, 'DRH', 'hot water,bed,chair,study table', '5', '5', 0, 'Full'),
(3, 2, 'sk', 'hot water,bed,chair,study table', '6', '8', 0, '2beds-Empty');

-- --------------------------------------------------------

--
-- Table structure for table `room_request`
--

CREATE TABLE `room_request` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `request_time` time NOT NULL,
  `request_status` varchar(50) NOT NULL,
  `booking_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_request`
--

INSERT INTO `room_request` (`id`, `reg_id`, `room_no`, `request_date`, `request_time`, `request_status`, `booking_status`) VALUES
(1, 123, 1, '2022-06-07', '00:00:10', 'pending', 'pending'),
(2, 0, 0, '0000-00-00', '00:00:00', '', ''),
(3, 123, 1, '2022-06-07', '00:00:10', 'pending', 'pending'),
(4, 123, 1, '2022-06-07', '00:00:12', 'pending', 'pending'),
(5, 123, 1, '2022-06-07', '10:30:00', 'pending', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll_student`
--
ALTER TABLE `enroll_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour_details`
--
ALTER TABLE `labour_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mess_bill`
--
ALTER TABLE `mess_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_request`
--
ALTER TABLE `room_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_details`
--
ALTER TABLE `academic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance_details`
--
ALTER TABLE `attendance_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enroll_student`
--
ALTER TABLE `enroll_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labour_details`
--
ALTER TABLE `labour_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mess_bill`
--
ALTER TABLE `mess_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_request`
--
ALTER TABLE `room_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
