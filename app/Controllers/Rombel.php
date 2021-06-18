<?php namespace App\Controllers;
use App\Models\{SiswaAktifModel, KelasModel, RombelModel};

class Rombel extends BaseController
{
	protected $KelasModel;
	protected $RombelModel;
	protected $SiswaAktifModel;

	public function __construct(){
		$this->RombelModel = new RombelModel();
		$this->SiswaAktifModel = new SiswaAktifModel();
		$this->KelasModel = new KelasModel();
		helper('form');
	}

	public function index()
	{

		// print_r($this->SiswaAktifModel->getSiswaAktifByKelas()); exit();
		$data=[
			'title'=>'Rombel',
			'isi'=> 'Rombel/v_table3',
			// 'isi'=> 'Rombel/v_tabel',
			// 'siswaaktif' => $this->SiswaAktifModel->getSiswaAktifByKelas(),
			// 'siswaaktif' => $this->SiswaAktifModel->getsiswaaktif(),
			'kelas' => $this->KelasModel->getKelas(),
		];

		// print_r($this->KelasModel->getKelas()); exit();

		echo view ('layout/v_wrapper',$data);
	}

	public function tampil(){
		$rombel = $this->request->getPost('rombel');
		$data=[
			'siswakelas' => $this->SiswaAktifModel->getSiswaAktifByKelas($rombel),
			// 'rombel' => $this->request->getPost('rombel')
		];

		echo view ('rombel/v_tampil', $data);
	}

	//--------------------------------------------------------------------

}
