<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\DetilPemeliharaanModel;
use App\Models\JenisPemeliharaanModel;

class PemeliharaanModel extends Model
{
    protected $table = 'pemeliharaan_sapi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id', 'id_sapi', 'tanggal'];

    public function getAllPemeliharaanSapi($is_done)
    {
        $db = \Config\Database::connect();

        if ($is_done) {
            $sql = "SELECT * FROM ternak_sapi WHERE id IN (SELECT t.id FROM ternak_sapi t JOIN pemeliharaan_sapi p ON t.id = p.id_sapi WHERE p.tanggal = CURDATE()) AND sudah_dijual <> 1";
        } else {
            $sql = "SELECT * FROM ternak_sapi WHERE id NOT IN (SELECT t.id FROM ternak_sapi t JOIN pemeliharaan_sapi p ON t.id = p.id_sapi WHERE p.tanggal = CURDATE()) AND sudah_dijual <> 1";
        }

        $query = $db->query($sql);
        return $query->getResultArray();
    }

    public function getPemeliharaanSapi($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT dp.id, jp.nama_jenis, jp.tipe, dp.value, dp.deskripsi, p.tanggal  FROM detil_pemeliharaan_sapi dp JOIN pemeliharaan_sapi p ON dp.id_pemeliharaan = p.id JOIN ternak_sapi t ON p.id_sapi = t.id JOIN jenis_pemeliharaan_sapi jp ON dp.id_jenis = jp.id  WHERE t.id = :id: AND p.tanggal >= DATE(NOW()) - INTERVAL 7 DAY ORDER BY p.tanggal DESC";
        $query = $db->query($sql, ["id" => $id]);
        return $query->getResultArray();
    }

    public function insertPemeliharaan($id, $request)
    {
        $insert_id = $this->insert([
            'id_sapi' => $id,
            'tanggal' => $request->getPost("date")
        ]);
        // $insert_id = $this->getInsertID();

        $detil_pemeliharaan = new DetilPemeliharaanModel();
        $jenis_pemeliharaan = new JenisPemeliharaanModel();

        $jenis = $jenis_pemeliharaan->getAllJenis();

        $data = array();
        foreach ($jenis as $key => $value) {
            if ($value["tipe"] == "value") {
                $data[] = [
                    "id_jenis" => $value["id"],
                    "value" => $request->getPost($value["nama_jenis"])[0],
                    "deskripsi" => $request->getPost($value["nama_jenis"])[1],
                    "id_pemeliharaan" => $insert_id
                ];
            } else {
                $data[] = [
                    "id_jenis" => $value["id"],
                    "value" => $request->getPost($value["nama_jenis"]),
                    "id_pemeliharaan" => $insert_id
                ];
            }
        }

        foreach ($data as $key => $value) {
            $detil_pemeliharaan->insert($value);
        }
    }
}