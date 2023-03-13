-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2023 pada 07.17
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distributor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `gambar_about` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deksripsi` text NOT NULL,
  `child_array` text NOT NULL,
  `id_creator` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `gambar_about`, `judul`, `deksripsi`, `child_array`, `id_creator`, `created`, `updated`) VALUES
(1, 51, 'DISTIRBUTOR BAN FORKLIFT', 'Distributor Ban Forklift, Kami Berfokus Ban Alat Berat dan Trucking seperti L Ban Forklift, Ban Loader, Ban Truck, Dll. Kami Distributor Resmi Merk Trellborg Ascendo dan Lainnya, selain itu Kami Melayani Press Mobile di Lokasi Anda', '[]', 2, '0000-00-00 00:00:00', '2023-03-02 03:23:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asset`
--

CREATE TABLE `asset` (
  `id_asset` int(11) NOT NULL,
  `nama_asset` text NOT NULL,
  `lokasi` text NOT NULL,
  `id_creator` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asset`
--

INSERT INTO `asset` (`id_asset`, `nama_asset`, `lokasi`, `id_creator`, `created`, `updated`) VALUES
(1, 'slider gudang', 'assets/backend/img/hero-carousel/1.jpg', 1, '2022-11-04 04:35:11', '2022-11-04 04:35:11'),
(2, 'slider', 'assets/backend/img/hero-carousel/2.jpg', 1, '2022-11-04 04:35:11', '2022-11-04 04:35:11'),
(3, 'alider', 'assets/backend/img/hero-carousel/3.jpg', 1, '2022-11-04 04:35:11', '2022-11-04 04:35:11'),
(4, 'logo', 'assets/backend/img/hero-carousel/logo.jpeg', 1, '2022-11-04 04:35:11', '2022-11-04 04:35:11'),
(5, 'about image', 'assets/backend/img/gallery-kegiatan/about.png', 2, '2022-11-04 04:35:11', '2022-11-04 04:35:11'),
(24, 'Gambar Tulips', 'assets/uploads/2022-11-15-22-36-59-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Testing Slider Slider', 'assets/uploads/2022-11-15-22-56-51-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, ' Produk', 'assets/uploads/2022-11-16-00-08-52-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, ' Produk', 'assets/uploads/2022-11-16-00-25-20-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, ' Produk', 'assets/uploads/2022-11-16-00-26-19-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, ' Produk', 'assets/uploads/2022-11-16-02-33-56-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, ' Produk', 'assets/uploads/2022-11-16-02-35-05-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, ' gallery', 'assets/uploads/2022-11-16-03-15-36-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, ' gallery', 'assets/uploads/2022-11-16-03-16-20-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '2022-11-28-22-01-48-2 Produk', 'assets/uploads/2022-11-28-22-01-48-2.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'cek Slider', 'assets/uploads/2023-02-25-18-43-55-2.png', 2, '2023-02-25 18:43:55', '2023-02-25 18:43:55'),
(35, 'Logo Website', 'assets/uploads/2023-02-26-04-38-46-2.png', 2, '2023-02-26 04:38:46', '2023-02-26 04:38:46'),
(45, 'Logo Website', 'assets/uploads/1677694955.jpg', 2, '2023-03-01 19:22:43', '2023-03-01 19:22:43'),
(46, 'Image About Website', 'assets/uploads/1677694962.jpg', 2, '2023-03-01 19:22:43', '2023-03-01 19:22:43'),
(47, 'Logo Website', 'assets/uploads/1677695451.jpg', 2, '2023-03-01 19:31:09', '2023-03-01 19:31:09'),
(48, 'Image About Website', 'assets/uploads/1677695466.jpg', 2, '2023-03-01 19:31:09', '2023-03-01 19:31:09'),
(49, 'Logo Website', 'assets/uploads/1677723703.jpg', 2, '2023-03-02 03:21:46', '2023-03-02 03:21:46'),
(50, 'Image About Website', 'assets/uploads/1677723746.jpg', 2, '2023-03-02 03:22:28', '2023-03-02 03:22:28'),
(51, 'Image About Website', 'assets/uploads/1677723818.jpg', 2, '2023-03-02 03:23:51', '2023-03-02 03:23:51'),
(52, 'Logo Website', 'assets/uploads/1677727848.jpg', 2, '2023-03-02 04:30:51', '2023-03-02 04:30:51'),
(53, 'Test Slider', 'assets/uploads/2023-03-12-16-41-25-2.jpg', 2, '2023-03-12 16:41:25', '2023-03-12 16:41:25'),
(54, 'Contoh 2 Slider', 'assets/uploads/1678641415.jpg', 2, '2023-03-12 18:17:04', '2023-03-12 18:17:04'),
(55, ' Slider', 'assets/uploads/1678641733.jpg', 2, '2023-03-12 18:22:28', '2023-03-12 18:22:28'),
(56, 'A Slider', 'assets/uploads/1678642093.jpg', 2, '2023-03-12 18:28:16', '2023-03-12 18:28:16'),
(57, 'Ban Forklift Nomor 1 Produk', 'assets/uploads/1678652784.jpg', 2, '2023-03-12 21:26:30', '2023-03-12 21:26:30'),
(58, 'Ban Forklift Nomor 1 Produk', 'assets/uploads/1678652871.jpg', 2, '2023-03-12 21:27:55', '2023-03-12 21:27:55'),
(59, 'Ban Forklift Nomor 2 Produk', 'assets/uploads/1678652950.jpg', 2, '2023-03-12 21:29:14', '2023-03-12 21:29:14'),
(60, 'Ban Loader Nomor 20 Produk', 'assets/uploads/1678654666.jpg', 2, '2023-03-12 21:57:49', '2023-03-12 21:57:49'),
(61, 'Ban Forklift 1 Produk', 'assets/uploads/1678654931.jpg', 2, '2023-03-12 22:02:13', '2023-03-12 22:02:13'),
(62, 'Ban Loader 1 Produk', 'assets/uploads/1678654963.jpg', 2, '2023-03-12 22:02:46', '2023-03-12 22:02:46'),
(63, 'Ban Truck 1 Produk', 'assets/uploads/1678655009.jpg', 2, '2023-03-12 22:03:32', '2023-03-12 22:03:32'),
(64, 'Filter Oli Produk', 'assets/uploads/1678655048.jpg', 2, '2023-03-12 22:04:10', '2023-03-12 22:04:10'),
(65, 'Cara Merawat Aki Yang Baik gallery', 'assets/uploads/1678663115.jpg', 2, '2023-03-13 00:18:38', '2023-03-13 00:18:38'),
(66, 'Apa itu Forklift gallery', 'assets/uploads/1678663906.jpg', 2, '2023-03-13 00:31:48', '2023-03-13 00:31:48'),
(67, 'Honda merek', 'assets/uploads/1678673046.jpg', 2, '2023-03-13 03:04:08', '2023-03-13 03:04:08'),
(68, 'Honda merek', 'assets/uploads/1678673093.jpg', 2, '2023-03-13 03:04:54', '2023-03-13 03:04:54'),
(69, 'Honda merek', 'assets/uploads/1678673144.jpg', 2, '2023-03-13 03:05:47', '2023-03-13 03:05:47'),
(70, 'Honda merek', 'assets/uploads/1678673909.jpg', 2, '2023-03-13 03:18:30', '2023-03-13 03:18:30'),
(71, 'Honda merek', 'assets/uploads/1678673930.jpg', 2, '2023-03-13 03:18:52', '2023-03-13 03:18:52'),
(72, 'Toyota merek', 'assets/uploads/1678674210.jpg', 2, '2023-03-13 03:23:32', '2023-03-13 03:23:32'),
(73, 'TCM merek', 'assets/uploads/1678674229.jpg', 2, '2023-03-13 03:23:50', '2023-03-13 03:23:50'),
(74, 'Mitsubishi merek', 'assets/uploads/1678674246.jpg', 2, '2023-03-13 03:24:07', '2023-03-13 03:24:07'),
(75, 'Nichiyu merek', 'assets/uploads/1678674292.jpg', 2, '2023-03-13 03:24:54', '2023-03-13 03:24:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama_visitor` varchar(50) NOT NULL,
  `email_visitor` varchar(50) NOT NULL,
  `no_telp_visitor` varchar(100) NOT NULL,
  `message_visitor` text NOT NULL,
  `created` datetime NOT NULL,
  `status_read` enum('pending','reading') NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `minat_id_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `nama_visitor`, `email_visitor`, `no_telp_visitor`, `message_visitor`, `created`, `status_read`, `nama_perusahaan`, `minat_id_produk`) VALUES
(3, 'Doni Nurramdan', 'nurramdandoni@gmail.com', '0895330802566', 'Berapa Harga Jika Beli 1000 Unit?', '2023-03-12 23:02:14', 'pending', 'PT Jaya Makmur', 'Ban Forklift Nomor 2 Kode'),
(4, 'Doni Nurramdan', 'nurramdandoni@gmail.com', '0895330802566', 'Berapa Harga jika Indent?', '2023-03-12 23:03:55', 'pending', 'Paylite', 'Ban Forklift Nomor 1 Kode : 23HJ769');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `summary` text NOT NULL,
  `deskripsi_gallery` text NOT NULL,
  `status_publikasi` enum('publik','internal') NOT NULL,
  `status` enum('aktif','non aktif') NOT NULL,
  `id_creator` int(11) NOT NULL,
  `id_asset` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `judul`, `summary`, `deskripsi_gallery`, `status_publikasi`, `status`, `id_creator`, `id_asset`, `created`, `updated`) VALUES
(1, 'Cara Merawat Battery Forkliftv', 'Forklift adalah suatu alat/kendaraan yang menggunakan garpu atau clamp dipasang pada mast', '<p>kerjasama dengan Sekolah Cambrigdev</p>', 'publik', 'aktif', 2, 5, '2023-03-13 01:59:39', '2023-03-13 01:59:39'),
(2, 'Tips Memilih Forklift Bekas', 'Forklift adalah suatu alat/kendaraan yang menggunakan garpu atau clamp dipasang pada mast', 'Ramah Tamah dengan Pinguin', 'publik', 'aktif', 2, 65, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Cara Merawat Aki Yang Baik', 'Forklift adalah suatu alat/kendaraan yang menggunakan garpu atau clamp dipasang pada mast', '<p><strong>Halo Sahabat Prime, Salam Semangat&nbsp;</strong></p>\r\n<p>Tentunya Customer menginginkan umur atau Life time Battery Forklift awet, simak tips berikut untuk merawat Battery Forklift :</p>\r\n<p><strong>1. Selalu Jaga Kebersihan Battery</strong></p>\r\n<p>Untuk menghindari korosi &amp; terjadinya arus listrik hubungan singkat, jaga&nbsp; permukaan battery juga kabel battery agar tetap&nbsp; bersih dan kering.</p>\r\n<p><strong>2. Periksa Selalu Ketinggian Elektrolit</strong></p>\r\n<p>Periksa ketinggian elektrolit sebelum battery digunakan. Ketinggian elektrolit harus dijaga diantara batas&nbsp; maksimum dan minimum. Tambahkan air aki jika elektrolit berkurang,&nbsp; penambahan dilakukan sebelum battery di charge.</p>\r\n<p><strong>3. Jauhkan Dari Sumber Api</strong></p>\r\n<p>Pastikan sirkulasi udara diruang battery lancar, karena&nbsp; selama pemakaian battery menghasilkan gas-gas yang&nbsp; mudah terbakar. Juga pastikan kabel konektor battery terpasang dengan benar dan dalam kondisi baik, pemasangan&nbsp; kabel konektor yang tidak sesuai dapat mengakibatkan&nbsp; adanya percikan api. Untuk menghindari hal-hal yang tidak diinginkan,&nbsp; jauhkan battery dari sumber api (rokok, mesin las,&nbsp; gerinda dll).</p>\r\n<p><strong>4. Hindari Over Discharge</strong></p>\r\n<p>Tingkat pemakaian battery maksimum yang disarankan yaitu 70 % s/d 80 % dari kapasitasnya (lihat indikator battery pada forklift). Hindari pemakaian battery yang berlebihan (over discharge) karena akan memperpendek umur battery.</p>\r\n<p>PT. Revi Berkah Makmur merupakan Distributor Penjualan Resmi Battery YUASA, YUASA Battery merupakan brand battery Jepang dengan performa unggul, serta telah dipercaya oleh brand Forklift Jepang sebagai partner battery. Gunakan Brand YUASA untuk Battery Forklift Elektrik Counterbalance dan Reachtruk, guna mendukung performa Forklift Anda.</p>\r\n<p>Percayakan Pengadaan Battery Forklift Anda kepada kami :</p>\r\n<ol>\r\n<li>Distributor penjualan resmi Battery Forklift YUASA</li>\r\n<li>Free Training perawatan battery &amp; pengecekan kondisi.</li>\r\n<li>Tukar tambah battery bekas ke baru.</li>\r\n<li>Jaminan Warranty</li>\r\n</ol>', 'publik', 'aktif', 2, 65, '2023-03-13 00:18:38', '2023-03-13 00:18:38'),
(4, 'Apa itu Forklift', 'Forklift adalah suatu alat/kendaraan yang menggunakan garpu atau clamp dipasang pada mast', '<p><strong>Halo Sahabat Prime, Salam Semangat !</strong></p>\r\n<p>Mari mengenal Forklift dan mekanismenya.</p>\r\n<p>Forklift adalah suatu alat/kendaraan yang menggunakan garpu atau clamp dipasang pada mast untuk mengangkat, menurunkan dan memindahkan suatu benda atau material berat dari satu&nbsp; tempat ke tempat lain.</p>\r\n<p>Forklift memiliki sistem pengangkat. Sistem pengangkat adalah gabungan dari dua batang rail vertikal sebagai penuntun yang disebut dengan mast, garpu (atau&nbsp; media pengangkat) bergerak naik/turun pada mast&nbsp; dan sistim hidrolik yang mengerakkannya. Mast dihubungkan&nbsp; ke badan forklift oleh hidrolik silinder yang mampu menggerakkan mast ke depan atau kebelakang.</p>\r\n<p>Badan forklift mempunyai banyak keutamaan seperti mobil, yaitu sebuah tenaga penggerak (dengan mesin, kopling, transmisi&nbsp; dan gardan), axle depan dan belakang, rem dan chassis. Sedangkan pada forklift battery tenaga penggerak berupa&nbsp; battery, controller dan motor listrik. Umumnya roda depan sebagai roda penggerak, sedangkan&nbsp; roda belakang sebagai kemudi.</p>\r\n<p>PT. Revi Berkah Makmur hadir untuk membantu Anda dalam menyediakan Forklift brand terkemuka: Mitsubishi, Nichiyu, Toyota, dan TCM. Konsultasikan kebutuhan Anda sesuai kondisi Warehouse dan Lapangan. Adapun layanan Sales yang kami tawarkan :</p>\r\n<ol>\r\n<li>Layanan tukar tambah unit Forlift bekas ke baru.</li>\r\n<li>After Sales Service (ASS) didukung mekanik bersertifikasi.</li>\r\n<li>Konsultasi dengan tenaga sales berpengalaman.</li>\r\n<li>Konsultasi perhitungan Total Cost Ownership.</li>\r\n<li>Product Warranty.</li>\r\n<li>Field Guidance dan Training operator.</li>\r\n</ol>', 'publik', 'aktif', 2, 66, '2023-03-13 00:31:48', '2023-03-13 00:31:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `global_setting`
--

CREATE TABLE `global_setting` (
  `id_setting` int(11) NOT NULL,
  `gambar_ico` int(11) NOT NULL,
  `judul_tab` varchar(100) NOT NULL,
  `judul_website` varchar(255) NOT NULL,
  `content_color_text` varchar(100) NOT NULL,
  `contact_setting_phone` varchar(18) NOT NULL,
  `contact_setting_wa` varchar(18) NOT NULL,
  `contact_setting_email` text NOT NULL,
  `contact_setting_website` text NOT NULL,
  `contact_setting_lokasi_string` text NOT NULL,
  `contact_setting_work_time` text NOT NULL,
  `contact_setting_maps_lat_lag` text NOT NULL,
  `header_setting_global_fill_color` varchar(100) NOT NULL,
  `header_setting_global_text_color` varchar(100) NOT NULL,
  `header_setting_global_font_style` varchar(100) NOT NULL,
  `footer_setting_global_deskripsi` text NOT NULL,
  `footer_setting_global_medsos_list_array` text NOT NULL,
  `footer_setting_global_asset_ig_image_array` text NOT NULL,
  `footer_setting_global_fill_color` varchar(100) NOT NULL,
  `footer_setting_global_text_color` varchar(100) NOT NULL,
  `footer_setting_global_font_style` varchar(100) NOT NULL,
  `id_creator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `global_setting`
--

INSERT INTO `global_setting` (`id_setting`, `gambar_ico`, `judul_tab`, `judul_website`, `content_color_text`, `contact_setting_phone`, `contact_setting_wa`, `contact_setting_email`, `contact_setting_website`, `contact_setting_lokasi_string`, `contact_setting_work_time`, `contact_setting_maps_lat_lag`, `header_setting_global_fill_color`, `header_setting_global_text_color`, `header_setting_global_font_style`, `footer_setting_global_deskripsi`, `footer_setting_global_medsos_list_array`, `footer_setting_global_asset_ig_image_array`, `footer_setting_global_fill_color`, `footer_setting_global_text_color`, `footer_setting_global_font_style`, `id_creator`) VALUES
(3, 52, 'PT. PRIME FORKLIFT SERVICE', 'DISTIRBUTOR BAN FORKLIFT', '444/1300b5(ini warna percobaan)', '(+62)82210812989', '6282210812989', 'info@distributorbanforklift.com', 'https://distributorbanforklift.com', 'Karawang, West Java Indonesia', 'Monday-Friday (08.00 - 15.00 WIB)', 'https://maps-cdn.site123.com/include/globalMapDisplay.php?q=Karawang%2C+West+Java%2C+Indonesia&z=15&l=en&ilfc=1', '', '', '', 'PT. ASIAN YAHAMA SUMITEX adalah salah satu pabrik yang memproduksi produk nonwoven berbagai macam jenis, kami berlokasi di karawang jawabarat indonesia, kami siap memenuhi kebutuhan nonwoven anda dalam kuantitasn sedikit dan banyak.', '[ { \"bi_icon_class\":\"bi bi-twitter\",\"asset_icon_url\":\"https://yms.com/asset/twitter\", \"url_link\":\"https://twitter.com/yms\" }, { \"bi_icon_class\":\"bi bi-facebook\",\"asset_icon_url\":\"https://yms.com/asset/facebook\", \"url_link\":\"https://facebook.com/yms\" }, { \"bi_icon_class\":\"bi bi-instagram\",\"asset_icon_url\":\"https://yms.com/asset/linkedin\", \"url_link\":\"https://linkedin.com/yms\" }, { \"bi_icon_class\":\"bi bi-linkedin\",\"asset_icon_url\":\"https://yms.com/asset/instagram\", \"url_link\":\"https://instagram.com/yms\" } ]', '[]', '', '', '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis_produk` int(11) NOT NULL,
  `nama_jenis_produk` varchar(200) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis_produk`, `nama_jenis_produk`, `id_creator`, `created`, `updated`) VALUES
(1, 'Ban Forklift', 2, '2023-03-12 18:52:22', '2023-03-12 18:52:22'),
(2, 'Ban Loader', 2, '2023-03-12 18:52:22', '2023-03-12 18:52:22'),
(3, 'Ban Truck', 2, '2023-03-12 18:52:22', '2023-03-12 18:52:22'),
(4, 'Lainnya', 2, '2023-03-12 19:02:24', '2023-03-12 19:02:24'),
(5, 'Genuine Part', 2, '2023-03-13 04:10:32', '2023-03-13 04:10:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `id_creator`, `created`, `updated`) VALUES
(1, 'Spare Part', 2, '2023-03-12 18:50:09', '2023-03-12 18:50:09'),
(2, 'Filter Oli', 2, '2023-03-12 18:50:35', '2023-03-12 18:50:35'),
(3, 'Ban', 2, '2023-03-13 04:08:53', '2023-03-13 04:08:53'),
(4, 'Alat Berat', 2, '2023-03-13 04:02:48', '2023-03-13 04:02:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(11) NOT NULL,
  `nama_merek` varchar(200) NOT NULL,
  `id_gambar` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merek`
--

INSERT INTO `merek` (`id_merek`, `nama_merek`, `id_gambar`, `id_creator`, `created`, `updated`) VALUES
(1, 'Toyota', 72, 2, '2023-03-13 03:23:32', '2023-03-13 03:23:32'),
(2, 'TCM', 73, 2, '2023-03-13 03:23:50', '2023-03-13 03:23:50'),
(3, 'Mitsubishi', 74, 2, '2023-03-13 03:24:07', '2023-03-13 03:24:07'),
(4, 'Nichiyu', 75, 2, '2023-03-13 03:24:54', '2023-03-13 03:24:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(50) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenis_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `summary_deskripsi` text NOT NULL,
  `harga_produk` double NOT NULL,
  `full_deskripsi` text NOT NULL,
  `jenis_satuan` varchar(50) NOT NULL,
  `spesifikasi_produk_array` text NOT NULL,
  `status_publikasi` enum('publik','internal') NOT NULL,
  `status` enum('aktif','non aktif') NOT NULL,
  `id_gambar` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `id_merek`, `id_kategori`, `id_jenis_produk`, `nama_produk`, `summary_deskripsi`, `harga_produk`, `full_deskripsi`, `jenis_satuan`, `spesifikasi_produk_array`, `status_publikasi`, `status`, `id_gambar`, `id_creator`, `created`, `updated`) VALUES
(1, '0001', 1, 3, 1, 'Ban Forklift 1', '', 2000000, '<p>Kuat dan Tahan Lama</p>', 'Pcs', '[\"Ukuran : 25G\", \"Jangkauan : 500 Meter\"]', 'publik', 'aktif', 61, 2, '2023-03-12 22:02:13', '2023-03-12 22:02:13'),
(4, '002', 2, 3, 2, 'Ban Loader 1', '', 2000000, '<p>Pinguin Import</p>', 'Pcs', '[\"Ukuran  :  25G\", \"Jangkauan  :  500 Meter\",\"Jangkauan  :  500 Meter\",\"Jangkauan  :  500 Meter\",\"Jangkauan  :  500 Meter\",\"Jangkauan  :  500 Meter\",\"Jangkauan  :  500 Meter\"]', 'publik', 'aktif', 62, 2, '2023-03-12 22:02:46', '2023-03-12 22:02:46'),
(5, '002', 3, 3, 3, 'Ban Truck 1', '', 2000, '<p>Description : Filter Hidrolik Forklift Mitsubishi<br>Brand : Genuine Parts Mitsubishi Forklift<br>Parts Number : 91375-03800<br>Compatible for :<br>Forklift Mitsubishi Diesel<br>FD25ND</p>', 'Pcs', '', 'publik', 'aktif', 63, 2, '2023-03-12 22:03:32', '2023-03-12 22:03:32'),
(6, '0031', 3, 2, 4, 'Filter Oli', '', 50001, '<p>ini full deskipso1</p>', 'box1', '', 'publik', 'aktif', 64, 2, '2023-03-12 22:04:10', '2023-03-12 22:04:10'),
(7, '23HJ769', 1, 3, 1, 'Ban Forklift Nomor 1', '<p>Description : Filter Hidrolik Forklift Mitsubishi<br>Brand : Genuine Parts Mitsubishi Forklift<br>Parts Number : 91375-03800<br>Compatible for :<br>Forklift Mitsubishi Diesel<br>FD25ND</p>', 3500000, '<p>Description : Filter Hidrolik Forklift Mitsubishi<br>Brand : Genuine Parts Mitsubishi Forklift<br>Parts Number : 91375-03800<br>Compatible for :<br>Forklift Mitsubishi Diesel<br>FD25ND</p>', 'Pcs', '', 'publik', 'aktif', 58, 2, '2023-03-12 21:27:55', '2023-03-12 23:52:43'),
(8, '4232JBJLB80', 2, 3, 2, 'Ban Loader Nomor 20', '', 21000000, '<p>Description : Filter Hidrolik Forklift Mitsubishi<br>Brand : Genuine Parts Mitsubishi Forklift<br>Parts Number : 91375-03800<br>Compatible for :<br>Forklift Mitsubishi Diesel<br>FD25ND0</p>', 'Pcs', '', 'publik', 'aktif', 60, 2, '2023-03-12 21:57:49', '2023-03-12 21:57:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar_slider` int(11) NOT NULL,
  `judul_slider` varchar(50) NOT NULL,
  `deskripsi_slider` varchar(100) NOT NULL,
  `link_pintasan` text NOT NULL,
  `url_link_pintasan` text NOT NULL,
  `status_link_pintasan` enum('aktif','non aktif') NOT NULL,
  `status` enum('aktif','non aktif') NOT NULL,
  `id_creator` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar_slider`, `judul_slider`, `deskripsi_slider`, `link_pintasan`, `url_link_pintasan`, `status_link_pintasan`, `status`, `id_creator`, `created`, `updated`) VALUES
(1, 1, 'Gudang', 'slider gudang', 'Ayo Mulai Sekarang!', '#about', 'aktif', 'non aktif', 2, '2022-11-04 10:44:10', '2023-03-13 02:19:14'),
(2, 2, 'Slider 200', 'slider', 'Mulai', '#', 'non aktif', 'non aktif', 2, '2022-11-04 10:44:10', '2023-03-13 02:23:19'),
(3, 1, 'Slider 3', 'Ini slider 3', 'Mulai', '#', 'non aktif', 'non aktif', 2, '2022-11-04 10:44:10', '2023-03-13 02:17:50'),
(4, 3, 'Slider 4', 'Ini slider 4', 'Mulai', '#', 'non aktif', 'non aktif', 2, '2022-11-04 10:44:10', '2023-03-13 02:18:44'),
(5, 25, 'Testing Slider', 'MAri Memulai Hari dengan Penuh Semangat dan Harapan', 'Ayo!', 'httsp://google.com', 'non aktif', 'non aktif', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 34, 'cek', 'cek', 'cek', 'cek', 'aktif', 'non aktif', 2, '2023-02-25 18:43:55', '2023-02-25 18:43:55'),
(7, 53, 'Test', 'Contoh Saja', 'Cek Sekarang!', 'http://localhost/new-project2023/site/forklift', 'aktif', 'aktif', 2, '2023-03-12 16:41:25', '2023-03-12 16:41:25'),
(8, 56, 'A', 'D', 'B', 'C', 'aktif', 'aktif', 2, '2023-03-12 18:17:04', '2023-03-12 18:17:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','staff') NOT NULL,
  `status` enum('aktif','non aktif') NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `jenis_kelamin`, `username`, `password`, `level`, `status`, `created`, `updated`) VALUES
(1, 'Panji', 'L', 'panji@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', 'aktif', '2022-11-04 04:03:39', '2022-11-04 04:03:39'),
(2, 'Doni Nurramdan', 'L', 'doni@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'staff', 'aktif', '2022-11-04 04:03:39', '2022-11-04 04:03:39'),
(3, 'Roni', 'L', 'roni@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'staff', 'non aktif', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `device` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `month` varchar(3) NOT NULL,
  `year` varchar(4) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `visited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`id`, `device`, `ip`, `month`, `year`, `id_produk`, `visited`) VALUES
(12, '', '', 'Sep', '2022', 1, '2022-11-29 04:43:49'),
(13, '', '', 'Okt', '2022', 4, '2022-11-29 04:43:52'),
(14, '', '', 'Okt', '2022', 5, '2022-11-29 04:43:56'),
(15, '', '', 'Nov', '2022', 4, '2022-11-29 04:44:03'),
(16, '', '', 'Nov', '2022', 4, '2022-11-29 04:44:58'),
(17, '', '', 'Nov', '2022', 5, '2022-11-29 04:45:04'),
(18, '', '', 'Nov', '2022', 1, '2022-11-29 04:45:10'),
(19, '', '', 'Nov', '2022', 4, '2022-11-29 04:45:16'),
(20, '', '', 'Nov', '2022', 5, '2022-11-29 04:46:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`),
  ADD KEY `id_creator` (`id_creator`),
  ADD KEY `gambar_about` (`gambar_about`);

--
-- Indeks untuk tabel `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id_asset`),
  ADD KEY `id_creator` (`id_creator`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`),
  ADD KEY `id_creator` (`id_creator`),
  ADD KEY `id_asset` (`id_asset`);

--
-- Indeks untuk tabel `global_setting`
--
ALTER TABLE `global_setting`
  ADD PRIMARY KEY (`id_setting`),
  ADD KEY `gambar_ico` (`gambar_ico`),
  ADD KEY `id_creator` (`id_creator`);

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`),
  ADD KEY `id_creator` (`id_creator`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_creator` (`id_creator`);

--
-- Indeks untuk tabel `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`),
  ADD KEY `id_creator` (`id_creator`),
  ADD KEY `id_gambar` (`id_gambar`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_creator` (`id_creator`),
  ADD KEY `id_gambar` (`id_gambar`),
  ADD KEY `id_merek` (`id_merek`),
  ADD KEY `id_jenis_produk` (`id_jenis_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`),
  ADD KEY `gambar_slider` (`gambar_slider`),
  ADD KEY `id_creator` (`id_creator`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `asset`
--
ALTER TABLE `asset`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `global_setting`
--
ALTER TABLE `global_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `about_ibfk_2` FOREIGN KEY (`gambar_about`) REFERENCES `asset` (`id_asset`);

--
-- Ketidakleluasaan untuk tabel `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `asset_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `gallery_ibfk_2` FOREIGN KEY (`id_asset`) REFERENCES `asset` (`id_asset`);

--
-- Ketidakleluasaan untuk tabel `global_setting`
--
ALTER TABLE `global_setting`
  ADD CONSTRAINT `global_setting_ibfk_1` FOREIGN KEY (`gambar_ico`) REFERENCES `asset` (`id_asset`),
  ADD CONSTRAINT `global_setting_ibfk_2` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD CONSTRAINT `jenis_produk_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `merek`
--
ALTER TABLE `merek`
  ADD CONSTRAINT `merek_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `merek_ibfk_2` FOREIGN KEY (`id_gambar`) REFERENCES `asset` (`id_asset`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_gambar`) REFERENCES `asset` (`id_asset`),
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_merek`) REFERENCES `merek` (`id_merek`),
  ADD CONSTRAINT `produk_ibfk_4` FOREIGN KEY (`id_jenis_produk`) REFERENCES `jenis_produk` (`id_jenis_produk`),
  ADD CONSTRAINT `produk_ibfk_5` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`id_creator`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `slider_ibfk_2` FOREIGN KEY (`gambar_slider`) REFERENCES `asset` (`id_asset`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
