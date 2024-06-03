<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate data from input form
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $telepon = mysqli_real_escape_string($conn, $_POST['telepon']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $metode_pembayaran = mysqli_real_escape_string($conn, $_POST['metode_pembayaran']);

    // Menyimpan data pesanan ke tabel "checkout" dalam database
    $insertQuery = "INSERT INTO checkout (nama_produk, telepon, harga, jumlah, total, tanggal, status, nama, email, alamat, metode_pembayaran, bukti_tf) 
                   VALUES";

    // Get the checked products from the database
    $sql = "SELECT * FROM produk WHERE checked = 1";
    $result = mysqli_query($conn, $sql);

    $totalAmount = 0; // Inisialisasi total harga

    while ($row = mysqli_fetch_assoc($result)) {
        $id_produk = $row['id_produk'];
        $nama_produk = mysqli_real_escape_string($conn, $row['nama_produk']);
        $harga = floatval($row['harga']);
        $quantity = 1; // Set default quantity to 1

        if (isset($_POST['quantity_' . $id_produk])) {
            $quantity = intval($_POST['quantity_' . $id_produk]);
        }

        $subtotal = $harga * $quantity;
        $totalAmount += $subtotal;

        // Concatenate values for multiple product entries
        $insertQuery .= " ('$nama_produk', '$telepon', '$harga', '$quantity', '$subtotal', NOW(), 'pending', '$nama', '$email', '$alamat', '$metode_pembayaran', ''),";
    }

    // Remove the trailing comma from the query string
    $insertQuery = rtrim($insertQuery, ",");

    // Execute the query
    if (mysqli_query($conn, $insertQuery)) {
        // Upload bukti transfer and save the file name in the database
        if ($_FILES['bukti_tf']['name']) {
            $buktiTfName = basename($_FILES['bukti_tf']['name']);
            $buktiTfPath = $uploadDir . $buktiTfName;
            if (move_uploaded_file($_FILES['bukti_tf']['tmp_name'], $buktiTfPath)) {
                // Get the last inserted order ID
                $lastInsertId = mysqli_insert_id($conn);

                // Update the "bukti_tf" column with the file name
                $insertBuktiTfQuery = "UPDATE checkout SET bukti_tf='$buktiTfName' WHERE id_order='$lastInsertId'";
                mysqli_query($conn, $insertBuktiTfQuery);
            } else {
                echo "Error uploading bukti transfer.";
            }
        } else {
            echo "Error: No bukti transfer file selected.";
        }

        // Update total harga in the checkout table
        $updateTotalAmountQuery = "UPDATE checkout SET total='$totalAmount' WHERE id_order='$lastInsertId'";
        mysqli_query($conn, $updateTotalAmountQuery);

        // Tampilkan pesan sukses jika data berhasil disimpan
        echo "Pesanan berhasil dikonfirmasi. Terima kasih telah memesan!";
    } else {
        // Menampilkan pesan error jika terjadi kesalahan saat menyimpan data
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
    }
     // Redirect ke halaman notif.html setelah 1 detik menggunakan JavaScript
     echo '<script>setTimeout(function(){ window.location.href = "notif.html"; }, 1000);</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gomango.id</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Yummy
    * Updated: May 30 2023 with Bootstrap v5.3.0
    * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Gomango.id</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="index.php">Menu</a></li>
                    <li><a href="index.php">Gallery</a></li>
                    <li><a href="order.php">Order</a></li>
            </nav><!-- .navbar -->

            <div class="dropdown">
                <a class="btn btn-book-a-table btn-secondary dropdown-toggle" href="#" role="button"
                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="index.php">User</a></li>
                    <li><a class="dropdown-item" href="#">Admin</a></li>
                    <li><a class="dropdown-item" href="logout.php"><Logout
                                class="bi bi-box-arrow-right"><span> Logout </span></i></a></li>
                </ul>
            </div>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->


    <br><br><br><br>

    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h2 mb-3 text-black">Konfirmasi Pembayaran</h2>
                    <div class="p-3 p-lg-5 border bg-white">

                        <!-- Baru -->
                        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="nama" class="text-black">Nama Lengkap <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telepon" class="text-black">Nomor Telepon (WhatsApp) <span
                                            class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="telepon" name="telepon" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="text-black">Alamat <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>

                            <div class="form-group">
                                <label for="metode_pembayaran" class="text-black">Metode Pembayaran</label>
                                <select class="form-control" id="metode_pembayaran" name="metode_pembayaran">
                                    <option value="transfer_bank">Transfer Bank</option>
                                    <option value="kartu_kredit">Kartu Kredit</option>
                                    <option value="dompet_digital">Dompet Digital</option>
                                </select>
                            </div>

    <div class="form-group">
        <label for="bukti_pembayaran" class="text-black">Bukti Pembayaran</label>
        <input type="file" class="form-control" id="bukti_tf" name="bukti_tf" accept=".pdf,.doc">
    </div>
                            <div class="form-group">
                                <div class="collapse">
                                    <div class="py-2 mb-4">

                                    </div>
                                </div>
                            </div>
                            <!--  -->

                            <div class="form-group">

                            </div>

                    </div>
                </div>
                

    <!-- Pesanan Saya -->
<div class="col-md-6">
    <div class="row mb-5">
        <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Pesanan Saya</h2>
            <div class="p-3 p-lg-5 border bg-white">
                <table class="table site-block-order-table mb-5">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $totalAmount = 0;
                        // Fungsi untuk mendapatkan daftar produk yang telah diceklist dari database
                        function getCheckedProducts($conn)
                        {
                            $checkedProducts = array();

                            $sql = "SELECT * FROM produk WHERE checked = 1";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $checkedProducts[] = $row;
                            }

                            return $checkedProducts;
                        }

                        // Panggil fungsi getCheckedProducts untuk mendapatkan daftar produk yang telah diceklist
                        $checkedProducts = getCheckedProducts($conn);

                        // Display the selected products in the table
                        foreach ($checkedProducts as $product) {
                            $foto = $product['foto'];
                            $id_produk = $product['id_produk'];
                            $nama_produk = $product['nama_produk'];
                            $harga = $product['harga'];
                            $quantity = 1; // Set default quantity to 1

                            if (isset($_POST['quantity_' . $id_produk])) {
                                $quantity = intval($_POST['quantity_' . $id_produk]);
                            }

                            $subtotal = $harga * $quantity;
                            $totalAmount += $subtotal;

                            echo "<tr>";
                            echo "<td><img src='admin/img/$foto' alt='$nama_produk' class='img-fluid rounded' style='max-width: 100px; max-height: 100px;'></td>";
                            echo "<td><h5 class='mb-0'>$nama_produk</h5></td>";
                            echo "<td>$harga</td>";
                            echo "<td><input type='number' min='1' class='form-control' name='quantity_$id_produk' value='$quantity'></td>";
                            echo "<td>$subtotal</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Tampilkan total harga -->
                <div class="form-group">
                    <label for="totalHarga" class="text-black">Total Harga:</label>
                    <input type="text" class="form-control" id="totalHarga" value="<?php echo $totalAmount; ?>" readonly>
                </div>

                <div class="form-group">
        <button type="submit" name="confirm_order" class="btn btn-black btn-lg py-3 btn-block" onclick="myalert()">Confirm Order</button>
    </div>
            </div>
        </div>
    </div>
</div>



<!-- end -->

            </div>
        </div>
    </div>
    <script> 
        function myalert() { 
            alert("Berhasil!"); 
        } 
    </script>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            Komp. Bumi Harapan Permai <br>
                            Blok D-7, Kramat Jati, Jakarta Timur<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Sosial</h4>
                        <p>
                            <strong>Phone :</strong> 085421376345<br>
                            <strong>Email :</strong> Gomango.id@gmail.com.<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat : 11AM</strong> - 23PM<br>
                            <strong> Sunday : </strong>Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#https://www.instagram.com/gomango.id/" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
