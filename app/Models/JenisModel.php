<?php namespace App\Models;
use CodeIgniter\Model;

class JenisModel extends Model{
    protected $table = "jenis_kategori";
    protected $allowedFields = ["id_jenis","id_kategori","slug_jenis","jenis_kategori","tanggal"];
    protected $primaryKey = "id_jenis";
    function _construct(){
        $this->db = db_connect();
    }
    public function cekJenis($id_kategori){
        return $this->select("*")->where("id_kategori",$id_kategori)->findAll();
    }
    public function addJenis($data){
        return $this->db->table("jenis_kategori")->insert($data);
    }
}