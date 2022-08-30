<?php
include 'caridb.php';
$calonppks_details='';
if(isset($_POST['cari'])){
    if(!empty($_POST['keyword'])){
        $search = $_POST['keyword'];
        $stmt = $con->prepare("SELECT * from tb_ppks where NIK like '%$search%'");
        $stmt->execute();
        $calonppks_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<script>Swal.fire('Hore!', 'Data ditemukan!', 'success')</script>";
    } else {
        echo "<script>Swal.fire('Yahh!', 'NIK tidak ditemukan!', 'warning')</script>";
    }
}

if(isset($_GET['hapus'])){
    $NIK = $_GET['hapus'];
    echo "<script>Swal.fire({
        title: 'Apa Anda Yakin?',
        text: 'Data yang telah dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
      })
      .then((result) => {
        if (result.isConfirmed) {
          Swal.fire('Hore!', 'Data telah terhapus!', 'success')
        } 
      })</script>";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=db_asessmen", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "DELETE FROM tb_ppks WHERE NIK = $NIK";

        $conn->exec($sql);
        
        header("location: pencarian.php");
    } catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari data PPKS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="cari.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="input.php">Input</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="pencarian.php">Pencarian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container justify-content-center">
        <h1 class="judul">Data PPKS</h1>
        <form action="#" method="post" class="text-center mb-3 mt-3">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" name="keyword" class="form-control" placeholder="Masukan NIK" autocomplete="off">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-cari btn-outline-primary"  name="cari" >Cari</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="table-responsive-sm">
            <table class="table">
                <tr class="table-primary">
                <th>NIK</th>
                <th>Nama PPKS</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Aksi</th>
                </tr>
                <tr>
                <tbody>
                        <?php
                        if(!$calonppks_details)
                        {
                            echo "<script>
                            alert(Data tidak ditemukan!);
                            </script>";
                        }
                        else{
                            foreach($calonppks_details as $key=>$data)
                            {
                                ?>
                            <tr>
                                <td><?php echo $data['NIK'];?></td>
                                <td><?php echo $data['nama_lengkap'];?></td>
                                <td><?php echo $data['usia'];?></td>
                                <td><?php echo $data['jenis_kelamin'];?></td>
                                <td><?php echo $data['tempat_lahir'];?></td>
                                <td>
                                    <a class="btn btn-outline-danger" href="pencarian.php?hapus=<?php echo $data['NIK']; ?>">hapus</a>
                                </td>
                            </tr>   
                            <?php
                            } 
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="assets/jquery.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>
</html>