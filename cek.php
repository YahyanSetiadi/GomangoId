<?php
//jika belum login

// if(isset($_SESSION['log'])){
// }else{
//     header('location:index.php');
// }

if(isset($_SESSION['log'])) {
    header('location:index.php');
}

?>