<?php 
 
session_start();
if(session_destroy()){
    echo "<script>swal({
        title: 'Apa Anda Yakin?',
        text: 'Mau keluar dari aplikasi ini?',
        icon: 'warning',
        buttons: ['Batal', 'Yakin'],
      });</script>";
};
 
header("Location: index.php");
 
?>