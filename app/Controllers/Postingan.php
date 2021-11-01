<?php

namespace App\Controllers;

date_default_timezone_set("Asia/Jakarta");

use App\Models\PostinganModels;
use App\Models\KategoriModel;
use App\Models\JenisModel;

class Postingan extends BaseController
{
    public function __construct(){
		$this->session = session();
	}
    public function viewTambahPostingan()
    {
        $model = new KategoriModel();
        $isiKategori = $model->cekKategori();
        $data = [
            "kategori" => $isiKategori,
            'title' => 'Tambah Posting',
            'active' => 'tambahPosting'
        ];
        return view("postingan/viewTambahPostingan", $data);
    }
    public function showJenis($id_kategori)
    {
        $jenismodel = new JenisModel();
        $isiJenis = $jenismodel->cekjenis($id_kategori);
        return json_encode($isiJenis);
    }
    // public function saveImage()
    // {
    //     $validated = $this->validate([
    //         'file' => [
    //             'uploaded[file]',
    //             'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
    //         ],
    //     ]);
    //     $msg = 'Please select a valid file';
    //     if ($validated) {
    //         $avatar = $this->request->getFile('file');
    //         $avatar->move('../public/uploads');
    //         $data = [
    //             'name' =>  $avatar->getClientName(),
    //             'type'  => $avatar->getClientMimeType()
    //         ];
    //         // $save = $builder->insert($data);
    //         // $msg = 'File has been uploaded';
    //         $lokasi = [
    //             "location" => '/uploads/' . $data["name"]
    //         ];
    //         return json_encode($lokasi);
    //     }else{
    //         $lokasi = [
    //             "location" => "error"
    //         ];
    //         return json_encode($lokasi);
    //     }
    // }
    public function tambahPostingans()
    {
        $judul = $this->request->getVar("judul");
        $thumbnail = $this->request->getFile("file");
        $kategori = $this->request->getVar("kategori");
        $jenis = $this->request->getVar("jenis");
        $ringkasan = $this->request->getVar("ringkasan");
        $isi = $this->request->getVar("isi");
        $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
            ],
        ]);
        if ($validated) {
            $data = [
                'name' =>  $thumbnail->getClientName(),
                'type'  => $thumbnail->getClientMimeType()
            ];
            $postinganModel = new PostinganModels();
            $id = $postinganModel->cekIdBerita() + 1;
            $data = [
                "id_berita" => "b" . $id,
                "id_user" => $this->session->get('id_akun'),
                "id_kategori" => $kategori,
                "slug_berita" => url_title($judul),
                "judul_berita" => $judul,
                "ringkasan" => $ringkasan,
                "isi" => $isi,
                "jenis_berita" => $jenis,
                "gambar" => "/uploads/" . $data['name'],
                "tanggal_post" => date("Y-m-d H:i:s"),
                "tanggal_publish" => "0000-00-00 00:00:00",
                "status" => "pending"
            ];
            $cek = $postinganModel->addPostingan($data);
            $error = $cek->connID->error;
            if ($error) {
                $this->session->setFlashdata('errsql', 'error sql');
                return redirect()->back();
                // print_r($error);
            } else {
                $thumbnail->move('../public/uploads');
                return redirect()->back();
                // echo "ke else";
            }
        } else {
            $this->session->setFlashdata('msgerr', 'Format gambar salah!');
            return redirect()->back()->withInput();
            // echo "hai";
        }
    }
    public function addKategori()
    {
        return View("addKategori");
    }
    // insert ke table kategori
    public function toKategori()
    {
        $judul = $this->request->getVar("kategori");
        $data = [
            "id_user" => $this->session->get("id_akun"),
            "slug_kategori" => url_title($judul),
            "nama_kategori" => $judul,
            "urutan" => "",
            "hits" => 0,
            "tanggal" => date("Y-m-d H:i:s")
        ];
        $model = new KategoriModel();
        $model->addKategori($data);
        return redirect()->back();
    }
    public function addJenisKategori()
    {
        $id_kategori = $this->request->getVar("kategori");
        $jenis = $this->request->getVar("jenis");
        $data = [
            "id_kategori" => $id_kategori,
            "slug_jenis" => url_title($jenis),
            "jenis_kategori" => $jenis,
            "tanggal" => date("Y-m-d H:i:s")
        ];
        $models = new JenisModel();
        $models->addJenis($data);
        return redirect()->back();
    }
    public function addJenis()
    {
        $model = new KategoriModel();
        $isiKategori = $model->cekKategori();
        $data = [
            "kategori" => $isiKategori
        ];
        return View("addJenis.php", $data);
    }
    public function viewArtikel(){
        $postinganModel = new PostinganModels();
        $data["postingan"] = $postinganModel->paginate(5,"postingan");
        $data["pager"] = $postinganModel->pager;
        return View("postingan/viewPostingan",$data);
    }
}
