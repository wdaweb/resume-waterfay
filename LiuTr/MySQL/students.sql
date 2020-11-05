-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-05 04:18:36
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
-- 資料庫： `students`
--

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--


--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `name`, `national_id`, `seat_num`, `classes`, `gender`, `birthday`, `student_ID`, `tel`, `addr`) VALUES
(null, '關羽', 'K54267645', 1, '一年一班', 1, '1992-11-12', '1234564564', '0912247326', '花蓮市不知道什麼區'),
(null, '劉備', 'J232323223', 2, '一年三班', 1, '1996-05-12', '00142534', '0912247326', '新北市三重區仁華街118巷47號6樓'),
(null, '趙雲', 'O56456432', 3, '一年五班', 2, '2020-05-22', '054645', '458165446', '桃園市不知道什麼區');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
