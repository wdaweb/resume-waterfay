-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-30 01:57:12
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
-- 資料庫： `firstdb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `name` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `national_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_num` tinyint(2) UNSIGNED NOT NULL COMMENT '座號',
  `classes` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '班級',
  `gender` tinyint(1) UNSIGNED NOT NULL COMMENT '性別',
  `birthday` date NOT NULL COMMENT '生日',
  `student_ID` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '學號',
  `tel` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '電話',
  `addr` varchar(127) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '地址'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `name`, `national_id`, `seat_num`, `classes`, `gender`, `birthday`, `student_ID`, `tel`, `addr`) VALUES
(0, '關羽', 'K54267645', 1, '一年一班', 1, '1992-11-12', '1234564564', '0912247326', '花蓮市不知道什麼區'),
(0, '劉備', 'J232323223', 2, '一年三班', 1, '1996-05-12', '00142534', '0912247326', '新北市三重區仁華街118巷47號6樓'),
(0, '趙雲', 'O56456432', 3, '一年五班', 2, '2020-05-22', '054645', '458165446', '桃園市不知道什麼區');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
