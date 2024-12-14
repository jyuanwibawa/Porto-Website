<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #fff0f5;">
    <div style="background-color: #fff; padding: 20px;">
        <div style="display: flex; flex-direction: column; margin-top: 20px; margin-left: 90px;">
            <?php foreach ($artikels as $inspiration) : ?>
                <div style="display: flex; justify-content: flex-start; margin-bottom: 20px;">
                    <img src="/img/<?= $inspiration['gambar_artikel']; ?>" style="width: 270px; height: 230px; border-radius: 10px; cursor: pointer;" data-toggle="modal" data-target="#artikelModal<?= $inspiration['judul_artikel']; ?>">
                    <div style="margin-left: 20px; overflow: hidden; word-wrap: break-word;">
                        <h4 style="margin: 0;"><?= $inspiration['judul_artikel']; ?></h4>
                        <br>
                        <br><br><br><br><br><br>
                        <a href="<?= $inspiration['deskripsi_artikel']; ?>" target="_blank" style="text-decoration: none;">
                            <button type="button" style="background-color: white; border: 1px solid #ff80aa; border-radius: 20px; padding: 10px 20px; font-size: 14px;" onmouseover="this.style.backgroundColor='pink'" onmouseout="this.style.backgroundColor='white'">
                                Read Article
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Modal -->
               

            <?php endforeach; ?>
        </div>

    </div>

</body>

<?php $this->endSection(); ?>
