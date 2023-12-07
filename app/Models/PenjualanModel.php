<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
  protected $table = 'penjualan';

  public function getAllPenjualan()
  {
    return $this->db->query('SELECT * FROM penjualan')->getResult();
  }
    
}
