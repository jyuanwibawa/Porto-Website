<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['judul_artikel','deskripsi_artikel','gambar_artikel'];
}
