<?php namespace App\Models;
use CodeIgniter\Model;

class PostinganModels extends Model{
    protected $table = "postingan";
    protected $allowedFields = ["id_berita","id_user","id_kategori","slug_berita","judul_berita","ringkasan","isi","jenis_berita","gambar","tanggal_post","tanggal_publish","status"];
    protected $primaryKey = "id_berita";
    function _construct(){
        $this->db = db_connect();
    }
    public function addPostingan($data){
        return $this->db->table("postingan")->insert($data);
    }
    public function cekIdBerita(){
        $query = $this->db->table("postingan")->countAll();
        return $query;
    }
}