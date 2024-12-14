<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KeranjangModel;

class KeranjangController extends BaseController
{
    public function addToCart()
    {
        // Ambil data dari form
        $menu = $this->request->getPost('menu');
        $harga = $this->request->getPost('harga');
        $jumlah = $this->request->getPost('jumlah');
        $subtotal = $harga * $jumlah; // Hitung subtotal berdasarkan harga dan jumlah
        $aksi = $this->request->getPost('aksi');

        // Ambil instance dari KeranjangModel
        $keranjangModel = new KeranjangModel();

        // Cek apakah item sudah ada di keranjang
        $existingItem = $keranjangModel->where('menu', $menu)
                                        ->where('harga', $harga)
                                        ->where('jumlah', $jumlah)
                                        ->where('subtotal', $subtotal)
                                        ->where('aksi', $aksi)
                                        ->first();

        if ($existingItem) {
            // Jika item sudah ada, tambahkan jumlahnya
            $newJumlah = $existingItem['jumlah'] + 1;
            $keranjangModel->update($existingItem['id'], ['jumlah' => $newJumlah]);
        } else {
            // Jika item belum ada, tambahkan item baru ke keranjang
            $data = [
                'menu' => $menu,
                'harga' => $harga,
                'jumlah' => $jumlah,
                'subtotal' => $subtotal,
                'aksi' => $aksi
            ];
            $keranjangModel->insert($data);
        }

        // Redirect kembali ke halaman menu atau ke halaman keranjang
        return redirect()->to(site_url('menu'));
    }
}
