<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php';
require 'cek.php';

// Fungsi untuk menambahkan produk ke dalam keranjang
function tambahProdukKeKeranjang($id_produk, $conn)
{
    // Cek apakah produk sudah ada di keranjang
    if (isset($_SESSION['cart'][$id_produk])) {
        $_SESSION['cart'][$id_produk]['quantity']++;
    } else {
        $sql = "SELECT * FROM produk WHERE id_produk = $id_produk";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['cart'][$id_produk] = array(
                'id_produk' => $row['id_produk'],
                'nama_produk' => $row['nama_produk'],
                'harga' => $row['harga'],
                'quantity' => 1,
                'checked' => false  // Tambahkan key 'checked' dengan nilai awal false
            );
        }
    }
}

// Fungsi untuk menghapus produk dari keranjang
function hapusProdukDariKeranjang($id_produk)
{
    if (isset($_SESSION['cart'][$id_produk])) {
        $_SESSION['cart'][$id_produk]['quantity']--;
        if ($_SESSION['cart'][$id_produk]['quantity'] <= 0) {
            unset($_SESSION['cart'][$id_produk]);
        }
    }
}

// Fungsi untuk mengupdate kuantitas produk di keranjang
function updateKuantitasProduk($id_produk, $quantity, $conn)
{
    if (isset($_SESSION['cart'][$id_produk])) {
        if ($quantity > 0) {
            $_SESSION['cart'][$id_produk]['quantity'] = $quantity;
        } else {
            unset($_SESSION['cart'][$id_produk]);
        }

        // Update nilai kolom 'checked' pada tabel produk sesuai status checkbox terbaru
        $checked = isset($_POST['checkbox'][$id_produk]) ? 1 : 0;
        $sql = "UPDATE produk SET checked = $checked WHERE id_produk = $id_produk";
        mysqli_query($conn, $sql);
    }
}

// Handler saat menambahkan barang ke keranjang
if (isset($_GET['add_to_cart'])) {
    $id_produk = $_GET['add_to_cart'];
    tambahProdukKeKeranjang($id_produk, $conn);
    header('Location: order.php');
    exit();
}

// Handler saat menghapus barang dari keranjang
if (isset($_GET['remove'])) {
    $id_produk = $_GET['remove'];
    hapusProdukDariKeranjang($id_produk);
    header('Location: order.php');
    exit();
}

// Inisialisasi $_SESSION['total_harga'] jika belum ada
if (!isset($_SESSION['total_harga'])) {
    $_SESSION['total_harga'] = getTotalHarga();
}

// Handler saat mengupdate kuantitas barang di keranjang
if (isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $id_produk => $quantity) {
        updateKuantitasProduk($id_produk, $quantity, $conn); // Pass $conn as an argument
    }

    // Update status checkbox
    if (isset($_POST['checkbox'])) {
        foreach ($_SESSION['cart'] as $id_produk => $item) {
            if (isset($_POST['checkbox'][$id_produk])) {
                $_SESSION['cart'][$id_produk]['checked'] = true;
            } else {
                $_SESSION['cart'][$id_produk]['checked'] = false;
            }
        }
    }

    // Hitung total harga dan simpan ke dalam sesi
    $_SESSION['total_harga'] = getTotalHarga();

    header('Location: order.php');
    exit();
}

// Fungsi untuk menghitung total harga dalam keranjang
function getTotalHarga()
{
    $total_harga = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $id_produk => $item) {
            if (isset($item['checked']) && $item['checked']) { // Tambahkan pengecekan apakah item['checked'] sudah di-set atau belum
                $total_harga += $item['harga'] * $item['quantity'];
            }
        }
    }
    return $total_harga;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gomango.id - Keranjang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo/logos.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" class="img-responsive" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .hero-container {
      font-size : 20px; 
    }
  </style>
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
          <li><a href="order.php"><i class="fa-solid fa-cart-shopping ">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg></i></a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="logout.php" class="get-started-btn scrollto">Keluar</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section>
    <div class="hero-container">
      <h1>Keranjang</h1>
    </div>
  </section>End Hero -->

 
  <!-- ======= Order Section ======= -->
  <section id="order" class="order">
    <div class="container">
      <br>
      <h3 class="text text-center text-danger fw-bold">keranjang saya</h3>
      <br>
      <div class="row">
        <div class="col-lg-12 mt-4 mt-lg-0">
          <form action="" method="post">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($_SESSION['cart'])) {
                    $no = 1;
                    foreach ($_SESSION['cart'] as $id_produk => $item) {
                      $nama_produk = $item['nama_produk'];
                      $harga = $item['harga'];
                      $quantity = $item['quantity'];
                      $subtotal = $harga * $quantity;
                      $checked = $item['checked'];  // Mengambil status checkbox
                  ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $nama_produk; ?></td>
                        <td>Rp <?php echo number_format($harga, 0, ',', '.'); ?></td>
                        <td><input type="number" name="quantity[<?php echo $id_produk; ?>]" value="<?php echo $quantity; ?>" min="1"></td>
                        <td>Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></td>
                        <td>
                          <a href="order.php?remove=<?php echo $id_produk; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                        <td>
                          <input type="checkbox" id="checkbox" name="checkbox[<?php echo $id_produk; ?>]" <?php echo ($checked) ? 'checked' : ''; ?>> <!-- Menampilkan checkbox -->
                        </td>
                      </tr>
                  <?php
                    }
                  } else {
                    echo "<tr><td colspan='6' class='text-center'>Keranjang belanja kosong</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>

            <?php if (!empty($_SESSION['cart'])) : ?>
              <div class="text-center mt-4">
                <button type="submit" name="update_cart" class="btn btn-primary">Perbarui Keranjang</button>
              </div>
            <?php endif; ?>
              <div class="text-end mt-2">
                <?php if ($_SESSION['total_harga'] > 0) : ?>
                  <h5>Total Harga: Rp <?php echo number_format($_SESSION['total_harga'], 0, ',', '.'); ?></h5>
                <?php else : ?>
                  <h5>Total Harga: 0</h5>
                <?php endif; ?>
              </div>
            <div class="text-end mt-2">
              <a href="checkout.php" class="btn btn-success"><i class="bx bx-chevron-right"></i>checkout</a>
            </div>

            <div class="row mt-4">
              <div class="col-lg-6">
                <?php if (!empty($_SESSION['cart'])) : ?>
                  <a href="index.php" class="btn btn-secondary"><i class="bx bx-chevron-left"></i> Lanjutkan Belanja</a>
                <?php endif; ?>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Order Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
