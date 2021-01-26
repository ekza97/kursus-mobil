-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Jan 2021 pada 11.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `idmember` int(11) NOT NULL,
  `member_nik` varchar(20) DEFAULT NULL,
  `member_nama` varchar(128) DEFAULT NULL,
  `member_tmp_lahir` varchar(64) DEFAULT NULL,
  `member_tgl_lahir` date DEFAULT NULL,
  `member_jk` enum('L','P') DEFAULT NULL,
  `member_agama` enum('Islam','Kristen Protestan','Kristen Katolik','Hindu','Budha','Konghucu') DEFAULT NULL,
  `member_telp` varchar(13) DEFAULT NULL,
  `member_email` varchar(64) DEFAULT NULL,
  `member_alamat` varchar(256) DEFAULT NULL,
  `member_status` enum('baru','lama') DEFAULT NULL,
  `member_ktp` varchar(128) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `user_fullname` varchar(128) DEFAULT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `user_password` varchar(128) DEFAULT NULL,
  `user_akses` enum('admin','member') DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idusers`, `user_fullname`, `user_name`, `user_password`, `user_akses`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Administrator', 'admin', '$2y$10$E33mbIeZc665JZiGOIwCMunuLcI.YnlIzMvGoqgPWflEykvFGFTAK', 'admin', NULL, NULL, NULL, NULL),
(8, 'Eka Saputra', '123', '$2y$10$KNgkz7hYcgHPgOcldSgGs.EYCAezhuiDEN0ZfQmOZYK4YkwU/OZom', 'member', 1611649724, NULL, NULL, NULL),
(9, 'user', 'user', '$2y$10$WYaEuEvA2SwjHKbHTE926.V90bVUrfoZyP4kPriUs8Em5qjzxIkh6', 'member', 1611657212, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`),
  ADD KEY `fk_member_users_idx` (`users_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_member_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
