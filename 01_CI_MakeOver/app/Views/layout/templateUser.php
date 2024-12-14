<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Monda:wght@400;700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Suez+One&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Memuat Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-lhCQJ/22j+BS7+BW+tkJyz6JHgzVQweUwZOWANrPHtHg4Etq1eRi44lq2tc+9a/Z4v7oXqVU6nhTFx68CG1tuA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fab fa-instagram"></i></a>
            <!-- Tambahkan ikon Twitter -->
            <a class="navbar-brand" href="#"><i class="fab fa-twitter"></i></a>
            <!-- Tambahkan ikon Facebook -->
            <a class="navbar-brand" href="#"><i class="fab fa-facebook"></i></a>
            <!-- Tambahkan ikon pesan (message) -->
            <a class="navbar-brand" href="#"><i class="far fa-envelope"></i></a>
            <div class="d-flex justify-content-center align-items-center flex-grow-1">
                <img src="/img/logo.jpg" alt="Logo" style="max-height: 40px;">
            </div>
            <form class="d-flex">
                <input class="form-control rounded-pill me-2" type="search" id="searchInput" placeholder="Search" aria-label="Search" style="border-color: pink; border-width: 2px;">
                <button <button type="button" style="background-color: white; border: 1px solid #ff80aa; border-radius: 20px; padding: 3px 10px; font-size: 14px;" onmouseover="this.style.backgroundColor='pink'" onmouseout="this.style.backgroundColor='white'"onclick="searchText()">Find</button>
            </form>

            <script>
                function searchText() {
                    var searchTerm = document.getElementById('searchInput').value;
                    if (searchTerm) {
                        window.find(searchTerm);
                    }
                }
            </script>

        </div>
    </nav>



    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: pink;">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/home') ?>" style="font-size: 20px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/tutorial') ?>" style="font-size: 20px;">Tutorial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/inspiration') ?>" style="font-size: 20px;">Inspiration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/undertone') ?>" style="font-size: 20px;">Undertone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/tryon') ?>" style="font-size: 20px;">Try On</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <main class="flex-grow py-20 px-25">
        <?php $this->renderSection('content'); ?>
    </main>

    <footer style="background-color: #ffd7e1; padding: 20px; text-align: center; font-family: Arial, sans-serif; color: #333;">
        <h2 style="color: #ff80aa;">Contact Us</h2>
        <p>Have a question or feedback for us? We're here to help! Feel free to reach out using the number phone or through our email and Instagram provided. Our dedicated team is committed to assisting you with any inquiries you may have. Your satisfaction is our top priority, and we strive to respond promptly to all messages. Thank you for choosing Beauty Space.</p>
        <div style="margin: 15px 0;">
            <span style="display: block; margin: 5px 0;">Phone: +62 882-1064-0150</span>
            <span style="display: block; margin: 5px 0;">Email: <a href="mailto:beautyspace@gmail.com" style="color: #ff80aa; text-decoration: none;">beautyspace@gmail.com</a></span>
            <span style="display: block; margin: 5px 0;">Instagram: <a href="https://instagram.com/beautyspace" target="_blank" style="color: #ff80aa; text-decoration: none;">@beautyspace</a></span>
        </div>
        <div style="margin-top: 15px; font-size: 0.9em; color: #777;">
            © 2024 Beauty Space by Fazila Azizah
        </div>
    </footer>























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>