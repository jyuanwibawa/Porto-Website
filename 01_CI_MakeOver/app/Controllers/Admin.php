<?php

namespace App\Controllers;

use App\Models\KategoriModel;

use App\Models\VideoModel;
use App\Models\ArtikelModel;
use App\Models\WarnaModel;
use App\Models\UndertoneModel;

class Admin extends BaseController
{

    protected $kategoriModel;
    protected $videoModel;
    protected $artikelModel;
    protected $warnaModel;

    protected $undertoneModel;

    public function __construct()
    {

        $this->kategoriModel = new KategoriModel();
        $this->videoModel = new VideoModel();
        $this->artikelModel = new ArtikelModel();
        $this->warnaModel = new WarnaModel();
        $this->undertoneModel = new UndertoneModel();
    }

    public function index()
    {
        $undertoneData = $this->undertoneModel->findAll();
        $data = [
            'title' => 'Kelola Undertone',
            'menu' => 'undertone',
            'undertone' => $undertoneData
        ];
        return view('admin/kelolaUndertone', $data);
    }

    public function tambah_undertone()
    {
        $data = [
            'title' => 'Tambah Undertone',
            'menu' => 'undertone'
        ];
        return view('admin/tambahUndertone', $data);
    }

    public function save_undertone()
    {
        
        if (!$this->validate([
            'judul_undertone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul undertone tidak boleh kosong!'
                ]
            ],
            'deskripsi_undertone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi undertone tidak boleh kosong!'
                ]
            ],
            'gambar_undertone_satu' => [
                'rules' => 'uploaded[gambar_undertone_satu]|max_size[gambar_undertone_satu,3048]|is_image[gambar_undertone_satu]|mime_in[gambar_undertone_satu,image/jpg,image/jpeg,image/png,image/jpe]',
                'errors' => [
                    'uploaded' => 'Pilih gambar pertama terlebih dahulu',
                    'max_size' => 'Ukuran gambar pertama tidak boleh lebih dari 3MB',
                    'is_image' => 'Yang Anda pilih bukan gambar pertama',
                    'mime_in' => 'Ekstensi gambar pertama tidak didukung'
                ]
            ],
            'gambar_undertone_dua' => [
                'rules' => 'uploaded[gambar_undertone_dua]|max_size[gambar_undertone_dua,3048]|is_image[gambar_undertone_dua]|mime_in[gambar_undertone_dua,image/jpg,image/jpeg,image/png,image/jpe]',
                'errors' => [
                    'uploaded' => 'Pilih gambar kedua terlebih dahulu',
                    'max_size' => 'Ukuran gambar kedua tidak boleh lebih dari 3MB',
                    'is_image' => 'Yang Anda pilih bukan gambar kedua',
                    'mime_in' => 'Ekstensi gambar kedua tidak didukung'
                ]
            ],
            'gambar_undertone_tiga' => [
                'rules' => 'uploaded[gambar_undertone_tiga]|max_size[gambar_undertone_tiga,3048]|is_image[gambar_undertone_tiga]|mime_in[gambar_undertone_tiga,image/jpg,image/jpeg,image/png,image/jpe]',
                'errors' => [
                    'uploaded' => 'Pilih gambar ketiga terlebih dahulu',
                    'max_size' => 'Ukuran gambar ketiga tidak boleh lebih dari 3MB',
                    'is_image' => 'Yang Anda pilih bukan gambar ketiga',
                    'mime_in' => 'Ekstensi gambar ketiga tidak didukung'
                ]
            ]
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/tambah_undertone')->withInput();
        } else {
            $fileGambar1 = $this->request->getFile('gambar_undertone_satu');
            $namaGambar1 = $fileGambar1->getRandomName();
            $fileGambar1->move('img', $namaGambar1);

            $fileGambar2 = $this->request->getFile('gambar_undertone_dua');
            $namaGambar2 = $fileGambar2->getRandomName();
            $fileGambar2->move('img', $namaGambar2);

            $fileGambar3 = $this->request->getFile('gambar_undertone_tiga');
            $namaGambar3 = $fileGambar3->getRandomName();
            $fileGambar3->move('img', $namaGambar3);

            $this->undertoneModel->save([
                'judul_undertone' => $this->request->getVar('judul_undertone'),
                'deskripsi_undertone' => $this->request->getVar('deskripsi_undertone'),
                'gambar_undertone_satu' => $namaGambar1,
                'gambar_undertone_dua' => $namaGambar2,
                'gambar_undertone_tiga' => $namaGambar3,
            ]);

            session()->setFlashdata('pesan', 'Berhasil menambah undertone baru');
            return redirect()->to('/kelola_undertone');
        }
    }

    public function edit_undertone($id)
    {
        $undertone = $this->undertoneModel->where(['id_undertone' => $id])->first();
        $data = [
            'title' => 'Edit Undertone',
            'menu' => 'undertone',
            'undertone' => $undertone
        ];
        return view('admin/editUndertone', $data);
    }

    public function simpan_edit_undertone()
{
    $id_undertone = $this->request->getPost('id_undertone');

    // Validate the inputs
    if (!$this->validate([
        'judul_undertone' => 'required',
        'deskripsi_undertone' => 'required',
        'gambar_undertone_satu' => [
            'rules' => 'max_size[gambar_undertone_satu,3048]|is_image[gambar_undertone_satu]|mime_in[gambar_undertone_satu,image/jpg,image/jpeg,image/png]',
            'errors' => [
                'max_size' => 'Ukuran gambar pertama tidak boleh lebih dari 3MB',
                'is_image' => 'Yang Anda pilih bukan gambar pertama',
                'mime_in' => 'Ekstensi gambar pertama tidak didukung'
            ]
        ],
        'gambar_undertone_dua' => [
            'rules' => 'max_size[gambar_undertone_dua,3048]|is_image[gambar_undertone_dua]|mime_in[gambar_undertone_dua,image/jpg,image/jpeg,image/png]',
            'errors' => [
                'max_size' => 'Ukuran gambar kedua tidak boleh lebih dari 3MB',
                'is_image' => 'Yang Anda pilih bukan gambar kedua',
                'mime_in' => 'Ekstensi gambar kedua tidak didukung'
            ]
        ],
        'gambar_undertone_tiga' => [
            'rules' => 'max_size[gambar_undertone_tiga,3048]|is_image[gambar_undertone_tiga]|mime_in[gambar_undertone_tiga,image/jpg,image/jpeg,image/png]',
            'errors' => [
                'max_size' => 'Ukuran gambar ketiga tidak boleh lebih dari 3MB',
                'is_image' => 'Yang Anda pilih bukan gambar ketiga',
                'mime_in' => 'Ekstensi gambar ketiga tidak didukung'
            ]
        ],
    ])) {
        session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
        return redirect()->back()->withInput();
    }

    // Process file uploads
    $gambarLama1 = $this->request->getVar('gambarLama1');
    $fileGambar1 = $this->request->getFile('gambar_undertone_satu');
    if ($fileGambar1 && $fileGambar1->isValid()) {
        $namaGambar1 = $fileGambar1->getRandomName();
        $fileGambar1->move('img', $namaGambar1);
        if (is_file('img/' . $gambarLama1)) {
            unlink('img/' . $gambarLama1);
        }
    } else {
        $namaGambar1 = $gambarLama1;
    }

    $gambarLama2 = $this->request->getVar('gambarLama2');
    $fileGambar2 = $this->request->getFile('gambar_undertone_dua');
    if ($fileGambar2 && $fileGambar2->isValid()) {
        $namaGambar2 = $fileGambar2->getRandomName();
        $fileGambar2->move('img', $namaGambar2);
        if (is_file('img/' . $gambarLama2)) {
            unlink('img/' . $gambarLama2);
        }
    } else {
        $namaGambar2 = $gambarLama2;
    }

    $gambarLama3 = $this->request->getVar('gambarLama3');
    $fileGambar3 = $this->request->getFile('gambar_undertone_tiga');
    if ($fileGambar3 && $fileGambar3->isValid()) {
        $namaGambar3 = $fileGambar3->getRandomName();
        $fileGambar3->move('img', $namaGambar3);
        if (is_file('img/' . $gambarLama3)) {
            unlink('img/' . $gambarLama3);
        }
    } else {
        $namaGambar3 = $gambarLama3;
    }

    $dataToUpdate = [
        'judul_undertone' => $this->request->getPost('judul_undertone'),
        'deskripsi_undertone' => $this->request->getPost('deskripsi_undertone'),
        'gambar_undertone_satu' => $namaGambar1,
        'gambar_undertone_dua' => $namaGambar2,
        'gambar_undertone_tiga' => $namaGambar3
    ];

    $this->undertoneModel->update($id_undertone, $dataToUpdate);

    session()->setFlashdata('pesan', 'Undertone berhasil diedit');
    return redirect()->to('/kelola_undertone');
}


    public function hapus_undertone($id = false)
    {
        $undertone = $this->undertoneModel->find($id);
        if (!$undertone) {
            return redirect()->to('/kelola_undertone');
        }

        $gambarPath1 = 'img/' . $undertone['gambar_undertone_satu'];
        $gambarPath2 = 'img/' . $undertone['gambar_undertone_dua'];
        $gambarPath3 = 'img/' . $undertone['gambar_undertone_tiga'];

        if (file_exists($gambarPath1)) {
            unlink($gambarPath1);
        }
        if (file_exists($gambarPath2)) {
            unlink($gambarPath2);
        }
        if (file_exists($gambarPath3)) {
            unlink($gambarPath3);
        }

        $this->undertoneModel->delete($id);
        session()->setFlashdata('pesan', 'Undertone berhasil dihapus');
        return redirect()->to('/kelola_undertone');
    }


    public function kelola_video()
    {
        $videoModel = $this->videoModel->findAll();
        $data = [
            'title' => 'Kelola Video',
            'menu' => 'video',
            'video' => $videoModel
        ];
        return view('admin/kelolaVideo', $data);
    }

    public function tambah_video()
    {
        $data = [
            'title' => 'Tambah Video',
            'menu' => 'video'
        ];
        return view('admin/tambahVideo', $data);
    }

    public function save_video()
    {
        if (!$this->validate([
            'judul_video' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul video tidak boleh kosong!'
                ]
            ],
            'deskripsi_video' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi video tidak boleh kosong!'
                ]
            ],
            'link_video' => [
                'rules' => 'required|valid_url',
                'errors' => [
                    'required' => 'Link video tidak boleh kosong!',
                    'valid_url' => 'Link video tidak valid!'
                ]
            ],
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/tambah_video')->withInput();
        } else {
            $this->videoModel->save([
                'judul_video' => $this->request->getVar('judul_video'),
                'deskripsi_video' => $this->request->getVar('deskripsi_video'),
                'link_video' => $this->request->getVar('link_video')
            ]);
            session()->setFlashdata('pesan', 'Berhasil menambah video baru');
            return redirect()->to('/kelola_video');
        }
    }

    public function edit_video($id = false)
    {
        $video = $this->videoModel->where(['id_video' => $id])->first();
        $data = [
            'title' => 'Edit Video',
            'menu' => 'video',
            'video' => $video
        ];
        return view('admin/editVideo', $data);
    }

    public function simpan_edit_video()
    {
        if (!$this->validate([
            'judul_video' => 'required',
            'deskripsi_video' => 'required',
            'link_video' => 'required|valid_url'
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/edit_video/' . $this->request->getPost('video_id'))->withInput();
        }

        $video_id = $this->request->getPost('video_id');
        if (!$video_id) {
            session()->setFlashdata('error', 'ID video tidak valid');
            return redirect()->to('/kelola_video');
        }

        // Membuat data yang akan diupdate
        $updateData = [
            'judul_video' => $this->request->getPost('judul_video'),
            'deskripsi_video' => $this->request->getPost('deskripsi_video'),
            'link_video' => $this->request->getPost('link_video')
        ];

        try {
            // Melakukan pembaruan data menggunakan model
            $this->videoModel->update($video_id, $updateData);
            session()->setFlashdata('success', 'Video berhasil diperbarui');
        } catch (\Exception $e) {
            session()->setFlashdata('error', 'Gagal memperbarui video: ' . $e->getMessage());
        }

        // Redirect ke halaman pengelolaan video
        return redirect()->to('/kelola_video');
    }


    
    public function hapus_video($id = false)
{
    $video = $this->videoModel->find($id);
    if (!$video) {
        return redirect()->to('/kelola_video');
    }
    $this->videoModel->delete($id);
    session()->setFlashdata('pesan', 'Video berhasil dihapus');
    return redirect()->to('/kelola_video');
}

    // Video Methods

    public function kelola_artikel()
    {
        $artikelModel = $this->artikelModel->findAll();
        $data = [
            'title' => 'Kelola Artikel',
            'menu' => 'artikel',
            'artikel' => $artikelModel
        ];
        return view('admin/kelolaArtikel', $data);
    }

    public function tambah_artikel()
    {
        $data = [
            'title' => 'Tambah Artikel',
            'menu' => 'artikel'
        ];
        return view('admin/tambahArtikel', $data);
    }

    public function save_artikel()
    {
        if (!$this->validate([
            'judul_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul artikel tidak boleh kosong!'
                ]
            ],
            'deskripsi_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi artikel tidak boleh kosong!'
                ]
            ],
            'gambar_artikel' => [
                'rules' => 'uploaded[gambar_artikel]|max_size[gambar_artikel,3048]|is_image[gambar_artikel]|mime_in[gambar_artikel,image/jpg,image/jpeg,image/png,image/jpe]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 3MB',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Ekstensi gambar tidak didukung'
                ]
            ],
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/tambah_artikel')->withInput();
        } else {
            $fileGambar1 = $this->request->getFile('gambar_artikel');
            $namaGambar1 = $fileGambar1->getRandomName();
            $fileGambar1->move('img', $namaGambar1);
            $this->artikelModel->save([
                'judul_artikel' => $this->request->getVar('judul_artikel'),
                'deskripsi_artikel' => $this->request->getVar('deskripsi_artikel'),
                'gambar_artikel' => $namaGambar1,
                'id_kategori' => $this->request->getVar('kategori'),
            ]);
            session()->setFlashdata('pesan', 'Berhasil menambah artikel baru');
            return redirect()->to('/kelola_artikel');
        }
    }

    public function edit_artikel($id = false)
    {
        $artikel = $this->artikelModel->where(['id_artikel' => $id])->first();
        $data = [
            'title' => 'Edit Artikel',
            'menu' => 'artikel',
            'artikel' => $artikel
        ];
        return view('admin/editArtikel', $data);
    }

    public function simpan_edit_artikel()
{
    $artikelModel = new ArtikelModel();
    $namaGambar1 = $this->request->getVar('gambarLama1');
    $fileGambar1 = $this->request->getFile('gambar_artikel');
    if ($fileGambar1 && $fileGambar1->isValid()) {
        $namaGambar1 = $fileGambar1->getRandomName();
        $fileGambar1->move('img', $namaGambar1);
        if ($this->request->getVar('gambarLama1') != 'default-img.png') {
            unlink('img/' . $this->request->getVar('gambarLama1'));
        }
    }

    $dataToUpdate = [
        'judul_artikel' => $this->request->getPost('judul_artikel'),
        'deskripsi_artikel' => $this->request->getPost('deskripsi_artikel'),
        'gambar_artikel' => $namaGambar1
    ];

    $this->artikelModel->update($this->request->getPost('id_artikel'), $dataToUpdate);
    session()->setFlashdata('pesan', 'Artikel berhasil diedit');
    return redirect()->to('/kelola_artikel');
}


    public function hapus_artikel($id = false)
    {
        $artikel = $this->artikelModel->find($id);
        if (!$artikel) {
            return redirect()->to('/kelola_artikel');
        }
        $gambarPath = 'img/' . $artikel['gambar_artikel'];
        if (file_exists($gambarPath)) {
            unlink($gambarPath);
        }
        $this->artikelModel->delete($id);
        session()->setFlashdata('pesan', 'Artikel berhasil dihapus');
        return redirect()->to('/kelola_artikel');
    }





    public function kelola_warna()
{
    $warnaModel = $this->warnaModel->findAll();
    $kategori = $this->kategoriModel->findAll();
    $data = [
        'title' => 'Kelola Warna',
        'menu' => 'warnatryon',
        'warnatryon' => $warnaModel,
        'kategori' => $kategori,
    ];
    return view('admin/kelolaWarna', $data);
}


    public function tambah_warna()
    {
        $kategoriModel = $this->kategoriModel->findAll(); // Mendapatkan data kategori dari model
        $data = [
            'title' => 'Tambah Warna',
            'menu' => 'warnatryon',
            'kategori' => $kategoriModel, // Menyertakan data kategori dalam array data
        ];
        return view('admin/tambahWarna', $data);
    }

    public function save_warna()
    {
        if (!$this->validate([
            'nama_warna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama warna tidak boleh kosong!'
                ]
            ],
            'kode_warna' => [ // Perbaiki nama field menjadi 'kode_warna'
                'rules' => 'required', // Hilangkan spasi pada nama field
                'errors' => [
                    'required' => 'Kode warna tidak boleh kosong!'
                ]
            ],
            'gambar_orang' => [
                'rules' => 'uploaded[gambar_orang]|max_size[gambar_orang,3048]|is_image[gambar_orang]|mime_in[gambar_orang,image/jpg,image/jpeg,image/png,image/jpe]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 3MB',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Ekstensi gambar tidak didukung'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori tidak boleh kosong !',
                ]
            ],
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/tambah_warna')->withInput();
        } else {
            $fileGambar2 = $this->request->getFile('gambar_orang');
            $namaGambar2 = $fileGambar2->getRandomName();
            $fileGambar2->move('img', $namaGambar2);
            $this->warnaModel->save([
                'nama_warna' => $this->request->getVar('nama_warna'),
                'kode_warna' => $this->request->getVar('kode_warna'), // Sesuaikan dengan nama field di tabel
                'gambar_orang' => $namaGambar2, // Gunakan variabel $namaGambar
                'id_kategori' => $this->request->getVar('kategori'),
            ]);
            session()->setFlashdata('pesan', 'Berhasil menambah Tryon baru baru');
            return redirect()->to('/kelola_warna');
        }
    }

    public function edit_warna($id = false)
{
    $warnatryon = $this->warnaModel->where(['id_warna' => $id])->first();

    if (!$warnatryon) {
        session()->setFlashdata('error', 'Warna tidak ditemukan');
        return redirect()->to('/kelola_warna');
    }

    $kategori = $this->kategoriModel->findAll();
    $data = [
        'title' => 'Edit Warna',
        'menu' => 'manajemen',
        'warnatryon' => $warnatryon,
        'kategori' => $kategori,
    ];
    return view('admin/editWarna', $data);
}


public function simpan_edit_warna()
{
    $id_warna = $this->request->getPost('id_warna');

    if (!$id_warna) {
        session()->setFlashdata('error', 'ID warna tidak valid');
        return redirect()->to('/kelola_warna');
    }

    $namaGambar2 = $this->request->getVar('gambarLama2');
    $fileGambar2 = $this->request->getFile('gambar_orang');

    if ($fileGambar2 && $fileGambar2->isValid() && !$fileGambar2->hasMoved()) {
        $namaGambar2 = $fileGambar2->getRandomName();
        $fileGambar2->move('img', $namaGambar2);

        $oldImagePath = 'img/' . $this->request->getVar('gambarLama2');
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    $dataToUpdate = [
        'gambar_orang' => $namaGambar2,
        'nama_warna' => $this->request->getPost('nama_warna'),
        'kode_warna' => $this->request->getPost('kode_warna'),
        'id_kategori' => $this->request->getPost('kategori'),
    ];

    try {
        $this->warnaModel->update($id_warna, $dataToUpdate);
        session()->setFlashdata('pesan', 'Warna berhasil diedit');
        return redirect()->to('/kelola_warna');
    } catch (\Exception $e) {
        session()->setFlashdata('error', 'Gagal mengedit warna: ' . $e->getMessage());
        return redirect()->to('/kelola_warna');
    }
}




    public function hapus_warna($id = false)
    {
        $warnatryon = $this->warnaModel->find($id);
        if (!$warnatryon) {
            return redirect()->to('/kelola_warna');
        }
        $gambarPath = 'img/' . $warnatryon['gambar_orang'];
        if (file_exists($gambarPath)) {
            unlink($gambarPath);
        }
        $this->warnaModel->delete($id);
        session()->setFlashdata('pesan', 'warna berhasil dihapus');
        return redirect()->to('/kelola_warna');
    }

    //kelola undertone

}
