    <?php

    $id_barang = $_GET['id_barang'];
    $jumlah = $_POST['jumlah'];

    var_dump($_POST);
    include'../koneksi.php';
    $sql = "INSERT INTO pembelian(id_barang,jumlah)VALUES (id_barang='$id_barang', jumlah='$jumlah')";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        header("Location:?url=barang");
    }else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=barang');</script";
    }

