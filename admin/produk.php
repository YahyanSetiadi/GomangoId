<?php

require 'function.php';
require 'cek.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Produk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a46b94cb4f.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-light fa-display"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="kategoriproduk.php">
                    <i class="fas fa-fw fa-solid fa-list-ul"></i>
                    <span>Kategori Produk</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="produk.php">
                    <i class="fas fa-fw fa-solid fa-cart-shopping"></i>
                    <span>Produk</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pesanan.php">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Pesanan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pelanggan.php">
                    <i class="fas fa-fw fa-solid fa-users"></i>
                    <span>Pelanggan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-solid fa-users"></i>
                    <span>keluar</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Zahri Nabilah</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <main>
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Produk</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> <i
                                    class="fas fa-regular fa-house"></i> Home</a>
                        </div>

                        <!--PRODUK-->
                        <div class="card mb-4">
                            <div class="card-header">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#myModal">
                            Tambah Produk
                        </button>
                    </div>
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col"> No</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Ketersediaan Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>

                        <?php
                        //Persiapan Menampilkan Data
                        $no = 1;
                        $direktori = "../admin/img"; 
                        $tampil = mysqli_query($conn, "SELECT * FROM produk order by id_produk desc");
                        while ($data = mysqli_fetch_array($tampil)) {
                            $kategori           = $data['kategori'];
                            $nama_produk        = $data['nama_produk'];
                            $harga              = $data['harga'];
                            $stok               = $data['stok'];
                            $satuan             = $data['satuan'];
                            $foto               = $data['foto'];
                            $deskripsi          = $data['deskripsi'];
                            $ketersediaan_stok  = $data['ketersediaan_stok'];

                            ?>
                            <tr>
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?= $data['kategori'] ?>
                                </td>
                                <td>
                                    <?= $data['nama_produk'] ?>
                                </td>
                                <td>
                                    <?= $data['harga'] ?>
                                </td>
                                <td>
                                    <?= $data['stok'] ?>
                                    <?= $data['satuan'] ?>
                                </td>
                                <td>
                                    <?php
                                    if ($foto != "") {
                                        ?>
                                        <img src="../admin/img/<?php echo $foto; ?>" width="100px">
                                        <?php
                                    } else {
                                        echo "Foto tidak dapat ditambahkan.";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $data['deskripsi'] ?>
                                </td>
                                <td>
                                    <?= $data['ketersediaan_stok'] ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-edit<?php echo $data['id_produk'] ?>"name="edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button type="button" name="hapus" class="btn btn-danger btn-sm"
                                        data-toggle="modal" data-target="#modal-hapus<?php echo $data['id_produk'] ?>">
                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

            <!-- PRODUK EDIT -->
            <div class="modal fade" id="modal-edit<?php echo $data['id_produk'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Produk Edit Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Produk</h4>
                            <button type="button" class="close"
                                data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Produk Edit body -->
                        <div class="modal-body">
                            <form Action="editproduk.php" method="POST">
                                <input type="hidden" name="id_produk"
                                    value=" <?php echo $data['id_produk'] ?>">
                                <div class="from-group">
                                    <label>Kategori</label>
                                    <input type="text" name="kategori"
                                        placeholder="kategori" class="form-control"
                                        value="<?php echo $data['kategori'] ?>">
                                </div>
                                <div class="from-group">
                                    <label>Nama Produk</label>
                                    <input type="text" name="nama_produk"
                                        placeholder="Nama Produk" class="form-control"
                                        value="<?php echo $data['nama_produk'] ?>">
                                </div>
                                <div class="from-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" placeholder="Harga"
                                        class="form-control"
                                        value="<?php echo $data['harga'] ?>">
                                </div>
                                <div class="from-group">
                                    <label>Stok</label>
                                    <input type="number" name="stok" placeholder="Stok"
                                        class="form-control"
                                        value="<?php echo $data['stok'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Satuan</label>
                                    <select type="text" placeholder="Satuan"
                                        class="form-control" name="satuan"
                                        class="form-select">
                                        <option value="<?php echo $data['satuan'] ?>"
                                            placeholder="-pilih-"><?php echo $data['satuan'] ?></option>
                                        <option value="Kg">Kg</option>
                                        <option value="Pcs">Pcs</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ketersediaan Stok</label>
                                    <select type="text" placeholder="Ketersediaan Stok" class="form-control" name="ketersediaan_stok" class="form-select">
                                        <option value="<?php echo $data['ketersediaan_stok'] ?>" ><?php echo $data['ketersediaan_stok'] ?></option>
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Habis">Habis</option>
                                    </select>
                                </div>
                                <div class="from-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi"
                                        placeholder="Deskripsi" class="form-control"
                                        value="<?php echo $data['deskripsi'] ?>">
                                </div>
                                <div class="from-group">
                                    <label>Foto</label>
                                    <img src="../admin/img/<?php echo $foto; ?>">
                                    <input id="foto" type="file" name="foto" placeholder="Foto"
                                        class="form-control"></input>
                                </div>


                                <!-- Modal Edit Footer -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success"
                                        name="edit">
                                        Simpan</button>
                                    <button type="submit" class="btn btn-danger"
                                        name="batalproduk">Batal</button>
                                </div>
                                

                                <?php
                                    if(isset($_POST['edit'])){
                                        //Cek user upload file atau tidak
                                        if($_FILES['foto']['name'] != ""){

                                            //jika upload file

                                            //tampung data file yang akan diupload
                                            $foto_name = $_FILES['foto']['name'];
                                            $foto_file = $_FILES['foto']['tmp_name'];

                                            //proses upload file
                                            move_uploaded_file($foto_file, $direktori . "/" . $foto_name);

                                            //hapus file yang sebelumnya
                                            if(file_exists('../admin/img' .$_POST['foto_lama'])){
                                                unlink('../admin/img' .$_POST['foto_lama']);
                                            }
                                        }else{
                                            //Jika tidak upload file
                                            $foto_name = $_POST['foto_lama'];
                                        }

                                        $query_update = 'UPDATE produk SET
                                        kategori = "'. $_POST['kategori'].'",
                                        nama_produk = "'. $_POST['nama_produk'].'",
                                        harga = "'. $_POST['harga'].'",
                                        stok = "'. $_POST['stok'].'",
                                        satuan = "'. $_POST['satuan'].'",
                                        foto ="'. $foto_name.'",
                                        deskripsi = "'. $_POST['deskripsi'].'",
                                        ketersediaan_stok = "'. $_POST['ketersediaan_stok'].'"
                                        WHERE id_produk= "'. $_POST['id_produk'].'" ';

                                        $run_query_update = mysqli_query($conn, $query_update);

                                        if(!$run_query_update){
                                            echo 'Data gagal diedit' .mysqli_error($conn);
                                            exit();
                                        }

                                        echo"<script>alert('Data berhasil diedit')</script>";
                                        echo "<script>window.location = 'produk.php'</script>";
                                    }
                                    ?>


                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- The Modal Hapus -->
                                                <div class="modal fade" id="modal-hapus<?php echo $data['id_produk'] ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Hapus Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Hapus Produk</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal Hapus body -->
                                                            <div class="modal-body">
                                                                <form Action="hapusproduk.php" method="POST">
                                                                    <div class="card-body">
                                                                        <div class="from-group">
                                                                            <label> Apakah kamu yakin ingin menghapus
                                                                                kategori ini ? </label>
                                                                            <input type="text" name="nama_produk"
                                                                                placeholder="Nama Produk"
                                                                                class="form-control"
                                                                                value="<?php echo $data['nama_produk'] ?>"
                                                                                readonly>
                                                                            <input type="hidden" name="id_produk"
                                                                                value=" <?php echo $data['id_produk'] ?>">
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <!-- Modal Hapus Footer -->
                                                            <div class="card-footer">
                                                                <button type="submit" class="btn btn-danger"
                                                                    name="submitproduk">Delete</button>
                                                            </div>
                                </form>
                                <?php
                                            }
                                            ?>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        </table>
    </div>
    </div>
    </div>
    </form>
    </main>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Gomango.id 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

<?php
if (isset($_SESSION['tambah'])) {
    echo $_SESSION['tambah'];
    unset($_SESSION['tambah']);
}
if (isset($_SESSION['upload'])) {
    echo $_SESSION['upload'];
    unset($_SESSION['upload']);
}
?>

<!-- TAMBAH PRODUK -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- TAMBAH PRODUK Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Produk Baru</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- TAMBAH PRODUK body -->
            <form Action="tambahprodukk.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Kategori</label>
                        <select type="text" placeholder="Kategori" class="form-control" name="kategori"
                            class="form-select">
                            <option> -pilih- </option>
                            <option value="Buah">Buah</option>
                            <option value="Sayur">Sayur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputHarga">Harga</label>
                        <input type="text" class="form-control" name="harga" placeholder="Harga Produk" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputStok">Stok</label></label>
                        <input type="number" class="form-control" name="stok" placeholder="Stok" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Satuan</label>
                        <select type="text" placeholder="Satuan" class="form-control" name="satuan" class="form-select">
                            <option> -pilih- </option>
                            <option value="Kg">Kg</option>
                            <option value="Pcs">Pcs</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Ketersediaan Stok</label>
                        <select type="text" placeholder="Ketersediaan Stok" class="form-control"
                            name="ketersediaan_stok" class="form-select">
                            <option> -pilih- </option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Habis">Habis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDeskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">
                            Foto Produk
                        </label>
                        <div class="col-sm-20">
                            <input class="form-control" type="file" name="foto" id="foto">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>


</html>