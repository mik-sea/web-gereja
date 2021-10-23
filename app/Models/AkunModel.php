<?php namespace App\Models;
use CodeIgniter\Model;

class AkunModel extends Model{
    protected $table = "akun";
    protected $allowedFields = ["id_akun","nama_lengkap","username","password","foto_profil","email","tipe"];
    protected $primaryKey = "id_akun";
    function _construct(){
        $this->db = db_connect();
    }
    public function cekAkun($user,$password){
        $where = "username='$user' AND password='$password'";
        return $this->select("id_akun,nama_lengkap,username,password,foto_profil,email,tipe")->where($where)->first();
    }
}