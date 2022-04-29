-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2022 at 03:32 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fudhunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE `cuisine` (
  `cuisine_id` int(11) NOT NULL,
  `cuisine_name` varchar(250) NOT NULL,
  `cuisine_pix` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`cuisine_id`, `cuisine_name`, `cuisine_pix`) VALUES
(1, 'Spanish', 'assets/images/cuisines/spanish.jpeg'),
(2, 'Indian', 'assets/images/cuisines/indian.jpeg'),
(3, 'Vietnamese', 'assets/images/cuisines/vietnamese.jpeg'),
(4, 'Chad', 'assets/images/cuisines/chad.jpeg'),
(5, 'Japanese', 'assets/images/cuisines/japanese.jpeg'),
(6, 'Israeli', 'assets/images/cuisines/israeli.jpeg'),
(7, 'South Korean', 'assets/images/cuisines/south-korean.jpeg'),
(8, 'Greek', 'assets/images/cuisines/greek.jpeg'),
(9, 'Thai', 'assets/images/cuisines/thai.jpeg'),
(10, 'Swedish', 'assets/images/cuisines/swedish.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `cuisine_id` varchar(250) NOT NULL,
  `restaurant_id` varchar(250) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `food_prize` varchar(250) NOT NULL,
  `food_pix` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `cuisine_id`, `restaurant_id`, `food_name`, `food_prize`, `food_pix`) VALUES
(1, '1', '1', 'Adas Polo', '16.99', 'assets/images/products/1.jpg'),
(2, '2', '2', 'Avocado Toast', '12.99', 'assets/images/products/2.jpg'),
(3, '3', '3', 'Basmati Rice', '18.99', 'assets/images/products/3.jpg'),
(4, '4', '4', 'Basteeya', '20.99', 'assets/images/products/4.jpg'),
(5, '5', '5', 'Bastilla Chicken Pie', '15.99', 'assets/images/products/5.jpg'),
(6, '6', '6', 'Beef Lamb Kabobs', '11.99', 'assets/images/products/6.jpg'),
(7, '7', '7', 'Braised Pork Belly Dinner', '15.99', 'assets/images/products/7.jpg'),
(8, '8', '8', 'Branzino', '33.99', 'assets/images/products/8.jpg'),
(9, '9', '9', 'Breakfast Sandwich', '14.99', 'assets/images/products/9.jpg'),
(10, '10', '10', 'Butternut Squash Soup', '8.99', 'assets/images/products/10.jpg'),
(11, '1', '11', 'Chicken Croquette', '15.99', 'assets/images/products/11.jpg'),
(12, '2', '12', 'Chicken Kabob', '19.99', 'assets/images/products/12.jpg'),
(13, '3', '13', 'Chicken Kabob', '24.99', 'assets/images/products/13.jpg'),
(14, '4', '14', 'Chicken Kebabs Plate', '6.99', 'assets/images/products/14.jpg'),
(15, '5', '15', 'Chicken Roulade', '25.99', 'assets/images/products/15.jpg'),
(16, '6', '16', 'Chicken Sandwich', '16.99', 'assets/images/products/16.jpg'),
(17, '7', '17', 'Chicken with Honey & Prunes', '24.99', 'assets/images/products/17.jpg'),
(18, '8', '18', 'Chicken with Lemon & Olives', '24.99', 'assets/images/products/18.jpg'),
(19, '9', '19', 'Chilaquiles Verdes', '17.99', 'assets/images/products/19.jpg'),
(20, '10', '20', 'Chipotle Chilaquiles Dinner', '18.99', 'assets/images/products/20.jpg'),
(21, '1', '21', 'Churros', '10.99', 'assets/images/products/21.jpg'),
(22, '2', '22', 'Creamy Mushroom Soup', '7.99', 'assets/images/products/22.jpg'),
(23, '3', '23', 'Crispy Chicken Dorados Dinner', '16.99', 'assets/images/products/23.jpg'),
(24, '4', '24', 'Duck Skin Fried Rice', '17.99', 'assets/images/products/24.jpg'),
(25, '5', '25', 'Enchiladas De Res Dinner', '21.99', 'assets/images/products/25.jpg'),
(26, '6', '26', 'Enchiladas Rojas Dinner', '19.99', 'assets/images/products/26.jpg'),
(27, '7', '27', 'Firecracker Cauliflower', '16.99', 'assets/images/products/27.jpg'),
(28, '8', '28', 'Fish Tagine', '26.99', 'assets/images/products/28.jpg'),
(29, '9', '29', 'French Toast', '14.99', 'assets/images/products/29.jpg'),
(30, '10', '30', 'Fresh Spring Rolls', '9.99', 'assets/images/products/30.jpg'),
(31, '1', '31', 'Ghormeh Sabzi', '17.99', 'assets/images/products/31.jpg'),
(32, '2', '32', 'Green Plate', '15.99', 'assets/images/products/32.jpg'),
(33, '3', '33', 'Griddled Skirt Steak Dinner', '18.99', 'assets/images/products/33.jpg'),
(34, '4', '34', 'Grilled Arctic Char Dinner', '18.99', 'assets/images/products/34.jpg'),
(35, '5', '35', 'Grilled Chicken', '23.99', 'assets/images/products/35.jpg'),
(36, '6', '36', 'Grilled Lamb Kofte', '16.99', 'assets/images/products/36.jpg'),
(37, '7', '37', 'Harissa', '4.99', 'assets/images/products/37.jpg'),
(38, '8', '38', 'Huevos Benedictos', '18.99', 'assets/images/products/38.jpg'),
(39, '9', '39', 'Huevos Rancheros', '17.99', 'assets/images/products/39.jpg'),
(40, '10', '40', 'Jeweled Rice', '7.99', 'assets/images/products/40.jpg'),
(41, '1', '41', 'Joojeh Kabob', '15.99', 'assets/images/products/41.jpg'),
(42, '2', '42', 'Karniyarik', '25.99', 'assets/images/products/42.jpg'),
(43, '3', '43', 'Kau Soi', '15.99', 'assets/images/products/43.jpg'),
(44, '4', '44', 'Koobideh Kabob', '9.99', 'assets/images/products/44.jpg'),
(45, '5', '45', 'Kookoo Sabzi', '15.99', 'assets/images/products/45.jpg'),
(46, '6', '46', 'Lamb Chops', '21.99', 'assets/images/products/46.jpg'),
(47, '7', '47', 'Lamb Curry', '18.99', 'assets/images/products/47.jpg'),
(48, '8', '48', 'Lamb with Honey & Almonds', '24.99', 'assets/images/products/48.jpg'),
(49, '9', '49', 'Lean Beef Stew', '11.99', 'assets/images/products/49.jpg'),
(50, '10', '50', 'Lentil Soup', '16.99', 'assets/images/products/50.jpg'),
(51, '1', '1', 'Lentil Soup', '0.99', 'assets/images/products/51.jpg'),
(52, '2', '2', 'Levain Toast', '7.99', 'assets/images/products/52.jpg'),
(53, '3', '3', 'Manti', '21.99', 'assets/images/products/53.jpg'),
(54, '4', '4', 'Menemen', '15.99', 'assets/images/products/54.jpg'),
(55, '5', '5', 'Miso Cod', '17.99', 'assets/images/products/55.jpg'),
(56, '6', '6', 'Moroccan Seafood', '26.99', 'assets/images/products/56.jpg'),
(57, '7', '7', 'Papas Bravas', '11.99', 'assets/images/products/57.jpg'),
(58, '8', '8', 'Patatas Bravas', '8.99', 'assets/images/products/58.jpg'),
(59, '9', '9', 'Platha Dipper', '9.99', 'assets/images/products/59.jpg'),
(60, '10', '10', 'Pork Carnitas Dinner', '16.99', 'assets/images/products/60.jpg'),
(61, '1', '11', 'Pork Tocino', '15.99', 'assets/images/products/61.jpg'),
(62, '2', '12', 'Presidio Salad', '13.99', 'assets/images/products/62.jpg'),
(63, '3', '13', 'Pumpkin Pork Stew', '17.99', 'assets/images/products/63.jpg'),
(64, '4', '14', 'Rabbit Kabob', '26.99', 'assets/images/products/64.jpg'),
(65, '5', '15', 'Rainbow Salad', '13.99', 'assets/images/products/65.jpg'),
(66, '6', '16', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', 'assets/images/products/66.jpg'),
(67, '7', '17', 'Roasted Eggplant', '18.99', 'assets/images/products/67.jpg'),
(68, '8', '18', 'Sabzi Panir', '18.99', 'assets/images/products/68.jpg'),
(69, '9', '19', 'Salmon Ochazuke', '17.99', 'assets/images/products/69.jpg'),
(70, '10', '20', 'Samusa Soup', '9.99', 'assets/images/products/70.jpg'),
(71, '1', '21', 'Shiraz Salad', '14.99', 'assets/images/products/71.jpg'),
(72, '2', '22', 'Short Rib', '23.99', 'assets/images/products/72.jpg'),
(73, '3', '23', 'Sopa Azteca', '11.99', 'assets/images/products/73.jpg'),
(74, '4', '24', 'Sopes De Machaca', '18.99', 'assets/images/products/74.jpg'),
(75, '5', '25', 'Sticky Bun', '6.99', 'assets/images/products/75.jpg'),
(76, '6', '26', 'Sticky Finger Pork Riblettes', '12.99', 'assets/images/products/76.jpg'),
(77, '7', '27', 'Sunrise Combo', '16.99', 'assets/images/products/77.jpg'),
(78, '8', '28', 'Take & Bake Chicken Basteeya', '20.99', 'assets/images/products/78.jpg'),
(79, '9', '29', 'Tamarind Chili Shrimp', '18.99', 'assets/images/products/79.jpg'),
(80, '10', '30', 'Taste of Persia', '16.99', 'assets/images/products/80.jpg'),
(81, '1', '31', 'Thai Curry Pot Pie', '15.99', 'assets/images/products/81.jpg'),
(82, '2', '32', 'Tomato Hummus', '8.99', 'assets/images/products/82.jpg'),
(83, '3', '33', 'Trio Spreads', '19.99', 'assets/images/products/83.jpg'),
(84, '4', '34', 'Tuna Ceviche', '12.99', 'assets/images/products/84.jpg'),
(85, '5', '35', 'Turkish Breakfast For 2', '35.99', 'assets/images/products/85.jpg'),
(86, '6', '36', 'Turlu Omelet', '16.99', 'assets/images/products/86.jpg'),
(87, '7', '37', 'Tzatziki', '8.99', 'assets/images/products/87.jpg'),
(88, '8', '38', 'Vegan Tempeh Curry Noodles', '15.99', 'assets/images/products/88.jpg'),
(89, '9', '39', 'Vegetarian Du Chef', '26.99', 'assets/images/products/89.jpg'),
(90, '10', '40', 'Veggie Kabob', '18.99', 'assets/images/products/90.jpg'),
(91, '1', '41', 'Yogurt Salad', '17.99', 'assets/images/products/91.jpg'),
(92, '2', '42', 'Zereshk Polo', '8.99', 'assets/images/products/92.jpg'),
(93, '3', '43', 'Zucchini Dolmas', '15.99', 'assets/images/products/93.jpg'),
(94, '4', '44', 'Adas Polo', '16.99', 'assets/images/products/1.jpg'),
(95, '5', '45', 'Avocado Toast', '12.99', 'assets/images/products/2.jpg'),
(96, '6', '46', 'Basmati Rice', '18.99', 'assets/images/products/3.jpg'),
(97, '7', '47', 'Basteeya', '20.99', 'assets/images/products/4.jpg'),
(98, '8', '48', 'Bastilla Chicken Pie', '15.99', 'assets/images/products/5.jpg'),
(99, '9', '49', 'Beef Lamb Kabobs', '11.99', 'assets/images/products/6.jpg'),
(100, '10', '50', 'Braised Pork Belly Dinner', '15.99', 'assets/images/products/7.jpg'),
(101, '1', '1', 'Branzino', '33.99', 'assets/images/products/8.jpg'),
(102, '2', '2', 'Breakfast Sandwich', '14.99', 'assets/images/products/9.jpg'),
(103, '3', '3', 'Butternut Squash Soup', '8.99', 'assets/images/products/10.jpg'),
(104, '4', '4', 'Chicken Croquette', '15.99', 'assets/images/products/11.jpg'),
(105, '5', '5', 'Chicken Kabob', '19.99', 'assets/images/products/12.jpg'),
(106, '6', '6', 'Chicken Kabob', '24.99', 'assets/images/products/13.jpg'),
(107, '7', '7', 'Chicken Kebabs Plate', '6.99', 'assets/images/products/14.jpg'),
(108, '8', '8', 'Chicken Roulade', '25.99', 'assets/images/products/15.jpg'),
(109, '9', '9', 'Chicken Sandwich', '16.99', 'assets/images/products/16.jpg'),
(110, '10', '10', 'Chicken with Honey & Prunes', '24.99', 'assets/images/products/17.jpg'),
(111, '1', '11', 'Chicken with Lemon & Olives', '24.99', 'assets/images/products/18.jpg'),
(112, '2', '12', 'Chilaquiles Verdes', '17.99', 'assets/images/products/19.jpg'),
(113, '3', '13', 'Chipotle Chilaquiles Dinner', '18.99', 'assets/images/products/20.jpg'),
(114, '4', '14', 'Churros', '10.99', 'assets/images/products/21.jpg'),
(115, '5', '15', 'Creamy Mushroom Soup', '7.99', 'assets/images/products/22.jpg'),
(116, '6', '16', 'Crispy Chicken Dorados Dinner', '16.99', 'assets/images/products/23.jpg'),
(117, '7', '17', 'Duck Skin Fried Rice', '17.99', 'assets/images/products/24.jpg'),
(118, '8', '18', 'Enchiladas De Res Dinner', '21.99', 'assets/images/products/25.jpg'),
(119, '9', '19', 'Enchiladas Rojas Dinner', '19.99', 'assets/images/products/26.jpg'),
(120, '10', '20', 'Firecracker Cauliflower', '16.99', 'assets/images/products/27.jpg'),
(121, '1', '21', 'Fish Tagine', '26.99', 'assets/images/products/28.jpg'),
(122, '2', '22', 'French Toast', '14.99', 'assets/images/products/29.jpg'),
(123, '3', '23', 'Fresh Spring Rolls', '9.99', 'assets/images/products/30.jpg'),
(124, '4', '24', 'Ghormeh Sabzi', '17.99', 'assets/images/products/31.jpg'),
(125, '5', '25', 'Green Plate', '15.99', 'assets/images/products/32.jpg'),
(126, '6', '26', 'Griddled Skirt Steak Dinner', '18.99', 'assets/images/products/33.jpg'),
(127, '7', '27', 'Grilled Arctic Char Dinner', '18.99', 'assets/images/products/34.jpg'),
(128, '8', '28', 'Grilled Chicken', '23.99', 'assets/images/products/35.jpg'),
(129, '9', '29', 'Grilled Lamb Kofte', '16.99', 'assets/images/products/36.jpg'),
(130, '10', '30', 'Harissa', '4.99', 'assets/images/products/37.jpg'),
(131, '1', '31', 'Huevos Benedictos', '18.99', 'assets/images/products/38.jpg'),
(132, '2', '32', 'Huevos Rancheros', '17.99', 'assets/images/products/39.jpg'),
(133, '3', '33', 'Jeweled Rice', '7.99', 'assets/images/products/40.jpg'),
(134, '4', '34', 'Joojeh Kabob', '15.99', 'assets/images/products/41.jpg'),
(135, '5', '35', 'Karniyarik', '25.99', 'assets/images/products/42.jpg'),
(136, '6', '36', 'Kau Soi', '15.99', 'assets/images/products/43.jpg'),
(137, '7', '37', 'Koobideh Kabob', '9.99', 'assets/images/products/44.jpg'),
(138, '8', '38', 'Kookoo Sabzi', '15.99', 'assets/images/products/45.jpg'),
(139, '9', '39', 'Lamb Chops', '21.99', 'assets/images/products/46.jpg'),
(140, '10', '40', 'Lamb Curry', '18.99', 'assets/images/products/47.jpg'),
(141, '1', '41', 'Lamb with Honey & Almonds', '24.99', 'assets/images/products/48.jpg'),
(142, '2', '42', 'Lean Beef Stew', '11.99', 'assets/images/products/49.jpg'),
(143, '3', '43', 'Lentil Soup', '16.99', 'assets/images/products/50.jpg'),
(144, '4', '44', 'Lentil Soup', '0.99', 'assets/images/products/51.jpg'),
(145, '5', '45', 'Levain Toast', '7.99', 'assets/images/products/52.jpg'),
(146, '6', '46', 'Manti', '21.99', 'assets/images/products/53.jpg'),
(147, '7', '47', 'Menemen', '15.99', 'assets/images/products/54.jpg'),
(148, '8', '48', 'Miso Cod', '17.99', 'assets/images/products/55.jpg'),
(149, '9', '49', 'Moroccan Seafood', '26.99', 'assets/images/products/56.jpg'),
(150, '10', '50', 'Papas Bravas', '11.99', 'assets/images/products/57.jpg'),
(151, '1', '1', 'Patatas Bravas', '8.99', 'assets/images/products/58.jpg'),
(152, '2', '2', 'Platha Dipper', '9.99', 'assets/images/products/59.jpg'),
(153, '3', '3', 'Pork Carnitas Dinner', '16.99', 'assets/images/products/60.jpg'),
(154, '4', '4', 'Pork Tocino', '15.99', 'assets/images/products/61.jpg'),
(155, '5', '5', 'Presidio Salad', '13.99', 'assets/images/products/62.jpg'),
(156, '6', '6', 'Pumpkin Pork Stew', '17.99', 'assets/images/products/63.jpg'),
(157, '7', '7', 'Rabbit Kabob', '26.99', 'assets/images/products/64.jpg'),
(158, '8', '8', 'Rainbow Salad', '13.99', 'assets/images/products/65.jpg'),
(159, '9', '9', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', 'assets/images/products/66.jpg'),
(160, '10', '10', 'Roasted Eggplant', '18.99', 'assets/images/products/67.jpg'),
(161, '1', '11', 'Sabzi Panir', '18.99', 'assets/images/products/68.jpg'),
(162, '2', '12', 'Salmon Ochazuke', '17.99', 'assets/images/products/69.jpg'),
(163, '3', '13', 'Samusa Soup', '9.99', 'assets/images/products/70.jpg'),
(164, '4', '14', 'Shiraz Salad', '14.99', 'assets/images/products/71.jpg'),
(165, '5', '15', 'Short Rib', '23.99', 'assets/images/products/72.jpg'),
(166, '6', '16', 'Sopa Azteca', '11.99', 'assets/images/products/73.jpg'),
(167, '7', '17', 'Sopes De Machaca', '18.99', 'assets/images/products/74.jpg'),
(168, '8', '18', 'Sticky Bun', '6.99', 'assets/images/products/75.jpg'),
(169, '9', '19', 'Sticky Finger Pork Riblettes', '12.99', 'assets/images/products/76.jpg'),
(170, '10', '20', 'Sunrise Combo', '16.99', 'assets/images/products/77.jpg'),
(171, '1', '21', 'Take & Bake Chicken Basteeya', '20.99', 'assets/images/products/78.jpg'),
(172, '2', '22', 'Tamarind Chili Shrimp', '18.99', 'assets/images/products/79.jpg'),
(173, '3', '23', 'Taste of Persia', '16.99', 'assets/images/products/80.jpg'),
(174, '4', '24', 'Thai Curry Pot Pie', '15.99', 'assets/images/products/81.jpg'),
(175, '5', '25', 'Tomato Hummus', '8.99', 'assets/images/products/82.jpg'),
(176, '6', '26', 'Trio Spreads', '19.99', 'assets/images/products/83.jpg'),
(177, '7', '27', 'Tuna Ceviche', '12.99', 'assets/images/products/84.jpg'),
(178, '8', '28', 'Turkish Breakfast For 2', '35.99', 'assets/images/products/85.jpg'),
(179, '9', '29', 'Turlu Omelet', '16.99', 'assets/images/products/86.jpg'),
(180, '10', '30', 'Tzatziki', '8.99', 'assets/images/products/87.jpg'),
(181, '1', '31', 'Vegan Tempeh Curry Noodles', '15.99', 'assets/images/products/88.jpg'),
(182, '2', '32', 'Vegetarian Du Chef', '26.99', 'assets/images/products/89.jpg'),
(183, '3', '33', 'Veggie Kabob', '18.99', 'assets/images/products/90.jpg'),
(184, '4', '34', 'Yogurt Salad', '17.99', 'assets/images/products/91.jpg'),
(185, '5', '35', 'Zereshk Polo', '8.99', 'assets/images/products/92.jpg'),
(186, '6', '36', 'Zucchini Dolmas', '15.99', 'assets/images/products/93.jpg'),
(187, '7', '37', 'Adas Polo', '16.99', 'assets/images/products/1.jpg'),
(188, '8', '38', 'Avocado Toast', '12.99', 'assets/images/products/2.jpg'),
(189, '9', '39', 'Basmati Rice', '18.99', 'assets/images/products/3.jpg'),
(190, '10', '40', 'Basteeya', '20.99', 'assets/images/products/4.jpg'),
(191, '1', '41', 'Bastilla Chicken Pie', '15.99', 'assets/images/products/5.jpg'),
(192, '2', '42', 'Beef Lamb Kabobs', '11.99', 'assets/images/products/6.jpg'),
(193, '3', '43', 'Braised Pork Belly Dinner', '15.99', 'assets/images/products/7.jpg'),
(194, '4', '44', 'Branzino', '33.99', 'assets/images/products/8.jpg'),
(195, '5', '45', 'Breakfast Sandwich', '14.99', 'assets/images/products/9.jpg'),
(196, '6', '46', 'Butternut Squash Soup', '8.99', 'assets/images/products/10.jpg'),
(197, '7', '47', 'Chicken Croquette', '15.99', 'assets/images/products/11.jpg'),
(198, '8', '48', 'Chicken Kabob', '19.99', 'assets/images/products/12.jpg'),
(199, '9', '49', 'Chicken Kabob', '24.99', 'assets/images/products/13.jpg'),
(200, '10', '50', 'Chicken Kebabs Plate', '6.99', 'assets/images/products/14.jpg'),
(201, '1', '1', 'Chicken Roulade', '25.99', 'assets/images/products/15.jpg'),
(202, '2', '2', 'Chicken Sandwich', '16.99', 'assets/images/products/16.jpg'),
(203, '3', '3', 'Chicken with Honey & Prunes', '24.99', 'assets/images/products/17.jpg'),
(204, '4', '4', 'Chicken with Lemon & Olives', '24.99', 'assets/images/products/18.jpg'),
(205, '5', '5', 'Chilaquiles Verdes', '17.99', 'assets/images/products/19.jpg'),
(206, '6', '6', 'Chipotle Chilaquiles Dinner', '18.99', 'assets/images/products/20.jpg'),
(207, '7', '7', 'Churros', '10.99', 'assets/images/products/21.jpg'),
(208, '8', '8', 'Creamy Mushroom Soup', '7.99', 'assets/images/products/22.jpg'),
(209, '9', '9', 'Crispy Chicken Dorados Dinner', '16.99', 'assets/images/products/23.jpg'),
(210, '10', '10', 'Duck Skin Fried Rice', '17.99', 'assets/images/products/24.jpg'),
(211, '1', '11', 'Enchiladas De Res Dinner', '21.99', 'assets/images/products/25.jpg'),
(212, '2', '12', 'Enchiladas Rojas Dinner', '19.99', 'assets/images/products/26.jpg'),
(213, '3', '13', 'Firecracker Cauliflower', '16.99', 'assets/images/products/27.jpg'),
(214, '4', '14', 'Fish Tagine', '26.99', 'assets/images/products/28.jpg'),
(215, '5', '15', 'French Toast', '14.99', 'assets/images/products/29.jpg'),
(216, '6', '16', 'Fresh Spring Rolls', '9.99', 'assets/images/products/30.jpg'),
(217, '7', '17', 'Ghormeh Sabzi', '17.99', 'assets/images/products/31.jpg'),
(218, '8', '18', 'Green Plate', '15.99', 'assets/images/products/32.jpg'),
(219, '9', '19', 'Griddled Skirt Steak Dinner', '18.99', 'assets/images/products/33.jpg'),
(220, '10', '20', 'Grilled Arctic Char Dinner', '18.99', 'assets/images/products/34.jpg'),
(221, '1', '21', 'Grilled Chicken', '23.99', 'assets/images/products/35.jpg'),
(222, '2', '22', 'Grilled Lamb Kofte', '16.99', 'assets/images/products/36.jpg'),
(223, '3', '23', 'Harissa', '4.99', 'assets/images/products/37.jpg'),
(224, '4', '24', 'Huevos Benedictos', '18.99', 'assets/images/products/38.jpg'),
(225, '5', '25', 'Huevos Rancheros', '17.99', 'assets/images/products/39.jpg'),
(226, '6', '26', 'Jeweled Rice', '7.99', 'assets/images/products/40.jpg'),
(227, '7', '27', 'Joojeh Kabob', '15.99', 'assets/images/products/41.jpg'),
(228, '8', '28', 'Karniyarik', '25.99', 'assets/images/products/42.jpg'),
(229, '9', '29', 'Kau Soi', '15.99', 'assets/images/products/43.jpg'),
(230, '10', '30', 'Koobideh Kabob', '9.99', 'assets/images/products/44.jpg'),
(231, '1', '31', 'Kookoo Sabzi', '15.99', 'assets/images/products/45.jpg'),
(232, '2', '32', 'Lamb Chops', '21.99', 'assets/images/products/46.jpg'),
(233, '3', '33', 'Lamb Curry', '18.99', 'assets/images/products/47.jpg'),
(234, '4', '34', 'Lamb with Honey & Almonds', '24.99', 'assets/images/products/48.jpg'),
(235, '5', '35', 'Lean Beef Stew', '11.99', 'assets/images/products/49.jpg'),
(236, '6', '36', 'Lentil Soup', '16.99', 'assets/images/products/50.jpg'),
(237, '7', '37', 'Lentil Soup', '0.99', 'assets/images/products/51.jpg'),
(238, '8', '38', 'Levain Toast', '7.99', 'assets/images/products/52.jpg'),
(239, '9', '39', 'Manti', '21.99', 'assets/images/products/53.jpg'),
(240, '10', '40', 'Menemen', '15.99', 'assets/images/products/54.jpg'),
(241, '1', '41', 'Miso Cod', '17.99', 'assets/images/products/55.jpg'),
(242, '2', '42', 'Moroccan Seafood', '26.99', 'assets/images/products/56.jpg'),
(243, '3', '43', 'Papas Bravas', '11.99', 'assets/images/products/57.jpg'),
(244, '4', '44', 'Patatas Bravas', '8.99', 'assets/images/products/58.jpg'),
(245, '5', '45', 'Platha Dipper', '9.99', 'assets/images/products/59.jpg'),
(246, '6', '46', 'Pork Carnitas Dinner', '16.99', 'assets/images/products/60.jpg'),
(247, '7', '47', 'Pork Tocino', '15.99', 'assets/images/products/61.jpg'),
(248, '8', '48', 'Presidio Salad', '13.99', 'assets/images/products/62.jpg'),
(249, '9', '49', 'Pumpkin Pork Stew', '17.99', 'assets/images/products/63.jpg'),
(250, '10', '50', 'Rabbit Kabob', '26.99', 'assets/images/products/64.jpg'),
(251, '1', '1', 'Rainbow Salad', '13.99', 'assets/images/products/65.jpg'),
(252, '2', '2', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', 'assets/images/products/66.jpg'),
(253, '3', '3', 'Roasted Eggplant', '18.99', 'assets/images/products/67.jpg'),
(254, '4', '4', 'Sabzi Panir', '18.99', 'assets/images/products/68.jpg'),
(255, '5', '5', 'Salmon Ochazuke', '17.99', 'assets/images/products/69.jpg'),
(256, '6', '6', 'Samusa Soup', '9.99', 'assets/images/products/70.jpg'),
(257, '7', '7', 'Shiraz Salad', '14.99', 'assets/images/products/71.jpg'),
(258, '8', '8', 'Short Rib', '23.99', 'assets/images/products/72.jpg'),
(259, '9', '9', 'Sopa Azteca', '11.99', 'assets/images/products/73.jpg'),
(260, '10', '10', 'Sopes De Machaca', '18.99', 'assets/images/products/74.jpg'),
(261, '1', '11', 'Sticky Bun', '6.99', 'assets/images/products/75.jpg'),
(262, '2', '12', 'Sticky Finger Pork Riblettes', '12.99', 'assets/images/products/76.jpg'),
(263, '3', '13', 'Sunrise Combo', '16.99', 'assets/images/products/77.jpg'),
(264, '4', '14', 'Take & Bake Chicken Basteeya', '20.99', 'assets/images/products/78.jpg'),
(265, '5', '15', 'Tamarind Chili Shrimp', '18.99', 'assets/images/products/79.jpg'),
(266, '6', '16', 'Taste of Persia', '16.99', 'assets/images/products/80.jpg'),
(267, '7', '17', 'Thai Curry Pot Pie', '15.99', 'assets/images/products/81.jpg'),
(268, '8', '18', 'Tomato Hummus', '8.99', 'assets/images/products/82.jpg'),
(269, '9', '19', 'Trio Spreads', '19.99', 'assets/images/products/83.jpg'),
(270, '10', '20', 'Tuna Ceviche', '12.99', 'assets/images/products/84.jpg'),
(271, '1', '21', 'Turkish Breakfast For 2', '35.99', 'assets/images/products/85.jpg'),
(272, '2', '22', 'Turlu Omelet', '16.99', 'assets/images/products/86.jpg'),
(273, '3', '23', 'Tzatziki', '8.99', 'assets/images/products/87.jpg'),
(274, '4', '24', 'Vegan Tempeh Curry Noodles', '15.99', 'assets/images/products/88.jpg'),
(275, '5', '25', 'Vegetarian Du Chef', '26.99', 'assets/images/products/89.jpg'),
(276, '6', '26', 'Veggie Kabob', '18.99', 'assets/images/products/90.jpg'),
(277, '7', '27', 'Yogurt Salad', '17.99', 'assets/images/products/91.jpg'),
(278, '8', '28', 'Zereshk Polo', '8.99', 'assets/images/products/92.jpg'),
(279, '9', '29', 'Zucchini Dolmas', '15.99', 'assets/images/products/93.jpg'),
(280, '10', '30', 'Adas Polo', '16.99', 'assets/images/products/1.jpg'),
(281, '1', '31', 'Avocado Toast', '12.99', 'assets/images/products/2.jpg'),
(282, '2', '32', 'Basmati Rice', '18.99', 'assets/images/products/3.jpg'),
(283, '3', '33', 'Basteeya', '20.99', 'assets/images/products/4.jpg'),
(284, '4', '34', 'Bastilla Chicken Pie', '15.99', 'assets/images/products/5.jpg'),
(285, '5', '35', 'Beef Lamb Kabobs', '11.99', 'assets/images/products/6.jpg'),
(286, '6', '36', 'Braised Pork Belly Dinner', '15.99', 'assets/images/products/7.jpg'),
(287, '7', '37', 'Branzino', '33.99', 'assets/images/products/8.jpg'),
(288, '8', '38', 'Breakfast Sandwich', '14.99', 'assets/images/products/9.jpg'),
(289, '9', '39', 'Butternut Squash Soup', '8.99', 'assets/images/products/10.jpg'),
(290, '10', '40', 'Chicken Croquette', '15.99', 'assets/images/products/11.jpg'),
(291, '1', '41', 'Chicken Kabob', '19.99', 'assets/images/products/12.jpg'),
(292, '2', '42', 'Chicken Kabob', '24.99', 'assets/images/products/13.jpg'),
(293, '3', '43', 'Chicken Kebabs Plate', '6.99', 'assets/images/products/14.jpg'),
(294, '4', '44', 'Chicken Roulade', '25.99', 'assets/images/products/15.jpg'),
(295, '5', '45', 'Chicken Sandwich', '16.99', 'assets/images/products/16.jpg'),
(296, '6', '46', 'Chicken with Honey & Prunes', '24.99', 'assets/images/products/17.jpg'),
(297, '7', '47', 'Chicken with Lemon & Olives', '24.99', 'assets/images/products/18.jpg'),
(298, '8', '48', 'Chilaquiles Verdes', '17.99', 'assets/images/products/19.jpg'),
(299, '9', '49', 'Chipotle Chilaquiles Dinner', '18.99', 'assets/images/products/20.jpg'),
(300, '10', '50', 'Churros', '10.99', 'assets/images/products/21.jpg'),
(301, '1', '1', 'Creamy Mushroom Soup', '7.99', 'assets/images/products/22.jpg'),
(302, '2', '2', 'Crispy Chicken Dorados Dinner', '16.99', 'assets/images/products/23.jpg'),
(303, '3', '3', 'Duck Skin Fried Rice', '17.99', 'assets/images/products/24.jpg'),
(304, '4', '4', 'Enchiladas De Res Dinner', '21.99', 'assets/images/products/25.jpg'),
(305, '5', '5', 'Enchiladas Rojas Dinner', '19.99', 'assets/images/products/26.jpg'),
(306, '6', '6', 'Firecracker Cauliflower', '16.99', 'assets/images/products/27.jpg'),
(307, '7', '7', 'Fish Tagine', '26.99', 'assets/images/products/28.jpg'),
(308, '8', '8', 'French Toast', '14.99', 'assets/images/products/29.jpg'),
(309, '9', '9', 'Fresh Spring Rolls', '9.99', 'assets/images/products/30.jpg'),
(310, '10', '10', 'Ghormeh Sabzi', '17.99', 'assets/images/products/31.jpg'),
(311, '1', '11', 'Green Plate', '15.99', 'assets/images/products/32.jpg'),
(312, '2', '12', 'Griddled Skirt Steak Dinner', '18.99', 'assets/images/products/33.jpg'),
(313, '3', '13', 'Grilled Arctic Char Dinner', '18.99', 'assets/images/products/34.jpg'),
(314, '4', '14', 'Grilled Chicken', '23.99', 'assets/images/products/35.jpg'),
(315, '5', '15', 'Grilled Lamb Kofte', '16.99', 'assets/images/products/36.jpg'),
(316, '6', '16', 'Harissa', '4.99', 'assets/images/products/37.jpg'),
(317, '7', '17', 'Huevos Benedictos', '18.99', 'assets/images/products/38.jpg'),
(318, '8', '18', 'Huevos Rancheros', '17.99', 'assets/images/products/39.jpg'),
(319, '9', '19', 'Jeweled Rice', '7.99', 'assets/images/products/40.jpg'),
(320, '10', '20', 'Joojeh Kabob', '15.99', 'assets/images/products/41.jpg'),
(321, '1', '21', 'Karniyarik', '25.99', 'assets/images/products/42.jpg'),
(322, '2', '22', 'Kau Soi', '15.99', 'assets/images/products/43.jpg'),
(323, '3', '23', 'Koobideh Kabob', '9.99', 'assets/images/products/44.jpg'),
(324, '4', '24', 'Kookoo Sabzi', '15.99', 'assets/images/products/45.jpg'),
(325, '5', '25', 'Lamb Chops', '21.99', 'assets/images/products/46.jpg'),
(326, '6', '26', 'Lamb Curry', '18.99', 'assets/images/products/47.jpg'),
(327, '7', '27', 'Lamb with Honey & Almonds', '24.99', 'assets/images/products/48.jpg'),
(328, '8', '28', 'Lean Beef Stew', '11.99', 'assets/images/products/49.jpg'),
(329, '9', '29', 'Lentil Soup', '16.99', 'assets/images/products/50.jpg'),
(330, '10', '30', 'Lentil Soup', '0.99', 'assets/images/products/51.jpg'),
(331, '1', '31', 'Levain Toast', '7.99', 'assets/images/products/52.jpg'),
(332, '2', '32', 'Manti', '21.99', 'assets/images/products/53.jpg'),
(333, '3', '33', 'Menemen', '15.99', 'assets/images/products/54.jpg'),
(334, '4', '34', 'Miso Cod', '17.99', 'assets/images/products/55.jpg'),
(335, '5', '35', 'Moroccan Seafood', '26.99', 'assets/images/products/56.jpg'),
(336, '6', '36', 'Papas Bravas', '11.99', 'assets/images/products/57.jpg'),
(337, '7', '37', 'Patatas Bravas', '8.99', 'assets/images/products/58.jpg'),
(338, '8', '38', 'Platha Dipper', '9.99', 'assets/images/products/59.jpg'),
(339, '9', '39', 'Pork Carnitas Dinner', '16.99', 'assets/images/products/60.jpg'),
(340, '10', '40', 'Pork Tocino', '15.99', 'assets/images/products/61.jpg'),
(341, '1', '41', 'Presidio Salad', '13.99', 'assets/images/products/62.jpg'),
(342, '2', '42', 'Pumpkin Pork Stew', '17.99', 'assets/images/products/63.jpg'),
(343, '3', '43', 'Rabbit Kabob', '26.99', 'assets/images/products/64.jpg'),
(344, '4', '44', 'Rainbow Salad', '13.99', 'assets/images/products/65.jpg'),
(345, '5', '45', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', 'assets/images/products/66.jpg'),
(346, '6', '46', 'Roasted Eggplant', '18.99', 'assets/images/products/67.jpg'),
(347, '7', '47', 'Sabzi Panir', '18.99', 'assets/images/products/68.jpg'),
(348, '8', '48', 'Salmon Ochazuke', '17.99', 'assets/images/products/69.jpg'),
(349, '9', '49', 'Samusa Soup', '9.99', 'assets/images/products/70.jpg'),
(350, '10', '50', 'Shiraz Salad', '14.99', 'assets/images/products/71.jpg'),
(351, '1', '1', 'Short Rib', '23.99', 'assets/images/products/72.jpg'),
(352, '2', '2', 'Sopa Azteca', '11.99', 'assets/images/products/73.jpg'),
(353, '3', '3', 'Sopes De Machaca', '18.99', 'assets/images/products/74.jpg'),
(354, '4', '4', 'Sticky Bun', '6.99', 'assets/images/products/75.jpg'),
(355, '5', '5', 'Sticky Finger Pork Riblettes', '12.99', 'assets/images/products/76.jpg'),
(356, '6', '6', 'Sunrise Combo', '16.99', 'assets/images/products/77.jpg'),
(357, '7', '7', 'Take & Bake Chicken Basteeya', '20.99', 'assets/images/products/78.jpg'),
(358, '8', '8', 'Tamarind Chili Shrimp', '18.99', 'assets/images/products/79.jpg'),
(359, '9', '9', 'Taste of Persia', '16.99', 'assets/images/products/80.jpg'),
(360, '10', '10', 'Thai Curry Pot Pie', '15.99', 'assets/images/products/81.jpg'),
(361, '1', '11', 'Tomato Hummus', '8.99', 'assets/images/products/82.jpg'),
(362, '2', '12', 'Trio Spreads', '19.99', 'assets/images/products/83.jpg'),
(363, '3', '13', 'Tuna Ceviche', '12.99', 'assets/images/products/84.jpg'),
(364, '4', '14', 'Turkish Breakfast For 2', '35.99', 'assets/images/products/85.jpg'),
(365, '5', '15', 'Turlu Omelet', '16.99', 'assets/images/products/86.jpg'),
(366, '6', '16', 'Tzatziki', '8.99', 'assets/images/products/87.jpg'),
(367, '7', '17', 'Vegan Tempeh Curry Noodles', '15.99', 'assets/images/products/88.jpg'),
(368, '8', '18', 'Vegetarian Du Chef', '26.99', 'assets/images/products/89.jpg'),
(369, '9', '19', 'Veggie Kabob', '18.99', 'assets/images/products/90.jpg'),
(370, '10', '20', 'Yogurt Salad', '17.99', 'assets/images/products/91.jpg'),
(371, '1', '21', 'Zereshk Polo', '8.99', 'assets/images/products/92.jpg'),
(372, '2', '22', 'Zucchini Dolmas', '15.99', 'assets/images/products/93.jpg'),
(373, '3', '23', 'Adas Polo', '16.99', 'assets/images/products/1.jpg'),
(374, '4', '24', 'Avocado Toast', '12.99', 'assets/images/products/2.jpg'),
(375, '5', '25', 'Basmati Rice', '18.99', 'assets/images/products/3.jpg'),
(376, '6', '26', 'Basteeya', '20.99', 'assets/images/products/4.jpg'),
(377, '7', '27', 'Bastilla Chicken Pie', '15.99', 'assets/images/products/5.jpg'),
(378, '8', '28', 'Beef Lamb Kabobs', '11.99', 'assets/images/products/6.jpg'),
(379, '9', '29', 'Braised Pork Belly Dinner', '15.99', 'assets/images/products/7.jpg'),
(380, '10', '30', 'Branzino', '33.99', 'assets/images/products/8.jpg'),
(381, '1', '31', 'Breakfast Sandwich', '14.99', 'assets/images/products/9.jpg'),
(382, '2', '32', 'Butternut Squash Soup', '8.99', 'assets/images/products/10.jpg'),
(383, '3', '33', 'Chicken Croquette', '15.99', 'assets/images/products/11.jpg'),
(384, '4', '34', 'Chicken Kabob', '19.99', 'assets/images/products/12.jpg'),
(385, '5', '35', 'Chicken Kabob', '24.99', 'assets/images/products/13.jpg'),
(386, '6', '36', 'Chicken Kebabs Plate', '6.99', 'assets/images/products/14.jpg'),
(387, '7', '37', 'Chicken Roulade', '25.99', 'assets/images/products/15.jpg'),
(388, '8', '38', 'Chicken Sandwich', '16.99', 'assets/images/products/16.jpg'),
(389, '9', '39', 'Chicken with Honey & Prunes', '24.99', 'assets/images/products/17.jpg'),
(390, '10', '40', 'Chicken with Lemon & Olives', '24.99', 'assets/images/products/18.jpg'),
(391, '1', '41', 'Chilaquiles Verdes', '17.99', 'assets/images/products/19.jpg'),
(392, '2', '42', 'Chipotle Chilaquiles Dinner', '18.99', 'assets/images/products/20.jpg'),
(393, '3', '43', 'Churros', '10.99', 'assets/images/products/21.jpg'),
(394, '4', '44', 'Creamy Mushroom Soup', '7.99', 'assets/images/products/22.jpg'),
(395, '5', '45', 'Crispy Chicken Dorados Dinner', '16.99', 'assets/images/products/23.jpg'),
(396, '6', '46', 'Duck Skin Fried Rice', '17.99', 'assets/images/products/24.jpg'),
(397, '7', '47', 'Enchiladas De Res Dinner', '21.99', 'assets/images/products/25.jpg'),
(398, '8', '48', 'Enchiladas Rojas Dinner', '19.99', 'assets/images/products/26.jpg'),
(399, '9', '49', 'Firecracker Cauliflower', '16.99', 'assets/images/products/27.jpg'),
(400, '10', '50', 'Fish Tagine', '26.99', 'assets/images/products/28.jpg'),
(401, '1', '1', 'French Toast', '14.99', 'assets/images/products/29.jpg'),
(402, '2', '2', 'Fresh Spring Rolls', '9.99', 'assets/images/products/30.jpg'),
(403, '3', '3', 'Ghormeh Sabzi', '17.99', 'assets/images/products/31.jpg'),
(404, '4', '4', 'Green Plate', '15.99', 'assets/images/products/32.jpg'),
(405, '5', '5', 'Griddled Skirt Steak Dinner', '18.99', 'assets/images/products/33.jpg'),
(406, '6', '6', 'Grilled Arctic Char Dinner', '18.99', 'assets/images/products/34.jpg'),
(407, '7', '7', 'Grilled Chicken', '23.99', 'assets/images/products/35.jpg'),
(408, '8', '8', 'Grilled Lamb Kofte', '16.99', 'assets/images/products/36.jpg'),
(409, '9', '9', 'Harissa', '4.99', 'assets/images/products/37.jpg'),
(410, '10', '10', 'Huevos Benedictos', '18.99', 'assets/images/products/38.jpg'),
(411, '1', '11', 'Huevos Rancheros', '17.99', 'assets/images/products/39.jpg'),
(412, '2', '12', 'Jeweled Rice', '7.99', 'assets/images/products/40.jpg'),
(413, '3', '13', 'Joojeh Kabob', '15.99', 'assets/images/products/41.jpg'),
(414, '4', '14', 'Karniyarik', '25.99', 'assets/images/products/42.jpg'),
(415, '5', '15', 'Kau Soi', '15.99', 'assets/images/products/43.jpg'),
(416, '6', '16', 'Koobideh Kabob', '9.99', 'assets/images/products/44.jpg'),
(417, '7', '17', 'Kookoo Sabzi', '15.99', 'assets/images/products/45.jpg'),
(418, '8', '18', 'Lamb Chops', '21.99', 'assets/images/products/46.jpg'),
(419, '9', '19', 'Lamb Curry', '18.99', 'assets/images/products/47.jpg'),
(420, '10', '20', 'Lamb with Honey & Almonds', '24.99', 'assets/images/products/48.jpg'),
(421, '1', '21', 'Lean Beef Stew', '11.99', 'assets/images/products/49.jpg'),
(422, '2', '22', 'Lentil Soup', '16.99', 'assets/images/products/50.jpg'),
(423, '3', '23', 'Lentil Soup', '0.99', 'assets/images/products/51.jpg'),
(424, '4', '24', 'Levain Toast', '7.99', 'assets/images/products/52.jpg'),
(425, '5', '25', 'Manti', '21.99', 'assets/images/products/53.jpg'),
(426, '6', '26', 'Menemen', '15.99', 'assets/images/products/54.jpg'),
(427, '7', '27', 'Miso Cod', '17.99', 'assets/images/products/55.jpg'),
(428, '8', '28', 'Moroccan Seafood', '26.99', 'assets/images/products/56.jpg'),
(429, '9', '29', 'Papas Bravas', '11.99', 'assets/images/products/57.jpg'),
(430, '10', '30', 'Patatas Bravas', '8.99', 'assets/images/products/58.jpg'),
(431, '1', '31', 'Platha Dipper', '9.99', 'assets/images/products/59.jpg'),
(432, '2', '32', 'Pork Carnitas Dinner', '16.99', 'assets/images/products/60.jpg'),
(433, '3', '33', 'Pork Tocino', '15.99', 'assets/images/products/61.jpg'),
(434, '4', '34', 'Presidio Salad', '13.99', 'assets/images/products/62.jpg'),
(435, '5', '35', 'Pumpkin Pork Stew', '17.99', 'assets/images/products/63.jpg'),
(436, '6', '36', 'Rabbit Kabob', '26.99', 'assets/images/products/64.jpg'),
(437, '7', '37', 'Rainbow Salad', '13.99', 'assets/images/products/65.jpg'),
(438, '8', '38', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', 'assets/images/products/66.jpg'),
(439, '9', '39', 'Roasted Eggplant', '18.99', 'assets/images/products/67.jpg'),
(440, '10', '40', 'Sabzi Panir', '18.99', 'assets/images/products/68.jpg'),
(441, '1', '41', 'Salmon Ochazuke', '17.99', 'assets/images/products/69.jpg'),
(442, '2', '42', 'Samusa Soup', '9.99', 'assets/images/products/70.jpg'),
(443, '3', '43', 'Shiraz Salad', '14.99', 'assets/images/products/71.jpg'),
(444, '4', '44', 'Short Rib', '23.99', 'assets/images/products/72.jpg'),
(445, '5', '45', 'Sopa Azteca', '11.99', 'assets/images/products/73.jpg'),
(446, '6', '46', 'Sopes De Machaca', '18.99', 'assets/images/products/74.jpg'),
(447, '7', '47', 'Sticky Bun', '6.99', 'assets/images/products/75.jpg'),
(448, '8', '48', 'Sticky Finger Pork Riblettes', '12.99', 'assets/images/products/76.jpg'),
(449, '9', '49', 'Sunrise Combo', '16.99', 'assets/images/products/77.jpg'),
(450, '10', '50', 'Take & Bake Chicken Basteeya', '20.99', 'assets/images/products/78.jpg'),
(451, '1', '1', 'Tamarind Chili Shrimp', '18.99', 'assets/images/products/79.jpg'),
(452, '2', '2', 'Taste of Persia', '16.99', 'assets/images/products/80.jpg'),
(453, '3', '3', 'Thai Curry Pot Pie', '15.99', 'assets/images/products/81.jpg'),
(454, '4', '4', 'Tomato Hummus', '8.99', 'assets/images/products/82.jpg'),
(455, '5', '5', 'Trio Spreads', '19.99', 'assets/images/products/83.jpg'),
(456, '6', '6', 'Tuna Ceviche', '12.99', 'assets/images/products/84.jpg'),
(457, '7', '7', 'Turkish Breakfast For 2', '35.99', 'assets/images/products/85.jpg'),
(458, '8', '8', 'Turlu Omelet', '16.99', 'assets/images/products/86.jpg'),
(459, '9', '9', 'Tzatziki', '8.99', 'assets/images/products/87.jpg'),
(460, '10', '10', 'Vegan Tempeh Curry Noodles', '15.99', 'assets/images/products/88.jpg'),
(461, '1', '11', 'Vegetarian Du Chef', '26.99', 'assets/images/products/89.jpg'),
(462, '2', '12', 'Veggie Kabob', '18.99', 'assets/images/products/90.jpg'),
(463, '3', '13', 'Yogurt Salad', '17.99', 'assets/images/products/91.jpg'),
(464, '4', '14', 'Zereshk Polo', '8.99', 'assets/images/products/92.jpg'),
(465, '5', '15', 'Zucchini Dolmas', '15.99', 'assets/images/products/93.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `delivery_note` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `location_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `user_id`, `address`, `city`, `zip`, `state`, `country`, `delivery_note`, `phone`, `location_status`) VALUES
(1, '6', '13 james streeet, oneday', 'Enugu', '23233', 'Enugu', 'Mexico', 'deliver at door step', '17055305528', 'active'),
(2, '7', '46 Adelabu Street', 'Uwani', '40102', 'Enugu', 'Nigeria', 'GGKHHGBG', '+2349071510046', 'active'),
(3, '8', '34 rat avenue', 'Sideny', '23233', 'Queensland', 'Nigeria', 'We will deliver to you', '0705523233', 'active'),
(4, '9', '34 rat avenue', 'Sideny', '23233', 'Queensland', 'Nigeria', 'we  delivered to your door step', '0705523233', 'active'),
(5, '7', '50 Zik Ave, Achara', 'Uwani', '400105', 'Enugu', 'Nigeria', 'Hide food from my lecturer.', '+2349071510046', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `total_price` varchar(250) NOT NULL,
  `products` text NOT NULL,
  `delivery_address` text NOT NULL,
  `delivery_note` text NOT NULL,
  `delivery_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `user_id`, `total_price`, `products`, `delivery_address`, `delivery_note`, `delivery_time`, `delivery_status`) VALUES
(5, '3', '1000', 'Yam, fufu, chicken', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:15:41', 'pending'),
(6, '3', '1000', 'Akara, Buns, Rice', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:17:38', 'pending'),
(7, '3', '1000', 'Beans,Beans', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:20:42', 'pending'),
(8, '9', '72.95', 'Butternut Squash Soup,Bastilla Chicken Pie,Bastilla Chicken Pie,Bastilla Chicken Pie,Bastilla Chicken Pie', '34 rat avenue, Sideny, Queensland', 'we  delivered to your door step', '2022-04-26 18:56:41', 'pending'),
(9, '9', '72.95', 'Butternut Squash Soup,Bastilla Chicken Pie,Bastilla Chicken Pie,Bastilla Chicken Pie,Bastilla Chicken Pie', '34 rat avenue, Sideny, Queensland', 'we  delivered to your door step', '2022-04-26 18:57:22', 'pending'),
(10, '9', '72.95', 'Butternut Squash Soup,Bastilla Chicken Pie,Bastilla Chicken Pie,Bastilla Chicken Pie,Bastilla Chicken Pie', '34 rat avenue, Sideny, Queensland', 'we  delivered to your door step', '2022-04-26 19:01:08', 'pending'),
(11, '7', '66.97', 'Bastilla Chicken Pie,Branzino,Adas Polo', '46 Adelabu Street, Uwani, Enugu', 'GGKHHGBG', '2022-04-27 11:27:05', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(250) NOT NULL,
  `restaurant_pix` text NOT NULL,
  `restaurant_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `restaurant_pix`, `restaurant_address`) VALUES
(1, 'a Mano', 'assets/images/restaurants/restaurant1.jpg', 'Hayes Valley'),
(2, 'Asian American Food Company', 'assets/images/restaurants/restaurant2.jpg', 'Parkside'),
(3, 'Beit Rima', 'assets/images/restaurants/restaurant3.jpg', 'Duboce Triangle'),
(4, 'Beretta', 'assets/images/restaurants/restaurant4.jpg', 'NoPa'),
(5, 'Brenda\'s Meat & Three', 'assets/images/restaurants/restaurant5.jpg', 'NoPa'),
(6, 'Burma Superstar', 'assets/images/restaurants/restaurant6.jpg', 'Inner Richmond'),
(7, 'California Fish Market Restaurant', 'assets/images/restaurants/restaurant7.jpg', 'North Beach/Telegraph Hill'),
(8, 'Daeho Kalbijjim & Beef Soup', 'assets/images/restaurants/restaurant8.jpg', 'Japantown'),
(9, 'Delarosa', 'assets/images/restaurants/restaurant9.jpg', 'Marina/Cow Hollow'),
(10, 'Dumpling House', 'assets/images/restaurants/restaurant10.jpg', 'Castro'),
(11, 'El Mansour', 'assets/images/restaurants/restaurant11.jpg', 'Outer Richmond'),
(12, 'Ernest', 'assets/images/restaurants/restaurant12.jpg', 'Mission'),
(13, 'Farmhouse Kitchen Thai Cuisine', 'assets/images/restaurants/restaurant13.jpg', 'Mission'),
(14, 'Fiorella - Sunset', 'assets/images/restaurants/restaurant14.jpg', 'Inner Sunset'),
(15, 'Fog Harbor Fish House', 'assets/images/restaurants/restaurant15.jpg', 'Fisherman\'s Wharf'),
(16, 'Hodala', 'assets/images/restaurants/restaurant16.jpg', 'Outer Richmond'),
(17, 'Horsefeather', 'assets/images/restaurants/restaurant17.jpg', 'Alamo Square'),
(18, 'Jamie\'s place', 'assets/images/restaurants/restaurant18.jpg', 'Inner Sunset'),
(19, 'Jaranita', 'assets/images/restaurants/restaurant19.jpg', 'Marina/Cow Hollow'),
(20, 'JIJIME', 'assets/images/restaurants/restaurant20.jpg', 'Outer Richmond'),
(21, 'Kokkari Estiatorio', 'assets/images/restaurants/restaurant21.jpg', 'Financial District'),
(22, 'Komaaj', 'assets/images/restaurants/restaurant22.jpg', 'Mission'),
(23, 'Lavash', 'assets/images/restaurants/restaurant23.jpg', 'Inner Sunset'),
(24, 'Le Fantastique', 'assets/images/restaurants/restaurant24.jpg', 'Hayes Valley'),
(25, 'Lily', 'assets/images/restaurants/restaurant25.jpg', 'Inner Richmond'),
(26, 'Lokma', 'assets/images/restaurants/restaurant26.jpg', 'Outer Richmond'),
(27, 'MaMo', 'assets/images/restaurants/restaurant27.jpg', 'Marina/Cow Hollow'),
(28, 'Manna', 'assets/images/restaurants/restaurant28.jpg', 'Inner Sunset'),
(29, 'Marufuku Ramen', 'assets/images/restaurants/restaurant29.jpg', 'Lower Pacific Heights'),
(30, 'Nash Hot Chicken & Ramen', 'assets/images/restaurants/restaurant30.jpg', 'Castro'),
(31, 'Nopa', 'assets/images/restaurants/restaurant31.jpg', 'Alamo Square'),
(32, 'Nopalito', 'assets/images/restaurants/restaurant32.jpg', 'Lower Haight'),
(33, 'Otra', 'assets/images/restaurants/restaurant33.jpg', 'Lower Haight'),
(34, 'Parada 22', 'assets/images/restaurants/restaurant34.jpg', 'The Haight'),
(35, 'Pearl 6101', 'assets/images/restaurants/restaurant35.jpg', 'Outer Richmond'),
(36, 'Picaro', 'assets/images/restaurants/restaurant36.jpg', 'Mission'),
(37, 'Pizza Due', 'assets/images/restaurants/restaurant37.jpg', 'Castro'),
(38, 'Routier', 'assets/images/restaurants/restaurant38.jpg', 'Lower Pacific Heights'),
(39, 'San Tung', 'assets/images/restaurants/restaurant39.jpg', 'Inner Sunset'),
(40, 'Santeria', 'assets/images/restaurants/restaurant40.jpg', 'Castro'),
(41, 'Secret Bar & Lounge', 'assets/images/restaurants/restaurant41.jpg', 'Tenderloin'),
(42, 'Sotto Mare Oysteria & Seafood', 'assets/images/restaurants/restaurant42.jpg', 'North Beach/Telegraph Hill'),
(43, 'Starbelly', 'assets/images/restaurants/restaurant43.jpg', 'Castro'),
(44, 'Suppenk¸che', 'assets/images/restaurants/restaurant44.jpg', 'Hayes Valley'),
(45, 'The Front Porch', 'assets/images/restaurants/restaurant45.jpg', 'Bernal Heights'),
(46, 'The Tailor\'s Son', 'assets/images/restaurants/restaurant46.jpg', 'Lower Pacific Heights'),
(47, 'Udon Mugizo', 'assets/images/restaurants/restaurant47.jpg', 'Lower Pacific Heights'),
(48, 'Ushi Taro Ramen', 'assets/images/restaurants/restaurant48.jpg', 'Inner Sunset'),
(49, 'Vanida Thai Kitchen', 'assets/images/restaurants/restaurant49.jpg', 'Parkside'),
(50, 'Woodhouse Fish Company', 'assets/images/restaurants/restaurant50.jpg', 'Lower Pacific Heights');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_text` longtext NOT NULL,
  `review_author` varchar(250) NOT NULL,
  `review_rating` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_text`, `review_author`, `review_rating`) VALUES
(47, 'Lavash is my most favorite persian/Iranian food place in SF bayarea. I\'m persian/Iranian and foodie, I know what I pick ;). Hey dont forgot, have your rice and kobab with fork and spoon, no knife! :D', 'Mahta H.', '4'),
(49, 'We have been going to this place for so many years. We have had many gatherings here<br>Amazing food, beautiful place, indoors and outdoors. Lovely staff.', 'Cliff F.', '4'),
(1, 'Hands down the best brunch spot in Cole Valley! The first time I came here was actually because the wait at Zazie was too long (~2hrs), while there was no wait here. I\'m just so glad I gave this place a shot because I enjoyed the food at Padrecito so much more. <br><br>I came here with a friend, and we decided to split one savory item and one sweet item, which pretty much solves the biggest brunch dilemma - savory or sweet? We ordered:<br>- Hash de pato (4.75/5): I really enjoyed this twist on a traditional hash with duck carnitas. This dish was tasty, and the meat was very tender. I\'d order this again.<br>- Pancakes de platano (5/5): This is a must order! Unlike traditional pancakes, these pancakes (3) are made with polenta and platano, which added such a great flavor and texture. These pancakes are thick yet light. Everything was plated so nicely too.<br><br>I can\'t wait to come back to try the dinner menu as well!', 'Alice S.', '4'),
(2, 'Good vibes here! The food was delicious, but not everything was to amazing. Top favorite things here was the guacamole, pork belly tacos, ceviche and the quesabirria, they all had amazing flavor and would definitely go back for these! <br><br>The last two being the skirt steak tacos and chilaquiles were not to die for, they were just ok. As for the churros, they are a waste of money do not order churros here, basically plain dough fried with only sugar on them and the mascarpone was like heavy whipping cream with a hint of coffee flavoring.', 'Kihanna R.', '3'),
(3, 'Love Padrecito - have been here many times for brunch and dinner. <br>Food: The food is amazing I\'ve had almost everything on the menu and nothing has disappointed so far. I went for my birthday recently and had the fish tacos - fish was nice and crispy on the outside and soft on the inside. The ceviches are AMAZING and quessabirria is sooo savory, hearty, and flavorful.<br><br>I especially love the cocktails. I love mezcal and unfortunately mezcal cocktails can be hard to come by. Padrecito has a lot of options that are very diverse - some are sweet, tangy, sour, savory. <br><br>Ambiance: really well curated interior design. Lots of warmth in the decor and lighting. I\'ve been for dates, and large group dinners (~12 people) and have seen nothing but excellent service from the staff.', 'Aubriana M.', '4'),
(4, 'Couldnt make it to Zazie coz of the long wait time so decided to pop into the next door restaurant in the area. We were seated right away since the space is quite huge. The upstairs space is quite cozy. We decided to go for the huevos rancheros and huevos Benedictos and ordered coffee for drinks (since they don\'t offer any other espresso drinks). The coffee was quite nice and the food was very tasty with generous portion sizes. Service was very good and our hostess checked on us from time to time to make sure we had everything we need. Great place for brunch!', 'Ankita R.', '4'),
(5, 'Came to the Haight area for brunch but all the restaurants around us were packed and seem to had long wait times. Padrecito came through with the last minute seating and delicious brunch options for all of us.<br><br>If you\'re a fan of breakfast burritos, Padrecito\'s is definitely one I would order. It comes with salsa and guac too! The chips and guac are also absolutely worth it, since they give a ton of guac and an assortment of salsas. The chips are super fresh too. <br><br>For a sweet ending, we ordered a side of the kids pancakes which come with 2 small, fluffy pancakes with berry compote and this delicious dulce de leche sauce that really tied the whole dish together. If you\'re looking for brunch options in the area, or dinner options, Padrecito\'s will definitely come through!', 'Shirin B.', '5'),
(6, 'This restaurant was doing brisk business on an early Wednesday evening. We ordered the Braised Pork Belly Tacos which were very flavorful and beautifully presented;<br>the reliable guacamole w/ chips &amp; salsa; Enchiladas De Res; <br>and the Arctic Char Tacos.<br><br>I preferred the pork belly tacos over the fish tacos, but all in all everything was good. Excellent wait staff!', 'theresa k.', '5'),
(7, 'I haven\'t been to Padrecito in awhile, but it\'s one of my favorite brunch spots.<br><br>I\'ve always been a huge fan of their easy outdoor seating, so key during these times, and how easy it is to be seated during their brunch times, since most people forget or don\'t realize that they serve solid breakfast options.<br><br>I\'m a bit of a strange one - and I love places that serve some sort of seafood for breakfast. For my go-to brunch dish here - I love ordering one of Padrecito\'s fresh salads and adding some arctic char to it - alongside a side of guac.<br><br>From polenta-platano pancakes with mixed berries compote, mango mascarpone and cajeta caramel, to corn masa fritters with coffee whipped crema and spiced agave, and duck carnitas with brussel sprouts, marble potatoes and poblano pepper hash with a fried egg and mole poblano - Padrecito\'s menu items are diverse and fantastic. Though they aren\'t cheap - their brunch dishes are made with outstanding ingredients.<br> <br><br><br>If you don\'t want to brave the long waits at Zazie and other well known brunch spots in the area - try Padrecito!<br><br>Trust.', 'Jessica T.', '5'),
(8, 'I adore guacamole. <br><br>It is easily one of my favorite foods. <br><br>Having just recently gotten back from Sayulita - I have been craving guacamole on the regular. <br><br>Today - my guac pangs were particularly strong - in light of the excessive Cinco de Mayo posts circulating on social media.<br><br>I decided I was going to manifest some blissful avocado magic without the drunken craziness popping up everywhere around the city. I decided to do delivery.<br><br>I am so glad that I chose Padrecito amongst the plethora of possibilities in the city. My meal from here was delicious, well packaged, and it arrived in a timely manner.<br><br>I highly recommend the following order:<br><br>1.) One order of guacamole (pricey but they throw in a TON of fresh chips and some tasty salsas as well)<br><br>2.) One order of the Crudo de Atun - which consists of yellowtail Ahi, mango, avocado, chipotle-agave salsita and just made blue corn chips. This dish is so what\'s up and is bursting with flavor. <br><br>3.) One order of the Arctic Char Tacos, which is lovingly made with an Achiote rub, and paired with an avocado aioli and a mango jicama slaw. The char was perfectly cooked and the skin was divine. <br><br>I was trying to avoid eating the chips - but Padrecito\'s chips are glorious.<br><br>If you are looking for some quality delivery made with care and fresh ingredients - try Padrecito.<br><br>My meal tonight was sensational.<br><br>Trust.', 'Nancy Z.', '3'),
(9, 'Solid neighborhood Mexican spot with great drink options. The place is spacious, with a big bar area- so great for groups as well. <br><br>We had their:<br>fried cod fish tacos- it had a nice a crunch, well seasoned. Loved the mountain of slaw they added on top. <br>Enchiladas was cooked perfectly- hubby loved the meat, and gobbled it up in minutes. <br>Ceviche- fish was fresh, nice appetizer to start off the meal. <br><br>They also have an extensive drink menu, featuring a variety of mezcal.', 'Fallon F.', '3'),
(10, 'So good. Was at a place on haight where we waited in line to be seated for around 10 minutes and then were handed menus and ignored for 10 minutes- hopped on Yelp and found padrecito and decided to walk here instead. So worth! We were seated and had drinks and order taken immediately. <br><br>As an appetizer we got the black bean fundido and it basically filled us up a lot- so beware lol. I got the enchiladas Rojas and yum!!! The cheese on top is to die for. Great portion and flavorful. Boyfriend got the carnitas tacos and they were also flavorful and I loved the arrangement of them. Saw that churros were also on the menu and we regrettably didn\'t get them, but maybe we\'ll be back because now I can\'t stop thinking about them.', 'Cedric C.', '5'),
(11, 'Outerlands is one of my absolute favorite restaurants in San Francisco. Had a wonderful lunch there today. I ordered the Salad, I added their Chicken Salad to it and was SO delicious and filling. I had a Sunset Fog and DONUT for dessert...YUMMY! The customer service is incredible, the staff is friendly and helpful. This place is an absolute gem and I\'m really hoping they open up for dinner soon I miss it!', 'Eli F.', '5'),
(12, 'Good vibes, a lovely seating area outside and great service. <br><br>The food was pretty good, standard American fair. <br><br>Smashed potatoes; actually highly recommend. Some of the best potatos ever! <br><br>Breakfast sandwich: decent with pork, not super special<br><br>Grilled cheese: decadent cheesiness', 'Shannon H.', '3'),
(13, 'I have been here once before back in 2017 and from what I had remembered I was decently satisfied, so I thought to try it once more. <br><br>First off, the way they run the restaurant is incredibly efficient, you order before you are seated so all they have to do is just bring your food straight to the table. We got our food unbelievably fast and every employee we interacted with was incredibly kind. They do have a 20% tip included with every bill, however as someone who has worked in the restaurant industry once before, I very much appreciated it them making sure their staff has a livable wage. <br><br>Now for the food, the presentation was aesthetic and cooked quite well. We got the iced green tea which was strong but refreshing, the Dutch pancake which was fluffy and a great crispiness on the on the outside, and the breakfast sandwich. The breakfast sandwich was my least favorite menu item due to the lack of flavor which was disappointing. The only reason why I wouldn\'t give this place the full five stars is due to the fact that most of their food wasn\'t spiced very much, which made for a blander flavor.<br><br>However I will say, if I need a brunch spot in the sunset - this will most definitely be my go to place. It\'s', 'Zena K.', '5'),
(14, 'We got to-go on a sunny Monday afternoon as they were about to close. After ordering, we checked out the nearby shops as we waited for a text message letting us know that our open-faced Chicken Salad Sandwich and Danish Pancake were ready to be picked up. The Chicken Salad Sandwich is one of the more balanced sandwiches I\'ve had: the richness of a cream/mayo-based chicken salad pairs and contrasts well with the pickled carrot shavings and the crispness of the fresh sliced apples. The extra greens and the fact that it really is an open-faced sandwich doesn\'t make it the neatest thing to eat -- maybe it\'s designed to be a conversation starter or something that would make your fellow brunch mates chuckle at you as should try to balance the leafy greens that\'s going down on some nicely toasted (and not to sour) sourdough. Only reason for a deduction is that it really is awkward to eat but very tasty, fresh, light and very filling at the same time. <br><br>As for the Danish Pancake, we opted not to add the house ricotta cheese and can describe it as a savory-sweet type of entree. It\'s akin to a Yorkshire pudding with some sweetened warmed apple filling, candied walnuts and a dusting of powered sugar. Innovative and clever and not overwhelmingly sweet but not too savory either. Like the sandwich above, brilliantly balanced.', 'Kevin H.', '3'),
(15, 'As mentioned in my previous post, I really like their levain bread so ordered their levain toast during a recent visit. Toast served with butter and apple butter - both yummy. Also ordered the chia bowl - love the pears on top. <br><br>Hubs ordered the Tuscan bean soup and grilled cheese w/ bacon added. Could never go wrong with the grilled cheese, in our opinion - a fave of ours. Soup was also flavorful, but quite filling. <br><br>Outside seating only at the moment, but we happened to visit on a nice sunny day. Only complaint was that our regular coffees tasted kinda bitter - I couldn\'t finish it. Otherwise, we tend to enjoy our meals whenever we visit.', 'Michele T.', '3'),
(16, 'It\'s been a while since we last visited Outerlands, and I think the food is just as solid as always. <br><br>The Grilled Cheese is always my go to, mainly because of their bread. Perfect amount of saltiness from the cheese. So good! It was a cold day so also ordered the Squash soup - creamy and flavorful. Hubs ordered the Breakfast sandwich and added the bacon. At first it seems small but he said it was just the right amount. <br><br>I also ordered the Sunset Fog - ginger apple cider with steamed oat milk. It tastes like a warm apple pie in a cup - so comforting and yummy.', 'Olivia T.', '4'),
(17, 'I have been wanting to try Outerlands for a while now. My friend and I went to the restaurant around 10:30 on a Saturday morning. We drove and were able to find parking after circling the block for about 5 minutes. We put our name on the list and had to wait about 45 minutes to be seated. When they have a table for you, you order at the host stand and then sit down and wait for your food. All seating is outside, but we had a heater above us so we weren\'t chilly. <br><br>I was pretty underwhelmed with the food. We ordered the breakfast sandwich, the Dutch pancake with house ricotta, and a side of bacon. The breakfast sandwich was very average - it was good but not anything memorable. We were unfortunately very underwhelmed with the Dutch pancake. It really didn\'t have much flavor, and the house ricotta didn\'t really add anything. <br><br>Overall, I didn\'t feel like the hype or the 45 minute wait were really worth it in terms of the food.', 'Ajay K.', '4'),
(18, 'A solid brunch spot if you\'re in Outer Sunset. Their famous levain toast was good (not necessarily memorable) and it came with salted butter and apple sauce. Our favorite dish was the chia bowl, which although a bit small, was well put together in terms of flavor with a good dose of pears and honey.', 'Little D.', '5'),
(19, 'Went for a late breakfast and decided on the Grilled Cheese with bacon. Definitely a tasty, hearty grilled sandwich with tons of flavor. When I get back to the outer sunset I\'ll definitely stop by for another one.<br><br>Great service. They seem to work in two\'s, giving the impression that they\'re there to serve you and make you comfortable - kind of like inviting you into their small family of friends. <br><br>Great location. Awesome food. I went around 10am on a Friday, but on a weekend I\'d probably stop by as early as possible to avoid a long wait.', 'Chris L.', '4'),
(20, 'Have been wanting to try this place for awhile and wish I had read the recent reviews before making the drive over. Dutch pancake was terrible. As per the photo, the first Dutch pancake I was served was completely burnt and hard on the outside. I would\'ve probably attempted to eat it but it was inedible when I tried to crack off a piece - it also strongly smelled burnt. It looked and smelled like my cooking when I forget about it in the oven. I am surprised I was served this item given its appearance and smell. <br><br>I asked the server if the item was supposed to look like that and they said they could understand if I didn\'t want that texture and would bring a new one. The new one wasn\'t burnt but it also was not good. I like dry foods and well-done meats and baked goods (I am a end-crust, edge brownie, well-done burger type of person), but this was dry with no flavor and terrible. The texture was crunchy and cold. I didn\'t even eat half of it even though it was $20 including the additional charges.<br><br>The Dutch pancake situation made a lot more sense when I went to the bathroom and saw all of the pre-made Dutch pancakes sitting out on a tray (see pictures attached). I thought Dutch pancakes were the type of item you needed to make to order due to the texture. It looks like they make them in advance and then reheat them which is why my first one had such a crispy/burnt overall texture and why the second one came so quickly and also did not taste good. If this is a pre-made and reheated item I feel like it shouldn\'t be included in the regular menu items and should be under \"baked goods\" - then my expectation would be that it was made in advance and subsequently I wouldn\'t order it. <br><br>I asked a staff person if the Dutch pancakes were made in advance and they said \"no, however they are made 4 at a time.\" There were more than 4 Dutch pancakes on that tray and it was 1:30pm and not busy, so the veracity of that statement does not seem to match what was observed.', 'Ben S.', '4'),
(21, 'Amazing food, good service, and not much of a wait time either at 7:30 on a Saturday! We wanted to eat at Burma Superstar but because of the wait time, we ended up going to B Star which was an amazing experience.<br><br>Solid vegan options - I got the Samusa Soup, Tea Leaf Salad, and Coconut rice, and they were all incredibly delicious. Highly recommend!', 'Eesen S.', '4'),
(22, 'B star is owned by the same people who own Burma Love and Burma Superstar, but it\'s more of a fusion restaurant incorporating other Asian cuisines as well. I feel like the portions were smaller here than the other two, but the flavor was not lacking! We loved the food we got here and I would return in a heartbeat!<br><br>Coconut chicken curry noodles- this reminds me of the nan pia dok from Burma love/superstar, maybe the same with a different name here. Nonetheless, incredible! Love the fact that the noodle dish doesn\'t feel like it should be gluten free but it is!<br><br>Tea leaf salad- ive been having tea leaf salad withdrawals since the other Burmese places in the city haven\'t had tea leaves, but this made up for that as it was delectable!<br><br>Longganisa- the sausage was very flavorful but wasn\'t a standout dish to me, probably wouldn\'t order again. <br><br>Mango lamb curry with coconut rice- sooo yummy! Probably my favorite dish we got there since it perfectly combined savory and sweet and the meat was so tender and flavorful.', 'Devyn D.', '4'),
(23, 'B Star ranks with the tastiest /creative menus in the city. Every appetizer, soup &amp; main dish was de licious!<br>The service excellent ( we had a waitress Emily) .<br>The prices are right.<br>B Star has serviced through the last 2 years...<br>Not to be taken lightly.', 'Jesse R.', '4'),
(24, 'I am so glad I found this place! There are so few great laksa places in the city and it is my favorite Burmese dish. <br><br>Even though I ordered through delivery, the meal came hot and the perfect eating temp. Laksa includes the shrimp, noodles, onions, basil, hard boiled egg and tofu puffs - the best part - SURPRISE PORK in the laksa broth. <br><br>Great for leftovers as well! Looking forward to ordering Khao Soi and their Tea Leaf Salad!', 'Connie N.', '3'),
(25, 'I was here years ago, forgot about it, but recently dined here again and was instantly reminded of how amazing this restaurant was. My cousin called to make a reservation and although we arrived early, were seated indoors right away without any issue. <br><br>We ordered a variety of food; firecracker cauliflower, laksa, curry pot pie with salmon, miso cod, kung pao chicken and the tea leaf salad. Originally we were going to order both the firecracker cauliflower and the sesame chicken but the waitress said that both dishes were made of the same sauce and recommended we order something else so we opted for the kung pao chicken instead. The firecracker cauliflower was so good. My cousin loved the sauce and wanted to put it on his rice. They had run out of chicken for the curry pot pie, but the salmon was perfect. The laksa was probably my favorite dish of the meal. I loved the noodle soup and the flavor. I enjoyed the tea leaf salad but have liked it better at another place so I\'m not sure that I will order it again here. I can\'t wait to dine here again!', 'Michelle C.', '5'),
(26, 'I love how Richmond and SF is filled with really hip and delicious Burmese/Southeast Asian food! Joints such as B Star and Burma Superstar really make Richmond district such a cool place to visit. <br><br>Food here was nothing short of spectacular. While their menu seems a bit disparate with foods from different cuisines (think Indian, Thai, Malay, Indo + Burmese fusion), there are nuggets of Burmese gems to be found. Their Laksa is a twist on the traditionally Malay/Indo dish with a thicker coconut orange curry broth that is spicier and tangier than their traditional cousin. Platha is a twist on a roti with a thicker, aromatic bread compared to its close Indian cousin, and the coconut curry was super delicious! <br><br>I also got their viet coffee which was interesting as it was served with condensed milk not mixed on the bottom and separate from the coffee itself. While it was hard to make a homogenous mixture from these two components, it did make the coffee less sweet and less overpowered by sugar - to my liking. <br><br>This place does get crowded. We were here at 1pm Tuesday during the height of lunch service, and was surprisingly packed. <br><br>Will miss this place when I\'m back to the East coast!', 'Jonghan L.', '4'),
(27, 'A few months back, I had tried B Star through an ordering service once and got the Tea Leaf Salad and the Coconut Chicken Curry Noodles. I actually thought the Tea Leaf Salad was just okay and a bit overhyped. The fish sauce flavor was pretty heavy, and I thought it overpowered the salad. Wasn\'t too impressed and didn\'t think too much of it. <br><br>BUT I recently went a second time to eat there and was so so impressed! My friend and I started with the Platha Dipper, which was so flaky and crispy. The curry sauce that came with it was absolutely delectable. As for our mains, I ordered the Miso Cod, and my friend ordered the Ochazuke. The Miso Cod had an almost-melt-in-your-mouth texture, while the Salmon Ochazuke was super hearty. <br><br>They did give and charge us for a Jasmine Rice but they were to quick to fix it on our check. I definitely want to be back soon so I can try more items on their menu!', 'Cathy P.', '3'),
(28, 'Burmese fusion that spins Burmese classics in interesting new ways. Note that parking on weekends is very challenging, especially with a farmers market on Sundays.<br><br>Veggie Samosa: Potato filled fried samosa in bite size form. Delicious.<br><br>Pork Jook: Jook is usually a simple dish, so those looking for strong bold flavors just keep that in mind. But this warm hearty jook was exactly what I was seeking, bringing memories from childhood. The toppings were flavorful, and the pork was very good.<br><br>Thai Curry Pot Pie: What a combo. Something like a Tom Kha soup that\'s coconut milk based and tangy, but topped with the flakiest pot pie crust. This is a fusion that totally works! Delicious.', 'Eddy K.', '5'),
(29, 'I\'ve been to B Star many times since it\'s opening and haven\'t been disappointed until I tried their Laksa for a Thursday brunch. <br><br>As I\'ve tried Laksa in other restaurants in the Bay Area as well as Singapore, I was only expecting a variation of the dish. My review is not based on authenticity but more importantly the lack of fresh ingredients. <br><br>The rice noodles were soggy and unpleasant to eat. The shrimp were charred and had a mealy texture unlike a freshly cooked item. Obviously both were not cooked recently. This is not acceptable for an almost $16 entree.', 'TJ L.', '5'),
(30, 'Went there for brunch with reservation. My friends really like this place but it\'s my first time. We ordered the roti (pancake with scallion), b sprouts, miso cod, the rice in tea dish, and kau soi (Thai curry chicken noodles). I also tried then mango Lassi! I think the noodle was just ok (should have ordered the miso cod haha), but the b sprouts are delicious!', 'Xiaoying S.', '4'),
(31, 'I came here for brunch and it was exceptional! Every ingredient they used were so fresh and it was top notch quality! I had their Turkish coffee which was very dark and delicious! They use the beans from Andytown and poured it in a little cup. I ordered the sunrise combo which came with fluffy pancakes topped with fresh blueberry jam and Greek yogurt. It was so delicious! Also had a side of sausage and eggs. It was the perfect sweet and savory combo. <br><br>I tried my bf\'s chicken sandwich and the potatoes too and they were also really good! The restaurant was quiet and has outdoor seating as well. I cannot wait to come back to try their dinner!', 'Lisa N.', '4'),
(32, 'Summary:<br>Solid brunch that\'s fun and visually appealing<br><br>Details:<br>* Two or more of you? Try the Turkish breakfast for a bit of fun: you get a mix of small bites and flavors, along with a heartier side of eggs and meat<br>* Side of roasted chili was great, and while the sujuk is good, it\'s quite salty on its own (so eat it with everything else provided)<br>* Nothing in the set on its own is mind-blowing, but it came together well as a whole<br>* Blueberry pancakes were surprisingly solid, and served with a healthy dollop of Greek yogurt instead of butter/cream<br>* Outdoor seating available, both covered and uncovered<br><br>Accessibility:<br>Can\'t speak for the inside, but there are plenty of accessible tables in their outdoor seating setup!', 'Johnny W.', '5'),
(33, 'Just found our new favorite spot!! Came here on a Friday night, had an early reservation made through OpenTable. I had noted it was our anniversary (17yrs!!) and no kidding, from start to finish it was freakin amazing. They brought us over two glasses of complimentary champagne!! Lovely brut. We started with the zucchini dolmas - hot, fresh, delicious. Hubs ordered the short ribs and I don\'t what that sauce was but these fork tender morsels melted in your mouth. I had the Karniyarik. Which, while unable to pronounce it, was thoroughly able to enjoy it! A generous amount of ground beef, delicately flavored, in the shell of roasted eggplant, over top of perfectly creamy mashed potatoes, served with 3 asparagus spears. Because we\'re hedonists, we finished with a Turkish coffee and tea as well as the Revani. They top a basic cake with a sweet syrup and what they call whipped cream but was so rich, I thought it was cream cheese. So so so good. Honestly, we\'ve been to so many places that we loved, quite a few we liked, and many more that were just okay. This place ROCKS! Service was great, who knows what it\'s like when it\'s busy though as it often is, it\'s clearly a neighborhood favorite. Still can\'t believe it took us so long to get in there, we\'ve been missing out - going back tomorrow for breakfast. PS wine list was impressive. PPS love the industrial style decor, bathroom was gorgeous, and the flatware is very nice 18/10 with a beautiful feel to it.<br><br>And............. We\'re back!! Came back for breakfast and were every bit as happy as the night before. Turkish breakfast, sweet, savory delectable bits of variety. I\'d read through some of the negative reviews as I find it interesting what people complain about. The portion isn\'t small, it\'s light food, it\'s at least four eggs, (kind of standard for two ppl), and all the other good things with it. We left full and my hubs is one of those skinny guys who eats a ton so trust me, it\'s a delicious filling meal. <br><br>Already planning our return visit!!', 'Natalie R.', '4'),
(34, 'This would be one of my favorite places for brunch if I lived in SF. My omelette was very good. The potatoes too, which is surprising because I feel like at many other brunch places the potatoes are kind of like a dead filler that we don\'t actually want. I also tried a bite of their chicken sandwich and you can actually taste the grill. Absolutely wonderful, and would love to come back here again.', 'Luci L.', '5'),
(35, 'Food, service, and ambience 10/10!<br><br>The trio spread was such a good appetizer, the eggplant hummus &amp; tzatziki were so creamy and light. The PAPAS BRAVAS ARE A MUST HERE - fried potatoes with a creamy feta topping! The eggplant was surprisingly so delightful! But the MANTI (dumplings) were a FAVORITE here. I\'ve never had any dish like this before! <br><br>Loved the cozy and lovely ambiance -- they gave us blankets &amp; had a heater outside so it was toasty and warm while enjoying our food.', 'Yuri J.', '4'),
(36, 'In the search for a good Saturday brunch, I ended up here and I\'m so glad I did!<br><br>It was super busy on Saturday, but we got lucky being seated at a table right away inside. I already knew I wanted to try the greek yogurt pancakes after hearing great things about and we got a side of Baba Ganoush with pita.<br><br>The food came out not too long after and those pancakes were amazing! The tangy from the yogurt pairs really well with the pancakes and the pancakes were fluffy. The blueberry compote comes through and enhances the taste! The Baba Ganoush was great as well.<br><br>I\'ll definitely be back here again either for brunch or next time for dinner!', 'Gurmun S.', '5'),
(37, 'I\'ve had this spot on my list for a while and ended up coming here around Thursday brunch. Quick seating inside and parking in the area was relatively easy around this time, especially for SF. The service was really great and the food was delicious.<br><br>Food highlights:<br>- Turkish breakfast for two - comes with eggs, pita, and so many sides<br>- Greek yogurt pancakes - very fluffy and comes with blueberry compote<br>- Turkish coffee', 'Rayna U.', '5'),
(38, 'Husband, kiddo, and I visited this cute neighborhood gem for dinner on a Friday night. Super chic yet laid back vibe indoors, lots of very inviting-looking tables with heat lamps for outdoor dining. <br><br>We ordered everything to share, \'cause sharing is caring and that\'s how we roll in this family: The trio of spreads (Muhammara, Baba Ganoush, Tzatziki) served with warm pillowy pita bread, zucchini dolmas, braised short ribs, Manti dumplings, and the halibut. So delicious! We almost finished every last bite of food!<br><br>Great wine list and lots of great options by the glass. We especially loved the Atma Assyrtiko from Greece, which had a lovely salinity and minerality that paired so well with the halibut. The Okuzgozu from Turkey was a balanced red that was delicious with the short rib. Thanks for introducing us to these wines!<br><br>Great service! Staff were all so lovely, warm, and efficient, and wearing masks (this act of caring and courtesy is well-appreciated by our family. Especially me, as a critical care nurse.). <br><br>Brilliant and well done, Lokma! Thank you for a wonderful dinner and evening out!', 'Beth K.', '5'),
(39, 'We stopped by here for lunch on a Sunday afternoon after boating at Stow Lake. Their Breakfast and Lunch menu is limited compared to dinner menu and also they were not able to seat us inside even at 2 pm even though it was really cold &amp; windy outside for our kids. With that said, these were the only two reason why I rated this 4 instead of 5. The food here is just amazing and also the hostess was kind enough to get some blankets for us to keep us all warm. We got the lamb wraps and they were really tasty, fresh and just perfect. We have not had better lamb wraps before. Also, the hot potatoes and yogurt dip in the wrap plate were also very good. We also got their Presidio salad with grilled chicken and it was amazing. The chicken sandwich, flan, turkish tea and coffee were decent. Overall we enjoyed our dining experience here.', 'jas k.', '4'),
(40, 'This place is delicious , the fried potato appetizer was unique and tasty. The Alaskan Halibut was perfect , flaky , tender and favorable . I highly recommend the Baklava and Turkish coffee for dessert. Not only was I eating a delicious meal but the experience was phenomenal as well . I felt transported to Istanbul and imagine i was eating on the banks of the Euphrates river.', 'Lily M.', '4'),
(41, 'A friend recommended this place and said it\'s the best Persian restaurant in SF! Came with two others - the three of us split the eggplant dip appetizer and the Taste of Persia (recommended for 2 people). The food was amazing!!! The eggplant dip was pretty unique, I haven\'t had it before. And all three meat options were juicy and delicious. Portion size was great as well, we had some leftovers afterward. <br><br>Service was perfect as well - a waitress came by to refill water pretty often without us having to flag someone down. We called a reservation for 7:30PM on a Tues night earlier in the day to make sure we got a table. Restaurant was pretty packed, and it was pretty difficult to hear each other because of the noise level + music. <br><br>Would definitely come back to try some other entree options!', 'Audrey C.', '4'),
(42, 'I love this spot! My boyfriend grew up in Iran - per him, it\'s the best Persian food in the city, and based on my limited experience, I also agree. <br>Appetizer: Tah Dig. Crispy rice mixed with your choice of stew. Don\'t question, just get it.<br>Entree: I\'ve ordered the skewer of mahi, prawns, and veggies (I\'m pescatarian) so far. All are good, but the prawns are best! Boyfriend usually orders saltani, he says it is amazing. Portions are HUGE so come hungry!<br>Service is always impeccable, and ambience both indoors and outdoors is on point. Pro tip: try to sit in the lavash/flower garden if it\'s available! Cute for a date night :)', 'Liz L.', '5'),
(43, 'I used to come here all the time, with UCSF colleagues or solo, but I\'m sad to say that it will end today. The space is still beautifully kept, but the food isn\'t what it used to be. Moreover, the male server (I think it\'s the owner\'s son) is annoying and shouldn\'t be there if he\'s going to have this \"whatever\" vibe that makes the entire dining experience a wreck. <br><br>They changed the protein in my favorite dish: Bademjan -- from beef to Lamb shank. I don\'t eat lamb, so I tried their \"Jeweled Rice\" dish and a glass of wine. My eyes almost popped out of their sockets as I was served this small plate with a heaping mound of raisins over a very small portion of chicken and rice. I looked around to see if anyone else had ordered this, but it was mainly kabobs. Anyway, I started thinking of ways to balance out the over-powering sweetness of all these raisins and dates. I reported the situation to the server and showed him the $22 dish of raisins. He just looked at me with this blank, whatever look on his masked face. Trying to hold my anger at bay, I asked if I could get a small side of yogurt. He offered three types, and I chose one. Within minutes, the server brought this big-ass bowl of it (almost half of the size of my Jeweled Rice plate) and charged me $9. I sat there thinking, you really expect me to use all of the yogurt for this small plate of raisins? In my second attempt, I asked if I could possibly get just a little bit more rice, but this time, he said it would cost an additional $6! I couldn\'t even eat at this point, especially because the server was a prick. I wasted ~$50 and went home to a hot pocket. Definitely won\'t be coming back.', 'D L.', '4'),
(44, 'I live just a few blocks from this family-run delight, and would travel 50 miles, if I had to, for the amazing food. I was close to crying when they were closed for a bit (due to fire), but the silver lining is that repairs allowed them to renovate and expand the space and it\'s just as warm, welcoming and beautiful as ever. This ambiance resonates from it\'s owner, who gives off a maternal, strong-spirited energy. Personally, I think it\'s really cool to see the owner welcome you (that\'s just good business). The service is excellent, as members of the family will serve you with a perfect amount of attentiveness and consideration. None of that kiss-ass stuff... just good, quality service that allows you to enjoy the experience of it all. <br><br>As for the food: A-MAZING! My go-to is their Bademjan - a stew perfected cooked with eggplants, tomatoes, unripe grapes and tender beef. Served with rice, it hits the spot on a cold SF day/night. And if you\'re in the mood to finish the meal off with something sweet, I highly recommend their \"special\" dessert: Baghlava with pistachio ice cream. Had to hold back from licking the plate. <br><br>That being said, go and check this place out... but I recommend reservations, as the place fills up quickly.', 'Billy V.', '5'),
(45, '$28 for the joojeh soltani to go is very pricey. The chicken and meat were tender and cooked on charcoal so that makes it taste 100x better. It came went plenty of bread to eat with. It may look like there\'s a lot of rice but it definitely wasn\'t it was a small layer dont be fooled. Rice is also cheap so im not sure why they could balance the meat to rice ratio out. Plenty of herbs though and fresh as well, I appreciated that. Overall I would be coming back once in a blue moon to get my authentic kebab fix.', 'Ali N.', '3'),
(46, 'This is as authentic as it gets. Tastes exactly how my persian friends made kebobs for me. Cooked on charcoal, tender and flavorful. Overall I would go here again once in a blue to get my fixing. I say this because it is pricey<br><br>Pros<br>-Plenty of meat cooked to perfection and delicious<br>-lots of fresh veggies<br><br>Cons<br>-the picture may look like a lot of rice but it\'s a small layer definitely needs more to balance the amount of meat given<br>-lime that came with it was dry no juice left<br>-needs to come with yogurt (personal preference)<br>-$28 for the joojeh soltani combo (tax included)', 'Amanda C.', '4'),
(47, 'Lavash is my most favorite persian/Iranian food place in SF bayarea. I\'m persian/Iranian and foodie, I know what I pick ;). Hey dont forgot, have your rice and kobab with fork and spoon, no knife! :D', 'Mahta H.', '4'),
(48, 'This place always hits the spot. I love the lavash because unlike most mediterranean/persian places with \"thick\" pita bread, the lavash is thin and it allows for more room in your stomach! We ordered:<br>- KashK-e Bademjan: Roasted eggplant dish with so much flavor, the roasted garlic really was the cherry on top because it went really well with the eggplant. Also the yogurt helped to balance the flavor out really well.<br>- Lavash Special for 2: Came with joojeh which is their chicken skewer, koobideh which is there beef and lamb skewer, vegetable skewer, and Shishlik which were 2 lamb chops that were super flavorful. <br><br>The chicken was super moist and flavorful, but the koobideh was probably the best thing I tasted there! It was not too salty, flavored well, the meat was extremely tender as well. <br><br>I definitely would come back over and over again for Persian food! It also has indoor and outdoor seating, with a \"Lavash Garden\" is a little flower booth with a table for 2-4!', 'Jason G.', '5'),
(49, 'We have been going to this place for so many years. We have had many gatherings here<br>Amazing food, beautiful place, indoors and outdoors. Lovely staff.', 'Cliff F.', '4'),
(50, 'Did a group takeout this weekend, and wow this is some excellent food. <br><br>The rice we had was delicious. I think it was the Basmati rice with barberries, raisins &amp; sautÈed onions. So very flavorful.<br><br>Meats we tried included Koobideh and Chicken Koobideh (ground meats cooked on a skewer), Joojeh (chicken breast and thigh meat pieces), and Barg (pretty sure this is skirt steak.) All of the meat was cooked to juicy perfection with a nice level of seasoning. <br><br>Kashk-E Bademjan is an eggplant dip similar to babaganoush and accompanies the meats exceptionally well, as does their yogurt dip.<br><br>The Shiraz salad was a nice cooling complement to the hot dishes, and added some freshness to the meal.<br><br>Their pita seems to be store bought out of a bag, so it\'s fine, but nothing to rave about.<br><br>I wish this place were near where I live because I\'d frequent them.', 'Andy W.', '5'),
(51, 'Variety of vegetarian options: 4/5<br><br>Quite honestly one of my favorite restaurants in SF - the interior was just beautiful and the service was fantastic. Every dish, while using a unique combination of flavors and ingredients, tasted incredible. Even the radicchio dish (and I usually don\'t like radicchio) was incredible with the cocoa nibs/granola mixed in. Highly recommend the corn bread with saffron butter and the couscous - both so well made. Also a large option of non alcoholic drinks as well which I really appreciated. Will definitely be coming back with family and friends for fancier occasions!', 'Lavanya K.', '4'),
(52, 'It was an ok experience. For a place that\'s pricey I\'d have expected a better experience. <br><br>The ambience is nice. The service was bad, the waiter we had was borderline rude and didn\'t help with the menu. <br><br>The lamb shank was decent<br>Roasted prawns were exceptional and worth trying if you like seafood<br>We also had a couple of starters which were good. <br><br>For a Moroccan place they did not have tagine which was very surprising', 'Avinash S.', '4'),
(53, 'I have been looking forward to eating at Aziza for a LONG time. This was a surprisingly underwhelming experience all around. Outside parklet space is bare and forlorn. We had a beat up table with two long burn marks on it. Not even a candle. It felt like nobody thought about the ambiance at all. Space was not enclosed enough to be heated by heat lamp on a cold night. Wine by the glass was expensive and the pour was very small. We got three spread appetizer which is three bite size portions with one small bread per person-you are charged $2 per extra piece which at this price point feels tacky.<br><br>My vegetarian entree bowl of couscous had one piece of small vegetable, four nice raisins a few scattered saffron threads and a teaspoon squirt of flavour. I understand subtle, understated flavour--this was not that. Maybe the meat dishes are better? All this for a $200+ meal for three.', 'Bolo B.', '5'),
(54, 'Not only was the food great but service from Dorothy was outstanding! Every establishment worthy of a Michelin Star should have a Dorothy. We have dined in many multiple starred Michelin (and I was a Luxury Flagship General Manager for many brands) that does not understand that excellent service can be executed with warmth and efficiency. Now for the food...we wanted to eat light in anticipation with the holiday weekend and No Meat Friday...and decided to \"graze\" the menu. We started with the Three Dips: White Beans, Smoked Trout with Roe and Piquillo...which came with Flat Bread (and we ordered two more orders of the Flat Bread...there goes \"light\"). Then we grazed on the Corn Bread with Harissa Butter...and Hand Rolled Couscous. We shared the Bronzino...which was amazing! There was no room for dessert in our tummies so we ended with the Morrocan Mint Tea. Great light dinner and we will be back for sure! We will also try the sister restaurant in SoMa as well. Kudos to the Manager and Owner! (Not in photo was the Couscous)...', 'Gina S.', '5'),
(55, 'Finding this place for a Covid-safe anniversary celebration amidst all the Omicron Variant buzz was such a delight. We were perusing options for an anniversary date night and came across this option just across the bridge from Marin. It was easy to make a reservation at one of their \"parklets\" which is genius--your own little semi private dining booth outdoors (see pic!). We felt super safe, since there were barriers between us and other diners, and it was completely outside. Each parklet also had a lovely heat lamp to help keep us warm (though we heeded their warnings and bundled up!) <br><br>Service was impeccable--not only did they wish us Happy Anniversary upon seating us, they also brought out some complimentary sparkling white wine for us to toast. Our waiter also recalled that I listed on my reservation that I we are vegetarian and I don\'t eat eggs, and made sure this aligned with our order. Our waiter was really fun and made the dining experience enjoyable. <br><br>Now onto the food! The star of the show for me is a split between the couscous dish and the cornbread. The cornbread was was crispy, gooey, and super corn-y. It went so well with harissa butter, and I am dreaming of that flavor bomb even 24 hours later. The couscous was something I could eat literally everyday. It was light and I loved the flavor of tamarind (I think) and the combination of cauliflower and mushrooms. Honestly, it was my dream dish. We got two appetizers (raddichio and burrata) that I could have done without, but my partner loved them. I also have to shoutout to their cocktails. I am not really into cocktails and usually just stick to wine, but I am a huge tea drinker. Their \"handwarmer\" cocktail seems like it was basically made for me. It\'s literally alcoholic mint tea, and comes in a kettle so you can keep serving yourself a warm cup. Definitely recommend!', 'Anila Y.', '5'),
(56, 'I hadn\'t been to Aziza since the remodel and never for Brunch. Met a couple friends today and it was amazing. The decor is quite different from how it was the last time (a large group for dinner) but very pleasant inside. We shared the Burrata starter, then my two dining companions both had the Eggs Benedict - which looked outstanding, I had the Soft Scrambled eggs with Zaatar seasoned avocado &amp; seeded rye toast - delicious - it had a drizzle of nice olive oil around the eggs, and I added a side of the Merguez sausage which was killer and had (I think) a Harissa sauce on the side. Two of us had the fresh mint Moroccan tea which was lovely. We ended with the Date cake, which was like a sticky toffee pudding with a butterscotch sauce and crËme fraÓche ice cream situation. We all were very pleased with our meal and had a great time. Will be back for dinner and the lamb shank!!', 'Kimberly B.', '3'),
(57, 'We came here a few months ago for dinner for outdoor dining. It was such a great and memorable experience. <br><br>We ordered<br>- trio of spreads: very beautifully presented and super tasty (get this!)<br>- a whole fish (dorade?): a bit on the sour side but delicious<br>- shakshuka: warm and rich, melts in your mouth<br>- broccolini<br>- moroccan mint tea<br><br>All of them were super delicious. We were impressed by the quality of food, comfort of outdoor dining area, and warm friendly serve staff. We can\'t wait to be back.', 'Wendy K.', '4'),
(58, 'First time trying Moroccan food and it was absolutely amazing. The venue and food is on the fancier end and came here on Valentine\'s Day. They also decorating very cutely with heart shaped balloons. <br><br>Would highly recommend trying the trio spread (they\'re well known for that) as well as the lamb shank. The lamb shank portion is hugeee and definitely enough for 2 people with a smaller appetite or 1 person with a large appetite. We also ordered the Branzino fish which had an amazing meld of citrusy flavors served on top of a bed of potatoes and what seemed like squash. <br><br>For a special drink, would recommend trying to hand warmer which is a hot Moroccan tea with bourbon. Just noting that the bourbon is a bit on the lighter end so perfect for those that don\'t like a strong alcohol taste.<br><br>Definitely check out Aziza! It\'s a really nice destination for a more special event.', 'Stephanie L.', '4'),
(59, 'Nice ambiance but food is either a miss or only ok <br>At a so-called Moroccan restaurant I expect bastilla and tajine. They have one of each. The bastilla is traditionally stuffed with pigeon, chicken or seafood in Morocco. Aziza\'s is chicken, and the menu description sounds traditional. ( the usual mix is nuts, eggs, spices. It is dusted with powdered sugar and is a masterpiece in world cuisine). However, Aziza\'s was vinegary in an unpleasant way, very wet -- almost gluey-- and however they decided to change the traditional spices was not a good move. It was not pleasant or even palatable. <br><br>The dessert also did not match the menu description. Chocolate cake with persimmons, tarragon, and burnt caramel cream. The chocolate cake had good chocolate flavor but was a bit gluey. It had none of the other flavors in it. Persimmon appeared only in a few micro-cubes which seemed to have been sautÈed or candied but lacked flavor ( likely the result of picking subpar or unripe fruit to start). The cream appeared in flavor and color to be chocolate. No hint of caramel anything anywhere. The tarragon appeared as a single leaf decor on my plate and was absent in my dining companion\'s plate. <br>Kefta and squid were both good. Butternut squash was ok. <br><br>Service was very good <br><br>Bathroom grade:A-<br>It\'s an ADA accessible bathroom but the faucet handles are small and very far away for someone in a wheelchair. Otherwise clean and 2x single use gender neutral rooms. <br><br>So there are nice things in the menu, and the ambiance and service are nice, but it\'s not with a special trip or occasion and it is certainly not worth it if you want Moroccan food specifically', 'Sarah T.', '4');
INSERT INTO `review` (`review_id`, `review_text`, `review_author`, `review_rating`) VALUES
(60, 'I am a big fan of this group. I have finally made it to Aziza since it opened. I have dined at Mourad a few times. I just returned from traveling and the first thing on my list was to dine at Aziza. <br><br>I made an early reservations to be sure to get in and enjoy the food. Gawd I am so glad that I did. That place is poppin. <br><br>We went with the servers recommendations and was not disappointed. The lamb, Besteeya, and the cornbread just to name a few were all hella good. The drinks are sexy and extremely tasty. I promise you will not be disappointed. If you are that means that you really don\'t fuq with Moroccan Cuisine to begin with......this is still the place to be. With no fault of Aziza\'s, the parking situation is Fuqd up so Uber there or go early and circle the blocks for awhile. Cheers', 'Stacie J.', '3'),
(61, 'We came here back in October for the belly dancing and the pre-fixe menu (all for the price of $45!). The pre-fixe menu includes salad, bread, bastlla chicken pie, an entree, baklava, and Morrocon mint tea. I never had a bastilla chicken pie, which reminded me of a sweet meat pie (if that\' s a thing), the honey and almond lamb was delicious! <br><br>I felt like I had been transported to Morocco (where I\'ve been to before). The interior of the restaurant was vibrant and beautifully furnished and adorned with colorful banners and plush cushions and the seating was arranged in such a way to keep the center area clear for the belly dance performers. <br><br>Service was welcoming. While we were waiting for our group to arrive, one of the hosts/waiters greeted us at the entrance and went into the history of the restaurant and the how the tiles lining the door frame were of Moroccon origin.<br><br>Overall, yummy Moroccan food, friendly service, and a belly dancing performance to boot (Thursday through Sundays evenings). Not sure if this is still applicable, but they had a Yelp check in offer when we went back in October and we got 10% off our entire meal on top of it all! I would love to come back here with some friends and re-experience it all over again!', 'Nina Z.', '4'),
(62, 'I took my parents out for their birthday to El Mansour and it was such a fun experience! We ordered the royal platter which is $52 per person for a 5 course meal, and I think it was totally worth it! The ambiance is beautiful with carpet and pillows, it really feels like you\'re in a little piece of Morocco. They have belly dancing Thursday-Sunday at around 8 pm for about 20-30 minutes so you get to enjoy your dinner with some entertainment!<br><br>You get lentil soup, salad, and a chicken Bastilla which is a sweet and savory pie that was so good! It was one of my favorite dishes.<br><br>The royal platter came with: lamb with almond and honey, lamb with onions, chicken with lemon and olives, chicken with honey and prunes, Prawns and scallops, lamb and chicken kebob, and vegetable couscous. The food was too good and the meat was super tender, I didn\'t even have to use a knife to cut into the meat and it was tasty as well!<br><br>For dessert they give you baklava and this sweet mint like tea to finish the meal off!<br><br>I would definitely bring people to have dinner there again, it was a fun experience and my parents ha da great time!', 'Amanda C.', '5'),
(63, 'It was a pleasure to revisit El Mansour after a 20-year absence. Moroccan food has always been a favorite, and El Mansour was one of the first places I tried, way back in the early 1990\'s. At that time, they were my second favorite, topped by a similar SF restaurant that has since closed. I have eaten Moroccan foods all over: in Morocco, France, NorCal, Spain and elsewhere.<br><br>El Mansour is good. While I have had better, I have not had better in the SF-Bay Area, and the \"better\" is about inventive-ness, or portions/value. What you get at El Mansour is: <br>Really good renditions of all the traditional Moroccan fancy dinner items. <br>Great service and atmosphere<br>A nice place for a date or special occasion, but equally nice for a regular night out. You could dress up or be in jeans and a nice shirt and still fit in fine.<br>Predictable bill: it\'s price fixed, so the only thing that will change your bill is ordering extra drinks (water and dessert tea are included).<br><br>We were celebrating the birthday of a 20-year-old. The staff turned down the lights, brought out 2 macarons with a candle, put a great happy birthday tune on the speakers, and clapped along. This was most appreciated and a really nice way to cap off a celebratory dinner. Thank you!<br><br>The 5-course dinner is set, so that you only choose the main dish. There is an option to have a sampler dinner, for a $2 upcharge per person, if you have trouble choosing. <br><br>1st course: Harira soup. Theirs is excellent. I\'d like the recipe!! Comes with bread, which was a fresh version of the standard Moroccan bread. <br><br>2nd course: 4 traditional vegetable dishes (eggplant, tomato/onion, cucumber, carrot) These were good. I like the eggplant and tomato salads the best. Their version of the carrots was a bit salty for me. <br><br>3rd course: bastilla . (They offer a veg option) This is one of my favorite foods in the world and I make it myself. Mansour\'s version is good. The chicken was of good quality, the seasoning pleasant, the amount of sugar on top was pleasing. Bastilla also contains almonds and eggs. The ratio of these items provided a pleasant crunch and taste. <br><br>4th course: we ordered <br>*lamb with honey and almonds: good amount of meat that fell off the bone, no disturbing fat to work around, lots of almonds and enough sauce. I would prefer some fruits added to it, but I certainly had enough to eat without it. <br>*lamb skewer: 6 pieces total, cooked med-rare, good seasoning, served with couscous that was fine not great and some chickpeas/raisins. <br>*lamb with fried eggplant: this is a savory dish. The eggplant is fried to soften it and then cooked, so you are not getting something like tempura or deep-fried. The lamb here was again soft, plentiful, well-trimmed. <br><br>5th course: dessert is baklava. I\'m super picky about my baklava, which I like made with orange flower syrup and not too much filo-to-filling. This is rarely found in restaurants. Mansour\'s version is fine. If you like nuts and sugar, you will enjoy it. <br>TEA: Moroccan mint tea with sugar--delightful--comes after dessert<br><br>Bathroom grade: A- There are 2 single-occupancy restrooms, labeled \"men\" and \"women\" Can the management please consider making these NON-GENDERED restrooms? This will make all your patrons feel welcome, and there is nothing male or female about either of the rooms, so what an easy fix. <br>Both rooms were clean and nicely decorated in Moroccan tile, mirrors, colors. ADA accessible, though the sink might be a tad high for a wheelchair.', 'Sarah T.', '4'),
(64, 'SO fun on a Friday night with friends! We said we\'d take a mix for the group and they hooked it up. The lamb and chicken both were so tender they fell off the bone and the place is decorated absolutely beautifully. Also the belly dancer was amazing!! Will definitely be back for a nice dinner out :)', 'Yasmeen S.', '5'),
(65, 'We had an amazing time at El Monsour celebrating our wedding anniversary and the restaurant was the perfect place! With their ambience, Moroccan music, food accompanied with Moroccan red wine was a great combination. <br>Our experience there was even better because of our amazing server Ken! A big shout out to him, very helpful, sweet heart gentleman who made great recommendations and made our celebratory night just perfect ! <br>We did miss out on the belly dancer because we went there on a Wednesday. Although it felt a cozy and private event with less crowd midweek! So all in all an amazing experience! <br><br>Food MUST TRY : <br>chicken pie - very unique and perfect blend sweet and savory <br>Appetizer dips<br>Chicken kabab - ooof they soft and juicy ( probably one of the best I have had) !<br>My husband tried their lamb dish and definitely recommends it for lamb eaters ( I don\'t eat lamb)<br>Honestly, I have had better baklava at other places, but this was less sweet so I like that part, but I won\'t take any points off because rest of the food was just perfection! Kudos to the chef!', 'Ritupriya P.', '3'),
(66, 'This place was great, the show was super cool and food was amazing. Totally recommend it', 'Gigi T.', '3'),
(67, 'Super fun, one of a kind dinner experience. This place is a feast both for your tummy and eyes. Magnificently decorated from the front door to the back, mesmerizing Moroccan restaurant. The ambiance is very charming and welcoming. The hospitable hosts are extremely knowledgeable, and they truly care about your experience. Satisfying dinner menu accompanied by exceptional wine and beer list , reasonable prices. Decent food, superb service. The belly dancer show is fantastic. She is on fire! Perfect place for celebrations. The vibe is high, fun, pure joy! I hope to go back and would highly recommend it to everyone who wants to experience an extraordinary dinner in SF.', 'Cigdem K.', '4'),
(68, 'This place was amazing! The 5 course meal is one of the best deals I\'ve ever seen. Super tasty dinner and an amazing performance with it. Date night was a no brainer. Thanks to Ken and the entire attentive staff, his family, and the bomb ass kitchen.', 'Aaron L.', '5'),
(69, 'If we knew about belly dancer harassment we would choose a different restaurant. We went there as 3 couples (one pregnant) just to try Moroccan food without even knowing that they have belly dancers. Female dancer after her performance came close to each table shaking their breasts in front of our males asking for tips. We already knew from the note on the table that we would encourage them to tip her so one of us (the girl) gave her tips in advance. After which she still came back to our table, and getting on her knees started shaking her breasts in front of my partner. It was very awkward we didn\'t know what to do. It was just easier to give her all the cash so she leave us alone. 19-century experience... One of us (Moroccan) said \"I am so sorry guys this is absolutely not Moroccan tradition\"', 'Asya O.', '4'),
(70, 'Came here for the experience and the food and was NOT disappointed!<br><br>Atmosphere: beautiful doorway to enter the restaurant and being inside was like entering Morocco itself. Great ambiance and perfect for photo ops<br><br>Food: everything was delicious! We went with the Royal Platter (I think is the name) which gave us a bit of everything. Word of caution: it is so much food! They said it was for 3 people but could have easily been for 5. We also added two rabbit dishes. The rabbit tagine was to die for. 4 people who had never had rabbit tried it and all loved it. <br><br>Everything else: staff was incredibly friendly and helpful and available. I never had to wait long for wanting anything and they made great recommendations. The belly dancer was very entertaining and loved how she was interactive with the customers. Note: belly dancers are only guaranteed thur-sun.', 'Amanda S.', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `reset` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `reset`) VALUES
(3, 'james Rohl', 'stanfugy@gmail.com', '$2y$10$3oQbBRWb2rnPDJq4NG0CA.X3N3.XyxBhY/eZ1Zge/Q08IXFtm7vw2', '7518'),
(7, 'Signs Madueke', 'signsmadueke1@gmail.com', '$2y$10$1EW2xeL9EoNMHxib/KexPeJkAhhhjJO/fraYvWGaTfB8uSVM16La6', NULL),
(9, 'john doe', 'stanfugyy@gmail.com', '$2y$10$y.gVsyjvHte6MLI9gPcT0.d6UuP4IR76NUtXhNME4IvA5ejzpp0B2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`cuisine_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `cuisine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
