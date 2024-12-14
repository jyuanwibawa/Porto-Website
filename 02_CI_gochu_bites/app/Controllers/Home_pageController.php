<?php

namespace App\Controllers;

use App\Models\homepageModel;
use CodeIgniter\Controller;

class Home_pageController extends Controller
{
    private $home_pageModel;

    public function __construct()
    {
        $this->home_pageModel = new homepageModel();
    }

    public function index()
    {
        $data['home_page'] = $this->home_pageModel->findAll();
        return view('home_page', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->home_pageModel->insert($data); // Menggunakan insert untuk menyimpan data baru.
        return redirect()->to('admin'); // Pastikan rute untuk admin sudah didefinisikan.
    }
}
