<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\TernakModel;

class PemasukanModel extends Model
{
    protected $table = 'pemasukan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id', 'id_sapi', 'harga_jual', 'berat_jual', 'tanggal_jual'];

    public function getAllPemasukan()
    {
        $db = \Config\Database::connect();

        $sql = "SELECT p.id,
        tp.kode_sapi,
        (SELECT SUM(value) FROM detil_pemeliharaan_sapi dps JOIN jenis_pemeliharaan_sapi jps ON dps.id_jenis = jps.id WHERE jps.tipe = 'value' AND dps.id_pemeliharaan IN (SELECT ps.id FROM pemeliharaan_sapi ps WHERE ps.id_sapi = tp.id)) AS pengeluaran,
        p.harga_jual,
        p.berat_jual,
        p.tanggal_jual
        FROM pemasukan p JOIN ternak_sapi tp ON p.id_sapi = tp.id";

        $query = $db->query($sql);
        return $query->getResultArray();
    }

    public function savePemasukan($data)
    {
        $ternak_model = new TernakModel();

        $ternak_model->update($data['id_sapi'], ['sudah_dijual' => 1]);

        // var_dump($data['tanggal_jual']);
        $this->save([
            'id_sapi' => $data['id_sapi'],
            'harga_jual' => $data['harga_jual'],
            'tanggal_jual' => $data['date'],
            'berat_jual' => $data['berat_jual']
        ]);
    }
}