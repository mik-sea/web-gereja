<?php

namespace App\Controllers;

class Pengumuman extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengumuman',
            'active' => 'pengumuman'
        ];
        return view('templateAdmin/pengumuman', $data);
    }
    //--------------------------------------------------------------------

}
