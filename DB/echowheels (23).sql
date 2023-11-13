-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 06:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echowheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(50) NOT NULL,
  `scooter_name` varchar(50) NOT NULL,
  `scooter_category` varchar(50) NOT NULL,
  `scooter_color` varchar(50) NOT NULL,
  `scooter_id` int(11) NOT NULL,
  `scooter_rate` varchar(50) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `pickup_station` varchar(70) NOT NULL,
  `drop_station` varchar(70) NOT NULL,
  `booking_date` date NOT NULL,
  `rent_hours` time NOT NULL,
  `total` varchar(50) NOT NULL,
  `payment` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `scooter_name`, `scooter_category`, `scooter_color`, `scooter_id`, `scooter_rate`, `user_name`, `user_email`, `pickup_station`, `drop_station`, `booking_date`, `rent_hours`, `total`, `payment`, `status`) VALUES
(97, 's1', 'Top', 'Mat', 11, '100', 'Benson', 'benson123@gmail.com', 'Aluva', 'Pettah', '2023-10-28', '10:02:00', '1000', 1, 2),
(98, 's1ProGen2', 'Top', 'Black', 12, '100', 'Basil', 'basilshajan555@gmail.com', 'Aluva', 'Town Hall', '2023-10-30', '03:14:00', '300', 1, 2),
(104, '450X', 'Normal', 'Red', 13, '100', 'Benson', 'benson123@gmail.com', 'Palarivattom', 'Town Hall', '2023-11-16', '07:25:00', '700', 1, 2),
(105, 's1ProGen2', 'Top', 'Black', 12, '100', 'Benson', 'benson123@gmail.com', 'Changampuzha Park', 'MG Road', '2023-10-31', '09:32:00', '900', 1, 2),
(110, '450X', 'Normal', 'Red', 13, '80', 'Benson', 'basilkreji14@gmail.com', 'Kaloor', 'Kadavanthra', '2023-11-04', '02:31:00', '160', 1, 2),
(129, 's1Pro Gen2', 'Top', 'Black', 12, '200', 'eldho', 'eldhowilson22@gmail.com', 'CUSAT', 'Ernakulam South', '2023-11-10', '02:45:00', '400', 1, 2),
(130, '450X', 'Normal', 'Red', 13, '100', 'Benson', 'benson123@gmail.com', 'Palarivattom', 'Ernakulam South', '2023-11-09', '02:50:00', '200', 1, 2),
(131, 's1Pro Gen2', 'Normal', 'Black', 12, '100', 'Basil', 'basilkreji14@gmail.com', 'CUSAT', 'Town Hall', '2023-11-11', '03:02:00', '300', 1, 2),
(132, 's1pro', 'Normal', 'Mat Green', 11, '100', 'Basil', 'basilkreji14@gmail.com', 'MG Road', 'Maharaja’s College', '2023-11-11', '05:09:00', '500', 1, 2),
(134, 's1pro', 'Normal', 'Mat Green', 11, '100', 'Basil', 'basilkreji14@gmail.com', 'Pathadipalam', 'JLN Stadium', '2023-11-11', '08:02:00', '800', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `reply` varchar(10) NOT NULL,
  `message` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `title`, `description`, `type`, `date`, `email_id`, `reply`, `message`) VALUES
(18, 'scooter tyre', 'tyre have to be changed', 'scooter', '2023-10-07', 'benson123@gmail.com', '1', 'kk we will work on it'),
(19, 'service', 'scooter should be serviced', 'service', '2023-10-07', 'benson123@gmail.com', '1', 'kk we will work on it'),
(20, 'website', 'website should be more colour full', 'website', '2023-10-07', 'benson123@gmail.com', '1', 'kk we will work on it'),
(22, 'scooter tyre', 'tyre have to be changed', 'scooter', '2023-10-26', 'basilkreji14@gmail.com', '1', 'we will work on it'),
(23, 'website', 'website is to slow', 'website', '2023-10-27', 'basilkreji14@gmail.com', '1', 'kk we will work on it'),
(24, 'scooter', 'scooter have to be serviced', 'scooter', '2023-11-11', 'basilkreji14@gmail.com', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
(1, 'Kasaragod'),
(2, 'Kannur'),
(3, 'Wayanad'),
(4, 'Kozhikode'),
(5, 'Malappuram'),
(6, 'Palakkad'),
(7, 'Thrissur'),
(8, 'Ernakulam'),
(9, 'Idukki'),
(10, 'Kottayam'),
(11, 'Alappuzha'),
(12, 'Pathanamthitta'),
(13, 'Kollam'),
(14, 'Thiruvananthapuram');

-- --------------------------------------------------------

--
-- Table structure for table `extendbooking`
--

CREATE TABLE `extendbooking` (
  `extend_id` int(50) NOT NULL,
  `booking_id` int(50) NOT NULL,
  `scooter_name` varchar(50) NOT NULL,
  `scooter_id` varchar(50) NOT NULL,
  `scooter_rate` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `pickup_station` varchar(50) NOT NULL,
  `drop_station` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `extend_rent_hour` time NOT NULL,
  `extend_total` varchar(50) NOT NULL,
  `extend_payment` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extendbooking`
--

INSERT INTO `extendbooking` (`extend_id`, `booking_id`, `scooter_name`, `scooter_id`, `scooter_rate`, `user_name`, `user_email`, `pickup_station`, `drop_station`, `booking_date`, `extend_rent_hour`, `extend_total`, `extend_payment`, `status`) VALUES
(12, 97, 's1', '11 ', '100', 'Benson', 'benson123@gmail.com', 'Aluva', 'Pettah', '2023-10-28', '02:03:00', '200', 1, 2),
(14, 105, 's1ProGen2', '12 ', '100', 'Benson', 'benson123@gmail.com', 'Changampuzha', 'MG', '2023-10-31', '07:37:00', '700', 1, 2),
(15, 113, 's1ProGen2', '12 ', '100', 'Basil', 'basilkreji14@gmail.com', 'Aluva', 'Pathadipalam', '2023-11-06', '03:48:00', '300', 1, 2),
(16, 115, '450X', '13 ', '100', 'Basil', 'basilkreji14@gmail.com', 'Companypady', 'MG', '2023-11-06', '01:55:00', '100', 1, 2),
(20, 132, 's1pro', '11 ', '100', 'Basil', 'basilkreji14@gmail.com', 'MG Road', 'Maharaja’s College', '2023-11-11', '03:14:00', '300', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `extendpayment`
--

CREATE TABLE `extendpayment` (
  `extendpayment_id` int(50) NOT NULL,
  `extendbooking_id` int(50) NOT NULL,
  `extend_amount` int(50) NOT NULL,
  `paid_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extendpayment`
--

INSERT INTO `extendpayment` (`extendpayment_id`, `extendbooking_id`, `extend_amount`, `paid_date`) VALUES
(25, 12, 200, '2023-10-28 12:34:05'),
(26, 14, 700, '2023-10-31 12:10:07'),
(27, 15, 300, '2023-11-06 10:19:36'),
(28, 16, 100, '2023-11-06 10:26:24'),
(29, 17, 700, '2023-11-06 10:59:35'),
(30, 17, 700, '2023-11-06 11:00:20'),
(31, 20, 300, '2023-11-11 08:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email_id`, `password`, `user_type`, `user_status`) VALUES
('admin1234@gmail.com', 'admin1234', '0', '1'),
('basilkreji14@gmail.com', 'basil', '1', '1'),
('basilshajan55@gmail.com', 'shajan', '1', '1'),
('benson123@gmail.com', 'benson', '1', '1'),
('eldhowilson22@gmail.com', '12345678', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `metrostations`
--

CREATE TABLE `metrostations` (
  `metrostation_id` int(50) NOT NULL,
  `metrostation_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metrostations`
--

INSERT INTO `metrostations` (`metrostation_id`, `metrostation_name`) VALUES
(1, 'Aluva'),
(2, 'Pulinchodu'),
(3, 'Companypady'),
(4, 'Ambattukavu'),
(5, 'Muttom'),
(6, 'Kalamassery'),
(7, 'CUSAT'),
(8, 'Pathadipalam'),
(9, 'Edapally'),
(10, 'Changampuzha Park'),
(11, 'Palarivattom'),
(12, 'JLN Stadium'),
(13, 'Kaloor'),
(14, 'Town Hall'),
(15, 'MG Road'),
(16, 'Maharaja’s College'),
(17, 'Ernakulam South'),
(18, 'Kadavanthra'),
(19, 'Elamkulam'),
(20, 'Vyttila'),
(21, 'Thaikoodam'),
(22, 'Pettah'),
(23, 'Vadakkekotta'),
(24, 'SN Junction');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `expiry` varchar(50) NOT NULL,
  `sendtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `email`, `otp`, `expiry`, `sendtime`) VALUES
(9, 'basilkreji14@gmail.com', '232774', '2023-10-28 07:24:35', '2023-10-28 05:09:56'),
(10, 'basilkreji14@gmail.com', '351259', '2023-10-28 07:26:07', '2023-10-28 05:11:21'),
(11, 'basilshajan555@gmail.com', '326803', '2023-10-30 06:04:59', '2023-10-30 04:50:03'),
(12, 'basilkreji14@gmail.com', '412047', '2023-11-06 17:08:27', '2023-11-06 15:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(50) NOT NULL,
  `booking_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `paid_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `booking_id`, `amount`, `paid_date`) VALUES
(38, '97', '1000', '2023-10-28 12:33:08'),
(39, '98', '300', '2023-10-30 05:45:21'),
(40, '104', '700', '2023-10-31 11:58:00'),
(41, '105', '900', '2023-10-31 12:03:26'),
(42, '107', '240', '2023-11-04 09:59:07'),
(64, '129', '400', '2023-11-09 08:19:41'),
(65, '130', '200', '2023-11-09 09:21:49'),
(66, '131', '300', '2023-11-11 08:33:32'),
(67, '132', '500', '2023-11-11 08:39:41'),
(68, '134', '800', '2023-11-11 13:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(40) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `scooter_name` varchar(50) NOT NULL,
  `scooter_category` varchar(50) NOT NULL,
  `scooter_model_year` varchar(50) NOT NULL,
  `scooter_brand` varchar(50) NOT NULL,
  `scooter_plate_number` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `image`, `scooter_name`, `scooter_category`, `scooter_model_year`, `scooter_brand`, `scooter_plate_number`, `color`, `stock`, `description`, `amount`) VALUES
(11, 's1proimage.jpeg', 's1pro', 'Normal', '2022', 'Echo', 'kl-17-2022', 'Mat Green', '4', 'Well maintained', '100'),
(12, 's1progen2image.png', 's1Pro Gen2', 'Normal', '2022', 'Echo', 'kl-17-2022', 'Black', '5', 'well maintained', '100'),
(13, '450xgen3image.jpeg', '450X', 'Normal', '2022', 'Echo', 'kl-17-2022', 'Red', '5', 'well maintained', '100');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `review_id` int(11) NOT NULL,
  `scooter_id` int(11) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`review_id`, `scooter_id`, `email_id`, `rating`, `review`) VALUES
(1, 11, 'basilkreji14@gmail.com', 3, 'good'),
(2, 12, 'basilkreji14@gmail.com', 4, 'good'),
(3, 13, 'basilkreji14@gmail.com', 3, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `house_name` varchar(30) NOT NULL,
  `street_name` varchar(30) NOT NULL,
  `district_name` varchar(20) NOT NULL,
  `state_name` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profilepicture` varchar(100) NOT NULL DEFAULT 'pic.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`first_name`, `last_name`, `contact`, `email_id`, `house_name`, `street_name`, `district_name`, `state_name`, `pincode`, `date_of_birth`, `profilepicture`) VALUES
('Basil', 'k reji', '6238813582', 'basilkreji14@gmail.com', 'kuruttampurathu', 'pampakuda', 'Ernakulam', 'kerala', 686667, '2022-03-24', 'IMG_3423_mr1685214100254_mh1685216492852.jpg'),
('basil', 'shajan', '6767685789', 'basilshajan55@gmail.com', 'kkkk', 'yyyy', 'Alappuzha', 'hhh', 898988, '2014-09-25', 'pic.jpg'),
('Benson', 'k reji', '7561866943', 'benson123@gmail.com', 'kuruttampurathu', 'pampakuda', 'Ernakulam', 'kerala', 686667, '2006-05-23', '20230614_113724 (3).jpg'),
('eldho', 'wilson', '9074288916', 'eldhowilson22@gmail.com', 'house', 'aaa', 'Ernakulam', 'kerala', 686667, '2003-04-22', 'pic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `extendbooking`
--
ALTER TABLE `extendbooking`
  ADD PRIMARY KEY (`extend_id`);

--
-- Indexes for table `extendpayment`
--
ALTER TABLE `extendpayment`
  ADD PRIMARY KEY (`extendpayment_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `metrostations`
--
ALTER TABLE `metrostations`
  ADD PRIMARY KEY (`metrostation_id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `extendbooking`
--
ALTER TABLE `extendbooking`
  MODIFY `extend_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `extendpayment`
--
ALTER TABLE `extendpayment`
  MODIFY `extendpayment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `metrostations`
--
ALTER TABLE `metrostations`
  MODIFY `metrostation_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
