<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Formulir Asesmen</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <img src="logo.png" class="logo">
            <img src="logo2.png" class="logo2">
            <div class="menu">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="input.php"class="input">Input</a></li>
                    <li><a href="pencarian.php">Pencarian</a></li>
                    <li><a href="index.php"class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="regform"><h2>INPUT FORMULIR ASESMEN AWAL</h2></div>
    <div class="main1">
    <form action="inputdb.php" class="icalonppks" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td class="nama">Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" class="field"></td>
            </tr>
            <tr>
                <td class="nama">Nama Panggilan</td>
                <td><input type="text" name="nama_panggilan" class="field"></td>
            </tr>
            <tr>
                <td class="nama">NIK*</td>
                <td><input type="number" name="NIK" class="field"></td>
            </tr>
            <tr>
                <td class="nama">Nomor KK*</td>
                <td><input type="number" name="no_kk" class="field"></td>
            </tr>
            <tr>
                <td class="nama">Jenis Kelamin</td>
                <td class="select"><select name="jenis_kelamin" class="select2">
                        <option>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select></td>
            </tr>
            <tr>
                <td class="nama">Usia</td>
                <td><input type="number" name="usia" class="field2"><td class="year">)*Tahun</td>
                </td>
            </tr>
            <tr>
                <td class="nama">Tempat Lahir</td>
                <td class="ttl"><input type="text" name="tempat_lahir" class="ttl2">Tanggal Lahir
                <input type="date" name="tanggal_lahir" class="date">
                </td>
            </tr>
            <tr>
                <td class="nama">Alamat</td>
                <td><textarea rows="5" name="alamat" class="field"></textarea></td>
            </tr>
            <tr>
                <td class="nama">Agama</td>
                <td class="select"><select name="agama" class="select2">
                        <option>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select></td>
            </tr>
            <tr>
                <td class="nama">Anak ke-</td>
                <td><input type="number" name="anak_ke" class="field2"></td>
            </tr>
            <tr>
                <td class="nama">Jumlah Saudara</td>
                <td><input type="number" name="jumlah_saudara" class="field2"></td>
            </tr>
            <tr>
                <td class="nama">Status Pernikahan</td>
                <td><input type="text"  name="status_pernikahan" class="field"></td>
            </tr>
            <tr>
                <td class="nama">Pekerjaan</td>
                <td><input type="text" name="pekerjaan" class="field"></td>
            </tr>
            <tr>
                <td class="nama">Jaminan Sosial</td>
                <td><input type="text"  name="jaminan_sosial" class="field"></td>
            </tr>
            <tr>
                <td class="nama">Nomor Kartu</td>
                <td><input type="number" name="no_kartu" class="field"><td class="nk">)*Opsional</td>
                </td>
            </tr>
            <tr>
                <td class="nama">No. HP/Telp</td>
                <td><input type="tel" name="no_hp" class="field"></td>
            </tr>
            <tr>
                <td class="nama">Pendnameikan Terakhir</td>
                <td><input type="text"  name="pendnameikan_terakhir" class="field"></td>
            </tr>
            <tr>
                <td class="nama">Program Rehabilitasi<br/>/Pelatihan yang <br/>pernah diikuti</td>
                <td><input type="text" name="program_rehabilitasi" class="field">
                    </td>
            </tr>
            <tr>
                <td class="nama2" style="position: relative; left: 300px;">Penyelenggara</td>
                <td><input type="text" name="penyelenggara" class="field"></td>
            </tr>
            <tr>
                    <td class="nama">Nama Ayah</td>
                    <td><input type="text" name="nama_ayah" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Alamat Ayah</td>
                    <td><textarea rows="5" name="alamat_ayah" class="field"></textarea></td>
                </tr>
                <tr>
                    <td class="nama">Pekerjaan</td>
                    <td><input type="text" name="pekerjaan_ayah" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Penghasilan</td>
                    <td><input type="number" name="penghasilan_ayah" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">No. HP/Telp</td>
                    <td><input type="tel" name="no_hp_ayah" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Apakah Ayah Masih Hidup?</td>
                    <td class="select"><select name="st_hidup_ayah" class="select2">
                        <option>Silahkan pilih disini</option>
                        <option value="Masih Hidup">Masih Hidup</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                        <option value="Tidak Tahu">Tidak Tahu</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Agama Ayah</td>
                    <td class="select"><select name="agama_ayah" class="select2">
                        <option>Pilih agama</option>
                        <option value="islam">Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="khonghucu">Khonghucu</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Nama Ibu</td>
                    <td><input type="text" name="nama_ibu" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Alamat Ibu</td>
                    <td><textarea rows="5" name="alamat_ibu" class="field"></textarea></td>
                </tr>
                <tr>
                    <td class="nama">Pekerjaan</td>
                    <td><input type="text" name="pekerjaan_ibu" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Penghasilan</td>
                    <td><input type="number" name="penghasilan_ibu" class="field"></td>
                </tr>
                <tr>
                    <td>No. HP/Telp</td>
                    <td><input type="tel" name="no_hp_ibu" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Apakah Ibu Masih Hidup?</td>
                    <td class="select"><select name="st_hidup_ibu" class="select2">
                        <option>Silahkan pilih disini</option>
                        <option value="Masih Hidup">Masih Hidup</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                        <option value="Tidak Tahu">Tidak Tahu</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Agama Ibu</td>
                    <td class="select"><select name="agama_ibu" class="select2">
                        <option>Pilih agama</option>
                        <option value="islam">Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="khonghucu">Khonghucu</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Nama Wali</td>
                    <td><input type="text" name="nama_wali" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Alamat Wali</td>
                    <td><textarea rows="5" name="alamat_wali" class="field"></textarea></td>
                </tr>
                <tr>
                    <td class="nama">Pekerjaan</td>
                    <td><input type="text" name="pekerjaan_wali" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Penghasilan</td>
                    <td><input type="number" name="penghasilan_wali" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">No. HP/Telp</td>
                    <td><input type="tel" name="no_hp_wali" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Agama Wali</td>
                    <td class="select"><select name="agama_wali" class="select2">
                        <option>Pilih agama</option>
                        <option value="islam">Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="khonghucu">Khonghucu</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Hubungan dengan PM</td>
                    <td><input type="text" name="hubungan_dengan_pm" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Nama Suami/Istri</td>
                    <td><input type="text" name="nama_keluarga" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Alamat Suami/Istri</td>
                    <td><textarea rows="5" name="alamat_keluarga" class="field"></textarea></td>
                </tr>
                <tr>
                    <td class="nama">Pekerjaan</td>
                    <td><input type="text" name="pekerjaan_keluarga" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Penghasilan</td>
                    <td><input type="number" name="penghasilan_keluarga" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">No. HP/Telp</td>
                    <td><input type="tel" name="no_hp_keluarga" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Apakah Suami/Istri<br/>Masih Hidup?</td>
                    <td class="select"><select name="st_hidup_keluarga" class="select2">
                        <option>Silahkan pilih disini</option>
                        <option value="Masih Hidup">Masih Hidup</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                        <option value="Tidak Tahu">Tidak Tahu</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Agama Suami/Istri</td>
                    <td class="select"><select name="agama_keluarga" class="select2">
                        <option>Pilih agama</option>
                        <option value="islam">Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="khonghucu">Khonghucu</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Jumlah Tanggungan<br/>(Anak)</td>
                    <td><input type="number" name="jumlah_tanggungan" class="field2"><td class="year2">)*Orang</td>
                </td>
                </tr>
                <tr>
                    <td class="nama">Jenis Disabiltas</td>
                    <td class="select"><select name="jenis_disabilitas" class="select2">
                        <option value="Low Vision">Low Vision</option>
                        <option value="Totality Blind">Totality Blind</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Alat Bantu</td>
                    <td class="select"><select name="alat_bantu" class="select2">
                        <option value="Kacamata Low Vision">Kacamata Low Vision</option>
                        <option value="Tongkat">Tongkat</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Kemampuan Dasar</td>
                    <td class="select"><select name="kemampuan_dasar" class="select2">
                        <option value="Orientasi Mobilitas">Orientasi Mobilitas</option>
                        <option value="ADL">ADL</option>
                        <option value="Baca Tulis Braile">Baca Tulis Braile</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Sejak kapan<br/>mengalami disabilitas?</td>
                    <td class="select"><select name="kapan_alami_disabilitas" class="select2">
                        <option value="Sejak Lahir">Sejak Lahir</option>
                        <option value="Kecelakaan">Kecelakaan</option>
                        <option value="Penyakit">Penyakit</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Penyakit yang dnameerita saat ini?</td>
                    <td class="select"><select name="penyakit_dnameerita" class="select2">
                        <option>Pilih disini</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="Ada">Ada</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Penyakit yang pernah dnameerita</td>
                    <td><input type="text" name="penyakit_pernah_dnameerita" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Langkah Pengobatan/pelayanan<br/>kesehatan yang diterima</td>
                    <td><input type="text" name="langkah_pengobatan" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Obat yang sedang dikonsumsi</td>
                    <td class="select"><select name="obat_yang_dikonsumsi" class="select2">
                        <option>Pilih disini</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="Ada">Ada</option>
                    </select>
                        <input type="number" name="jumlah_obat" placeholder="Jenis" class="field2">
                    </td>
                </tr>
                <tr>
                    <td class="nama">Pernah dirawat diRumah Sakit<br/>/Layanan kesehatan lain?</td>
                    <td class="select"><select name="pernah_dirawat" class="select2">
                        <option>Pilih disini</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Berapa lama dirawat?<br/>(Jika Pernah Dirawat)</td>
                    <td><input type="number" name="lama_dirawat" class="field2"><td class="bulan">)*bulan</td>
                </td>
                </tr>
                <tr>
                    <td class="nama">Apakah kecanduan Narkotika<br/>/Alkohol?</td>
                    <td class="select"><select name="kecanduan_narkotika" class="select2">
                        <option>Pilih disini</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Apakah keadaan disabilitas<br/>saat ini masih membutuhkan<br/>operasi/pengobatan lanjutan?</td>
                    <td class="select"><select name="keadaan_disabilitas" class="select2">
                        <option>Pilih disini</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Masalah kesehatan dalam<br/>keluarga (Riwayat Kesehatan)</td>
                    <td><input type="text" name="riwayat_kesehatan" class="field"></td>
                </tr>
                <tr>
                    <td class="nama">Adakah bukti tentang masalah<br/>kesehatan jiwa seperti depresi,<br/>gelisah, gangguan kognitif,epilepsi?</td>
                    <td class="select"><select name="bukti_gangguan" class="select2">
                        <option>Pilih disini</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">Apakah pernah mengalami trauma,<br/>kekerasan, dan penganiayaan?</td>
                    <td class="select"><select name="pernah_trauma" class="select2">
                        <option>Pilih disini</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama" style="font-style:bold;">RESPON DARURAT</td>
                </tr>
                <tr>
                    <td class="nama">Penyelamatan</td>
                    <td><input type="checkbox" class="checkbox">
                        <input type="text" name="penyelamatan" class="field3">
                    </td>
                </tr>
                <tr>
                    <td class="nama">Medis</td>
                    <td><input type="checkbox" class="checkbox">
                        <input type="text" name="medis" class="field3">
                    </td>
                </tr>
                <tr>
                    <td class="nama">Psikososial</td>
                    <td><input type="checkbox" class="checkbox">
                        <input type="text" name="psikososial" class="field3">
                    </td>
                </tr>
                <tr>
                    <td class="select" style="position: relative; left: 300px;"><select name="kebutuhan_diinginkan" class="select2">
                        <option>Pilih kebutuhan</option>
                        <option value="Pemenuhan Hnameup Layak">Pemenuhan Hnameup Layak</option>
                        <option value="Perawatan Sosial/Pengasuhan">Perawatan Sosial/Pengasuhan</option>
                        <option value="Dukungan Keluarga">Dukungan Keluarga</option>
                        <option value="Terapi Fisik">Terapi Fisik</option>
                        <option value="Pelatihan Vokasional/Kewirausahaan">Pelatihan Vokasional/Kewirausahaan</option>
                        <option value="Bantuan Sosial dan Atensi Sosial">Bantuan Sosial dan Atensi Sosial</option>
                        <option value="Alat Bantu">Alat Bantu</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="nama">INTERNAL</td>
                    <td><input type="checkbox">Diri Sendiri<br/>
                        <textarea rows="5" name="diri_sendiri" class="field4"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox2"><label  for="keluarga" class="label">Keluarga</label>
                        <textarea rows="5" name="keluarga" class="field5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="nama">EKSTERNAL</td>
                    <td><input type="checkbox">Masyarakat<br/>
                        <textarea rows="5" name="masyarakat" class="field4"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox2"><label  for="kelembagaan" class="label">Kelembagaan</label>
                        <textarea rows="5" name="kelembagaan" class="field5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="nama">Analisis Pekerja Sosial</td>
                    <td><textarea rows="5" name="analisis_peksos" class="field"></textarea></td>
                </tr>
        </table>
    <table>
<tr>
      <td></td>
    <input style="border-radius: 20px; border:none; margin-top: 10%; margin-left: 600px; background: #764AF1;
    color: #FFFFFF; width:90px; height:60px; font-size:20px; font-weight: bold;" 
    class="button" value="Simpan" type="submit" id="submit" name="submit">
</tr>
</table>
</form>
</div>

        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
</body>
</html>
