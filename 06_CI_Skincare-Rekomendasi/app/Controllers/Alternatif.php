<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\BrandModel;
use App\Models\KategoriProdukModel;

class Alternatif extends BaseController
{
    protected $alternatif;
    protected $brand;
    protected $kategori;

    public function __construct()
    {
        $this->alternatif = new AlternatifModel();
        $this->brand = new BrandModel();
        $this->kategori = new KategoriProdukModel();
    }

    public function index()
    {
        // Pengecekan session login
        if (session()->get('login') != "login") {
            // Jika tidak ada session 'login', redirect ke halaman login dengan pesan error
            session()->setFlashdata('error', 'Anda harus login terlebih dahulu.');
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Data Produk',
            'alternatif' => $this->alternatif->getAllProduk()
        ];
        return view('/alternatif/index', $data);
    }

    public function autoKode()
    {
        return json_encode($this->alternatif->generateCode());
    }

    public function tambah()
    {
        // Pengecekan session login
        if (session()->get('login') != "login") {
            // Jika tidak ada session 'login', redirect ke halaman login dengan pesan error
            session()->setFlashdata('error', 'Anda harus login terlebih dahulu.');
            return redirect()->to('/admin/login');
        }

        $data = [
            'title' => 'Tambah Data Produk',
            'brand' => $this->brand->findAll(),
            'kategoriProduk' => $this->kategori->findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('/alternatif/tambah', $data);
    }

    public function simpan()
    {
        // validasi input
        if (!$this->validate([
            'alternatif' => [
                // 'rules' => 'required|is_unique[alternatif.alternatif]',
                'errors' => [
                    'required' => 'nama {field} harus diisi!',
                    // 'is_unique' => 'alternatif {field} sudah ada!'
                ]
                ],
            'harga' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Harga produk harus diisi!',
                'numeric' => 'Harga produk harus berupa angka!'
            ]
        ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/alternatif/simpan')->withInput()->with('validation', $validation);
        }

        // $dataFile = $this->request->getFile('foto_produk');
        // $allowedExtensions = ['jpg', 'jpeg', 'png'];
        // $fileSize = $dataFile->getSize();
        // $fileExtension = $dataFile->getExtension();

        // // jika tidak ada yg di upload
        // if ($dataFile->getName() == "") {
        //     $produkName = $dataFile->getName();
        // } else {
        //     // filter jika file nya lebih dari 2MB atau ekstensi tidak diperbolehkan
        //     if ($fileSize > 2048 * 1024) { // Periksa ukuran file dalam bytes (2MB)
        //         $isipesan = '<script> alert("File terlalu besar!") </script>';
        //         session()->setFlashdata('pesan', $isipesan);
        //         return redirect()->to('/admin/produk/tambah');
        //     } elseif (!in_array($fileExtension, $allowedExtensions)) { // Periksa ekstensi file

        //         $isipesan = '<script> alert("Format file tidak diperbolehkan. Hanya file dengan ekstensi jpg, jpeg, dan png yang diperbolehkan.!") </script>';
        //         session()->setFlashdata('pesan', $isipesan);
        //         return redirect()->to('/admin/produk/tambah');
        //     } else {
        //         // Jika file lolos pengecekan ukuran dan ekstensi, lanjutkan proses upload
        //         $produkName = $dataFile->getRandomName();
        //         $dataFile->move('foto-produk', $produkName);
        //     }
        // }



        $this->alternatif->save([
            'kode_produk' => $this->request->getVar('kode_produk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga') ?: 0, // Atur default jika kosong,
            'id_brand' => $this->request->getVar('id_brand'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'tipe_kulit' => $this->request->getVar('tipe_kulit'),
        ]);

        // pesan data berhasil ditambah
        $isipesan = '<script> alert("Produk berhasil ditambahkan!") </script>';
        session()->setFlashdata('pesan', $isipesan);

        return redirect()->to('/admin/produk');
    }

    public function edit($id)
{
    // Pengecekan session login
    if (session()->get('login') != "login") {
        session()->setFlashdata('error', 'Anda harus login terlebih dahulu.');
        return redirect()->to('/admin/login');
    }

    $data = [
        'title' => 'Edit Produk',
        'produk' => $this->alternatif->find($id),
        'brand' => $this->brand->findAll(),
        'kategoriProduk' => $this->kategori->findAll(),
        'validation' => \Config\Services::validation()
    ];

    return view('/alternatif/edit', $data);
}

public function update($id)
{
    // Pengecekan session login
    if (session()->get('login') != "login") {
        session()->setFlashdata('error', 'Anda harus login terlebih dahulu.');
        return redirect()->to('/admin/login');
    }

    // Validasi input, termasuk harga
    $validation = $this->validate([
        'nama_produk' => 'required',
        'id_brand' => 'required',
        'id_kategori' => 'required',
        'harga' => 'required|numeric'  // Validasi untuk harga
    ]);

    if (!$validation) {
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    // Update data
    $data = [
        'nama_produk' => $this->request->getPost('nama_produk'),
        'id_brand' => $this->request->getPost('id_brand'),
        'id_kategori' => $this->request->getPost('id_kategori'),
        'harga' => $this->request->getPost('harga')  // Tambahkan harga dalam data yang akan diperbarui
    ];

    $this->alternatif->update($id, $data);

    session()->setFlashdata('success', 'Produk berhasil diperbarui.');
    return redirect()->to('/admin/produk');
}



    public function delete($id)
    {
        // Pengecekan session login
        if (session()->get('login') != "login") {
            // Jika tidak ada session 'login', redirect ke halaman login dengan pesan error
            session()->setFlashdata('error', 'Anda harus login terlebih dahulu.');
            return redirect()->to('/login');
        }

        $this->alternatif->delete($id);

        // pesan berhasil didelete
        $isipesan = '<script> alert("Data berhasil dihapus!") </script>';
        session()->setFlashdata('pesan', $isipesan);

        return redirect()->to('/admin/produk');
    }
}
