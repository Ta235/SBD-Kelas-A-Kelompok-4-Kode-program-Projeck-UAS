-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 12.34
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jogjakonveksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `Kd_barang` varchar(10) NOT NULL,
  `Nama_Barang` varchar(25) DEFAULT NULL,
  `Harga_Barang` int(15) DEFAULT NULL,
  `Satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`Kd_barang`, `Nama_Barang`, `Harga_Barang`, `Satuan`) VALUES
('123', 'adwawdawdwa', 99881, 'Imam'),
('awda', 'awda', 1213, 'awdad'),
('awdawd', '[value-2]', 1, '[value-4]'),
('B2', 'kakua', 98789, 'unit'),
('Imam', 'Imam', 1000, 'Orang'),
('ug123', 'Marta', 5000, '12'),
('[B1]', '[Baju]', 0, '[unit]'),
('[value-1]', '[value-2]', 1, '[value-4]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `kd_jasa` varchar(10) NOT NULL,
  `Nama_jasa` varchar(20) DEFAULT NULL,
  `Harga` int(15) DEFAULT NULL,
  `Satuan` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`kd_jasa`, `Nama_jasa`, `Harga`, `Satuan`) VALUES
('2', 'anjasjakj', 8989989, 'unit'),
('4', 'SXCz', 12313, 'adawd'),
('5', 'SXCz', 12313, 'adawd'),
('6', 'SXCz', 12313, 'adawd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Kd_Pelanggan` varchar(10) NOT NULL,
  `Nama_Pelanggan` varchar(50) DEFAULT NULL,
  `Nomor_pelanggan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`Kd_Pelanggan`, `Nama_Pelanggan`, `Nomor_pelanggan`) VALUES
('awdad', 'awdad', '122113'),
('awdadb', 'ajajakj', '13241'),
('iammm', 'mamii', '12321412414421'),
('P6', 'UYG897GUYBHJ', '123213'),
('wadad', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `Kd_Staff` varchar(10) NOT NULL,
  `Nama_Staff` varchar(50) DEFAULT NULL,
  `Posisi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`Kd_Staff`, `Nama_Staff`, `Posisi`) VALUES
('S2', 'jakaka', 'nakaja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_invoice` int(11) NOT NULL,
  `kd_pelanggan` varchar(10) DEFAULT NULL,
  `kd_barang` varchar(25) DEFAULT NULL,
  `kd_staff` varchar(15) DEFAULT NULL,
  `kd_jasa` varchar(15) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `jumlah_barang` int(4) DEFAULT NULL,
  `jumlah_jasa` int(11) NOT NULL,
  `harga` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kd_invoice`, `kd_pelanggan`, `kd_barang`, `kd_staff`, `kd_jasa`, `tanggal_beli`, `jumlah_barang`, `jumlah_jasa`, `harga`) VALUES
(4, 'awdad', 'awda', 'S2', '4', '2023-07-02', 10, 5, 100000),
(6, 'awdad', '123', 'S2', '4', '2024-07-02', 2, 2, 224388),
(13, 'awdad', 'awda', 'S2', '5', '2023-07-01', 2, 2, 27052);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Kd_barang`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`kd_jasa`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Kd_Pelanggan`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Kd_Staff`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_invoice`),
  ADD KEY `kd_pelanggan` (`kd_pelanggan`),
  ADD KEY `kd_barang` (`kd_barang`),
  ADD KEY `kd_staff` (`kd_staff`),
  ADD KEY `kd_jasa` (`kd_jasa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_id_jasa` FOREIGN KEY (`kd_jasa`) REFERENCES `jasa` (`kd_jasa`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_id_pelanggan` FOREIGN KEY (`kd_pelanggan`) REFERENCES `pelanggan` (`Kd_Pelanggan`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kd_pelanggan`) REFERENCES `pelanggan` (`Kd_Pelanggan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`Kd_barang`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kd_staff`) REFERENCES `staff` (`Kd_Staff`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`kd_jasa`) REFERENCES `jasa` (`kd_jasa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
