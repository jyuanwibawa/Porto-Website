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

/* General styles */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
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

<!-- Navbar section end -->

<div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Gochu Bites!</h1>
            <p class="lead">This is the home page after successful login.</p>
            <hr class="my-4">
            <p>Explore our menu and enjoy delicious Korean food.</p>
            <a class="btn btn-primary btn-lg" href="<?= site_url('menu') ?>" role="button">View Menu</a>
        </div>
    </div>
  </header>
  <!-- Header end -->

  </body>
  </html>