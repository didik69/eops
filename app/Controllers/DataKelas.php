<?php namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\GuruModel;
use App\Models\kompetensikeahlianModel;

class DataKelas extends BaseController
{
	protected $KelasModel;
	protected $GuruModel;
	protected $kompetensikeahlianModel;

	public function __construct(){
		$this->KelasModel = new KelasModel();
		$this->GuruModel = new GuruModel();
		$this->GuruModel = new GuruModel();
		$this->kompetensikeahlianModel = new kompetensikeahlianModel();
		helper('form');
	}

	public function index()
	{
		$data=[
			'title'=>'Data Kelas',
			'isi'=> 'Datakelas/v_tabel',
			'kelas' => $this->KelasModel->getKelas(),
			'guru' => $this->GuruModel->getGuru(),
			'kompetensikeahlian' => $this->kompetensikeahlianModel->getJurusan()
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function tambah(){

		$slug = url_title($this->request->getPost('nama_kelas'), '-', TRUE);
		// print_r($slug); exit();

		$data= [
			'nama_kelas'=> $this->request->getPost('nama_kelas'),
			'slug'=> $slug,
			'id_guru'=> $this->request->getPost('id_guru'),
			'id_jurusan'=> $this->request->getPost('id_jurusan'),
			'tingkatan'=> $this->request->getPost('tingkatan'),	
		];

		// print_r($data);
		$this->KelasModel->add_data($data);
		session()->setFlashData('sukses','Data Berhasil Ditambahkan!!!');
		return redirect()->to(base_url('datakelas'));
	}

	public function edit($id_kelas){
		$data = [
			'title' => 'Edit Kelas',
			'isi' => 'datakelas/v_edit',
			'kelas' => $this->KelasModel->getKelasById($id_kelas),
			'guru' => $this->GuruModel->getGuru(),
			'kompetensikeahlian' => $this->kompetensikeahlianModel->getJurusan()
		];
		// print_r($data);
		echo view ('layout/v_wrapper', $data);
	}

	public function update($id_kelas){
		$slug = url_title($this->request->getPost('nama_kelas'), '-', TRUE);
		$data= [
			'nama_kelas'=> $this->request->getPost('nama_kelas'),
			'slug'=> $slug,
			'id_guru'=> $this->request->getPost('id_guru'),
			'id_jurusan'=> $this->request->getPost('id_jurusan'),
			'tingkatan'=> $this->request->getPost('tingkatan'),	
		];

		// print_r($data);

		$this->KelasModel->edit_data($data, $id_kelas);
		session()->setFlashData('sukses','Data Berhasil Diupdate!!!');
		return redirect()->to(base_url('datakelas/edit/'.$id_kelas));
	}

	public function delete($id){
		print_r($id);
	}

	//--------------------------------------------------------------------

}
