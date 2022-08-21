<?php

include "loginserver.php";

if(isset($_POST['unggah']))
{
    $file_name = $_FILES['myfile']['name'];
    move_uploaded_file($_FILES['myfile']['tmp_name'],$file_name);

    mysqli_query($connect, "INSERT INTO tb_form set file='$file_name'");

    echo "<b>File Berhasil Diupload";
    

    //$ekstensi_diperbolehkan = array('jpg');
   // $nama = $_FILES['myfile']['name'];

   //// $x = explode('.', $nama);
   // $ekstensi = strtolower(end($x));
    //$ukuran = $FILES['myfile']['size'];//untuk mendapatkan ukuran file yg akan diupload
    //$file_tmp = $_FILES['myfile']['tmp_name'];//untuk mendapatkan temporary file yang akan diupload(tmp)

    //uji jika ekstensi file yang diupload sesuai
    //if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        //boleh upload file
    //}else{
        //ekstensi file yang diupload tidak sesuai

       // echo "<script>alert('EKSTENSI FILE YANG DIUPLOAD TIDAK SESUAI');
         //   document.location='input.php'
        //</script>";
   // }

}else {

    var_dump("Data tidak berhasil diunggah!");
}


?>
