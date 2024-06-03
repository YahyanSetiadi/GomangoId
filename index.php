<?php
require 'config.php';
require 'cek.php';

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
  <link href="assets/img/Logo/logos.png" rel="logos">
  <link href="assets/img/apple-touch-icon.png" class="img-responsive" rel="apple-touch-icon">

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
  <script src="https://kit.fontawesome.com/a46b94cb4f.js" crossorigin="anonymous"></script>

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
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="order.php"><i class="fa-solid fa-cart-shopping "></i></a></li>
          <path
            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </svg>
      </nav>
      <!-- .navbar -->

      <div class="dropdown">
        <a class="btn btn-book-a-table btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
          data-bs-toggle="dropdown" aria-expanded="false">
          Login
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="admin/login.php">Login Admin</a></li>
        </ul>
      </div>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">100% Sayur dan Buah Segar</h2>
          <p data-aos="fade-up" data-aos-delay="100">Belanja sayur dan buah dengan murah, mudah dan cepat</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#menu" class="btn-book-a-table">Belanja Sekarang!</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/buah/buah4.avif" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="700">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p><span>Gomango.id</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
            <img
              src="https://img.freepik.com/premium-photo/healthy-fresh-vegetables-wooden-boxes-white-background-healthy-food_214787-185.jpg"
              width="700" height="450">
          </div>
          <div class="col-lg-5 d-flex align-items-end flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="300">
            <div class="content ps-10 ps-lg-5 justify-content-center">
              <p style="text-align: justify ;">Toko Buah Gomango.id didirikan sejak 2016. Gomango.id merupakan toko buah grosir dan agen buah yang
                berpusat di Pasar Induk Kramat Jati tepatnya pada toko UD.Abdul Aitam. Kami menyediakan buah dan sayur
                yang berkualitas bagi pelanggan dengan harga terjangkau, dan melayani pelanggan melalui pelayanan call
                center 24 jam.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Why Choose Us</h2>
            <p><span>Gomango.id</span></p>
          </div>

          <div class="row gy-5">

            <div class="col-lg-12 position-relative display-flex align-items-center">
              <div class="row gy-4 mb-3 justify-content-center">

                <div class="col-xl-3" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-truck"></i>
                    <h4>Gratis Ongkir</h4>
                    <p>Belanja minimal Rp.50.000,-</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-award"></i>
                    <h4>Kualitas</h4>
                    <p>Kualitas dari pertanian terbaik </p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-box-seam"></i>
                    <h4>Buah Segar</h4>
                    <p>Dipetik langsung dari kebun</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-question-octagon"></i>
                    <h4>Bantuan</h4>
                    <p>Bantuan setiap 24/7 selalu online</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>

          </div>

        </div>
      </section>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Gomango.id Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Buah</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Sayur</h4>
            </a><!-- End tab nav item -->
        </li>
        </ul>

        <!-- ======= BUAH ======= -->
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
          <div class="tab-pane fade active show" id="menu-starters">
            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Buah</h3>
            </div>

            <div class="row gy-5 bg-white shadow-md rounded-xl">
              <?php
              $sqlBuah = "SELECT * FROM produk WHERE kategori = 'Buah' ORDER BY id_produk DESC";
              $resultBuah = mysqli_query($conn, $sqlBuah);

              // Cek apakah terdapat produk
              if (mysqli_num_rows($resultBuah) > 0) {
                while ($data = mysqli_fetch_assoc($resultBuah)) {
                  $nama_produk = $data['nama_produk'];
                  $foto = $data['foto'];
                  $deskripsi = $data['deskripsi'];
                  $harga = $data['harga'];
                  ?>

                  <div class="col-lg-4 menu-item">
                    <img src="admin/img/<?php echo $foto; ?>" class="menu-img img-fluid" alt="">
                    <h4><?php echo $nama_produk; ?></h4>
                    <p class="ingredients"><?php echo $deskripsi; ?></p>
                    <p class="price"><?php echo $harga; ?></p>
                    <a href="order.php?add_to_cart=<?php echo $data['id_produk']; ?>" type="button" class="btn btn-lg btn-custom">
                      Add to cart
                    </a>
                  </div>

                  <?php
                }
              } else {
                // Tidak ada produk
                echo "<div class='error'>Menu Tidak Ditemukan</div>";
              }
              ?>
            </div>
          </div>
        </div>

      <!-- ======= SAYUR ======= -->
      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        <div class="tab-pane fade " id="menu-breakfast">
          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Sayur</h3>
          </div>

          <div class="row gy-5 bg-white shadow-md rounded-xl">

            <?php
            $sqlSayur = "SELECT * FROM produk WHERE kategori = 'Sayur' ORDER BY id_produk DESC";
            $resultSayur = mysqli_query($conn, $sqlSayur);

            // Cek apakah terdapat produk
            if (mysqli_num_rows($resultSayur) > 0) {
              while ($data = mysqli_fetch_assoc($resultSayur)) {
                $nama_produk = $data['nama_produk'];
                $foto = $data['foto'];
                $deskripsi = $data['deskripsi'];
                $harga = $data['harga'];
                ?>
                  <div class="col-lg-4 menu-item">
                    <img src="admin/img/<?php echo $foto; ?>" class="menu-img img-fluid" alt="">
                    <h4><?php echo $nama_produk; ?></h4>
                    <p class="ingredients"><?php echo $deskripsi; ?></p>
                    <p class="price"><?php echo $harga; ?></p>
                    <a href="order.php?add_to_cart=<?php echo $data['id_produk']; ?>" type="button" class="btn btn-lg btn-custom">
                      Add to cart
                    </a>
                  </div>
                <?php
                }
              } else {
                // Tidak ada produk
                echo "<div class='error'>Menu Tidak Ditemukan</div>";
              }
              ?>
            </div>
          </div>
        </div>




    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            

            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/fruit1.jpg"><img src="assets/img/gallery/fruit1.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/fruit2.jpg"><img src="assets/img/gallery/fruit2.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/fruit3.jpg"><img src="assets/img/gallery/fruit3.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/fruit4.jpg"><img src="assets/img/gallery/fruit4.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/fruit5.jpg"><img src="assets/img/gallery/fruit5.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/fruit6.jpg"><img src="assets/img/gallery/fruit6.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/fruit7.jpg"><img src="assets/img/gallery/fruit7.jpg" class="img-fluid"
                  alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Seller baik n bersedia ketika minta tolong sortirin. Jadi ga sia" kan posisi dari karawaci sampe beli disini, Mangganya ok, tp krn buah alami jd tdk terlepas dr produk yang kurang sempurna, tp sellernya melakukan yg terbaik utk pembeli. Makasihhhhhh
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>e*****n</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Toko ini sudah jadi pilihan hati. Sudah lebih dari dua kali belanja disini dan sangat memuaskan baik dengan kualitas barang maupun sellernya yang sangat informatif. Mangga Cherrynya nagih terus, manis banget... Terimakasih.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Verawatiku</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Ini favorit sayaaaaa, kualitas bagusss bangettttt, manisssssnya ku sukaaaaa. Mangga cherry nya bagus. Dan harga sesuai kantong hehehehehhe.
                        Buah fresh banget, baru datang langsung dikirim ke customer, mantap. Lebih enak lagi diamkan sehari di suhu ruangan, baru masuk kulkas dan di santap.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Tokomurcebranded</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Masyallah Alhamdulillah seller responsif, 1Kg yang besar dapat 2 yg kecil dpt 3, sama" manisnyaaaa cuman beda ukuran aja dan matang pohon semuaa jadi bukan masih muda, udah dipetik yaa ini tua pohon bgttt, Alhamdulillah barakallah sellerr....
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Alvita1809</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->



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
              <a href="https://www.instagram.com/gomango.id/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Gomango.id</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        </div>
      </div>

    </footer>
    <!-- End Footer -->

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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

</body>

</html>