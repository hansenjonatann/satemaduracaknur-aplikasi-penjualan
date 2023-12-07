<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MUser;

class Register extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new MUser();
    }
    public function index()
    {
        echo view('register');
    }

    public function registerUser()
    {

        

        $userModel = new MUser();

       
        $user = [
            'nama' => $this->request->getVar('nama'),
            'nama_pengguna' => $this->request->getVar('namapengguna'),
            'kata_sandi' => $this->request->getVar('katasandi'),
            
        ];

        

        $inSaveUser = $userModel->createUser($user);

        if($inSaveUser)
        {
            
            return redirect()->to('login');
        } else 
        {
            session()->setFlashdata('error' , $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }
}
