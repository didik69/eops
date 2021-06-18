<?php namespace App\Controllers;
use App\Models\{SekolahModel};

class DataSekolah extends BaseController
{
	protected $SekolahModel;

	public function __construct(){
		$this->SekolahModel = new SekolahModel();
		helper('form');
	}

	public function index()
	{
		$data=[
			'title'=>'Data Sekolah',
			'isi'=> 'DataSekolah/v_form',
			'sekolah' => $this->SekolahModel->getDataSekolahBy_id()
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function update($id){

		
		$data= [
			'nama_sekolah'=> $this->request->getPost('nama_sekolah'),
			'npsn'=> $this->request->getPost('npsn'),
			'alamat_sekolah'=> $this->request->getPost('alamat_sekolah'),
			'no_tlpn'=> $this->request->getPost('no_tlpn'),	
			'email_sekolah'=> $this->request->getPost('email_sekolah'),	
			'tingkat_pendidikan'=> $this->request->getPost('tingkat_pendidikan'),	
			'nama_kepsek'=> $this->request->getPost('nama_kepsek'),	
			'no_tlp_kepsek'=> $this->request->getPost('no_tlp_kepsek'),	
			'logo'=> $this->request->getPost('logo'),	
		];

		// print_r($data);

		$this->SekolahModel->edit_data($data, $id);
		session()->setFlashData('sukses','Data Berhasil Diupdate!!!');
		return redirect()->to(base_url('datasekolah'));
	}

	//--------------------------------------------------------------------

}
