<?php 
 
if(session_start()){
    echo "<script>swal({
        title: 'Apa Anda Yakin?',
        text: 'Mau keluar dari aplikasi ini?',
        icon: 'warning',
        buttons: ['Batal', 'Yakin'],
      });</script>";
};

session_destroy();
 
header("Location: index.php");
 
?>