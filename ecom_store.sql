-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26 2018 15:56
--  10.1.31-MariaDB
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
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
--  `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(10) NOT NULL,
  `about_heading` text NOT NULL,
  `about_short_desc` text NOT NULL,
  `about_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_heading`, `about_short_desc`, `about_desc`) VALUES
(1, 'About Us ', 'aurelias baskets', '');

-- --------------------------------------------------------

--
--  `admins`
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
-- `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(2, 'aurelias', 'admin@aureliasbaskets.com', '123456', 'admin.jpg', '077885221', 'Nigeria', 'Developer', 'Developer');

-- --------------------------------------------------------

--
--  `bundle_product_relation`
--

CREATE TABLE `bundle_product_relation` (
  `rel_id` int(10) NOT NULL,
  `rel_title` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL,
  `bundle_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `bundle_product_relation`
--

INSERT INTO `bundle_product_relation` (`rel_id`, `rel_title`, `product_id`, `bundle_id`) VALUES
(8, 'bundle relation -1', 4, 11);

-- --------------------------------------------------------

--
--  `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
--  `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(2, 'Baskets', 'no', 'img5.jpg'),
(3, 'Trays', 'no', 'tray1.jpg'),
(4, 'Others', 'yes', 'others.jpg');


-- --------------------------------------------------------

--
--  `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_email` text NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_email`, `contact_heading`, `contact_desc`) VALUES
(1, 'support@aureliasbaskets.com', 'Contact  To Us', 'If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.');

-- --------------------------------------------------------

--
--  `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(3, 9, 'Benachin', '5000', '333444', 5, 1);

-- --------------------------------------------------------

--
--  `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`) VALUES
(2, 'user', 'user@aureliasbaskets.com', '123456', 'Nigeria', 'Lagos', '0092334566931', 'Lagos', 'user.jpg', '::1', '');

-- --------------------------------------------------------

--
--  `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(16, 2, 207, 1715523401, 3, 'Small', '2017-02-20 08:21:42', 'pending');

-- --------------------------------------------------------

--
--  `enquiry_types`
--

CREATE TABLE `enquiry_types` (
  `enquiry_id` int(10) NOT NULL,
  `enquiry_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `enquiry_types`
--

INSERT INTO `enquiry_types` (`enquiry_id`, `enquiry_title`) VALUES
(1, 'Order and Delivery Support'),
(2, 'Technical Support'),
(3, 'Price Concern');

-- --------------------------------------------------------

--
--  `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(2, 'Butlars Tray', 'no', 'image2.jpg');

-- --------------------------------------------------------

--
--  `payments`
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
-- `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 1607603019, 447, 'Offline Payment', 5678, 33, '11/1/2020');

-- --------------------------------------------------------

--
--  `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(16, 2, 1715523401, '2', 3, 'Small', 'pending'),
(17, 2, 1715523401, '9', 2, 'Large', 'pending'),
(18, 2, 1715523401, '11', 1, 'Medium', 'pending'),
(19, 2, 1068059025, '7', 1, 'Medium', 'pending'),
(20, 2, 909940689, '6', 3, 'Large', 'complete'),
(21, 2, 909940689, '11', 2, 'Meduim', 'complete');

-- --------------------------------------------------------

--
--  `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_psp_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_features` text NOT NULL,
  `product_video` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_label` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_psp_price`, `product_desc`, `product_features`, `product_video`, `product_keywords`, `product_label`, `status`) VALUES
(1, 4, 2, 2, '2070-02-15 10:48:40', 'English Breakfast Tray', 'english-product-url', 'img1.jpg', 'img2.jpg', 'img3.jpg',65000, 65000, '<p> Crepes or Pancake or Waffles
																	<br />

																	Cereal or Pastry Bowl with Butter/Jam

																	<br />

																	Sausage
																	Eggs

																	<br />

																	Baked Beans

																	<br />

																	Salad

																	<br />

																	Salad Dressing

																	<br />

																	Nutella

																	<br />

																	Maple Syrup

																	<br />

																	A Glass Of Yogurt

																	<br />

																	A Bowl of Fresh Fruits

																	<br />

																	A Bottle of Fresh Juice

																	<br />

																	A Bottle Of Fresh Milk

																	<br />

																	A Bottle of Water

																	<br />

																	A Box of Chocolate
																	A Box of Tea
</p>' , '<p>Breakfast Tray</p> ' , '', 'Breakfast', 'Gifts', 'product'),
(2, 4, 2, 2, '2017-02-15 10:48:48', 'Nigerian Breakfast Tray With Grilled Fish', 'nigerian-product-url-1', 'img4.jpg', 'img5.jpg', 'img6.jpg',95000, 95000, '<p> Yam(Boiled or Fried)
															<br />

															Plantain(Boiled or Fried)

															<br />

															Sweet Potato(Boiled or Fried)
															Egg Sauce

															<br />

															Vegetable Shrimp Sauce

															<br />

															Cereal or Pastry Bowl with Butter/Jam

															<br />

															Sausage

															<br />

															Bacon

															<br />

															Baked Beans

															<br />

															Salad

															<br />

															Salad Dressing

															<br />

															A Bowl of Fresh Fruits

															<br />

															A Bottle of Fresh Juice

															<br />

															A Bottle Of Fresh Milk

															<br />

															A Bottle of Water

															<br />

															A Box of Chocolate
' , '<p>Breakfast Tray</p>', '', 'Breakfast', 'Gift', 'product'),
(3, 4, 2, 2, '2017-02-15 10:48:52', 'Nigerian Breakfast Tray Without Grilled Fish ', 'nigerian-product-url-2', 'img4.jpg', 'img5.jpg', 'img6.jpg', 80000,80000, '<p> Yam(Boiled or Fried)
														<br />

														Plantain(Boiled or Fried)

														<br />

														Sweet Potato(Boiled or Fried)
														Egg Sauce

														<br />

														Vegetable Shrimp Sauce

														<br />

														Cereal or Pastry Bowl with Butter/Jam

														<br />

														Sausage

														<br />

														Bacon

														<br />

														Baked Beans

														<br />

														Salad

														<br />

														Salad Dressing

														<br />

														A Bowl of Fresh Fruits

														<br />

														A Bottle of Fresh Juice

														<br />

														A Bottle Of Fresh Milk

														<br />

														A Bottle of Water

														<br />

														A Box of Chocolate

														<br />

														Grilled Fish
</p>' , '<p>Breakfast Tray</p>', '', 'Breakfast', 'Gift', 'product'),
(4, 4, 2, 2, '2017-02-19 06:49:39', 'Champagne Breakfast Tray', 'champagne-product-url', 'img7.jpg', 'img8.jpg', 'img9.jpg', 85000,85000, 'Crepes or Pancake or Waffles
												<br />

												Cereal or Pastry Bowl with Butter/Jam

												<br />

												Sausage
												Eggs

												<br />

												Baked Beans

												<br />

												Salad

												<br />

												Salad Dressing

												<br />

												Nutella

												<br />

												Maple Syrup

												<br />

												A Glass Of Yogurt

												<br />

												A Bowl of Fresh Fruits

												<br />

												A Bottle of Fresh Juice

												<br />

												A Bottle Of Fresh Milk

												<br />

												A Bottle of Water

												<br />

												A Box of Chocolate
												A Medium Sized Champagne Bottle', '<p>Breakfast Tray</p>', '', 'Breakfast', 'Gift', 'product'),
(5, 4, 2, 2, '2017-02-19 06:45:07', 'Keto Breakfast Tray', 'keto-product-url', 'img10.jpg', 'img11.jpg', 'img12.jpg', 90000,90000, ' Stuffed Chicken
												<br />

												Jumbo Prawns

												<br />

												Vegetable Salad
												Shrimp Salad

												<br />

												Pepper Salad

												<br />

												Boiled Eggs or Sunny Side Up

												<br />

												Strawberries/Almond Nuts

												<br />

												A Glass of Greek Yogurt

												<br />

												A Bowl of Fresh Fruits(Keto Compliant)

												<br />

												A Bottle of Soy or Almond Milk

												<br />

												A Bottle of Fresh Juice(Keto Compliant)

												<br />

												A Bottle of Water

												<br />

												A Box of Chocolate','<p>Breakfast Tray</p>','', 'Breakfast', 'Gift', 'Product'),
(6, 4, 2, 2, '2020-02-19 06:49:18', 'Asian Breakfast Tray', 'asian-product-url', 'img13.jpg', 'img14.jpg', 'img15.jpg', 100000,100000, '<p> Asian Rice

												<br />

												Grilled Chicken

												<br />

												Prawns
												Stir Fry

												<br />

												Chicken Sauce

												<br />

												Shrimp Sauce or Minced Meat Sauce

												<br />

												Pepper Sauce

												<br />

												Salad

												<br />

												Salad Dressing

												<br />

												Brownies

												<br />

												A Bowl of Fresh Fruits

												<br />

												A Bottle of Red Wine

												<br />

												A Bottle of Fresh Juice

												<br />

												A Bottle of Water

												<br />

												A Box of Chocolate' , '<p>Breakfast Tray</p>', '', 'Breakfast', 'Gift', 'product'),
(7, 4, 2, 2, '2020-02-19 06:49:18', 'Vegan Breakfast Tray', 'vegan-product-url', 'img20.jpg', 'img16.jpg', 'img17.jpg', 95000,95000, '<p> Vegetable Pasta(Asparagus,Coloured Pepper,Broccoli)
                                            <br /> Avocado Salad(Avocado,Cherry,Tomatoes Sweet Corn)

                                            <br /> Vegan Tomatoe Sauce Roasted Irish Potatoe

                                            <br /> SautÃ¨ed Zucchini

                                            <br /> Mushroom Gravy

                                            <br /> Vegetable Soup

                                            <br /> Baked Fruits for Desert(Banana,Apple,Strawberries,Pineapple)

                                            <br /> Nut Mix

                                            <br /> A Bowl of Fresh Fruits

                                            <br /> A Bottle of Fresh Juice

                                            <br /> A Bottle of Water</p>' , '<p>Breakfast Tray</p>', '', 'Breakfast', 'Gift', 'product'),
(8, 5, 2, 2, '2020-02-19 06:49:18', 'Benachin Lunch Tray', 'benachin-product-url-1', 'img17.jpg', 'img18.jpg', 'img19.jpg', 85000,85000, '<p> Jollof Rice(Benachin)
                                                <br /> Grilled Chicken

                                                <br /> Fried Plantain Jumbo Prawns in Pepper Sauce

                                                <br /> White Fish Sauce

                                                <br /> Pepper Sauce

                                                <br /> Nuts

                                                <br /> Salad

                                                <br /> Salad Dressing

                                                <br /> A Bowl of Fresh Fruits

                                                <br /> A Bottle of Fresh Juice

                                                <br /> A Bottle of Water

                                                <br /> A Box Of Chocolate</p>' , '<p>Lunch Tray</p>', '', 'Breakfast', 'Gift', 'product'),
(9, 5, 2, 2, '2020-02-19 06:49:18', 'Benachin Lunch Tray(With Champagne)', 'benachin-product-url-2', 'img17.jpg', 'img18.jpg', 'img19.jpg', 100000,100000, '<p> Jollof Rice(Benachin)
                                                <br /> Grilled Chicken

                                                <br /> Fried Plantain Jumbo Prawns in Pepper Sauce

                                                <br /> White Fish Sauce

                                                <br /> Pepper Sauce

                                                <br /> Nuts

                                                <br /> Salad

                                                <br /> Salad Dressing

                                                <br /> A Bowl of Fresh Fruits

                                                <br /> A Bottle of Fresh Juice

                                                <br /> A Bottle of Water

                                                <br /> A Box Of Chocolate

                                                <br /> Bottle of Champagne </p> ' , '<p>Lunch Tray</p>', '', 'Lunch', 'Gift', 'product'),
(10, 5, 2, 2, '2020-02-19 06:49:18', 'Surf N Turf Lunch Tray', 'surfnturf-product-url', 'img20.jpg', 'img14.jpg', 'img15.jpg', 95000,95000, '<p> Shrimp Fried Rice
                                            <br /> Grilled Chicken

                                            <br /> Pasta Minced Meat Sauce

                                            <br /> Chicken Sauce

                                            <br /> Pepper Sauce

                                            <br /> Salad

                                            <br /> Salad Dressing

                                            <br /> A Bowl of Fresh Fruits

                                            <br /> A Bottle of Fresh Juice

                                            <br /> A Bottle of Water

                                            <br /> A Box Of Chocolate </p>' , '<p>Lunch Tray</p>', '', 'Lunch', 'Gift', 'product'),                                       (11, 5, 2, 2, '2020-02-19 06:49:18', 'Sea Delight Lunch Tray', 'seadelight-product-url', 'img18.jpg', 'img6.jpg', 'img15.jpg', 95000,95000, '<p> Salmon Fish
                                            <br /> Shrimp Salad

                                            <br /> Honey Glazed Carrot and Asparagus with Lemon Calamari

                                            <br /> Crab

                                            <br /> Bread Rolls

                                            <br /> Cream Sauce

                                            <br /> Pepper Sauce

                                            <br /> Salad

                                            <br /> Salad Dressing

                                            <br /> A Bowl of Fresh Fruits

                                            <br /> A Bottle of White Wine

                                            <br /> A Bottle of Fresh Juice

                                            <br /> A Bottle of Water

                                            <br /> A Box Of Chocolate </p>' , '<p>Lunch Tray</p>', '', 'Lunch', 'Gift', 'product') ;


-- --------------------------------------------------------

--
--  `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(4, 'Breakfast', 'no', 'image3.jpg'),
(5, 'Lunch', 'no', 'image2.jpg');

-- --------------------------------------------------------

--
--  `store`
--

CREATE TABLE `store` (
  `store_id` int(10) NOT NULL,
  `store_title` varchar(255) NOT NULL,
  `store_image` varchar(255) NOT NULL,
  `store_desc` text NOT NULL,
  `store_button` varchar(255) NOT NULL,
  `store_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- `store`
--

INSERT INTO `store` (`store_id`, `store_title`, `store_image`, `store_desc`, `store_button`, `store_url`) VALUES
(4, '', 'store (3).jpg', '', 'View', 'http://instagram.com/aureliasbaskets'),
(5, '', 'store (1).jpg', '', 'View', 'http://instagram.com/aureliasbaskets'),
(6, '', 'store (2).jpg', '', 'View', 'http://instagram.com/aureliasbaskets');

-- --------------------------------------------------------

--
--  `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--  `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(1, 'Rules And Regulations', 'rules', '<p></p>'),
(2, 'Refund Policy', 'link2', '<p></p>'),
(3, 'Pricing and Promotions Policy', 'link3', '<p></p>');

-- --------------------------------------------------------

--
--  `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `customer_id`, `product_id`) VALUES
(2, 2, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  ADD PRIMARY KEY (`rel_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

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
-- Indexes for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

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
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  MODIFY `rel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;