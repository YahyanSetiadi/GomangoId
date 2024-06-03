<?php
session_start();
session_unset();
session_destroy();
echo 
    "<script> 
    alert('Apakah Anda Yakin Keluar Dari Halaman Ini?');
    document.location.href = 'login.php';
    </script>";
exit;
?>