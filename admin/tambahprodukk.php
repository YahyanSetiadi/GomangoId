<?php

include 'function.php';

$kategori = $_POST['kategori'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$foto = $_FILES['foto']['name'];
$deskripsi = $_POST['deskripsi'];
$ketersediaan_stok = $_POST['ketersediaan_stok'];

if (isset($_GET['id'])) {
    $id = $_GET['id_produk'];
} else {
    $id = "";
}

if ($id != "") {
    $sql1 = "SELECT * FROM produk WHERE id_produk='$id_produk'";
    $q1 = mysqli_query($conn, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $foto = $r1['foto'];
}

if(isset($_FILES['foto']['name'])){
    if ($_FILES['foto']['name']) {
        $foto_name = $_FILES['foto']['name'];
        $foto_file = $_FILES['foto']['tmp_name'];

        $detail_file = pathinfo($foto_name);
        $foto_ekstensi = $detail_file['extension'];
        
        $ekstensi_yang_diperbolehkan = array("jpg", "jpeg", "png", "gif");
        if (!in_array($foto_ekstensi, $ekstensi_yang_diperbolehkan)) {
            $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png dan gif";
    }
}
}

if (empty($error)) {
    if($foto_name){
        $direktori = "../admin/img/";

        @unlink($direktori . "/$foto");

        $foto_name = "produk_" . time() . "_" . $foto_name;
        move_uploaded_file($foto_file, $direktori . "/" . $foto_name);

        $foto = $foto_name;
    } else {
        $foto_name = $foto;
    }
  
$tambah = mysqli_query($conn, "INSERT INTO produk VALUES ('', '$kategori', '$nama_produk', '$harga', '$stok', '$satuan', '$foto', '$deskripsi', '$ketersediaan_stok'); ");
if($tambah){
    ?>
        <script type="text/javascript">
            alert("Tambah Data Berhasil!");
            window.location='produk.php';
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("Ada Kesalahan Input Database!!!");
        </script>
        <?php
    }
    }
?>
