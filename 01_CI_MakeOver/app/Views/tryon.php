<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #fff0f5;">
    <div style="background-color: #fff; padding: 20px; display: flex; justify-content: center;">
        <!-- Detail Warna -->
        <?php if ($selected_warna) : ?>
            <div style="margin-right: 20px;">
                <img src="<?= base_url('img/' . $selected_warna['gambar_orang']) ?>" alt="<?= $selected_warna['nama_warna'] ?>" style="width: 250px; height: 350px;">
            </div>
        <?php else : ?>
            <!-- Gambar default jika tidak ada warna yang dipilih -->
            <div style="margin-right: 20px;">
                <img src="<?= base_url('img/model.jpg') ?>" alt="Gambar Default" style="width: 250px; height: 350px;">
            </div>
        <?php endif; ?>


        <!-- Tabel Kategori dan Warna -->
        <div>
            <div style="margin-bottom: 20px;">
                <p style="text-align: left; font-size: 18px;">Explore the virtual makeup experience with our <br>'Try On' feature!</p>
            </div>
            <table style="border-collapse: collapse; width: calc(100% - 5px); margin-bottom: 20px; border: 1px solid black;">
                <tbody>
                    <tr style="background-color: pink;">
                        <?php foreach ($categories as $category) : ?>
                            <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                <button style="border: none; background: none; cursor: pointer; transition: background-color 0.3s; width: 100%; height: 100%;" onclick="window.location.href='<?= base_url('home/tryon/' . $category['id_kategori']) ?>'" onmousedown="this.style.backgroundColor='#ffc0cb'" onmouseup="this.style.backgroundColor='transparent'" onmouseleave="this.style.backgroundColor='transparent'" onmouseover="this.style.backgroundColor='#ffb6c1'">
                                    <?= $category['nama_kategori'] ?>
                                </button>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                    <!-- Warna -->
                    <?php if (!empty($warnas)) : ?>
                        <tr style="height: 200px;">
                            <td>
                                <div style="position: relative; text-align: center; margin-bottom:200px">
                                    <?php $count = 0; ?>
                                    <?php foreach ($warnas as $warna) : ?>
                                        <div style="position: absolute; top: 10px; left: <?= ($count * 40) ?>px; width: 30px; height: 30px; border-radius: 50%; margin-right: 10px; background-color: <?= $warna['kode_warna'] ?>;">
                                            <a href="<?= base_url('home/tryon/' . $selected_kategori . '/' . $warna['id_warna']) ?>" style="display: block; width: 100%; height: 100%;"></a>
                                        </div>
                                        <?php $count++; ?>
                                    <?php endforeach; ?>
                                </div>
                            </td>
                        </tr>


                    <?php else : ?>
                        <!-- Tampilkan kolom kosong jika tidak ada warna yang tersedia -->
                        <tr style="height: 200px;">
                            <td></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div>
                <p style="text-align: left; font-size: 18px;">*Pick a color</p>
            </div>
        </div>


    </div>
</body>
<?php $this->endSection(); ?>