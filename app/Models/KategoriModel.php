<?php namespace App\Models;
use CodeIgniter\Model;

class KategoriModel extends Model{
    protected $table = "kategori";
    protected $allowedFields = ["id_kategori","id_user","slug_kategori","nama_kategori","urutan","hits","tanggal"];
    protected $primaryKey = "id_kategori";
    function _construct(){
        $this->db = db_connect();
    }
    public function cekKategori(){
        return $this->select("*")->findAll();
    }
    public function addKategori($data){
        return $this->db->table("kategori")->insert($data);
    }
    public function cekKategoriById($id_kategori){
        echo $id_kategori;
        return $this->select(["{$this->table}.*"])
        ->where("id_kategori = '$id_kategori'")->findAll();
    }
}