<?php

namespace App\Controllers;

use App\Models\Kategori;
use App\Models\KategoriModel;
use App\Models\MMenu;
use App\Models\MUser;

class Home extends BaseController
{

    protected $menu;
    protected $user;
    protected $kategori;
    public function __construct()
    {
        $this->menu = new MMenu();
        $this->user = new MUser();
        $this->kategori = new KategoriModel();
    }

    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {

        $getMenus = $this->menu->getMenu();
        $getUser = $this->user->getUser();

        $data = [
            'content' => 'admin/v_dashboard',
            'dataPengguna' => $getUser,
            'dataMenu' => $getMenus,
            'title' => 'Dashboard'
        ];

        echo view('layouts/v_wrapper' ,  $data);
        
    }

    public function menus ()
    {
        $getMenus = $this->menu->getMenu();
        $getCategory = $this->kategori->getKategori();
        $getMenuByCategory = $this->menu->getMenuByCategory();
        $data = [
            'dataMenu' => $getMenus,
            'dataCategory' => $getCategory,
            'menuByCategory' => $getMenuByCategory
        ];

        echo view('menu' , $data);
    }
}
