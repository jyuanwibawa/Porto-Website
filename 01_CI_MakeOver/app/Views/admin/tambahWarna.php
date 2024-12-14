<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<h1 class="text-9 font-bold mb-20">Tambah Warna</h1>

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
    <form action="/save_warna" method="post" class="w-full max-w-lg" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-row mb-4" style="position: relative; background-color: white; padding: 12px 10px 10px; border-radius: 10px; border: 2px solid pink;">
        <label for="gambar_orang" style="position: absolute; top: -30px; left: 10px; padding: 0 5px;">Gambar</label>
        <input onchange="previewImg()" class="block h-8 w-full text-sm text-gray-900 rounded-sm cursor-pointer" id="gambar_orang" name="gambar_orang" type="file">
    
    </div>

    <label for="nama_warna" class="block mb-2 text-sm font-medium text-gray-900">Nama Warna:</label>
    <div class="form-row mb-4" style="background-color: white; padding: 10px; border-radius: 10px; border: 2px solid pink;">
        <input type="text" name="nama_warna" id="nama_warna" value="<?= old('nama_warna'); ?>" class="mt-1 block w-full">
    </div>

    <label for="kategori">Kategori:</label>
    <div class="form-row mb-4" style="background-color: white; padding: 10px; border-radius: 10px; border: 2px solid pink;">
        <select class="mt-1 block w-full" id="kategori" name="kategori">
            <option value="">Pilih Kategori</option>
            <?php foreach ($kategori as $index => $k) : ?>
                <option value="<?= $k['id_kategori']; ?>" <?= old('kategori') === $k['id_kategori'] ? 'selected' : '' ?>><?= $k['nama_kategori']; ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <label for="kode_warna" class="block mb-2 text-sm font-medium text-gray-900">Kode Warna:</label>
    <div class="form-row mb-4" style="background-color: white; padding: 10px; border-radius: 10px; border: 2px solid pink;">
        <!-- Menggunakan input type color -->
        <input type="color" name="kode_warna" id="kode_warna" value="<?= old('kode_warna'); ?>" class="mt-1 block w-full">
    </div>

    <button type="submit" class="py-2.5 px-5 bg-pink-2 hover:bg-pink-1 font-medium text-xs rounded-1 text-white transition duration-200 ease-in-out">Simpan</button>
</form>
    </div>
</div>



<?php $this->endSection(); ?>
