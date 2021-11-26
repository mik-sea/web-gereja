<?php namespace App\Models;
use CodeIgniter\Model;
date_default_timezone_set("Asia/Jakarta");
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
    public function getPostingan(){
        $query = $this->db->table("postingan")->findAll();
        return $query;
    }
    public function getAllPostingan($tab = ""){
        if($tab == "gallery"){
            $this->builder()
                ->select(["{$this->table}.*", 'akun.username'])
                ->join('akun', "{$this->table}.id_user = akun.id_akun")
                ->where("status='publish'");
            return [
                "data"=> $this->paginate(5,"postingan"),
                "pager"=> $this->pager,
            ];
        }else{
            $this->builder()
                ->select(["{$this->table}.*", 'akun.username'])
                ->join('akun', "{$this->table}.id_user = akun.id_akun")
                ->where("status='publish'");
            // $this->db->query("select p.* a.username from postingan p inner join akun a on p.id_user=a.id_akun")->getResult();
            return [
                "data"=> $this->paginate(5,"postingan"),
                "pager"=> $this->pager,
            ];
        }
    }
    public function getAllPostinganById($id_berita,$tipe){
        if($tipe == "superadmin"){
            return $this->select(["{$this->table}.*", 'akun.username','akun.foto_profil'])
            ->join('akun', "{$this->table}.id_user = akun.id_akun")
            ->where("id_berita = '$id_berita'")->find();
        }else{
            return $this->select(["{$this->table}.*", 'akun.username','akun.foto_profil'])
            ->join('akun', "{$this->table}.id_user = akun.id_akun")
            ->where("id_berita = '$id_berita' and status = 'publish'")->find();
        }
    }
    public function getAllWithKategori(){
        return $this->select(["{$this->table}.*", 'kategori.nama_kategori'])
        ->join('kategori', "{$this->table}.id_kategori = kategori.id_kategori")->find();
    }
    public function getPostinganJustId($id_berita){
        return $this->select(["{$this->table}.*", 'kategori.id_kategori'])
        ->join('kategori', "{$this->table}.id_kategori = kategori.id_kategori")
        ->where("id_berita = '$id_berita'")->find();
    }
    public function updatePostingan($data,$id){
        $query = $this->db->table("postingan")->update($data, array('id_berita' => $id));
        // print_r($query);
        return $query;
    }
    public function updateStatus($id){
        $query = $this->db->table($this->table)->update(array('tanggal_publish'=>date("Y-m-d H:i:s"),'status'=>'publish'), array('id_berita' => $id));
        return $query;
    }
    public function deletePostingan($id){
        return $this->db->table("postingan")->where('id_berita', $id)->delete();
    }
}