-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 nov. 2021 à 12:40
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `symfony_shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `carrier`
--

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` double NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carrier`
--

INSERT INTO `carrier` (`id`, `nom`, `description`, `prix`, `image_name`, `image_size`, `updated_at`) VALUES
(1, 'Chronopost', '<p>livraison &agrave; domicile&nbsp;</p>\r\n\r\n<p>3 / 4 jours ouvrables</p>', 500, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `image_name`, `updated_at`, `image_size`) VALUES
(1, 'Beauté', 'black-owned-business-marque-beaute-black-owned-62a88322a05261d222c88eebfd766f7d.jpg', '2021-10-09 11:42:51', 319189),
(2, 'Bien être', 'appar-1850804_640.jpg', '2021-10-09 22:24:48', 101371),
(3, 'Extension cheveaux & Perruques', 'tissage-cheveu-lisse-naturel-violet_400x.png', '2021-10-09 11:45:41', 101049),
(4, 'Afro - Mode', 'téléchargement (2).jpg', '2021-10-09 22:27:40', 9877);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(1, 'fall', 'baye', 'baye@fall.com', 'afafafa'),
(2, 'faye', 'douma', 'douma@faye', 'azefaerfaerf'),
(3, 'sow', 'bathie', 'baye@fall.com', 'tyehyebetrg');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211102211507', '2021-11-02 22:16:11', 1645),
('DoctrineMigrations\\Version20211102215519', '2021-11-02 22:55:27', 1713),
('DoctrineMigrations\\Version20211103101432', '2021-11-03 11:14:47', 2044),
('DoctrineMigrations\\Version20211103104804', '2021-11-03 11:48:19', 1243),
('DoctrineMigrations\\Version20211103140432', '2021-11-03 15:05:05', 328);

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texte` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`id`, `titre`, `texte`, `active`) VALUES
(1, 'Safar beauty! Le style afro en ligne', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1);

-- --------------------------------------------------------

--
-- Structure de la table `image_file`
--

CREATE TABLE `image_file` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `produit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `categorie_id` int(11) DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carousel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `slug`, `description`, `prix`, `image_name`, `image_size`, `updated_at`, `categorie_id`, `subtitle`, `carousel_id`) VALUES
(1, 'Perruques curly short', 'produit-robe-milenium', '<p>sdcsdc</p>', 6900, '51RydXnfBvL._AC_SY355_.jpg', 14713, '2021-10-09 13:39:37', 3, '100% Cheveux naturel', NULL),
(2, 'Perruque noir - Cheveaux naturels', 'produit-robe-mileniumm', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here</p>', 11999, 'noir-perruque-cheveux-naturels-pour-femme-bouclee.jpg', 72113, '2021-10-09 21:52:49', 3, NULL, NULL),
(3, 'Taïbasse Adja', 'produit-Manteau-milenium', '<p>fdv</p>', 9999, 'téléchargement (2).jpg', 9877, '2021-10-09 22:55:09', 4, NULL, NULL),
(4, 'Bundle Curly wave', '', '<p>content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their</p>', 23900, 's-l300.jpg', 15845, '2021-10-09 21:54:24', 3, NULL, NULL),
(5, 'Bundle lise Princesse', '', '<p>Praesent nec vehicula leo. Quisque in fringilla ipsum. Proin ex purus, placerat ut ex sit amet, iaculis sagittis libero. Curabitur imperdiet arcu nec faucibus ultricies. Curabitur quam sapien, malesuada quis ornare sed, interdum non purus</p>', 31999, 's-l400.jpg', 29095, '2021-10-09 22:22:20', 3, NULL, NULL),
(6, 'Robe Milenium', '', '<p>Suspendisse vel libero rhoncus, mollis nisl gravida, auctor magna. Proin vestibulum turpis eu mi porttitor, quis sollicitudin ipsum lacinia. Ut fringilla erat non pretium maximus. Integer volutpat porttitor nisi nec molestie.</p>', 17495, 'Robe-Africaine-Ample_400x.jpg', 18232, '2021-10-09 22:29:26', 4, NULL, NULL),
(7, 'Robe Cleopatra', '', '<p>Suspendisse vel libero rhoncus, mollis nisl gravida, auctor magna. Proin vestibulum turpis eu mi porttitor, quis sollicitudin ipsum lacinia. Ut fringilla erat non pretium maximus. Integer volutpat porttitor nisi nec molestie.</p>', 17490, 'robe-africaine-robe-africaine-courte-fleur-afro-nation-s-30073197297822_400x.jpg', 12241, '2021-10-09 22:30:25', 4, NULL, NULL),
(8, 'robe-Costum nuit de Dakar', '', '<p>Praesent aliquam enim eget metus tempus, nec dictum arcu convallis. Quisque sapien risus, sollicitudin ut libero id, sagittis pharetra velit. Duis vitae orci a erat volutpat lacinia</p>', 12900, 'téléchargement (1).jpg', 9184, '2021-10-09 22:33:25', 4, NULL, NULL),
(9, 'Bissap rouge Bio', '', '<p>Cras lobortis placerat sapien, ac bibendum lacus facilisis semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos</p>', 495, '28595-0w470h470_Fleurs_Bissap_Rouge_Sechees_Bio.jpg', 28619, '2021-10-09 22:37:20', 2, NULL, NULL),
(10, 'Kinkéliba séchées', '', '<p>Cras lobortis placerat sapien, ac bibendum lacus facilisis semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos</p>', 299, '61MD8ZBm25L._AC_SX569_.jpg', 33239, '2021-10-09 22:44:27', 2, NULL, NULL),
(11, 'Beurre de Karité 100% naturelle', '', '<p>Aenean imperdiet neque in aliquet tempor. Quisque convallis, tortor sit amet molestie sagittis, massa augue convallis erat, at sollicitudin purus felis ut quam. Phasellus sed neque pulvinar risus viverra malesuada. Aliquam ultrices rhoncus mauris, sit amet eleifend est. Sed in sollicitudin justo, nec maximus lorem. Vestibulum sit amet lacinia risus</p>', 799, 'beurre-de-karite-100-pur-500ml.jpg', 31386, '2021-10-09 22:44:52', 2, NULL, NULL),
(12, 'Gamme de produits à base d\'aloe vera', '', '<p>Aenean imperdiet neque in aliquet tempor. Quisque convallis, tortor sit amet molestie sagittis, massa augue convallis erat, at sollicitudin purus felis ut quam. Phasellus sed neque pulvinar risus viverra malesuada. Aliquam ultrices rhoncus mauris, sit amet eleifend est. Sed in sollicitudin justo, nec maximus lorem. Vestibulum sit amet lacinia risus</p>', 12000, 'téléchargement (5).jpg', 4772, '2021-10-09 22:40:28', 1, NULL, NULL),
(13, 'Gamme de produit-soins visage', '', '<p>Aenean imperdiet neque in aliquet tempor. Quisque convallis, tortor sit amet molestie sagittis, massa augue convallis erat, at sollicitudin purus felis ut quam. Phasellus sed neque pulvinar risus viverra malesuada. Aliquam ultrices rhoncus mauris, sit amet eleifend est. Sed in sollicitudin justo, nec maximus lorem. Vestibulum sit amet lacinia risus</p>', 6500, '10-soins-visage-et-corps-pour-sublimer-ma-peau.jpg', 43944, '2021-10-09 22:45:08', 1, NULL, NULL),
(14, 'Inoya peau - pour Homme', '', '<p>Aenean imperdiet neque in aliquet tempor. Quisque convallis, tortor sit amet molestie sagittis, massa augue convallis erat, at sollicitudin purus felis ut quam. Phasellus sed neque pulvinar risus viverra malesuada. Aliquam ultrices rhoncus mauris, sit amet eleifend est. Sed in sollicitudin justo, nec maximus lorem. Vestibulum sit amet lacinia risus</p>', 3600, 'je-traite-mes-taches-et-boutons.jpg', 37574, '2021-10-09 22:54:47', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `phone`, `country`) VALUES
(1, 'Julien@gmail.com', '[]', 'pass', 'Dupont', 'Julien', 102030405, 'France'),
(3, 'Julien@Dupont.com', '[\"ROLE_USER\"]', '$2y$13$XxoblTrl8Ot9mYTgCRhI/OaM7avK7qibGvS87bY9Q2zvagikvqUAi', 'Dupont', 'Julien', 102030405, 'France'),
(5, 'douma@faye.com', '[\"ROLE_USER\"]', '$2y$13$ycnmtSq5gM33aimuGsoMd.1ZJY8WYkrGieAnd3QLOa2rqfQfN7UCO', 'faye', 'douma', 102030405, 'France'),
(6, 'baye@fall.com', '[\"ROLE_USER\"]', '$2y$13$EK.MTES9UfVVuyFibsbzSuop5zzMg8DxxctZoXVr5VZBh41POO4Ea', 'fall', 'baye', 102030405, 'France'),
(9, 'douma@gmail.com', '[\"ROLE_USER\"]', '$2y$13$elRiIdsdmHUbQRrr2SlPmeXwBM1jdx4zj88wnhLwciTVKYaCjJrqu', 'faye', 'douma', 102030405, 'FR'),
(10, 'jean@dupont.com', '[\"ROLE_USER\"]', '$2y$13$zueX7fmIbzSgzyFvHAuIBuxV3dTwKT5BVrHI2FIs.YHWQhqwwGT2a', 'Jean', 'dupont', 203040506, 'FR');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5CECC7BEA76ED395` (`user_id`);

--
-- Index pour la table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67DA76ED395` (`user_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image_file`
--
ALTER TABLE `image_file`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3170B74B82EA2E54` (`commande_id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC27BCF5E72D` (`categorie_id`),
  ADD KEY `IDX_29A5EC27C1CE5B98` (`carousel_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `image_file`
--
ALTER TABLE `image_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adress`
--
ALTER TABLE `adress`
  ADD CONSTRAINT `FK_5CECC7BEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `FK_3170B74B82EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `FK_29A5EC27C1CE5B98` FOREIGN KEY (`carousel_id`) REFERENCES `carousel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
