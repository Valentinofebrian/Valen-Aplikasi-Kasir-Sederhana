<?php

$id_barang = $_GET['id_barang'];
$harga = $_POST['harga'];
$nama_barang = $_POST['nama_barang'];

var_dump($_POST);
include'../koneksi.php';
$sql = "UPDATE barang SET nama_barang='$nama_barang',harga='$harga'WHERE id_barang='$id_barang'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=barang");
}else{
echo"<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=barang');</script";
}

