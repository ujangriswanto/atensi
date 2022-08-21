<?php 
$connect=new mysqli("localhost", "root", "", "db_asessmen");
if(!$connect){
    echo "Koneksi Gagal!";
    exit();
}

function query($query){
    global $conn;
    $result =mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword){
    $query = "SELECT * FROM tb_ppks WHERE NIK = $keyword";
    return query($query);
}


?>