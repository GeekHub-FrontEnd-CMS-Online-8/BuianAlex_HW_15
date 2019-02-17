-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лют 18 2019 р., 00:58
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
  `family_status` text NOT NULL,
  `home_address` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users_tb`
--

INSERT INTO `users_tb` (`id`, `name_user`, `surname`, `gender`, `b_day`, `family_status`, `home_address`, `email`) VALUES
(121, 'Aleksandr', 'Buian', 'male', '1981-05-30', '', '', 'test@test');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
