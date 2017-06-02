-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Erstellungszeit: 29. Mai 2014 um 21:47
-- Server Version: 5.5.34
-- PHP-Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `smart_cms`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` binary(64) NOT NULL,
  `abstract` binary(64) NOT NULL,
  `copy` binary(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`id`, `header`, `abstract`, `copy`) VALUES
(1, 'cd56d06409d269dbc1ace470081f1d32ed50906679b2bacfd4044348770493c4', '2bdf60db4426d27110886c1b4aee5c3707728975b8c7340f156d6b0145b18dfc', 'cf2c700e181b57d62803b0144e7f3632f1aaf70a51518332fcf8dcededb42d15'),
(2, '1b8707533d362a48d03c920654cb5ac752445f17ca8255fe50e615e344edcd55', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d', '2e7d2c03a9507ae265ecf5b5356885a53393a2029d241394997265a1a25aefc6'),
(3, 'd4e737c5336fcbf8a69550032d107520beb62e222a338591b004f09ba43ab857', 'a1f5a96775b47ce32ff5cec6842fd43f4aea818ececa7bde5ca7f369acef7184', 'ff4ef4245da5b09786e3d3de8b430292fa081984db272d2b13ed404b45353d28'),
(4, '532eaabd9574880dbf76b9b8cc00832c20a6ec113d682299550d7a6e0f345e25', 'b4a971b05419a9b806c97cbcc49b8d793e7b22138a83384ad95b7b24223de99c', '5ad5a7ea023ca9c34f723608b8091e9b102172e05c730fef3d36410e66b81765'),
(6, 'f3ada61b527696d29b091266062cbdbcb661fed81de7cf4dc393948aeec58ff4', '2b44a86b8e6855de009fbdd4c5b4fb1b795b3db53346fbf3936c5d9c9ff1ac1d', '0e2eba3f4e2e2ebb68bd2033115d486b14880ec2b48b027c239fba671e646297'),
(7, 'a7caf334bad669e98cc97dfffe7c32bae1f0ed256ac9844f8ec5161c4f378147', 'a7caf334bad669e98cc97dfffe7c32bae1f0ed256ac9844f8ec5161c4f378147', 'a7caf334bad669e98cc97dfffe7c32bae1f0ed256ac9844f8ec5161c4f378147'),
(8, '48287461a229b126e6d98db15975b15c76496cb142b0dd7a7c9e2412496bb27c', '48287461a229b126e6d98db15975b15c76496cb142b0dd7a7c9e2412496bb27c', '48287461a229b126e6d98db15975b15c76496cb142b0dd7a7c9e2412496bb27c'),
(10, 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', '3f39d5c348e5b79d06e842c114e6cc571583bbf44e4b0ebfda1a01ec05745d43', 'a25513c7e0f6eaa80a3337ee18081b9e2ed09e00af8531c8f7bb2542764027e7');

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `content_deu`
--
CREATE TABLE `content_deu` (
`id` int(11)
,`header` text
,`abstract` text
,`copy` text
);
-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `content_eng`
--
CREATE TABLE `content_eng` (
`id` int(11)
,`header` text
,`abstract` text
,`copy` text
);
-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `language`
--

CREATE TABLE `language` (
  `hash` binary(64) NOT NULL,
  `lng` varchar(3) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`hash`,`lng`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `language`
--

INSERT INTO `language` (`hash`, `lng`, `text`) VALUES
('06016bf70f699ac6e9e43a8c2fb92b05bd090845698edf328806f88e9b9301b0', 'deu', 'Seite 2'),
('0e2eba3f4e2e2ebb68bd2033115d486b14880ec2b48b027c239fba671e646297', 'deu', 'Text von Seite 5'),
('1b8707533d362a48d03c920654cb5ac752445f17ca8255fe50e615e344edcd55', 'deu', 'Content 2'),
('2b44a86b8e6855de009fbdd4c5b4fb1b795b3db53346fbf3936c5d9c9ff1ac1d', 'deu', 'Subtitle 5'),
('2bdf60db4426d27110886c1b4aee5c3707728975b8c7340f156d6b0145b18dfc', 'deu', 'Info 2'),
('2e7d2c03a9507ae265ecf5b5356885a53393a2029d241394997265a1a25aefc6', 'deu', 'c'),
('370324c7be669affed352bea83c89cb2ec99d94286eabc61247986dbf909defe', 'deu', 'Seite B'),
('3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d', 'deu', 'b'),
('3f39d5c348e5b79d06e842c114e6cc571583bbf44e4b0ebfda1a01ec05745d43', 'deu', 'D'),
('48287461a229b126e6d98db15975b15c76496cb142b0dd7a7c9e2412496bb27c', 'deu', 'Acht'),
('4ab821711873ec2773a30f8fb7e88d057483912b73e6378d7f501f61f897bd33', 'deu', 'Seite C'),
('532eaabd9574880dbf76b9b8cc00832c20a6ec113d682299550d7a6e0f345e25', 'deu', 'Test'),
('559aead08264d5795d3909718cdd05abd49572e84fe55590eef31a88a08fdffd', 'deu', 'A'),
('5ad5a7ea023ca9c34f723608b8091e9b102172e05c730fef3d36410e66b81765', 'deu', 'War das schon immer so'),
('6b23c0d5f35d1b11f9b683f0b0a617355deb11277d91ae091d399c655b87940d', 'deu', 'C'),
('717ae717589ab6099fd4420e2e3bfcb6d234d8fdb7f623cf871f7cad0e4b8cb9', 'deu', 'info 1'),
('9b5ad7b3ba97013659ca9dc3e586eccfe28c44061af2f38775f97ba7988d96c4', 'deu', 'Seite 3'),
('a1f5a96775b47ce32ff5cec6842fd43f4aea818ececa7bde5ca7f369acef7184', 'deu', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
('a25513c7e0f6eaa80a3337ee18081b9e2ed09e00af8531c8f7bb2542764027e7', 'deu', 'U'),
('a5a62fea0756fd65479759d4e44c05908bc9af86ee7a4b470fffb4d75a9d2fe0', 'deu', 'Seite 1'),
('a7caf334bad669e98cc97dfffe7c32bae1f0ed256ac9844f8ec5161c4f378147', 'deu', 'Sieben'),
('ae6980499aafff93cd55ba76e9cca68f2d8e30621f9ae3e46d252cfcdf09c19a', 'deu', 'Seite A'),
('b01612a941145f6fcd65fad019d98d559b8f102fb8f19b8f44010b0640b0e8c0', 'deu', 'Eine einfache Ãœberschrift'),
('b4a971b05419a9b806c97cbcc49b8d793e7b22138a83384ad95b7b24223de99c', 'deu', 'Einfach Genial'),
('ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', 'deu', 'a'),
('cd56d06409d269dbc1ace470081f1d32ed50906679b2bacfd4044348770493c4', 'deu', 'Content 1'),
('cf2c700e181b57d62803b0144e7f3632f1aaf70a51518332fcf8dcededb42d15', 'deu', 'Info 3'),
('cf91f00851e60cc3ad468c1eaec600a53cba3e64fbf4147c0aaa12d90b6fce67', 'deu', 'Inhalts Seite'),
('cfa98714ed410bc4a0663515c454029d13d3d3fcfa8cdb57f4b83da580917f8c', 'deu', 'Seite 4'),
('d4e737c5336fcbf8a69550032d107520beb62e222a338591b004f09ba43ab857', 'deu', 'Content 3'),
('df7e70e5021544f4834bbee64a9e3789febc4be81470df629cad6ddb03320a5c', 'deu', 'B'),
('e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 'deu', ''),
('f3ada61b527696d29b091266062cbdbcb661fed81de7cf4dc393948aeec58ff4', 'deu', 'Seite 5'),
('ff4ef4245da5b09786e3d3de8b430292fa081984db272d2b13ed404b45353d28', 'deu', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` binary(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=134 ;

--
-- Daten für Tabelle `page`
--

INSERT INTO `page` (`id`, `header`) VALUES
(1, '4ab821711873ec2773a30f8fb7e88d057483912b73e6378d7f501f61f897bd33'),
(2, '06016bf70f699ac6e9e43a8c2fb92b05bd090845698edf328806f88e9b9301b0'),
(3, '9b5ad7b3ba97013659ca9dc3e586eccfe28c44061af2f38775f97ba7988d96c4'),
(4, 'cfa98714ed410bc4a0663515c454029d13d3d3fcfa8cdb57f4b83da580917f8c'),
(5, 'cf91f00851e60cc3ad468c1eaec600a53cba3e64fbf4147c0aaa12d90b6fce67'),
(133, 'a5a62fea0756fd65479759d4e44c05908bc9af86ee7a4b470fffb4d75a9d2fe0');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `page_content`
--

CREATE TABLE `page_content` (
  `page_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `page_content`
--

INSERT INTO `page_content` (`page_id`, `content_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `page_content_deu`
--
CREATE TABLE `page_content_deu` (
`page_id` int(11)
,`content_id` int(11)
,`id` int(11)
,`header` text
,`abstract` text
,`copy` text
);
-- --------------------------------------------------------

--
-- Stellvertreter-Struktur des Views `page_deu`
--
CREATE TABLE `page_deu` (
`id` int(11)
,`header` text
);
-- --------------------------------------------------------

--
-- Struktur des Views `content_deu`
--
DROP TABLE IF EXISTS `content_deu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `content_deu` AS select `c`.`id` AS `id`,`header`.`text` AS `header`,`abstract`.`text` AS `abstract`,`copy`.`text` AS `copy` from (((`content` `c` left join `language` `header` on((`c`.`header` = `header`.`hash`))) left join `language` `abstract` on((`c`.`abstract` = `abstract`.`hash`))) left join `language` `copy` on((`c`.`copy` = `copy`.`hash`))) where ((`header`.`lng` = 'deu') and (`abstract`.`lng` = 'deu') and (`copy`.`lng` = 'deu'));

-- --------------------------------------------------------

--
-- Struktur des Views `content_eng`
--
DROP TABLE IF EXISTS `content_eng`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `content_eng` AS select `c`.`id` AS `id`,`header`.`text` AS `header`,`abstract`.`text` AS `abstract`,`copy`.`text` AS `copy` from (((`content` `c` left join `language` `header` on((`c`.`header` = `header`.`hash`))) left join `language` `abstract` on((`c`.`abstract` = `abstract`.`hash`))) left join `language` `copy` on((`c`.`copy` = `copy`.`hash`))) where ((`header`.`lng` = 'eng') and (`abstract`.`lng` = 'eng') and (`copy`.`lng` = 'eng'));

-- --------------------------------------------------------

--
-- Struktur des Views `page_content_deu`
--
DROP TABLE IF EXISTS `page_content_deu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `page_content_deu` AS select `page_content`.`page_id` AS `page_id`,`page_content`.`content_id` AS `content_id`,`content_deu`.`id` AS `id`,`content_deu`.`header` AS `header`,`content_deu`.`abstract` AS `abstract`,`content_deu`.`copy` AS `copy` from (`page_content` left join `content_deu` on((`page_content`.`content_id` = `content_deu`.`id`))) where 1;

-- --------------------------------------------------------

--
-- Struktur des Views `page_deu`
--
DROP TABLE IF EXISTS `page_deu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `page_deu` AS select `p`.`id` AS `id`,`h`.`text` AS `header` from (`page` `p` left join `language` `h` on((`p`.`header` = `h`.`hash`))) where (`h`.`lng` = 'deu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
