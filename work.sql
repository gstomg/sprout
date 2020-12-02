-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2020 г., 16:33
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `work`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'Aelita', 'elita@mail.ru', 956562, 'Возврат', 'Derlekdflsjdisjfsijfidjpjdgpi'),
(67, 'Sophy', 'sophy@mail.ru', 5995220, 'Requst', 'Hello! I fklldfldf dvmflkvkf.'),
(69, 'test', 'test', 9898, 'test', '\"test');

-- --------------------------------------------------------

--
-- Структура таблицы `cupon`
--

CREATE TABLE `cupon` (
  `cupons` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cupon`
--

INSERT INTO `cupon` (`cupons`) VALUES
('flow_zigan'),
('flower');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`) VALUES
(1, '1-1.jpg\r\n'),
(2, '1-4.jpg'),
(3, '1-2.jpg'),
(4, '1-5.jpg'),
(5, '1-3.jpg'),
(6, '1-6.jpg'),
(7, '1-7.jpg'),
(8, '1-8.jpg\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `nomer_zz` int(11) NOT NULL COMMENT '1',
  `id_client` int(11) NOT NULL,
  `tovar_name` varchar(255) NOT NULL COMMENT 'flowers1',
  `kol` int(11) NOT NULL COMMENT 'количество товара'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomer` int(15) NOT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `image` varchar(10) NOT NULL DEFAULT 'pol.jpg',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `textarea` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`image`, `name`, `email`, `date`, `textarea`, `id`) VALUES
('pol.jpg', 'Lena', 'lenagalich@mail.ru', '2020-07-02', 'Hello gays! Good job.Always deliver quality flowers on time. The fifth time I order them a large number of flowers. Always only positive emotions. Fast tech support if you decide to call.', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `name`, `price`, `text`, `images`, `size`) VALUES
(1, 'Antyrium tels', '7.00', 'The fingers in your body can reach about 25 meters, and in the transverse direction - up to one meter. However, such dimensions can only be used in vivo. At the top of your trunk, leaf plates grow that have a fan shape. When grown at home, a palm tree blooms very rarely.', 'boks3.jpg', 'small'),
(2, 'Falenopsis reps', '10.99', '\r\nRepresentatives of the genus Alocasia - plants with a height of 40 cm to two meters or more, from small to medium size, occasionally treelike and gigantic, evergreen, occasionally with leaves falling in the winter, produce transparent milky sap. The stem is thick, usually vertical, occasionally elongated and creeping.', 'boks.jpg', 'small'),
(3, 'Kashpo', '8.00', '\r\nThe cactus plant is one of the most mysterious on the planet. These succulents can do without moisture for months and grow on the poorest soils in the complete absence of nutrients. Adaptive signs of cacti allow them not only to survive under the scorching sun, but also to bloom.', 'boks4.jpg', 'small'),
(4, 'Levistona', '11.99', 'Moreover, all alocasias have characteristic signs - the leaves are dense, thyroid, oval with a pointed end, veins are pronounced. The leaves are located on long, juicy petioles and have stomata on the surface of the leaves through which the plant discharges excess moisture.', 'boks2.jpg', 'small'),
(5, 'Bonsai', '13.59', 'Alocasia is an amazing tropical plant from the Aroid family. Its main decoration is luxurious large leaves with an unusual pattern of veins. The homeland of the beauty are the tropics of Eastern Australia, Malaysia and Latin America. In our country, it has taken root as a houseplant and is very popular among flower growers.', 'boks5.jpg', 'small'),
(6, 'Hamedoria', '10.99', 'The subfamily Peireskioideae (Pereskie) is currently represented by one genus Peireskia, comprising 17 species of plants, mainly represented by shrubs up to 8-11 m tall. The peculiarity of these cacti is the presence of a lignified stem, covered with long spines with well-developed or reduced leaves.', 'boks7.jpg', 'medium'),
(7, 'Dracens', '10.19', 'The subfamily Opuntioideae (Opuntsevye) is represented by cacti with spherical, disc-shaped, oval or cylindrical jointed stems and strongly reduced and rapidly falling leaves, with glochidia (small spines) in areoles. Represented by the genera Austrocylindropuntia, Cylindropuntia, Opuntia, Tephrocactus. The description of the cactus plants of this subfamily is as follows: these are erect or creeping shrubs, as well as shrubs, often forming pillow-shaped forms.', 'boks8.jpg', 'small'),
(8, 'Mixtels', '8.00', 'The subfamily Cereoideae (Cereus) is the largest subfamily represented by various life forms from epiphytes and dwarf spherical plants to tree giants. What are the features of the cacti of this subfamily? Representatives of the Cereus have no leaves and glochidia. The subfamily is divided into two groups (tribes). The group Tropical Forest Cacti (Hylocereeae) is represented by epiphytes, curly and creeping cacti with aerial roots: the genera Rhipsalis, Hatiora, Epiphyllum, Selenicereus, Hylocereus, etc.', 'boks9.jpg', 'medium'),
(9, 'Aephobis', '7.99', '\r\nThe Cereus group (Segeeae) is represented by erect cylindrical or spherical cacti from small spherical and shrub plants to tree forms. The range of this group of cacti plants is close to the range of the Opuntsievs. It is the Cereus species that are of most interest to collectors, both due to the abundance of genera and species, and due to the diversity of their life forms, as well as a wide variety of stems, thorns and flowers.', 'boks10.jpg', 'small'),
(10, 'Aereka', '11.00', 'A number of species of the genus Echinopsis, Submatucana, and others are characterized by lateral processes growing on the main stem, capable of themselves giving roots. Looking up from the stem, they quickly take root. On the roots of other cacti, buds are formed that give life to new plants (root offspring). Epiphytic cacti on the stems grow airborne additional roots, giving the plant additional moisture and attachment to the substrate.', 'boks4.jpg', 'small');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_basket`
--

CREATE TABLE `shop_basket` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'Имя',
  `surname` varchar(100) NOT NULL COMMENT 'Фамилия',
  `email` varchar(100) NOT NULL COMMENT 'емаил',
  `nomer` varchar(20) NOT NULL COMMENT 'номер телефона',
  `adress` varchar(255) NOT NULL COMMENT 'адрес доставки',
  `product_orders` text NOT NULL COMMENT 'товары',
  `total_cost` int(11) NOT NULL COMMENT 'сумма заказа',
  `date` date NOT NULL COMMENT 'дата заказа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`nomer_zz`);

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop_basket`
--
ALTER TABLE `shop_basket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `nomer_zz` int(11) NOT NULL AUTO_INCREMENT COMMENT '1';

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `shop_basket`
--
ALTER TABLE `shop_basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
