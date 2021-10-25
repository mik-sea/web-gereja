<?php namespace App\Models;
use CodeIgniter\Model;

class PostinganModels extends Model{
    protected $table = "postingan";
    protected $allowedFields = ["id_akun","nama_lengkap","username","password","foto_profil","email","tipe"];
    protected $primaryKey = "id_akun";
    function _construct(){
        $this->db = db_connect();
    }
}