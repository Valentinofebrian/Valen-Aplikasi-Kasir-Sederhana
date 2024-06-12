<?php

$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];

include'../koneksi.php';
$sql = "INSERT INTO barang(nama_barang,harga) VALUES('$nama_barang','$harga')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=barang");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=barang');</script>";
}
