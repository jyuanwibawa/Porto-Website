<?php

namespace App\Controllers;

use App\Models\VideoModel;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use App\Models\WarnaModel;
use App\Models\UndertoneModel;

class Home extends BaseController
{
    protected $videoModel;
    protected $artikelModel;
    protected $undertoneModel;

    public function __construct()
    {
        $this->videoModel = new VideoModel();
        $this->artikelModel = new ArtikelModel();
        $this->undertoneModel = new UndertoneModel(); 
    }

    public function index(): string
    {
        $videos = $this->videoModel->findAll();
        $artikels = $this->artikelModel->findAll(); 

        $data = [
            'title' => 'Home',
            'nama_menu' => 'Home',
            'videos' => $videos,
            'artikels' => $artikels, 
            'menu' => 'home'
        ];

        return view('home', $data);
    }

    public function tutorial()
    {
        $videos = $this->videoModel->findAll();

        $data = [
            'title' => 'Tutorial',
            'nama_menu' => 'Tutorial',
            'videos' => $videos,
            'menu' => 'tutorial'
        ];

        return view('tutorial', $data); 
    }

    public function inspiration()
    {
        $artikels = $this->artikelModel->findAll();

        $data = [
            'title' => 'Inspiration',
            'nama_menu' => 'Inspiration',
            'artikels' => $artikels,
            'menu' => 'inspiration'
        ];

        return view('inspiration', $data);
    }

    public function tryon($id_kategori = null, $id_warna = null)
{
    $kategoriModel = new KategoriModel();
    $warnaModel = new WarnaModel();

    $categories = $kategoriModel->findAll();
    $warnas = [];

    // Ambil warna berdasarkan kategori yang dipilih jika ada
    if ($id_kategori) {
        $warnas = $warnaModel->where('id_kategori', $id_kategori)->findAll();
    }

    // Ambil detail warna jika ada warna yang dipilih
    $selected_warna = null;
    if ($id_warna) {
        $selected_warna = $warnaModel->find($id_warna);
    }

    $data = [
        'title' => 'Try On',
        'categories' => $categories,
        'warnas' => $warnas,
        'selected_kategori' => $id_kategori,
        'selected_warna' => $selected_warna
    ];

    return view('tryon', $data);
}

    
    public function undertone()
    {
        $undertones = $this->undertoneModel->findAll();

        $data = [
            'title' => 'Undertone',
            'nama_menu' => 'Undertone',
            'undertones' => $undertones,
            'menu' => 'undertone'
        ];

        return view('undertone', $data);
    }
}
