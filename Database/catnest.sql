-- MySQL dump 10.19  Distrib 10.3.38-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: catnest
-- ------------------------------------------------------
-- Server version	10.3.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addres`
--

DROP TABLE IF EXISTS `addres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addres` (
  `Keya` int(11) NOT NULL AUTO_INCREMENT,
  `Deliveryk` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Nomdep` int(11) NOT NULL,
  PRIMARY KEY (`Keya`),
  KEY `Deliveryk` (`Deliveryk`),
  CONSTRAINT `addres_ibfk_1` FOREIGN KEY (`Deliveryk`) REFERENCES `delivery` (`keyd`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addres`
--

LOCK TABLES `addres` WRITE;
/*!40000 ALTER TABLE `addres` DISABLE KEYS */;
INSERT INTO `addres` VALUES (1,1,'Кривий Ріг','вулиця Магістральна, 25',10),(2,1,'Кривий Ріг','вулиця Кропивницького, 29в',3),(3,2,'Кривий Ріг','вулиця Котляревського, 15',48),(4,2,'Кривий Ріг','бульвар Європейський, 2А',38),(5,3,'Кривий Ріг','вулиця Тбіліська, 4',563),(6,3,'Кривий Ріг','вулиця Героїв АТО, 30А',299);
/*!40000 ALTER TABLE `addres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `author` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (1,'Карлос Руїс Зафон'),(2,'Сара Дж. Маас'),(3,'Міхай Чіксентміхайі'),(4,'Джоан Роулінг'),(5,'Маргарет Атвуд'),(6,'Н. Морґан'),(7,'Ганс Христіан Андерсен'),(8,' Роберт Клантен'),(9,' Jojo Moyes'),(10,'Stephen King'),(11,'Guy De Maupassant,'),(12,'Ольга Максимчук'),(13,'Julius Tröger'),(14,'Агата Кристи');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientreg`
--

DROP TABLE IF EXISTS `clientreg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientreg` (
  `Nom` int(11) NOT NULL AUTO_INCREMENT,
  `NameC` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `loyalty` tinyint(1) NOT NULL DEFAULT 0,
  `discontAmout` int(11) DEFAULT NULL,
  `id_logpass` int(11) DEFAULT NULL,
  PRIMARY KEY (`Nom`),
  KEY `id_logpass` (`id_logpass`),
  CONSTRAINT `clientreg_ibfk_1` FOREIGN KEY (`id_logpass`) REFERENCES `logpas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientreg`
--

LOCK TABLES `clientreg` WRITE;
/*!40000 ALTER TABLE `clientreg` DISABLE KEYS */;
INSERT INTO `clientreg` VALUES (1,'Ковальчук','Олександр','0501234789','d1pst1ckoff@gmail.com','2023-06-04',0,NULL,1),(2,'Вадим','Бризгалов','380985843622','vadyknyfy@gmail.com','2023-06-05',0,NULL,2);
/*!40000 ALTER TABLE `clientreg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cover`
--

DROP TABLE IF EXISTS `cover`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cover` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`num`),
  UNIQUE KEY `Nom` (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cover`
--

LOCK TABLES `cover` WRITE;
/*!40000 ALTER TABLE `cover` DISABLE KEYS */;
INSERT INTO `cover` VALUES (1,'Тверда'),(2,'М\'яка');
/*!40000 ALTER TABLE `cover` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery` (
  `keyd` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`keyd`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery`
--

LOCK TABLES `delivery` WRITE;
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` VALUES (1,'Нова пошта',50,'каіаіваі'),(2,'Укр Пошта',0,'Задарма'),(3,'Justin',50,'justin');
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edition`
--

DROP TABLE IF EXISTS `edition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edition` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edition`
--

LOCK TABLES `edition` WRITE;
/*!40000 ALTER TABLE `edition` DISABLE KEYS */;
INSERT INTO `edition` VALUES (1,'Альфредо'),(2,'Bloomsbury Publishing'),(3,'Ранок'),(4,'А-БА-БА-ГА-ЛА-МА-ГА'),(5,'Клуб Сімейного Дозвілля'),(6,'Видавництво Старого Лева'),(7,'Перо'),(8,'Gestalten'),(9,'Rowohlt'),(10,'Hodder & Stoughton '),(11,'POCKET');
/*!40000 ALTER TABLE `edition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `Nom` int(11) NOT NULL AUTO_INCREMENT,
  `NameE` varchar(50) NOT NULL,
  `Rights` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_logpass` int(11) NOT NULL,
  PRIMARY KEY (`Nom`),
  KEY `id_logpass` (`id_logpass`),
  KEY `Rights` (`Rights`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`id_logpass`) REFERENCES `logpass` (`Keylp`),
  CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`Rights`) REFERENCES `rights` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Виктор Шабов Андреевич',2,'0985843622','shabanow@example.com',1),(2,'Александра Кашун Викторовна',1,'099329179','kashun@example.com',2);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `Nom` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `edition` int(10) NOT NULL,
  `img` varchar(100) NOT NULL,
  `authorC` int(11) NOT NULL,
  `price` float NOT NULL,
  `language` int(10) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `pages` int(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `cover` int(10) NOT NULL,
  `about` varchar(1001) DEFAULT NULL,
  `createYear` int(4) NOT NULL,
  `rating` int(4) NOT NULL DEFAULT 0,
  `addedDate` date NOT NULL,
  `addEmp` int(11) DEFAULT NULL,
  PRIMARY KEY (`Nom`),
  KEY `authorC` (`authorC`),
  KEY `addEmp` (`addEmp`),
  KEY `type` (`type`),
  KEY `edition` (`edition`),
  KEY `language` (`language`),
  KEY `cover` (`cover`),
  CONSTRAINT `item_ibfk_1` FOREIGN KEY (`addEmp`) REFERENCES `employees` (`Nom`),
  CONSTRAINT `item_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type` (`num`),
  CONSTRAINT `item_ibfk_3` FOREIGN KEY (`authorC`) REFERENCES `author` (`num`),
  CONSTRAINT `item_ibfk_4` FOREIGN KEY (`edition`) REFERENCES `edition` (`num`),
  CONSTRAINT `item_ibfk_5` FOREIGN KEY (`language`) REFERENCES `language` (`num`),
  CONSTRAINT `item_ibfk_6` FOREIGN KEY (`cover`) REFERENCES `cover` (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'Тіні вітру',1,1,'b1.jpg',1,500,1,0,400,'16+',1,'\"Тіні вітру\" - це захоплююча історія про книгу, що володіє магічною силою, та її вплив на головного героя Даніеля. Він розкриває таємницю та інтриги, пов\'язані з таємничим письменником Хуліо Караксом. Це темна, емоційна історія, що перенесе читача у заплутані лабіринти книжкового світу.',2022,0,'2023-05-03',1),(2,'Скляний трон',1,2,'b2.jpg',2,600,1,0,432,'16+',2,' \"Скляний трон\" розповідає про молоду воїнку, яка вступає в смертельну боротьбу за королівський трон. Це захоплююча фентезі-сага про любов, зраду та владу, що вкрай зацікавить шанувальників жанру.',2012,99,'2023-05-29',1),(3,'Поток: Психологія оптимального досвіду',3,3,'b3.jpg',3,500,1,0,336,'18+',2,' \"Поток\" пропонує концепцію оптимального досвіду, коли людина повністю поглинена своєю діяльністю і відчуває справжнє задоволення від життя. Ця книга надає інструменти та стратегії для досягнення потокового стану в різних сферах життя.',1990,90,'2023-05-29',1),(4,'Гаррі Поттер і філософський камінь',4,4,'b4.jpg',4,320,1,0,319,'9+',1,'\"Гаррі Поттер і Філософський камінь\" розповідає про захоплюючі пригоди юного чарівника Гаррі Поттера у школі чарівництва та чаклунства Хогвартс. Ця серія книг стала світовим бестселером та покорила серця мільйонів читачів усього світу.',2012,0,'2023-05-29',1),(5,'Рік Потопу',1,5,'b5.jpg',5,500,1,0,480,'16+',1,'Адам Перший, лідер Божих Садівників, провістив Безводний Потоп, Божу кару, що має знищити людство. Разом зі своїми прибічниками він з останніх сил намагається врятувати цей приречений світ. Тут панує Корпорація, облаштовують свої ниці оборудки безпринципні КорпБеКошники та корумпована влада, розквітає буйним цвітом генна інженерія, а природа й навіть сама людина стає конструктором, у якому заввиграшки можна змінити будь-яку деталь. Цей світ надто самовпевнений...\r\nІ от пророцтво збулося. Серед тих небагатьох, хто вижив після катастрофи, дві жінки — Рен, молода танцівниця закритого елітного клубу, і Тобі, одна з Божих Садівниць. А чи врятувалися інші? Друзі, рідні, кохані? І що, як загибель не гірша за перспективу життя у світі після Потопу? Кожен шукає і знаходить свої відповіді.',2021,0,'2023-05-29',1),(6,'Javascript для дітей...',4,6,'b6.jpg',6,345,1,0,372,'12+',1,'«JavaScript для дітей» — веселий посібник, вступ до основ програмування, із яким ви крок за кроком опануєте роботу з рядками, масивами та циклами, інструментами DOM та jQuery та елементом canvas для малювання графіки. Ви зможете писати та модифікувати HTML-елементи для створення динамічних веб-сторінок та напишете класні онлайн ігри «Знайди захований скарб», «Шибениця» та «Змійка». У цій книжці — безліч цікавих прикладів та кумедних ілюстрацій, а завдання з програмування наприкінці кожного розділу, надихнуть на створення власних приголомшливих програм. Утнімо щось крутецьке із JavaScript!',2019,50,'2023-05-29',1),(7,'Дюймовочка',4,7,'b7.jpg',7,70,1,0,48,'0+',1,'До збірки увійшли казки Ганса Крістіана Андерсона, які знають і люблять усі діти. З цими казками виросло вже кілька поколінь юних читачів, які зараз уже стали дідусями і бабусями, матусями і татусями. Прочитайте їх малюкам, і ці чудові казки неодмінно стануть улюбленими і назавжди залишаться у їхній пам’яті. ',2015,0,'2023-05-29',1),(8,'Small Homes, Grand Living: Interior Design for Compact Spaces ',3,8,'b8.jpg',8,1000,2,0,256,'16+',1,'As more people across the globe move into cities, living space becomes a precious commodity. Designers, architects, and innovative inhabitants seek new ways of creating a home that is just as comfortable as it is functional and attractive. Where does one stow clothing, bicycles, suitcases, or bed linens? Where is the perfect place for the desk, bed, or couch? How does one use less square meters more effectively? And can one family live in a one-room flat? This book explores design concepts and provides solutions to diminutive domiciles. ',2017,0,'2023-05-29',1),(9,'Wie ein Leuchten in tiefer Nacht',1,9,'b9.jpg',9,400,3,0,544,'18+',1,'Der große neue Roman der Bestsellerautorin. Eine Feier des Lesens und der Freundschaft. Eine große Liebesgeschichte. Ein Buch, das Mut macht.\r\n\r\n1937: Hals über Kopf folgt die Engländerin Alice ihrem Verlobten Bennett nach Amerika. Doch anstatt im Land der unbegrenzten Möglichkeiten findet sie sich in Baileyville wieder, einem Nest in den Bergen Kentuckys. Mächtigster Mann ist der tyrannische Minenbesitzer Geoffrey Van Cleve, ihr Schwiegervater, unter dessen Dach sie leben muss.\r\nNeuen Lebensmut schöpft Alice erst, als sie sich den Frauen der Packhorse Library anschließt, einer der Bibliotheken auf dem Lande, die auf Initiative von Eleanor Roosevelt gegründet wurden. Wer zu krank oder zu alt ist, dem bringen die Frauen die Bücher nach Hause. Tag für Tag reiten sie auf schwer bepackten Pferden in die Berge.\r\nAlice liebt ihre Aufgabe, die wilde Natur und deren Bewohner. Und sie fasst den Mut, ihren eigenen Weg zu gehen. Gegen alle Widerstände.\r\n',2019,0,'2023-05-29',1),(10,'IT',1,10,'b10.jpg',10,500,2,0,1392,'18+',1,'NOW A MAJOR MOTION PICTURE - Stephen King\'s terrifying classic.\r\n\r\n\'They float...and when you\'re down here with me, you\'ll float, too.\'\r\n\r\nDerry, Maine is just an ordinary town: familiar, well-ordered for the most part, a good place to live.\r\n\r\nIt is a group of children who see - and feel - what makes Derry so horribly different. In the storm drains, in the sewers, IT lurks, taking on the shape of every nightmare, each one\'s deepest dread. Sometimes is appears as an evil clown named Pennywise and sometimes IT reaches up, seizing, tearing, killing . . .\r\n\r\nTime passes and the children grow up, move away and forget. Until they are called back, once more to confront IT as IT stirs and coils in the sullen depths of their memories, emerging again to make their past nightmares a terrible present reality.\r\n',2011,0,'2023-05-29',1),(11,'Boule de Suif. Mademoiselle Fifi',1,11,'b11.jpg',11,200,4,0,112,'18+',2,'La guerre de 1870 avec ses images de honte et d\'horreur interrompt une vie que Maupassant dédiait aux plaisirs. C\'est \"l\'année terrible\". Il voit tout, enregistre tout. Boule de Suif en témoignera. Pendant l\'occupation, un groupe de bourgeois, deux religieuses et un républicain prennent une diligence pour Dieppe. La présence parmi eux d\'une grosse prostituée les dégoûte. A la halte de l\'auberge, un officier allemand menace de stopper le convoi tant que la fille n\'aura pas couché avec lui.\r\nLa mort dans l\'âme, elle se soumet... Ce récit rend Maupassant célèbre. Fou de joie, Flaubert écrit: \"C\'est un chef-d\'oeuvre de composition, de comique, d\'observation\".\r\n',2018,75,'2023-05-29',1),(12,'Світ у вулкані. Срібний і червоний',4,6,'b12.jpg',12,200,1,0,304,'9+',1,'Марко і Сонька Бруми — звичайні третьокласники, які навіть не підозрюють, що незабаром у їхньому житті з’явиться великий білий птах. На його крилах вони помандрують у ней­мовірну пригоду. Близнюків чекає жерло прадавнього вулкана, загадкова країна Кремантура, зустріч з моторошними Сірими і великі таємниці минулого.\r\n\r\nЦе історія про великий двобій зі страшною Яммою — місцем, яке хоче знищити цей світ. Хто з персонажів виявиться зрадником? Хто загине? Хто виживе? Три різні пригоди сплітаються в одну-єдину історію боротьби Добра і Зла тривалістю в тисячоліття. І до останньої сторінки не відомо, хто переможе.\r\n\r\n«Срібний і червоний» — перша книга із дилогії «Світ у вулкані».\r\n',2021,0,'2023-05-29',1),(13,'1000 Kilometer Deutschland',1,9,'b13.jpg',13,440,3,0,224,'16+',2,'Julius Tröger fährt mit dem ICE einmal quer durch die Republik: von Berlin über Leipzig und Frankfurt am Main nach München. Entlang der Gleise sammelt er Daten über Land und Leute und präsentiert sie in Grafiken und Karten: Wie groß sind die Unterschiede bei Einkommen und Wahlverhalten? Woher kommen die meisten Olympiasieger, und wo werden die meisten Patente angemeldet? Welche Nachnamen sind am häufigsten, und wo fahren die meisten Cabrios? Stimmen die Klischees über Stadt und Land, Nord und Süd, Ost und West? Eine informative, originelle Vermessung Deutschlands.',2018,90,'2023-05-29',1),(14,'Кишеня, повна жита',1,5,'b14.jpg',14,200,1,0,288,'16+',1,'Мотиви таємничих убивств у домі з загадковою назвою \"Тисова хатина\", виявляється, треба шукати… в дитячій пісеньці про дроздів! І якби не міс Марпл, інспектор Скотленд-Ярду Ніл та вся лондонська поліція ніколи б не збагнули, навіщо злочинець підкладав у кімнату та в їжу відомого бізнесмена мертвих птахів, а отруївши, набив його кишені зернятками жита, навіщо потім \"прибрав\" його молоду дружину та навіть служницю… ',2023,0,'2023-05-29',1);
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `num` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (1,'Українська'),(2,'Англійська'),(3,'Німецька'),(4,'Французька');
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logpas`
--

DROP TABLE IF EXISTS `logpas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logpas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hash_pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logpas`
--

LOCK TABLES `logpas` WRITE;
/*!40000 ALTER TABLE `logpas` DISABLE KEYS */;
INSERT INTO `logpas` VALUES (1,'d1pst1ckoff@gmail.com','123456','e0YUNALxwv'),(2,'vadyknyfy@gmail.com','64merofo','yDpV6Qizok');
/*!40000 ALTER TABLE `logpas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logpass`
--

DROP TABLE IF EXISTS `logpass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logpass` (
  `Keylp` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hash_pass` varchar(10) NOT NULL,
  PRIMARY KEY (`Keylp`),
  KEY `Keylp` (`Keylp`),
  KEY `Keylp_2` (`Keylp`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logpass`
--

LOCK TABLES `logpass` WRITE;
/*!40000 ALTER TABLE `logpass` DISABLE KEYS */;
INSERT INTO `logpass` VALUES (1,'admin1','1','MybPSTY7VW'),(2,'admin2','2','0sblifWFK6');
/*!40000 ALTER TABLE `logpass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderlistitem`
--

DROP TABLE IF EXISTS `orderlistitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderlistitem` (
  `num` int(10) NOT NULL,
  `NumI` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  KEY `num` (`num`),
  KEY `NumI` (`NumI`),
  CONSTRAINT `orderlistitem_ibfk_1` FOREIGN KEY (`num`) REFERENCES `orders` (`Nom`),
  CONSTRAINT `orderlistitem_ibfk_2` FOREIGN KEY (`NumI`) REFERENCES `item` (`Nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderlistitem`
--

LOCK TABLES `orderlistitem` WRITE;
/*!40000 ALTER TABLE `orderlistitem` DISABLE KEYS */;
INSERT INTO `orderlistitem` VALUES (1,1,1),(1,2,1),(1,3,1),(1,6,1),(1,7,7),(1,13,1),(2,1,1),(2,4,1),(2,5,1),(2,6,1),(2,10,7),(2,14,1),(3,1,1),(3,2,1),(3,3,1),(3,6,1),(3,7,7),(3,13,1),(4,9,3),(4,11,3),(5,2,1),(5,4,1),(5,12,1),(7,2,4),(7,7,1),(7,13,1),(8,2,1),(8,3,1),(9,11,1),(10,1,1),(10,12,3),(11,1,1),(11,7,1),(11,11,1),(11,12,3),(11,13,1),(12,1,1),(13,1,1),(14,1,1),(15,1,1),(15,7,1),(15,10,1),(15,11,1),(15,12,3),(15,13,1),(16,1,1),(16,7,1),(16,10,1),(16,11,1),(16,12,3),(16,13,1),(17,1,1),(17,7,1),(17,10,1),(17,11,1),(17,12,3),(17,13,1),(18,6,1);
/*!40000 ALTER TABLE `orderlistitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `Nom` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `csurname` varchar(100) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cphone` varchar(30) NOT NULL,
  `dregion` varchar(40) NOT NULL,
  `dcity` varchar(255) NOT NULL,
  `dwarehouse` varchar(500) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `employeerCode` int(10) DEFAULT NULL,
  PRIMARY KEY (`Nom`),
  KEY `status` (`status`),
  KEY `employeerCode` (`employeerCode`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`num`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`employeerCode`) REFERENCES `employees` (`Nom`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'івфвіа','віаіва','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Аполлонівка','Пункт приймання-видачі (до 30 кг): вул. Юбкіна, 59а',1,NULL),(2,'dasdas','dasdas','123@dd.dd','+380501111111','Тернопільська','Білявинці','Пункт приймання - видачі (до 30 кг): вул. Горішня, 21',1,NULL),(3,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Кривий Ріг','Відділення №10 (до 30 кг на одне місце): вул. Магістральна (ран. Кириленка), 25',1,NULL),(4,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Київська','Бориспіль','Відділення №6 (до 30 кг): вул. Привокзальна, 2А',1,NULL),(5,'Кирило','Перехрест','nic114466@gmail.com','0678280809','Дніпропетровська','Кривий Ріг','Відділення №37 (до 30 кг на одне місце): мкрн. 5-й Зарічний, 61В',1,NULL),(6,'123','123','123@gmail.com','0501231231','Київська','Берестянка','Пункт приймання-видачі (до 30 кг): пров. Заводський, 1а',1,NULL),(7,'Ковальчук','Олександр','d1pst1ckoff@gmail.com','0501234789','Дніпропетровська','Кривий Ріг','Відділення №12 (до 30 кг на одне місце): просп. Південний, 17, прим. 81',1,NULL),(8,'Олександра ','Гава','youhwo1999@gmail.com','0964554706','Житомирська','Більківці','Пункт приймання - видачі ( до 30 кг): вул. Центральна 35а',1,NULL),(9,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Кривий Ріг','Відділення №3 (до 30 кг на одне місце): вул. Кропивницького, 29в',1,NULL),(10,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Личкове','Відділення №1: вул. Партизанська, 115',1,NULL),(11,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Соколівка (Дніпропетровська обл.)','Пункт приймання-видачі (до 30 кг): вул. Гвоздовського,6',1,NULL),(12,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Кривий Ріг','Відділення №3 (до 30 кг на одне місце): вул. Кропивницького, 29в',1,NULL),(13,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Кривий Ріг','Відділення №3 (до 30 кг на одне місце): вул. Кропивницького, 29в',1,NULL),(14,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Кривий Ріг','Відділення №3 (до 30 кг на одне місце): вул. Кропивницького, 29в',1,NULL),(15,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Кривий Ріг','Відділення №3 (до 30 кг на одне місце): вул. Кропивницького, 29в',1,NULL),(16,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Кривий Ріг','Відділення №3 (до 30 кг на одне місце): вул. Кропивницького, 29в',1,NULL),(17,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Кривий Ріг','Відділення №10 (до 30 кг на одне місце): вул. Магістральна (ран. Кириленка), 25',1,NULL),(18,'Вадим','Бризгалов','vadyknyfy@gmail.com','380985843622','Дніпропетровська','Могилів','Відділення №1: вул. Панікахи, 4',1,NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prom`
--

DROP TABLE IF EXISTS `prom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prom` (
  `nom_item` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  UNIQUE KEY `nom_item_2` (`nom_item`),
  KEY `nom_item` (`nom_item`),
  CONSTRAINT `prom_ibfk_1` FOREIGN KEY (`nom_item`) REFERENCES `item` (`Nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prom`
--

LOCK TABLES `prom` WRITE;
/*!40000 ALTER TABLE `prom` DISABLE KEYS */;
INSERT INTO `prom` VALUES (2,400);
/*!40000 ALTER TABLE `prom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rights`
--

DROP TABLE IF EXISTS `rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rights`
--

LOCK TABLES `rights` WRITE;
/*!40000 ALTER TABLE `rights` DISABLE KEYS */;
INSERT INTO `rights` VALUES (1,'admin'),(2,'manager');
/*!40000 ALTER TABLE `rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `security`
--

DROP TABLE IF EXISTS `security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `security` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `securitycode` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `security`
--

LOCK TABLES `security` WRITE;
/*!40000 ALTER TABLE `security` DISABLE KEYS */;
INSERT INTO `security` VALUES (1,'yAu0GUB23ak1Z9qQnQcc');
/*!40000 ALTER TABLE `security` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `num` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'waiting'),(2,'processing'),(3,'canceled'),(4,'accepted'),(5,'waitingT2'),(6,'waitingT3');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_reg`
--

DROP TABLE IF EXISTS `temp_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_reg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `endtime` time(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_reg`
--

LOCK TABLES `temp_reg` WRITE;
/*!40000 ALTER TABLE `temp_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'Художня література'),(2,'Освітня література'),(3,'Саморозвиток'),(4,'Дитяча');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-06 11:52:14
