<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #fff0f5;">
    <div style="padding: 20px; display: flex; align-items: center; justify-content: center; text-align: left; margin-left:0px; margin-right: 300px;">
        <img src="https://images.unsplash.com/photo-1522337660859-02fbefca4702" alt="Makeup Image" style="width: 450px; height: auto; margin-right: 20px;">
        <div>
            <p>Welcome to <a href="#" style="color: #ff80aa; text-decoration: none;">Beauty Space</a><br>
                Dive into the world of beauty and discover your signature look with our expert makeup tips, tutorials, and inspirations. Whether you're a makeup novice or a beauty aficionado, our platform is your go-to resource for all things makeup.<br>
                <em style="color: #ff80aa;">“Unveil your inner radiance, just like the wings of a butterfly.”</em>
            </p>
        </div>
    </div>
    <!-- Tutorial -->
    <div style="background-color: #fff; padding: 20px;">
        <h3 style="color: #ff80aa; display: inline-block; padding-bottom: 5px; width: 45%; position: relative; left: 50px;">Tutorial<br>
            <span style="border-bottom: 3px solid #ff80aa; position: absolute; left: 95px; top:28px; width: calc(100% - 50px);"></span>
        </h3>
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; margin-top: 20px;">
            <?php foreach ($videos as $index => $p) : ?>
                <?php
                if ($index >= 4) break;

                // Mengambil ID video dari tautan YouTube
                $video_id = null;
                if (preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $p['link_video'], $matches)) {
                    $video_id = $matches[1];
                } elseif (preg_match('/youtu\.be\/([^\\?\\&]+)/', $p['link_video'], $matches)) {
                    $video_id = $matches[1];
                }
                // URL thumbnail YouTube
                $thumbnail_url = $video_id ? "https://img.youtube.com/vi/$video_id/0.jpg" : "https://via.placeholder.com/250x150";
                ?>
                <a href="#" data-toggle="modal" data-target="#videoModal<?= $video_id ?>" data-fancybox data-type="iframe" data-caption="<?= $p['judul_video']; ?> - <?= $p['deskripsi_video']; ?>">
                    <img src="<?= $thumbnail_url; ?>" style="width: 280px; height: 200px; border-radius: 30px; margin: 10px;">
                </a>

                <div class="modal fade" id="videoModal<?= $video_id ?>" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel<?= $video_id ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #ff80aa;">
                                <h5 class="modal-title" id="videoModalLabel<?= $video_id ?>"><?= esc($p['judul_video']); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $video_id ?>" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Deskripsi:</h4>
                                        <p><?= esc($p['deskripsi_video']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align: center; margin-top: 20px;">
        <button type="button" style="background-color: white; border: 1px solid #ff80aa; border-radius: 20px; padding: 10px 20px; font-size: 14px;" onmouseover="this.style.backgroundColor='pink'" onmouseout="this.style.backgroundColor='white'" onclick="window.location.href='<?= base_url('/tutorial') ?>'">
    SEE MORE
</button>
        </div>
    </div>


    <div style="background-color: #fff; padding: 20px;">
        <h3 style="color: #ff80aa; display: inline-block; padding-bottom: 5px; width: 38%; position: relative; left: 1050px;">Try ON<br>
            <span style="border-bottom: 3px solid #ff80aa; position: absolute; left: -420px; top: 28px; width: calc(100% - 50px);"></span>
        </h3>
        <div>
            <div style="margin-left: 770px; position: relative;">
                <img src="/img/warna.jpg" alt="Deskripsi Gambar" width="300" height="auto" style="border-radius: 30px;">
                <div style="position: absolute; top: 20px; left: -600px; width: 200px; color: #666; font-size: 30px;">
                    <p style="white-space: nowrap; font-weight: bold;">How To Identify Your Undertones</p>
                    <p style="white-space: nowrap;">. Eyeshadow</p>
                    <p style="white-space: nowrap;">. Eyebrow</p>
                    <p style="white-space: nowrap;">. Blushon</p>
                    <p style="white-space: nowrap;">. Lip</p>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 20px;">
        <button type="button" style="background-color: white; border: 1px solid #ff80aa; border-radius: 20px; padding: 10px 20px; font-size: 14px;" onmouseover="this.style.backgroundColor='pink'" onmouseout="this.style.backgroundColor='white'" onclick="window.location.href='<?= base_url('/undertone') ?>'">
    SEE MORE
</button>

        </div>
    </div>
    <!-- Artikel -->
    <div style="background-color: #fff; padding: 20px;">
    <h3 style="color: #ff80aa; display: inline-block; padding-bottom: 5px; width: 40%; position: relative; left: 50px;">inspiration <br>
            <span style="border-bottom: 3px solid #ff80aa; position: absolute; left: 130px; top:28px; width: calc(100% - 50px);"></span>
    </h3>
    <div style="display: flex; justify-content: space-around; flex-wrap: wrap; margin-top: 20px;">
    <?php foreach ($artikels as $index) : ?>
        <div>
        <img src="/img/<?= $index['gambar_artikel']; ?>" style="width: 270px; height: 230px; border-radius: 10px; cursor: pointer;" data-toggle="modal" data-target="#artikelModal<?= $index['judul_artikel']; ?>">
        </div>

        <!-- Modal -->
        <div class="modal fade" id="artikelModal<?= $index['judul_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="artikelModalLabel<?= $index['judul_artikel']; ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="artikelModalLabel<?= $index['judul_artikel']; ?>"><?= $index['judul_artikel']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/img/<?= $index['gambar_artikel']; ?>" style="width: 100%; border-radius: 10px;">
                <p><?= $index['deskripsi_artikel']; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <?php endforeach;?>
</div>
<div style="text-align: center; margin-top: 20px;">
            <button type="button" style="background-color: white; border: 1px solid #ff80aa; border-radius: 20px; padding: 10px 20px; font-size: 14px;" onmouseover="this.style.backgroundColor='pink'" onmouseout="this.style.backgroundColor='white'" onclick="window.location.href='<?= base_url('/inspiration') ?>'">
                SEE MORE
            </button>
        </div>
    </div>

    <!-- Try On -->

    <div style="background-color: #fff; padding: 20px;">
        <h3 style="color: #ff80aa; display: inline-block; padding-bottom: 5px; width: 38%; position: relative; left: 1050px;">Try ON<br>
            <span style="border-bottom: 3px solid #ff80aa; position: absolute; left: -420px; top: 28px; width: calc(100% - 50px);"></span>
        </h3>
        <div>
            <div style="margin-left: 770px; position: relative;">
                <img src="/img/model.jpg" alt="Deskripsi Gambar" width="300" height="auto" style="border-radius: 30px;">
                <div style="position: absolute; top: 20px; left: -600px; width: 200px; color: #666; font-size: 30px;">
                    <p style="white-space: nowrap; font-weight: bold;">Explore the virtual makeup experience</p>
                    <p style="white-space: nowrap;">. Eyeshadow</p>
                    <p style="white-space: nowrap;">. Eyebrow</p>
                    <p style="white-space: nowrap;">. Blushon</p>
                    <p style="white-space: nowrap;">. Lip</p>
                </div>
                <button type="button" style="position: absolute; top: 350px; left: 160px; transform: translate(-50%, -50%); background-color: white; border: 1px solid #ff80aa; border-radius: 20px; padding: 10px 20px; font-size: 14px;" onmouseover="this.style.backgroundColor='pink'" onmouseout="this.style.backgroundColor='white'" onclick="window.location.href='<?= base_url('/tryon') ?>'">
                    SEE MORE
                </button>
            </div>
        </div>
    </div>






    <?php $this->endSection(); ?>