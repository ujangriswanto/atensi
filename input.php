<?php
// memulai sesi
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Formulir Asesmen</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="input.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="navbar-brand">
                <img src="Logo.png" alt="logo" class="navbar-image" style="height:  70px; height: 70px;">
                <img src="logo2.png" alt="logo2" class="navbar-image" style="height:  70px; height: 70px;">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="input.php">Input</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pencarian.php">Pencarian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <h2 class="judul">INPUT FORMULIR ASESMEN AWAL</h2>
        </div>
        <div class="card card-form">
            <form action="inputdb.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-25">
                        <label for="nama lengkap">Nama Lengkap</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nama_lengkap">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nama panggilan">Nama Panggilan</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nama_panggilan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nik">NIK*</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="NIK">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nomor kk">Nomor KK*</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="no_kk">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="jenis kelamin">Jenis Kelamin</label>
                    </div>
                    <div class="col-75">
                        <select name="jenis_kelamin">
                            <option>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="usia">Usia</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="usia">
                        <label for="tahun"> )*Tahun</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="tempat lahir">Tempat Lahir</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="tempat_lahir">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="tanggal lahir">Tanggal Lahir</label> 
                    </div>
                    <div class="col-75">
                        <input type="date" name="tanggal_lahir" class="date">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="alamat">Alamat</label>
                    </div>
                    <div class="col-75">
                        <textarea rows="5" name="alamat"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="agama">Agama</label>
                    </div>
                    <div class="col-75">
                        <select name="agama">
                            <option>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="anak ke">Anak ke-</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="anak_ke">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="jumlah saudara">Jumlah Saudara</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="jumlah_saudara">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="status pernikahan">Status Pernikahan</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="status_pernikahan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pekerjaan">Pekerjaan</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="pekerjaan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="jaminan sosial">Jaminan Sosial</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="jaminan_sosial">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nomor kartu">Nomor Kartu</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="no_kartu">
                        <label for="opsional"> )*Opsional</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="no hp">No. HP/Telp</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" name="no_hp">
                    </div>
                </div class="row">
                <div class="row">
                    <div class="col-25">
                        <label for="pendidikan terakhir">Pendidikan Terakhir</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="pendidikan_terakhir">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="program rehabilitas">Program Rehabilitasi<br />/Pelatihan yang <br />pernah diikuti</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="program_rehabilitasi">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="penyelenggara">Penyelenggara</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="penyelenggara">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nama ayah">Nama Ayah</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nama_ayah">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="alamat ayah">Alamat Ayah</label>
                    </div>
                    <div class="col-75">
                        <textarea rows="5" name="alamat_ayah"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pekerjaan ayah">Pekerjaan</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="pekerjaan_ayah">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="penghasilan ayaj">Penghasilan</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="penghasilan_ayah">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="no hp ayah">No. HP/Telp</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" name="no_hp_ayah">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="status hidup ayah">Apakah Ayah Masih Hidup?</label>
                    </div>
                    <div class="col-75">
                        <select name="st_hidup_ayah">
                            <option>Silahkan pilih disini</option>
                            <option value="Masih Hidup">Masih Hidup</option>
                            <option value="Sudah Meninggal">Sudah Meninggal</option>
                            <option value="Tidak Tahu">Tidak Tahu</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="agama ayah">Agama Ayah</label>
                    </div>
                    <div class="col-75">
                        <div class="select">
                            <select name="agama_ayah">
                                <option>Pilih agama</option>
                                <option value="islam">Islam</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="khonghucu">Khonghucu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nama ibu">Nama Ibu</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nama_ibu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="alamat ibu">Alamat Ibu</label>
                    </div>
                    <div class="col-75">
                        <textarea rows="5" name="alamat_ibu"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pekerjaan ibu">Pekerjaan</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="pekerjaan_ibu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="penghasilan ibu">Penghasilan</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="penghasilan_ibu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="no hp ibu">No. Hp/Telp</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" name="no_hp_ibu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="status hidup ibu">Apakah Ibu Masih Hidup?</label>
                    </div>
                    <div class="col-75">
                        <select name="st_hidup_ibu">
                            <option>Silahkan pilih disini</option>
                            <option value="Masih Hidup">Masih Hidup</option>
                            <option value="Sudah Meninggal">Sudah Meninggal</option>
                            <option value="Tidak Tahu">Tidak Tahu</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="agama ibu">Agama Ibu</label>
                    </div>
                    <div class="col-75">
                        <select name="agama_ibu">
                            <option>Pilih agama</option>
                            <option value="islam">Islam</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="khonghucu">Khonghucu</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nama wali">Nama Wali</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nama_wali">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="alamat wali">Alamat Wali</label>
                    </div>
                    <div class="col-75">
                        <textarea rows="5" name="alamat_wali"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pekerjaan wali">Pekerjaan</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="pekerjaan_wali">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="penghasilan wali">Penghasilan</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="penghasilan_wali">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="no hp wali">No. HP/Telp</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" name="no_hp_wali">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="agama wali">Agama Wali</label>
                    </div>
                    <div class="col-75">
                        <div class="select">
                            <select name="agama_wali">
                                <option>Pilih agama</option>
                                <option value="islam">Islam</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="khonghucu">Khonghucu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="hubungan dengan pm">Hubungan dengan PM</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="hubungan_dengan_pm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="nama suami/istri">Nama Suami/Istri</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="nama_keluarga">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="alamat suami/istri">Alamat Suami/Istri</label>
                    </div>
                    <div class="col-75">
                        <textarea rows="5" name="alamat_keluarga"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pekerjaan suami/istri">Pekerjaan</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="pekerjaan_keluarga">  
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="penghasilan suami/istri">Penghasilan</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="penghasilan_keluarga">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="no hp suami/istri">No. HP/Telp</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" name="no_hp_keluarga">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="status hidup suami/istri">Apakah Suami/Istri Masih Hidup?</label>
                    </div>
                    <div class="col-75">
                        <select name="st_hidup_keluarga">
                            <option>Silahkan pilih disini</option>
                            <option value="Masih Hidup">Masih Hidup</option>
                            <option value="Sudah Meninggal">Sudah Meninggal</option>
                            <option value="Tidak Tahu">Tidak Tahu</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="agama suami/istri">Agama Suami/Istri</label>
                    </div>
                    <div class="col-75">
                        <select name="agama_keluarga">
                            <option>Pilih agama</option>
                            <option value="islam">Islam</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="khonghucu">Khonghucu</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="jumlah tanggungan">Jumlah Tanggungan<br />(Anak)</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="jumlah_tanggungan">
                        <label for="orang">)*Orang</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="jenis disabilitas">Jenis Disabiltas</label>
                    </div>
                    <div class="col-75">
                        <select name="jenis_disabilitas">
                            <option>Pilih disini</option>
                            <option value="Low Vision">Low Vision</option>
                            <option value="Totality Blind">Totality Blind</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="alat bantu">Alat Bantu</label>
                    </div>
                    <div class="col-75">
                        <select name="alat_bantu">
                            <option>Pilih disini</option>
                            <option value="Kacamata Low Vision">Kacamata Low Vision</option>
                            <option value="Tongkat">Tongkat</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="kemampuan dasar">Kemampuan Dasar</label>
                    </div>
                    <div class="col-75">
                        <select name="kemampuan_dasar">
                            <option>Pilih disini</option>
                            <option value="Orientasi Mobilitas">Orientasi Mobilitas</option>
                            <option value="ADL">ADL</option>
                            <option value="Baca Tulis Braile">Baca Tulis Braile</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="kapan alami disabilitas">Sejak kapan<br />mengalami disabilitas?</label>
                    </div>
                    <div class="col-75">
                        <select name="kapan_alami_disabilitas">
                            <option>Pilih disini</option>
                            <option value="Sejak Lahir">Sejak Lahir</option>
                            <option value="Kecelakaan">Kecelakaan</option>
                            <option value="Penyakit">Penyakit</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="penyakit diderita">Penyakit yang diderita saat ini?</label>
                    </div>
                    <div class="col-75">
                        <select name="penyakit_diderita">
                            <option>Pilih disini</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="penyakit yang diderita">Penyakit yang pernah diderita</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="penyakit_pernah_diderita">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="langkah pengobatan">Langkah Pengobatan/pelayanan<br />kesehatan yang diterima</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="langkah_pengobatan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="obat yang dikonsumsi">Obat yang sedang dikonsumsi</label>
                    </div>
                    <div class="col-75">
                        <select name="obat_yang_dikonsumsi">
                            <option>Pilih disini</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                        <input type="number" name="jumlah_obat" placeholder="Jumlah" class="ml-2 mt-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pernah dirawat">Pernah dirawat diRumah Sakit<br />/Layanan kesehatan lain?</label>
                    </div>
                    <div class="col-75">
                        <select name="pernah_dirawat">
                            <option>Pilih disini</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lama dirawat">Berapa lama dirawat?<br />(Jika Pernah Dirawat)</label>  
                    </div>
                    <div class="col-75">   
                        <input type="number" name="lama_dirawat">
                        <label class="bulan">)*bulan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="kecanduan narkotika">Apakah kecanduan Narkotika<br />/Alkohol?</label>
                    </div>
                    <div class="col-75">     
                        <select name="kecanduan_narkotika">
                            <option>Pilih disini</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="keadaan disabilitas">Apakah keadaan disabilitas<br />saat ini masih membutuhkan<br />operasi/pengobatan lanjutan?</label>
                    </div>
                    <div class="col-75">
                        <select name="keadaan_disabilitas">
                            <option>Pilih disini</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="riwayat kesehatan">Masalah kesehatan dalam<br />keluarga (Riwayat Kesehatan)</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="riwayat_kesehatan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="bukti gangguan">Adakah bukti tentang masalah<br />kesehatan jiwa seperti depresi,<br />gelisah, gangguan kognitif,epilepsi?</label>
                    </div>
                    <div class="col-75">
                        <select name="bukti_gangguan">
                            <option>Pilih disini</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pernah trauma">Apakah pernah mengalami trauma,<br />kekerasan, dan penganiayaan?</label>
                    </div>
                    <div class="col-75">
                        <select name="pernah_trauma">
                            <option>Pilih disini</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div >
                <div class="row">
                    <div class="col-25">
                        <label for="respon darurat">RESPON DARURAT</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="penyelamatan">Penyelamatan</label>
                    </div>
                    <div class="col-75">
                        <input type="checkbox">
                        <input type="text" name="penyelamatan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <div for="medis">Medis</div>
                    </div>
                    <div class="col-75">
                        <input type="checkbox">
                        <input type="text" name="medis">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="psikososial">Psikososial</label>
                    </div>
                    <div class="col-75">
                        <input type="checkbox">
                        <input type="text" name="psikososial">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="kebutuhan yang diinginkan">Kebutuhan Yang Diinginkan</label>
                    </div>
                    <div class="col-75">
                        <select name="kebutuhan_diinginkan">
                            <option>Pilih kebutuhan</option>
                            <option value="Pemenuhan Hidup Layak">Pemenuhan Hidup Layak</option>
                            <option value="Perawatan Sosial/Pengasuhan">Perawatan Sosial/Pengasuhan</option>
                            <option value="Dukungan Keluarga">Dukungan Keluarga</option>
                            <option value="Terapi Fisik">Terapi Fisik</option>
                            <option value="Pelatihan Vokasional/Kewirausahaan">Pelatihan Vokasional/Kewirausahaan</option>
                            <option value="Bantuan Sosial dan Atensi Sosial">Bantuan Sosial dan Atensi Sosial</option>
                            <option value="Alat Bantu">Alat Bantu</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="internal">INTERNAL</label>
                    </div>
                    <div class="col-75">
                        <input type="checkbox">
                        <label for="diri sendiri">Diri Sendiri</label>
                        <textarea rows="5" name="diri_sendiri"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"></div>
                    <div class="col-75">
                        <input type="checkbox">
                        <label for="keluarga">Keluarga</label>
                        <textarea rows="5" name="keluarga"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="eksternal">EKSTERNAL</label>
                    </div>
                    <div class="col-75">
                        <input type="checkbox">
                        <label for="masyarakat">Masyarakat</label>
                        <textarea rows="5" name="masyarakat"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"></div>
                    <div class="col-75">
                        <input type="checkbox">
                        <label for="kelembagaan">Kelembagaan</label>
                        <textarea rows="5" name="kelembagaan"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="analisis peksos">Analisis Pekerja Sosial</label>
                    </div>
                    <div class="col-75">
                        <textarea rows="5" name="analisis_peksos"></textarea>
                    </div>
                </div>
                <button type="submit" id="submit" name="submit" class="btn btn-simpan btn-outline-primary">Simpan</button>
            </form>
        </div>
    </div>

    <script src="assets/jquery.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- alert ketika data berhasil ditambahkan -->
    <?php if(@$_SESSION['sukses']){ ?>
        <script>
            Swal.fire("Selamat!", "<?php echo $_SESSION['sukses']; ?>", "success")
        </script>
    <?php unset($_SESSION['sukses']);}?>

    <?php if(@$_SESSION['duplikat']){ ?>
        <script>
            Swal.fire("Opps!", "<?php echo $_SESSION['duplikat']; ?>", "error")
        </script>
    <?php unset($_SESSION['duplikat']);}?>
</body>
</html>