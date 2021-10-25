<?php namespace App\Models;
use CodeIgniter\Model;

class JenisModel extends Model{
    protected $table = "jenis_kategori";
    protected $allowedFields = ["id_jenis","id_kategori","slug_jenis","jenis_kategori","tanggal"];
    protected $primaryKey = "id_jenis";
    function _construct(){
        $this->db = db_connect();
    }
    public function cekJenis(){
        return $this->select([$allowedFields])->findAll();
    }
}