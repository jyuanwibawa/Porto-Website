<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<head>
    <script src="https://cdn.tiny.cloud/1/r8jvo4zmvuk4kna8lt9v4ektoy6gxajpxijvv3rlhbj8dd5q/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#deskripsi_undertone',
            plugins: 'autolink lists link image',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image',
            menubar: false
        });
    </script>
</head>
<h1 class="text-9 font-bold mb-5">Edit Undertone</h1>
<div class="w-full flex flex-col" style="margin-top: 60px;">
    <div class="w-full max-w-lg">
        <form action="/simpan_edit_undertone/<?= $undertone['id_undertone']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_undertone" value="<?= $undertone['id_undertone']; ?>">
            <input type="hidden" name="gambarLama1" value="<?= $undertone['gambar_undertone_satu']; ?>">
            <input type="hidden" name="gambarLama2" value="<?= $undertone['gambar_undertone_dua']; ?>">
            <input type="hidden" name="gambarLama3" value="<?= $undertone['gambar_undertone_tiga']; ?>">

            <div class="flex justify-between">
                <div class="form-row" style="position: relative; background-color: white; padding: 12px 10px 10px; border-radius: 10px; border: 2px solid pink; margin-right: 10px;">
                    <label for="gambar_undertone_satu" style="position: absolute; top: -30px; left: 10px; padding: 0 5px;">Gambar Satu</label>
                    <input type="file" id="gambar_undertone_satu" style="width: 100%;" name="gambar_undertone_satu">
                    <?php if ($undertone['gambar_undertone_satu']) : ?>
                        <img src="/img/<?= $undertone['gambar_undertone_satu']; ?>" alt="" style="width: 128px; height: 80px;" class="mt-2">
                    <?php endif; ?>
                </div>

                <div class="form-row" style="position: relative; background-color: white; padding: 12px 10px 10px; border-radius: 10px; border: 2px solid pink; margin-right: 10px;">
                    <label for="gambar_undertone_dua" style="position: absolute; top: -30px; left: 10px; padding: 0 5px;">Gambar Dua</label>
                    <input type="file" id="gambar_undertone_dua" style="width: 100%;" name="gambar_undertone_dua">
                    <?php if ($undertone['gambar_undertone_dua']) : ?>
                        <img src="/img/<?= $undertone['gambar_undertone_dua']; ?>" alt="" style="width: 128px; height: 80px;" class="mt-2">
                    <?php endif; ?>
                </div>

                <div class="form-row" style="position: relative; background-color: white; padding: 12px 10px 10px; border-radius: 10px; border: 2px solid pink;">
                    <label for="gambar_undertone_tiga" style="position: absolute; top: -30px; left: 10px; padding: 0 5px;">Gambar Tiga</label>
                    <input type="file" id="gambar_undertone_tiga" style="width: 100%;" name="gambar_undertone_tiga">
                    <?php if ($undertone['gambar_undertone_tiga']) : ?>
                        <img src="/img/<?= $undertone['gambar_undertone_tiga']; ?>" alt="" style="width: 128px; height: 80px;" class="mt-2">
                    <?php endif; ?>
                </div>
            </div>

            <label for="judul_undertone" style="margin-top: 15px;">Judul Undertone</label>
            <div class="form-row" style="background-color: white; padding: 10px; border-radius: 10px; align-items: center; border: 2px solid pink;">
                <input type="text" name="judul_undertone" id="judul_undertone" class="mt-1 block w-full" value="<?= $undertone['judul_undertone']; ?>">
            </div>

            <label for="deskripsi_undertone" style="margin-top: 15px;">Deskripsi Undertone</label>
            <div class="form-row" style="background-color: white; padding: 10px; border-radius: 10px; align-items: center; border: 2px solid pink;">
                <textarea name="deskripsi_undertone" id="deskripsi_undertone" class="mt-1 block w-full"><?= $undertone['deskripsi_undertone']; ?></textarea>
            </div>


            <div class="flex justify-start" style="margin-top: 10px;">
                <button type="submit" class="flex gap-1 bg-pink-1 transition-colors hover:bg-pink-2 items-center text-white rounded-1 font-monda font-medium py-2 px-4">
                    Update Undertone
                </button>
            </div>
        </form>
    </div>
</div>

<?php $this->endSection(); ?>