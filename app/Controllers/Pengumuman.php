<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
    protected $pengumuman;
    public function __construct()
    {
        $this->pengumuman = new PengumumanModel();
    }

    public function index()
    {
        $peng = $this->pengumuman->peng();

        $data = [
            'title' => 'Pengumuman',
            'peng' => $peng,
            'active' => 'pengumuman',
            'validasi' => \Config\Services::validation(),
        ];
        return view('superAdmin/pengumuman', $data);
    }
    //--------------------------------------------------------------------
    public function save()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]|ext_in[gambar,png,jpg,gif]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar, Max 1024Kb',
                    'ext_in' => 'Format gambar tidak sesuai'
                ]
            ]
        ])) {
            return redirect()->to(base_url('pengumuman/tambahPengumuman'))->withInput();
        }


        if (!empty($_FILES['gambar']['name'])) {
            // Image upload
            $avatar      = $this->request->getFile('gambar');
            $namabaru     = str_replace(' ', '-', $avatar->getName());
            $avatar->move(WRITEPATH . '../public/templateAdmin/assets/img/pengumuman/', $namabaru);

            // masuk database
            $today = date("Y-m-d H:i:s");
            $data = array(

                'judul' => $this->request->getVar('judul'),
                'isi' => $this->request->getVar('isi'),

                'link'        => $this->request->getVar('link'),
                'jenis'                => $this->request->getVar('jenis'),
                'gambar'             => $namabaru,
                'id_akun'                => $this->request->getVar('id_akun'),
                'status'             => $this->request->getVar('status'),
                'created_at' => $today,
                'updated_at' => $today,


            );
            $this->pengumuman->savePengumuman($data);
            session()->setFlashdata('pengBerhasil', 'Berhasil Menyimpan Pengumuman');
            return redirect()->to(base_url('pengumuman'));
        }
    }

    public function delete($id)
    {

        $this->pengumuman->delete(base64_decode($id));
        session()->setFlashdata('pengHapus', 'Data telah dihapus');
        return redirect()->to(base_url('pengumuman'));
    }

    public function update($id)
    {
        $data = [
            'title' => 'Update Pengumuman',
            'idpeng' => $this->pengumuman->getPengumuman($id)->getRow(),
            'active' => 'pengumuman',
            'validasi' => \Config\Services::validation(),
        ];
        return view('superAdmin/editPengumuman', $data);
    }

    public function tambahPengumuman()
    {
        $data = [
            'title' => 'Tambah Pengumuman',
            'active' => 'pengumuman',
            'validasi' => \Config\Services::validation(),
        ];
        return view('superAdmin/tambahPengumuman', $data);
    }

    public function edit()
    {
        $today = date("Y-m-d H:i:s");
        if (!$this->validate([
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|ext_in[gambar,png,jpg,gif]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar, Max 1024Kb',
                    'ext_in' => 'Format gambar tidak sesuai'
                ]
            ]

        ])) {
            return redirect()->to(base_url('pengumuman/update'))->withInput();
        }


        if (!empty($_FILES['gambar']['name'])) {
            // Image upload
            $avatar      = $this->request->getFile('gambar');
            $namabaru     = str_replace(' ', '-', $avatar->getName());
            $avatar->move(WRITEPATH . '../public/templateAdmin/assets/img/pengumuman/', $namabaru);
        } else {
            $namabaru = '';
        }

        if ($namabaru == '') {
            $namabaru = $this->request->getPost('old');
        }
        $id = $this->request->getPost('id');
        $data = array(
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'status' => $this->request->getPost('status'),
            'jenis' => $this->request->getPost('jenis'),
            'link' => $this->request->getPost('link'),
            'id_akun' => $this->request->getPost('id_akun'),
            'gambar' => $namabaru,
            'updated_at' => $today,

        );
        $this->pengumuman->updatePengumuman($data, $id);
        session()->setFlashdata('pengEdit', 'Data telah diedit');
        return redirect()->to(base_url('pengumuman'));
    }
}
