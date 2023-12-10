<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MMenu;

class Payment extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        return $this->menuModel = new MMenu();
    }
    public function index()
    {
 
        echo view('pembayaran');
    }

    public function pembayaran($id)
    {
        $getMenuById = $this->menuModel->getMenuById($id);

        $data = [
            'dataMenu' => $getMenuById
        ];

        echo view('pembayaran' , $data);
    }
}
