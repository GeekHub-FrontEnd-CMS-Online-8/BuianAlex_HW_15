-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лют 17 2019 р., 21:16
-- Версія сервера: 5.6.41
-- Версія PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `users_db`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users_tb`
--

CREATE TABLE `users_tb` (
  `id` int(11) NOT NULL,
  `name_user` tinytext NOT NULL,
  `surname` tinytext NOT NULL,
  `gender` tinytext NOT NULL,
  `b_day` text NOT NULL,
  `family_status` int(11) NOT NULL,
  `home_address` text NOT NULL,
  `hobby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users_tb`
--

INSERT INTO `users_tb` (`id`, `name_user`, `surname`, `gender`, `b_day`, `family_status`, `home_address`, `hobby`) VALUES
(50, 'Александр', 'Буян', 'male', '', 0, '37', 0),
(51, 'Ирина', 'КУУ', 'male', 'одружена', 0, '', 0);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
