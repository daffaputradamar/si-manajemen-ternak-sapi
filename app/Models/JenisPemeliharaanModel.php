<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisPemeliharaanModel extends Model
{
    protected $table = 'jenis_pemeliharaan_sapi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id', 'nama_jenis', 'tipe'];

    public function getAllJenis()
    {
        return $this->findAll();
    }

    public function saveJenisPemeliharaan($data)
    {
        $this->save([
            'nama_jenis' => $data['nama_jenis'],
            'tipe' => $data['tipe']
        ]);
    }
}