<?php

namespace App\Controllers;

use App\Models\JenisPemeliharaanModel;

class JenisPemeliharaan extends BaseController
{
    public function index()
    {
        $jenis_pemeliharaan_model = new JenisPemeliharaanModel();
        $data['jenis'] = $jenis_pemeliharaan_model->getAllJenis();
        
        $data['main_view'] = "JenisPemeliharaan/index";
        echo view('layout/template', $data);
    }

    public function store()
    {
        $jenis_pemeliharaan_model = new JenisPemeliharaanModel();
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nama_jenis'  => 'required',
            'tipe'  => 'required',
        ])) {
            $jenis_pemeliharaan_model->saveJenisPemeliharaan([
                'nama_jenis' => $this->request->getPost('nama_jenis'),
                'tipe' => $this->request->getPost('tipe')
            ]);

            return redirect()->to(site_url('/pemeliharaan'));
        } else {
            return redirect()->to(site_url('/jenispemeliharaan/create'));
        }
    }

    public function create()
    {
        $data['main_view']   = 'JenisPemeliharaan/create';
        echo view('layout/template', $data);
    }
}