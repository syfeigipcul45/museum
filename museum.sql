-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 03:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `author_id`, `title`, `slug`, `content`, `link_media`, `created_at`, `updated_at`) VALUES
(2, 1, 'MUSEUM MULAWARMAN NEGERI PROPINSI KALIMANTAN TIMUR', 'museum-mulawarman-negeri-propinsi-kalimantan-timur', '<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\"><strong>Sejarah Museum Mulawarman</strong></span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><br /><span style=\"font-size: 12pt; color: #000000;\">Sejarah Museum Mulaarman tidak dapat dipisahkan dari sejarah budaya Kalimantan Timur secara keseluruhan. Berdirinya museum Mulawarman saat diberlakukannya Undang-undang Nomor 17 tahun 1959 membentuk daerah Tingkat II Kutai. Pada tahun 1966 Kepala Kejaksaan Tinggi Kalimantan Timur mengeluarkan ketentuan 01/Pem/KKTI/1966 tanggal 6 oktober, yang menyatakan bahwa semua benda milik pribadi atau warisan dikembalikan pada pribadi sedang benda milik Kerajaan menjadi milik Negara.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">&nbsp;</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Sebagai realisasi keinginan masyarakat serta pemerintah untuk memelihara peninggalan sejarah Kerajaan Kutai Kartenegara, maka pada tanggal 25 November 1971, pemerintah Kabupaten Dearah Tingkat II Kutai mendirikan museum yang di beri nama Museum Kutai, merupakan bagain dari PUSKORA (Pusat Kebudayaan dan olah raga yang di resmikan oleh PANGDAM IX) mulawarman Brigjen Sukertiyo.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Sebagai hasil perundingansegita antara Pemerintah Daerah Tingkat I Kalimantan Timur dan Pemerintah Daerah Tingkat II Kutai serta Departemen Pendidkan dan kebudayaan (DEPDIKBUD), maka pada 18 Februari 1976, Museum Kutai diserahkan pengelohannya oleh Gubernur Kalimatan Timur pada waktu itu, Brigjen Abdul Wahab Syharani kepada DEPDIKBUD, yang diterima oleh Dirjen Kebudayaan Prof. Dr.Ida Bagus Mantra atas nama MENDIKBUD R.I.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Sejak saat itu museum Ngeri Propinsi Kalimantan Timur &ldquo;Mulawarman&rdquo; berstatus sebagai Museum Negeri Propinsi dan pengesahannya berdasarkan SK.MENDIKBUD tanggal 28 mei 1979, Nomor :093/0/1979 yang merupakan unit pelaksana teknis direktorat jenderal kebudayaan. Pemakaian nama Mulawarman untuk mengabdikan seorang raja Kutai Martadipura yang terkenal arif dan bijaksana.</span><br /><span style=\"font-size: 12pt; color: #000000;\">Bangunan induk museum merupakan bekas keraton kutai kertenegera yangdi dominasi warna putih dan dibangun oleh Holland beton mattscappy (HBM) tahun 1935 tepat pad masa pemerintahan Sultan Adji Mohammad Pariksit.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">&nbsp;</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\"><strong>Koleksi Museum Mulawarman</strong></span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><br /><span style=\"font-size: 12pt; color: #000000;\">Museum Negeri Propinsi Kalimantan timur &ldquo;Mulawarman&rdquo; merupakan objek wisata budaya yang bermuatan Ilmu Pengeetahuan dan Sejarah Kerajaan Kutai Kartenegara. Lokasi Museum Mulawarman berada ditengah kota Tenggarong, dari Balikpapan dapat di tempuh melalui jalur darat dan sungai dengan waktu tempuh sekitar satu jam.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">&nbsp;</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Ciri khas Museum Mulawarman pada halaman depan museum terdapat duplikat Lembu Suana yang merupakan lambing Kerajaan Kutai Kartenegara dan kolam berbentuk naga yang merupakan lambing perjalanan hidup dan penjaga alam semesta yang telah menjadi bagian dari mitos masyarakat Kutai.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Yang sangat menarik adalah sebuah Totem yang terbuat dari bahan kayu ulin berukuran tinggi 13 meter dengan diameter 60 centimeter. Totem ini menggambarkan perjalanan hidup masyarakat Dayak dari lahir dewasa sampai meninggal. Ornament yang terdapat dibagian bawah berbentuk guci yang menrupakan symbol dunia bawah (alam baka), sedangkan ular sawah melingkar dari bawah kepuncak Totem merupakan lambing perjalanan hidup dan lambing kejantanan (kaum pria). Di puncak Totem, terdapat ornament burung enggang yang merupakan lambing dunia atas.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Disebelah kanan gedung induk museum terdapat makam raja-raja Kutai Kartenegara yang di lengkapi dengan penataan taman yang apik asri. Dibelakang juga terdapat miniature Goa Kombeng, lokasi ditemukannya Arca dan Prasasti Yupa, bendanya dapat kita lihat dalam ruang pameran tetap museum (R. 7 lantai II).</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Di samping museum terdapat kantin dan took souvenir, komplek makam raja dan kerabat Kesultanan Kutai Kartenegara.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Arsitektur gedung mengadopsi dari arsitektur tradisional suku Dayak yang ada di Kutai, antara lain bwrupa bnangunan Bleh Peteh yaitu wadah untuk kalangan bangsawan suku Dayak Kenyah, patung-patung Blontang yang berfungsi sebagai peralatan upacara adat kematian suku Dayak dan beberapa bentuk lungun yang semuanya ditata secara evokatif.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Gerbang museum terdapat patung dalam bentuk ular lembuh (istilah kutai), pesut dan buaya, patungf ini untuk memperindahkan lingkungan museum dan memperoleh kesan menarik cirri khas kerajan Kutai Kartenegara. Untuk masuk ruang pameran tetap, dapat melewati pintu utama pada bagian depan dengan anak tangga pada bagian kiri dan kanan tangga terdapat arca patung harimau/macan sebagai symbol penjaga keamanan.</span></p>\r\n<p style=\"text-align: justify; line-height: 1.5;\">&nbsp;</p>\r\n<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\"><strong>Koleksi sejarah Museum Mulawarman</strong></span></p>\r\n<ol>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Singasana.</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Tempat perpaduan</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Pakaian kebesaran</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Tombak</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Keris</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Kalung</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Prasasti Yupa</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Tenunan dari suku Dayak Benuaq namanya adalah Ulap Doyo dan alat tenun tradisional</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Ukiran-ukiran khas dari suku Dayak Kenyah,Benuaq,busang,modang,Punan dan etnis Dayak lainnya</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; color: #000000;\">Keramik Cina,Eropa,Jepang,Vietnam,Thailand</span></li>\r\n</ol>', 'http://localhost:8000/storage/berita/1654322158_museum.jpg', '2022-06-03 21:47:32', '2022-06-08 01:08:45'),
(3, 1, 'afag', 'afag', '<p>ag\\ag</p>', 'http://localhost:8000/storage/berita/1654412647_20220312_144612-cover.jpg', '2022-06-05 06:04:07', '2022-06-05 06:04:07'),
(4, 1, 'bdsb', 'bdsb', '<p>ggmgfm</p>', 'http://localhost:8000/storage/berita/1654412678_WhatsApp-Image-2022-02-23-at-12.00.16-cover.jpg', '2022-06-05 06:04:38', '2022-06-05 06:04:38');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_31_055617_create_permission_tables', 1),
(6, '2022_05_31_143606_create_ruang_pamers_table', 2),
(7, '2022_06_03_142135_create_profils_table', 3),
(8, '2022_06_04_050341_create_beritas_table', 4),
(9, '2022_06_05_202310_create_pengaturans_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

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
-- Table structure for table `pengaturans`
--

CREATE TABLE `pengaturans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaturans`
--

INSERT INTO `pengaturans` (`id`, `logo`, `favicon`, `phone`, `whatsapp`, `email`, `address`, `facebook`, `instagram`, `youtube`, `profile_url`, `profile_title`, `profile_description`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost:8000/storage/logo/1654440017_logo_museum.png', 'http://localhost:8000/storage/favicon/1654440017_Logo Provinsi Kalimantan Timur.png', '082236265992', '082236265992', 'gipcul.boy@gmail.com', 'Jl. Tepian Pandan, Panji, Kec. Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur 75513', 'https://facebook.com/', 'https://instagram.com/', 'https://youtube.com/', 'http://localhost:8000/storage/profile_url/1654440017_lembuswana.png', 'UPTD Museum Negeri Mulawarman', 'UPTD Museum Negeri Mulawarman Provinsi Kalimantan Timur merupakan objek wisata budaya yang bermuatan Ilmu Pengetahuan, Sejarah Budaya Kerajaan Kutai Kartanegara dan Kalimantan Timur. Memiliki tugas mengumpulkan, meneliti dan mengelola koleksi sejarah, budaya dan sejarah alam. Serta memberikan bimbingan edukatif kultural dalam hal pengenalan kolekso kepada masyarakat dan pelajar.', '2022-06-05 13:40:17', '2022-06-05 13:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submenu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `submenu`, `slug`, `link_media`, `deskripsi`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 'Sekilas', 'sekilas', 'http://localhost:8000/storage/profil/1654270060_museum.jpg', '<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif;\">Sejarah Museum Mulaarman tidak dapat dipisahkan dari sejarah budaya Kalimantan Timur secara keseluruhan. Berdirinya museum Mulawarman saat diberlakukannya Undang-undang Nomor 17 tahun 1959 membentuk daerah Tingkat II Kutai. Pada tahun 1966 Kepala Kejaksaan Tinggi Kalimantan Timur mengeluarkan ketentuan 01/Pem/KKTI/1966 tanggal 6 oktober, yang menyatakan bahwa semua benda milik pribadi atau warisan dikembalikan pada pribadi sedang benda milik Kerajaan menjadi milik Negara. Sebagai realisasi keinginan masyarakat serta pemerintah untuk memelihara peninggalan sejarah Kerajaan Kutai Kartenegara, maka pada tanggal 25 November 1971, pemerintah Kabupaten Dearah Tingkat II Kutai mendirikan museum yang di beri nama Museum Kutai, merupakan bagain dari PUSKORA (Pusat Kebudayaan dan olah raga yang di resmikan oleh PANGDAM IX) mulawarman Brigjen Sukertiyo. Sebagai hasil perundingansegita antara Pemerintah Daerah Tingkat I Kalimantan Timur dan Pemerintah Daerah Tingkat II Kutai serta Departemen Pendidkan dan kebudayaan (DEPDIKBUD), maka pada 18 Februari 1976, Museum Kutai diserahkan pengelohannya oleh Gubernur Kalimatan Timur pada waktu itu, Brigjen Abdul Wahab Syharani kepada DEPDIKBUD, yang diterima oleh Dirjen Kebudayaan Prof. Dr.Ida Bagus Mantra atas nama MENDIKBUD R.I. Sejak saat itu museum Ngeri Propinsi Kalimantan Timur &ldquo;Mulawarman&rdquo; berstatus sebagai Museum Negeri Propinsi dan pengesahannya berdasarkan SK.MENDIKBUD tanggal 28 mei 1979, Nomor :093/0/1979 yang merupakan unit pelaksana teknis direktorat jenderal kebudayaan. Pemakaian nama Mulawarman untuk mengabdikan seorang raja Kutai Martadipura yang terkenal arif dan bijaksana. Bangunan induk museum merupakan bekas keraton kutai kertenegera yangdi dominasi warna putih dan dibangun oleh Holland beton mattscappy (HBM) tahun 1935 tepat pad masa pemerintahan Sultan Adji Mohammad Pariksit.</span></p>', 1, '2022-06-03 07:03:04', '2022-06-08 01:03:08'),
(3, 'Sejarah', 'sejarah', 'http://localhost:8000/storage/profil/1654271282_sejara-museum.jpg', '<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt;\">Sejarah Museum Mulaarman tidak dapat dipisahkan dari sejarah budaya Kalimantan Timur secara keseluruhan. Berdirinya museum Mulawarman saat diberlakukannya Undang-undang Nomor 17 tahun 1959 membentuk daerah Tingkat II Kutai. Pada tahun 1966 Kepala Kejaksaan Tinggi Kalimantan Timur mengeluarkan ketentuan 01/Pem/KKTI/1966 tanggal 6 oktober, yang menyatakan bahwa semua benda milik pribadi atau warisan dikembalikan pada pribadi sedang benda milik Kerajaan menjadi milik Negara. Sebagai realisasi keinginan masyarakat serta pemerintah untuk memelihara peninggalan sejarah Kerajaan Kutai Kartenegara, maka pada tanggal 25 November 1971, pemerintah Kabupaten Dearah Tingkat II Kutai mendirikan museum yang di beri nama Museum Kutai, merupakan bagain dari PUSKORA (Pusat Kebudayaan dan olah raga yang di resmikan oleh PANGDAM IX) mulawarman Brigjen Sukertiyo. Sebagai hasil perundingansegita antara Pemerintah Daerah Tingkat I Kalimantan Timur dan Pemerintah Daerah Tingkat II Kutai serta Departemen Pendidkan dan kebudayaan (DEPDIKBUD), maka pada 18 Februari 1976, Museum Kutai diserahkan pengelohannya oleh Gubernur Kalimatan Timur pada waktu itu, Brigjen Abdul Wahab Syharani kepada DEPDIKBUD, yang diterima oleh Dirjen Kebudayaan Prof. Dr.Ida Bagus Mantra atas nama MENDIKBUD R.I. Sejak saat itu museum Ngeri Propinsi Kalimantan Timur &ldquo;Mulawarman&rdquo; berstatus sebagai Museum Negeri Propinsi dan pengesahannya berdasarkan SK.MENDIKBUD tanggal 28 mei 1979, Nomor :093/0/1979 yang merupakan unit pelaksana teknis direktorat jenderal kebudayaan. Pemakaian nama Mulawarman untuk mengabdikan seorang raja Kutai Martadipura yang terkenal arif dan bijaksana. Bangunan induk museum merupakan bekas keraton kutai kertenegera yangdi dominasi warna putih dan dibangun oleh Holland beton mattscappy (HBM) tahun 1935 tepat pad masa pemerintahan Sultan Adji Mohammad Pariksit.</span></p>', 2, '2022-06-03 07:48:02', '2022-06-08 01:03:45'),
(4, 'Visi Misi', 'visi-misi', NULL, '<p>-</p>', 3, '2022-06-09 00:26:27', '2022-06-09 00:27:05'),
(5, 'Benda Koleksi', 'benda-koleksi', NULL, '<p>-</p>', 4, '2022-06-09 00:26:51', '2022-06-09 00:27:08'),
(6, 'Sumber Daya Manusia', 'sumber-daya-manusia', NULL, '<p>-</p>', 5, '2022-06-09 00:27:25', '2022-06-09 00:27:35'),
(7, 'Struktur Pegawai', 'struktur-pegawai', NULL, '<p>-</p>', 6, '2022-06-09 00:29:13', '2022-06-09 00:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2022-05-30 22:07:15', '2022-05-30 22:07:15'),
(2, 'admin', 'web', '2022-05-30 22:07:15', '2022-05-30 22:07:15'),
(3, 'user', 'web', '2022-05-30 22:07:15', '2022-05-30 22:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruang_pamers`
--

CREATE TABLE `ruang_pamers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang_pamers`
--

INSERT INTO `ruang_pamers` (`id`, `name`, `slug`, `deskripsi`, `link_media`, `created_at`, `updated_at`) VALUES
(2, 'Keris', 'keris', '<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 12pt;\">Keris adalah senjata tikam gugusan belati yang termasuk salah satu budaya khas Nusantara. Meski banyak sumber mengenai asal-usulnya, mayoritas sejarah mengatakan bahwa keris berasal dari Jawa.</span><br /><span style=\"font-size: 12pt;\">Memiliki ujung yang lancip dan tajam, bentuk keris sangat khas dan mudah dibedakan dari senjata tajam di daerah lainnya. Keris berbentuk tidak simetris karena seringkali bilahnya berkelok-kelok, dan memiliki serat lapisan logam cerah pada helai bilah.</span><br /><br /><span style=\"font-size: 12pt;\">Keris yang terkenal adalah yang memiliki gelombang dan berkelok atau bergerigi. Umumnya, sebuah keris memiliki tiga bagian yaitu bilah (pisau), hulu (gagang), dan warangka (sarung). Diukir dengan teliti, bagian-bagian keris ini memiliki arti seni tersendiri.</span></p>', 'http://localhost:8000/storage/ruang-pamer/1654412334_keris3.glb', '2022-06-05 05:58:54', '2022-06-08 01:37:22'),
(3, 'Keris', 'keris', '<p>asvasv</p>', 'http://localhost:8000/storage/ruang-pamer/1654413113_keris3.glb', '2022-06-05 06:11:53', '2022-06-05 06:11:53');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Syafei Karim', 'syfei.karim@gmail.com', NULL, '$2a$12$kf0d/9m6zhuVXr6uIzLL3eOVsMCT7aPtnK.oHR7KEJFIo1uA0GhQi', NULL, '2022-05-30 22:07:15', '2022-05-30 22:07:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_author_id_foreign` (`author_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaturans`
--
ALTER TABLE `pengaturans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `ruang_pamers`
--
ALTER TABLE `ruang_pamers`
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
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengaturans`
--
ALTER TABLE `pengaturans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruang_pamers`
--
ALTER TABLE `ruang_pamers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
