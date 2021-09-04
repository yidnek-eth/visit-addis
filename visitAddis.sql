-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2021 at 02:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitAddis`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `carrier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `username`, `email`, `password`, `carrier`) VALUES
(3, 'testfromadmin', 'testfromadmin@gmail.com', '$2y$10$jLWCE0zoyrVwKo0VkaiuBeiRfJcAItg9cHNmB.EK9pHQVUXwp5lni', 'Site Manager'),
(4, 'tourguideTest', 'tourguideTest@g.com', '$2y$10$JmhIxkGjJaQ9q87pwu05fuSxzE28FbqDoFd8QNNNL6YyRA9Obg0Oa', 'Tour Guide'),
(5, 'attendantTest', 'attendantTest@c.com', '$2y$10$2M5vXpk5Y9l2DPqe1wJkCuy/RznQ7vgROhiXyuZN960teDaWBWC9i', 'Attendant'),
(6, 'attendantTest1', 'attendantTest1@cf.vn', '$2y$10$vV/toADp.a5.3Gqr03szjubKPnyJBF61hvYtinBmyx0nqOxiYa0Sa', 'Attendant'),
(7, 'Bekele', 'beke@bek.smu', '$2y$10$/CH4rfE2BKIhSQrbL7nMXuyT.KfKuHLgeLYWql9s44.ctdVEQLkWq', 'Attendant'),
(8, 'guide2', 'guide2@guide.com', '$2y$10$ZvgbfceHKytSxg07yFIuEObaD3.r5XkUsPe5F6pCqzyKU5SVLbE.i', 'Tour Guide');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `available` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `employee_id`, `ticket_id`, `available`) VALUES
(1, 4, 0, b'1'),
(2, 4, 0, b'1'),
(3, 4, 0, b'1'),
(4, 4, 0, b'1'),
(5, 4, 0, b'1'),
(6, 4, 0, b'1'),
(7, 4, 0, b'0'),
(8, 4, 0, b'0'),
(9, 4, 0, b'0'),
(10, 4, 0, b'0'),
(11, 4, 0, b'0'),
(12, 4, 0, b'0'),
(13, 4, 0, b'0'),
(14, 4, 0, b'0'),
(15, 4, 0, b'0'),
(16, 4, 0, b'0'),
(17, 4, 0, b'0'),
(18, 40, 0, b'1'),
(19, 4, 0, b'1'),
(20, 40, 0, b'1'),
(21, 8, 0, b'1'),
(22, 8, 0, b'1'),
(23, 18, 0, b'1'),
(24, 40, 0, b'1'),
(25, 40, 0, b'1'),
(26, 4, 0, b'1'),
(27, 4, 0, b'1'),
(28, 40, 0, b'1'),
(29, 4, 0, b'1'),
(30, 4, 0, b'1'),
(31, 4, 0, b'1'),
(32, 8, 0, b'1'),
(33, 4, 0, b'1'),
(34, 4, 4, b'1'),
(35, 4, 4, b'1'),
(36, 4, 4, b'1'),
(37, 29, 29, b'1'),
(38, 32, 32, b'1'),
(39, 32, 32, b'1'),
(40, 32, 32, b'1'),
(41, 32, 32, b'1'),
(42, 32, 32, b'1'),
(43, 8, 8, b'1'),
(44, 8, 8, b'1'),
(45, 4, 4, b'1'),
(46, 40, 40, b'1'),
(47, 40, 40, b'1'),
(48, 40, 40, b'1'),
(49, 29, 29, b'1'),
(50, 29, 29, b'1'),
(51, 29, 4, b'1'),
(52, 8, 38, b'1'),
(53, 4, 40, b'1'),
(54, 8, 37, b'1'),
(55, 8, 46, b'1'),
(56, 4, 46, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `guide_id`, `user_name`, `user_email`, `site_name`, `description`) VALUES
(1, 4, 'ababa', 'ababa@site.com', 'ababa site', 'ababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa siteababa site'),
(2, 8, 'ruhama', 'ruhama@ruti.com', 'andinet park', 'andinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet parkandinet park');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `ticketNo` varchar(255) NOT NULL,
  `tourismSite_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `visitingDate` date NOT NULL,
  `numberOfTicket` int(11) NOT NULL,
  `issued_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `ticketNo`, `tourismSite_id`, `user_id`, `userEmail`, `visitingDate`, `numberOfTicket`, `issued_at`) VALUES
(1, '', 1, 1, 'test03@t.com', '2021-08-01', 3, '2021-08-01 17:38:19'),
(2, '', 1, 1, 'test03@t.com', '2021-08-01', 3, '2021-08-01 17:38:26'),
(4, '', 1, 1, 'test03@t.com', '2021-08-01', 3, '2021-08-01 17:39:38'),
(5, '', 1, 1, 'test03@t.com', '2021-08-01', 3, '2021-08-01 18:03:47'),
(6, '', 1, 1, 'test03@t.com', '2021-08-01', 3, '2021-08-01 18:05:10'),
(7, 'F2D4VAPC1X', 1, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 09:00:58'),
(8, 'OHRMXZENQT', 1, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 09:05:06'),
(9, 'OHRMXZENQT', 1, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 09:05:06'),
(15, '8B4SOJYCHW', 2, 1, 'test03@t.com', '2021-08-02', 5, '2021-08-02 09:26:32'),
(16, 'F9RZQIUO5E', 2, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 09:26:38'),
(17, 'YDMG2LK93E', 1, 1, 'test03@t.com', '2021-08-02', 6, '2021-08-02 13:58:20'),
(18, 'VYSR8XNJDU', 1, 1, 'test03@t.com', '2021-08-02', 6, '2021-08-02 13:59:01'),
(22, 'P7AOMQX14Y', 1, 1, 'test03@t.com', '2021-08-02', 6, '2021-08-02 14:13:57'),
(27, '6E5ZPLO2BR', 1, 1, 'test03@t.com', '2021-08-02', 6, '2021-08-02 14:31:57'),
(28, 'YUSQIN2CBV', 1, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 14:32:28'),
(29, 'QRFD68MOWB', 1, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 14:35:33'),
(30, 'FK0OE7JXPY', 1, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 14:37:42'),
(31, 'WSBONH7AP6', 1, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 14:40:16'),
(32, 'MG6Q4Z53IF', 1, 1, 'test03@t.com', '2021-08-02', 4, '2021-08-02 14:41:06'),
(33, 'EKVYS9ZNRU', 1, 1, 'test03@t.com', '2021-08-02', 2, '2021-08-02 14:42:01'),
(34, 'U63FAPWQO0', 1, 1, 'test03@t.com', '2022-07-12', 7, '2021-08-02 15:41:08'),
(35, 'RYDE63LOAZ', 1, 3, 'test04@t.com', '2021-08-02', 3, '2021-08-02 19:11:08'),
(36, 'G5Y3E9HB2T', 1, 5, 'ruhama@ruti.com', '2021-08-05', 4, '2021-08-05 12:41:50'),
(37, '8NODTGFC4M', 1, 5, 'ruhama@ruti.com', '2021-08-05', 2, '2021-08-05 14:47:21'),
(38, '3FTZCVAQGE', 1, 4, 'tourguide@t.com', '2021-08-11', 10, '2021-08-11 11:04:44'),
(39, 'Q2GPIWXM41', 1, 1, 'test03@t.com', '2021-08-12', 7, '2021-08-12 12:45:10'),
(40, 'PKUR4IYMZH', 2, 1, 'test03@t.com', '2021-08-16', 3, '2021-08-16 13:17:47'),
(41, 'Y4619E7CH5', 2, 2, 'recept@test.com', '2021-08-16', 2, '2021-08-16 13:44:57'),
(42, '0I7NOBACEQ', 2, 6, 'abera@smu.edu', '2021-08-16', 3, '2021-08-16 14:17:17'),
(43, 'B8DP1YAH03', 1, 7, 'testpop@am.com', '2021-08-18', 2, '2021-08-18 14:14:19'),
(44, 'TEDOAYXCI1', 3, 1, 'test03@t.com', '2021-08-20', 3, '2021-08-20 21:35:29'),
(45, 'KMVTBS62F5', 1, 3, 'test04@t.com', '2021-08-21', 3, '2021-08-21 19:15:32'),
(46, 'B2D45YT6WC', 1, 10, 'yidne@gm.com', '2021-09-02', 4, '2021-09-01 13:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `tourismSites`
--

CREATE TABLE `tourismSites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourismSites`
--

INSERT INTO `tourismSites` (`id`, `name`, `description`, `image`, `address`, `contactNo`, `price`, `added_at`) VALUES
(1, 'Entoto Natural park', 'The Hidden Treasure at the Mountain&#39;s Shoulder\r\nThis place is the work area of so many endeavours; Entoto&#39;s High plateau appears among adorable Juniper hills and dreamlike meadows. Ultimately, beyond the horizon of golden fields, this landscape of forgotten dreams reveals its southern border in the abyss Bees&#39; Cliff (14). Here it shows very soon; the beautiful path (42) to Entoto Natural Park (Nursery) 34, where the massive work has elapsed with nature restoration for many years.\r\nGeographical Situation\r\nAddis Ababa is situated 9° north of the equator in central Ethiopia. On the mountain of Entoto, the Park area extends from the northern edge of the city, at an altitude of 2 600m and further north over the mountain crest at almost 3 100 m. From several spots, there is the splendid outlook over the sprawling city and the five high solitary mountains, in the southwest to the southeast (Menagesha, Wachecha, Furi Zukuala and Yerer).\r\nView from Entoto&#39;s mountain ridge.\r\nFacing north from the top ridge, one looks out over vast plains, towards Sululta and some bare mountains. The mountain crest on which the Park is located forms a big water divider. The northern slope drains into the Blue Nile, and the precipitation from the southern slope will end up in the Awash River. This has the curious result that two raindrops falling at the same time just a few centimetres apart will have quite different destinies: one will, after a long journey, reach the Mediterranean Sea, whereas the other will pass through the city of Addis Ababa, eventually evaporating in the Danakil Desert, as the Awash River never reaches the sea.\r\n\r\nEntoto Natural Park is United with the Capital&#39;s Highland.\r\nThe lower part of the Park adjoins Addis Ababa&#39;s northern outskirts, at the district known as Shero Meda (Shiromeda). Coming from the central parts of the city, the Entoto Avenue leads up to the school of Kuskuam in the north of Shero Meda and further along the border of the Park to the Church of Entoto Maryam (Håkan Blanck and Pia Englund, Entoto Natural Park 1995).\r\n\r\n\r\n\r\nShero Meda (Shiromeda) -  Central Station for Bus and Taxi\r\nShero Meda (Shiromeda) also allows the most convenient access to Entoto Park (Z) and Entoto Maryam (43), located on Entoto&#39;s plateau. This community in the capital&#39;s northern district offers here a central station for other taxi and bus services to the Capital&#39;s city centre and a direct taxi connection to Entoto Maryam (43) and Entoto Kidane Mehret (1). However, the town and station Shero Meda is close enough to Entoto Kidane Mehret (1) to offer a pleasant walk to Entoto Natural Park. \r\n\r\n\r\nBrilliant Culture Palaces for the Whole Family.\r\nThe facilities of Entoto Park (Z) are located just below the Entoto Maryam (43). However, the freshly made Entoto Park is in its first phase of organizational development and is challenging to give personal service time. Despite this, there are excellent conditions for direct contact with restaurants and entertainment at this newly inaugurated Entoto Park (Z). These newly built facilities should inform the regulations for special open hours of this very modern and extended centre for Entertainment, Culture, Art, Sport Activities and Breathtaking Highlands View of Nature and Mountain. \r\n𝐀 𝐏𝐚𝐫𝐤 𝐎𝐟 𝐒𝐞𝐫𝐞𝐧𝐢𝐭𝐲 𝐚𝐧𝐝 𝐑𝐞𝐬𝐨𝐮𝐧𝐝𝐢𝐧𝐠 𝐉𝐨𝐲.\r\nEntoto Natural Park is a unique place to discover the most breathtaking ancient mountain nature with streams flowing from clear springs and waterfalls. Surprises here are regular with both exciting places for relaxation and fantastic water activities. \r\n\r\nThe Nature of Dreams with Palaces as Glowing Gates.\r\nEnclosed by Junipers&#39; fragrance, the Capital&#39;s view opens up here through dizzying ravines and waterfalls. Winding streams here gently curl and are then hidden mysteriously in high stone arches. Experience the Park with its ability to produce a genuine and powerful creative joy where many families can reunite and rejoice in being together with unique activities and enjoyment.\r\n\r\n\r\n\r\n1. Entoto Kidane Mehret Church and Community\r\nAlthough this rock-based sanctuary (32) and society (1) towers within the Capital&#39;s northern boundaries and its mountain massifs, it seems to be remarkably preserved and well above all stressful whims. Also, this Church and Monastery (32) are astonishing hidden, tucked into the mountain massif rising shoulder where perception arises very soon to be careful because precipices and gullies take over immediately when you just move away from a little piece of this remarkable protective town. The quaint village of Entoto Kidane Mehret (1) creates here a harmonic embrace of the extensive and impressive Entoto Kidane Mehret Church (32) Monastery and Sacred Water Source (31), Juniperus procera Forest (indigenous) 30.', '1630482222_entoto.jpg', 'addis ababa', '0912090909', 100, '2021-07-31 14:59:13'),
(2, 'Andinet park', 'Unity Park located within the National Palace of Ethiopia , embodies generational legacy of Ethiopia And Ethiopians.Prime minster Dr Abiy has announced that The park will be open to the public as of October 11, following the October 10th launch\r\n\r\nThe National Palace was Built under Emperor Menelik II over a century ago, the Palace rests on 40,000Sqm of land. For generations, it has been viewed as the epicenter of political power, where the most powerful family in the land resides. The renovated compound incorporates several sights of interest to visitors, including an arena, a playground, a zoo,three churches,House of Royals and an imperial banquet hall.\r\nunity park Sightseeing\r\nBanquet Hall\r\n\r\nThe Banquet Hall or commonly called ‘Gibir adarash’, was built during the reign of Emperor Menelik II. When it was constructed, it had a capacity to entertain almost 8000 guests at a time. Emperor Menelik used to organize feasts three times a week, not to mention the plentiful carousals during festive days. In 1963 following the establishment of the Organization of African Unity (OAU), Emperor Haile Selassie had organized a feast for the founding fathers of OAU in this same Hall. In 2019 Prime Minister Abiy Ahmed, had arranged a 5-million-birr dinner as part of raising money for the project ‘Beautification of Addis Ababa’.\r\nThe Throne Hall\r\nThe “Throne Hall” or “Throne House” as it is also known is where Ethiopia’s monarchs would meet with the provincial lords of aristocratic backgrounds and royal lineage to discuss local issues and make important decisions on subjects such as land tax. On special occasions, the space was also used to welcome nobles and foreign dignitaries. Queen Elizabeth II of British, Charles De Gul of France and Joseph Broz Tito of Yugoslavia were only few of the distinguished world leaders to be received in this Hall during the reign of Emperor Haile Selassie.During the Dergue regime the Throne House served as a meeting hall for the Dergue Central Committee in which numerous matters were deliberated, including the famous rural land expropriation proclamation and the decision to kill high officials of Emperor Haile Selassie. The Throne Hall is highly decorated with precious stuccos covering the walls and ceiling. It takes its name from the large, golden throne displayed in the center. There are plinths featuring the Star of David, the symbol of the Solomonic Dynasty, at the base of the columns supporting the canopy holding the crown. At the top, statues of angels extend their arms, expressing praise.Currently, the “Throne Hall” houses the main exhibition of Unity Park museum. The exhibition celebrates the history and culture of Ethiopia, a nation shaped by its ethnic and religious identities and its politics. It traces Ethiopia’s evolution through legends, cultural beliefs, various governments, and historical events- some of which took place here in Menelik palace.\r\nMenelik II’s Palace Complex\r\n\r\nMenelik Palace Complex refers to the octagonal structure and other collection of historical buildings that were built at the time of Emperor Menelik II. This Complex consists of private prayer room of Emperor Menelik II and the Emperor’s watching tower, Emperor Menelik II’s office, Menelik IIʼs bedroom and Reception Room, Etege Taytu Betul’s Bedroom, the Minister of War’s Waiting Room, The Princes’ Bedroom, Council of Ministers and a small banquet hall. The first telephone for the entire country was also installed to this building.\r\nEthiopian Zoo (Black-maned Lion Zoo)\r\n\r\nThis section of the park is dedicated for preservation and exhibition of diverse types of fauna and flora of the country. Over 20 species of animals and plantations are parts of this extraordinary zoo.', '1630482597_andinet.jpg', 'Kazanches', '0913090909', 500, '2021-07-31 15:00:17'),
(3, 'add new site', 'add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site add new site', '1629479765_reWalls.com_30.jpg', 'lideta', '123456789', 45, '2021-08-20 20:16:05'),
(4, 'Kuriftu Resort updated', 'Kuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu ResortKuriftu Resort', '1629701961_ninja-5688896_1280.png', 'Debrezeit new', '0919805610', 350, '2021-08-23 09:55:39'),
(5, 'awash park', 'awash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash parkawash park', '1630488954_c.jpg', 'awash river', '123456789', 350, '2021-09-01 12:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'test03', 'test03@t.com', '$2y$10$nfQVlmaScj0EyRZtLPzG..aRHTyA41au5NAyL4ALZjqDgaw/jsf6G', 'visitor'),
(2, 'testReception', 'recept@test.com', '$2y$10$doRDtErVaJdDS9nuk1wEsuvIBn86p4582yrAzoj.akoH2F9ZgAKDW', 'reception'),
(3, 'test04', 'test04@t.com', '$2y$10$i7wfsACWSJKoPJDKPaVJOuoZEUEMvKfhUqjkYDPhUAWWkGGvXNpIi', 'visitor'),
(4, 'testTourGuide', 'tourguide@t.com', '$2y$10$JJK8zTVmXkLeHgS15ukD6.I.Gl9M6bnYNLmharRf7KOTd4LO.bvuu', 'tourGuide'),
(5, 'ruhama', 'ruhama@ruti.com', '$2y$10$7pGjRp5zz3d2PGRyacCLxe1FjR/ARYY1uzyvWEOZVQG4gDKzX06Zq', 'visitor'),
(6, 'Abera', 'abera@smu.edu', '$2y$10$DTvpdSRYh.TIWIHYKgdQn.5pGsQoWl0l/8EubVLdHtdDUIbOcm1Ru', 'visitor'),
(7, 'testpop', 'testpop@am.com', '$2y$10$wVrl3AMqQBydIOpMlxsvsufS.CTUaB7WB2j40yEoPlMst0nImGwIO', 'visitor'),
(8, 'adminupdate', 'adminupdate@update.com', '$2y$10$YFGmIOPcHWl1pGkWkMM19.pkvKtVupgmjiE16rGbQjBLw1K2Rip2K', 'admin'),
(9, 'admintest', 'admintest@admin.com', '$2y$10$H1uoWkKXbP5dIl20k1Rd1OhgswlwzLoYAq3p.SOZ8y7twH0p7rR2O', 'visitor'),
(10, 'yidne', 'yidne@gm.com', '$2y$10$owU/WIcSApJ4PszLLwIa8ugTeaCCGpYR3Q.GvWq.FOi4Ev2NNSaGC', 'visitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourismSites`
--
ALTER TABLE `tourismSites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tourismSites`
--
ALTER TABLE `tourismSites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
