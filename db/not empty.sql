-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 21 2017 г., 12:47
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `trade100`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `name`) VALUES
(1, 'Крокус'),
(2, 'ЦУМ'),
(3, 'ТЦ Азовский'),
(4, 'Трейд 212'),
(5, 'VDNH');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `name`) VALUES
(1, 'Руководитель'),
(2, 'Директор'),
(3, 'Менеджер'),
(4, 'Программист');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `description`, `score`) VALUES
(1, 'Суперадмин', '', 100),
(2, 'Админ', '', 80),
(3, 'Директор', '', 70),
(4, 'Менеджер', '', 40),
(5, 'Тимлид', '', 60),
(6, 'Програмист', '', 40),
(7, 'Работник', '', 30),
(8, 'Клиент', '', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `name`, `description`) VALUES
(1, 'Опубликованный', 'Активный'),
(2, 'Не опубликован', 'Не активный'),
(3, 'В ожидании', 'Не подтвержден');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL,
  `company_id` int(11) NOT NULL,
  `post_id` int(3) NOT NULL,
  `tel_home` varchar(20) NOT NULL,
  `tel_work` varchar(20) NOT NULL,
  `email_home` varchar(100) NOT NULL,
  `email_work` varchar(100) NOT NULL,
  `status_id` int(2) NOT NULL,
  `created_dt` int(11) NOT NULL,
  `updated_dt` int(11) DEFAULT NULL,
  `by_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `firstname`, `lastname`, `role_id`, `company_id`, `post_id`, `tel_home`, `tel_work`, `email_home`, `email_work`, `status_id`, `created_dt`, `updated_dt`, `by_user_id`) VALUES
(1, 'Артур', 'Овасапов', 6, 3, 4, '+9680109559', '+9680109559', 'arthurhovasap@gmail.com', 'arthurhovasap@gmail.com', 3, 1484948232, 1484949060, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `by_user_id` (`by_user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `user_by_user_id` FOREIGN KEY (`by_user_id`) REFERENCES `tbl_user` (`id`),
  ADD CONSTRAINT `user_company_id` FOREIGN KEY (`company_id`) REFERENCES `tbl_company` (`id`),
  ADD CONSTRAINT `user_post_id` FOREIGN KEY (`post_id`) REFERENCES `tbl_post` (`id`),
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_status_id` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
