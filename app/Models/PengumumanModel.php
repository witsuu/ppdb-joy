<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table = 'pengumuman';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi'];
    protected $useTimestamps = true; // Untuk created_at dan updated_at otomatis
}
