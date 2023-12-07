<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MUser;

class User extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new MUser();
    }
    public function index()
    {
        $getUser = $this->user->getUser();

        $user = [
            'dataUser' => $getUser,
            'title' => 'User',
            'content' => 'user/list_user'
        ];

        echo view('layouts/v_wrapper' , $user);
    }

    public function register()
    {

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nama_pengguna' => $this->request->getPost('namapengguna'),
            'kata_sandi' => $this->request->getPost('katasandi')
        ];

        $inRegisterUser = $this->user->createUser($data);

        if($inRegisterUser)
        {
            session()->setFlashData('success' , 'Proses Pendaftaran Berhasil . Silahkan Login');
            return redirect()->to('login');
        } else {
            session()->setFlashData('failed' , 'Proses Pendaftaran tidak Berhasil . Silahkan Coba Lagi');

                return redirect()->to('register');
        }
    }

    public function login()
    {
        $userModel = new MUser();
        $namapengguna = $this->request->getPost('namapengguna');
        $katasandi = $this->request->getPost('katasandi');

        $user = $userModel->where('nama_pengguna' ,  $namapengguna)->where('kata_sandi' , $katasandi)->first();

        if ($user) {
            
            if ($namapengguna == 'caknur' && $katasandi == 'satemaduramantap04') {
                
                return redirect()->to('dashboard');
                
            } else {
                
            session()->setFlashData('success' , 'Login BERHASIL! . ');
                
                return redirect()->to(base_url());
            }
        } else {
            
            session()->setFlashData('failed' , 'Login GAGAL! . Silahkan Periksa Nama Pengguna dan Kata sandi .');
            
            return redirect()->to('login');
        }
    }

    public function deleteUser($id)
    {
        $indeleteUserProgress = $this->user->deleteUser($id);

        if($indeleteUserProgress)
        {
            session()->getFlashdata('berhasil' , 'User berhasil dihapus!');
            return redirect()->to('user');
        }else {
            session()->getFlashdata('gagal' , 'User tidak berhasil dihapus!');
            return redirect()->back();
        }
    }
}
