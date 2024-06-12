<h5>Halaman Barang</h5>
<a href="?url=tambah-barang" class="btn btn-primary"> Tambah Barang </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
     <td>No</td>
     <td>Nama Barang</td>
     <td>Harga</td>
     <td>Edit</td>
     <td>Hapus</td>
    
     
  
     
</tr>
<?php
include'../koneksi.php';
$no =1;
$sql = "SELECT * FROM barang ORDER BY id_barang DESC";
$query = mysqli_query($koneksi, $sql);
foreach($query as $data){ ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nama_barang'] ?></td>
    <td><?= $data['harga'] ?></td>
    <td>
        <a href="?url=edit-barang&id_barang=<?= $data['id_barang'] ?>" class='btn btn-warning'>EDIT</a>
       </a>
    </td>
    <td>
        <a href="?url=hapus-barang&id_barang=<?= $data['id_barang'] ?>" class='btn btn-danger'>HAPUS</a>
       </a>
    </td>
     </tr>
<?php } ?> 
</table>

