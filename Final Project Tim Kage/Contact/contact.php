<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Zahrarental</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="kontak.css" rel="stylesheet">
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
                        <li class="nav-item"><a class="nav-link" href="../About/About.php">About</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Orders.php">Pesanan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section mt-5">
        <h1>Kontak Kami</h1>
        <p>Hubungi kami melalui email, telepon, atau kunjungi lokasi kami. Kami siap membantu Anda!</p>
    </div>

    <!-- Contact Section -->
    <div class="container contact-section my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="contact-card mb-4 p-4 shadow-sm text-center">
                    <h4><i class="fas fa-envelope"></i> Email</h4>
                    <p><a href="mailto:info@zahrarental.com">info@zahrarental.com</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card mb-4 p-4 shadow-sm text-center">
                    <h4><i class="fas fa-phone"></i> Telepon</h4>
                    <p><a href="tel:+628123456789">+62 812-3456-789</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card mb-4 p-4 shadow-sm text-center">
                    <h4><i class="fas fa-map-marker-alt"></i> Lokasi</h4>
                    <p>Jl. Contoh Alamat No. 123, Jakarta, Indonesia</p>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
