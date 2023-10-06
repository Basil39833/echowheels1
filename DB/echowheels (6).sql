-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 12:35 PM
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
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `reply` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `title`, `description`, `type`, `date`, `email_id`, `reply`) VALUES
(14, 'scooter tire', 'scooters tire have to be changed ', 'scooter', '2023-10-01', 'benson123@gmail.com', '1'),
(15, 'scooter service', 'scooter have to be serviced', 'servive', '2023-10-01', 'benson123@gmail.com', '1');

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
-- Table structure for table `hour`
--

CREATE TABLE `hour` (
  `hour_id` int(11) NOT NULL,
  `hour` time NOT NULL,
  `day` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hour`
--

INSERT INTO `hour` (`hour_id`, `hour`, `day`) VALUES
(3, '01:00:00', '0'),
(4, '01:30:00', '0'),
(5, '02:00:00', '0'),
(6, '02:30:00', '0'),
(7, '03:00:00', '0'),
(8, '03:30:00', '0'),
(9, '04:00:00', '0'),
(10, '05:00:00', '0');

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
(11, 's1proimage.jpeg', 's1 pro', 'Top', '2022', 'Echo', 'kl-17-2022', 'Mat Green', '5', 'well maintained', '90/hr'),
(12, 's1progen2image.png', 's1 progen2', 'Top', '2022', 'Echo', 'kl-17-2022', 'Black', '5', 'well maintained', '90/hr'),
(13, '450xgen3image.jpeg', '450X', 'Normal', '2022', 'Echo', 'kl-17-2022', 'Red', '5', 'well maintained', '70/hr');

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
('Benson', 'k   reji', '7561866943', 'benson123@gmail.com', 'kuruttampurathu', 'pampakuda', 'Ernakulam', 'Kerala', 686667, '2023-09-06');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `hour`
--
ALTER TABLE `hour`
  ADD PRIMARY KEY (`hour_id`);

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
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hour`
--
ALTER TABLE `hour`
  MODIFY `hour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `metrostations`
--
ALTER TABLE `metrostations`
  MODIFY `metrostation_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
