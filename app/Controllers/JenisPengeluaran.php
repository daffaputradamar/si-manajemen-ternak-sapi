<?php

namespace App\Controllers;

use App\Models\JenisPengeluaranModel;

class JenisPengeluaran extends BaseController
{
    public function store()
    {
        $jenis_pengeluaran_model = new JenisPengeluaranModel();
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nama'  => 'required',
        ])) {
            $jenis_pengeluaran_model->saveJenisPengeluaran([
                'nama'  => $this->request->getPost('nama'),
            ]);

            return redirect()->to(site_url('/pengeluaran/create'));
        } else {
            return redirect()->to(site_url('/pengeluaran/create'));
        }
    }
}