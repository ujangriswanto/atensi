<?php
// memulai sesi
session_start();
include "caridb.php";

// mengambil data input dari form
if(isset($_POST['submit'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $NIK = $_POST['NIK'];
    $no_kk = $_POST['no_kk'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $usia = $_POST['usia']?$_POST['usia']:"";
    $tempat_lahir= $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $anak_ke = $_POST['anak_ke'];
    $jumlah_saudara = $_POST['jumlah_saudara'];
    $status_pernikahan = $_POST['status_pernikahan'];
    $pekerjaan = $_POST['pekerjaan'];
    $jaminan_sosial = $_POST['jaminan_sosial'];
    $no_kartu = $_POST['no_kartu'];
    $no_hp = $_POST['no_hp'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $program_rehabilitasi = $_POST['program_rehabilitasi'];
    $penyelenggara = $_POST['penyelenggara'];
    $nama_ayah = $_POST['nama_ayah'];
    $alamat_ayah = $_POST['alamat_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $no_hp_ayah = $_POST['no_hp_ayah'];
    $st_hidup_ayah = $_POST['st_hidup_ayah'];
    $agama_ayah = $_POST['agama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $alamat_ibu = $_POST['alamat_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];
    $no_hp_ibu = $_POST['no_hp_ibu'];
    $st_hidup_ibu = $_POST['st_hidup_ibu'];
    $agama_ibu = $_POST['agama_ibu'];
    $nama_wali = $_POST['nama_wali'];
    $alamat_wali = $_POST['alamat_wali'];
    $pekerjaan_wali = $_POST['pekerjaan_wali'];
    $penghasilan_wali = $_POST['penghasilan_wali'];
    $no_hp_wali = $_POST['no_hp_wali'];
    $agama_wali = $_POST['agama_wali'];
    $hubungan_dengan_pm = $_POST['hubungan_dengan_pm'];
    $nama_keluarga = $_POST['nama_keluarga'];
    $alamat_keluarga = $_POST['alamat_keluarga'];
    $pekerjaan_keluarga = $_POST['pekerjaan_keluarga'];
    $penghasilan_keluarga = $_POST['penghasilan_keluarga'];
    $no_hp_keluarga = $_POST['no_hp_keluarga'];
    $st_hidup_keluarga = $_POST['st_hidup_keluarga'];
    $agama_keluarga = $_POST['agama_keluarga'];
    $jumlah_tanggungan = $_POST['jumlah_tanggungan'];
    $jenis_disabilitas = $_POST['jenis_disabilitas'];
    $alat_bantu = $_POST['alat_bantu'];
    $kemampuan_dasar = $_POST['kemampuan_dasar'];
    $kapan_alami_disabilitas = $_POST['kapan_alami_disabilitas'];
    $penyakit_diderita = $_POST['penyakit_diderita'];
    $penyakit_pernah_diderita = $_POST['penyakit_pernah_diderita'];
    $langkah_pengobatan = $_POST['langkah_pengobatan'];
    $obat_yang_dikonsumsi = $_POST['obat_yang_dikonsumsi'];
    $jumlah_obat = $_POST['jumlah_obat'];
    $pernah_dirawat = $_POST['pernah_dirawat'];
    $lama_dirawat = $_POST['lama_dirawat'];
    $kecanduan_narkotika = $_POST['kecanduan_narkotika'];
    $keadaan_disabilitas = $_POST['keadaan_disabilitas'];
    $riwayat_kesehatan = $_POST['riwayat_kesehatan'];
    $bukti_gangguan = $_POST['bukti_gangguan'];
    $pernah_trauma = $_POST['pernah_trauma'];
    $penyelamatan = $_POST['penyelamatan'];
    $medis = $_POST['medis'];
    $psikososial = $_POST['psikososial'];
    $kebutuhan_diinginkan = $_POST['kebutuhan_diinginkan'];
    $diri_sendiri = $_POST['diri_sendiri'];
    $keluarga = $_POST['keluarga'];
    $masyarakat = $_POST['masyarakat'];
    $kelembagaan = $_POST['kelembagaan'];
    $analisis_peksos = $_POST['analisis_peksos'];

    // algoritma untuk pengambilan keputusan
    if ($kapan_alami_disabilitas == "Penyakit" && $alat_bantu == "Tidak Ada") {
        $hasil = "keluarga";
    } elseif ($kapan_alami_disabilitas == "Penyakit" && $alat_bantu == "Tongkat" && $pernah_trauma == "Ya") {
        $hasil = "residensial";
    } elseif ($kapan_alami_disabilitas == "Penyakit" && $alat_bantu == "Tongkat" && $pernah_trauma == "Tidak" && $penyakit_diderita == "Ada") {
        $hasil = "komunitas";
    } elseif ($kapan_alami_disabilitas == "Penyakit" && $alat_bantu == "Tongkat" && $pernah_trauma == "Tidak" && $penyakit_diderita == "Tidak Ada") {
        $hasil = "residensial";
    } elseif ($kapan_alami_disabilitas == "Penyakit" && $alat_bantu == "Kacamata Low Vision") {
        $hasil = "residensial";
    } elseif ($kapan_alami_disabilitas == "Sejak Lahir" && $bukti_gangguan == "Ya") {
        $hasil = "komunitas";
    } elseif ($kapan_alami_disabilitas == "Sejak Lahir" && $bukti_gangguan == "Tidak" && $jenis_disabilitas == "Totality Blind" && $jenis_kelamin == "Laki-laki") {
        $hasil = "keluarga";
    } elseif ($kapan_alami_disabilitas == "Sejak Lahir" && $bukti_gangguan == "Tidak" && $jenis_disabilitas == "Totality Blind" && $jenis_kelamin == "Perempuan") {
        $hasil = "komunitas";
    } elseif ($kapan_alami_disabilitas == "Sejak Lahir" && $bukti_gangguan == "Tidak" && $jenis_disabilitas == "Low Vision") {
        $hasil = "residensial";
    } elseif ($kapan_alami_disabilitas == "Kecelakaan" && $obat_yang_dikonsumsi == "Ada") {
        $hasil = "residensial";
    } elseif ($kapan_alami_disabilitas == "Kecelakaan" && $obat_yang_dikonsumsi == "Tidak Ada") {
        $hasil = "komunitas";
    }
    
    // proses menyimpan data
    try{
        $data = "INSERT INTO tb_ppks (nama_lengkap, nama_panggilan, NIK, no_kk, jenis_kelamin, usia, tempat_lahir, tanggal_lahir, alamat, agama, anak_ke, jumlah_saudara, status_pernikahan, pekerjaan, jaminan_sosial, no_kartu, no_hp, pendidikan_terakhir, program_rehabilitasi, penyelenggara, nama_ayah, alamat_ayah, pekerjaan_ayah, penghasilan_ayah, no_hp_ayah, st_hidup_ayah, agama_ayah, nama_ibu, alamat_ibu, pekerjaan_ibu, penghasilan_ibu, no_hp_ibu, st_hidup_ibu, agama_ibu, nama_wali, alamat_wali, pekerjaan_wali, penghasilan_wali, no_hp_wali, agama_wali, hubungan_dengan_pm, nama_keluarga, alamat_keluarga, pekerjaan_keluarga, penghasilan_keluarga, no_hp_keluarga, st_hidup_keluarga, agama_keluarga, jumlah_tanggungan, jenis_disabilitas, alat_bantu, kemampuan_dasar, kapan_alami_disabilitas, penyakit_diderita, penyakit_pernah_diderita, langkah_pengobatan, obat_yang_dikonsumsi, jumlah_obat, pernah_dirawat, lama_dirawat, kecanduan_narkotika, keadaan_disabilitas, riwayat_kesehatan, bukti_gangguan, pernah_trauma, penyelamatan, medis, psikososial, kebutuhan_diinginkan, diri_sendiri, keluarga, masyarakat, kelembagaan, analisis_peksos, hasil) VALUES ('$nama_lengkap', '$nama_panggilan','$NIK','$no_kk','$jenis_kelamin','$usia','$tempat_lahir','$tanggal_lahir','$alamat','$agama','$anak_ke','$jumlah_saudara','$status_pernikahan','$pekerjaan','$jaminan_sosial','$no_kartu','$no_hp','$pendidikan_terakhir','$program_rehabilitasi','$penyelenggara', '$nama_ayah', '$alamat_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$no_hp_ayah', '$st_hidup_ayah', '$agama_ayah', '$nama_ibu', '$alamat_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$no_hp_ibu', '$st_hidup_ibu', '$agama_ibu', '$nama_wali', '$alamat_wali', '$pekerjaan_wali', '$penghasilan_wali', '$no_hp_wali', '$agama_wali', '$hubungan_dengan_pm', '$nama_keluarga', '$alamat_keluarga', '$pekerjaan_keluarga', '$penghasilan_keluarga', '$no_hp_keluarga', '$st_hidup_keluarga', '$agama_keluarga', '$jumlah_tanggungan', '$jenis_disabilitas', '$alat_bantu', '$kemampuan_dasar', '$kapan_alami_disabilitas', '$penyakit_diderita', '$penyakit_pernah_diderita', '$langkah_pengobatan', '$obat_yang_dikonsumsi', '$jumlah_obat', '$pernah_dirawat', '$lama_dirawat', '$kecanduan_narkotika', '$keadaan_disabilitas', '$riwayat_kesehatan', '$bukti_gangguan', '$pernah_trauma', '$penyelamatan', '$medis', '$psikososial', '$kebutuhan_diinginkan', '$diri_sendiri', '$keluarga', '$masyarakat', '$kelembagaan', '$analisis_peksos', '$hasil')";

        $con->exec($data);
        $_SESSION["sukses"] = 'Data ini masuk kedalam golongan ' . $hasil;
        header("location: input.php");
    }catch(PDOException $e){
        echo $data . "<br>" . $e->getMessage();
    }
    $con = null;
}
