<?php
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='admin'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
} 
?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin / Petugas - Aplikasi Barang Sederhana .</title>
    <link href="../css/bootstrap.min.css" rel = "stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Aplikasi Barang Sederhana.</h3>
    <div class="alert alert-info   ">
     Anda Login Sebagai <b>ADMINISTRATOR</b> Aplikasi Barang Sederhana.
    </div>
    <a href="admin.php"class="btn btn-primary"> Administrator</a>
    <a href="admin.php?url=logout"class="btn btn-primary"> Logout</a>
    <a href="admin.php?url=barang"class="btn btn-primary">Barang</a>
    <a href="admin.php?url=pembelian"class="btn btn-primary">Pembelian</a>
   <div class="car mt-3">
   <div class="card-body">
   <!-- ini isi web kita -->
    <?php
    $file =@$_GET['url'];
    if(empty($file)){
       echo"<h1>Selamat Datang di Halaman Administrator.</h1>";
       
      
    }else{
        include $file.'.php';
    }
    ?>
       
         </div> 
    </div>
</div>
</script src="../js/bootstrap.bundle.min.js?"></script>
</body>
</html>