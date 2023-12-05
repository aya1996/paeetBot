-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2023 at 07:22 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paeetbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dialog` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `image`, `dialog`, `created_at`, `updated_at`) VALUES
(1, 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.', 'storage/abouts/HSOckyalau3uhVUYZYJDGhw8dkd4tDIRDSV9Xmm8.png', 1, '2023-04-02 17:19:26', '2023-12-04 21:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$qUjIH4jPH72Lw8ECRt2pP.aO5acA01DxzHORpOifk/unuihHd5BIi', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `msg`, `created_at`, `updated_at`) VALUES
(3, '7DH28uLemG', 'itsqw@j4bt.com', '6792812669', 'flKL9iVs9o', '2023-04-02 20:26:40', '2023-04-02 20:26:40'),
(4, 'hpTOFFmPLp', '6hhie@40sd.com', '2151044288', 'YUKuNhJ4e4', '2023-04-26 18:37:16', '2023-04-26 18:37:16'),
(5, 'Kaden Cherry', 'gavoxeh@mailinator.com', '0124577885', 'Est dolor dolores n', '2023-12-04 20:56:09', '2023-12-04 20:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `dialogs`
--

DROP TABLE IF EXISTS `dialogs`;
CREATE TABLE IF NOT EXISTS `dialogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dialogs`
--

INSERT INTO `dialogs` (`id`, `answer`, `question`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'val1', 'val1', 'storage/dialogs/R2VqFOVarn5bXJvmJEFbxiq3d5uXzzztCEqBrEln.png', 'H_bB0sAqLNg', '2023-04-16 21:49:32', '2023-04-16 21:54:42'),
(3, 'test test', 'val2', NULL, 'H_bB0sAqLNg', '2023-04-16 21:50:55', '2023-04-16 21:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

DROP TABLE IF EXISTS `f_a_q_s`;
CREATE TABLE IF NOT EXISTS `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `answer`, `video`, `image`, `created_at`, `updated_at`) VALUES
(1, 'hi', 'hi', NULL, 'storage/faqs/MZ6xTqlSXxoBqVYUSjRV3ccvH5U1uoneZ9f3JuxZ.png', '2023-03-23 08:53:59', '2023-12-05 07:12:10'),
(3, 'good morning', 'good morning', 'H_bB0sAqLNg', NULL, '2023-03-23 08:55:48', '2023-04-16 19:37:56'),
(5, 'مرحبا', 'مرحبا كيف الحال', NULL, NULL, '2023-03-27 11:08:57', '2023-03-27 11:08:57'),
(6, 'كيف حالك', 'بخير الحمد لله', NULL, NULL, '2023-12-04 20:06:59', '2023-12-04 20:06:59'),
(7, 'كم عمرك؟', '20', NULL, NULL, '2023-12-04 21:00:29', '2023-12-04 21:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'storage/galleries/a8aACa490rfHoU64qH7sm2Q2FR5xts9p3XQr3JML.webp', '2023-04-02 19:13:28', '2023-12-04 20:43:39'),
(2, 'storage/galleries/kjZGHgzlC8LfKikagYJ0IF9XMzA0EHYL3ym7EzDO.jpg', '2023-04-02 19:17:28', '2023-04-02 19:17:28'),
(3, 'storage/galleries/vWDk9mN7UwW9DNg9ZVgzw5uCF0Fmcv3iEutHXZ8b.jpg', '2023-04-02 19:17:36', '2023-04-02 19:17:36'),
(4, 'storage/galleries/llopiiKyLpbvogGgcA186zLLvn36dvxBjwIYZVkY.png', '2023-04-02 19:17:49', '2023-12-04 20:07:46'),
(6, 'storage/galleries/Bb1BVWCW9TP8V9MFedYh5BS8jDDzJoqDWVeS6QG4.jpg', '2023-12-04 21:11:35', '2023-12-04 21:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_11_092918_create_admins_table', 1),
(6, '2023_03_23_093640_create_f_a_q_s_table', 2),
(7, '2023_03_27_141017_create_abouts_table', 3),
(8, '2023_03_27_141030_create_contacts_table', 3),
(9, '2023_03_27_141319_create_dialogs_table', 3),
(10, '2023_03_27_141347_create_sliders_table', 3),
(11, '2023_03_27_141543_create_not_founds_table', 3),
(12, '2023_04_02_201843_create_galleries_table', 4),
(13, '2023_04_02_224458_create_testimonails_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `not_founds`
--

DROP TABLE IF EXISTS `not_founds`;
CREATE TABLE IF NOT EXISTS `not_founds` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `not_founds`
--

INSERT INTO `not_founds` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'test', '2023-04-03 08:35:49', '2023-04-03 08:35:49'),
(3, 'jhklk', '2023-04-03 09:13:34', '2023-04-03 09:13:34'),
(4, 'ffzsfsd', '2023-04-03 09:59:22', '2023-04-03 09:59:22'),
(5, 'val2', '2023-04-03 10:13:55', '2023-04-03 10:13:55'),
(6, 'vbxcbcv', '2023-04-03 10:18:12', '2023-04-03 10:18:12'),
(7, 'val2', '2023-04-03 10:18:39', '2023-04-03 10:18:39'),
(8, 'cfghfg', '2023-04-03 10:20:45', '2023-04-03 10:20:45'),
(9, 'اه', '2023-04-16 17:22:46', '2023-04-16 17:22:46'),
(10, 'tets', '2023-04-16 19:22:42', '2023-04-16 19:22:42'),
(11, 'welcome', '2023-04-16 19:22:53', '2023-04-16 19:22:53'),
(12, 'test', '2023-04-16 22:37:44', '2023-04-16 22:37:44'),
(13, 'madkdak', '2023-04-16 22:52:20', '2023-04-16 22:52:20'),
(14, 'ijasoifjoias', '2023-04-24 20:16:37', '2023-04-24 20:16:37'),
(15, 'h', '2023-04-24 20:19:25', '2023-04-24 20:19:25'),
(16, 'hghgh', '2023-12-04 20:56:57', '2023-12-04 20:56:57'),
(17, 'val', '2023-12-04 21:01:50', '2023-12-04 21:01:50'),
(18, 'val1', '2023-12-04 21:01:56', '2023-12-04 21:01:56'),
(19, 'dff', '2023-12-04 21:02:29', '2023-12-04 21:02:29'),
(20, 'fffffff', '2023-12-04 21:05:36', '2023-12-04 21:05:36'),
(21, 'hghghgh', '2023-12-04 21:10:24', '2023-12-04 21:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'عنوان تجريبي', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.', 'storage/sliders/pATtf55uJ1YVGYlfTm2KTUcPFlae1Kle7z0l6qq7.webp', '2023-04-02 17:52:57', '2023-12-04 20:42:34'),
(2, 'عنوان تجريبي 2', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.', 'storage/sliders/6sx8zw2EvVkReKVPbvSfNoPKOFNHbPYveafAWNQY.webp', '2023-04-02 17:53:19', '2023-04-26 18:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `testimonails`
--

DROP TABLE IF EXISTS `testimonails`;
CREATE TABLE IF NOT EXISTS `testimonails` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonails`
--

INSERT INTO `testimonails` (`id`, `name`, `job_title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'احمدعلي', 'المدير العام', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ”', 'storage/testimonails/6vsKN6UsOzLfakpIvjOhi3QIlns2IhvY6MQ4cnso.jpg', '2023-04-02 21:15:24', '2023-12-05 07:08:10'),
(2, 'ابراهيم محمد', 'اخصائي برمجة', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.', 'storage/testimonails/UrpzAg5RlqhQTfn4Sk4dsbQ1f9ZnMk61it9rx7AQ.png', '2023-12-04 21:39:13', '2023-12-04 21:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123123123', 'ahmed@123.com', 'storage/users/qjOS9waih7yTlwObbuE7G2Su2l35iOLw2Z4Ss3TW.jpg', NULL, '$2y$10$WIQThIKCcrGtOx/bO9nnBO0uTUVz57C39n4zFThY4XdGbczAJn61S', NULL, '2023-03-20 09:07:15', '2023-05-13 06:22:22'),
(3, 'ali', 'ali@123.com', 'storage/users/wOQFwfJK6RzSmWPGEN56qja0bnYZT0zcDLI3Eh37.jpg', NULL, '$2y$10$abWLl078cflNdbHDolU1QeAJ4i6zXd.BSBH/mG3iur1mnaJ8RzjNm', NULL, '2023-05-13 06:10:02', '2023-05-13 06:10:02'),
(4, 'Abraham Sampson', 'aya@gmail.com', 'storage/users/NF75FR4Gx9aTMeRq8EIScdGFWBMftTTADFA4gewe.jpg', NULL, '$2y$10$feTjxRZ3F5c0sVI0F6cmLew2Af/Umnr2i023mqa.edWqT9oabUUKq', NULL, '2023-12-04 20:58:07', '2023-12-04 20:58:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
