<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gochu Bites</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <style>
    /* Navbar style */
    .navbar {
      transition: top 0.3s;
    }

    .fixed-top {
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1030;
      background-color: #8A5A44;
    }

    body {
      padding-top: 70px;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .navbar-brand .logo img {
      width: 180px;
      height: auto;
    }

    .logo img {
      border-radius: 10px;
      width: 50px;
      height: 50px;
      margin: 3px 40px;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: white;
      padding: 20px;
      font-weight: 700;
    }

    .menu-icons {
      display: flex;
      align-items: center;
    }

    .menu-icons .navbar-nav {
      display: flex;
      align-items: center;
    }

    .menu-icons .nav-item {
      margin-right: 20px;
    }

    .menu-icons .nav-item:last-child {
      margin-right: 0;
    }

    .menu-icons .nav-item .nav-link {
      padding: 10px;
    }

    .menu-icons .nav-item .user-profile svg,
    .menu-icons .nav-item .cart-nav-link svg {
      width: 24px;
      height: 24px;
      fill: currentColor;
      transition: transform 0.2s;
    }

    .menu-icons .nav-item:hover svg {
      transform: scale(1.1);
    }

    .table-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table thead th {
      background-color: #8A5A44;
      color: white;
    }

    .total-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      border-top: 1px solid #ddd;
      background-color: #fff;
      border-radius: 0 0 10px 10px;
    }

    .total-price {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .btn-remove {
      color: black;
      cursor: pointer;
    }

    .input-group {
      display: flex;
      align-items: center;
    }

    .input-group .form-control {
      text-align: center;
      width: 50px;
    }

    .input-group .btn {
      width: 30px;
    }
    
  </style>
</head>
<body>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #8A5A44;">
    <div class="container">
      <a class="navbar-brand"><img src="/logo.png" alt="Logo" width="180" height="auto"></a>
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
              <span id="cartItemCount" class="badge badge-danger"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <div class="container-fluid table-container mt-5">
  <h1 class="text-center mb-4">Keranjang Anda</h1>
  <table class="table table-bordered">
      <thead>
        <tr>
          <th>Menu</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Subtotal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="cartTableBody">
          <td>Korean Chicken Rice Bowl</td>
          <td>Rp25.000</td>
          <td>
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn btn-outline-secondary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" min="1">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary js-btn-plus" type="button">&plus;</button>
              </div>
              <input type="number" class="form-control" value="1" min="1">
            </div>
          </td>
          <td class="subtotal">Rp25.000</td>
          <td><button class="btn btn-remove">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
          </svg></button>
        </td>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
    <div class="total-container">
    <span>Total Order:</span>
    <span id="totalPrice" class="total-price">Rp25.000</span>
  </div>
  <!-- Order Now and Back to Menu buttons -->
  <div class="text-center mt-4">
  <button class="btn btn-primary btn-order-now" onclick="orderNow()">Order Now</button>
  <a href="<?= base_url('menu') ?>" class="btn btn-secondary">Tambah Pesanan</a>
</div>



  <!-- Bootstrap JS and dependencies -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(document).ready(function() {
      function updateSubtotal(row) {
        var price = parseFloat($(row).find('td:eq(1)').text().replace('Rp', '').replace('.', '').replace(',', '.'));
        var quantity = parseInt($(row).find('input').val());
        var subtotal = price * quantity;
        $(row).find('.subtotal').text('Rp' + subtotal.toLocaleString('id-ID'));
        updateTotal();
      }

      function updateTotal() {
        var total = 0;
        var itemCount = 0;
        $('#cartTableBody tr').each(function() {
          var subtotal = parseFloat($(this).find('.subtotal').text().replace('Rp', '').replace('.', '').replace(',', '.'));
          total += subtotal;
          itemCount++;
        });
        $('#totalPrice').text('Rp' + total.toLocaleString('id-ID'));
        $('#cartItemCount').text(totalItemCount());

      }
      function totalItemCount() {
    var totalItems = 0;
    $('#cartTableBody tr').each(function() {
        var quantity = parseInt($(this).find('.form-control').val());
        totalItems += quantity;
    });
    return totalItems;
}


      $(document).on('click', '.js-btn-minus', function() {
        var input = $(this).closest('.input-group').find('input');
        var quantity = parseInt(input.val());
        if (quantity > 1) {
          input.val(quantity - 1);
          updateSubtotal($(this).closest('tr'));
        }
      });

      $(document).on('click', '.js-btn-plus', function() {
        var input = $(this).closest('.input-group').find('input');
        var quantity = parseInt(input.val());
        input.val(quantity + 1);
        updateSubtotal($(this).closest('tr'));
      });

      $(document).on('click', '.btn-remove', function() {
        var row = $(this).closest('tr');
        Swal.fire({
          title: 'Apakah Anda yakin menghapus item ini dari keranjang?',
          text: "",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            row.remove();
            updateTotal();
            Swal.fire(
              'Dihapus!',
              'Item telah dihapus dari keranjang.',
              'success'
            )
          }
        });
      });
    });
    function orderNow() {
    window.location.href = "<?= site_url('order_info') ?>";
  }
  </script>
</body>

</html>
