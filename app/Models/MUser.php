<?php

namespace App\Models;

use CodeIgniter\Model;

class MUser extends Model
{
    protected $table   = 'user';

    public function getUser()
    {
        return $this->db->query('SELECT * FROM user')->getResult();
    }

    public function createUser($data)
    {
        return $this->db->table('user')->insert($data);
    }

    public function deleteUser($id)
    {
        return $this->db->table('user')->delete(['id_user' => $id]);
    }
   
}
