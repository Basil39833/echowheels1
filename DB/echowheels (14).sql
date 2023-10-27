-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 12:18 PM
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
  `booking_date` datetime NOT NULL,
  `rent_hours` time NOT NULL,
  `total` varchar(50) NOT NULL,
  `payment` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `scooter_name`, `scooter_category`, `scooter_color`, `scooter_id`, `scooter_rate`, `user_name`, `user_email`, `pickup_station`, `drop_station`, `booking_date`, `rent_hours`, `total`, `payment`, `status`, `code`) VALUES
(84, '450X', 'Normal', 'Red', 13, '100', 'Basil', 'basilkreji14@gmail.com', 'Pulinchodu', 'Palarivattom', '2023-10-26 12:23:08', '10:53:00', '1000', 0, 1, '4567'),
(87, '450X', 'Normal', 'Red', 13, '100', 'Benson', 'benson123@gmail.com', 'Companypady', 'JLN Stadium', '2023-10-27 07:38:39', '02:08:00', '200', 0, 1, '7890');

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
(23, 'website', 'website is to slow', 'website', '2023-10-27', 'basilkreji14@gmail.com', '0', '');

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
  `booking_date` datetime NOT NULL,
  `extend_rent_hour` time NOT NULL,
  `extend_total` varchar(50) NOT NULL,
  `extend_payment` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extendbooking`
--

INSERT INTO `extendbooking` (`extend_id`, `booking_id`, `scooter_name`, `scooter_id`, `scooter_rate`, `user_name`, `user_email`, `pickup_station`, `drop_station`, `booking_date`, `extend_rent_hour`, `extend_total`, `extend_payment`, `status`) VALUES
(31, 84, '450X', '13 ', '100', 'Basil', 'basilkreji14@gmail.com', 'Pulinchodu', 'Palarivattom', '2023-10-26 12:23:57', '04:53:00', '400', 0, 1),
(32, 84, '450X', '13 ', '100', 'Benson', 'benson123@gmail.com', 'Pulinchodu', 'Palarivattom', '2023-10-27 07:39:43', '03:09:00', '300', 0, 1);

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
(12, 31, 400, '2023-10-26 12:24:32'),
(13, 32, 300, '2023-10-27 07:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `reply` varchar(70) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `email_id`, `description`, `date`, `reply`, `message`) VALUES
(2, 'benson123@gmail.com', 'I had a nice experience while driving the scooter', '2023-10-14', '1', 'Thank you for your valuable feedback'),
(3, 'basilkreji14@gmail.com', 'nice experience ', '2023-10-26', '1', 'thank you'),
(4, 'basilkreji14@gmail.com', 'nice services', '2023-10-27', '0', '');

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
('benson123@gmail.com', 'benson', '1', '1');

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
  `sendtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `email`, `otp`, `expiry`, `sendtime`) VALUES
(0, 'basilkreji14@gmail.com', '660301', '2023-10-27 12:29:31', '0000-00-00 00:00:00');

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
(28, '84', '1000', '2023-10-26 12:23:41'),
(29, '87', '200', '2023-10-27 07:39:17');

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
(11, 's1proimage.jpeg', 's1 pro', 'Top', '2022', 'Echo', 'kl-17-2022', 'Mat', '2', 'Well maintained', '100'),
(12, 's1progen2image.png', 's1ProGen2', 'Top', '2022', 'Echo', 'kl-17-2022', 'Black', '2', 'well maintained', '100'),
(13, '450xgen3image.jpeg', '450X', 'Normal', '2022', 'Echo', 'kl-17-2022', 'Red', '2', 'well maintained', '100');

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
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`first_name`, `last_name`, `contact`, `email_id`, `house_name`, `street_name`, `district_name`, `state_name`, `pincode`, `date_of_birth`) VALUES
('Basil', 'k reji', '6238813582', 'basilkreji14@gmail.com', 'kuruttampurathu', 'pampakuda', 'Ernakulam', 'kerala', 686667, '2022-03-24'),
('Benson', 'k reji', '7561866943', 'benson123@gmail.com', 'kuruttampurathu', 'pampakuda', 'Ernakulam', 'Kerala', 686667, '2023-09-06');

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

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
  MODIFY `booking_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `extendbooking`
--
ALTER TABLE `extendbooking`
  MODIFY `extend_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `extendpayment`
--
ALTER TABLE `extendpayment`
  MODIFY `extendpayment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metrostations`
--
ALTER TABLE `metrostations`
  MODIFY `metrostation_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
