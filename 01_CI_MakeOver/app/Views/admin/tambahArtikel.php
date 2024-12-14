<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<h1 class="text-9 font-bold mb-5">Tambah Artikel</h1>

<?php
$errors = session()->getFlashdata('errors');
if ($errors !== null && is_array($errors)) :
?>
    <div class="alert flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Danger</span>
        <div>
            <span class="font-medium">Perhatikan error berikut:</span>
            <ul class="mt-1.5 list-disc list-inside">
                <?php foreach ($errors as $error) : ?>
                    <li class=""><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

<div class="w-full flex flex-col" style="margin-top: 60px;">
    <div class="w-full max-w-lg">
        <form action="/save_artikel" method="post" class="w-full max-w-lg" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="form-row" style="position: relative; background-color: white; padding: 12px 10px 10px; border-radius: 10px; border: 2px solid pink; margin-right: 10px;">
                <label for="gambar_undertone_dua" style="position: absolute; top: -30px; left: 10px; padding: 0 5px; ">Gambar</label>
                <input type="file" id="gambar_artikel" style="width: 100%;" name="gambar_artikel">
            </div>

            <label for="judul_artikel" class="block mb-2 text-sm font-medium text-gray-900">Judul Artikel:</label>
            <div class="form-row mb-4" style="background-color: white; padding: 10px; border-radius: 10px; border: 2px solid pink;">
                <input type="text" name="judul_artikel" id="judul_artikel" value="<?= old('judul_artikel'); ?>" class="mt-1 block w-full">
            </div>

            <label for="deskripsi_artikel" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Artikel:</label>
            <div class="form-row mb-4" style="background-color: white; padding: 10px; border-radius: 10px; border: 2px solid pink;">
                <textarea name="deskripsi_artikel" id="deskripsi_artikel" rows="4" class="mt-1 block w-full"><?= old('deskripsi_artikel'); ?></textarea>
            </div>

            <button type="submit" class="flex gap-1 bg-pink-1 transition-colors hover:bg-pink-2 items-center text-white rounded-1 font-monda font-medium py-2 px-4">
                Simpan
            </button>
        </form>
    </div>
</div>



<?php $this->endSection(); ?>