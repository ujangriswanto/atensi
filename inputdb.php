<?php
//$con = new mysqli('localhost', 'root','','db_asessmen');
include "caridb.php";

if(isset($_POST['submit'])){
    $nama_lengkap = isset($_POST['nama_lengkap']);
    $nama_panggilan = isset($_POST['nama_panggilan']);
    $NIK = isset($_POST['NIK']);
    $no_kk = isset($_POST['no_kk']);
    $jenis_kelamin = isset($_POST['jenis_kelamin']);
    $usia = isset($_POST['usia'])?$_POST['usia']:"";
    $tempat_lahir= isset($_POST['tempat_lahir']);
    $tanggal_lahir = isset($_POST['tanggal_lahir']);
    $alamat = isset($_POST['alamat']);
    $agama = isset($_POST['agama']);
    $anak_ke = isset($_POST['anak_ke']);
    $jumlah_saudara = isset($_POST['jumlah_saudara']);
    $status_pernikahan = isset($_POST['status_pernikahan']);
    $pekerjaan = isset($_POST['pekerjaan']);
    $jaminan_sosial = isset($_POST['jaminan_sosial']);
    $no_kartu = isset($_POST['no_kartu']);
    $no_hp = isset($_POST['no_hp']);
    $pendidikan_terakhir = isset($_POST['pendidikan_terakhir']);
    $program_rehabilitasi = isset($_POST['program_rehabilitasi']);
    $penyelenggara = isset($_POST['penyelenggara']);
    $nama_ayah = isset($_POST['nama_ayah']);
    $alamat_ayah = isset($_POST['alamat_ayah']);
    $pekerjaan_ayah = isset($_POST['pekerjaan_ayah']);
    $penghasilan_ayah = isset($_POST['penghasilan_ayah']);
    $no_hp_ayah = isset($_POST['no_hp_ayah']);
    $st_hidup_ayah = isset($_POST['st_hidup_ayah']);
    $agama_ayah = isset($_POST['agama_ayah']);
    $nama_ibu = isset($_POST['nama_ibu']);
    $alamat_ibu = isset($_POST['alamat_ibu']);
    $pekerjaan_ibu = isset($_POST['pekerjaan_ibu']);
    $penghasilan_ibu = isset($_POST['penghasilan_ibu']);
    $no_hp_ibu = isset($_POST['no_hp_ibu']);
    $st_hidup_ibu = isset($_POST['st_hidup_ibu']);
    $agama_ibu = isset($_POST['agama_ibu']);
    $nama_wali = isset($_POST['nama_wali']);
    $alamat_wali = isset($_POST['alamat_wali']);
    $pekerjaan_wali = isset($_POST['pekerjaan_wali']);
    $penghasilan_wali = isset($_POST['penghasilan_wali']);
    $no_hp_wali = isset($_POST['no_hp_wali']);
    $agama_wali = isset($_POST['agama_wali']);
    $hubungan_dengan_pm = isset($_POST['hubungan_dengan_pm']);
    $nama_keluarga = isset($_POST['nama_keluarga']);
    $alamat_keluarga = isset($_POST['alamat_keluarga']);
    $pekerjaan_keluarga = isset($_POST['pekerjaan_keluarga']);
    $penghasilan_keluarga = isset($_POST['penghasilan_keluarga']);
    $no_hp_keluarga = isset($_POST['no_hp_keluarga']);
    $st_hidup_keluarga = isset($_POST['st_hidup_keluarga']);
    $agama_keluarga = isset($_POST['agama_keluarga']);
    $jumlah_tanggungan = isset($_POST['jumlah_tanggungan']);
    $jenis_disabilitas = isset($_POST['jenis_disabilitas']);
    $alat_bantu = isset($_POST['alat_bantu']);
    $kemampuan_dasar = isset($_POST['kemampuan_dasar']);
    $kapan_alami_disabilitas = isset($_POST['kapan_alami_disabilitas']);
    $penyakit_diderita = isset($_POST['penyakit_diderita']);
    $penyakit_pernah_diderita = isset($_POST['penyakit_pernah_diderita']);
    $langkah_pengobatan = isset($_POST['langkah_pengobatan']);
    $obat_yang_dikonsumsi = isset($_POST['obat_yang_dikonsumsi']);
    $jumlah_obat = isset($_POST['jumlah_obat']);
    $pernah_dirawat = isset($_POST['pernah_dirawat']);
    $lama_dirawat = isset($_POST['lama_dirawat']);
    $kecanduan_narkotika = isset($_POST['kecanduan_narkotika']);
    $keadaan_disabilitas = isset($_POST['keadaan_disabilitas']);
    $riwayat_kesehatan = isset($_POST['riwayat_kesehatan']);
    $bukti_gangguan = isset($_POST['bukti_gangguan']);
    $pernah_trauma = isset($_POST['pernah_trauma']);
    $penyelamatan = isset($_POST['penyelamatan']);
    $medis = isset($_POST['medis']);
    $psikososial = isset($_POST['psikososial']);
    $kebutuhan_diinginkan = isset($_POST['kebutuhan_diinginkan']);
    $diri_sendiri = isset($_POST['diri_sendiri']);
    $keluarga = isset($_POST['keluarga']);
    $masyarakat = isset($_POST['masyarakat']);
    $kelembagaan = isset($_POST['kelembagaan']);
    $analisis_peksos = isset($_POST['analisis_peksos']);

    try{
        $data = "INSERT INTO tb_ppks (nama_lengkap, nama_panggilan, NIK, no_kk, jenis_kelamin, usia, tempat_lahir, tanggal_lahir, alamat, agama, anak_ke, jumlah_saudara, status_pernikahan, pekerjaan, jaminan_sosial, no_kartu, no_hp, pendidikan_terakhir, program_rehabilitasi, penyelenggara, nama_ayah, alamat_ayah, pekerjaan_ayah, penghasilan_ayah, no_hp_ayah, st_hidup_ayah, agama_ayah, nama_ibu, alamat_ibu, pekerjaan_ibu, penghasilan_ibu, no_hp_ibu, st_hidup_ibu, agama_ibu, nama_wali, alamat_wali, pekerjaan_wali, penghasilan_wali, no_hp_wali, agama_wali, hubungan_dengan_pm, nama_keluarga, alamat_keluarga, pekerjaan_keluarga, penghasilan_keluarga, no_hp_keluarga, st_hidup_keluarga, agama_keluarga, jumlah_tanggungan, jenis_disabilitas, alat_bantu, kemampuan_dasar, kapan_alami_disabilitas, penyakit_diderita, penyakit_pernah_diderita, langkah_pengobatan, obat_yang_dikonsumsi, jumlah_obat, pernah_dirawat, lama_dirawat, kecanduan_narkotika, keadaan_disabilitas, riwayat_kesehatan, bukti_gangguan, pernah_trauma, penyelamatan, medis, psikososial, kebutuhan_diinginkan, diri_sendiri, keluarga, masyarakat, kelembagaan, analisis_peksos) VALUES ('$nama_lengkap', '$nama_panggilan','$NIK','$no_kk','$jenis_kelamin','$usia','$tempat_lahir','$tanggal_lahir','$alamat','$agama','$anak_ke','$jumlah_saudara','$status_pernikahan','$pekerjaan','$jaminan_sosial','$no_kartu','$no_hp','$pendidikan_terakhir','$program_rehabilitasi','$penyelenggara', '$nama_ayah', '$alamat_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$no_hp_ayah', '$st_hidup_ayah', '$agama_ayah', '$nama_ibu', '$alamat_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$no_hp_ibu', '$st_hidup_ibu', '$agama_ibu', '$nama_wali', '$alamat_wali', '$pekerjaan_wali', '$penghasilan_wali', '$no_hp_wali', '$agama_wali', '$hubungan_dengan_pm', '$nama_keluarga', '$alamat_keluarga', '$pekerjaan_keluarga', '$penghasilan_keluarga', '$no_hp_keluarga', '$st_hidup_keluarga', '$agama_keluarga', '$jumlah_tanggungan', '$jenis_disabilitas', '$alat_bantu', '$kemampuan_dasar', '$kapan_alami_disabilitas', '$penyakit_diderita', '$penyakit_pernah_diderita', '$langkah_pengobatan', '$obat_yang_dikonsumsi', '$jumlah_obat', '$pernah_dirawat', '$lama_dirawat', '$kecanduan_narkotika', '$keadaan_disabilitas', '$riwayat_kesehatan', '$bukti_gangguan', '$pernah_trauma', '$penyelamatan', '$medis', '$psikososial', '$kebutuhan_diinginkan', '$diri_sendiri', '$keluarga', '$masyarakat', '$kelembagaan', '$analisis_peksos')";

        $con->exec($data);
        // echo json_encode($data);
        // if($con->exec($data)){
        //     echo "<script>alert('Berhasil Simpan Data!');
        //     document.location.href='src/final.php'</script>\n";
        // } else {
        //     echo "Unable to create record";
        // }
    }catch(PDOException $e){
        echo $data . "<br>" . $e->getMessage();
    }
    $con = null;
}
?>