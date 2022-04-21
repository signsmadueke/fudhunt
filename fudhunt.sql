-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2022 at 10:03 AM
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
(1, 'Spanish', '../assets/images/cuisines/spanish.jpeg'),
(2, 'Indian', '../assets/images/cuisines/indian.jpeg'),
(3, 'Vietnamese', '../assets/images/cuisines/vietnamese.jpeg'),
(4, 'Chad', '../assets/images/cuisines/chad.jpeg'),
(5, 'Japanese', '../assets/images/cuisines/japanese.jpeg'),
(6, 'Israeli', '../assets/images/cuisines/israeli.jpeg'),
(7, 'South Korean', '../assets/images/cuisines/south-korean.jpeg'),
(8, 'Greek', '../assets/images/cuisines/greek.jpeg'),
(9, 'Thai', '../assets/images/cuisines/thai.jpeg'),
(10, 'Swedish', '../assets/images/cuisines/swedish.jpeg');

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
(1, '1', '1', 'Adas Polo', '16.99', '../assets/images/products/1.jpg'),
(2, '2', '2', 'Avocado Toast', '12.99', '../assets/images/products/2.jpg'),
(3, '3', '3', 'Basmati Rice', '18.99', '../assets/images/products/3.jpg'),
(4, '4', '4', 'Basteeya', '20.99', '../assets/images/products/4.jpg'),
(5, '5', '5', 'Bastilla Chicken Pie', '15.99', '../assets/images/products/5.jpg'),
(6, '6', '6', 'Beef Lamb Kabobs', '11.99', '../assets/images/products/6.jpg'),
(7, '7', '7', 'Braised Pork Belly Dinner', '15.99', '../assets/images/products/7.jpg'),
(8, '8', '8', 'Branzino', '33.99', '../assets/images/products/8.jpg'),
(9, '9', '9', 'Breakfast Sandwich', '14.99', '../assets/images/products/9.jpg'),
(10, '10', '10', 'Butternut Squash Soup', '8.99', '../assets/images/products/10.jpg'),
(11, '1', '11', 'Chicken Croquette', '15.99', '../assets/images/products/11.jpg'),
(12, '2', '12', 'Chicken Kabob', '19.99', '../assets/images/products/12.jpg'),
(13, '3', '13', 'Chicken Kabob', '24.99', '../assets/images/products/13.jpg'),
(14, '4', '14', 'Chicken Kebabs Plate', '6.99', '../assets/images/products/14.jpg'),
(15, '5', '15', 'Chicken Roulade', '25.99', '../assets/images/products/15.jpg'),
(16, '6', '16', 'Chicken Sandwich', '16.99', '../assets/images/products/16.jpg'),
(17, '7', '17', 'Chicken with Honey & Prunes', '24.99', '../assets/images/products/17.jpg'),
(18, '8', '18', 'Chicken with Lemon & Olives', '24.99', '../assets/images/products/18.jpg'),
(19, '9', '19', 'Chilaquiles Verdes', '17.99', '../assets/images/products/19.jpg'),
(20, '10', '20', 'Chipotle Chilaquiles Dinner', '18.99', '../assets/images/products/20.jpg'),
(21, '1', '21', 'Churros', '10.99', '../assets/images/products/21.jpg'),
(22, '2', '22', 'Creamy Mushroom Soup', '7.99', '../assets/images/products/22.jpg'),
(23, '3', '23', 'Crispy Chicken Dorados Dinner', '16.99', '../assets/images/products/23.jpg'),
(24, '4', '24', 'Duck Skin Fried Rice', '17.99', '../assets/images/products/24.jpg'),
(25, '5', '25', 'Enchiladas De Res Dinner', '21.99', '../assets/images/products/25.jpg'),
(26, '6', '26', 'Enchiladas Rojas Dinner', '19.99', '../assets/images/products/26.jpg'),
(27, '7', '27', 'Firecracker Cauliflower', '16.99', '../assets/images/products/27.jpg'),
(28, '8', '28', 'Fish Tagine', '26.99', '../assets/images/products/28.jpg'),
(29, '9', '29', 'French Toast', '14.99', '../assets/images/products/29.jpg'),
(30, '10', '30', 'Fresh Spring Rolls', '9.99', '../assets/images/products/30.jpg'),
(31, '1', '31', 'Ghormeh Sabzi', '17.99', '../assets/images/products/31.jpg'),
(32, '2', '32', 'Green Plate', '15.99', '../assets/images/products/32.jpg'),
(33, '3', '33', 'Griddled Skirt Steak Dinner', '18.99', '../assets/images/products/33.jpg'),
(34, '4', '34', 'Grilled Arctic Char Dinner', '18.99', '../assets/images/products/34.jpg'),
(35, '5', '35', 'Grilled Chicken', '23.99', '../assets/images/products/35.jpg'),
(36, '6', '36', 'Grilled Lamb Kofte', '16.99', '../assets/images/products/36.jpg'),
(37, '7', '37', 'Harissa', '4.99', '../assets/images/products/37.jpg'),
(38, '8', '38', 'Huevos Benedictos', '18.99', '../assets/images/products/38.jpg'),
(39, '9', '39', 'Huevos Rancheros', '17.99', '../assets/images/products/39.jpg'),
(40, '10', '40', 'Jeweled Rice', '7.99', '../assets/images/products/40.jpg'),
(41, '1', '41', 'Joojeh Kabob', '15.99', '../assets/images/products/41.jpg'),
(42, '2', '42', 'Karniyarik', '25.99', '../assets/images/products/42.jpg'),
(43, '3', '43', 'Kau Soi', '15.99', '../assets/images/products/43.jpg'),
(44, '4', '44', 'Koobideh Kabob', '9.99', '../assets/images/products/44.jpg'),
(45, '5', '45', 'Kookoo Sabzi', '15.99', '../assets/images/products/45.jpg'),
(46, '6', '46', 'Lamb Chops', '21.99', '../assets/images/products/46.jpg'),
(47, '7', '47', 'Lamb Curry', '18.99', '../assets/images/products/47.jpg'),
(48, '8', '48', 'Lamb with Honey & Almonds', '24.99', '../assets/images/products/48.jpg'),
(49, '9', '49', 'Lean Beef Stew', '11.99', '../assets/images/products/49.jpg'),
(50, '10', '50', 'Lentil Soup', '16.99', '../assets/images/products/50.jpg'),
(51, '1', '1', 'Lentil Soup', '0.99', '../assets/images/products/51.jpg'),
(52, '2', '2', 'Levain Toast', '7.99', '../assets/images/products/52.jpg'),
(53, '3', '3', 'Manti', '21.99', '../assets/images/products/53.jpg'),
(54, '4', '4', 'Menemen', '15.99', '../assets/images/products/54.jpg'),
(55, '5', '5', 'Miso Cod', '17.99', '../assets/images/products/55.jpg'),
(56, '6', '6', 'Moroccan Seafood', '26.99', '../assets/images/products/56.jpg'),
(57, '7', '7', 'Papas Bravas', '11.99', '../assets/images/products/57.jpg'),
(58, '8', '8', 'Patatas Bravas', '8.99', '../assets/images/products/58.jpg'),
(59, '9', '9', 'Platha Dipper', '9.99', '../assets/images/products/59.jpg'),
(60, '10', '10', 'Pork Carnitas Dinner', '16.99', '../assets/images/products/60.jpg'),
(61, '1', '11', 'Pork Tocino', '15.99', '../assets/images/products/61.jpg'),
(62, '2', '12', 'Presidio Salad', '13.99', '../assets/images/products/62.jpg'),
(63, '3', '13', 'Pumpkin Pork Stew', '17.99', '../assets/images/products/63.jpg'),
(64, '4', '14', 'Rabbit Kabob', '26.99', '../assets/images/products/64.jpg'),
(65, '5', '15', 'Rainbow Salad', '13.99', '../assets/images/products/65.jpg'),
(66, '6', '16', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', '../assets/images/products/66.jpg'),
(67, '7', '17', 'Roasted Eggplant', '18.99', '../assets/images/products/67.jpg'),
(68, '8', '18', 'Sabzi Panir', '18.99', '../assets/images/products/68.jpg'),
(69, '9', '19', 'Salmon Ochazuke', '17.99', '../assets/images/products/69.jpg'),
(70, '10', '20', 'Samusa Soup', '9.99', '../assets/images/products/70.jpg'),
(71, '1', '21', 'Shiraz Salad', '14.99', '../assets/images/products/71.jpg'),
(72, '2', '22', 'Short Rib', '23.99', '../assets/images/products/72.jpg'),
(73, '3', '23', 'Sopa Azteca', '11.99', '../assets/images/products/73.jpg'),
(74, '4', '24', 'Sopes De Machaca', '18.99', '../assets/images/products/74.jpg'),
(75, '5', '25', 'Sticky Bun', '6.99', '../assets/images/products/75.jpg'),
(76, '6', '26', 'Sticky Finger Pork Riblettes', '12.99', '../assets/images/products/76.jpg'),
(77, '7', '27', 'Sunrise Combo', '16.99', '../assets/images/products/77.jpg'),
(78, '8', '28', 'Take & Bake Chicken Basteeya', '20.99', '../assets/images/products/78.jpg'),
(79, '9', '29', 'Tamarind Chili Shrimp', '18.99', '../assets/images/products/79.jpg'),
(80, '10', '30', 'Taste of Persia', '16.99', '../assets/images/products/80.jpg'),
(81, '1', '31', 'Thai Curry Pot Pie', '15.99', '../assets/images/products/81.jpg'),
(82, '2', '32', 'Tomato Hummus', '8.99', '../assets/images/products/82.jpg'),
(83, '3', '33', 'Trio Spreads', '19.99', '../assets/images/products/83.jpg'),
(84, '4', '34', 'Tuna Ceviche', '12.99', '../assets/images/products/84.jpg'),
(85, '5', '35', 'Turkish Breakfast For 2', '35.99', '../assets/images/products/85.jpg'),
(86, '6', '36', 'Turlu Omelet', '16.99', '../assets/images/products/86.jpg'),
(87, '7', '37', 'Tzatziki', '8.99', '../assets/images/products/87.jpg'),
(88, '8', '38', 'Vegan Tempeh Curry Noodles', '15.99', '../assets/images/products/88.jpg'),
(89, '9', '39', 'Vegetarian Du Chef', '26.99', '../assets/images/products/89.jpg'),
(90, '10', '40', 'Veggie Kabob', '18.99', '../assets/images/products/90.jpg'),
(91, '1', '41', 'Yogurt Salad', '17.99', '../assets/images/products/91.jpg'),
(92, '2', '42', 'Zereshk Polo', '8.99', '../assets/images/products/92.jpg'),
(93, '3', '43', 'Zucchini Dolmas', '15.99', '../assets/images/products/93.jpg'),
(94, '4', '44', 'Adas Polo', '16.99', '../assets/images/products/1.jpg'),
(95, '5', '45', 'Avocado Toast', '12.99', '../assets/images/products/2.jpg'),
(96, '6', '46', 'Basmati Rice', '18.99', '../assets/images/products/3.jpg'),
(97, '7', '47', 'Basteeya', '20.99', '../assets/images/products/4.jpg'),
(98, '8', '48', 'Bastilla Chicken Pie', '15.99', '../assets/images/products/5.jpg'),
(99, '9', '49', 'Beef Lamb Kabobs', '11.99', '../assets/images/products/6.jpg'),
(100, '10', '50', 'Braised Pork Belly Dinner', '15.99', '../assets/images/products/7.jpg'),
(101, '1', '1', 'Branzino', '33.99', '../assets/images/products/8.jpg'),
(102, '2', '2', 'Breakfast Sandwich', '14.99', '../assets/images/products/9.jpg'),
(103, '3', '3', 'Butternut Squash Soup', '8.99', '../assets/images/products/10.jpg'),
(104, '4', '4', 'Chicken Croquette', '15.99', '../assets/images/products/11.jpg'),
(105, '5', '5', 'Chicken Kabob', '19.99', '../assets/images/products/12.jpg'),
(106, '6', '6', 'Chicken Kabob', '24.99', '../assets/images/products/13.jpg'),
(107, '7', '7', 'Chicken Kebabs Plate', '6.99', '../assets/images/products/14.jpg'),
(108, '8', '8', 'Chicken Roulade', '25.99', '../assets/images/products/15.jpg'),
(109, '9', '9', 'Chicken Sandwich', '16.99', '../assets/images/products/16.jpg'),
(110, '10', '10', 'Chicken with Honey & Prunes', '24.99', '../assets/images/products/17.jpg'),
(111, '1', '11', 'Chicken with Lemon & Olives', '24.99', '../assets/images/products/18.jpg'),
(112, '2', '12', 'Chilaquiles Verdes', '17.99', '../assets/images/products/19.jpg'),
(113, '3', '13', 'Chipotle Chilaquiles Dinner', '18.99', '../assets/images/products/20.jpg'),
(114, '4', '14', 'Churros', '10.99', '../assets/images/products/21.jpg'),
(115, '5', '15', 'Creamy Mushroom Soup', '7.99', '../assets/images/products/22.jpg'),
(116, '6', '16', 'Crispy Chicken Dorados Dinner', '16.99', '../assets/images/products/23.jpg'),
(117, '7', '17', 'Duck Skin Fried Rice', '17.99', '../assets/images/products/24.jpg'),
(118, '8', '18', 'Enchiladas De Res Dinner', '21.99', '../assets/images/products/25.jpg'),
(119, '9', '19', 'Enchiladas Rojas Dinner', '19.99', '../assets/images/products/26.jpg'),
(120, '10', '20', 'Firecracker Cauliflower', '16.99', '../assets/images/products/27.jpg'),
(121, '1', '21', 'Fish Tagine', '26.99', '../assets/images/products/28.jpg'),
(122, '2', '22', 'French Toast', '14.99', '../assets/images/products/29.jpg'),
(123, '3', '23', 'Fresh Spring Rolls', '9.99', '../assets/images/products/30.jpg'),
(124, '4', '24', 'Ghormeh Sabzi', '17.99', '../assets/images/products/31.jpg'),
(125, '5', '25', 'Green Plate', '15.99', '../assets/images/products/32.jpg'),
(126, '6', '26', 'Griddled Skirt Steak Dinner', '18.99', '../assets/images/products/33.jpg'),
(127, '7', '27', 'Grilled Arctic Char Dinner', '18.99', '../assets/images/products/34.jpg'),
(128, '8', '28', 'Grilled Chicken', '23.99', '../assets/images/products/35.jpg'),
(129, '9', '29', 'Grilled Lamb Kofte', '16.99', '../assets/images/products/36.jpg'),
(130, '10', '30', 'Harissa', '4.99', '../assets/images/products/37.jpg'),
(131, '1', '31', 'Huevos Benedictos', '18.99', '../assets/images/products/38.jpg'),
(132, '2', '32', 'Huevos Rancheros', '17.99', '../assets/images/products/39.jpg'),
(133, '3', '33', 'Jeweled Rice', '7.99', '../assets/images/products/40.jpg'),
(134, '4', '34', 'Joojeh Kabob', '15.99', '../assets/images/products/41.jpg'),
(135, '5', '35', 'Karniyarik', '25.99', '../assets/images/products/42.jpg'),
(136, '6', '36', 'Kau Soi', '15.99', '../assets/images/products/43.jpg'),
(137, '7', '37', 'Koobideh Kabob', '9.99', '../assets/images/products/44.jpg'),
(138, '8', '38', 'Kookoo Sabzi', '15.99', '../assets/images/products/45.jpg'),
(139, '9', '39', 'Lamb Chops', '21.99', '../assets/images/products/46.jpg'),
(140, '10', '40', 'Lamb Curry', '18.99', '../assets/images/products/47.jpg'),
(141, '1', '41', 'Lamb with Honey & Almonds', '24.99', '../assets/images/products/48.jpg'),
(142, '2', '42', 'Lean Beef Stew', '11.99', '../assets/images/products/49.jpg'),
(143, '3', '43', 'Lentil Soup', '16.99', '../assets/images/products/50.jpg'),
(144, '4', '44', 'Lentil Soup', '0.99', '../assets/images/products/51.jpg'),
(145, '5', '45', 'Levain Toast', '7.99', '../assets/images/products/52.jpg'),
(146, '6', '46', 'Manti', '21.99', '../assets/images/products/53.jpg'),
(147, '7', '47', 'Menemen', '15.99', '../assets/images/products/54.jpg'),
(148, '8', '48', 'Miso Cod', '17.99', '../assets/images/products/55.jpg'),
(149, '9', '49', 'Moroccan Seafood', '26.99', '../assets/images/products/56.jpg'),
(150, '10', '50', 'Papas Bravas', '11.99', '../assets/images/products/57.jpg'),
(151, '1', '1', 'Patatas Bravas', '8.99', '../assets/images/products/58.jpg'),
(152, '2', '2', 'Platha Dipper', '9.99', '../assets/images/products/59.jpg'),
(153, '3', '3', 'Pork Carnitas Dinner', '16.99', '../assets/images/products/60.jpg'),
(154, '4', '4', 'Pork Tocino', '15.99', '../assets/images/products/61.jpg'),
(155, '5', '5', 'Presidio Salad', '13.99', '../assets/images/products/62.jpg'),
(156, '6', '6', 'Pumpkin Pork Stew', '17.99', '../assets/images/products/63.jpg'),
(157, '7', '7', 'Rabbit Kabob', '26.99', '../assets/images/products/64.jpg'),
(158, '8', '8', 'Rainbow Salad', '13.99', '../assets/images/products/65.jpg'),
(159, '9', '9', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', '../assets/images/products/66.jpg'),
(160, '10', '10', 'Roasted Eggplant', '18.99', '../assets/images/products/67.jpg'),
(161, '1', '11', 'Sabzi Panir', '18.99', '../assets/images/products/68.jpg'),
(162, '2', '12', 'Salmon Ochazuke', '17.99', '../assets/images/products/69.jpg'),
(163, '3', '13', 'Samusa Soup', '9.99', '../assets/images/products/70.jpg'),
(164, '4', '14', 'Shiraz Salad', '14.99', '../assets/images/products/71.jpg'),
(165, '5', '15', 'Short Rib', '23.99', '../assets/images/products/72.jpg'),
(166, '6', '16', 'Sopa Azteca', '11.99', '../assets/images/products/73.jpg'),
(167, '7', '17', 'Sopes De Machaca', '18.99', '../assets/images/products/74.jpg'),
(168, '8', '18', 'Sticky Bun', '6.99', '../assets/images/products/75.jpg'),
(169, '9', '19', 'Sticky Finger Pork Riblettes', '12.99', '../assets/images/products/76.jpg'),
(170, '10', '20', 'Sunrise Combo', '16.99', '../assets/images/products/77.jpg'),
(171, '1', '21', 'Take & Bake Chicken Basteeya', '20.99', '../assets/images/products/78.jpg'),
(172, '2', '22', 'Tamarind Chili Shrimp', '18.99', '../assets/images/products/79.jpg'),
(173, '3', '23', 'Taste of Persia', '16.99', '../assets/images/products/80.jpg'),
(174, '4', '24', 'Thai Curry Pot Pie', '15.99', '../assets/images/products/81.jpg'),
(175, '5', '25', 'Tomato Hummus', '8.99', '../assets/images/products/82.jpg'),
(176, '6', '26', 'Trio Spreads', '19.99', '../assets/images/products/83.jpg'),
(177, '7', '27', 'Tuna Ceviche', '12.99', '../assets/images/products/84.jpg'),
(178, '8', '28', 'Turkish Breakfast For 2', '35.99', '../assets/images/products/85.jpg'),
(179, '9', '29', 'Turlu Omelet', '16.99', '../assets/images/products/86.jpg'),
(180, '10', '30', 'Tzatziki', '8.99', '../assets/images/products/87.jpg'),
(181, '1', '31', 'Vegan Tempeh Curry Noodles', '15.99', '../assets/images/products/88.jpg'),
(182, '2', '32', 'Vegetarian Du Chef', '26.99', '../assets/images/products/89.jpg'),
(183, '3', '33', 'Veggie Kabob', '18.99', '../assets/images/products/90.jpg'),
(184, '4', '34', 'Yogurt Salad', '17.99', '../assets/images/products/91.jpg'),
(185, '5', '35', 'Zereshk Polo', '8.99', '../assets/images/products/92.jpg'),
(186, '6', '36', 'Zucchini Dolmas', '15.99', '../assets/images/products/93.jpg'),
(187, '7', '37', 'Adas Polo', '16.99', '../assets/images/products/1.jpg'),
(188, '8', '38', 'Avocado Toast', '12.99', '../assets/images/products/2.jpg'),
(189, '9', '39', 'Basmati Rice', '18.99', '../assets/images/products/3.jpg'),
(190, '10', '40', 'Basteeya', '20.99', '../assets/images/products/4.jpg'),
(191, '1', '41', 'Bastilla Chicken Pie', '15.99', '../assets/images/products/5.jpg'),
(192, '2', '42', 'Beef Lamb Kabobs', '11.99', '../assets/images/products/6.jpg'),
(193, '3', '43', 'Braised Pork Belly Dinner', '15.99', '../assets/images/products/7.jpg'),
(194, '4', '44', 'Branzino', '33.99', '../assets/images/products/8.jpg'),
(195, '5', '45', 'Breakfast Sandwich', '14.99', '../assets/images/products/9.jpg'),
(196, '6', '46', 'Butternut Squash Soup', '8.99', '../assets/images/products/10.jpg'),
(197, '7', '47', 'Chicken Croquette', '15.99', '../assets/images/products/11.jpg'),
(198, '8', '48', 'Chicken Kabob', '19.99', '../assets/images/products/12.jpg'),
(199, '9', '49', 'Chicken Kabob', '24.99', '../assets/images/products/13.jpg'),
(200, '10', '50', 'Chicken Kebabs Plate', '6.99', '../assets/images/products/14.jpg'),
(201, '1', '1', 'Chicken Roulade', '25.99', '../assets/images/products/15.jpg'),
(202, '2', '2', 'Chicken Sandwich', '16.99', '../assets/images/products/16.jpg'),
(203, '3', '3', 'Chicken with Honey & Prunes', '24.99', '../assets/images/products/17.jpg'),
(204, '4', '4', 'Chicken with Lemon & Olives', '24.99', '../assets/images/products/18.jpg'),
(205, '5', '5', 'Chilaquiles Verdes', '17.99', '../assets/images/products/19.jpg'),
(206, '6', '6', 'Chipotle Chilaquiles Dinner', '18.99', '../assets/images/products/20.jpg'),
(207, '7', '7', 'Churros', '10.99', '../assets/images/products/21.jpg'),
(208, '8', '8', 'Creamy Mushroom Soup', '7.99', '../assets/images/products/22.jpg'),
(209, '9', '9', 'Crispy Chicken Dorados Dinner', '16.99', '../assets/images/products/23.jpg'),
(210, '10', '10', 'Duck Skin Fried Rice', '17.99', '../assets/images/products/24.jpg'),
(211, '1', '11', 'Enchiladas De Res Dinner', '21.99', '../assets/images/products/25.jpg'),
(212, '2', '12', 'Enchiladas Rojas Dinner', '19.99', '../assets/images/products/26.jpg'),
(213, '3', '13', 'Firecracker Cauliflower', '16.99', '../assets/images/products/27.jpg'),
(214, '4', '14', 'Fish Tagine', '26.99', '../assets/images/products/28.jpg'),
(215, '5', '15', 'French Toast', '14.99', '../assets/images/products/29.jpg'),
(216, '6', '16', 'Fresh Spring Rolls', '9.99', '../assets/images/products/30.jpg'),
(217, '7', '17', 'Ghormeh Sabzi', '17.99', '../assets/images/products/31.jpg'),
(218, '8', '18', 'Green Plate', '15.99', '../assets/images/products/32.jpg'),
(219, '9', '19', 'Griddled Skirt Steak Dinner', '18.99', '../assets/images/products/33.jpg'),
(220, '10', '20', 'Grilled Arctic Char Dinner', '18.99', '../assets/images/products/34.jpg'),
(221, '1', '21', 'Grilled Chicken', '23.99', '../assets/images/products/35.jpg'),
(222, '2', '22', 'Grilled Lamb Kofte', '16.99', '../assets/images/products/36.jpg'),
(223, '3', '23', 'Harissa', '4.99', '../assets/images/products/37.jpg'),
(224, '4', '24', 'Huevos Benedictos', '18.99', '../assets/images/products/38.jpg'),
(225, '5', '25', 'Huevos Rancheros', '17.99', '../assets/images/products/39.jpg'),
(226, '6', '26', 'Jeweled Rice', '7.99', '../assets/images/products/40.jpg'),
(227, '7', '27', 'Joojeh Kabob', '15.99', '../assets/images/products/41.jpg'),
(228, '8', '28', 'Karniyarik', '25.99', '../assets/images/products/42.jpg'),
(229, '9', '29', 'Kau Soi', '15.99', '../assets/images/products/43.jpg'),
(230, '10', '30', 'Koobideh Kabob', '9.99', '../assets/images/products/44.jpg'),
(231, '1', '31', 'Kookoo Sabzi', '15.99', '../assets/images/products/45.jpg'),
(232, '2', '32', 'Lamb Chops', '21.99', '../assets/images/products/46.jpg'),
(233, '3', '33', 'Lamb Curry', '18.99', '../assets/images/products/47.jpg'),
(234, '4', '34', 'Lamb with Honey & Almonds', '24.99', '../assets/images/products/48.jpg'),
(235, '5', '35', 'Lean Beef Stew', '11.99', '../assets/images/products/49.jpg'),
(236, '6', '36', 'Lentil Soup', '16.99', '../assets/images/products/50.jpg'),
(237, '7', '37', 'Lentil Soup', '0.99', '../assets/images/products/51.jpg'),
(238, '8', '38', 'Levain Toast', '7.99', '../assets/images/products/52.jpg'),
(239, '9', '39', 'Manti', '21.99', '../assets/images/products/53.jpg'),
(240, '10', '40', 'Menemen', '15.99', '../assets/images/products/54.jpg'),
(241, '1', '41', 'Miso Cod', '17.99', '../assets/images/products/55.jpg'),
(242, '2', '42', 'Moroccan Seafood', '26.99', '../assets/images/products/56.jpg'),
(243, '3', '43', 'Papas Bravas', '11.99', '../assets/images/products/57.jpg'),
(244, '4', '44', 'Patatas Bravas', '8.99', '../assets/images/products/58.jpg'),
(245, '5', '45', 'Platha Dipper', '9.99', '../assets/images/products/59.jpg'),
(246, '6', '46', 'Pork Carnitas Dinner', '16.99', '../assets/images/products/60.jpg'),
(247, '7', '47', 'Pork Tocino', '15.99', '../assets/images/products/61.jpg'),
(248, '8', '48', 'Presidio Salad', '13.99', '../assets/images/products/62.jpg'),
(249, '9', '49', 'Pumpkin Pork Stew', '17.99', '../assets/images/products/63.jpg'),
(250, '10', '50', 'Rabbit Kabob', '26.99', '../assets/images/products/64.jpg'),
(251, '1', '1', 'Rainbow Salad', '13.99', '../assets/images/products/65.jpg'),
(252, '2', '2', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', '../assets/images/products/66.jpg'),
(253, '3', '3', 'Roasted Eggplant', '18.99', '../assets/images/products/67.jpg'),
(254, '4', '4', 'Sabzi Panir', '18.99', '../assets/images/products/68.jpg'),
(255, '5', '5', 'Salmon Ochazuke', '17.99', '../assets/images/products/69.jpg'),
(256, '6', '6', 'Samusa Soup', '9.99', '../assets/images/products/70.jpg'),
(257, '7', '7', 'Shiraz Salad', '14.99', '../assets/images/products/71.jpg'),
(258, '8', '8', 'Short Rib', '23.99', '../assets/images/products/72.jpg'),
(259, '9', '9', 'Sopa Azteca', '11.99', '../assets/images/products/73.jpg'),
(260, '10', '10', 'Sopes De Machaca', '18.99', '../assets/images/products/74.jpg'),
(261, '1', '11', 'Sticky Bun', '6.99', '../assets/images/products/75.jpg'),
(262, '2', '12', 'Sticky Finger Pork Riblettes', '12.99', '../assets/images/products/76.jpg'),
(263, '3', '13', 'Sunrise Combo', '16.99', '../assets/images/products/77.jpg'),
(264, '4', '14', 'Take & Bake Chicken Basteeya', '20.99', '../assets/images/products/78.jpg'),
(265, '5', '15', 'Tamarind Chili Shrimp', '18.99', '../assets/images/products/79.jpg'),
(266, '6', '16', 'Taste of Persia', '16.99', '../assets/images/products/80.jpg'),
(267, '7', '17', 'Thai Curry Pot Pie', '15.99', '../assets/images/products/81.jpg'),
(268, '8', '18', 'Tomato Hummus', '8.99', '../assets/images/products/82.jpg'),
(269, '9', '19', 'Trio Spreads', '19.99', '../assets/images/products/83.jpg'),
(270, '10', '20', 'Tuna Ceviche', '12.99', '../assets/images/products/84.jpg'),
(271, '1', '21', 'Turkish Breakfast For 2', '35.99', '../assets/images/products/85.jpg'),
(272, '2', '22', 'Turlu Omelet', '16.99', '../assets/images/products/86.jpg'),
(273, '3', '23', 'Tzatziki', '8.99', '../assets/images/products/87.jpg'),
(274, '4', '24', 'Vegan Tempeh Curry Noodles', '15.99', '../assets/images/products/88.jpg'),
(275, '5', '25', 'Vegetarian Du Chef', '26.99', '../assets/images/products/89.jpg'),
(276, '6', '26', 'Veggie Kabob', '18.99', '../assets/images/products/90.jpg'),
(277, '7', '27', 'Yogurt Salad', '17.99', '../assets/images/products/91.jpg'),
(278, '8', '28', 'Zereshk Polo', '8.99', '../assets/images/products/92.jpg'),
(279, '9', '29', 'Zucchini Dolmas', '15.99', '../assets/images/products/93.jpg'),
(280, '10', '30', 'Adas Polo', '16.99', '../assets/images/products/1.jpg'),
(281, '1', '31', 'Avocado Toast', '12.99', '../assets/images/products/2.jpg'),
(282, '2', '32', 'Basmati Rice', '18.99', '../assets/images/products/3.jpg'),
(283, '3', '33', 'Basteeya', '20.99', '../assets/images/products/4.jpg'),
(284, '4', '34', 'Bastilla Chicken Pie', '15.99', '../assets/images/products/5.jpg'),
(285, '5', '35', 'Beef Lamb Kabobs', '11.99', '../assets/images/products/6.jpg'),
(286, '6', '36', 'Braised Pork Belly Dinner', '15.99', '../assets/images/products/7.jpg'),
(287, '7', '37', 'Branzino', '33.99', '../assets/images/products/8.jpg'),
(288, '8', '38', 'Breakfast Sandwich', '14.99', '../assets/images/products/9.jpg'),
(289, '9', '39', 'Butternut Squash Soup', '8.99', '../assets/images/products/10.jpg'),
(290, '10', '40', 'Chicken Croquette', '15.99', '../assets/images/products/11.jpg'),
(291, '1', '41', 'Chicken Kabob', '19.99', '../assets/images/products/12.jpg'),
(292, '2', '42', 'Chicken Kabob', '24.99', '../assets/images/products/13.jpg'),
(293, '3', '43', 'Chicken Kebabs Plate', '6.99', '../assets/images/products/14.jpg'),
(294, '4', '44', 'Chicken Roulade', '25.99', '../assets/images/products/15.jpg'),
(295, '5', '45', 'Chicken Sandwich', '16.99', '../assets/images/products/16.jpg'),
(296, '6', '46', 'Chicken with Honey & Prunes', '24.99', '../assets/images/products/17.jpg'),
(297, '7', '47', 'Chicken with Lemon & Olives', '24.99', '../assets/images/products/18.jpg'),
(298, '8', '48', 'Chilaquiles Verdes', '17.99', '../assets/images/products/19.jpg'),
(299, '9', '49', 'Chipotle Chilaquiles Dinner', '18.99', '../assets/images/products/20.jpg'),
(300, '10', '50', 'Churros', '10.99', '../assets/images/products/21.jpg'),
(301, '1', '1', 'Creamy Mushroom Soup', '7.99', '../assets/images/products/22.jpg'),
(302, '2', '2', 'Crispy Chicken Dorados Dinner', '16.99', '../assets/images/products/23.jpg'),
(303, '3', '3', 'Duck Skin Fried Rice', '17.99', '../assets/images/products/24.jpg'),
(304, '4', '4', 'Enchiladas De Res Dinner', '21.99', '../assets/images/products/25.jpg'),
(305, '5', '5', 'Enchiladas Rojas Dinner', '19.99', '../assets/images/products/26.jpg'),
(306, '6', '6', 'Firecracker Cauliflower', '16.99', '../assets/images/products/27.jpg'),
(307, '7', '7', 'Fish Tagine', '26.99', '../assets/images/products/28.jpg'),
(308, '8', '8', 'French Toast', '14.99', '../assets/images/products/29.jpg'),
(309, '9', '9', 'Fresh Spring Rolls', '9.99', '../assets/images/products/30.jpg'),
(310, '10', '10', 'Ghormeh Sabzi', '17.99', '../assets/images/products/31.jpg'),
(311, '1', '11', 'Green Plate', '15.99', '../assets/images/products/32.jpg'),
(312, '2', '12', 'Griddled Skirt Steak Dinner', '18.99', '../assets/images/products/33.jpg'),
(313, '3', '13', 'Grilled Arctic Char Dinner', '18.99', '../assets/images/products/34.jpg'),
(314, '4', '14', 'Grilled Chicken', '23.99', '../assets/images/products/35.jpg'),
(315, '5', '15', 'Grilled Lamb Kofte', '16.99', '../assets/images/products/36.jpg'),
(316, '6', '16', 'Harissa', '4.99', '../assets/images/products/37.jpg'),
(317, '7', '17', 'Huevos Benedictos', '18.99', '../assets/images/products/38.jpg'),
(318, '8', '18', 'Huevos Rancheros', '17.99', '../assets/images/products/39.jpg'),
(319, '9', '19', 'Jeweled Rice', '7.99', '../assets/images/products/40.jpg'),
(320, '10', '20', 'Joojeh Kabob', '15.99', '../assets/images/products/41.jpg'),
(321, '1', '21', 'Karniyarik', '25.99', '../assets/images/products/42.jpg'),
(322, '2', '22', 'Kau Soi', '15.99', '../assets/images/products/43.jpg'),
(323, '3', '23', 'Koobideh Kabob', '9.99', '../assets/images/products/44.jpg'),
(324, '4', '24', 'Kookoo Sabzi', '15.99', '../assets/images/products/45.jpg'),
(325, '5', '25', 'Lamb Chops', '21.99', '../assets/images/products/46.jpg'),
(326, '6', '26', 'Lamb Curry', '18.99', '../assets/images/products/47.jpg'),
(327, '7', '27', 'Lamb with Honey & Almonds', '24.99', '../assets/images/products/48.jpg'),
(328, '8', '28', 'Lean Beef Stew', '11.99', '../assets/images/products/49.jpg'),
(329, '9', '29', 'Lentil Soup', '16.99', '../assets/images/products/50.jpg'),
(330, '10', '30', 'Lentil Soup', '0.99', '../assets/images/products/51.jpg'),
(331, '1', '31', 'Levain Toast', '7.99', '../assets/images/products/52.jpg'),
(332, '2', '32', 'Manti', '21.99', '../assets/images/products/53.jpg'),
(333, '3', '33', 'Menemen', '15.99', '../assets/images/products/54.jpg'),
(334, '4', '34', 'Miso Cod', '17.99', '../assets/images/products/55.jpg'),
(335, '5', '35', 'Moroccan Seafood', '26.99', '../assets/images/products/56.jpg'),
(336, '6', '36', 'Papas Bravas', '11.99', '../assets/images/products/57.jpg'),
(337, '7', '37', 'Patatas Bravas', '8.99', '../assets/images/products/58.jpg'),
(338, '8', '38', 'Platha Dipper', '9.99', '../assets/images/products/59.jpg'),
(339, '9', '39', 'Pork Carnitas Dinner', '16.99', '../assets/images/products/60.jpg'),
(340, '10', '40', 'Pork Tocino', '15.99', '../assets/images/products/61.jpg'),
(341, '1', '41', 'Presidio Salad', '13.99', '../assets/images/products/62.jpg'),
(342, '2', '42', 'Pumpkin Pork Stew', '17.99', '../assets/images/products/63.jpg'),
(343, '3', '43', 'Rabbit Kabob', '26.99', '../assets/images/products/64.jpg'),
(344, '4', '44', 'Rainbow Salad', '13.99', '../assets/images/products/65.jpg'),
(345, '5', '45', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', '../assets/images/products/66.jpg'),
(346, '6', '46', 'Roasted Eggplant', '18.99', '../assets/images/products/67.jpg'),
(347, '7', '47', 'Sabzi Panir', '18.99', '../assets/images/products/68.jpg'),
(348, '8', '48', 'Salmon Ochazuke', '17.99', '../assets/images/products/69.jpg'),
(349, '9', '49', 'Samusa Soup', '9.99', '../assets/images/products/70.jpg'),
(350, '10', '50', 'Shiraz Salad', '14.99', '../assets/images/products/71.jpg'),
(351, '1', '1', 'Short Rib', '23.99', '../assets/images/products/72.jpg'),
(352, '2', '2', 'Sopa Azteca', '11.99', '../assets/images/products/73.jpg'),
(353, '3', '3', 'Sopes De Machaca', '18.99', '../assets/images/products/74.jpg'),
(354, '4', '4', 'Sticky Bun', '6.99', '../assets/images/products/75.jpg'),
(355, '5', '5', 'Sticky Finger Pork Riblettes', '12.99', '../assets/images/products/76.jpg'),
(356, '6', '6', 'Sunrise Combo', '16.99', '../assets/images/products/77.jpg'),
(357, '7', '7', 'Take & Bake Chicken Basteeya', '20.99', '../assets/images/products/78.jpg'),
(358, '8', '8', 'Tamarind Chili Shrimp', '18.99', '../assets/images/products/79.jpg'),
(359, '9', '9', 'Taste of Persia', '16.99', '../assets/images/products/80.jpg'),
(360, '10', '10', 'Thai Curry Pot Pie', '15.99', '../assets/images/products/81.jpg'),
(361, '1', '11', 'Tomato Hummus', '8.99', '../assets/images/products/82.jpg'),
(362, '2', '12', 'Trio Spreads', '19.99', '../assets/images/products/83.jpg'),
(363, '3', '13', 'Tuna Ceviche', '12.99', '../assets/images/products/84.jpg'),
(364, '4', '14', 'Turkish Breakfast For 2', '35.99', '../assets/images/products/85.jpg'),
(365, '5', '15', 'Turlu Omelet', '16.99', '../assets/images/products/86.jpg'),
(366, '6', '16', 'Tzatziki', '8.99', '../assets/images/products/87.jpg'),
(367, '7', '17', 'Vegan Tempeh Curry Noodles', '15.99', '../assets/images/products/88.jpg'),
(368, '8', '18', 'Vegetarian Du Chef', '26.99', '../assets/images/products/89.jpg'),
(369, '9', '19', 'Veggie Kabob', '18.99', '../assets/images/products/90.jpg'),
(370, '10', '20', 'Yogurt Salad', '17.99', '../assets/images/products/91.jpg'),
(371, '1', '21', 'Zereshk Polo', '8.99', '../assets/images/products/92.jpg'),
(372, '2', '22', 'Zucchini Dolmas', '15.99', '../assets/images/products/93.jpg'),
(373, '3', '23', 'Adas Polo', '16.99', '../assets/images/products/1.jpg'),
(374, '4', '24', 'Avocado Toast', '12.99', '../assets/images/products/2.jpg'),
(375, '5', '25', 'Basmati Rice', '18.99', '../assets/images/products/3.jpg'),
(376, '6', '26', 'Basteeya', '20.99', '../assets/images/products/4.jpg'),
(377, '7', '27', 'Bastilla Chicken Pie', '15.99', '../assets/images/products/5.jpg'),
(378, '8', '28', 'Beef Lamb Kabobs', '11.99', '../assets/images/products/6.jpg'),
(379, '9', '29', 'Braised Pork Belly Dinner', '15.99', '../assets/images/products/7.jpg'),
(380, '10', '30', 'Branzino', '33.99', '../assets/images/products/8.jpg'),
(381, '1', '31', 'Breakfast Sandwich', '14.99', '../assets/images/products/9.jpg'),
(382, '2', '32', 'Butternut Squash Soup', '8.99', '../assets/images/products/10.jpg'),
(383, '3', '33', 'Chicken Croquette', '15.99', '../assets/images/products/11.jpg'),
(384, '4', '34', 'Chicken Kabob', '19.99', '../assets/images/products/12.jpg'),
(385, '5', '35', 'Chicken Kabob', '24.99', '../assets/images/products/13.jpg'),
(386, '6', '36', 'Chicken Kebabs Plate', '6.99', '../assets/images/products/14.jpg'),
(387, '7', '37', 'Chicken Roulade', '25.99', '../assets/images/products/15.jpg'),
(388, '8', '38', 'Chicken Sandwich', '16.99', '../assets/images/products/16.jpg'),
(389, '9', '39', 'Chicken with Honey & Prunes', '24.99', '../assets/images/products/17.jpg'),
(390, '10', '40', 'Chicken with Lemon & Olives', '24.99', '../assets/images/products/18.jpg'),
(391, '1', '41', 'Chilaquiles Verdes', '17.99', '../assets/images/products/19.jpg'),
(392, '2', '42', 'Chipotle Chilaquiles Dinner', '18.99', '../assets/images/products/20.jpg'),
(393, '3', '43', 'Churros', '10.99', '../assets/images/products/21.jpg'),
(394, '4', '44', 'Creamy Mushroom Soup', '7.99', '../assets/images/products/22.jpg'),
(395, '5', '45', 'Crispy Chicken Dorados Dinner', '16.99', '../assets/images/products/23.jpg'),
(396, '6', '46', 'Duck Skin Fried Rice', '17.99', '../assets/images/products/24.jpg'),
(397, '7', '47', 'Enchiladas De Res Dinner', '21.99', '../assets/images/products/25.jpg'),
(398, '8', '48', 'Enchiladas Rojas Dinner', '19.99', '../assets/images/products/26.jpg'),
(399, '9', '49', 'Firecracker Cauliflower', '16.99', '../assets/images/products/27.jpg'),
(400, '10', '50', 'Fish Tagine', '26.99', '../assets/images/products/28.jpg'),
(401, '1', '1', 'French Toast', '14.99', '../assets/images/products/29.jpg'),
(402, '2', '2', 'Fresh Spring Rolls', '9.99', '../assets/images/products/30.jpg'),
(403, '3', '3', 'Ghormeh Sabzi', '17.99', '../assets/images/products/31.jpg'),
(404, '4', '4', 'Green Plate', '15.99', '../assets/images/products/32.jpg'),
(405, '5', '5', 'Griddled Skirt Steak Dinner', '18.99', '../assets/images/products/33.jpg'),
(406, '6', '6', 'Grilled Arctic Char Dinner', '18.99', '../assets/images/products/34.jpg'),
(407, '7', '7', 'Grilled Chicken', '23.99', '../assets/images/products/35.jpg'),
(408, '8', '8', 'Grilled Lamb Kofte', '16.99', '../assets/images/products/36.jpg'),
(409, '9', '9', 'Harissa', '4.99', '../assets/images/products/37.jpg'),
(410, '10', '10', 'Huevos Benedictos', '18.99', '../assets/images/products/38.jpg'),
(411, '1', '11', 'Huevos Rancheros', '17.99', '../assets/images/products/39.jpg'),
(412, '2', '12', 'Jeweled Rice', '7.99', '../assets/images/products/40.jpg'),
(413, '3', '13', 'Joojeh Kabob', '15.99', '../assets/images/products/41.jpg'),
(414, '4', '14', 'Karniyarik', '25.99', '../assets/images/products/42.jpg'),
(415, '5', '15', 'Kau Soi', '15.99', '../assets/images/products/43.jpg'),
(416, '6', '16', 'Koobideh Kabob', '9.99', '../assets/images/products/44.jpg'),
(417, '7', '17', 'Kookoo Sabzi', '15.99', '../assets/images/products/45.jpg'),
(418, '8', '18', 'Lamb Chops', '21.99', '../assets/images/products/46.jpg'),
(419, '9', '19', 'Lamb Curry', '18.99', '../assets/images/products/47.jpg'),
(420, '10', '20', 'Lamb with Honey & Almonds', '24.99', '../assets/images/products/48.jpg'),
(421, '1', '21', 'Lean Beef Stew', '11.99', '../assets/images/products/49.jpg'),
(422, '2', '22', 'Lentil Soup', '16.99', '../assets/images/products/50.jpg'),
(423, '3', '23', 'Lentil Soup', '0.99', '../assets/images/products/51.jpg'),
(424, '4', '24', 'Levain Toast', '7.99', '../assets/images/products/52.jpg'),
(425, '5', '25', 'Manti', '21.99', '../assets/images/products/53.jpg'),
(426, '6', '26', 'Menemen', '15.99', '../assets/images/products/54.jpg'),
(427, '7', '27', 'Miso Cod', '17.99', '../assets/images/products/55.jpg'),
(428, '8', '28', 'Moroccan Seafood', '26.99', '../assets/images/products/56.jpg'),
(429, '9', '29', 'Papas Bravas', '11.99', '../assets/images/products/57.jpg'),
(430, '10', '30', 'Patatas Bravas', '8.99', '../assets/images/products/58.jpg'),
(431, '1', '31', 'Platha Dipper', '9.99', '../assets/images/products/59.jpg'),
(432, '2', '32', 'Pork Carnitas Dinner', '16.99', '../assets/images/products/60.jpg'),
(433, '3', '33', 'Pork Tocino', '15.99', '../assets/images/products/61.jpg'),
(434, '4', '34', 'Presidio Salad', '13.99', '../assets/images/products/62.jpg'),
(435, '5', '35', 'Pumpkin Pork Stew', '17.99', '../assets/images/products/63.jpg'),
(436, '6', '36', 'Rabbit Kabob', '26.99', '../assets/images/products/64.jpg'),
(437, '7', '37', 'Rainbow Salad', '13.99', '../assets/images/products/65.jpg'),
(438, '8', '38', 'Roasted Chicken Salad Open-faced Sandwich', '16.99', '../assets/images/products/66.jpg'),
(439, '9', '39', 'Roasted Eggplant', '18.99', '../assets/images/products/67.jpg'),
(440, '10', '40', 'Sabzi Panir', '18.99', '../assets/images/products/68.jpg'),
(441, '1', '41', 'Salmon Ochazuke', '17.99', '../assets/images/products/69.jpg'),
(442, '2', '42', 'Samusa Soup', '9.99', '../assets/images/products/70.jpg'),
(443, '3', '43', 'Shiraz Salad', '14.99', '../assets/images/products/71.jpg'),
(444, '4', '44', 'Short Rib', '23.99', '../assets/images/products/72.jpg'),
(445, '5', '45', 'Sopa Azteca', '11.99', '../assets/images/products/73.jpg'),
(446, '6', '46', 'Sopes De Machaca', '18.99', '../assets/images/products/74.jpg'),
(447, '7', '47', 'Sticky Bun', '6.99', '../assets/images/products/75.jpg'),
(448, '8', '48', 'Sticky Finger Pork Riblettes', '12.99', '../assets/images/products/76.jpg'),
(449, '9', '49', 'Sunrise Combo', '16.99', '../assets/images/products/77.jpg'),
(450, '10', '50', 'Take & Bake Chicken Basteeya', '20.99', '../assets/images/products/78.jpg'),
(451, '1', '1', 'Tamarind Chili Shrimp', '18.99', '../assets/images/products/79.jpg'),
(452, '2', '2', 'Taste of Persia', '16.99', '../assets/images/products/80.jpg'),
(453, '3', '3', 'Thai Curry Pot Pie', '15.99', '../assets/images/products/81.jpg'),
(454, '4', '4', 'Tomato Hummus', '8.99', '../assets/images/products/82.jpg'),
(455, '5', '5', 'Trio Spreads', '19.99', '../assets/images/products/83.jpg'),
(456, '6', '6', 'Tuna Ceviche', '12.99', '../assets/images/products/84.jpg'),
(457, '7', '7', 'Turkish Breakfast For 2', '35.99', '../assets/images/products/85.jpg'),
(458, '8', '8', 'Turlu Omelet', '16.99', '../assets/images/products/86.jpg'),
(459, '9', '9', 'Tzatziki', '8.99', '../assets/images/products/87.jpg'),
(460, '10', '10', 'Vegan Tempeh Curry Noodles', '15.99', '../assets/images/products/88.jpg'),
(461, '1', '11', 'Vegetarian Du Chef', '26.99', '../assets/images/products/89.jpg'),
(462, '2', '12', 'Veggie Kabob', '18.99', '../assets/images/products/90.jpg'),
(463, '3', '13', 'Yogurt Salad', '17.99', '../assets/images/products/91.jpg'),
(464, '4', '14', 'Zereshk Polo', '8.99', '../assets/images/products/92.jpg'),
(465, '5', '15', 'Zucchini Dolmas', '15.99', '../assets/images/products/93.jpg');

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
(2, '7', '46 Adelabu Street', 'Uwani', '40102', 'Enugu', 'Nigeria', 'GGKHHGBG', '+2349071510046', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `restaurant_name` varchar(33) NOT NULL,
  `restaurant_pix` varchar(28) NOT NULL,
  `restaurant_address` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`restaurant_name`, `restaurant_pix`, `restaurant_address`) VALUES
('a Mano', 'restaurants/restaurant1.jpg', 'Hayes Valley'),
('Asian American Food Company', 'restaurants/restaurant2.jpg', 'Parkside'),
('Beit Rima', 'restaurants/restaurant3.jpg', 'Duboce Triangle'),
('Beretta', 'restaurants/restaurant4.jpg', 'NoPa'),
('Brenda\'s Meat & Three', 'restaurants/restaurant5.jpg', 'NoPa'),
('Burma Superstar', 'restaurants/restaurant6.jpg', 'Inner Richmond'),
('California Fish Market Restaurant', 'restaurants/restaurant7.jpg', 'North Beach/Telegraph Hill'),
('Daeho Kalbijjim & Beef Soup', 'restaurants/restaurant8.jpg', 'Japantown'),
('Delarosa', 'restaurants/restaurant9.jpg', 'Marina/Cow Hollow'),
('Dumpling House', 'restaurants/restaurant10.jpg', 'Castro'),
('El Mansour', 'restaurants/restaurant11.jpg', 'Outer Richmond'),
('Ernest', 'restaurants/restaurant12.jpg', 'Mission'),
('Farmhouse Kitchen Thai Cuisine', 'restaurants/restaurant13.jpg', 'Mission'),
('Fiorella - Sunset', 'restaurants/restaurant14.jpg', 'Inner Sunset'),
('Fog Harbor Fish House', 'restaurants/restaurant15.jpg', 'Fisherman\'s Wharf'),
('Hodala', 'restaurants/restaurant16.jpg', 'Outer Richmond'),
('Horsefeather', 'restaurants/restaurant17.jpg', 'Alamo Square'),
('Jamie\'s place', 'restaurants/restaurant18.jpg', 'Inner Sunset'),
('Jaranita', 'restaurants/restaurant19.jpg', 'Marina/Cow Hollow'),
('JIJIME', 'restaurants/restaurant20.jpg', 'Outer Richmond'),
('Kokkari Estiatorio', 'restaurants/restaurant21.jpg', 'Financial District'),
('Komaaj', 'restaurants/restaurant22.jpg', 'Mission'),
('Lavash', 'restaurants/restaurant23.jpg', 'Inner Sunset'),
('Le Fantastique', 'restaurants/restaurant24.jpg', 'Hayes Valley'),
('Lily', 'restaurants/restaurant25.jpg', 'Inner Richmond'),
('Lokma', 'restaurants/restaurant26.jpg', 'Outer Richmond'),
('MaMo', 'restaurants/restaurant27.jpg', 'Marina/Cow Hollow'),
('Manna', 'restaurants/restaurant28.jpg', 'Inner Sunset'),
('Marufuku Ramen', 'restaurants/restaurant29.jpg', 'Lower Pacific Heights'),
('Nash Hot Chicken & Ramen', 'restaurants/restaurant30.jpg', 'Castro'),
('Nopa', 'restaurants/restaurant31.jpg', 'Alamo Square'),
('Nopalito', 'restaurants/restaurant32.jpg', 'Lower Haight'),
('Otra', 'restaurants/restaurant33.jpg', 'Lower Haight'),
('Parada 22', 'restaurants/restaurant34.jpg', 'The Haight'),
('Pearl 6101', 'restaurants/restaurant35.jpg', 'Outer Richmond'),
('Picaro', 'restaurants/restaurant36.jpg', 'Mission'),
('Pizza Due', 'restaurants/restaurant37.jpg', 'Castro'),
('Routier', 'restaurants/restaurant38.jpg', 'Lower Pacific Heights'),
('San Tung', 'restaurants/restaurant39.jpg', 'Inner Sunset'),
('Santeria', 'restaurants/restaurant40.jpg', 'Castro'),
('Secret Bar & Lounge', 'restaurants/restaurant41.jpg', 'Tenderloin'),
('Sotto Mare Oysteria & Seafood', 'restaurants/restaurant42.jpg', 'North Beach/Telegraph Hill'),
('Starbelly', 'restaurants/restaurant43.jpg', 'Castro'),
('Suppenk¸che', 'restaurants/restaurant44.jpg', 'Hayes Valley'),
('The Front Porch', 'restaurants/restaurant45.jpg', 'Bernal Heights'),
('The Tailor\'s Son', 'restaurants/restaurant46.jpg', 'Lower Pacific Heights'),
('Udon Mugizo', 'restaurants/restaurant47.jpg', 'Lower Pacific Heights'),
('Ushi Taro Ramen', 'restaurants/restaurant48.jpg', 'Inner Sunset'),
('Vanida Thai Kitchen', 'restaurants/restaurant49.jpg', 'Parkside'),
('Woodhouse Fish Company', 'restaurants/restaurant50.jpg', 'Lower Pacific Heights');

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
(1, '3', '', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-17 09:06:38', 'pending'),
(2, '3', '1400', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-17 09:08:05', 'pending'),
(3, '3', '1400', 'Array', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-17 09:09:43', 'pending'),
(4, '3', '1000', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:14:51', 'pending'),
(5, '3', '1000', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:15:41', 'pending'),
(6, '3', '1000', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:17:38', 'pending'),
(7, '3', '1000', 'Beans,Beans', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:20:42', 'pending');

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
(1, 'a Mano', '../assets/images/restaurants/restaurant1.jpg', 'Hayes Valley'),
(2, 'Asian American Food Company', '../assets/images/restaurants/restaurant2.jpg', 'Parkside'),
(3, 'Beit Rima', '../assets/images/restaurants/restaurant3.jpg', 'Duboce Triangle'),
(4, 'Beretta', '../assets/images/restaurants/restaurant4.jpg', 'NoPa'),
(5, 'Brenda\'s Meat & Three', '../assets/images/restaurants/restaurant5.jpg', 'NoPa'),
(6, 'Burma Superstar', '../assets/images/restaurants/restaurant6.jpg', 'Inner Richmond'),
(7, 'California Fish Market Restaurant', '../assets/images/restaurants/restaurant7.jpg', 'North Beach/Telegraph Hill'),
(8, 'Daeho Kalbijjim & Beef Soup', '../assets/images/restaurants/restaurant8.jpg', 'Japantown'),
(9, 'Delarosa', '../assets/images/restaurants/restaurant9.jpg', 'Marina/Cow Hollow'),
(10, 'Dumpling House', '../assets/images/restaurants/restaurant10.jpg', 'Castro'),
(11, 'El Mansour', '../assets/images/restaurants/restaurant11.jpg', 'Outer Richmond'),
(12, 'Ernest', '../assets/images/restaurants/restaurant12.jpg', 'Mission'),
(13, 'Farmhouse Kitchen Thai Cuisine', '../assets/images/restaurants/restaurant13.jpg', 'Mission'),
(14, 'Fiorella - Sunset', '../assets/images/restaurants/restaurant14.jpg', 'Inner Sunset'),
(15, 'Fog Harbor Fish House', '../assets/images/restaurants/restaurant15.jpg', 'Fisherman\'s Wharf'),
(16, 'Hodala', '../assets/images/restaurants/restaurant16.jpg', 'Outer Richmond'),
(17, 'Horsefeather', '../assets/images/restaurants/restaurant17.jpg', 'Alamo Square'),
(18, 'Jamie\'s place', '../assets/images/restaurants/restaurant18.jpg', 'Inner Sunset'),
(19, 'Jaranita', '../assets/images/restaurants/restaurant19.jpg', 'Marina/Cow Hollow'),
(20, 'JIJIME', '../assets/images/restaurants/restaurant20.jpg', 'Outer Richmond'),
(21, 'Kokkari Estiatorio', '../assets/images/restaurants/restaurant21.jpg', 'Financial District'),
(22, 'Komaaj', '../assets/images/restaurants/restaurant22.jpg', 'Mission'),
(23, 'Lavash', '../assets/images/restaurants/restaurant23.jpg', 'Inner Sunset'),
(24, 'Le Fantastique', '../assets/images/restaurants/restaurant24.jpg', 'Hayes Valley'),
(25, 'Lily', '../assets/images/restaurants/restaurant25.jpg', 'Inner Richmond'),
(26, 'Lokma', '../assets/images/restaurants/restaurant26.jpg', 'Outer Richmond'),
(27, 'MaMo', '../assets/images/restaurants/restaurant27.jpg', 'Marina/Cow Hollow'),
(28, 'Manna', '../assets/images/restaurants/restaurant28.jpg', 'Inner Sunset'),
(29, 'Marufuku Ramen', '../assets/images/restaurants/restaurant29.jpg', 'Lower Pacific Heights'),
(30, 'Nash Hot Chicken & Ramen', '../assets/images/restaurants/restaurant30.jpg', 'Castro'),
(31, 'Nopa', '../assets/images/restaurants/restaurant31.jpg', 'Alamo Square'),
(32, 'Nopalito', '../assets/images/restaurants/restaurant32.jpg', 'Lower Haight'),
(33, 'Otra', '../assets/images/restaurants/restaurant33.jpg', 'Lower Haight'),
(34, 'Parada 22', '../assets/images/restaurants/restaurant34.jpg', 'The Haight'),
(35, 'Pearl 6101', '../assets/images/restaurants/restaurant35.jpg', 'Outer Richmond'),
(36, 'Picaro', '../assets/images/restaurants/restaurant36.jpg', 'Mission'),
(37, 'Pizza Due', '../assets/images/restaurants/restaurant37.jpg', 'Castro'),
(38, 'Routier', '../assets/images/restaurants/restaurant38.jpg', 'Lower Pacific Heights'),
(39, 'San Tung', '../assets/images/restaurants/restaurant39.jpg', 'Inner Sunset'),
(40, 'Santeria', '../assets/images/restaurants/restaurant40.jpg', 'Castro'),
(41, 'Secret Bar & Lounge', '../assets/images/restaurants/restaurant41.jpg', 'Tenderloin'),
(42, 'Sotto Mare Oysteria & Seafood', '../assets/images/restaurants/restaurant42.jpg', 'North Beach/Telegraph Hill'),
(43, 'Starbelly', '../assets/images/restaurants/restaurant43.jpg', 'Castro'),
(44, 'Suppenk¸che', '../assets/images/restaurants/restaurant44.jpg', 'Hayes Valley'),
(45, 'The Front Porch', '../assets/images/restaurants/restaurant45.jpg', 'Bernal Heights'),
(46, 'The Tailor\'s Son', '../assets/images/restaurants/restaurant46.jpg', 'Lower Pacific Heights'),
(47, 'Udon Mugizo', '../assets/images/restaurants/restaurant47.jpg', 'Lower Pacific Heights'),
(48, 'Ushi Taro Ramen', '../assets/images/restaurants/restaurant48.jpg', 'Inner Sunset'),
(49, 'Vanida Thai Kitchen', '../assets/images/restaurants/restaurant49.jpg', 'Parkside'),
(50, 'Woodhouse Fish Company', '../assets/images/restaurants/restaurant50.jpg', 'Lower Pacific Heights');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`) VALUES
(6, 'james Rohl', 'stanfugy@gmail.com', '$2y$10$m6q8.0BEFcCM5Ha6ndA7WOsrpEtwXA2bjmtWWjIXOJEdqQRNyanPi'),
(7, 'Signs Madueke', 'signsmadueke1@gmail.com', '$2y$10$y1jgHeeH1HsxdHO/rxbiNePUCW6IP4pEUONb/L2TuOqfLKRp/Xrai');

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
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`restaurant_name`);

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
  MODIFY `cuisine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
