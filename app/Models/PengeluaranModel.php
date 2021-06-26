<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id', 'id_jenis', 'value', 'tanggal'];

    public function getAllPengeluaran()
    {
        $db = \Config\Database::connect();

        $sql = "SELECT p.id, j.nama, p.value, p.tanggal FROM pengeluaran p JOIN jenis_pengeluaran j ON p.id_jenis = j.id ORDER BY p.tanggal DESC";

        $query = $db->query($sql);
        return $query->getResultArray();
    }

    public function savePengeluaran($data)
    {
        $this->save([
            'id_jenis'  => $data['id_jenis'],
            'value'  => $data['value'],
            'tanggal' => $data['date']
        ]);
    }
}