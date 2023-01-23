-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 03:50 PM
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
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_agenda` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `author_id`, `title`, `slug`, `content`, `link_media`, `tanggal_agenda`, `created_at`, `updated_at`) VALUES
(1, 1, 'The 4th International Conference on Mathematics and Sciences 2022', 'the-4th-international-conference-on-mathematics-and-sciences-2022', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif; color: #000000;\">International Conference on Mathematics and Sciences (ICMSc) is an international conference organized by Faculty of Mathematics and Natural Sciences, Mulawarman University (UNMUL), Samarinda, East Kalimantan, Indonesia.</span></p>\r\n<ol>\r\n<li><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif; color: #000000;\">asfsaf</span></li>\r\n<li><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif; color: #000000;\">asasg</span></li>\r\n<li><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif; color: #000000;\">asgasg</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif; color: #000000;\">The theme of the third ICMSc in 2021 is&nbsp;<strong>&ldquo;A Brighter Future with Tropical Innovation in the Application of Industry 4.0&rdquo;</strong>. ICMSc facilitates renowned researchers and industries across the globe to share ideas and knowledge especially in the field of mathematics, statistics, biology, physics, chemistry,&nbsp;geophysics and their applications. All full papers submitted will go through a review and selection process to be published in AIP Publishing.&nbsp;The 3rd ICMSc will be a combination of online and limited offline conference implementing the Covid-19 precautions.</span></p>', 'http://localhost:8000/storage/agenda/1657545424_seminar.jpeg', '2022-10-10', '2022-07-11 12:17:04', '2022-07-31 05:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `benda_koleksis`
--

CREATE TABLE `benda_koleksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_benda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_koleksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media3d` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benda_koleksis`
--

INSERT INTO `benda_koleksis` (`id`, `nama_benda`, `slug_koleksi`, `kategori_id`, `deskripsi`, `link_media`, `link_media3d`, `created_at`, `updated_at`) VALUES
(3, 'Golok', 'golok', 10, '<p>--</p>', '[\"http:\\/\\/localhost:8000\\/storage\\/benda-koleksi\\/img\\/1659971036_35630-golok-ist.jpg\",\"http:\\/\\/localhost:8000\\/storage\\/benda-koleksi\\/img\\/1659971036_35630-golok-ist.jpg\"]', 'http://localhost:8000/storage/benda-koleksi/1659971395_Golok (Terbuka).glb', '2022-08-08 14:03:56', '2022-08-08 14:09:55');

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
(1, 1, 'Museum Mulawarman Negeri Provinsi Kalimantan Timur', 'museum-mulawarman-negeri-provinsi-kalimantan-timur', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Sejarah Museum Mulaarman tidak dapat dipisahkan dari sejarah budaya Kalimantan Timur secara keseluruhan. Berdirinya museum Mulawarman saat diberlakukannya Undang-undang Nomor 17 tahun 1959 membentuk daerah Tingkat II Kutai. Pada tahun 1966 Kepala Kejaksaan Tinggi Kalimantan Timur mengeluarkan ketentuan 01/Pem/KKTI/1966 tanggal 6 oktober, yang menyatakan bahwa semua benda milik pribadi atau warisan dikembalikan pada pribadi sedang benda milik Kerajaan menjadi milik Negara.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Sebagai realisasi keinginan masyarakat serta pemerintah untuk memelihara peninggalan sejarah Kerajaan Kutai Kartenegara, maka pada tanggal 25 November 1971, pemerintah Kabupaten Dearah Tingkat II Kutai mendirikan museum yang di beri nama Museum Kutai, merupakan bagain dari PUSKORA (Pusat Kebudayaan dan olah raga yang di resmikan oleh PANGDAM IX) mulawarman Brigjen Sukertiyo.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Sebagai hasil perundingansegita antara Pemerintah Daerah Tingkat I Kalimantan Timur dan Pemerintah Daerah Tingkat II Kutai serta Departemen Pendidkan dan kebudayaan (DEPDIKBUD), maka pada 18 Februari 1976, Museum Kutai diserahkan pengelohannya oleh Gubernur Kalimatan Timur pada waktu itu, Brigjen Abdul Wahab Syharani kepada DEPDIKBUD, yang diterima oleh Dirjen Kebudayaan Prof. Dr.Ida Bagus Mantra atas nama MENDIKBUD R.I.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Sejak saat itu museum Ngeri Propinsi Kalimantan Timur &ldquo;Mulawarman&rdquo; berstatus sebagai Museum Negeri Propinsi dan pengesahannya berdasarkan SK.MENDIKBUD tanggal 28 mei 1979, Nomor :093/0/1979 yang merupakan unit pelaksana teknis direktorat jenderal kebudayaan. Pemakaian nama Mulawarman untuk mengabdikan seorang raja Kutai Martadipura yang terkenal arif dan bijaksana.</span><br /><span style=\"font-size: 12pt; color: #000000;\">Bangunan induk museum merupakan bekas keraton kutai kertenegera yangdi dominasi warna putih dan dibangun oleh Holland beton mattscappy (HBM) tahun 1935 tepat pad masa pemerintahan Sultan Adji Mohammad Pariksit.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><span style=\"font-size: 12pt; color: #000000;\"><strong>Koleksi Museum Mulawarman</strong></span></p>\r\n<p style=\"text-align: justify;\"><br /><span style=\"font-size: 12pt; color: #000000;\">Museum Negeri Propinsi Kalimantan timur &ldquo;Mulawarman&rdquo; merupakan objek wisata budaya yang bermuatan Ilmu Pengeetahuan dan Sejarah Kerajaan Kutai Kartenegara. Lokasi Museum Mulawarman berada ditengah kota Tenggarong, dari Balikpapan dapat di tempuh melalui jalur darat dan sungai dengan waktu tempuh sekitar satu jam.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Ciri khas Museum Mulawarman pada halaman depan museum terdapat duplikat Lembu Suana yang merupakan lambing Kerajaan Kutai Kartenegara dan kolam berbentuk naga yang merupakan lambing perjalanan hidup dan penjaga alam semesta yang telah menjadi bagian dari mitos masyarakat Kutai.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Yang sangat menarik adalah sebuah Totem yang terbuat dari bahan kayu ulin berukuran tinggi 13 meter dengan diameter 60 centimeter. Totem ini menggambarkan perjalanan hidup masyarakat Dayak dari lahir dewasa sampai meninggal. Ornament yang terdapat dibagian bawah berbentuk guci yang menrupakan symbol dunia bawah (alam baka), sedangkan ular sawah melingkar dari bawah kepuncak Totem merupakan lambing perjalanan hidup dan lambing kejantanan (kaum pria). Di puncak Totem, terdapat ornament burung enggang yang merupakan lambing dunia atas.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Disebelah kanan gedung induk museum terdapat makam raja-raja Kutai Kartenegara yang di lengkapi dengan penataan taman yang apik asri. Dibelakang juga terdapat miniature Goa Kombeng, lokasi ditemukannya Arca dan Prasasti Yupa, bendanya dapat kita lihat dalam ruang pameran tetap museum (R. 7 lantai II).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Di samping museum terdapat kantin dan took souvenir, komplek makam raja dan kerabat Kesultanan Kutai Kartenegara.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Arsitektur gedung mengadopsi dari arsitektur tradisional suku Dayak yang ada di Kutai, antara lain bwrupa bnangunan Bleh Peteh yaitu wadah untuk kalangan bangsawan suku Dayak Kenyah, patung-patung Blontang yang berfungsi sebagai peralatan upacara adat kematian suku Dayak dan beberapa bentuk lungun yang semuanya ditata secara evokatif.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; color: #000000;\">Gerbang museum terdapat patung dalam bentuk ular lembuh (istilah kutai), pesut dan buaya, patungf ini untuk memperindahkan lingkungan museum dan memperoleh kesan menarik cirri khas kerajan Kutai Kartenegara. Untuk masuk ruang pameran tetap, dapat melewati pintu utama pada bagian depan dengan anak tangga pada bagian kiri dan kanan tangga terdapat arca patung harimau/macan sebagai symbol penjaga keamanan.</span></p>', 'http://localhost:8000/storage/berita/1657544505_sejara-museum.jpg', '2022-07-11 12:01:45', '2022-07-31 05:10:54');

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_judul`, `link_media`, `deskripsi`, `slug`, `icon`, `created_at`, `updated_at`) VALUES
(5, 'Kuliner', '[\"http:\\/\\/localhost:8000\\/storage\\/fasilitas\\/1658241643_9ad5852e1e2f.jpg\",\"http:\\/\\/localhost:8000\\/storage\\/fasilitas\\/1658241643_5df9e59f4c8b0.jpg\"]', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif;\"><strong>Pengertian kuliner</strong>&nbsp;secara umum adalah kegiatan yang berhubungan dengan memasak atau aktivitas memasak. Kuliner juga dapat dimaknai sebagai hasil olahan yang berupa masakan berupa lauk-pauk, panganan maupun minuman. Kuliner tidak terlepas dari kegiatan masak-memasak yang erat kaitannya dengan&nbsp;konsumsi makanan sehari-hari.</span></p>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif;\">fsgg</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif;\">dsgdsg</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt; font-family: helvetica, arial, sans-serif;\">dgdsg</span></li>\r\n</ul>', 'kuliner', '<i class=\"fa-solid fa-utensils\"></i>', '2022-07-19 12:59:37', '2022-07-31 05:14:02'),
(6, 'Musholla', '[]', '<p>Mesjid</p>', 'musholla', '<i class=\"fa-solid fa-mosque\"></i>', '2022-07-19 13:41:10', '2022-07-19 13:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `form_kontaks`
--

CREATE TABLE `form_kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_pesan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_kontaks`
--

INSERT INTO `form_kontaks` (`id`, `nama`, `email`, `isi_pesan`, `created_at`, `updated_at`) VALUES
(1, 'Syafei Karim, S.Kom., M.Kom', 'Pujiastutiamalia@polnes.ac.id', 'dagag', '2022-07-19 14:01:12', '2022-07-19 14:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `hero_images`
--

CREATE TABLE `hero_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_hero` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_images`
--

INSERT INTO `hero_images` (`id`, `judul`, `deskripsi`, `link_hero`, `link_image`, `url`, `order`, `created_at`, `updated_at`) VALUES
(1, 'UPTD Museum Negeri Mulawarman', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Integer Nec Odio.Praesent Libero. Sed Cursus Ante Dapibus Diam. Sed Nisi. Nulla Quis Sem At Nibh Elementum Imperdiet. Duis Sagittis Ipsum. Praesent Mauris. Vestibulum Lacinia Arcu Eget Nulla.Class Aptent Taciti Sociosqu Ad Litora Torquent Per Conubia Nostra, Per Inceptos Himenaeos. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Integer Nec Odio.Praesent Libero. Sed Cursus Ante Dapibus Diam. Sed Nisi. Nulla Quis Sem At Nibh Eleme.', 'http://localhost:8000/storage/hero-image/1657615015_1.jpg', 'http://localhost:8000/storage/hero-image/img/1657611486_lembuswana.png', NULL, 1, '2022-07-12 06:38:07', '2022-07-12 07:37:04'),
(2, 'UPTD Museum Negeri Mulawarman', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Integer Nec Odio.Praesent Libero. Sed Cursus Ante Dapibus Diam. Sed Nisi. Nulla Quis Sem At Nibh Elementum Imperdiet. Duis Sagittis Ipsum. Praesent Mauris. Vestibulum Lacinia Arcu Eget Nulla.Class Aptent Taciti Sociosqu Ad Litora Torquent Per Conubia Nostra, Per Inceptos Himenaeos. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Integer Nec Odio.Praesent Libero. Sed Cursus Ante Dapibus Diam. Sed Nisi. Nulla Quis Sem At Nibh Eleme.', 'http://localhost:8000/storage/hero-image/1657614946_3.jpg', 'http://localhost:8000/storage/hero-image/img/1657614982_lembuswana.png', 'https://samarindavirtualtour.com/museum_mulawarman/', 2, '2022-07-12 06:40:21', '2022-07-12 07:36:22'),
(3, 'UPTD Museum Negeri Mulawarman', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Integer Nec Odio.Praesent Libero. Sed Cursus Ante Dapibus Diam. Sed Nisi. Nulla Quis Sem At Nibh Elementum Imperdiet. Duis Sagittis Ipsum. Praesent Mauris. Vestibulum Lacinia Arcu Eget Nulla.Class Aptent Taciti Sociosqu Ad Litora Torquent Per Conubia Nostra, Per Inceptos Himenaeos. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Integer Nec Odio.Praesent Libero. Sed Cursus Ante Dapibus Diam. Sed Nisi. Nulla Quis Sem At Nibh Eleme.', 'http://localhost:8000/storage/hero-image/1657615054_2.jpg', NULL, NULL, 3, '2022-07-12 07:37:34', '2022-07-12 07:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ruangs`
--

CREATE TABLE `jenis_ruangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_ruangs`
--

INSERT INTO `jenis_ruangs` (`id`, `nama_jenis`, `slug_jenis`, `link_media`, `deskripsi`, `created_at`, `updated_at`) VALUES
(12, 'Ruang Singgasana', 'ruang-singgasana', '[\"http:\\/\\/localhost:8000\\/storage\\/ruang-pamer\\/img\\/1660027912_Picture1.jpg\",\"http:\\/\\/localhost:8000\\/storage\\/ruang-pamer\\/img\\/1660027912_Picture1.jpg\"]', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Ruang koleksi singgasana merupakan ruang utama yang di jumpai ketika masuk museum. Pada bagian tengah ruang&nbsp; terdapat koleksi sepasang kursi singgasana, lembu suana, payung-payung kerajaan, gambar sultan A.M Sulaiman dan gambar Sultan Alimudin. Pada sisi kanan ruang terdapat koleksi kursi para menteri, meja tamu dan meriam. Sedangkan pada bagian depan terdapat tiga buah patung.</span></p>', '2022-08-09 05:36:26', '2022-08-09 05:51:52'),
(13, 'Ruang Arkeologika', 'ruang-arkeologika', '[\"http:\\/\\/localhost:8000\\/storage\\/ruang-pamer\\/img\\/1660050742_35630-golok-ist.jpg\"]', '<p>-</p>', '2022-08-09 12:12:22', '2022-08-09 12:12:22'),
(15, 'Ruang Koleksi Sejarah dan Fisiologi', 'ruang-koleksi-sejarah-dan-fisiologi', '[\"http:\\/\\/localhost:8000\\/storage\\/ruang-pamer\\/img\\/1660050849_35630-golok-ist.jpg\",\"http:\\/\\/localhost:8000\\/storage\\/ruang-pamer\\/img\\/1660050849_60c9785275687.jpeg\"]', '<p>-</p>', '2022-08-09 12:14:09', '2022-08-09 12:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_koleksis`
--

CREATE TABLE `kategori_koleksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_koleksis`
--

INSERT INTO `kategori_koleksis` (`id`, `name`, `slug`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Geologika (hasil tambang)', 'geologika-hasil-tambang', NULL, '2022-07-11 10:24:24', '2022-07-11 10:24:24'),
(2, 'Biologika (binatang)', 'biologika-binatang', NULL, '2022-07-11 10:24:52', '2022-07-11 10:24:52'),
(3, 'Etnografika (daur hidup)', 'etnografika-daur-hidup', NULL, '2022-07-11 10:25:17', '2022-07-11 10:25:17'),
(4, 'Arkeologika (penggalian)', 'arkeologika-penggalian', '<p>-</p>', '2022-07-11 10:26:11', '2022-08-08 13:10:55'),
(5, 'Historika (sejarah)', 'historika-sejarah', NULL, '2022-07-11 10:26:31', '2022-07-11 10:26:31'),
(6, 'Numismatika (mata uang) / Heraldika (stempel)', 'numismatika-mata-uang-heraldika-stempel', NULL, '2022-07-11 10:27:32', '2022-07-11 10:27:32'),
(7, 'Filologika (naskah)', 'filologika-naskah', NULL, '2022-07-11 10:28:10', '2022-07-11 10:28:10'),
(8, 'Keramika (keramik)', 'keramika-keramik', NULL, '2022-07-11 10:28:31', '2022-07-11 10:28:31'),
(9, 'Seni Rupa (patung)', 'seni-rupa-patung', NULL, '2022-07-11 10:28:45', '2022-07-11 10:28:45'),
(10, 'Teknologika', 'teknologika', NULL, '2022-07-11 10:28:59', '2022-07-11 10:28:59');

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
(6, '2022_06_03_142135_create_profils_table', 1),
(7, '2022_06_04_050341_create_beritas_table', 1),
(8, '2022_06_05_202310_create_pengaturans_table', 1),
(9, '2022_06_11_135612_create_form_kontaks_table', 1),
(10, '2022_07_08_213339_create_agendas_table', 1),
(11, '2022_07_10_101755_create_kategori_koleksis_table', 1),
(12, '2022_07_10_131947_create_benda_koleksis_table', 1),
(13, '2022_07_11_142853_create_jenis_ruangs_table', 1),
(14, '2022_07_11_152819_create_ruang_pamers_table', 1),
(15, '2022_07_12_131111_create_hero_images_table', 2),
(16, '2022_07_19_193404_create_fasilitas_table', 3),
(17, '2022_08_04_151102_add_is_admin_to_users_table', 4),
(18, '2022_08_04_184653_add_is_active_to_users_table', 5),
(19, '2022_08_08_215235_add_link_media3d_to_benda_koleksis_table', 6),
(20, '2022_08_09_125908_add_jenis_ruang_to_jenis_ruangs_table', 7);

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
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 7);

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
(1, 'http://localhost:8000/storage/logo/1657528489_logo_museum.png', 'http://localhost:8000/storage/favicon/1657528489_logo_museum.png', '0541-661214', '-', 'museum_mulawarman@yahoo.com', 'Jl. Tepian Pandan, Panji, Kec. Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur 75513', 'https://facebook.com/', 'https://instagram.com/museummulawarman', 'https://www.youtube.com/channel/UC3EuD4lmQxa2ijJcv9oxTOg', 'http://localhost:8000/storage/profile_url/1657528489_lembuswana.png', NULL, NULL, '2022-07-11 07:34:49', '2022-07-19 13:57:26');

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
(1, 'Sekilas', 'sekilas', '[]', '<p><span style=\"font-size: 12pt;\">safklsanflksafklasklfalsfla asfnkasfn aksjfnkasj askfnlksanflkasnf</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">safasfasg</span></li>\r\n<li><span style=\"font-size: 12pt;\">safasgsag</span></li>\r\n<li><span style=\"font-size: 12pt;\">asgasgasg</span></li>\r\n</ul>', 1, '2022-07-12 05:52:40', '2022-07-31 05:04:12'),
(2, 'Sejarah', 'sejarah', '[]', '<p>-</p>', 2, '2022-07-12 05:52:51', '2022-07-12 05:52:51'),
(3, 'Visi Misi', 'visi-misi', '[]', '<p>-</p>', 3, '2022-07-31 05:24:01', '2022-07-31 05:24:01'),
(4, 'Sumber Daya Manusia', 'sumber-daya-manusia', '[]', '<p>-</p>', 4, '2022-07-31 05:24:17', '2022-07-31 05:24:17'),
(5, 'Struktur Pegawai', 'struktur-pegawai', '[]', '<p>-</p>', 5, '2022-07-31 05:24:35', '2022-07-31 05:24:35');

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
(1, 'superadmin', 'web', '2022-07-11 07:29:54', '2022-07-11 07:29:54'),
(2, 'admin', 'web', '2022-07-11 07:29:54', '2022-07-11 07:29:54'),
(3, 'user', 'web', '2022-07-11 07:29:54', '2022-07-11 07:29:54');

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
  `jenis_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Syafei Karim', 'syfei.karim@gmail.com', NULL, '$2y$10$JKr4Lrsdb.1RkPVaHpraL.fzYZ0MsIpsl8p3TK3TE6sLTMh2YptPa', 1, 1, '4GkVJa2q3SzQ3sq2uDXJjMZF2jvXIJJWLB13NCyBC63EsP8C0T01EMuAhFYs', '2022-07-11 07:29:54', '2022-08-22 12:57:20'),
(3, 'Bahrul Muhid', 'bahrul.muhid@gmail.com', NULL, '$2y$10$eij.u8UeThL/NIO2XUReXub7/6u1WhpxTzU37bxr6p3w4LBeLSgL2', 1, 1, NULL, '2022-08-02 22:39:10', '2022-08-02 23:44:48'),
(4, 'Puji Astuti Amalia', 'Pujiastutiamalia@polnes.ac.id', NULL, '$2y$10$8z0likBldAPkZ7Tnhm8Hl.fNN/I0ZQ2ul6ZOB9X2Ysend8CLWDF6W', 0, 1, NULL, '2022-08-03 05:31:46', '2022-08-04 13:39:00'),
(7, 'Ade Saputra', 'ade.saputra@politanisamarinda.ac.id', NULL, '$2y$10$ZnT04LZV/hq53TMSBPDeyewEUUynXNHnMuCU8Ru/iGKP.v.Wp7mhe', 0, 0, NULL, '2022-08-04 13:30:23', '2022-08-04 13:38:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agendas_author_id_foreign` (`author_id`);

--
-- Indexes for table `benda_koleksis`
--
ALTER TABLE `benda_koleksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benda_koleksis_kategori_id_foreign` (`kategori_id`);

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
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_kontaks`
--
ALTER TABLE `form_kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_images`
--
ALTER TABLE `hero_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_ruangs`
--
ALTER TABLE `jenis_ruangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_koleksis`
--
ALTER TABLE `kategori_koleksis`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruang_pamers_jenis_id_foreign` (`jenis_id`);

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
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `benda_koleksis`
--
ALTER TABLE `benda_koleksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `form_kontaks`
--
ALTER TABLE `form_kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero_images`
--
ALTER TABLE `hero_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_ruangs`
--
ALTER TABLE `jenis_ruangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori_koleksis`
--
ALTER TABLE `kategori_koleksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruang_pamers`
--
ALTER TABLE `ruang_pamers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agendas`
--
ALTER TABLE `agendas`
  ADD CONSTRAINT `agendas_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `benda_koleksis`
--
ALTER TABLE `benda_koleksis`
  ADD CONSTRAINT `benda_koleksis_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_koleksis` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `ruang_pamers`
--
ALTER TABLE `ruang_pamers`
  ADD CONSTRAINT `ruang_pamers_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_ruangs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
