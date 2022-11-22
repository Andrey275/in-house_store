-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 23 2022 г., 12:14
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_01`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admintransaction`
--

CREATE TABLE `admintransaction` (
  `transactionID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `changePTS` int(11) NOT NULL,
  `transaction_time` datetime NOT NULL,
  `transaction_information` text NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `itemID` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `photo` text NOT NULL,
  `item_inf` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`itemID`, `item_name`, `photo`, `item_inf`, `price`) VALUES
(1, 'Телевизор', '../picture/TV.JPG.jpg', 'Нормальный', 10000),
(2, 'Футболка', '../picture/t-shirt.jpg', '100% хлопок', 600),
(3, 'aehn', '../picture/TV.jpg', 'Зеленая', 10000);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `full_name` text NOT NULL,
  `org_pas` text NOT NULL,
  `points` int(11) NOT NULL,
  `user_information` text NOT NULL,
  `picture` text NOT NULL,
  `tg_ID` text DEFAULT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`userID`, `full_name`, `org_pas`, `points`, `user_information`, `picture`, `tg_ID`, `role`) VALUES
(1, 'Богданов Валентин Владиславович', 'qwe123', 0, '', '../picture/TV.jpg', '@brus4a1ka', 'Директор'),
(2, 'Савельева Софья Прокловна', 'qwerty1', 400, '', '', '@sdv', 'Секретарь'),
(3, 'Михеев Андрей Сергеевич', 'qwerty2', 200, 'амирфвло', '', '@dufiew', 'МФВМФ');

-- --------------------------------------------------------

--
-- Структура таблицы `usertransaction`
--

CREATE TABLE `usertransaction` (
  `transactionID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `transaction_time` datetime NOT NULL,
  `itemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
