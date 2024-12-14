<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<h1 class="text-9 font-bold mb-5">Edit Artikel</h1>

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
        <form action="/simpan_edit_artikel" method="post" class="w-full max-w-lg" enctype="multipart/form-data">
            <input type="hidden" name="id_artikel" id="id_artikel" value="<?= $artikel['id_artikel']; ?>">
            <input type="hidden" name="gambarLama1" value="<?= $artikel['gambar_artikel']; ?>">

            <!-- Tampilkan gambar yang disimpan sebelumnya -->
            <div class="form-row mb-4" style="position: relative; background-color: white; padding: 12px 10px 10px; border-radius: 10px; border: 2px solid pink;">
    <label for="gambar_artikel" style="position: absolute; top: -30px; left: 10px; padding: 0 5px;">Gambar</label>
    <input onchange="previewImg(event)" class="block h-10 w-full text-sm text-gray-900 rounded-sm cursor-pointer" id="gambar_artikel" name="gambar_artikel" type="file">
    <img src="/img/<?= $artikel['gambar_artikel']; ?>" id="previewImg" class="block h-auto w-full rounded-md border border-gray-300 mt-4" style="max-width: 300px;">
</div>


            <label for="judul_artikel" class="block mb-2 text-sm font-medium text-gray-900">Nama Artikel:</label>
            <div class="form-row mb-4" style="background-color: white; padding: 10px; border-radius: 10px; border: 2px solid pink;">
                <input type="text" name="judul_artikel" id="judul_artikel" value="<?= $artikel['judul_artikel']; ?>" class="mt-1 block w-full">
            </div>

            <label for="deskripsi_artikel" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Artikel:</label>
            <div class="form-row mb-4" style="background-color: white; padding: 10px; border-radius: 10px; border: 2px solid pink;">
                <textarea name="deskripsi_artikel" id="deskripsi_artikel" rows="10" class="mt-1 block w-full"><?= $artikel['deskripsi_artikel']; ?></textarea>
            </div>

            <button type="submit" class="py-2.5 px-5 bg-pink-2 hover:bg-pink-1 font-medium text-xs rounded-1 text-white transition duration-200 ease-in-out">Simpan</button>
        </form>
    </div>
</div>

<script>
    function previewImg(event) {
        const preview = document.querySelector('#previewImg');
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "/img/<?= $artikel['gambar_artikel']; ?>"; // Menampilkan gambar yang disimpan sebelumnya jika tidak ada file yang dipilih
        }
    }
</script>

<?php $this->endSection(); ?>
