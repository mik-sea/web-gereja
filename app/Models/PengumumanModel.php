<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table      = 'pengumuman';
    protected $primaryKey = 'id';
    protected $allowedFields = [];

    public function savePengumuman($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function peng()
    {
        $query = $this->db->query("select p.judul, p.isi, p.link, p.jenis, p.gambar, a.nama_lengkap, p.status from pengumuman p inner join akun a on p.id_akun=a.id_akun")->getResultArray();
        return $query;
    }
}
