-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2022 at 05:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dstokel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2a$12$MxKT8dLompES1oir0KzLQeWlY9pGbSwCVTZqKTx9qJH5PbNu2jZUS', 1, NULL, '2020-05-08 07:21:15', '2020-06-03 22:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `web_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'Banking E-Wallet',
  `currency` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'USD',
  `emailver` int(11) DEFAULT 0,
  `color_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '#fff',
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Berlin,Germany',
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'support@example.com',
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0123654789',
  `copyright_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'All Rights Reserved',
  `banner_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_about1_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_about1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_about1_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_about2_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_about2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_about2_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invest_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invest_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invest_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investor_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investor_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investor_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_template` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_api` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `esender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_script` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `livechat_script` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bal_trans_fixed_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `bal_trans_percentage_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verification` tinyint(1) NOT NULL DEFAULT 0,
  `template_sel` int(11) DEFAULT 1,
  `g_captcha` tinyint(4) NOT NULL,
  `captcha_key_one` int(11) NOT NULL,
  `min_ntr_deposit` int(4) DEFAULT 0,
  `currencies_val` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `web_name`, `currency`, `emailver`, `color_code`, `contact_address`, `contact_email`, `contact_phone`, `copyright_text`, `banner_header`, `banner_body`, `banner_footer`, `about_head`, `about_title`, `about_body`, `about_video_url`, `single_about1_icon`, `single_about1_title`, `single_about1_description`, `single_about2_icon`, `single_about2_title`, `single_about2_description`, `invest_head`, `invest_title`, `invest_description`, `investor_head`, `investor_title`, `investor_description`, `footer_text`, `email_template`, `sms_api`, `created_at`, `updated_at`, `esender`, `comment_script`, `livechat_script`, `bal_trans_fixed_charge`, `bal_trans_percentage_charge`, `email_verification`, `template_sel`, `g_captcha`, `captcha_key_one`, `min_ntr_deposit`, `currencies_val`) VALUES
(1, 'Intaro', 'NTR', 1, 'DD1C63', 'Jalan Buluh Indah No. 91, Denpasar Utara, Bali', 'contact@intaro.id', NULL, 'All Rights Reserved @2021. Develop By <a href=\"https://bede.in\" target=\"_blank\">BeDev</a>', 'Welcome to Intaro Group', 'Best Crypto Asset Company Since 2013', 'Perusahaan yang dirancang sejak 2013, Intaro Group membuat sejarah baru menjadi mata uang tunggal dunia dengan cryptocurrency (NTR) sebagai aset yang bisa ditukar dengan berbagai keperluan hidup.', 'Tentang Kami', 'PT. Intaroo Lestari Phusaka', '<p><b>Intaro Group</b> atau <b>PT. Intaroo Lestari Phusaka</b> merupakan perusahaan yang bergerak di bidang mata uang digital/cryptocurrency yang memiliki crypto-nya sendiri bernama INTARO (NTR). Satu-satunya cryptocurrency yang memiliki ekosistem di dunia, dengan keamanan yang tinggi, transaksi cepat, aman, mudah, serta biaya administrasi yang sangat rendah. </p>\r\n	<p>Dengan membawa visi misi menjadi mata uang tunggal di dunia, Intaro Group mendirikan beberapa anak perusahaan yang mencakupi segala lini kehidupan manusia.</p>\r\n	Bersama Intaro Cryptocurrency, <b>DUNIA DALAM GENGGAMAN!</b>', 'https://www.youtube.com/watch?v=_51KXfwcPMs', NULL, 'Visi', 'Menjadi mata uang tunggal di dunia pada tahun 2027', NULL, 'Misi', '<p>1. Menjadi alat transaksi dengan kecepatan tinggi</p>\r\n<p>2. Menjadi alat transaksi dengan biaya termurah</p>\r\n<p>3. Menjadi alat transaksi dengan keamanan tertinggi</p>', 'Investon Price', 'Grab Our Mega Package', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many', 'Top Investors', 'Fast Smart think', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web', NULL, 'Hi {{name}}, {{message}} , Thank you', NULL, NULL, '2022-01-05 06:35:18', 'do-no-reply@example.com', '<div id=\"fb-root\"></div>\r\n                                    <script>(function(d, s, id) {\r\n                                            var js, fjs = d.getElementsByTagName(s)[0];\r\n                                            if (d.getElementById(id)) return;\r\n                                            js = d.createElement(s); js.id = id;\r\n                                            js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1421567158073949\";\r\n                                            fjs.parentNode.insertBefore(js, fjs);\r\n                                        }(document, \'script\', \'facebook-jssdk\'));\r\n                                    </script>\r\n                                    <div class=\"fb-comments\" data-href=\"{{ url()->current() }}\" data-width=\"100%\" data-numposts=\"5\"></div>', '<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5fe47baddf060f156a8fd99b/1eqa868u9\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>', '0,25', '0.25', 0, 1, 0, 0, 100, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(15, 'Bangla', 'bn', '2021-01-09 16:56:29', '2021-01-10 14:54:30'),
(16, 'Hindi', 'in', '2021-01-09 18:32:41', '2021-01-09 18:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routes` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(4) NOT NULL,
  `is_parent` int(4) NOT NULL,
  `is_child` int(4) NOT NULL,
  `aktif` int(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `routes`, `content_post`, `description`, `url`, `urutan`, `is_parent`, `is_child`, `aktif`, `created_at`, `updated_at`) VALUES
(4, 'Company Profile', 'menu-area.edit', '', '<p><b>Intaro Cryptocurrency</b> adalah mata uang digital dengan hitungan algoritma menggunakan enskripsi kriptografi untuk keamanan dan anti pemalsuan. Sebuah EVOLUSI TRANSACTION SYSTEM yang mengakomodir segala transaksi baik dalam jumlah besar maupun kecil, bahkan hingga antar negara dengan cepat dan aman, serta biaya administrasi rendah.</p>\r\n<p>Dengan sistem keamanan menggunakan teknologi Blockchain, Intaro Cryptocurrency siap bersaing dan membawa perubahan untuk menjembatani setiap proses transaksi yang ada, tanpa harus bergantung pada kurs mata uang dunia. Adanya teknologi dari Intaro Group, membuat setiap transaksi menjadi lebih aman karna peer-to-peer atau bebas dari pihak ketiga membuat privasi mu lebih terjaga.</p>\r\n<p>Intaro Group menciptakan <b>Crypto Intaro (NTR)</b> tentunya dengan ekosistem tersendiri, berbagai jenis anak perusahaan didirikan untuk memenuhi kebutuhan hidup dan menjadi merchants daripada INTARO(NTR) CRYPTOCURRENCY</p>', 'single/Menu/4', 1, 0, 1, 1, '2021-12-15 07:34:32', '2021-12-13 01:17:06'),
(5, 'Core Team', 'coreteam.index', '', '<body>\r\n<table border=\"3\">\r\n<tr><img src=\"https://depokrayanews.com/wp-content/uploads/2020/01/I-Wayan-Sandiyasa-Arsada.jpg\" width=\"354\" height=\"472\" /></tr>\r\n<td><b>CEO/Founder Intaro Group<b></td>\r\n<td>I Wyn. Sandiasa</td>\r\n\r\n<tr><img src=\"C:\\Users\\ASUS\\pictures/magic kingdom.jpg\" width=\"354\" height=\"472\"/></tr>\r\n<td><b>Presiden Direktur</b></td>\r\n<td>Pt. Ayu Intan R.D</td>\r\n\r\n<tr><img src=\"blob:https://web.whatsapp.com/0d9e4b34-4f0a-4076-9e21-5eda19384213\" width=\"354\" height=\"472\" /></tr>\r\n<td><b>Managing Direktur</b></td>\r\n<td>Kd. Harmoni</td>\r\n\r\n<tr></tr>\r\n<td><b>Product Manager</b></td>\r\n<td>Kd. Antonius Suryanto</td>\r\n</body>', 'coreteam-intaro', 2, 0, 1, 1, '2021-12-15 07:34:37', '2021-12-14 04:50:46'),
(6, 'Project', 'project.index', '', '<b>PT. Mitra Bisnis Eksekutif</b>\r\n<p>MBX perusahaan yang bergerak di bidang aplikasi online</p>\r\n<b>PT. Intaro Bangun Persada</b>\r\n<p>IBP perusahaan yang bergerak di bidang property</p>\r\n<b>PT. Aura Ratu Pertiwi</b>\r\n<p>ARP perusahaan yang bergerak di bidang kecantikan dan kesehatan</p>\r\n<b>PT. Sukma Kaltim Phusaka</b>\r\n<p>SKP perusahaan yang bergerak di bidang tambang batubara</p>\r\n<b>PT. Kumala Bakul Rejeki</b>\r\n<p>ABI perusahaan yang bergerak di bidang kuliner</p>\r\n<b>PT. Winnerbank Digital Exchange</b>\r\n<p>WDE perusahaan yang bergerak di bidang bank digital</p>\r\n<b>PT. Intaro Chemical Industri</b>\r\n<p>ICI perusahaan yang bergerak di bidang cat</p>\r\n<b>PT. Sandi International Picture</b>\r\n<p>SIP perusahaan yang bergerak di bidang perfilman</p>\r\n<b>PT. Intaro Baruna Nusantara</b>\r\n<p>IBN perusahaan yang bergerak di bidang perikanan</p>\r\n<b>PT. Intaro Motor Company</b>\r\n<p>IMC perusahan yang bergerak di bidang otomotif</p>', 'project-intaro', 3, 0, 0, 1, '2021-12-15 07:34:42', '2021-12-14 02:45:50'),
(7, 'Merchant', 'merchant-area.index', '', '<p>Merchants kami menggunakan <b>NTR</b> sebagai alat bertransaksi, untuk dapat mengaktivasi layanan segera gabung dan miliki NTR saat ini juga. Dan nikmati kemudahan-kemudahannya.</p>\r\n<p><b>1. Aplikasi Intaromall</b>\r\n<b>Intaromall</b> merupakan aplikasi perpaduan e-commerce dan marketplace dengan sistem terbaru, tampilan baru, dan penghasilan yang baru. Aplikasi besutan MBX ini, mengutamakan produk-produk UMKM agar bisa bersaing di kancah internasional dengan teknologi terbaru. Segera daftarkan dirimu menjadi salah satu vendor dan pengguna di Intaromall dan dapatkan selalu cashback setiap bertransaksi</p>\r\n<p><b>2. Aplikasi MyTrip</b>\r\n<b>MyTrip</b> merupakan aplikasi PPOB (Payment Point Online Banking) dan pemesanan tiket pesawat yang menjadi salah satu ekosistem dari INTARO GROUP. Kamu bisa melakukan segala pembayaran secara online tanpa harus keluar rumah, menggunakan NTR sebagai alat tukar pembayaran menjadi lebih mudah dengan harga pusat.</p>\r\n<p><b>3. Aplikasi @ke</b>\r\n<b>@ke</b> adalah aplikasi transport online dimana semua jenis transportasi akan didukung untuk masuk ke ranah teknologi. Kami menyediakan segala macam layanan transportasi dari bike, car, cargo, taxi, bus, bahkan angkot sekalipun. Semua layanan transportasi akan terus dikembangkan sehingga menjadi aplikasi transportasi online terbesar dan terlengkap. Tentunya menggunakan NTR sebagai alat tukar pembayarannya.</p>\r\n<p><b>4. Aplikasi Comel</b>\r\n<b>Comel</b> merupakan aplikasi resto online dengan cita rasa rumahan. Bagi kamu yang jago masak, hobby masak, pecinta kuliner wajib download aplikasi ini. Aplikasi yang membantu semua usahawan untuk mengembangkan sayap tanpa modal banyak dengan membuka lapak. Hanya dengan satu genggaman kamu bisa berpenghasilan lebih mudah.</p>\r\n<p><b>5. Aplikasi Melali</b>\r\n<b>Melali</b> adalah aplikasi online untuk booking hotel tanpa harus mendatangi hotel secara langsung. Tersedia layanan penginapan mulai dari villa, penginapan, hotel, resort, dan masih banyak lagi. Buruan download dan gunakan NTR mu untuk bertransaksi.</p>\r\n<p><b> 6. Aplikasi Awake</b>\r\n<b>Awake</b> adalah aplikasi sosial media yang bisa kamu gunakan untuk berinteraksi, post kegiatan mu, dan bangun koneksi pribadimu. Sosial media yang terdapat segala macam aplikasi dari MBX untuk mempermudah dirimu.</p>', 'merchant-intaro', 4, 0, 0, 1, '2021-12-15 07:34:46', '2021-12-14 02:49:51'),
(8, 'Gallery', 'gallery-area.index', '', 'Gallery Photo', 'gallery-intaro', 5, 0, 1, 1, '2021-12-15 07:34:53', NULL),
(9, 'Road Map', 'roadmaps-area.index', '', '', 'roadmaps-intaro', 6, 0, 0, 1, '2021-12-15 05:39:10', '2021-12-15 05:39:10'),
(10, 'BlockChain', 'block-chain', '-', '', '#', 7, 0, 0, 0, '2021-12-15 05:39:10', '2021-12-15 05:39:10'),
(11, 'Corporate', 'gallery-area.index', '#', '#', '#', 2, 1, 0, 1, '2021-12-22 02:31:59', '2021-12-22 02:31:59'),
(12, 'White Paper', 'whitepaper.edit', '#', '#', 'whitepaper-intaro', 8, 0, 0, 1, '2022-01-06 02:25:46', '2022-01-06 02:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, '61b1bca946bca139.png', 'PROMO TERBATAS!', '<p>Mau Umroh gratis? berinvestasi? bertransaksi mudah? biaya murah? BISA!</p>\r\n<p> Join INTARO (NTR) dan dapatkan paket <b>UMROH GRATIS</b> setelah masak kontrak kamu berakhir. Promo Terbatas lo', '2020-05-18 08:25:15', '2021-12-09 08:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sosmed` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` int(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `sosmed`, `link`, `aktif`, `created_at`, `updated_at`) VALUES
(2, 'icon-social-instagram', 'Instagram', 'https://www.instagram.com/dbenang', 1, '2020-05-18 09:18:00', '2022-02-28 03:02:58'),
(3, ' icon-social-facebook', 'Facebook', '#', 1, '2020-05-18 09:18:25', '2021-12-14 04:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bed_type`
--

CREATE TABLE `tb_bed_type` (
  `id_bed_type` int(4) NOT NULL,
  `nama_bed` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bed_type`
--

INSERT INTO `tb_bed_type` (`id_bed_type`, `nama_bed`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Single bed', '2022-03-07 16:30:46', '2022-03-07 16:30:46', 1),
(2, 'Double Bed', '2022-03-07 16:30:46', '2022-03-07 16:30:46', 1),
(3, 'tes bed new', '2022-03-08 11:07:44', '2022-03-08 11:12:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(4) NOT NULL,
  `judul_berita` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `id_kategori_berita` int(4) NOT NULL,
  `isi_berita` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  `video` varchar(250) NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `tanggal_berita` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `hari` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `slug`, `id_kategori_berita`, `isi_berita`, `foto`, `video`, `aktif`, `tanggal_berita`, `updated_at`, `created_at`, `hari`) VALUES
(1, 'Berita Pertama', '', 1, '<p><strong>Liputan6.com, Jakarta -</strong>&nbsp;Menteri Kelautan dan Perikanan (KKP)&nbsp;Edhy Prabowo memanfaatkan kunjungan pertamanya di Kota Ambon, Provinsi Maluku dengan melepas 2.222 kilogram atau 2,22 ton&nbsp;<a href=\"https://www.liputan6.com/bisnis/read/4085852/berjaya-di-amerika-ikan-tuna-indonesia-sulit-tembus-pasar-eropa\">ikan tuna</a>&nbsp;segar yang diekspor dengan tujuan negara Jepang.</p>\r\n\r\n<p>Pelepasan 2,22 ton ikan milik PT&nbsp; Maluku Prima Makmur (MPM) di Desa Tawiri, Kecamatan Teluk Ambon itu ditandai pengibaran bendera dan keberangkatan satu mobil pengangkut ikan oleh Menteri KKP bersama Gubernur Maluku Murad Ismail di perusahaan tersebut, Minggu.</p>\r\n\r\n<p><strong>tes</strong>&nbsp;</p>', 'berita1.jpg', '-', 1, '2020-09-02 11:41:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Senin'),
(2, 'Berita Kedua', 'Berita-Kedua', 3, '<div class=\"content-body\">\r\n            <div class=\"content-body__p\" data-language=\"id\">\r\n              <p>Makassar, BP2MI (10/9/2020) - UPT BP2MI Makassar melaksanakan sosialisasi Peluang Kerja Luar Negeri dan Migrasi Aman di Kecamatan Mallusetasi, Kabupaten Barru, Sulawesi Selatan. Masing-masing berlangsung di Kelurahan Mallawa dan Desa Cilellang pada Rabu (9/9/2020) dan Kamis (10/9/2020).<br>\r\n<br>\r\nHadir sebagai narasumber dalam sosialisasi tersebut, Kasubdit Sosialisasi BP2MI, Amir Hakim Abdi Sihotang, dan Kepala UPT BP2MI Makassar, Mohd. Agus Bustami, serta anggota DPR RI Komisi IX, Hasna Syam.<br>\r\nDalam paparannya, Amir menyampaikan pelaksanaan sosialisasi ini dilatarbelakangi oleh masih banyak yang mengalami masalah di luar negeri akibat dari pemberangkatan secara nonprosedural.<br>\r\n<br>\r\n\"Jangan mau terjerumus melakukan pemalsuan dokumen jika sekiranya tidak benar-benar memenuhi seluruh persyaratan tersebut, karena akibatnya bisa merugikan PMI sendiri. Ingat, untuk bekerja ke luar negeri, PMI harus memenuhi syarat umur 18, sehat jasmani dan rohani, memiliki sertifikat kompetensi, memiliki dokumen lengkap yang dipersyaratkan,\" ungkap Amir kepada seluruh peserta.<br>\r\n<br>\r\nAmir juga menyampaikan agar mewaspadai jika ada orang yang mengajak ke luar negeri dengan menjanjikan gaji yang besar dan pekerjaan yang santai. Dijelaskan pula bahwa pihak yang berhak menempatkan PMI ke luar negeri hanya ada dua, yaitu pemerintah dalam hal ini BP2MI dengan program G to G ke Negara Jepang dan Korea Selatan, dan pihak swasta dalam hal ini P3MI.</p>\r\n\r\n<p>Selama masa pandemi COVID-19, ditambahkan Amir, proses penempatan PMI dimoratorium berdasarkan Kepmenaker Nomor <a href=\"tel:1512020\">151/2020</a>, namun saat ini sudah kembali dibuka melalui Kepmenaker <a href=\"tel:2942020\">294/2020</a> yang masih terbatas pada 12 negara, yaitu Aljazair, Hongkong, Korea Selatan, Maladewa, Nigeria, Uni Emirat Arab, Polandia, Qatar, Taiwan, Turki, Zambia, dan Zimbabwe.<br>\r\n<br>\r\nKepala UPT BP2MI Makassar, Mohd. Agus Bustami turut menjelaskan bahwa peluang kerja di luar negeri tersedia sangat banyak, tinggal bagaimana meningkatkan kompetensi agar persyaratan yang diinginkan oleh user dapat dipenuhi oleh calon PMI. Yang terjadi adalah masih adanya mis-match, yaitu kompetensi calon PMI belum memenuhi kualifikasi yang dipersyaratkan sehingga peluang-peluang tersebut belum dapat termanfaatkan dengan baik.<br>\r\n<br>\r\nAgus Bustami juga menyebutkan bahwa Kab. Barru merupakan salah satu kabupaten yang warganya sejak dulu dikenal suka massompe\' (merantau) dan hal tersebut berlangsung secara turun-temurun hingga banyak warga Barru yang beranak-pinak di Malaysia.<br>\r\n<br>\r\n\"PMI asal Barru biasanya tidak mengakui jika dirinya disebut sebagai TKI/PMI, tetapi mengakui bahwa mereka adalah passompe\' (perantau), padahal keduanya sama saja,\" ujar Agus Bustami yang mengundang gelak tawa peserta.<br>\r\n<br>\r\nAgus Bustami juga menjelaskan bahwa Pelabuhan Garongkong di Barru merupakan salah satu pintu yang sering dimanfaatkan warga Sulsel dan sekitarnya untuk menuju Malaysia. Dengan menggunakan kapal Ferry menuju Batu Licin, kemudian melalui jalur darat ke Entikong dan akhirnya masuk menembus Malaysia di pintu yang tidak melalui pemeriksaaan dokumen. *** (Humas/PT BP2MI Makassar/MA)</p>\r\n\r\n            </div>\r\n            <div class=\"content-body__p\" data-language=\"en\" style=\"display:none;\">\r\n              <p>-</p>\r\n\r\n            </div>\r\n\r\n          </div>', 'berita2.jpg', '-', 1, '2020-09-01 11:41:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Selasa'),
(3, 'Berita Ketiga', 'Berita-Ketiga', 3, '<div class=\"content-body\">\r\n            <div class=\"content-body__p\" data-language=\"id\">\r\n              <p>Makassar, BP2MI (10/9/2020) - UPT BP2MI Makassar melaksanakan sosialisasi Peluang Kerja Luar Negeri dan Migrasi Aman di Kecamatan Mallusetasi, Kabupaten Barru, Sulawesi Selatan. Masing-masing berlangsung di Kelurahan Mallawa dan Desa Cilellang pada Rabu (9/9/2020) dan Kamis (10/9/2020).<br>\r\n<br>\r\nHadir sebagai narasumber dalam sosialisasi tersebut, Kasubdit Sosialisasi BP2MI, Amir Hakim Abdi Sihotang, dan Kepala UPT BP2MI Makassar, Mohd. Agus Bustami, serta anggota DPR RI Komisi IX, Hasna Syam.<br>\r\nDalam paparannya, Amir menyampaikan pelaksanaan sosialisasi ini dilatarbelakangi oleh masih banyak yang mengalami masalah di luar negeri akibat dari pemberangkatan secara nonprosedural.<br>\r\n<br>\r\n\"Jangan mau terjerumus melakukan pemalsuan dokumen jika sekiranya tidak benar-benar memenuhi seluruh persyaratan tersebut, karena akibatnya bisa merugikan PMI sendiri. Ingat, untuk bekerja ke luar negeri, PMI harus memenuhi syarat umur 18, sehat jasmani dan rohani, memiliki sertifikat kompetensi, memiliki dokumen lengkap yang dipersyaratkan,\" ungkap Amir kepada seluruh peserta.<br>\r\n<br>\r\nAmir juga menyampaikan agar mewaspadai jika ada orang yang mengajak ke luar negeri dengan menjanjikan gaji yang besar dan pekerjaan yang santai. Dijelaskan pula bahwa pihak yang berhak menempatkan PMI ke luar negeri hanya ada dua, yaitu pemerintah dalam hal ini BP2MI dengan program G to G ke Negara Jepang dan Korea Selatan, dan pihak swasta dalam hal ini P3MI.</p>\r\n\r\n<p>Selama masa pandemi COVID-19, ditambahkan Amir, proses penempatan PMI dimoratorium berdasarkan Kepmenaker Nomor <a href=\"tel:1512020\">151/2020</a>, namun saat ini sudah kembali dibuka melalui Kepmenaker <a href=\"tel:2942020\">294/2020</a> yang masih terbatas pada 12 negara, yaitu Aljazair, Hongkong, Korea Selatan, Maladewa, Nigeria, Uni Emirat Arab, Polandia, Qatar, Taiwan, Turki, Zambia, dan Zimbabwe.<br>\r\n<br>\r\nKepala UPT BP2MI Makassar, Mohd. Agus Bustami turut menjelaskan bahwa peluang kerja di luar negeri tersedia sangat banyak, tinggal bagaimana meningkatkan kompetensi agar persyaratan yang diinginkan oleh user dapat dipenuhi oleh calon PMI. Yang terjadi adalah masih adanya mis-match, yaitu kompetensi calon PMI belum memenuhi kualifikasi yang dipersyaratkan sehingga peluang-peluang tersebut belum dapat termanfaatkan dengan baik.<br>\r\n<br>\r\nAgus Bustami juga menyebutkan bahwa Kab. Barru merupakan salah satu kabupaten yang warganya sejak dulu dikenal suka massompe\' (merantau) dan hal tersebut berlangsung secara turun-temurun hingga banyak warga Barru yang beranak-pinak di Malaysia.<br>\r\n<br>\r\n\"PMI asal Barru biasanya tidak mengakui jika dirinya disebut sebagai TKI/PMI, tetapi mengakui bahwa mereka adalah passompe\' (perantau), padahal keduanya sama saja,\" ujar Agus Bustami yang mengundang gelak tawa peserta.<br>\r\n<br>\r\nAgus Bustami juga menjelaskan bahwa Pelabuhan Garongkong di Barru merupakan salah satu pintu yang sering dimanfaatkan warga Sulsel dan sekitarnya untuk menuju Malaysia. Dengan menggunakan kapal Ferry menuju Batu Licin, kemudian melalui jalur darat ke Entikong dan akhirnya masuk menembus Malaysia di pintu yang tidak melalui pemeriksaaan dokumen. *** (Humas/PT BP2MI Makassar/MA)</p>\r\n\r\n            </div>\r\n            <div class=\"content-body__p\" data-language=\"en\" style=\"display:none;\">\r\n              <p>-</p>\r\n\r\n            </div>\r\n\r\n          </div>', 'berita2.jpg', '-', 1, '2020-08-05 11:41:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Rabu'),
(4, 'Berita Keempat', 'Berita Keempat', 1, '<div class=\"content-body\">\r\n            <div class=\"content-body__p\" data-language=\"id\">\r\n              <p>Makassar, BP2MI (10/9/2020) - UPT BP2MI Makassar melaksanakan sosialisasi Peluang Kerja Luar Negeri dan Migrasi Aman di Kecamatan Mallusetasi, Kabupaten Barru, Sulawesi Selatan. Masing-masing berlangsung di Kelurahan Mallawa dan Desa Cilellang pada Rabu (9/9/2020) dan Kamis (10/9/2020).<br>\r\n<br>\r\nHadir sebagai narasumber dalam sosialisasi tersebut, Kasubdit Sosialisasi BP2MI, Amir Hakim Abdi Sihotang, dan Kepala UPT BP2MI Makassar, Mohd. Agus Bustami, serta anggota DPR RI Komisi IX, Hasna Syam.<br>\r\nDalam paparannya, Amir menyampaikan pelaksanaan sosialisasi ini dilatarbelakangi oleh masih banyak yang mengalami masalah di luar negeri akibat dari pemberangkatan secara nonprosedural.<br>\r\n<br>\r\n\"Jangan mau terjerumus melakukan pemalsuan dokumen jika sekiranya tidak benar-benar memenuhi seluruh persyaratan tersebut, karena akibatnya bisa merugikan PMI sendiri. Ingat, untuk bekerja ke luar negeri, PMI harus memenuhi syarat umur 18, sehat jasmani dan rohani, memiliki sertifikat kompetensi, memiliki dokumen lengkap yang dipersyaratkan,\" ungkap Amir kepada seluruh peserta.<br>\r\n<br>\r\nAmir juga menyampaikan agar mewaspadai jika ada orang yang mengajak ke luar negeri dengan menjanjikan gaji yang besar dan pekerjaan yang santai. Dijelaskan pula bahwa pihak yang berhak menempatkan PMI ke luar negeri hanya ada dua, yaitu pemerintah dalam hal ini BP2MI dengan program G to G ke Negara Jepang dan Korea Selatan, dan pihak swasta dalam hal ini P3MI.</p>\r\n\r\n<p>Selama masa pandemi COVID-19, ditambahkan Amir, proses penempatan PMI dimoratorium berdasarkan Kepmenaker Nomor <a href=\"tel:1512020\">151/2020</a>, namun saat ini sudah kembali dibuka melalui Kepmenaker <a href=\"tel:2942020\">294/2020</a> yang masih terbatas pada 12 negara, yaitu Aljazair, Hongkong, Korea Selatan, Maladewa, Nigeria, Uni Emirat Arab, Polandia, Qatar, Taiwan, Turki, Zambia, dan Zimbabwe.<br>\r\n<br>\r\nKepala UPT BP2MI Makassar, Mohd. Agus Bustami turut menjelaskan bahwa peluang kerja di luar negeri tersedia sangat banyak, tinggal bagaimana meningkatkan kompetensi agar persyaratan yang diinginkan oleh user dapat dipenuhi oleh calon PMI. Yang terjadi adalah masih adanya mis-match, yaitu kompetensi calon PMI belum memenuhi kualifikasi yang dipersyaratkan sehingga peluang-peluang tersebut belum dapat termanfaatkan dengan baik.<br>\r\n<br>\r\nAgus Bustami juga menyebutkan bahwa Kab. Barru merupakan salah satu kabupaten yang warganya sejak dulu dikenal suka massompe\' (merantau) dan hal tersebut berlangsung secara turun-temurun hingga banyak warga Barru yang beranak-pinak di Malaysia.<br>\r\n<br>\r\n\"PMI asal Barru biasanya tidak mengakui jika dirinya disebut sebagai TKI/PMI, tetapi mengakui bahwa mereka adalah passompe\' (perantau), padahal keduanya sama saja,\" ujar Agus Bustami yang mengundang gelak tawa peserta.<br>\r\n<br>\r\nAgus Bustami juga menjelaskan bahwa Pelabuhan Garongkong di Barru merupakan salah satu pintu yang sering dimanfaatkan warga Sulsel dan sekitarnya untuk menuju Malaysia. Dengan menggunakan kapal Ferry menuju Batu Licin, kemudian melalui jalur darat ke Entikong dan akhirnya masuk menembus Malaysia di pintu yang tidak melalui pemeriksaaan dokumen. *** (Humas/PT BP2MI Makassar/MA)</p>\r\n\r\n            </div>\r\n            <div class=\"content-body__p\" data-language=\"en\" style=\"display:none;\">\r\n              <p>-</p>\r\n\r\n            </div>\r\n\r\n          </div>', 'berita1.jpg', '-', 1, '2020-09-01 11:41:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Kamis'),
(5, 'Berita Terbaru', 'Berita Terbaru', 1, '<p>Makassar, BP2MI (10/9/2020) - UPT BP2MI Makassar melaksanakan sosialisasi Peluang Kerja Luar Negeri dan Migrasi Aman di Kecamatan Mallusetasi, Kabupaten Barru, Sulawesi Selatan. Masing-masing berlangsung di Kelurahan Mallawa dan Desa Cilellang pada Rabu (9/9/2020) dan Kamis (10/9/2020).<br />\n<br />\nHadir sebagai narasumber dalam sosialisasi tersebut, Kasubdit Sosialisasi BP2MI, Amir Hakim Abdi Sihotang, dan Kepala UPT BP2MI Makassar, Mohd. Agus Bustami, serta anggota DPR RI Komisi IX, Hasna Syam.<br />\nDalam paparannya, Amir menyampaikan pelaksanaan sosialisasi ini dilatarbelakangi oleh masih banyak yang mengalami masalah di luar negeri akibat dari pemberangkatan secara nonprosedural.<br />\n<br />\n&quot;Jangan mau terjerumus melakukan pemalsuan dokumen jika sekiranya tidak benar-benar memenuhi seluruh persyaratan tersebut, karena akibatnya bisa merugikan PMI sendiri. Ingat, untuk bekerja ke luar negeri, PMI harus memenuhi syarat umur 18, sehat jasmani dan rohani, memiliki sertifikat kompetensi, memiliki dokumen lengkap yang dipersyaratkan,&quot; ungkap Amir kepada seluruh peserta.<br />\n<br />\nAmir juga menyampaikan agar mewaspadai jika ada orang yang mengajak ke luar negeri dengan menjanjikan gaji yang besar dan pekerjaan yang santai. Dijelaskan pula bahwa pihak yang berhak menempatkan PMI ke luar negeri hanya ada dua, yaitu pemerintah dalam hal ini BP2MI dengan program G to G ke Negara Jepang dan Korea Selatan, dan pihak swasta dalam hal ini P3MI.</p>\n\n<p>Selama masa pandemi COVID-19, ditambahkan Amir, proses penempatan PMI dimoratorium berdasarkan Kepmenaker Nomor&nbsp;<a href=\"tel:1512020\">151/2020</a>, namun saat ini sudah kembali dibuka melalui Kepmenaker&nbsp;<a href=\"tel:2942020\">294/2020</a>&nbsp;yang masih terbatas pada 12 negara, yaitu Aljazair, Hongkong, Korea Selatan, Maladewa, Nigeria, Uni Emirat Arab, Polandia, Qatar, Taiwan, Turki, Zambia, dan Zimbabwe.<br />\n<br />\nKepala UPT BP2MI Makassar, Mohd. Agus Bustami turut menjelaskan bahwa peluang kerja di luar negeri tersedia sangat banyak, tinggal bagaimana meningkatkan kompetensi agar persyaratan yang diinginkan oleh user dapat dipenuhi oleh calon PMI. Yang terjadi adalah masih adanya mis-match, yaitu kompetensi calon PMI belum memenuhi kualifikasi yang dipersyaratkan sehingga peluang-peluang tersebut belum dapat termanfaatkan dengan baik.<br />\n<br />\nAgus Bustami juga menyebutkan bahwa Kab. Barru merupakan salah satu kabupaten yang warganya sejak dulu dikenal suka massompe&#39; (merantau) dan hal tersebut berlangsung secara turun-temurun hingga banyak warga Barru yang beranak-pinak di Malaysia.<br />\n<br />\n&quot;PMI asal Barru biasanya tidak mengakui jika dirinya disebut sebagai TKI/PMI, tetapi mengakui bahwa mereka adalah passompe&#39; (perantau), padahal keduanya sama saja,&quot; ujar Agus Bustami yang mengundang gelak tawa peserta.<br />\n<br />\nAgus Bustami juga menjelaskan bahwa Pelabuhan Garongkong di Barru merupakan salah satu pintu yang sering dimanfaatkan warga Sulsel dan sekitarnya untuk menuju Malaysia. Dengan menggunakan kapal Ferry menuju Batu Licin, kemudian melalui jalur darat ke Entikong dan akhirnya masuk menembus Malaysia di pintu yang tidak melalui pemeriksaaan dokumen. *** (Humas/PT BP2MI Makassar/MA)</p>', 'berita2.jpg', '98thb67pizog50rjfkxm3qwny21clusa4evd1599809441.jpeg', 1, '2020-09-11 15:30:00', '2020-09-11 07:30:41', '2020-09-11 07:30:41', 'minggu'),
(6, 'Pariwisata Di Tengah Pandemi', 'Pariwisata Di Tengah Pandemi', 1, '<p><strong>Industri Pariwisata Merugi Rp2 Triliun</strong><br />\nJAKARTA-- Industri pariwisata mengalami kerugian sekitar US$1,5 miliar atau sekitar Rp21 triliun akibat imbas dari virus Corona atau Covid-19 yang menyebabkan pariwisata lumpuh.</p>\n\n<p><strong>PAN DIY ke Amien, Mumtaz Pilih Zulhas</strong><br />\nJAKARTA- Dewan Pimpinan Wilayah (DPW) Partai Amanat Nasional (PAN) Daerah Istimewa Yogyakarta (DOY) menyatakan akan berada di barisan pendukung Amien Rais.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Pekerja Perempuan di Persimpangan</strong><br />\nPerlindungan pekerja perempuan di Indonesia dinilai lemah lantaran masih banyak perusahaan yang mengabaikan hak-hak reproduksi kaum hawa.</p>\n\n<p><strong>Positif Corona, Tom Hanks Jalani Isolasi</strong><br />\nAktor Tom Hanks menambah daftar orang yang terjangkit virus Corona atau Covid-10. Tak sendiri, sang istri, Rita WIlson juga terdampak virus yang merenggut ribuan nyawa tersebut.</p>\n\n<p><strong>Kualitas Kiper Jadi Pembeda</strong><br />\nLIVERPOOL- Jan Oblak dan Adiran punya peran besar dalam menentukan hasil laga Liverpool versus Atletico Madrid di Anfiels, Kamis (12/3) dini hari WIB.</p>\n\n<p><strong>Jersey Lambang Ambisi Diluncurkan</strong><br />\nJOGJA-- PSIM Jogja memperkenalkan jersey utamanya pada launching tim di Balai Kota Jogja, Rabu (11/3) malam.</p>', 'aemy3og7sn0vuh6z5jtkqlrwc4i2d918xpfb1599811927.jpeg', 'tq42zwynbg0cfk7h8pmr5aoj9dls61e3uvxi1599811927.jpeg', 1, '2020-09-18 17:11:00', '2020-09-11 08:12:07', '2020-09-11 08:12:07', 'senin'),
(7, 'Tes Input Berita 1 Edit Tes', 'Tes Input Berita 1 Edit Tes', 1, '<p>tes input berita&nbsp;</p>', '2kb5gt9zdcwxn4eva1y60phu83rqjo7ismlf1633000331.jpeg', '', 1, '2021-09-30 19:04:00', '2021-09-30 11:12:11', '2021-09-30 11:05:11', 'minggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dana_punia`
--

CREATE TABLE `tb_dana_punia` (
  `id_dana_punia` int(4) NOT NULL,
  `id_usaha` int(4) NOT NULL,
  `jumlah_dana` int(5) NOT NULL,
  `charge` int(4) NOT NULL DEFAULT 0,
  `tanggal_pembayaran` date NOT NULL,
  `bulan` int(4) NOT NULL,
  `tahun` year(4) NOT NULL,
  `bukti_pembayaran` varchar(250) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `aktif` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dana_punia`
--

INSERT INTO `tb_dana_punia` (`id_dana_punia`, `id_usaha`, `jumlah_dana`, `charge`, `tanggal_pembayaran`, `bulan`, `tahun`, `bukti_pembayaran`, `metode`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 2, 15000, 0, '2022-02-12', 1, 2022, 'tes.jpg', 'AlfaMart', '2022-02-01', '2022-02-12', 1),
(2, 2, 15000, 0, '2022-03-02', 3, 2022, 'tes.jpg', 'IndoMaret', '2022-02-17', '2022-02-17', 1),
(3, 2, 15000, 0, '2022-04-15', 4, 2022, '1645127231gcfojkmsrxndptyilwhqevzuab.png', 'Manual', '2022-02-17', '2022-02-17', 1),
(6, 1, 15000, 0, '2022-02-19', 2, 2022, '1645250300uxhklngisvbacmjefryqzptdow.jpg', 'Manual', '2022-02-19', '2022-02-19', 1),
(5, 2, 15000, 0, '2022-05-17', 5, 2022, '1645127318yvzdnpghefukilswromacjxbqt.png', 'Manual', '2022-02-17', '2022-02-17', 1),
(7, 1, 15000, 0, '2022-03-19', 3, 2022, '1645256345pobkihtluxmyaznjqdgcrwsvef.webp', 'Manual', '2022-02-19', '2022-02-19', 1),
(8, 3, 15000, 0, '2022-02-23', 2, 2022, '1645603627faihosnzcykmqbxvuregjpwtld.jpg', 'Manual', '2022-02-23', '2022-02-23', 1),
(9, 3, 30000, 0, '2022-03-23', 3, 2022, '1645606969iyftjmzkglcepduwoahrsnbqvx.png', 'Manual', '2022-02-23', '2022-02-23', 1),
(10, 3, 35000, 0, '2022-04-23', 4, 2022, '1645607403eyfjzupcxlmhvgswrktaodbinq.png', 'Manual', '2022-02-23', '2022-02-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_banjar`
--

CREATE TABLE `tb_data_banjar` (
  `id_data_banjar` int(4) NOT NULL,
  `nama_banjar` varchar(250) NOT NULL,
  `alamat_banjar` varchar(250) NOT NULL,
  `aktif` int(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_banjar`
--

INSERT INTO `tb_data_banjar` (`id_data_banjar`, `nama_banjar`, `alamat_banjar`, `aktif`, `created_at`, `updated_at`) VALUES
(3, 'Banjar 1', 'Alamat Banjar 1', 1, '2022-01-26 12:23:39', '2022-01-26 12:23:39'),
(4, 'Banjar 2', 'banjar 2 alamat', 1, '2022-01-26 16:28:07', '2022-01-26 16:28:07'),
(5, 'banjar 4 new', 'new banjar 4', 0, '2022-01-26 16:28:41', '2022-01-26 16:42:51'),
(6, 'banjar tes 5 new', 'new banjar alamat', 1, '2022-01-26 16:37:18', '2022-01-26 16:37:28'),
(7, 'new banjar tes 5', 'tes banjar new 5', 0, '2022-01-26 16:37:38', '2022-01-26 16:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_usaha`
--

CREATE TABLE `tb_detail_usaha` (
  `id_detail_usaha` int(4) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `email_usaha` varchar(250) DEFAULT NULL,
  `minimal_bayar` int(4) NOT NULL DEFAULT 0,
  `logo` varchar(250) DEFAULT NULL,
  `logo_full_path` varchar(250) DEFAULT NULL,
  `id_banjar` int(4) NOT NULL,
  `twitter_url` varchar(250) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `alamat_banjar` varchar(255) NOT NULL,
  `facebook_url` varchar(250) NOT NULL,
  `google_maps` text NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_usaha`
--

INSERT INTO `tb_detail_usaha` (`id_detail_usaha`, `nama_usaha`, `email_usaha`, `minimal_bayar`, `logo`, `logo_full_path`, `id_banjar`, `twitter_url`, `website_url`, `alamat_banjar`, `facebook_url`, `google_maps`, `no_telp`, `no_wa`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Usaha 1', '', 0, '1645596426utadlrzohkmwbqvjxcngfyipes.png', '', 3, 'Owner Usaha 1', 'Alamat Usaha 1', 'Banjar 1', '1', 'tes', '081936384166', '081936384166', '2022-02-09 08:09:59', '2022-02-23 06:07:06', 1),
(8, 'Resto Baru Pererenan baru new', 'tessemail@gmail.com', 0, '1643300407zlnpgtiqwvxkdfceobusmhyjra.png', NULL, 4, 'tes', 'tes', 'banjar 2 alamat', 'tes', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15778.155700059006!2d115.12167122009895!3d-8.640183400657738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2394943b7c995%3A0x453bee4cc92fda83!2sBAKED.!5e0!3m2!1sid!2sid!4v1645104898128!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '081992019921', '081936384166', '2022-02-17 09:12:37', '2022-02-22 11:31:12', 1),
(9, 'Villa New 1', 'villa@gmail.com', 30000, '1645607442grsokjhuinfdateblyzpqmxvwc.png', NULL, 4, 'twittUrl', 'webUrl', 'banjar 2 alamat', 'fbUrl', 'tes', '0361229001', '081936384166', '2022-02-22 12:10:37', '2022-02-23 09:10:42', 1),
(10, 'Usaha Baru Empat', 'usahabaruempat@gmail.com', 25000, '1645853749axiyfwoksznpqlebvcrjhgtmdu.jpeg', NULL, 4, 'twitternew', 'websitenew', 'banjar 2 alamat', 'facebooknew', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15778.155700059006!2d115.12167122009895!3d-8.640183400657738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2394943b7c995%3A0x453bee4cc92fda83!2sBAKED.!5e0!3m2!1sid!2sid!4v1645868049836!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '0361885001', '081936384166', '2022-02-26 05:35:50', '2022-02-26 09:34:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_facilities`
--

CREATE TABLE `tb_facilities` (
  `id_facilities` int(4) NOT NULL,
  `nama_facilities` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_facilities`
--

INSERT INTO `tb_facilities` (`id_facilities`, `nama_facilities`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Elegant hand-crafted furniture and Balinese artworks adorn each villa or suite', '2022-03-08 08:55:25', '2022-03-08 08:55:25', '1'),
(2, 'Designer signature bathroom amenities made exclusively for de\'Benang Stokel', '2022-03-08 08:55:25', '2022-03-08 08:55:25', '1'),
(3, 'Individually-controlled air-conditioning', '2022-03-08 08:56:05', '2022-03-08 08:56:05', '1'),
(4, 'Flat Screen TV', '2022-03-08 08:56:05', '2022-03-08 10:11:37', '1'),
(5, 'Espresso coffee machine and a lavish range of teas to indulge\r\n', '2022-03-08 08:56:30', '2022-03-08 08:56:30', '1'),
(6, 'Mini-bar and Mini-spa items. (In room retail amenities)', '2022-03-08 08:56:30', '2022-03-08 08:56:30', '1'),
(7, 'Complimentary high speed Wi-Fi Internet access', '2022-03-08 09:03:12', '2022-03-08 09:03:12', '1'),
(8, 'Double vanity basins in the bathrooms and oversized granite bathtub', '2022-03-08 09:03:12', '2022-03-08 09:03:12', '1'),
(9, 'Interconnecting Jepun Suites are available', '2022-03-08 09:03:45', '2022-03-08 09:03:45', '1'),
(10, 'Tes Swimming new agp', '2022-03-08 09:24:07', '2022-03-08 10:11:18', '0'),
(11, 'tes bed', '2022-03-08 11:07:10', '2022-03-12 04:50:00', '0'),
(12, 'tes bed', '2022-03-08 11:07:18', '2022-03-12 04:49:57', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(4) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `url_path` varchar(255) NOT NULL,
  `urutan` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `alt`, `title`, `id_kategori`, `image_name`, `url_path`, `urutan`, `created_at`, `updated_at`, `aktif`) VALUES
(12, 'alt desc2', 'My Suites New', 1, '1645993417lwqjrytumxevzopnbkcihsdgfa.jpg', '/GambarGallery/thumbnail/1645993417lwqjrytumxevzopnbkcihsdgfa.jpg', 1, '2022-02-27 11:01:17', '2022-02-28 08:48:29', 1),
(13, 'alt desc2', 'Resto Baru Pererenan', 4, '1645959770fbjyrdxwgatosknuipezhcqvml.jpg', '/GambarGallery/thumbnail/1645959770fbjyrdxwgatosknuipezhcqvml.jpg', 1, '2022-02-27 11:02:50', '2022-02-27 11:02:50', 1),
(14, 'Weddings', 'Wedding New Gek Tris', 3, '1645960104fmqnaxtzdboiuslrhgvepjcwky.jpeg', '/GambarGallery/thumbnail/1645960104fmqnaxtzdboiuslrhgvepjcwky.jpeg', 1, '2022-02-27 11:08:24', '2022-02-28 06:29:15', 1),
(16, 'Facility 1', 'Facility 1', 2, '1646038628enchwodyapjmkgqvutxibsrfzl.jpeg', '/GambarGallery/thumbnail/1646038628enchwodyapjmkgqvutxibsrfzl.jpeg', 1, '2022-02-28 08:57:08', '2022-02-28 08:57:08', 1),
(17, 'tes', 'tes', 1, '1646038673kpvbizqysxanhtulwdfrgjecmo.jpeg', '/GambarGallery/thumbnail/1646038673kpvbizqysxanhtulwdfrgjecmo.jpeg', 1, '2022-02-28 08:57:53', '2022-02-28 08:57:53', 1),
(18, 'Others Thing', 'Others Thing', 5, '1646038749bkprjqnfaietmgdyhwolxszucv.png', '/GambarGallery/thumbnail/1646038749bkprjqnfaietmgdyhwolxszucv.png', 1, '2022-02-28 08:59:09', '2022-02-28 08:59:09', 1),
(19, 'Weddings new', 'Weddings new', 3, '1646038824kisuolxtryefbdpwgvahjmcqzn.jpg', '/GambarGallery/thumbnail/1646038824kisuolxtryefbdpwgvahjmcqzn.jpg', 1, '2022-02-28 09:00:24', '2022-02-28 09:00:24', 1),
(20, 'ss', 'ss', 5, '1646038969ikpatuzmrgnbvsfodewyxcqlhj.png', '/GambarGallery/thumbnail/1646038969ikpatuzmrgnbvsfodewyxcqlhj.png', 1, '2022-02-28 09:02:49', '2022-02-28 09:02:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar_home`
--

CREATE TABLE `tb_gambar_home` (
  `id_gambar_home` int(4) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `url_path` varchar(255) NOT NULL,
  `urutan` int(4) NOT NULL,
  `is_slide` tinyint(4) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gambar_home`
--

INSERT INTO `tb_gambar_home` (`id_gambar_home`, `alt`, `title`, `deskripsi`, `image_name`, `url_path`, `urutan`, `is_slide`, `created_at`, `updated_at`, `aktif`) VALUES
(3, 'slideshow desc 1', 'SlideShow 1', 'slideshow desc 1', '1646050863ucxqgavfolbtdjizsrpekynhwm.png', '/GambarSlides/thumbnail/1646050863ucxqgavfolbtdjizsrpekynhwm.png', 1, 1, '2022-01-30 16:02:40', '2022-02-28 12:21:04', 1),
(4, 'Deskripsi 2', 'Slide Show 2', 'Deskripsi 2', '1646049756mfxrgkenuwzahlvtsopiqcdjyb.jpg', '/GambarSlides/thumbnail/1646049756mfxrgkenuwzahlvtsopiqcdjyb.jpg', 1, 1, '2022-01-30 16:12:45', '2022-02-28 12:18:36', 1),
(5, 'SlideShow desc 3', 'SlideShow 3', 'SlideShow desc 3', '1646049725ntvwfcloxrdhgyeizuajmskbqp.jpg', '/GambarSlides/thumbnail/1646049725ntvwfcloxrdhgyeizuajmskbqp.jpg', 1, 0, '2022-01-30 16:22:23', '2022-02-28 12:19:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_general`
--

CREATE TABLE `tb_general` (
  `id_general` int(4) NOT NULL,
  `dana_punia` int(4) NOT NULL,
  `alamat_banjar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `nama_penanggung_jawab` varchar(255) NOT NULL,
  `no_telp_png_jawab` varchar(15) NOT NULL,
  `alamat_png_jawab` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_iuran`
--

CREATE TABLE `tb_iuran` (
  `id_iuran` int(4) NOT NULL,
  `tahun` year(4) NOT NULL,
  `bulan` int(4) NOT NULL,
  `nominal_iuran` int(4) NOT NULL,
  `id_usaha` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_berita`
--

CREATE TABLE `tb_kategori_berita` (
  `id_kategori_berita` int(4) NOT NULL,
  `nama_kategori_berita` varchar(250) NOT NULL,
  `aktif` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_berita`
--

INSERT INTO `tb_kategori_berita` (`id_kategori_berita`, `nama_kategori_berita`, `aktif`) VALUES
(1, 'Suka', 1),
(2, 'Kesehatan & Kedokteran', 0),
(3, 'Duka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_gallery`
--

CREATE TABLE `tb_kategori_gallery` (
  `id_kategori_gallery` int(4) NOT NULL,
  `nama_kategori` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_gallery`
--

INSERT INTO `tb_kategori_gallery` (`id_kategori_gallery`, `nama_kategori`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Suite & Villa', '2022-02-27 10:40:26', '2022-02-27 10:40:26', 1),
(2, 'Facilities', '2022-02-27 10:40:26', '2022-02-27 10:40:26', 1),
(3, 'Wedding', '2022-02-27 10:49:58', '2022-02-27 10:49:58', 1),
(4, 'Activities', '2022-02-27 10:49:58', '2022-02-27 10:49:58', 1),
(5, 'Others', '2022-02-27 10:50:17', '2022-02-27 10:50:17', 1),
(6, 'New Kat', '2022-02-28 08:17:08', '2022-02-28 08:35:38', 0),
(7, 'Kategori new', '2022-02-28 08:17:31', '2022-02-28 08:36:47', 0),
(8, 'Kat New', '2022-02-28 08:18:48', '2022-02-28 08:36:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_room`
--

CREATE TABLE `tb_kategori_room` (
  `id_kategori_room` int(4) NOT NULL,
  `nama_kategori` varchar(250) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `deskripsi_kamar` text NOT NULL,
  `harga` int(4) NOT NULL DEFAULT 0,
  `jumlah_kamar` int(4) NOT NULL DEFAULT 0,
  `foto` varchar(250) DEFAULT NULL,
  `url_path` varchar(250) DEFAULT NULL,
  `booking_link` varchar(250) DEFAULT NULL,
  `room_size` int(4) DEFAULT NULL,
  `occupancy` int(4) DEFAULT NULL,
  `bed_type` int(4) DEFAULT NULL,
  `aktif` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_room`
--

INSERT INTO `tb_kategori_room` (`id_kategori_room`, `nama_kategori`, `deskripsi`, `deskripsi_kamar`, `harga`, `jumlah_kamar`, `foto`, `url_path`, `booking_link`, `room_size`, `occupancy`, `bed_type`, `aktif`, `created_at`, `updated_at`) VALUES
(4, 'Asana', 'two room', '', 1250000, 10, '1646053097nsepgayxhujfzobmvclditqrkw.jpg', '/GambarRoomCat/thumbnail/1646053097nsepgayxhujfzobmvclditqrkw.jpg', NULL, NULL, NULL, NULL, 1, '2022-02-28 12:58:17', '2022-02-28 12:58:17'),
(5, 'Aruna', 'One BedRoom With Jacuzzi', '', 1200000, 15, '1646054112vtklinbeyroqwspfzauhdcxmgj.jpg', '/GambarRoomCat/thumbnail/1646054112vtklinbeyroqwspfzauhdcxmgj.jpg', 'http://koishop.balikencana-dev.com', 80, 2, 1, 1, '2022-02-28 13:15:12', '2022-03-07 18:18:47'),
(6, 'Sabitha', 'Two BedRoom With Jacuzzi', '', 1800000, 12, '1646054383gbyptnqjxsceifwldvzmohaukr.jpg', '/GambarRoomCat/thumbnail/1646054383gbyptnqjxsceifwldvzmohaukr.jpg', NULL, NULL, NULL, NULL, 1, '2022-02-28 13:19:43', '2022-03-07 14:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_slides`
--

CREATE TABLE `tb_kategori_slides` (
  `id_kategori_slides` int(4) NOT NULL,
  `nama_kategori` varchar(250) NOT NULL,
  `aktif` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_slides`
--

INSERT INTO `tb_kategori_slides` (`id_kategori_slides`, `nama_kategori`, `aktif`, `created_at`, `updated_at`) VALUES
(1, 'Atas', 1, '2022-01-27 04:28:27', '2022-01-27 04:28:27'),
(2, 'Bawah', 1, '2022-01-27 04:28:27', '2022-01-27 04:28:27'),
(3, 'Tengah', 1, '2022-01-27 04:28:40', '2022-01-27 04:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_usaha`
--

CREATE TABLE `tb_kategori_usaha` (
  `id_kategori_usaha` int(4) NOT NULL,
  `nama_kategori_usaha` varchar(255) NOT NULL,
  `aktif` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_usaha`
--

INSERT INTO `tb_kategori_usaha` (`id_kategori_usaha`, `nama_kategori_usaha`, `aktif`, `created_at`, `updated_at`) VALUES
(1, 'Restaurant', 1, '2022-02-22 09:56:35', '2022-02-22 09:56:35'),
(2, 'Hotel', 1, '2022-02-22 09:56:35', '2022-02-22 09:56:35'),
(3, 'Villa', 1, '2022-02-22 09:56:56', '2022-02-22 09:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu_member`
--

CREATE TABLE `tb_menu_member` (
  `id_menu_member` int(4) NOT NULL,
  `menu` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `is_slide` int(4) NOT NULL DEFAULT 0,
  `urutan` int(4) NOT NULL DEFAULT 0,
  `foto` varchar(250) NOT NULL,
  `url_foto` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu_member`
--

INSERT INTO `tb_menu_member` (`id_menu_member`, `menu`, `url`, `is_slide`, `urutan`, `foto`, `url_foto`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Punia Tamu', '#', 0, 1, '1643307154avqtfgprldzkeonmiuxsycjhbw.png', '/menu/icon/1643307154avqtfgprldzkeonmiuxsycjhbw.png', '2022-01-27 15:02:38', '2022-01-27 18:12:34', 1),
(2, 'Sumbangan', '#', 1, 2, '1643307168qvsjrlntopbuiygzwehkxcafmd.png', '/menu/icon/1643307168qvsjrlntopbuiygzwehkxcafmd.png', '2022-01-27 15:02:38', '2022-01-27 18:12:49', 1),
(3, 'Lowongan Kerja', '#', 1, 3, '1643307180ilskvceptjgxqunmwayrdfozhb.png', '/menu/icon/1643307180ilskvceptjgxqunmwayrdfozhb.png', '2022-01-27 15:21:20', '2022-02-04 16:22:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penanggung_jawab`
--

CREATE TABLE `tb_penanggung_jawab` (
  `id_penanggung_jawab` int(4) NOT NULL,
  `status_penanggung_jawab` varchar(250) DEFAULT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `alamat_usaha` text NOT NULL,
  `no_wa_pngg` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penanggung_jawab`
--

INSERT INTO `tb_penanggung_jawab` (`id_penanggung_jawab`, `status_penanggung_jawab`, `nama`, `alamat`, `email`, `alamat_usaha`, `no_wa_pngg`, `created_at`, `updated_at`, `aktif`) VALUES
(2, 'Manager', 'tes png jawab', 'Jl. tes no.1', 'ibasmara@gmail.com', 'Jl. tes no.1', '081992001993', '2022-02-17 09:10:45', '2022-02-17 09:10:45', 1),
(3, 'Manager', 'tes png jawab', 'Jl. tes no.1', 'ibasmara@gmail.com', 'Jl. tes no.1', '081992001993', '2022-02-17 09:11:24', '2022-02-17 09:11:24', 1),
(4, 'Manager', 'Developer 1', 'Jl. tes no.1', 'ibasmara@gmail.com', 'Jl. tes no.1', '081992001993', '2022-02-17 09:12:38', '2022-02-22 11:31:12', 1),
(5, 'Manager', 'tes png jawab', 'Jl. tes no.1', 'ibasmaras@gmail.com', 'Jl. tes no.1', '08990009981', '2022-02-22 12:10:37', '2022-02-23 08:47:25', 1),
(6, 'Manager', 'tes png jawab', 'Jl. tes penanggung jawab no.1', 'tesaja@gmail.com', 'Jl. tes penanggung jawab no.1', '083928313211', '2022-02-26 05:35:50', '2022-02-26 09:34:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_images`
--

CREATE TABLE `tb_room_images` (
  `id_room_images` int(4) NOT NULL,
  `alt` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `id_kategori_room` int(4) DEFAULT 0,
  `url_path` varchar(250) NOT NULL,
  `urutan` int(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_room_images`
--

INSERT INTO `tb_room_images` (`id_room_images`, `alt`, `title`, `foto`, `id_kategori_room`, `url_path`, `urutan`, `created_at`, `updated_at`, `aktif`) VALUES
(6, 'Aruna - 3', 'Aruna - 3', '1646283797fyjugkxcwhrqmnzblpistoaved.jpg', 5, 'GambarRoomCat/thumbnail/1646283797fyjugkxcwhrqmnzblpistoaved.jpg', 1, '2022-03-03 05:03:18', '2022-03-03 05:03:18', 0),
(8, 'Aruna - 2', 'Aruna - 2', '1646578341flihjgwycvopsrtnedbxzmakqu.jpg', 5, 'GambarRoomCat/thumbnail/1646578341flihjgwycvopsrtnedbxzmakqu.jpg', 2, '2022-03-03 11:35:24', '2022-03-06 14:52:21', 0),
(9, 'Aruna - 1', 'Aruna - 1', '1646578322uyefcxhsvrtbmiwgqlakpojnzd.jpg', 5, 'GambarRoomCat/thumbnail/1646578322uyefcxhsvrtbmiwgqlakpojnzd.jpg', 3, '2022-03-06 14:52:02', '2022-03-06 14:52:02', 0),
(10, 'Aruna - 1', 'Aruna - 1', '1646626664jhpclwznvorifqexmsktdauygb.jpg', 5, 'GambarRoomCat/thumbnail/1646626664jhpclwznvorifqexmsktdauygb.jpg', 4, '2022-03-07 03:25:46', '2022-03-07 04:17:44', 0),
(11, 'Aruna - 2', 'Aruna - 2', '1646625529mzdnfteaoygpulhvsckrqixjbw.jpg', 5, 'GambarRoomCat/thumbnail/1646625529mzdnfteaoygpulhvsckrqixjbw.jpg', 5, '2022-03-07 03:25:49', '2022-03-07 03:58:49', 0),
(12, 'Aruna - 3', 'Aruna - 3', '1646626748hdmlqkgzbrunivtfwcsyojepxa.jpg', 5, 'GambarRoomCat/thumbnail/1646626748hdmlqkgzbrunivtfwcsyojepxa.jpg', 6, '2022-03-07 03:25:49', '2022-03-07 04:19:10', 0),
(13, 'Sabitha - 1', 'Sabitha - 1', '1646659914stnfrpoldexqmbajuyikchgzvw.jpg', 6, 'GambarRoomCat/thumbnail/1646659914stnfrpoldexqmbajuyikchgzvw.jpg', 1, '2022-03-07 13:31:54', '2022-03-07 13:31:54', 0),
(14, 'Sabitha - 2', 'Sabitha - 2', '1646659914tawesvcpjlxbfdnoyimhkrugqz.jpg', 6, 'GambarRoomCat/thumbnail/1646659914tawesvcpjlxbfdnoyimhkrugqz.jpg', 2, '2022-03-07 13:31:54', '2022-03-07 13:31:54', 0),
(15, 'Sabitha - 3', 'Sabitha - 3', '1646659914zhsrybkqgldnovfcaiuxpmetjw.jpg', 6, 'GambarRoomCat/thumbnail/1646659914zhsrybkqgldnovfcaiuxpmetjw.jpg', 3, '2022-03-07 13:31:54', '2022-03-07 13:31:54', 0),
(16, 'Sabitha - 1', 'Sabitha - 1', '1646661853bywnlkepimaxdruzfgqstohcjv.jpg', 6, 'GambarRoomCat/thumbnail/1646661853bywnlkepimaxdruzfgqstohcjv.jpg', 4, '2022-03-07 14:04:13', '2022-03-07 14:04:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id_sosmed` int(4) NOT NULL,
  `nama_sosmed` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `link_url` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktf` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sosmed`
--

INSERT INTO `tb_sosmed` (`id_sosmed`, `nama_sosmed`, `icon`, `link_url`, `created_at`, `updated_at`, `aktf`) VALUES
(1, 'Instagram', '-', NULL, '2022-03-01 11:39:11', '2022-03-01 11:39:11', '1'),
(2, 'Facebook', '-', NULL, '2022-03-01 11:39:11', '2022-03-01 11:39:11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_pembayaran`
--

CREATE TABLE `tb_status_pembayaran` (
  `id_status_pembayaran` int(4) NOT NULL,
  `nama_status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aktif` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_pembayaran`
--

INSERT INTO `tb_status_pembayaran` (`id_status_pembayaran`, `nama_status`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Completed', '2022-02-14 02:13:58', '2022-02-14 02:13:58', 1),
(2, 'OnProgress', '2022-02-14 02:13:58', '2022-02-14 02:13:58', 1),
(3, 'Due Date', '2022-02-14 02:14:43', '2022-02-14 02:14:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_usaha`
--

CREATE TABLE `tb_usaha` (
  `id_usaha` int(4) NOT NULL,
  `id_detail_usaha` int(4) NOT NULL,
  `id_jenis_usaha` int(4) DEFAULT 1,
  `id_penanggung_jawab` int(4) NOT NULL,
  `aktif` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_usaha`
--

INSERT INTO `tb_usaha` (`id_usaha`, `id_detail_usaha`, `id_jenis_usaha`, `id_penanggung_jawab`, `aktif`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, '2022-01-27 10:14:33', '2022-01-27 10:14:33'),
(2, 8, 1, 4, 1, '2022-02-17 09:12:38', '2022-02-22 11:31:12'),
(3, 9, 3, 5, 1, '2022-02-22 12:10:37', '2022-02-23 08:47:25'),
(4, 10, 3, 6, 1, '2022-02-26 05:35:50', '2022-02-26 09:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `no_wa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_level` int(4) NOT NULL,
  `foto_ttd` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aktif` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `no_wa`, `id_level`, `foto_ttd`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Ovi Artiani', 'oviartiani123@gmail.com', '$2y$10$afWL.Y5qYb7M43n5BNB47ubnfYQdnx3hhvbViLuGPW3v.CriVNlWK', '089321397044', 2, '', '2019-02-14 16:45:06', '2020-09-10 09:58:53', 1),
(22, 'Elis', 'elisuwarni@gmail.com', '$2y$10$HDjiFpskmfyXl01cM/qeHudMSZCP/cYflVgDgICohaPLJlP49k7mO', '0983891391', 3, '', '2019-04-18 19:04:16', '2020-09-10 10:01:08', 1),
(30, 'Admin', 'user@gmail.com', '$2y$10$j0.EKRpUQIqF14ym.61gdemReNqRL1CDIuHC0WpiCyInx24KqCfnm', '089803818392', 1, '-', '2020-09-10 09:44:05', '2020-09-11 05:42:21', 1),
(31, 'Wartawan Ku Baru', 'wartawan@gmail.com', '$2y$10$j0.EKRpUQIqF14ym.61gdemReNqRL1CDIuHC0WpiCyInx24KqCfnm', '089213892301', 2, '-', '2020-09-10 09:47:10', '2020-09-10 09:57:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_logs`
--

CREATE TABLE `withdraw_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `withdraw_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rp_amount` bigint(5) DEFAULT 0,
  `sisa_saldo` decimal(10,0) DEFAULT 0,
  `charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processing_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0 = pending, 1 = approved, 2 = Reject',
  `method_cur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraw_logs`
--

INSERT INTO `withdraw_logs` (`id`, `withdraw_id`, `user_id`, `amount`, `rp_amount`, `sisa_saldo`, `charge`, `method_name`, `processing_time`, `detail`, `status`, `method_cur`, `method_rate`, `created_at`, `updated_at`) VALUES
(2, '4733', 1, '20', 800000, '105', '0.3', 'BCA', '5-7', NULL, 1, 'NTR', '1', '2022-01-18 11:04:22', '2022-01-19 08:32:30'),
(3, '9516', 1, '28', 1120000, '97', '0.32', 'BCA', '5-7', NULL, 1, 'NTR', '1', '2022-01-18 15:05:25', '2022-01-19 07:24:40'),
(6, '9051', 1, '15.25', 600000, '62', '0.2875', 'BCA', '5-7', 'tes aja', 0, 'NTR', '1', '2022-01-20 05:46:00', '2022-01-20 05:46:00'),
(7, '6488', 1, '10.5', 410000, '51', '0.275625', 'BCA', '5-7', NULL, 1, 'NTR', '1', '2022-01-25 15:13:55', '2022-01-25 15:15:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `admins_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_bed_type`
--
ALTER TABLE `tb_bed_type`
  ADD PRIMARY KEY (`id_bed_type`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_dana_punia`
--
ALTER TABLE `tb_dana_punia`
  ADD PRIMARY KEY (`id_dana_punia`);

--
-- Indexes for table `tb_data_banjar`
--
ALTER TABLE `tb_data_banjar`
  ADD PRIMARY KEY (`id_data_banjar`);

--
-- Indexes for table `tb_detail_usaha`
--
ALTER TABLE `tb_detail_usaha`
  ADD PRIMARY KEY (`id_detail_usaha`);

--
-- Indexes for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  ADD PRIMARY KEY (`id_facilities`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_gambar_home`
--
ALTER TABLE `tb_gambar_home`
  ADD PRIMARY KEY (`id_gambar_home`);

--
-- Indexes for table `tb_general`
--
ALTER TABLE `tb_general`
  ADD PRIMARY KEY (`id_general`);

--
-- Indexes for table `tb_iuran`
--
ALTER TABLE `tb_iuran`
  ADD PRIMARY KEY (`id_iuran`);

--
-- Indexes for table `tb_kategori_berita`
--
ALTER TABLE `tb_kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indexes for table `tb_kategori_gallery`
--
ALTER TABLE `tb_kategori_gallery`
  ADD PRIMARY KEY (`id_kategori_gallery`);

--
-- Indexes for table `tb_kategori_room`
--
ALTER TABLE `tb_kategori_room`
  ADD PRIMARY KEY (`id_kategori_room`);

--
-- Indexes for table `tb_kategori_slides`
--
ALTER TABLE `tb_kategori_slides`
  ADD PRIMARY KEY (`id_kategori_slides`);

--
-- Indexes for table `tb_kategori_usaha`
--
ALTER TABLE `tb_kategori_usaha`
  ADD PRIMARY KEY (`id_kategori_usaha`);

--
-- Indexes for table `tb_menu_member`
--
ALTER TABLE `tb_menu_member`
  ADD PRIMARY KEY (`id_menu_member`);

--
-- Indexes for table `tb_penanggung_jawab`
--
ALTER TABLE `tb_penanggung_jawab`
  ADD PRIMARY KEY (`id_penanggung_jawab`);

--
-- Indexes for table `tb_room_images`
--
ALTER TABLE `tb_room_images`
  ADD PRIMARY KEY (`id_room_images`);

--
-- Indexes for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `tb_status_pembayaran`
--
ALTER TABLE `tb_status_pembayaran`
  ADD PRIMARY KEY (`id_status_pembayaran`);

--
-- Indexes for table `tb_usaha`
--
ALTER TABLE `tb_usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdraw_logs`
--
ALTER TABLE `withdraw_logs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_bed_type`
--
ALTER TABLE `tb_bed_type`
  MODIFY `id_bed_type` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_dana_punia`
--
ALTER TABLE `tb_dana_punia`
  MODIFY `id_dana_punia` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_data_banjar`
--
ALTER TABLE `tb_data_banjar`
  MODIFY `id_data_banjar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_detail_usaha`
--
ALTER TABLE `tb_detail_usaha`
  MODIFY `id_detail_usaha` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_facilities`
--
ALTER TABLE `tb_facilities`
  MODIFY `id_facilities` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_gambar_home`
--
ALTER TABLE `tb_gambar_home`
  MODIFY `id_gambar_home` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_general`
--
ALTER TABLE `tb_general`
  MODIFY `id_general` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_iuran`
--
ALTER TABLE `tb_iuran`
  MODIFY `id_iuran` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori_berita`
--
ALTER TABLE `tb_kategori_berita`
  MODIFY `id_kategori_berita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kategori_gallery`
--
ALTER TABLE `tb_kategori_gallery`
  MODIFY `id_kategori_gallery` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kategori_room`
--
ALTER TABLE `tb_kategori_room`
  MODIFY `id_kategori_room` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kategori_slides`
--
ALTER TABLE `tb_kategori_slides`
  MODIFY `id_kategori_slides` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kategori_usaha`
--
ALTER TABLE `tb_kategori_usaha`
  MODIFY `id_kategori_usaha` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_menu_member`
--
ALTER TABLE `tb_menu_member`
  MODIFY `id_menu_member` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_penanggung_jawab`
--
ALTER TABLE `tb_penanggung_jawab`
  MODIFY `id_penanggung_jawab` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_room_images`
--
ALTER TABLE `tb_room_images`
  MODIFY `id_room_images` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id_sosmed` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_status_pembayaran`
--
ALTER TABLE `tb_status_pembayaran`
  MODIFY `id_status_pembayaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_usaha`
--
ALTER TABLE `tb_usaha`
  MODIFY `id_usaha` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `withdraw_logs`
--
ALTER TABLE `withdraw_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
