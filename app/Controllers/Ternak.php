<?php

namespace App\Controllers;

use App\Models\TernakModel;

class Ternak extends BaseController
{
    public function index()
    {
        $ternak_model = new TernakModel();
        
        $data['ternak'] = $ternak_model->getTernakSapi();
        $data['main_view']   = 'Ternak/index';

        echo view('layout/template', $data);
    }
    
    public function show($id)
    {
        $ternak_model = new TernakModel();

        $data['ternak'] = $ternak_model->getOneTernakSapi($id);
        $data['main_view']   = 'Ternak/show';

        echo view('layout/template', $data);
    }
    
    public function create()
    {
        $data['main_view']   = 'Ternak/create';

        echo view('layout/template', $data);
    }
    
    public function store()
    {
        $ternak_model = new TernakModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'kode_sapi'  => 'required',
            'pemilik'  => 'required',
            'tanggal_beli'  => 'required',
            'berat_awal'  => 'required',
        ])) {
            $ternak_model->saveTernakSapi([
                'kode_sapi'  => $this->request->getPost('kode_sapi'),
                'pemilik'  => $this->request->getPost('pemilik'),
                'tanggal_beli'  => $this->request->getPost('tanggal_beli'),
                'berat_awal'  => $this->request->getPost('berat_awal'),
                
            ]);

            return redirect()->to(site_url('/ternak'));
        } else {
            $data['main_view']   = 'Ternak/create';

            echo view('layout/template', $data);
        }
    }

    public function edit($id)
    {
        $ternak_model = new TernakModel();

        $data['ternak'] = $ternak_model->getOneTernakSapi($id);
        $data['main_view']   = 'Ternak/edit';

        echo view('layout/template', $data);
    }

    public function update($id)
    {
        $ternak_model = new TernakModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'kode_sapi'  => 'required',
            'pemilik'  => 'required',
            'tanggal_beli'  => 'required',
            'berat_awal'  => 'required',
        ])) {
            $ternak_model->saveTernakSapi([
                'kode_sapi'  => $this->request->getPost('kode_sapi'),
                'pemilik'  => $this->request->getPost('pemilik'),
                'tanggal_beli'  => $this->request->getPost('tanggal_beli'),
                'berat_awal'  => $this->request->getPost('berat_awal'),
                
            ], $id);

            return redirect()->to(site_url('/ternak/show/'. $id));
        } else {
            $ternak_model = new TernakModel();

            $data['ternak'] = $ternak_model->getOneTernakSapi($id);
            $data['main_view'] = 'Ternak/edit';

            echo view('layout/template', $data);
        }
    }
}