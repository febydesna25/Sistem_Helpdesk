-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2022 pada 01.12
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bagian`
--

CREATE TABLE `data_bagian` (
  `kode_bagian` varchar(10) NOT NULL,
  `nama_bagian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bagian`
--

INSERT INTO `data_bagian` (`kode_bagian`, `nama_bagian`) VALUES
('KR', 'Kurir'),
('OFC', 'Office');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penanganan`
--

CREATE TABLE `data_penanganan` (
  `kode_penanganan` varchar(10) NOT NULL,
  `kode_tiket` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `permasalahan` text NOT NULL,
  `penanganan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penanganan`
--

INSERT INTO `data_penanganan` (`kode_penanganan`, `kode_tiket`, `nama`, `email`, `permasalahan`, `penanganan`) VALUES
('54GF', 'tyWY', 'Reza', 'rezaar12@gmail.com', 'Harga terlalu mahal', 'Maaf sudah ketentuan office kami'),
('D0k6', '8ynd', 'Deswa', 'deswa1234@gmail.com', 'Tidak melayani dengan baik', 'Kami akan memperbaiki pelayanan kami'),
('I4x3', '8iR4', 'Raih', 'raih@gmail.com', 'Kurir tidak sopan', 'kami akan memperingat kan kurir'),
('PNdx', 'rdti', 'Ica', 'ica@gmailcom', 'Setrika tidak rapi', 'kami akan merapikan setrika '),
('spVn', '2Jie', 'Dania', 'dania@gmail.com', 'Sering kembalian dalam bentuk uang sobek', 'Baik terima kasih,, lain kali kami akan kembalikan dalam bentuk uang'),
('t2wT', 'XE5r', 'Dela', 'dela@gmail.com', 'Kurang dalam menjelaskan pilihan parfum', 'kami akan membuat poster pilihan parfum'),
('yUoz', '7gI0', 'Cici', 'cici@gmail.com', 'Tidak ada respon', 'Kami akan merespon dengan cepat untuk selanjutnya'),
('zu9T', 'fMhQ', 'Kalisa', 'kalisa@gmail.com', 'Struk kurang jelas', 'Kami akan mengganti mesin print struk ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_masalah`
--

CREATE TABLE `item_masalah` (
  `kode_item` varchar(10) NOT NULL,
  `kode_kategori` varchar(10) NOT NULL,
  `permasalahan` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item_masalah`
--

INSERT INTO `item_masalah` (`kode_item`, `kode_kategori`, `permasalahan`, `nama`, `email`, `alamat`, `notelp`) VALUES
('4QH9 ', 'PLY', 'Tidak ada respon', 'Cici ', 'cici@gmail.com', 'Limau Manis', '0831567890'),
('6kN0 ', 'KWL', 'Setrika tidak rapi', 'Ica', 'ica@gmailcom', 'Bandar Buat', '082343342112'),
('fMTP ', 'PLY', 'Tidak melayani dengan baik', 'Deswa', 'deswa1234@gmail.com', 'Pisang', '0865577995'),
('jJq7 ', 'PBY', 'Sering kembalian dalam bentuk uang sobek', 'Dania', 'dania@gmail.com', 'Andalas', '082345668789'),
('JZbD ', 'PLY', 'Kurang ramah', 'Tita Nia', 'titania@gmail.com', 'Pasar Baru', '082213431343'),
('kJ1G ', 'PBY', 'Harga terlalu mahal', 'Reza', 'rezaar12@gmail.com', 'Limau Manis', '082267689091'),
('KpnL ', 'PBY', 'Struk kurang jelas', 'Kalisa', 'kalisa@gmail.com', 'Jamsek', '083165567990'),
('PUt4 ', 'KRM', 'Kurir tidak sopan', 'Raih', 'raih@gmail.com', 'Air Tawar', '082345548558'),
('qrPC ', 'PLY', 'Kurang dalam menjelaskan pilihan parfum', 'Dela', 'dela@gmail.com', 'Kuranji', '0822000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_masalah`
--

CREATE TABLE `kategori_masalah` (
  `kode_kategori` varchar(10) NOT NULL,
  `kode_bagian` varchar(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_masalah`
--

INSERT INTO `kategori_masalah` (`kode_kategori`, `kode_bagian`, `nama_kategori`) VALUES
('KRM', 'KR', 'Pengiriman'),
('KWL', 'OFC', 'Kwalitas'),
('PBY', 'OFC', 'Pembayaran'),
('PLY', 'OFC', 'Pelayanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `kode_rating` varchar(10) NOT NULL,
  `kode_penanganan` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `permasalahan` text NOT NULL,
  `penanganan` text NOT NULL,
  `beri_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`kode_rating`, `kode_penanganan`, `nama`, `email`, `permasalahan`, `penanganan`, `beri_rating`) VALUES
('5k7B', 'zu9T', 'Kalisa', 'kalisa@gmail.com', 'Struk kurang jelas', 'Kami akan mengganti mesin print struk ', 7),
('drz3', '54GF', 'Reza', 'rezaar12@gmail.com', 'Harga terlalu mahal', 'Maaf sudah ketentuan office kami', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_masuk`
--

CREATE TABLE `tiket_masuk` (
  `kode_tiket` varchar(10) NOT NULL,
  `kode_item` varchar(10) NOT NULL,
  `permasalahan` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket_masuk`
--

INSERT INTO `tiket_masuk` (`kode_tiket`, `kode_item`, `permasalahan`, `nama`, `email`, `alamat`, `notelp`) VALUES
('2Jie', 'jJq7 ', 'Sering kembalian dalam bentuk uang sobek', 'Dania', 'dania@gmail.com', 'Andalas', '082345668789'),
('7gI0', '4QH9 ', 'Tidak ada respon', 'Cici', 'cici@gmail.com', 'Limau Manis', '0831567890'),
('8iR4', 'PUt4 ', 'Kurir tidak sopan', 'Raih', 'raih@gmail.com', 'Air Tawar', '082345548558'),
('8ynd', 'fMTP ', 'Tidak melayani dengan baik', 'Deswa', 'deswa1234@gmail.com', 'Pisang', '0865577995'),
('Ew7T', 'JZbD ', 'Kurang ramah', 'Tita Nia', 'titania@gmail.com', 'Pasar Baru', '082213431343'),
('fMhQ', 'KpnL ', 'Struk kurang jelas', 'Kalisa', 'kalisa@gmail.com', 'Jamsek', '083165567990'),
('rdti', '6kN0 ', 'Setrika tidak rapi', 'Ica', 'ica@gmailcom', 'Bandar Buat', '082343342112'),
('tyWY', 'kJ1G ', 'Harga terlalu mahal', 'Reza', 'rezaar12@gmail.com', 'Limau Manis', '082267689091'),
('XE5r', 'qrPC ', 'Kurang dalam menjelaskan pilihan parfum', 'Dela', 'dela@gmail.com', 'Kuranji', '0822000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `password`) VALUES
(5, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bagian`
--
ALTER TABLE `data_bagian`
  ADD PRIMARY KEY (`kode_bagian`);

--
-- Indeks untuk tabel `data_penanganan`
--
ALTER TABLE `data_penanganan`
  ADD PRIMARY KEY (`kode_penanganan`),
  ADD KEY `kode_tiket` (`kode_tiket`);

--
-- Indeks untuk tabel `item_masalah`
--
ALTER TABLE `item_masalah`
  ADD PRIMARY KEY (`kode_item`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- Indeks untuk tabel `kategori_masalah`
--
ALTER TABLE `kategori_masalah`
  ADD PRIMARY KEY (`kode_kategori`),
  ADD KEY `kode_bagian` (`kode_bagian`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`kode_rating`),
  ADD KEY `kode_penanganan` (`kode_penanganan`);

--
-- Indeks untuk tabel `tiket_masuk`
--
ALTER TABLE `tiket_masuk`
  ADD PRIMARY KEY (`kode_tiket`),
  ADD KEY `kode_item` (`kode_item`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_penanganan`
--
ALTER TABLE `data_penanganan`
  ADD CONSTRAINT `data_penanganan_ibfk_1` FOREIGN KEY (`kode_tiket`) REFERENCES `tiket_masuk` (`kode_tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `item_masalah`
--
ALTER TABLE `item_masalah`
  ADD CONSTRAINT `item_masalah_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori_masalah` (`kode_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kategori_masalah`
--
ALTER TABLE `kategori_masalah`
  ADD CONSTRAINT `kategori_masalah_ibfk_1` FOREIGN KEY (`kode_bagian`) REFERENCES `data_bagian` (`kode_bagian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`kode_penanganan`) REFERENCES `data_penanganan` (`kode_penanganan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tiket_masuk`
--
ALTER TABLE `tiket_masuk`
  ADD CONSTRAINT `tiket_masuk_ibfk_1` FOREIGN KEY (`kode_item`) REFERENCES `item_masalah` (`kode_item`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
