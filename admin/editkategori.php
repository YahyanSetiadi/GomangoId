<?php

include 'function.php';

$id_kategoriii = $_POST['id_kategoriii'];
$namakategori = $_POST['namakategori'];

$editkategori = mysqli_query ($conn, "UPDATE kategoriii SET namakategori='$namakategori' WHERE id_kategoriii='$id_kategoriii' ");

if ($editkategori){
    echo
    "<script>
        alert('Edit Data Berhasil!');
        window.location='kategoriproduk.php';
    </script>";
}else{
    echo
    "<script>
        alert('Ada Kesalahan Dalam Input Database!!!');
    </script>";
}

?>