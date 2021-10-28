<?php

namespace App\Controllers;

class Tes extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Hubungi Kami',
            'active' => 'kontak'
        ];
        return view('templateAdmin/tema', $data);
    }
    //--------------------------------------------------------------------

}
