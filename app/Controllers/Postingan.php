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
    public function viewPostingan()
    {
        $model = new postinganModels();
        $postingan = $model->getAllWithKategori();
        // print_r($postingan);
        $data = [
            "postingan" => $postingan,
            'title' => 'Postingan',
            'active' => 'postingan'
        ];
        return view("superAdmin/postingan", $data);
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
        $kategoriModel = new KategoriModel();
        $data["postingan"] = $postinganModel->getAllPostingan()["data"];
        $data["pager"] = $postinganModel->getAllPostingan()["pager"];
        $data["kategori"] = $kategoriModel->cekKategori();

        return View("postingan/viewPostingan",$data);
    }
    public function viewArtikels($id_berita){
        $tipe = $this->session->get("tipe");
        $postinganModel = new PostinganModels();
        $kategoriModel = new KategoriModel();
        if($tipe == "superadmin"){
            $data["artikel"] = $postinganModel->getAllPostinganById($id_berita,$tipe)[0];
            $data["kategori"] = $kategoriModel->cekKategori();
            $data["kategoriById"] = $kategoriModel->cekKategoriById($data["artikel"]["id_kategori"])[0];
            // print_r($data["artikel"]);
            return View("postingan/viewPostinganSingle",$data);
        }else{
            $data["artikel"] = $postinganModel->getAllPostinganById($id_berita,"")[0];
            $data["kategori"] = $kategoriModel->cekKategori();
            $data["kategoriById"] = $kategoriModel->cekKategoriById($data["artikel"]["id_kategori"])[0];
            // print_r($data["artikel"]);
            return View("postingan/viewPostinganSingle",$data);
        }
    }
    public function viewPostinganUpdate($id){
        $postinganModel = new PostinganModels();
        $model = new KategoriModel();
        $isiKategori = $model->cekKategori();
        $data["res"] = $postinganModel->getPostinganJustId($id)[0];
        $data["kategori"] = $isiKategori;
        return View("superAdmin/editPostingan",$data);
    }
    public function postinganUpdate()
    {
        $id = $this->request->getVar("id");
        $judul = $this->request->getVar("judul");
        $thumbnail = $this->request->getFile("file");
        $old_thumbnail = $this->request->getVar("old");
        $kategori = $this->request->getVar("kategori");
        $jenis = $this->request->getVar("jenis");
        $ringkasan = $this->request->getVar("ringkasan");
        $isi = $this->request->getVar("isi");
        $postinganModel = new PostinganModels();
        $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
            ],
        ]);
        if ($validated) {
            if($thumbnail){
                $thumbnail->move('../public/uploads');
                $data = [
                    'name' =>  "/uploads/".$thumbnail->getClientName(),
                    'type'  => $thumbnail->getClientMimeType()
                ];
            }else{
                $dataImage = $old_thumbnail;
            }
            $data = [
                "id_berita" => $id,
                "id_user" => $this->session->get('id_akun'),
                "id_kategori" => $kategori,
                "slug_berita" => url_title($judul),
                "judul_berita" => $judul,
                "ringkasan" => $ringkasan,
                "isi" => $isi,
                "jenis_berita" => $jenis,
                "gambar" => $data['name']?$data['name']:$dataImage,
            ];
            $cek = $postinganModel->updatePostingan($data,$id);
            $error = $cek->connID->error;
            if ($error) {
                $this->session->setFlashdata('errsql', 'error sql');
                return redirect()->back();
                // print_r($error);
            } else {
                return redirect()->to("/postingan");
                // echo "ke else";
            }
        } else {
            if($thumbnail != ""){
                $thumbnail->move('../public/uploads');
                $data = [
                    'name' =>  "/uploads/".$thumbnail->getClientName(),
                    'type'  => $thumbnail->getClientMimeType()
                ];
            }else{
                $dataImage = $old_thumbnail;
            }
            $data =array (
                "id_berita" => $id,
                "id_user" => $this->session->get('id_akun'),
                "id_kategori" => $kategori,
                "slug_berita" => url_title($judul),
                "judul_berita" => $judul,
                "ringkasan" => $ringkasan,
                "isi" => $isi,
                "jenis_berita" => $jenis,
                "gambar" => $data['name']?$data['name']:$dataImage,
            );
            $cek = $postinganModel->updatePostingan($data,$this->request->getVar("id"));
            $error = $cek->connID->error;
            if ($error) {
                $this->session->setFlashdata('errsql', 'error sql');
                return redirect()->back();
                // print_r($error);
            } else {
                return redirect()->to("/postingan");
                // echo "ke else";
            }
            // $this->session->setFlashdata('msgerr', 'Format gambar salah!');
            // return redirect()->back()->withInput();
            // echo "hai";
        }
    }
    public function postinganUpdateStatus($id_berita){
        $postinganModel = new PostinganModels();
        $postinganModel->updateStatus($id_berita);
        return redirect()->to('/postingan');
    }
    public function deletePostingans($id_berita){
        $postinganModel = new PostinganModels();
        $postinganModel->deletePostingan($id_berita);
        return redirect()->to('/postingan');
    }
}
