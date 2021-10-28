<?php

namespace App\Controllers;

class Tentang extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Hubungi Kami',
            'active' => 'kontak'
        ];
        return view('kontak/hubungiKami', $data);
    }
    //--------------------------------------------------------------------
    public function visiMisi()
    {
        $data = [
            'title' => 'Visi dan Misi',
            'active' => 'visi'
        ];
        return view('tentang/visiMisi', $data);
    }

    public function sejarah()
    {
        $data = [
            'title' => 'Sejarah Gereja ONKP Resort Jawa',
            'active' => 'sejarah'
        ];
        return view('tentang/sejarah', $data);
    }

    public function strukturMajelis()
    {
        $data = [
            'title' => 'Struktur Majelis Gereja ONKP Resort Jawa',
            'active' => 'struktur'
        ];
        return view('tentang/strukturMajelis', $data);
    }
}
