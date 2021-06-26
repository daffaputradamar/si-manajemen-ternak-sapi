<?php

namespace App\Models;

use CodeIgniter\Model;

class TernakModel extends Model
{
    protected $table = 'ternak_sapi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['kode_sapi', 'pemilik', 'tanggal_beli', 'berat_awal', 'berat_jual', 'sudah_dijual'];


    public function getTernakSapi()
    {
        return $this->findAll();
    }
    
    public function getTernakExceptSold()
    {
        return $this->where('sudah_dijual', 0)
                    ->findAll();
    }
    
    public function getOneTernakSapi($id)
    {
        return $this->find($id);
    }

    public function saveTernakSapi($data, $id = null)
    {
        if (is_null($id)) {
            $this->save([
                'kode_sapi'  => $data['kode_sapi'],
                'pemilik'  => $data['pemilik'],
                'tanggal_beli'  => $data['tanggal_beli'],
                'berat_awal'  => $data['berat_awal'],
            ]);
        } else {
            $this->save([
                'id' => $id,
                'kode_sapi'  => $data['kode_sapi'],
                'pemilik'  => $data['pemilik'],
                'tanggal_beli'  => $data['tanggal_beli'],
                'berat_awal'  => $data['berat_awal'],
                'berat_jual'  => $data['berat_jual'],
                'sudah_dijual'  => $data['sudah_dijual'],
            ]);
        }
    }
}