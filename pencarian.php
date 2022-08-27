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
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="cari.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <img src="logo.png" class="logo">
            <img src="logo2.png" class="logo2">
            <div class="menu">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="input.php">Input</a></li>
                    <li><a href="pencarian.php" class="cari">Pencarian</a></li>
                    <li><a href="logout.php"class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 align="center">Data PPKS</h1>
    <br><br>

    <form action="#" method="post" style="text-align:center;">

        <input type="text" name="keyword" class="keyword" width="30" style="width: 850px; height: 35px; border-radius: 10px" autofocus placeholder="Masukan NIK" autocomplete="off">
        <button type="submit" style="border: none; border-radius: 15px; background: #764AF1; color: #FFFFFF; width: 60px; font-size: 15px; height: 35px;"  name="cari" >Cari</button>

    </form>
    <br>
    <br>
    <table border="1" align="center" class="tabsearch" width="80%">
        <tr bgcolor=#764AF1>
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
                    echo "<script>Swal.fire('Yahh!',
                    'Data tidak ditemukan!', 
                    'warning')</script>";
                 }
                 else{
                    foreach($calonppks_details as $key=>$data)
                    {
                        ?>
                    <tr style="text-align: center;">
                        <td><?php echo $data['NIK'];?></a></td>
                        <td><?php echo $data['nama_lengkap'];?></td>
                        <td><?php echo $data['usia'];?></td>
                        <td><?php echo $data['jenis_kelamin'];?></td>
                        <td><?php echo $data['tempat_lahir'];?></td>
                        <td>
                            <div class="btn-group">
                                <a  class="button" href="pencarian.php?hapus=<?php echo $data['NIK']; ?>">hapus</a>
                            </div>
                        </td>
                    </tr>
                        <?php
                    }
                 }
                ?>
             
         </tbody>

        
    </table>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</body>
</html>