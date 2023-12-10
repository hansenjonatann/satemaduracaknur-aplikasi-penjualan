<?php

namespace App\Models;

use CodeIgniter\Model;

class MMenu extends Model
{
    protected $table = 'menu';

    public function getMenu()
    {
        return $this->db->query("SELECT * FROM menu JOIN stock ON stock.id_stock = menu.id_menu")->getResult();
        // return $this->join('stock' , 'stock.id_stock = menu.stock')->select('menu.*, stock.id_stock')->findAll();

        
    }


    public function getMenuById($id)
    {
        return $this->db->query("SELECT * FROM menu WHERE id_menu = '$id'")->getResult();
    }
    public function storeMenu($menu) 
    {
        return $this->db->table('menu')->insert($menu);
    }

    public function deleteMenu($id)
    {
        return $this->db->table('menu')->delete(['id_menu' => $id]);
    }
   

    public function getMenuByCategory()
    {
        return $this->db->query('SELECT * FROM menu JOIN kategori ON menu.kategori_id = kategori.id_kategori WHERE menu.kategori_id = kategori.id_kategori')->getResult();

        print(1);

    }

    public function searchMenu($searchTerm)
    {
        return $this->like('nama', $searchTerm)->findAll();
    }

    public function getPayment($id)
    {
        $getDataStockById = $this->stockModel->getStockById($id);

        $stock = [
            'content' => 'stock/edit_stock',
            'dataStock' => $getDataStockById
        ];

        echo view('layouts/v_wrapper' , $stock);
    }

}
