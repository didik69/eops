<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\GuruModel;
use App\Models\PendidikanModel;
use CodeIgniter\HTTP\Request;

class Guru extends BaseController
{
	protected $GuruModel;
	protected $PendidikanModel;

	public function __construct(){
		$this->GuruModel = new GuruModel();
		$this->PendidikanModel = new PendidikanModel();
		helper('form');
	}




	public function index()
	{
		$data=[
			'title'=>'Guru',
			'isi'=> 'guru/v_tabel',
			'guru' => $this->GuruModel->getGuru(),
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function detail($id_guru)
	{
		$data=[

			'title'=>'Guru detail',
			'isi'=>'guru/v_detail',
			'guru' => $this->GuruModel->getGuruBy_id($id_guru),
			'pendidikan' => $this->PendidikanModel->getPendidikanByGuru($id_guru),
		];
		echo view ('layout/v_wrapper',$data);
	}



	public function tambah()
	{
		$data= [
			'nuptk'=> $this->request->getPost('nuptk'),
			'nik'=> $this->request->getPost('nik'),
			'nama_lengkap'=> $this->request->getPost('nama_lengkap'),
			'tanggal_lahir'=> $this->request->getPost('tanggal_lahir'),
			'tempat_lahir'=> $this->request->getPost('tempat_lahir'),
	
		];

		$this->GuruModel->add_data($data);
		session()->setFlashData('sukses','Data Berhasil Ditambahkan!!!');
		return redirect()->to(base_url('Guru'));
	}

	public function edit($id_guru)
	{

		$data=[
			'title'=>'Guru',
			'isi'=> 'guru/v_edit',
			'guru' => $this->GuruModel->getGuruBy_id($id_guru),
			'pendidikan' => $this->PendidikanModel->getPendidikanByGuru($id_guru),
		];
		// print_r($this->PendidikanModel->getPendidikanByGuru($id_guru)); exit();

		echo view ('layout/v_wrapper',$data);
	}

	public function update($id_guru){
		$data = [
			'nama_lengkap' => $this->request->getPost('nama_lengkap'),
			'tempat_lahir' => $this->request->getPost('tempat_lahir'),
			'nik' => $this->request->getPost('nik'),
			'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'ibu_kandung' => $this->request->getPost('ibu_kandung'),
			'alamat_jalan' => $this->request->getPost('alamat_jalan'),
			'agama' => $this->request->getPost('agama'),
			'rt' => $this->request->getPost('rt'),
			'npwp' => $this->request->getPost('npwp'),
			'rw' => $this->request->getPost('rw'),
			'nama_pajak' => $this->request->getPost('nama_pajak'),
			'dusun' => $this->request->getPost('dusun'),
			'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
			'desa' => $this->request->getPost('desa'),
			'status_perkawinan' => $this->request->getPost('status_perkawinan'),
			'kecamatan' => $this->request->getPost('kecamatan'),
			'nama_suami_istri' => $this->request->getPost('nama_suami_istri'),
			'kode_pos' => $this->request->getPost('kode_pos'),
			'pekerjaan_suami_istri' => $this->request->getPost('pekerjaan_suami_istri'),
			'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
			'sk_pengangkatan' => $this->request->getPost('sk_pengangkatan'),
			'niy' => $this->request->getPost('niy'),
			'tmt_pengangkatan' => $this->request->getPost('tmt_pengangkatan'),
			'nuptk' => $this->request->getPost('nuptk'),
			'lembaga_pengangkat' => $this->request->getPost('lembaga_pengangkat'),
			'jenis_ptk' => $this->request->getPost('jenis_ptk'),
			'pangkat' => $this->request->getPost('pangkat'),
			'no_surat_tugas' => $this->request->getPost('no_surat_tugas'),
			'status' => $this->request->getPost('status'),
			'tgl_surat_tugas' => $this->request->getPost('tgl_surat_tugas'),
			'keluar' => $this->request->getPost('keluar'),
			'tmt_tugas' => $this->request->getPost('tmt_tugas'),
			'tgl_keluar' => $this->request->getPost('tgl_keluar'),
			'no_hp' => $this->request->getPost('no_hp'),
			'username' => $this->request->getPost('username'),
			'email' => $this->request->getPost('email'),
			'pasword' => $this->request->getPost('pasword'),
			'jabatan_ptk' => $this->request->getPost('jabatan_ptk'),
			'no_sk_tambahan' => $this->request->getPost('no_sk_tambahan'),
			'tmt_tugas_tambahan' => $this->request->getPost('tmt_tugas_tambahan'),
			'tst_tugas_tambahan' => $this->request->getPost('tst_tugas_tambahan'),
			'jenis_sertifikasi' => $this->request->getPost('jenis_sertifikasi'),
			'nomor_sertifikasi' => $this->request->getPost('nomor_sertifikasi'),
			'tahun_sertifikasi' => $this->request->getPost('tahun_sertifikasi'),
			'bidang_studi' => $this->request->getPost('bidang_studi'),
			'nrg' => $this->request->getPost('nrg'),
			'nopes' => $this->request->getPost('nopes'),
			

		];

		$this->GuruModel->edit_data($data, $id_guru);
		session()->setFlashData('sukses','Data Berhasil Diupdate!!!');
		return redirect()->to(base_url('Guru/edit/'.$id_guru));

		// print_r($data); exit();
	}

	public function delete($id_guru)
	{
		$this->GuruModel->delete_data($id_guru);
		session()->setFlashData('sukses','Data Berhasil Di Hapus!!!');
		return redirect()->to(base_url('Guru'));
	}
	//--------------------------------------------------------------------

}
