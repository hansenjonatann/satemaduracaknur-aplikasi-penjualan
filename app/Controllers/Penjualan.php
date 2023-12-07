<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\PdfGenerator;
use App\Models\MUser;
use App\Models\PenjualanModel;

class Penjualan extends BaseController
{
    protected $penjualanModel;
    protected $data;
    protected $user;
    public function __construct()
    {
        $this->penjualanModel = new PenjualanModel();
        $this->user = new MUser();
    }
    public function index()
    {

        $getDataPenjualan =  $this->penjualanModel->getAllPenjualan();
        $data = [
            'content' => 'penjualan/list_penjualan',
            'title' => 'Penjualan',
            'dataPenjualan' => $getDataPenjualan
        ];

        echo view('layouts/v_wrapper' , $data);
    }

    public function printPDF() 
    {

      
        
       

        $pdfGenerator = new PdfGenerator();

        $this->data['title_pdf'] = 'Laporan Penjualan Sate Madura Cak Nur';
        $this->data['penjualan'] = $this->penjualanModel->getAllPenjualan();

        $file_pdf = 'Laporan_Penjualan_Sate Madura Cak Nur';

        $paper = 'A4';

        $orientation = 'landscape';

        $html = view('penjualan/laporan_penjualan', $this->data);

        // run dompdf
        $pdfGenerator->generate($html, $file_pdf, $paper, $orientation);





    }
}
