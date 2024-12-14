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
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
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

    .navbar-dark .navbar-nav .nav-link {
      color: white;
      padding: 20px;
      font-weight: 700;
    }

    /* CSS untuk ikon profil dan keranjang belanja */
    .menu-icons {
      display: flex;
      align-items: center;
    }

    .menu-icons .navbar-nav {
      display: flex;
      align-items: center;
    }

    .menu-icons .nav-item {
      margin-right: 20px; /* Jarak antar ikon */
    }

    .menu-icons .nav-item:last-child {
      margin-right: 0; /* Menghapus margin kanan untuk ikon terakhir */
    }

    .menu-icons .nav-item .nav-link {
      padding: 10px;
    }

    .menu-icons .nav-item .user-profile svg,
    .menu-icons .nav-item .cart-nav-link svg {
      width: 24px; /* Sesuaikan ukuran ikon */
      height: 24px;
      fill: currentColor;
      transition: transform 0.2s;
    }

    .menu-icons .nav-item:hover svg {
      transform: scale(1.1); /* Efek hover */
    }

    /* Header styles */
    header {
      position: relative;
      height: 60vh; /* Adjusted height */
      background: url('header menu.jpg') no-repeat center center/cover; /* Background image */
      color: white;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    /* Parallax effect */
    header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: inherit;
      background-attachment: fixed;
      z-index: -1;
    }

    /* Overlay styles */
    header::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5); /* Black overlay with 50% opacity */
      z-index: 0;
    }

    .header-content {
      position: relative;
      z-index: 1;
    }

    .display-4 {
      font-size: 2.5rem; /* Adjusted font size */
      font-weight: bold;
    }

    .lead {
      font-size: 1rem; /* Adjusted font size */
      font-weight: normal;
    }

    @media (min-width: 992px) {
      .display-4 {
        font-size: 3.5rem; /* Adjusted font size for larger screens */
      }

      .lead {
        font-size: 1.25rem; /* Adjusted font size for larger screens */
      }
    }

    /* Our Menu Start */
    .card {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: left; /* Align text to the left */
      height: 100%; /* Make the card take up the full height of its container */
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: auto;
      border-bottom: 1px solid #ddd; /* Add border to bottom of the image */
    }

    .menu {
      padding: 100px 11%;
      font-family: Poppins, sans-serif;
      text-align: center;
    }

    .menu h1 {
      color: #000000;
      font-weight: 600;
      font-size: 2.5rem; /* Adjusted font size */
      margin-bottom: 30px;
      position: relative;
      display: inline-block;
      padding-bottom: 10px;
    }

    .menu h1::after {
      content: "";
      width: 50%;
      height: 3px;
      background-color: #8A5A44;
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
    }

    .menu h3 {
      color: #333;
      font-weight: 600;
      margin-top: 10px;
    }

    .menu h6 {
      font-size: 14px;
      color: #666;
    }

    .menu p {
      margin-top: 5px;
      font-weight: bold;
    }

    .menu p i {
      float: right;
      color: #e53937;
      cursor: pointer;
    }

    /* Our Menu End */
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
      <div class="menu-icons">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="<?= site_url('/profile') ?>" class="user-profile nav-link">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z">
                </path>
              </svg>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('/keranjang') ?>" class="cart-nav-link nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3"
                viewBox="0 0 16 16">
                <path
                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header start -->
  <header class="bg-dark py-5">
    <div class="header-content container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">All Menus</h1>
        <p class="lead">Explore Our Menu</p>
      </div>
    </div>
  </header>
  <!-- Header end -->

  <!-- Menu paket males masak Section-->
  <section class="menu" id="menu">
    <h1>PAKET MALES MASAK</h1>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" style="margin-top: 30px;">
        <div class="col">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="Korean Fried Chicken.jpg" alt="...">
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Korean Chicken Rice Bowl</h5>
                <!-- Product price-->
                Rp25.000
                <!-- Product description-->
                <p class="card-text">Nasi dengan potongan ayam goreng ala Korea, sayuran, dan saus gurih.</p>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="chicken.jpg" alt="...">
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Korean Chicken Spicy</h5>
                <!-- Product price-->
                Rp45.000
                 <!-- Product description-->
                 <p class="card-text">Potongan ayam pedas dengan saus gochujang ala Korea yang menggugah selera.</p>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="kimchi fried rice menu.jpg" alt="...">
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Kimchi Fried Rice</h5>
                <!-- Product price-->
                Rp30.000
                  <!-- Product description-->
                <p class="card-text">Nasi goreng dengan kimchi khas Korea dan topping telur, memberikan rasa pedas yang lezat.</p>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Menu paket males masak Section-->

<!-- Menu makanan berat Section-->
<section class="menu" id="menu">
  <h1>MAKANAN BERAT</h1>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" style="margin-top: 30px;">
      <div class="col">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="Bibimbap menu.jpg" alt="...">
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Bibimbap</h5>
              <!-- Product price-->
              Rp40.000
              <!-- Product description-->
              <p class="card-text">Nasi campur ala Korea dengan sayuran, daging, telur, dan gochujang (saus cabai khas Korea).</p>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="Tteokbokki menu.jpg" alt="...">
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Tteokbokki</h5>
              <!-- Product price-->
              Rp40.000
               <!-- Product description-->
               <p class="card-text">tteok (kue beras Korea) yang direbus dengan saus pedas manis khas Korea dan topping wijen.</p>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="Mandu menu.jpg" alt="...">
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Mandu</h5>
              <!-- Product price-->
              Rp40.000
               <!-- Product description-->
               <p class="card-text">Dumpling yang diisi dengan daging cincang dan sayuran, disajikan dengan saus kacang atau saus pedas.</p>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Menu makanan ringan Section-->
<section class="menu" id="menu">
  <h1>MAKANAN RINGAN</h1>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" style="margin-top: 30px;">
      <div class="col">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="sundubu menu.jpg" alt="...">
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Sundubu</h5>
              <!-- Product price-->
              Rp40.000
              <!-- Product description-->
              <p class="card-text"> hidangan sup tahu pedas Korea terbuat dari tahu yang dimasak dengan saus pedas khas Korea dan tambahan daging serta sayuran.</p>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="jajangmyeon menu.jpg" alt="...">
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Jajangmyeon</h5>
              <!-- Product price-->
              Rp35.000
               <!-- Product description-->
               <p class="card-text">Mie Korea yang disajikan dengan saus hitam yang terbuat dari pasta kacang kedelai, daging dan sayuran</p>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="kimbab menu.jpg" alt="...">
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Kimbab</h5>
              <!-- Product price-->
              Rp40.000
               <!-- Product description-->
               <p class="card-text">Makanan Korea berupa nasi yang digulung dengan sayuran, daging dan telur, kemudian dibungkus dengan rumput laut. </p>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= site_url('/keranjang') ?>">Add to cart</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

  <!-- Parallax effect script -->
  <script>
    document.addEventListener("scroll", function () {
      const header = document.querySelector("header");
      let scrollPosition = window.scrollY;

      // Adjust the parallax effect
      header.style.backgroundPositionY = scrollPosition * 0.5 + "px";
    });
  </script>
</body>

</html>
