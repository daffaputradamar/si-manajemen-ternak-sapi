<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisPengeluaranModel extends Model
{
    protected $table = 'jenis_pengeluaran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id', 'nama'];

    public function getAllJenis()
    {
        return $this->findAll();
    }

    public function saveJenisPengeluaran($data)
    {
        $this->save([
            'nama' => $data['nama']
        ]);
    }
}