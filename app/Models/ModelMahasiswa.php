<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table      = 'mahasiswa'; // Nama tabel
    protected $primaryKey = 'id'; // Sesuaikan dengan primary key tabel Anda

    protected $allowedFields = ['nim', 'nama', 'email', 'alamat', 'nilai']; // Kolom yang boleh diinsert
}
