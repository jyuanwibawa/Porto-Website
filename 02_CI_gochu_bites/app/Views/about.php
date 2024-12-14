<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gochu Bites</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <style>
  /* Navbar style */
.navbar {
  transition: top 0.3s; /* Animasi transisi saat navbar berubah posisi */
}
/* Tambahkan class 'fixed-top' saat navbar tetap */
.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
  background-color: #8A5A44; /* Warna background navbar saat tetap */
}

/* Buat margin top pada body agar konten tidak tertutupi navbar */
body {
  padding-top: 70px; /* Sesuaikan dengan tinggi navbar Anda */
}
 /* logo gochu bites */
    .navbar-brand .logo img {
      width: 180px;
      height: auto;
    }
    .logo img {
      border-radius: 10px;
      width: 50px;
      height: 50px;
      margin-top: 3px;
      margin-left: 40px;
      margin-right: 40px;
    }
  /* logo gochu bites */

    .navbar-nav {
    
    }

    .justify-content-center {
     place-content: center;
    justify-content: right;
}
    .navbar-dark .navbar-nav .nav-link {
    color: white;
    padding: 20px;
    font-weight: 700;
    }

/* CSS untuk ikon profil dan keranjang belanja */
.menu-incons {
    display: flex;
    align-items: center;
}

.menu-incons .navbar-nav {
    display: flex;
    align-items: center;
}

.menu-incons .nav-item {
    margin-right: 20px; /* Jarak antar ikon */
}

.menu-incons .nav-item:last-child {
    margin-right: 0; /* Menghapus margin kanan untuk ikon terakhir */
}

.menu-incons .nav-item .nav-link {
    padding: 10px;
}

.menu-incons .nav-item .user-profile svg,
.menu-incons .nav-item .cart-nav-link svg {
    width: 24px; /* Sesuaikan ukuran ikon */
    height: 24px;
    fill: currentColor;
    transition: transform 0.2s;
}

.menu-incons .nav-item:hover svg {
    transform: scale(1.1); /* Efek hover */
}



</style>

</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #8A5A44;">
    <div class="container">
      <a class="navbar-brand"><img src="logo.png" alt="Logo" width="180" height="auto"></a>
      <div class="navbar-nav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('menu') ?>">MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('about') ?>">ABOUT</a>
          </li>
        </ul>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menu-incons">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="#" class="user-profile nav-link">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                </svg>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="cart-nav-link nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
            </a>
        </li>
    </ul>
</div>
</nav>
<!-- Navbar section end -->

<!-- About section start -->
  <section id="about" style="background-color: #8A5A44; color: white; padding: 80px 0; margin-bottom: 40px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="about img.jpg" alt="About Image" class="img-fluid" style="border-radius: 10px;">
      </div>
      <div class="col-md-6">
        <h2 class="mb-4" style="font-weight: bold;">About Us</h2>
        <p style="line-height: 1.8;">Gochu Bites berdiri dari cinta kami terhadap masakan Korea dan khususnya gochujang, pasta cabai merah yang memikat dengan kehangatannya. Kami percaya bahwa makanan adalah jendela budaya dan melalui hidangan kami, kami ingin membawa Anda lebih dekat dengan Korea.</p>
        <p style="line-height: 1.8;">Misi kami adalah menghadirkan cita rasa otentik dan pengalaman kuliner yang luar biasa dengan bahan-bahan segar dan teknik memasak tradisional. Setiap hidangan kami disiapkan dengan penuh perhatian dan cinta, membawa energi matahari yang terkonsentrasi dalam setiap gigitan.</p>
        <p style="line-height: 1.8;">Bergabunglah dengan komunitas Gochu Bites dan nikmati kelezatan yang tak terlupakan, dari hidangan khas hingga menu inovatif yang memadukan tradisi dan kreativitas.</p>
      </div>
    </div>
  </div>
</section>
<!-- About section end -->

<!-- Footer -->
<footer class="footer" style="background-color: #8A5A44; color: white; text-align: center; padding: 20px 10px;">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-12 d-flex flex-column align-items-center">
        <div class="d-flex align-items-center w-100 justify-content-center" style="margin-bottom: 10px;">
          <img src="logo footer.png" alt="Gochu Bites Logo" style="height: 50px;">
        </div>
        <hr style="width: 100%; border-top: 1px solid white; margin: 10px 0;">
        <div class="d-flex flex-column align-items-center">
          <div style="margin-top: 10px;">
            <a href="https://www.instagram.com/gochubites.id" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffffff" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
              </svg>
            </a>
          </div>
          <p style="margin-top: 10px;">&copy; 2024 Gochu Bites. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End of Footer -->

