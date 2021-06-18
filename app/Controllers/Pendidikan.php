<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PendidikanModel;

class Pendidikan extends BaseController
{
	protected $PendidikanModel;

	public function __construct(){
		$this->PendidikanModel = new PendidikanModel();
		helper('form');
	}

	public function index()
	{
		$data=[
			'title'=>'Pendidikan',
			'isi'=> 'Guru/v_edit',
			'jurusan' => $this->PendidikanModel->getPendidikan(),
		];

		echo view ('layout/v_wrapper',$data);
	}
	public function tambah()
	{
		$id_guru = $this->request->getPost('id_guru');
		// print_r($id_guru); exit();
		$data= [
			'id_guru'=> $id_guru,
			'jenjang_pendidikan'=> $this->request->getPost('jenjang_pendidikan'),
			'bidang_studi'=> $this->request->getPost('bidang_studi'),
			'gelar_akademik'=> $this->request->getPost('gelar_akademik'),
			'satuan_pendidikan_formal'=> $this->request->getPost('satuan_pendidikan_formal'),
			'jurusan'=> $this->request->getPost('jurusan'),
			'tahun_masuk'=> $this->request->getPost('tahun_masuk'),
			'tahun_lulus'=> $this->request->getPost('tahun_lulus'),
		];

		$this->PendidikanModel->add_data($data);
		session()->setFlashData('sukses','Data Berhasil Ditambahkan!!!');
		return redirect()->to(base_url('Guru/edit/'.$id_guru));
	}

	public function edit($id_pendidikan)
	{

		$data=[
			'title'=>'Pendidikan Guru',
			'isi'=> 'Guru/v_edit_pendidikan',
			'pendidikan' => $this->PendidikanModel->getPendidikanById($id_pendidikan),
		];

		echo view ('layout/v_wrapper',$data);
	}
	
	public function update($id_pendidikan){
		$data = [
			'id_guru'=> $this->request->getpost('id_guru'),
			'jenjang_pendidikan'=> $this->request->getPost('jenjang_pendidikan'),
			'bidang_studi'=> $this->request->getPost('bidang_studi'),
			'gelar_akademik'=> $this->request->getPost('gelar_akademik'),
			'satuan_pendidikan_formal'=> $this->request->getPost('satuan_pendidikan_formal'),
			'jurusan'=> $this->request->getPost('jurusan'),
			'tahun_masuk'=> $this->request->getPost('tahun_masuk'),
			'tahun_lulus'=> $this->request->getPost('tahun_lulus'),
		];

		$this->PendidikanModel->edit_data($data, $id_pendidikan);
		session()->setFlashData('sukses','Data Berhasil Diupdate!!!');
		return redirect()->to(base_url('Guru/edit/'.$this->request->getpost('id_guru')));
	}

	public function delete($id_pendidikan){
		$id_guru = $this->PendidikanModel->getGuruByPendidikan($id_pendidikan);
		// print_r($id_guru->id_guru); exit();
		$this->PendidikanModel->delete_data($id_pendidikan);
		session()->setFlashData('sukses','Data Berhasil Dihapus!!!');
		return redirect()->to(base_url('Guru/edit/'.$id_guru->id_guru));
	}
}
	//--------------------------------------------------------------------
