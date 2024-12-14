<?php

namespace App\Models;

use CodeIgniter\Model;

class keranjangModel extends Model
{
    protected $table = 'keranjang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Menu',	'Harga', 'Jumlah' ,	'Subtotal',	'Aksi'];

    // Metode untuk menambah item ke keranjang
    public function addToCart($data)
    {
        return $this->insert($data);
    }
}
