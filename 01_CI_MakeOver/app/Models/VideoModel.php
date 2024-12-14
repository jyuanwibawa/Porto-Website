<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'id_video';
    protected $allowedFields = ['judul_video','deskripsi_video','link_video'];
}
