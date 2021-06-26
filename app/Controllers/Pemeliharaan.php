<?php

namespace App\Controllers;

use App\Models\TernakModel;
use App\Models\PemeliharaanModel;
use App\Models\JenisPemeliharaanModel;

class Pemeliharaan extends BaseController
{
    public function index()
    {
        $pemeliharaan_model = new PemeliharaanModel();

        $data['ternak'] = $pemeliharaan_model->getAllPemeliharaanSapi(false);
        $data['ternak_done'] = $pemeliharaan_model->getAllPemeliharaanSapi(true);
        $data['main_view']   = 'Pemeliharaan/index';

        echo view('layout/template', $data);
    }
    
    public function show($id)
    {
        $ternak_model = new TernakModel();
        $pemeliharaan_model = new PemeliharaanModel();

        $data['ternak'] = $ternak_model->getOneTernakSapi($id);
        $data['main_view']   = 'Pemeliharaan/show';

        $pemeliharaan = $pemeliharaan_model->getPemeliharaanSapi($id);

        $pemeliharaan_grouped = array();

        foreach ($pemeliharaan as $key => $item) {
            $pemeliharaan_grouped[$item['tanggal']][$key] = $item;
        }

        $data['pemeliharaan'] = $pemeliharaan_grouped;
        
        echo view('layout/template', $data);
    }

    public function create($id)
    {
        // return var_dump(localtime());
        $ternak_model = new TernakModel();
        $jenis_pemeliharaan = new JenisPemeliharaanModel();
        $data['ternak'] = $ternak_model->getOneTernakSapi($id);
        $data['jenis_pemeliharaan'] = $jenis_pemeliharaan->getAllJenis();

        // var_dump($data['jenis_pemeliharaan']);
        $data['main_view']   = 'Pemeliharaan/create';
        echo view('layout/template', $data);
    }

    public function store($id)
    {
        $pemeliharaan_model = new PemeliharaanModel();

        // var_dump($this->request->getPost("Pakan")[0]);

        $pemeliharaan_model->insertPemeliharaan($id, $this->request);
        return redirect()->to(site_url('/pemeliharaan'));
    }
}