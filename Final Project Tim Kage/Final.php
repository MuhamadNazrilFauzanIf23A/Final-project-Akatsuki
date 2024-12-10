<?php
require 'DB/Dbzahra.php';
$result = $conn->query("SELECT * FROM listmobil"); 
$list_mobil = $result->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="foto/logo.jpg" />
    <title>Zahrarental</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css?v=<?= time(); ?>" rel="stylesheet">
    <!-- javascript -->
    <script src="js/scripts.js"></script>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container">
    <a class="navbar-brand fs-4 " href="#">Zahrarental</a>
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Sidebar -->
    <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header" style="border-bottom: 1px solid black;">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Zahrarental</h5>
        <button type="button" class="btn-close btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- sidebar body -->
      <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
        <ul class="navbar-nav justify-content-center align-items-center fs-6 flex-grow-1 pe-3">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="AboutRental/About.php">About rental</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="Contact/contact.php">Contact</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="Pesanan/pesanan.php">Pesanan</a>
          </li>
        </ul>
        <!-- Login/sign up -->
         <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
          <a href="Login/loginnew.php" class="text-black">Login</a>
          <a href="Login/register.php" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Sign up</a>
        </div>
      </div>
    </div>
  </div>
</nav>

    <!-- Background -->
    <div class="background">
    </div>

    <!-- text -->
    <h2 class="text-center mb-4 mt-5">Daftar Mobil</h2>

    <!-- Card List -->
    <div class="container mt-5">
    <div class="row">
        <?php foreach ($list_mobil as $Lm) : ?>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="Foto/<?= $Lm[1]; ?>" class="card-img-top" alt="Mobil">
                    <div class="card-body text-center">
                    <h5 class="card-title"><?= $Lm[2]; ?></h5>
                    <p class="card-text"><?= $Lm[3]; ?></p>
                    <p class="card-text"><?= $Lm[4]; ?></p>
                        <a href="Booking/Pendaftaran.php" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- persyaratan -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Persyaratan lepas kunci</h2>
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4 mt-2">
            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#caraMenyewaModal">
                <div class="card text-center shadow" style="cursor: pointer;">
                    <div class="card-body">
                        <i class="fas fa-car fs-1 mb-3"></i>
                        <h5 class="card-title">lepas kunci bagi karyawan</h5>
                        <p class="card-text">Baca apa saja syarat yang harus disiapkan sebelum menyewa mobil.</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mt-2">
            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#syaratSewaModal">
                <div class="card text-center shadow" style="cursor: pointer;">
                    <div class="card-body">
                        <i class="fas fa-list-check fs-1 mb-3"></i>
                        <h5 class="card-title">lepas kunci bagi non-karyawan</h5>
                        <p class="card-text">Baca apa saja syarat yang harus disiapkan sebelum menyewa mobil.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Modal 1: Cara Menyewa -->
<div class="modal fade" id="caraMenyewaModal" tabindex="-1" aria-labelledby="caraMenyewaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="caraMenyewaModalLabel">Lepas kunci bagi karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Isi modal -->
        <p>  Berikut adalah syarat lepas kunci bagi karyawan</p>
        <p>- Wajib memiliki SIM A</p>
        <p>- KTP</p>
        <p>- Id Card Karyawan</p>
        <p>- BPJS Ketenagakerjaan yang online/cek aplikasi JMO</p>
        <p>- Motor minimal 2019 + STNK & pajak hidup</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2: Syarat Sewa -->
<div class="modal fade" id="syaratSewaModal" tabindex="-1" aria-labelledby="syaratSewaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="syaratSewaModalLabel">Lepas kunci bagi nonkaryawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- isi modal -->
        <p>  Berikut adalah syarat lepas kunci bagi nonkaryawan</p>
        <p>- Wajib memiliki SIM A</p>
        <p>- KTP, Kartu keluarga, Buku nikah, & Akta kelahiran</p>
        <p>- Ijazah minimal SMA/Sederajat</p>
        <p>- Motor minimal 2019 + STNK & pajak hidup</p>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <div class="mb-3">
            <a href="https://wa.me/6287730041815" class="text-white me-4" target="_blank" aria-label="WhatsApp">
                <i class="fab fa-whatsapp fs-4"></i>
            </a>
            <a href="https://instagram.com/zahrarentalkarawang" class="text-white me-4" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram fs-4"></i>
            </a>
            <a href="https://tiktok.com/@zahrarent" class="text-white" target="_blank" aria-label="TikTok">
                <i class="fab fa-tiktok fs-4"></i>
            </a>
        </div>
        <p class="mb-0"> &copy; 2024 Zahrarental | All rights reserved</p>
    </div>
</footer>
</body>
</html>
