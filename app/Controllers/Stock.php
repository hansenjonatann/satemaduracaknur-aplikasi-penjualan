<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StockModel;

class Stock extends BaseController
{
    protected $stockModel;
    public function __construct()
    {
        $this->stockModel = new StockModel();
    }
    public function index()
    {
        $getStockList = $this->stockModel->getAllStockData();

        $data = [
            'content' => 'stock/list_stock',
            'title' => 'Stock',
            'dataStock' => $getStockList
        ];

        echo view('layouts/v_wrapper' , $data);
    }

    public function create()
    {
        $stock = [
            'nama_item' => $this->request->getPost('nama_item'),
            'jumlah_item' => $this->request->getPost('jumlah_item'),
            'porsi_satuan' => $this->request->getPost('porsi_satuan'),
        ];

        $inCreateStockData = $this->stockModel->createStock($stock);

        if($inCreateStockData)
        {
            session()->setFlashdata('berhasil' , 'Stock Berhasil ditambahkan!');
            return redirect()->to('stock');
        }

        session()->setFlashdata('gagal' , 'Stock tidak berhasil ditambahkan!');
        return redirect()->back()->withInput();
    }

    public function addStock($id)
    {
        $getDataStockById = $this->stockModel->getStockById($id);

        $stock = [
            'content' => 'stock/tambah_stock',
            'dataStock' => $getDataStockById
        ];

        echo view('layouts/v_wrapper' , $stock);
    }

    public function edit($id)
    {
        $getDataStockById = $this->stockModel->getStockById($id);

        $stock = [
            'content' => 'stock/edit_stock',
            'dataStock' => $getDataStockById
        ];

        echo view('layouts/v_wrapper' , $stock);
    }

    public function updateStock()
    {
        $idStock = $this->request->getPost('id_stock');

        $dataStock = [
            'id_stock' => $idStock,
            'porsi_satuan' => $this->request->getPost('porsi_satuan')
        ];

        $inUpdateStock = $this->stockModel->updateStock($dataStock , $idStock);

        if($inUpdateStock)
        {
            session()->setFlashdata('berhasil' , ' Stock berhasil diupdate');
            return redirect()->to('stock');
        }

        session()->setFlashdata('gagal' , 'Stock tidak berhasil diupdate');
        return redirect()->back()->withInput();
        
    }

    public function updateCurrentStock()
    {
        $idStock = $this->request->getPost('id_stock');

        $dataStock = [
            'id_stock' => $idStock,
            'jumlah_item' => $this->request->getPost('jumlah_item')
        ];

        $inUpdateStock = $this->stockModel->updateCurrentStock($dataStock , $idStock);

        if($inUpdateStock)
        {
            session()->setFlashdata('berhasil' , 'Nilai Stock berhasil ditambahkan');
            return redirect()->to('stock');
        }

        session()->setFlashdata('gagal' , 'Stock tidak berhasil ditambahkan');
        return redirect()->back()->withInput();
        
    }
}
