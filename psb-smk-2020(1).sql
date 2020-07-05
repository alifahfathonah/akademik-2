-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Jul 2020 pada 01.20
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb-smk-2020`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `biaya_pendaftaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `biaya_pendaftaran` (
`id_biaya_pendaftaran` int(10)
,`nama_pendaftaran` varchar(100)
,`biaya_pendaftaran` int(100)
,`id_gelombang` int(10)
,`id_jurusan` int(10)
,`nama_gelombang` varchar(50)
,`kompetensi_keahlian` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `biaya_pengembangan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `biaya_pengembangan` (
`id_pengembangan` int(10)
,`nama_pengembangan` varchar(100)
,`biaya_pengembangan` int(100)
,`id_gelombang` int(10)
,`id_jurusan` int(10)
,`nama_gelombang` varchar(50)
,`kompetensi_keahlian` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `biaya_seragam`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `biaya_seragam` (
`id_seragam` int(10)
,`nama_seragam` varchar(100)
,`biaya_seragam` int(100)
,`id_gelombang` int(10)
,`id_jurusan` int(10)
,`nama_gelombang` varchar(50)
,`kompetensi_keahlian` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `biaya_spp`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `biaya_spp` (
`id_spp` int(10)
,`nama_spp` varchar(100)
,`biaya_spp` int(100)
,`id_gelombang` int(10)
,`id_jurusan` int(10)
,`nama_gelombang` varchar(50)
,`kompetensi_keahlian` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `buat_wawancara`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `buat_wawancara` (
`id_wawancara` int(10)
,`nama_wawancara` varchar(100)
,`kriteria_wawancara` varchar(100)
,`ket_wawancara` set('diterima','tidak diterima')
,`status` set('aktif','non aktif')
,`id_jurusan` int(10)
,`kompetensi_keahlian` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_ortu`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `data_ortu` (
`idsis` int(10)
,`nama_siswa` varchar(100)
,`id_pendaf` int(10)
,`id_orang_tua` int(10)
,`nama_ayah` varchar(100)
,`no_hp_ayah` varchar(15)
,`pekerjaan_ayah` varchar(100)
,`status_ayah` set('masih hidup','pisah','almarhum')
,`nama_ibu` varchar(100)
,`no_hp_ibu` varchar(15)
,`pekerjaan_ibu` varchar(100)
,`status_ibu` set('masih hidup','pisah','almarhumah')
,`pendapatan_ortu` varchar(100)
,`ortu_dukuh` varchar(100)
,`ortu_rt` varchar(5)
,`ortu_rw` varchar(5)
,`ortu_kelurahan` varchar(100)
,`ortu_kecamatan` varchar(100)
,`ortu_kabupaten` varchar(100)
,`ortu_provinsi` varchar(100)
,`nama_wali` varchar(100)
,`no_hp_wali` varchar(15)
,`pekerjaan_wali` varchar(100)
,`alamat_wali` varchar(200)
,`id_siswa` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_siswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `data_siswa` (
`tgl_pendaftaran` date
,`no_pendaftaran` varchar(100)
,`username` varchar(100)
,`password` text
,`nama_siswa` varchar(100)
,`pil_1` varchar(200)
,`pil_2` varchar(200)
,`pil_3` varchar(200)
,`tempat_lahir` varchar(100)
,`tanggal_lahir` date
,`asal_sekolah` varchar(100)
,`id_siswa` int(10)
,`jenis_kelamin` enum('L','P')
,`id_pendaftaran` int(11)
,`nisn` text
,`sis_dukuh` varchar(100)
,`agama` set('Islam','Kristen','Katholik','Hindu','Budha')
,`sis_rt` varchar(5)
,`sis_rw` varchar(5)
,`sis_kelurahan` varchar(100)
,`sis_kecamatan` varchar(100)
,`sis_kabupaten` varchar(100)
,`sis_provinsi` varchar(100)
,`seri_ijasah_smp` text
,`seri_skhun_smp` text
,`no_un_smp` text
,`pas_photo` text
,`status` set('aktif','non aktif')
,`id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pilih_kelas`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `pilih_kelas` (
`id_pilih_kelas` int(10)
,`nama_pilih_kelas` varchar(50)
,`id_kelas` int(10)
,`id_siswa` int(10)
,`status_pilih_kelas` set('aktif','non aktif')
,`nama_siswa` varchar(100)
,`idkelas` int(10)
,`nama_kelas` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berkas_siswa`
--

CREATE TABLE `tb_berkas_siswa` (
  `id_berkas_siswa` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `nama_file` text NOT NULL,
  `upload_file` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berkas_siswa`
--

INSERT INTO `tb_berkas_siswa` (`id_berkas_siswa`, `id_siswa`, `nama_file`, `upload_file`, `tgl_upload`) VALUES
(3, 5, 'Berkas Image', 'aleks-dorohovich-nJdwUHmaY8A-unsplash.jpg', '2020-07-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_biaya_pendaftaran`
--

CREATE TABLE `tb_biaya_pendaftaran` (
  `id_biaya_pendaftaran` int(10) NOT NULL,
  `nama_pendaftaran` varchar(100) NOT NULL,
  `biaya_pendaftaran` int(100) NOT NULL,
  `id_gelombang` int(10) NOT NULL,
  `id_jurusan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_biaya_pendaftaran`
--

INSERT INTO `tb_biaya_pendaftaran` (`id_biaya_pendaftaran`, `nama_pendaftaran`, `biaya_pendaftaran`, `id_gelombang`, `id_jurusan`) VALUES
(2, 'Biaya Pendaftaran TBSM', 55000, 1, 3),
(3, 'Biaya Pendaftaran TEI', 90000, 1, 5),
(4, 'Biaya Pendaftaran MM', 75000, 1, 6),
(6, 'Biaya Pendaftaran TBO', 50000, 1, 4),
(7, 'Biaya Pendaftaran TKR', 75000, 1, 2),
(8, 'Biaya Pendaftaran TKR', 75000, 2, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tb_detail_pengumuman`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tb_detail_pengumuman` (
`id_pengumuman` int(10)
,`tgl_pengumuman` date
,`judul_pengumuman` text
,`isi_pengumuman` text
,`status` set('aktif','non aktif')
,`id_personal` int(10)
,`nama_personal` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gelombang`
--

CREATE TABLE `tb_gelombang` (
  `id_gelombang` int(10) NOT NULL,
  `nama_gelombang` varchar(50) NOT NULL,
  `tahun_pelajaran` varchar(15) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `status` set('aktif','non aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gelombang`
--

INSERT INTO `tb_gelombang` (`id_gelombang`, `nama_gelombang`, `tahun_pelajaran`, `tgl_awal`, `tgl_akhir`, `waktu_awal`, `waktu_akhir`, `status`) VALUES
(1, 'Gelombang 1', '2020/2021', '2020-01-01', '2020-02-29', '05:00:00', '22:00:00', 'aktif'),
(2, 'Gelombang 2', '2020/2021', '2020-03-01', '2020-04-30', '06:00:00', '22:00:00', 'non aktif'),
(3, 'Gelombang 3', '2020/2021', '2020-05-01', '2020-06-30', '06:00:00', '23:00:00', 'non aktif'),
(4, 'Gelombang 4', '2020/2021', '2020-07-01', '2020-07-31', '06:00:00', '22:00:00', 'non aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_wawancara`
--

CREATE TABLE `tb_hasil_wawancara` (
  `id_hasil_wawancara` int(10) NOT NULL,
  `id_pendaftaran` int(10) NOT NULL,
  `id_personal` int(10) NOT NULL,
  `status_wawancara` set('diterima','tidak diterima') NOT NULL,
  `pil_jur` varchar(100) NOT NULL,
  `isi_wawancara` varchar(200) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil_wawancara`
--

INSERT INTO `tb_hasil_wawancara` (`id_hasil_wawancara`, `id_pendaftaran`, `id_personal`, `status_wawancara`, `pil_jur`, `isi_wawancara`, `catatan`) VALUES
(3, 4, 4, 'diterima', '5', 'Perilaku Baik, Hafiz Qur\'ann', 'Layak Masuk'),
(4, 2, 5, 'diterima', '2', 'Bagus', 'Layak Masuk'),
(5, 6, 4, 'diterima', '6', 'Bagus', 'Ok'),
(6, 10, 4, 'diterima', '6', 'OK', 'OK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(10) NOT NULL,
  `id_pendaftaran` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_soal` int(10) NOT NULL,
  `jawaban` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(10) NOT NULL,
  `nama_singkat` varchar(10) NOT NULL,
  `bidang_keahlian` varchar(200) NOT NULL,
  `program_keahlian` varchar(200) NOT NULL,
  `kompetensi_keahlian` varchar(200) NOT NULL,
  `kapasitas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_singkat`, `bidang_keahlian`, `program_keahlian`, `kompetensi_keahlian`, `kapasitas`) VALUES
(2, 'TKRO', 'TEKNOLOGI DAN REKAYASA', 'TEKNIK OTOMOTIF', 'TEKNIK KENDARAAN RINGAN OTOMOTIF', 216),
(3, 'TBSM', 'TEKNOLOGI DAN REKAYASA', 'TEKNIK OTOMOTIF', 'TEKNIK DAN BISNIS SEPEDA MOTOR', 144),
(4, 'TBO', 'TEKNOLOGI DAN REKAYASA', 'TEKNIK OTOMOTIF', 'TEKNIK BODI OTOMOTIF', 72),
(5, 'TEI', 'TEKNOLOGI DAN REKAYASA', 'TEKNIK ELEKTRONIKA', 'TEKNIK ELEKTRONIKA INDUSTRI', 36),
(6, 'MM', 'TEKNOLOGI INFORMASI DAN KOMUNIKASI', 'TEKNIK KOMPUTER DAN INFORMATIKA', 'MULTIMEDIA', 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `status_kelas` set('aktif','non aktif') DEFAULT NULL,
  `id_personal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `status_kelas`, `id_personal`) VALUES
(3, 'X O1', 'aktif', 6),
(4, 'X O2', 'aktif', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(10) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `level` set('admin','kepsek','panitia','bendahara','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(10) NOT NULL,
  `id_gelombang` int(10) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `jml_soal` int(5) NOT NULL,
  `tampil_soal` int(5) NOT NULL,
  `bobot_soal` int(5) NOT NULL,
  `status_soal` set('aktif','non aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `id_gelombang`, `nama_mapel`, `jml_soal`, `tampil_soal`, `bobot_soal`, `status_soal`) VALUES
(2, 2, 'Ujian Akademik 2', 11, 3, 100, 'aktif'),
(4, 1, 'Ujian Akademik 1', 20, 10, 100, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mutasi`
--

CREATE TABLE `tb_mutasi` (
  `id_mutasi` int(10) NOT NULL,
  `id_pendaftaran` int(10) NOT NULL,
  `tgl_mutasi` date NOT NULL,
  `isi_mutasi` text NOT NULL,
  `status_mutasi` set('pindah','diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mutasi`
--

INSERT INTO `tb_mutasi` (`id_mutasi`, `id_pendaftaran`, `tgl_mutasi`, `isi_mutasi`, `status_mutasi`) VALUES
(1, 4, '2020-07-09', 'Pindah Sekolah Swasta SMK Muh 1 Solo', 'pindah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_pendaftaran` int(10) NOT NULL,
  `jml_benar` int(5) NOT NULL,
  `jml_salah` int(5) NOT NULL,
  `skor` varchar(10) NOT NULL,
  `hasil_status` set('lulus','gagal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orang_tua`
--

CREATE TABLE `tb_orang_tua` (
  `id_orang_tua` int(10) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `no_hp_ayah` varchar(15) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `status_ayah` set('masih hidup','pisah','almarhum') NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_hp_ibu` varchar(15) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `status_ibu` set('masih hidup','pisah','almarhumah') NOT NULL,
  `pendapatan_ortu` varchar(100) NOT NULL,
  `ortu_dukuh` varchar(100) NOT NULL,
  `ortu_rt` varchar(5) NOT NULL,
  `ortu_rw` varchar(5) NOT NULL,
  `ortu_kelurahan` varchar(100) NOT NULL,
  `ortu_kecamatan` varchar(100) NOT NULL,
  `ortu_kabupaten` varchar(100) NOT NULL,
  `ortu_provinsi` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `no_hp_wali` varchar(15) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `alamat_wali` varchar(200) NOT NULL,
  `id_siswa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_orang_tua`
--

INSERT INTO `tb_orang_tua` (`id_orang_tua`, `nama_ayah`, `no_hp_ayah`, `pekerjaan_ayah`, `status_ayah`, `nama_ibu`, `no_hp_ibu`, `pekerjaan_ibu`, `status_ibu`, `pendapatan_ortu`, `ortu_dukuh`, `ortu_rt`, `ortu_rw`, `ortu_kelurahan`, `ortu_kecamatan`, `ortu_kabupaten`, `ortu_provinsi`, `nama_wali`, `no_hp_wali`, `pekerjaan_wali`, `alamat_wali`, `id_siswa`) VALUES
(1, 'budi', '08766667', 'petani', 'masih hidup', 'suji', '0909090', 'buruh', 'masih hidup', 'Rp 500.000 s/d Rp. 1.000.000', 'baru', '1', '3', 'fk', 's', 'a', 's', 'yoyok', '87810', 'buruh', 'Alamata jadhjad', 1),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 'Budi', '909090', '90909', 'masih hidup', 'J', '8787', 'PETANI', 'masih hidup', 'Rp 500.000 s/d Rp. 1.000.000', 'S', '1', '3', 'JH', 'JKJKJ', 'KJK', 'KJKJK', 'KK', '09090', 'HKH', 'SOLO', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `tgl_pembayaran` datetime NOT NULL,
  `no_pembayaran` varchar(100) NOT NULL,
  `id_pendaftaran` int(10) NOT NULL,
  `id_pengembangan` int(10) NOT NULL,
  `id_seragam` int(10) NOT NULL,
  `id_spp` int(10) NOT NULL,
  `id_potongan` int(10) NOT NULL,
  `id_personal` int(10) NOT NULL,
  `id_biaya_pendaftaran` int(10) NOT NULL,
  `jml_bayar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(10) NOT NULL,
  `id_gelombang` int(10) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `status` set('aktif','non aktif') NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `agama` set('Islam','Kristen','Katholik','Hindu','Budha') NOT NULL,
  `nik` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `pil_1` varchar(200) NOT NULL,
  `pil_2` varchar(200) NOT NULL,
  `pil_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `id_gelombang`, `tgl_pendaftaran`, `no_pendaftaran`, `status`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `email`, `agama`, `nik`, `asal_sekolah`, `username`, `password`, `pil_1`, `pil_2`, `pil_3`) VALUES
(2, 1, '2020-01-08', '2021-01-001', 'aktif', 'ANDIKA DWI SURA SAPUTRA', 'L', 'KARANGANYAR', '2005-03-05', '089765748323', 'andika.dwi@gmail.com', 'Hindu', '4534536364572545', 'MTS NEGERI 5 KARANGANYAR', 'andika', '7e51eea5fa101ed4dade9ad3a7a072bb', '2', '3', '4'),
(3, 1, '2020-01-15', '2021-01-010', 'aktif', 'ADI NUGROHO', 'L', 'KARANGANYAR', '2005-02-11', '097834257634', 'adi.nugroho@gmail.com', 'Islam', '436534634654374774', 'SMP NEGERI 2 JATIYOSO', 'adi', 'c46335eb267e2e1cde5b017acb4cd799', '4', '3', '6'),
(4, 2, '2020-03-16', '2021-02-112', 'aktif', 'GHANY RIZKYA TSANI PUTRA', 'L', 'KARANGANYAR', '2004-06-03', '098745463723', 'ghany.rizkya@gmail.com', 'Islam', '65362632456576534', 'SMP N 5 KARANGANYAR', 'ghany', 'a348bdd441995aef057a66ed8f3b1cc6', '5', '2', '3'),
(6, 3, '2020-06-09', '2021-03-180', 'aktif', 'NIA NOVY ANA', 'P', 'JEPARA', '2004-11-24', '098734242345', 'nia.novy@gmail.com', 'Islam', '453453643626245634', 'SMP N 4 JATIYOSO', 'nia', '04a481486dd84d7c8bfdfc89d38136a6', '6', '2', '4'),
(10, 1, '2020-07-01', '2020-01-010', 'non aktif', 'Galuh', 'L', 'Karanganyar', '2002-07-08', '098745362718', 'galuh@gmail.com', 'Islam', ' 93248892734896', 'SMP N 2 Karanganyar', 'galuh', '7e67f82b2528050191537b600c15f48e', '6', '6', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengembangan`
--

CREATE TABLE `tb_pengembangan` (
  `id_pengembangan` int(10) NOT NULL,
  `nama_pengembangan` varchar(100) NOT NULL,
  `biaya_pengembangan` int(100) NOT NULL,
  `id_gelombang` int(10) NOT NULL,
  `id_jurusan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengembangan`
--

INSERT INTO `tb_pengembangan` (`id_pengembangan`, `nama_pengembangan`, `biaya_pengembangan`, `id_gelombang`, `id_jurusan`) VALUES
(1, 'Biaya Pengembangan TKRO', 3500000, 1, 2),
(3, 'Biaya Pengembangan TEI', 3211000, 1, 5),
(5, 'Biaya Pengembangan MM', 3450000, 1, 6),
(6, 'Biaya Pengembangan TBSM', 2950000, 1, 3),
(7, 'Biaya Pengembangan TBO', 4320000, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `judul_pengumuman` text NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `status` set('aktif','non aktif') NOT NULL,
  `id_personal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `tgl_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `status`, `id_personal`) VALUES
(1, '2020-06-23', 'Judul Pengumuman Baru', 'Hallo', 'non aktif', 2),
(2, '2020-06-29', 'AWAL MASUK SEKOLAH CALON SISWA BARU', 'SEMUA CALON SISWA YANG SUDAH MELAKUKAN DAFTAR ULANG, UNTUK AWAL MASUK SEKOLAH AKAN DI MULAI PADA:\r\nHARI : SENIN\r\nTANGGAL : 6 JULI 2020\r\nWAKTU : 08.00 WIB\r\nTEMPAT : SMK MUHAMMADIYAH 3 KARANGANYAR\r\n\r\nWAJIB MENGENAKAN MASKER DAN BERSERAGAM SMP.', 'aktif', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_personal`
--

CREATE TABLE `tb_personal` (
  `id_personal` int(10) NOT NULL,
  `nama_personal` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `status` set('aktif','non aktif') NOT NULL,
  `pas_photo` text NOT NULL,
  `level` set('admin','kepsek','panitia','bendahara') NOT NULL,
  `jabatan` set('kepsek','guru','karyawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_personal`
--

INSERT INTO `tb_personal` (`id_personal`, `nama_personal`, `username`, `password`, `jenis_kelamin`, `no_hp`, `email`, `status`, `pas_photo`, `level`, `jabatan`) VALUES
(2, 'PONCO SAPUTRO, A.Md.', 'ponco', '21232f297a57a5a743894a0e4a801fc3', 'L', '085725251215', 'ponco.saputro20@gmail.com', 'aktif', '78145494-side-of-face-happy-man-icon-image-vector-illustration-design.jpg', 'admin', 'karyawan'),
(3, 'BURHAN MUSTAQIM, M.Pd.', 'burhan', 'fe9e3203ad8d1387bf8c8d1d889b902b', 'L', '086736352312', 'burhan.mustaqim@gmail.com', 'aktif', 'Businessman-80_icon-icons_com_57362.png', 'kepsek', 'kepsek'),
(4, 'SAHID, S.H.,S.Pd.', 'sahid', '9f8b4c019d3b7bc89e82a85fbd0d4008', 'L', '098726351287', 'sahid@gmail.com', 'aktif', '129manstudent1_100298.png', 'panitia', 'guru'),
(5, 'FITRI RAHMAWATI, S.E.', 'fitri', '534a0b7aa872ad1340d0071cbfa38697', 'P', '098734278674', 'fitri.rahmawati@gmail.com', 'aktif', '131womanstudent1_100503.png', 'bendahara', 'karyawan'),
(6, 'ENI LESTARI', 'eni', 'e3d96c321f2a71cb81cd7d5f05f1a8d7', 'P', '097834257689', 'eni.lestari@gmail.com', 'aktif', '131womanstudent1_100503.png', 'panitia', 'guru'),
(7, 'TRI ISWANTO, S.Ud.', 'tri', 'd2cfe69af2d64330670e08efb2c86df7', 'L', '098722336578', 'tri.iswanto@gmail.com', 'aktif', '129manstudent1_100298.png', 'panitia', 'guru'),
(8, 'Purnama I', 'purnama', '21232f297a57a5a743894a0e4a801fc3', 'L', '08570190193', 'skindrapurnama@gmail.com', 'non aktif', 'profile.png', 'admin', 'karyawan'),
(9, 'Hangga Brian Maladi, S.Pd', 'hangga', '2a21509747f2b7817ae0f8ba84bc4ab3', 'L', '087684273645', 'hangga.brian@gmail.com', 'non aktif', '', 'panitia', 'guru'),
(10, 'Agus Mardani, S.Kom', 'agus', 'fdf169558242ee051cca1479770ebac3', 'L', '098735241678', 'agus.mardani@gmail.com', 'aktif', '', 'panitia', 'karyawan'),
(11, 'Alfian Huda Muttaqin, S.Pd.I', 'alfian', 'ba4573f04bedd34c4205e034a67b7b44', 'L', '098734256734', 'alfian.huda@gmail.com', 'aktif', '129manstudent1_100298.png', 'panitia', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pilih_kelas`
--

CREATE TABLE `tb_pilih_kelas` (
  `id_pilih_kelas` int(10) NOT NULL,
  `nama_pilih_kelas` varchar(50) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `status_pilih_kelas` set('aktif','non aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pilih_kelas`
--

INSERT INTO `tb_pilih_kelas` (`id_pilih_kelas`, `nama_pilih_kelas`, `id_kelas`, `id_siswa`, `status_pilih_kelas`) VALUES
(1, 'TKRO', 3, 1, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_potongan`
--

CREATE TABLE `tb_potongan` (
  `id_potongan` int(10) NOT NULL,
  `nama_potongan` varchar(100) NOT NULL,
  `biaya_potongan` int(100) NOT NULL,
  `jenis_potongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_potongan`
--

INSERT INTO `tb_potongan` (`id_potongan`, `nama_potongan`, `biaya_potongan`, `jenis_potongan`) VALUES
(2, 'BEASISWA PRESTASI JUARA 1 KABUPATEN', 500000, 'PRESTASI'),
(3, 'BEASISWA PRESTASI JUARA 1 PROVINSI', 1000000, 'PRESTASI'),
(4, 'BEASISWA PRESTASI JUARA 1 NASIONAL', 2000000, 'PRESTASI'),
(5, 'BEASISWA TIDAK MAMPU', 800000, 'TIDAK MAMPU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(10) NOT NULL,
  `nama_prestasi` text NOT NULL,
  `tahun_prestasi` year(4) NOT NULL,
  `tingkat_prestasi` text NOT NULL,
  `peringkat_prestasi` text NOT NULL,
  `id_siswa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_seragam`
--

CREATE TABLE `tb_seragam` (
  `id_seragam` int(10) NOT NULL,
  `nama_seragam` varchar(100) NOT NULL,
  `biaya_seragam` int(100) NOT NULL,
  `id_gelombang` int(10) NOT NULL,
  `id_jurusan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_seragam`
--

INSERT INTO `tb_seragam` (`id_seragam`, `nama_seragam`, `biaya_seragam`, `id_gelombang`, `id_jurusan`) VALUES
(1, 'Biaya Seragam TKRO', 3500000, 1, 2),
(3, 'Biaya Seragam MM', 2500000, 1, 6),
(4, 'Biaya Seragam TEI', 4500000, 1, 5),
(5, 'Biaya Seragam TBSM', 2300000, 1, 3),
(6, 'Biaya Seragam TBO', 3240000, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(10) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `nisn` text NOT NULL,
  `sis_dukuh` varchar(100) NOT NULL,
  `sis_rt` varchar(5) NOT NULL,
  `sis_rw` varchar(5) NOT NULL,
  `sis_kelurahan` varchar(100) NOT NULL,
  `sis_kecamatan` varchar(100) NOT NULL,
  `sis_kabupaten` varchar(100) NOT NULL,
  `sis_provinsi` varchar(100) NOT NULL,
  `seri_ijasah_smp` text NOT NULL,
  `seri_skhun_smp` text NOT NULL,
  `no_un_smp` text NOT NULL,
  `pas_photo` text NOT NULL,
  `status` set('aktif','non aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `id_pendaftaran`, `nisn`, `sis_dukuh`, `sis_rt`, `sis_rw`, `sis_kelurahan`, `sis_kecamatan`, `sis_kabupaten`, `sis_provinsi`, `seri_ijasah_smp`, `seri_skhun_smp`, `no_un_smp`, `pas_photo`, `status`) VALUES
(1, 2, '98789999', 'Gatak', '1', '5', 'Madegondo', 'Grogol', 'Sukoharjo', 'Jateng', '823782376273', '3434', '34638648', '', 'aktif'),
(5, 3, '909090', 'Jat', '1', '2', 'So', 'M', 'Kr', 'Jateng', '98', '989', '98989', '', 'aktif'),
(6, 4, '090909', 'baki dd', '1', '3', 'Jaten', 'baru', 'Karanganyar', 'mmnm', '83686', '43434', '', '', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `nomor` int(5) NOT NULL,
  `soal` longtext NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `pilA` longtext NOT NULL,
  `pilB` longtext NOT NULL,
  `pilC` longtext NOT NULL,
  `pilD` longtext NOT NULL,
  `pilE` longtext NOT NULL,
  `fileA` text NOT NULL,
  `fileB` text NOT NULL,
  `fileC` text NOT NULL,
  `fileD` text NOT NULL,
  `fileE` text NOT NULL,
  `jawaban` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` int(10) NOT NULL,
  `nama_spp` varchar(100) NOT NULL,
  `biaya_spp` int(100) NOT NULL,
  `id_gelombang` int(10) NOT NULL,
  `id_jurusan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `nama_spp`, `biaya_spp`, `id_gelombang`, `id_jurusan`) VALUES
(1, 'Biaya SPP TKRO', 1250000, 1, 2),
(2, 'Biaya SPP MM', 3500000, 1, 6),
(3, 'Biaya SPP TEI', 2350000, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ujian`
--

CREATE TABLE `tb_ujian` (
  `id_ujian` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `kkm_ujian` int(5) NOT NULL,
  `durasi_ujian` time NOT NULL,
  `tgl_buka_ujian` date NOT NULL,
  `tgl_tutup_ujian` date NOT NULL,
  `waktu_buka_ujian` time NOT NULL,
  `waktu_tutup_ujian` time NOT NULL,
  `status_ujian` set('aktif','non aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ujian`
--

INSERT INTO `tb_ujian` (`id_ujian`, `id_mapel`, `kkm_ujian`, `durasi_ujian`, `tgl_buka_ujian`, `tgl_tutup_ujian`, `waktu_buka_ujian`, `waktu_tutup_ujian`, `status_ujian`) VALUES
(1, 4, 75, '00:00:30', '2020-07-06', '2020-07-08', '06:41:00', '06:41:00', 'aktif'),
(2, 4, 40, '00:00:30', '2020-07-07', '2020-07-20', '07:00:00', '07:00:00', 'non aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wawancara`
--

CREATE TABLE `tb_wawancara` (
  `id_wawancara` int(10) NOT NULL,
  `nama_wawancara` varchar(100) NOT NULL,
  `kriteria_wawancara` varchar(100) NOT NULL,
  `ket_wawancara` set('diterima','tidak diterima') NOT NULL,
  `status` set('aktif','non aktif') NOT NULL,
  `id_jurusan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wawancara`
--

INSERT INTO `tb_wawancara` (`id_wawancara`, `nama_wawancara`, `kriteria_wawancara`, `ket_wawancara`, `status`, `id_jurusan`) VALUES
(2, 'Fisik Bertato', 'Fisik Tubuh', 'tidak diterima', 'aktif', 2),
(3, 'Buta Warna', 'Buta Warna', 'tidak diterima', 'aktif', 6),
(4, 'min 165 cm', 'Tinggi Badan', 'diterima', 'aktif', 3),
(5, 'Buta Warna Parsial', 'Buta Warna', 'diterima', 'aktif', 2),
(6, 'Tidak Buta Warna', 'Buta Warna', 'diterima', 'aktif', 2),
(7, 'Tidak Buta Warna', 'Buta Warna', 'diterima', 'aktif', 3),
(8, 'Patah Tulang Tangan', 'Patah Tulang', 'tidak diterima', 'non aktif', 5),
(9, 'Tidak Buta Warna', 'Buta Warna', 'diterima', 'aktif', 5),
(10, 'Tidak Buta Warna', 'Buta Warna', 'diterima', 'aktif', 4),
(11, 'Badan Bertatto', 'Fisik Tubuh', 'tidak diterima', 'aktif', 6),
(12, 'Tidak Bertatto', 'Fisik', 'diterima', 'aktif', 6);

-- --------------------------------------------------------

--
-- Struktur untuk view `biaya_pendaftaran`
--
DROP TABLE IF EXISTS `biaya_pendaftaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `biaya_pendaftaran`  AS  select `a`.`id_biaya_pendaftaran` AS `id_biaya_pendaftaran`,`a`.`nama_pendaftaran` AS `nama_pendaftaran`,`a`.`biaya_pendaftaran` AS `biaya_pendaftaran`,`a`.`id_gelombang` AS `id_gelombang`,`a`.`id_jurusan` AS `id_jurusan`,`b`.`nama_gelombang` AS `nama_gelombang`,`c`.`kompetensi_keahlian` AS `kompetensi_keahlian` from ((`tb_biaya_pendaftaran` `a` join `tb_gelombang` `b` on((`a`.`id_gelombang` = `b`.`id_gelombang`))) join `tb_jurusan` `c` on((`c`.`id_jurusan` = `a`.`id_jurusan`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `biaya_pengembangan`
--
DROP TABLE IF EXISTS `biaya_pengembangan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `biaya_pengembangan`  AS  select `a`.`id_pengembangan` AS `id_pengembangan`,`a`.`nama_pengembangan` AS `nama_pengembangan`,`a`.`biaya_pengembangan` AS `biaya_pengembangan`,`a`.`id_gelombang` AS `id_gelombang`,`a`.`id_jurusan` AS `id_jurusan`,`b`.`nama_gelombang` AS `nama_gelombang`,`c`.`kompetensi_keahlian` AS `kompetensi_keahlian` from ((`tb_pengembangan` `a` join `tb_gelombang` `b` on((`b`.`id_gelombang` = `a`.`id_gelombang`))) join `tb_jurusan` `c` on((`c`.`id_jurusan` = `a`.`id_jurusan`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `biaya_seragam`
--
DROP TABLE IF EXISTS `biaya_seragam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `biaya_seragam`  AS  select `a`.`id_seragam` AS `id_seragam`,`a`.`nama_seragam` AS `nama_seragam`,`a`.`biaya_seragam` AS `biaya_seragam`,`a`.`id_gelombang` AS `id_gelombang`,`a`.`id_jurusan` AS `id_jurusan`,`b`.`nama_gelombang` AS `nama_gelombang`,`c`.`kompetensi_keahlian` AS `kompetensi_keahlian` from ((`tb_seragam` `a` join `tb_gelombang` `b` on((`b`.`id_gelombang` = `a`.`id_gelombang`))) join `tb_jurusan` `c` on((`c`.`id_jurusan` = `a`.`id_jurusan`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `biaya_spp`
--
DROP TABLE IF EXISTS `biaya_spp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `biaya_spp`  AS  select `a`.`id_spp` AS `id_spp`,`a`.`nama_spp` AS `nama_spp`,`a`.`biaya_spp` AS `biaya_spp`,`a`.`id_gelombang` AS `id_gelombang`,`a`.`id_jurusan` AS `id_jurusan`,`b`.`nama_gelombang` AS `nama_gelombang`,`c`.`kompetensi_keahlian` AS `kompetensi_keahlian` from ((`tb_spp` `a` join `tb_gelombang` `b` on((`b`.`id_gelombang` = `a`.`id_gelombang`))) join `tb_jurusan` `c` on((`c`.`id_jurusan` = `a`.`id_jurusan`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `buat_wawancara`
--
DROP TABLE IF EXISTS `buat_wawancara`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `buat_wawancara`  AS  select `a`.`id_wawancara` AS `id_wawancara`,`a`.`nama_wawancara` AS `nama_wawancara`,`a`.`kriteria_wawancara` AS `kriteria_wawancara`,`a`.`ket_wawancara` AS `ket_wawancara`,`a`.`status` AS `status`,`a`.`id_jurusan` AS `id_jurusan`,`b`.`kompetensi_keahlian` AS `kompetensi_keahlian` from (`tb_wawancara` `a` join `tb_jurusan` `b` on((`b`.`id_jurusan` = `a`.`id_jurusan`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `data_ortu`
--
DROP TABLE IF EXISTS `data_ortu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_ortu`  AS  select `a`.`id_siswa` AS `idsis`,`c`.`nama_siswa` AS `nama_siswa`,`c`.`id_pendaftaran` AS `id_pendaf`,`b`.`id_orang_tua` AS `id_orang_tua`,`b`.`nama_ayah` AS `nama_ayah`,`b`.`no_hp_ayah` AS `no_hp_ayah`,`b`.`pekerjaan_ayah` AS `pekerjaan_ayah`,`b`.`status_ayah` AS `status_ayah`,`b`.`nama_ibu` AS `nama_ibu`,`b`.`no_hp_ibu` AS `no_hp_ibu`,`b`.`pekerjaan_ibu` AS `pekerjaan_ibu`,`b`.`status_ibu` AS `status_ibu`,`b`.`pendapatan_ortu` AS `pendapatan_ortu`,`b`.`ortu_dukuh` AS `ortu_dukuh`,`b`.`ortu_rt` AS `ortu_rt`,`b`.`ortu_rw` AS `ortu_rw`,`b`.`ortu_kelurahan` AS `ortu_kelurahan`,`b`.`ortu_kecamatan` AS `ortu_kecamatan`,`b`.`ortu_kabupaten` AS `ortu_kabupaten`,`b`.`ortu_provinsi` AS `ortu_provinsi`,`b`.`nama_wali` AS `nama_wali`,`b`.`no_hp_wali` AS `no_hp_wali`,`b`.`pekerjaan_wali` AS `pekerjaan_wali`,`b`.`alamat_wali` AS `alamat_wali`,`b`.`id_siswa` AS `id_siswa` from ((`tb_siswa` `a` left join `tb_orang_tua` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) join `tb_pendaftaran` `c` on((`c`.`id_pendaftaran` = `a`.`id_pendaftaran`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `data_siswa`
--
DROP TABLE IF EXISTS `data_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_siswa`  AS  select `a`.`tgl_pendaftaran` AS `tgl_pendaftaran`,`a`.`no_pendaftaran` AS `no_pendaftaran`,`a`.`username` AS `username`,`a`.`password` AS `password`,`a`.`nama_siswa` AS `nama_siswa`,`a`.`pil_1` AS `pil_1`,`a`.`pil_2` AS `pil_2`,`a`.`pil_3` AS `pil_3`,`a`.`tempat_lahir` AS `tempat_lahir`,`a`.`tanggal_lahir` AS `tanggal_lahir`,`a`.`asal_sekolah` AS `asal_sekolah`,`b`.`id_siswa` AS `id_siswa`,`a`.`jenis_kelamin` AS `jenis_kelamin`,`b`.`id_pendaftaran` AS `id_pendaftaran`,`b`.`nisn` AS `nisn`,`b`.`sis_dukuh` AS `sis_dukuh`,`a`.`agama` AS `agama`,`b`.`sis_rt` AS `sis_rt`,`b`.`sis_rw` AS `sis_rw`,`b`.`sis_kelurahan` AS `sis_kelurahan`,`b`.`sis_kecamatan` AS `sis_kecamatan`,`b`.`sis_kabupaten` AS `sis_kabupaten`,`b`.`sis_provinsi` AS `sis_provinsi`,`b`.`seri_ijasah_smp` AS `seri_ijasah_smp`,`b`.`seri_skhun_smp` AS `seri_skhun_smp`,`b`.`no_un_smp` AS `no_un_smp`,`b`.`pas_photo` AS `pas_photo`,`b`.`status` AS `status`,`a`.`id_pendaftaran` AS `id` from (`tb_pendaftaran` `a` left join `tb_siswa` `b` on((`b`.`id_pendaftaran` = `a`.`id_pendaftaran`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `pilih_kelas`
--
DROP TABLE IF EXISTS `pilih_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pilih_kelas`  AS  select `a`.`id_pilih_kelas` AS `id_pilih_kelas`,`a`.`nama_pilih_kelas` AS `nama_pilih_kelas`,`a`.`id_kelas` AS `id_kelas`,`a`.`id_siswa` AS `id_siswa`,`a`.`status_pilih_kelas` AS `status_pilih_kelas`,`c`.`nama_siswa` AS `nama_siswa`,`d`.`id_kelas` AS `idkelas`,`d`.`nama_kelas` AS `nama_kelas` from (((`tb_pilih_kelas` `a` join `tb_siswa` `b` on((`b`.`id_siswa` = `a`.`id_siswa`))) join `tb_pendaftaran` `c` on((`c`.`id_pendaftaran` = `b`.`id_pendaftaran`))) join `tb_kelas` `d` on((`d`.`id_kelas` = `a`.`id_kelas`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `tb_detail_pengumuman`
--
DROP TABLE IF EXISTS `tb_detail_pengumuman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_detail_pengumuman`  AS  select `a`.`id_pengumuman` AS `id_pengumuman`,`a`.`tgl_pengumuman` AS `tgl_pengumuman`,`a`.`judul_pengumuman` AS `judul_pengumuman`,`a`.`isi_pengumuman` AS `isi_pengumuman`,`a`.`status` AS `status`,`a`.`id_personal` AS `id_personal`,`b`.`nama_personal` AS `nama_personal` from (`tb_pengumuman` `a` join `tb_personal` `b` on((`b`.`id_personal` = `a`.`id_personal`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berkas_siswa`
--
ALTER TABLE `tb_berkas_siswa`
  ADD PRIMARY KEY (`id_berkas_siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_biaya_pendaftaran`
--
ALTER TABLE `tb_biaya_pendaftaran`
  ADD PRIMARY KEY (`id_biaya_pendaftaran`),
  ADD KEY `id_gelombang` (`id_gelombang`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `tb_gelombang`
--
ALTER TABLE `tb_gelombang`
  ADD PRIMARY KEY (`id_gelombang`);

--
-- Indexes for table `tb_hasil_wawancara`
--
ALTER TABLE `tb_hasil_wawancara`
  ADD PRIMARY KEY (`id_hasil_wawancara`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_orang_tua`
--
ALTER TABLE `tb_orang_tua`
  ADD PRIMARY KEY (`id_orang_tua`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_pengembangan`
--
ALTER TABLE `tb_pengembangan`
  ADD PRIMARY KEY (`id_pengembangan`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tb_personal`
--
ALTER TABLE `tb_personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indexes for table `tb_pilih_kelas`
--
ALTER TABLE `tb_pilih_kelas`
  ADD PRIMARY KEY (`id_pilih_kelas`),
  ADD KEY `tb_pilih_kelas_ibfk_3` (`id_kelas`),
  ADD KEY `tb_pilih_kelas_ibfk_4` (`id_siswa`);

--
-- Indexes for table `tb_potongan`
--
ALTER TABLE `tb_potongan`
  ADD PRIMARY KEY (`id_potongan`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_seragam`
--
ALTER TABLE `tb_seragam`
  ADD PRIMARY KEY (`id_seragam`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `tb_siswa_ibfk_1` (`id_pendaftaran`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indexes for table `tb_ujian`
--
ALTER TABLE `tb_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  ADD PRIMARY KEY (`id_wawancara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berkas_siswa`
--
ALTER TABLE `tb_berkas_siswa`
  MODIFY `id_berkas_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_biaya_pendaftaran`
--
ALTER TABLE `tb_biaya_pendaftaran`
  MODIFY `id_biaya_pendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_hasil_wawancara`
--
ALTER TABLE `tb_hasil_wawancara`
  MODIFY `id_hasil_wawancara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  MODIFY `id_mutasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_orang_tua`
--
ALTER TABLE `tb_orang_tua`
  MODIFY `id_orang_tua` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pengembangan`
--
ALTER TABLE `tb_pengembangan`
  MODIFY `id_pengembangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_personal`
--
ALTER TABLE `tb_personal`
  MODIFY `id_personal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pilih_kelas`
--
ALTER TABLE `tb_pilih_kelas`
  MODIFY `id_pilih_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_potongan`
--
ALTER TABLE `tb_potongan`
  MODIFY `id_potongan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_seragam`
--
ALTER TABLE `tb_seragam`
  MODIFY `id_seragam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ujian`
--
ALTER TABLE `tb_ujian`
  MODIFY `id_ujian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  MODIFY `id_wawancara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pilih_kelas`
--
ALTER TABLE `tb_pilih_kelas`
  ADD CONSTRAINT `tb_pilih_kelas_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pilih_kelas_ibfk_4` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `tb_pendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
