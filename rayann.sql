-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 12 يوليو 2023 الساعة 03:01
-- إصدار الخادم: 5.6.51-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rayann`
--

-- --------------------------------------------------------

--
-- بنية الجدول `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'BREAK FAST', 0, '2023-06-26 04:38:31', '2023-06-26 09:14:33'),
(5, 'SANDWICH', 0, '2023-06-26 04:51:20', '2023-06-26 09:15:32'),
(6, 'Deserts', 0, '2023-06-26 04:51:40', '2023-06-26 04:51:40'),
(7, 'BURGER', 0, '2023-06-26 06:20:00', '2023-06-26 09:16:18'),
(8, 'HAWASHI', 0, '2023-06-26 06:26:58', '2023-06-26 09:17:25'),
(9, 'PASTA', 0, '2023-06-26 06:27:23', '2023-06-26 09:18:19'),
(10, 'PIZZA', 0, '2023-06-26 06:27:38', '2023-06-26 09:18:44'),
(11, 'MAIN COURSE', 0, '2023-06-26 06:28:02', '2023-06-26 09:19:10'),
(12, 'CHILDREN MEALS', 0, '2023-06-26 09:19:42', '2023-06-26 09:19:42'),
(13, 'SOUP', 0, '2023-06-26 09:20:16', '2023-06-26 09:20:16'),
(14, 'SALAD', 0, '2023-06-26 09:20:41', '2023-06-26 09:20:41'),
(15, 'APPETIZER', 0, '2023-06-26 09:21:38', '2023-06-26 09:22:11'),
(16, 'EXTRAS', 0, '2023-06-26 09:22:39', '2023-06-26 09:22:39'),
(18, 'WAFFLE', 0, '2023-06-26 09:24:07', '2023-06-26 09:24:07'),
(19, 'COLD DRINKS', 0, '2023-06-26 09:26:38', '2023-06-26 09:26:38'),
(20, 'HOT DRINKS', 0, '2023-06-26 09:26:55', '2023-06-26 09:26:55'),
(21, 'FRESH JUICE', 0, '2023-06-26 09:27:35', '2023-06-26 09:27:35'),
(22, 'MILK SHAKE', 0, '2023-06-26 09:28:11', '2023-06-26 09:28:11'),
(23, 'SODA COKTIAL', 0, '2023-06-26 09:28:40', '2023-06-26 09:28:40');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
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
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_25_125910_create_offers_table', 2),
(7, '2023_06_25_130853_add_status_to_offers_table', 3),
(8, '2023_06_25_140506_create_category_table', 4),
(9, '2023_06_26_080054_create_products_table', 5),
(10, '2023_06_26_080447_add_status_to_products_table', 6),
(11, '2023_06_26_084226_add_category_id_to_products_table', 7),
(12, '2023_06_26_133426_create_reservation_table', 8),
(13, '2023_06_26_150018_add_email_to_reservation_table', 9);

-- --------------------------------------------------------

--
-- بنية الجدول `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `offers`
--

INSERT INTO `offers` (`id`, `name`, `small_desc`, `image`, `created_at`, `updated_at`, `status`) VALUES
(1, 'happy hour', 'Discover the ultimate happy hour experience at our restaurant,where you can enjoy <span class=\"id-color\">30% off all dishes and drinks from 4-5 pm every day</span>', '1687699530.jpeg', '2023-06-25 10:25:30', '2023-06-26 10:08:17', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`, `status`, `category_id`) VALUES
(1, 'American Hot Dog / هوت دوج أمريكى', 'Hotdog', 160, '2023-06-26 05:24:25', '2023-07-12 15:57:44', 0, 3),
(3, 'quesadilla omelette / كساديا أومليت', 'quesadilla omelette', 70, '2023-06-26 06:29:23', '2023-06-26 09:45:19', 0, 3),
(4, 'Vega Sandwich /فياجرا ساندوتش', 'Vega Sandwich', 120, '2023-06-26 06:29:54', '2023-06-26 06:29:54', 0, 5),
(5, 'Fried Shrimp / فرايد شرمب', 'Shrimp', 100, '2023-06-26 06:35:37', '2023-06-26 06:35:37', 0, 5),
(6, 'Tortella Burger / تورتيلا برجر', 'Tortella / Burger', 100, '2023-06-26 06:38:34', '2023-06-26 06:38:34', 0, 7),
(7, 'Pasta red sauce / مكرونة ريد صوص', 'Pasta/red/sauce', 45, '2023-06-26 07:29:49', '2023-06-26 07:29:49', 0, 9),
(8, 'Pizza Toast / بيتزا توست', 'Pizza  Toast', 90, '2023-06-26 09:41:29', '2023-06-26 09:41:29', 0, 3),
(9, 'quesadilla omelette / كساديا أومليت', 'quesadilla omelette / كساديا أومليت', 70, '2023-07-04 10:17:13', '2023-07-04 10:17:13', 0, 3),
(10, 'cheese Club / نادى الجبنة', 'cheese Club / نادى الجبنة', 75, '2023-07-04 10:17:43', '2023-07-04 10:18:23', 0, 3),
(11, 'Smoky Club /نادى المدخن', 'Smoky Club/نادى المدخن', 80, '2023-07-04 10:18:45', '2023-07-04 10:18:45', 0, 3),
(12, 'Smoked quesadilla / كاساديا سموكيد', 'Smoked quesadilla', 95, '2023-07-04 10:19:10', '2023-07-04 10:19:10', 0, 3),
(13, 'Quesadilla cheese / كساديا تشيز', 'Quesadilla cheese', 90, '2023-07-04 10:19:44', '2023-07-04 10:19:44', 0, 3),
(14, 'Oriental breakfast  / فطار اورينتال', 'Oriental breakfast', 75, '2023-07-04 10:20:17', '2023-07-04 10:20:17', 0, 3),
(15, 'Falafel Wrap / فلافل راب', 'Falafel Wrap', 30, '2023-07-04 10:20:51', '2023-07-04 10:20:51', 0, 3),
(16, 'Club Sandwich / كلوب ساندوتش', 'Club Sandwich', 90, '2023-07-04 10:21:47', '2023-07-04 10:21:47', 0, 5),
(17, 'Chicken Philiys / فيليس تشيكن', 'Chicken Philiys', 85, '2023-07-04 10:22:16', '2023-07-04 10:23:01', 0, 5),
(18, 'Cordon Blue / كوردن بلو', 'Cordon Blue', 110, '2023-07-04 10:22:38', '2023-07-04 10:23:10', 0, 5),
(19, 'Mashroom Bebar Burger / مشروم بيبر برجر', 'Mashroom Bebar Burger', 100, '2023-07-04 10:38:03', '2023-07-04 10:38:03', 0, 7),
(20, 'Mega Burger / ميجا برجر', 'Mega Burger', 100, '2023-07-04 10:38:35', '2023-07-04 10:38:35', 0, 7),
(21, 'hawashi / رغيف حوواشي سادة', 'hawashi', 60, '2023-07-04 10:38:59', '2023-07-04 10:38:59', 0, 8),
(22, 'Hawawshi with Basterma / رغيف حواوشى بالبسطرمة', 'Hawawshi with Basterma', 80, '2023-07-04 10:39:22', '2023-07-04 10:39:22', 0, 8),
(23, 'Hawawshi with mozzarella / رغيف حواوشى بالموتزريلا', 'Hawawshi with mozzarella', 70, '2023-07-04 10:39:44', '2023-07-04 10:39:44', 0, 8),
(24, 'Pasta white sauce / مكرونة وايت صوص', 'Pasta white sauce', 50, '2023-07-04 10:48:30', '2023-07-04 10:48:30', 0, 9),
(25, 'Mari Monty /  مارى مونتى', 'Mari Monty', 95, '2023-07-04 10:48:54', '2023-07-04 10:48:54', 0, 9),
(26, 'Quatro Formagin / كواتروا فورماج', 'Quatro Formagin', 110, '2023-07-04 10:49:35', '2023-07-04 10:49:35', 0, 9),
(27, 'Carry Medras / كارى مدراس', 'Carry Medras', 75, '2023-07-04 10:50:03', '2023-07-04 10:50:03', 0, 9),
(28, 'Pizza Pepproni /  بيتزا بيبروني', 'Pizza Pepproni', 95, '2023-07-04 11:07:05', '2023-07-04 11:07:05', 0, 10),
(29, 'Pizza Veggie / بيتزا فيجن', 'Pizza Veggie', 75, '2023-07-04 11:08:02', '2023-07-04 11:08:02', 0, 10),
(30, 'Pizza Frutti Dimarry / بيتزا فروتى ديمارى', 'Pizza Frutti Dimarry', 115, '2023-07-04 11:09:28', '2023-07-04 11:09:28', 0, 10),
(31, 'Pizza Quatro Formagi / بيتزا كواتروا فورماج', 'Pizza Quatro Formagi', 120, '2023-07-04 11:10:06', '2023-07-04 11:10:06', 0, 10),
(32, 'Pizza Super Suprime / بيتزا سوبريم', 'Pizza Super Suprime', 110, '2023-07-04 11:10:54', '2023-07-04 11:10:54', 0, 10),
(33, 'Beef fillet steak / بيف فيلية ستيك', 'Beef fillet steak', 215, '2023-07-04 11:11:47', '2023-07-04 11:11:47', 0, 11),
(34, 'Beef fillet fajita / بيف فيلية فاهيتا', 'Beef fillet fajita', 240, '2023-07-04 11:12:22', '2023-07-04 11:12:22', 0, 11),
(35, 'Beef Madelion / بيف مادليون', 'Beef Madelion', 240, '2023-07-04 11:13:00', '2023-07-04 11:13:00', 0, 11),
(36, 'Chicken Grill / تشكين جريل', 'Chicken Grill', 135, '2023-07-04 11:13:23', '2023-07-04 11:13:23', 0, 11),
(37, 'Chicken Country / تشكين كانتري', 'Chicken Country', 125, '2023-07-04 11:14:15', '2023-07-04 11:14:15', 0, 11),
(38, 'Mac Meal / وجبة ماك', 'Mac Meal', 85, '2023-07-04 11:14:52', '2023-07-04 11:14:52', 0, 12),
(39, 'Rab Meal / وجبة راب', 'Rab Meal', 75, '2023-07-04 11:15:18', '2023-07-04 11:15:18', 0, 12),
(40, 'Royal Meal / وجبة رويال', 'Royal Meal', 85, '2023-07-04 11:16:04', '2023-07-04 11:16:04', 0, 12),
(41, 'Pasta Meal / وجبة مكرونة', 'Pasta Meal', 85, '2023-07-04 11:16:32', '2023-07-04 11:16:32', 0, 12),
(42, 'Happy Meal / وجبة السعادة', 'Happy Meal', 65, '2023-07-04 11:16:58', '2023-07-04 11:16:58', 0, 12),
(43, 'quinoa salad / كنوا', 'quinoa salad', 60, '2023-07-04 11:19:38', '2023-07-04 11:19:38', 0, 14),
(44, 'Clow Slow / كلو سلو', 'Clow Slow', 25, '2023-07-04 11:20:42', '2023-07-04 11:20:42', 0, 14),
(45, 'Greek Salad / جريك سلاط', 'Greek Salad', 50, '2023-07-04 11:21:25', '2023-07-04 11:21:25', 0, 14),
(46, 'Chicken Ceasser / تشكين سيزر', 'Chicken Ceasser', 90, '2023-07-04 11:21:53', '2023-07-04 11:21:53', 0, 14),
(47, 'Tuna salad / سلطة تونة', 'Tuna salad', 90, '2023-07-04 11:22:18', '2023-07-04 11:22:18', 0, 14),
(48, 'Seafood soup / شوربة سي فود', 'Seafood soup', 85, '2023-07-04 11:23:03', '2023-07-04 11:23:03', 0, 13),
(49, 'Creamy Chicken Soup / شوربة كريمة تشكين', 'Creamy Chicken Soup', 80, '2023-07-04 11:23:24', '2023-07-04 11:23:24', 0, 13),
(50, 'Creamy Mushroom Soup / شوربة كريمة مشروم', 'Creamy Mushroom Soup', 65, '2023-07-04 11:23:56', '2023-07-04 11:23:56', 0, 13),
(51, 'Onion Soup / شوربة بصل', 'Onion Soup', 45, '2023-07-04 11:24:27', '2023-07-04 11:24:27', 0, 13),
(52, 'Minestrone SOUP / شوربة منستروني', 'Minestrone SOUP', 30, '2023-07-04 11:24:50', '2023-07-04 11:24:50', 0, 13),
(53, 'OnionRings / اونيون رينجيز', 'OnionRings', 40, '2023-07-04 11:25:22', '2023-07-04 11:25:22', 0, 15),
(54, 'Chicken Sweet chili / فرايد مشروم تشيز', 'Chicken Sweet chili', 70, '2023-07-04 11:25:46', '2023-07-04 11:25:46', 0, 15),
(55, 'FriedMushromm Cheese / تشكين سويت تشيلي', 'FriedMushromm Cheese', 85, '2023-07-04 11:26:13', '2023-07-04 11:26:13', 0, 15),
(56, 'SMOKED Wedge Potato / سموكيد ويدج بوتاتو', 'SMOKED Wedge Potato', 40, '2023-07-04 11:26:46', '2023-07-04 11:26:46', 0, 15),
(57, 'Fries Cheese /فريز تشيز', 'Fries Cheese', 55, '2023-07-04 11:27:16', '2023-07-04 11:27:16', 0, 16),
(58, 'Rice / ارز يسمتى', 'Rice', 25, '2023-07-04 11:27:39', '2023-07-04 11:27:39', 0, 16),
(59, 'Basterma / بسطرمة', 'Basterma', 30, '2023-07-04 11:28:01', '2023-07-04 11:28:01', 0, 16),
(60, 'Shrimp /جمبرى', 'Shrimp', 75, '2023-07-04 11:28:31', '2023-07-04 11:28:31', 0, 16),
(61, 'pepperoni / بيبرونى', 'pepperoni', 35, '2023-07-04 11:28:51', '2023-07-04 11:28:51', 0, 16),
(62, '1 scoop of ice cream', '1 scoop of ice cream', 20, '2023-07-04 11:30:18', '2023-07-04 11:30:18', 0, 6),
(63, 'Nutella pancake', 'Nutella pancake', 65, '2023-07-04 11:30:35', '2023-07-04 11:30:35', 0, 6),
(64, 'Plain cheesecake', 'Plain cheesecake', 50, '2023-07-04 11:30:47', '2023-07-04 11:30:47', 0, 6),
(65, 'Lotus Cheesecake', 'Lotus Cheesecake', 55, '2023-07-04 11:31:00', '2023-07-04 11:31:00', 0, 6),
(66, 'Red velvet', 'Red velvet', 45, '2023-07-04 11:31:14', '2023-07-04 11:31:14', 0, 6),
(67, 'fruit waffle', 'fruit waffle', 65, '2023-07-04 11:31:31', '2023-07-04 11:31:31', 0, 18),
(68, 'Nuts waffle', 'Nuts waffle', 65, '2023-07-04 11:31:44', '2023-07-04 11:31:44', 0, 18),
(69, 'Peanut butter waffle', 'Peanut butter waffle', 60, '2023-07-04 11:31:55', '2023-07-04 11:31:55', 0, 18),
(70, 'caramel waffle', 'caramel waffle', 55, '2023-07-04 11:32:13', '2023-07-04 11:32:13', 0, 18),
(71, 'Lotus Waffle', 'Lotus Waffle', 70, '2023-07-04 11:32:24', '2023-07-04 11:32:24', 0, 18),
(72, 'Havana', 'Havana', 45, '2023-07-04 11:33:05', '2023-07-04 11:33:05', 0, 19),
(73, 'avocado', 'avocado', 65, '2023-07-04 11:33:19', '2023-07-04 11:33:19', 0, 19),
(74, 'Iced coffee', 'Iced coffee', 55, '2023-07-04 11:33:34', '2023-07-04 11:33:34', 0, 19),
(75, 'Iced chocolate', 'Iced chocolate', 60, '2023-07-04 11:33:51', '2023-07-04 11:33:51', 0, 19),
(76, 'Iced latte', 'Iced latte', 50, '2023-07-04 11:34:13', '2023-07-04 11:34:13', 0, 19),
(77, 'Iced mocha', 'Iced mocha', 55, '2023-07-04 11:34:37', '2023-07-04 11:34:37', 0, 19),
(78, 'Pineapple juice', 'Pineapple juice', 35, '2023-07-04 11:35:07', '2023-07-04 11:35:07', 0, 21),
(79, 'watermelon juice', 'watermelon juice', 50, '2023-07-04 11:35:31', '2023-07-04 11:35:31', 0, 21),
(80, 'guava juice', 'guava juice', 35, '2023-07-04 11:35:48', '2023-07-04 11:35:48', 0, 21),
(81, 'Strawberry juice', 'Strawberry juice', 45, '2023-07-04 11:36:12', '2023-07-04 11:36:12', 0, 21),
(82, 'Cantaloupe juice', 'Cantaloupe juice', 40, '2023-07-04 11:36:31', '2023-07-04 11:36:31', 0, 21),
(83, 'Milkshake mango', 'Milkshake mango', 50, '2023-07-04 11:37:27', '2023-07-04 11:37:27', 0, 22),
(84, 'Milkshake chocolate', 'Milkshake chocolate', 50, '2023-07-04 11:37:41', '2023-07-04 11:37:41', 0, 22),
(85, 'Milkshake Oreo', 'Milkshake Oreo', 55, '2023-07-04 11:38:05', '2023-07-04 11:38:05', 0, 22),
(86, 'Milkshake Blueberry', 'Milkshake Blueberry', 60, '2023-07-04 11:38:36', '2023-07-04 11:38:36', 0, 22),
(87, 'Milkshake Rasberry', 'Milkshake Rasberry', 60, '2023-07-04 11:38:58', '2023-07-04 11:38:58', 0, 22),
(88, 'Tea', 'Tea', 15, '2023-07-04 11:39:34', '2023-07-04 11:39:34', 0, 20),
(89, 'Ahmad tea', 'Ahmad tea', 20, '2023-07-04 11:40:07', '2023-07-04 11:40:07', 0, 20),
(90, 'Green tea', 'Green tea', 20, '2023-07-04 11:40:27', '2023-07-04 11:40:27', 0, 20),
(91, 'tea milk', 'tea milk', 20, '2023-07-04 11:40:50', '2023-07-04 11:40:50', 0, 20),
(92, 'tea milk', 'tea milk', 20, '2023-07-04 11:40:50', '2023-07-04 11:40:50', 0, 20),
(93, 'Adani tea', 'Adani tea', 25, '2023-07-04 11:41:16', '2023-07-04 11:41:16', 0, 20),
(94, 'Bigeye Soda', 'Bigeye Soda', 45, '2023-07-04 11:42:00', '2023-07-04 11:42:00', 0, 23),
(95, 'Special soda', 'Special soda', 65, '2023-07-04 11:42:23', '2023-07-04 11:42:23', 0, 23),
(96, 'Electric lemon', 'Electric lemon', 50, '2023-07-04 11:42:39', '2023-07-04 11:42:39', 0, 23),
(97, 'Blue Hawai', 'Blue Hawai', 50, '2023-07-04 11:42:57', '2023-07-04 11:42:57', 0, 23),
(98, 'Redbull power Coctail', 'Redbull power Coctail', 75, '2023-07-04 11:43:12', '2023-07-04 11:43:12', 0, 23);

-- --------------------------------------------------------

--
-- بنية الجدول `reservation`
--

CREATE TABLE `reservation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guests` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `time`, `guests`, `name`, `phone`, `message`, `status`, `created_at`, `updated_at`, `email`) VALUES
(26, '2023-07-05', '10:00', '5-8', 'Ninety avenue', 1036995323, 'nhffdfdgfdgfdgfdg', 'confirmed', '2023-07-04 07:28:02', '2023-07-04 08:52:23', 'super@gmail.com');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'superadmin@rayan.com', NULL, '$2y$10$yi2wacbXA1.u3DIbRE0XFuB95SzTWlMuJre7XamEKcb60y59KVvWe', 1, 0, NULL, '2023-06-25 05:24:12', '2023-06-25 05:24:12'),
(3, 'admin', 'admin@rayan.com', NULL, '$2y$10$1WuMGdGpJZ1XekHKjlie1eKylKHY7JezuU67vbqoCGmII7xWGXlTO', 0, 0, NULL, '2023-06-25 08:24:46', '2023-06-25 08:24:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
