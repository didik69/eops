<?php namespace App\Controllers;
use App\Models\{KelasModel, GuruModel, SiswaAktifModel, SekolahModel};

class Home extends BaseController

{
	protected $KelasModel;
	protected $GuruModel;
	protected $SiswaAktifModel;
	protected $SekolahModel;

	public function __construct(){
		$this->KelasModel = new KelasModel();
		$this->GuruModel = new GuruModel();
		$this->SiswaAktifModel = new SiswaAktifModel();
		$this->SekolahModel = new SekolahModel();
		helper('form');
	}


	public function index()
	{
		$data=[
			'title'=>'Dashboard',
			'isi'=> 'v_home',
			'siswa' => $this->SiswaAktifModel->getSiswaaktif(),
			'guru' => $this->GuruModel->getGuru(),
			'kelas' => $this->KelasModel->getKelas(),
			'sekolah' => $this->SekolahModel->getDataSekolahBy_id()
		];

		echo view ('layout/v_wrapper',$data);
	}

	


	





	//--------------------------------------------------------------------

}
