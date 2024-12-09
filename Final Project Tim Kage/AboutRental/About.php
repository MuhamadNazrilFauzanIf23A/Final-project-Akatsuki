<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Zahrarental</title>
    <meta name="description" content="Zahrarental adalah penyedia layanan rental mobil terpercaya. Kami siap memenuhi kebutuhan perjalanan Anda dengan berbagai pilihan kendaraan dan layanan terbaik.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="about.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand fs-4" href="../Final.php">Zahrarental</a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header border-bottom">
                    <h5>Zahrarental</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="../Final.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Orders.php">Pesanan</a></li>
                    </ul>
                    <div>
                        <a href="../Login/loginnew.php" class="btn btn-outline-primary">Login</a>
                        <a href="../Login/register.php" class="btn btn-primary">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section mt-5">
        <h1 id="typedText"></h1>
    </div>

    <div class="container content-section">
    <h2 class="text-center">Tentang Kami</h2>
    <p class="text-center">
        Kami di **Zahrarental** percaya bahwa setiap perjalanan adalah pengalaman yang berharga. Dengan pilihan kendaraan yang lengkap dan layanan pelanggan terbaik, kami berkomitmen untuk membuat perjalanan Anda nyaman dan menyenangkan.
    </p>
    <p>
        Apakah Anda mencari kendaraan untuk perjalanan keluarga, bisnis, atau liburan? Kami memiliki berbagai jenis mobil yang dapat disesuaikan dengan kebutuhan Anda. Dengan proses pemesanan yang mudah dan dukungan pelanggan yang ramah, Anda tidak perlu khawatir tentang apa pun.
    </p>
    <p class="text-center fw-bold">
        Percayakan perjalanan Anda kepada kami dan nikmati kenyamanan tanpa batas!
    </p>
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

    <!-- Javascript -->
      <!-- JavaScript -->
    <script src="text.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
