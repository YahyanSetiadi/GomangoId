<?php
include("function.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Menyocokan dengan datbase
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");

    //Menghitung data
    $hitung = mysqli_num_rows($cekdatabase);

    if ($hitung > 0) {
        $_SESSION['log'] = 'True';
        echo 
        "<script> 
        alert('Login Berhasil!!');
        document.location.href = '../admin/index.php';
        </script>";
    } else {
        echo 
        "<script> 
        alert('Username atau Password Salah!! Silahkan Login Ulang');
        document.location.href = 'login.php';
        </script>";
    };
}
?>
