-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-30 01:57:05
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
-- 資料庫： `file`
--

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `birthday` date NOT NULL,
  `addr` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `birthday`, `addr`) VALUES
(1, '小明', 20, '1990-10-12', '台北市\r\n'),
(2, '小華', 20, '1989-10-12', '台中市\r\n'),
(3, '小芳', 20, '1985-10-12', '台南市\r\n'),
(4, '小美', 20, '1991-10-12', '高雄市');

-- --------------------------------------------------------

--
-- 資料表結構 `upload`
--

CREATE TABLE `upload` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `path` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `upload`
--

INSERT INTO `upload` (`id`, `name`, `type`, `note`, `upload_time`, `path`) VALUES
(6, 'image-02.jpg', '圖檔', '', '2020-11-26 06:34:53', './img/20201126023453.jpg'),
(7, 'image-10.jpg', '圖檔', '123', '2020-11-26 06:35:01', './img/20201126023501.jpg'),
(8, 'image-10.jpg', '圖檔', '123', '2020-11-26 06:35:26', './img/20201126023526.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
