<?php

namespace App\Controllers;

use App\Models\PostinganModels;
use App\Models\KategoriModel;
use App\Models\JenisModel;

class Postingan extends BaseController
{
    public function viewTambahPostingan(){
        $model = new KategoriModel();
        $jenismodel = new JenisModel();
        $isiKategori = $model->cekKategori();
        $isiJenis = $jenismodel->cekjenis();
        $data = [
            "kategori" => $isiKategori,
            "jenis" => $isiJenis
        ];
        return view("postingan/viewTambahPostingan",$data);
    }
}