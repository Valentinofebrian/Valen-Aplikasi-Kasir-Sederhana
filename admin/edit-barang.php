 <?php
 $id_barang = $_GET['id_barang'];
 include'../koneksi.php';
 $sql = "SELECT * FROM barang WHERE id_barang='$id_barang'";
 $query = mysqli_query ($koneksi, $sql);
 $data = mysqli_fetch_array($query);
 ?>
 <h5>Halaman Beli Barang.<h5>
<a href="?url=barang" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-barang&id_barang=<?= $id_barang; ?>">
    <div class="form-group mb-2">
        <label>Nama Barang</label>
        <input value="<?= $data['nama_barang']; ?>" type="text" name="nama_barang" class="form-control" required> 
        
</div>
<div class="form-group mb-2">
    <label>Harga</label>
    <input value="<?= $data['harga'] ?>" type="text" name="harga" class= "form-control" requierd>
</div>


<div class="form-group mb-2">
    <button type="submit" class="btn btn-success"> SIMPAN </button>
    <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    





</div>
</form>
