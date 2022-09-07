-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 02:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customer_id` varchar(9) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `Name`) VALUES
(1, 'Tablets'),
(2, 'Laptops'),
(3, 'Mobile Phones'),
(4, 'Games');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` varchar(9) NOT NULL,
  `FirstName` varchar(40) DEFAULT NULL,
  `LastName` varchar(40) DEFAULT NULL,
  `Phone` varchar(12) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `FirstName`, `LastName`, `Phone`, `Email`, `Password`, `Address`) VALUES
('', '', '', '', '', '', ''),
('123', 'fgdggrr', 'erht', '5533731', 'Abed@gmail.com', 'dfj;s', 'nazareth'),
('1234', 'nad', 'black', '0983248923', 'malo@gmail.com', '1234', 'naz'),
('1432', 'chen', 'chen', '943855403', 'chen@gmail.com', '123', 'lks'),
('200934', 'mahdi', 'yahia', '042594289', 'mahdi@gmail.com', '12345', 'iksal'),
('207', 'henry', 'nour', '0549823097', 'henry@gmail.com', '123', 'nazareth'),
('456', 'fgdggrr', 'erht', '0528156396', 'sharon1@gmail.com', '123456', 'nazareth'),
('4561', 'fgdggrr', 'erht', '5533731', 'Abed456@gmail.com', 'sdoivl', 'nazareth'),
('9087654', 'jkbn', 'hjb', 'jkb', 'sharon23@gmail.com', 'sdoivl', 'nazareth');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `UsrName` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`UsrName`, `Password`, `email`) VALUES
('Abu 3li', '1406', 'mohamad.othman17@gmail.com'),
('Henry137', '12', 'henry.nur137@gmail.com'),
('rawad123', 'rawad123', 'rawadbishara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_number` int(11) NOT NULL,
  `customer_id` varchar(9) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_number`, `customer_id`, `order_date`) VALUES
(5, '207', '2022-01-24'),
(6, '1432', '2022-01-24'),
(7, '1432', '2022-01-24'),
(8, '1432', '2022-01-24'),
(11, '1432', '2022-01-25'),
(12, '1432', '2022-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_number` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_number`, `product_id`, `quantity`) VALUES
(11, 1, '6'),
(11, 2, '3'),
(12, 1, '8'),
(12, 2, '5');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(40) DEFAULT NULL,
  `CatagoryId` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(2555) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ProductName`, `CatagoryId`, `price`, `quantity`, `img`, `description`) VALUES
(1, 'Marvel Spider-Man', 4, '149.00', 98, 'https://img.ksp.co.il/item/123671/b_6.jpg?v=5', 'Marvel Spider-Man Miles Morales Game For PS5'),
(2, 'Watch Dogs Legion', 4, '111.00', 280, 'https://img.ksp.co.il/item/120862/b_1.jpg?v=5', 'Watch Dogs Legion - Resistance Edition Game For XBOX ONE'),
(3, 'Spongebob SquarePants', 4, '139.00', 46, 'https://img.ksp.co.il/item/106883/b_7.jpg?v=5', 'Spongebob SquarePants: Battle For Bikini Bottom Rehydrated Game For PS4'),
(4, 'Tony Hawks Pro Skater', 4, '160.00', 84, 'https://img.ksp.co.il/item/115048/b_1.jpg?v=5', 'Tony Hawks Pro Skater 1+2 Game For XBOX ONE'),
(5, 'Star Wars Jedi ', 4, '149.00', 15, 'https://img.ksp.co.il/item/75658/b_1.jpg?v=5', 'Star Wars Jedi : Fallen Order Game For PS4'),
(6, 'Apple iPad Air ', 1, '2379.00', 4, 'https://img.ksp.co.il/item/120281/b_1.jpg?v=5', 'Apple iPad Air 10.9 inch 2020 64GB WiFi Space Gray'),
(7, 'Lenovo TAB M10 ', 1, '890.00', 91, 'https://img.ksp.co.il/item/126842/b_1.jpg?v=5', 'Lenovo TAB M10 HD With Smart Charging Station TB-X306F 64GB ZA730016IL - Iron Grey - WiFi'),
(8, 'Victurio VicTab 10 ', 1, '679.00', 53, 'https://img.ksp.co.il/item/134343/b_1.jpg?v=5', 'Victurio VicTab 10 4G Pro Tablet + Keyboard Cover - Black'),
(9, 'Lenovo Yoga Smart Tab ', 1, '1449.00', 6, 'https://img.ksp.co.il/item/77943/b_15.jpg?v=5', 'Lenovo Yoga Smart Tab YT-X705L 64GB ZA530051IL - Gray - 4G'),
(10, 'Lenovo TAB M7', 1, '479.00', 8, 'https://img.ksp.co.il/item/100134/b_1.jpg?v=5', 'Lenovo TAB M7 TB-7305X 16GB ZA570181IL - Platinum Gray - 4G'),
(11, 'Apple MacBook Pro 13', 2, '7399.00', 4, 'https://img.ksp.co.il/item/135191/b_1.jpg?v=5', 'Apple MacBook Pro 13 M1 Chip 8-Core CPU 8-Core GPU 1TB Storage 16GB Ram - Silver - Z11F-16-1TB-HB / Z11F0004Y'),
(12, 'Lenovo IdeaPad ', 2, '2240.00', 9, 'https://img.ksp.co.il/item/130378/b_1.jpg?v=5', 'Lenovo IdeaPad 5-15ITL 82FG009WIV - Graphite Gray'),
(13, 'Lenovo IdeaPad ', 2, '3290.00', 12, 'https://img.ksp.co.il/item/136312/b_1.jpg?v=5', 'Lenovo IdeaPad L3-15ITL 82HL004CIV - Gray'),
(14, 'Lenovo IdeaPad ', 2, '3390.00', 11, 'https://img.ksp.co.il/item/129122/b_1.jpg?v=5', 'Lenovo IdeaPad 5-15ITL 82FG007EIV - Platinum Gray'),
(15, 'HP Pavilion ', 2, '3199.00', 73, 'https://img.ksp.co.il/item/135313/b_1.jpg?v=5', 'HP Pavilion 15-EG0000NJ / 30C40EA - Gold'),
(16, 'Apple iPhone 12 ', 3, '3240.00', 78, 'https://img.ksp.co.il/item/124953/b_6.jpg?v=5', 'Apple iPhone 12 128GB Black - 1 Year Warranty by The Official Distributor - Without Charger And Without Headphones'),
(17, 'Samsung Galaxy S21 Ultra ', 3, '4299.00', 13, 'https://img.ksp.co.il/item/130975/b_2.jpg?v=5', 'Samsung Galaxy S21 Ultra '),
(18, 'Oppo A93 ', 3, '1079.00', 9, 'https://img.ksp.co.il/item/134963/b_1.jpg?v=5', 'Oppo A93 8GB+128GB Magic Blue CPH2121 - 1 Year Official Warranty By Ronlight'),
(19, 'Samsung Galaxy S21+', 3, '3689.00', 15, 'https://img.ksp.co.il/item/130790/b_3.jpg?v=5', 'Samsung Galaxy S21+ 256GB Phantom Silver SM-G996F/DS - 1 Year Warranty by The Official Distributor'),
(20, 'Oppo A93 ', 3, '1079.00', 5, 'https://img.ksp.co.il/item/134965/b_1.jpg?v=5', 'Oppo A93 8GB+128GB Matte Black CPH2121 - 1 Year Official Warranty By Ronlight');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`UsrName`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_number` (`order_number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`order_number`) REFERENCES `order` (`order_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
