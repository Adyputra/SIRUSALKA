-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2020 pada 14.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Kemeja Biru', 'Kemeja Lengan Pendek', 'Pakaian Pria', 35000, 10, 'Gambar_1.jpg'),
(2, 'Kemeja Biru Tua', 'Kemeja Lengan Pendek', 'Pakaian Pria', 35000, 10, 'Gambar_2.jpg'),
(3, 'Kemeja Hitam', 'Kemeja Lengan Pendek', 'Pakaian Pria', 35000, 10, 'Gambar_3.jpg'),
(4, 'Baju Motif', 'Baju Lengan Panjang', 'Pakaian Wanita', 40000, 10, 'Gambar_4.jpg'),
(5, 'Baju Pink', 'Baju Lengan Panjang', 'Pakaian Wanita', 45000, 10, 'Gambar_5.jpg'),
(6, 'Outer Biru', 'Baju Lengan Panjang', 'Pakaian Wanita', 50000, 10, 'Gambar_6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Ady Nugraha Putra', 'Situbondo, Jawa Timur', '2020-12-01 19:26:43', '1970-01-01 07:00:00'),
(2, 'Ady Nugraha Putra', 'Situbondo, Jawa Timur', '2020-12-01 19:47:43', '1970-01-01 07:00:00'),
(3, 'Meilinnia Fortuna Astri', 'Jember, Jawa Timur', '2020-12-01 19:51:39', '1970-01-01 07:00:00'),
(4, 'uyyy', 'jemb', '2020-12-01 19:56:29', '1970-01-01 07:00:00'),
(5, 'test', 'Jember, Jawa Timur', '2020-12-01 20:15:25', '2020-12-02 20:15:25'),
(6, 'test 2', 'Situbondo, Jawa Timur', '2020-12-01 20:26:42', '2020-12-02 20:26:42');

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
(9, 6, 4, 'Baju Motif', 1, 40000, '');

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
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
