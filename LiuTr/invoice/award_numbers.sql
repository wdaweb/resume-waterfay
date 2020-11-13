-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-13 09:21:49
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award_numbers`
--

CREATE TABLE `award_numbers` (
  `id` int(11) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `period` tinyint(1) NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award_numbers`
--

INSERT INTO `award_numbers` (`id`, `year`, `period`, `number`, `type`) VALUES
(1, 2020, 0, '59647042', 1),
(2, 2020, 1, '4564', 1),
(3, 2020, 1, '746874', 2),
(4, 2020, 1, '87489', 3),
(5, 2020, 1, '7987', 3),
(6, 2020, 1, '79878', 3),
(7, 2020, 1, '789', 4),
(8, 2020, 1, '464', 4),
(9, 2020, 1, '456', 4);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award_numbers`
--
ALTER TABLE `award_numbers`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_numbers`
--
ALTER TABLE `award_numbers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
