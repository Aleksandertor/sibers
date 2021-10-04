-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 04 2021 г., 16:27
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sibers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `userdata`
--

CREATE TABLE `userdata` (
  `id` int NOT NULL,
  `Login` text NOT NULL,
  `Password` text NOT NULL,
  `First_name` text NOT NULL,
  `Surname` text NOT NULL,
  `Sex` text NOT NULL,
  `Date_of_birth` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `userdata`
--

INSERT INTO `userdata` (`id`, `Login`, `Password`, `First_name`, `Surname`, `Sex`, `Date_of_birth`) VALUES
(1, 'Volkarts', '11111111', 'Volk', 'Volkov', 'male', '1991-08-30'),
(2, 'KateOliver', '22222222', 'Kate', 'Oliver', 'female', '1997-06-07'),
(3, 'Batman', '33333333', 'Bruce', 'Wayne', 'male', '1968-01-01'),
(4, 'Govavavav', '44444444', 'Govard', 'Lafcraft', 'male', '1922-02-22'),
(5, 'Alexander1', '55555555', 'Alex', 'First', 'female', '1973-10-13'),
(6, 'Superman', '77777777', 'Kal', 'El', 'male', '1738-12-02'),
(7, 'admin', 'admin', 'admin', 'admin', 'male', '0001-01-01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
