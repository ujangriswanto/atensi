<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_asessmen";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
	die("Koneksi gagal:".mysqli_connect_error());
}

	$username = $_POST['username'];
	$pass = $_POST['password'];

	// Mencari user berdasarkan username dan password yang di input
	$query  	= "SELECT * FROM tb_user WHERE username='$username' AND password='$pass'";
	$result     = mysqli_query($koneksi,$query);
	$num_row    = mysqli_num_rows($result);
	$row   		= mysqli_fetch_array($result);

	// Mengecek data nya ada atau tidak
	if($num_row > 0) {

		// Jika Rolenya admin maka fungsi ini yang akan berjalan
		if ($row['level'] == "admin") {

			// Mengirim response ke ajax
			echo "admin";
			// Membuat Session
			// $_SESSION['username'] = $row['username'];
			// $_SESSION['level'] = "admin";

		// Jika Rolenya kasir maka fungsi ini yang akan berjalan
		}elseif ($row['level'] == "user") {

			// Mengirim response ke ajax
			echo "user";
			// Membuat Session
			// $_SESSION['username'] = $row['username'];
			// $_SESSION['level'] = "user";
			
		// Jika Rolenya tidak ada yang sesuai maka akan menampilkan error
		}else{
			// Mengirim response ke ajax
			echo "error";
		}
	} else {
		// Mengirim response ke ajax
		echo "error";
	}
?>