<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\KompetensiKeahlianModel;

class KompetensiKeahlian extends BaseController
{
	protected $KompetensiKeahlianModel;

	public function __construct(){
		$this->KompetensiKeahlianModel = new KompetensiKeahlianModel();
		helper('form');
	}

	public function index()
	{
		$data=[
			'title'=>'Kompetensi Keahlian',
			'isi'=> 'kompetensikeahlian/v_tabel',
			'jurusan' => $this->KompetensiKeahlianModel->getJurusan(),
		];

		echo view ('layout/v_wrapper',$data);
	}
	public function tambah()
	{
		$data= [
			'kode_jurusan'=> $this->request->getPost('kode_jurusan'),
			'bidang_keahlian'=> $this->request->getPost('bidang_keahlian'),
			'program_keahlian'=> $this->request->getPost('program_keahlian'),
			'kompetensi_keahlian'=> $this->request->getPost('kompetensi_keahlian'),
		];

		$this->KompetensiKeahlianModel->add_data($data);
		session()->setFlashData('sukses','Data Berhasil Ditambahkan!!!');
		return redirect()->to(base_url('KompetensiKeahlian'));
	}
	public function edit($id_jurusan)
	{
		$data= [
			'kode_jurusan'=> $this->request->getPost('kode_jurusan'),
			'bidang_keahlian'=> $this->request->getPost('bidang_keahlian'),
			'program_keahlian'=> $this->request->getPost('program_keahlian'),
			'kompetensi_keahlian'=> $this->request->getPost('kompetensi_keahlian'),
		];

		$this->KompetensiKeahlianModel->edit_data($data,$id_jurusan);
		session()->setFlashData('sukses','Data Berhasil Di Update!!!');
		return redirect()->to(base_url('KompetensiKeahlian'));
	}
	public function delete($id_jurusan)
	{
		$this->KompetensiKeahlianModel->delete_data($id_jurusan);
		session()->setFlashData('sukses','Data Berhasil Di Hapus!!!');
		return redirect()->to(base_url('KompetensiKeahlian'));
	}
}
	//--------------------------------------------------------------------
