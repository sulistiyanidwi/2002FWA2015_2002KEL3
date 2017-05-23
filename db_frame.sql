-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2017 pada 13.21
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_frame`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin123', 'QubrYhIonSfKWaTtIBcSbsZKCCmPb95CgDVZG44jJm0QDgr48zrJTYAiTGLq', NULL, '2017-05-22 20:46:44'),
(3, 'ridwan', 'ridwan123', NULL, '2017-05-19 02:53:20', '2017-05-19 02:53:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ayah`
--

CREATE TABLE IF NOT EXISTS `ayah` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayi`
--

CREATE TABLE IF NOT EXISTS `bayi` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_ibu` int(10) unsigned NOT NULL,
  `id_keterangan` int(10) unsigned NOT NULL,
  `id_jadwalbidan` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `bayi`
--

INSERT INTO `bayi` (`id`, `nama`, `id_ibu`, `id_keterangan`, `id_jadwalbidan`, `created_at`, `updated_at`) VALUES
(5, 'Jalu', 32, 1, 2, '2017-05-22 07:58:49', '2017-05-22 16:12:19'),
(6, 'Sumanto', 33, 1, 3, '2017-05-22 16:12:39', '2017-05-22 16:12:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidan`
--

CREATE TABLE IF NOT EXISTS `bidan` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `tlp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `bidan`
--

INSERT INTO `bidan` (`id`, `nama`, `nik`, `alamat`, `tlp`, `tgl`, `created_at`, `updated_at`) VALUES
(12, 'Mumun', '3456788765', 'Jl. Pramuka 19', '076767898987', '1980-01-01', '2017-05-22 06:26:30', '2017-05-22 16:06:38'),
(13, 'Srie Marsyah', '3123123178', 'Jl. Loajanan', '097665443212', '1988-01-31', '2017-05-22 16:09:33', '2017-05-22 16:09:33'),
(14, 'Tini', '9017172737', 'jl. Merdeka', '081238473812', '1987-03-26', '2017-05-22 16:10:18', '2017-05-22 16:10:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu`
--

CREATE TABLE IF NOT EXISTS `ibu` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namaayah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ibu`
--

INSERT INTO `ibu` (`id`, `nama`, `namaayah`, `alamat`, `tlp`, `created_at`, `updated_at`) VALUES
(31, 'sulastri', 'ridwan', 'JL.pramuka', '085352435678', '2017-05-16 17:58:01', '2017-05-22 06:56:07'),
(32, 'Dewi Anggraini', 'bambang', 'JL.Sentosa gang kenangan 9', '083412345678', '2017-05-19 07:12:51', '2017-05-22 07:39:44'),
(33, 'Maria Susan', 'sutris', 'Jl.Pelajar Rt.7 No.43', '085243546789', '2017-05-19 07:14:08', '2017-05-22 07:39:53'),
(34, 'Cantini', 'paijo', 'JL.Delima No.123', '083456789012', '2017-05-19 07:14:42', '2017-05-22 07:40:03'),
(35, 'Julia Persik', 'paiman', 'Jl.Sana maju mundur No.78', '085300001210', '2017-05-19 07:15:30', '2017-05-22 07:40:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id` int(10) unsigned NOT NULL,
  `waktu_operasi` time NOT NULL,
  `tanggal` date NOT NULL,
  `id_ruangan` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `waktu_operasi`, `tanggal`, `id_ruangan`, `created_at`, `updated_at`) VALUES
(13, '21:02:00', '2010-01-30', 2, '2017-05-22 07:38:48', '2017-05-22 07:38:57'),
(14, '07:30:00', '2017-05-23', 6, '2017-05-22 16:10:59', '2017-05-22 16:10:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalbidan`
--

CREATE TABLE IF NOT EXISTS `jadwalbidan` (
`id` int(10) unsigned NOT NULL,
  `id_bidan` int(10) unsigned NOT NULL,
  `id_jadwal` int(10) unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwalbidan`
--

INSERT INTO `jadwalbidan` (`id`, `id_bidan`, `id_jadwal`, `updated_at`, `created_at`) VALUES
(2, 12, 13, '2017-05-22 07:39:16', '2017-05-22 07:39:16'),
(3, 14, 14, '2017-05-22 16:11:27', '2017-05-22 16:11:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan`
--

CREATE TABLE IF NOT EXISTS `keterangan` (
`id` int(10) unsigned NOT NULL,
  `proses_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `keterangan`
--

INSERT INTO `keterangan` (`id`, `proses_lahir`, `created_at`, `updated_at`) VALUES
(1, 'Sesar', '2017-05-16 08:23:47', '2017-05-19 07:24:30'),
(2, 'Normal', '2017-05-16 08:24:11', '2017-05-19 07:24:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_13_060850_buat_table_bidan', 1),
('2017_05_13_060908_buat_table_admin', 1),
('2017_05_13_060928_buat_table_keterangan', 1),
('2017_05_13_060931_buat_table_ruangan', 1),
('2017_05_13_061110_buat_table_rekam_medis', 1),
('2017_05_13_061120_buat_table_ayah', 1),
('2017_05_13_061121_buat_table_ibu', 1),
('2017_05_13_061234_buat_table_jadwal', 1),
('2017_05_13_061240_buat_table_bayi', 1),
('2017_05_13_061108_buat_table_ayah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekammedis`
--

CREATE TABLE IF NOT EXISTS `rekammedis` (
`id` int(10) unsigned NOT NULL,
  `id_ibu` int(10) unsigned NOT NULL,
  `tensi_darah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gula_darah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kondisi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kolestrol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `rekammedis`
--

INSERT INTO `rekammedis` (`id`, `id_ibu`, `tensi_darah`, `gula_darah`, `kondisi`, `kolestrol`, `created_at`, `updated_at`) VALUES
(4, 31, '110', '90 mg/dL', 'Normal', '240 mg/dL', '2017-05-16 22:27:39', '2017-05-19 07:18:07'),
(5, 32, '120', '100 mg/dL', 'Normal', '110 mg/dL', '2017-05-19 07:18:52', '2017-05-19 07:18:52'),
(6, 33, '100', '90 mg/dL', 'Normal', '110 mg/dL', '2017-05-19 07:19:27', '2017-05-19 07:19:27'),
(7, 34, '160', '200 mg/dL', 'Up Normal', '300 mg/dL', '2017-05-19 07:20:15', '2017-05-19 07:20:15'),
(8, 35, '180', '120 mg/dL', 'Up Normal', '300 mg/dL', '2017-05-19 07:21:17', '2017-05-19 07:21:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, '401 A', '2017-05-16 04:51:18', '2017-05-19 07:07:59'),
(3, '401 B', '2017-05-19 07:08:19', '2017-05-19 07:08:19'),
(4, '402', '2017-05-19 07:08:26', '2017-05-19 07:08:26'),
(5, '403', '2017-05-19 07:08:34', '2017-05-19 07:08:34'),
(6, '404', '2017-05-19 07:08:41', '2017-05-19 07:08:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `ayah`
--
ALTER TABLE `ayah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bayi`
--
ALTER TABLE `bayi`
 ADD PRIMARY KEY (`id`), ADD KEY `bayi_id_ibu_foreign` (`id_ibu`), ADD KEY `bayi_id_keterangan_foreign` (`id_keterangan`), ADD KEY `id_jadwalbidan` (`id_jadwalbidan`);

--
-- Indexes for table `bidan`
--
ALTER TABLE `bidan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id`), ADD KEY `jadwal_id_ruangan_foreign` (`id_ruangan`);

--
-- Indexes for table `jadwalbidan`
--
ALTER TABLE `jadwalbidan`
 ADD PRIMARY KEY (`id`), ADD KEY `id_bidan` (`id_bidan`), ADD KEY `id_jawal` (`id_jadwal`), ADD KEY `id_bidan_2` (`id_bidan`), ADD KEY `id_jadwal` (`id_jadwal`), ADD KEY `id_bidan_3` (`id_bidan`), ADD KEY `id_jadwal_2` (`id_jadwal`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
 ADD PRIMARY KEY (`id`), ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ayah`
--
ALTER TABLE `ayah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bayi`
--
ALTER TABLE `bayi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bidan`
--
ALTER TABLE `bidan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ibu`
--
ALTER TABLE `ibu`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jadwalbidan`
--
ALTER TABLE `jadwalbidan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekammedis`
--
ALTER TABLE `rekammedis`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bayi`
--
ALTER TABLE `bayi`
ADD CONSTRAINT `bayi_ibfk_1` FOREIGN KEY (`id_jadwalbidan`) REFERENCES `jadwalbidan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `bayi_id_ibu_foreign` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `bayi_id_keterangan_foreign` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
ADD CONSTRAINT `jadwal_id_ruangan_foreign` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwalbidan`
--
ALTER TABLE `jadwalbidan`
ADD CONSTRAINT `jadwalbidan_ibfk_1` FOREIGN KEY (`id_bidan`) REFERENCES `bidan` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `jadwalbidan_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekammedis`
--
ALTER TABLE `rekammedis`
ADD CONSTRAINT `rekammedis_ibfk_1` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
