-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 01 2023 г., 22:56
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `preview` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `text`, `created`, `preview`) VALUES
(1, 'Choose...', 'Pre-press technology – a faster and cheaper way forward', 'Pre-press has been central to the printing industry for decades, yet has long suffered from a number of cost and efficiency problems. But, with the rise of automation, the field may soon be entering a new era.', '2023-02-01 20:57:51', '63fZpizrXD1675258770.jpg'),
(3, 'Choose...', 'The WordPress Security Guide To Keep Your Site Safe', 'Following these best practices will help ensure that a WordPress site is ready to meet the onslaught of hackers that are probing websites every day:\r\n\r\nUse HTTPS.\r\nDon’t use the word “admin” as your admin username.\r\nEnforce the use of strong passwords.\r\nUpdate plugins and themes.\r\nWebsite backup plan.\r\nMinimize the use of plugins.\r\nTwo-factor authentication.\r\nInstall a WordPress Firewall and Vulnerability Scanner.', '2023-02-01 21:07:39', 'KAHoZTCJwI1675258908.jpg'),
(5, 'Design', 'Color of the Year', 'Go bold in the new year with Viva Magenta, Pantone 2023 Color of the Year. The crimson hue is inspired by the red of cochineal, one of the strongest and brightest dyes in the world.', '2023-02-01 18:11:50', 'YhoNn7hesY1675267800.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_confirmed` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `password` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `is_confirmed`, `role`, `password`, `created`) VALUES
(1, 'Yareg', 'yaregr@gmail.com', NULL, 'admin', '$2y$10$utxOXlBGSBkqh.OsOOl84u7W5D8oj8Xry5T0.eFNkB5UkKHQFxDZC', '2023-01-30 18:36:19'),
(30, '222', '222@22', NULL, 'user', '$2y$10$wX7wT5eOl1Y6VwrT2NwUd.LXQdPGZJa2.sITw3LSz7PFZeeDIBPAC', '0000-00-00 00:00:00'),
(32, 'Test', 'test@gmail.com', NULL, 'user', NULL, '2023-01-30 19:58:53');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
