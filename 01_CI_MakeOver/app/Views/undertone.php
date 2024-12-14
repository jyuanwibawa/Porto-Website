<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #fff0f5;">
    <div style="background-color: #fff; padding: 20px; text-align: center;">
        <div style="font-size: 24px; font-weight: bold; color: #333; margin-bottom: 10px;">
            How To Identify Your Undertones
        </div>

        <?php foreach ($undertones as $undertone) : ?>
            <div style="text-align: left;">
                <div style="width: 150px; height: 50px; background-color: pink; border-radius: 30px; margin-left: 50px; display: flex; justify-content: center; align-items: center;">
                    <?= esc($undertone['judul_undertone']); ?>
                </div>
                <div style="text-align: left; margin-top: 10px; margin-left:100px;">
                <?= $undertone['deskripsi_undertone']; ?>

                </div>
                <div style="display: flex; justify-content: center;">
                    <div style="width: 100px; height: 100px; background-image: url('/img/<?= esc($undertone['gambar_undertone_satu']); ?>'); background-size: cover; border-radius: 50%; margin: 20px;"></div>
                    <div style="width: 100px; height: 100px; background-image: url('/img/<?= esc($undertone['gambar_undertone_dua']); ?>'); background-size: cover; border-radius: 50%; margin: 20px;"></div>
                    <div style="width: 100px; height: 100px; background-image: url('/img/<?= esc($undertone['gambar_undertone_tiga']); ?>'); background-size: cover; border-radius: 50%; margin: 20px;"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
<?php $this->endSection(); ?>
