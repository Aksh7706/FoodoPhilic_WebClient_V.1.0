-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 06:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(5, 'Vikas ', 'aksh@gmail.com', 'tsc', 'vc.jpg', '33456693', 'India', 'NASA', '  millionare   ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `p_id`, `ip_add`, `qty`) VALUES
(61, 14, '::1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Main Course', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old'),
(2, 'Beverages', '\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_hostel` varchar(20) NOT NULL,
  `customer_room` varchar(255) NOT NULL,
  `customer_contact` int(10) NOT NULL,
  `customer_image` varchar(255) NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_hostel`, `customer_room`, `customer_contact`, `customer_image`, `customer_ip`) VALUES
(1, 'Akshay', 'akshay.prakash7706@gmail.com', 'Akshay@7706', 'CVR', '510-C', 2147483647, 'download.jpg', '::1'),
(32, 'Jatin', 'j@gmail.com', '12345', 'CVR', '402-C', 1234567890, 'download.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `delivery_options` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_method` text NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `delivery_options`, `order_date`, `payment_method`, `order_status`) VALUES
(42, 1, 550, 695202097, 5, 'Pick Up', '2019-11-07 14:29:55', 'COD', 1),
(43, 1, 160, 1427408070, 2, 'Pick Up', '2019-11-07 14:30:05', 'COD', 1),
(44, 1, 359, 1116375664, 3, 'Room Delivery', '2019-11-07 14:55:54', 'COD', 1),
(45, 32, 350, 432477777, 5, 'Room Delivery', '2019-11-08 06:45:14', 'COD', 1),
(46, 32, 432, 921468696, 5, 'Room Delivery', '2019-11-08 07:56:35', 'COD', 1),
(47, 32, 520, 1714466, 4, 'Pick Up', '2019-11-08 08:07:21', 'COD', 1),
(48, 32, 318, 29037418, 2, 'Pick Up', '2019-11-08 08:35:17', 'COD', 1),
(49, 32, 390, 1062138967, 3, 'Pick Up', '2019-11-08 08:44:03', 'COD', 1),
(50, 32, 270, 255898539, 5, 'Room Delivery', '2019-11-08 10:24:19', 'COD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `employe_id` int(11) NOT NULL,
  `employe_name` varchar(50) NOT NULL,
  `employe_email` varchar(255) NOT NULL,
  `employe_pass` varchar(255) DEFAULT NULL,
  `employe_address` varchar(20) NOT NULL,
  `employe_salery` double NOT NULL,
  `employe_contact` int(10) NOT NULL,
  `employe_image` varchar(255) NOT NULL,
  `employe_job` varchar(255) NOT NULL,
  `employe_hiredate` date NOT NULL DEFAULT '2019-11-05'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`employe_id`, `employe_name`, `employe_email`, `employe_pass`, `employe_address`, `employe_salery`, `employe_contact`, `employe_image`, `employe_job`, `employe_hiredate`) VALUES
(1, 'Akshay', 'akshay.prakash7706@gmail.com', 'Akshay@7706', 'CVR', 500, 2147483647, 'emu.jpeg', 'Khanchi he sala', '2019-11-05'),
(2, 'Adarsh Baghel', 'marul@gmail.com', NULL, 'Marie Curie', 500000, 1854656, 'unclepa.jpg', 'Tech Lead', '2019-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inv_id` int(11) NOT NULL,
  `inv_title` varchar(255) NOT NULL,
  `inv_instock` int(11) NOT NULL DEFAULT 1,
  `inv_image` varchar(255) NOT NULL,
  `inv_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inv_id`, `inv_title`, `inv_instock`, `inv_image`, `inv_date`) VALUES
(4, 'Onion', 2, 'onion.jpg', '2019-11-08 03:14:50'),
(5, 'Butter', 1, 'butter.jpg', '2019-11-08 03:15:04'),
(6, 'Buns', 3, 'buns.jpg', '2019-11-08 03:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`invoice_no`, `product_id`, `qty`) VALUES
(695202097, '4', 3),
(695202097, '7', 2),
(1427408070, '7', 2),
(1116375664, '5', 1),
(1116375664, '9', 1),
(1116375664, '1', 1),
(432477777, '12', 2),
(432477777, '13', 3),
(921468696, '2', 2),
(921468696, '3', 3),
(1714466, '4', 4),
(29037418, '5', 2),
(1062138967, '9', 3),
(255898539, '11', 3),
(255898539, '13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 1607603019, 447, 'UBL/Omni Paisa', 5678, 33, '11/1/2016'),
(3, 314788500, 345, 'UBL/Omni Paisa', 443, 865, '11/1/2016'),
(4, 0, 0, 'UBL/Omni Paisa', 0, 0, '8');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(1, 5, 1, '2019-11-05 04:56:41', 'Gini Burger', 'gini1.jpg', 'burger2.jpg', 'Burger3.jpg', 70, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla</p>', 'Burger'),
(2, 5, 1, '2019-11-05 04:59:55', 'Maharaja Burger', 'burger1.jpg', 'burger2.jpg', 'Burger3.jpg', 69, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.</p>', 'Burger'),
(3, 5, 1, '2019-11-08 07:55:15', 'Chicken Burger', 'burger1.jpg', 'burger2.jpg', 'gini1.jpg', 98, '<p><strong>Best Chicken</strong> <strong>Burger</strong> Ever</p>', 'Burger'),
(4, 1, 1, '2019-11-08 05:54:04', 'Cheese Pizza', 'Pizza3.jpg', 'Pizza2.jpg', 'Pizza1.jpg', 130, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.</p>', 'Pizza'),
(5, 1, 1, '2019-11-05 05:03:45', 'Chicken Pizza', 'Pizza3.jpg', 'Pizza2.jpg', 'Pizza1.jpg', 159, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.</p>', 'Pizza'),
(7, 4, 1, '2019-11-05 05:07:24', 'Veg Roll', 'roll1.jpg', 'roll2.jpg', 'roll3.jpg', 80, '<p>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. kingVideo provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document</p>', 'Roll'),
(8, 4, 1, '2019-11-05 05:07:48', 'Chicken Roll', 'roll1.jpg', 'roll2.jpg', 'roll3.jpg', 100, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.</p>', 'Roll'),
(9, 6, 2, '2019-11-05 05:10:36', 'Sprite', 'Sprite.png', 'Sprite.png', 'Sprite.png', 130, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.</p>', 'Sprite'),
(10, 6, 2, '2019-11-05 05:13:08', 'Coca Cola', 'coca-cola.jpg', 'coca-cola.jpg', 'coca-cola.jpg', 130, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.</p>', 'Coke'),
(11, 7, 2, '2019-11-05 05:11:23', 'Tea', 'tea.jpg', 'tea.jpg', 'tea.jpg', 30, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.</p>', 'Coke'),
(12, 7, 2, '2019-11-05 05:11:45', 'Coffee', 'coffee.jpg', 'coffee.jpg', 'coffee.jpg', 40, '<p>Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.</p>', 'Coke'),
(13, 3, 1, '2019-11-08 06:28:52', 'Veg Noodles', 'Noodles.jpeg', 'Noodles1.jpeg', 'Noodles2.jpeg', 90, '<p><span style=\"color: #222222; font-family: arial, sans-serif;\">Noodles are a type of food made from unleavened dough which is rolled flat and cut, or extruded, into long strips or strings. Noodles can be refrigerated for short-term storage or dried and stored for future use. Noodles are usually cooked in boiling water, sometimes with cooking oil or salt added.</span></p>', 'Veg'),
(14, 3, 1, '2019-11-08 06:28:13', 'Chicken Noodles', 'Noodles1.jpeg', 'Noodles2.jpeg', 'Noodles.jpeg', 110, '<p><span style=\"color: #222222; font-family: arial, sans-serif;\">Noodles are a type of food made from unleavened dough which is rolled flat and cut, or extruded, into long strips or strings. Noodles can be refrigerated for short-term storage or dried and stored for future use. Noodles are usually cooked in boiling water, sometimes with cooking oil or salt added.</span></p>', 'Chicken');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Pizza', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old'),
(2, 'Pasta', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old'),
(3, 'Noodles', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old'),
(4, 'Roles', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old'),
(5, 'Burgers', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old'),
(6, 'Cold Drinks', 'A soft drink is a drink that usually contains carbonated water, a sweetener, and a natural or artificial flavoring. The sweetener may be a sugar, high-fructose corn syrup, fruit juice, a sugar substitute, or some combination of these.'),
(7, 'Hot Drinks', 'A soft drink is a drink that usually contains carbonated water, a sweetener, and a natural or artificial flavoring. The sweetener may be a sugar, high-fructose corn syrup, fruit juice, a sugar substitute, or some combination of these.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(2, 'Slide Number 2', 'offer1.jpg'),
(3, 'Slide Number 3', 'offer.jpg'),
(7, 'Maha Offer', 'offer2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`employe_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `employe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
