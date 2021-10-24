-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 07 Okt 2020 pada 14.40
-- Versi server: 5.7.26
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `id_role`, `id_pegawai`, `email`, `username`, `password`, `status`, `date`, `update`) VALUES
(1, 1, NULL, 'superadmin', 'superadmin', 'superadmin', 1, '2020-10-05 14:54:17', '2020-10-07 06:43:55'),
(2, 3, 1, 'mujahidhabibullah99@gmail.com', 'mujahidhabibullah99@gmail.com', 'mujahid19', 1, '2020-10-05 15:29:32', '2020-10-06 04:26:12'),
(3, 2, 2, 'ssj@gmail.com', 'ssj@gmail.com', 'dani29', 1, '2020-10-06 07:00:29', '2020-10-07 03:39:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset`
--

CREATE TABLE `aset` (
  `id_aset` int(11) NOT NULL,
  `nama_aset` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `serial_number` varchar(20) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pj` int(11) NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nilai` bigint(20) NOT NULL,
  `depresiasi` float NOT NULL,
  `maintenance` int(11) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `aset`
--

INSERT INTO `aset` (`id_aset`, `nama_aset`, `jenis`, `serial_number`, `id_departemen`, `id_lokasi`, `id_kategori`, `pj`, `tanggal_masuk`, `keterangan`, `kondisi`, `jumlah`, `nilai`, `depresiasi`, `maintenance`, `dokumen`, `date`, `update_at`) VALUES
(1, 'Monitor LED 32 inc', 'fixed', '20201006014203', 1, 1, 1, 1, '2020-10-05 00:00:00', '', 'Bagus', 1, 4450230, 10, 30, '3b700420bacba179646e2c654c9399dc.png', '2020-10-06 06:42:03', '2020-10-07 09:31:12'),
(2, 'Samsung Smart TV', 'fixed', '20201006014235', 1, 1, 1, 1, '2020-10-05 00:00:00', '', 'Bagus', 1, 4450230, 10, 90, '5fc06b603938947f9cd8ac9bba71e657.png', '2020-10-06 06:42:35', '2020-10-07 09:31:16'),
(4, 'Microsoft Windows 10', 'license', '20201007044428', 1, 1, 2, 1, '2020-10-08 00:00:00', 'dasdasd', 'Bagus', 1, 4999997, 0, 365, '3ddf5500c39d153bc13039337f720b1f.png', '2020-10-07 09:44:28', '2020-10-07 09:44:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `departemen`, `date`) VALUES
(1, 'IT', '2020-10-05 21:07:07'),
(2, 'Sales', '2020-10-06 13:58:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `depresiasi_log`
--

CREATE TABLE `depresiasi_log` (
  `id_depresiasi` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `tanggal_depresiasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nilai_sebelum` double NOT NULL,
  `nilai_sesudah` double NOT NULL,
  `keterangan` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `depresiasi_log`
--

INSERT INTO `depresiasi_log` (`id_depresiasi`, `id_aset`, `tanggal_depresiasi`, `nilai_sebelum`, `nilai_sesudah`, `keterangan`, `date`) VALUES
(1, 2, '2021-10-04 17:00:00', 4450230, 4005207, 0, '2020-10-06 06:42:35'),
(3, 4, '2025-10-07 17:00:00', 4999997, 0, 0, '2020-10-07 09:44:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `date`) VALUES
(1, 'Elektronik', '2020-10-05 13:13:54'),
(2, 'Software', '2020-10-07 08:03:51'),
(3, 'Software', '2020-10-07 08:03:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `lokasi`, `date`) VALUES
(1, 'Ruang IT', '2020-10-05 21:09:27'),
(2, 'Lobby', '2020-10-07 14:15:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance_log`
--

CREATE TABLE `maintenance_log` (
  `id_maintenance` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `tanggal_maintenance` date NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan_m` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `maintenance_log`
--

INSERT INTO `maintenance_log` (`id_maintenance`, `id_aset`, `tanggal_maintenance`, `status`, `keterangan_m`, `date`, `update`) VALUES
(1, 2, '2021-10-07', 1, '', '2020-10-06 06:42:35', '2020-10-07 09:17:14'),
(2, 1, '2020-11-06', 3, '', '2020-10-06 12:19:19', '2020-10-07 09:17:26'),
(3, 2, '2020-07-07', 2, '', '2020-10-06 12:25:13', '2020-10-07 09:17:21'),
(4, 4, '2025-10-08', 1, '', '2020-10-07 09:44:28', '2020-10-07 09:44:28'),
(5, 1, '2020-10-12', 1, 'asdasd asdasdas da', '2020-10-07 12:43:42', '2020-10-07 12:43:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_departemen` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `tanggal_lahir`, `id_departemen`, `email`, `nohp`, `jabatan`, `date`) VALUES
(1, 'Mujahid Habibullah', '1999-02-19', 1, 'mujahidhabibullah99@gmail.com', '082137244805', 'Staff IT', '2020-10-05 22:29:32'),
(2, 'Dani', '1993-07-29', 2, 'ssj@gmail.com', '0975643522', 'Manager', '2020-10-06 14:00:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `industri` varchar(50) NOT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `no_telpon`, `email`, `alamat`, `industri`, `fax`, `date`, `update`) VALUES
(1, 'PT Kopi Kenangan', '0812293281', 'kopi@kenangan.com', 'Ubertos, Ground Floor, Jl. A.H. Nasution No.Kav.46A, Pakemitan, Cinambo, Kota Bandung, Jawa Barat 40612', 'Food and Beverage', 'a', '2020-10-07 05:03:29', '2020-10-07 05:03:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `qrcode`
--

CREATE TABLE `qrcode` (
  `id_qr` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `file_qr` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `qrcode`
--

INSERT INTO `qrcode` (`id_qr`, `id_aset`, `file_qr`, `date`, `update`) VALUES
(1, 1, '20201006014203.png', '2020-10-06 08:56:12', '2020-10-06 08:56:42'),
(2, 2, '20201006014235.png', '2020-10-06 08:56:36', '2020-10-06 08:56:36'),
(3, 4, '20201006014235a.png', '2020-10-07 09:49:37', '2020-10-07 09:49:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(32) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`, `date`) VALUES
(1, 'super admin', '2020-10-05 21:44:22'),
(2, 'admin', '2020-10-05 21:44:22'),
(3, 'manager', '2020-10-05 21:45:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `nilai_kontrak` int(20) NOT NULL,
  `premi_asuransi` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_perusahaan`, `tanggal_pinjam`, `tanggal_kembali`, `keterangan`, `status`, `nilai_kontrak`, `premi_asuransi`, `date`, `update`) VALUES
(1, 1, '2020-10-07 00:00:00', '2022-10-07 00:00:00', 'asdasdsa', 2, 10002000, NULL, '2020-10-07 06:27:52', '2020-10-07 10:30:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_log`
--

CREATE TABLE `sewa_log` (
  `id_sewa_log` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `kondisi_sebelum` varchar(100) NOT NULL,
  `kondisi_setelah` varchar(100) DEFAULT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_kembali` datetime DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sewa_log`
--

INSERT INTO `sewa_log` (`id_sewa_log`, `id_aset`, `id_sewa`, `kondisi_sebelum`, `kondisi_setelah`, `tanggal_pinjam`, `tanggal_kembali`, `keterangan`, `status`, `date`, `update`) VALUES
(1, 1, 1, 'Cukup Baik', NULL, '2020-10-07 00:00:00', NULL, NULL, 1, '2020-10-07 06:27:52', '2020-10-07 06:27:52'),
(2, 2, 1, 'Baik', NULL, '2020-10-07 00:00:00', NULL, NULL, 1, '2020-10-07 06:27:52', '2020-10-07 06:27:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indeks untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indeks untuk tabel `depresiasi_log`
--
ALTER TABLE `depresiasi_log`
  ADD PRIMARY KEY (`id_depresiasi`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `maintenance_log`
--
ALTER TABLE `maintenance_log`
  ADD PRIMARY KEY (`id_maintenance`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id_qr`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `sewa_log`
--
ALTER TABLE `sewa_log`
  ADD PRIMARY KEY (`id_sewa_log`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `aset`
--
ALTER TABLE `aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `depresiasi_log`
--
ALTER TABLE `depresiasi_log`
  MODIFY `id_depresiasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `maintenance_log`
--
ALTER TABLE `maintenance_log`
  MODIFY `id_maintenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id_qr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sewa_log`
--
ALTER TABLE `sewa_log`
  MODIFY `id_sewa_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
