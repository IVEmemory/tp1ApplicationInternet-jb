-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 18 sep. 2020 à 18:49
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
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `task_id`, `name`, `comment`, `created`, `modified`) VALUES
(1, 1, 'admin', 'Il a eu un dégat de lait dans le frigidaire, tâche executer dans un temps plus gros', '2020-09-18', NULL),
(2, 1, 'Raphael', 'Ceci est un commentaire', '2020-09-18', NULL),
(3, 1, 'admin', 'Je veux ajouté un commentaire', '2020-09-18', '2020-09-18');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Administrateur', 'L\'administrateur est en réalité le propriétaire du site web. Il a le plein contrôle.\r\n\r\nIl peut donner des tâches et modifier les utilisateurs'),
(2, 'Superviseur', 'Le superviseur s\'assure de superviser la déroulement des tâches.\r\n\r\nIl peut modifier les tâches et en crée.\r\n\r\nNe peux pas modifier les utilisateurs.'),
(3, 'Employée', 'L\'employée est la personne qui reçois les tâches, il doit s\'assurer qu\'avant la fin de la journée, tout est fini.'),
(4, 'Visiteur', 'Le visiteur est un grade provisoire pour la sécurité. Il ne peut pas voir les tâches temps qu\'il n\'est pas approuvé par l\'administrateur au sein des employées.');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `information_task` text NOT NULL,
  `forUser` int(10) NOT NULL DEFAULT 1,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `start_date`, `end_date`, `information_task`, `forUser`, `user_id`) VALUES
(1, '2020-09-15', '2020-09-22', 'Remplir le lait dans le frigo', 1, 4),
(2, '2020-09-18', '2020-10-18', 'Ceci est un test', 1, 5);

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
  `date_creation` date NOT NULL,
  `date_modified` date DEFAULT NULL,
  `other_information` text NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `gender`, `email`, `date_creation`, `date_modified`, `other_information`, `role_id`) VALUES
(1, 'IVEmemory', '$2y$10$DsuWfbnYyN27kbXP03IOwePsYMrZw5fUf1BXvNyYnz6WHutpL.hAy', 'Jessy', 'Berube', 'Mâle', 'jessy2540@hotmail.com', '2020-09-15', NULL, 'Je suis étudiant au collège Montmorency Laval', 1),
(4, 'admin', '$2y$10$CZl89odjm3A9IC5MaIv/yuh.uCzZ9AkxlaLjKC46a6ILg9cBqvFcq', 'admin', 'admin', 'male', 'admin@admin.com', '2020-09-17', NULL, 'admin', 1),
(5, 'Rapahel', '$2y$10$9gzkrTiEn/mc6ius3/VigOCT6qU9aRaF7DiBAP7blEroXPzA2CNja', 'Raphael', 'Raphael', 'Mâle', 'raphael@hotmail.com', '2020-09-18', NULL, 'Je suis Raphael', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`task_id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Contraintes pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
