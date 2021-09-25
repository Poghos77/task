-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 25 2021 г., 11:54
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '55555');

-- --------------------------------------------------------

--
-- Структура таблицы `guest_reviews`
--

CREATE TABLE `guest_reviews` (
  `id` int(11) NOT NULL,
  `firstName` varchar(24) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `Email` varchar(48) NOT NULL,
  `message` mediumtext NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guest_reviews`
--

INSERT INTO `guest_reviews` (`id`, `firstName`, `lastName`, `Email`, `message`, `datetime`) VALUES
(1, 'Hamlet', 'Sargsyan', 'sargsyan@mail.ru', 'barev dzez ', '2021-09-23 13:39:29'),
(2, 'Sargis', 'Yeghiazaryan', 'sargis@mail.ru', 'shat mersi ', '2021-09-23 15:13:20'),
(3, 'Narek', 'Mnacakanyan', 'narek@mail.ru', 'mi hrashq axchnak ', '2021-09-23 15:16:06'),
(4, 'Narek', 'Mnacakanyan', 'narek@mail.ru', 'shat shnorhakalutyun kayqi patrastman hamar', '2021-09-23 15:17:02'),
(5, 'Hakob', 'Ghazaryan', 'ghazaryan@mail.ru', 'hargeli usanoxner,cankanum enq texekacnel,vor aysor hetadzgvel en bolor dasery ', '2021-09-23 15:23:09'),
(7, 'Sergey', 'Danielyan', 'danielyan@mail.ru', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis quaerat assumenda, aut nemo dicta vel at incidunt fugit enim consequatur distinctio, porro quasi veniam. Maiores illo dolores cum enim a. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit odio similique magnam dolorem? Amet rerum cum quas commodi totam porro aliquam ducimus, eum sit nobis, omnis deleniti, et sequi quae.\r\nRecusandae saepe nisi id tenetur, quia magnam voluptates exercitationem eaque enim dignissimos esse optio ea eveniet, quas commodi. At odio fuga fugiat repellat dicta, sed excepturi commodi magnam laborum ad.\r\nVel a quisquam enim nostrum repellendus iste excepturi sunt, ex. Itaque, voluptatem corrupti velit blanditiis hic sapiente temporibus dolorum, vel consectetur mollitia omnis necessitatibus harum quos iusto voluptate, est similique!\r\nNon nostrum, ea quaerat suscipit cupiditate consequatur repudiandae a, minus voluptate optio reprehenderit, repellendus dolores voluptates. Ratione eaque quisquam minima harum cupiditate aperiam fugiat optio, quo deserunt sed autem consequatur?\r\nBeatae rem incidunt explicabo nostrum magnam, est fugiat sit velit eligendi ipsum quisquam repellendus blanditiis, fuga vitae veniam amet iusto nobis saepe doloremque corporis perspiciatis assumenda odio expedita natus quasi. ', '2021-09-23 21:44:32'),
(8, 'Hayk', 'Saxatelyan', 'saxatel@mail.ru', 'bari galust xarabax telekom', '2021-09-24 19:07:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `guest_reviews`
--
ALTER TABLE `guest_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `guest_reviews`
--
ALTER TABLE `guest_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
