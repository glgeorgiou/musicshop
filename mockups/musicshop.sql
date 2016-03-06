-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: db46.grserver.gr:3306
-- Χρόνος δημιουργίας: 06 Μαρ 2016 στις 20:44:27
-- Έκδοση διακομιστή: 10.1.11-MariaDB
-- Έκδοση PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `musicshop`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `cart_total` decimal(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `customer_age` mediumint(9) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cart_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `customer_age`, `address`, `pass`, `phone`, `email`, `cart_id`) VALUES
(1, 'Alex', 'Papadopoulos', 22, 'Stadiou 9', '1111', '2013847577', 'ap@ua.gr', NULL),
(2, 'Kostas', 'Papadopoulos', 21, 'Panepistimiou 9', '1111', '2013447567', 'kp@ua.gr', NULL),
(3, 'Alex', 'Kostopoulos', 35, 'Stadiou 19', '1111', '2013847546', 'ak@ua.gr', NULL),
(4, 'Efi', 'Papagianni', 49, 'Stadiou 59', '1111', '2013847598', 'ep@ua.gr', NULL),
(5, 'Giannis', 'Xristopoulos', 55, 'Stadiou 89', '1111', '2013847523', 'gx@ua.gr', NULL),
(6, 'Maria', 'Xronaki', 68, 'Panepistimiou 9', '1111', '2013847529', 'mx@ua.gr', NULL),
(7, 'Christina', 'Papadopoulou', 17, 'Akadimias 19', '1111', '2013847539', 'chp@ua.gr', NULL),
(8, 'Despina', 'Hliopoulou', 77, ' Akadimias 9', '1111', '20138475649', 'dh@ua.gr', NULL),
(9, 'Marianna', 'Papadaki', 45, 'Solonos 9', '1111', '2013847559', 'mp@ua.gr', NULL),
(10, 'Vasilis', 'Papadakis', 55, ' Solonos 35', '1111', '2013847567', 'vp@ua.gr', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `items_number` mediumint(8) UNSIGNED NOT NULL,
  `order_date` date DEFAULT NULL,
  `total` decimal(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `items_number`, `order_date`, `total`) VALUES
(1, 4, 5, '2016-02-26', '246.00'),
(2, 5, 1, '2016-02-26', '289.00'),
(3, 3, 2, '2016-02-26', '336.00'),
(4, 2, 3, '2016-02-26', '46.00'),
(5, 4, 5, '2016-02-26', '229.00'),
(6, 4, 5, '2016-02-26', '22.00'),
(7, 3, 2, '2016-02-26', '33.00'),
(8, 8, 7, '2016-02-26', '88.00'),
(9, 9, 9, '2016-02-26', '99.00'),
(10, 10, 8, '2016-02-26', '5.00');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `item`
--

CREATE TABLE `item` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_price` decimal(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_description`, `item_price`) VALUES
(5, 'RT-Q10', 'Desktop', '289.12'),
(20, 'LA-X10', 'Laptop', '458.34'),
(22, 'TR-W10', 'Laptop', '244.28'),
(45, 'LS-X14', 'Tablet', '159.43'),
(48, 'LFW-Q10', 'Desktop', '888.77'),
(50, 'LA-B10', 'Desktop', '259.35'),
(54, 'QW-W10', 'Laptop', '429.18'),
(73, 'GB-S10', 'Tablet', '59.57'),
(80, 'XA-B12', 'Tablet', '453.23'),
(100, 'LB-X15', 'Laptop', '452.33');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_price` decimal(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `customer_id`, `item_id`, `item_price`) VALUES
(1, 1, 8, 5, '0.00'),
(2, 1, 8, 80, '0.00'),
(3, 2, 7, 20, '0.00'),
(4, 2, 7, 45, '0.00'),
(5, 2, 7, 80, '0.00'),
(6, 3, 3, 5, '0.00'),
(7, 3, 3, 80, '0.00'),
(8, 4, 2, 20, '0.00'),
(9, 4, 2, 5, '0.00'),
(10, 5, 10, 54, '0.00'),
(11, 5, 10, 73, '0.00'),
(12, 6, 1, 5, '0.00'),
(13, 6, 1, 80, '0.00'),
(14, 7, 3, 20, '0.00'),
(15, 7, 3, 45, '0.00'),
(16, 7, 3, 80, '0.00'),
(17, 8, 5, 5, '0.00'),
(18, 8, 5, 80, '0.00'),
(19, 9, 4, 20, '0.00'),
(20, 9, 4, 5, '0.00'),
(21, 10, 6, 54, '0.00'),
(22, 10, 6, 73, '0.00');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Ευρετήρια για πίνακα `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Ευρετήρια για πίνακα `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Ευρετήρια για πίνακα `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Ευρετήρια για πίνακα `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT για πίνακα `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT για πίνακα `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
