-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-20 05:40:06
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `musubino_project_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `musubino_tabel`
--

CREATE TABLE `musubino_tabel` (
  `id` int(30) NOT NULL,
  `med1` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med2` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med3` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med4` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med5` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med6` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med7` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med8` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med9` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med10` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med11` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med12` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `med13` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `other` varchar(500) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `name` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `musubino_tabel`
--

INSERT INTO `musubino_tabel` (`id`, `med1`, `med2`, `med3`, `med4`, `med5`, `med6`, `med7`, `med8`, `med9`, `med10`, `med11`, `med12`, `med13`, `other`, `name`, `date`, `created_at`, `updated_at`, `is_deleted`) VALUES
(8, '????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', '2022-01-17 13:20:48', '2022-01-17 13:20:48', 0),
(9, '????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', '2022-01-19 15:32:30', '2022-01-19 15:32:30', 0),
(10, NULL, NULL, '????', '????', NULL, '????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '??????????', '???', '2022-01-20', '2022-01-19 16:36:27', '2022-01-19 16:36:27', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `sex` varchar(3) COLLATE utf8mb4_bin NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `spouse` varchar(2) COLLATE utf8mb4_bin NOT NULL,
  `child` int(10) NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `sex`, `birthday`, `address`, `spouse`, `child`, `mail`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(14, 'おむすび', '男性', '2022-01-20', '山口県山口市小郡', 'あり', 2, 'bokuranobjj@gmail.com', '123456', 0, 0, '2022-01-20 13:10:26', '2022-01-20 13:10:26');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `musubino_tabel`
--
ALTER TABLE `musubino_tabel`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `musubino_tabel`
--
ALTER TABLE `musubino_tabel`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
