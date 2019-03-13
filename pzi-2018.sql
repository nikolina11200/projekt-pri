-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 09:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pzi-2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0',
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `korisnicko_ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `user_type`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`) VALUES
(5, 1, 'Nikolina', 'Å½ivkoviÄ‡', 'nikolina11200', '123'),
(6, 0, 'liza', 'koshy', 'liza', '123'),
(11, 0, 'John', 'Smith', 'John10', '123'),
(12, 0, 'Jane', 'Smith', 'JANE10', '123'),
(14, 0, 'Jane', 'Doe', 'JaneD', '123'),
(16, 0, 'Paul', 'Wesley', 'PaulW', '123'),
(21, 0, 'miki', 'mikic', 'miki10', '123'),
(29, 0, 'hfh', 'hfhf', 'fhf', '123');

-- --------------------------------------------------------

--
-- Table structure for table `objave`
--

CREATE TABLE `objave` (
  `id` int(50) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tekst1` text COLLATE utf8_unicode_ci NOT NULL,
  `tekst2` text COLLATE utf8_unicode_ci NOT NULL,
  `slika` longblob NOT NULL,
  `datum` datetime(6) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `objave`
--

INSERT INTO `objave` (`id`, `naziv`, `tekst1`, `tekst2`, `slika`, `datum`, `user_id`) VALUES
(96, 'Pizza', '<ul>\r\n<li>tijesto za pizzu</li>\r\n<li>sir po Å¾elji</li>\r\n<li>sos od rajÄice</li>\r\n<li>origano</li>\r\n<li>masline</li>\r\n</ul>', '<p>Napraviti tijesto od bra&scaron;na, kvasca, vode, &scaron;eÄ‡era i pra&scaron;ka za pecivo ili koristiti gotovo tijesto. Staviti sos od rajÄice na tijesto, poredati sir zaÄiniti origanom i dodati masline. Dobar tek!</p>', 0x4d61726768657269746150697a7a6132312d7468756d622d353936783335302d3234373032322e6a7067, '2019-02-28 12:40:50.000000', 6),
(97, 'Å pagete Bolonjez', '<ul>\r\n<li>500g mljevenog mesa</li>\r\n<li>2 glavice luka</li>\r\n<li>zaÄini</li>\r\n<li>ulje</li>\r\n<li>sos od rajÄice</li>\r\n<li>&scaron;pagete</li>\r\n</ul>', '<p>ProprÅ¾iti meso i luk na ulju, dodati zaÄine i sos od rajÄice. Skuhati &scaron;pagete te sve zajedno pomje&scaron;ati. Dobar tek!</p>', 0x687164656661756c742e6a7067, '2019-03-04 16:14:48.000000', 12),
(101, 'Acai bowl', '<ul>\r\n<li>1/2 &scaron;olje mlijeka</li>\r\n<li>1/3 &scaron;olje zobenih pahuljica</li>\r\n<li>1/2 banane</li>\r\n<li>smrznuto &scaron;umsko voÄ‡e</li>\r\n<li>1 Å¾liÄica acai praha</li>\r\n<li>med</li>\r\n<li>ora&scaron;asto voÄ‡e po Å¾elji</li>\r\n</ul>', '<p>Izmiksati mlijeko, &scaron;umsko voÄ‡e, bananu, zobene pahuljice i acai prah. Posladiti po Å¾elji i dekorirati suhim i ora&scaron;astim voÄ‡em. Dobar tek!</p>', 0x41636169426f776c2d31303234783732332e6a7067, '2019-03-04 20:55:52.000000', 5),
(102, 'PalaÄinke s nutellom i plazmom', '<ul>\r\n<li>1 &scaron;olja bra&scaron;na</li>\r\n<li>1 &scaron;olja mlijeka</li>\r\n<li>1 jaje</li>\r\n<li>nutella</li>\r\n<li>plazma</li>\r\n</ul>', '<p>Istucite jaje zajedno s mlijekom i dodajte bra&scaron;no. Pecite palaÄinke na srednjoj vatri te kada su gotove namaÅ¾ite ih nutellom i pospite plazmom. Ukrasite &scaron;lagom po Å¾elji. Dobar tek!</p>', 0x70616c6163696e6b652d706f2d7a656c6a692e6a7067, '2019-03-07 14:37:07.000000', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- Indexes for table `objave`
--
ALTER TABLE `objave`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objave_ibfk_1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `objave`
--
ALTER TABLE `objave`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `objave`
--
ALTER TABLE `objave`
  ADD CONSTRAINT `objave_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `korisnik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
