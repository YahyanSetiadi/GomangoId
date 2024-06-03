<?php

include 'function.php';

$namakategori = $_POST['namakategori'];

$query = mysqli_query($conn, " INSERT INTO kategoriii VALUES('', '$namakategori'); ");

if ($query){
    ?>
    <script type="text/javascript">
        alert("Tambah Data Berhasil!");
        window.location='kategoriproduk.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Ada Kesalahan Input Database!!!");
    </script>
    <?php
}
?>