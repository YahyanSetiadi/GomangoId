<?php
require_once ("config.php");

//Menangkap Request
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$conf_password = md5($_POST['conf_password']);

$query_sql = mysqli_query($conn, "SELECT * FROM login_user WHERE username = '$username'");
$sql       = mysqli_num_rows($query_sql);

if($sql > 0){
    echo "<script>
    alert('Username Telah Terdaftar');
    window.location = 'login.php';
    </script>";
} else {
    if($password !=$conf_password){
        echo "<script> 
        alert('Konfirmasi password tidak sesuai');
        window.location ='login.php';
        </script>";
    }else{
        mysqli_query($conn, "INSERT INTO login_user VALUES ('', '$username', '$email', '$password', '$conf_password')");
        echo "<script> 
        alert('Berhasil Registrasi');
        window.location ='login.php';
        </script>";

if (mysqli_query($conn, $query_sql)){
    header("Location: login.php");
} else {
    echo "Pendaftaran Gagal !" .mysqli_error($conn);
}
    }
}
?>