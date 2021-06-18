<?php namespace App\Controllers;

use App\Models\SiswaAktifModel;
use App\Models\KompetensiKeahlianModel;
use App\Models\PrestasiModel;
use App\Models\BeasiswaModel;
use App\Models\KesejahteraanModel;
use App\Models\KelasModel;

use PHPExcel;
use PHPExcel_IOFactory;


class SiswaAktif extends BaseController
{	protected $SiswaAktifModel;
	protected $KompetensiKeahlianModel;
	protected $PrestasiModel;
	protected $BeasiswaModel;
	protected $KesejahteraanModel;
	protected $KelasModel;

	public function __construct(){
		$this->SiswaAktifModel = new SiswaAktifModel();
		$this->KompetensiKeahlianModel = new KompetensiKeahlianModel();
		$this->PrestasiModel = new PrestasiModel();
		$this->BeasiswaModel = new BeasiswaModel();
		$this->KesejahteraanModel = new KesejahteraanModel();
		$this->KelasModel = new KelasModel();
		helper('form');
	}
	
	public function index()
	{
		// print_r($this->SiswaAktifModel->getsiswaaktif()); exit();
		$data=[
			'title'=>'Siswa Aktif',
			'isi'=> 'SiswaAktif/v_tabel',
			'siswaaktif' => $this->SiswaAktifModel->getsiswaaktif(),
			'kelas' => $this->KelasModel->getKelas(),
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function detail($id_siswa){
		$data=[
			'title'=>'Siswa Aktif',
			'isi'=> 'SiswaAktif/v_detail',
			'siswa' => $this->SiswaAktifModel->getSiswaById($id_siswa),
			'kelas' => $this->KelasModel->getKelas(),
		];

		echo view ('layout/v_wrapper',$data);
	}

	public function tambah()
	{
		$data= [
			'nama'=> $this->request->getPost('nama'),
			'slug_kelas'=> $this->request->getPost('slug_kelas'),
			'nik_siswa'=> $this->request->getPost('nik_siswa'),
			'jk'=> $this->request->getPost('jk'),
			'tempatlahir_siswa'=> $this->request->getPost('tempatlahir_siswa'),
			'tgllahir_siswa'=> $this->request->getPost('tgllahir_siswa'),
			'nama_ibu'=> $this->request->getPost('nama_ibu'),
		];

		$this->SiswaAktifModel->add_data($data);
		session()->setFlashData('sukses','Data Berhasil Ditambahkan!!!');
		return redirect()->to(base_url('SiswaAktif'));
	}

	public function edit($id_siswa)
	{

	$data=[
		'title'=>'Siswa',
		'isi'=> 'SiswaAktif/v_edit',
		'siswa' => $this->SiswaAktifModel->getSiswaById($id_siswa),
		'prestasi' => $this->PrestasiModel->getPrestasiBySiswa($id_siswa),
		'kompetensi_keahlian' => $this->KompetensiKeahlianModel->getJurusan(),
		'beasiswa' => $this->BeasiswaModel->getBeasiswaBySiswa($id_siswa),
		'kesejahteraan' => $this->KesejahteraanModel->getKesejahteraanBySiswa($id_siswa),
		'kelas' => $this->KelasModel->getKelas(),
	];
	// var_dump($this->SiswaAktifModel->getSiswaById($id_siswa)); exit();

	echo view ('layout/v_wrapper',$data);
	}

	public function update($id_siswa){


		$data= [
			'id_siswa'=> $id_siswa,
			'nama'=> $this->request->getPost('nama'),
			'slug_kelas'=> $this->request->getPost('slug_kelas'),
			'jk'=> $this->request->getPost('jk'),
			'nisn'=> $this->request->getPost('nisn'),
			'no_kk'=> $this->request->getPost('no_kk'),
			'tempatlahir_siswa'=> $this->request->getPost('tempatlahir_siswa'),
			'tgllahir_siswa'=> $this->request->getPost('tgllahir_siswa'),
			'noakte_lahir'=> $this->request->getPost('noakte_lahir'),
			'agama'=> $this->request->getPost('agama'),
			'kewarganegaraan'=> $this->request->getPost('kewarganegaraan'),
			'berkebutuhankhusus_siswa'=> $this->request->getPost('berkebutuhankhusus_siswa'),
			'alamat_siswa'=> $this->request->getPost('alamat_siswa'),
			'rt'=> $this->request->getPost('rt'),
			'nohp'=> $this->request->getPost('nohp'),
			'rw'=> $this->request->getPost('rw'),
			'dusun'=> $this->request->getPost('dusun'),
			'desa'=> $this->request->getPost('desa'),
			'kec'=> $this->request->getPost('kec'),
			'kodepos'=> $this->request->getPost('kodepos'),
			'lintang'=> $this->request->getPost('lintang'),
			'bujur'=> $this->request->getPost('bujur'),
			'tempat_tinggal'=> $this->request->getPost('tempat_tinggal'),
			'moda_transportasi'=> $this->request->getPost('moda_transportasi'),
			'anak_berapa'=> $this->request->getPost('anak_berapa'),
			'punya_kip'=> $this->request->getPost('punya_kip'),
			'tetepmenerima_pip'=> $this->request->getPost('tetepmenerima_pip'),
			'menolak_pip'=> $this->request->getPost('menolak_pip'),
			'nama_ayah'=> $this->request->getPost('nama_ayah'),
			'nik_ayah'=> $this->request->getPost('nik_ayah'),
			'tahunlahir_ayah'=> $this->request->getPost('tahunlahir_ayah'),
			'pendidikan_ayah'=> $this->request->getPost('pendidikan_ayah'),
			'pekerjaan_ayah'=> $this->request->getPost('pekerjaan_ayah'),
			'penghasilan_ayah'=> $this->request->getPost('penghasilan_ayah'),
			'berkebutuhankhusus_ayah'=> $this->request->getPost('berkebutuhankhusus_ayah'),
			'nama_ibu'=> $this->request->getPost('nama_ibu'),
			'tahunlahir_ibu'=> $this->request->getPost('tahunlahir_ibu'),
			'pendidikan_ibu'=> $this->request->getPost('pendidikan_ibu'),
			'pekerjaan_ibu'=> $this->request->getPost('pekerjaan_ibu'),
			'penghasilan_ibu'=> $this->request->getPost('penghasilan_ibu'),
			'berkebutuhankhusus_ibu'=> $this->request->getPost('berkebutuhankhusus_ibu'),
			'nama_wali'=> $this->request->getPost('nama_wali'),
			'tahunlahir_wali'=> $this->request->getPost('tahunlahir_wali'),
			'pendidikan_wali'=> $this->request->getPost('pendidikan_wali'),
			'penghasilan_wali'=> $this->request->getPost('penghasilan_wali'),
			'tinggi_badan'=> $this->request->getPost('tinggi_badan'),
			'berat_badan'=> $this->request->getPost('berat_badan'),
			'lingkar_kepala'=> $this->request->getPost('lingkar_kepala'),
			'jarak'=> $this->request->getPost('jarak'),
			'sebutkan'=> $this->request->getPost('sebutkan'),
			'waktu_tempuh'=> $this->request->getPost('waktu_tempuh'),
			'jumlah_saudara'=> $this->request->getPost('jumlah_saudara'),
			'jenis_pendaftaran'=> $this->request->getPost('jenis_pendaftaran'),
			'no_induk'=>$this->request->getPost ('no_induk'),
			'tgl_masuksekolah'=> $this->request->getPost('tgl_masuksekolah'),
			'sekolah_asal'=> $this->request->getPost('sekolah_asal'),
			'tingkat_kelas'=> $this->request->getPost('tingkat_kelas'),
			'pernah_paud'=> $this->request->getPost('pernah_paud'),
			'pernahpaud_nonformal'=> $this->request->getPost('pernahpaud_nonformal'),
			'hobi'=> $this->request->getPost('hobi'),
			'cita'=> $this->request->getPost('cita'),
			'nopeserta_un'=> $this->request->getPost('nopeserta_un'),
			'no_ijazah'=> $this->request->getPost('no_ijazah'),
			'no_skhun'=> $this->request->getPost('no_skhun'),
			'keluar'=> $this->request->getPost('keluar'),
			'tgl_keluar'=> $this->request->getPost('tgl_keluar'),
			'alasan'=> $this->request->getPost('alasan'),
			'id_kompetensi_keahlian'=> $this->request->getPost('id_kompetensi_keahlian'),
		];

		$this->SiswaAktifModel->edit_data($data, $id_siswa);
		session()->setFlashData('sukses','Data Berhasil Diupdate!!!');
		return redirect()->to(base_url('SiswaAktif/edit/'.$id_siswa));
	}

	public function delete($id_siswa)
	{
		$this->SiswaAktifModel->delete_data($id_siswa);
		session()->setFlashData('sukses','Data Berhasil Di Hapus!!!');
		return redirect()->to(base_url('SiswaAktif'));
	}

	public function import(){
		$file = $this->request->getFile('file_excel');

		new PHPExcel;

		// mengambil lokasi temp file
		$filelocation = $file->getTempName();

		// baca file excel
		$objPHPExcel = PHPExcel_IOFactory::load($filelocation);

		// ambil sheet aktif
		$sheet = $objPHPExcel->getActiveSheet()->toArray(false, true, true ,true, true, true ,true, true, true ,true, true, true ,true, true, true ,true, true, true ,true, true, true ,true, true, true ,true, true, true ,true, true, true ,true, true, true);

		// melakukan perulangan untuk mengambil data
		foreach($sheet as $key => $data){
			// skip baris ke satu karena judul data
			if($key == 1){
				continue;
			}
			// skip jika ada data yang sama
			$nisn = $this->SiswaAktifModel->cek_data($data['E']);
			
			$data1 = [
				'nama'=> $data ['B'],
				'jk'=> $data ['D'],
				'nisn'=> $data ['E'],
				'nik_siswa'=> $data ['H'],
				'no_kk'=> $data ['BB'],
				'tempatlahir_siswa'=> $data ['F'],
				'tgllahir_siswa'=> $data ['G'],
				'noakte_lahir'=> $data ['AT'],
				'agama'=> $data ['I'],
				'kewarganegaraan'=> $data ['Q'],
				'berkebutuhankhusus_siswa'=> $data ['AW'],
				'alamat_siswa'=> $data ['J'],
				'rt'=> $data ['K'],
				'nohp'=> $data ['T'],
				'rw'=> $data ['L'],
				'dusun'=> $data ['M'],
				'desa'=> $data ['N'],
				'kec'=> $data ['O'],
				'kodepos'=> $data ['P'],
				'lintang'=> $data ['AZ'],
				'bujur'=> $data ['BA'],
				'tempat_tinggal'=> $data ['R'],
				'moda_transportasi'=> $data ['S'],
				'anak_berapa'=> $data ['AY'],
				'punya_kip'=> $data ['AS'],
				'tetepmenerima_pip'=> $data ['AU'],
				'menolak_pip'=> $data ['AV'],
				'nama_ayah'=> $data ['V'] ,
				'nik_ayah'=> $data ['AA'],
				'tahunlahir_ayah'=> $data ['W'],
				'pendidikan_ayah'=> $data ['X'],
				'pekerjaan_ayah'=> $data ['Y'],
				'penghasilan_ayah'=> $data ['Z'],
				'berkebutuhankhusus_ayah'=> $data ['AB'],
				'nama_ibu'=> $data ['AC'],
				'tahunlahir_ibu'=> $data ['AD'],
				'pendidikan_ibu'=> $data ['AE'],
				'pekerjaan_ibu'=> $data ['AF'],
				'penghasilan_ibu'=> $data ['AG'],
				'berkebutuhankhusus_ibu'=> $data ['AI'],
				'nama_wali'=> $data ['AJ'],
				'tahunlahir_wali'=> $data ['AK'],
				'pendidikan_wali'=> $data ['AL'],
				'penghasilan_wali'=> $data ['AN'],
				'tinggi_badan'=> $data ['BD'],
				'berat_badan'=> $data ['BC'] ,
				'lingkar_kepala'=> $data ['BE'],
				'jarak'=> $data ['BG'],
				'sebutkan'=> $data ['BH'],
				'waktu_tempuh'=> $data ['BI'],
				'jumlah_saudara'=> $data ['BF'],
				'jenis_pendaftaran'=> $data ['BJ'],
				'no_induk'=> $data ['C'],
				'tgl_masuksekolah'=> $data ['BK'],
				'sekolah_asal'=> $data ['AX'],
				'slug_kelas'=> $data ['AP'],
				'nopeserta_un'=> $data ['AQ'],
				'no_ijazah'=> $data ['AR'],
				'no_skhun'=> $data ['U']
			];

			if(!empty($nisn['nisn'])){
				if($data['E'] == $nisn['nisn']){
					$this->SiswaAktifModel->update_data_import($data1, $nisn['nisn']);
					// echo "update";
				}
			} else{
				$this->SiswaAktifModel->add_data($data1);	
				// echo "add";	
			}

			// print_r($nisn); 
		}
		// exit();
		session()->setFlashdata('pesan', 'Data Berhasil Diimport!');
		return redirect()->to(base_url('siswaaktif'));
	}

}