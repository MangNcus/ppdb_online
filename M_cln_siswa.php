<?php

namespace App\Models;

use CodeIgniter\Model;

class M_cln_siswa extends Model
{
    protected $table = "bio_cln_siswa";
    protected $primaryKey = 'id';
    protected $allowFields = ['Nama'];

    public function getDosen()
    {
        return $this->findAll();
    }
}
