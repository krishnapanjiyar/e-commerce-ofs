-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2020 at 06:03 AM
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
-- Database: `ofs`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'dairyandeggs'),
(2, 'meat'),
(0, 'produce'),
(3, 'snacks');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryID` varchar(255) NOT NULL,
  `productTypeID` varchar(255) NOT NULL,
  `productID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderDetail`
--

CREATE TABLE `orderDetail` (
  `orderID` varchar(255) NOT NULL,
  `productID` varchar(255) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderStatus`
--

CREATE TABLE `orderStatus` (
  `orderID` varchar(255) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `number_items` int(11) DEFAULT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `orderDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardNumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `secure` varchar(255) NOT NULL,
  `expiration` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productDetail`
--

CREATE TABLE `productDetail` (
  `productID` int(255) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `inventoryDate` date DEFAULT NULL,
  `URL_image` varchar(255) NOT NULL,
  `weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productDetail`
--

INSERT INTO `productDetail` (`productID`, `categoryID`, `productName`, `price`, `quantity`, `inventoryDate`, `URL_image`, `weight`) VALUES
(1, 1, 'Conestoga Eggs', 5.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1aU3xEY4wS973XJ52Vuq9wiKGAzXLRcou', 1.5),
(2, 1, 'Organic Vanilla Yogurt', 4.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1YIZob_gMT3I7WRwabXADHK_Y2-hkKixU', 1.5),
(3, 1, 'Organic Valley Whole Milk', 14.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1Do2p7JBnj7_n3MbyrS3Vc7eF4vOlo5oD', 3.5),
(4, 1, 'Organic Cured Butter', 8.69, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1p_UTsw2kVnWmQuUBHgJU3Z_vfNtxKDms', 0.5),
(5, 1, 'Organic Valley Cream Cheese', 2.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1JvnvyfBTDdgHIGmStuGY0yVqz7kaiiSN', 0.5),
(6, 1, 'Organic Heavy Cream Cheese', 6.17, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1goZcfJDohUD-a1-c57NgB5JJJc1dY1Qq', 0.95),
(7, 1, 'Pepper Jack Cheese', 4.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/13ADJMRmTKI9gn83D1x9LWQe6KICv-qGT', 0.5),
(8, 1, 'Organic Plain Yogurt', 3.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1iUz9f-8xyUHr2IR28lHEyn0Y_BQU13z6', 1.5),
(9, 1, 'Mozzarella String Cheese', 2.93, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1XFVX5YOFZHELKQH7s0DDRe4mPb0SHz4l', 0.25),
(10, 1, 'Lowfat Cottage Cheese', 6.17, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1rriK9myzzCkQIgGC1ihCKnTHtUmt1k1j', 0.5),
(11, 0, 'Honey Crisp Apples', 1.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1iMkRed1Hlg290co2vADVi4dPPXZ84Iiy', 1),
(12, 0, 'Organic Strawberries', 5.89, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1EBDgf5iCkXFZwYn0v9y638aUmC9', 1),
(13, 0, 'Organic Celery Bunch', 2.69, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/13uCfDI1BUsKZ4rlX-jeMrOYfv64NY-tR', 1),
(14, 0, 'Organic Lemons', 3.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1aND9I6-N9gLK8QbBHUWh6D3-Xp4svbVC', 1),
(15, 0, 'Organic Bananas', 4.49, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/17RilWgFLpC9g5KCs4DBTUF-UX6Y7Rs1j', 1),
(16, 0, 'Organic Carrots Bunch', 4.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/15qQbuTmslOFBlfPPMEJY_5i0Vg1R_znD', 1),
(17, 0, 'Organic Mangoes', 3.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1tLiHK0-pXQogYZh60FhKy91biaRGOp36', 1),
(18, 0, 'Organic Broccoli', 2.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1bia7rJ-km7-j9boH8QQ560sYLpacsySF', 1),
(19, 0, 'Organic Tomatoes', 2.12, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1oLb0JbGnJpodfD2WQEzaYwhiEue1HWUE', 1),
(20, 0, 'Organic Hass Avocados ', 2.79, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1niNPHAkVjOVGRJNNSydhsiCiojxcG1OU', 1),
(21, 2, 'Organic Tibble\'s Jerky ', 11.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1jKaXtJTBhXkqE8_y2JEv0TLDq9Xwq1_8', 1),
(22, 2, 'Organic Chicken Tenders', 6.59, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1BuAF-pvb4VUsXQzeBafFayIIoRuzS1E_', 1.5),
(23, 2, 'Boneless Beef Ribeye Steak', 14.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1BMDfhLwVHJj4TU6c5d0Ly759wfDX6BkY', 1),
(24, 2, 'Organic Uncured Ham ', 11.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1vrxU0ZG6hI8ql3oC14scN9K1i-x0EbpV', 1),
(25, 2, 'Organic Beef Sausage', 6.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1c5t3s2kBZ5yKVINf1niEk-_cKXOaauAE', 1),
(26, 2, 'Organic Turkey Bacon ', 8.48, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1fgy_0BqRhYbtNQVZ36CHdb0bavifRCT9', 1.5),
(27, 2, 'Organic Chicken Wings', 6.49, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1FlmJ9dAS8cp3LEcyUnHoaVJjdBCc7FP1', 1.5),
(28, 2, 'Organic Turkey Breast', 6.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/18RP4nJoZpH4_y63JRGvsE6D1ZtDpV55g', 1),
(29, 2, 'Organic Turkey Burger', 11.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1-6V43VSNFIWs0nWcK9fec_y4UHBuCV4f', 1),
(30, 2, 'Organic Chicken Breast', 5.49, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1FD51VZao1Cszz87va4ZeQ_NAkV-ObFSL', 1),
(31, 3, 'Organic Sea Salt Popcorn ', 3.69, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1HO3sZ15zI7r9UOxWbB8xykV1HPFr3bt5', 0.5),
(32, 3, 'Organic Coconut Snacks ', 3.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1A0r65X4-6VOH1LpyioyhGRRIvMczQNQ2', 0.5),
(33, 3, 'Organic Waffles', 3.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1uvPRkeCVnZn5hpRr3oFthj7S5EMUiSGN', 0.5),
(34, 3, 'Late July Crackers', 3.79, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1_krupv_Dex6eiEYt46QWgzSriSnnWVVp', 0.5),
(35, 3, 'Organic Creamies', 3.59, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1bzKqJFa51UJdvQ3cWeI8AhB7KUnW_5Q0', 0.5),
(36, 3, 'Organic Veggie Pops', 5.54, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1szLm6_wXC2REcZBuiNv1pdeafSdGd5k_', 0.5),
(37, 3, 'Organic Snacks Cacao', 9.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1294-JWbpJNVO5SzaCEF74HUN2hRwZC_F', 0.5),
(38, 3, 'Organic Crispy Chews ', 3.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1ocspG-RicBQF9WIKHnjYFjyQC-JYjKts', 0.5),
(39, 3, 'Organic Fruit Snacks', 6.99, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1GCuuIhn7b2hioq3mE6cybCK7NZ6m_Lbw', 0.5),
(40, 3, 'Organic Baby Teethers', 3.39, 50, '2020-10-29', 'https://lh3.googleusercontent.com/d/1H2Z9IS8u0yumMgpZtUITxjoIVoU8ne-b', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(255) NOT NULL,
  `userType` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `streetname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`),
  ADD UNIQUE KEY `categoryName` (`categoryName`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryID`) USING BTREE,
  ADD UNIQUE KEY `productTypeID` (`productTypeID`),
  ADD UNIQUE KEY `productID` (`productID`);

--
-- Indexes for table `orderDetail`
--
ALTER TABLE `orderDetail`
  ADD PRIMARY KEY (`orderID`) USING BTREE,
  ADD UNIQUE KEY `productID` (`productID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `orderStatus`
--
ALTER TABLE `orderStatus`
  ADD PRIMARY KEY (`orderID`) USING BTREE,
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`cardNumber`) USING BTREE,
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `userID` (`userID`),
  ADD UNIQUE KEY `secure` (`secure`);

--
-- Indexes for table `productDetail`
--
ALTER TABLE `productDetail`
  ADD PRIMARY KEY (`productID`) USING BTREE,
  ADD UNIQUE KEY `productName` (`productName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `streetname` (`streetname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productDetail`
--
ALTER TABLE `productDetail`
  MODIFY `productID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
