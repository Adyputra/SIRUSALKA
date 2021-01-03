-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 15.14
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rusalka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `rating` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `rating`, `gambar`) VALUES
(2, 'Kemeja Biru Tua', 'Kemeja Lengan Pendek', '1', 35000, 10, 0, 'Gambar_2.jpg'),
(3, 'Kemeja Hitam', 'Kemeja Lengan Pendek', '1', 35000, 10, 0, 'Gambar_3.jpg'),
(4, 'Baju Motif', 'Baju Lengan Panjang', '2', 40000, 9, 0, 'Gambar_4.jpg'),
(5, 'Baju Pink', 'Baju Lengan Panjang', '2', 45000, 9, 2, 'Gambar_5.jpg'),
(6, 'Outer Biru', 'Baju Lengan Panjang', '2', 50000, 10, 3, 'Gambar_6.jpg'),
(7, 'Sandal anak', 'Sandal Anak Pria', '3', 20000, 30, 5, 'Gambar_7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `nomer` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `provinsi`, `kabupaten`, `jalan`, `nomer`, `email`, `note`, `jumlah`, `tgl_pesan`) VALUES
(11, 'ays', '\r\n                                    <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                            <option value=\"1\">Bali</option>\r\n                                                      ', 'Kabupaten Kulon Progo', 'sudirman', '083134920109', 'ferrys.nainin@yahoo.com', 'mookom', 50000, '0000-00-00 00:00:00'),
(12, 'AAA', '\r\n                                    <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                            <option value=\"1\"> Bali</option>\r\n                                                     ', 'Kabupaten Bangka', 'sudirman', '083134920109', 'ferrysnainin@gmail.com', 'asd', 45000, '0000-00-00 00:00:00'),
(13, 'AAA', '\r\n                                    <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                            <option value=\"1\"> Bali</option>\r\n                                                     ', 'Kabupaten Bangka Barat', 'sudirman', '83134920109', 'e41180854@student.polije.ac.id', 'fdhd', 70000, '0000-00-00 00:00:00'),
(14, 'sdfgws', '\r\n                                <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                    <option value=\"1\"> Bali</option>\r\n                                                                 ', 'Kabupaten Bangka', 'sudirman', '083134920109', 'titikindrayati05@gmail.com', 'Asfda', 20000, '0000-00-00 00:00:00'),
(15, 'asd', '\r\n                                <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                    <option value=\"1\"> Bali</option>\r\n                                                                 ', 'Kabupaten Bangli', 'sudirman', '083134920109', 'titikindrayati05@gmail.com', 'asx', 50000, '2020-12-29 17:39:09'),
(16, 'AAA', '\r\n                                <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                    <option value=\"1\"> Bali</option>\r\n                                                                 ', 'Kabupaten Bangli', 'as', '83134920109', 'ferrysnainin@gmail.com', 'asfdtg', 45000, '2020-12-29 17:56:46'),
(17, 'AAA', '\r\n                                    <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                            <option value=\"1\"> Bali</option>\r\n                                                     ', 'Kabupaten Badung', 'wrfdgsfr', '083134920109', 'aam_zombiesgila@yahoo.com', 'asx', 75000, '2020-12-29 21:16:08'),
(18, 'sososo', '\r\n                                    <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                            <option value=\"1\"> Bali</option>\r\n                                                     ', 'Kabupaten Badung', 'sudirman', '083134920109', 'titikindrayati05@gmail.com', 'mookom', 45000, '2020-12-30 05:11:05'),
(19, 'AAA', '\r\n                                    <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                            <option value=\"1\"> Bali</option>\r\n                                                     ', 'Kabupaten Jember', 'sudirman', '083134920109', 'ferrysnainin@gmail.com', 'klm', 85000, '2020-12-30 05:27:55'),
(20, 'sososo', '\r\n                                    <option selected=\"\">Silahkan Pilih Provinsi</option>\r\n                                                                            <option value=\"1\"> Bali</option>\r\n                                                     ', 'Kabupaten Gunung Kidul', 'sudirman', '083134920109', 'titikindrayati05@gmail.com', 'horas', 50000, '2021-01-03 14:53:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Pakaian Pria'),
(2, 'Pakaian Wanita'),
(3, 'Pakaian Anak-anak\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Kemeja Biru', 1, 35000, ''),
(2, 1, 2, 'Kemeja Biru Tua', 1, 35000, ''),
(3, 1, 3, 'Kemeja Hitam', 1, 35000, ''),
(4, 1, 4, 'Baju Motif', 1, 40000, ''),
(5, 3, 1, 'Kemeja Biru', 1, 35000, ''),
(6, 3, 2, 'Kemeja Biru Tua', 1, 35000, ''),
(7, 4, 2, 'Kemeja Biru Tua', 1, 35000, ''),
(8, 5, 1, 'Kemeja Biru', 1, 35000, ''),
(9, 6, 4, 'Baju Motif', 1, 40000, ''),
(10, 7, 1, 'Kemeja Biru', 2, 35000, ''),
(11, 8, 5, 'Baju Pink', 1, 45000, ''),
(12, 9, 4, 'Baju Motif', 1, 40000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(3, 'Ady', 'Ady04', '123', 2),
(4, 'sososo', 'asd', '$2y$10$U.yecSUMMnCyziizy1mwkO4DiQeNZHCuFRaaEGGIK0f4oJn1oJyEq', 2),
(5, 'AAA', 'SSS', '$2y$10$XRL/5ZoXutmur4.5DpKn.u3HM6mD9tDBQOAPiTwu2J7h9Lxd/KnWq', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
