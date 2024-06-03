<?php

include 'function.php';

$id_produk = $_POST['id_produk'];
@unlink("../admin/img/" . $r1['foto']);


$hapusproduk = mysqli_query ($conn, "DELETE FROM produk WHERE id_produk='$id_produk' ");

if ($hapusproduk){
        echo
        "<script>
            alert('Hapus Data Berhasil!');
            window.location='produk.php';
        </script>";
    }else{
        echo
        "<script>
            alert('Ada Kesalahan Dalam Input Database!!!');
        </script>";
    }
?>