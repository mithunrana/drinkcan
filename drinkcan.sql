-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 06:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drinkcan`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_products`
--

CREATE TABLE `about_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductId` bigint(20) UNSIGNED NOT NULL,
  `ImageId` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authorization_certificates`
--

CREATE TABLE `authorization_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CertificateName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificatedetails` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `FeaturedImage1` bigint(20) UNSIGNED NOT NULL,
  `FeaturedImage2` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ActiveStatus` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authorization_certificates`
--

INSERT INTO `authorization_certificates` (`id`, `CertificateName`, `certificatedetails`, `FeaturedImage1`, `FeaturedImage2`, `ImageAltText`, `ImageTitleText`, `ActiveStatus`, `created_at`, `updated_at`) VALUES
(1, 'Avtech Sole Agency Certificate', 'Avtech Bangladesh Sole Agency Products include professional surveillance CCTV & IP Products.', 42, 42, NULL, NULL, '1', '2020-09-09 00:54:13', '2020-10-03 07:35:34'),
(2, 'Electronics Safety & Security Association Of Bangladesh', 'Soshine Marketing company certify of Electronics Safety & Security Association Of Bangladesh.', 42, 42, NULL, NULL, '1', '2020-09-09 01:24:01', '2020-10-03 07:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryUrl` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategorySeoKeyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategorySeoDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryBrowserTitle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `CategoryName`, `CategoryUrl`, `CategorySeoKeyword`, `CategorySeoDescription`, `CategoryBrowserTitle`, `created_at`, `updated_at`) VALUES
(1, 'Forget Password', 'avtech-dvr-password-recover', 'How To Recover Avtech DVR Password', 'How To Recover Avtech DVR Password', 'How To Recover Avtech DVR Password', '2020-09-08 05:07:41', '2020-09-08 05:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tutorials`
--

CREATE TABLE `blog_tutorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BrowserTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Permalink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BlogName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeoKeyword` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeoDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VideoURL` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmbeddedVideo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FeaturedImage` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BlogDetails` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `StructuredData` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Category` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_poster` int(11) NOT NULL,
  `ActiveStatus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tutorials`
--

INSERT INTO `blog_tutorials` (`id`, `BrowserTitle`, `Permalink`, `BlogName`, `SeoKeyword`, `SeoDescription`, `VideoURL`, `EmbeddedVideo`, `FeaturedImage`, `ImageAltText`, `ImageTitleText`, `BlogDetails`, `StructuredData`, `Category`, `blog_poster`, `ActiveStatus`, `created_at`, `updated_at`) VALUES
(4, 'Water and helth', 'water and helth', 'Water and helth', NULL, NULL, 'https://www.youtube.com/watch?v=tcMxFdYDejw', 'https://www.youtube.com/watch?v=tcMxFdYDejw', 45, NULL, NULL, '<p>Water and helth</p>', NULL, '1', 1, 1, '2020-10-03 07:04:03', '2020-10-03 07:49:20'),
(5, 'Best Water Purifier For Health', 'best water purifier for health', 'Best Water Purifier For Health', 'Best Water Purifier For Health', 'Best Water Purifier For Health', 'https://www.youtube.com/watch?v=tcMxFdYDejw', 'Best Water Purifier For Health', 47, NULL, NULL, '<h1 class=\"wow animated fadeInDownslow animated animated\">Best Water Purifier For Health</h1>', 'Best Water Purifier For Health', '1', 1, 1, '2020-10-03 07:04:41', '2020-10-03 07:49:11'),
(6, 'Best Water Purifier For Health', '#', 'Best Water Purifier For', NULL, NULL, 'https://www.youtube.com/watch?v=wqUNGhLCqnk', 'Best Water Purifier For Health', 46, NULL, NULL, '<h1 class=\"wow animated fadeInDownslow animated animated\">Best Water Purifier For Health</h1>', NULL, '1', 1, 1, '2020-10-03 07:05:36', '2020-10-03 07:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `cctv_camera_mega_pixels`
--

CREATE TABLE `cctv_camera_mega_pixels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MegaPixel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MegaPixelUrl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MegaPixelBrowserTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeoHeading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MegaPixelDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MegaPixelSeoKeyword` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MegaPixelSeoDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cctv_camera_mega_pixels`
--

INSERT INTO `cctv_camera_mega_pixels` (`id`, `MegaPixel`, `MegaPixelUrl`, `MegaPixelBrowserTitle`, `SeoHeading`, `MegaPixelDetails`, `MegaPixelSeoKeyword`, `MegaPixelSeoDescription`, `created_at`, `updated_at`) VALUES
(1, '5MP HD', '5-mp-hd-camera', '5MP HD Camera Price In Bangladesh | Soshine', '5MP HD Camera Price In Bangladesh', '<p>5MP HD Camera Price In Bangladesh</p>', '5MP HD Camera Price In Bangladesh', '5MP HD Camera Price In Bangladesh', '2020-09-03 00:45:10', '2020-09-08 07:04:52'),
(2, '2MP HD', '2-mp-hd-cctv-camera-price-bangladesh', '2MP HD CCTV Camera Price In Bangladesh', '2MP HD CCTV Camera Price In Bangladesh', '<p>2MP HD CCTV Camera Price In Bangladesh</p>', '2MP HD CCTV Camera Price In Bangladesh', '2MP HD CCTV Camera Price In Bangladesh', '2020-09-08 07:15:49', '2020-09-08 07:31:04'),
(3, '5 MP IP', '5-mp-ip-cctv-camera-price-bangladesh', '5 MP IP CCTV Camera Price In Bangladesh | Soshine', '5 MP IP CCTV Camera Price In Bangladesh', '<p>5 MP IP CCTV Camera Price In Bangladesh</p>', '5 MP IP CCTV Camera Price In Bangladesh', '5 MP IP CCTV Camera Price In Bangladesh', '2020-09-08 07:16:45', '2020-09-08 07:16:45'),
(4, '2MP IP', '2-mp-ip-cctv-camera-price-bangladesh', '2 MP IP CCTV Camera Price In Bangladesh | Soshine', '2 MP IP CCTV Camera Price In Bangladesh', '<p>2 MP IP CCTV Camera Price In Bangladesh</p>', '2 MP IP CCTV Camera Price In Bangladesh', '2 MP IP CCTV Camera Price In Bangladesh', '2020-09-08 07:17:39', '2020-09-08 07:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mobile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComplainType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComplainDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProductId` bigint(20) UNSIGNED NOT NULL,
  `checkstatus` int(11) NOT NULL DEFAULT 0,
  `orderstatus` int(11) NOT NULL DEFAULT 2,
  `Address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `Name`, `Mobile`, `Email`, `ComplainType`, `ComplainDetails`, `ProductId`, `checkstatus`, `orderstatus`, `Address`, `Comment`, `created_at`, `updated_at`) VALUES
(1, 'fasdf', 'fasdf', 'fasdf', '6353', 'fasdfasdf', 375, 0, 2, 'adsfadsf', NULL, '2020-10-07 09:07:20', '2020-10-07 09:07:20'),
(2, 'fasdf', 'adsfasd', 'fadsfa', '6353', 'fasd', 373, 0, 2, 'fadsf', NULL, '2020-10-07 09:08:22', '2020-10-07 09:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `c_c_t_v_brands`
--

CREATE TABLE `c_c_t_v_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brandDisplayName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `electro_prono_sliders`
--

CREATE TABLE `electro_prono_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sliderimage` bigint(20) UNSIGNED NOT NULL,
  `sliderTopic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `electro_prono_sliders`
--

INSERT INTO `electro_prono_sliders` (`id`, `sliderimage`, `sliderTopic`, `ActiveStatus`, `created_at`, `updated_at`) VALUES
(6, 42, 'SLIDER 1', 1, '2020-09-30 10:15:47', '2020-09-30 10:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageurl` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imageurl`, `created_at`, `updated_at`) VALUES
(42, 'images/slider1.jpg', '2020-09-30 10:15:01', '2020-09-30 10:15:01'),
(44, 'images/drink-can.png', '2020-10-03 07:39:30', '2020-10-03 07:39:30'),
(45, 'images/how-purifie-water.jpg', '2020-10-03 07:48:24', '2020-10-03 07:48:24'),
(46, 'images/drinking-water-healthy.jpg', '2020-10-03 07:48:30', '2020-10-03 07:48:30'),
(47, 'images/water-benefits.jpg', '2020-10-03 07:48:41', '2020-10-03 07:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2020_08_19_074304_create_support_models_table', 7),
(40, '2014_10_12_000000_create_users_table', 8),
(41, '2014_10_12_100000_create_password_resets_table', 8),
(42, '2020_03_04_101329_create_products_images_table', 9),
(43, '2020_03_04_061920_create_products_table', 10),
(44, '2020_02_17_125808_create_images_table', 11),
(45, '2020_02_17_085340_create_portfolios_table', 12),
(46, '2020_02_17_085434_create_blog_tutorials_table', 13),
(47, '2020_03_04_103355_create_products_brands_table', 14),
(48, '2020_02_20_091203_create_blog_categories_table', 15),
(49, '2020_03_04_103441_create_products_primary_categories_table', 15),
(50, '2020_03_04_103459_create_products_secondary_categories_table', 15),
(51, '2020_03_08_103315_create_discover_products_table', 15),
(52, '2020_03_08_130642_create_cctv_camera_mega_pixels_table', 15),
(53, '2020_04_01_202049_create_quick_liinks_table', 15),
(54, '2020_04_02_115600_create_social_links_table', 15),
(55, '2020_04_06_062211_create_site_profiles_table', 15),
(57, '2020_05_26_044242_create_c_c_t_v_brands_table', 15),
(58, '2020_06_20_183813_create_authorization_certificates_table', 15),
(59, '2020_06_23_083402_create_product_types_table', 15),
(60, '2020_07_20_113225_create_solutions_table', 15),
(61, '2020_07_20_114045_create_news_table', 15),
(62, '2020_07_20_114126_create_trainings_table', 16),
(63, '2020_07_20_114142_create_events_table', 17),
(64, '2020_04_18_155720_create_electro_prono_sliders_table', 18),
(65, '2020_09_10_105358_create_price_lists_table', 19),
(66, '2020_10_03_054751_create_faqs_table', 20),
(67, '2020_10_03_055104_create_about_products_table', 21),
(68, '2020_10_03_061008_create_product_features_table', 22),
(71, '2020_10_04_155519_create_orders_table', 23),
(72, '2020_10_07_124858_create_complains_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BrowserTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Permalink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NewsName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeoKeyword` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeoDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedImage1` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProjectDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `BrowserTitle`, `Permalink`, `NewsName`, `SeoKeyword`, `SeoDescription`, `FeaturedImage1`, `ImageAltText`, `ImageTitleText`, `FeaturedDetails`, `ProjectDetails`, `ActiveStatus`, `created_at`, `updated_at`) VALUES
(1, 'news', '#', 'news', 'news', 'news', 42, NULL, NULL, '<p>news</p>', '<p>news</p>', 1, '2020-09-08 05:01:45', '2020-10-06 00:14:09'),
(2, 'fadsf', 'asdf', 'adsfadsf', 'asdf', 'asdfadsff', 47, NULL, NULL, '<p>asdf</p>', '<p>কোভিড-১৯ মহামারীর কারণে উন্নয়ন প্রকল্পে বিলাসী ব্যয়ে লাগাম টানতে তৎপরতা চালাচ্ছে সরকার। কিন্তু এ ধরনের ব্যয় প্রস্তাব থামছেই না। &lsquo;দেশীয় প্রজাতির মাছ এবং শামুক সংরক্ষণ ও উন্নয়ন&rsquo; প্রকল্পের কর্মকর্তাদের জন্য ১১টি এসি কেনার প্রস্তাব করেছে মৎস্য অধিদফতর। সেই সঙ্গে প্রকল্পটির আওতায় জেলা মৎস্য দফতর মেরামত, সীমানা প্রাচীর মেরামতের কাজও যুক্ত করা হয়েছেে</p>', 1, '2020-10-06 00:40:27', '2020-10-06 01:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductId` bigint(20) UNSIGNED NOT NULL,
  `checkstatus` int(11) NOT NULL DEFAULT 0,
  `orderstatus` int(11) NOT NULL DEFAULT 2,
  `Address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Name`, `Mobile`, `ProductId`, `checkstatus`, `orderstatus`, `Address`, `Comment`, `created_at`, `updated_at`) VALUES
(1, 'fasdf', 'fasdf', 377, 1, 1, 'adsfadsf', NULL, '2020-10-05 00:22:17', '2020-10-07 10:09:56'),
(2, 'fasdf', 'adsfasd', 373, 0, 2, 'fadsf', NULL, '2020-10-05 03:56:12', '2020-10-07 09:32:52'),
(3, 'fadf', 'asdffasdffa', 377, 0, 2, 'asdfasdffa', 'order confirm', '2020-10-05 03:56:35', '2020-10-05 03:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BrowserTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Permalink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProjectName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProjectCategory` int(11) DEFAULT NULL,
  `liveurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeoKeyword` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeoDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedImage1` bigint(20) UNSIGNED NOT NULL,
  `FeaturedImage2` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProjectDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `price_lists`
--

CREATE TABLE `price_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PriceListName` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Datasheet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProductShortDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Specification` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FeaturedImage` bigint(20) UNSIGNED NOT NULL,
  `Permalink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` int(11) NOT NULL,
  `SeoHeading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MegaPixelId` int(11) DEFAULT NULL,
  `BrandId` int(11) DEFAULT NULL,
  `ProductsType` int(11) DEFAULT NULL,
  `BrowserTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeoKeyword` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeoDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StructuredData` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegularPrice` decimal(15,2) DEFAULT NULL,
  `CurrentPrice` decimal(15,2) DEFAULT NULL,
  `PartnerPrice` decimal(15,2) DEFAULT NULL,
  `PriceStatus` decimal(8,2) NOT NULL DEFAULT 1.00,
  `ActiveStatus` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Model`, `Name`, `Datasheet`, `ProductShortDescription`, `Specification`, `FeaturedImage`, `Permalink`, `Category`, `SeoHeading`, `MegaPixelId`, `BrandId`, `ProductsType`, `BrowserTitle`, `SeoKeyword`, `SeoDescription`, `ImageAltText`, `ImageTitleText`, `StructuredData`, `RegularPrice`, `CurrentPrice`, `PartnerPrice`, `PriceStatus`, `ActiveStatus`, `created_at`, `updated_at`) VALUES
(373, 'IPC3615ER3-ADUPF40M', '5MP WDR StarlightNetwork IR Fixed Dome Camera (Metal)', '#', '<ul>\r\n<li>1/2.7\", progressive scan, CMOS</li>\r\n<li>Lens 4 mm, Day/night functionality</li>\r\n<li>The angle of View (H) 79.7&deg;</li>\r\n<li>Smart IR, Up to 30m (98 ft) IR range</li>\r\n<li>Ultra 265, H.265, H.264, MJPEG</li>\r\n<li>Triple streams, ROI, 2D/3D DNR</li>\r\n<li>Digital defog, 120db WDR</li>\r\n<li>Audio Compression G.711, ONVIF Conformance</li>\r\n<li>HLC, BLC, Built-in Mic</li>\r\n<li>Support PoE &amp; Power Adapter 12 V DC&plusmn;25%</li>\r\n<li>IP67</li>\r\n<li>Warranty: 2 Years</li>\r\n</ul>', '<h3>Uniview ipc3615er3-adupf40m Datasheet Specification &amp; Price In BD</h3>\r\n<table class=\"table table-striped table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td class=\"thead\" style=\"background-color: #3c6ac5; color: white;\" width=\"30%\"><strong>Camera</strong></td>\r\n<td class=\"thead\" style=\"background-color: #3c6ac5; color: white;\" width=\"70%\"><strong>Uniview-ipc3615er3adupf40m</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Sensor</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>1/3\", 4 megapixel, progressive scan, CMOS</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 14px;\">\r\n<p>Lens</p>\r\n</td>\r\n<td style=\"width: 462px; height: 14px;\">\r\n<p>&nbsp;2.8mm@F1.8</p>\r\n<p>Angle of view(H): 112.5&deg;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 14px;\">\r\n<p>Min.Illumination</p>\r\n</td>\r\n<td style=\"width: 462px; height: 14px;\">\r\n<p>Colour: 0.02Lux (F1.8,AGC ON)</p>\r\n<p>0Lux with IR</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Shutter</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Auto/Manual, 1/6~1/8000 s</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Day/Night</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>IR-cut filter with auto switch (ICR)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>IR</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>30m (98 ft) IR range</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 14px;\">\r\n<p>AWB(Auto white balance)</p>\r\n</td>\r\n<td style=\"width: 462px; height: 14px;\">\r\n<p>Auto/manual</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Gain Control</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Auto/manual</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>WDR</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>120 dB</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Noise Reduction</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>2D/3D</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"2\"><strong>Video</strong></th>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Max. Resolution</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>2592&times;1520</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Video Compression</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>H.265, H.264, MJPEG</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 14px;\">\r\n<p>Frame Rate</p>\r\n</td>\r\n<td style=\"width: 462px; height: 14px;\">\r\n<p>4MP (2592&times;1520): Max. 20 fps; 4MP (2560&times;1440): Max. 25 fps</p>\r\n<p>3MP (2048&times;1520): Max. 30 fps; 1080P (1920&times;1080): Max. 30 fps</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Video Streaming</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Triple</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>OSD</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Up to 8 OSDs</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>9:16 Corridor Mode</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Supported</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Motion Detection</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Up to 2 areas</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Privacy Mask</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Up to 4 areas</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"2\"><strong>Smart</strong></th>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Behavior Detection</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Intrusion, crossing line, motion detection</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Intelligent Identification</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>Face detection</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Statistical Analysis</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>People counting</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 709px; height: 5px;\" colspan=\"2\">\r\n<p>Network</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 14px;\">\r\n<p>Protocols</p>\r\n</td>\r\n<td style=\"width: 462px; height: 14px;\">\r\n<p>L2TP, IPv4, IGMP, ICMP, ARP, TCP, UDP, DHCP, PPPoE, RTP, RTSP, RTCP, DNS, DDNS, NTP, FTP, UPnP, HTTP, HTTPS, SMTP, SIP, 802.1x</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Compatible Integration</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>ONVIF, API</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"2\"><strong>Interface</strong></th>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Network</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>10M/100M Base-TX Ethernet</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"2\"><strong>General</strong></th>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 40px;\">\r\n<p>Power</p>\r\n</td>\r\n<td style=\"width: 462px; height: 40px;\">\r\n<p>12 V DC, or PoE (IEEE802.3 af)</p>\r\n<p>Power consumption: Max 5.5 W</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Dimensions (&Oslash; x H)</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>126 x 94 mm (&Oslash; 5.0&rdquo; x 3.7&rdquo;)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Weight</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>0.33 kg (0.73 lb)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Operating Conditions</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>-35&deg;C ~ +60&deg;C (-31&deg;F ~ 140&deg;F), Humidity 95% RH(non-condensing)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 247px; height: 5px;\">\r\n<p>Ingress Protection</p>\r\n</td>\r\n<td style=\"width: 462px; height: 5px;\">\r\n<p>IP67</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 435, 'uniview-ipc3615er3-adupf40m', 19, 'Uniview IPC3615ER3-ADUPF40M 5MP IP Camera Price In Bangladesh', NULL, 4, 2, 'Uniview IPC3615ER3-ADUPF40M 5MP IP Price In Bangladesh', 'Uniview IPC3615ER3-ADUPF40M 5MP IP Price In Bangladesh, CCTV, camera, price, Bangladesh, importer, distributor, dahua, hikvision, price list, cctv camera price in bangladesh, cctv company', 'Uniview IPC3615ER3-ADUPF40M 5MP IP Price In Bangladesh, CCTV camera company in Bangladesh for price contact: 01836375309', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '1', '2020-07-02 00:44:44', '2020-10-04 01:22:38'),
(375, 'IPC814SR-DVPF16', '4MP Fisheye Fixed Dome Network Camera (Metal)', '#', '<ul>\r\n<li>1/3\", progressive scan, CMOS</li>\r\n<li>Lens 1.6mm</li>\r\n<li>Smart IR, Up to 10 m (33 ft)</li>\r\n<li>Ultra 265, H.265, H.264, MJPEG</li>\r\n<li>Micro SD, up to 256 GB, ROI</li>\r\n<li>3D DNR. Digital defog</li>\r\n<li>128dB WDR, BLC</li>\r\n<li>Audio Compression G.711</li>\r\n<li>Two-way audio, Built-in Mic</li>\r\n<li>ONVIF Conformance</li>\r\n<li>IP66, IK10</li>\r\n<li>Reset Button</li>\r\n<li>Warranty: 2 Years</li>\r\n</ul>', '<h3>Uniview IPC814SR-DVPF16 Datasheet Specification &amp; Price In BD</h3>\r\n<table class=\"table table-striped table-bordered\">\r\n<tbody>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"2\">Model</th>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"5\">Uniview-IPC814SR-DVPF16</th>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Camera</th>\r\n</tr>\r\n<tr>\r\n<td>Image sensor</td>\r\n<td colspan=\"5\">1/3\", 4.0 megapixel, progressive scan, CMOS</td>\r\n</tr>\r\n<tr>\r\n<td>Lens</td>\r\n<td colspan=\"5\">1.6mm@F1.6</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">DORI Distance</td>\r\n<td>Lens (mm)</td>\r\n<td>Detect (m)</td>\r\n<td>Observe (m)</td>\r\n<td>Recognize (m)</td>\r\n<td>Identify (m)</td>\r\n</tr>\r\n<tr>\r\n<td>1.6</td>\r\n<td>36</td>\r\n<td>14.4</td>\r\n<td>7.2</td>\r\n<td>3.7</td>\r\n</tr>\r\n<tr>\r\n<td>Angle of View</td>\r\n<td colspan=\"5\">180&deg;</td>\r\n</tr>\r\n<tr>\r\n<td>Shutter</td>\r\n<td colspan=\"5\">Auto/Manual, shutter time: 1 ~ 1/100000s</td>\r\n</tr>\r\n<tr>\r\n<td>Minimum Illumination</td>\r\n<td colspan=\"5\">Colour: 0.01Lux (F1.6, AGC ON)<br />0Lux with IR</td>\r\n</tr>\r\n<tr>\r\n<td>Day / Night</td>\r\n<td colspan=\"5\">IR-cut filter for day &amp; night function</td>\r\n</tr>\r\n<tr>\r\n<td>Digital noise reduction</td>\r\n<td colspan=\"5\">2D/3D DNR</td>\r\n</tr>\r\n<tr>\r\n<td>S/N</td>\r\n<td colspan=\"5\">55dB</td>\r\n</tr>\r\n<tr>\r\n<td>IR Range</td>\r\n<td colspan=\"5\">UP to 10m (33ft)</td>\r\n</tr>\r\n<tr>\r\n<td>Defog</td>\r\n<td colspan=\"5\">Digital Defog</td>\r\n</tr>\r\n<tr>\r\n<td>WDR</td>\r\n<td colspan=\"5\">120dB</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Video</th>\r\n</tr>\r\n<tr>\r\n<td>Compression</td>\r\n<td colspan=\"5\">Ultra265, H.264, MJPEG</td>\r\n</tr>\r\n<tr>\r\n<td>H.264 code profile</td>\r\n<td colspan=\"5\">Baseline profile, Main Profile, High Profile</td>\r\n</tr>\r\n<tr>\r\n<td>Frame Rate</td>\r\n<td colspan=\"5\">Main Stream : 4MP (2560*1440), Max 25fps;<br />Sub Stream: 1080P (1920*1080), Max 25fps;<br />Third Stream: D1 (720*576), Max 25fps</td>\r\n</tr>\r\n<tr>\r\n<td>BLC</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>OSD</td>\r\n<td colspan=\"5\">Up to 8 OSDs</td>\r\n</tr>\r\n<tr>\r\n<td>ROI</td>\r\n<td colspan=\"5\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Privacy Mask</td>\r\n<td colspan=\"5\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Motion Detection</td>\r\n<td colspan=\"5\">Up to 4 areas</td>\r\n</tr>\r\n<tr>\r\n<td>General Function</td>\r\n<td colspan=\"5\">Watermark, IP Address Filtering, Tampering Alarm, Alarm input, Alarm output, Access Policy, ARP Protection, RTSP Authentication, User Authentication</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Audio</th>\r\n</tr>\r\n<tr>\r\n<td>Audio Compression</td>\r\n<td colspan=\"5\">G.711&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Two-way audio</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Suppression</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Sampling Rate</td>\r\n<td colspan=\"5\">8KHZ</td>\r\n</tr>\r\n<tr>\r\n<td class=\"thead\" colspan=\"6\">Storage</td>\r\n</tr>\r\n<tr>\r\n<td>Edge Storage</td>\r\n<td colspan=\"5\">Micro SD, up to 256GB</td>\r\n</tr>\r\n<tr>\r\n<td>Network Storage</td>\r\n<td colspan=\"5\">ANR</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Network</th>\r\n</tr>\r\n<tr>\r\n<td>Protocols</td>\r\n<td colspan=\"5\">IPv4, IGMP, ICMP, ARP, TCP, UDP, DHCP, PPPoE, RTP, RTSP, RTCP, DNS, DDNS, NTP, FTP, UPnP, HTTP, HTTPS, SMTP, 802.1x, SNMP, QoS</td>\r\n</tr>\r\n<tr>\r\n<td>Compatible Integration</td>\r\n<td colspan=\"5\">ONVIF (Profile S, Profile G, Profile T), API</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Live View Display</th>\r\n</tr>\r\n<tr>\r\n<td>Mount Type</td>\r\n<td colspan=\"5\">Support table, wall, and ceiling</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Interface</th>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"4\">Audio I/O</td>\r\n<td colspan=\"5\">Audio interface</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Input: impedance 35k&Omega;; amplitude 2V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Output: impedance 600&Omega;; amplitude 2V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">3 built-in omnidirectional microphone</td>\r\n</tr>\r\n<tr>\r\n<td>Alarm I/O</td>\r\n<td colspan=\"5\">1/1</td>\r\n</tr>\r\n<tr>\r\n<td>Built-in Mic</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Video Output</td>\r\n<td colspan=\"5\">1 BNC, impedance 75&Omega;; amplitude 1V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<td>Network</td>\r\n<td colspan=\"5\">1 RJ45 10M/100M Base-TX Auto-adaptive Ethernet</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">General</th>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Power</td>\r\n<td colspan=\"5\">DC 12V&plusmn;25%, PoE (IEEE 802.3af)</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Power consumption: Max 11W</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions (&Oslash; x H)</td>\r\n<td colspan=\"5\">&Phi;125 x 43.7mm (&Phi;4.9&rdquo; x 1.7&rdquo;)</td>\r\n</tr>\r\n<tr>\r\n<td>Weight</td>\r\n<td colspan=\"5\">0.39kg (0.86lb)</td>\r\n</tr>\r\n<tr>\r\n<td>Working Environment</td>\r\n<td colspan=\"5\">-40&deg;C ~ 60&deg;C (-40&deg;F ~ 140&deg;F), Humidity: &le;95% RH</td>\r\n</tr>\r\n<tr>\r\n<td>Ingress Protection</td>\r\n<td colspan=\"5\">IP66</td>\r\n</tr>\r\n<tr>\r\n<td>Vandal Resistant</td>\r\n<td colspan=\"5\">IK10</td>\r\n</tr>\r\n<tr>\r\n<td>Reset Button</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n</tbody>\r\n</table>', 436, 'uniview-ipc814sr-dvpf16', 19, 'Uniview IPC814SR-DVPF16 4MP IP Camera Price In Bangladesh', NULL, 4, 1, 'Uniview IPC814SR-DVPF16 4MP IP Price In Bangladesh', 'Uniview IPC814SR-DVPF16 4MP IP Price In Bangladesh, CCTV, camera, price, Bangladesh, importer, distributor, dahua, hikvision, price list, cctv camera price in bangladesh, cctv company', 'Uniview IPC814SR-DVPF16 4MP IP Price In Bangladesh, CCTV camera company in Bangladesh contact: 01836375309', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '1', '2020-07-02 00:57:58', '2020-10-01 05:01:12'),
(376, 'IPC815SR-DVPF14', '5MP Fisheye Fixed Dome Network Camera (Metal)', '#', '<ul>\r\n<li>1/2.8\", progressive scan, CMOS</li>\r\n<li>Lens 1.4mm</li>\r\n<li>Smart IR, Up to 10 m (33 ft)</li>\r\n<li>Ultra 265, H.265, H.264, MJPEG</li>\r\n<li>Micro SD, up to 256 GB</li>\r\n<li>ROI</li>\r\n<li>BLC</li>\r\n<li>Two-way audio</li>\r\n<li>Built-in Mic</li>\r\n<li>IP66</li>\r\n<li>IK10</li>\r\n<li>Reset Button</li>\r\n</ul>', '<h3>Uniview IPC815SR-DVPF14 Datasheet Specification &amp; Price In BD</h3>\r\n<table class=\"table table-striped table-bordered\">\r\n<tbody>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"2\">Model</th>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"5\">Uniview-IPC815SR-DVPF14</th>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"5\">Uniview-IPC815SR-DVSPF14</th>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Camera</th>\r\n</tr>\r\n<tr>\r\n<td>Image sensor</td>\r\n<td colspan=\"10\">1/2.8\", progressive scan, 5.0 megapixel, CMOS</td>\r\n</tr>\r\n<tr>\r\n<td>Lens</td>\r\n<td colspan=\"10\">1.4mm@F2.0</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">DORI Distance</td>\r\n<td colspan=\"2\">Lens</td>\r\n<td colspan=\"2\">Detect (m)</td>\r\n<td colspan=\"2\">Observe (m)</td>\r\n<td colspan=\"2\">Recognize (m)</td>\r\n<td colspan=\"2\">Identity (m)</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">1.4mm</td>\r\n<td colspan=\"2\">31.5</td>\r\n<td colspan=\"2\">12.6</td>\r\n<td colspan=\"2\">6.3</td>\r\n<td colspan=\"2\">3.2</td>\r\n</tr>\r\n<tr>\r\n<td>Angle of View</td>\r\n<td colspan=\"10\">360&deg;</td>\r\n</tr>\r\n<tr>\r\n<td>Shutter</td>\r\n<td colspan=\"10\">Auto/Manual, shutter time: 1~1/100000 s</td>\r\n</tr>\r\n<tr>\r\n<td>Minimum Illumination</td>\r\n<td colspan=\"10\">Colour: 0.01 Lux (F2.0, AGC ON)<br />0 Lux with IR</td>\r\n</tr>\r\n<tr>\r\n<td>Day/Night</td>\r\n<td colspan=\"10\">IR-cut filter for day &amp; night function</td>\r\n</tr>\r\n<tr>\r\n<td>S/N</td>\r\n<td colspan=\"10\">&gt;55dB</td>\r\n</tr>\r\n<tr>\r\n<td>IR Range</td>\r\n<td colspan=\"10\">UP to 10m (33ft)</td>\r\n</tr>\r\n<tr>\r\n<td>wavelength</td>\r\n<td colspan=\"10\">850nm</td>\r\n</tr>\r\n<tr>\r\n<td>IR On/Off Control</td>\r\n<td colspan=\"10\">Auto/Manual</td>\r\n</tr>\r\n<tr>\r\n<td>Defog</td>\r\n<td colspan=\"10\">Digital Defog</td>\r\n</tr>\r\n<tr>\r\n<td>WDR</td>\r\n<td colspan=\"10\">120dB</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Video</th>\r\n</tr>\r\n<tr>\r\n<td>Compression</td>\r\n<td colspan=\"10\">Ultra265, H.264, MJPEG</td>\r\n</tr>\r\n<tr>\r\n<td>H.264 code profile</td>\r\n<td colspan=\"10\">Baseline profile, Main Profile, High Profile</td>\r\n</tr>\r\n<tr>\r\n<td>Frame Rate</td>\r\n<td colspan=\"10\">Main Stream: (2592&times;1944): Max.30fps;<br />Sub Stream: (1920&times;1080): Max.30fps;<br />Third Stream: D1(720 x 576): Max.30 fps</td>\r\n</tr>\r\n<tr>\r\n<td>Video Bit Rate</td>\r\n<td colspan=\"10\">128 Kbps~16 Mbps</td>\r\n</tr>\r\n<tr>\r\n<td>OSD</td>\r\n<td colspan=\"10\">Up to 8 OSDs</td>\r\n</tr>\r\n<tr>\r\n<td>ROI</td>\r\n<td colspan=\"10\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Privacy Mask</td>\r\n<td colspan=\"10\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Motion Detection</td>\r\n<td colspan=\"10\">Up to 4 areas</td>\r\n</tr>\r\n<tr>\r\n<td>General Function</td>\r\n<td colspan=\"10\">Watermark, IP Address Filtering, Tampering Alarm, Alarm input, Alarm output, Access Policy, ARP Protection, RTSP Authentication, User Authentication</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Image</th>\r\n</tr>\r\n<tr>\r\n<td>White Balance</td>\r\n<td colspan=\"10\">Auto/Outdoor/Fine Tune/Sodium Lamp/Locked/Auto2</td>\r\n</tr>\r\n<tr>\r\n<td>Digital noise reduction</td>\r\n<td colspan=\"10\">2D/3D DNR</td>\r\n</tr>\r\n<tr>\r\n<td>Smart IR</td>\r\n<td colspan=\"10\">Support</td>\r\n</tr>\r\n<tr>\r\n<td>Flip</td>\r\n<td colspan=\"10\">Normal/Flip Vertical/ Flip Horizontal/180&deg;</td>\r\n</tr>\r\n<tr>\r\n<td>Dewarping</td>\r\n<td colspan=\"10\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>HLC</td>\r\n<td colspan=\"10\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>BLC</td>\r\n<td colspan=\"10\">Support</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Audio</th>\r\n</tr>\r\n<tr>\r\n<td>Audio Compression</td>\r\n<td colspan=\"5\">G.711</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Two-way audio</td>\r\n<td colspan=\"5\">Supported</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Suppression</td>\r\n<td colspan=\"5\">Supported</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Sampling Rate</td>\r\n<td colspan=\"5\">8 KHZ</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Storage</th>\r\n</tr>\r\n<tr>\r\n<td>Edge Storage</td>\r\n<td colspan=\"10\">Micro SD, up to 256GB</td>\r\n</tr>\r\n<tr>\r\n<td>Network Storage</td>\r\n<td colspan=\"10\">ANR, NAS(NFS)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Network</th>\r\n</tr>\r\n<tr>\r\n<td>Compatible Integration</td>\r\n<td colspan=\"10\">ONVIF (Profile S, Profile G, Profile T), API</td>\r\n</tr>\r\n<tr>\r\n<td>Client</td>\r\n<td colspan=\"10\">EZStation <br />EZView<br />EZLive</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Web Browser</td>\r\n<td colspan=\"10\">Plug-in required live view: IE9+, Chrome 41 and below, Firefox 52 and below</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"10\">Plug-in free live view: Chorme 57.0+, Firefox 58.0+, Edge 16+, Safari 11+</td>\r\n</tr>\r\n<tr>\r\n<td class=\"thead\" colspan=\"11\">Live View Display</td>\r\n</tr>\r\n<tr>\r\n<td>Mount Type</td>\r\n<td colspan=\"10\">Support table, wall, and ceiling</td>\r\n</tr>\r\n<tr>\r\n<td class=\"thead\" colspan=\"11\">Interface</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Audio I/O</td>\r\n<td colspan=\"5\">Input: impedance 35 k&Omega;; amplitude 2 V [p-p]</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Output: impedance 600 &Omega;; amplitude 2 V [p-p]</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Alarm I/O</td>\r\n<td colspan=\"5\">1/1</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Built-in Mic</td>\r\n<td colspan=\"5\">Supported</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Video Output</td>\r\n<td colspan=\"5\">1 BNC, impedance 75 &Omega;; amplitude 1 V [p-p]</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Network</td>\r\n<td colspan=\"10\">1 RJ45 10M/100M Base-TX Auto-adaptive Ethernet</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Certifications</th>\r\n</tr>\r\n<tr>\r\n<td>Certifications</td>\r\n<td colspan=\"10\">CE: EN 60950-1<br />UL: UL60950-1<br />FCC: FCC Part 15</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">General</th>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Power</td>\r\n<td colspan=\"10\">DC12V&plusmn;25%,PoE (IEEE 802.3af)</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"10\">Power consumption: Max. 8.9 W</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions (&Phi; &times; H)</td>\r\n<td colspan=\"10\">&Phi;125 &times; 43.7 mm (&Phi;4.9\" &times; 1.7\")</td>\r\n</tr>\r\n<tr>\r\n<td>Net Weight</td>\r\n<td colspan=\"10\">0.39kg (0.86lb)</td>\r\n</tr>\r\n<tr>\r\n<td>Material</td>\r\n<td colspan=\"10\">Shield：plastic<br />Body：metal<br />Bottom plate：metal<br />decorative cover：plastic</td>\r\n</tr>\r\n<tr>\r\n<td>Working Environment</td>\r\n<td colspan=\"10\">-40&deg;C~60&deg;C (-40&deg;F~140&deg;F), Humidity: &le;95% RH</td>\r\n</tr>\r\n<tr>\r\n<td>Strorage Environment</td>\r\n<td colspan=\"10\">-40&deg;C~60&deg;C (-40&deg;F~140&deg;F), Humidity: &le;95% RH</td>\r\n</tr>\r\n<tr>\r\n<td>surge protection</td>\r\n<td colspan=\"10\">6KV</td>\r\n</tr>\r\n<tr>\r\n<td>Ingress Protection</td>\r\n<td colspan=\"10\">IP66</td>\r\n</tr>\r\n<tr>\r\n<td>Vandal Resistant</td>\r\n<td colspan=\"10\">IK10</td>\r\n</tr>\r\n<tr>\r\n<td>Reset Button</td>\r\n<td colspan=\"10\">Supported</td>\r\n</tr>\r\n</tbody>\r\n</table>', 438, 'uniview-ipc815sr-dvpf14', 19, 'Uniview IPC815SR-DVPF14 5MP IP Camera Price In Bangladesh', NULL, 4, 1, 'Uniview IPC815SR-DVPF14 5MP IP Price In Bangladesh', 'Uniview IPC815SR-DVPF14 5MP IP Price In Bangladesh, CCTV, camera, price, Bangladesh, importer, distributor, dahua, hikvision, price list, CCTV camera price in Bangladesh, CCTV company', 'Uniview IPC815SR-DVPF14 5MP IP Price In Bangladesh, CCTV Camera Company In Bangladesh Contact: 01836375309', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '1', '2020-07-02 01:02:57', '2020-10-01 05:01:04'),
(377, 'IPC868ER-VF18-B', '4K (12MP) Ultra HD Vandal-resistant Fisheye Fixed Dome Camera (Metal)', '#', '<ul>\r\n<li>1/1.7\", progressive scan, CMOS</li>\r\n<li>Lens 1.8mm</li>\r\n<li>Smart IR, Up to 10 m (33 ft)</li>\r\n<li>Ultra 265, H.265, H.264, MJPEG</li>\r\n<li>Micro SD, up to 256 GB</li>\r\n<li>Triple streams</li>\r\n<li>ROI</li>\r\n<li>3D DNR</li>\r\n<li>Digital defog</li>\r\n<li>Digital WDR</li>\r\n<li>BLC</li>\r\n<li>IP66</li>\r\n<li>IK10</li>\r\n</ul>', '<h3>Uniview IPC868ER-VF18-B Datasheet Specification &amp; Price In BD</h3>\r\n<table class=\"table table-striped table-bordered\">\r\n<tbody>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\">Model</th>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"5\">Uniview-IPC868ER-VF18-B</th>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Camera</th>\r\n</tr>\r\n<tr>\r\n<td>Image sensor</td>\r\n<td colspan=\"5\">1/1.7\", 12.0 megapixel, progressive scan, CMOS</td>\r\n</tr>\r\n<tr>\r\n<td>Lens</td>\r\n<td colspan=\"5\">1.8mm@F2.4</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">DORI Distance</td>\r\n<td>Lens (mm)</td>\r\n<td>Detect (m)</td>\r\n<td>Observe (m)</td>\r\n<td>Recognize (m)</td>\r\n<td>Identify (m)</td>\r\n</tr>\r\n<tr>\r\n<td>1.8</td>\r\n<td>43.8</td>\r\n<td>17.5</td>\r\n<td>8.8</td>\r\n<td>4.4</td>\r\n</tr>\r\n<tr>\r\n<td>Angle of View</td>\r\n<td colspan=\"5\">360&deg;</td>\r\n</tr>\r\n<tr>\r\n<td>Shutter</td>\r\n<td colspan=\"5\">Auto/Manual, shutter time: 1 ~ 1/100000s</td>\r\n</tr>\r\n<tr>\r\n<td>Minimum Illumination</td>\r\n<td colspan=\"5\">Colour: 0.05Lux (F2.4, AGC ON)<br />0Lux with IR</td>\r\n</tr>\r\n<tr>\r\n<td>Day / Night</td>\r\n<td colspan=\"5\">IR-cut filter for day &amp; night function</td>\r\n</tr>\r\n<tr>\r\n<td>S/N Ratio</td>\r\n<td colspan=\"5\">&gt;52dB</td>\r\n</tr>\r\n<tr>\r\n<td>IR Range</td>\r\n<td colspan=\"5\">Up to 10m (33ft)</td>\r\n</tr>\r\n<tr>\r\n<td>wavelength</td>\r\n<td colspan=\"5\">850nm</td>\r\n</tr>\r\n<tr>\r\n<td>IR On/Off Control</td>\r\n<td colspan=\"5\">Auto/Manual</td>\r\n</tr>\r\n<tr>\r\n<td>Defog</td>\r\n<td colspan=\"5\">Digital Defog</td>\r\n</tr>\r\n<tr>\r\n<td>WDR</td>\r\n<td colspan=\"5\">DWDR</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Video</th>\r\n</tr>\r\n<tr>\r\n<td>Compression</td>\r\n<td colspan=\"5\">Ultra265, H.265, H.264, MJPEG</td>\r\n</tr>\r\n<tr>\r\n<td>H.264 code profile</td>\r\n<td colspan=\"5\">Baseline profile, Main Profile, High Profile</td>\r\n</tr>\r\n<tr>\r\n<td>Fisheye Frame Rate</td>\r\n<td colspan=\"5\">Main Stream: 15fps (4000*3000, 3000*3000); 25fps (2560*2560);<br />Sub Stream: 15fps (2000*1500, 2000*2000); 25fps (2000*2000);<br />Third Stream: 15fps (720*576, 320*288)</td>\r\n</tr>\r\n<tr>\r\n<td>Panorama</td>\r\n<td colspan=\"5\">25fps (3000*2000);<br />15fps (4000*3000, 3000*2000, 3000*1500)</td>\r\n</tr>\r\n<tr>\r\n<td>Frame Rate PTZ</td>\r\n<td colspan=\"5\">15fps (1920*1080)</td>\r\n</tr>\r\n<tr>\r\n<td>Video Bit Rate</td>\r\n<td colspan=\"5\">128 Kbps~16 Mbps</td>\r\n</tr>\r\n<tr>\r\n<td>ROI</td>\r\n<td colspan=\"5\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>OSD</td>\r\n<td colspan=\"5\">Up to 8 OSDs</td>\r\n</tr>\r\n<tr>\r\n<td>Privacy Mask</td>\r\n<td colspan=\"5\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Motion Detection</td>\r\n<td colspan=\"5\">Up to 4 areas</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Image</th>\r\n</tr>\r\n<tr>\r\n<td>White Balance</td>\r\n<td colspan=\"5\">Auto/Outdoor/Fine Tune/Sodium Lamp/Locked/Auto2</td>\r\n</tr>\r\n<tr>\r\n<td>Digital noise reduction</td>\r\n<td colspan=\"5\">2D/3D DNR</td>\r\n</tr>\r\n<tr>\r\n<td>Smart IR</td>\r\n<td colspan=\"5\">Support</td>\r\n</tr>\r\n<tr>\r\n<td>Flip</td>\r\n<td colspan=\"5\">Normal/Flip Vertical/ Flip Horizontal/180&deg;</td>\r\n</tr>\r\n<tr>\r\n<td>Dewarping</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>HLC</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>BLC</td>\r\n<td colspan=\"5\">Support</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Audio</th>\r\n</tr>\r\n<tr>\r\n<td>Audio Compression</td>\r\n<td colspan=\"5\">G.711</td>\r\n</tr>\r\n<tr>\r\n<td>Two-way audio</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Suppression</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Sampling Rate</td>\r\n<td colspan=\"5\">8KHZ</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Storage</th>\r\n</tr>\r\n<tr>\r\n<td>Edge Storage</td>\r\n<td colspan=\"5\">Micro SD, up to 256GB</td>\r\n</tr>\r\n<tr>\r\n<td>Network Storage</td>\r\n<td colspan=\"5\">ANR, NAS(NFS)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Network</th>\r\n</tr>\r\n<tr>\r\n<td>Protocols</td>\r\n<td colspan=\"5\">IPv4, IGMP, ICMP, ARP, TCP, UDP, DHCP, PPPoE, RTP, RTSP, RTCP, DNS, DDNS, NTP, FTP, UPnP, HTTP, HTTPS, SMTP, 802.1x, SNMP, QoS</td>\r\n</tr>\r\n<tr>\r\n<td>Compatible Integration</td>\r\n<td colspan=\"5\">ONVIF (Profile S, Profile G, Profile T), API</td>\r\n</tr>\r\n<tr>\r\n<td>Client</td>\r\n<td colspan=\"5\">EZStation <br />EZView<br />EZLive</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Web Browser</td>\r\n<td colspan=\"5\">Plug-in required live view: IE9+, Chrome 41 and below, Firefox 52 and below</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Plug-in free live view: Chorme 57.0+, Firefox 58.0+, Edge 16+, Safari 11+</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Live View Display</th>\r\n</tr>\r\n<tr>\r\n<td>Mount Type</td>\r\n<td colspan=\"5\">Support table, wall, and ceiling</td>\r\n</tr>\r\n<tr>\r\n<td>Display Mode</td>\r\n<td colspan=\"5\">Support 10 display modes in total (including display modes of mount types and decoding modes):<br />Display Mode: Original Image, Fisheye+4PTZ, Panoramic<br />Preview Mode: Original Image, 360&deg; Panoramic+1PTZ, 180&deg; Panoramic, Fisheye+3PTZ, Fisheye+4PTZ, 360&deg; Panoramic+6PTZ, Fisheye+8PTZ</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Interface</th>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"3\">Audio I/O</td>\r\n<td colspan=\"5\">Audio interface</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Input: impedance 35k&Omega;; amplitude 2V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Output: impedance 600&Omega;; amplitude 2V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Alarm I/O</td>\r\n<td colspan=\"5\">2/1</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Multiple Alarm linkage editable</td>\r\n</tr>\r\n<tr>\r\n<td>Built-in Mic</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Built-in Speaker</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Serial</td>\r\n<td colspan=\"5\">1 channel RS485 interface</td>\r\n</tr>\r\n<tr>\r\n<td>Network</td>\r\n<td colspan=\"5\">1 RJ45 10M/100M Base-TX Auto-adaptive Ethernet&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Video Output</td>\r\n<td colspan=\"5\">1 BNC, impedance 75&Omega;; amplitude 1V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Certifications</th>\r\n</tr>\r\n<tr>\r\n<td>Certifications</td>\r\n<td colspan=\"5\">CE: EN 60950-1<br />UL: UL60950-1<br />FCC: FCC Part 15</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">General</th>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Power</td>\r\n<td colspan=\"5\">DC 12V&plusmn;25%, PoE (IEEE 802.3af)</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Power consumption: Max 9.6W&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions (&Oslash; x H)</td>\r\n<td colspan=\"5\">&Phi;149 x 51.5mm (&Phi;5.87&rdquo; x 2.0&rdquo;)</td>\r\n</tr>\r\n<tr>\r\n<td>Net Weight</td>\r\n<td colspan=\"5\">0.5kg (1.1lb)</td>\r\n</tr>\r\n<tr>\r\n<td>Material</td>\r\n<td colspan=\"5\">Shield：PC<br />Body：metal<br />Bottom plate：metal<br />decorative cover：plastic</td>\r\n</tr>\r\n<tr>\r\n<td>Working Environment</td>\r\n<td colspan=\"5\">-35&deg;C ~ 60&deg;C (-31&deg;F ~ 140&deg;F), Humidity: &le;95% RH</td>\r\n</tr>\r\n<tr>\r\n<td>Strorage Environment</td>\r\n<td colspan=\"5\">-35&deg;C ~ 60&deg;C (-31&deg;F ~ 140&deg;F), Humidity: &le;95% RH</td>\r\n</tr>\r\n<tr>\r\n<td>surge protection</td>\r\n<td colspan=\"5\">6kv</td>\r\n</tr>\r\n<tr>\r\n<td>Ingress Protection</td>\r\n<td colspan=\"5\">IP66</td>\r\n</tr>\r\n<tr>\r\n<td>Vandal Resistant</td>\r\n<td colspan=\"5\">IK10</td>\r\n</tr>\r\n<tr>\r\n<td>Reset Button</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n</tbody>\r\n</table>', 436, 'uniview-ipc868er-vf18-b', 19, 'Uniview IPC868ER-VF18-B 12 MP IP Camera Price In Bangladesh', NULL, 4, 2, 'Uniview IPC868ER-VF18-B 12 MP IP Price In Bangladesh', 'Uniview IPC868ER-VF18-B 12 MP IP Price In Bangladesh, CCTV, camera, price, Bangladesh, importer, distributor, dahua, hikvision, price list, CCTV camera price in Bangladesh, CCTV company', 'Uniview IPC868ER-VF18-B 12 MP IP Price In Bangladesh, We the best CCTV camera company in Bangladesh contact: 01836375309', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '1', '2020-07-02 01:08:18', '2020-10-04 01:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `products_brands`
--

CREATE TABLE `products_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BrandName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandUrl` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandBrowserTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeoHeading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BrandDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BrandSeoKeyword` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandSeoDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `FeaturedImage` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_brands`
--

INSERT INTO `products_brands` (`id`, `BrandName`, `BrandUrl`, `BrandBrowserTitle`, `SeoHeading`, `BrandDetails`, `BrandSeoKeyword`, `BrandSeoDescription`, `FeaturedImage`, `ImageAltText`, `ImageTitleText`, `created_at`, `updated_at`) VALUES
(4, 'AVTECH', 'avtech-cctv-camera-price-bangladesh', 'Avtech CCCTV Camera Price In Bangladesh', 'Avtech CCTV Camera Price In Bangladesh | Avtech Distributor Bangladesh', '<p>avtech cctv camera price in bangladesh. we are the avtech authorised distributor in bangladesh. we think avtech is the best cctv camera. we provide all kinds of avtech cctv camera solution products. we provide avtech total solution, Avtech HD Cctv solutions with best avtech price&nbsp; provide in bangladesh only we. We provide avtech hd camera, IP Camera avtech NVR avtech DVR. avtech ptz camera. with best solution best price avtech product.</p>', 'avtech cctv camera price in bangladesh. avtech cctv camera distributor in bangladesh, avtech ip camera, avtech hd camera, avtech importer in bangladesh,  avtech distributor in bangladesh,  cctv camera company in bangladesh,  cctv camera importer in bangladesh,  cctv dealer in bangladesh', 'avtech cctv camera price in bangladesh. avtech cctv camera distributor in bangladesh, avtech ip camera, avtech hd camera, avtech importer in bangladesh,  avtech distributor in bangladesh,  cctv camera company in bangladesh,  cctv camera importer in bangladesh,  cctv dealer in bangladesh', 435, 'avtech cctv camera', 'Avtech CCTV Camera', '2020-03-11 20:43:11', '2020-09-30 09:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageurl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `imageurl`, `created_at`, `updated_at`) VALUES
(435, 'productsImage/drink-product.png', '2020-09-30 09:03:33', '2020-09-30 09:03:33'),
(436, 'productsImage/drink-can.png', '2020-09-30 09:03:39', '2020-09-30 09:03:39'),
(438, 'productsImage/cross.png', '2020-09-30 09:03:53', '2020-09-30 09:03:53'),
(439, 'productsImage/nexsu.png', '2020-09-30 09:03:58', '2020-09-30 09:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `products_primary_categories`
--

CREATE TABLE `products_primary_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryUrl` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeoHeading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CategoryDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CategorySeoKeyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategorySeoDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryBrowserTitle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_primary_categories`
--

INSERT INTO `products_primary_categories` (`id`, `CategoryName`, `CategoryUrl`, `SeoHeading`, `CategoryDetails`, `CategorySeoKeyword`, `CategorySeoDescription`, `CategoryBrowserTitle`, `created_at`, `updated_at`) VALUES
(19, 'RO+UV+ TDS CONTROLLER +UF+MINERAL CARTAGE', 'test', 'RO+UV+ TDS CONTROLLER +UF+MINERAL CARTAGE', '<p>RO+UV+&nbsp;TDS&nbsp;CONTROLLER&nbsp;+UF+MINERAL&nbsp;CARTAGE</p>', 'RO+UV+ TDS CONTROLLER +UF+MINERAL CARTAGE', 'RO+UV+ TDS CONTROLLER +UF+MINERAL CARTAGE', 'RO+UV+ TDS CONTROLLER +UF+MINERAL CARTAGE', '2020-10-01 04:53:18', '2020-10-01 04:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductId` bigint(20) UNSIGNED NOT NULL,
  `ImageId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'PURIFIER', NULL, NULL),
(2, 'GKK', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quick_liinks`
--

CREATE TABLE `quick_liinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quick_liinks`
--

INSERT INTO `quick_liinks` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'About Drinkcan', 'about-drinkcan', '2020-10-03 06:21:02', '2020-10-05 05:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `site_profiles`
--

CREATE TABLE `site_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ShortDescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SiteName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EditorPublisher` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CorporateAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HeadAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CorporatePhone` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CorporateEmail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MainLogo` bigint(20) UNSIGNED NOT NULL,
  `MainLogoTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MainLogoAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CopyRightText` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DomainName` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DesignerDeveloperName` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DesignerDeveloperDomain` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GoogleMap` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_profiles`
--

INSERT INTO `site_profiles` (`id`, `ShortDescription`, `SiteName`, `EditorPublisher`, `CorporateAddress`, `HeadAddress`, `CorporatePhone`, `Phone1`, `phone2`, `phone3`, `CorporateEmail`, `Email2`, `Email3`, `MainLogo`, `MainLogoTitleText`, `MainLogoAltText`, `CopyRightText`, `DomainName`, `DesignerDeveloperName`, `DesignerDeveloperDomain`, `GoogleMap`, `created_at`, `updated_at`) VALUES
(3, 'Soshine Marketing Company : We combine excellence with top quality, integrity and timeliness to provide 24/7 quality service specially designed to facilitate our users experience beyond expectation.', 'Soshine', 'Mithun Rana', '41/8, (Gr. & 1st Floor), Box Culvert Road, Purana Paltan, Dhaka-1000', '41/8, (Gr. & 1st Floor), Box Culvert Road, Purana Paltan, Dhaka-1000', '01678225976', '01678225976', NULL, NULL, 'info@soshinebd.com', 'info@soshinebd.com', NULL, 44, 'DrinkCan', 'Drink Can', '© 2020 Copyright: www.soshinebd.com', 'ww.soshinebd.com', 'Md. Mithun Rana', 'https://www.techhelpinfo.com', NULL, NULL, '2020-10-03 07:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visualtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `visualtext`, `url`, `sitename`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Soshine', 'https://www.facebook.com/soshinebd/', 'Facebook', '<i class=\"fa fa-facebook-official\"></i>', '2020-09-08 04:41:36', '2020-09-08 04:48:11'),
(2, 'Soshine', 'https://www.linkedin.com/company/soshinebd/', 'LinkedIn', '<i class=\"fa fa-linkedin-square\"></i>', '2020-09-08 04:43:22', '2020-09-08 04:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `software_lists`
--

CREATE TABLE `software_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SoftwareName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DownloadLink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ActiveStatus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `software_lists`
--

INSERT INTO `software_lists` (`id`, `SoftwareName`, `DownloadLink`, `ActiveStatus`, `created_at`, `updated_at`) VALUES
(1, 'EagleEyes(Lite)', 'https://www.soshinebd.com/software/EagleEyes Lite_v1.8.3.apk', 1, '2020-08-19 09:44:52', '2020-09-14 03:31:47'),
(3, 'CMS Lite 32CH', 'https://www.soshinebd.com/software/AVTECH Trident CMS Lite v3.0.0.43 Installer.exe', 1, '2020-09-14 03:19:12', '2020-09-14 03:31:39'),
(4, 'CMS Plus 64CH', 'https://www.soshinebd.com/software/AVTECH Trident CMS Plus v3.0.0.43 Installer.exe', 1, '2020-09-14 03:19:40', '2020-09-14 03:31:14'),
(5, 'CMS Professional 96CH', 'd', 1, '2020-09-14 03:19:54', '2020-09-14 03:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `support_models`
--

CREATE TABLE `support_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customertype` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `companyname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servicetype` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VerifyCode` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activestatus` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'EndUserNotActive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone`, `email`, `email_verified_at`, `password`, `customertype`, `partner`, `companyname`, `servicetype`, `country`, `address`, `VerifyCode`, `image`, `activestatus`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mithun Rana', 'mithunrana.developer@gmail.com', '0179777', 'mithunrana.developer@gmail.com', NULL, '$2y$10$JYbkUAqYTgXJEsiUJ/7SS.2Roiw3HgE0LaIyXmQ1h71SliDEc2Z8q', 'Retailer', 'no', 'asdfasdfasdf', 'softwareservice', 'Bangladesh', 'Dhaka Bangladesh', '513813', 'user image/mithunrana.developer@gmail.com.jpg', 'TechHelpInfoAdmin', NULL, '2020-09-01 07:32:22', '2020-10-05 04:56:33'),
(7, 'Mithun Rana', 'mithunranabd', '01797744248', 'mithunrana139@gmail.com', NULL, '$2y$10$xtJg6Uvq1XxUjvmR6HoP/.aSQpisLC.81xGnG.NxPCsyOBwTL87PS', 'End User', 'no', 'b', NULL, 'bangladesh', 'dhaka bangladesh', '537576', NULL, 'EndUserNotActive', NULL, '2020-09-09 02:31:01', '2020-09-09 02:31:01'),
(8, 'Kaowsher Hamid', 'MKHT', '+8801676610343', 'mkh.najim@gmail.com', NULL, '$2y$10$d5mx2KbqKFPok.Dwt9j.2eqYn6Wpar3ZbmDMpp.FAJEDQY0m7aTBm', 'Retailer', 'no', 'M K Technology', 'itservice', 'bangladesh', 'dhaka bangladesh - 1000', '242477', 'user image/MKHT.jpg', 'TechHelpInfoAdmin', NULL, '2020-09-13 05:30:52', '2020-09-13 05:37:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_products`
--
ALTER TABLE `about_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorization_certificates`
--
ALTER TABLE `authorization_certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorization_certificates_featuredimage1_foreign` (`FeaturedImage1`),
  ADD KEY `authorization_certificates_featuredimage2_foreign` (`FeaturedImage2`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tutorials`
--
ALTER TABLE `blog_tutorials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_tutorials_featuredimage_foreign` (`FeaturedImage`);

--
-- Indexes for table `cctv_camera_mega_pixels`
--
ALTER TABLE `cctv_camera_mega_pixels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_c_t_v_brands`
--
ALTER TABLE `c_c_t_v_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electro_prono_sliders`
--
ALTER TABLE `electro_prono_sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `electro_prono_sliders_sliderimage_foreign` (`sliderimage`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_featuredimage1_foreign` (`FeaturedImage1`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_featuredimage1_foreign` (`FeaturedImage1`),
  ADD KEY `portfolios_featuredimage2_foreign` (`FeaturedImage2`);

--
-- Indexes for table `price_lists`
--
ALTER TABLE `price_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FeaturedImage` (`FeaturedImage`);

--
-- Indexes for table `products_brands`
--
ALTER TABLE `products_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brands_featuredimage_foreign` (`FeaturedImage`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_primary_categories`
--
ALTER TABLE `products_primary_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_liinks`
--
ALTER TABLE `quick_liinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_profiles`
--
ALTER TABLE `site_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `site_profiles_mainlogo_foreign` (`MainLogo`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_lists`
--
ALTER TABLE `software_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_models`
--
ALTER TABLE `support_models`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_products`
--
ALTER TABLE `about_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authorization_certificates`
--
ALTER TABLE `authorization_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_tutorials`
--
ALTER TABLE `blog_tutorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cctv_camera_mega_pixels`
--
ALTER TABLE `cctv_camera_mega_pixels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_c_t_v_brands`
--
ALTER TABLE `c_c_t_v_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `electro_prono_sliders`
--
ALTER TABLE `electro_prono_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `price_lists`
--
ALTER TABLE `price_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT for table `products_brands`
--
ALTER TABLE `products_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT for table `products_primary_categories`
--
ALTER TABLE `products_primary_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quick_liinks`
--
ALTER TABLE `quick_liinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_profiles`
--
ALTER TABLE `site_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `software_lists`
--
ALTER TABLE `software_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `support_models`
--
ALTER TABLE `support_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authorization_certificates`
--
ALTER TABLE `authorization_certificates`
  ADD CONSTRAINT `authorization_certificates_featuredimage1_foreign` FOREIGN KEY (`FeaturedImage1`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `authorization_certificates_featuredimage2_foreign` FOREIGN KEY (`FeaturedImage2`) REFERENCES `images` (`id`);

--
-- Constraints for table `blog_tutorials`
--
ALTER TABLE `blog_tutorials`
  ADD CONSTRAINT `blog_tutorials_featuredimage_foreign` FOREIGN KEY (`FeaturedImage`) REFERENCES `images` (`id`);

--
-- Constraints for table `electro_prono_sliders`
--
ALTER TABLE `electro_prono_sliders`
  ADD CONSTRAINT `electro_prono_sliders_sliderimage_foreign` FOREIGN KEY (`sliderimage`) REFERENCES `images` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_featuredimage1_foreign` FOREIGN KEY (`FeaturedImage1`) REFERENCES `images` (`id`);

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_featuredimage1_foreign` FOREIGN KEY (`FeaturedImage1`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `portfolios_featuredimage2_foreign` FOREIGN KEY (`FeaturedImage2`) REFERENCES `images` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`FeaturedImage`) REFERENCES `products_images` (`id`);

--
-- Constraints for table `products_brands`
--
ALTER TABLE `products_brands`
  ADD CONSTRAINT `products_brands_featuredimage_foreign` FOREIGN KEY (`FeaturedImage`) REFERENCES `products_images` (`id`);

--
-- Constraints for table `site_profiles`
--
ALTER TABLE `site_profiles`
  ADD CONSTRAINT `site_profiles_mainlogo_foreign` FOREIGN KEY (`MainLogo`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
