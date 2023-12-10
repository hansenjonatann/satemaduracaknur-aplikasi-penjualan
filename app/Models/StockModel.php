<?php

namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model
{
    protected $table = 'stock';

    public function getAllStockData()
    {
        return $this->db->query("SELECT * FROM stock")->getResult();
    }

    public function createStock($stock)
    {
        return $this->db->table('stock')->insert($stock);
    }


    public function getStockById($id)
    {
        return $this->db->query("SELECT * FROM stock WHERE id_stock = '$id'")->getResult();
    }

    public function updateCurrentStock($dataStock , $idStock)
    {
        return $this->db->table('stock')->update($dataStock , ['id_stock' => $idStock]);
    }

    public function updateStock($dataStock , $idStock)
    {
        return $this->db->table('stock')->update($dataStock , ['id_stock' => $idStock]);
    }
}
