<?php

namespace App\Models;

use CodeIgniter\Model;

class MMenu extends Model
{
    protected $table = 'menu';

    public function getMenu()
    {
        return $this->db->query('SELECT * FROM menu JOIN kategori ON menu.kategori_id = kategori.id_kategori ')->getResult();
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

}
