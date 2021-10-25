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
        return $this->select([$allowedFields])->findAll();
    }
}