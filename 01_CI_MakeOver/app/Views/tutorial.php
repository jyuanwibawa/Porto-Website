<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #fff0f5;">
    <div style="background-color: #fff; padding: 20px;">
        <div style="display: flex; flex-direction: column; margin-top: 20px; margin-left: 90px;">
            <?php foreach ($videos as $p) : ?>
                <?php
                // Extract the video ID from YouTube link
                $video_id = null;
                if (preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $p['link_video'], $matches)) {
                    $video_id = $matches[1];
                } elseif (preg_match('/youtu\.be\/([^\\?\\&]+)/', $p['link_video'], $matches)) {
                    $video_id = $matches[1];
                }

                // URL for YouTube thumbnail
                $thumbnail_url = $video_id ? "https://img.youtube.com/vi/$video_id/0.jpg" : "https://via.placeholder.com/250x150";
                ?>
                <div style="display: flex; align-items: center;">
                    <a href="#" data-toggle="modal" data-target="#videoModal<?= $video_id ?>" data-fancybox data-type="iframe" data-caption="<?= $p['judul_video']; ?> - <?= $p['deskripsi_video']; ?>">
                        <img src="<?= $thumbnail_url; ?>" style="width: 280px; height: 200px; border-radius: 30px; margin: 10px;">
                    </a>
                    <div style="margin-right: 90px; overflow: hidden; word-wrap: break-word;">
                        <h4 style="margin: 0;"><?= esc($p['judul_video']); ?></h4>
                        <!-- Button to open the modal -->
                        <button type="button" style="background-color: white; border: 1px solid #ff80aa; border-radius: 20px; padding: 10px 20px; font-size: 14px; margin-top: 80px;" onmouseover="this.style.backgroundColor='pink'" onmouseout="this.style.backgroundColor='white'" data-toggle="modal" data-target="#videoModal<?= $video_id ?>">
                            Play Video
                        </button>
                    </div>
                </div>

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
    </div>
</body>

<?php $this->endSection(); ?>
