-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 12 2023 г., 12:41
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cakes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cakes`
--

CREATE TABLE `cakes` (
  `id` int(11) NOT NULL,
  `cakeName` varchar(255) NOT NULL,
  `cakeDescription` text NOT NULL,
  `cakePhoto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cakes`
--

INSERT INTO `cakes` (`id`, `cakeName`, `cakeDescription`, `cakePhoto`) VALUES
(1, 'Card title', 'This is a longer card with supporting text below as a natural lead-in to additional content.', 'img1.jpg'),
(2, 'Card title', 'This is a longer card with supporting text below as a natural lead-in to additional content.', 'img2.jpg'),
(3, 'Card title', 'This is a longer card with supporting text below as a natural lead-in to additional content.', 'img3.jpg'),
(4, 'Card title', 'This is a longer card with supporting text below as a natural lead-in to additional content.', 'img4.jpg'),
(5, 'Card title', 'This is a longer card with supporting text below as a natural lead-in to additional content.', 'img4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `cake_votes`
--

CREATE TABLE `cake_votes` (
  `id` int(11) NOT NULL,
  `cakeId` int(11) NOT NULL,
  `numberOfVotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cake_votes`
--

INSERT INTO `cake_votes` (`id`, `cakeId`, `numberOfVotes`) VALUES
(1, 1, 42),
(3, 2, 17),
(4, 3, 11),
(42, 5, 14),
(73, 4, 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cake_votes`
--
ALTER TABLE `cake_votes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cakeId` (`cakeId`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `cake_votes`
--
ALTER TABLE `cake_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cake_votes`
--
ALTER TABLE `cake_votes`
  ADD CONSTRAINT `cake_votes_ibfk_1` FOREIGN KEY (`cakeId`) REFERENCES `cakes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
