<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MUser;

class Login extends BaseController
{
    public function index()
    {
        echo view('login');
    }

    public function login()
    {
        $user = new MUser();
        $namapengguna = $this->request->getVar('namapengguna');
    }
}
