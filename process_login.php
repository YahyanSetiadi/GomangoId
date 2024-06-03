<?php
include ("config.php");

//Menangkap Request
if (isset($_POST['login'])) {
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM login_user WHERE username = '$username' AND password = '$password'");

if (mysqli_num_rows($query) > 0){
    $_SESSION['log'] = 'True';
    echo 
    "<script> 
    alert('Login Berhasil!!');
    document.location.href = 'index.php';
    </script>";
}else{
    echo 
    "<script> 
    alert('Username atau Password Salah!! Silahkan Login Ulang');
    document.location.href = 'login.php';
    </script>";
};
}


?>
