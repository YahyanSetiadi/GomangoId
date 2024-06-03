<?php

include 'function.php';

$id_kategoriii = $_POST['id_kategoriii'];

$query = mysqli_query ($conn, "DELETE FROM kategoriii WHERE id_kategoriii='$id_kategoriii' ");

if ($query){
    echo
    "<script>
        alert('Hapus Data Berhasil!');
        window.location='kategoriproduk.php';
    </script>";
}else{
    echo
    "<script>
        alert('Ada Kesalahan Dalam Input Database!!!');
    </script>";
}

?>