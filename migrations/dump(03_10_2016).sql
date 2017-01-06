-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 03 2016 г., 11:26
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
-- Структура таблицы `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `anons` text,
  `text` text,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `leftcol` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `backgroundimg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `show_detail` tinyint(4) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `anons_ru` varchar(255) NOT NULL,
  `anons_en` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `leftcol_ru` varchar(255) NOT NULL,
  `leftcol_en` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `anons`, `text`, `keywords`, `description`, `leftcol`, `price`, `parent_id`, `backgroundimg`, `img`, `show_detail`, `symbol`, `title_ru`, `title_en`, `anons_ru`, `anons_en`, `text_ru`, `text_en`, `keywords_ru`, `keywords_en`, `description_ru`, `description_en`, `leftcol_ru`, `leftcol_en`) VALUES
(1, 'Английский для взрослых UA', 'International Language Centre предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быстрый результат.', '', 'UA', 'UA', '', '', 0, 'bg.img', 'adult.jpg', 0, 'adult', 'Английский для взрослых RU', 'Engilish adult', 'anons ru', 'anons en', '', '', 'key ru', 'key en', 'desc ru', 'desc en', '', ''),
(2, 'Общий английский язык UA', 'Курсы общего английского для слушателей всех уровней. Наша школа гарантирует быстрый прогресс в изучении языка и уверенное владение им.', '', '', '', '', '', 1, '', '', 1, 'general', 'Общий английский язык RU', 'Общий английский язык EN', '', '', '', '', '', '', '', '', '', ''),
(3, 'Деловой английский UA', 'Курс бизнес-английского рассчитан на тех, кто планирует работать или уже работает в сфере бизнеса и нуждается в совершенствовании языка для карьерного роста.', '', '', '', '', '', 1, '', '', 1, 'business', 'Деловой английский RU', 'Деловой английский EN', '', '', '', '', '', '', '', '', '', ''),
(4, 'Экзаменационная\nподготовка UA', 'Кембриджские сертификаты, которые получают кандидаты, успешно сдавшие экзамен, признаются многочисленным международными университетами, компаниями и образовательными учреждениями', 'International Language Centre проводит профессиональную и качественную подготовку к международным тестам, разработанным Кембриджским университетом (IELTS, KET, PET, FCE, CAE, CPE) — самым распространенным языковым экзаменам в мире. Мы предоставляем нашим студентам всю регистрационную и практическую информацию о порядке сдачи экзамена и др.\r\n\r\nКембриджские сертификаты, которые получают кандидаты, успешно сдавшие экзамен, признаются многочисленным международными университетами, компаниями и образовательными учреждениями как безоговорочное подтверждение международно признанных стандартов владения языком.', '', '', '', '', 1, '', '', 1, 'exam', 'Экзаменационная подготовка RU', 'Экзаменационная подготовка EN', '', '', '', '', '', '', '', '', '', ''),
(5, 'Разговорный интенсив по субботам UA', 'Интенсивный курс для развития речи. Курс предусматривает комплекс упражнений и заданий для увеличения словарного запаса, активации пассивных знаний и преодоления языкового барьера', '', '', '', '', '', 1, '', '', 0, 'speak', 'Разговорный интенсив по субботам RU', 'Разговорный интенсив по субботам EN', '', '', '', '', '', '', '', '', '', ''),
(6, 'Подготовка к IELTS UA', 'Экзамен IELTS (International English Language Testing System) рассчитан на тех, кому необходимы некоторые знания английского для образования или работы в англоязычных странах. Он имеет общее и академическое направления. Этот сертификат признается учебными учреждениями многих стран мира. Срок действия – 2 года.', '', '', '', '', '123.5', 4, '', 'block.jpg', 0, 'ielts', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', 'Твой первый успешный шаг в изучении английского! (уровень А2 по системе CEFR). Курс подготовки к экзамену KET поможет Вам эффективно общаться на английском даже с минимальным словарным запасом. Курс длится\r\n1 семестр.', '', '', '', 'KET (Key English Test)', '2000', 4, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', 'Практический английский на каждый день (уровень В1). Курс подготовки к экзамену PET поможет Вам общаться на английском в учебе, на работе и за границей. Курс длится 1 семестр.', '', '', '', 'PET\r\n(Preliminary English Test)', '123', 4, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', 'Непринужденное общение в самых сложных ситуациях! (уровень С1 и С2 соответственно). Курс подготовки к этим экзаменам поможет Вам усовершенствовать владение языком на исключительно высоком уровне и свободно пользоваться сложнейшими языковыми структурами. Курс длится 6 семестров.', '', '', '', 'CAE\r\n(Certificate in Advanced English)', '789', 4, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Английский для детей UA', 'International Language Centre предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быстрый результат.', '', '', '', '', '', 0, 'bg.jpg', '', 0, 'children', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Общий английский', 'Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.', 'Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденному материалу и регулярно оповещаем родителей об успешности обучения.\r\nЗанятия проводятся с использованием англоязычных учебников издательств Oxford и Pearson.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In id fringilla mauris. Curabitur posuere, mi lacinia semper aliquam, nisi nisl feugiat libero, nec pretium ante est eget leo. Mauris dapibus erat nisl, at lobortis massa sodales at. Donec id bibendum diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse arcu mi, suscipit in facilisis nec, lobortis quis magna. Donec id justo sit amet est viverra consequat. Integer pretium enim tortor, in suscipit neque ullamcorper ac.\r\n\r\nVivamus sed facilisis ''a, sed maximus enim. Mauris euismod scelerisque lorem, in vehicula ''a tristique non. Integer maximus eros sed leo aliquam pulvinar. Praesent eros ante, porta eget est sed, feugiat faucibus dui. Aenean purus velit, efficitur a nibh eu, posuere convallis ligula. Proin placerat ipsum sagittis quam semper, id consectetur quam malesuada. Aenean eget risus vel lorem posuere ornare. Aenean luctus mi elit, sed ullamcorper libero semper sed. Donec id molestie dolor. Donec ligula mauris, consequat non orci ac, imperdiet luctus mauris. Curabitur tincidunt, dui quis semper vulputate, metus velit dignissim lectus, tempus sagittis velit dui sit amet elit. Sed aliquam diam lectus, sed rhoncus erat accumsan quis.\r\n\r\nIn hac habitasse platea dictumst. Aenean lacinia ipsum ac neque ultrices, et tristique lectus vehicula. Donec commodo ipsum non mattis vestibulum. Nam lacus felis, maximus nec maximus efficitur, placerat vitae orci. In rhoncus nibh nisl, sed mollis turpis egestas non. Integer suscipit molestie venenatis. Donec accumsan sem sed ipsum iaculis mollis. Sed aliquet varius nisi viverra mattis. Sed arcu dui, cursus quis elit laoreet, mollis rhoncus diam. Phasellus vel erat non augue tempor sodales. Morbi orci eros, pellentesque id viverra ac, varius a orci. Pellentesque ultrices sit amet tortor ut pulvinar. Aenean eget eros diam. Cras laoreet dui at purus semper, feugiat dictum odio tincidunt. Aliquam consequat enim sit amet enim suscipit scelerisque. Duis auctor lectus sed lectus accumsan molestie.\r\n\r\nDuis metus augue, gravida ac risus quis, dapibus dignissim arcu. Vestibulum et mattis arcu. Sed tempor lectus ac mauris imperdiet, ut convallis dolor fringilla. Vivamus non est non turpis mattis pharetra. Pellentesque ac eros enim. Duis pellentesque id nulla ac semper. Phasellus tristique condimentum felis. Vivamus pretium nisi in faucibus ullamcorper. Nam nec lacus nec nibh aliquet venenatis. Curabitur ultricies maximus faucibus. Mauris venenatis ligula nibh, et laoreet elit iaculis ut.\r\n\r\nPellentesque semper quis purus in auctor. Sed faucibus nulla eleifend, vestibulum magna vel, rutrum mi. Morbi vehicula libero non feugiat venenatis. Morbi id orci nisi. Pellentesque porta mollis ex quis pretium. Mauris tincidunt risus in eros egestas porta. Aenean eros nisi, fringilla et bibendum in, tincidunt non augue. Proin vehicula mollis ornare. Nulla porttitor, nulla non porta aliquam, ligula odio venenatis quam, et maximus tortor dolor in enim. Donec id fringilla arcu.', 'keywords', 'description', '', '', 10, '', '', 0, 'general', 'Английский для детей RU', 'Английский для детей EN', '', '', '', '', '', '', '', '', '', ''),
(12, 'Корпоративное обучение английскому языку', 'Наша школа имеет необходимый преподавательский состав и ресурсную базу, чтобы предложить Вашей компании курс или тренинг по английскому языку, соответствующий международным стандартам качества.', 'Преимущества корпоративного обучения\r\n1\r\nКоммуникативная\r\nметодика\r\nПринципом которой является освоение иностранного языка путем реального общения.\r\n2\r\nВысококвалифицированные\r\nпреподаватели\r\nПринципом которой является освоение иностранного языка путем реального общения.\r\n3\r\nНовейшие учебные\r\nпособия\r\nИспользование новейших учебных пособий ведущих зарубежных издательств.\r\nКороткие языковые тренинги:\r\n\r\n•   Курс «Ведение презентаций»\r\n•   Курс «Успешное ведение переговоров»\r\n•   Курс «Обслуживание клиентов»\r\n•   Курс «Тайм менеджмент»\r\n•   Курс «Эффективное планирование»\r\n•   Курс «Деловое письмо»\r\n•   Индивидуально разработанные короткие языковые тренинги', '', '', '', '', 0, '', '', 0, 'corporate', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Курсы украинского и русского языков для иностранцев', '', '', '', '', '', '', 0, '', '', 0, 'foreigners', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `anons` text,
  `text` text,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `leftcol` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `backgroundimg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `show_detail` tinyint(4) NOT NULL,
  `symbol` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `exams`
--

INSERT INTO `exams` (`id`, `title`, `anons`, `text`, `keywords`, `description`, `leftcol`, `price`, `parent_id`, `backgroundimg`, `img`, `show_detail`, `symbol`) VALUES
(1, 'МЕЖДУНАРОДНЫЕ ЭКЗАМЕНЫ ПО АНГЛИЙСКОМУ ЯЗЫКУ', 'Разнообразие экзаменов, к которым ILCentre успешно\nготовит своих слушателей. Вы можете выбрать и зарегистрироваться.', '', 'bla bla ', 'description', '', '', 0, 'bg.img', '', 0, 'adult'),
(2, 'Партнерская программа для центров подготовки к экзаменам', '•    ILCentre аккредитована Cambridge English Language Assessment на подготовку и прием международных экзаменов: YLE Starters, YLE Movers, YLE Flyers, KET, PET, FCE, CAE, BEC, ILEC, ICFE, BULATS, KET for schools, PET for schools, FCE for schools, а также экзамен ТКТ для преподавателей английского языка.\n•    Мы готовы предложить вам полный комплекс подготовки к международным тестам TOEFL и IELTS, а также к международным экзаменам по немецкому, французскому и испанскому языкам.', '', '', '', '', '', 1, '', '', 0, 'general'),
(3, 'Экзамены для детей', 'Наш экзаменационный центр предлагает сдачу Кембриджских экзаменов по английскому языку (YLE, KET, PET, FCE, CAE, CPE, BEC) – наиболее распространенных языковых экзаменов в мире. Сертификаты Кембриджского университета имеют неограниченный срок действия и признаются многочисленными международными университетами, компаниями и образовательными учреждениями, как несомненное подтверждение международно-признанных стандартов владения языком. Уровни: Starters – ниже уровня А1 |  Movers – на уровне А1 |  Flyers – на уровне А2', '', '', '', '', '', 0, '', '', 0, 'children'),
(4, '', 'Набор из 3 тестов, специально разработанные для младших школьников\n•    Тесты, проверяющие уровень владения английским для повседневного использования\n•    Тесты, согласованные со школьной программой\nКаждый ребенок, который составляет Cambridge YLE, получает сертификат, который является не только демонстрацией индивидуальных достижений Вашего ребенка, но и признанием его индивидуальных умений.\nЭти тесты станут для Вашего ребенка первым шагом к успешной сдаче Кембриджских экзаменов высших уровней в будущем.', '', '', '', 'YLE (Cambridge English: Young Learners )', '$$$', 3, '', '', 0, ''),
(5, 'Экзамены для подростков', 'Наш экзаменационный центр предлагает сдачу Кембриджских экзаменов по английскому языку (YLE, KET, PET, FCE, CAE, CPE, BEC) – наиболее распространенных языковых экзаменов в мире. Сертификаты Кембриджского университета имеют неограниченный срок действия и признаются многочисленными международными университетами, компаниями и образовательными учреждениями, как несомненное подтверждение международно-признанных стандартов владения языком.', '', '', '', '', '', 0, '', '', 0, 'adults'),
(6, '', 'Данный экзамен соответствует уровню А2 общеевропейской системы языковой компетенции (СEFR).\nНа этом уровне учащиеся могут:\n•    Понимать базовую письменный английский\n•    Общаться в знакомых ситуациях\n•    Понимать короткие объявления и простые устные наставления\n•    Общаться с носителями языка, четко и медленно разговаривают\n•    Писать короткие тексты\nПодготовка к сдаче экзамена Cambridge KET предоставит вашему ребенку эти практические языковые навыки.\nСертификат о сдаче любого из этих экзаменов имеет неограниченный срок действия и признается во всем мире.', '', '', '', 'KET\n(Key English Test )\n\n\n\nпервый сознательный шаг в изучении английско-го', '$$$', 5, '', '', 0, ''),
(7, '', 'Набор из 3 тестов, специально разработанные для младших школьников\n•    Тесты, проверяющие уровень владения английским для повседневного использования\n•    Тесты, согласованные со школьной программой\nКаждый ребенок, который составляет Cambridge YLE, получает сертификат, который является не только демонстрацией индивидуальных достижений Вашего ребенка, но и признанием его индивидуальных умений.\nЭти тесты станут для Вашего ребенка первым шагом к успешной сдаче Кембриджских экзаменов высших уровней в будущем.\nУровни: Starters – ниже уровня А1 |  Movers – на уровне А1 |  Flyers – на уровне А2', '', '', '', 'PET\n(Key English Test )\n\n\n\nпервый сознательный шаг в изучении английско-го', '$$$', 5, '', '', 0, ''),
(8, '', 'Это экзамен Cambridge ESOL уровня выше-среднего. Выберите FCE, если Ваши знания английского достаточны для использования в ежедневном общении, в сферах бизнеса и обучения.\nFCE ежегодно сдает более 270,000 людей в более чем 100 странах. FCE является идеальным выбором, если Вы хотите работать и делать карьеру или получать за границей образование, которое требует развитых языковых навыков (например: бизнес, медицина, инженерное дело). FCE показывает достаточно профессиональное умение находить практическое применение знаниям английского, которое будет служить на пользу в англоязычной среде.\nУспешно сдав экзамен FCE, вы получите кембриджский сертификат уровня B2, а сдав его на отлично – сертификат уровня C1, соответствующий экзамену CAE. Даже при условии неудачной сдачи FCE, вы все равно можете получить сертификат уровня B1, что соответствует экзамену PET.', '', '', '', 'FCE\n(Key English Test )\n\n\n\nпервый сознательный шаг в изучении английско-го', '$$$', 5, '', '', 0, ''),
(9, '', 'Непринужденное общение в самых сложных ситуациях! (уровень С1 и С2 соответственно). Курс подготовки к этим экзаменам поможет Вам усовершенствовать владение языком на исключительно высоком уровне и свободно пользоваться сложнейшими языковыми структурами. Курс длится 6 семестров.', '', '', '', 'CAE\r\n(Certificate in Advanced English)', '789', 4, '', '', 0, ''),
(10, 'Английский для детей', 'International Language Centre предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быстрый результат.', '', '', '', '', '', 0, 'bg.jpg', '', 0, 'children'),
(11, 'Общий английский', 'Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.', 'Курс английского для детей охватывает изучение всех необходимых языковых навыков и умений, но доминирующее место в курсе отводится обучению свободной устной речи и успешной коммуникации в целом.\r\nМы проводим регулярный контроль знаний по всему пройденному материалу и регулярно оповещаем родителей об успешности обучения.\r\nЗанятия проводятся с использованием англоязычных учебников издательств Oxford и Pearson.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In id fringilla mauris. Curabitur posuere, mi lacinia semper aliquam, nisi nisl feugiat libero, nec pretium ante est eget leo. Mauris dapibus erat nisl, at lobortis massa sodales at. Donec id bibendum diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse arcu mi, suscipit in facilisis nec, lobortis quis magna. Donec id justo sit amet est viverra consequat. Integer pretium enim tortor, in suscipit neque ullamcorper ac.\r\n\r\nVivamus sed facilisis ''a, sed maximus enim. Mauris euismod scelerisque lorem, in vehicula ''a tristique non. Integer maximus eros sed leo aliquam pulvinar. Praesent eros ante, porta eget est sed, feugiat faucibus dui. Aenean purus velit, efficitur a nibh eu, posuere convallis ligula. Proin placerat ipsum sagittis quam semper, id consectetur quam malesuada. Aenean eget risus vel lorem posuere ornare. Aenean luctus mi elit, sed ullamcorper libero semper sed. Donec id molestie dolor. Donec ligula mauris, consequat non orci ac, imperdiet luctus mauris. Curabitur tincidunt, dui quis semper vulputate, metus velit dignissim lectus, tempus sagittis velit dui sit amet elit. Sed aliquam diam lectus, sed rhoncus erat accumsan quis.\r\n\r\nIn hac habitasse platea dictumst. Aenean lacinia ipsum ac neque ultrices, et tristique lectus vehicula. Donec commodo ipsum non mattis vestibulum. Nam lacus felis, maximus nec maximus efficitur, placerat vitae orci. In rhoncus nibh nisl, sed mollis turpis egestas non. Integer suscipit molestie venenatis. Donec accumsan sem sed ipsum iaculis mollis. Sed aliquet varius nisi viverra mattis. Sed arcu dui, cursus quis elit laoreet, mollis rhoncus diam. Phasellus vel erat non augue tempor sodales. Morbi orci eros, pellentesque id viverra ac, varius a orci. Pellentesque ultrices sit amet tortor ut pulvinar. Aenean eget eros diam. Cras laoreet dui at purus semper, feugiat dictum odio tincidunt. Aliquam consequat enim sit amet enim suscipit scelerisque. Duis auctor lectus sed lectus accumsan molestie.\r\n\r\nDuis metus augue, gravida ac risus quis, dapibus dignissim arcu. Vestibulum et mattis arcu. Sed tempor lectus ac mauris imperdiet, ut convallis dolor fringilla. Vivamus non est non turpis mattis pharetra. Pellentesque ac eros enim. Duis pellentesque id nulla ac semper. Phasellus tristique condimentum felis. Vivamus pretium nisi in faucibus ullamcorper. Nam nec lacus nec nibh aliquet venenatis. Curabitur ultricies maximus faucibus. Mauris venenatis ligula nibh, et laoreet elit iaculis ut.\r\n\r\nPellentesque semper quis purus in auctor. Sed faucibus nulla eleifend, vestibulum magna vel, rutrum mi. Morbi vehicula libero non feugiat venenatis. Morbi id orci nisi. Pellentesque porta mollis ex quis pretium. Mauris tincidunt risus in eros egestas porta. Aenean eros nisi, fringilla et bibendum in, tincidunt non augue. Proin vehicula mollis ornare. Nulla porttitor, nulla non porta aliquam, ligula odio venenatis quam, et maximus tortor dolor in enim. Donec id fringilla arcu.', 'keywords', 'description', '', '', 10, '', '', 0, 'general'),
(12, 'Корпоративное обучение английскому языку', 'Наша школа имеет необходимый преподавательский состав и ресурсную базу, чтобы предложить Вашей компании курс или тренинг по английскому языку, соответствующий международным стандартам качества.', 'Преимущества корпоративного обучения\r\n1\r\nКоммуникативная\r\nметодика\r\nПринципом которой является освоение иностранного языка путем реального общения.\r\n2\r\nВысококвалифицированные\r\nпреподаватели\r\nПринципом которой является освоение иностранного языка путем реального общения.\r\n3\r\nНовейшие учебные\r\nпособия\r\nИспользование новейших учебных пособий ведущих зарубежных издательств.\r\nКороткие языковые тренинги:\r\n\r\n•   Курс «Ведение презентаций»\r\n•   Курс «Успешное ведение переговоров»\r\n•   Курс «Обслуживание клиентов»\r\n•   Курс «Тайм менеджмент»\r\n•   Курс «Эффективное планирование»\r\n•   Курс «Деловое письмо»\r\n•   Индивидуально разработанные короткие языковые тренинги', '', '', '', '', 0, '', '', 0, 'corporate'),
(13, 'Курсы украинского и русского языков для иностранцев', '', '', '', '', '', '', 0, '', '', 0, 'foreigners');

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
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`, `img`, `title_ru`, `title_en`, `text_ru`, `text_en`, `keywords`, `keywords_ru`, `keywords_en`, `description`, `description_ru`, `description_en`) VALUES
(1, 'Майские каникулы', 'Уважаемые клиенты! Напоминаем, что согласно академическому календарю, с 1 по 10 мая в International Language Centre каникулы для всех студентов. Офис работает с 4 по 6 мая в дежурном режиме (з 10 до 19:00).', 1470248397, '', 'Майские каникулы RU', 'Майские каникулы EN', 'Майские каникулы RU', 'Майские каникулы EN', '', '', '', '', '', ''),
(2, 'Майские каникулы2', 'Уважаемые клиенты! Напоминаем, что согласно академическому календарю, с 1 по 10 мая в International Language Centre каникулы для всех студентов. Офис работает с 4 по 6 мая в дежурном режиме (з 10 до 19:00).', 1473248397, '', 'Майские каникулы2 RU', 'Майские каникулы2 EN', 'Майские каникулы 2 RU', 'Майские каникулы 2 EN', '', '', '', '', '', ''),
(3, 'Майские каникулы3', 'Уважаемые клиенты! Напоминаем, что согласно академическому календарю, с 1 по 10 мая в International Language Centre каникулы для всех студентов. Офис работает с 4 по 6 мая в дежурном режиме (з 10 до 19:00).', 1473248397, '', 'Майские каникулы2 RU', 'Майские каникулы2 EN', 'Майские каникулы 2 RU', 'Майские каникулы 2 EN', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` int(11) NOT NULL,
  `img` varchar(60) NOT NULL DEFAULT 'noimg.jpg',
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `important` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `offers`
--

INSERT INTO `offers` (`id`, `title`, `text`, `date`, `img`, `title_ru`, `title_en`, `text_ru`, `text_en`, `keywords`, `keywords_ru`, `keywords_en`, `description`, `description_ru`, `description_en`, `important`) VALUES
(1, 'Летние интенсивные курсы английского ', 'Эффективный курс для тех, кто стремится восстановить и пополнить свой словарный запас в повседневных жизненных ситуациях.\r\nЭтот курс для Вас, если Вы:\r\n•    изучали английский раньше, но Вам не хватает практики;\r\n•    чувствуете, что Вы знаете много правил, но не можете использовать их в речи;\r\n•    просто хотите разговориться, чтобы приступить к обучению с более высокого уровня;\r\n•    планируете отпуск за границей и хотите обновиться разговорные навыки.\r\nВремя занятий: 8:00, 10:00, 13:00, 15:30, 19:00.\r\nПродолжительность 1 занятия: 90 м.\r\nСрок обучения — две недели, ежедневно кроме субботы и воскресения.\r\nСтоимость курса: 1600 грн.\r\nГруппы стартую каждую неделю с 30 мая 2016 года.\r\nДля всех действующих и бывших клиентов нашей школы — скидка 10%! Также на летние интенсивы распространяется наш социальный проект по случаю Года английского языка в Украине — 25% скидки всем студентам стационара', 1420248397, '0', 'Летние интенсивные курсы английского  ru', 'Летние интенсивные курсы английского  EN', '', '', '', '', '', '', '', '', 1),
(2, 'Летние интенсивные курсы английского 2', 'Эффективный курс для тех, кто стремится восстановить и пополнить свой словарный запас в повседневных жизненных ситуациях.\r\nЭтот курс для Вас, если Вы:\r\n•    изучали английский раньше, но Вам не хватает практики;\r\n•    чувствуете, что Вы знаете много правил, но не можете использовать их в речи;\r\n•    просто хотите разговориться, чтобы приступить к обучению с более высокого уровня;\r\n•    планируете отпуск за границей и хотите обновиться разговорные навыки.\r\nВремя занятий: 8:00, 10:00, 13:00, 15:30, 19:00.\r\nПродолжительность 1 занятия: 90 м.\r\nСрок обучения — две недели, ежедневно кроме субботы и воскресения.\r\nСтоимость курса: 1600 грн.\r\nГруппы стартую каждую неделю с 30 мая 2016 года.\r\nДля всех действующих и бывших клиентов нашей школы — скидка 10%! Также на летние интенсивы распространяется наш социальный проект по случаю Года английского языка в Украине — 25% скидки всем студентам стационара', 1220248397, '0', 'Летние интенсивные курсы английского RU', 'Летние интенсивные курсы английского EN', '', '', '', '', '', '', '', '', 0),
(3, 'Летние интенсивные курсы английского 3 ', 'Эффективный курс для тех, кто стремится восстановить и пополнить свой словарный запас в повседневных жизненных ситуациях.\r\nЭтот курс для Вас, если Вы:\r\n•    изучали английский раньше, но Вам не хватает практики;\r\n•    чувствуете, что Вы знаете много правил, но не можете использовать их в речи;\r\n•    просто хотите разговориться, чтобы приступить к обучению с более высокого уровня;\r\n•    планируете отпуск за границей и хотите обновиться разговорные навыки.\r\nВремя занятий: 8:00, 10:00, 13:00, 15:30, 19:00.\r\nПродолжительность 1 занятия: 90 м.\r\nСрок обучения — две недели, ежедневно кроме субботы и воскресения.\r\nСтоимость курса: 1600 грн.\r\nГруппы стартую каждую неделю с 30 мая 2016 года.\r\nДля всех действующих и бывших клиентов нашей школы — скидка 10%! Также на летние интенсивы распространяется наш социальный проект по случаю Года английского языка в Украине — 25% скидки всем студентам стационара', 1420248397, '0', 'Летние интенсивные курсы английского RU', 'Летние интенсивные курсы английского EN', '', '', '', '', '', '', '', '', 1),
(4, 'Летние интенсивные курсы английского 4', 'Эффективный курс для тех, кто стремится восстановить и пополнить свой словарный запас в повседневных жизненных ситуациях.\r\nЭтот курс для Вас, если Вы:\r\n•    изучали английский раньше, но Вам не хватает практики;\r\n•    чувствуете, что Вы знаете много правил, но не можете использовать их в речи;\r\n•    просто хотите разговориться, чтобы приступить к обучению с более высокого уровня;\r\n•    планируете отпуск за границей и хотите обновиться разговорные навыки.\r\nВремя занятий: 8:00, 10:00, 13:00, 15:30, 19:00.\r\nПродолжительность 1 занятия: 90 м.\r\nСрок обучения — две недели, ежедневно кроме субботы и воскресения.\r\nСтоимость курса: 1600 грн.\r\nГруппы стартую каждую неделю с 30 мая 2016 года.\r\nДля всех действующих и бывших клиентов нашей школы — скидка 10%! Также на летние интенсивы распространяется наш социальный проект по случаю Года английского языка в Украине — 25% скидки всем студентам стационара', 1120248397, '0', 'Летние интенсивные курсы английского RU', 'Летние интенсивные курсы английского EN', '', '', '', '', '', '', '', '', 1);

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
-- Структура таблицы `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
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
(2, 'adult', 'АННА МОГИЛЕВА', 'temp.jpg', 'АННА\nМОГИЛЕВА_RU', 'АННА\nМОГИЛЕВА_EN', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_RU', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_EN', ''),
(3, 'adult', 'Петровіч', 'temp.jpg', 'Петрович', 'Petrovich', 'Супір', 'Супер', 'Super', ''),
(4, 'childrencorporatedelta', '', '', '', '', '', '', '', 'https://www.youtube.com/embed/pJi8EM2tuOY'),
(5, 'delta', 'ПетровічDelta', 'temp.jpg', 'Петрович', 'Petrovich', 'Супір', 'Супер', 'Super', ''),
(6, 'corporate', 'АННА\nМОГИЛЕВА', 'temp.jpg', 'АННА\nМОГИЛЕВА_RU', 'АННА\nМОГИЛЕВА_EN', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_RU', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_EN', ''),
(7, 'corporate', 'АНДРЕЙ\r\nЗОТОВ', 'temp.jpg', 'АНДРЕЙ\r\nЗОТОВ_RU', 'АНДРЕЙ\r\nЗОТОВ_EN', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_RU', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_EN', ''),
(8, 'corporate', 'ИГОРЬ\r\nБЕЛЯВСКИЙ', 'temp.jpg', 'ИГОРЬ\r\nБЕЛЯВСКИЙ_RU', 'ИГОРЬ\r\nБЕЛЯВСКИЙ_EN', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_RU', 'Если вы, как и я, не могли долгие годы «найти время» для изучения английского, ilcentre – это прекрасное начало, чтобы сдвинуться с мертвой точки. Методики интенсивные, понятные и интересные. Поэтому за короткий срок вы получаете отличный результат. Всего за 4 месяца я освежила в голове полученные в школьные годы знания, пополнила словарный запас, научилась грамотно строить свою речь и свободно разговариваю в группах практически на любые темы. Спасибо ilcentre за прекрасную возможность снова почувствовать себя студентом!_EN', '');

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
-- Структура таблицы `study`
--

CREATE TABLE IF NOT EXISTS `study` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `text` text,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `backgroundimg` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `study`
--

INSERT INTO `study` (`id`, `title`, `text`, `keywords`, `description`, `backgroundimg`, `symbol`, `title_ru`, `title_en`, `text_ru`, `text_en`, `keywords_ru`, `keywords_en`, `description_ru`, `description_en`) VALUES
(1, 'Расписания', 'Расписания', 'Расписание', 'История', '', 'schedule', 'Расписания RU', 'Расписания EN', '', '', '', '', '', ''),
(2, 'Академический календарь', 'Академический календарь', 'Академический календарь', 'Академический календарь', '', 'academic', '', '', '', '', '', '', '', ''),
(3, 'Методика и формы обучения', 'Методика и формы обучения', 'Методика и формы обучения', 'Методика и формы обучения', '', 'methods', '', '', '', '', '', '', '', ''),
(4, 'Уровни языка', 'Уровни языка', 'Уровни языка', 'Уровни языка', '', 'levels', '', '', '', '', '', '', '', ''),
(5, 'Правила обучения', 'Правила обучения', 'Правила обучения', 'Правила обучения', '', 'rules', '', '', '', '', '', '', '', ''),
(6, 'Программа лояльности', 'Программа лояльности', 'Программа лояльности', 'Программа лояльности', '', 'loyalty', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `trainings`
--

CREATE TABLE IF NOT EXISTS `trainings` (
  `id` int(11) NOT NULL,
  `title` varchar(254) NOT NULL,
  `anons` text,
  `text` text,
  `date` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rightcol` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `backgroundimg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `show_detail` tinyint(4) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `anons_ru` varchar(255) NOT NULL,
  `anons_en` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL,
  `date_ru` varchar(255) NOT NULL,
  `date_en` varchar(255) NOT NULL,
  `keywords_ru` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description_ru` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `rightcol_ru` varchar(255) NOT NULL,
  `rightcol_en` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `anons`, `text`, `date`, `keywords`, `description`, `rightcol`, `price`, `parent_id`, `backgroundimg`, `img`, `show_detail`, `symbol`, `title_ru`, `title_en`, `anons_ru`, `anons_en`, `text_ru`, `text_en`, `date_ru`, `date_en`, `keywords_ru`, `keywords_en`, `description_ru`, `description_en`, `rightcol_ru`, `rightcol_en`) VALUES
(1, 'Тренинги для преподавателей', 'International Language Centre предлагает курсы английского языка в Киеве для детей разных возрастных групп (4–17 лет). Интерактивный подход, многолетний опыт работы, а также отсутствие прямого перевода превращают обучение в удовольствие и гарантируют быстрый результат.', '', '', 'bla bla ', 'description', '', '', 0, 'bg.img', '', 0, 'tutors', 'Тренинги для преподавателей RU', 'Тренинги для преподавателей EN ', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Курс для преподавателей Delta', 'Месячный курс (120 часов) с отрывом от основного места работы, ориентированный на преподавателей английского языка как иностранного без достаточного опыта преподавания, признается образовательными организациями во всем мире. По окончании выдается сертификат Кембриджского университета.', '', 'Даты проведения курса 15.06.2016–07.08.2016', '', '', '', '', 0, '', '', 1, 'delta', 'Курс для преподавателей Delta RU', 'Курс для преподавателей Delta EN', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', 'Подготовка к экзамену (delta module1)', '', '', '', '', '', '', 2, '', '', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', 'Тренинговый курс\r\n(delta module2)', '', '', '', '', '', '', 2, '', '', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', 'Курсовая работа\r\n(delta module3)', '', '', '', '', '', '', 2, '', '', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Курс для преподавателей Celta', 'Месячный курс (120 часов) с отрывом от основного места работы, ориентированный на преподавателей английского языка как иностранного без достаточного опыта преподавания, признается образовательными организациями во всем мире. По окончании выдается сертификат Кембриджского университета.', '', 'CELTA dates in 2015–2016 full-time 18.01.16 – 12.02.16 06.06.16 – 01.07.16 04.07.16 – 29.07.16 04.07.16 – 29.07.16 01.08.16 – 26.08.16 part-time 15.01.16 – 09.04.16 16.09.16 – 12.12.16', '', '', 'Для кого этот курс Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль — 16 часов.', '1499', 0, '', '', 1, 'celta', 'Курс для преподавателей Celta RU', 'Курс для преподавателей Celta EN', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Курсы CELT-C', 'Кембриджские сертификаты, которые получают кандидаты, успешно сдавшие экзамен, признаются многочисленным международными университетами, компаниями и образовательными учреждениями', '', '', '', '', '', '', 0, '', '', 1, 'celt_c', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'Курсы CELT-P', 'CELT-P – новый Кембриджский курс, который состоит из онлайн-модулей, оффлайн-семинаров и практических занятий. Курс направлен на преподавателей, работающих с детьми младшего школьного возраста (6-12 лет) и желающих улучшить свои профессиональные умения и навыки.', '', '', '', '', '', '', 0, '', '', 1, 'celt_p', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'ДРУГИЕ ТРЕНИНГИ ДЛЯ ПРЕПОДАВАТЕЛЕЙ', '', '', '', '', '', '', '', 0, '', '', 0, 'other', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', 'Однодневные семинары-тренинги', 'Семинары  по коммуникативной методике преподавания английского языка для учителей, не имеющих сертификатов IHC / CELTA', 'Расписание ближайших однодневных семинаров 20.05.2016 16.00–17.10 Лавренчук В.И.', '', '', 'Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль —\n16 часов.', '1499', 9, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', 'Тренинги на территории заказчиков', 'Двухдневные семинары выходного дня для учителей, не имеющих сертификатов IHC / CELTA.    Курс состоит из 6 часов интерактивных занятий (элементы практики включены). Рассчитан курс на группу из 4–6 человек. Стоимость участия для одного человека: 800 грн. Язык проведения семинара — английский. Дата начала курса зависит от комплектации группы. Курс проводится на территории заказчика. Дату начала курса выбирает заказчик. Записаться Записаться Семинары по коммуникативной методике преподавания английского языка для учителей, не имеющих сертификатов IHC / CELTA. Цель семинаров: теоретическое обоснование применения коммуникативной методики преподавания английского языка, а также идеи использования методики в ежедневной практике. Для участия в семинаре приглашаются преподаватели английского языка государственных и частных учебных заведений.', '', '', '', 'Для кого этот курс\nТренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль —\n16 часов.', '1499', 9, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Модульные курсы для преподавателей', 'Курс предусматривает как изучение собственно языка (грамматика, обогащение словарного запаса и т.д.), так и углубление знаний по методологии (в частности, правильное использование учебника в учебном процессе, развитие методологии коммуникативного подхода к обучению, а также ознакомление со вспомогательными ресурсами, которые позволят более эффективно использовать многие виды задач из учебника).', 'Курс предусматривает как изучение собственно языка (грамматика, обогащение словарного запаса и т.д.), так и углубление знаний по методологии (в частности, правильное использование учебника в учебном процессе, развитие методологии коммуникативного подхода к обучению, а также ознакомление со вспомогательными ресурсами, которые позволят более эффективно использовать многие виды задач из учебника).', '', '', '', 'Тренинги рассчитаны на слушателей уровней Intermediate / Upper-Intermediate / Advanced. Один модуль —\r\n16 часов.', '1499', 0, '', '', 1, 'modul', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', 'Модуль 1: Общий английский и методология преподавания теории и функций английской грамматики', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы.\nСертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении.\nЕсли вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', 'Даты проведения курса 12.03.16–09.04.16', '', '', '', '', 12, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '', 'Модуль 2: Общий английский и методология преподавания навыков сприйняття', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', 'Даты проведения курса 12.03.16–09.04.16', '', '', '', '', 12, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '', 'Модуль 3: Общий английский и методология преподавания навыков воспроизведения.', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', 'Даты проведения курса\r\n12.03.16–09.04.16', '', '', '', '', 12, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '', 'Модуль 4: Методология преподавания в детских группах.', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', 'Даты проведения курса\r\n12.03.16–09.04.16', '', '', '', '', 12, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', 'Модуль 5: Методология экзаменационной подготовки.', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', 'Даты проведения курса\r\n12.03.16–09.04.16', '', '', '', '', 12, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', 'Модуль 6: Особенности работы в языковых лагерях.', 'Рассчитан на кандидатов, владеющих английским на среднем уровне и готовящихся к карьере в области бизнеса. Данный экзамен приравнивается к экзамену PET и соответствует уровню В1 по шкале Совета Европы. Сертификат BEC Preliminary доказывает работодателям, что вы владеете бизнес английским на среднем уровне (Intermediate) и имеете достаточный уровень владения языком для ежедневного общения в бизнес окружении. Если вы сдали экзамен с оценкой А, вы получаете сертификат ВЕС Vantage, что свидетельствует о вашем владении языком на уровне В2', 'Даты проведения курса\r\n12.03.16–09.04.16', '', '', '', '', 12, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `begintest`
--
ALTER TABLE `begintest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `formstudy`
--
ALTER TABLE `formstudy`
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
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stepstest`
--
ALTER TABLE `stepstest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `begintest`
--
ALTER TABLE `begintest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `formstudy`
--
ALTER TABLE `formstudy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `stepstest`
--
ALTER TABLE `stepstest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `study`
--
ALTER TABLE `study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
