<h5>Halaman Barang</h5>
<a href="?url=tambah-barang" class="btn btn-primary"> Tambah Barang </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
     <td>No</td>
     <td>Nama Pembelian</td>
     <td>Jumlah</td>
     <td>Pembelian</td>
  
     
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
        <a href="?url=beli-barang&id_barang=<?= $data['id_barang'] ?>" class='btn btn-warning'>BELI</a>
       </a>
    </td>
    

  </tr>
<?php } ?> 

</table>

