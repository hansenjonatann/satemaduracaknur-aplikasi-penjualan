<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';

    public function getKategori()
    {
        return $this->db->query('SELECT * FROM kategori')->getResult();
    }
    
}
