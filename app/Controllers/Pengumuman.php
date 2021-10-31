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
            'active' => 'pengumuman'
        ];
        return view('superAdmin/pengumuman', $data);
    }
    //--------------------------------------------------------------------

}
