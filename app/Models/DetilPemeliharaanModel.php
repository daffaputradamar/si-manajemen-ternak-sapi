<?php

namespace App\Models;

use CodeIgniter\Model;

class DetilPemeliharaanModel extends Model
{
    protected $table = 'detil_pemeliharaan_sapi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id', 'id_jenis', 'value', 'deskripsi', 'id_pemeliharaan'];


    public function insertDetilPemeliharaan($data)
    {
        return $this->insert($data);
    }
}