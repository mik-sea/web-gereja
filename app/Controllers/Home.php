<?php

namespace App\Controllers;

use App\Models\AkunModel;

class Home extends BaseController
{
	public function __construct(){
		$this->session = session();
	}
	public function index()
	{
		$data = [
			'title' => 'GEREJA ONKP RESORT JAWA',
			'active' => 'home'
		];
		return view('index', $data);
	}
	public function prevLoginAdmin()
	{
		return view("loginAdmin.php");
	}
	public function loginAdmin()
	{
		// $session = session();
		$username = $this->request->getVar("username");
		$password = sha1($this->request->getVar("password"));
		$AkunModel = new AkunModel();
		$data = $AkunModel->cekAkun($username, $password);
		if ($data) {
			$ses_data = [
				'id_akun' => $data["id_akun"],
				'nama_lengkap' => $data["nama_lengkap"],
				"username" => $data["username"],
				"foto_profil" => $data["foto_profil"],
				"email" => $data["email"],
				"tipe" => $data["tipe"],
			];
			// setting session agar session dapat dipanggil di file manapun
			$this->session->set($ses_data);
			return redirect()->to('/dashboardAdmin');
		} else {
			$this->session->setFlashdata('msgerr', 'Username / Password Salah');
			return redirect()->to('/admin');
		}
	}
	public function dashboardAdmin()
	{
		// $session = session();
		if ($this->session->get("tipe") == "superadmin") {
			$AkunModel = new AkunModel();
			$data = $AkunModel->cek_sesi($this->session->get("id_akun"));
			if ($data) {
				$ses_data = [
					'id_akun' => $data["id_akun"],
					'nama_lengkap' => $data["nama_lengkap"],
					"username" => $data["username"],
					"foto_profil" => $data["foto_profil"],
					"email" => $data["email"],
					"tipe" => $data["tipe"]
				];
			} else {
				$this->session->destroy();
				return redirect()->to('/admin');
			}
			// setting session agar session dapat dipanggil di file manapun
			$this->session->set($ses_data);
			$ambil = [
				'title' => 'Admin ONKP Resort Jawa',
				'active' => 'dashboardAdmin'
			];
			return view("indexAdmin.php", $ambil);
		} else if ($this->session->get("tipe") == "admin") {
			echo "tampilan admin";
		} else if ($this->session->get("tipe") == "user") {
			echo "tampilan user";
		} else {
			// echo "session abis";
			return redirect()->to('/admin');
		}
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to("/");
	}
	//--------------------------------------------------------------------

}
