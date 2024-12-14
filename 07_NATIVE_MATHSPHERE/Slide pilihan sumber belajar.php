<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('Location: Slide Login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathsphere</title>
    <link rel="stylesheet" href="css/style_slide_pilihan_sumber_belajar.css">
</head>
<body>
    <style>
        @import url('https://fonts.cdnfonts.com/css/marykate');
        @import url('https://fonts.cdnfonts.com/css/lazydog');
        @import url('https://fonts.cdnfonts.com/css/schoolbell');
    </style>
    <nav>
    <div class="Header">
        <div class="wrapper">
        <div class="logo"><img src="assets/logo mathsphere.png" height="50">
    </div>                
        <div class="menu">
            <ul>
                <li><a href="Slide Home.php">Home</a></li>
                <li><a href="Slide kelas 7.php">Materi</a></li>
                <li><a href=""><img src="assets/logo pengguna.png"height="35"></a></li>
                <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li>Hello, ' . htmlspecialchars($_SESSION['username']) . '!</li>';
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li><a href="login.php">Login</a></li>';
                    }
                    ?>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="instructions">
            <h2>Instructions!</h2>
            <ul>
                <li>1. Referensi pembelajaran utama dalam web Mathsphere yaitu mengunakan buku yang telah ditautkan dan sesuai dengan kurikulum yang digunakan siswa.</li>
                <li>2. Pengguna dianjurkan untuk mempelajari materi yang ada pada buku yang disediakan terleih dahulu.</li>
                <li>3. Pengguna dapat mengakses video pembelajaran untuk menunjang pemahaman materi yang telah didapatkan dari buku yang disediakan.</li>
                <li>4. Soal-soal untuk latihan telah disediakan pada buku ataupun video yang ada, diharapkan pengguna dapat memanfaatkan media yang disediakan dengan baik.</li>
                <li>5. Enjoy your studies for your success!!!.</li>
            </ul>
        </div>

        <div class="content">
            <div class="book-section">
                <img src="assets/buku.png" alt="Book Icon" class="book-img">
                <div class="book-button">
                    <h1><a href="Slide Buku.php"class="tbl-biru">Book</a></h1>
                </div>
            </div>
            
            <div class="video-section">
                <img src="assets/video.png" alt="Video Icon" class="video-img">
                <div class="video-button">
                    <h1><a href="Slide Video.php"class="tbl-biru">Video</a></h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



   