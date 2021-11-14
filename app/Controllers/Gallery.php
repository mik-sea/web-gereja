<?php

namespace App\Controllers;


class Gallery extends BaseController
{
    public function __construct(){
        $this->session = session();
    }
    public function viewAllGallery(){
        return view('gallery/viewGallery');
    }
}