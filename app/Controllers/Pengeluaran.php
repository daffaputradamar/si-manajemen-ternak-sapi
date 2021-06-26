<?php

namespace App\Controllers;

use App\Models\PengeluaranModel;
use App\Models\JenisPengeluaranModel;

class Pengeluaran extends BaseController
{
    public function index()
    {
        $pengeluaran_model = new PengeluaranModel();
        $data['pengeluaran'] = $pengeluaran_model->getAllPengeluaran();

        $data['main_view']   = 'Pengeluaran/index';
        echo view('layout/template', $data);
    }

    public function create()
    {
        $jenis_pengeluaran_model = new JenisPengeluaranModel();
        $data['jenis_pengeluaran']   = $jenis_pengeluaran_model->getAllJenis();
        
        $data['main_view']   = 'Pengeluaran/create';
        echo view('layout/template', $data);
    }

    public function store()
    {
        $pengeluaran_model = new PengeluaranModel();
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'id_jenis'  => 'required',
            'value'  => 'required',
            'date'  => 'required',
        ])) {
            $pengeluaran_model->savePengeluaran([
                'id_jenis'  => $this->request->getPost('id_jenis'),
                'value'  => $this->request->getPost('value'),
                'date'  => $this->request->getPost('date')
            ]);

            return redirect()->to(site_url('/pengeluaran'));
        } else {
            $jenis_pengeluaran_model = new JenisPengeluaranModel();
            $data['jenis_pengeluaran']   = $jenis_pengeluaran_model->getAllJenis();
        
            $data['main_view']   = 'Pengeluaran/create';
            echo view('layout/template', $data);
        }
    }
}