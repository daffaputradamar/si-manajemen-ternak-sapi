<?php

namespace App\Controllers;

use App\Models\PemasukanModel;
use App\Models\TernakModel;

class Pemasukan extends BaseController
{
    public function index()
    {
        $pemasukan_model = new PemasukanModel();
        $data['pemasukan'] = $pemasukan_model->getAllPemasukan();

        $data['main_view']   = 'Pemasukan/index';
        echo view('layout/template', $data);
    }
    
    public function create()
    {
        $ternak_sapi = new TernakModel();
        $data['ternak'] = $ternak_sapi->getTernakExceptSold();

        $data['main_view']   = 'Pemasukan/create';
        echo view('layout/template', $data);
    }

    public function store()
    {
        $pemasukan_model = new PemasukanModel();

        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'id_sapi' => 'required',
            'harga_jual' => 'required',
            'berat_jual' => 'required',
            'date' => 'required'
        ])) {
            $pemasukan_model->savePemasukan([
                'id_sapi' => $this->request->getPost('id_sapi'),
                'harga_jual' => $this->request->getPost('harga_jual'),
                'berat_jual' => $this->request->getPost('berat_jual'),
                'date' => $this->request->getPost('date')
            ]);

            return redirect()->to(site_url('/pemasukan'));
        } else {
            $ternak_sapi = new TernakModel();
            $data['ternak'] = $ternak_sapi->getTernakExceptSold();

            $data['main_view']   = 'Pemasukan/create';
            echo view('layout/template', $data);
        }
    }
}