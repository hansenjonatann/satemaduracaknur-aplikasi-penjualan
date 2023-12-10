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
        // $getMenus = $this->menu->getMenu();

        $getMenus = $data['menu'] = $this->menu->getMenu();


        $menu = [
            'dataMenu' => $getMenus,
            'title' => 'Menu',
            'content' => 'menu/list_menu'
        ];

        echo view('layouts/v_wrapper' , $menu);
    }

    public function addNewMenu()
    {

        $image = $this->request->getFile('gambar');


        if($image->isValid() && !$image->hasMoved()){
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/menus', $imageName);
        }
        $menu = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $imageName,
            'kategori_id' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'stock' => $this->request->getPost('stock'),
        ];

        $inAddingMenuProccess = $this->menu->storeMenu($menu);

        if($inAddingMenuProccess)
        {
            session()->setFlashdata('berhasil' , 'Menu Berhasil ditambahkan');
            return redirect()->to('managementMenu');
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
            return redirect()->to('managementMenu');
        }else {
            session()->getFlashdata('gagal' , 'Menu tidak berhasil dihapus!');
            return redirect()->back();
        }
    }


    public function searchMenu($keyword)
    {
        $searchTerm = $this->request->getGet('search');

        // Lakukan pencarian menggunakan model atau logika pencarian Anda
        $searchResults = $this->menu->searchByName($searchTerm);

        // Tampilkan hasil pencarian ke view
        return view('search_results', ['results' => $searchResults, 'searchTerm' => $searchTerm]);   
    }

    public function getPayment($id)
    {
        $getDataMenuById = $this->menu->getMenuById($id);

        $data = [
            'dataMenu' => $getDataMenuById,
        
        ];

        echo view('menu/pembayaran' ,  $data);
    }
    
}
