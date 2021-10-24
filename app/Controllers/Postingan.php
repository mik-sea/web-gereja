<?php

namespace App\Controllers;

use App\Models\PostinganModels;

class Postingan extends BaseController
{
    public function viewTambahPostingan(){
        return view("postingan/viewTambahPostingan");
    }
}