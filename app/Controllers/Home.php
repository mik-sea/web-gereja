<?php

namespace App\Controllers;

use App\Models\AkunModel;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'GEREJA ONKP RESORT JAWA'
		];
		return view('index', $data);
	}
	public function prevLoginAdmin()
	{
		return view("login.php");
	}
	public function loginAdmin()
	{
		$session = session();
		$username = $this->request->getVar("username");
		$password = sha1($this->request->getVar("password"));
		$AkunModel = new AkunModel();
		$data = $AkunModel->cekAkun($username, $password);
		if ($data) {
			$ses_data = [
				'id_akun' => $data["id_akun"],
				'nama_lengkap' => $data["nama_lengkap"],
				"username" => $data["username"],
				"password" => $data["password"],
				"foto_profil" => $data["foto_profil"],
				"email" => $data["email"],
				"tipe" => $data["tipe"]
			];
			// setting session agar session dapat dipanggil di file manapun
			$session->set($ses_data);
			return redirect()->to('/dashboardAdmin');
		}
	}
	public function dashboardAdmin()
	{
		print_r(session()->get("tipe"));
	}
	//--------------------------------------------------------------------

}
