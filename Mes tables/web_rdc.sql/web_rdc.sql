-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 03 Mai 2017 à 21:42
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `web_rdc`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `utilisateur` varchar(255) NOT NULL,
  `id_conseil` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `date_creation` (`date_creation`),
  KEY `id_conseil` (`id_conseil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `commentaire`, `utilisateur`, `id_conseil`, `date_creation`) VALUES
(1, 'mblkmlkmlkmllmkmlkml\nbmlkmlkmlkmlklmkmlkml \nklllllllllllllllllllllll \nllllllllll \nllllllllllllllmmmm \nmmmmmmmmmmm \nmmmmmmmmmkkkkkk \nkkkkkkkkkkkkkkkkk \nkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'kibawa', 1, '2017-04-27 10:30:53'),
(2, 'Bo kosi| beu?', 'obed', 2, '2017-04-27 00:00:00'),
(3, 'Ahhhhhhh ba yaya bo tika ba buzoba kooo oyo eza site ya ba bétises té!\r\nto zala mikolo!', 'obed', 1, '2017-05-01 20:50:00'),
(4, 'yeah! Si vous continuez, on aura juste qu''à apppliquer les reglements!\r\nVous blocquer dans ce forum sera la meilleur chose à nfaire!\r\nMerçi pour votre comprehension!', 'Obed', 1, '2017-05-02 10:07:10'),
(5, 'yeah! Si vous continuez, on aura juste qu''à apppliquer les reglements!\r\nVous blocquer dans ce forum sera la meilleur chose à nfaire!\r\nMerçi pour votre comprehension!', 'Obed', 1, '2017-05-02 10:07:23'),
(6, 'Salut tout le monde!\r\nAujourd''hui nous allons parler de la musique avec jean pierre de RonSany!!!', 'Sharon', 1, '2017-05-02 10:11:43'),
(7, 'A vous tous membre de la OMMDev je vous souhaite les bienvenues!', 'Belar', 1, '2017-05-02 10:13:34'),
(8, 'A vous tous membre de la OMMDev je vous souhaite les bienvenues!', 'Belar', 1, '2017-05-02 10:15:29'),
(9, 'Vous vous permettez de dire qu''ils sont des reveur tandis que vous êtes vous les véritables rêveurs du monde entier!...', 'Kzubanata', 3, '2017-05-02 10:23:56'),
(10, 'Vous vous permettez de dire qu''ils sont des reveur tandis que vous êtes vous les véritables rêveurs du monde entier!...', 'Kzubanata', 3, '2017-05-02 10:26:37'),
(11, 'Hum!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', 'Galilée', 3, '2017-05-02 10:37:39'),
(12, 'Hum!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', 'Galilée', 3, '2017-05-02 10:40:36'),
(13, 'Euh!!!!!!!!!!!!!!!', 'Galilée', 3, '2017-05-02 10:43:12'),
(15, 'yOOOOOOOOOOO Me voiçi de retour!!!!!', 'oBED', 3, '2017-05-02 10:47:16'),
(16, 'kkkkk!', 'BInos', 3, '2017-05-02 10:49:24'),
(17, 'Bien!\r\nNous allons maintenant changer les sytèmes de jeu!!', 'Carles', 3, '2017-05-02 10:52:00'),
(18, 'ba tia mwamba', 'lipa', 3, '2017-05-02 20:32:24'),
(19, 'peut etre asombeli ba nfulu naye ', 'sams key', 1, '2017-05-02 20:47:53');

-- --------------------------------------------------------

--
-- Structure de la table `news_cool`
--

CREATE TABLE IF NOT EXISTS `news_cool` (
  `id_ncool` int(11) NOT NULL AUTO_INCREMENT,
  `titre_ncool` varchar(50) NOT NULL,
  `contenu_ncool` text NOT NULL,
  `categorie_ncool` char(15) NOT NULL,
  `nom_photo` varchar(255) NOT NULL,
  `extension_photo` char(5) NOT NULL,
  `description_ncool` char(25) NOT NULL,
  `date_creation_ncool` datetime NOT NULL,
  PRIMARY KEY (`id_ncool`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `news_cool`
--

INSERT INTO `news_cool` (`id_ncool`, `titre_ncool`, `contenu_ncool`, `categorie_ncool`, `nom_photo`, `extension_photo`, `description_ncool`, `date_creation_ncool`) VALUES
(1, 'Naruto Shippuden', 'Régardez en exclusivité Naruto Shippuden avec KAKASHI et Naruto et Sakura sur Sakura TV', 'Autres', 'Gambar-Naruto-Anbu-Kakashi', 'jpg', 'Kakashi HATAKE le Ninja c', '2017-04-29 18:55:05'),
(2, 'Les fleurs de vie', 'Les fleurs de vie sont des dessss sss lm mz aasdf ghy jky tezeza dgh ezzr sss lm mz aasdf ghy jky tezeza \r\n', 'Autres', '6a00d8341d1d7953ef00e551ece88e8833-640wi', 'jpg', 'Les fleurs dans el jardin', '2017-04-30 06:41:26'),
(3, 'La beauté des fleurs dans le monde', 'Visitez un peu les jardins pour voir la beauté des fleures', 'Monde', '6a00d8341d1d7953ef00e551ece88e8833-640wi', 'jpg', 'Les fleurs rose blanche', '2017-04-30 06:46:05'),
(4, 'Sam''s key en Afrique central', 'La vie des être chère en Afrique centrale est  La La vie des être chère en Afrique centrale est  LaLa vie des être chère en Afrique central La vie des être chère en Afrique centrale est  La ', 'Rdcongo', 'photo2', 'jpg', 'Grady Khussa iben ba selp', '2017-04-30 07:06:12'),
(5, 'La fille au ECAMO', 'Lys MALILA bla blabla bla bal bl abla bla Lys MALILA bla blabla bla bal bl abla bla Lys MALILA bla blabla bla bal bl abla bla Lys MALILA bla blabla bla bal bl abla bla Lys MALILA bla blabla bla bal bl abla bla Lys MALILA bla blabla bla bal bl abla bla Lys', 'Rdcongo', 'lysss', 'png', 'Lys in jardin of Kinshasa', '2017-04-30 07:11:10'),
(6, 'Anthony MANDEMVO', 'Réalisateur des series et film, expert en montage video et effets spéciaux dans le Studio Genjutsu de Kinshasa! A dejà réalisé des nombreux film notament "PARANOÎA" et "LIBANGA" sans oublier Zora qui dont la sortie en Juin 2017! ', 'Rdcongo', '741', 'jpg', 'Anthony MANDEMVO', '2017-04-30 07:18:39'),
(7, 'Les basketaires d''autres monde', 'A bien vue ce sont des etres qui bljklklkl kjkj kjkjkj kkjkjkjkj A bien vue ce sont des etres qui bljklklkl kjkj kjkjkj kkjkjkjkj A bien vue ce sont des etres qui bljklklkl kjkj kjkjkj kkjkjkjkj ', 'Sport', 'TRENDSINPHILANTROPYFrench-16', 'jpg', 'Terreplane', '2017-04-30 16:10:51'),
(8, 'Le box et le point', 'Qui a dit que le coup de point ne tue pas ?\r\nVoyez-vous ce coup et dites s''il ne va pas mourir', 'Sport', 'Capturedcran31', 'png', 'Saimtama et Genos', '2017-04-30 16:16:01');

-- --------------------------------------------------------

--
-- Structure de la table `news_simple`
--

CREATE TABLE IF NOT EXISTS `news_simple` (
  `id_nsimple` int(11) NOT NULL AUTO_INCREMENT,
  `titre_nsimple` varchar(50) NOT NULL,
  `contenu_nsimple` text NOT NULL,
  `date_creation_ns` datetime NOT NULL,
  PRIMARY KEY (`id_nsimple`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `news_simple`
--

INSERT INTO `news_simple` (`id_nsimple`, `titre_nsimple`, `contenu_nsimple`, `date_creation_ns`) VALUES
(1, 'Les élections R.D.Congo en hâte', 'Le 23 Aout 2018 Les élections en République démocratique du congo vont débuter avait annoncé le premier ministre le vendredi 7 Juillet', '2017-04-29 07:55:00'),
(2, 'mlk', 'mlkmlkmlkml', '2017-04-29 08:32:49'),
(3, 'kitoko', 'kjkln,;n,n,n;,', '0000-00-00 00:00:00'),
(4, 'bolole', 'ollkjkn,n,lkjlkjk,		', '2017-04-29 09:00:54'),
(5, 'Les informaticiens de la RDC', 'De nos jour de plus en plus les jeunes congolais devienent...		', '2017-04-29 09:02:39'),
(6, 'Buzoba,a', ';kn;,n;,n', '2017-04-05 07:26:36'),
(7, 'Bien debuter avec css3 et mysql', 'Rendez-vous sur mon site web personnel www.ommdev.net	', '2017-05-02 20:14:16');

-- --------------------------------------------------------

--
-- Structure de la table `titre_conseils`
--

CREATE TABLE IF NOT EXISTS `titre_conseils` (
  `id_conseil` int(11) NOT NULL AUTO_INCREMENT,
  `titre_conseil` varchar(255) NOT NULL,
  `contenu_conseil` text NOT NULL,
  `date_cconseil` datetime NOT NULL,
  PRIMARY KEY (`id_conseil`),
  KEY `titre_conseil` (`titre_conseil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `titre_conseils`
--

INSERT INTO `titre_conseils` (`id_conseil`, `titre_conseil`, `contenu_conseil`, `date_cconseil`) VALUES
(1, 'Comment parvenir à traquer', 'Un monsieur va acheter un kaka', '0000-00-00 00:00:00'),
(2, 'Dix choses à connaitre avant de venir en RDC', 'La RDC, pays où coule du lait et du miel est un pays où les gens deviennent riche du jour au lendemain.\nVoulez-vous la connaitre? c''est simple!\n\n1) Vous devez mettre à coeur que les congolais sont gentils et plein de compension pour les inconnue\n\n2) Savoir être prudent et sage \n\n3) Bien viser ses objectif avant de venir s''installer\n\n4) Etre en garde contre\n\n5) Savoir bien organiser son temps\n\n6) Veuiller à bien se renseigner sur lieu que vous allez être logé', '0000-00-00 00:00:00'),
(3, 'Pourquoi les congolais sont pauvres?', 'Les gens disent qu''ils sont en générale des reveurs!', '0000-00-00 00:00:00'),
(4, 'Top 10 des écoles les plus discipliné à kinshasa', '', '0000-00-00 00:00:00'),
(5, 'Comment passer inapersu dans un milieu compliqué?', 'Tout d''abord, il vous faudra etre d''une calme extreme et ne pas\n s''en meler dans des débat inutile et vaines; ensuite vous ne devrez surtout pas...', '2017-04-30 17:58:47'),
(6, 'Les 7 Prophéties de 1933 - William Branham', '', '2017-05-01 21:09:48');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_utilisateur` varchar(25) NOT NULL,
  `prenom_utilisateur` varchar(25) NOT NULL,
  `nom_utilisateur` varchar(25) NOT NULL,
  `sexe_utilisateur` char(1) NOT NULL,
  `email_utilisateur` varchar(255) NOT NULL,
  `date_insc_utilisateur` datetime NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `pseudo_utilisateur` (`pseudo_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_conseil`) REFERENCES `titre_conseils` (`id_conseil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
