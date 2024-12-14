<?php

namespace App\Models;

use CodeIgniter\Model;

class WarnaModel extends Model
{
    protected $table = 'warnatryon';
    protected $primaryKey = 'id_warna';
    protected $allowedFields = ['gambar_orang','nama_warna','kode_warna','id_kategori'];
}