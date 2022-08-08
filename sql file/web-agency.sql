-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 05:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_back_imgs`
--

CREATE TABLE `about_back_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_back_imgs`
--

INSERT INTO `about_back_imgs` (`id`, `name`, `post`, `back_img`, `created_at`, `updated_at`) VALUES
(1, 'Letha L. Young', 'Commercialisateur', 'about_back_image_background1.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'Harold D. Cote ', 'Développeur', 'about_back_image_background2.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'Letha L. Young', 'Commercialisateur', 'about_back_image_background3.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, 'Harold D. Cote ', 'Développeur', 'about_back_image_background4.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `about_headers`
--

CREATE TABLE `about_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_headers`
--

INSERT INTO `about_headers` (`id`, `heading`, `name`, `post`, `created_at`, `updated_at`) VALUES
(1, 'Nous aimons ce que nous faisons et nous aimons aider les autres à réussir dans ce qu\'ils aiment.', 'Gregory F. Parrino', 'PDG', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title1`, `description1`, `image1`, `title2`, `description2`, `image2`, `title3`, `description3`, `image3`, `created_at`, `updated_at`) VALUES
(1, 'Qui sommes-nous ?', 'We are a team of San Diego web design and development professionals who love partnering with good people and businesses to help them achieve online success', 'about1.png', 'Ce que nous faisons', 'Nous sommes une équipe de professionnels de la conception et du développement de sites web de San Diego qui aiment', 'about2.png', 'Pourquoi nous sommes', 'Nous sommes une équipe de professionnels de la conception et du développement de sites Web de San Diego qui aiment s\'associer à des personnes et des entreprises de qualité pour les aider à réussir en ligne.', 'about3.png', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title_one`, `title_two`, `title_three`, `button_text`, `button_url`, `created_at`, `updated_at`) VALUES
(1, 'default_banner1.jpg', 'BIENVENUE', 'AGENCE TI', 'Marketing et image de marque', 'COMMENCER', '', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'default_banner2.jpg', 'En ligne', 'MARKETING', 'SOLUTION', 'COMMENCER', '', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editors_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editors_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `category_id`, `title`, `slug`, `editors_comment`, `editors_photo`, `s_description`, `description`, `blog_photo`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Google Analytics : Une introduction pour les nouveaux utilisateurs', 'google-analytics:-une-introduction-pour-les-nouveaux-utilisateurs', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web', 'default_editor_img.png', 'Les mesures de suivi sont essentielles pour évaluer l\'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...', 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.', 'blog1.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, '1', '2', 'Erreurs effrayantes de marketing B2B et comment les éviter', 'erreurs-effrayantes-de-marketing-B2B-et-comment-les-éviter', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web', 'default_editor_img.png', 'Les mesures de suivi sont essentielles pour évaluer l\'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...', 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.', 'blog2.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, '1', '3', 'Atteindre un nouveau public avec des campagnes sociales payantes', 'atteindre-un-nouveau-public-avec-des-campagnes-sociales-payantes', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web', 'default_editor_img.png', 'Les mesures de suivi sont essentielles pour évaluer l\'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...', 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.', 'blog3.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, '1', '4', 'Atteindre un nouveau public avec des campagnes sociales payantes', 'atteindre-un-nouveau-public-avec-des-campagnes-sociales-payantes', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web', 'default_editor_img.png', 'Les mesures de suivi sont essentielles pour évaluer l\'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...', 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.', 'blog4.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(5, '1', '5', 'Atteindre un nouveau public avec des campagnes sociales payantes', 'atteindre-un-nouveau-public-avec-des-campagnes-sociales-payantes', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web', 'default_editor_img.png', 'Les mesures de suivi sont essentielles pour évaluer l\'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...', 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.', 'blog5.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(6, '1', '1', 'Atteindre un nouveau public avec des campagnes sociales payantes', 'atteindre-un-nouveau-public-avec-des-campagnes-sociales-payantes', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web', 'default_editor_img.png', 'Les mesures de suivi sont essentielles pour évaluer l\'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...', 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.', 'blog6.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Entreprise', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'Entreprise ', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'Divertissement', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, 'Nouvelles', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(5, 'Éducation', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_likes`
--

CREATE TABLE `blog_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buttons`
--

CREATE TABLE `buttons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `process_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `process_btn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_btn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_btn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buttons`
--

INSERT INTO `buttons` (`id`, `process_btn_text`, `process_btn_url`, `about_btn_text`, `about_btn_url`, `buy_btn_text`, `buy_btn_url`, `created_at`, `updated_at`) VALUES
(1, 'Démarrer', '', 'Démarrer', '', 'Démarrer', '', '2022-08-07 13:16:13', '2022-08-07 13:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `buy_nows`
--

CREATE TABLE `buy_nows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_now_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_now_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_nows`
--

INSERT INTO `buy_nows` (`id`, `image`, `title`, `description`, `buy_now_link`, `buy_now_url`, `created_at`, `updated_at`) VALUES
(1, 'buy_image1.jpg', 'Les outils du commerce : Marketing moderne', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam numy eirmod.', 'Achetez-le maintenant', '', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'buy_image2.jpg', 'Les outils du commerce : Marketing moderne', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam numy eirmod.', 'Achetez-le maintenant', '', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'buy_image3.jpg', 'Les outils du commerce : Marketing moderne', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam numy eirmod.', 'Achetez-le maintenant', '', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `client_messages`
--

CREATE TABLE `client_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `color_settings`
--

CREATE TABLE `color_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_menu_text_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_header_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_footer_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_settings`
--

INSERT INTO `color_settings` (`id`, `theme_color`, `theme_menu_text_color`, `theme_header_background`, `theme_footer_background`, `created_at`, `updated_at`) VALUES
(1, '#FF5082', '#F0F0F0', '#242C37', '#FF4A7D', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title`, `description`, `button_text`, `button_url`, `created_at`, `updated_at`) VALUES
(1, '\'Nous sommes l\'une des entreprises de conception de sites Web les plus efficaces.', 'Se mettre en ligne est facile. Réussir en ligne est une autre histoire. De nos jours, il vous faut plus qu\'un beau site web pour vous démarquer. Des solutions de marketing en ligne. Une conception web basée sur la conversion, associée à un plan de marketing générant des prospects, votre succès en ligne est inévitable.', 'Commencez', '', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `client_name`, `client_email`, `client_phone`, `message_subject`, `client_message`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'demo@demo.comm', '01783047819', 'git problem', 'lorem ipsum dsfasdf', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_accounts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_support` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_icon1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_icon2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_address_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_icon3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `contact_title1`, `new_accounts`, `contact_support`, `contact_icon1`, `contact_title2`, `email_one`, `email_two`, `contact_icon2`, `contact_title3`, `contact_address`, `contact_address_two`, `contact_icon3`, `created_at`, `updated_at`) VALUES
(1, 'Appelez-nous', 'Nouveaux comptes: 1-800-123-4567', 'Soutien: 1-800-123-4569', 'default_contact_icon1.jpg', 'Écrivez-nous', 'example@example.com', 'example@example.com', 'default_contact_icon2.jpg', 'Visitez-nous', '2231 Sycamore Lake Road', 'Green Bay, WI 54304', 'default_contact_icon3.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(1, 'QUE FAIT VOTRE SOCIÉTÉ DE CONSEIL ?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'DANS QUELS SECTEURS D\'ACTIVITÉ ÊTES-VOUS SPÉCIALISÉ ?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'COMMENT FONCTIONNE LE PROCESSUS ?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, 'POUVEZ-VOUS GARANTIR QUE NOTRE PLAN PERMETTRA DE LEVER DES CAPITAUX ?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(5, 'DANS QUELS SECTEURS D\'ACTIVITÉ ÊTES-VOUS SPÉCIALISÉ ?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(6, 'POUVEZ-VOUS GARANTIR QUE NOTRE PLAN PERMETTRA DE LEVER DES CAPITAUX ?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(7, 'POUVEZ-VOUS GARANTIR QUE NOTRE PLAN PERMETTRA DE LEVER DES CAPITAUX ?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(8, 'QU\'EST-CE QUI REND VOS PROJECTIONS FINANCIÈRES SPÉCIALES ?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(9, 'HOW DOES THE PROCESS WORK?', 'Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s\'agit d\'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l\'engager.', '2022-08-07 13:16:13', '2022-08-07 13:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `faq_top`
--

CREATE TABLE `faq_top` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_tops`
--

CREATE TABLE `faq_tops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_two` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_three` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_tops`
--

INSERT INTO `faq_tops` (`id`, `title_one`, `description_one`, `title_two`, `description_two`, `title_three`, `description_three`, `created_at`, `updated_at`) VALUES
(1, 'Méthodes de paiement', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.', 'Solutions de systèmes', 'Dolore magna aliquyam erat, sed diam voluptua vero eos et accusam et justo duo dolores et ea rebum.', 'Support technique', 'Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet.', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `faq_unanswer_q_s`
--

CREATE TABLE `faq_unanswer_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_unanswer_q_s`
--

INSERT INTO `faq_unanswer_q_s` (`id`, `title`, `button_text`, `button_url`, `background_img`, `created_at`, `updated_at`) VALUES
(1, 'Une question sans réponse ?', 'COMMENCER', '', 'default_faq_bottom_img.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1/2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(2, '1/2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(3, '1/2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(4, '1/2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(5, '1/2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(6, '1/2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!', '2022-08-07 13:16:13', '2022-08-07 13:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_name_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_name_id`, `gallery_title`, `gallery_photo`, `created_at`, `updated_at`) VALUES
(1, '1', 'Société de conception de sites Web', 'gallery1.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, '2', 'Conception de logo', 'gallery2.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, '3', 'Conception graphique', 'gallery3.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, '1', 'Animation 3D', 'gallery4.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(5, '1', 'Applications Android', 'gallery5.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(6, '2', 'Applications Android', 'gallery4.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_names`
--

CREATE TABLE `gallery_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_names`
--

INSERT INTO `gallery_names` (`id`, `gallery_name`, `created_at`, `updated_at`) VALUES
(1, 'Conception Web', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'Développement web', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'Conception graphique', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `common_button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrow_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_logo`, `footer_logo`, `favicon`, `phone`, `common_button_text`, `arrow_icon`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'site_logo.png', 'footer_logo.png', 'favicon.png', '1-800-123-4567', 'Get Started', '<i class=\"fa fa-angle-up\"></i>', '© COPYRIGHT 2022 ALL RIGHTS RESERVED', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_10_28_084707_create_sessions_table', 1),
(7, '2021_10_28_112930_create_general_settings_table', 1),
(8, '2021_10_28_125049_create_color_settings_table', 1),
(9, '2021_10_28_141410_create_socialurls_table', 1),
(10, '2021_10_28_153344_create_contacts_table', 1),
(11, '2021_10_28_161312_create_subscribers_table', 1),
(12, '2021_10_29_111104_create_theme_settings_table', 1),
(13, '2021_10_29_121341_create_visits_table', 1),
(14, '2022_05_17_102835_create_processes_table', 1),
(15, '2022_05_17_105038_create_companies_table', 1),
(16, '2022_05_17_105856_create_services_table', 1),
(17, '2022_05_17_122923_create_tests_table', 1),
(18, '2022_05_18_075617_create_contactuses_table', 1),
(19, '2022_05_18_083921_create_about_headers_table', 1),
(20, '2022_05_18_085025_create_about_us_table', 1),
(21, '2022_05_18_085856_create_reviews_table', 1),
(22, '2022_05_18_110141_create_about_back_imgs_table', 1),
(23, '2022_05_18_122422_create_client_messages_table', 1),
(24, '2022_05_19_075009_create_blog_categories_table', 1),
(25, '2022_05_19_080134_create_mstretegies_table', 1),
(26, '2022_05_19_083347_create_testimonials_table', 1),
(27, '2022_05_19_091344_create_blogs_table', 1),
(28, '2022_05_19_120530_create_buy_nows_table', 1),
(29, '2022_05_19_123128_create_teams_table', 1),
(30, '2022_05_19_150615_create_blog_comments_table', 1),
(31, '2022_05_20_102653_create_galleries_table', 1),
(32, '2022_05_20_130331_create_faqs_table', 1),
(33, '2022_05_21_062537_create_gallery_names_table', 1),
(34, '2022_05_23_065806_create_banners_table', 1),
(35, '2022_05_23_071806_create_faq_top_models_table', 1),
(36, '2022_05_23_095942_create_start_projects_table', 1),
(37, '2022_05_23_101804_create_faq_tops_table', 1),
(38, '2022_05_23_120943_create_faq_unanswer_q_s_table', 1),
(39, '2022_05_23_213024_create_trix_rich_texts_table', 1),
(40, '2022_05_24_142424_create_blog_likes_table', 1),
(41, '2022_05_25_065930_create_features_table', 1),
(42, '2022_05_30_154945_create_title_settings_table', 1),
(43, '2022_06_01_093750_create_buttons_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstretegies`
--

CREATE TABLE `mstretegies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mstretegies`
--

INSERT INTO `mstretegies` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ressources pour le marketing et la conception de sites Web B2B', 'L\'acquisition de clients B2B n\'est pas la même que celle de clients B2C : un site Web B2B, le message de la marque et le marketing de contenu jouent un rôle très différent. Nous comprenons le marketing B2B et l\'entonnoir de vente, ainsi que les tactiques qui génèrent et nourrissent les prospects idéaux.', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `process_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `title`, `description`, `process_photo`, `created_at`, `updated_at`) VALUES
(1, 'Développement', 'Nous utilisons des tactiques de marketing stratégique dont l\'efficacité a été prouvée.', 'process2.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'Design', 'Nous utilisons des tactiques de marketing stratégique dont l\'efficacité a été prouvée.', 'process4.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'Soutien', 'Nous utilisons des tactiques de marketing stratégique dont l\'efficacité a été prouvée.', 'process1.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, 'Stratégie', 'Nous utilisons des tactiques de marketing stratégique dont l\'efficacité a été prouvée.', 'process3.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `company_name`, `name`, `comment`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Assurance des yeux', 'merGeorge M. Batyketing', 'J\'avais besoin de plus de prospects pour mes services. Pay-per-click, bannières et peut-être même des brochures. Ils ont fait une analyse de mon site existant. Il s\'est avéré que mon site est interdit par Google, et je ne le savais pas !', 'review1.jpg', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(2, 'Assurance-vie', 'merGeorge M. Batyketing', 'J\'avais besoin de plus de prospects pour mes services. Pay-per-click, bannières et peut-être même des brochures. Ils ont fait une analyse de mon site existant. Il s\'est avéré que mon site est interdit par Google, et je ne le savais pas !', 'review2.jpg', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(3, 'assurance-accident', 'merGeorge M. Batyketing', 'J\'avais besoin de plus de prospects pour mes services. Pay-per-click, bannières et peut-être même des brochures. Ils ont fait une analyse de mon site existant. Il s\'est avéré que mon site est interdit par Google, et je ne le savais pas !', 'review3.jpg', '2022-08-07 13:16:13', '2022-08-07 13:16:13'),
(4, 'Sauver l\'assurance-vie', 'merGeorge M. Batyketing', 'J\'avais besoin de plus de prospects pour mes services. Pay-per-click, bannières et peut-être même des brochures. Ils ont fait une analyse de mon site existant. Il s\'est avéré que mon site est interdit par Google, et je ne le savais pas !', 'review4.jpg', '2022-08-07 13:16:13', '2022-08-07 13:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_long_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_slug`, `service_short_description`, `service_long_description`, `service_icon`, `service_image`, `created_at`, `updated_at`) VALUES
(1, 'Marketing', 'merketing', 'Le Lorem Ipsum est tout simplement le texte factice de l\'industrie de l\'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l\'industrie depuis les années 1500, lorsqu\'un imprimeur inconnu a pris une galère de caractères et l\'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l\'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.', 'Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d\'entre eux ont été altérés d\'une manière ou d\'une autre, par l\'injection d\'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d\'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d\'humour injecté, de mots non caractéristiques, etc.', 'service_icon_1.png', 'default_service_img.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'Optimisation du référencement', 'optimisation-du-référencement', 'Le Lorem Ipsum est tout simplement le texte factice de l\'industrie de l\'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l\'industrie depuis les années 1500, lorsqu\'un imprimeur inconnu a pris une galère de caractères et l\'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l\'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.', 'Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d\'entre eux ont été altérés d\'une manière ou d\'une autre, par l\'injection d\'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d\'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d\'humour injecté, de mots non caractéristiques, etc.', 'service_icon_2.png', 'default_service_img.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'Design', 'design', 'Le Lorem Ipsum est tout simplement le texte factice de l\'industrie de l\'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l\'industrie depuis les années 1500, lorsqu\'un imprimeur inconnu a pris une galère de caractères et l\'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l\'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.', 'Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d\'entre eux ont été altérés d\'une manière ou d\'une autre, par l\'injection d\'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d\'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d\'humour injecté, de mots non caractéristiques, etc.', 'service_icon_3.png', 'default_service_img.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, 'Optimisation du référencement', 'optimisation-du-référencement', 'Le Lorem Ipsum est tout simplement le texte factice de l\'industrie de l\'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l\'industrie depuis les années 1500, lorsqu\'un imprimeur inconnu a pris une galère de caractères et l\'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l\'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.', 'Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d\'entre eux ont été altérés d\'une manière ou d\'une autre, par l\'injection d\'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d\'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d\'humour injecté, de mots non caractéristiques, etc.', 'service_icon_4.png', 'default_service_img.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(5, 'Commerce électronique', 'commerce-électronique', 'Le Lorem Ipsum est tout simplement le texte factice de l\'industrie de l\'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l\'industrie depuis les années 1500, lorsqu\'un imprimeur inconnu a pris une galère de caractères et l\'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l\'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.', 'Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d\'entre eux ont été altérés d\'une manière ou d\'une autre, par l\'injection d\'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d\'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d\'humour injecté, de mots non caractéristiques, etc.', 'service_icon_5.png', 'default_service_img.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(6, 'Image de marque', 'image-de-marque', 'Le Lorem Ipsum est tout simplement le texte factice de l\'industrie de l\'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l\'industrie depuis les années 1500, lorsqu\'un imprimeur inconnu a pris une galère de caractères et l\'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l\'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.', 'Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d\'entre eux ont été altérés d\'une manière ou d\'une autre, par l\'injection d\'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d\'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d\'humour injecté, de mots non caractéristiques, etc.', 'service_icon_6.png', 'default_service_img.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5D0bm07i5MtjnIoVNsTIQ76iewBSnPB2kbz9odrK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.108 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZGhwWFVqYm9LdU9Od1FVNzNFa2hSQ3k3ajZWcHUyS1NmUFRHeHU2YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9iYW5uZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUUYybko1M3NyS0RQU09mWVB2RWVSdTFsVEZoc0tYSnk3N3Rja0wzY1liZ2RPWFJQUUV6R2EiO3M6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1659900205);

-- --------------------------------------------------------

--
-- Table structure for table `shetabit_visits`
--

CREATE TABLE `shetabit_visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useragent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `visitor_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socialurls`
--

CREATE TABLE `socialurls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialurls`
--

INSERT INTO `socialurls` (`id`, `fb_url`, `instagram_url`, `youtube_url`, `twitter_url`, `linkedin_url`, `created_at`, `updated_at`) VALUES
(1, '#', '#', '#', '#', '#', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `start_projects`
--

CREATE TABLE `start_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `start_projects`
--

INSERT INTO `start_projects` (`id`, `title`, `meta_title`, `button_text`, `button_url`, `created_at`, `updated_at`) VALUES
(1, 'Commençons votre projet', 'Nous vous aiderons à atteindre vos objectifs et à développer votre activité.', 'Parlons-en', '', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'email@email.com', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expertise_name_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise_percent_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise_name_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise_percent_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise_name_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise_percent_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise_name_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise_percent_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `member_name`, `team_slug`, `member_designation`, `member_details`, `member_phone`, `member_email`, `expertise_name_one`, `expertise_percent_one`, `expertise_name_two`, `expertise_percent_two`, `expertise_name_three`, `expertise_percent_three`, `expertise_name_four`, `expertise_percent_four`, `facebook_link`, `twitter_link`, `google_plus_link`, `youtube_link`, `linkedin_link`, `member_photo`, `created_at`, `updated_at`) VALUES
(1, 'George M. Baty', 'DÉVELOPPEUR-PRINCIPAL', 'DÉVELOPPEUR PRINCIPAL', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.', '1-800-123-4567', 'DotCreative@example.com', 'DESIGN WEB PERSONNALISÉ', '78%', 'SITES RÉACTIFS / MOBILES', '66%', 'CONCEPTION ET INTÉGRATION D\'E-MAILS', '90%', 'EXPERTISE UI / UX', '40%', 'https://www.facebook.com/rajsarkar.wti/', 'https://twitter.com/raj_sorker', '', 'https://www.youtube.com/webtraininginstitute', 'https://www.linkedin.com/in/webtraininginstitute/', 'team_membar1.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'Nellie E. Crawford', 'DIRECTEUR-DE-L\'ART', 'DIRECTEUR DE L\'ART', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.', '1-800-123-4567', 'DotCreative@example.com', 'DESIGN WEB PERSONNALISÉ', '78%', 'SITES RÉACTIFS / MOBILES', '66%', 'CONCEPTION ET INTÉGRATION D\'E-MAILS', '', 'EXPERTISE UI / UX', '40%', 'https://www.facebook.com/rajsarkar.wti/', 'https://twitter.com/raj_sorker', '', 'https://www.youtube.com/webtraininginstitute', '', 'team_membar2.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'Josephine Anderson', 'DESIGNER-SENIOR', 'DESIGNER SENIOR', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.', '1-800-123-4567', 'DotCreative@example.com', 'DESIGN WEB PERSONNALISÉ', '78%', 'SITES RÉACTIFS / MOBILES', '66%', 'CONCEPTION ET INTÉGRATION D\'E-MAILS', '', 'EXPERTISE UI / UX', '', 'https://www.facebook.com/rajsarkar.wti/', 'https://twitter.com/raj_sorker', '', 'https://www.youtube.com/webtraininginstitute', 'https://www.linkedin.com/in/webtraininginstitute/', 'team_membar3.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, 'Ricardo T. Obrien', 'PDG', 'PDG', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.', '1-800-123-4567', 'DotCreative@example.com', 'DESIGN WEB PERSONNALISÉ', '78%', 'SITES RÉACTIFS / MOBILES', '66%', 'CONCEPTION ET INTÉGRATION D\'E-MAILS', '', 'EXPERTISE UI / UX', '80%', 'https://www.facebook.com/rajsarkar.wti/', '', '', '', 'https://www.linkedin.com/in/webtraininginstitute/', 'team_membar4.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(5, 'Bill C. Damico', 'MARKETER', 'MARKETER', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.', '1-800-123-4567', 'DotCreative@example.com', 'DESIGN WEB PERSONNALISÉ', '78%', 'SITES RÉACTIFS / MOBILES', '66%', 'CONCEPTION ET INTÉGRATION D\'E-MAILS', '66%', 'EXPERTISE UI / UX', '80%', 'https://www.facebook.com/rajsarkar.wti/', '', '', '', '', 'team_membar5.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(6, 'Nicholas A. Davis', 'DÉVELOPPEUR-PRINCIPAL', 'DÉVELOPPEUR PRINCIPAL', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.', '1-800-123-4567', 'DotCreative@example.com', 'DESIGN WEB PERSONNALISÉ', '78%', 'SITES RÉACTIFS / MOBILES', '66%', 'CONCEPTION ET INTÉGRATION D\'E-MAILS', '90%', 'EXPERTISE UI / UX', '40%', 'https://www.facebook.com/rajsarkar.wti/', 'https://twitter.com/raj_sorker', '', 'https://www.youtube.com/webtraininginstitute', 'https://www.linkedin.com/in/webtraininginstitute/', 'team_membar1.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `user_name`, `user_review`, `user_photo`, `created_at`, `updated_at`) VALUES
(1, 'Josephine B. Anderson', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.', 'testimonial_img1.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(2, 'George M. Baty', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.', 'testimonial_img2.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(3, 'Jeffrey P. McAllister', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.', 'testimonial_img3.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(4, 'Janine T. Austin', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.', 'testimonial_img4.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(5, 'Kelly L. McMeans', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.', 'testimonial_img5.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12'),
(6, 'Charles K. Silvey', 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web qui peut réellement écouter et comprendre ce dont vous avez besoin. Je suis 100% satisfait de ces gars-là.', 'testimonial_img1.jpg', '2022-08-07 13:16:12', '2022-08-07 13:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theme_settings`
--

CREATE TABLE `theme_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'light-layout',
  `nav` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'expanded',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_settings`
--

INSERT INTO `theme_settings` (`id`, `user_id`, `theme`, `nav`, `created_at`, `updated_at`) VALUES
(1, 1, 'light-layout', 'expanded', '2022-08-07 13:16:12', '2022-08-07 13:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `title_settings`
--

CREATE TABLE `title_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_details_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_details_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_details_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title_settings`
--

INSERT INTO `title_settings` (`id`, `about_title`, `service_title`, `service_details_title`, `blog_title`, `blog_details_title`, `team_title`, `team_details_title`, `testimonial_title`, `contact_title`, `faq_title`, `feature_title`, `gallery_title`, `created_at`, `updated_at`) VALUES
(1, 'À propos de', 'Service', 'Détails du service', 'Blogs', 'Détails du blog', 'Équipes', 'Détails de l\'équipe', 'Témoignages', 'Contacts', 'FAQ', 'Caractéristiques', 'Galleries', '2022-08-07 13:16:13', '2022-08-07 13:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `trix_attachments`
--

CREATE TABLE `trix_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` int(10) UNSIGNED DEFAULT NULL,
  `attachable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pending` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trix_rich_texts`
--

CREATE TABLE `trix_rich_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2022-08-07 13:16:12', '$2y$10$QF2nJ53srKDPSOfYPvEeRu1lTFhsKXJy77tckL3cYbgdOXRPQEzGa', NULL, NULL, NULL, NULL, NULL, '2022-08-07 13:16:12', '2022-08-07 13:16:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_back_imgs`
--
ALTER TABLE `about_back_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_headers`
--
ALTER TABLE `about_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_comments_email_unique` (`email`);

--
-- Indexes for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buttons`
--
ALTER TABLE `buttons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_nows`
--
ALTER TABLE `buy_nows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_messages`
--
ALTER TABLE `client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_settings`
--
ALTER TABLE `color_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_top`
--
ALTER TABLE `faq_top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_tops`
--
ALTER TABLE `faq_tops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_unanswer_q_s`
--
ALTER TABLE `faq_unanswer_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_names`
--
ALTER TABLE `gallery_names`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gallery_names_gallery_name_unique` (`gallery_name`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstretegies`
--
ALTER TABLE `mstretegies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shetabit_visits`
--
ALTER TABLE `shetabit_visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shetabit_visits_visitable_type_visitable_id_index` (`visitable_type`,`visitable_id`),
  ADD KEY `shetabit_visits_visitor_type_visitor_id_index` (`visitor_type`,`visitor_id`);

--
-- Indexes for table `socialurls`
--
ALTER TABLE `socialurls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `start_projects`
--
ALTER TABLE `start_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_settings`
--
ALTER TABLE `theme_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_settings`
--
ALTER TABLE `title_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trix_attachments`
--
ALTER TABLE `trix_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trix_rich_texts_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_back_imgs`
--
ALTER TABLE `about_back_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_headers`
--
ALTER TABLE `about_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_likes`
--
ALTER TABLE `blog_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buttons`
--
ALTER TABLE `buttons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buy_nows`
--
ALTER TABLE `buy_nows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `color_settings`
--
ALTER TABLE `color_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq_top`
--
ALTER TABLE `faq_top`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_tops`
--
ALTER TABLE `faq_tops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq_unanswer_q_s`
--
ALTER TABLE `faq_unanswer_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_names`
--
ALTER TABLE `gallery_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `mstretegies`
--
ALTER TABLE `mstretegies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shetabit_visits`
--
ALTER TABLE `shetabit_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialurls`
--
ALTER TABLE `socialurls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `start_projects`
--
ALTER TABLE `start_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theme_settings`
--
ALTER TABLE `theme_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `title_settings`
--
ALTER TABLE `title_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trix_attachments`
--
ALTER TABLE `trix_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
