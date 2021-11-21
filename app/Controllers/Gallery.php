<?php

namespace App\Controllers;
use App\Models\PostinganModels;

class Gallery extends BaseController
{
    public function __construct(){
        $this->session = session();
    }
    public function viewAllGallery(){
        $postinganModel = new PostinganModels();
        $kategoriModel = new KategoriModel();
        $data["postingan"] = $postinganModel->getAllPostingan()["data"];
        $data["pager"] = $postinganModel->getAllPostingan()["pager"];
        $data["kategori"] = $kategoriModel->cekKategori();
        return view('gallery/viewGallery');
    }
    public function tambahGallery(){
        return view('gallery/tambahGallery');
    }
}