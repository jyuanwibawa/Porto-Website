<?php

namespace App\Models;

use CodeIgniter\Model;

class UndertoneModel extends Model
{
    protected $table = 'undertone';
    protected $primaryKey = 'id_undertone';
    protected $allowedFields = ['judul_undertone','deskripsi_undertone','gambar_undertone_satu','gambar_undertone_dua','gambar_undertone_tiga'];
}