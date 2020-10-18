-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 09:26 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `FeaturedImage` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_products`
--

INSERT INTO `about_products` (`id`, `Title`, `Content`, `products_id`, `FeaturedImage`, `ImageAltText`, `ImageTitleText`, `created_at`, `updated_at`) VALUES
(3, 'fasdfasd', 'fasdf', 375, 435, 'fasdf', 'asdadff', '2020-10-09 06:00:40', '2020-10-09 06:00:40'),
(7, ' fadf adf adf adf', 'f adf adf adf adf', 375, 435, NULL, NULL, NULL, NULL),
(8, 'kjhgkjhkjlh', 'hlhlh', 376, 435, NULL, NULL, NULL, NULL);

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
(6, 'Best Water Purifier For Health', '#', 'Best Water Purifier For', 'Best Water Purifier For Health', 'Best Water Purifier For Health', 'https://www.youtube.com/watch?v=wqUNGhLCqnk', 'Best Water Purifier For Health', 46, NULL, NULL, '<h1 class=\"wow animated fadeInDownslow animated animated\">Best Water Purifier For Health</h1>', NULL, '1', 1, 1, '2020-10-03 07:05:36', '2020-10-15 06:53:05');

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
-- Table structure for table `client_feed_backs`
--

CREATE TABLE `client_feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FeaturedImage` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ActiveStatus` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `Address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `Name`, `Mobile`, `Email`, `ComplainType`, `ComplainDetails`, `ProductId`, `checkstatus`, `Address`, `Comment`, `created_at`, `updated_at`) VALUES
(2, 'fasdf', 'adsfasd', 'fadsfa', '6353', 'fasd', 373, 0, 'fadsf', NULL, '2020-10-07 09:08:22', '2020-10-07 09:08:22'),
(4, 'mithun', '0179774248', 'mithun@gmail.com', '6350', 'complain', 376, 0, 'address', NULL, '2020-10-08 02:59:56', '2020-10-08 02:59:56'),
(5, 'mithun', '0179774248', 'mithun@gmail.com', '6350', 'complain', 377, 0, 'address', NULL, '2020-10-08 03:00:07', '2020-10-08 03:00:07'),
(6, 'mithun update', '0179774248 update', 'mithunran@gmail.com update', '6353', 'complain update', 376, 1, 'adress update', NULL, '2020-10-08 03:04:16', '2020-10-08 03:27:43');

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
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'Bagerhat', NULL, NULL),
(2, 'Bandarban', NULL, NULL),
(3, 'Barguna', NULL, NULL),
(4, 'Barisal', NULL, NULL),
(5, 'Bhola', NULL, NULL),
(6, 'Bogra', NULL, NULL),
(7, 'Brahmanbaria', NULL, NULL),
(8, 'Chandpur', NULL, NULL),
(9, 'Chittagong', NULL, NULL),
(10, 'Comilla', NULL, NULL),
(11, 'Cox Bazar', NULL, NULL),
(12, 'Dhaka', NULL, NULL),
(13, 'Dinajpur', NULL, NULL),
(14, 'Faridpur', NULL, NULL),
(15, 'Feni', NULL, NULL),
(16, 'Gaibandha', NULL, NULL),
(17, 'Gazipur', NULL, NULL),
(18, 'Gopalganj', NULL, NULL),
(19, 'Habiganj', NULL, NULL),
(20, 'Jaipurhat', NULL, NULL),
(21, 'Jamalpur', NULL, NULL),
(22, 'Jessore', NULL, NULL),
(23, 'Jhalakati', NULL, NULL),
(24, 'Jhenaidah', NULL, NULL),
(25, 'Khagrachari', NULL, NULL),
(26, 'Khulna', NULL, NULL),
(27, 'Kishoreganj', NULL, NULL),
(28, 'Kurigram', NULL, NULL),
(29, 'Kushtia', NULL, NULL),
(30, 'Lakshmipur', NULL, NULL),
(31, 'Lalmonirhat', NULL, NULL),
(32, 'Madaripur', NULL, NULL),
(33, 'Magura', NULL, NULL),
(35, 'Meherpur', NULL, NULL),
(36, 'Moulvibazar', NULL, NULL),
(37, 'Munshiganj', NULL, NULL),
(38, 'Mymensingh', NULL, NULL),
(39, 'Naogaon', NULL, NULL),
(40, 'Narail', NULL, NULL),
(41, 'Narayanganj', NULL, NULL),
(42, 'Narsingdi', NULL, NULL),
(43, 'Natore', NULL, NULL),
(44, 'Manikganj', NULL, NULL),
(45, 'Netrakona', NULL, NULL),
(46, 'Nilphamari', NULL, NULL),
(47, 'Noakhali', NULL, NULL),
(48, 'Pabna', NULL, NULL),
(49, 'Panchagarh', NULL, NULL),
(50, 'Parbattya Chattagram', NULL, NULL),
(51, 'Patuakhali', NULL, NULL),
(52, 'Pirojpur', NULL, NULL),
(53, 'Rajbari', NULL, NULL),
(54, 'Rajshahi', NULL, NULL),
(55, 'Rangpur', NULL, NULL),
(56, 'Satkhira', NULL, NULL),
(57, 'Shariatpur', NULL, NULL),
(58, 'Sherpur', NULL, NULL),
(59, 'Sirajganj', NULL, NULL),
(60, 'Sunamganj', NULL, NULL),
(61, 'Sylhet', NULL, NULL),
(62, 'Tangail', NULL, NULL),
(63, 'Thakurgaon', NULL, NULL),
(64, 'Chuadanga', NULL, NULL);

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
(7, 55, 'DrinkCan Water Purifier', 1, '2020-10-17 06:23:06', '2020-10-17 06:23:10'),
(8, 54, 'Water Purifier', 1, '2020-10-17 06:24:08', '2020-10-17 06:24:12');

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

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `Question`, `Answer`, `ProductId`, `created_at`, `updated_at`) VALUES
(1, 'GAFG', 'ADFASDF', 373, '2020-10-09 09:11:07', '2020-10-09 09:11:07');

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
(47, 'images/water-benefits.jpg', '2020-10-03 07:48:41', '2020-10-03 07:48:41'),
(48, 'images/Flood-situation-deteriorates-in-Ganges-brahmaputra-basins.jpg', '2020-10-15 06:09:01', '2020-10-15 06:09:01'),
(49, 'images/Rivers-flowing-above-danger-level-Barisal-due-o-heavy-rainfall.jpg', '2020-10-15 06:09:05', '2020-10-15 06:09:05'),
(50, 'images/Waterlevel-Ganges-basin-remains-steady.jpg', '2020-10-15 06:09:10', '2020-10-15 06:09:10'),
(51, 'images/scientists-fear-lasting-impact-from-mauritius-oil-spill.jpg', '2020-10-15 06:31:41', '2020-10-15 06:31:41'),
(52, 'images/no-oil-on-dolphins-washed-up-near-mauritius-spill autopsy-report.jpg', '2020-10-15 06:31:46', '2020-10-15 06:31:46'),
(53, 'images/no-arsenic-contamination-survey in-17-years.jpg', '2020-10-15 06:31:55', '2020-10-15 06:31:55'),
(54, 'images/drinkcan-waterpurifier-bd2.jpg', '2020-10-17 06:22:13', '2020-10-17 06:22:13'),
(55, 'images/drinkcan-water-purifier-bd.jpg', '2020-10-17 06:22:20', '2020-10-17 06:22:20');

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
(71, '2020_10_04_155519_create_orders_table', 23),
(72, '2020_10_07_124858_create_complains_table', 24),
(74, '2020_10_03_061008_create_product_features_table', 25),
(76, '2020_10_11_152658_create_thana_names_table', 27),
(77, '2020_10_11_152601_create_districts_table', 28),
(80, '2020_10_14_072116_create_client_feed_backs_table', 29);

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
(1, 'Rivers flowing above danger level in Barisal due to heavy rainfall', 'test', 'Rivers flowing above danger level in Barisal due to heavy rainfall', 'Rivers flowing above danger level in Barisal due to heavy rainfall', 'Rivers flowing above danger level in Barisal due to heavy rainfall', 49, NULL, NULL, '<p>Because of heavy downpour during the last five days and upstream flood water, the Kirtonkhola, Burishwar, and Meghna rivers and most of their tributaries are swelling above the danger mark submerging vast areas of Barisal region.</p>', '<p>Abdul Kuddus, senior observer of the Barisal divisional weather office, informed that a total of 65 millimeter rainfall was recorded at Barisal city and surrounding areas in the last 24-hour &nbsp;till 3pm on Wednesday.</p>\r\n<p>Meanwhile, croplands, commercial and residential areas in many places went under water, confirmed Bangladesh Water Development Board (BWDB), Barisal office.&nbsp;</p>\r\n<p>Fishing boats and trawlers lie idle as the sea remains rough due to a depression over the Bay.</p>\r\n<p>Local river ports have been asked to show Cautionary Signal No 1 and marine ports 3, weather office sources said.</p>', 1, '2020-09-08 05:01:45', '2020-10-15 06:12:44'),
(2, 'Water level in Ganges basin remains steady', '#', 'Water level in Ganges basin remains steady', 'Water level in Ganges basin remains steady', 'Water level in Ganges basin remains steady', 50, NULL, NULL, '<p>Water level in many of the rivers in the Ganges basin either recorded fall or remained steady till Tuesday morning due to the declining of onrushing floodwater from upstream hilly catchment areas in the past 24 hours after rising for the last couple of days.</p>', '<p>Goaler Char areas in Jamalpur</p>\r\n<p>&nbsp;</p>\r\n<p>District and upazila administrations distributing relief materials in the worst-affected areas continuously</p>\r\n<p>Water level in many of the rivers in the Ganges basin either recorded fall or remained steady till Tuesday morning due to the declining of onrushing floodwater from upstream hilly catchment areas in the past 24 hours after rising for the last couple of days.</p>\r\n<p>Of the 30 river points monitored in the Ganges basin on Tuesday, water levels receded at 21 points, while went up at six points, and remained stable at three points, according to data of Flood Forecasting and Warning Centre (FFWC).</p>\r\n<p>However, the rivers were flowing below the danger level at 28 points, while above the danger levels at two points.</p>\r\n<p>&ldquo;We recorded falling and steady trends in many rivers, including Mahananda, Ganges, Padma, and some of the downstream rivers and tributaries of the Ganges basin today,&rdquo; Mukhlesur Rahman, superintending engineer of Bangladesh Water Development Board (BWDB), told BSS this morning.</p>\r\n<p>He said water level of the Ganges River remained steady at Pankha in Chapainawabganj, Rajshahi and Hardinge Bridge points, while receded by two centimetres (cm) at Talbaria points afresh at 9am on Tuesday.</p>\r\n<p>&nbsp;</p>', 1, '2020-10-06 00:40:27', '2020-10-15 06:10:59'),
(3, 'Flood situation deteriorates in Ganges, Brahmaputra basins', '#', 'Flood situation deteriorates in Ganges, Brahmaputra basins', 'Flood situation deteriorates in Ganges, Brahmaputra basins', 'Flood situation deteriorates in Ganges, Brahmaputra basins', 48, NULL, NULL, '<p>The overall flood situation in the Ganges and Brahmaputra basins have deteriorated further with inundation of fresh low-lying areas and standing crops in the Brahmaputra basin during the last 24 hours.</p>', '<p>Of the 16 river points both in Ganges and Brahmaputra Basins, being monitored in many districts under Rajshahi division regularly, water levels increased at 15 points, while declined at one point.</p>\r\n<p>The rivers were flowing below the danger level in 10 points, while above the danger mark at another six points on Tuesday.</p>\r\n<p>At Rangpur, Bangladesh Water Development Board (BWDB) officials said the Brahmaputra, Jamuna, Ghagot, Jamuneswari and Kartoa marked further rise while Dharla and Teesta fell due to onrush of water from upstream despite no rainfalls during the last 24 hours in the basin.</p>\r\n<p>According to the BWDB&rsquo;s Flood Forecasting and Warning Centre&rsquo;s flood situation bulletin, water levels of the Brahmaputra-Jamuna river systems are in rising trend which may continue in next 24 hours in the Brahmaputra basin.</p>', 1, '2020-10-15 06:14:01', '2020-10-15 06:14:05'),
(4, 'No arsenic contamination survey in 17 years', '#', 'No arsenic contamination survey in 17 years', 'No arsenic contamination survey in 17 years', 'No arsenic contamination survey in 17 years', 53, NULL, NULL, NULL, '<p>People consider the water from the tubewell near their home to be safe for drinking. There is no way to ascertain the arsenic content of the water without testing it. Arsenic is odourless. And the effects of arsenic on the human body appear only after a few years. The skin becomes dry and breaks out in rashes and then sores appear. This can ultimately lead to cancer.</p>\r\n<p>The health directorate has no updated records on the persons affected by arsenic in the country. However, according to a 2019 survey of the Bangladesh Bureau of Statistic (BBS) and UNICEF, 11.8 per cent of the people in Bangladesh drink arsenic-contaminated water. That means, 19,835,000 (1 crore 98 lakh 35 thousand) in the country drink this contaminated water.</p>\r\n<p>According to the United National Population Fund (UNFPA)\'s annual global population report 2019, the present population of Bangladesh is 168.1 million (16 crore 81 lakh).</p>', 1, '2020-10-15 06:32:45', '2020-10-15 06:32:49'),
(5, 'No oil on dolphins washed up near Mauritius spill: Autopsy report', '#', 'No oil on dolphins washed up near Mauritius spill: Autopsy report', 'No oil on dolphins washed up near Mauritius spill: Autopsy report', 'No oil on dolphins washed up near Mauritius spill: Autopsy report', 52, NULL, NULL, NULL, '<p>Dead dolphins that washed up in Mauritius near the site of an oil spill have so far been found to have wounds on their bodies but no trace of oil, preliminary autopsy results released on Thursday said.</p>\r\n<p>Environmentalists are urgently seeking an explanation for the mysterious deaths of 27 dolphins which washed ashore on Wednesday and Thursday, to determine whether they were killed by the spill. Scientists fear the toxic spill could hurt wildlife for many years on islands that depend on tourism.</p>', 1, '2020-10-15 06:33:29', '2020-10-15 06:33:32'),
(6, 'Scientists fear lasting impact from Mauritius oil spill', '#', 'Scientists fear lasting impact from Mauritius oil spill', 'Scientists fear lasting impact from Mauritius oil spill', 'Scientists fear lasting impact from Mauritius oil spill', 51, NULL, NULL, NULL, '<p>Some corals have lived for centuries at the fringes of Mauritius. Now smothered for days in heavy fuel oil spilled from a wrecked Japanese tanker nearby, parts of those reefs may be in trouble.</p>\r\n<p>The full impact of the toxic spill is still unfolding, scientists say. As the Indian Ocean island\'s residents scramble to mop up the oil slicks and clumps, they are seeing dead eels and fish floating in the water, as fuel-soaked seabirds limp onto shore.</p>\r\n<p>Satellite images also show the 1,000 tonnes of spilled oil spreading northward along the coastline from the spill site in the turquoise waters of Blue Bay Marine Park.</p>', 1, '2020-10-15 06:34:10', '2020-10-15 06:34:14');

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
(2, 'Mithun Rana', '01797744248', 373, 1, 1, 'Dhaka Bangladesh', 'fasd update', '2020-10-05 03:56:12', '2020-10-08 01:49:30'),
(3, 'fadf', 'asdffasdffa', 377, 0, 2, 'asdfasdffa', 'order confirm', '2020-10-05 03:56:35', '2020-10-05 03:56:56'),
(4, 'Test', '01797744248', 375, 0, 0, 'dhaka bangladesh', NULL, '2020-10-16 08:59:19', '2020-10-16 08:59:49'),
(5, 'Mithun Rana', '01797744248', 377, 0, 2, 'dhaka, bangladesh', NULL, '2020-10-16 09:03:08', '2020-10-16 09:03:08'),
(6, 'Mithun Rana', '01797744248', 377, 0, 2, 'Dhaka Bangladesh', NULL, '2020-10-16 10:12:08', '2020-10-16 10:12:08'),
(7, 'Mithun Rana', '01797744248', 375, 0, 2, 'dhaka bangladesh', NULL, '2020-10-16 10:13:11', '2020-10-16 10:13:11'),
(8, 'Mithun Rana', '01797744248', 373, 0, 2, 'Dhaka Bangladesh', NULL, '2020-10-16 10:15:43', '2020-10-16 10:15:43'),
(9, 'Mithun Rana', '01797744248', 377, 0, 2, 'dhaka bangladesh', NULL, '2020-10-16 10:18:48', '2020-10-16 10:18:48'),
(10, 'mithun rana', '01797744248', 375, 0, 2, 'dhaka banghladesh', NULL, '2020-10-17 03:02:19', '2020-10-17 03:02:19'),
(11, 'Mithun Rana', '01797744248', 375, 0, 2, 'dhaka bangladesh', NULL, '2020-10-17 04:37:24', '2020-10-17 04:37:24'),
(12, 'Mithun Rana', '01797744248', 375, 0, 2, 'dhaka bangladesh', NULL, '2020-10-17 04:38:45', '2020-10-17 04:38:45'),
(13, 'Mithun Rana', '01797744248', 375, 0, 2, 'dhaka bangladesh', NULL, '2020-10-17 04:39:42', '2020-10-17 04:39:42');

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
(375, 'GRAND', '4MP Fisheye Fixed Dome Network Camera (Metal)', '#', '<ul>\r\n<li>1/3\", progressive scan, CMOS</li>\r\n<li>Lens 1.6mm</li>\r\n<li>Smart IR, Up to 10 m (33 ft)</li>\r\n<li>Ultra 265, H.265, H.264, MJPEG</li>\r\n<li>Micro SD, up to 256 GB, ROI</li>\r\n<li>3D DNR. Digital defog</li>\r\n<li>128dB WDR, BLC</li>\r\n<li>Audio Compression G.711</li>\r\n<li>Two-way audio, Built-in Mic</li>\r\n<li>ONVIF Conformance</li>\r\n<li>IP66, IK10</li>\r\n<li>Reset Button</li>\r\n<li>Warranty: 2 Years</li>\r\n</ul>', '<h3>Uniview IPC814SR-DVPF16 Datasheet Specification &amp; Price In BD</h3>\r\n<table class=\"table table-striped table-bordered\">\r\n<tbody>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"2\">Model</th>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"5\">Uniview-IPC814SR-DVPF16</th>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Camera</th>\r\n</tr>\r\n<tr>\r\n<td>Image sensor</td>\r\n<td colspan=\"5\">1/3\", 4.0 megapixel, progressive scan, CMOS</td>\r\n</tr>\r\n<tr>\r\n<td>Lens</td>\r\n<td colspan=\"5\">1.6mm@F1.6</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">DORI Distance</td>\r\n<td>Lens (mm)</td>\r\n<td>Detect (m)</td>\r\n<td>Observe (m)</td>\r\n<td>Recognize (m)</td>\r\n<td>Identify (m)</td>\r\n</tr>\r\n<tr>\r\n<td>1.6</td>\r\n<td>36</td>\r\n<td>14.4</td>\r\n<td>7.2</td>\r\n<td>3.7</td>\r\n</tr>\r\n<tr>\r\n<td>Angle of View</td>\r\n<td colspan=\"5\">180&deg;</td>\r\n</tr>\r\n<tr>\r\n<td>Shutter</td>\r\n<td colspan=\"5\">Auto/Manual, shutter time: 1 ~ 1/100000s</td>\r\n</tr>\r\n<tr>\r\n<td>Minimum Illumination</td>\r\n<td colspan=\"5\">Colour: 0.01Lux (F1.6, AGC ON)<br />0Lux with IR</td>\r\n</tr>\r\n<tr>\r\n<td>Day / Night</td>\r\n<td colspan=\"5\">IR-cut filter for day &amp; night function</td>\r\n</tr>\r\n<tr>\r\n<td>Digital noise reduction</td>\r\n<td colspan=\"5\">2D/3D DNR</td>\r\n</tr>\r\n<tr>\r\n<td>S/N</td>\r\n<td colspan=\"5\">55dB</td>\r\n</tr>\r\n<tr>\r\n<td>IR Range</td>\r\n<td colspan=\"5\">UP to 10m (33ft)</td>\r\n</tr>\r\n<tr>\r\n<td>Defog</td>\r\n<td colspan=\"5\">Digital Defog</td>\r\n</tr>\r\n<tr>\r\n<td>WDR</td>\r\n<td colspan=\"5\">120dB</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Video</th>\r\n</tr>\r\n<tr>\r\n<td>Compression</td>\r\n<td colspan=\"5\">Ultra265, H.264, MJPEG</td>\r\n</tr>\r\n<tr>\r\n<td>H.264 code profile</td>\r\n<td colspan=\"5\">Baseline profile, Main Profile, High Profile</td>\r\n</tr>\r\n<tr>\r\n<td>Frame Rate</td>\r\n<td colspan=\"5\">Main Stream : 4MP (2560*1440), Max 25fps;<br />Sub Stream: 1080P (1920*1080), Max 25fps;<br />Third Stream: D1 (720*576), Max 25fps</td>\r\n</tr>\r\n<tr>\r\n<td>BLC</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>OSD</td>\r\n<td colspan=\"5\">Up to 8 OSDs</td>\r\n</tr>\r\n<tr>\r\n<td>ROI</td>\r\n<td colspan=\"5\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Privacy Mask</td>\r\n<td colspan=\"5\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Motion Detection</td>\r\n<td colspan=\"5\">Up to 4 areas</td>\r\n</tr>\r\n<tr>\r\n<td>General Function</td>\r\n<td colspan=\"5\">Watermark, IP Address Filtering, Tampering Alarm, Alarm input, Alarm output, Access Policy, ARP Protection, RTSP Authentication, User Authentication</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Audio</th>\r\n</tr>\r\n<tr>\r\n<td>Audio Compression</td>\r\n<td colspan=\"5\">G.711&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Two-way audio</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Suppression</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Sampling Rate</td>\r\n<td colspan=\"5\">8KHZ</td>\r\n</tr>\r\n<tr>\r\n<td class=\"thead\" colspan=\"6\">Storage</td>\r\n</tr>\r\n<tr>\r\n<td>Edge Storage</td>\r\n<td colspan=\"5\">Micro SD, up to 256GB</td>\r\n</tr>\r\n<tr>\r\n<td>Network Storage</td>\r\n<td colspan=\"5\">ANR</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Network</th>\r\n</tr>\r\n<tr>\r\n<td>Protocols</td>\r\n<td colspan=\"5\">IPv4, IGMP, ICMP, ARP, TCP, UDP, DHCP, PPPoE, RTP, RTSP, RTCP, DNS, DDNS, NTP, FTP, UPnP, HTTP, HTTPS, SMTP, 802.1x, SNMP, QoS</td>\r\n</tr>\r\n<tr>\r\n<td>Compatible Integration</td>\r\n<td colspan=\"5\">ONVIF (Profile S, Profile G, Profile T), API</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Live View Display</th>\r\n</tr>\r\n<tr>\r\n<td>Mount Type</td>\r\n<td colspan=\"5\">Support table, wall, and ceiling</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">Interface</th>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"4\">Audio I/O</td>\r\n<td colspan=\"5\">Audio interface</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Input: impedance 35k&Omega;; amplitude 2V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Output: impedance 600&Omega;; amplitude 2V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">3 built-in omnidirectional microphone</td>\r\n</tr>\r\n<tr>\r\n<td>Alarm I/O</td>\r\n<td colspan=\"5\">1/1</td>\r\n</tr>\r\n<tr>\r\n<td>Built-in Mic</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n<tr>\r\n<td>Video Output</td>\r\n<td colspan=\"5\">1 BNC, impedance 75&Omega;; amplitude 1V [p-p]</td>\r\n</tr>\r\n<tr>\r\n<td>Network</td>\r\n<td colspan=\"5\">1 RJ45 10M/100M Base-TX Auto-adaptive Ethernet</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"6\">General</th>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Power</td>\r\n<td colspan=\"5\">DC 12V&plusmn;25%, PoE (IEEE 802.3af)</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Power consumption: Max 11W</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions (&Oslash; x H)</td>\r\n<td colspan=\"5\">&Phi;125 x 43.7mm (&Phi;4.9&rdquo; x 1.7&rdquo;)</td>\r\n</tr>\r\n<tr>\r\n<td>Weight</td>\r\n<td colspan=\"5\">0.39kg (0.86lb)</td>\r\n</tr>\r\n<tr>\r\n<td>Working Environment</td>\r\n<td colspan=\"5\">-40&deg;C ~ 60&deg;C (-40&deg;F ~ 140&deg;F), Humidity: &le;95% RH</td>\r\n</tr>\r\n<tr>\r\n<td>Ingress Protection</td>\r\n<td colspan=\"5\">IP66</td>\r\n</tr>\r\n<tr>\r\n<td>Vandal Resistant</td>\r\n<td colspan=\"5\">IK10</td>\r\n</tr>\r\n<tr>\r\n<td>Reset Button</td>\r\n<td colspan=\"5\">Supported</td>\r\n</tr>\r\n</tbody>\r\n</table>', 440, 'uniview-ipc814sr-dvpf16', 19, 'Uniview IPC814SR-DVPF16 4MP IP Camera Price In Bangladesh', NULL, 4, 1, 'Uniview IPC814SR-DVPF16 4MP IP Price In Bangladesh', 'Uniview IPC814SR-DVPF16 4MP IP Price In Bangladesh, CCTV, camera, price, Bangladesh, importer, distributor, dahua, hikvision, price list, cctv camera price in bangladesh, cctv company', 'Uniview IPC814SR-DVPF16 4MP IP Price In Bangladesh, CCTV camera company in Bangladesh contact: 01836375309', NULL, NULL, NULL, '0.00', '0.00', '0.00', '1.00', '1', '2020-07-02 00:57:58', '2020-10-17 11:23:34'),
(376, 'PREMIO', '5MP Fisheye Fixed Dome Network Camera (Metal)', '#', '<ul>\r\n<li>1/2.8\", progressive scan, CMOS</li>\r\n<li>Lens 1.4mm</li>\r\n<li>Smart IR, Up to 10 m (33 ft)</li>\r\n<li>Ultra 265, H.265, H.264, MJPEG</li>\r\n<li>Micro SD, up to 256 GB</li>\r\n<li>ROI</li>\r\n<li>BLC</li>\r\n<li>Two-way audio</li>\r\n<li>Built-in Mic</li>\r\n<li>IP66</li>\r\n<li>IK10</li>\r\n<li>Reset Button</li>\r\n</ul>', '<h3>Uniview IPC815SR-DVPF14 Datasheet Specification &amp; Price In BD</h3>\r\n<table class=\"table table-striped table-bordered\">\r\n<tbody>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"2\">Model</th>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"5\">Uniview-IPC815SR-DVPF14</th>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"5\">Uniview-IPC815SR-DVSPF14</th>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Camera</th>\r\n</tr>\r\n<tr>\r\n<td>Image sensor</td>\r\n<td colspan=\"10\">1/2.8\", progressive scan, 5.0 megapixel, CMOS</td>\r\n</tr>\r\n<tr>\r\n<td>Lens</td>\r\n<td colspan=\"10\">1.4mm@F2.0</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">DORI Distance</td>\r\n<td colspan=\"2\">Lens</td>\r\n<td colspan=\"2\">Detect (m)</td>\r\n<td colspan=\"2\">Observe (m)</td>\r\n<td colspan=\"2\">Recognize (m)</td>\r\n<td colspan=\"2\">Identity (m)</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">1.4mm</td>\r\n<td colspan=\"2\">31.5</td>\r\n<td colspan=\"2\">12.6</td>\r\n<td colspan=\"2\">6.3</td>\r\n<td colspan=\"2\">3.2</td>\r\n</tr>\r\n<tr>\r\n<td>Angle of View</td>\r\n<td colspan=\"10\">360&deg;</td>\r\n</tr>\r\n<tr>\r\n<td>Shutter</td>\r\n<td colspan=\"10\">Auto/Manual, shutter time: 1~1/100000 s</td>\r\n</tr>\r\n<tr>\r\n<td>Minimum Illumination</td>\r\n<td colspan=\"10\">Colour: 0.01 Lux (F2.0, AGC ON)<br />0 Lux with IR</td>\r\n</tr>\r\n<tr>\r\n<td>Day/Night</td>\r\n<td colspan=\"10\">IR-cut filter for day &amp; night function</td>\r\n</tr>\r\n<tr>\r\n<td>S/N</td>\r\n<td colspan=\"10\">&gt;55dB</td>\r\n</tr>\r\n<tr>\r\n<td>IR Range</td>\r\n<td colspan=\"10\">UP to 10m (33ft)</td>\r\n</tr>\r\n<tr>\r\n<td>wavelength</td>\r\n<td colspan=\"10\">850nm</td>\r\n</tr>\r\n<tr>\r\n<td>IR On/Off Control</td>\r\n<td colspan=\"10\">Auto/Manual</td>\r\n</tr>\r\n<tr>\r\n<td>Defog</td>\r\n<td colspan=\"10\">Digital Defog</td>\r\n</tr>\r\n<tr>\r\n<td>WDR</td>\r\n<td colspan=\"10\">120dB</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Video</th>\r\n</tr>\r\n<tr>\r\n<td>Compression</td>\r\n<td colspan=\"10\">Ultra265, H.264, MJPEG</td>\r\n</tr>\r\n<tr>\r\n<td>H.264 code profile</td>\r\n<td colspan=\"10\">Baseline profile, Main Profile, High Profile</td>\r\n</tr>\r\n<tr>\r\n<td>Frame Rate</td>\r\n<td colspan=\"10\">Main Stream: (2592&times;1944): Max.30fps;<br />Sub Stream: (1920&times;1080): Max.30fps;<br />Third Stream: D1(720 x 576): Max.30 fps</td>\r\n</tr>\r\n<tr>\r\n<td>Video Bit Rate</td>\r\n<td colspan=\"10\">128 Kbps~16 Mbps</td>\r\n</tr>\r\n<tr>\r\n<td>OSD</td>\r\n<td colspan=\"10\">Up to 8 OSDs</td>\r\n</tr>\r\n<tr>\r\n<td>ROI</td>\r\n<td colspan=\"10\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Privacy Mask</td>\r\n<td colspan=\"10\">Up to 8 areas</td>\r\n</tr>\r\n<tr>\r\n<td>Motion Detection</td>\r\n<td colspan=\"10\">Up to 4 areas</td>\r\n</tr>\r\n<tr>\r\n<td>General Function</td>\r\n<td colspan=\"10\">Watermark, IP Address Filtering, Tampering Alarm, Alarm input, Alarm output, Access Policy, ARP Protection, RTSP Authentication, User Authentication</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Image</th>\r\n</tr>\r\n<tr>\r\n<td>White Balance</td>\r\n<td colspan=\"10\">Auto/Outdoor/Fine Tune/Sodium Lamp/Locked/Auto2</td>\r\n</tr>\r\n<tr>\r\n<td>Digital noise reduction</td>\r\n<td colspan=\"10\">2D/3D DNR</td>\r\n</tr>\r\n<tr>\r\n<td>Smart IR</td>\r\n<td colspan=\"10\">Support</td>\r\n</tr>\r\n<tr>\r\n<td>Flip</td>\r\n<td colspan=\"10\">Normal/Flip Vertical/ Flip Horizontal/180&deg;</td>\r\n</tr>\r\n<tr>\r\n<td>Dewarping</td>\r\n<td colspan=\"10\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>HLC</td>\r\n<td colspan=\"10\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>BLC</td>\r\n<td colspan=\"10\">Support</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Audio</th>\r\n</tr>\r\n<tr>\r\n<td>Audio Compression</td>\r\n<td colspan=\"5\">G.711</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Two-way audio</td>\r\n<td colspan=\"5\">Supported</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Suppression</td>\r\n<td colspan=\"5\">Supported</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Sampling Rate</td>\r\n<td colspan=\"5\">8 KHZ</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Storage</th>\r\n</tr>\r\n<tr>\r\n<td>Edge Storage</td>\r\n<td colspan=\"10\">Micro SD, up to 256GB</td>\r\n</tr>\r\n<tr>\r\n<td>Network Storage</td>\r\n<td colspan=\"10\">ANR, NAS(NFS)</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Network</th>\r\n</tr>\r\n<tr>\r\n<td>Compatible Integration</td>\r\n<td colspan=\"10\">ONVIF (Profile S, Profile G, Profile T), API</td>\r\n</tr>\r\n<tr>\r\n<td>Client</td>\r\n<td colspan=\"10\">EZStation <br />EZView<br />EZLive</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Web Browser</td>\r\n<td colspan=\"10\">Plug-in required live view: IE9+, Chrome 41 and below, Firefox 52 and below</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"10\">Plug-in free live view: Chorme 57.0+, Firefox 58.0+, Edge 16+, Safari 11+</td>\r\n</tr>\r\n<tr>\r\n<td class=\"thead\" colspan=\"11\">Live View Display</td>\r\n</tr>\r\n<tr>\r\n<td>Mount Type</td>\r\n<td colspan=\"10\">Support table, wall, and ceiling</td>\r\n</tr>\r\n<tr>\r\n<td class=\"thead\" colspan=\"11\">Interface</td>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Audio I/O</td>\r\n<td colspan=\"5\">Input: impedance 35 k&Omega;; amplitude 2 V [p-p]</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"5\">Output: impedance 600 &Omega;; amplitude 2 V [p-p]</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Alarm I/O</td>\r\n<td colspan=\"5\">1/1</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Built-in Mic</td>\r\n<td colspan=\"5\">Supported</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Video Output</td>\r\n<td colspan=\"5\">1 BNC, impedance 75 &Omega;; amplitude 1 V [p-p]</td>\r\n<td colspan=\"5\">N/A</td>\r\n</tr>\r\n<tr>\r\n<td>Network</td>\r\n<td colspan=\"10\">1 RJ45 10M/100M Base-TX Auto-adaptive Ethernet</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">Certifications</th>\r\n</tr>\r\n<tr>\r\n<td>Certifications</td>\r\n<td colspan=\"10\">CE: EN 60950-1<br />UL: UL60950-1<br />FCC: FCC Part 15</td>\r\n</tr>\r\n<tr>\r\n<th style=\"background-color: #3c6ac5; color: white;\" colspan=\"11\">General</th>\r\n</tr>\r\n<tr>\r\n<td rowspan=\"2\">Power</td>\r\n<td colspan=\"10\">DC12V&plusmn;25%,PoE (IEEE 802.3af)</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"10\">Power consumption: Max. 8.9 W</td>\r\n</tr>\r\n<tr>\r\n<td>Dimensions (&Phi; &times; H)</td>\r\n<td colspan=\"10\">&Phi;125 &times; 43.7 mm (&Phi;4.9\" &times; 1.7\")</td>\r\n</tr>\r\n<tr>\r\n<td>Net Weight</td>\r\n<td colspan=\"10\">0.39kg (0.86lb)</td>\r\n</tr>\r\n<tr>\r\n<td>Material</td>\r\n<td colspan=\"10\">Shield：plastic<br />Body：metal<br />Bottom plate：metal<br />decorative cover：plastic</td>\r\n</tr>\r\n<tr>\r\n<td>Working Environment</td>\r\n<td colspan=\"10\">-40&deg;C~60&deg;C (-40&deg;F~140&deg;F), Humidity: &le;95% RH</td>\r\n</tr>\r\n<tr>\r\n<td>Strorage Environment</td>\r\n<td colspan=\"10\">-40&deg;C~60&deg;C (-40&deg;F~140&deg;F), Humidity: &le;95% RH</td>\r\n</tr>\r\n<tr>\r\n<td>surge protection</td>\r\n<td colspan=\"10\">6KV</td>\r\n</tr>\r\n<tr>\r\n<td>Ingress Protection</td>\r\n<td colspan=\"10\">IP66</td>\r\n</tr>\r\n<tr>\r\n<td>Vandal Resistant</td>\r\n<td colspan=\"10\">IK10</td>\r\n</tr>\r\n<tr>\r\n<td>Reset Button</td>\r\n<td colspan=\"10\">Supported</td>\r\n</tr>\r\n</tbody>\r\n</table>', 441, 'uniview-ipc815sr-dvpf14', 19, 'Uniview IPC815SR-DVPF14 5MP IP Camera Price In Bangladesh', NULL, 4, 1, 'Uniview IPC815SR-DVPF14 5MP IP Price In Bangladesh', 'Uniview IPC815SR-DVPF14 5MP IP Price In Bangladesh, CCTV, camera, price, Bangladesh, importer, distributor, dahua, hikvision, price list, CCTV camera price in Bangladesh, CCTV company', 'Uniview IPC815SR-DVPF14 5MP IP Price In Bangladesh, CCTV Camera Company In Bangladesh Contact: 01836375309', NULL, NULL, NULL, '0.00', '0.00', '0.00', '1.00', '1', '2020-07-02 01:02:57', '2020-10-17 11:23:18'),
(377, 'SUPREME', '4K (12MP) Ultra HD Vandal-resistant Fisheye Fixed Dome Camera (Metal)', '#', NULL, '<table class=\"data-table\" cellspacing=\"0\" cellpadding=\"0\">\r\n<thead>\r\n<tr>\r\n<td class=\"heading-row\" colspan=\"3\">Display Features</td>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td class=\"name\">Technology</td>\r\n<td class=\"value\">RO+UV+ TDS CONTROLLER + UF + MINERAL CARTAGE</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Purification Capacity</td>\r\n<td class=\"value\">20* Liters / Hour</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Max. Duty Cycle</td>\r\n<td class=\"value\">200 Liters / Day</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Storage Tank Capacity</td>\r\n<td class=\"value\">10 Liters</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Filter Cartridges</td>\r\n<td class=\"value\">Sediment, Activated Carbon,</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Ro Memberance</td>\r\n<td class=\"value\">1812-75 GDP (Made in USA)</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">TDS Adjustable</td>\r\n<td class=\"value\">Total Device of Solid Adgestable</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">UV Lamp Power</td>\r\n<td class=\"value\">11 W</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Min. Inlet Water Pressure</td>\r\n<td class=\"value\">0.3 Kg / cm2</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Input Voltage</td>\r\n<td class=\"value\">160 &ndash; 300 V AC (50 Hz)</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Operating Voltage</td>\r\n<td class=\"value\">24 V DC</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Dimensions</td>\r\n<td class=\"value\">L 395 W 256 H 551</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Net Weight</td>\r\n<td class=\"value\">10.5 Kg.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"name\">Price</td>\r\n<td class=\"value\">22,500.00 MRP BDT</td>\r\n</tr>\r\n</tbody>\r\n</table>', 442, 'grand', 19, 'Uniview IPC868ER-VF18-B 12 MP IP Camera Price In Bangladesh', NULL, 4, 1, 'Uniview IPC868ER-VF18-B 12 MP IP Price In Bangladesh', 'Uniview IPC868ER-VF18-B 12 MP IP Price In Bangladesh, CCTV, camera, price, Bangladesh, importer, distributor, dahua, hikvision, price list, CCTV camera price in Bangladesh, CCTV company', 'Uniview IPC868ER-VF18-B 12 MP IP Price In Bangladesh, We the best CCTV camera company in Bangladesh contact: 01836375309', NULL, NULL, NULL, '0.00', '0.00', '0.00', '1.00', '1', '2020-07-02 01:08:18', '2020-10-18 11:47:05');

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
(440, 'productsImage/drinkcan-grand.png', '2020-10-16 08:00:29', '2020-10-16 08:00:29'),
(441, 'productsImage/drinkcan-premio.png', '2020-10-16 08:00:36', '2020-10-16 08:00:36'),
(442, 'productsImage/drinkcan-supreme.png', '2020-10-16 08:00:41', '2020-10-16 08:00:41'),
(443, 'productsImage/dimensions.png', '2020-10-18 02:21:28', '2020-10-18 02:21:28'),
(444, 'productsImage/duty-cycle.png', '2020-10-18 02:21:34', '2020-10-18 02:21:34'),
(445, 'productsImage/input-power.png', '2020-10-18 02:21:38', '2020-10-18 02:21:38'),
(446, 'productsImage/Max-Duty-Dycle.png', '2020-10-18 02:21:43', '2020-10-18 02:21:43'),
(447, 'productsImage/operating-voltage.png', '2020-10-18 02:21:48', '2020-10-18 02:21:48'),
(448, 'productsImage/power.png', '2020-10-18 02:21:56', '2020-10-18 02:21:56'),
(449, 'productsImage/storage-capacity.png', '2020-10-18 02:22:04', '2020-10-18 02:22:04'),
(450, 'productsImage/water-pressure.png', '2020-10-18 02:22:09', '2020-10-18 02:22:09'),
(451, 'productsImage/weight.png', '2020-10-18 02:22:13', '2020-10-18 02:22:13');

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
(19, 'RO + UV + TDS CONTROLLER + UF + MINERAL CARTAGE', 'test', 'RO+UV +TDS CONTROLLER + UF + MINERAl CARTAGE', '<p>RO+UV +TDS CONTROLLER + UF + MINERAl CARTAGE</p>', 'RO+UV +TDS CONTROLLER + UF + MINERAl CARTAGE', 'RO+UV +TDS CONTROLLER + UF + MINERAl CARTAGE', 'RO+UV +TDS CONTROLLER + UF + MINERAl CARTAGE', '2020-10-01 04:53:18', '2020-10-16 02:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `FeaturedImage` bigint(20) UNSIGNED NOT NULL,
  `ProductId` bigint(20) UNSIGNED NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`id`, `Title`, `Content`, `FeaturedImage`, `ProductId`, `ImageAltText`, `ImageTitleText`, `created_at`, `updated_at`) VALUES
(17, 'Operating Voltage', '24 V DC', 448, 375, NULL, NULL, '2020-10-18 05:49:43', '2020-10-18 05:49:43'),
(18, 'Input Voltage', '160 – 300 V AC (50 Hz)', 445, 375, NULL, NULL, '2020-10-18 05:50:40', '2020-10-18 05:50:40'),
(19, 'Dimensions', 'L 395 W 256 H 551', 443, 375, NULL, NULL, '2020-10-18 05:55:02', '2020-10-18 05:55:02'),
(20, 'Net Weight', '10.5 Kg.', 451, 375, NULL, NULL, '2020-10-18 05:56:02', '2020-10-18 05:56:02'),
(21, 'Min. Inlet Water Pressure', '0.3 Kg / cm2', 450, 375, NULL, NULL, '2020-10-18 06:01:52', '2020-10-18 06:01:52'),
(22, 'Purification Capacity', '20* Liters / Hour', 449, 375, NULL, NULL, '2020-10-18 06:03:21', '2020-10-18 06:03:21'),
(23, 'Max. Duty Cycle', ' 200 Liters / Day', 444, 375, NULL, NULL, '2020-10-18 06:06:33', '2020-10-18 06:06:33'),
(24, 'Storage Tank Capacity', '10 Liters', 449, 375, NULL, NULL, '2020-10-18 06:11:13', '2020-10-18 06:11:13');

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
(3, 'Soshine Marketing Company : We combine excellence with top quality, integrity and timeliness to provide 24/7 quality service specially designed to facilitate our users experience beyond expectation.', 'Soshine', 'Mithun Rana', '41/8, (Gr. & 1st Floor), Box Culvert Road, Purana Paltan, Dhaka-1000', '41/8, (Gr. & 1st Floor), Box Culvert Road, Purana Paltan, Dhaka-1000', '01611830852', '01678225976', NULL, NULL, 'info@soshinebd.com', 'info@soshinebd.com', NULL, 44, 'DrinkCan', 'Drink Can', '© 2020 Copyright: www.soshinebd.com', 'ww.soshinebd.com', 'Md. Mithun Rana', 'https://www.techhelpinfo.com', NULL, NULL, '2020-10-09 06:25:28');

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
(1, 'Soshine', 'https://www.facebook.com/drinkcanbd', 'Facebook', '<i style=\"color:white;\" class=\"fa fa-facebook-official\"></i>', '2020-09-08 04:41:36', '2020-10-13 04:15:34'),
(2, 'Soshine', 'https://www.linkedin.com/company/drinkcan/', 'LinkedIn', '<i style=\"color:white;\" class=\"fa fa-linkedin-square\"></i>', '2020-09-08 04:43:22', '2020-10-13 04:15:51'),
(3, 'DrinkCan', 'https://www.youtube.com/channel/UChxlWU50WgRx06b3hYzll9A', 'Yotube', '<i style=\"color:white;\" class=\"fa fa-youtube-play\"></i>', '2020-10-13 04:13:15', '2020-10-13 04:13:15'),
(4, 'DrinkCan', 'https://www.instagram.com/drinkcanbd/', 'Instagram', '<i style=\"color:white;\" class=\"fa fa-instagram\"></i>', '2020-10-13 04:15:16', '2020-10-13 04:15:16');

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
-- Table structure for table `thana_names`
--

CREATE TABLE `thana_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Mithun Rana', 'mithunrana.developer@gmail.com', '0179777', 'mithunrana.developer@gmail.com', NULL, '$2y$10$JYbkUAqYTgXJEsiUJ/7SS.2Roiw3HgE0LaIyXmQ1h71SliDEc2Z8q', 'Retailer', 'no', 'asdfasdfasdf', 'softwareservice', 'Bangladesh', 'Dhaka Bangladesh', '513813', 'user image/mithunrana.developer@gmail.com.png', 'TechHelpInfoAdmin', NULL, '2020-09-01 07:32:22', '2020-10-17 05:36:13'),
(7, 'Mithun Rana', 'mithunranabd', '01797744248', 'mithunrana139@gmail.com', NULL, '$2y$10$xtJg6Uvq1XxUjvmR6HoP/.aSQpisLC.81xGnG.NxPCsyOBwTL87PS', 'End User', 'no', 'b', NULL, 'bangladesh', 'dhaka bangladesh', '537576', NULL, 'EndUserActive', NULL, '2020-09-09 02:31:01', '2020-10-15 04:16:44'),
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
-- Indexes for table `client_feed_backs`
--
ALTER TABLE `client_feed_backs`
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
-- Indexes for table `districts`
--
ALTER TABLE `districts`
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
-- Indexes for table `thana_names`
--
ALTER TABLE `thana_names`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `client_feed_backs`
--
ALTER TABLE `client_feed_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `c_c_t_v_brands`
--
ALTER TABLE `c_c_t_v_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `electro_prono_sliders`
--
ALTER TABLE `electro_prono_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT for table `products_primary_categories`
--
ALTER TABLE `products_primary_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `thana_names`
--
ALTER TABLE `thana_names`
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
