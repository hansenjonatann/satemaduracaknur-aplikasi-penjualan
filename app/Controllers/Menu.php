<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MMenu;

class Menu extends BaseController
{
    protected $menu;
    public function __construct()
    {
        $this->menu = new MMenu();
    }
    public function index()
    {
        $getMenus = $this->menu->getMenu();

        $menu = [
            'dataMenu' => $getMenus,
            'title' => 'Menu',
            'content' => 'menu/list_menu'
        ];

        echo view('layouts/v_wrapper' , $menu);
    }

    public function addMenu()
    {

  

       

        $menu = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $this->request->getPost('gambar'),
            'kategori_id' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'stok' => $this->request->getPost('stok'),
        ];

        $inAddingMenuProccess = $this->menu->storeMenu($menu);

        if($inAddingMenuProccess)
        {
            session()->setFlashdata('berhasil' , 'Menu Berhasil ditambahkan');
            return redirect()->to('menu');
        } else {
            session()->setFlashdata('gagal' , 'Menu Tidak Berhasil ditambahkan');
            return redirect()->back();
            
        } 

    }

    public function deleteMenu($id)
    {
        $inDeleteMenuProgress = $this->menu->deleteMenu($id);

        if($inDeleteMenuProgress)
        {
            session()->getFlashdata('berhasil' , 'Menu berhasil dihapus!');
            return redirect()->to('menu');
        }else {
            session()->getFlashdata('gagal' , 'Menu tidak berhasil dihapus!');
            return redirect()->back();
        }
    }

    
}
