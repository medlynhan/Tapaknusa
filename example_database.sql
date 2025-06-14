-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 10:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `msattractions`
--

CREATE TABLE `msattractions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `startPrice` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `schedule` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `operational_hours` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msattractions`
--

INSERT INTO `msattractions` (`id`, `title`, `destination`, `status`, `rating`, `startPrice`, `address`, `schedule`, `description`, `operational_hours`, `image1`, `image2`, `image3`) VALUES
(1, 'Festival Erau Kertanegara', 'Kalimantan', 'festival', 4.8, '30.000,00', 'Kota Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur', '2025-05-26', 'Festival budaya terbesar di Kalimantan Timur yang diwariskan oleh Kesultanan Kutai Kartanegara. Acara ini menampilkan berbagai pertunjukan seni tradisional, upacara adat, hingga kompetisi perahu naga di Sungai Mahakam. Wisatawan dapat menyaksikan ritual sakral seperti Belimbur, di mana masyarakat saling menyiram air sebagai simbol pembersihan diri dan keberkahan.', '12.00 - 15.00', 'asset/gambar-atraksi/erau-kertanegara.png', 'asset/gambar-atraksi/erau-kertanegara.png', 'asset/gambar-atraksi/erau-kertanegara.png'),
(2, 'Workshop Membatik', 'Yogyakarta', 'atraksi', 4.8, 'Rp 75.000,00', 'Jl. Wijilan No.23, Panembahan, Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta', NULL, 'Pelajari seni membatik langsung dari pengrajin batik terbaik di Yogyakarta. Dalam workshop ini, peserta akan belajar menggambar motif batik, menggunakan canting, hingga pewarnaan kain. Hasil karya batik yang dibuat dapat dibawa pulang sebagai oleh-oleh.', 'Setiap hari | 09.00 - 17.00', 'asset/gambar-atraksi/workshop-membatik.jpg', 'asset/gambar-atraksi/workshop-membatik2.jpg', 'asset/gambar-atraksi/workshop-membatik3.jpg'),
(3, 'Desa Penglipuran', 'Pulau Bali', 'atraksi', 4.9, 'Rp 25.000,00', 'Desa Penglipuran, Kecamatan Bangli, Kabupaten Bangli, Bali', NULL, 'Desa adat ini dikenal sebagai desa terbersih di dunia. Pengunjung dapat menikmati arsitektur rumah tradisional Bali, interaksi dengan masyarakat setempat, dan keindahan alam yang masih sangat asri. Desa ini juga sering digunakan sebagai lokasi festival budaya dan acara adat khas Bali.', 'Setiap hari | 12.00 - 17.00', 'asset/gambar-atraksi/desa-penglipuran.png', 'asset/gambar-atraksi/desa-penglipuran.png', 'asset/gambar-atraksi/desa-penglipuran.png'),
(4, 'Festival Lompat Batu', 'Sumatera', 'festival', 4.9, 'Rp 50.000,00', 'Desa Bawomataluo, Kecamatan Fanayama, Kabupaten Nias Selatan, Sumatera Utara', '2025-09-20', 'Festival yang menampilkan ritual lompat batu setinggi lebih dari 2 meter, yang hanya bisa dilakukan oleh pemuda Nias yang sudah mencapai kedewasaan. Wisatawan bisa menyaksikan langsung kehebatan para pelompat batu serta menikmati tarian perang khas Nias yang heroik dan penuh semangat.', '14.00 - 18.00', 'asset/gambar-atraksi/lompat-batu-nias.jpg', 'asset/gambar-atraksi/lompat-batu-nias.jpg', 'asset/gambar-atraksi/lompat-batu-nias.jpg'),
(5, 'Tradisi Pasola', 'Sumatera', 'festival', 4.7, 'Rp 100.000,00', 'Desa Kodi, Lamboya, Kabupaten Sumba Barat, Nusa Tenggara Timur', '2025-07-12', 'Pasola adalah tradisi perang tanding antar dua kelompok penunggang kuda yang melemparkan tombak kayu ke arah lawan. Tradisi ini merupakan bagian dari kepercayaan Marapu dan menjadi ajang syukuran untuk panen yang melimpah. Wisatawan dapat merasakan kemeriahan suasana serta keunikan budaya yang masih kental di Pulau Sumba.', '13.00 - 17.00', 'asset/gambar-atraksi/pasola-sumba.png', 'asset/gambar-atraksi/pasola-sumba.png', 'asset/gambar-atraksi/pasola-sumba.png'),
(6, 'Pulau Kakaban', 'Kalimantan', 'atraksi', 4.9, 'Rp 50.000,00', 'Kepulauan Derawan, Kabupaten Berau, Kalimantan Timur', NULL, 'Pulau unik dengan danau air payau di tengahnya yang dihuni oleh ubur-ubur tidak menyengat, memungkinkan pengunjung berenang bersama mereka.', 'Setiap hari | 09.00 - 17.00', 'asset/gambar-atraksi/pulau-kakaban.png', 'asset/gambar-atraksi/pulau-kakaban.png', 'asset/gambar-atraksi/pulau-kakaban.png'),
(7, 'Danau Labuan Cermin', 'Kalimantan', 'atraksi', 4.8, 'Rp 25.000,00', 'Biduk-Biduk, Kabupaten Berau, Kalimantan Timur', NULL, 'Danau dengan air yang sangat jernih hingga dasar terlihat jelas, menawarkan pengalaman snorkeling di perairan tenang dengan dua rasa, tawar di permukaan dan asin di kedalaman.', 'Setiap hari | 09.00 - 14.00', 'asset/gambar-atraksi/danau-labuan-cermin.png', 'asset/gambar-atraksi/danau-labuan-cermin.png', 'asset/gambar-atraksi/danau-labuan-cermin.png'),
(8, 'Pulau Kei', 'NTT', 'atraksi', 4.7, 'Rp 30.000,00', 'Kepulauan Kei, Kabupaten Maluku Tenggara, Maluku', NULL, 'Gugusan pulau dengan pantai berpasir putih halus dan perairan biru jernih, menawarkan suasana tenang dan alami jauh dari keramaian.', 'Setiap hari | 09.00 - 17.00', 'asset/gambar-atraksi/pulau-kei.png', 'asset/gambar-atraksi/pulau-kei.png', 'asset/gambar-atraksi/pulau-kei.png'),
(9, 'Desa Wae Rebo', 'NTT', 'atraksi', 4.9, 'Rp 325.000,00', 'Desa Satar Lenda, Kecamatan Satar Mese Barat, Kabupaten Manggarai, Nusa Tenggara Timur', NULL, 'Desa tradisional di pegunungan dengan rumah adat berbentuk kerucut, menawarkan pengalaman budaya dan pemandangan alam yang menakjubkan.', 'Setiap hari | 08.00 - 18.00', 'asset/gambar-atraksi/wae-rebo.png', 'asset/gambar-atraksi/wae-rebo.png', 'asset/gambar-atraksi/wae-rebo.png'),
(10, 'Pulau Kanawa', 'Sumatera', 'atraksi', 4.8, 'Rp 100.000,00', 'Labuan Bajo, Kabupaten Manggarai Barat, Nusa Tenggara Timur', NULL, 'Pulau kecil dengan pantai berpasir putih dan terumbu karang yang kaya, ideal untuk snorkeling dan relaksasi.', 'Setiap hari | 09.00 - 17.00', 'asset/gambar-atraksi/pulau-kanawa.png', 'asset/gambar-atraksi/pulau-kanawa.png', 'asset/gambar-atraksi/pulau-kanawa.png'),
(11, 'Festival Sekaten', 'Yogyakarta', 'festival', 4.6, 'Rp 20.000,00', 'Alun-Alun Utara, Kota Yogyakarta, Daerah Istimewa Yogyakarta', '2025-08-12', 'Festival Sekaten adalah perayaan tradisional untuk memperingati Maulid Nabi Muhammad SAW dengan berbagai pertunjukan seni dan pasar malam. Acara ini diisi dengan gamelan khas keraton, kirab gunungan, dan bazar kuliner khas Yogyakarta. Suasananya yang meriah menjadikannya salah satu acara budaya yang paling dinantikan di Yogyakarta.', '10.00 - 17.00', 'asset/gambar-atraksi/sekaten.png', 'asset/gambar-atraksi/sekaten.png', 'asset/gambar-atraksi/sekaten.png'),
(12, 'Festival Danau Toba', 'Sumatera', 'festival', 4.8, 'Rp 100.000,00', 'Parapat, Kabupaten Simalungun, Sumatera Utara', '2025-06-07', 'Festival tahunan yang menampilkan berbagai pertunjukan budaya Batak, lomba olahraga air, dan pameran kerajinan tangan. Acara ini menarik wisatawan dari berbagai daerah dan luar negeri, serta menjadi ajang pelestarian budaya Batak yang kaya dan unik.', '12.00 - 16.00', 'asset/gambar-atraksi/danau-toba.png', 'asset/gambar-atraksi/danau-toba.png', 'asset/gambar-atraksi/danau-toba.png'),
(13, 'Festival Reog Ponorogo', 'Jawa Timur', 'festival', 4.7, 'Rp 50.000,00', 'Alun-Alun Kota Ponorogo, Jawa Timur', '2025-07-14', 'Pertunjukan seni Reog Ponorogo yang menampilkan tarian dengan topeng besar dan kostum megah sebagai bagian dari tradisi lokal. Festival ini menggabungkan kesenian, budaya, dan semangat gotong royong dalam satu acara yang megah dan penuh semangat.', '09.00 - 18.00', 'asset/gambar-atraksi/reog-ponorogo.png', 'asset/gambar-atraksi/reog-ponorogo.png', 'asset/gambar-atraksi/reog-ponorogo.png'),
(14, 'Festival 1000 Obor', 'Jawa Timur', 'festival', 4.6, 'Rp 20.000,00', 'Kota Bondowoso, Jawa Timur', '2025-07-07', 'Festival di mana ribuan obor dinyalakan sebagai bagian dari tradisi keagamaan dan budaya masyarakat Bondowoso.', '18.00 - 21.00', 'asset/gambar-atraksi/1000-obor.png', 'asset/gambar-atraksi/1000-obor.png', 'asset/gambar-atraksi/1000-obor.png'),
(15, 'Festival Kecak Uluwatu', 'Pulau Bali', 'festival', 4.9, 'Rp 100.000,00', 'Pura Uluwatu, Bali', '0000-00-00', 'Tari Kecak Uluwatu adalah pertunjukan tari tradisional yang dilakukan dengan paduan suara pria yang menyerukan \"cak\" berulang kali, dengan latar belakang matahari terbenam di Pura Uluwatu.', '12.00 - 14.00', 'asset/gambar-atraksi/kecak-uluwatu.png', 'asset/gambar-atraksi/kecak-uluwatu.png', 'asset/gambar-atraksi/kecak-uluwatu.png'),
(16, 'Taman Nasional Bali Barat', 'Pulau Bali', 'atraksi', 4.7, 'Rp 50.000,00', 'Buleleng & Jembrana, Bali', NULL, 'Taman Nasional Bali Barat adalah rumah bagi berbagai flora dan fauna unik, termasuk burung Jalak Bali yang langka. Tempat ini ideal untuk hiking, snorkeling, dan bird-watching.', 'Setiap hari | 09.00 - 17.00', 'asset/gambar-atraksi/bali-barat.png', 'asset/gambar-atraksi/bali-barat.png', 'asset/gambar-atraksi/bali-barat.png'),
(17, 'Festival Jatiluwih Rice Terrace', 'Pulau Bali', 'festival', 4.8, 'Rp 40.000,00', 'Jatiluwih, Tabanan, Bali', '2025-05-16', 'Festival ini merayakan keindahan dan keunikan Subak, sistem irigasi tradisional Bali yang diakui UNESCO, dengan pertunjukan budaya dan kuliner khas pertanian Bali.', '09.00 - 14.00', 'asset/gambar-atraksi/jatiluwih-rice.jpg', 'asset/gambar-atraksi/jatiluwih-rice.jpg', 'asset/gambar-atraksi/jatiluwih-rice.jpg'),
(18, 'Keraton Yogyakarta', 'Yogyakarta', 'atraksi', 4.8, 'Rp 25.000,00', 'Jl. Rotowijayan No.1, Kota Yogyakarta', NULL, 'Keraton Yogyakarta adalah istana resmi Sultan Yogyakarta yang masih aktif digunakan hingga saat ini. Wisatawan dapat melihat arsitektur khas Jawa, koleksi peninggalan bersejarah, serta pertunjukan seni di dalam kompleks keraton.', 'Setiap hari | 08.00 - 14.00', 'asset/gambar-atraksi/keraton-yogyakarta.png', 'asset/gambar-atraksi/keraton-yogyakarta.png', 'asset/gambar-atraksi/keraton-yogyakarta.png'),
(19, 'Festival Wayang Jogja Night', 'Yogyakarta', 'festival', 4.9, 'Rp 30.000,00', 'Jalan Malioboro, Kota Yogyakarta', '2025-09-12', 'Jogja Night Carnival adalah parade spektakuler yang menampilkan pertunjukan wayang modern dengan kombinasi musik, tari, dan kostum megah yang memukau ribuan penonton di sepanjang Jalan Malioboro.', '19.00 - 22.00', 'asset/gambar-atraksi/wayang-jogja.png', 'asset/gambar-atraksi/wayang-jogja.png', 'asset/gambar-atraksi/wayang-jogja.png'),
(20, 'Goa Jomblang', 'Yogyakarta', 'atraksi', 4.8, 'Rp 500.000,00', 'Semanu, Kabupaten Gunungkidul, Yogyakarta', NULL, 'Goa Jomblang adalah goa vertikal yang terkenal dengan \"Cahaya Surga\" yang masuk melalui lubang besar di bagian atas goa. Wisatawan akan menuruni tebing menggunakan tali dan menyaksikan keindahan alam yang unik di dalamnya.', 'Setiap hari | 09.00 - 19.00', 'asset/gambar-atraksi/goa-jomblang.png', 'asset/gambar-atraksi/goa-jomblang.png', 'asset/gambar-atraksi/goa-jomblang.png'),
(21, 'Festival Ratu Boko Sunset', 'Yogyakarta', 'festival', 4.9, 'Rp 75.000,00', 'Situs Ratu Boko, Sleman, Yogyakarta', '2025-10-10', 'Festival ini menghadirkan pertunjukan seni dan budaya yang berpadu dengan keindahan matahari terbenam di situs sejarah Ratu Boko. Acara ini menampilkan tari-tarian tradisional, musik gamelan, dan berbagai pertunjukan seni lainnya.', '17.00 - 20.00', 'asset/gambar-atraksi/ratu-boko.png', 'asset/gambar-atraksi/ratu-boko.png', 'asset/gambar-atraksi/ratu-boko.png'),
(22, 'Festival Pacu Jalur', 'Sumatera', 'festival', 4.8, 'Rp 60.000,00', 'Tembilahan, Riau', '2025-08-08', 'Festival Pacu Jalur adalah perlombaan perahu tradisional khas Riau dengan berbagai pertunjukan seni.', '10.00 - 15.00', 'asset/gambar-atraksi/pacu-jalur.webp', 'asset/gambar-atraksi/pacu-jalur.webp', 'asset/gambar-atraksi/pacu-jalur.webp'),
(23, 'Festival Megalithik Nias', 'Sumatera', 'festival', 4.7, 'Rp 55.000,00', 'Nias, Sumatra Utara', '2025-05-22', 'Festival ini memperkenalkan tradisi megalitik dan atraksi khas Nias, termasuk lompat batu.', '11.00 - 17.00', 'asset/gambar-atraksi/megalithik-nias.jpg', 'asset/gambar-atraksi/megalithik-nias.jpg', 'asset/gambar-atraksi/megalithik-nias.jpg'),
(24, 'Festival Keraton Nusantara', 'Sumatera', 'festival', 4.9, 'Rp 70.000,00', 'Palembang, Sumatra Selatan', '2025-03-26', 'Festival ini menampilkan budaya kerajaan di Indonesia, termasuk parade busana kerajaan dan pertunjukan seni tradisional.', '10.00 - 18.00', 'asset/gambar-atraksi/keraton-palembang.jpg', 'asset/gambar-atraksi/keraton-palembang.jpg', 'asset/gambar-atraksi/keraton-palembang.jpg'),
(25, 'Istano Basa Pagaruyung', 'Sumatera', 'atraksi', 4.8, 'Rp 50.000,00', 'Batusangkar, Tanah Datar, Sumatra Barat', NULL, 'Replika istana kerajaan Minangkabau dengan arsitektur khas dan koleksi benda bersejarah.', 'Setiap hari | 08.00 - 18.00', 'asset/gambar-atraksi/pagaruyung.jpg', 'asset/gambar-atraksi/pagaruyung.jpg', 'asset/gambar-atraksi/pagaruyung.jpg'),
(26, 'Desa Wisata Dokan', 'Sumatera', 'atraksi', 4.7, 'Rp 75.000,00', 'Kecamatan Merek, Kabupaten Karo, Sumatra Utara', '0000-00-00', 'Desa adat Karo dengan rumah tradisional yang masih dihuni oleh masyarakat setempat.', '09.00 - 15.00', 'asset/gambar-atraksi/dokan.png', 'asset/gambar-atraksi/dokan.png', 'asset/gambar-atraksi/dokan.png'),
(27, 'Benteng Marlborough', 'Sumatera', 'atraksi', 4.6, 'Rp 30.000,00', 'Kota Bengkulu, Bengkulu', '0000-00-00', 'Benteng peninggalan kolonial Inggris yang masih berdiri kokoh di Bengkulu.', '08.00 - 17.00', 'asset/gambar-atraksi/marlborough.jpeg', 'asset/gambar-atraksi/marlborough.jpeg', 'asset/gambar-atraksi/marlborough.jpeg'),
(28, 'Rumah Limas Palembang', 'Sumatera', 'atraksi', 4.7, 'Rp 40.000,00', 'Palembang, Sumatra Selatan', '0000-00-00', 'Rumah adat khas Palembang dengan arsitektur unik dan penuh nilai budaya.', '09.00 - 17.00', 'asset/gambar-atraksi/rumah-limas.jpeg', 'asset/gambar-atraksi/rumah-limas.jpeg', 'asset/gambar-atraksi/rumah-limas.jpeg'),
(29, 'Kampung Adat Bawomataluo', 'Sumatera', 'atraksi', 4.9, 'Rp 60.000,00', 'Kabupaten Nias Selatan, Sumatra Utara', '0000-00-00', 'Kampung adat dengan rumah tradisional Nias yang megah dan pertunjukan lompat batu.', '08.00 - 16.00', 'asset/gambar-atraksi/bawomataluo.jpg', 'asset/gambar-atraksi/bawomataluo.jpg', 'asset/gambar-atraksi/bawomataluo.jpg'),
(30, 'Upacara Bersih Desa ', 'Jawa Timur', 'festival', 4.7, 'Rp 30.000,00', 'Desa Sumber Anyar, Kabupaten Probolinggo, Jawa Timur', '2025-06-25', 'Upacara Bersih Desa adalah tradisi yang dilakukan masyarakat Desa Sumber Anyar untuk memohon keselamatan dan berkah bagi desa mereka. Acara ini meliputi prosesi adat, tarian, dan berbagai pertunjukan budaya yang menggambarkan kekayaan tradisi Jawa Timur.', '08.00 - 15.00', 'asset/gambar-atraksi/bersih-desa.png', 'asset/gambar-atraksi/bersih-desa.png', 'asset/gambar-atraksi/bersih-desa.png'),
(31, 'Festival Rujak Uleg', 'Jawa Timur', 'festival', 4.8, 'Rp 25.000,00', 'Kota Malang, Jawa Timur', '2025-07-10', 'Festival Rujak Uleg adalah sebuah festival budaya yang merayakan keberagaman kuliner tradisional Jawa Timur, khususnya rujak, yang dibuat dengan cara diulek. Wisatawan dapat berpartisipasi dalam proses pembuatan rujak dan menikmati berbagai jenis rujak khas Malang.', '10.00 - 17.00', 'asset/gambar-atraksi/rujak-uleg.png', 'asset/gambar-atraksi/rujak-uleg.png', 'asset/gambar-atraksi/rujak-uleg.png'),
(32, 'Candi Singosari', 'Jawa Timur', 'atraksi', 4.8, 'Rp 25.000,00', 'Desa Singosari, Kabupaten Malang, Jawa Timur', NULL, 'Candi Singosari merupakan peninggalan Kerajaan Singosari yang dibangun pada abad ke-13, berfungsi sebagai tempat pemujaan terhadap Dewa Siwa. Pengunjung dapat mengagumi arsitektur candi dan menyaksikan relief-relief yang menceritakan sejarah kerajaan tersebut.', 'Setiap hari | 08.00 - 17.00', 'asset/gambar-atraksi/singosari.jpg', 'asset/gambar-atraksi/singosari.jpg', 'asset/gambar-atraksi/singosari.jpg'),
(33, 'Festival Jember Fashion Carnaval', 'Jawa Timur', 'festival', 4.9, 'Rp 100.000,00', 'Kota Jember, Jawa Timur', '2025-08-15', 'Festival ini menampilkan parade busana dengan tema kreatif dan inovatif yang menggambarkan kekayaan budaya Indonesia. Setiap tahunnya, Jember Fashion Carnaval menjadi salah satu festival paling bergengsi di Indonesia dengan pertunjukan yang memukau pengunjung.', '13.00 - 17.00', 'asset/gambar-atraksi/jember-fashion.jpg', 'asset/gambar-atraksi/jember-fashion.jpg', 'asset/gambar-atraksi/jember-fashion.jpg'),
(34, 'Tari Gandrung Banyuwangi', 'Jawa Timur', 'atraksi', 4.7, 'Rp 40.000,00', 'Banyuwangi, Jawa Timur', NULL, 'Tari Gandrung adalah tarian tradisional yang berasal dari Banyuwangi, menggambarkan kehidupan masyarakat pesisir. Tarian ini sering dipertunjukkan dalam acara budaya dan perayaan di Banyuwangi.', 'Setiap hari | 10.00 - 15.00', 'asset/gambar-atraksi/gandrung-banyuwangi.png', 'asset/gambar-atraksi/gandrung-banyuwangi.png', 'asset/gambar-atraksi/gandrung-banyuwangi.png'),
(35, 'Candi Penataran', 'Jawa Timur', 'atraksi', 4.8, 'Rp 25.000,00', 'Desa Penataran, Kecamatan Udanawu, Kabupaten Blitar, Jawa Timur', NULL, 'Candi Penataran adalah kompleks candi terbesar di Jawa Timur yang dibangun pada abad ke-14 oleh Kerajaan Majapahit. Candi ini dikenal dengan relief yang menggambarkan kisah-kisah epik dari Ramayana dan Mahabharata, serta keindahan arsitektur Hindu yang menakjubkan.', 'Setiap hari | 08.00 - 17.00', 'asset/gambar-atraksi/penataran.jpg', 'asset/gambar-atraksi/penataran.jpg', 'asset/gambar-atraksi/penataran.jpg'),
(36, 'Kampung Osing', 'Jawa Timur', 'atraksi', 4.7, 'Rp 50.000,00', 'Desa Osing, Kecamatan Glagah, Kabupaten Banyuwangi, Jawa Timur', NULL, 'Kampung Osing adalah desa adat yang menjaga kelestarian tradisi dan budaya suku Osing yang unik. Pengunjung dapat menikmati kehidupan sehari-hari masyarakat Osing, melihat rumah adat mereka, serta ikut berpartisipasi dalam berbagai kegiatan budaya tradisional seperti tari-tarian dan seni musik.', 'Setiap hari | 09.00 - 16.00', 'asset/gambar-atraksi/osing.jpg', 'asset/gambar-atraksi/osing.jpg', 'asset/gambar-atraksi/osing.jpg'),
(37, 'Kebun Raya Purwodadi', 'Jawa Timur', 'atraksi', 4.6, 'Rp 30.000,00', 'Desa Purwodadi, Kecamatan Purwodadi, Kabupaten Pasuruan, Jawa Timur', NULL, 'Kebun Raya Purwodadi adalah taman botani yang memiliki koleksi flora langka dari berbagai daerah di Indonesia. Tempat ini cocok untuk wisatawan yang ingin belajar tentang keanekaragaman hayati Indonesia sambil menikmati suasana alam yang sejuk.', 'Setiap hari | 08.00 - 17.00', 'asset/gambar-atraksi/kebun-raya-purwodadi.png', 'asset/gambar-atraksi/kebun-raya-purwodadi.png', 'asset/gambar-atraksi/kebun-raya-purwodadi.png'),
(38, 'Candi Badut', 'Jawa Timur', 'atraksi', 4.7, 'Rp 20.000,00', 'Desa Sanan, Kecamatan Dau, Kabupaten Malang, Jawa Timur', NULL, 'Candi Badut adalah candi Hindu yang dibangun pada abad ke-9 yang memiliki desain arsitektur khas Jawa Timur. Meskipun candi ini tidak seterkenal candi lainnya, namun keberadaannya sangat penting dalam sejarah perkembangan agama Hindu di Pulau Jawa.', 'Setiap hari | 08.00 - 17.00', 'asset/gambar-atraksi/candi-badut.png', 'asset/gambar-atraksi/candi-badut.png', 'asset/gambar-atraksi/candi-badut.png'),
(39, 'Pantai Papuma', 'Jawa Timur', 'atraksi', 4.8, 'Rp 25.000,00', 'Desa Lojejer, Kecamatan Wuluhan, Kabupaten Jember, Jawa Timur', NULL, 'Pantai Papuma menawarkan pemandangan alam yang indah, dengan pasir putih dan laut biru yang jernih. Selain itu, pantai ini juga sering digunakan untuk kegiatan fotografi, serta memiliki banyak spot menarik untuk berfoto dan menikmati matahari terbenam.', 'Setiap hari | 08.00 - 18.00', 'asset/gambar-atraksi/pantai-papuma.png', 'asset/gambar-atraksi/pantai-papuma.png', 'asset/gambar-atraksi/pantai-papuma.png'),
(40, 'Air Terjun Tumpak Sewa', 'Jawa Timur', 'atraksi', 4.9, 'Rp 20.000,00', 'Desa Sewa, Kecamatan Jember, Kabupaten Jember, Jawa Timur', NULL, 'Air Terjun Tumpak Sewa adalah salah satu air terjun dengan dua aliran yang mengalir berdampingan. Tempat ini menyajikan pemandangan alam yang sangat indah dengan suara gemuruh air terjun yang menenangkan.', 'Setiap hari | 08.00 - 17.00', 'asset/gambar-atraksi/tumpak-sewa.png', 'asset/gambar-atraksi/tumpak-sewa.png', 'asset/gambar-atraksi/tumpak-sewa.png'),
(41, 'Taman Ayun', 'Pulau Bali', 'atraksi', 4.8, 'Rp 30.000,00', 'Jl. Ayun, Mengwi, Kabupaten Badung, Bali', NULL, 'Taman Ayun adalah sebuah pura dengan taman yang luas, yang dikelilingi oleh parit. Pura ini merupakan salah satu pura kerajaan yang penting di Bali dengan arsitektur yang indah dan pemandangan yang menenangkan.', 'Setiap hari | 08.00 - 18.00', 'asset/gambar-atraksi/taman-ayun.png', 'asset/gambar-atraksi/taman-ayun.png', 'asset/gambar-atraksi/taman-ayun.png'),
(42, 'Pura Besakih', 'Pulau Bali', 'atraksi', 4.9, 'Rp 50.000,00', 'Karangasem, Bali', NULL, 'Pura Besakih adalah pura terbesar dan paling suci di Bali, terletak di lereng Gunung Agung. Pengunjung dapat melihat kompleks pura yang luas dan menikmati pemandangan indah dari tempat ini.', 'Setiap hari | 08.00 - 17.00', 'asset/gambar-atraksi/pura-besakih.png', 'asset/gambar-atraksi/pura-besakih.png', 'asset/gambar-atraksi/pura-besakih.png'),
(43, 'Pantai Sanur', 'Pulau Bali', 'atraksi', 4.7, 'Rp 20.000,00', 'Sanur, Denpasar, Bali', NULL, 'Pantai Sanur dikenal dengan pesisir yang tenang dan indah, cocok untuk keluarga yang ingin bersantai atau menikmati kegiatan air seperti snorkeling dan bersepeda di tepi pantai.', 'Setiap hari | 06.00 - 18.00', 'asset/gambar-atraksi/pantai-sanur.png', 'asset/gambar-atraksi/pantai-sanur.png', 'asset/gambar-atraksi/pantai-sanur.png'),
(44, 'Pura Tanah Lot', 'Pulau Bali', 'atraksi', 4.8, 'Rp 25.000,00', 'Beraban, Tabanan, Bali', NULL, 'Pura Tanah Lot adalah pura yang terletak di atas batu besar di tengah laut, terkenal dengan pemandangan matahari terbenamnya yang spektakuler. Pura ini menjadi ikon wisata Bali yang wajib dikunjungi.', 'Setiap hari | 08.00 - 18.00', 'asset/gambar-atraksi/tanah-lot.png', 'asset/gambar-atraksi/tanah-lot.png', 'asset/gambar-atraksi/tanah-lot.png'),
(45, 'Monkey Forest Ubud', 'Pulau Bali', 'atraksi', 4.9, 'Rp 50.000,00', 'Jl. Monkey Forest, Ubud, Gianyar, Bali', NULL, 'Monkey Forest Ubud adalah hutan yang dihuni oleh ratusan monyet ekor panjang. Selain bisa melihat monyet-monyet yang lucu, pengunjung juga dapat menikmati keindahan alam yang asri dan suasana yang damai di sekitar hutan.', 'Setiap hari | 08.00 - 18.00', 'asset/gambar-atraksi/monkey-forest-ubud.png', 'asset/gambar-atraksi/monkey-forest-ubud.png', 'asset/gambar-atraksi/monkey-forest-ubud.png'),
(47, 'Festival Bali Arts', 'Pulau Bali', 'festival', 4.8, 'Rp 50.000,00', 'Denpasar, Bali', '2025-06-25', 'Festival Bali Arts adalah festival tahunan yang memperkenalkan seni dan budaya Bali melalui berbagai pertunjukan seni, pameran, serta pagelaran tari tradisional Bali. Festival ini menjadi ajang untuk menunjukkan keunikan seni Bali kepada dunia.', '10.00 - 20.00', 'asset/gambar-atraksi/bali-arts.png', 'asset/gambar-atraksi/bali-arts.png', 'asset/gambar-atraksi/bali-arts.png'),
(48, 'Galungan dan Kuningan', 'Pulau Bali', 'festival', 4.9, 'Rp 20.000,00', 'Seluruh Bali', '2025-07-15', 'Galungan adalah festival penting bagi umat Hindu Bali, merayakan kemenangan kebaikan atas kejahatan. Festival ini diwarnai dengan upacara adat, penataan penjaga-penjaga persembahan, serta berbagai pertunjukan yang menonjolkan kebudayaan Bali.', 'Setiap hari | 09.00 - 17.00', 'asset/gambar-atraksi/galungan.png', 'asset/gambar-atraksi/galungan.png', 'asset/gambar-atraksi/galungan.png'),
(49, 'Nyepi Day', 'Pulau Bali', 'festival', 4.9, 'Rp 0,00', 'Seluruh Bali', '2025-03-25', 'Nyepi adalah hari raya Tahun Baru Saka yang dirayakan dengan berbagai ritual unik, termasuk parade Ogoh-Ogoh (patung dari bahan bambu dan kertas), serta hari hening di mana seluruh Bali berhenti beraktivitas selama 24 jam.', 'Seluruh hari | 00.00 - 24.00', 'asset/gambar-atraksi/nyepi.png', 'asset/gambar-atraksi/nyepi.png', 'asset/gambar-atraksi/nyepi.png'),
(51, 'Bali Kite Festival', 'Pulau Bali', 'festival', 4.7, 'Rp 25.000,00', 'Sanur, Bali', '2025-08-05', 'Festival Layang-Layang Bali adalah ajang untuk memamerkan keindahan dan kreativitas dalam membuat layang-layang yang besar dan berwarna-warni. Festival ini diadakan setiap tahun di pantai Sanur, dengan kompetisi layang-layang yang mempesona.', '10.00 - 18.00', 'asset/gambar-atraksi/kite-festival.png', 'asset/gambar-atraksi/kite-festival.png', 'asset/gambar-atraksi/kite-festival.png'),
(52, 'Desa Adat Dayak', 'Kalimantan', 'atraksi', 4.8, 'Rp 40.000,00', 'Desa Muara, Kabupaten Kutai Barat, Kalimantan Timur', NULL, 'Desa Adat Dayak adalah tempat yang memungkinkan pengunjung untuk mengalami kehidupan tradisional suku Dayak. Wisatawan dapat melihat rumah panjang Dayak, alat-alat tradisional, dan belajar tentang kebudayaan mereka yang kaya.', 'Setiap hari | 09.00 - 17.00', 'asset/gambar-atraksi/desa-dayak.png', 'asset/gambar-atraksi/desa-dayak.png', 'asset/gambar-atraksi/desa-dayak.png'),
(53, 'Taman Nasional Kutai', 'Kalimantan', 'atraksi', 4.7, 'Rp 50.000,00', 'Kabupaten Kutai Timur, Kalimantan Timur', NULL, 'Taman Nasional Kutai adalah kawasan konservasi yang kaya akan flora dan fauna. Di sini, pengunjung dapat melihat orangutan liar dan berbagai satwa endemik Kalimantan sambil menikmati keindahan alam hutan tropis.', 'Setiap hari | 08.00 - 16.00', 'asset/gambar-atraksi/taman-kutai.png', 'asset/gambar-atraksi/taman-kutai.png', 'asset/gambar-atraksi/taman-kutai.png'),
(54, 'Museum Mulawarman', 'Kalimantan', 'atraksi', 4.8, 'Rp 25.000,00', 'Jl. Sutan Muhammad Arsyad, Kota Tenggarong, Kalimantan Timur', NULL, 'Museum Mulawarman merupakan museum yang menyimpan berbagai koleksi sejarah dan kebudayaan Kerajaan Kutai Kartanegara. Di sini, pengunjung dapat mempelajari sejarah kerajaan kuno, serta melihat benda-benda peninggalan kerajaan.', 'Setiap hari | 09.00 - 16.00', 'asset/gambar-atraksi/museum-mulawarman.png', 'asset/gambar-atraksi/museum-mulawarman.png', 'asset/gambar-atraksi/museum-mulawarman.png'),
(55, 'Kampung Warna Samarinda', 'Kalimantan', 'atraksi', 4.7, 'Rp 20.000,00', 'Samarinda, Kalimantan Timur', NULL, 'Kampung Warna-Warni di Samarinda adalah kampung yang dihiasi dengan rumah-rumah warna-warni dan mural yang menggambarkan kehidupan dan budaya masyarakat setempat. Kampung ini menjadi tempat yang cocok untuk berfoto dan menikmati suasana kreatif.', 'Setiap hari | 08.00 - 18.00', 'asset/gambar-atraksi/kampung-warna.png', 'asset/gambar-atraksi/kampung-warna.png', 'asset/gambar-atraksi/kampung-warna.png'),
(56, 'Festival Seni Kaltim', 'Kalimantan', 'atraksi', 4.6, 'Rp 30.000,00', 'Kota Samarinda, Kalimantan Timur', NULL, 'Festival Seni Kaltim adalah ajang tahunan yang menampilkan berbagai pertunjukan seni tradisional Kalimantan, mulai dari tari, musik, hingga pameran seni rupa. Acara ini menjadi ajang untuk memperkenalkan seni Kalimantan kepada masyarakat luas.', 'Setiap hari | 09.00 - 18.00', 'asset/gambar-atraksi/festival-seni-kaltim.png', 'asset/gambar-atraksi/festival-seni-kaltim.png', 'asset/gambar-atraksi/festival-seni-kaltim.png'),
(57, 'Festival Isen Mulang', 'Kalimantan', 'festival', 4.8, 'Rp 40.000,00', 'Palangka Raya, Kalimantan Tengah', '2025-06-10', 'Festival Isen Mulang adalah festival budaya yang merayakan kebudayaan Dayak dengan berbagai pertunjukan seni, tarian tradisional, dan lomba adat. Acara ini diadakan setiap tahun di Palangka Raya dan menjadi daya tarik wisata budaya terbesar di Kalimantan Tengah.', '09.00 - 17.00', 'asset/gambar-atraksi/isen-mulang.png', 'asset/gambar-atraksi/isen-mulang.png', 'asset/gambar-atraksi/isen-mulang.png'),
(58, 'Pesta Adat Tumbilotohe', 'Kalimantan', 'festival', 4.7, 'Rp 20.000,00', 'Kota Banjarmasin, Kalimantan Selatan', '2025-07-15', 'Pesta Adat Tumbilotohe adalah festival budaya yang berlangsung di Kota Banjarmasin. Festival ini dikenal dengan acara menyalakan ribuan lampion yang terpasang di sepanjang sungai, menciptakan pemandangan malam yang sangat indah dan penuh warna.', '18.00 - 22.00', 'asset/gambar-atraksi/tumbilotohe.png', 'asset/gambar-atraksi/tumbilotohe.png', 'asset/gambar-atraksi/tumbilotohe.png'),
(59, 'Festival Hudoq', 'Kalimantan', 'festival', 4.8, 'Rp 30.000,00', 'Kalimantan Timur', '2025-10-01', 'Festival Hudoq adalah festival budaya yang menampilkan pertunjukan tari tradisional Hudoq, yang dilakukan oleh suku Dayak. Festival ini menggambarkan ritual adat dan tradisi berburu suku Dayak dengan mengenakan kostum yang menyerupai makhluk mitologi.', '10.00 - 16.00', 'asset/gambar-atraksi/hudoq.png', 'asset/gambar-atraksi/hudoq.png', 'asset/gambar-atraksi/hudoq.png'),
(60, 'Festival Budaya Banjar', 'Kalimantan', 'festival', 4.6, 'Rp 15.000,00', 'Banjarmasin, Kalimantan Selatan', '2025-08-20', 'Festival Budaya Banjar merupakan acara tahunan yang menampilkan berbagai pertunjukan seni dan budaya tradisional Banjar, termasuk tari-tarian khas Banjar, musik, serta pameran seni dan kerajinan tradisional.', '09.00 - 17.00', 'asset/gambar-atraksi/budaya-banjar.png', 'asset/gambar-atraksi/budaya-banjar.png', 'asset/gambar-atraksi/budaya-banjar.png'),
(61, 'Festival Meriam Karbit', 'Kalimantan', 'festival', 4.7, 'Rp 10.000,00', 'Kota Samarinda, Kalimantan Timur', '2025-05-30', 'Festival Meriam Karbit adalah festival tradisional yang menampilkan perlombaan meriam karbit, di mana meriam tersebut diledakkan dengan menggunakan karbit. Acara ini merupakan bagian dari perayaan untuk menyambut bulan Ramadan di Kalimantan Timur.', '15.00 - 19.00', 'asset/gambar-atraksi/meriam-karbit.png', 'asset/gambar-atraksi/meriam-karbit.png', 'asset/gambar-atraksi/meriam-karbit.png'),
(62, 'Candi Prambanan', 'Yogyakarta', 'atraksi', 4.9, 'Rp 50.000,00', 'Desa Prambanan, Kecamatan Prambanan, Kabupaten Sleman, Yogyakarta', NULL, 'Candi Prambanan adalah kompleks candi Hindu terbesar di Indonesia, yang didedikasikan untuk Trimurti: Brahma, Wisnu, dan Siwa. Candi ini dikenal dengan keindahan arsitektur dan relief yang menggambarkan kisah Ramayana dan Mahabharata.', 'Setiap hari | 06.00 - 17.00', 'asset/gambar-atraksi/prambanan.png', 'asset/gambar-atraksi/prambanan.png', 'asset/gambar-atraksi/prambanan.png'),
(63, 'Kota Gede', 'Yogyakarta', 'atraksi', 4.7, 'Rp 20.000,00', 'Kota Gede, Yogyakarta', NULL, 'Kota Gede adalah kawasan bersejarah yang terkenal sebagai pusat kerajinan perak di Yogyakarta. Di sini, wisatawan dapat mengunjungi bengkel-bengkel perak tradisional, melihat bangunan-bangunan bersejarah, serta belajar tentang sejarah Kerajaan Mataram Islam.', 'Setiap hari | 08.00 - 17.00', 'asset/gambar-atraksi/kota-gede.png', 'asset/gambar-atraksi/kota-gede.png', 'asset/gambar-atraksi/kota-gede.png'),
(64, 'Festival Sadranan', 'Yogyakarta', 'festival', 4.8, 'Rp 20.000,00', 'Pantai Parangtritis, Yogyakarta', '2025-07-05', 'Festival Sadranan adalah sebuah festival tradisional yang diadakan setiap tahun di Pantai Parangtritis. Festival ini merupakan tradisi syukuran yang diadakan oleh masyarakat sekitar, dengan ritual laut yang bertujuan untuk memohon keselamatan. Pengunjung dapat melihat prosesi adat serta menikmati berbagai pertunjukan budaya.', '09.00 - 16.00', 'asset/gambar-atraksi/sadranan.png', 'asset/gambar-atraksi/sadranan.png', 'asset/gambar-atraksi/sadranan.png'),
(65, 'Festival Gebyar Batik', 'Yogyakarta', 'festival', 4.7, 'Rp 30.000,00', 'Jl. Malioboro, Kota Yogyakarta', '2025-08-14', 'Festival Gebyar Batik adalah perayaan seni batik yang diadakan setiap tahun untuk menampilkan keindahan dan keragaman motif batik Yogyakarta. Festival ini diisi dengan parade batik, pameran karya seni batik, dan pertunjukan budaya lainnya.', '10.00 - 17.00', 'asset/gambar-atraksi/gebyar-batik.png', 'asset/gambar-atraksi/gebyar-batik.png', 'asset/gambar-atraksi/gebyar-batik.png');

-- --------------------------------------------------------

--
-- Table structure for table `mshistory`
--

CREATE TABLE `mshistory` (
  `id` int(11) NOT NULL,
  `ticket_type_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mshistory`
--

INSERT INTO `mshistory` (`id`, `ticket_type_id`, `quantity`, `user_id`) VALUES
(1, 1, 2, 1),
(2, 3, 1, 1),
(3, 3, 1, 2),
(4, 4, 2, 2),
(5, 4, 3, 3),
(6, 4, 1, 3),
(7, 6, 2, 4),
(8, 2, 1, 4),
(9, 2, 2, 5),
(10, 7, 1, 6),
(11, 5, 3, 7),
(12, 9, 1, 8),
(13, 10, 2, 9),
(14, 8, 1, 10),
(15, 1, 3, 1),
(16, 6, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `msreviews`
--

CREATE TABLE `msreviews` (
  `id` int(11) NOT NULL,
  `attraction_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msreviews`
--

INSERT INTO `msreviews` (`id`, `attraction_id`, `user_id`, `rating`, `comment`) VALUES
(11, 1, 1, 5, 'Festival yang luar biasa! Pertunjukan budaya dan ritualnya sangat mengesankan. Sangat direkomendasikan!'),
(12, 1, 2, 4, 'Festival yang menyenangkan, namun banyak kerumunan yang membuatnya agak sulit dinikmati.'),
(13, 1, 3, 5, 'Acara yang sangat mengesankan! Berbeda dari festival lainnya, pengalaman yang tidak terlupakan.'),
(14, 2, 4, 4, 'Workshop yang menyenangkan dan mendidik, tetapi kelas agak penuh.'),
(15, 2, 5, 3, 'Batik workshopnya bagus, tetapi saya rasa beberapa teknik bisa dijelaskan lebih detail lagi.'),
(16, 3, 6, 5, 'Desa Penglipuran sangat damai dan indah. Arsitektur tradisionalnya sangat mempesona dan masyarakat sangat ramah.'),
(17, 3, 7, 4, 'Tempat yang indah dan tenang, tetapi sayang saya hanya bisa mengunjungi sebentar.'),
(18, 4, 8, 5, 'Festival lompat batu sangat menarik! Tradisi ini benar-benar unik dan penuh semangat.'),
(19, 4, 9, 4, 'Pertunjukan lompat batu sangat mengesankan, namun cuaca cukup panas.'),
(20, 5, 10, 4, 'Pacu Jalur sangat seru, tetapi sedikit terlalu ramai dan susah mendapatkan tempat duduk yang nyaman.'),
(21, 5, 1, 5, 'Pengalaman menonton Pacu Jalur luar biasa, sangat mengagumkan dan penuh energi!'),
(22, 6, 2, 5, 'Pulau Kakaban sangat menakjubkan! Menyelam bersama ubur-ubur adalah pengalaman yang tidak akan terlupakan.'),
(23, 6, 3, 4, 'Pulau Kakaban sangat indah, tetapi ada beberapa bagian yang agak ramai, jadi kurang nyaman.'),
(24, 7, 4, 5, 'Danau Labuan Cermin sangat jernih! Snorkeling di sana sangat menyenangkan, airnya sangat tenang.'),
(25, 7, 5, 4, 'Danau Labuan Cermin benar-benar luar biasa, namun jalannya sedikit menantang bagi yang tidak terbiasa hiking.'),
(26, 8, 6, 4, 'Pulau Kei sangat tenang, pantainya indah, tetapi kurang banyak aktivitas di sekitar pulau.'),
(27, 8, 7, 5, 'Pulau Kei sangat damai dan alami, cocok untuk bersantai dan menikmati keindahan alam.'),
(28, 9, 8, 5, 'Wae Rebo adalah desa yang luar biasa! Pengalaman tinggal di rumah adat dan menikmati keindahan alam sangat memukau.'),
(29, 9, 9, 5, 'Pengalaman yang sangat berkesan di Wae Rebo, budaya dan alamnya sangat mempesona.'),
(30, 10, 10, 4, 'Pulau Kanawa sangat damai. Pantainya indah dan cocok untuk snorkeling, namun ada sedikit kekurangan fasilitas.'),
(31, 10, 1, 5, 'Kanawa adalah tempat yang sempurna untuk bersantai, snorkeling sangat bagus dan airnya sangat jernih.'),
(32, 11, 2, 5, 'Festival 1000 Obor sangat meriah! Ribuan obor menciptakan suasana yang magis dan memukau.'),
(33, 11, 3, 4, 'Festival ini sangat bagus, tetapi terlalu ramai di beberapa area.'),
(34, 12, 4, 5, 'Tari Kecak di Uluwatu luar biasa, dan sunsetnya sangat indah!'),
(35, 12, 5, 4, 'Tari Kecak sangat mengesankan, tetapi saya berharap bisa lebih dekat dengan panggung.'),
(36, 13, 6, 5, 'Taman Nasional Bali Barat sangat indah! Banyak flora dan fauna yang unik.'),
(37, 13, 7, 4, 'Taman Nasional Bali Barat adalah tempat yang menakjubkan, tetapi membutuhkan waktu lebih lama untuk menjelajahinya.'),
(38, 14, 8, 5, 'Festival Jatiluwih sangat mengesankan. Keindahan sawah terasering Subak sangat menakjubkan.'),
(39, 14, 9, 5, 'Saya sangat menikmati festival ini, suasananya sangat khas dan alami.'),
(40, 15, 10, 5, 'Keraton Yogyakarta sangat indah. Arsitektur dan koleksi bersejarahnya sangat menarik.'),
(41, 15, 1, 4, 'Keraton Yogyakarta adalah tempat yang sangat kaya sejarah, tetapi beberapa bagian agak ramai dengan turis.'),
(42, 16, 2, 5, 'Festival Wayang Jogja Night sangat seru! Parade wayang dan kostum-kostumnya luar biasa.'),
(43, 16, 3, 4, 'Festival Wayang Jogja Night sangat menarik, tapi terlalu ramai dan sulit untuk mendapatkan tempat duduk yang baik.'),
(44, 17, 4, 5, 'Goa Jomblang luar biasa! Menuruni goa dan melihat cahaya surga sangat memukau.'),
(45, 17, 5, 4, 'Goa Jomblang sangat mengesankan, tetapi pendakian ke sana cukup menantang.'),
(46, 18, 6, 5, 'Festival Ratu Boko Sunset luar biasa! Pertunjukan seni dan matahari terbenamnya sangat indah.'),
(47, 18, 7, 5, 'Saya sangat menikmati Festival Ratu Boko Sunset, suasananya sangat romantis dan menyenangkan.'),
(48, 19, 8, 5, 'Pacu Jalur sangat seru dan tradisional! Pertunjukan yang sangat mengesankan dan penuh energi.'),
(49, 19, 9, 4, 'Festival Pacu Jalur sangat seru, tetapi kurangnya tempat duduk yang nyaman sedikit mengganggu.'),
(50, 20, 10, 5, 'Festival Megalithik Nias sangat menarik! Lompat batu dan tradisi megalitiknya sangat unik dan mengesankan.'),
(51, 30, 1, 5, 'Upacara Bersih Desa Sumber Anyar adalah pengalaman budaya yang sangat berkesan! Saya sangat menikmati prosesi adat dan tariannya yang penuh makna. Sangat direkomendasikan!'),
(52, 30, 2, 4, 'Festival yang sangat menarik, namun sedikit terlalu ramai. Meskipun begitu, prosesi dan budaya yang ditampilkan sangat luar biasa.'),
(53, 30, 3, 5, 'Festival yang benar-benar menunjukkan kekayaan budaya Jawa Timur. Pengalaman yang luar biasa dan saya sangat menikmatinya!'),
(54, 31, 4, 5, 'Festival Rujak Uleg adalah pengalaman kuliner yang unik. Dapat melihat proses pembuatan rujak dan menikmati berbagai macam rujak tradisional adalah hal yang menyenangkan.'),
(55, 31, 5, 4, 'Rujak Uleg di festival ini sangat lezat! Namun saya berharap bisa mencoba lebih banyak jenis rujak lainnya.'),
(56, 31, 6, 5, 'Festival yang menyenangkan dan menggugah selera. Mengikuti proses pembuatan rujak adalah pengalaman yang tak terlupakan.'),
(57, 32, 7, 5, 'Candi Singosari sangat mengesankan! Arsitekturnya luar biasa dan sejarah yang tersembunyi di baliknya sangat menarik untuk dipelajari.'),
(58, 32, 8, 4, 'Tempat yang sangat bersejarah. Pemandangannya indah, namun sedikit terhambat oleh keramaian pengunjung.'),
(59, 33, 9, 5, 'Jember Fashion Carnaval benar-benar spektakuler! Parade busananya luar biasa dan sangat kreatif. Saya sangat menikmati suasananya.'),
(60, 33, 10, 4, 'Festival busana yang sangat meriah, namun terlalu padat. Meski demikian, tetap worth it untuk dikunjungi karena keunikan dan keindahan desainnya.'),
(61, 34, 1, 5, 'Tari Gandrung Banyuwangi adalah pertunjukan yang sangat menghibur. Gerakan tarian dan musiknya sangat memikat.'),
(62, 34, 2, 4, 'Tari Gandrung benar-benar mengesankan! Saya berharap bisa melihat lebih banyak pertunjukan di tempat yang lebih luas.'),
(63, 35, 3, 5, 'Candi Penataran sangat megah. Relief yang ada sangat memukau dan saya sangat menikmati waktu saya di sana.'),
(64, 35, 4, 4, 'Candi yang sangat indah dengan sejarah yang dalam. Tempat ini sangat baik untuk pembelajaran, meskipun perlu lebih banyak informasi di sekitar candi.'),
(65, 36, 5, 5, 'Kampung Osing adalah pengalaman budaya yang sangat menarik. Mengunjungi rumah adat dan belajar tentang tradisi suku Osing sangat membuka wawasan.'),
(66, 36, 6, 4, 'Tempat yang sangat menarik dengan banyak kegiatan budaya. Namun, sedikit lebih ramai dari yang saya harapkan.'),
(67, 37, 7, 5, 'Kebun Raya Purwodadi adalah tempat yang sangat menenangkan. Flora yang ada sangat menarik untuk dipelajari. Tempat ini sangat cocok untuk belajar dan bersantai.'),
(68, 37, 8, 4, 'Kebun yang sangat luas dan penuh dengan berbagai jenis tanaman. Sebaiknya lebih banyak tanda atau informasi tentang flora yang ada di sini.'),
(69, 38, 9, 5, 'Candi Badut memiliki sejarah yang sangat menarik. Saya sangat menikmati penjelasan mengenai candi ini dan arsitektur yang ada di sana.'),
(70, 38, 10, 4, 'Candi Badut indah dan penuh sejarah, namun sayangnya tidak banyak informasi yang diberikan saat tur berlangsung.'),
(71, 39, 1, 5, 'Pantai Papuma benar-benar mempesona! Pemandangan matahari terbenam sangat luar biasa. Saya sangat menikmati waktu santai di sini.'),
(72, 39, 2, 4, 'Pantai yang sangat indah, namun agak sulit untuk mencapai lokasi tertentu. Tetapi pemandangan dan suasananya sangat worth it.'),
(73, 40, 3, 5, 'Air Terjun Tumpak Sewa adalah salah satu air terjun terindah yang pernah saya kunjungi. Pemandangan dan suasana alamnya luar biasa!'),
(74, 40, 4, 4, 'Air terjun yang menakjubkan, meskipun cukup ramai pengunjungnya. Suara gemuruh air sangat menenangkan.'),
(75, 41, 5, 5, 'Taman Ayun adalah pura yang sangat indah dengan arsitektur yang menakjubkan. Tempat yang sangat tenang dan damai.'),
(76, 41, 6, 4, 'Taman Ayun sangat indah, namun saya berharap lebih banyak informasi sejarah dan budaya yang diberikan di sekitar tempat tersebut.'),
(77, 42, 7, 5, 'Pura Besakih adalah pura yang sangat megah. Pemandangannya sangat menakjubkan, dan tempat ini memiliki suasana yang sangat tenang.'),
(78, 42, 8, 4, 'Pura Besakih sangat luas dan memiliki banyak area untuk dijelajahi. Sayangnya, cukup ramai dengan turis.'),
(79, 43, 9, 5, 'Pantai Sanur sangat tenang dan cocok untuk keluarga. Banyak kegiatan yang bisa dilakukan di sini, dan suasananya sangat santai.'),
(80, 43, 10, 4, 'Pantai yang indah, tetapi banyak turis. Namun, pantainya sangat cocok untuk bersantai dan menikmati suasana alam.'),
(81, 44, 1, 5, 'Pura Tanah Lot memiliki pemandangan yang spektakuler, terutama saat matahari terbenam. Tempat ini sangat indah dan penuh dengan sejarah.'),
(82, 44, 2, 4, 'Pura Tanah Lot sangat menarik, namun keramaian turis sedikit mengurangi kenyamanan berkunjung. Meski begitu, pemandangan lautnya luar biasa.'),
(83, 44, 3, 5, 'Sangat mengagumkan! Tempat ini benar-benar ikonik di Bali dengan pemandangan matahari terbenam yang memukau. Sangat dianjurkan untuk dikunjungi.'),
(84, 45, 4, 5, 'Monkey Forest Ubud adalah tempat yang sangat tenang dan indah. Selain bisa melihat monyet, saya menikmati sekali keindahan alam sekitarnya.'),
(85, 45, 5, 4, 'Monkey Forest sangat menarik, tetapi agak ramai. Namun, tempat ini memberikan pengalaman yang luar biasa dalam melihat monyet dan flora di sekitarnya.'),
(86, 45, 6, 5, 'Sangat menyenangkan berada di Monkey Forest. Alam yang asri dan monyet-monyet yang lucu menjadikan pengalaman ini sangat menyenangkan.'),
(87, 47, 7, 5, 'Festival Bali Arts benar-benar menampilkan seni Bali dengan sangat baik. Pameran dan pertunjukan seni tradisionalnya sangat mengesankan.'),
(88, 47, 8, 4, 'Festival Bali Arts sangat menarik dan memberikan wawasan budaya Bali. Namun, saya berharap ada lebih banyak ruang untuk menikmati pameran dengan lebih nyaman.'),
(89, 48, 9, 5, 'Galungan dan Kuningan adalah festival yang sangat berwarna dan penuh makna. Saya sangat menikmati prosesi upacara dan atmosfer budaya Bali.'),
(90, 48, 10, 4, 'Festival Galungan dan Kuningan sangat meriah dan penuh semangat. Namun, karena banyak orang, saya kesulitan untuk menikmati beberapa bagian dari acara.'),
(91, 49, 1, 5, 'Nyepi Day adalah pengalaman yang sangat unik. Pawai Ogoh-Ogoh sangat menarik dan keseluruhan pengalaman hari hening sangat mendalam.'),
(92, 49, 2, 4, 'Nyepi Day sangat unik dan penuh tradisi. Tetapi hari yang hening ini cukup menghambat aktivitas saya di Bali. Namun, saya menikmati parade Ogoh-Ogoh.'),
(93, 51, 3, 5, 'Bali Kite Festival adalah acara yang sangat menarik dengan banyak layang-layang warna-warni. Suasana di pantai Sanur sangat menyenangkan.'),
(94, 51, 4, 4, 'Festival Layang-layang di Bali ini luar biasa. Namun, saya berharap lebih banyak informasi tentang layang-layang dan sejarahnya bisa diberikan.'),
(95, 52, 5, 5, 'Desa Adat Dayak menawarkan pengalaman yang sangat kaya tentang budaya suku Dayak. Rumah panjangnya sangat menarik, dan penduduk lokal sangat ramah.'),
(96, 52, 6, 4, 'Desa Adat Dayak memberikan pengalaman budaya yang luar biasa. Saya hanya berharap bisa lebih lama di sini untuk mengeksplor lebih banyak lagi.'),
(97, 53, 7, 5, 'Taman Nasional Kutai adalah surga bagi pecinta alam! Melihat orangutan liar di habitat asli mereka adalah pengalaman yang luar biasa.'),
(98, 53, 8, 4, 'Taman Nasional Kutai sangat indah dan penuh kehidupan. Namun, akses ke beberapa area agak sulit dijangkau.'),
(99, 54, 9, 5, 'Museum Mulawarman adalah tempat yang sangat informatif dan mengesankan. Saya belajar banyak tentang sejarah Kerajaan Kutai.'),
(100, 54, 10, 4, 'Museum Mulawarman menyajikan sejarah yang sangat kaya. Sayangnya, beberapa koleksi tidak terawat dengan baik.'),
(101, 55, 1, 5, 'Kampung Warna-Warni di Samarinda adalah tempat yang penuh warna dan sangat instagramable! Setiap sudutnya sempurna untuk foto.'),
(102, 55, 2, 4, 'Kampung Warna-Warni sangat menarik dan penuh dengan seni. Namun, terlalu ramai sehingga sulit untuk menikmati keindahan kampung ini secara maksimal.'),
(103, 56, 3, 5, 'Festival Seni Kaltim adalah festival seni yang sangat bagus. Saya menikmati berbagai pertunjukan tradisional yang sangat menakjubkan.'),
(104, 56, 4, 4, 'Festival seni ini menampilkan banyak seni tradisional yang indah. Meski demikian, acara tersebut bisa lebih tertata agar lebih nyaman.'),
(105, 57, 5, 5, 'Festival Isen Mulang sangat meriah! Tari tradisional Dayak dan pertunjukan lainnya sangat mengesankan. Wajib dikunjungi jika ada di Kalimantan Tengah.'),
(106, 57, 6, 4, 'Festival Isen Mulang sangat meriah dan penuh warna. Namun, saya berharap acara ini bisa lebih tertata dengan lebih baik.'),
(107, 58, 7, 5, 'Pesta Adat Tumbilotohe adalah festival yang sangat unik. Menyaksikan ribuan lampion di sepanjang sungai sangat memukau.'),
(108, 58, 8, 4, 'Pesta Adat Tumbilotohe sangat indah, tetapi saya berharap bisa melihat lebih banyak atraksi yang lebih bervariasi.'),
(109, 59, 9, 5, 'Festival Hudoq adalah festival budaya yang luar biasa. Tari tradisional Dayak dan kostum makhluk mitologi sangat unik dan menarik.'),
(110, 59, 10, 4, 'Festival Hudoq sangat menyenangkan dan unik, namun kerumunan pengunjung membuat saya kurang bisa menikmati sepenuhnya.'),
(111, 60, 1, 5, 'Festival Budaya Banjar adalah pengalaman yang menyenangkan. Saya sangat menikmati tari-tarian khas Banjar yang indah.'),
(112, 60, 2, 4, 'Festival Budaya Banjar sangat bagus, namun terlalu ramai. Pameran seni dan kerajinan tradisional sangat menarik.'),
(113, 61, 3, 5, 'Festival Meriam Karbit adalah pengalaman unik. Menyaksikan perlombaan meriam karbit sangat menarik dan meriah.'),
(114, 61, 4, 4, 'Festival Meriam Karbit menyajikan tradisi yang luar biasa. Meski demikian, saya berharap bisa mendapatkan lebih banyak penjelasan tentang sejarah festival ini.'),
(115, 62, 5, 5, 'Candi Prambanan adalah candi yang sangat indah dan megah. Saya menikmati setiap bagian dari sejarah dan arsitektur yang ada di sana.'),
(116, 62, 6, 4, 'Candi Prambanan sangat menarik dan penuh sejarah. Namun, saya berharap ada lebih banyak informasi yang disediakan di sekitar candi.'),
(117, 63, 7, 5, 'Kota Gede adalah tempat yang sangat menarik. Saya belajar banyak tentang kerajinan perak dan sejarah Kerajaan Mataram Islam.'),
(118, 63, 8, 4, 'Kota Gede memiliki banyak sejarah menarik, namun tempat ini agak ramai. Saya berharap bisa lebih banyak berinteraksi dengan pengrajin perak.'),
(119, 64, 9, 5, 'Festival Sadranan di Pantai Parangtritis sangat mengesankan. Saya menikmati prosesi adat dan suasana yang penuh kebersamaan.'),
(120, 64, 10, 4, 'Festival Sadranan sangat bagus, tetapi keramaian membuat saya sulit menikmati beberapa bagian dari prosesi adat.'),
(121, 65, 1, 5, 'Festival Gebyar Batik adalah pengalaman seni batik yang luar biasa. Saya sangat menikmati parade batik dan pameran karya seni batik yang sangat indah.'),
(122, 65, 2, 4, 'Festival Gebyar Batik sangat menarik dan penuh warna, namun saya berharap bisa melihat lebih banyak kreasi batik tradisional yang lebih variatif.');

-- --------------------------------------------------------

--
-- Table structure for table `msttickettypes`
--

CREATE TABLE `msttickettypes` (
  `id` int(11) NOT NULL,
  `attraction_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msttickettypes`
--

INSERT INTO `msttickettypes` (`id`, `attraction_id`, `title`, `price`, `category`, `description`) VALUES
(1, 1, 'Tiket Masuk Festival', 30000, 'Umum (Semua Usia)', 'Tiket masuk untuk mengikuti seluruh rangkaian acara Festival Erau, termasuk pertunjukan seni, budaya, dan ritual adat.'),
(2, 1, 'Tiket VIP', 100000, 'Dewasa', 'Tiket VIP untuk menikmati festival dengan fasilitas premium.'),
(3, 1, 'Tiket Masuk Festival', 30000, 'Umum (Semua Usia)', 'Tiket masuk untuk mengikuti seluruh rangkaian acara Festival Erau, termasuk pertunjukan seni, budaya, dan ritual adat.'),
(4, 1, 'Tiket VIP', 100000, 'Dewasa', 'Tiket VIP untuk menikmati festival dengan fasilitas premium.'),
(5, 1, 'Tiket Masuk Festival', 30000, 'Umum (Semua Usia)', 'Tiket masuk untuk mengikuti seluruh rangkaian acara Festival Erau, termasuk pertunjukan seni, budaya, dan ritual adat.'),
(6, 1, 'Tiket VIP', 100000, 'Dewasa', 'Tiket VIP untuk menikmati festival dengan fasilitas premium.'),
(7, 2, 'Tiket Workshop Individu', 75000, 'Dewasa (13-99 tahun)', 'Tiket untuk individu yang ingin belajar membatik dari awal hingga selesai.'),
(8, 2, 'Tiket Workshop Grup', 120000, 'Grup', 'Tiket untuk grup (5 orang) dengan diskon spesial.'),
(9, 3, 'Tiket Masuk Desa', 25000, 'Semua Usia', 'Tiket untuk masuk ke Desa Penglipuran dan menikmati keindahan budaya dan alamnya.'),
(10, 3, 'Tiket Tur Privat', 150000, 'Dewasa', 'Tiket untuk tur privat yang dipandu oleh pemandu wisata lokal.'),
(11, 4, 'Tiket Festival Lompat Batu', 50000, 'Umum', 'Tiket untuk menyaksikan pertunjukan lompat batu dan tarian adat khas Nias.'),
(12, 4, 'Tiket VIP Lompat Batu', 100000, 'Dewasa', 'Tiket VIP untuk pengalaman menonton lebih eksklusif di area utama.'),
(13, 5, 'Tiket Festival Pasola', 100000, 'Semua Usia', 'Tiket untuk menyaksikan pertunjukan Pasola yang menegangkan.'),
(14, 5, 'Tiket VIP Pasola', 150000, 'Dewasa', 'Tiket VIP untuk pengalaman menonton lebih nyaman dan eksklusif.'),
(15, 6, 'Tiket Masuk Pulau Kakaban', 50000, 'Semua Usia', 'Tiket untuk menikmati keindahan Pulau Kakaban, termasuk snorkeling di danau ubur-ubur.'),
(16, 6, 'Tiket Private Boat', 150000, 'Private', 'Tiket untuk perjalanan private dengan boat menuju Pulau Kakaban.'),
(17, 7, 'Tiket Masuk Danau', 25000, 'Semua Usia', 'Tiket untuk menikmati keindahan danau dengan air jernih yang memukau.'),
(18, 7, 'Tiket Paket Snorkeling', 75000, 'Dewasa', 'Tiket dengan paket snorkeling di Danau Labuan Cermin.'),
(19, 8, 'Tiket Masuk Pulau Kei', 30000, 'Semua Usia', 'Tiket untuk menikmati keindahan Pulau Kei, dengan pantai pasir putih dan perairan biru jernih.'),
(20, 8, 'Tiket Tur Pulau Kei', 100000, 'Dewasa', 'Tiket untuk tur keliling Pulau Kei dengan pemandu wisata lokal.'),
(21, 9, 'Tiket Masuk Desa Wae Rebo', 325000, 'Dewasa', 'Tiket untuk masuk ke desa adat Wae Rebo dan menikmati rumah adat tradisional.'),
(22, 9, 'Tiket Tur Desa Wae Rebo', 500000, 'Private', 'Tiket untuk tur pribadi yang dipandu oleh pemandu lokal yang berpengalaman.'),
(23, 10, 'Tiket Masuk Pulau Kanawa', 100000, 'Semua Usia', 'Tiket untuk menikmati keindahan Pulau Kanawa yang tenang dan penuh keindahan alam.'),
(24, 10, 'Tiket Tur Pulau Kanawa', 250000, 'Dewasa', 'Tiket untuk tur pribadi keliling pulau Kanawa dengan pemandu lokal.'),
(25, 11, 'Tiket Masuk Festival', 20000, 'Semua Usia', 'Tiket untuk menyaksikan ribuan obor yang dinyalakan sebagai bagian dari tradisi keagamaan dan budaya masyarakat Bondowoso.'),
(26, 11, 'Tiket VIP Obor', 50000, 'Dewasa', 'Tiket VIP untuk menonton dari area terbaik, menikmati makan malam, dan akses khusus di dekat obor.'),
(27, 12, 'Tiket Masuk Kecak', 100000, 'Semua Usia', 'Tiket untuk menonton pertunjukan Tari Kecak dengan latar belakang matahari terbenam di Pura Uluwatu.'),
(28, 12, 'Tiket VIP Kecak', 150000, 'Dewasa', 'Tiket VIP dengan tempat duduk premium dan akses eksklusif selama pertunjukan.'),
(29, 13, 'Tiket Masuk Taman Nasional', 50000, 'Semua Usia', 'Tiket untuk menikmati keanekaragaman flora dan fauna di Taman Nasional Bali Barat.'),
(30, 14, 'Tiket Masuk Festival', 40000, 'Semua Usia', 'Tiket untuk menikmati festival yang merayakan keindahan Subak dan sistem irigasi tradisional Bali.'),
(31, 14, 'Tiket VIP Festival', 70000, 'Dewasa', 'Tiket VIP dengan akses ke area eksklusif dan tur pribadi melalui sawah terasering Jatiluwih.'),
(32, 15, 'Tiket Masuk Keraton', 25000, 'Semua Usia', 'Tiket untuk mengunjungi Keraton Yogyakarta dan menikmati koleksi bersejarah dan seni tradisional Jawa.'),
(33, 15, 'Tiket Tur Keraton', 60000, 'Dewasa', 'Tiket tur privat dengan pemandu wisata yang akan menjelaskan sejarah dan kebudayaan Keraton Yogyakarta.'),
(34, 16, 'Tiket Masuk Festival Wayang', 30000, 'Semua Usia', 'Tiket untuk menyaksikan parade wayang dan pertunjukan seni lainnya di Jogja Night Carnival.'),
(35, 17, 'Tiket Masuk Goa', 50000, 'Semua Usia', 'Tiket untuk mengeksplorasi Goa Jomblang dan menyaksikan fenomena Cahaya Surga di dalam goa.'),
(36, 17, 'Tiket Tur Goa Jomblang', 150000, 'Dewasa', 'Tiket untuk tur dengan pemandu yang membawa Anda turun ke dalam goa dengan tali dan menjelajahi keindahan goa vertikal.'),
(37, 18, 'Tiket Masuk Festival', 75000, 'Semua Usia', 'Tiket untuk menikmati pertunjukan seni sambil menyaksikan matahari terbenam di situs Ratu Boko.'),
(38, 18, 'Tiket VIP Sunset', 100000, 'Dewasa', 'Tiket VIP untuk menikmati sunset dari tempat duduk premium dan akses langsung ke area VIP.'),
(39, 19, 'Tiket Festival Pacu Jalur', 60000, 'Semua Usia', 'Tiket untuk menyaksikan lomba perahu tradisional dengan berbagai pertunjukan seni khas Riau.'),
(40, 20, 'Tiket Festival Megalithik', 55000, 'Semua Usia', 'Tiket untuk menikmati pertunjukan budaya megalitik dan ritual lompat batu di Nias.'),
(41, 20, 'Tiket VIP Festival', 100000, 'Dewasa', 'Tiket VIP dengan akses ke area utama festival dan pengalaman dekat dengan pertunjukan lompat batu.'),
(42, 20, 'Tiket Paket Lengkap', 150000, 'Dewasa', 'Tiket lengkap untuk mengikuti seluruh rangkaian acara Festival Megalithik, termasuk tur budaya dan makan malam.'),
(43, 21, 'Tiket Masuk Festival', 70000, 'Semua Usia', 'Tiket untuk menikmati parade busana kerajaan dan pertunjukan seni tradisional di Festival Keraton Nusantara.'),
(44, 21, 'Tiket VIP Festival', 120000, 'Dewasa', 'Tiket VIP untuk menikmati pertunjukan dari area terbaik dengan fasilitas premium.'),
(45, 22, 'Tiket Masuk Istano Basa', 50000, 'Semua Usia', 'Tiket untuk mengunjungi Istano Basa Pagaruyung, replika istana kerajaan Minangkabau dengan arsitektur khas dan koleksi benda bersejarah.'),
(46, 22, 'Tiket Tur Istano Basa', 100000, 'Dewasa', 'Tiket untuk tur privat dengan pemandu wisata yang menjelaskan sejarah dan kebudayaan Istano Basa Pagaruyung.'),
(47, 23, 'Tiket Masuk Desa Dokan', 75000, 'Semua Usia', 'Tiket untuk menikmati kehidupan sehari-hari masyarakat Karo di desa adat Dokan dengan rumah tradisional khas Karo.'),
(48, 24, 'Tiket Masuk Benteng', 30000, 'Semua Usia', 'Tiket untuk mengunjungi Benteng Marlborough, peninggalan kolonial Inggris yang terletak di Kota Bengkulu.'),
(49, 25, 'Tiket Masuk Rumah Limas', 40000, 'Semua Usia', 'Tiket untuk mengunjungi rumah adat Limas Palembang yang memiliki arsitektur unik dan nilai budaya yang tinggi.'),
(50, 26, 'Tiket Masuk Kampung Adat', 60000, 'Semua Usia', 'Tiket untuk mengunjungi Kampung Adat Bawomataluo yang terkenal dengan rumah tradisional Nias dan tradisi lompat batu.'),
(51, 26, 'Tiket Tur Kampung Adat', 100000, 'Dewasa', 'Tiket untuk tur privat yang membawa Anda lebih dalam mengenal budaya dan kehidupan masyarakat setempat.'),
(52, 27, 'Tiket Masuk Pulau Derawan', 50000, 'Semua Usia', 'Tiket untuk menikmati keindahan Pulau Derawan yang tenang dengan pasir putih dan perairan biru jernih.'),
(53, 27, 'Tiket Diving Pulau Derawan', 200000, 'Dewasa', 'Tiket untuk diving dan mengeksplorasi keindahan bawah laut Pulau Derawan yang terkenal dengan terumbu karang dan biota lautnya.'),
(54, 28, 'Tiket Masuk Borobudur', 250000, 'Semua Usia', 'Tiket untuk masuk ke Candi Borobudur, situs warisan dunia yang merupakan salah satu keajaiban dunia.'),
(55, 28, 'Tiket VIP Borobudur', 500000, 'Dewasa', 'Tiket VIP dengan akses khusus ke area sekitar candi dan tur pribadi yang lebih mendalam tentang sejarah Borobudur.'),
(56, 29, 'Tiket Masuk Kawah Ijen', 75000, 'Semua Usia', 'Tiket untuk trekking ke Kawah Ijen yang terkenal dengan api birunya dan danau kawahnya yang unik.'),
(57, 29, 'Tiket Tur Kawah Ijen', 200000, 'Dewasa', 'Tiket untuk tur yang dipandu oleh pemandu lokal untuk menjelajahi Kawah Ijen dan melihat proses penambangan belerang yang dilakukan oleh para pekerja.'),
(58, 29, 'Tiket VIP Kawah Ijen', 400000, 'Dewasa', 'Tiket VIP dengan akses lebih cepat ke puncak Kawah Ijen dan pengalaman lebih eksklusif.'),
(59, 30, 'Tiket Umum Festival', 30000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Upacara Bersih Desa Sumber Anyar'),
(60, 30, 'Tiket VIP Festival', 60000, 'VIP', 'Tiket VIP untuk acara Upacara Bersih Desa Sumber Anyar'),
(61, 31, 'Tiket Umum Festival', 25000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Rujak Uleg'),
(62, 31, 'Tiket VIP Festival', 50000, 'VIP', 'Tiket VIP untuk acara Festival Rujak Uleg'),
(63, 32, 'Tiket Dewasa Atraksi', 25000, 'Dewasa', 'Tiket dewasa untuk atraksi Candi Singosari'),
(64, 32, 'Tiket Anak Atraksi', 12500, 'Anak-anak', 'Tiket anak-anak untuk atraksi Candi Singosari'),
(65, 33, 'Tiket Umum Festival', 100000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Jember Fashion Carnaval'),
(66, 33, 'Tiket VIP Festival', 200000, 'VIP', 'Tiket VIP untuk acara Festival Jember Fashion Carnaval'),
(67, 34, 'Tiket Dewasa Atraksi', 40000, 'Dewasa', 'Tiket dewasa untuk atraksi Tari Gandrung Banyuwangi'),
(68, 34, 'Tiket Anak Atraksi', 20000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Tari Gandrung Banyuwangi'),
(69, 35, 'Tiket Dewasa Atraksi', 25000, 'Dewasa', 'Tiket dewasa untuk atraksi Candi Penataran'),
(70, 35, 'Tiket Anak Atraksi', 12500, 'Anak-anak', 'Tiket anak-anak untuk atraksi Candi Penataran'),
(71, 36, 'Tiket Dewasa Atraksi', 50000, 'Dewasa', 'Tiket dewasa untuk atraksi Kampung Osing'),
(72, 36, 'Tiket Anak Atraksi', 25000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Kampung Osing'),
(73, 37, 'Tiket Dewasa Atraksi', 30000, 'Dewasa', 'Tiket dewasa untuk atraksi Kebun Raya Purwodadi'),
(74, 37, 'Tiket Anak Atraksi', 15000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Kebun Raya Purwodadi'),
(75, 38, 'Tiket Dewasa Atraksi', 20000, 'Dewasa', 'Tiket dewasa untuk atraksi Candi Badut'),
(76, 38, 'Tiket Anak Atraksi', 10000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Candi Badut'),
(77, 39, 'Tiket Dewasa Atraksi', 25000, 'Dewasa', 'Tiket dewasa untuk atraksi Pantai Papuma'),
(78, 39, 'Tiket Anak Atraksi', 12500, 'Anak-anak', 'Tiket anak-anak untuk atraksi Pantai Papuma'),
(79, 40, 'Tiket Dewasa Atraksi', 20000, 'Dewasa', 'Tiket dewasa untuk atraksi Air Terjun Tumpak Sewa'),
(80, 40, 'Tiket Anak Atraksi', 10000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Air Terjun Tumpak Sewa'),
(81, 41, 'Tiket Dewasa Atraksi', 30000, 'Dewasa', 'Tiket dewasa untuk atraksi Taman Ayun'),
(82, 41, 'Tiket Anak Atraksi', 15000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Taman Ayun'),
(83, 42, 'Tiket Dewasa Atraksi', 50000, 'Dewasa', 'Tiket dewasa untuk atraksi Pura Besakih'),
(84, 42, 'Tiket Anak Atraksi', 25000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Pura Besakih'),
(85, 43, 'Tiket Dewasa Atraksi', 20000, 'Dewasa', 'Tiket dewasa untuk atraksi Pantai Sanur'),
(86, 43, 'Tiket Anak Atraksi', 10000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Pantai Sanur'),
(87, 44, 'Tiket Dewasa Atraksi', 25000, 'Dewasa', 'Tiket dewasa untuk atraksi Pura Tanah Lot'),
(88, 44, 'Tiket Anak Atraksi', 12500, 'Anak-anak', 'Tiket anak-anak untuk atraksi Pura Tanah Lot'),
(89, 45, 'Tiket Dewasa Atraksi', 50000, 'Dewasa', 'Tiket dewasa untuk atraksi Monkey Forest Ubud'),
(90, 45, 'Tiket Anak Atraksi', 25000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Monkey Forest Ubud'),
(91, 47, 'Tiket Umum Festival', 50000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Bali Arts'),
(92, 47, 'Tiket VIP Festival', 100000, 'VIP', 'Tiket VIP untuk acara Festival Bali Arts'),
(93, 48, 'Tiket Umum Festival', 20000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Galungan dan Kuningan'),
(94, 48, 'Tiket VIP Festival', 40000, 'VIP', 'Tiket VIP untuk acara Galungan dan Kuningan'),
(95, 49, 'Tiket Umum Festival', 0, 'Umum (Semua Usia)', 'Tiket gratis untuk acara Nyepi Day'),
(96, 49, 'Tiket VIP Festival', 0, 'VIP', 'Tiket VIP untuk acara Nyepi Day'),
(97, 51, 'Tiket Umum Festival', 25000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Bali Kite Festival'),
(98, 51, 'Tiket VIP Festival', 50000, 'VIP', 'Tiket VIP untuk acara Bali Kite Festival'),
(99, 52, 'Tiket Dewasa Atraksi', 40000, 'Dewasa', 'Tiket dewasa untuk atraksi Desa Adat Dayak'),
(100, 52, 'Tiket Anak Atraksi', 20000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Desa Adat Dayak'),
(101, 53, 'Tiket Dewasa Atraksi', 50000, 'Dewasa', 'Tiket dewasa untuk atraksi Taman Nasional Kutai'),
(102, 53, 'Tiket Anak Atraksi', 25000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Taman Nasional Kutai'),
(103, 54, 'Tiket Dewasa Atraksi', 25000, 'Dewasa', 'Tiket dewasa untuk atraksi Museum Mulawarman'),
(104, 54, 'Tiket Anak Atraksi', 12500, 'Anak-anak', 'Tiket anak-anak untuk atraksi Museum Mulawarman'),
(105, 55, 'Tiket Dewasa Atraksi', 20000, 'Dewasa', 'Tiket dewasa untuk atraksi Kampung Warna-Warni Samarinda'),
(106, 55, 'Tiket Anak Atraksi', 10000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Kampung Warna-Warni Samarinda'),
(107, 56, 'Tiket Dewasa Atraksi', 30000, 'Dewasa', 'Tiket dewasa untuk atraksi Festival Seni Kaltim'),
(108, 56, 'Tiket Anak Atraksi', 15000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Festival Seni Kaltim'),
(109, 57, 'Tiket Umum Festival', 40000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Isen Mulang'),
(110, 57, 'Tiket VIP Festival', 80000, 'VIP', 'Tiket VIP untuk acara Festival Isen Mulang'),
(111, 58, 'Tiket Umum Festival', 20000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Pesta Adat Tumbilotohe'),
(112, 58, 'Tiket VIP Festival', 40000, 'VIP', 'Tiket VIP untuk acara Pesta Adat Tumbilotohe'),
(113, 59, 'Tiket Umum Festival', 30000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Hudoq'),
(114, 59, 'Tiket VIP Festival', 60000, 'VIP', 'Tiket VIP untuk acara Festival Hudoq'),
(115, 60, 'Tiket Umum Festival', 15000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Budaya Banjar'),
(116, 60, 'Tiket VIP Festival', 30000, 'VIP', 'Tiket VIP untuk acara Festival Budaya Banjar'),
(117, 61, 'Tiket Umum Festival', 10000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Meriam Karbit'),
(118, 61, 'Tiket VIP Festival', 20000, 'VIP', 'Tiket VIP untuk acara Festival Meriam Karbit'),
(119, 62, 'Tiket Dewasa Atraksi', 50000, 'Dewasa', 'Tiket dewasa untuk atraksi Candi Prambanan'),
(120, 62, 'Tiket Anak Atraksi', 25000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Candi Prambanan'),
(121, 63, 'Tiket Dewasa Atraksi', 20000, 'Dewasa', 'Tiket dewasa untuk atraksi Kota Gede'),
(122, 63, 'Tiket Anak Atraksi', 10000, 'Anak-anak', 'Tiket anak-anak untuk atraksi Kota Gede'),
(123, 64, 'Tiket Umum Festival', 20000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Sadranan'),
(124, 64, 'Tiket VIP Festival', 40000, 'VIP', 'Tiket VIP untuk acara Festival Sadranan'),
(125, 65, 'Tiket Umum Festival', 30000, 'Umum (Semua Usia)', 'Tiket masuk umum untuk acara Festival Gebyar Batik'),
(126, 65, 'Tiket VIP Festival', 60000, 'VIP', 'Tiket VIP untuk acara Festival Gebyar Batik');

-- --------------------------------------------------------

--
-- Table structure for table `msusercart`
--

CREATE TABLE `msusercart` (
  `id` int(11) NOT NULL,
  `ticket_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msusercart`
--

INSERT INTO `msusercart` (`id`, `ticket_type_id`, `user_id`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 3, 1, 1),
(3, 3, 2, 1),
(4, 4, 2, 2),
(5, 4, 3, 3),
(6, 4, 3, 1),
(7, 6, 4, 2),
(8, 2, 4, 1),
(9, 2, 5, 2),
(10, 7, 6, 1),
(11, 5, 7, 3),
(12, 9, 8, 1),
(13, 10, 9, 2),
(14, 8, 10, 1),
(15, 1, 1, 3),
(16, 6, 5, 2),
(17, 11, 1, 3),
(26, 44, 14, 1),
(27, 19, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `msusers`
--

CREATE TABLE `msusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msusers`
--

INSERT INTO `msusers` (`id`, `name`, `password`, `email`) VALUES
(1, 'Andi Wijaya', 'hashed_password_1', 'andi.wijaya@example.com'),
(2, 'Siti Nurhaliza', 'hashed_password_2', 'siti.nurhaliza@example.com'),
(3, 'Budi Santoso', 'hashed_password_3', 'budi.santoso@example.com'),
(4, 'Dewi Lestari', 'hashed_password_4', 'dewi.lestari@example.com'),
(5, 'Rudi Hartono', 'hashed_password_5', 'rudi.hartono@example.com'),
(6, 'Maya Sari', 'hashed_password_6', 'maya.sari@example.com'),
(7, 'Taufik Hidayat', 'hashed_password_7', 'taufik.hidayat@example.com'),
(8, 'Indah Pertiwi', 'hashed_password_8', 'indah.pertiwi@example.com'),
(9, 'Joko Prasetyo', 'hashed_password_9', 'joko.prasetyo@example.com'),
(10, 'Rina Puspita', 'hashed_password_10', 'rina.puspita@example.com'),
(11, 'John Doe', '$2y$12$1IQcED5f4goUTMUGmTGg/.VpyK/NIwezQOT44Jzk4.vU5bOabjBUO', 'john.doe@example.com'),
(14, 'Madeline', 'Midi3005', 'midiline30@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6QxzhK0SEnmtag5zit9i3T9IycrbOqNbOhmBhDBS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGxWWGlPOFZmRng4Y29BV3kwU1hncmdZZHlkZDBqZ1RWT0Yya3VMcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9UYXBwYWtudXNhZGV0YWlsQXRyYWN0aW9uP2ZpbmQ9VHJhZGlzaSUyMFBhc29sYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749891023),
('ogTIbSm655BJvgLJMMDJbiWL5yPbcinMr4SEgOrz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRENIWmdqOWlIQURCaDFMZms3VElhT3JrZmVXcFZOQ3h3VWx4RFFSZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9UYXBha251c2EiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749830382),
('wiAEeA6FRKscVYzj3ihjDyf5YESNvOEcxo92IhA6', 14, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWWUzSXpDaWdTOFpyMkxSZVR2SE1WQ2ZNQ0tUejZYdXY3NFg1QUJDSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTQ7fQ==', 1749537759);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msattractions`
--
ALTER TABLE `msattractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mshistory`
--
ALTER TABLE `mshistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_type_id` (`ticket_type_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `msreviews`
--
ALTER TABLE `msreviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attraction_id` (`attraction_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `msttickettypes`
--
ALTER TABLE `msttickettypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attraction_id` (`attraction_id`);

--
-- Indexes for table `msusercart`
--
ALTER TABLE `msusercart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_type_id` (`ticket_type_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `msusers`
--
ALTER TABLE `msusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `msattractions`
--
ALTER TABLE `msattractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `mshistory`
--
ALTER TABLE `mshistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `msreviews`
--
ALTER TABLE `msreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `msttickettypes`
--
ALTER TABLE `msttickettypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `msusercart`
--
ALTER TABLE `msusercart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `msusers`
--
ALTER TABLE `msusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mshistory`
--
ALTER TABLE `mshistory`
  ADD CONSTRAINT `mshistory_ibfk_1` FOREIGN KEY (`ticket_type_id`) REFERENCES `msttickettypes` (`id`),
  ADD CONSTRAINT `mshistory_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `msusers` (`id`);

--
-- Constraints for table `msreviews`
--
ALTER TABLE `msreviews`
  ADD CONSTRAINT `msreviews_ibfk_1` FOREIGN KEY (`attraction_id`) REFERENCES `msattractions` (`id`),
  ADD CONSTRAINT `msreviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `msusers` (`id`);

--
-- Constraints for table `msttickettypes`
--
ALTER TABLE `msttickettypes`
  ADD CONSTRAINT `msttickettypes_ibfk_1` FOREIGN KEY (`attraction_id`) REFERENCES `msattractions` (`id`);

--
-- Constraints for table `msusercart`
--
ALTER TABLE `msusercart`
  ADD CONSTRAINT `msusercart_ibfk_1` FOREIGN KEY (`ticket_type_id`) REFERENCES `msttickettypes` (`id`),
  ADD CONSTRAINT `msusercart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `msusers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
