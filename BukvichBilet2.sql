-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2022 г., 21:50
-- Версия сервера: 5.6.38
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `BukvichBilet2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE `auto` (
  `InventAuto` int(10) NOT NULL DEFAULT '0' COMMENT '№ Транспортного средства',
  `NaimAuto` varchar(50) DEFAULT NULL COMMENT 'Наименование ',
  `TipAuto` varchar(20) DEFAULT NULL COMMENT 'Тип транспорта',
  `TipGruzAuto` varchar(30) DEFAULT NULL COMMENT 'Тип грузов',
  `GosNomAuto` varchar(50) DEFAULT NULL COMMENT 'Гос. номер',
  `Data&ProbegAuto` text COMMENT 'Дата выпуска и пробег, км/ч',
  `GruzPodAuto` varchar(10) DEFAULT NULL COMMENT 'Грузоподъемность, кг',
  `TexCocAuto` text COMMENT 'Тех. состояние '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`InventAuto`, `NaimAuto`, `TipAuto`, `TipGruzAuto`, `GosNomAuto`, `Data&ProbegAuto`, `GruzPodAuto`, `TexCocAuto`) VALUES
(1, 'Джип', 'Автомобиль', 'Пассажир', 'A000AA000', '10.10.2005; 2000км', '2т', 'Машина полностью исправна'),
(2, 'Фура', 'Автомобиль', 'Груз', 'В001ВВ001', '20.12.2014; 1500км', '15т', 'Страдает задний мост'),
(3, 'Легковая машина', 'Автомобиль', 'Пассажир', 'В154КК122', '10.04.2011; 140000км', '1,5т', 'Гнилые пороги'),
(4, 'Поезд', 'Железная дорога', 'Груз', 'УК158СС151', '12.12.2021; 1022км', '22т', 'В идеальном состоянии'),
(5, 'Поезд', 'Железная дорога', 'Пассажир', 'ТТ000ТТ000', '31.09.2015; 1352км', '30т', 'Проблемы с правой гусеницей');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `bukva`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `bukva` (
`DataOtprav` date
,`DataPrib` date
,`TipAuto` varchar(20)
);

-- --------------------------------------------------------

--
-- Структура таблицы `postavki`
--

CREATE TABLE `postavki` (
  `KodPost` text COMMENT 'Код операции поставки',
  `InventAuto` int(11) DEFAULT NULL COMMENT '№ Транспортного средства',
  `KodReici` int(50) DEFAULT NULL COMMENT 'Код рейса',
  `DataOtprav` date DEFAULT NULL COMMENT 'Дата отправления',
  `DataPrib` date DEFAULT NULL COMMENT 'Дата прибытия'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `postavki`
--

INSERT INTO `postavki` (`KodPost`, `InventAuto`, `KodReici`, `DataOtprav`, `DataPrib`) VALUES
('123543', 1, 534412, '2022-06-12', '2022-06-13'),
('45321', 3, 111, '2022-06-30', '2022-07-01'),
('753', 4, 534412, '2022-06-14', '2022-06-15'),
('123', 3, 3424124, '2022-06-08', '2022-06-09'),
('1234', 5, 534412, '2022-06-01', '2022-06-04'),
('654', 4, 534412, '2014-01-01', '2014-01-02'),
('456', 4, 12414, '2016-01-01', '2016-01-02'),
('85', 4, 111, '2015-01-01', '2015-01-02');

-- --------------------------------------------------------

--
-- Структура таблицы `reici`
--

CREATE TABLE `reici` (
  `KodReici` int(50) NOT NULL DEFAULT '0' COMMENT 'Код рейса',
  `PunktOtpReici` varchar(100) DEFAULT NULL COMMENT 'Пункт отправления',
  `PunktNaznaReici` varchar(100) DEFAULT NULL COMMENT 'Пункт назначения',
  `VremajOtprReici` time DEFAULT NULL COMMENT 'Время отправления',
  `VremajPuti` time DEFAULT NULL COMMENT 'Время в пути'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reici`
--

INSERT INTO `reici` (`KodReici`, `PunktOtpReici`, `PunktNaznaReici`, `VremajOtprReici`, `VremajPuti`) VALUES
(111, 'г. Сочи', 'г. Севастополь', '04:44:00', '22:03:00'),
(434, 'г. Ростов', 'г. Луганск', '01:00:00', '16:00:00'),
(2342, 'г. Ровеньки', 'Г. Луганск', '09:00:00', '12:00:00'),
(12414, 'г. Москва', 'г. Луганск', '03:14:15', '17:08:31'),
(534412, 'Г. Луганск', 'г. Донецк', '17:33:00', '06:41:00'),
(2342324, 'г. Ровеньки', 'Г. Луганск', '09:00:00', '12:00:00'),
(3424124, 'г. Ростов ', 'г. Москва', '07:45:17', '21:06:45');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `zapros2`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `zapros2` (
`InventAuto` int(11)
,`PunktNaznaReici` varchar(100)
,`VremajOtprReici` time
);

-- --------------------------------------------------------

--
-- Структура для представления `bukva`
--
DROP TABLE IF EXISTS `bukva`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `bukvichbilet2`.`bukva`  AS  select `bukvichbilet2`.`postavki`.`DataOtprav` AS `DataOtprav`,`bukvichbilet2`.`postavki`.`DataPrib` AS `DataPrib`,`bukvichbilet2`.`auto`.`TipAuto` AS `TipAuto` from (`bukvichbilet2`.`postavki` join `bukvichbilet2`.`auto`) where ((`bukvichbilet2`.`postavki`.`DataPrib` between '2014-01-01' and '2017-01-01') and (`bukvichbilet2`.`auto`.`TipAuto` like 'Железная дорога')) ;

-- --------------------------------------------------------

--
-- Структура для представления `zapros2`
--
DROP TABLE IF EXISTS `zapros2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `bukvichbilet2`.`zapros2`  AS  select `bukvichbilet2`.`postavki`.`InventAuto` AS `InventAuto`,`bukvichbilet2`.`reici`.`PunktNaznaReici` AS `PunktNaznaReici`,`bukvichbilet2`.`reici`.`VremajOtprReici` AS `VremajOtprReici` from (`bukvichbilet2`.`postavki` join `bukvichbilet2`.`reici`) where (((`bukvichbilet2`.`reici`.`VremajOtprReici` between '08:00:00' and '13:00:00') and (`bukvichbilet2`.`reici`.`PunktNaznaReici` like '%Луганск%')) or (`bukvichbilet2`.`reici`.`PunktNaznaReici` like '%Донецк%') or (`bukvichbilet2`.`reici`.`PunktNaznaReici` like '%Ровеньки%')) ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`InventAuto`);

--
-- Индексы таблицы `postavki`
--
ALTER TABLE `postavki`
  ADD KEY `InventAuto` (`InventAuto`),
  ADD KEY `KodReici` (`KodReici`);

--
-- Индексы таблицы `reici`
--
ALTER TABLE `reici`
  ADD PRIMARY KEY (`KodReici`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `postavki`
--
ALTER TABLE `postavki`
  ADD CONSTRAINT `postavki_ibfk_1` FOREIGN KEY (`InventAuto`) REFERENCES `auto` (`InventAuto`),
  ADD CONSTRAINT `postavki_ibfk_2` FOREIGN KEY (`KodReici`) REFERENCES `reici` (`KodReici`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
