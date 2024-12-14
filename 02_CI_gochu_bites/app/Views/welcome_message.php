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

    .navbar input {
      border-radius: 50px;
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
    .btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    border-radius: 20px;
}
/* Banner style */
.banner {
  display: flex;
  justify-content: center; /* Mengatur posisi horizontal menjadi tengah */
  align-items: center; /* Mengatur posisi vertikal menjadi tengah */
  height: 450px;
}

.banner img {
  max-width: 100%; /* Mengatur lebar maksimum gambar */
  max-height: 100%; /* Mengatur tinggi maksimum gambar */
  width: 400px; /* Mengatur lebar gambar secara otomatis */
  height: auto; /* Mengatur tinggi gambar secara otomatis */
}

/*Style for the home section */
#home {
background-color: #8A5A44;
text-align: left;
padding: 30px;
height: 550px;
}
/* Content style */
#home .content {
  padding: 50px;
  justify-content: center;
}

#home h3 {
  font-size: 28px;
  font-weight: bold;
  color: #fff;
  margin-bottom: 20px;
}

#home p {
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  margin-bottom: 30px;
}

#home #btn {
  background-color: #f8f9fa;
  color: #212529;
  border: none;
  padding: 10px 30px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-radius: 20px;
}

#home #btn:hover {
  background-color: #6c432f;
}

/* Our Menu Strat */
.card {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

.menu{
    padding: 100px 11% 100px;
    font-family: poppins;
}
.menu h3 {
    border-bottom: 2px solid #8A5A44;
    padding-bottom: 10px;
    margin-bottom: 30px;
    text-align: center;
    color: #e53937;
    font-weight: 600;
}
.menu h2{
    text-align: center;
    color: black;
    font-weight: 600;
}
.menu h2 i{
    color: #e53937;
}
.menu h6{
    font-size: 16px;
    text-align: -webkit-center;
}
.rating i{
    color: orange;
    font-size: 13px;
}
.menu p{
    margin-top: 5px;
    font-weight: bold;
}
.menu p i{
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
      <div class="navbar-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="btn btn-light mr-2" href="<?=site_url ('/login') ?>" role="button">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-light" href="<?=site_url ('/signup') ?>" role="button">SIGN UP</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 <!-- home section -->
<section id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ">
        <div class="content">
          <h3 class="display-6">EXPLORE THE TASTE OF KOREA
          <br>WITH OUR DELIGHTFUL MENU </br>
         </h3>
          </h3>
          <p class="lead">너무 맛있어</p>
          <button id="btn"><a href="<?= base_url('menu') ?>" style="text-decoration: none; color: inherit;">BUY NOW</a></button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="banner">
          <img src="gambar header 2.png" alt="" width="300" height="auto"></a>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- home section end-->

  <!-- Our Favorite Menu Start -->
<section class="menu" id="menu">
  <h3> Our Favorite Menu</h3>
  <h2>Delicious Dishes Is Here <i class="fa-solid fa-arrow-down"></i></h2>

  <div class="row" style="margin-top: 30px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./Mandu.jpg" alt="">
        <div class="card-body">
          <h3>Mandu</h3>
          <h6>Mandu adalah jenis dumpling atau bola daging yang terkenal di Korea Selatan. Makanan ini terbuat dari adonan tepung terigu dengan berbagai isian, seperti daging cincang, sayuran.</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./chicken spicy.jpg" alt="">
        <div class="card-body">
          <h3>Chicken Spicy</h3>
          <h6>Korean Spicy Chicken rasa pedas yang menggugah selera dengan potongan ayam yang digoreng dilumuri dengan saus pedas khas Korea yang menggoda lidah disetiap gigitan.</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./Bibimbap.jpg" alt="">
        <div class="card-body">
          <h3>Bibimbap</h3>
          <h6>Bibimbap adalah hidangan Korea yang terdiri dari semangkuk nasi putih dengan lauk di atasnya berupa sayur-sayuran, daging sapi, telur, dan gochujang (saus cabai Korea)</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./Tteokbokki.jpg" alt="">
        <div class="card-body">
          <h3>Tteokbokki</h3>
          <h6>terbuat dari tteok (kue beras Korea) yang dimasak bersama saus pedas yang khas disajikan dengan irisan daun bawang dan biji wijen sebagai hiasan. Rasanya pedas, manis, dan gurih</h6>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Our Favorite Menu End -->

<!-- Footer -->
<footer class="footer" style="background-color: #8A5A44; color: white; text-align: center; padding: 20px 10px;">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-12 d-flex flex-column align-items-center">
        <div class="d-flex align-items-center w-100 justify-content-center" style="margin-bottom: 10px;">
          <img src="logo.png" alt="Gochu Bites Logo" style="height: 50px;">
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


  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
  <script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("fixed-top")
    } else {
      navbar.classList.remove("fixed-top");
    }
  }
</script>

</body>

</html>