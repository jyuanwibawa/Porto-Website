<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Invoice</h2>
    <div class="card">
        <div class="card-body">
            <h4>Order Details</h4>
            <p><strong>Nama:</strong> <?= $order['full_name'] ?></p>
            <p><strong>Nomor Telepon:</strong> <?= $order['phone_number'] ?></p>
            <p><strong>Alamat:</strong> <?= $order['address'] ?></p>
            <p><strong>Detail Lainnya:</strong> <?= $order['additional_details'] ?></p>
            <p><strong>Metode Pembayaran:</strong> <?= $order['payment_method'] ?></p>
            <p><strong>Instruksi Pembayaran:</strong> <?= $order['payment_instructions'] ?></p>
        </div>
    </div>
</div>
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
