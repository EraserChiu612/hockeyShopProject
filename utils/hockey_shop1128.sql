-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-11-27 18:09:42
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `hockey_shop`
--

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `category_sort` int(3) NOT NULL,
  `cate_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_sort`, `cate_description`) VALUES
(1, 'CANNON-PRO', 1, 'PRO 100%碳纖維桿身'),
(2, 'CANNON-C5', 2, 'C5 50%碳纖維桿身'),
(3, 'CANNON-C1', 2, 'C1 10%碳纖維桿身'),
(4, 'SNIPER', 4, '手套\r\n');

-- --------------------------------------------------------

--
-- 資料表結構 `curve`
--

CREATE TABLE `curve` (
  `curve_id` int(11) NOT NULL,
  `curve_item` enum('P92','P28','P88','PM9','P91A','P02','無此值') NOT NULL,
  `curve_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `curve`
--

INSERT INTO `curve` (`curve_id`, `curve_item`, `curve_description`) VALUES
(1, 'P92', '萬用角度'),
(2, 'P28', 'p28 高手專用'),
(3, 'P88', 'P88是PM9的延伸版'),
(4, 'PM9', 'PM9 直角拍面'),
(5, 'P91A', 'P91A 直角拍面2'),
(6, 'P02', 'P02 方形拍面'),
(7, '無此值', '無此值');

-- --------------------------------------------------------

--
-- 資料表結構 `flex`
--

CREATE TABLE `flex` (
  `flex_id` int(11) NOT NULL,
  `flex_item` enum('45','50','65','70','75','80','85','90','95','100','105','40','無此值') NOT NULL,
  `flex_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `flex`
--

INSERT INTO `flex` (`flex_id`, `flex_item`, `flex_description`) VALUES
(1, '45', '45FLEX'),
(2, '50', '50FLEX'),
(3, '65', '65FLEX'),
(4, '70', '70FLEX'),
(5, '75', '75FLEX'),
(6, '80', '80FLEX'),
(7, '85', '85FLEX'),
(8, '90', '90FLEX'),
(9, '95', '95FLEX'),
(10, '100', '100FLEX'),
(11, '105', '105FLEX'),
(12, '40', '40FLEX'),
(13, '無此值', '無此值');

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `od_time` datetime NOT NULL,
  `od_total` int(6) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_mail` varchar(30) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_address` text NOT NULL,
  `od_payment` enum('貨到付款','線上刷卡','匯款轉帳') NOT NULL,
  `customer_remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `order`
--

INSERT INTO `order` (`order_id`, `od_time`, `od_total`, `customer_name`, `customer_mail`, `customer_phone`, `customer_address`, `od_payment`, `customer_remark`) VALUES
(1, '2023-11-20 07:21:00', 500, '王小寰', 'tom@gmail.com', '0972208555', '台北市中山北路一段100號', '貨到付款', ''),
(2, '2023-11-20 08:47:09', 5800, 'ALEX', 'ALEX@gmail.com', '0929151559', '台北市內湖區', '貨到付款', '');

-- --------------------------------------------------------

--
-- 資料表結構 `order_pd_detail`
--

CREATE TABLE `order_pd_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pd_price` int(11) NOT NULL,
  `or_pd_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `pd_name` varchar(50) NOT NULL,
  `pd_price` int(6) NOT NULL,
  `pd_color` varchar(10) NOT NULL,
  `pd_locale` enum('陸地','冰上','無此值') NOT NULL,
  `pd_hand` enum('左手','右手','無此值') NOT NULL,
  `curve_id` int(11) NOT NULL,
  `pd_kit_point` enum('高','中','低','無此值') NOT NULL,
  `flex_id` int(11) NOT NULL,
  `pd_carbon` enum('10%','50%','100%','無此值') NOT NULL,
  `pd_grip` enum('有','無','無此值') NOT NULL,
  `pd_description` text NOT NULL,
  `pd_size` enum('14','15','null') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `pd_name`, `pd_price`, `pd_color`, `pd_locale`, `pd_hand`, `curve_id`, `pd_kit_point`, `flex_id`, `pd_carbon`, `pd_grip`, `pd_description`, `pd_size`) VALUES
(193, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '右手', 1, '高', 3, '100%', '有', 'SR,陸地,r', 'null'),
(194, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '右手', 1, '高', 3, '100%', '有', 'SR,冰上,r', 'null'),
(195, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '左手', 1, '高', 3, '100%', '有', 'SR,陸地,L', 'null'),
(196, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '左手', 1, '高', 3, '100%', '有', 'SR,冰上,L', 'null'),
(197, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '右手', 1, '高', 4, '100%', '有', 'SR,陸地,r', 'null'),
(198, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '右手', 1, '高', 4, '100%', '有', 'SR,冰上,r', 'null'),
(199, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '左手', 1, '高', 4, '100%', '有', 'SR,陸地,L', 'null'),
(200, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '左手', 1, '高', 4, '100%', '有', 'SR,冰上,L', 'null'),
(201, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '右手', 1, '高', 5, '100%', '有', 'SR,陸地,r', 'null'),
(202, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '右手', 1, '高', 5, '100%', '有', 'SR,冰上,r', 'null'),
(203, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '左手', 1, '高', 5, '100%', '有', 'SR,陸地,L', 'null'),
(204, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '左手', 1, '高', 5, '100%', '有', 'SR,冰上,L', 'null'),
(205, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '右手', 1, '高', 6, '100%', '有', 'SR,陸地,r', 'null'),
(206, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '右手', 1, '高', 6, '100%', '有', 'SR,冰上,r', 'null'),
(207, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '左手', 1, '高', 6, '100%', '有', 'SR,陸地,L', 'null'),
(208, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '左手', 1, '高', 6, '100%', '有', 'SR,冰上,L', 'null'),
(209, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '右手', 1, '高', 7, '100%', '有', 'SR,陸地,r', 'null'),
(210, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '右手', 1, '高', 7, '100%', '有', 'SR,冰上,r', 'null'),
(211, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '左手', 1, '高', 7, '100%', '有', 'SR,陸地,L', 'null'),
(212, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '左手', 1, '高', 7, '100%', '有', 'SR,冰上,L', 'null'),
(213, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '右手', 1, '高', 8, '100%', '有', 'SR,陸地,r', 'null'),
(214, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '右手', 1, '高', 8, '100%', '有', 'SR,冰上,r', 'null'),
(215, 1, 'CANNON-PRO-SR', 5800, 'null', '陸地', '左手', 1, '高', 8, '100%', '有', 'SR,陸地,L', 'null'),
(216, 1, 'CANNON-PRO-SR', 5800, 'null', '冰上', '左手', 1, '高', 8, '100%', '有', 'SR,冰上,L', 'null'),
(217, 1, 'CANNON-PRO-INT', 5200, 'null', '陸地', '右手', 1, '高', 3, '100%', '有', 'INT,陸地,r', 'null'),
(218, 1, 'CANNON-PRO-INT', 5200, 'null', '冰上', '右手', 1, '高', 3, '100%', '有', 'INT,冰上,r', 'null'),
(219, 1, 'CANNON-PRO-INT', 5200, 'null', '陸地', '左手', 1, '高', 3, '100%', '有', 'INT,陸地,L', 'null'),
(220, 1, 'CANNON-PRO-INT', 5200, 'null', '冰上', '左手', 1, '高', 3, '100%', '有', 'INT,冰上,L', 'null'),
(221, 1, 'CANNON-PRO-INT', 5200, 'null', '陸地', '右手', 1, '高', 4, '100%', '有', 'INT,陸地,r', 'null'),
(222, 1, 'CANNON-PRO-INT', 5200, 'null', '冰上', '右手', 1, '高', 4, '100%', '有', 'INT,冰上,r', 'null'),
(223, 1, 'CANNON-PRO-INT', 5200, 'null', '陸地', '左手', 1, '高', 4, '100%', '有', 'INT,陸地,L', 'null'),
(224, 1, 'CANNON-PRO-INT', 5200, 'null', '冰上', '左手', 1, '高', 4, '100%', '有', 'INT,冰上,L', 'null'),
(225, 1, 'CANNON-PRO-INT', 5200, 'null', '陸地', '右手', 1, '高', 5, '100%', '有', 'INT,陸地,r', 'null'),
(226, 1, 'CANNON-PRO-INT', 5200, 'null', '冰上', '右手', 1, '高', 5, '100%', '有', 'INT,冰上,r', 'null'),
(227, 1, 'CANNON-PRO-INT', 5200, 'null', '陸地', '左手', 1, '高', 5, '100%', '有', 'INT,陸地,L', 'null'),
(228, 1, 'CANNON-PRO-INT', 5200, 'null', '冰上', '左手', 1, '高', 5, '100%', '有', 'INT,冰上,L', 'null'),
(229, 1, 'CANNON-PRO-JR', 4800, 'null', '陸地', '右手', 1, '高', 2, '100%', '有', 'JR,陸地,r', 'null'),
(230, 1, 'CANNON-PRO-JR', 4800, 'null', '冰上', '右手', 1, '高', 2, '100%', '有', 'JR,冰上,r', 'null'),
(231, 1, 'CANNON-PRO-JR', 4800, 'null', '陸地', '左手', 1, '高', 2, '100%', '有', 'JR,陸地,L', 'null'),
(232, 1, 'CANNON-PRO-JR', 4800, 'null', '冰上', '左手', 1, '高', 2, '100%', '有', 'JR,冰上,L', 'null'),
(233, 1, 'CANNON-PRO-YT', 4600, 'null', '陸地', '右手', 1, '高', 12, '100%', '有', 'YT,陸地,r', 'null'),
(234, 1, 'CANNON-PRO-YT', 4600, 'null', '冰上', '右手', 1, '高', 12, '100%', '有', 'YT,冰上,r', 'null'),
(235, 1, 'CANNON-PRO-YT', 4600, 'null', '陸地', '左手', 1, '高', 12, '100%', '有', 'YT,陸地,L', 'null'),
(236, 1, 'CANNON-PRO-YT', 4600, 'null', '冰上', '左手', 1, '高', 12, '100%', '有', 'YT,冰上,L', 'null'),
(237, 1, 'CANNON-PRO-YT', 4600, 'null', '陸地', '右手', 1, '高', 1, '100%', '有', 'YT,陸地,r', 'null'),
(238, 1, 'CANNON-PRO-YT', 4600, 'null', '冰上', '右手', 1, '高', 1, '100%', '有', 'YT,冰上,r', 'null'),
(239, 1, 'CANNON-PRO-YT', 4600, 'null', '陸地', '左手', 1, '高', 1, '100%', '有', 'YT,陸地,L', 'null'),
(240, 1, 'CANNON-PRO-YT', 4600, 'null', '冰上', '左手', 1, '高', 1, '100%', '有', 'YT,冰上,L', 'null'),
(241, 4, 'SNIPER手套-SR', 8000, '白', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,白,14', '14'),
(242, 4, 'SNIPER手套-SR', 8000, '白', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,白,15', '15'),
(243, 4, 'SNIPER手套-SR', 8000, '藍', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,藍,14', '14'),
(244, 4, 'SNIPER手套-SR', 8000, '藍', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,藍,15', '15'),
(245, 4, 'SNIPER手套-SR', 8000, '綠', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,綠,14', '14'),
(246, 4, 'SNIPER手套-SR', 8000, '綠', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,綠,15', '15'),
(247, 4, 'SNIPER手套-SR', 8000, '黑', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,黑,14', '14'),
(248, 4, 'SNIPER手套-SR', 8000, '黑', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,黑,15', '15'),
(249, 4, 'SNIPER手套-SR', 8000, '橘', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,橘,14', '14'),
(250, 4, 'SNIPER手套-SR', 8000, '橘', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'SR,橘,15', '15'),
(251, 4, 'SNIPER手套-INT', 8000, '白', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,白,14', '14'),
(252, 4, 'SNIPER手套-INT', 8000, '白', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,白,15', '15'),
(253, 4, 'SNIPER手套-INT', 8000, '藍', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,藍,14', '14'),
(254, 4, 'SNIPER手套-INT', 8000, '藍', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,藍,15', '15'),
(255, 4, 'SNIPER手套-INT', 8000, '綠', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,綠,14', '14'),
(256, 4, 'SNIPER手套-INT', 8000, '綠', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,綠,15', '15'),
(257, 4, 'SNIPER手套-INT', 8000, '黑', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,黑,14', '14'),
(258, 4, 'SNIPER手套-INT', 8000, '黑', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,黑,15', '15'),
(259, 4, 'SNIPER手套-INT', 8000, '橘', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,橘,14', '14'),
(260, 4, 'SNIPER手套-INT', 8000, '橘', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'INT,橘,15', '15'),
(261, 4, 'SNIPER手套-JR', 8000, '白', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,白,14', '14'),
(262, 4, 'SNIPER手套-JR', 8000, '白', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,白,15', '15'),
(263, 4, 'SNIPER手套-JR', 8000, '藍', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,藍,14', '14'),
(264, 4, 'SNIPER手套-JR', 8000, '藍', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,藍,15', '15'),
(265, 4, 'SNIPER手套-JR', 8000, '綠', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,綠,14', '14'),
(266, 4, 'SNIPER手套-JR', 8000, '綠', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,綠,15', '15'),
(267, 4, 'SNIPER手套-JR', 8000, '黑', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,黑,14', '14'),
(268, 4, 'SNIPER手套-JR', 8000, '黑', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,黑,15', '15'),
(269, 4, 'SNIPER手套-JR', 8000, '橘', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,橘,14', '14'),
(270, 4, 'SNIPER手套-JR', 8000, '橘', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'JR,橘,15', '15'),
(271, 4, 'SNIPER手套-YT', 8000, '白', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,白,14', '14'),
(272, 4, 'SNIPER手套-YT', 8000, '白', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,白,15', '15'),
(273, 4, 'SNIPER手套-YT', 8000, '藍', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,藍,14', '14'),
(274, 4, 'SNIPER手套-YT', 8000, '藍', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,藍,15', '15'),
(275, 4, 'SNIPER手套-YT', 8000, '綠', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,綠,14', '14'),
(276, 4, 'SNIPER手套-YT', 8000, '綠', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,綠,15', '15'),
(277, 4, 'SNIPER手套-YT', 8000, '黑', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,黑,14', '14'),
(278, 4, 'SNIPER手套-YT', 8000, '黑', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,黑,15', '15'),
(279, 4, 'SNIPER手套-YT', 8000, '橘', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,橘,14', '14'),
(280, 4, 'SNIPER手套-YT', 8000, '橘', '無此值', '無此值', 7, '無此值', 13, '無此值', '無此值', 'YT,橘,15', '15');

-- --------------------------------------------------------

--
-- 資料表結構 `subscribe`
--

CREATE TABLE `subscribe` (
  `sub_id` int(11) NOT NULL,
  `sub_time` datetime NOT NULL,
  `sub_mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- 資料表索引 `curve`
--
ALTER TABLE `curve`
  ADD PRIMARY KEY (`curve_id`);

--
-- 資料表索引 `flex`
--
ALTER TABLE `flex`
  ADD PRIMARY KEY (`flex_id`);

--
-- 資料表索引 `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- 資料表索引 `order_pd_detail`
--
ALTER TABLE `order_pd_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `訂單關聯` (`order_id`),
  ADD KEY `產品關聯` (`product_id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `分類列表` (`category_id`),
  ADD KEY `曲度列表` (`curve_id`),
  ADD KEY `硬度列表` (`flex_id`);

--
-- 資料表索引 `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `curve`
--
ALTER TABLE `curve`
  MODIFY `curve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `flex`
--
ALTER TABLE `flex`
  MODIFY `flex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_pd_detail`
--
ALTER TABLE `order_pd_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `order_pd_detail`
--
ALTER TABLE `order_pd_detail`
  ADD CONSTRAINT `產品關聯` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `訂單關聯` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `分類列表` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `曲度列表` FOREIGN KEY (`curve_id`) REFERENCES `curve` (`curve_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `硬度列表` FOREIGN KEY (`flex_id`) REFERENCES `flex` (`flex_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
