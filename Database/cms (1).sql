-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 04:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adId` int(11) NOT NULL,
  `adName` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adId`, `adName`, `email`, `password`) VALUES
(1, 'Sanka', 'sanka@gmail.com', 'abc12'),
(2, 'Pulasthi', 'pulasthi@gmail.com', 'pula12'),
(3, 'Ishan', 'ishan@gmail.com', 'ishan12');

-- --------------------------------------------------------

--
-- Table structure for table `coustomer`
--

CREATE TABLE `coustomer` (
  `cusId` int(5) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `nicNumber` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coustomer`
--

INSERT INTO `coustomer` (`cusId`, `firstName`, `lastName`, `mobileNumber`, `nicNumber`, `email`, `address`, `password`) VALUES
(1, 'yomal', 'dulanjana', 776263388, '2147483647', 'asd@gmail.com', 'kegalle,galigamuwa', 'test1'),
(5, 'Asanka', 'Nuwan', 717905316, '2147483647', 'amaamashagangani@gmail.com', 'kegalle,rambukkana.', 'yoma1'),
(6, 'Dimagi', 'Piumika', 177207316, '200023500896', 'dimagi@gmail.com', 'Nugegoda,Colombo', 'dima12');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `prId` int(11) NOT NULL,
  `cusId` int(11) NOT NULL,
  `prName` varchar(50) NOT NULL,
  `prType` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `prDetails` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`prId`, `cusId`, `prName`, `prType`, `location`, `prDetails`) VALUES
(1, 1, 'Yoma lhouse', 'house', 'colombo', '19priceBuy It Now!Buy It Now!\r\nAn interesting form of a house, 10 by 10 meters in basis, with the first floor rotated by 45 degrees, offering a unique and modern look which everyone will envy on. It is designed for a peaceful and natural ambience, with a pool by the house. On the ground floor, there is a living room, looking out towards the pool area. There is also a bar between the living room and the dining room, kitchen and pantry. On the first floor, there are three bedrooms, a bathroom with a Jacuzzi and a toilet. All bedrooms have terraces. The built-up area of the house is 100 m2'),
(4, 5, 'Asanka house', 'house', 'kandy', '24priceBuy It Now!Buy It Now!\r\nA modern house designed for a location on the coast of a sea or lake, with a unique and modern exterior which will fit perfectly into the environment. There is an open swimming pool by the house, and the built-up area of the house is 190 m2. On the ground floor, there is a unique living room with a beautiful view. The kitchen and the living room are divided by a bar, and the dining room is separated and it has a great view of the yard. There is also a gym, which can be adapted and turned into a study or a bedroom. Upstairs, there are two bedrooms with terraces with a fabulous view over the sea or lake, and a master bathroom with a Jacuzzi.'),
(5, 6, 'Dima House', 'house', 'Nugegoda', '34priceBuy It Now!Buy It Now!\r\nThis house is for those who appreciate a modern and brave style. The design of the house is upside down from any other house. It is rectangular in basis, the living and the dining room are looking at the pool and garden area. The house has two floors, each with two bedrooms, a bathroom and a storage room. The built-up area of the basis of the house is 80 m2.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adId`);

--
-- Indexes for table `coustomer`
--
ALTER TABLE `coustomer`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`prId`),
  ADD KEY `cusId` (`cusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coustomer`
--
ALTER TABLE `coustomer`
  MODIFY `cusId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `prId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`cusId`) REFERENCES `coustomer` (`cusId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
