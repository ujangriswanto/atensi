<?php
// memulai sesi
session_start();
// koneksi db
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_asessmen";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
	die("Koneksi gagal:".mysqli_connect_error());
}

// $queryResult = $connect->query("SELECT * FROM tb_user");
//     $result=array();

//     while($fetchData=$queryResult->fetch_assoc()){
//         $result[]=$fetchData;
//     }

//     echo json_encode($result);
// // deklarasi variabel
$username = $_POST['username'];
$pass = $_POST['password'];

// Mencari user berdasarkan username dan password yang di input
$query  	= "SELECT * FROM tb_user WHERE username='$username' AND password='$pass'";
$result     = mysqli_query($koneksi,$query);
$num_row    = mysqli_num_rows($result);
$row   		= mysqli_fetch_array($result);

// Mengecek data nya ada atau tidak
if($num_row > 0) {
	// Jika levelnya admin maka fungsi ini yang akan berjalan
	if ($row['level'] == "admin") {
		// Mengirim response ke ajax
		echo "admin";

	// Jika levelnya user maka fungsi ini yang akan berjalan
	}elseif ($row['level'] == "user") {
		// Mengirim response ke ajax
		echo "user";
	
	// Jika levelnya tidak ada yang sesuai maka akan menampilkan error
	}else{
		// Mengirim response ke ajax
		echo "error";
	}
} else {
	// Mengirim response ke ajax
	echo "error";
}
?>