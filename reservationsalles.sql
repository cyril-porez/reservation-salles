-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 fév. 2022 à 14:29
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES
(1, 'réunion d\'information', 'discussion sur les problèmes de gestions des ordures', '2022-01-28 16:00:00', '2022-01-28 17:00:00', 50),
(2, 'bran le bat de combat', 'reunion militaire', '2022-01-27 17:00:00', '2022-01-27 18:00:00', 50),
(3, 'victoire pour le peuple', 'plan pour conquérir le monde', '2022-02-02 14:00:00', '2022-02-02 15:00:00', 50),
(4, 'mariage', 'evènement maritale', '2022-01-31 12:00:00', '2022-01-31 13:00:00', 50),
(5, 'repas de fin de formation', 'Tous les élèves sont invités au repas qui clôturera  cette belle année', '2022-02-01 12:00:00', '2022-02-01 13:00:00', 50),
(6, 'festin de la victoire du championnat', 'Notre équipe ayant gagné le championnat un festin est organisé venez nombreux', '2022-02-04 11:00:00', '2022-02-04 12:00:00', 50),
(7, 'blabla', 'blablabla', '2022-02-02 08:00:00', '2022-02-02 09:00:00', 48),
(8, 'sboub', 'sbouby', '2022-02-03 08:00:00', '2022-02-03 09:00:00', 48),
(9, 'azertyy', 'azerty', '2022-02-04 13:00:00', '2022-02-04 14:00:00', 52),
(10, 'bloi', 'bloibloi', '2022-02-08 08:00:00', '2022-02-08 09:00:00', 54),
(11, 'mariage carla', 'mariage de carla', '2022-02-07 17:00:00', '2022-02-06 18:00:00', 48),
(12, 'fete d\'anniverssaire', 'fête d\'anniverssaire', '2022-02-08 14:00:00', '2022-02-08 15:00:00', 48),
(13, 'djhfjkg', 'ddfkjn', '2022-02-10 15:00:00', '2022-02-08 16:00:00', 48),
(14, 'ibra', 'ibr', '2022-02-11 17:00:00', '2022-02-11 18:00:00', 64),
(15, 'dingue', 'dingue', '2022-02-11 09:00:00', '2022-02-11 10:00:00', 64),
(16, 'dru', 'dru', '2022-02-14 12:00:00', '2022-02-14 13:00:00', 64),
(17, 'you', 'you', '2022-02-10 15:00:00', '2022-02-10 16:00:00', 64),
(18, 'repas de n', 'repas', '2022-02-17 13:33:00', '2022-02-17 14:34:00', 64),
(19, 'cd', 'cd ', '2022-02-17 13:42:00', '2022-02-17 14:42:00', 64),
(20, 'xc', 'xc', '2022-02-18 16:00:00', '2022-02-18 17:00:00', 64),
(21, 'qsd', 'qsd', '2022-02-10 15:00:00', '2022-02-10 16:00:00', 64),
(22, 'wxcvbn', 'wxcvbn', '2022-02-10 14:54:00', '2022-02-10 15:54:00', 64);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(58, 'yoyo', '$argon2i$v=19$m=65536,t=4,p=1$WENhS0lnQUJ3akhqSG1sTw$MK9O9WM0K3LuJpXOTPw4YNFZVcH7Gb7cjloorUoxCAk'),
(49, 'cyrax', '$argon2i$v=19$m=65536,t=4,p=1$UEhHRTkuV1U2eVRaQVVnVA$BxzdOMSSP40ZOiPCF3M4NdZLdTPG0g+GQqNYUvsdsls'),
(35, 'baba', '$argon2i$v=19$m=65536,t=4,p=1$UlVJVG1BM0JNN2tXV09DOQ$NneSGDAFBErf6t+XpsKcXXQ9EPbdyFkWzwQchRQCHaQ'),
(34, 'goku', '$argon2i$v=19$m=65536,t=4,p=1$NDFnWmV3UnJWNkdIRXZUZg$K7syXaq6r7qRS3K6MkK6FK3DiXVGjJxD17Ar1tgt3ds'),
(53, 'jin', '$argon2i$v=19$m=65536,t=4,p=1$NFZqOEtIMnA0ZGczeFVZbA$8/LEpgs6Om5Hcc2JuBgM3gl6UKOCU1/0oDlCO3oamlc'),
(52, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$enBuSEh5bHdnVEZELk4ybQ$HbeYtntriMciLuJ61GicTyoNu6dyGmK0bYx2gix4NLI'),
(51, 'cyr', '$argon2i$v=19$m=65536,t=4,p=1$TDlPM3loV1RaMjRQRlFpcQ$D0+i2/qmynfBlDClEqWJrU3C9YoOlw/TIR5nmToZJR8'),
(50, 'cyrilus', '$argon2i$v=19$m=65536,t=4,p=1$a2tUd1BJWFBSbU5IUGFpNw$JD+v98VW9TUtrI7xhm4DAKcIvx6T43NpkCfgsj2Vq+Q'),
(48, 'gus', '$2y$10$T63gVKeO7pwcZzCG5gj6x.Q4lGJVedd2pEw3.G5JZuS6NlqQnebqK'),
(47, 'vince', '$2y$10$XpzhqY4MLxCXX1X.Lw.NxusXdyReO9Zsd7bB9xxlj1671azf409LS'),
(46, 'joseph', '$argon2i$v=19$m=65536,t=4,p=1$V1FmdzVac3IweHdqblV1Yg$rqFs+MstibqnmzB0BHd15TjC1PVxQ88d5NxGcarnOTY'),
(45, 'jojo', '$argon2i$v=19$m=65536,t=4,p=1$LlFJU0RjYnppS2lWT1hFZQ$GHhUsvOGethjKSwQmdY+l4QAw6Ks/M3THljUC6w23Yk'),
(44, 'jotaro', '$argon2i$v=19$m=65536,t=4,p=1$OFc1M1JPLzdvd0EvZTlnTA$diUV1/p1laNazq+EqwXUZzuQkGmYw9t1FyRCNZghGBY'),
(40, 'bob', '$argon2i$v=19$m=65536,t=4,p=1$bzE1MzZyU0ZNaFNuUThFZg$POcCJn9+desLGf0rH0DB+LBraG19nxrkm21/cY8XiH8'),
(54, 'marcus', '$argon2i$v=19$m=65536,t=4,p=1$cFZOdDVvVS43RmkwajFaTQ$HpJ1gR1mUMwUViV3rbJ6FmAtDpy6Q42OaBiWzYMohas'),
(55, 'bobby', '$argon2i$v=19$m=65536,t=4,p=1$dWI3M2NOVi5pUXNYRDBRRw$PsF74HnEQm9XYs7tcmp60N2iQdbw62w3Sn//J/5eMT4'),
(56, 'nico', '$argon2i$v=19$m=65536,t=4,p=1$eG1QRHRvalVTOWtJSW5OVQ$K8peD08Ev6pbUNE6Pw20e5QLxTFhC9keRDniTUa5o/E'),
(57, 'jer', '$argon2i$v=19$m=65536,t=4,p=1$dkxXVmR2cW5abEExYTNEZg$B8Jf8hDbrSqJcu0pww/8+1wyVrMaTZOwigYJeU3XYrk'),
(59, 'manolo', '$argon2i$v=19$m=65536,t=4,p=1$ajFkbUVMcE9iam96Y2syUA$VbAkyhH+Oj3EAEHUoQgOHMyCqb0E/Q+THzm4vLbnmz8'),
(60, 'george', '$argon2i$v=19$m=65536,t=4,p=1$Q0lQWW5jMWozSTQ4RTlrZg$RkmeyHOmpkq2xn1fL5XY0aqN1tcLfhD26fuhlnGoOoM'),
(61, 'piccolo', '$argon2i$v=19$m=65536,t=4,p=1$NVRoNlhoTU91cjlHams4ZA$PTMhXLCR9WQkw8SFDKinS7ulLizIYm+CfkZpqB/pPLM'),
(62, 'kazuya', '$2y$10$zTkotNTmzovK71ZuEPLur.woJRffBLCc6TacfKn5KXxAQIsKfkqlO'),
(63, 'heihachi', '$argon2i$v=19$m=65536,t=4,p=1$RmlnVEYxNm9wMEQvQnhwNg$uO6DLtUyEdurSAKA3u8umI0FE26npi8Sl9i9/nWzMKU'),
(64, 'hwoarang', '$argon2i$v=19$m=65536,t=4,p=1$VmdhYjlVQ1p1U3I4WkFoOQ$pw1CcxXSDdQfTJI2mrudQ6D8Bx4bDwvHNuK3EiEPNZQ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
