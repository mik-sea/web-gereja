<?php

namespace App\Controllers;

use App\Models\PostinganModels;
use App\Models\KategoriModel;
use App\Models\JenisModel;

class Postingan extends BaseController
{
    public function viewTambahPostingan(){
        $model = new KategoriModel();
        $isiKategori = $model->cekKategori();
        $data = [
            "kategori" => $isiKategori
        ];
        return view("postingan/viewTambahPostingan",$data);
    }
    public function showJenis($id_kategori){
        $jenismodel = new JenisModel();
        $isiJenis = $jenismodel->cekjenis($id_kategori);
        return json_encode($isiJenis);
    }
}