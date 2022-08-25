-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 16.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asessmen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ppks`
--

CREATE TABLE `tb_ppks` (
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `NIK` int(20) NOT NULL,
  `no_kk` int(20) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `usia` int(3) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `jumlah_saudara` int(3) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `jaminan_sosial` varchar(20) NOT NULL,
  `no_kartu` int(20) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `program_rehabilitasi` varchar(20) NOT NULL,
  `penyelenggara` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `alamat_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` int(50) NOT NULL,
  `no_hp_ayah` int(20) NOT NULL,
  `st_hidup_ayah` varchar(20) NOT NULL,
  `agama_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` int(20) NOT NULL,
  `no_hp_ibu` int(20) NOT NULL,
  `st_hidup_ibu` varchar(20) NOT NULL,
  `agama_ibu` varchar(20) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `penghasilan_wali` varchar(50) NOT NULL,
  `no_hp_wali` int(20) NOT NULL,
  `agama_wali` varchar(20) NOT NULL,
  `hubungan_dengan_pm` varchar(50) NOT NULL,
  `nama_keluarga` varchar(50) NOT NULL,
  `alamat_keluarga` varchar(50) NOT NULL,
  `pekerjaan_keluarga` varchar(50) NOT NULL,
  `penghasilan_keluarga` int(20) NOT NULL,
  `no_hp_keluarga` int(20) NOT NULL,
  `st_hidup_keluarga` varchar(20) NOT NULL,
  `agama_keluarga` varchar(20) NOT NULL,
  `jumlah_tanggungan` int(3) NOT NULL,
  `jenis_disabilitas` varchar(20) NOT NULL,
  `alat_bantu` varchar(50) NOT NULL,
  `kemampuan_dasar` varchar(50) NOT NULL,
  `kapan_alami_disabilitas` varchar(50) NOT NULL,
  `penyakit_diderita` varchar(20) NOT NULL,
  `penyakit_pernah_diderita` varchar(20) NOT NULL,
  `langkah_pengobatan` varchar(50) NOT NULL,
  `obat_yang_dikonsumsi` varchar(20) NOT NULL,
  `jumlah_obat` int(3) NOT NULL,
  `pernah_dirawat` varchar(10) NOT NULL,
  `lama_dirawat` int(3) NOT NULL,
  `kecanduan_narkotika` varchar(10) NOT NULL,
  `keadaan_disabilitas` varchar(10) NOT NULL,
  `riwayat_kesehatan` varchar(50) NOT NULL,
  `bukti_gangguan` varchar(10) NOT NULL,
  `pernah_trauma` varchar(10) NOT NULL,
  `penyelamatan` varchar(50) NOT NULL,
  `medis` varchar(50) NOT NULL,
  `psikososial` varchar(50) NOT NULL,
  `kebutuhan_diinginkan` varchar(50) NOT NULL,
  `diri_sendiri` varchar(200) NOT NULL,
  `keluarga` varchar(200) NOT NULL,
  `masyarakat` varchar(200) NOT NULL,
  `kelembagaan` varchar(200) NOT NULL,
  `analisis_peksos` varchar(1000) NOT NULL,
  `hasil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ppks`
--

INSERT INTO `tb_ppks` (`nama_lengkap`, `nama_panggilan`, `NIK`, `no_kk`, `jenis_kelamin`, `usia`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `anak_ke`, `jumlah_saudara`, `status_pernikahan`, `pekerjaan`, `jaminan_sosial`, `no_kartu`, `no_hp`, `pendidikan_terakhir`, `program_rehabilitasi`, `penyelenggara`, `nama_ayah`, `alamat_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `st_hidup_ayah`, `agama_ayah`, `nama_ibu`, `alamat_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `st_hidup_ibu`, `agama_ibu`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_wali`, `agama_wali`, `hubungan_dengan_pm`, `nama_keluarga`, `alamat_keluarga`, `pekerjaan_keluarga`, `penghasilan_keluarga`, `no_hp_keluarga`, `st_hidup_keluarga`, `agama_keluarga`, `jumlah_tanggungan`, `jenis_disabilitas`, `alat_bantu`, `kemampuan_dasar`, `kapan_alami_disabilitas`, `penyakit_diderita`, `penyakit_pernah_diderita`, `langkah_pengobatan`, `obat_yang_dikonsumsi`, `jumlah_obat`, `pernah_dirawat`, `lama_dirawat`, `kecanduan_narkotika`, `keadaan_disabilitas`, `riwayat_kesehatan`, `bukti_gangguan`, `pernah_trauma`, `penyelamatan`, `medis`, `psikososial`, `kebutuhan_diinginkan`, `diri_sendiri`, `keluarga`, `masyarakat`, `kelembagaan`, `analisis_peksos`, `hasil`) VALUES
('cindy dwi indriani', 'cindy', 320, 302, 'Perempuan', 21, 'ciamis', '0000-00-00', '', 'Pilih Agama', 0, 0, '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', '', '', '', '', 0, 'Pilih agama', '', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', 0, 'Low Vision', 'Kacamata Low Vision', 'Orientasi Mobilitas', 'Sejak Lahir', 'Pilih disini', '', '', 'Pilih disini', 0, 'Pilih disi', 0, 'Pilih disi', 'Pilih disi', '', 'Pilih disi', 'Pilih disi', '', '', '', 'Pilih kebutuhan', '', '', '', '', '', ''),
('ujangggg', 'ujang', 123456, 654321, 'Laki-Laki', 23, 'ciamis', '0000-00-00', 'ciparakan', 'Islam', 1, 3, 'belum menikah', 'pekerja lepas', 'tidak ada', 123456, 2147483647, 'smk', 'asdas', 'dsada', 'sada', 'dasd', 'sad', 123456, 124355, 'Masih Hidup', 'islam', 'ada', 'daa', 'aad', 123456, 654789, 'Masih Hidup', 'islam', '', '', '', '', 0, 'Pilih agama', 'spesial', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', 3, 'Low Vision', 'tidak ada', 'Orientasi Mobilitas', 'Kecelakaan', 'Tidak Ada', '', '', 'Pilih disini', 0, 'Tidak', 0, 'Tidak', 'Tidak', '', 'Tidak', 'Tidak', '', '', '', 'Pilih kebutuhan', '', '', '', '', '', 'keluarga'),
('ujang riswanto', 'ujang', 320721, 320023, 'Laki-Laki', 22, 'ciamis', '0000-00-00', '', 'Pilih Agama', 0, 0, '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', '', '', '', '', 0, 'Pilih agama', '', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', 0, 'Low Vision', 'Kacamata Low Vision', 'Orientasi Mobilitas', 'Sejak Lahir', 'Pilih disini', '', '', 'Pilih disini', 0, 'Pilih disi', 0, 'Pilih disi', 'Pilih disi', '', 'Pilih disi', 'Pilih disi', '', '', '', 'Pilih kebutuhan', '', '', '', '', '', ''),
('GAGAS LANGGENG DWI PRASTYO', 'gagas', 321123, 56486, 'Perempuan', 0, '', '0000-00-00', '', 'Pilih Agama', 0, 0, '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', '', '', '', '', 0, 'Pilih agama', '', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', 0, 'Low Vision', 'Kacamata Low Vision', 'Orientasi Mobilitas', 'Sejak Lahir', 'Pilih disini', '', '', 'Pilih disini', 0, 'Pilih disi', 0, 'Pilih disi', 'Pilih disi', '', 'Pilih disi', 'Pilih disi', '', '', '', 'Pilih kebutuhan', '', '', '', '', '', ''),
('sefti', 'sef', 321124, 321123, 'Laki-Laki', 20, 'Banyumas', '0000-00-00', '', 'Pilih Agama', 0, 0, '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', '', '', '', '', 0, 'Pilih agama', '', '', '', '', 0, 0, 'Silahkan pilih disin', 'Pilih agama', 0, 'Low Vision', 'Kacamata Low Vision', 'Orientasi Mobilitas', 'Sejak Lahir', 'Pilih disini', '', '', 'Pilih disini', 0, 'Pilih disi', 0, 'Pilih disi', 'Pilih disi', '', 'Pilih disi', 'Pilih disi', '', '', '', 'Pilih kebutuhan', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ppks`
--
ALTER TABLE `tb_ppks`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
