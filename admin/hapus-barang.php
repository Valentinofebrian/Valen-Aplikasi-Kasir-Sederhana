<?php

$id_barang = $_GET['id_barang'];

include'../koneksi.php';
$sql = "DELETE FROM barang WHERE id_barang='$id_barang'";
$query = mysqli_query($koneksi, $sql);
if($query){
header("Location:?url=barang");
}else{
echo"<script>alert('Maaf Data Tidak Terhapus'); window.locatin.assign('?url=barang');</script>";
}