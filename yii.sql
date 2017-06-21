-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 21 2017 г., 18:47
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1494660729),
('m170513_073138_create_user_table', 1494661588),
('m170516_154505_create_news_table', 1494949705);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(12) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `image`, `date`, `is_deleted`) VALUES
(1, 'Новость 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut erat eu purus ultrices tempor. In at lacus egestas leo ultricies dignissim in sit amet nisi. Maecenas imperdiet eu massa vel efficitur. Donec lobortis sapien eu nunc imperdiet dictum. Fusce id metus sit amet ante consectetur gravida. Suspendisse tincidunt lacus ex, a pharetra arcu aliquet eget. Nullam sollicitudin lectus eu ullamcorper tristique. Nullam quis pulvinar leo. Cras et erat et lorem scelerisque tristique quis non massa. Vivamus ac vulputate ligula, quis dignissim dolor. Aliquam iaculis purus non leo facilisis feugiat. In lacinia vehicula sem eget commodo. Etiam euismod fringilla lobortis. Donec sit amet viverra sapien.', 'basic.jpg', '2017-05-16', 0),
(2, 'Новость 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut erat eu purus ultrices tempor. In at lacus egestas leo ultricies dignissim in sit amet nisi. Maecenas imperdiet eu massa vel efficitur. Donec lobortis sapien eu nunc imperdiet dictum. Fusce id metus sit amet ante consectetur gravida. Suspendisse tincidunt lacus ex, a pharetra arcu aliquet eget. Nullam sollicitudin lectus eu ullamcorper tristique. Nullam quis pulvinar leo. Cras et erat et lorem scelerisque tristique quis non massa. Vivamus ac vulputate ligula, quis dignissim dolor. Aliquam iaculis purus non leo facilisis feugiat. In lacinia vehicula sem eget commodo. Etiam euismod fringilla lobortis. Donec sit amet viverra sapien.', 'basic.jpg', '2017-05-16', 0),
(3, 'Новость 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut erat eu purus ultrices tempor. In at lacus egestas leo ultricies dignissim in sit amet nisi. Maecenas imperdiet eu massa vel efficitur. Donec lobortis sapien eu nunc imperdiet dictum. Fusce id metus sit amet ante consectetur gravida. Suspendisse tincidunt lacus ex, a pharetra arcu aliquet eget. Nullam sollicitudin lectus eu ullamcorper tristique. Nullam quis pulvinar leo. Cras et erat et lorem scelerisque tristique quis non massa. Vivamus ac vulputate ligula, quis dignissim dolor. Aliquam iaculis purus non leo facilisis feugiat. In lacinia vehicula sem eget commodo. Etiam euismod fringilla lobortis. Donec sit amet viverra sapien.', 'basic.jpg', '2017-05-16', 0),
(4, 'Новость 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut erat eu purus ultrices tempor. In at lacus egestas leo ultricies dignissim in sit amet nisi. Maecenas imperdiet eu massa vel efficitur. Donec lobortis sapien eu nunc imperdiet dictum. Fusce id metus sit amet ante consectetur gravida. Suspendisse tincidunt lacus ex, a pharetra arcu aliquet eget. Nullam sollicitudin lectus eu ullamcorper tristique. Nullam quis pulvinar leo. Cras et erat et lorem scelerisque tristique quis non massa. Vivamus ac vulputate ligula, quis dignissim dolor. Aliquam iaculis purus non leo facilisis feugiat. In lacinia vehicula sem eget commodo. Etiam euismod fringilla lobortis. Donec sit amet viverra sapien.', 'basic.jpg', '2017-05-16', 0),
(5, 'Новость 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut erat eu purus ultrices tempor. In at lacus egestas leo ultricies dignissim in sit amet nisi. Maecenas imperdiet eu massa vel efficitur. Donec lobortis sapien eu nunc imperdiet dictum. Fusce id metus sit amet ante consectetur gravida. Suspendisse tincidunt lacus ex, a pharetra arcu aliquet eget. Nullam sollicitudin lectus eu ullamcorper tristique. Nullam quis pulvinar leo. Cras et erat et lorem scelerisque tristique quis non massa. Vivamus ac vulputate ligula, quis dignissim dolor. Aliquam iaculis purus non leo facilisis feugiat. In lacinia vehicula sem eget commodo. Etiam euismod fringilla lobortis. Donec sit amet viverra sapien.', 'basic.jpg', '2017-05-16', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `first_name`, `last_name`) VALUES
(1, 'annvol', '5f4dcc3b5aa765d61d8327deb882cf99', 'anna', 'volkova');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
