-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 07 2016 г., 17:45
-- Версия сервера: 5.5.50
-- Версия PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ilc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `text` text,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `backgroundimg` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `text`, `keywords`, `description`, `backgroundimg`, `symbol`, `title_ru`, `title_en`, `keywords_ru`, `keywords_en`, `description_ru`, `description_en`, `text_ru`, `text_en`) VALUES
(1, 'История', 'Языковая школ "Международный Дом" была основана 24 ноября 1992 года при содействии, материально-технической и финансовой поддержке Международного Фонда "Возрождение", основателем которого является всемирно известный финансист и филантроп Джордж Сорос. Первым официальным названием было "Независимая языковая школа", в английском варианте — "Soros International House School".  \nНезависимая языковая школа — первый в Украине центр изучения иностранных языков, где к процессу преподавания начали привлекать исключительно тех носителей языка, которые имеют международные сертификаты преподавания английского языка как иностранного. В настоящее время основным условием сотрудничества Школы с преподавателями является наличие соответствующих международных квалификаций.\nПервично, школа была расположена в главном корпусе Университета "Киево-Могилянская академия", а с 1996 г. имеет собственное помещение по адресу Ванды Василевской, 7.\nС 1994 года в Школе работает Книжный центр, ставший пионером в продвижении британских издательств на украинский рынок и первым официальным дистрибьютором Oxford University Press в Украине. \nС середины 1990-х Школа является одним из лидеров в подготовке преподавателей по коммуникативной методике и со временем получила официальный статус Центра CELTA от Кембриджского университета. \nВ 2012 году был также открыт Экзаменационный центр по подготовке и сдаче Кембриджских экзаменов по английскому языку.\nС 1994 по 2015 год Школа была аффилиирована с International House World Organisation с целью внедрения современной коммуникативной методики и инновационных подходов к преподаванию иностранных языков.  \nЯзыковая школа Международный дом и в дальнейшем продолжает использовать новейшие методики и технологии в обучении иностранным языкам взрослых и детей, а также в подготовке преподавателей.', 'История', 'История', '', 'history', 'История RU', 'История EN', '', '', '', '', '', ''),
(2, 'Партнеры', 'Здесь будут лого партнеров(?)', 'Партнеры', 'Партнеры', '', 'partners', 'P RU', 'Partners', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `begintest`
--

CREATE TABLE IF NOT EXISTS `begintest` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `step` tinyint(4) NOT NULL,
  `img` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `begintest`
--

INSERT INTO `begintest` (`id`, `title`, `title_ru`, `title_en`, `step`, `img`) VALUES
(2, 'ПРОЙТИ\r\nON-LINE TEST', 'ПРОЙТИ\r\nON-LINE TEST RU', 'ПРОЙТИ\r\nON-LINE TEST EN', 1, 'temp.jpg'),
(3, 'ЗАПИСАТЬСЯ НА ТЕСТИРОВАНИЕ', 'ЗАПИСАТЬСЯ НА ТЕСТИРОВАНИЕ RU', 'ЗАПИСАТЬСЯ НА ТЕСТИРОВАНИЕ EN', 2, 'temp.jpg'),
(4, 'ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ', 'ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ RU', 'ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ EN', 3, 'temp.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `benefits`
--

CREATE TABLE IF NOT EXISTS `benefits` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `text` text,
  `text_ru` varchar(255) DEFAULT NULL,
  `text_en` varchar(255) DEFAULT NULL,
  `step` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `benefits`
--

INSERT INTO `benefits` (`id`, `title`, `title_ru`, `title_en`, `text`, `text_ru`, `text_en`, `step`) VALUES
(1, 'Коммуникативная методика UA', 'Коммуникативная методика RU', 'Коммуникативная методика EN', 'Принципом которой является освоение иностранного языка путем реального общения. UA', 'Принципом которой является освоение иностранного языка путем реального общения. RU', 'Принципом которой является освоение иностранного языка путем реального общения. EN', 1),
(2, 'Высококвалифицированные\r\nпреподаватели UA', 'Коммуникативная методика RU', 'Коммуникативная методика EN', 'Принципом которой является освоение иностранного языка путем реального общения. UA', 'Принципом которой является освоение иностранного языка путем реального общения. RU', 'Принципом которой является освоение иностранного языка путем реального общения. EN', 2),
(3, 'Новейшие учебные\r\nпособия UA', 'Коммуникативная методика RU', 'Коммуникативная методика EN', 'Использование новейших учебных пособий ведущих зарубежных издательств. UA', 'Принципом которой является освоение иностранного языка путем реального общения. RU', 'Принципом которой является освоение иностранного языка путем реального общения. EN', 3),
(4, 'Предлагаем следующие темы:', ' RU', ' EN', '<ul>\r\n            <li>Курс общего английского — улучшает навыки чтения, письма, аудирования и речи в ежедневном использовании языка для работы, направлен на повышение общего уровня английского.</li>\r\n            <li>Курс делового английского — изучение бизнес-английского для совершенствования комуникативных навыков путем пополнения лексических и грамматических знаний.</li>\r\n            <li>Курс подготовки к экзаменам FCE, CAE, CPE, IELTS, ILEC.</li>\r\n            <li>Индивидуально разработанный курс.</li>\r\n        </ul>', ' RU', ' EN', NULL),
(5, 'Короткие языковые тренинги:', ' RU', ' EN', '<ul>\r\n            <li>Курс «Ведение презентаций»</li>\r\n            <li>Курс «Успешное ведение переговоров»</li>\r\n            <li>Курс «Обслуживание клиентов»</li>\r\n            <li>Курс «Тайм менеджмент»</li>\r\n            <li>Курс «Эффективное планирование»</li>\r\n            <li>Курс «Деловое письмо»</li>\r\n            <li>Индивидуально разработанные короткие языковые тренинги</li>\r\n        </ul>', ' RU', ' EN', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `text` text,
  `text_ru` text,
  `text_en` text,
  `date` varchar(110) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `keywords_ru` varchar(255) DEFAULT NULL,
  `keywords_en` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `description_ru` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `img` text
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `title_ru`, `title_en`, `text`, `text_ru`, `text_en`, `date`, `keywords`, `keywords_ru`, `keywords_en`, `description`, `description_ru`, `description_en`, `img`) VALUES
(1, 'Зачем нужен английский язык?1111112', 'Зачем нужен английский язык? RU', 'Зачем нужен английский язык? EN', '<p><span style="font-size: 28px;">Зачем нам нужен английский язык: плюсы, которые ощутит каждый освоивший его человек</span></p><p>На языке Великобритании и США сегодня общается более полутора миллиардов людей во всем мире. А в более, чем 75-ти регионах земного шара эта лингвистическая система явля</p><iframe style="width: 500px; height: 281px;" src="//www.youtube.com/embed/uBJDs9oboOQ" frameborder="0" allowfullscreen=""></iframe><p><br></p><p><img src="/images/57fc9c5bbbb03.jpg"></p>', '<p>RU</p>', '<p>EN11</p>', '1435870800', '', '', '', '', '', '', '.'),
(2, 'Зачем нужен английский язык? 2', 'Зачем нужен английский язык? RU', 'Зачем нужен английский язык? EN', '<p>Зачем нам нужен английский язык: плюсы, которые ощутит каждый освоивший его человек</p><p>На языке Великобритании и США сегодня общается более полутора миллиардов людей во всем мире. А в более, чем 75-ти регионах земного шара эта лингвистическая система явля</p>', '<p>RU</p>', '<p>EN</p>', '1475787600', '', '', '', '', '', '', 'temp.jpg'),
(3, 'Зачем нужен английский язык? 3', 'Зачем нужен английский язык? RU', 'Зачем нужен английский язык? EN', '\r\nЗачем нам нужен английский язык: плюсы, которые ощутит каждый освоивший его человек\r\nНа языке Великобритании и США сегодня общается более полутора миллиардов людей во всем мире. А в более, чем 75-ти регионах земного шара эта лингвистическая система явля', ' RU', ' EN', '1475752660', NULL, NULL, NULL, NULL, NULL, NULL, 'temp.jpg'),
(4, 'Зачем нужен английский язык? 4', 'Зачем нужен английский язык? RU', 'Зачем нужен английский язык? EN', '\r\nЗачем нам нужен английский язык: плюсы, которые ощутит каждый освоивший его человек\r\nНа языке Великобритании и США сегодня общается более полутора миллиардов людей во всем мире. А в более, чем 75-ти регионах земного шара эта лингвистическая система явля', ' RU', ' EN', '1475752660', NULL, NULL, NULL, NULL, NULL, NULL, 'temp.jpg'),
(6, 'авфыавыфа', '', '', '<p>фыафы</p>', '', '', '', '', '', '', '', '', '', 'hotline.png'),
(8, 'фывафыва11111111', '', '', '<p>ыфафыва</p>', '', '', '', '', '', '', '', '', '', 'feed-icon-32x32.png'),
(9, 'фыавывфа', '', '', '<p>фыаывфаы</p>', '', '', '', '', '', '', '', '', '', 'feed-icon-32x32.png');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `text` text,
  `text_ru` text,
  `text_en` text,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `text`, `text_ru`, `text_en`, `lat`, `lng`, `name`, `name_ru`, `name_en`) VALUES
(1, 'Школа на КПИ\r\nулица Ванды Василевской 7\r\nСтанция метро\r\nПолитехнический институт\r\n \r\nПоказать на карте\r\n \r\n(044) 238-98-70,\r\n(044) 238-97-96,\r\n(067) 209-93-19\r\ninfo@ilcentre.com.ua\r\n \r\nВремя работы:\r\nПонедельник–пятница\r\nс 10.00 до 21:00', 'RU Школа на КПИ\r\nулица Ванды Василевской 7\r\nСтанция метро\r\nПолитехнический институт', 'EN Школа на КПИ\r\nулица Ванды Василевской 7\r\nСтанция метро\r\nПолитехнический институт', '50.453363', '30.468197', 'Школа на КПИ', NULL, NULL),
(2, 'Школа на Осокорках\r\nулица Ванды Василевской 7\r\nСтанция метро\r\n«Политехнический институт»\r\n \r\nПоказать на карте\r\n \r\n(044) 238-98-70,\r\n(044) 238-97-96,\r\n(067) 209-93-19\r\ninfo@ilcentre.com.ua\r\n \r\nВремя работы:\r\nПонедельник–пятница\r\nс 10.00 до 21:00', 'RU Школа на Осокорках\r\nулица Ванды Василевской 7\r\nСтанция метро\r\nПолитехнический институт', 'EN Школа на Осокорках\r\nулица Ванды Василевской 7\r\nСтанция метро\r\nПолитехнический институт', '50.406156', '30.614322', 'Школа на Осокорках', NULL, NULL),
(3, 'Школа на Оболони\r\nул. Маршала Тимошенко 13А, ст. метро «Минская»\r\n\r\nПоказать на карте\r\n\r\nТ. (044) 428-03-30,\r\n(044) 468-74-12\r\nКиївстар: (067) 209-93-06\r\n(044) 428-03-30\r\nobolon@ilcentre.com.ua\r\n\r\nВремя работы:\r\nПонедельник–пятница\r\nс 10:00 до 19.00', 'RU Школа на Оболони\r\nул. Маршала Тимошенко 13А, ст. метро «Минская»', 'EN Школа на Оболони\r\nул. Маршала Тимошенко 13А, ст. метро «Минская»', '50.511873', '30.492402', 'Школа на Оболони', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `anons` text,
  `text` text,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `leftcol` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `backgroundimg` varchar(255) NOT NULL,
  `img` text,
  `show_detail` tinyint(4) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `anons_ru` text NOT NULL,
  `anons_en` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `leftcol_ru` text NOT NULL,
  `leftcol_en` text NOT NULL,
  `sort` int(11) NOT NULL,
  `table` varchar(50) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `subtitle_ru` varchar(255) DEFAULT NULL,
  `subtitle_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `anons`, `text`, `keywords`, `description`, `leftcol`, `price`, `parent_id`, `backgroundimg`, `img`, `show_detail`, `symbol`, `title_ru`, `title_en`, `anons_ru`, `anons_en`, `text_ru`, `text_en`, `keywords_ru`, `keywords_en`, `description_ru`, `description_en`, `leftcol_ru`, `leftcol_en`, `sort`, `table`, `subtitle`, `subtitle_ru`, `subtitle_en`) VALUES
(1, 'Английский для взрослых UA', '<p>International Language Centre предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быстрый результат.</p>', '', 'UA', 'UA', '<p>sadfdas</p>', '1233', 0, 'bg.img', 'adult.jpg', 0, 'adult', 'Английский для взрослых RU', 'Engilish adult', '<p>anons ru</p>', '<p>anons en</p>', '<p>asdf</p>', '<p>asfd</p>', 'key ru', 'key en', 'desc ru', 'desc en', '<p>asdfasdf</p>', '<p>asfasdf</p>', 12, NULL, NULL, NULL, NULL),
(2, 'Общий английский язык UA', 'Курсы общего английского для слушателей всех уровней. Наша школа гарантирует быстрый прогресс в изучении языка и уверенное владение им.', '', '', '', '', '', 1, '', '', 1, 'general', 'Общий английский язык RU', 'Общий английский язык EN', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(3, 'Деловой английский UA', 'Курс бизнес-английского рассчитан на тех, кто планирует работать или уже работает в сфере бизнеса и нуждается в совершенствовании языка для карьерного роста.', '', '', '', '', '', 1, '', '', 1, 'business', 'Деловой английский RU', 'Деловой английский EN', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(4, 'Экзаменационная\nподготовка UA', 'Кембриджские сертификаты, которые получают кандидаты, успешно сдавшие экзамен, признаются многочисленным международными университетами, компаниями и образовательными учреждениями', 'International Language Centre проводит профессиональную и качественную подготовку к международным тестам, разработанным Кембриджским университетом (IELTS, KET, PET, FCE, CAE, CPE) — самым распространенным языковым экзаменам в мире. Мы предоставляем нашим студентам всю регистрационную и практическую информацию о порядке сдачи экзамена и др.\n\nКембриджские сертификаты, которые получают кандидаты, успешно сдавшие экзамен, признаются многочисленным международными университетами, компаниями и образовательными учреждениями как безоговорочное подтверждение международно признанных стандартов владения языком.', '', '', '', '', 1, '', '', 1, 'exam', 'Экзаменационная подготовка RU', 'Экзаменационная подготовка EN', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(5, 'Разговорный интенсив по субботам UA', 'Интенсивный курс для развития речи. Курс предусматривает комплекс упражнений и заданий для увеличения словарного запаса, активации пассивных знаний и преодоления языкового барьера', '', '', '', '', '', 1, '', '', 0, 'speak', 'Разговорный интенсив по субботам RU', 'Разговорный интенсив по субботам EN', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(6, 'Подготовка к IELTS UA', 'Экзамен IELTS (International English Language Testing System) рассчитан на тех, кому необходимы некоторые знания английского для образования или работы в англоязычных странах. Он имеет общее и академическое направления. Этот сертификат признается учебными учреждениями многих стран мира. Срок действия – 2 года.', '', '', '', '', '123.5', 4, '', 'block.jpg', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(10, 'Английский для детей UA', 'International Language Centre предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быстрый результат.', '', '', '', '', '', 0, 'bg.jpg', 'children.png', 0, 'children', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(11, 'Общий английский', 'Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.', 'Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденному материалу и регулярно оповещаем родителей об успешности обучения.\r\nЗанятия проводятся с использованием англоязычных учебников издательств Oxford и Pearson.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In id fringilla mauris. Curabitur posuere, mi lacinia semper aliquam, nisi nisl feugiat libero, nec pretium ante est eget leo. Mauris dapibus erat nisl, at lobortis massa sodales at. Donec id bibendum diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse arcu mi, suscipit in facilisis nec, lobortis quis magna. Donec id justo sit amet est viverra consequat. Integer pretium enim tortor, in suscipit neque ullamcorper ac.\r\n\r\nVivamus sed facilisis ''a, sed maximus enim. Mauris euismod scelerisque lorem, in vehicula ''a tristique non. Integer maximus eros sed leo aliquam pulvinar. Praesent eros ante, porta eget est sed, feugiat faucibus dui. Aenean purus velit, efficitur a nibh eu, posuere convallis ligula. Proin placerat ipsum sagittis quam semper, id consectetur quam malesuada. Aenean eget risus vel lorem posuere ornare. Aenean luctus mi elit, sed ullamcorper libero semper sed. Donec id molestie dolor. Donec ligula mauris, consequat non orci ac, imperdiet luctus mauris. Curabitur tincidunt, dui quis semper vulputate, metus velit dignissim lectus, tempus sagittis velit dui sit amet elit. Sed aliquam diam lectus, sed rhoncus erat accumsan quis.\r\n\r\nIn hac habitasse platea dictumst. Aenean lacinia ipsum ac neque ultrices, et tristique lectus vehicula. Donec commodo ipsum non mattis vestibulum. Nam lacus felis, maximus nec maximus efficitur, placerat vitae orci. In rhoncus nibh nisl, sed mollis turpis egestas non. Integer suscipit molestie venenatis. Donec accumsan sem sed ipsum iaculis mollis. Sed aliquet varius nisi viverra mattis. Sed arcu dui, cursus quis elit laoreet, mollis rhoncus diam. Phasellus vel erat non augue tempor sodales. Morbi orci eros, pellentesque id viverra ac, varius a orci. Pellentesque ultrices sit amet tortor ut pulvinar. Aenean eget eros diam. Cras laoreet dui at purus semper, feugiat dictum odio tincidunt. Aliquam consequat enim sit amet enim suscipit scelerisque. Duis auctor lectus sed lectus accumsan molestie.\r\n\r\nDuis metus augue, gravida ac risus quis, dapibus dignissim arcu. Vestibulum et mattis arcu. Sed tempor lectus ac mauris imperdiet, ut convallis dolor fringilla. Vivamus non est non turpis mattis pharetra. Pellentesque ac eros enim. Duis pellentesque id nulla ac semper. Phasellus tristique condimentum felis. Vivamus pretium nisi in faucibus ullamcorper. Nam nec lacus nec nibh aliquet venenatis. Curabitur ultricies maximus faucibus. Mauris venenatis ligula nibh, et laoreet elit iaculis ut.\r\n\r\nPellentesque semper quis purus in auctor. Sed faucibus nulla eleifend, vestibulum magna vel, rutrum mi. Morbi vehicula libero non feugiat venenatis. Morbi id orci nisi. Pellentesque porta mollis ex quis pretium. Mauris tincidunt risus in eros egestas porta. Aenean eros nisi, fringilla et bibendum in, tincidunt non augue. Proin vehicula mollis ornare. Nulla porttitor, nulla non porta aliquam, ligula odio venenatis quam, et maximus tortor dolor in enim. Donec id fringilla arcu.', 'keywords', 'description', '', '', 10, '', '', 1, 'general_child', 'Английский для детей RU', 'Английский для детей EN', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(12, 'Корпоративное обучение английскому языку', 'Наша школа имеет необходимый преподавательский состав и ресурсную базу, чтобы предложить Вашей компании курс или тренинг по английскому языку, соответствующий международным стандартам качества.', 'Преимущества корпоративного обучения\r\n1\r\nКоммуникативная\r\nметодика\r\nПринципом которой является освоение иностранного языка путем реального общения.\r\n2\r\nВысококвалифицированные\r\nпреподаватели\r\nПринципом которой является освоение иностранного языка путем реального общения.\r\n3\r\nНовейшие учебные\r\nпособия\r\nИспользование новейших учебных пособий ведущих зарубежных издательств.\r\nКороткие языковые тренинги:\r\n\r\n•   Курс «Ведение презентаций»\r\n•   Курс «Успешное ведение переговоров»\r\n•   Курс «Обслуживание клиентов»\r\n•   Курс «Тайм менеджмент»\r\n•   Курс «Эффективное планирование»\r\n•   Курс «Деловое письмо»\r\n•   Индивидуально разработанные короткие языковые тренинги', '', '', '', '', 0, 'course-header_corporate.jpg', '', 0, 'corporate', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(13, 'Курсы украинского и русского языков для иностранцев', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid animi asperiores consequatur dolores enim et excepturi fugiat ipsum iure magni minus pariatur quis repellat repudiandae sapiente sequi, unde vero!\r\n', '', '', '', '', '', 0, '', '', 0, 'foreigners', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(14, 'Cambridge ESOL tests', 'Наиболее популярные кембриджские международные экзамены по общему английскому для взрослых – это FCE, CAE та CPE, а первые 2 уровня, KET и PET, ориентированы на детей. Сертификат о сдаче любого из этих экзаменов имеет неограниченный термин действия. Экзаменационный центр International Language Centre проводит кембриджские тесты в электронном и бумажном форматах.', NULL, '', '', '', '', 4, '', '', 0, '', 'Cambridge ESOL tests RU', 'Cambridge ESOL tests EN', 'RU Наиболее популярные кембриджские международные экзамены по общему английскому для взрослых – это FCE, CAE та CPE, а первые 2 уровня, KET и PET, ориентированы на детей. Сертификат о сдаче любого из этих экзаменов имеет неограниченный термин действия. Эк', 'EN Наиболее популярные кембриджские международные экзамены по общему английскому для взрослых – это FCE, CAE та CPE, а первые 2 уровня, KET и PET, ориентированы на детей. Сертификат о сдаче любого из этих экзаменов имеет неограниченный термин действия. Эк', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(50, 'Экзаменационная подготовка для детей', 'Экзамены разработаны Кембриджским университетом (Cambridge ESOL) и рассчитаны на любой уровень владения языком.', ' В нашей школе есть возможность подготовиться и сдать международные экзамены, подтверждающие уровень владения языком в соответствии с общеевропейскими рекомендациями по языковому образованию (Common European Framework of Reference for Languages).\r\nЭкзамены разработаны Кембриджским университетом (Cambridge ESOL) и рассчитаны на любой уровень владения языком.\r\nЭкзаменационная подготовка\r\nОбщая информация\r\nКембриджские экзамены для детей\r\n•    Обеспечивают тестовый контроль знаний с раннего возраста и отвечают потребностям различных возрастных групп\r\n•    Оценивают знания Ваших детей в задачах, приближенных к повседневным ситуациям\r\n•    Признаются ведущими университетами Европы и международными компаниями\r\n•    Надежные и объективные, ведь проверяются профессиональными Кембриджскими экзаменаторами\r\n•    Имеют неограниченный срок действия и не требуют дополнительного подтверждения''', '', '', '', '', 10, '', '{"img":"cambridge-logo.jpg","alt":"a","title":"bbb"}', 1, 'exam_child', 'Экзаменационная подготовка для детей_RU', 'Экзаменационная подготовка для детей_EN', 'Экзамены разработаны Кембриджским университетом (Cambridge ESOL) и рассчитаны на любой уровень владения языком._ru', 'Экзамены разработаны Кембриджским университетом (Cambridge ESOL) и рассчитаны на любой уровень владения языком._en', ' В нашей школе есть возможность подготовиться и сдать международные экзамены, подтверждающие уровень владения языком в соответствии с общеевропейскими рекомендациями по языковому образованию (Common European Framework of Reference for Languages).\r\nЭкзамен', ' В нашей школе есть возможность подготовиться и сдать международные экзамены, подтверждающие уровень владения языком в соответствии с общеевропейскими рекомендациями по языковому образованию (Common European Framework of Reference for Languages).\r\nЭкзамен', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(51, 'Английский по пятницам', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!', '', '', '', '', 10, '', '', 1, 'friday_child', 'Английский по пятницам_RU', 'Английский по пятницам_EN', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!_ru', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!_en', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!_RU', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!_EN', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(52, 'Подготовка к ДПА и ЗНО', 'Приглашаем учеников 11-х классов на тренинговый курс подготовки к ДПА по английскому языку.\r\nНачало курса — 12.02.2016, продолжительность — 12 недель.\r\nЗанятия по пятницам с 18:00 до 20:00. Стоимость курса — 3450 грн.', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!', '', '', '', '', 10, '', '', 1, 'dpa', 'Подготовка к ДПА и ЗНО_RU', 'Подготовка к ДПА и ЗНО_EN', 'Приглашаем учеников 11-х классов на тренинговый курс подготовки к ДПА по английскому языку.\r\nНачало курса — 12.02.2016, продолжительность — 12 недель.\r\nЗанятия по пятницам с 18:00 до 20:00. Стоимость курса — 3450 грн._ru', 'Приглашаем учеников 11-х классов на тренинговый курс подготовки к ДПА по английскому языку.\r\nНачало курса — 12.02.2016, продолжительность — 12 недель.\r\nЗанятия по пятницам с 18:00 до 20:00. Стоимость курса — 3450 грн._en', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!_RU', 'Если у Вас нет возможности посещать наши регулярные группы, приглашаем на занятия, проводимые по пятницам!_EN', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(53, 'Каникулы в городе', 'Курс "Каникулы в городе" — это дневной летний лагерь для детей, состоящий  из серии уроков, которые научат вашего ребенка использовать основные английские фразы в простом общении через игровую деятельность.', 'Курс "Каникулы в городе" — это дневной летний лагерь для детей, состоящий  из серии уроков, которые научат вашего ребенка использовать основные английские фразы в простом общении через игровую деятельность.', '', '', '', '', 10, '', '', 1, 'holidays_in_the_city', 'RU Каникулы в городе', 'EN Каникулы в городе', 'RU Курс "Каникулы в городе" — это дневной летний лагерь для детей, состоящий  из серии уроков, которые научат вашего ребенка использовать основные английские фразы в простом общении через игровую деятельность.', 'EN Курс "Каникулы в городе" — это дневной летний лагерь для детей, состоящий  из серии уроков, которые научат вашего ребенка использовать основные английские фразы в простом общении через игровую деятельность.', 'RU Курс "Каникулы в городе" — это дневной летний лагерь для детей, состоящий  из серии уроков, которые научат вашего ребенка использовать основные английские фразы в простом общении через игровую деятельность.', 'EN Курс "Каникулы в городе" — это дневной летний лагерь для детей, состоящий  из серии уроков, которые научат вашего ребенка использовать основные английские фразы в простом общении через игровую деятельность.', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL),
(54, 'Маленькие путешественники', 'Вы готовы к далеким странствиям? Знаете ли вы достаточно слов, чтоб смело отправиться в путешествие? Курс "Каникулы в городе" от International Language Centre поможет выучить и  закрепить еще больше необходимых английских слов, выражений, вопросов и ответов, прежде чем вы начнете свое путешествие!', 'Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденному материалу и регулярно оповещаем родителей об успешности обучения.\r\nЗанятия проводятся с использованием англоязычных учебников издательств Oxford и Pearson.', '', '', '', '100 грн.', 53, '', '', 1, 'small', 'RU Маленькие путешественники', 'EN Маленькие путешественники', 'RU Вы готовы к далеким странствиям? Знаете ли вы достаточно слов, чтоб смело отправиться в путешествие? Курс "Каникулы в городе" от International Language Centre поможет выучить и  закрепить еще больше необходимых английских слов, выражений, вопросов и от', 'EN Вы готовы к далеким странствиям? Знаете ли вы достаточно слов, чтоб смело отправиться в путешествие? Курс "Каникулы в городе" от International Language Centre поможет выучить и  закрепить еще больше необходимых английских слов, выражений, вопросов и от', 'RU Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденн', 'EN Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденн', '', '', '', '', '', '', 0, NULL, 'YOUNG TRAVELERS', NULL, NULL),
(55, 'Игры и песни', 'Вы готовы к далеким странствиям? Знаете ли вы достаточно слов, чтоб смело отправиться в путешествие? Курс "Каникулы в городе" от International Language Centre поможет выучить и  закрепить еще больше необходимых английских слов, выражений, вопросов и ответов, прежде чем вы начнете свое путешествие!', 'Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденному материалу и регулярно оповещаем родителей об успешности обучения.\r\nЗанятия проводятся с использованием англоязычных учебников издательств Oxford и Pearson.', '', '', '', '200 грн.', 53, '', '', 1, 'songs', 'RU Игры и песни', 'EN Игры и песни', 'RU Вы готовы к далеким странствиям? Знаете ли вы достаточно слов, чтоб смело отправиться в путешествие? Курс "Каникулы в городе" от International Language Centre поможет выучить и  закрепить еще больше необходимых английских слов, выражений, вопросов и от', 'EN Вы готовы к далеким странствиям? Знаете ли вы достаточно слов, чтоб смело отправиться в путешествие? Курс "Каникулы в городе" от International Language Centre поможет выучить и  закрепить еще больше необходимых английских слов, выражений, вопросов и от', 'RU Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденн', 'EN Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденн', '', '', '', '', '', '', 0, NULL, 'GAMES AND SONGS', NULL, NULL),
(100, 'Курси', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer suscipit, lectus feugiat suscipit pulvinar, tortor ligula aliquam urna, sit amet pretium arcu turpis dictum tortor. Nulla facilisi. Phasellus tristique, eros ut faucibus lacinia, nunc urna venenatis elit, eu venenatis ex metus aliquet est. Praesent ullamcorper, erat sit amet malesuada bibendum, risus felis gravida purus, in sodales tortor risus at nunc. Nunc dapibus velit metus, vel ornare felis pellentesque accumsan. Proin nec suscipit lectus, non bibendum nulla. In eget elit sit amet mauris mattis dapibus ac vitae mauris. Etiam tempor ligula vitae risus eleifend tempus. Aenean rhoncus sem enim, ut convallis felis convallis at. In mollis ullamcorper urna. Quisque eget molestie nisi. Morbi consectetur leo sed ipsum placerat pellentesque. Pellentesque non tortor at leo sagittis commodo. In maximus, nisi id vulputate luctus, erat velit hendrerit erat, id finibus ex libero vel nisi.\r\nPraesent a convallis sem, ut faucibus erat. Etiam ac dui et metus pulvinar sollicitudin. Fusce rutrum blandit nisl a luctus. Maecenas quis justo ac mauris condimentum sodales ac pulvinar metus. Proin at tempus odio. Praesent sollicitudin, metus a venenatis faucibus, eros urna rutrum ante, sed venenatis eros quam vitae nulla. Nunc at justo vestibulum, finibus libero eget, aliquet erat. Sed ut tellus odio. Nullam porta ipsum vel velit lobortis, non interdum lorem laoreet.', '', '', '', '', 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 100, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `anons` text,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `anons_ru` text NOT NULL,
  `anons_en` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `abbr` varchar(255) DEFAULT NULL,
  `abbr_text` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `level_text` varchar(255) DEFAULT NULL,
  `level_text_ru` varchar(255) DEFAULT NULL,
  `level_text_en` varchar(255) DEFAULT NULL,
  `bottom_text` text,
  `bottom_text_ru` text,
  `bottom_text_en` text
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `exams`
--

INSERT INTO `exams` (`id`, `title`, `anons`, `keywords`, `description`, `price`, `parent_id`, `img`, `symbol`, `anons_ru`, `anons_en`, `title_ru`, `title_en`, `keywords_ru`, `keywords_en`, `description_ru`, `description_en`, `abbr`, `abbr_text`, `level`, `level_text`, `level_text_ru`, `level_text_en`, `bottom_text`, `bottom_text_ru`, `bottom_text_en`) VALUES
(3, 'Экзамены для детей', 'Наш экзаменационный центр предлагает сдачу Кембриджских экзаменов по английскому языку (YLE, KET, PET, FCE, CAE, CPE, BEC) – наиболее распространенных языковых экзаменов в мире. Сертификаты Кембриджского университета имеют неограниченный срок действия и признаются многочисленными международными университетами, компаниями и образовательными учреждениями, как несомненное подтверждение международно-признанных стандартов владения языком. Уровни: Starters – ниже уровня А1 |  Movers – на уровне А1 |  Flyers – на уровне А2', '', '', '', 0, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 'children', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '', '<p>Набор из 3 тестов, специально разработанные для младших школьников &bull; Тесты, проверяющие уровень владения английским для повседневного использования &bull; Тесты, согласованные со школьной программой Каждый ребенок, который составляет Cambridge YLE, получает сертификат, который является не только демонстрацией индивидуальных достижений Вашего ребенка, но и признанием его индивидуальных умений. Эти тесты станут для Вашего ребенка первым шагом к успешной сдаче Кембриджских экзаменов высших уровней в будущем.</p>\r\n', '', '', '$$$', 3, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', '', '', '', '', '', '', '', '', '', 'YLE', '(Cambridge English: Young Learners)', 'Beginner', '(для детей в возрасте от 6–12 лет)', '', '', NULL, NULL, NULL),
(5, 'Экзамены для взрослых', 'Наш экзаменационный центр предлагает сдачу Кембриджских экзаменов по английскому языку (YLE, KET, PET, FCE, CAE, CPE, BEC) – наиболее распространенных языковых экзаменов в мире. Сертификаты Кембриджского университета имеют неограниченный срок действия и признаются многочисленными международными университетами, компаниями и образовательными учреждениями, как несомненное подтверждение международно-признанных стандартов владения языком.', '', '', '', 0, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 'adults', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '', 'Данный экзамен соответствует уровню А2 общеевропейской системы языковой компетенции (СEFR).\nНа этом уровне учащиеся могут:\n•    Понимать базовую письменный английский\n•    Общаться в знакомых ситуациях\n•    Понимать короткие объявления и простые устные наставления\n•    Общаться с носителями языка, четко и медленно разговаривают\n•    Писать короткие тексты\nПодготовка к сдаче экзамена Cambridge KET предоставит вашему ребенку эти практические языковые навыки.\nСертификат о сдаче любого из этих экзаменов имеет неограниченный срок действия и признается во всем мире.', '', '', '$$$', 5, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '', 'Набор из 3 тестов, специально разработанные для младших школьников\n•    Тесты, проверяющие уровень владения английским для повседневного использования\n•    Тесты, согласованные со школьной программой\nКаждый ребенок, который составляет Cambridge YLE, получает сертификат, который является не только демонстрацией индивидуальных достижений Вашего ребенка, но и признанием его индивидуальных умений.\nЭти тесты станут для Вашего ребенка первым шагом к успешной сдаче Кембриджских экзаменов высших уровней в будущем.\nУровни: Starters – ниже уровня А1 |  Movers – на уровне А1 |  Flyers – на уровне А2', '', '', '$$$', 5, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '', 'Это экзамен Cambridge ESOL уровня выше-среднего. Выберите FCE, если Ваши знания английского достаточны для использования в ежедневном общении, в сферах бизнеса и обучения.\nFCE ежегодно сдает более 270,000 людей в более чем 100 странах. FCE является идеальным выбором, если Вы хотите работать и делать карьеру или получать за границей образование, которое требует развитых языковых навыков (например: бизнес, медицина, инженерное дело). FCE показывает достаточно профессиональное умение находить практическое применение знаниям английского, которое будет служить на пользу в англоязычной среде.\nУспешно сдав экзамен FCE, вы получите кембриджский сертификат уровня B2, а сдав его на отлично – сертификат уровня C1, соответствующий экзамену CAE. Даже при условии неудачной сдачи FCE, вы все равно можете получить сертификат уровня B1, что соответствует экзамену PET.', '', '', '$$$', 5, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '', 'Непринужденное общение в самых сложных ситуациях! (уровень С1 и С2 соответственно). Курс подготовки к этим экзаменам поможет Вам усовершенствовать владение языком на исключительно высоком уровне и свободно пользоваться сложнейшими языковыми структурами. Курс длится 6 семестров.', '', '', '789', 4, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'Экзамены для подростков', 'TEXT', 'keywords', 'description', '', 0, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 'teens', 'RU TEXT', 'EN TEXT', 'RU Экзамены для подростков', 'EN Экзамены для подростков', 'keywords', 'keywords', 'ru description', 'en description', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'Экзамены для учителей', 'TEXT', 'keywords', 'description', '', 0, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 'teachers', 'RU TEXT', 'EN TEXT', 'RU Экзамены для учителей', 'EN Экзамены для учителей', 'keywords', 'keywords', 'ru description', 'en description', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'Экзамены для профессионалов', 'TEXT', 'keywords', 'description', '', 0, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 'professionals', 'RU TEXT', 'EN TEXT', 'RU Экзамены для профессионалов', 'EN Экзамены для профессионалов', 'keywords', 'keywords', 'ru description', 'en description', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'Партнерские программы', 'Станьте центром підготовки до Кембриджських іспитів і  гарантовано отримайте вагому перевагу над іншими – статус Вашого навчального закладу та додаткові можливості:\r\n•     проведення безкоштовних пробних тестувань та  Кембриджських іспитів на Вашій території\r\n•     оцінювання знань Ваших учнів та студентів згідно міжнародних стандартів\r\n•     право на використання символіки  Cambridge English  у Вашому навчальному закладі*\r\n•     проведення безкоштовних семінарів або іспитів  в залежності від кількості ваших студентів\r\n•     друковані матеріали для підготовки до іспитів', 'keywords', 'description', '', 0, '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 'partners', 'RU TEXT', 'EN TEXT', 'RU Партнерские программы', 'EN Партнерские программы', 'keywords', 'keywords', 'ru description', 'en description', NULL, NULL, NULL, NULL, NULL, NULL, '*від 10 студентів протягом академічного року ви отримуєте визнання від Cambridge English Language Assessment у вигляді сертифікату\r\nвід 30 студентів – право на використання логотипу (за попередньої згоди та схвалення)\r\nвід 60 студентів – офіційна табличка про статус вашого центру', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `sort` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `footer`
--

INSERT INTO `footer` (`id`, `title`, `title_ru`, `title_en`, `link`, `section`, `sort`) VALUES
(1, 'Для взрослых', '', '', '/courses/adult', 'courses', NULL),
(2, 'Для детей', '', '', '/courses/children', 'courses', NULL),
(3, 'Корпоративные курсы', '', '', '/courses/corporate', 'courses', NULL),
(4, 'Подготовка к экзаменам', '', '', '/courses/exam', 'courses', NULL),
(5, 'Украинский и русский для иностранцев', '', '', '/courses/corporate#ua', 'courses', NULL),
(7, 'Курсы CELTA', '', '', '/trainings/celta', 'trainings', NULL),
(8, 'Курсы CELT-S', '', '', '/trainings/celt_c', 'trainings', NULL),
(9, 'Курсы CELT-P', '', '', '/trainings/celt_p', 'trainings', NULL),
(10, 'Модульные курсы', '', '', '/trainings/modul', 'trainings', NULL),
(11, 'Другие тренинги', '', '', '/trainings/other', 'trainings', NULL),
(12, 'Курсы DELTA', '', '', '/trainings/delta', 'trainings', NULL),
(13, 'Регистрация', '', '', '/exams/delta', 'exams', NULL),
(14, 'Экзамены для детей', '', '', '/exams/children', 'exams', NULL),
(15, 'Экзамены для подростков', '', '', '/exams/adults', 'exams', NULL),
(16, 'История', '', '', '/about', 'about', NULL),
(17, 'Новости', '', '', '/news', 'about', NULL),
(18, 'Акции', '', '', '/offers', 'about', NULL),
(19, 'Как мы работаем', '', '', '#', 'about', NULL),
(20, 'Партнеры', '', '', '/about/partners', 'about', NULL),
(21, 'Расписание курсов и тренингов', '', '', '/study/schedule', 'study', NULL),
(22, 'Академический календарь', '', '', '/study/academic', 'study', NULL),
(23, 'Методика и формы обучения', '', '', '/study/methods', 'study', NULL),
(24, 'Уровни языка', '', '', '/study/levels', 'study', NULL),
(25, 'Правила обучения', '', '', '/study/rules', 'study', NULL),
(26, 'Программа лояльности', '', '', '/study/loyalty', 'study', NULL),
(201, 'Партнерская программа', '', '', '/exams/partners', 'exams', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `formstudy`
--

CREATE TABLE IF NOT EXISTS `formstudy` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `formstudy`
--

INSERT INTO `formstudy` (`id`, `title`, `title_ru`, `title_en`) VALUES
(1, 'ОБУЧЕНИЕ\r\nИНОСТРАННОМУ\r\nЯЗЫКУ\r\n В ГРУППАХ', 'ОБУЧЕНИЕ\r\nИНОСТРАННОМУ\r\nЯЗЫКУ\r\n В ГРУППАХ RU', 'ОБУЧЕНИЕ\r\nИНОСТРАННОМУ\r\nЯЗЫКУ\r\n В ГРУППАХ EN'),
(2, '\r\nОБУЧЕНИЕ\r\nИНОСТРАННОМУ\r\nЯЗЫКУ\r\nВ МИНИ-ГРУППАХ', '\r\nОБУЧЕНИЕ\r\nИНОСТРАННОМУ\r\nЯЗЫКУ\r\nВ МИНИ-ГРУППАХ RU', '\r\nОБУЧЕНИЕ\r\nИНОСТРАННОМУ\r\nЯЗЫКУ\r\nВ МИНИ-ГРУППАХ EN'),
(3, '\r\nИНДИВИДУАЛЬНОЕ\r\nОБУЧЕНИЕ\r\n ИНОСТРАННЫМ\r\nЯЗЫКАМ\r\nС РЕПЕТИТОРОМ', '', ''),
(4, '\r\nМИНИ-\r\nТРЕНИНГИ', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `friday`
--

CREATE TABLE IF NOT EXISTS `friday` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `anons` varchar(255) DEFAULT NULL,
  `text` text,
  `anons_ru` varchar(255) DEFAULT NULL,
  `text_ru` text,
  `anons_en` varchar(255) DEFAULT NULL,
  `text_en` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friday`
--

INSERT INTO `friday` (`id`, `title`, `anons`, `text`, `anons_ru`, `text_ru`, `anons_en`, `text_en`) VALUES
(1, 'Friday FUN Learning', 'Let’s sing! Let’s chant! Let’s play!', 'Учебно-игровая программа развития устной речи для детей от 6 до 9 лет. Курс базируется на изучении других наук (география, литература, биология, математика, искусство и др.) с помощью английской речи. Рассчитан на детей с начальным уровнем обучения (A1–A2).', 'Let’s sing! Let’s chant! Let’s play!', 'RU_Учебно-игровая программа развития устной речи для детей от 6 до 9 лет. Курс базируется на изучении других наук (география, литература, биология, математика, искусство и др.) с помощью английской речи. Рассчитан на детей с начальным уровнем обучения (A1–A2).', 'Let’s sing! Let’s chant! Let’s play!', 'EN_Учебно-игровая программа развития устной речи для детей от 6 до 9 лет. Курс базируется на изучении других наук (география, литература, биология, математика, искусство и др.) с помощью английской речи. Рассчитан на детей с начальным уровнем обучения (A1–A2).'),
(2, 'Stream FULL Ahead', 'Путешествуй с английским', 'Курс, охватывающий основные повседневные ситуации, в которые дети могут попасть, направляясь за границу, и учит детей достигать своих коммуникативных целей ', 'RU_Путешествуй с английским', 'RU_Курс, охватывающий основные повседневные ситуации, в которые дети могут попасть, направляясь за границу, и учит детей достигать своих коммуникативных целей ', 'EN_Путешествуй с английским', 'EN_Курс, охватывающий основные повседневные ситуации, в которые дети могут попасть, направляясь за границу, и учит детей достигать своих коммуникативных целей ');

-- --------------------------------------------------------

--
-- Структура таблицы `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL,
  `left_column` varchar(255) DEFAULT NULL,
  `left_column_ru` varchar(255) DEFAULT NULL,
  `left_column_en` varchar(255) DEFAULT NULL,
  `text` text,
  `text_ru` text,
  `text_en` text,
  `page` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `period_ru` varchar(255) DEFAULT NULL,
  `period_en` varchar(255) DEFAULT NULL,
  `left_column_plus` varchar(255) DEFAULT NULL,
  `left_column_plus_ru` varchar(255) DEFAULT NULL,
  `left_column_plus_en` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `levels`
--

INSERT INTO `levels` (`id`, `left_column`, `left_column_ru`, `left_column_en`, `text`, `text_ru`, `text_en`, `page`, `price`, `period`, `period_ru`, `period_en`, `left_column_plus`, `left_column_plus_ru`, `left_column_plus_en`, `title`) VALUES
(1, 'первый сознательный шаг в изучении английско-го', 'RU первый сознательный шаг в изучении английско-го', 'EN первый сознательный шаг в изучении английско-го', 'Набор из 3 тестов, специально разработанные для младших школьников\r\n•    Тесты, проверяющие уровень владения английским для повседневного использования\r\n•    Тесты, согласованные со школьной программой\r\nКаждый ребенок, который составляет Cambridge YLE, получает сертификат, который является не только демонстрацией индивидуальных достижений Вашего ребенка, но и признанием его индивидуальных умений.\r\nЭти тесты станут для Вашего ребенка первым шагом к успешной сдаче Кембриджских экзаменов высших уровней в будущем.', 'RU Набор из 3 тестов, специально разработанные для младших школьников\r\n•    Тесты, проверяющие уровень владения английским для повседневного использования\r\n•    Тесты, согласованные со школьной программой\r\nКаждый ребенок, который составляет Cambridge YLE, получает сертификат, который является не только демонстрацией индивидуальных достижений Вашего ребенка, но и признанием его индивидуальных умений.\r\nЭти тесты станут для Вашего ребенка первым шагом к успешной сдаче Кембриджских экзаменов высших уровней в будущем.', 'EN Набор из 3 тестов, специально разработанные для младших школьников\r\n•    Тесты, проверяющие уровень владения английским для повседневного использования\r\n•    Тесты, согласованные со школьной программой\r\nКаждый ребенок, который составляет Cambridge YLE, получает сертификат, который является не только демонстрацией индивидуальных достижений Вашего ребенка, но и признанием его индивидуальных умений.\r\nЭти тесты станут для Вашего ребенка первым шагом к успешной сдаче Кембриджских экзаменов высших уровней в будущем.', '|c4|c50|', '250$', 'Курс длится 1 семестр.', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'первый сознательный шаг в изучении английско-го', 'RU первый сознательный шаг в изучении английско-го', 'EN первый сознательный шаг в изучении английско-го', 'Данный экзамен соответствует уровню А2 общеевропейской системы языковой компетенции (СEFR).\r\nНа этом уровне учащиеся могут:\r\n•    Понимать базовую письменный английский\r\n•    Общаться в знакомых ситуациях\r\n•    Понимать короткие объявления и простые устные наставления\r\n•    Общаться с носителями языка, четко и медленно разговаривают\r\n•    Писать короткие тексты\r\nПодготовка к сдаче экзамена Cambridge KET предоставит вашему ребенку эти практические языковые навыки.\r\nСертификат о сдаче любого из этих экзаменов имеет неограниченный срок действия и признается во всем мире.', 'RU Данный экзамен соответствует уровню А2 общеевропейской системы языковой компетенции (СEFR).\r\nНа этом уровне учащиеся могут:\r\n•    Понимать базовую письменный английский\r\n•    Общаться в знакомых ситуациях\r\n•    Понимать короткие объявления и простые устные наставления\r\n•    Общаться с носителями языка, четко и медленно разговаривают\r\n•    Писать короткие тексты\r\nПодготовка к сдаче экзамена Cambridge KET предоставит вашему ребенку эти практические языковые навыки.\r\nСертификат о сдаче любого из этих экзаменов имеет неограниченный срок действия и признается во всем мире.', 'EN Данный экзамен соответствует уровню А2 общеевропейской системы языковой компетенции (СEFR).\r\nНа этом уровне учащиеся могут:\r\n•    Понимать базовую письменный английский\r\n•    Общаться в знакомых ситуациях\r\n•    Понимать короткие объявления и простые устные наставления\r\n•    Общаться с носителями языка, четко и медленно разговаривают\r\n•    Писать короткие тексты\r\nПодготовка к сдаче экзамена Cambridge KET предоставит вашему ребенку эти практические языковые навыки.\r\nСертификат о сдаче любого из этих экзаменов имеет неограниченный срок действия и признается во всем мире..', '|c50|', '120$', 'Курс длится 3 семестра.', NULL, NULL, 'CPE\r\n(Certificate of Proficiency in English)\r\nC2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `mainpage`
--

CREATE TABLE IF NOT EXISTS `mainpage` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_ru` text NOT NULL,
  `title_en` text NOT NULL,
  `keywords` text NOT NULL,
  `keywords_ru` text NOT NULL,
  `keywords_en` text NOT NULL,
  `description` text NOT NULL,
  `description_ru` text NOT NULL,
  `description_en` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'noimg.jpg'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mainpage`
--

INSERT INTO `mainpage` (`id`, `title`, `title_ru`, `title_en`, `keywords`, `keywords_ru`, `keywords_en`, `description`, `description_ru`, `description_en`, `link`, `img`) VALUES
(1, 'Курсы для взрослых', '', '', '', '', '', '', '', '', '/courses/adult', ''),
(2, 'Курсы для детей', '', '', '', '', '', '', '', '', '/courses/children', ''),
(3, 'Корпоративное обучение', '', '', '', '', '', '', '', '', '/courses/corporate', ''),
(4, 'Тренинги для преподователей', '', '', '', '', '', '', '', '', '/trainings/tutors', ''),
(5, 'Международные экзамены', '', '', '', '', '', '', '', '', '/exams', '');

-- --------------------------------------------------------

--
-- Структура таблицы `maps`
--

CREATE TABLE IF NOT EXISTS `maps` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `color` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `maps`
--

INSERT INTO `maps` (`id`, `title`, `title_ru`, `title_en`, `img`, `color`) VALUES
(1, 'улица Ванды Василевской 7\r\nметро «Политехнический институт»', 'улица Ванды Василевской 7\r\nметро «Политехнический институт» RU', 'улица Ванды Василевской 7\r\nметро «Политехнический институт» EN', 'map1.png', '#A9F5F2'),
(2, 'ул. Маршала Тимошенко 13А,\r\nметро «Минская»', 'ул. Маршала Тимошенко 13А,\r\nметро «Минская» RU', 'ул. Маршала Тимошенко 13А,\r\nметро «Минская» EN', 'map1.png', '#DA81F5'),
(3, 'улица Ванды Василевской 7\r\nметро «Политехнический институт»', 'улица Ванды Василевской 7\r\nметро «Политехнический институт» RU', 'улица Ванды Василевской 7\r\nметро «Политехнический институт» EN', 'map1.png', '#B40431');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1477903078),
('m161013_123245_exams_fix', 1477903082),
('m161013_130345_stasic_page', 1477903083),
('m161017_083600_teachers', 1477903083),
('m161017_090247_delete_columns_in_levels', 1477903084),
('m161017_092222_study_static', 1477903084),
('m161017_124338_fix_static', 1477903084),
('m161019_073511_add_title', 1477903084),
('m161019_080815_insert_study_to_static_pages', 1477903084),
('m161019_132140_fix_exams', 1477903086),
('m161019_133302_fix_contacts', 1477903086),
('m161020_081433_footer_menu', 1477903086),
('m161020_130107_exams_add', 1477903086),
('m161020_133014_footer_menu1', 1477903086),
('m161024_135145_gallery_on_news', 1477903086),
('m161025_092250_add_positionColumn_forTeahers', 1477903087),
('m161025_125224_add_nameColumn_forContacts', 1477903088),
('m161025_134951_corporate', 1477903088),
('m161026_074656_img_corporate', 1477903088),
('m161026_081009_celta_date_stringto_text', 1477903088),
('m161027_092719_table', 1477903088),
('m161027_094042_table_insert', 1477903088),
('m161027_105524_add_columnTable_forCourses', 1477903089),
('m161027_134731_insert_contacts_coordinates', 1477903089),
('m161031_083852_training_celta_detail_add', 1477903539),
('m161031_153625_modul_fix', 1477928635),
('m161031_153912_vication', 1478005263),
('m161101_094105_exam_child', 1478005264),
('m161101_132107_delete_course_item_symbol', 1478015205),
('m161101_153238_levels', 1478090359),
('m161102_082456_levels', 1478090360),
('m161102_125756_training_modul_fix', 1478091714),
('m161114_092012_trainings_index', 1479115423),
('m161114_112650_fix_exams', 1479123133),
('m161114_140208_courseIndex', 1479206002),
('m161115_102000_table_static', 1479220253),
('m161115_114813_fix_delta_moduls', 1479210818),
('m161115_151255_bookcenter', 1479223569),
('m161115_153347_fix', 1479225301),
('m161116_110804_create_email_table', 1479307967),
('m161116_110948_fix_offers_table', 1479307968),
('m161117_113619_fixShortColumnsImg', 1479458964),
('m161117_115047_trIm', 1479458964),
('m161117_134330_iReviews', 1479458964),
('m161122_111102_vic', 1481015369),
('m161124_092109_add_title_column_levels', 1481015370),
('m161130_092733_delete_training_for_teachers_item', 1481015370);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` int(11) NOT NULL,
  `img` text,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `prev_img` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`, `img`, `title_ru`, `title_en`, `text_ru`, `text_en`, `keywords`, `keywords_ru`, `keywords_en`, `description`, `description_ru`, `description_en`, `prev_img`) VALUES
(1, 'Майские каникулы', 'Уважаемые клиенты! Напоминаем, что согласно академическому календарю, с 1 по 10 мая в International Language Centre каникулы для всех студентов. Офис работает с 4 по 6 мая в дежурном режиме (з 10 до 19:00).', 1470248397, '', 'Майские каникулы RU', 'Майские каникулы EN', 'Майские каникулы RU', 'Майские каникулы EN', '', '', '', '', '', '', ''),
(2, 'Майские каникулы2', 'Уважаемые клиенты! Напоминаем, что согласно академическому календарю, с 1 по 10 мая в International Language Centre каникулы для всех студентов. Офис работает с 4 по 6 мая в дежурном режиме (з 10 до 19:00).', 1473248397, '', 'Майские каникулы2 RU', 'Майские каникулы2 EN', 'Майские каникулы 2 RU', 'Майские каникулы 2 EN', '', '', '', '', '', '', ''),
(3, 'Майские каникулы3', 'Уважаемые клиенты! Напоминаем, что согласно академическому календарю, с 1 по 10 мая в International Language Centre каникулы для всех студентов. Офис работает с 4 по 6 мая в дежурном режиме (з 10 до 19:00).', 1473248397, '', 'Майские каникулы2 RU', 'Майские каникулы2 EN', 'Майские каникулы 2 RU', 'Майские каникулы 2 EN', '', '', '', '', '', '', ''),
(4, 'Майские каникулы 4', 'Уважаемые клиенты! Напоминаем, что согласно академическому календарю, с 1 по 10 мая в International Language Centre каникулы для всех студентов. Офис работает с 4 по 6 мая в дежурном режиме (з 10 до 19:00).', 0, 'temp.jpg;temp2.png', 'RU Майские каникулы 4', 'EN Майские каникулы 4', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` int(11) NOT NULL,
  `img` text,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `important` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `offers`
--

INSERT INTO `offers` (`id`, `title`, `text`, `date`, `img`, `title_ru`, `title_en`, `text_ru`, `text_en`, `keywords`, `keywords_ru`, `keywords_en`, `description`, `description_ru`, `description_en`, `important`, `type`, `product_id`) VALUES
(1, 'Летние интенсивные курсы английского ', 'Эффективный курс для тех, кто стремится восстановить и пополнить свой словарный запас в повседневных жизненных ситуациях.\r\nЭтот курс для Вас, если Вы:\r\n•    изучали английский раньше, но Вам не хватает практики;\r\n•    чувствуете, что Вы знаете много правил, но не можете использовать их в речи;\r\n•    просто хотите разговориться, чтобы приступить к обучению с более высокого уровня;\r\n•    планируете отпуск за границей и хотите обновиться разговорные навыки.\r\nВремя занятий: 8:00, 10:00, 13:00, 15:30, 19:00.\r\nПродолжительность 1 занятия: 90 м.\r\nСрок обучения — две недели, ежедневно кроме субботы и воскресения.\r\nСтоимость курса: 1600 грн.\r\nГруппы стартую каждую неделю с 30 мая 2016 года.\r\nДля всех действующих и бывших клиентов нашей школы — скидка 10%! Также на летние интенсивы распространяется наш социальный проект по случаю Года английского языка в Украине — 25% скидки всем студентам стационара', 1420248397, '0', 'Летние интенсивные курсы английского  ru', 'Летние интенсивные курсы английского  EN', '', '', '', '', '', '', '', '', 1, NULL, NULL),
(2, 'Летние интенсивные курсы английского 2', 'Эффективный курс для тех, кто стремится восстановить и пополнить свой словарный запас в повседневных жизненных ситуациях.\r\nЭтот курс для Вас, если Вы:\r\n•    изучали английский раньше, но Вам не хватает практики;\r\n•    чувствуете, что Вы знаете много правил, но не можете использовать их в речи;\r\n•    просто хотите разговориться, чтобы приступить к обучению с более высокого уровня;\r\n•    планируете отпуск за границей и хотите обновиться разговорные навыки.\r\nВремя занятий: 8:00, 10:00, 13:00, 15:30, 19:00.\r\nПродолжительность 1 занятия: 90 м.\r\nСрок обучения — две недели, ежедневно кроме субботы и воскресения.\r\nСтоимость курса: 1600 грн.\r\nГруппы стартую каждую неделю с 30 мая 2016 года.\r\nДля всех действующих и бывших клиентов нашей школы — скидка 10%! Также на летние интенсивы распространяется наш социальный проект по случаю Года английского языка в Украине — 25% скидки всем студентам стационара', 1220248397, '0', 'Летние интенсивные курсы английского RU', 'Летние интенсивные курсы английского EN', '', '', '', '', '', '', '', '', 0, NULL, NULL),
(3, 'Летние интенсивные курсы английского 3 ', 'Эффективный курс для тех, кто стремится восстановить и пополнить свой словарный запас в повседневных жизненных ситуациях.\r\nЭтот курс для Вас, если Вы:\r\n•    изучали английский раньше, но Вам не хватает практики;\r\n•    чувствуете, что Вы знаете много правил, но не можете использовать их в речи;\r\n•    просто хотите разговориться, чтобы приступить к обучению с более высокого уровня;\r\n•    планируете отпуск за границей и хотите обновиться разговорные навыки.\r\nВремя занятий: 8:00, 10:00, 13:00, 15:30, 19:00.\r\nПродолжительность 1 занятия: 90 м.\r\nСрок обучения — две недели, ежедневно кроме субботы и воскресения.\r\nСтоимость курса: 1600 грн.\r\nГруппы стартую каждую неделю с 30 мая 2016 года.\r\nДля всех действующих и бывших клиентов нашей школы — скидка 10%! Также на летние интенсивы распространяется наш социальный проект по случаю Года английского языка в Украине — 25% скидки всем студентам стационара', 1420248397, '0', 'Летние интенсивные курсы английского RU', 'Летние интенсивные курсы английского EN', '', '', '', '', '', '', '', '', 1, NULL, NULL),
(4, 'Летние интенсивные курсы английского 4', 'Эффективный курс для тех, кто стремится восстановить и пополнить свой словарный запас в повседневных жизненных ситуациях.\r\nЭтот курс для Вас, если Вы:\r\n•    изучали английский раньше, но Вам не хватает практики;\r\n•    чувствуете, что Вы знаете много правил, но не можете использовать их в речи;\r\n•    просто хотите разговориться, чтобы приступить к обучению с более высокого уровня;\r\n•    планируете отпуск за границей и хотите обновиться разговорные навыки.\r\nВремя занятий: 8:00, 10:00, 13:00, 15:30, 19:00.\r\nПродолжительность 1 занятия: 90 м.\r\nСрок обучения — две недели, ежедневно кроме субботы и воскресения.\r\nСтоимость курса: 1600 грн.\r\nГруппы стартую каждую неделю с 30 мая 2016 года.\r\nДля всех действующих и бывших клиентов нашей школы — скидка 10%! Также на летние интенсивы распространяется наш социальный проект по случаю Года английского языка в Украине — 25% скидки всем студентам стационара', 1120248397, '0', 'Летние интенсивные курсы английского RU', 'Летние интенсивные курсы английского EN', '', '', '', '', '', '', '', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `opportunity`
--

CREATE TABLE IF NOT EXISTS `opportunity` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'noimg.jpg'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `opportunity`
--

INSERT INTO `opportunity` (`id`, `title`, `title_ru`, `title_en`, `img`) VALUES
(1, 'Все преподаватели имеют кембриджские дипломы и сертификаты о владении современными методиками преподавания.', 'Все преподаватели имеют кембриджские дипломы и сертификаты о владении современными методиками преподавания. RU', 'Все преподаватели имеют кембриджские дипломы и сертификаты о владении современными методиками преподавания. EN', 'temp.jpg'),
(2, 'Гибкий набор, удобное расписание, группы не более 12 человек.', 'Гибкий набор, удобное расписание, группы не более 12 человек. RU', 'Гибкий набор, удобное расписание, группы не более 12 человек. EN', 'temp.jpg'),
(3, 'Учебная программа разработана в соответствии с мировым стандартом CEFR.', 'Учебная программа разработана в соответствии с мировым стандартом CEFR. RU', 'Учебная программа разработана в соответствии с мировым стандартом CEFR. EN', 'temp.jpg'),
(4, 'Эффективное использование аутентичных учебников\r\nи онлайн ресурсов.', 'Эффективное использование аутентичных учебников\r\nи онлайн ресурсов. RU', 'Эффективное использование аутентичных учебников\r\nи онлайн ресурсов. EN', 'temp.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `img`, `link`, `name`) VALUES
(1, 'temp.jpg', NULL, NULL),
(2, 'temp.jpg', NULL, NULL),
(3, 'temp.jpg', NULL, NULL),
(4, 'temp.jpg', NULL, NULL),
(5, 'temp.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `page`, `name`, `img`, `name_ru`, `name_en`, `text`, `text_ru`, `text_en`, `video`) VALUES
(2, '|с1|', 'АННА МОГИЛЕВА', '{"img":"review-img.jpg","alt":"name","title":"surname"}', 'АННА\nМОГИЛЕВА_RU', 'АННА\nМОГИЛЕВА_EN', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_RU', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_EN', ''),
(3, '|с1|', 'Петровіч', '{"img":"review-img.jpg","alt":"name","title":"surname"}', 'Петрович', 'Petrovich', 'Супір', 'Супер', 'Super', ''),
(4, '|c10|c12|t2|', '', '{"img":"review-img.jpg","alt":"name","title":"surname"}', '', '', '', '', '', 'https://www.youtube.com/embed/pJi8EM2tuOY'),
(5, '|t2|', 'ПетровічDelta', '{"img":"review-img.jpg","alt":"name","title":"surname"}', 'Петрович', 'Petrovich', 'Супір', 'Супер', 'Super', ''),
(6, '|c12|', 'АННА\nМОГИЛЕВА', '{"img":"review-img.jpg","alt":"name","title":"surname"}', 'АННА\nМОГИЛЕВА_RU', 'АННА\nМОГИЛЕВА_EN', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_RU', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_EN', ''),
(7, '|c12|', 'АНДРЕЙ\r\nЗОТОВ', '{"img":"review-img.jpg","alt":"name","title":"surname"}', 'АНДРЕЙ\r\nЗОТОВ_RU', 'АНДРЕЙ\r\nЗОТОВ_EN', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_RU', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_EN', ''),
(8, '|c12|', 'ИГОРЬ\r\nБЕЛЯВСКИЙ', '{"img":"review-img.jpg","alt":"name","title":"surname"}', 'ИГОРЬ\r\nБЕЛЯВСКИЙ_RU', 'ИГОРЬ\r\nБЕЛЯВСКИЙ_EN', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_RU', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_EN', '');

-- --------------------------------------------------------

--
-- Структура таблицы `static_page`
--

CREATE TABLE IF NOT EXISTS `static_page` (
  `id` int(11) NOT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `section` varchar(255) NOT NULL,
  `table` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `static_page`
--

INSERT INTO `static_page` (`id`, `symbol`, `title`, `title_ru`, `title_en`, `description`, `description_ru`, `description_en`, `keywords`, `keywords_ru`, `keywords_en`, `text`, `text_ru`, `text_en`, `section`, `table`) VALUES
(1, 'contacts', 'Контакты', 'RU Контакты', 'EN Контакты', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', '', '', '', '', NULL),
(2, 'about', 'История', 'RU История', 'EN История', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'Языковая школ "Международный Дом" была основана 24 ноября 1992 года при содействии, материально-технической и финансовой поддержке Международного Фонда "Возрождение", основателем которого является всемирно известный финансист и филантроп Джордж Сорос. Первым официальным названием было "Независимая языковая школа", в английском варианте — "Soros International House School". Независимая языковая школа — первый в Украине центр изучения иностранных языков, где к процессу преподавания начали привлекать исключительно тех носителей языка, которые имеют международные сертификаты преподавания английского языка как иностранного. В настоящее время основным условием сотрудничества Школы с преподавателями является наличие соответствующих международных квалификаций. Первично, школа была расположена в главном корпусе Университета "Киево-Могилянская академия", а с 1996 г. имеет собственное помещение по адресу Ванды Василевской, 7. С 1994 года в Школе работает Книжный центр, ставший пионером в продвижении британских издательств на украинский рынок и первым официальным дистрибьютором Oxford University Press в Украине. С середины 1990-х Школа является одним из лидеров в подготовке преподавателей по коммуникативной методике и со временем получила официальный статус Центра CELTA от Кембриджского университета. В 2012 году был также открыт Экзаменационный центр по подготовке и сдаче Кембриджских экзаменов по английскому языку. С 1994 по 2015 год Школа была аффилиирована с International House World Organisation с целью внедрения современной коммуникативной методики и инновационных подходов к преподаванию иностранных языков. Языковая школа Международный дом и в дальнейшем продолжает использовать новейшие методики и технологии в обучении иностранным языкам взрослых и детей, а также в подготовке преподавателей.', 'RU', 'EN', '', NULL),
(3, 'partners', 'Партнеры', 'RU Партнеры', 'EN Партнеры', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'Партнеры', 'RU', 'EN', 'about', NULL),
(4, 'teachers', 'Наши преподаватели', 'RU Наши преподаватели', 'EN Наши преподаватели', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'Наша школа имеет необходимый преподавательский состав и ресурсную базу, чтобы предложить Вашей компании курс или тренинг по английскому языку, соответствующий международным стандартам качества.', '', '', 'about', NULL),
(5, 'schedule', 'Расписания', 'RU Расписания', 'EN Расписания', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'Расписания', 'RU Расписания', 'EN Расписания', 'study', NULL),
(6, 'academic', 'Академический календарь', 'RU Академический календарь', 'EN Академический календарь', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'Академический календарь', 'RU Академический календарь', 'EN Академический календарь', 'study', NULL),
(7, 'methods', 'Методика и формы обучения', 'RU Методика и формы обучения', 'EN Методика и формы обучения', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'Методика и формы обучения', 'RU Методика и формы обучения', 'EN Методика и формы обучения', 'study', NULL),
(8, 'levels', 'Уровни языка', 'RU Уровни языка', 'EN Уровни языка', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'Уровни языка', 'RU Уровни языка', 'EN Уровни языка', 'study', '1|2'),
(9, 'rules', 'Правила навчання в International Language Centre', 'Правила обучения в International Language Centre', 'EN Правила обучения', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', '<p><strong>1.&nbsp;&nbsp;&nbsp; Загальні положення</strong><br />1.1.&nbsp;&nbsp;&nbsp;&nbsp;<strong>International Language Centre (надалі - Школа)</strong>&nbsp;надає Слухачам послуги з вивчення англійської (або іншої) мови в групах або індивідуально з використанням комунікативної методики.<br />1.2.&nbsp;&nbsp;&nbsp; Документом, що підтверджує згоду на отримання послуг Школи, є сплачений Рахунок на оплату послуг. Сплачуючи рахунок. Слухач погоджується з правилами Школи.<br />1.3.&nbsp;&nbsp;&nbsp; Один навчальний семестр триває 6 тижнів, година навчання - 60 хвилин.<br />1.4.&nbsp;&nbsp;&nbsp; Максимальна кількість слухачів у групі 12.13-та особа може приєднатися до групи за умови згоди викладача та всіх студентів групи. Групи, в яких нараховується менше, ніж б слухачів, можуть бути закриті або об&#39;єднані з іншими групами.</p><p><br /><strong>2.</strong>&nbsp;&nbsp;&nbsp;<strong> Навчальний процес</strong><br />2.1.&nbsp;&nbsp;&nbsp; Навчальний процес відбувається згідно з академічним календарем.<br />2.2.&nbsp;&nbsp;&nbsp; Запис до груп відбувається за результатами попереднього тестування, яке є обов&rsquo;язковим для всіх нових клієнтів.<br />2.3.&nbsp;&nbsp;&nbsp; При невідповідності рівня знання мови, переміщення в іншу групу можливе лише протягом першого тижня навчання.<br />2.4.&nbsp;&nbsp;&nbsp; Слухачі зобов&#39;язані приходити на заняття вчасно та готувати домашні завдання.<br />2.5.&nbsp;&nbsp;&nbsp; Якщо Слухач заважає проведенню занять, він має звільнити аудіторію на прохання викладача.<br />2.6.&nbsp;&nbsp;&nbsp; Порушення дисципліни Слухачами дитячих та підліткових груп може призвести до відрахування з поверненням коштів за невідвідані заняття відповідно до п.3.9.<br />2.7.&nbsp;&nbsp;&nbsp; Вартість занять, пропущених не з вини Школи, не відшкодовується.<br />2.8.&nbsp;&nbsp;&nbsp; Наприкінці кожного семестру викладач проводить прогресивне тестування і приймає рішення про перехід на наступний рівень.<br />2.9.&nbsp;&nbsp;&nbsp; Навчальний процес передбачає ротацію викладачів. Ротація обов&#39;язкова та є одним з елементів методики Школи.<br />2.10.&nbsp;&nbsp;&nbsp; Розклад викладачів планується відповідно до академічних вимог. Школа має право на зміну викладача у групі.<br />2.11.&nbsp;&nbsp;&nbsp; Зауваження, пов&#39;язані з методикою викладання, адресуються викладачеві. У випадку необхідності втручання адміністрації, письмові звернення направляються до офісу для вирішення проблеми.<br />2.12.&nbsp;&nbsp;&nbsp; У разі виникнення обставин, які унеможливлюють проведення занять не з вини Школи (форс-мажор, державні свята) пропущене заняття (одне) додатково не проводиться, а відпрацьовується за рахунок інтенсифікації учбового процесу.<br />2.13.&nbsp;&nbsp;&nbsp; Після закінчення повного рівня Слухач отримує сертифікат, в якому зазначається кількість фактично відвіданих навчальних годин. Рівень вважається закінченим лише у випадку успішного написання &laquo;End of Level Test&raquo;. Сертифікат видається за попереднім замовленням Слухача.</p><p><br /><strong>3.</strong>&nbsp;&nbsp;&nbsp;<strong> Порядок оплати навчання</strong><br />3.1.&nbsp;&nbsp;&nbsp; Навчання сплачується у повному обсязі (мінімум за семестр) до початку занять. Вартість навчальних посібників не входить до вартості навчання.<br />3.2.&nbsp;&nbsp;&nbsp; Гарантією місця в групі у наступному семестрі клієнтам, що навчаються у поточному семестрі, є здійснення оплати до кінця п&#39;ятого тижня поточного семестру.<br />3.3.&nbsp;&nbsp;&nbsp; Оплата має бути підтверджена бухгалтерією Школи.<br />3.4.&nbsp;&nbsp;&nbsp; Слухачі мають право придбати підручники у Книжковому центрі Школи зі знижкою.<br />3.5.&nbsp;&nbsp;&nbsp; При порушенні порядку оплати навчання (п. 3.1) Слухач втрачає право на будь-які знижки в поточному семестрі. При цьому накопичувальна знижка анулюється, як і у випадку перерви в навчанні навіть на один семестр. Процес накопичення знижок розпочинається з наступного семестру навчання.<br />3.6.&nbsp;&nbsp;&nbsp; У випадку змін розкладу, що унеможливлюють заняття Слухача з вини Школи, всі внесені платежі, за вирахуванням фактично відвіданих занять, повертаються Слухачеві.<br />3.7.&nbsp;&nbsp;&nbsp; У випадку неможливості відвідування занять з вини Слухача, повернення коштів або їх перенесення в рахунок наступного семестра (одного) можливе тільки на першому тижні занять.<br />3.8.&nbsp;&nbsp;&nbsp; Вийнятком з п. 3.7 є заняття (більше, ніж 4 заняття), що були пропущені студентами дитячих груп через хворобу та за наявності підтверджуючого документа медичного закладу.<br />3.9.&nbsp;&nbsp;&nbsp; Будь-які операції з коштами (повернення, перерахунок тощо) проводяться лише за умови наявності письмової заяви, оригіналу квитанції про сплату та паспорту Слухача (батьків).</p><p><br /><strong>4.</strong>&nbsp;&nbsp;&nbsp;<strong> Правила користування Ресурсним Центром Школи</strong><br />4.1.&nbsp;&nbsp;&nbsp; Слухачі мають право користуватися матеріалами Ресурсного Центру Школи за умови попередньої оплати послуги користування (посеместрово).<br />4.2.&nbsp;&nbsp;&nbsp; Вартість втрачених ресурсних матеріалів підлягає відшкодуванню.<br />5.&nbsp;&nbsp;&nbsp; Особливі умови<br />5.1.&nbsp;&nbsp;&nbsp; В разі виникнення питань, що виходять за межі цих Правил, Слухач має право звернутися у письмовій формі до представника Дирекції Школи та отримати відповідь у 3-денний термін.<br />5.2.&nbsp;&nbsp;&nbsp; Всі інші питання розглядаються у відповідності до чинного законодавства.<br />5.3.&nbsp;&nbsp;&nbsp; Школа несе відповідальність за використання Ваших персональних даних згідно із Законом України &ldquo;Про захист персональних даних&quot; від 01.06.2010 р. № 2297-VI.</p>', '<p><strong>1. Общие положения</strong><br />1.1.&nbsp;&nbsp;&nbsp;&nbsp;<strong>International</strong> <strong>Language</strong> <strong>Centre</strong><strong> (далее - Школа)</strong>&nbsp;предоставляет Слушателям услуги по изучению английского (или другого) языка в группах или индивидуально с использованием коммуникативной методики.<br />1.2.&nbsp;&nbsp;&nbsp;Документом, подтверждающим согласие на получение услуг Школы, является оплаченый Счет на оплату углуг. Оплачивая Счет, Слушатель соглашается с правилами Школы.<br />1.3.&nbsp;&nbsp;&nbsp; Один учебный семестр длится 6 недель, час обучения &ndash; 60 минут.</p><p>1.4.&nbsp;&nbsp;&nbsp; Максимальное количество Слушателей в группе &ndash; 12. 13-й слушатель может присоединиться к группе при условии согласия преподавателя и всех студентов группы. Группы, в которых насчитывается меньше 6 Слушателей, могут быть закрыты либо обьеденены с другими группами.</p><p><br /><strong>2.</strong>&nbsp;&nbsp;&nbsp; <strong>Учебный процесс</strong><br />2.1.&nbsp;&nbsp;&nbsp; Учебный процесс происходит в соответствии с академическим календарем.<br />2.2.&nbsp;&nbsp;&nbsp; Запись в группы происходит в соответствии с результатами предварительного тестирования, являющегося обязательным для всех новых клиентов.<br />2.3.&nbsp;&nbsp;&nbsp; При несоответствии уровня владения языком, перемещение в другую группу возможно только на протяжении первой недели обучения.<br />2.4.&nbsp;&nbsp;Слушатели обязаны приходить на занятия вовремя и делать домашние задания.<br />2.5.&nbsp;&nbsp;&nbsp; Если Слушатель мешает проведению занятий, он обязан покинуть аудиторию по просьбе преподавателя.<br />2.6.&nbsp;&nbsp;&nbsp; Нарушение дисциплины Слушателями детских и подростковых групп может привести к отчислению с возвратом средств за неиспользованные занятия в соответствии с п. 3.9.<br />2.7.&nbsp;&nbsp;&nbsp; Стоимость занятий, пропущенных не по вине Школы, не компенсируется.<br />2.8.&nbsp;&nbsp;&nbsp;В конце каждого семестра преподаватель проводит прогрессивное тестирование и принимает решение о переходе на следующий уровень.<br />2.9.&nbsp;&nbsp;&nbsp; Учебный процесс предусматривает ротацию преподавателей. Ротация обязательна и является одним из элементов методики Школы.<br />2.10.&nbsp;&nbsp;Расписание преподавателей планируется в соответствии с академическими требованиями. Школа имеет право на замену преподавателя в группе.</p><p>2.11.&nbsp;&nbsp;&nbsp; Замечания, связанные с методикой преподавания, адресуются преподавателю. В случае необходимости вмешательства администрации, письменные обращения направляются в офис для решения проблемы.</p><p>2.12.&nbsp;&nbsp;&nbsp; В случае возникновения форс-мажорных обстоятельств, делающих невозможным проведение занятий не по вине Школы (форс-мажор, государственные праздники), пропущенное занятие (одно) дополнительно не проводится, а отрабатывается за счет интенсификации учебного процесса.<br />2.13.&nbsp;&nbsp;После окончания полного уровня Слушатель получает Сертификат, в котором указывается количество фактически посещенных учебных часов. Уровень считается оконченным только в случае успешного написания &laquo;End of Level Test&raquo;. Сертификат выдается по предварительному заказу Слушателя.</p><p><br /><strong>3.</strong>&nbsp;&nbsp;&nbsp;<strong> Порядок оплаты обучения</strong><br />3.1.&nbsp;&nbsp;&nbsp; Обучение оплачивается в полном объеме (минимум за семестр) до начала занятий. Стоимость учебных пособий не включается в стоимость обучения.<br />3.2.&nbsp;&nbsp;&nbsp;Гарантией места в группе в следующем семестре клиентам, обучающимся в текущем семестре, является осуществление оплаты до конца пятой недели текущего семестра.<br />3.3.&nbsp;&nbsp;&nbsp; Оплата должна быть подтверждена бухгалтерией Школы.<br />3.4.&nbsp;&nbsp;&nbsp;Слушатели имеют право приобретения учебников в Книжном центре Школы со скидкой.</p><p>&nbsp;3.5.&nbsp;&nbsp;&nbsp;В случае нарушения порядка оплаты обучения (п. 3.1), Слушатель теряет право на какие-либо скидки в текущем семестре. При этом накопительная скидка анулируется, как и в случае перерыва в обучении даже на один семестр. Процес накопления скидок начинается со следующего семестра обучения.<br />3.6.&nbsp;&nbsp;&nbsp;В случае изменения расписания, делающего невозможным обучение Слушателся не по вине Школы, все внесенные платежи, за вычетом фактически посещенных занятий, возвращаются Слушателю.<br />3.7.&nbsp;&nbsp;&nbsp;В случае невозможности посещения занятий по вине Слушателя, возврат средств или их перенесение в счет следующего семестра (одного) возможно только на первой неделе занятий.<br />3.8.&nbsp;&nbsp;&nbsp;Исключением из п. 3.7 являются занятия (более 4х занятий), которые были пропущены студентами детских групп по причине болезни и при наличии подтверждающего документа медицинского учреждения.<br />3.9.&nbsp;&nbsp;&nbsp;Какие-либо операции с денежными средствами (возврат, пересчет и т.д.) проводятся только при условии наличия письменного заявления, оригинала квитанции об оплате и паспорта Слушателя (родителей).</p><p><br /><strong>4.</strong>&nbsp;&nbsp;&nbsp;<strong> Правила &nbsp;пользования Ресурсным Центром Школы</strong><br />4.1.&nbsp;&nbsp;&nbsp;Слушатели имеют право пользоваться материалами Ресурсного Центра Школы при условии предварительной оплаты услуги пользования &nbsp;(посеместрово).<br />4.2.&nbsp;&nbsp;&nbsp; Стоимость утраченных ресурсных материалов подлежит возмещению.<br />&nbsp;</p><p><strong>5.&nbsp;&nbsp;&nbsp; </strong><strong>Особенные условия</strong><br />5.1.&nbsp;&nbsp;&nbsp; В случае возникновения вопросов, выходящих за пределы этих Правил, Слушатель имеет право обратиться в письменной форме к представителю Дирекции Школы и получить ответ в 3-дневный срок.<br />5.2.&nbsp;&nbsp;&nbsp;Все другие вопросы рассматриваются в соответствии с действующим законодательством Украины.<br />5.3.&nbsp;&nbsp;&nbsp; Школа несет ответственность за использование Ваших персональных данных в соответствии с&nbsp; Законом Украины &ldquo;О защите персональных данных&quot; от 01.06.2010 г. № 2297-VI.</p>', 'EN Правила обучения', 'study', NULL),
(10, 'loyalty', 'Программа лояльности', 'RU Программа лояльности', 'EN Программа лояльности', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'Программа лояльности', 'RU Программа лояльности', 'EN Программа лояльности', 'study', NULL),
(15, 'study', 'Обучение', 'RU Обучение', 'EN Обучение', 'description', 'ru description', 'en description', 'keywords', 'keywords', 'keywords', 'TEXT', 'RU TEXT', 'EN TEXT', '', NULL),
(20, NULL, 'Книжный центр', 'Книжный центр_ru', 'Книжный центр_en', '', '', '', '', '', '', 'Наша компания – Официальный дистрибьютор издательства Oxford University Press.\r\nМы предлагаем учебники по английскому языку, лицензионные аудио и видео компоненты, интерактивные компакт-диски, словари, страноведческую и художественную литературу.', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `stepstest`
--

CREATE TABLE IF NOT EXISTS `stepstest` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `description_ru` text NOT NULL,
  `description_en` text NOT NULL,
  `step` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stepstest`
--

INSERT INTO `stepstest` (`id`, `title`, `title_ru`, `title_en`, `description`, `description_ru`, `description_en`, `step`) VALUES
(1, 'ОПРЕДЕЛЯЕМ\r\nВАШУ ЦЕЛЬ', 'ОПРЕДЕЛЯЕМ\r\nВАШУ ЦЕЛЬ RU ', 'ОПРЕДЕЛЯЕМ\r\nВАШУ ЦЕЛЬ EN', 'Мы обязательно спросим вас,\r\nдля чего вам нужен язык\r\nи где вы учились раньше.', 'RU Мы обязательно спросим вас,\r\nдля чего вам нужен язык\r\nи где вы учились раньше.', 'EN Мы обязательно спросим вас,\r\nдля чего вам нужен язык\r\nи где вы учились раньше.', 1),
(2, 'ПРОВЕРЯЕМ\r\nБАЗОВЫЕ ВЕЩИ', 'ru', 'en', '– Проверяем грамматику\r\n– Проверяем чтение\r\n– Проводим аудировнаие', '', '', 2),
(3, 'БЕСЕДА\r\nС ПРЕПОДАВАТЕЛЕМ', '', '', 'Проверяем легко ли вам говорить.\r\nЭто нужно для того, что понять, есть ли у вас языковой барьер и насколько легко вам говорить на английском.', '', '', 3),
(4, 'ТЕПЕРЬ ВЫ ЗНАЕТЕ\r\nСВОЙ УРОВЕНЬ', '', '', 'Мы обработаем все данные\r\nи получим результат.', '', '', 4),
(5, 'СОСТАВЛЯЕМ РЕКОМЕНДАЦИИ\r\nДЛЯ ВАС', '', '', 'Мы составим для вас индивидуальные рекомендации,\r\nкоторые помогут вам достичь поставленных целей\r\nбыстро и с минимальными усилиями.', '', '', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `strategy`
--

CREATE TABLE IF NOT EXISTS `strategy` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `text` text,
  `text_ru` text,
  `text_en` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `strategy`
--

INSERT INTO `strategy` (`id`, `title`, `title_ru`, `title_en`, `text`, `text_ru`, `text_en`) VALUES
(1, 'Дети 5-10 лет', 'Дети 5-10 лет_RU', 'Дети 5-10 лет_EN', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке.', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке._RU', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке._EN'),
(2, 'Дети 10-13 лет', 'Дети 10-13 лет_RU', 'Дети 10-13 лет_EN', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке.', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке._RU', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке._EN'),
(3, 'Дети 13-17 лет', 'Дети 13-17 лет_RU', 'Дети 13-17 лет_EN', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке.', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке._RU', 'На данном этапе обучения дети начинают и/или продолжают развивать/совершенствовать элементарные навыки разговорной речи, расширяют и закрепляют накопленный запас слов, начинают использовать полученные знания на практике. Начинается процесс обучения детей чтению на английском языке._EN');

-- --------------------------------------------------------

--
-- Структура таблицы `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `sort` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tables`
--

INSERT INTO `tables` (`id`, `title`, `title_ru`, `title_en`, `text`, `text_ru`, `text_en`, `sort`) VALUES
(1, 'Діти 5-10 лет', 'Дети 5-10 лет', 'Children 5-10 years old', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1),
(2, 'Діти 10-13 лет', 'Дети 10-13 лет', 'Children 10-13 years old', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)2\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1),
(3, 'Подростки 13-17 лет', 'Підлітки 13-17 лет', 'Teenagers 13-17 years old', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)3\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<table>\r\n<tbody>\r\n<tr>\r\n	<td rowspan="3">2Exam\r\n  preparation (IELTS)\r\n	</td>\r\n	<td>Mon\r\n	</td>\r\n	<td>Tue\r\n	</td>\r\n	<td>Wed\r\n	</td>\r\n	<td>Thu\r\n	</td>\r\n	<td>Fri\r\n	</td>\r\n	<td>Cost of one semester\r\n	</td>\r\n	<td>Numbers of hours\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>\r\n	</td>\r\n	<td>19:00- 21:00\r\n	</td>\r\n	<td>5400\r\n	</td>\r\n	<td>36\r\n	</td>\r\n</tr>\r\n<tr>\r\n	<td colspan="5">Saturdays, 10:00-14:00\r\n	</td>\r\n	<td>3600\r\n	</td>\r\n	<td>24\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `img` text NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `position_ru` varchar(255) DEFAULT NULL,
  `position_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `name_ru`, `name_en`, `text`, `text_ru`, `text_en`, `img`, `position`, `position_ru`, `position_en`) VALUES
(1, 'МОРОЗОВ ИВАН ВЛАДИМИРОВИЧ', 'ru МОРОЗОВ ИВАН ВЛАДИМИРОВИЧ', 'en МОРОЗОВ ИВАН ВЛАДИМИРОВИЧ', 'text NOT NULL', 'text NOT NULL', 'text NOT NULL', 'temp.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `trainings`
--

CREATE TABLE IF NOT EXISTS `trainings` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `anons` text,
  `text` text,
  `date` text,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rightcol` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `backgroundimg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `show_detail` tinyint(4) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `anons_ru` text,
  `anons_en` text,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `date_ru` varchar(255) NOT NULL,
  `date_en` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `rightcol_ru` text NOT NULL,
  `rightcol_en` text NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `anons`, `text`, `date`, `keywords`, `description`, `rightcol`, `price`, `parent_id`, `backgroundimg`, `img`, `show_detail`, `symbol`, `title_ru`, `title_en`, `anons_ru`, `anons_en`, `text_ru`, `text_en`, `date_ru`, `date_en`, `keywords_ru`, `keywords_en`, `description_ru`, `description_en`, `rightcol_ru`, `rightcol_en`, `sort`) VALUES
(1, 'Тренинги для преподавателей', '<p><del>International </del><strong>Language </strong><em>Centre </em>предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быст</p>', '', '', 'bla bla ', 'description', '', '', 0, 'bg.img', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, 'tutors', 'Тренинги для преподавателей RU', 'Тренинги для преподавателей EN ', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, 'Курс для преподавателей Delta', '<p>Месячный курс (120 часов) с отрывом от основного места работы, ориентированный на преподавателей английского языка как иностранного без достаточного опыта преподавания, признается образовательными организациями во всем мире. По окончании выдается сертифик1</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo labore magni natus nisi non quis. Dolorem, eaque eligendi est eveniet fuga inventore labore nesciunt pariatur qui quis quo repudiandae rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo labore magni natus nisi non quis. Dolorem, eaque eligendi est eveniet fuga inventore labore nesciunt pariatur qui quis quo repudiandae rerum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo labore magni natus nisi non quis. Dolorem, eaque eligendi est eveniet fuga inventore labore nesciunt pariatur qui quis quo repudiandae rerum.<span class="redactor-invisible-space">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo labore magni natus nisi non quis. Dolorem, eaque eligendi est eveniet fuga inventore labore nesciunt pariatur qui quis quo repudiandae rerum.<span class="redactor-invisible-space"><img src="/images/57fcb9ad88fb6.jpg"><span class="redactor-invisible-space"></span></span></span></p><p><span class="redactor-invisible-space"><span class="redactor-invisible-space">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo labore magni natus nisi non quis. Dolorem, eaque eligendi est eveniet fuga inventore labore nesciunt pariatur qui quis quo repudiandae rerum.<span class="redactor-invisible-space">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo labore magni natus nisi non quis. Dolorem, eaque eligendi est eveniet fuga inventore labore nesciunt pariatur qui quis quo repudiandae rerum.<span class="redactor-invisible-space"></span><br></span></span></span></p>', 'Даты проведения курса 15.06.2016–07.08.2016', '', '', '', '', 0, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'delta', 'Курс для преподавателей Delta RU', 'Курс для преподавателей Delta EN', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 'Подготовка к экзамену', '(delta module1)', 'Delta is a widely recognised qualification which helps to build better teaching practice and can lead to greater rewards and enhanced career opportunities.\r\nModule One: Understanding Language Skills for Teaching\r\nIt focuses on the background to teaching and learning and looks at the theories behind how people learn languages and how they are taught.\r\nAssessment: via a written examination.\r\nModule Two: Developing Professional Practice.\r\nIt focuses on developing professional practice and looks at the theory and practice of teaching, and the different ways that environment, society and culture affect the way that it works.\r\nAssessment: via a portfolio of coursework, including observed lessons, background written assignments, and one externally-assessed lesson.\r\nModule Three: Extending practice and English language teaching specialization.\r\nIt focuses on assessment and course planning in the context of a specialist option (e.g.\r\nYoung Learners, English for Special Purposes, 1×1).Assessment: via an extended written assignment', 'asdfdasf', '', '', '<p>Для кого этот курс Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль — 16 часов.</p>', '100', 2, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'module1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(4, 'Тренинговый курс', '(delta module2)', 'Delta is a widely recognised qualification which helps to build better teaching practice and can lead to greater rewards and enhanced career opportunities.\r\nModule One: Understanding Language Skills for Teaching\r\nIt focuses on the background to teaching and learning and looks at the theories behind how people learn languages and how they are taught.\r\nAssessment: via a written examination.\r\nModule Two: Developing Professional Practice.\r\nIt focuses on developing professional practice and looks at the theory and practice of teaching, and the different ways that environment, society and culture affect the way that it works.\r\nAssessment: via a portfolio of coursework, including observed lessons, background written assignments, and one externally-assessed lesson.\r\nModule Three: Extending practice and English language teaching specialization.\r\nIt focuses on assessment and course planning in the context of a specialist option (e.g.\r\nYoung Learners, English for Special Purposes, 1×1).Assessment: via an extended written assignment', '', '', '', '<p>Для кого этот курс Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль — 16 часов.</p>', '500', 2, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'module2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 'Курсовая работа', '(delta module3)', 'Delta is a widely recognised qualification which helps to build better teaching practice and can lead to greater rewards and enhanced career opportunities.\r\nModule One: Understanding Language Skills for Teaching\r\nIt focuses on the background to teaching and learning and looks at the theories behind how people learn languages and how they are taught.\r\nAssessment: via a written examination.\r\nModule Two: Developing Professional Practice.\r\nIt focuses on developing professional practice and looks at the theory and practice of teaching, and the different ways that environment, society and culture affect the way that it works.\r\nAssessment: via a portfolio of coursework, including observed lessons, background written assignments, and one externally-assessed lesson.\r\nModule Three: Extending practice and English language teaching specialization.\r\nIt focuses on assessment and course planning in the context of a specialist option (e.g.\r\nYoung Learners, English for Special Purposes, 1×1).Assessment: via an extended written assignment', '', '', '', '<p>Для кого этот курс Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль — 16 часов.</p>', '300', 2, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'module3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 'Курс для преподавателей Celta', '<p>Месячный курс (120 часов) с отрывом от основного места работы, ориентированный на преподавателей английского языка как иностранного без достаточного опыта преподавания, признается образовательными организациями во всем мире. По окончании выдается сертифик</p>', '<p>This is an introductory course designed primarily for inexperienced teachers and is mainly concerned with the “how” of teaching. It is considered to be a solid foundation for teaching English as a foreign language.</p><p>The course is recognised by EFL organisations world-wide and the certificate is the most highly respected of its kind in the world.</p><p>The Cambridge Certificate requires an attendance of 120 hours over 4 weeks.</p><p>The course offers methods of English language analysis which will develop the EFL teacher’s ability to make the language more meaningful to foreign learners at all levels.</p><p>The course also aims to develop and broaden the prospective EFL teacher’s knowledge of language skills, correction techniques and pronunciation. In addition, it gives the teacher an ability to supplement and criticise available textbooks and materials, and to create their own.</p><p>The presentation and practice of new language items are dealt with in detail and give the EFL teacher confidence in a variety of methods.</p><p>Syllabus and timetabling are also covered on the course.</p><p>Cambridge CELTA</p><p>ГЛАВНАЯ</p><p>THE CELTA MODULES</p><p>Teaching practice is an integral part of the course and takes place every day. It is related to the areas covered in the input sessions. Trainees work in groups of six with small classes of students to get experience of teaching at different levels (beginners to advanced). Lessons are discussed by TP groups and tutors after TP.</p><p>Trainees also observe at least 8 hours of lessons given by qualified teachers. Additional time is required for lesson preparation and written assignments. As the course is full-time and very intensive it is impossible to have any other commitments during the period of the course. Trainees will find they have to work in the evenings and at weekends.</p>', '<ul><li>full-time </li><li>18.01.16 – 12.02.16</li><li> 06.06.16 – 01.07.16</li><li> 04.07.16 – 29.07.16</li><li>04.07.16 – 29.07.16 </li><li>01.08.16 – 26.08.16 </li></ul><ul><li>part-time </li><li>15.01.16 – 09.04.16</li><li>16.09.16 – 12.12.16</li><li></ul>', '', '', '<p>Для кого этот курс Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль — 16 часов.</p>', '1498', 0, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'celta', 'Курс для преподавателей Celta RU', 'Курс для преподавателей Celta EN', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(7, 'Курсы CELT-C', '<p>Кембриджские сертификаты, которые получают кандидаты, успешно сдавшие экзамен, признаются многочисленным международными университетами, компаниями и образовательными учреждениями</p>', '<p>gfsddfsgsdgf</p>', 'Даты проведения курса 15.06.2016–07.08.2016', '', '', '', '1499', 0, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'celt_c', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(8, 'Курсы CELT-P', 'CELT-P – новый Кембриджский курс, который состоит из онлайн-модулей, оффлайн-семинаров и практических занятий. Курс направлен на преподавателей, работающих с детьми младшего школьного возраста (6-12 лет) и желающих улучшить свои профессиональные умения и ', '', 'Даты проведения курса 15.06.2016–07.08.2016', '', '', '', '1499', 0, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'celt_p', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(9, 'ДРУГИЕ ТРЕНИНГИ ДЛЯ ПРЕПОДАВАТЕЛЕЙ', '', '', '', '', '', '', '', 0, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, 'other', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(10, 'Однодневные семинары-тренинги', 'Однодневные семинары-тренинги', 'Семинары  по коммуникативной методике преподавания английского языка для учителей, не имеющих сертификатов IHC / CELTA', 'Расписание ближайших однодневных семинаров 20.05.2016 16.00–17.10 Лавренчук В.И.', '', '', 'Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль —\n16 часов.', '1499', 9, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'one', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(11, 'Тренинги на территории заказчиков', 'Тренинги на территории заказчиков', 'Двухдневные семинары выходного дня для учителей, не имеющих сертификатов IHC / CELTA.    Курс состоит из 6 часов интерактивных занятий (элементы практики включены). Рассчитан курс на группу из 4–6 человек. Стоимость участия для одного человека: 800 грн. Язык проведения семинара — английский. Дата начала курса зависит от комплектации группы. Курс проводится на территории заказчика. Дату начала курса выбирает заказчик. Записаться Записаться Семинары по коммуникативной методике преподавания английского языка для учителей, не имеющих сертификатов IHC / CELTA. Цель семинаров: теоретическое обоснование применения коммуникативной методики преподавания английского языка, а также идеи использования методики в ежедневной практике. Для участия в семинаре приглашаются преподаватели английского языка государственных и частных учебных заведений.', '', '', '', 'Для кого этот курс\nТренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль —\n16 часов.', '1499', 9, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(12, 'Модульные курсы для преподавателей', 'Курс предусматривает как изучение собственно языка (грамматика, обогащение словарного запаса и т.д.), так и углубление знаний по методологии (в частности, правильное использование учебника в учебном процессе, развитие методологии коммуникативного подхода ', 'Главная цель этих курсов — углублять знания о коммуникативной методике и научить получать максимальную пользу от использования аутентичных учебников.\r\n<br>Каждый пройденный модуль открывает перед вами новые аспекты обучения английскому языку и использования учебника. После завершения всех трех модулей вы будете достаточно подготовлены для того, чтобы задуматься о сдаче экзамена TKT.', '', '', '', 'Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль —\r\n16 часов.', '1499', 0, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, 'modul', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(13, 'Модуль 1', '<p>Модуль 1: Общий английский и методология преподавания теории и функций английской грамматики</p>', '<p>Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы.</p><p>Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении.</p><p>Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2</p>', '12.03.16–09.04.16', '', '', '', '', 12, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(14, 'Модуль 2', 'Модуль 2: Общий английский и методология преподавания навыков сприйняття', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', '12.03.16–09.04.16', '', '', '', '', 12, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(15, 'Модуль 3', 'Модуль 3: Общий английский и методология преподавания навыков воспроизведения.', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', '12.03.16–09.04.16', '', '', '', '', 12, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(16, 'Модуль 4', 'Модуль 4: Методология преподавания в детских группах.', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', '12.03.16–09.04.16', '', '', '', '', 12, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(17, 'Модуль 5', 'Модуль 5: Методология экзаменационной подготовки.', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', '12.03.16–09.04.16', '', '', '', '', 12, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(18, 'Модуль 6', 'Модуль 6: Особенности работы в языковых лагерях.', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', '12.03.16–09.04.16', '', '', '', '', 12, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(50, 'TEACHING PRACTICE AND OBSERVATION', NULL, 'Teaching practice is an integral part of the course and takes place every day. It is related to the areas covered in the input sessions. Trainees work in groups of six with small classes of students to get experience of teaching at different levels (beginners to advanced). Lessons are discussed by TP groups and tutors after TP. Trainees also observe at least 8 hours of lessons given by qualified teachers. Additional time is required for lesson preparation and written assignments. As the course is full-time and very intensive it is impossible to have any other commitments during the period of the course. Trainees will find they have to work in the evenings and at weekends.', NULL, 'keywords', 'description', '', '', 6, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, '', 'RU TEACHING PRACTICE AND OBSERVATION', 'EN TEACHING PRACTICE AND OBSERVATION', NULL, NULL, 'RU TEXT', 'EN TEXT', '', '', 'keywords', 'keywords', 'ru description', 'en description', '', '', 0),
(51, 'Тренинги для преподавателей', 'International Language Centre предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быстрый результат.', NULL, NULL, '', '', '', '', 0, '', '{"img":"cambridge-logo.jpg","alt":"cambridge","title":"cambridge"}', 0, '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tutors`
--

CREATE TABLE IF NOT EXISTS `tutors` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `img` text,
  `description` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tutors`
--

INSERT INTO `tutors` (`id`, `title`, `subtitle`, `img`, `description`, `page`) VALUES
(1, 'ROBERT', 'FLETCHER', 'temp.jpg', 'Robert has been teaching English for twenty-five years. He is the former Head of Teacher Training at International House Newcastle. He now undertakes teacher training for IH Newcastle on a part time basis. At other times he does freelance teacher training', '|t3|'),
(2, 'BETH M', 'GRANT', 'temp.jpg', 'Research interests: Teacher education, Bilingualism, New approaches to learning\r\nBeth is from Cheltenham in Gloucestershire. She is a very experienced CELTA and DELTA tutor and assessor. Beth has travelled the world delivering teacher training courses.\r\nB', '|t3|');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `authKey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `authKey`) VALUES
(1, 'admin', '$2y$13$7sY9M2Vx0fyVT854pLgkmOVpMa11C22qhzzYQrv.LSo3uuEU1G8ui', 'RGMOoIGnPQF5C_UT5EIPN_yPjeXOpbhV');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `begintest`
--
ALTER TABLE `begintest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `formstudy`
--
ALTER TABLE `formstudy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `friday`
--
ALTER TABLE `friday`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mainpage`
--
ALTER TABLE `mainpage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `opportunity`
--
ALTER TABLE `opportunity`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `static_page`
--
ALTER TABLE `static_page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stepstest`
--
ALTER TABLE `stepstest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `strategy`
--
ALTER TABLE `strategy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `begintest`
--
ALTER TABLE `begintest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT для таблицы `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT для таблицы `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT для таблицы `formstudy`
--
ALTER TABLE `formstudy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `friday`
--
ALTER TABLE `friday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `mainpage`
--
ALTER TABLE `mainpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `opportunity`
--
ALTER TABLE `opportunity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `static_page`
--
ALTER TABLE `static_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `stepstest`
--
ALTER TABLE `stepstest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `strategy`
--
ALTER TABLE `strategy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT для таблицы `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
