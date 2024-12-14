-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2024 pada 14.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makeupdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(256) NOT NULL,
  `deskripsi_artikel` varchar(256) NOT NULL,
  `gambar_artikel` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `deskripsi_artikel`, `gambar_artikel`) VALUES
(11, 'Sembarangqwew', 'Semndiodbscosjcsjsbojcbscee111111', '1716981681_ddaeda0c0db9520cb52f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'EyeShadow'),
(2, 'EyeBrow'),
(3, 'Blushon'),
(4, 'Lip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `undertone`
--

CREATE TABLE `undertone` (
  `id_undertone` int(11) NOT NULL,
  `judul_undertone` varchar(256) NOT NULL,
  `deskripsi_undertone` varchar(256) NOT NULL,
  `gambar_undertone_satu` varchar(256) NOT NULL,
  `gambar_undertone_dua` varchar(256) NOT NULL,
  `gambar_undertone_tiga` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `undertone`
--

INSERT INTO `undertone` (`id_undertone`, `judul_undertone`, `deskripsi_undertone`, `gambar_undertone_satu`, `gambar_undertone_dua`, `gambar_undertone_tiga`) VALUES
(5, 'qqq', 'qqq', '1716979054_f7895e87595bd53ed7e5.jpg', '1716979054_924a4b1dc9f790803b80.jpg', '1716979054_0f38ab11bab5c07aff4e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'ad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(256) NOT NULL,
  `deskripsi_video` varchar(256) NOT NULL,
  `link_video` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `deskripsi_video`, `link_video`) VALUES
(4, 'MAKEUP MAKES ME LOOK WORSE? Everyday Makeup for Beginners', '12', 'https://youtu.be/CdvvEWjSeZc?si=rJHjK9yotCZFBVtK'),
(8, 'qqwqqwq', 'swswwws', 'https://youtu.be/84IOtc05TuA?si=WUsoqm57YwCHHdlK'),
(9, 'pwk', 'wawwwww', 'https://youtu.be/XRDg-6jKj4Y?si=W1PCm4UOMiwLgLys'),
(10, 'asasa', 'wwwweqeq', 'https://youtu.be/lqHDo13Ocl0?si=2mzD6L2zyFruC0Ag'),
(11, 'saasas', 'sasasa', 'https://youtu.be/lqHDo13Ocl0?si=2mzD6L2zyFruC0Ag'),
(12, 'saasa', 'asddada', 'https://youtu.be/lqHDo13Ocl0?si=vRw5J2rlxpio_Lq0'),
(13, 'Sembarang2', 'fs fsfsdfsdfsdfsfs', 'https://youtu.be/lqHDo13Ocl0?si=vRw5J2rlxpio_Lq0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warnatryon`
--

CREATE TABLE `warnatryon` (
  `id_warna` int(11) NOT NULL,
  `gambar_orang` varchar(256) NOT NULL,
  `nama_warna` varchar(256) NOT NULL,
  `kode_warna` varchar(256) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `warnatryon`
--

INSERT INTO `warnatryon` (`id_warna`, `gambar_orang`, `nama_warna`, `kode_warna`, `id_kategori`) VALUES
(14, '1716913664_f81ae2999c60b6bb2045.jpg', 'Lips-Pink', '#ff0080', 4),
(15, '1716903324_b6c8c29fa811f5d619ab.jpg', 'Lips-Merah', '#400040', 4),
(16, '1716903358_fb208720f32de5c61a04.jpg', 'Lips-KurangPink', '#ff80ff', 4),
(17, '1716903498_03de59eea9907915fedd.jpg', 'eyebrow-coklat muda', '#ccb1a8', 2),
(18, '1716903666_322c7a3647a4bcf5aa25.jpg', 'eyebrow-coklat agak muda', '#9bab63', 2),
(19, '1716949977_efe65824f6dc7bbfab12.jpg', 'Lips', '#000000', 4),
(20, '1716961105_0ca9c164fff15cf988c0.jpg', 'Lips-hitan2222', '#400040', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `undertone`
--
ALTER TABLE `undertone`
  ADD PRIMARY KEY (`id_undertone`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indeks untuk tabel `warnatryon`
--
ALTER TABLE `warnatryon`
  ADD PRIMARY KEY (`id_warna`),
  ADD KEY `kode_warna` (`kode_warna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `undertone`
--
ALTER TABLE `undertone`
  MODIFY `id_undertone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `warnatryon`
--
ALTER TABLE `warnatryon`
  MODIFY `id_warna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
