-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 23 nov. 2020 à 13:37
-- Version du serveur :  10.3.17-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `applicationinternet`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

CREATE TABLE `actions` (
  `id` int(11) NOT NULL COMMENT 'ID okres_countyu',
  `produit_id` int(11) NOT NULL COMMENT 'kraj_region',
  `code` varchar(9) COLLATE utf8_czech_ci NOT NULL COMMENT 'Kód okres_countyu',
  `actionPro` varchar(80) COLLATE utf8_czech_ci NOT NULL COMMENT 'Název okres_countyu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='okres_county';

--
-- Déchargement des données de la table `actions`
--

INSERT INTO `actions` (`id`, `produit_id`, `code`, `actionPro`) VALUES
(1, 2, 'JB0002', 'Remplir la '),
(2, 3, 'JB0003', 'Remplir le '),
(3, 4, 'JB0004', 'Remplir le '),
(4, 5, 'JB0005', 'Remplir '),
(5, 6, 'JB0006', 'Remplir '),
(6, 7, 'JB0007', 'Remplir '),
(7, 8, 'JB0008', 'Remplir '),
(8, 2, 'JB0009', 'Faire la rotation de la '),
(9, 4, 'JB0010', 'Faire la rotation de '),
(10, 5, 'JB0011', 'Faire la rotation de '),
(11, 6, 'JB0012', 'Faire la rotation de '),
(12, 7, 'JB0013', 'Faire la rotation de '),
(13, 9, 'JB0014', 'Enlever les '),
(14, 10, 'JB0015', 'Enlever les '),
(15, 11, 'JB0016', 'Enlever les '),
(16, 3, 'JB0017', 'Ramasser le dégat '),
(17, 5, 'JB0018', 'Ramasser le dégat '),
(18, 13, 'JB0019', 'Ramasser le dégat '),
(19, 17, 'JB0020', 'Ramasser le dégat '),
(21, 3, 'JB0017', 'Facer le '),
(22, 2, 'JB0018', 'Facer le '),
(23, 4, 'JB0019', 'Facer le '),
(24, 5, 'JB0020', 'Facer le '),
(25, 6, 'JB0021', 'Facer le '),
(26, 7, 'JB0022', 'Facer le '),
(27, 8, 'JB0023', 'Facer le '),
(28, 9, 'JB0024', 'Servir les clients '),
(29, 18, 'JB0025', 'Servir les clients ');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `task_id`, `name`, `comment`, `created`, `modified`, `user_id`) VALUES
(1, 1, 'admin', 'There was a mess of milk in the fridge, task to execute in a bigger time', '2020-09-18', '2020-09-28', 4),
(2, 1, 'Raphael', 'This is a comment', '2020-09-18', '2020-09-28', 5),
(3, 1, 'admin', 'I want to add a comment', '2020-09-18', '2020-09-28', 4),
(11, 1, 'Jessy', 'This is a comment', '2020-09-21', '2020-09-28', 0),
(13, 1, 'Fred', 'Can you this as soon as possible', '2020-09-22', '2020-09-28', 0);

-- --------------------------------------------------------

--
-- Structure de la table `emplacementproduits`
--

CREATE TABLE `emplacementproduits` (
  `id` int(11) NOT NULL COMMENT 'ID obce',
  `produit_id` int(11) NOT NULL COMMENT 'kraj_region',
  `action_id` int(11) NOT NULL COMMENT 'okres_county',
  `code` varchar(11) COLLATE utf8_czech_ci NOT NULL COMMENT 'Kód obce',
  `actionPro` varchar(80) COLLATE utf8_czech_ci NOT NULL COMMENT 'Název obce'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='obec_city';

--
-- Déchargement des données de la table `emplacementproduits`
--

INSERT INTO `emplacementproduits` (`id`, `produit_id`, `action_id`, `code`, `actionPro`) VALUES
(1, 5, 4, '100001', 'Frigidaire'),
(2, 2, 1, '100002', 'Alimentation'),
(3, 18, 29, '100004', 'Avant du magasin'),
(4, 3, 21, '100005', 'Cosmétique');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`, `status`) VALUES
(1, 'helfenburk_shody.jpg', 'files/add/', '2020-09-27 00:00:00', '2020-09-27 00:00:00', 1),
(3, 'JessyPicture.jpg', 'files/add/', '2020-10-05 13:42:34', '2020-10-05 13:42:34', 1);

-- --------------------------------------------------------

--
-- Structure de la table `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1, 'en_CA', 'Tasks', 1, 'information_task', 'Full the fridge of milk'),
(2, 'en_CA', 'Tasks', 3, 'information_task', 'You need to do this task as soon as possible.'),
(3, 'fr_CA', 'Tasks', 1, 'information_task', 'Remplir le frigidaire de lait'),
(4, 'fr_CA', 'Tasks', 3, 'information_task', 'Cette tâche est à faire d\'urgence !'),
(5, 'es_US', 'Tasks', 1, 'information_task', 'Füllen Sie den Kühlschrank mit Milch'),
(6, 'es_US', 'Tasks', 3, 'information_task', 'Diese Aufgabe ist so schnell wie möglich zu erledigen'),
(7, 'es_US', 'Tasks', 2, 'information_task', 'dies ist ein Test'),
(8, 'fr_CA', 'Comments', 1, 'comment', 'Il a eu un dégat de lait dans le frigidaire, tâche executer dans un temps plus gros'),
(9, 'es_US', 'Comments', 1, 'comment', 'Es gab ein Durcheinander von Milch im Kühlschrank, eine Aufgabe, die in größerer Zeit ausgeführt werden musste'),
(10, 'fr_CA', 'Comments', 2, 'comment', 'Ceci est un commentaire'),
(11, 'es_US', 'Comments', 2, 'comment', 'Dies ist ein Kommentar'),
(12, 'es_US', 'Comments', 3, 'comment', 'Ich möchte einen Kommentar hinzufügen'),
(13, 'es_US', 'Comments', 11, 'comment', 'Dies ist ein Kommentar'),
(14, 'es_US', 'Comments', 13, 'comment', 'Kannst du das so schnell wie möglich'),
(15, 'fr_CA', 'Comments', 11, 'comment', 'Ceci est un commentaire'),
(16, 'fr_CA', 'Comments', 13, 'comment', 'Pouvez-vous faire cela dès que possible'),
(17, 'fr_CA', 'Comments', 3, 'comment', 'Je veux ajouter un commentaire'),
(18, 'fr_CA', 'Tasks', 2, 'information_task', 'Ceci est un test');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL COMMENT 'ID kraj_regione',
  `code` varchar(7) COLLATE utf8_czech_ci NOT NULL,
  `actionPro` varchar(80) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='kraj_region';

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `code`, `actionPro`) VALUES
(2, 'CA002', 'Nourriture'),
(3, 'CA003', 'Parfum'),
(4, 'CA004', 'congelée'),
(5, 'CA005', 'les produits laitier'),
(6, 'CA006', 'La nourriture'),
(7, 'CA007', 'des friandises'),
(8, 'CA008', 'les produits de beautés'),
(9, 'CA009', 'pancarte promotionnel'),
(10, 'CA010', 'etiquettes de solde'),
(11, 'CA011', 'aliments périmé'),
(13, 'CA013', 'vitre'),
(17, 'CA017', 'produits ménager'),
(18, 'CA018', 'à faire payer'),
(19, 'CA019', 'en leur demandant leurs symptomes à la porte'),
(20, 'CA020', 'aux appels téléphonique');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Administrateur', 'L\'administrateur est en réalité le propriétaire du site web. Il a le plein contrôle.\r\n\r\nIl peut donner des tâches et modifier les utilisateurs', '0000-00-00', '0000-00-00'),
(2, 'Superviseur', 'Le superviseur s\'assure de superviser la déroulement des tâches.\r\n\r\nIl peut modifier les tâches et en crée.\r\n\r\nNe peux pas modifier les utilisateurs.', '0000-00-00', '0000-00-00'),
(3, 'Employée', 'L\'employée est la personne qui reçois les tâches, il doit s\'assurer qu\'avant la fin de la journée, tout est fini.', '0000-00-00', '0000-00-00'),
(4, 'Visiteur', 'Le visiteur est un grade provisoire pour la sécurité. Il ne peut pas voir les tâches temps qu\'il n\'est pas approuvé par l\'administrateur au sein des employées.', '0000-00-00', '0000-00-00'),
(5, 'Super-admin', 'L\'un des propiétaire du site web.\r\n\r\nIl peut envoyer des email au utilisateur pour confirmer leurs inscriptions.', '2020-10-14', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `task` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `task`, `created`, `modified`) VALUES
(1, 'Training', '2020-09-27 16:37:54', '2020-09-27 16:42:08'),
(2, 'City of Laval', '2020-09-27 16:38:31', '2020-09-27 16:42:16'),
(3, 'World', '2020-09-27 16:38:48', '2020-09-27 16:42:24');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `information_task` text NOT NULL,
  `emplacementproduit_id` int(11) NOT NULL,
  `forUser` int(10) NOT NULL DEFAULT 1,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `start_date`, `end_date`, `information_task`, `emplacementproduit_id`, `forUser`, `user_id`) VALUES
(1, '2020-09-15', '2020-09-22', 'Full the fridge of milk', 1, 1, 4),
(2, '2020-09-18', '2020-10-18', 'This is a test', 1, 1, 5),
(3, '2020-09-21', '2020-09-22', 'This task is a task to do as soon as possible', 1, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `tasks_files`
--

CREATE TABLE `tasks_files` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tasks_files`
--

INSERT INTO `tasks_files` (`id`, `task_id`, `file_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tasks_tags`
--

CREATE TABLE `tasks_tags` (
  `task_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tasks_tags`
--

INSERT INTO `tasks_tags` (`task_id`, `tag_id`) VALUES
(10, 1),
(10, 2),
(10, 3),
(12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tasks_title`
--

CREATE TABLE `tasks_title` (
  `id` int(11) NOT NULL,
  `tasks_title_id` int(11) NOT NULL,
  `kod` varchar(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  `other_information` text NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `gender`, `email`, `created`, `modified`, `other_information`, `role_id`) VALUES
(4, 'admin', '$2y$10$CZl89odjm3A9IC5MaIv/yuh.uCzZ9AkxlaLjKC46a6ILg9cBqvFcq', 'admin', 'admin', 'male', 'admin@admin.com', '2020-09-17', NULL, 'admin', 1),
(5, 'Rapahel', '$2y$10$9gzkrTiEn/mc6ius3/VigOCT6qU9aRaF7DiBAP7blEroXPzA2CNja', 'Raphael', 'Raphael', 'Mâle', 'raphael@hotmail.com', '2020-09-18', '2020-10-14', 'Je suis Raphael', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kraj_region_id` (`produit_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`task_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Index pour la table `emplacementproduits`
--
ALTER TABLE `emplacementproduits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kraj_region_id` (`produit_id`),
  ADD KEY `okres_county_id` (`action_id`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `task` (`task`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `obec_city_id` (`emplacementproduit_id`);

--
-- Index pour la table `tasks_files`
--
ALTER TABLE `tasks_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `file_id` (`file_id`);

--
-- Index pour la table `tasks_tags`
--
ALTER TABLE `tasks_tags`
  ADD PRIMARY KEY (`task_id`,`tag_id`),
  ADD KEY `tag_key` (`tag_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Index pour la table `tasks_title`
--
ALTER TABLE `tasks_title`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_title_id` (`tasks_title_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID okres_countyu', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `emplacementproduits`
--
ALTER TABLE `emplacementproduits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID obce', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID kraj_regione', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tasks_files`
--
ALTER TABLE `tasks_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tasks_title`
--
ALTER TABLE `tasks_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actions`
--
ALTER TABLE `actions`
  ADD CONSTRAINT `actions_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `produits` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Contraintes pour la table `emplacementproduits`
--
ALTER TABLE `emplacementproduits`
  ADD CONSTRAINT `emplacementproduits_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`),
  ADD CONSTRAINT `emplacementproduits_ibfk_2` FOREIGN KEY (`produit_id`) REFERENCES `produits` (`id`);

--
-- Contraintes pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`emplacementproduit_id`) REFERENCES `emplacementproduits` (`id`);

--
-- Contraintes pour la table `tasks_files`
--
ALTER TABLE `tasks_files`
  ADD CONSTRAINT `tasks_files_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `tasks_files_ibfk_3` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Contraintes pour la table `tasks_tags`
--
ALTER TABLE `tasks_tags`
  ADD CONSTRAINT `tasks_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Contraintes pour la table `tasks_title`
--
ALTER TABLE `tasks_title`
  ADD CONSTRAINT `tasks_title_ibfk_1` FOREIGN KEY (`tasks_title_id`) REFERENCES `tasks` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
