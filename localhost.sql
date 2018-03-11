-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 11 2018 г., 13:04
-- Версия сервера: 10.0.32-MariaDB-0+deb8u1
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `serwer21700_Baza`
--
CREATE DATABASE IF NOT EXISTS `serwer21700_Baza` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `serwer21700_Baza`;

-- --------------------------------------------------------

--
-- Структура таблицы `aktualnosci_post`
--

CREATE TABLE `aktualnosci_post` (
  `id` int(11) NOT NULL,
  `temat` varchar(100) NOT NULL,
  `opis` text NOT NULL,
  `obraz` varchar(50) NOT NULL,
  `czas_stworzenia` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `aktualnosci_post`
--

INSERT INTO `aktualnosci_post` (`id`, `temat`, `opis`, `obraz`, `czas_stworzenia`) VALUES
(225, 'OdbyĹy siÄ kolejne mistrzostwa z Ground Golf\'a w Japonii', 'W 2017 roku w Mistrzostwach Ĺwiata w Japonii, w ktĂłrych uczestniczyliĹmy my z Polski wraz z wieloma innymi grupami,  jeden z czĹonkĂłw naszej druĹźyny MichaĹ DobrzaĹski dwukrotnie zdobyĹ zĹoty puchar, trafiĹ teĹź hole-in one (prosto do doĹka jednym uderzeniem). Nie zatrzymaliĹmy siÄ wyĹÄcznie na uczestnictwie w zawodach - uczestniczÄc w profesjonalnej nauce golfa zdoĹaliĹmy nabraÄ wiele doĹwiadczenia. Dni upĹynÄĹy przyjemnie dajÄc pozostawiajÄc nam piÄkne wspomnienia - dziÄki pomocy Prezydenta miasta podczas zawodĂłw uczestniczyliĹmy w wielu aktywnoĹciach wprowadzajÄcych nas w japoĹskÄ kulturÄ a takĹźe  przez 4 dni zwiedziliĹmy prywatnie miasta takie jak: Osaka, Nara, Kyoto i Kobe.', '1520685276.jpg', 1520685712),
(226, 'OdbyĹ siÄ II miÄdzynarodowy puchar z Ground Golf\'a', 'W paĹşdzierniku 2016 roku polska druĹźyna odniosĹa sukces w zawodach golfowych w Yurihamie, kolega Maciej DobrzaĹski zdobyĹ zĹoty puchar. W zawodach wziÄĹo udziaĹ ponad 100 zawodnikĂłw z 12 krajĂłw, w tym z Mongolii. Polski, Hiszpanii, Korei. Zawody otworzyli swoim przemĂłwieniem Prezydent Miasta Yurihama - Masamichi Miyawak oraz pan Kazuo Sonoyama z JapoĹskiego ZwiÄzku Ground Golfowa. Pogoda nam sprzyjaĹa i oprĂłcz udanych zawodĂłw, Ĺwietnie spÄdziliĹmy te kilka dni. Po zawodach mieliĹmy okazjÄ nawiÄzaÄ wiele nowych znajomoĹci oraz zwiedziÄ kilka japoĹskich miast.', '1520685281.jpg', 1520685712),
(227, '', '', '1520685712.jpg', 1520685712),
(228, '', '', '1520685712.jpg', 1520685712),
(229, '', '', '1520685712.jpg', 1520685712);

-- --------------------------------------------------------

--
-- Структура таблицы `aktualnosci_video`
--

CREATE TABLE `aktualnosci_video` (
  `id` int(11) NOT NULL,
  `wideo` varchar(100) NOT NULL,
  `obraz` varchar(100) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `czas_stworzenia` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aktualnosci_video`
--

INSERT INTO `aktualnosci_video` (`id`, `wideo`, `obraz`, `opis`, `czas_stworzenia`) VALUES
(1, 'vbMh0EqcJqI', 'https://i.ytimg.com/vi_webp/vbMh0EqcJqI/hqdefault.webp', 'Ground Golf: A game for the elderly in Japan', 1520352419);

-- --------------------------------------------------------

--
-- Структура таблицы `turnieje`
--

CREATE TABLE `turnieje` (
  `id` int(11) NOT NULL,
  `nr` varchar(50) NOT NULL,
  `data` char(10) NOT NULL,
  `czas` varchar(20) NOT NULL,
  `nazva` varchar(100) NOT NULL,
  `miejsce` varchar(100) NOT NULL,
  `czas_stworzenia` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `turnieje`
--

INSERT INTO `turnieje` (`id`, `nr`, `data`, `czas`, `nazva`, `miejsce`, `czas_stworzenia`) VALUES
(535, '1', '2018-03-25', 'start o 10:00', 'I Turniej Klubowy', 'Klub Sinusa ul. WaĹ Zawadowski 99', 1520671773),
(536, '2', '2018-04-22', 'start o 10:00', 'II Turniej Klubowy', 'Konstancin â Jeziorna (obok TÄĹźni)', 1520671773),
(537, '3', '2018-05-20', 'start o 10:00', 'III Turniej Klubowy', 'Warszawa ul.Adama Branickiego 10 za budynkiem', 1520671773),
(538, '4', '2018-06-01', '', 'I Turniej RotaraĹski Ground Golf o Puchar Rotary JĂłzefĂłw SpaĹa', 'OĹrodek COS ul. Prezydenta MoĹcickiego 6', 1520671773),
(539, '5', '2018-07-28', '', 'Otwarte MiÄdzynarodowe Mistrzostwa Azji w Ground Golfa UĹan Bator', 'Mongolia', 1520671773),
(540, '6', '2018-08-19', '', 'Turniej o Puchar WĂłjta Gminy Somianka', 'Somianka', 1520671773),
(541, '7', '2018-09-16', 'start o 10:00', 'V Turniej Klubowy', 'Klub Sinusa ul. WaĹ Zawadowski 99', 1520671773),
(542, '8', '2018-10-14', 'start o 10:00', 'I Otwarte Mistrzostwa Polski w Ground Golfa', 'Klub Sinusa ul. WaĹ Zawadowski 99', 1520671773),
(543, '9', '2018-11-11', 'start o 10:00', 'Turniej o Puchar Dzien NiepodligĹoĹci', 'Klub Sinusa ul. WaĹ Zawadowski 99', 1520671773);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aktualnosci_post`
--
ALTER TABLE `aktualnosci_post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `aktualnosci_video`
--
ALTER TABLE `aktualnosci_video`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `turnieje`
--
ALTER TABLE `turnieje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aktualnosci_post`
--
ALTER TABLE `aktualnosci_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
--
-- AUTO_INCREMENT для таблицы `aktualnosci_video`
--
ALTER TABLE `aktualnosci_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `turnieje`
--
ALTER TABLE `turnieje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=545;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
