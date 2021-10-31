<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table      = 'pengumumana';
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
}
